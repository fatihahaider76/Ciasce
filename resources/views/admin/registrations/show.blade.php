@extends('admin.layout')
@section('title', 'Registration Detail')

@php
  function rf_row($label, $value) {
    $value = $value !== null && $value !== '' ? e($value) : '<span class="text-muted">—</span>';
    return '<div class="col-md-6 mb-3"><div class="rf-lbl">'.$label.'</div><div class="rf-val">'.$value.'</div></div>';
  }
@endphp

@section('content')
  <style>
    .rf-lbl { color:#8a8aa0; font-size:0.78rem; font-weight:600; text-transform:uppercase; letter-spacing:0.4px; }
    .rf-val { color:#2d2a6e; font-weight:500; }
    .rf-sec { color:#5d57f4; font-weight:700; margin:22px 0 14px; border-bottom:1px solid #eef0f6; padding-bottom:8px; }
  </style>

  <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
    <h3 class="page-title mb-0"><i class="bi bi-person-vcard"></i> {{ $registration->full_name }}</h3>
    <div class="d-flex gap-2">
      <a href="{{ route('admin.registrations.index') }}" class="btn btn-outline-secondary btn-sm"><i class="bi bi-arrow-left"></i> Back</a>
      <form action="{{ route('admin.registrations.destroy', $registration) }}" method="POST" onsubmit="return confirm('Delete this registration?');">
        @csrf @method('DELETE')
        <button class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i> Delete</button>
      </form>
    </div>
  </div>

  <div class="admin-card p-4">
    <div class="d-flex align-items-center gap-3 mb-3 flex-wrap">
      @if ($registration->photo)
        <img src="{{ asset($registration->photo) }}" alt="" style="width:90px;height:90px;object-fit:cover;border-radius:12px;border:1px solid #eee;">
      @else
        <span class="text-muted"><i class="bi bi-person-circle" style="font-size:4rem;"></i></span>
      @endif
      <div>
        <div class="rf-lbl">Form Number</div>
        <div class="rf-val" style="font-size:1.1rem;">{{ $registration->form_number }}</div>
        <div class="text-muted small">Submitted: {{ $registration->created_at?->format('d M Y, h:i A') }}</div>
      </div>
    </div>

    <div class="rf-sec">Personal Information</div>
    <div class="row">
      {!! rf_row('Registration Date', $registration->registration_date) !!}
      {!! rf_row('Full Name', $registration->full_name) !!}
      {!! rf_row("Father's Name", $registration->father_name) !!}
      {!! rf_row('Date of Birth', $registration->date_of_birth) !!}
      {!! rf_row('Certification Name', $registration->certification_name) !!}
      {!! rf_row('CNIC / B-Form', $registration->cnic) !!}
      {!! rf_row('Gender', $registration->gender) !!}
      {!! rf_row('Phone Number', $registration->phone) !!}
      {!! rf_row('Email Address', $registration->email) !!}
      {!! rf_row('Present Address', $registration->present_address) !!}
      {!! rf_row('City', $registration->city) !!}
      {!! rf_row('Country', $registration->country) !!}
    </div>

    <div class="rf-sec">Academic Information</div>
    <div class="row">
      {!! rf_row('University Name', $registration->university_name) !!}
      {!! rf_row('Recent Qualification', $registration->recent_qualification) !!}
      {!! rf_row('Degree Program', $registration->degree_program) !!}
      {!! rf_row('Student Trustee', $registration->student_trustee) !!}
    </div>
  </div>
@endsection
