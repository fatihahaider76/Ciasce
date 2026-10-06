<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Registration Form - CIASCE</title>
  <link href="{{ asset('assets/img/person/logo.png') }}" rel="icon">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main.css') }}?v=15" rel="stylesheet">

  <style>
    :root { --rf-primary: #2e7d32; --rf-dark: #1b5e20; --rf-text: #14532d; }
    header div nav ul li a { text-decoration: none; }
    body.index-page { background: #eef0f7; }

    .rf-page { padding: 130px 0 70px; }
    .rf-card { background: #fff; max-width: 900px; margin: 0 auto; border-radius: 18px;
      box-shadow: 0 20px 55px rgba(20,83,45,0.12); padding: 40px 40px 34px; }

    .rf-formno { background: #f4f5fb; border: 1px solid #e6e7f2; border-radius: 10px; padding: 12px 16px; margin-bottom: 26px; }
    .rf-formno label { display:block; color:#667085; font-size:0.78rem; font-weight:600; margin-bottom:2px; }
    .rf-formno .num { font-weight:700; color: var(--rf-text); letter-spacing:0.5px; }

    .rf-brand { text-align: center; margin-bottom: 6px; }
    .rf-brand img { height: 74px; margin-bottom: 8px; }
    .rf-brand .web { color:#444; font-size:0.9rem; }
    .rf-brand .mail { color:#444; font-size:0.9rem; margin-bottom: 6px; }
    .rf-brand h1 { color: var(--rf-primary); font-weight: 800; font-size: 1.7rem; margin: 6px 0 2px; }
    .rf-brand .tag { color:#7a7a90; font-style: italic; font-size: 0.95rem; }
    .rf-title { text-align:center; color: var(--rf-primary); font-weight: 700; font-size: 1.35rem; margin: 22px 0 6px; }

    .rf-section-title { color: var(--rf-primary); font-weight: 700; text-align: center; letter-spacing: 0.5px;
      margin: 30px 0 22px; position: relative; }
    .rf-section-title:before { content:''; display:block; height:1px; background:#e6e7f2; position:absolute; top:50%; left:0; right:0; z-index:0; }
    .rf-section-title span { background:#fff; padding: 0 16px; position: relative; z-index:1; }

    .form-label { color: var(--rf-text); font-weight: 600; font-size: 0.86rem; margin-bottom: 5px; }
    .form-control, .form-select { border-radius: 9px; padding: 10px 13px; border-color:#dfe1ee; }
    .form-control:focus, .form-select:focus { border-color: var(--rf-primary); box-shadow: 0 0 0 0.18rem rgba(46,125,50,0.15); }

    .rf-upload { border: 2px dashed #b9b6f5; border-radius: 14px; background:#f6f6ff; text-align:center; padding: 26px 18px; margin: 6px 0; }
    .rf-upload .ic { font-size: 2.2rem; color: var(--rf-primary); }
    .rf-upload h5 { color: var(--rf-primary); font-weight: 700; margin: 8px 0 2px; font-size: 1.1rem; }
    .rf-upload p { color:#8a8aa0; font-size: 0.85rem; margin-bottom: 12px; }
    .rf-upload .btn-pick { background: var(--rf-primary); color:#fff; border:none; border-radius: 30px; padding: 9px 24px; font-weight:600; }
    .rf-upload .btn-pick:hover { background: var(--rf-dark); }
    .rf-upload .fname { display:block; margin-top:10px; color: var(--rf-text); font-weight:600; font-size:0.85rem; }

    .btn-submit { background: var(--rf-primary); color:#fff; border:none; border-radius: 9px; padding: 12px 40px; font-weight:600; }
    .btn-submit:hover { background: var(--rf-dark); }

    @media (max-width: 576px) { .rf-card { padding: 26px 18px; } .rf-page { padding: 110px 0 50px; } }
  </style>
</head>

<body class="index-page">

  @include('partials.navbar')

  <main class="main">
    <div class="rf-page">
      <div class="container">
        <div class="rf-card">

          <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="rf-formno">
              <label>Form Number</label>
              <div class="num">{{ $formNumber }}</div>
              <input type="hidden" name="form_number" value="{{ $formNumber }}">
            </div>

            <div class="rf-brand">
              <img src="{{ asset('assets/img/person/logo.png') }}" alt="CIASCE">
              <div class="web">Visit website: <strong>ciasce.com</strong></div>
              <div class="mail">Email: <strong>info@ciasce.com</strong></div>
              <h1>CIASCE</h1>
              <div class="tag">"Empowering skills, shaping careers, transforming futures."</div>
              <div class="rf-title">Registration Form</div>
            </div>

            @if ($errors->any())
              <div class="alert alert-danger"><ul class="mb-0">@foreach ($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
            @endif

            <div class="mb-2 mt-3">
              <label class="form-label">Date of Registration</label>
              <input type="date" name="registration_date" class="form-control" value="{{ old('registration_date', date('Y-m-d')) }}">
            </div>

            <!-- PERSONAL INFORMATION -->
            <div class="rf-section-title"><span>PERSONAL INFORMATION</span></div>

            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Full Name</label>
                <input type="text" name="full_name" class="form-control" placeholder="Enter your name" value="{{ old('full_name') }}" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Father's Name</label>
                <input type="text" name="father_name" class="form-control" value="{{ old('father_name') }}">
              </div>

              <div class="col-md-6">
                <label class="form-label">Date of Birth</label>
                <input type="date" name="date_of_birth" class="form-control" value="{{ old('date_of_birth') }}">
              </div>
              <div class="col-md-6">
                <label class="form-label">Certification Name</label>
                <select name="certification_name" class="form-select">
                  <option value="">Select Certification</option>
                  @foreach ($certifications as $cert)
                    <option value="{{ $cert }}" @selected(old('certification_name') === $cert)>{{ $cert }}</option>
                  @endforeach
                </select>
              </div>

              <div class="col-md-6">
                <label class="form-label">CNIC / B-Form Number</label>
                <input type="text" name="cnic" class="form-control" placeholder="XXXXX-XXXXXXX-X" value="{{ old('cnic') }}">
              </div>
              <div class="col-md-6">
                <label class="form-label">Gender</label>
                <select name="gender" class="form-select">
                  <option value="">Select Gender</option>
                  @foreach (['Male','Female','Other'] as $g)
                    <option value="{{ $g }}" @selected(old('gender') === $g)>{{ $g }}</option>
                  @endforeach
                </select>
              </div>

              <div class="col-md-6">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
              </div>
              <div class="col-md-6">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
              </div>
            </div>

            <!-- Photo upload -->
            <div class="rf-upload mt-4">
              <div class="ic"><i class="bi bi-image"></i></div>
              <h5>Upload Your Photo</h5>
              <p>Click below to choose your image (JPG/PNG, max 4MB)</p>
              <button type="button" class="btn-pick" onclick="document.getElementById('rfPhoto').click()">Select Image</button>
              <input type="file" id="rfPhoto" name="photo" accept="image/*" class="d-none" onchange="document.getElementById('rfFname').textContent = this.files[0] ? this.files[0].name : ''">
              <span class="fname" id="rfFname"></span>
            </div>

            <div class="row g-3 mt-1">
              <div class="col-12">
                <label class="form-label">Present Address</label>
                <textarea name="present_address" class="form-control" rows="2">{{ old('present_address') }}</textarea>
              </div>
              <div class="col-md-6">
                <label class="form-label">City</label>
                <input type="text" name="city" class="form-control" value="{{ old('city') }}">
              </div>
              <div class="col-md-6">
                <label class="form-label">Country</label>
                <input type="text" name="country" class="form-control" value="{{ old('country') }}">
              </div>
            </div>

            <!-- ACADEMIC INFORMATION -->
            <div class="rf-section-title"><span>ACADEMIC INFORMATION</span></div>

            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">University Name</label>
                <input type="text" name="university_name" class="form-control" value="{{ old('university_name') }}">
              </div>
              <div class="col-md-6">
                <label class="form-label">Recent Qualification</label>
                <input type="text" name="recent_qualification" class="form-control" value="{{ old('recent_qualification') }}">
              </div>
              <div class="col-md-6">
                <label class="form-label">Degree Program</label>
                <select name="degree_program" class="form-select">
                  <option value="">Select Degree</option>
                  @foreach (['Matriculation','Intermediate','Diploma','Bachelors','Masters','MPhil','PhD','Other'] as $d)
                    <option value="{{ $d }}" @selected(old('degree_program') === $d)>{{ $d }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Student Trustee (if any)</label>
                <input type="text" name="student_trustee" class="form-control" value="{{ old('student_trustee') }}">
              </div>
            </div>

            <div class="text-center mt-4">
              <button type="submit" class="btn-submit"><i class="bi bi-check-lg"></i> Submit Registration</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </main>

  @include('partials.footer')

  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
