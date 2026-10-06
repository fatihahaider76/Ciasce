<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'form_number', 'registration_date', 'full_name', 'father_name', 'date_of_birth',
        'certification_name', 'cnic', 'gender', 'phone', 'email', 'photo',
        'present_address', 'city', 'country',
        'university_name', 'recent_qualification', 'degree_program', 'student_trustee',
    ];
}
