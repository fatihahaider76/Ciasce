<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Our Programs - CIASCE</title>
  <meta name="description" content="Explore the training programs offered by CIASCE.">

  <link href="{{ asset('assets/img/person/logo.png') }}" rel="icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main.css') }}?v=15" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <style>
    :root { --pg-primary: #2e7d32; --pg-dark: #1b5e20; --pg-text: #14532d; --pg-muted: #667085; }
    header div nav ul li a { text-decoration: none; }
    body.index-page { background: #f6f7fb; }

    .programs-hero {
      background: linear-gradient(135deg, var(--pg-primary) 0%, var(--pg-dark) 100%);
      color: #fff; padding: 160px 0 90px; text-align: center;
      border-radius: 0 0 40px 40px; box-shadow: 0 15px 40px rgba(46, 125, 50, 0.3);
    }
    .programs-hero h1 { font-size: 3rem; font-weight: 800; margin-bottom: 1rem; }
    .programs-hero p { font-size: 1.2rem; opacity: 0.92; max-width: 720px; margin: 0 auto; }

    .programs-wrap { margin-top: -55px; position: relative; z-index: 5; padding-bottom: 80px; }

    .program-card {
      background: #fff; border-radius: 22px; overflow: hidden; height: 100%;
      display: flex; flex-direction: column;
      box-shadow: 0 15px 40px rgba(20, 83, 45, 0.10);
      transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s ease;
    }
    .program-card:hover { transform: translateY(-10px); box-shadow: 0 28px 55px rgba(46, 125, 50, 0.22); }
    .program-card-media {
      height: 210px; overflow: hidden;
      background: linear-gradient(135deg, #e8f5e9, #f6f7fb);
      display: flex; align-items: center; justify-content: center;
    }
    .program-card-media img { width: 100%; height: 100%; object-fit: cover; }
    .program-card-media .placeholder { width: 92px; height: auto; opacity: 0.85; }
    .program-card-body { padding: 26px 24px 28px; display: flex; flex-direction: column; flex: 1 1 auto; }
    .program-card-body h3 { color: var(--pg-text); font-weight: 700; font-size: 1.35rem; margin-bottom: 12px; }
    .program-card-body p { color: var(--pg-muted); line-height: 1.7; margin: 0; white-space: pre-line; }

    .no-programs {
      background: #fff; border-radius: 22px; padding: 60px 30px; text-align: center;
      box-shadow: 0 15px 40px rgba(20, 83, 45, 0.10); color: var(--pg-muted);
    }
    .no-programs i { font-size: 3rem; color: var(--pg-primary); margin-bottom: 16px; }

    @media (max-width: 768px) {
      .programs-hero { padding: 120px 0 70px; }
      .programs-hero h1 { font-size: 2rem; }
    }
  </style>
</head>

<body class="index-page">

  @include('partials.navbar')

  <main class="main">

    <section class="programs-hero">
      <div class="container">
        <h1>Our Programs</h1>
        <p>Professional training programs designed to advance skills in management, agriculture, and agribusiness.</p>
      </div>
    </section>

    <section class="programs-wrap">
      <div class="container">
        <div class="row g-4 justify-content-center">
          @forelse ($programs as $program)
            <div class="col-lg-4 col-md-6">
              <div class="program-card">
                <div class="program-card-media">
                  @if ($program->image)
                    <img src="{{ asset($program->image) }}" alt="{{ $program->heading }}">
                  @else
                    <img class="placeholder" src="{{ asset('assets/img/person/logo.png') }}" alt="CIASCE">
                  @endif
                </div>
                <div class="program-card-body">
                  <h3>{{ $program->heading }}</h3>
                  <p>{{ $program->description }}</p>
                </div>
              </div>
            </div>
          @empty
            <div class="col-lg-8">
              <div class="no-programs">
                <i class="bi bi-collection"></i>
                <h4>No programs added yet</h4>
                <p class="mb-0">Programs will appear here once they are added from the admin panel.</p>
              </div>
            </div>
          @endforelse
        </div>
      </div>
    </section>

  </main>

  @include('partials.footer')

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
