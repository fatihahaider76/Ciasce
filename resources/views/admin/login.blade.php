<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login - CIASCE</title>
  <link href="{{ asset('assets/img/person/logo.png') }}" rel="icon">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <style>
    body { min-height: 100vh; display: flex; align-items: center; justify-content: center;
      background: linear-gradient(135deg, #5d57f4 0%, #3a36b8 100%); font-family: 'Poppins', system-ui, sans-serif; padding: 20px; }
    .login-card { background: #fff; border-radius: 20px; padding: 40px 34px; width: 100%; max-width: 400px;
      box-shadow: 0 25px 60px rgba(0,0,0,0.25); }
    .login-card .logo { width: 84px; height: auto; display: block; margin: 0 auto 14px; }
    .login-card h2 { text-align: center; color: #2d2a6e; font-weight: 700; font-size: 1.5rem; margin-bottom: 4px; }
    .login-card .sub { text-align: center; color: #667085; font-size: 0.9rem; margin-bottom: 26px; }
    .form-label { color: #2d2a6e; font-weight: 600; font-size: 0.9rem; }
    .form-control { padding: 11px 14px; border-radius: 10px; }
    .form-control:focus { border-color: #5d57f4; box-shadow: 0 0 0 0.2rem rgba(93,87,244,0.15); }
    .btn-login { background: #5d57f4; color: #fff; width: 100%; padding: 12px; border-radius: 10px; border: none; font-weight: 600; }
    .btn-login:hover { background: #4a45d1; }
    .back-home { display: block; text-align: center; margin-top: 18px; color: #667085; text-decoration: none; font-size: 0.9rem; font-weight: 500; }
    .back-home:hover { color: #5d57f4; }
  </style>
</head>
<body>
  <div class="login-card">
    <img src="{{ asset('assets/img/person/logo.png') }}" alt="CIASCE" class="logo">
    <h2>Admin Panel</h2>
    <p class="sub">Sign in to manage Our Programs</p>

    @if (session('error'))
      <div class="alert alert-danger py-2">{{ session('error') }}</div>
    @endif

    <form action="{{ route('admin.login.post') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="you@example.com" required autofocus>
      </div>
      <div class="mb-4">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="••••••••" required>
      </div>
      <button type="submit" class="btn-login"><i class="bi bi-box-arrow-in-right"></i> Login</button>
    </form>

    <a href="{{ route('home.HMO') }}" class="back-home"><i class="bi bi-arrow-left"></i> Back to Home</a>
  </div>
</body>
</html>
