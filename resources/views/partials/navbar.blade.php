@php $__nav = Route::currentRouteName(); @endphp
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container position-relative d-flex align-items-center justify-content-between">

    <a style="text-decoration:none;" href="{{ route('home.HMO') }}" class="logo d-flex align-items-center me-auto me-xl-0">
      <img src="{{ asset('assets/img/person/logo.png') }}" alt="CIASCE" style="height: 100px;">
    </a>

    <nav id="navmenu" class="navmenu" style="text-decoration:none">
      <ul>
        <li><a href="{{ route('home.HMO') }}" class="{{ $__nav === 'home.HMO' ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('about.abt') }}" class="{{ $__nav === 'about.abt' ? 'active' : '' }}">About</a></li>
        <li><a href="{{ route('faculty.fac') }}" class="{{ $__nav === 'faculty.fac' ? 'active' : '' }}">Faculty</a></li>
        <li><a href="{{ route('programs.index') }}" class="{{ $__nav === 'programs.index' ? 'active' : '' }}">Our Programs</a></li>
        <li class="nav-cta d-xl-none"><a href="{{ route('register.form') }}">Enroll Now</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <a class="btn-getstarted" style="text-decoration:none" href="{{ route('register.form') }}">Enroll Now</a>

  </div>
</header>
