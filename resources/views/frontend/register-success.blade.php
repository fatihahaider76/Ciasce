<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Registration Submitted - CIASCE</title>
  <link href="{{ asset('assets/img/person/logo.png') }}" rel="icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main.css') }}?v=15" rel="stylesheet">
  <style>
    header div nav ul li a { text-decoration: none; }
    body.index-page { background: #eef0f7; }
    .rs-wrap { padding: 150px 0 90px; }
    .rs-card { background:#fff; max-width: 560px; margin: 0 auto; border-radius: 20px; text-align:center;
      box-shadow: 0 20px 55px rgba(20,83,45,0.12); padding: 46px 34px; }
    .rs-tick { width: 90px; height: 90px; border-radius: 50%; background: #e8f9ef; color:#25b268;
      display:flex; align-items:center; justify-content:center; font-size: 3rem; margin: 0 auto 20px; }
    .rs-card h2 { color:#14532d; font-weight:800; margin-bottom: 8px; }
    .rs-card p { color:#667085; }
    .rs-num { background:#f4f5fb; border:1px solid #e6e7f2; border-radius:10px; padding:12px; margin:20px 0; }
    .rs-num small { color:#8a8aa0; display:block; }
    .rs-num strong { color:#2e7d32; font-size:1.15rem; letter-spacing:0.5px; }
    .rs-btn { background:#2e7d32; color:#fff; border-radius:10px; padding:11px 26px; text-decoration:none; font-weight:600; display:inline-block; }
    .rs-btn:hover { background:#1b5e20; color:#fff; }
  </style>
</head>
<body class="index-page">

  @include('partials.navbar')

  <main class="main">
    <div class="rs-wrap">
      <div class="container">
        <div class="rs-card">
          <div class="rs-tick"><i class="bi bi-check-lg"></i></div>
          <h2>Registration Submitted!</h2>
          <p>Thank you for registering with CIASCE. Our team will get in touch with you soon.</p>
          @if ($formNumber)
            <div class="rs-num">
              <small>Your Form Number</small>
              <strong>{{ $formNumber }}</strong>
            </div>
          @endif
          <a href="{{ route('home.HMO') }}" class="rs-btn"><i class="bi bi-house"></i> Back to Home</a>
        </div>
      </div>
    </div>
  </main>

  @include('partials.footer')

  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
