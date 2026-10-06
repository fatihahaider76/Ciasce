<?php

namespace App\Http\Controllers;

use App\Models\Program;

class ProgramController extends Controller
{
    // Public "Our Programs" page
    public function index()
    {
        $programs = Program::latest()->get();
        return view('frontend.programs', compact('programs'));
    }
}
