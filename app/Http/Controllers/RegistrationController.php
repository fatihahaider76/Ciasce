<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeRegistration;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    private string $uploadDir = 'uploads/registrations';

    /** Certifications offered (dropdown on the registration form). */
    public const CERTIFICATIONS = [
        'Kitchen Gardening',
        'Mushroom Cultivation',
        'Apiculture / Beekeeping (Honeybees)',
        'Agribusiness / Entrepreneurship',
        'Landscape Architecture',
        'Vertical Farming',
        'Hospitality and Tourism Management',
        'Molecular Biology / Diagnostic',
        'Supply Chain Management',
        'Human Resource Management',
        'Total Quality Management',
    ];

    // Show the public registration form
    public function form()
    {
        $formNumber = 'CIASCE-' . strtoupper(bin2hex(random_bytes(6)));
        $certifications = self::CERTIFICATIONS;
        return view('frontend.register', compact('formNumber', 'certifications'));
    }

    // Handle submission
    public function store(Request $request)
    {
        $data = $request->validate([
            'form_number' => 'required|string',
            'registration_date' => 'nullable|date',
            'full_name' => 'required|string|max:255',
            'father_name' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|date',
            'certification_name' => 'nullable|string|max:255',
            'cnic' => 'nullable|string|max:50',
            'gender' => 'nullable|string|max:20',
            'phone' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:255',
            'photo' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:4096',
            'present_address' => 'nullable|string',
            'city' => 'nullable|string|max:120',
            'country' => 'nullable|string|max:120',
            'university_name' => 'nullable|string|max:255',
            'recent_qualification' => 'nullable|string|max:255',
            'degree_program' => 'nullable|string|max:120',
            'student_trustee' => 'nullable|string|max:255',
        ]);

        // ensure a unique form number
        if (Registration::where('form_number', $data['form_number'])->exists()) {
            $data['form_number'] .= '-' . strtoupper(bin2hex(random_bytes(2)));
        }

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $name = time() . '_' . preg_replace('/[^A-Za-z0-9._-]/', '', $file->getClientOriginalName());
            $file->move($this->webRoot() . '/' . $this->uploadDir, $name);
            $data['photo'] = $this->uploadDir . '/' . $name;
        }

        $registration = Registration::create($data);

        // Send a welcome email (from Prof. Dr. Muhammad Saleem Haider) to the address
        // the user entered. Wrapped in try/catch so a mail failure never breaks submission.
        if (!empty($registration->email)) {
            try {
                Mail::to($registration->email)->send(new WelcomeRegistration($registration));
            } catch (\Throwable $e) {
                Log::warning('CIASCE welcome email failed: ' . $e->getMessage());
            }
        }

        return redirect()->route('register.success', ['n' => $registration->form_number]);
    }

    public function success(Request $request)
    {
        return view('frontend.register-success', ['formNumber' => $request->query('n', '')]);
    }

    private function webRoot(): string
    {
        $docRoot = $_SERVER['DOCUMENT_ROOT'] ?? '';
        if ($docRoot !== '' && is_dir($docRoot)) {
            return rtrim(str_replace('\\', '/', $docRoot), '/');
        }
        return rtrim(str_replace('\\', '/', public_path()), '/');
    }
}
