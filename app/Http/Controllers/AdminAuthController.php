<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class AdminAuthController extends Controller
{
    // Fallback default (used only until the `admins` table is created)
    private string $defaultEmail = 'salman@gmail.com';
    private string $defaultPassword = 'salman123';

    public function showLogin(Request $request)
    {
        if ($request->session()->get('admin_logged_in')) {
            return redirect()->route('admin.programs.index');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // If the admins table isn't set up yet, use the built-in default.
        if (! Schema::hasTable('admins')) {
            if ($data['email'] === $this->defaultEmail && $data['password'] === $this->defaultPassword) {
                $request->session()->put('admin_logged_in', true);
                $request->session()->put('admin_email', $data['email']);
                return redirect()->route('admin.programs.index');
            }
            return back()->withInput()->with('error', 'Invalid email or password.');
        }

        // Seed the default admin the first time.
        if (Admin::count() === 0) {
            Admin::create([
                'email' => $this->defaultEmail,
                'password' => Hash::make($this->defaultPassword),
            ]);
        }

        $admin = Admin::where('email', $data['email'])->first();
        if ($admin && Hash::check($data['password'], $admin->password)) {
            $request->session()->put('admin_logged_in', true);
            $request->session()->put('admin_id', $admin->id);
            $request->session()->put('admin_email', $admin->email);
            return redirect()->route('admin.programs.index');
        }

        return back()->withInput()->with('error', 'Invalid email or password.');
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['admin_logged_in', 'admin_id', 'admin_email']);
        return redirect()->route('admin.login');
    }

    // ---- Settings: change email / password ----

    public function settings(Request $request)
    {
        $admin = $this->currentAdmin($request);
        return view('admin.settings', [
            'admin' => $admin,
            'email' => $admin?->email ?? $request->session()->get('admin_email'),
            'tableReady' => Schema::hasTable('admins'),
        ]);
    }

    public function updateSettings(Request $request)
    {
        if (! Schema::hasTable('admins')) {
            return back()->with('error', 'Please create the "admins" database table first to enable changing your login.');
        }

        $admin = $this->currentAdmin($request);
        if (! $admin) {
            return redirect()->route('admin.login');
        }

        $data = $request->validate([
            'email' => 'required|email',
            'current_password' => 'required',
            'password' => 'nullable|min:6|confirmed',
        ]);

        if (! Hash::check($data['current_password'], $admin->password)) {
            return back()->with('error', 'Current password is incorrect.');
        }

        if (Admin::where('email', $data['email'])->where('id', '!=', $admin->id)->exists()) {
            return back()->with('error', 'That email is already in use.');
        }

        $admin->email = $data['email'];
        if (! empty($data['password'])) {
            $admin->password = Hash::make($data['password']);
        }
        $admin->save();

        $request->session()->put('admin_email', $admin->email);

        return back()->with('success', 'Login details updated successfully.');
    }

    private function currentAdmin(Request $request): ?Admin
    {
        if (! Schema::hasTable('admins')) {
            return null;
        }
        $id = $request->session()->get('admin_id');
        $admin = $id ? Admin::find($id) : null;
        if (! $admin) {
            // seed / recover using session email
            if (Admin::count() === 0) {
                $admin = Admin::create([
                    'email' => $this->defaultEmail,
                    'password' => Hash::make($this->defaultPassword),
                ]);
            } else {
                $admin = Admin::where('email', $request->session()->get('admin_email', $this->defaultEmail))->first()
                    ?? Admin::first();
            }
            if ($admin) {
                $request->session()->put('admin_id', $admin->id);
            }
        }
        return $admin;
    }
}
