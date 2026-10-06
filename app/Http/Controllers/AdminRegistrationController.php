<?php

namespace App\Http\Controllers;

use App\Models\Registration;

class AdminRegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::latest()->get();
        return view('admin.registrations.index', compact('registrations'));
    }

    public function show(Registration $registration)
    {
        return view('admin.registrations.show', compact('registration'));
    }

    public function destroy(Registration $registration)
    {
        if ($registration->photo) {
            $docRoot = $_SERVER['DOCUMENT_ROOT'] ?? public_path();
            $full = rtrim(str_replace('\\', '/', $docRoot), '/') . '/' . $registration->photo;
            if (file_exists($full)) {
                @unlink($full);
            }
        }
        $registration->delete();

        return redirect()->route('admin.registrations.index')->with('success', 'Registration deleted.');
    }
}
