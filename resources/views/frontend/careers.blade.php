<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Careers - CIASCE</title>
  <meta name="description" content="Join the CIASCE faculty. Open teaching positions in technology, business, hospitality, life sciences, agriculture, design and environment.">

  <link href="{{ asset('assets/img/person/logo.png') }}" rel="icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main.css') }}?v=15" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <style>
    :root { --cr-primary: #2e7d32; --cr-dark: #1b5e20; --cr-text: #14532d; --cr-muted: #667085; --cr-line: #e3efe4; }
    header div nav ul li a { text-decoration: none; }
    body.index-page { background: #f6f7fb; }

    .careers-hero {
      background: linear-gradient(135deg, var(--cr-primary) 0%, var(--cr-dark) 100%);
      color: #fff; padding: 160px 0 100px; text-align: center;
      border-radius: 0 0 40px 40px; box-shadow: 0 15px 40px rgba(46, 125, 50, 0.3);
    }
    .careers-badge {
      display: inline-flex; align-items: center; gap: 9px; background: rgba(255,255,255,0.15); color: #fff;
      font-weight: 700; letter-spacing: 1px; text-transform: uppercase; font-size: 0.78rem;
      padding: 8px 16px; border-radius: 30px; margin-bottom: 18px;
    }
    .careers-pulse { width: 8px; height: 8px; border-radius: 50%; background: #a5d6a7; animation: crPulse 2s infinite; }
    @keyframes crPulse { 0% { box-shadow: 0 0 0 0 rgba(165,214,167,0.7); } 70%, 100% { box-shadow: 0 0 0 9px rgba(165,214,167,0); } }
    .careers-hero h1 { font-size: 3rem; font-weight: 800; margin-bottom: 1rem; color: #fff; }
    .careers-hero p { font-size: 1.15rem; opacity: 0.92; max-width: 680px; margin: 0 auto; line-height: 1.7; }

    .careers-wrap { margin-top: -55px; position: relative; z-index: 5; padding-bottom: 40px; }
    .careers-list { max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 16px; }

    /* Position cards (expand on click) */
    .position {
      background: #fff; border-radius: 20px; box-shadow: 0 12px 34px rgba(20, 83, 45, 0.09);
      border: 1px solid transparent; transition: box-shadow 0.3s ease, border-color 0.3s ease;
    }
    .position:hover { box-shadow: 0 18px 44px rgba(20, 83, 45, 0.14); }
    .position[open] { border-color: var(--cr-line); }
    .position summary {
      list-style: none; cursor: pointer; display: flex; align-items: center; gap: 18px; padding: 24px 26px;
    }
    .position summary::-webkit-details-marker { display: none; }
    .position-icon {
      width: 54px; height: 54px; flex-shrink: 0; border-radius: 16px;
      background: linear-gradient(135deg, var(--cr-primary), var(--cr-dark)); color: #fff;
      display: flex; align-items: center; justify-content: center; font-size: 1.3rem;
    }
    .position-head { flex: 1; min-width: 0; }
    .position-head h3 { color: var(--cr-text); font-weight: 700; font-size: 1.2rem; margin: 0 0 4px; }
    .position-head p { color: var(--cr-muted); margin: 0; font-size: 0.95rem; line-height: 1.5; }
    .position-toggle {
      width: 38px; height: 38px; flex-shrink: 0; border-radius: 50%; background: #e8f5e9; color: var(--cr-primary);
      display: flex; align-items: center; justify-content: center; transition: transform 0.3s ease;
    }
    .position[open] .position-toggle { transform: rotate(180deg); }
    .position-body { padding: 0 26px 26px 98px; }
    .position-body > p { color: #344054; line-height: 1.75; margin: 0 0 18px; }
    .position-body h4 {
      color: var(--cr-text); font-size: 0.8rem; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; margin: 0 0 10px;
    }
    .topic-list { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 20px; }
    .topic {
      border: 1.5px solid var(--cr-line); background: #fbfdfb; color: #1f3d2a;
      font-weight: 600; font-size: 0.85rem; padding: 7px 13px; border-radius: 10px;
    }
    .position-foot { display: flex; flex-wrap: wrap; align-items: center; gap: 14px 22px; }
    .position-meta { color: var(--cr-muted); font-size: 0.88rem; }
    .position-meta i { color: var(--cr-primary); margin-right: 6px; }
    .apply-btn {
      display: inline-flex; align-items: center; gap: 10px; color: #fff; text-decoration: none; font-weight: 700;
      background: linear-gradient(135deg, var(--cr-primary), var(--cr-dark));
      padding: 12px 24px; border-radius: 40px; box-shadow: 0 10px 22px rgba(46, 125, 50, 0.28); transition: transform 0.25s ease;
    }
    .apply-btn:hover { color: #fff; transform: translateY(-2px); }
    .apply-btn i { transition: transform 0.25s ease; }
    .apply-btn:hover i { transform: translateX(4px); }

    /* Who / offer / send */
    .careers-info { padding: 40px 0 90px; }
    .info-grid { max-width: 1080px; margin: 0 auto; display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
    .info-card { background: #fff; border-radius: 20px; padding: 28px 26px; box-shadow: 0 12px 34px rgba(20, 83, 45, 0.08); }
    .info-card h3 { color: var(--cr-text); font-weight: 700; font-size: 1.1rem; margin: 0 0 16px; display: flex; align-items: center; gap: 10px; }
    .info-card h3 i { color: var(--cr-primary); }
    .info-card ul, .info-card ol { margin: 0; padding: 0; list-style: none; }
    .info-card li { color: #344054; font-size: 0.93rem; line-height: 1.5; padding: 7px 0 7px 26px; position: relative; }
    .info-card ul li::before {
      content: "\f00c"; font-family: "Font Awesome 6 Free"; font-weight: 900; color: var(--cr-primary);
      position: absolute; left: 0; top: 8px; font-size: 0.8rem;
    }
    .info-card ol { counter-reset: step; }
    .info-card ol li { counter-increment: step; padding-left: 34px; }
    .info-card ol li::before {
      content: counter(step); position: absolute; left: 0; top: 6px; width: 22px; height: 22px; border-radius: 50%;
      background: #e8f5e9; color: var(--cr-dark); font-weight: 700; font-size: 0.75rem;
      display: flex; align-items: center; justify-content: center;
    }

    .careers-general {
      max-width: 900px; margin: 40px auto 0; text-align: center; color: var(--cr-muted); line-height: 1.7;
    }
    .careers-general a { color: var(--cr-primary); font-weight: 700; text-decoration: none; }

    @media (max-width: 991px) {
      .info-grid { grid-template-columns: 1fr; max-width: 600px; }
    }
    @media (max-width: 768px) {
      .careers-hero { padding: 120px 0 80px; }
      .careers-hero h1 { font-size: 2.1rem; }
      .position summary { padding: 20px; gap: 14px; }
      .position-icon { width: 46px; height: 46px; font-size: 1.1rem; }
      .position-body { padding: 0 20px 22px; }
      .apply-btn { width: 100%; justify-content: center; }
    }
  </style>
</head>

<body class="index-page">

  @include('partials.navbar')

  @php
    $careersEmail = 'infociasce@gmail.com';
    $positions = [
      [
        'icon' => 'fa-laptop-code',
        'title' => 'Technology & Business',
        'summary' => 'Teach the digital and business skills shaping today\'s workplaces.',
        'description' => 'Help learners build the skills to lead and innovate in a fast-changing economy, from applying emerging technologies to managing people, quality and growth in modern organizations.',
        'topics' => ['Artificial Intelligence & Emerging Technologies', 'Entrepreneurship & Innovation', 'Human Resources Management', 'Total Quality Management (TQM)', 'Business & Commerce'],
      ],
      [
        'icon' => 'fa-concierge-bell',
        'title' => 'Hospitality & Tourism',
        'summary' => 'Prepare students for careers in one of the world\'s largest service industries.',
        'description' => 'Bring your industry experience to the classroom and teach the practical, service-driven skills behind successful hotels, restaurants, travel and food service operations.',
        'topics' => ['Hospitality Management', 'Tourism Management', 'Hotel & Restaurant Management', 'Culinary & Food Service Management'],
      ],
      [
        'icon' => 'fa-microscope',
        'title' => 'Life Sciences & Diagnostics',
        'summary' => 'Bring laboratory and research expertise to applied science training.',
        'description' => 'Guide learners through modern biological and diagnostic sciences, connecting laboratory techniques with real-world applications in health, agriculture and industry.',
        'topics' => ['Molecular Biology', 'Diagnostic Sciences', 'Biotechnology', 'Laboratory Sciences'],
      ],
      [
        'icon' => 'fa-seedling',
        'title' => 'Agriculture & Sustainable Development',
        'summary' => 'Teach the modern farming and agribusiness practices at the heart of CIASCE.',
        'description' => 'Help students, farmers and entrepreneurs adopt productive, sustainable growing methods and turn agricultural knowledge into viable businesses and food security at home and in their communities.',
        'topics' => ['Agriculture & Agribusiness', 'Vertical Farming', 'Organic Farming', 'Kitchen Gardening', 'Mushroom Cultivation', 'Honeybee Rearing / Apiculture', 'Sustainable Agriculture'],
      ],
      [
        'icon' => 'fa-leaf',
        'title' => 'Design & Environment',
        'summary' => 'Shape greener spaces and environmentally responsible development.',
        'description' => 'Teach the planning and design principles behind sustainable landscapes and communities, and help learners balance development with care for the environment.',
        'topics' => ['Landscape Architecture', 'Environmental & Sustainable Development'],
      ],
    ];
  @endphp

  <main class="main">

    <section class="careers-hero">
      <div class="container">
        <span class="careers-badge"><span class="careers-pulse"></span> Now Hiring</span>
        <h1>Join Our Faculty</h1>
        <p>We're inviting qualified educators, researchers and industry professionals to teach with CIASCE. Choose an area below to see what it involves and apply.</p>
      </div>
    </section>

    <section class="careers-wrap">
      <div class="container">
        <div class="careers-list">
          @foreach ($positions as $p)
            <details class="position" id="{{ \Illuminate\Support\Str::slug($p['title']) }}">
              <summary>
                <span class="position-icon"><i class="fas {{ $p['icon'] }}"></i></span>
                <span class="position-head">
                  <h3>{{ $p['title'] }}</h3>
                  <p>{{ $p['summary'] }}</p>
                </span>
                <span class="position-toggle"><i class="fas fa-chevron-down"></i></span>
              </summary>
              <div class="position-body">
                <p>{{ $p['description'] }}</p>
                <h4>Subjects you could teach</h4>
                <div class="topic-list">
                  @foreach ($p['topics'] as $t)
                    <span class="topic">{{ $t }}</span>
                  @endforeach
                </div>
                <div class="position-foot">
                  <a class="apply-btn" href="mailto:{{ $careersEmail }}?subject={{ rawurlencode('Faculty Application – ' . $p['title']) }}">Apply for this position <i class="fas fa-arrow-right"></i></a>
                  <span class="position-meta"><i class="fas fa-clock"></i>Part-time, sessional or flexible</span>
                </div>
              </div>
            </details>
          @endforeach
        </div>
      </div>
    </section>

    <section class="careers-info">
      <div class="container">
        <div class="info-grid">
          <div class="info-card">
            <h3><i class="fas fa-user-check"></i> Who should apply</h3>
            <ul>
              <li>University and college faculty</li>
              <li>Researchers and academic professionals</li>
              <li>Industry practitioners and consultants</li>
              <li>Retired or semi-retired academics</li>
            </ul>
          </div>
          <div class="info-card">
            <h3><i class="fas fa-star"></i> What we offer</h3>
            <ul>
              <li>Part-time, sessional and flexible teaching</li>
              <li>Applied research opportunities</li>
              <li>Curriculum and program development</li>
              <li>A collaborative, multidisciplinary team</li>
            </ul>
          </div>
          <div class="info-card">
            <h3><i class="fas fa-file-alt"></i> What to send</h3>
            <ol>
              <li>Your current CV</li>
              <li>A cover letter naming your area of expertise</li>
              <li>Academic and professional qualifications</li>
              <li>Teaching or research experience, if any</li>
            </ol>
          </div>
        </div>

        <p class="careers-general">
          Don't see your exact field? We still want to hear from you. Email
          <a href="mailto:{{ $careersEmail }}?subject={{ rawurlencode('Faculty Application – General') }}">{{ $careersEmail }}</a>
          with the subject “Faculty Application – [Your Area]”.
        </p>
      </div>
    </section>

  </main>

  @include('partials.footer')

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <script>
    // Open the position named in the link (e.g. /careers#design-environment).
    (function () {
      var el = location.hash && document.getElementById(location.hash.slice(1));
      if (el && el.tagName === 'DETAILS') { el.open = true; }
    })();
  </script>

</body>
</html>
