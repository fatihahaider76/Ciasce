<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin') - CIASCE Admin</title>
  <link href="{{ asset('assets/img/person/logo.png') }}" rel="icon">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <style>
    body { background: #f4f5fb; font-family: 'Poppins', system-ui, sans-serif; }
    .admin-topbar { background: linear-gradient(135deg, #5d57f4, #3a36b8); color: #fff; padding: 14px 0; box-shadow: 0 4px 18px rgba(45,42,110,0.15); }
    .admin-topbar .brand { display: flex; align-items: center; gap: 10px; font-weight: 700; font-size: 1.15rem; text-decoration: none; color: #fff; }
    .admin-topbar .brand img { height: 38px; background: #fff; border-radius: 8px; padding: 3px; }
    .admin-topbar a.logout, .admin-topbar .logout { color: #fff; text-decoration: none; background: rgba(255,255,255,0.15); padding: 8px 16px; border-radius: 8px; font-size: 0.9rem; }
    .admin-topbar a.logout:hover, .admin-topbar .logout:hover { background: rgba(255,255,255,0.28); }
    .admin-topbar .nav-pill { color: #fff; text-decoration: none; background: rgba(255,255,255,0.12); padding: 8px 15px; border-radius: 8px; font-size: 0.9rem; }
    .admin-topbar .nav-pill:hover { background: rgba(255,255,255,0.25); }
    .admin-topbar .nav-pill.active { background: #fff; color: #5d57f4; font-weight: 600; }
    .admin-card { background: #fff; border-radius: 16px; box-shadow: 0 10px 30px rgba(45,42,110,0.08); }
    .btn-primary { background: #5d57f4; border-color: #5d57f4; }
    .btn-primary:hover { background: #4a45d1; border-color: #4a45d1; }
    .btn-outline-primary { color: #5d57f4; border-color: #5d57f4; }
    .btn-outline-primary:hover { background: #5d57f4; border-color: #5d57f4; }
    .page-title { color: #2d2a6e; font-weight: 700; }
  </style>
</head>
<body>

  <div class="admin-topbar">
    <div class="container d-flex align-items-center justify-content-between flex-wrap gap-2">
      <a href="{{ route('admin.programs.index') }}" class="brand">
        <img src="{{ asset('assets/img/person/logo.png') }}" alt="CIASCE"> CIASCE Admin
      </a>
      <div class="d-flex align-items-center gap-2 flex-wrap">
        @php $rn = Route::currentRouteName(); @endphp
        <a href="{{ route('admin.programs.index') }}" class="nav-pill {{ str_starts_with($rn, 'admin.programs') ? 'active' : '' }}"><i class="bi bi-collection"></i> Programs</a>
        <a href="{{ route('admin.registrations.index') }}" class="nav-pill {{ str_starts_with($rn, 'admin.registrations') ? 'active' : '' }}"><i class="bi bi-people"></i> Registrations</a>
        <a href="{{ route('admin.settings') }}" class="nav-pill {{ $rn === 'admin.settings' ? 'active' : '' }}"><i class="bi bi-gear"></i> Settings</a>
        <form action="{{ route('admin.logout') }}" method="POST" class="m-0">
          @csrf
          <button type="submit" class="logout border-0"><i class="bi bi-box-arrow-right"></i> Logout</button>
        </form>
      </div>
    </div>
  </div>

  <div class="container py-4">
    @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
    @endif
    @if (session('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
    @endif
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $err)<li>{{ $err }}</li>@endforeach
        </ul>
      </div>
    @endif

    @yield('content')
  </div>

  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
