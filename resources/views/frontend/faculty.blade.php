<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Faculty - CIASCE</title>
  <meta name="description" content="Meet the distinguished faculty and expert consultants of CIASCE.">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/person/logo.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}?v=15" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <style>
    :root {
      --fac-primary: #2e7d32;
      --fac-light-primary: #66bb6a;
      --fac-dark: #1b5e20;
      --fac-soft: #f1f8f1;
      --fac-text: #14532d;
      --fac-muted: #667085;
    }

    header div nav ul li a { text-decoration: none; }
    body.index-page { background: #f6f7fb; }

    /* Solid, readable header (same look as Home / About) */
    #header.header {
      --background-color: rgba(255, 255, 255, 0.96);
      background-color: rgba(255, 255, 255, 0.96);
      box-shadow: 0 2px 24px rgba(20, 83, 45, 0.08);
    }

    /* ===== Hero ===== */
    .faculty-hero {
      background: linear-gradient(135deg, var(--fac-primary) 0%, var(--fac-dark) 100%);
      color: #fff; padding: 160px 0 90px; text-align: center;
      position: relative; overflow: hidden;
      border-radius: 0 0 40px 40px; box-shadow: 0 15px 40px rgba(46, 125, 50, 0.3);
    }
    .faculty-hero:before {
      content: ''; position: absolute; inset: 0;
      background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.08" d="M0,96L48,112C96,128,192,160,288,186.7C384,213,480,235,576,213.3C672,192,768,128,864,128C960,128,1056,192,1152,192C1248,192,1344,128,1392,96L1440,64L1440,320L0,320Z"></path></svg>');
      background-size: cover; background-position: center bottom;
    }
    .faculty-hero .container { position: relative; z-index: 2; }
    .faculty-hero h1 { font-size: 3rem; font-weight: 800; margin-bottom: 1rem; text-shadow: 0 3px 12px rgba(0,0,0,0.15); }
    .faculty-hero p { font-size: 1.2rem; opacity: 0.92; max-width: 720px; margin: 0 auto; }

    /* ===== Grid cards ===== */
    .faculty-grid { margin-top: -60px; position: relative; z-index: 5; padding-bottom: 70px; }

    .fac-card {
      background: #fff; border-radius: 22px; overflow: hidden; height: 100%;
      display: flex; flex-direction: column;
      box-shadow: 0 15px 40px rgba(20, 83, 45, 0.10);
      transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s ease;
    }
    .fac-card:hover { transform: translateY(-10px); box-shadow: 0 28px 55px rgba(46, 125, 50, 0.22); }

    .fac-card-media { position: relative; height: 235px; overflow: hidden; background: linear-gradient(135deg, var(--fac-primary), var(--fac-light-primary)); }
    .fac-card-media img { width: 100%; height: 100%; object-fit: cover; object-position: top center; transition: transform 0.5s ease; }
    .fac-card:hover .fac-card-media img { transform: scale(1.06); }
    .fac-card-media .media-overlay {
      position: absolute; inset: 0;
      background: linear-gradient(to top, rgba(20,83,45,0.92) 0%, rgba(20,83,45,0.15) 55%, transparent 100%);
      display: flex; flex-direction: column; justify-content: flex-end; padding: 20px 22px;
    }
    .fac-card-media h3 { color: #fff; font-weight: 700; font-size: 1.35rem; margin: 0 0 3px; text-shadow: 0 2px 8px rgba(0,0,0,0.3); }
    .fac-card-media small { color: rgba(255,255,255,0.9); font-weight: 500; font-size: 0.85rem; }

    .fac-card-body { padding: 24px 22px 22px; text-align: center; display: flex; flex-direction: column; flex: 1 1 auto; }
    .fac-tag {
      align-self: center; background: rgba(46,125,50,0.10); color: var(--fac-primary);
      font-size: 0.72rem; font-weight: 700; letter-spacing: 0.6px; text-transform: uppercase;
      padding: 6px 14px; border-radius: 20px; margin-bottom: 16px;
    }
    .fac-card-desc { color: var(--fac-muted); font-size: 0.92rem; line-height: 1.6; margin-bottom: 20px; }

    .fac-stats { display: flex; gap: 14px; margin-bottom: 20px; }
    .fac-stat { flex: 1; background: var(--fac-soft); border-radius: 14px; padding: 16px 8px; }
    .fac-stat b { display: block; color: var(--fac-primary); font-size: 1.6rem; font-weight: 800; line-height: 1; }
    .fac-stat small { display: block; color: var(--fac-muted); font-size: 0.74rem; margin-top: 5px; }
    .fac-stat .stars { color: #f5b301; font-size: 0.8rem; margin-top: 3px; }

    .fac-view-btn {
      margin-top: auto; width: 100%; border: 1.5px solid var(--fac-primary); color: var(--fac-primary);
      background: transparent; border-radius: 12px; padding: 12px; font-weight: 600; font-size: 0.95rem;
      transition: all 0.3s ease;
    }
    .fac-view-btn:hover { background: var(--fac-primary); color: #fff; box-shadow: 0 10px 22px rgba(46,125,50,0.3); }

    /* ===== Modal ===== */
    .fac-modal .modal-content { border: none; border-radius: 22px; overflow-y: auto; overflow-x: hidden; max-height: calc(100vh - 3.5rem); box-shadow: 0 30px 70px rgba(0,0,0,0.3); }
    .fac-modal .modal-header-band { height: 90px; flex-shrink: 0; background: linear-gradient(135deg, var(--fac-primary), var(--fac-dark)); position: sticky; top: 0; z-index: 20; }
    .fac-modal .btn-close-custom {
      position: absolute; top: 18px; right: 20px; z-index: 10;
      width: 38px; height: 38px; border-radius: 50%; border: none; background: rgba(255,255,255,0.2);
      color: #fff; font-size: 1.1rem; display: flex; align-items: center; justify-content: center;
      transition: background 0.25s ease; cursor: pointer;
    }
    .fac-modal .btn-close-custom:hover { background: rgba(255,255,255,0.38); }

    .fac-modal-head { position: relative; flex-shrink: 0; padding: 26px 40px 22px 196px; min-height: 78px; }
    .fac-modal-avatar {
      position: absolute; left: 40px; top: -66px; z-index: 25;
      width: 132px; height: 132px; border-radius: 50%; object-fit: contain; background: #fff; padding: 12px;
      border: 5px solid #fff; box-shadow: 0 12px 28px rgba(46,125,50,0.28);
    }
    .fac-modal-head-info { }
    .fac-modal-head-info h2 { color: var(--fac-text); font-weight: 800; font-size: 2rem; margin: 0 0 4px; }
    .fac-modal-role { color: var(--fac-muted); font-size: 1.02rem; margin-bottom: 12px; }
    .fac-badges { display: flex; flex-wrap: wrap; gap: 9px; margin-bottom: 6px; }
    .fac-badge {
      background: rgba(46,125,50,0.09); color: var(--fac-primary); border-radius: 10px;
      padding: 7px 13px; font-size: 0.82rem; font-weight: 600; display: inline-flex; align-items: center; gap: 7px;
    }
    .fac-badge i { font-size: 0.85rem; }

    .fac-modal-body { padding: 8px 40px 40px; flex-shrink: 0; }
    .fac-modal-lead { color: #555; line-height: 1.75; font-size: 0.97rem; margin: 6px 0 26px; }

    .m-section { margin-bottom: 28px; }
    .m-section h5 {
      color: var(--fac-primary); font-weight: 700; font-size: 1.15rem; margin-bottom: 16px;
      display: flex; align-items: center; gap: 10px;
    }
    .m-section h5 i { font-size: 1rem; }

    .m-list { list-style: none; padding: 0; margin: 0; }
    .m-list li { position: relative; padding-left: 24px; margin-bottom: 14px; color: #444; line-height: 1.5; }
    .m-list li:before { content: ''; position: absolute; left: 0; top: 7px; width: 9px; height: 9px; border-radius: 50%; background: var(--fac-primary); }
    .m-list li .mi-title { display: block; font-weight: 700; color: var(--fac-text); }
    .m-list li .mi-sub { color: #666; font-size: 0.9rem; }
    .m-list li .mi-time { color: var(--fac-primary); font-size: 0.82rem; font-weight: 600; }

    .m-tick { list-style: none; padding: 0; margin: 0; }
    .m-tick li { position: relative; padding-left: 26px; margin-bottom: 11px; color: #444; line-height: 1.55; }
    .m-tick li:before { content: '\f00c'; font-family: 'Font Awesome 6 Free'; font-weight: 900; position: absolute; left: 0; top: 2px; color: var(--fac-primary); font-size: 0.82rem; }

    .m-chip { display: inline-block; background: rgba(46,125,50,0.09); color: var(--fac-primary); padding: 7px 15px; border-radius: 30px; margin: 0 8px 10px 0; font-size: 0.84rem; font-weight: 500; }

    .m-table { width: 100%; border-collapse: collapse; }
    .m-table thead th { background: var(--fac-primary); color: #fff; font-weight: 600; font-size: 0.82rem; padding: 11px 13px; text-align: left; }
    .m-table tbody td { padding: 10px 13px; border-bottom: 1px solid #eef0f6; font-size: 0.87rem; color: #555; vertical-align: top; }
    .m-table tbody tr:nth-child(even) { background: #f4faf4; }
    .m-table-wrap { overflow-x: auto; border-radius: 12px; border: 1px solid #eef0f6; }

    .m-subhead { font-weight: 700; color: var(--fac-text); margin: 14px 0 10px; }

    @media (max-width: 768px) {
      .faculty-hero { padding: 120px 0 70px; }
      .faculty-hero h1 { font-size: 2.1rem; }
      .fac-modal-body { padding-left: 22px; padding-right: 22px; }
      .fac-modal-head { padding: 76px 22px 22px; text-align: center; min-height: 0; }
      .fac-modal-avatar { left: 50%; transform: translateX(-50%); top: -62px; width: 112px; height: 112px; }
      .fac-modal-head-info { text-align: center; }
      .fac-badges { justify-content: center; }
      .fac-modal-head-info h2 { font-size: 1.6rem; }
    }
  </style>
</head>

<body class="index-page">

  @include('partials.navbar')

  <main class="main">

    <!-- Hero -->
    <section class="faculty-hero">
      <div class="container">
        <h1>Our Distinguished Faculty</h1>
        <p>Meet the accomplished scholars, scientists, and expert consultants who bring world-class knowledge, research excellence, and hands-on experience to CIASCE.</p>
      </div>
    </section>

    <!-- Grid -->
    <section class="faculty-grid">
      <div class="container">
        <div class="row g-4 justify-content-center">

          <!-- Card: Prof. Dr. Muhammad Saleem Haider -->
          <div class="col-lg-4 col-md-6">
            <div class="fac-card">
              <div class="fac-card-media">
                <img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="Prof. Dr. Muhammad Saleem Haider">
                <div class="media-overlay">
                  <h3>Prof. Dr. Muhammad Saleem Haider</h3>
                  <small>CEO, Ciasce.com &mdash; Former Dean, Faculty of Agricultural Sciences</small>
                </div>
              </div>
              <div class="fac-card-body">
                <span class="fac-tag">Plant Virology &amp; Leadership</span>
                <p class="fac-card-desc">Distinguished agricultural scientist with doctoral training from Imperial College London and postdoctoral experience at the University of Toronto &mdash; a leader in plant virology and molecular biology.</p>
                <div class="fac-stats">
                  <div class="fac-stat"><b>200+</b><small>Publications</small></div>
                  <div class="fac-stat"><b>690</b><small>Citations</small></div>
                </div>
                <button class="fac-view-btn" data-bs-toggle="modal" data-bs-target="#facModal9">View Profile</button>
              </div>
            </div>
          </div>

          <!-- Card: Hafiz Mujeeb Ur Rehman -->
          <div class="col-lg-4 col-md-6">
            <div class="fac-card">
              <div class="fac-card-media">
                <img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="Hafiz Mujeeb Ur Rehman">
                <div class="media-overlay">
                  <h3>Hafiz Mujeeb Ur Rehman</h3>
                  <small>International Coordinator</small>
                </div>
              </div>
              <div class="fac-card-body">
                <span class="fac-tag">Agriculture &amp; Water Management</span>
                <p class="fac-card-desc">Experienced agriculture, water-management, and capacity-building professional with extensive national and international development project experience across seven countries.</p>
                <div class="fac-stats">
                  <div class="fac-stat"><b>7</b><small>Countries Trained</small></div>
                  <div class="fac-stat"><b>11+</b><small>Leadership Roles</small></div>
                </div>
                <button class="fac-view-btn" data-bs-toggle="modal" data-bs-target="#facModal10">View Profile</button>
              </div>
            </div>
          </div>

          <!-- Card: Dr. Mujahid Manzoor -->
          <div class="col-lg-4 col-md-6">
            <div class="fac-card">
              <div class="fac-card-media">
                <img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="Dr. Mujahid Manzoor">
                <div class="media-overlay">
                  <h3>Dr. Mujahid Manzoor</h3>
                  <small>Research Entomologist | Honeybee Rearing Specialist | Biocontrol Expert</small>
                </div>
              </div>
              <div class="fac-card-body">
                <span class="fac-tag">Entomology</span>
                <p class="fac-card-desc">Ph.D. Entomologist and HEC-approved supervisor specializing in Integrated Pest Management, biological control, molecular entomology, and honey bee research.</p>
                <div class="fac-stats">
                  <div class="fac-stat"><b>25+</b><small>Publications</small></div>
                  <div class="fac-stat"><b>PhD</b><small>Entomology</small></div>
                </div>
                <button class="fac-view-btn" data-bs-toggle="modal" data-bs-target="#facModal11">View Profile</button>
              </div>
            </div>
          </div>

          <!-- Card: Mian Abdur Rasheed -->
          <div class="col-lg-4 col-md-6">
            <div class="fac-card">
              <div class="fac-card-media">
                <img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="Mian Abdur Rasheed">
                <div class="media-overlay">
                  <h3>Mian Abdur Rasheed</h3>
                  <small>Specialist in Entrepreneurial Skills</small>
                </div>
              </div>
              <div class="fac-card-body">
                <span class="fac-tag">Entrepreneurship &amp; Trade</span>
                <p class="fac-card-desc">Chief Executive, motivational speaker, and business leader serving on national trade, eco-security, and entrepreneurship committees across Pakistan.</p>
                <div class="fac-stats">
                  <div class="fac-stat"><b>8+</b><small>Committees</small></div>
                  <div class="fac-stat"><b>M.Phil</b><small>Sociology</small></div>
                </div>
                <button class="fac-view-btn" data-bs-toggle="modal" data-bs-target="#facModal12">View Profile</button>
              </div>
            </div>
          </div>

          <!-- Card: Robina Amin -->
          <div class="col-lg-4 col-md-6">
            <div class="fac-card">
              <div class="fac-card-media">
                <img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="Robina Amin">
                <div class="media-overlay">
                  <h3>Robina Amin</h3>
                  <small>Course Coordinator</small>
                </div>
              </div>
              <div class="fac-card-body">
                <span class="fac-tag">Agricultural Entomology</span>
                <p class="fac-card-desc">M.Sc. (Hons) Agricultural Entomologist with experience in pest management, agri-marketing, teaching, and applied entomological research.</p>
                <div class="fac-stats">
                  <div class="fac-stat"><b>3.46</b><small>MSc CGPA</small></div>
                  <div class="fac-stat"><b>6+</b><small>Years Experience</small></div>
                </div>
                <button class="fac-view-btn" data-bs-toggle="modal" data-bs-target="#facModal13">View Profile</button>
              </div>
            </div>
          </div>

          <!-- Card 1 -->
          <div class="col-lg-4 col-md-6">
            <div class="fac-card">
              <div class="fac-card-media">
                <img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="Dr. Mubeen Sarwar">
                <div class="media-overlay">
                  <h3>Dr. Mubeen Sarwar</h3>
                  <small>Senior Horticulture Consultant</small>
                </div>
              </div>
              <div class="fac-card-body">
                <span class="fac-tag">Horticulture</span>
                <p class="fac-card-desc">Experienced horticultural scientist with 12+ years of research and expertise in greenhouse production and climate-smart agriculture.</p>
                <div class="fac-stats">
                  <div class="fac-stat"><b>59+</b><small>Publications</small></div>
                  <div class="fac-stat"><b>75.068</b><small>Impact Factor</small></div>
                </div>
                <button class="fac-view-btn" data-bs-toggle="modal" data-bs-target="#facModal1">View Profile</button>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col-lg-4 col-md-6">
            <div class="fac-card">
              <div class="fac-card-media">
                <img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="Karamat Ali Zohaib">
                <div class="media-overlay">
                  <h3>Karamat Ali Zohaib</h3>
                  <small>Plant Pathologist</small>
                </div>
              </div>
              <div class="fac-card-body">
                <span class="fac-tag">Plant Pathology</span>
                <p class="fac-card-desc">Dedicated plant pathologist skilled in molecular diagnostics, plant tissue culture, and biological control research.</p>
                <div class="fac-stats">
                  <div class="fac-stat"><b>5</b><small>Positions Held</small></div>
                  <div class="fac-stat"><b>3</b><small>Countries Presented</small></div>
                </div>
                <button class="fac-view-btn" data-bs-toggle="modal" data-bs-target="#facModal2">View Profile</button>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="col-lg-4 col-md-6">
            <div class="fac-card">
              <div class="fac-card-media">
                <img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="Prof. Dr. Sajid Rashid Ahmad">
                <div class="media-overlay">
                  <h3>Prof. Dr. Sajid Rashid Ahmad</h3>
                  <small>Dean, Faculty of Geosciences</small>
                </div>
              </div>
              <div class="fac-card-body">
                <span class="fac-tag">Earth &amp; Environmental Sciences</span>
                <p class="fac-card-desc">Accomplished academic leader with 30+ years in teaching, research, and university administration across Pakistan and Canada.</p>
                <div class="fac-stats">
                  <div class="fac-stat"><b>375+</b><small>Publications</small></div>
                  <div class="fac-stat"><b>6,300+</b><small>Citations</small></div>
                </div>
                <button class="fac-view-btn" data-bs-toggle="modal" data-bs-target="#facModal3">View Profile</button>
              </div>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="col-lg-4 col-md-6">
            <div class="fac-card">
              <div class="fac-card-media">
                <img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="Prof. Dr. Muhammad Naveed Aslam">
                <div class="media-overlay">
                  <h3>Prof. Dr. M. Naveed Aslam</h3>
                  <small>Professor &amp; Chairman, Plant Pathology</small>
                </div>
              </div>
              <div class="fac-card-body">
                <span class="fac-tag">Plant Pathology</span>
                <p class="fac-card-desc">Academic leader &amp; plant pathologist with 20+ years in teaching, research and institutional leadership; postdoc from Tsinghua University, China.</p>
                <div class="fac-stats">
                  <div class="fac-stat"><b>60+</b><small>Publications</small></div>
                  <div class="fac-stat"><b>20+</b><small>Years Experience</small></div>
                </div>
                <button class="fac-view-btn" data-bs-toggle="modal" data-bs-target="#facModal4">View Profile</button>
              </div>
            </div>
          </div>

          <!-- Card 5 -->
          <div class="col-lg-4 col-md-6">
            <div class="fac-card">
              <div class="fac-card-media">
                <img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="Aqsa Muzammil">
                <div class="media-overlay">
                  <h3>Aqsa Muzammil</h3>
                  <small>IT Coordinator</small>
                </div>
              </div>
              <div class="fac-card-body">
                <span class="fac-tag">Computer Science</span>
                <p class="fac-card-desc">Computer Science professional with 5+ years of teaching experience and expertise in web development and front-end technologies.</p>
                <div class="fac-stats">
                  <div class="fac-stat"><b>5+</b><small>Years Teaching</small></div>
                  <div class="fac-stat"><b>3.98</b><small>MS CGPA</small></div>
                </div>
                <button class="fac-view-btn" data-bs-toggle="modal" data-bs-target="#facModal5">View Profile</button>
              </div>
            </div>
          </div>

          <!-- Card 6 -->
          <div class="col-lg-4 col-md-6">
            <div class="fac-card">
              <div class="fac-card-media">
                <img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="Ibtahaj Ahmad Warraich">
                <div class="media-overlay">
                  <h3>Ibtahaj Ahmad Warraich</h3>
                  <small>Legal Advisor</small>
                </div>
              </div>
              <div class="fac-card-body">
                <span class="fac-tag">Agribusiness</span>
                <p class="fac-card-desc">Agricultural business executive leading Warraich Traders — expert in agricultural trading, rice milling, and farm management.</p>
                <div class="fac-stats">
                  <div class="fac-stat"><b>5+</b><small>Years Experience</small></div>
                  <div class="fac-stat"><b>3</b><small>Businesses Led</small></div>
                </div>
                <button class="fac-view-btn" data-bs-toggle="modal" data-bs-target="#facModal6">View Profile</button>
              </div>
            </div>
          </div>

          <!-- Card 7 -->
          <div class="col-lg-4 col-md-6">
            <div class="fac-card">
              <div class="fac-card-media">
                <img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="Abu Sefyan Ibrahim Saad">
                <div class="media-overlay">
                  <h3>Abu Sefyan Ibrahim Saad</h3>
                  <small>Crop Biotechnology Specialist &amp; Wheat Breeder</small>
                </div>
              </div>
              <div class="fac-card-body">
                <span class="fac-tag">Crop Biotechnology</span>
                <p class="fac-card-desc">Agricultural research scientist and wheat breeding specialist — expert in crop biotechnology, wheat improvement, and climate-resilient technologies. Academy Representative for Africa.</p>
                <div class="fac-stats">
                  <div class="fac-stat"><b>25+</b><small>Years Research</small></div>
                  <div class="fac-stat"><b>11</b><small>Wheat Varieties</small></div>
                </div>
                <button class="fac-view-btn" data-bs-toggle="modal" data-bs-target="#facModal7">View Profile</button>
              </div>
            </div>
          </div>

          <!-- Card 8 -->
          <div class="col-lg-4 col-md-6">
            <div class="fac-card">
              <div class="fac-card-media">
                <img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="Mubarak Ali Anjum">
                <div class="media-overlay">
                  <h3>Mubarak Ali Anjum, Ph.D.</h3>
                  <small>Plant Pathologist &amp; Landscape Specialist</small>
                </div>
              </div>
              <div class="fac-card-body">
                <span class="fac-tag">Plant Pathology</span>
                <p class="fac-card-desc">Plant Pathologist and landscape professional specializing in sustainable urban greening, arid-climate arboriculture, and plant health.</p>
                <div class="fac-stats">
                  <div class="fac-stat"><b>10+</b><small>Publications</small></div>
                  <div class="fac-stat"><b>6+</b><small>Years Experience</small></div>
                </div>
                <button class="fac-view-btn" data-bs-toggle="modal" data-bs-target="#facModal8">View Profile</button>
              </div>
            </div>
          </div>

          <!-- Card: Dr. Sana Khalid -->
          <div class="col-lg-4 col-md-6">
            <div class="fac-card">
              <div class="fac-card-media">
                <img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="Dr. Sana Khalid">
                <div class="media-overlay">
                  <h3>Dr. Sana Khalid</h3>
                  <small>Expert in Molecular Biology | Virology | Diagnostics</small>
                </div>
              </div>
              <div class="fac-card-body">
                <span class="fac-tag">Molecular Biology</span>
                <p class="fac-card-desc">Assistant Professor of Botany (LCWU) specializing in plant virology, molecular biology, and biotechnology &mdash; among the top 2% most-cited scientists worldwide (2025).</p>
                <div class="fac-stats">
                  <div class="fac-stat"><b>50+</b><small>Publications</small></div>
                  <div class="fac-stat"><b>Top 2%</b><small>Cited Scientist</small></div>
                </div>
                <button class="fac-view-btn" data-bs-toggle="modal" data-bs-target="#facModal14">View Profile</button>
              </div>
            </div>
          </div>

          <!-- Card: Faiq Ali -->
          <div class="col-lg-4 col-md-6">
            <div class="fac-card">
              <div class="fac-card-media">
                <img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="Faiq Ali">
                <div class="media-overlay">
                  <h3>Faiq Ali</h3>
                  <small>Academic Coordinator | Marketing &amp; Social Media</small>
                </div>
              </div>
              <div class="fac-card-body">
                <span class="fac-tag">Marketing &amp; Coordination</span>
                <p class="fac-card-desc">Marketing &amp; finance professional serving as Admission Advisor &amp; Academic Coordinator, with experience in social media management, sales, and student admissions.</p>
                <div class="fac-stats">
                  <div class="fac-stat"><b>3+</b><small>Years Experience</small></div>
                  <div class="fac-stat"><b>BS</b><small>Marketing (Hons)</small></div>
                </div>
                <button class="fac-view-btn" data-bs-toggle="modal" data-bs-target="#facModal15">View Profile</button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

  <!-- =================== MODALS =================== -->

  <!-- Modal 1: Dr. Mubeen Sarwar -->
  <div class="modal fade fac-modal" id="facModal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header-band">
          <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="fac-modal-head">
          <img loading="lazy" class="fac-modal-avatar" src="{{ asset('assets/img/person/logo.png') }}" alt="Dr. Mubeen Sarwar">
          <div class="fac-modal-head-info">
            <h2>Dr. Mubeen Sarwar, PhD</h2>
            <div class="fac-modal-role">Senior Horticulture Consultant | Visiting Assistant Professor | HEC Approved PhD Supervisor</div>
            <div class="fac-badges">
              <span class="fac-badge"><i class="fas fa-graduation-cap"></i> PhD Horticultural Sciences</span>
              <span class="fac-badge"><i class="fas fa-briefcase"></i> 12+ Years Research</span>
              <span class="fac-badge"><i class="fas fa-users"></i> HEC Approved PhD Supervisor</span>
            </div>
          </div>
        </div>
        <div class="fac-modal-body">
          <p class="fac-modal-lead">Experienced Horticultural Scientist with 12+ years of research, 10+ years of university teaching, and extensive expertise in greenhouse production, climate-smart agriculture, landscape development, and horticultural consultancy. Proven record of research leadership, international collaboration, project management, and scientific publications.</p>

          <div class="row">
            <div class="col-md-6">
              <div class="m-section">
                <h5><i class="fas fa-graduation-cap"></i> Education</h5>
                <ul class="m-list">
                  <li><span class="mi-title">PhD, Horticultural Sciences</span><span class="mi-sub">University of Agriculture Faisalabad</span><span class="mi-sub">International Research Training – University of Wisconsin–Madison, USA</span></li>
                  <li><span class="mi-title">MSc (Hons.) Horticulture</span><span class="mi-sub">University of Agriculture Faisalabad</span></li>
                  <li><span class="mi-title">BSc (Hons.) Agricultural Sciences</span><span class="mi-sub">University of Agriculture Faisalabad</span></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="m-section">
                <h5><i class="fas fa-briefcase"></i> Professional Experience</h5>
                <ul class="m-list">
                  <li><span class="mi-title">Senior Horticulture Consultant</span><span class="mi-sub">Green Acre Scheme, Lahore</span><span class="mi-time">2023–Present</span></li>
                  <li><span class="mi-title">Visiting Assistant Professor</span><span class="mi-sub">University of the Punjab</span><span class="mi-time">2018–Present</span></li>
                  <li><span class="mi-title">Senior Horticulture Expert</span><span class="mi-sub">Green Circle Pakistan</span><span class="mi-time">2021–2022</span></li>
                  <li><span class="mi-title">Technical Support Specialist</span><span class="mi-sub">FCG Finland (ADB Project)</span><span class="mi-time">2022–2023</span></li>
                  <li><span class="mi-title">Assistant Professor</span><span class="mi-sub">University of Lahore</span><span class="mi-time">2020–2021</span></li>
                  <li><span class="mi-title">Horticulture Advisor</span><span class="mi-sub">Haji Sons International</span><span class="mi-time">2018–2020</span></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-lightbulb"></i> Core Expertise</h5>
            <div>
              <span class="m-chip">Greenhouse &amp; Protected Agriculture</span>
              <span class="m-chip">Fruit &amp; Vegetable Production</span>
              <span class="m-chip">Landscape Design &amp; Management</span>
              <span class="m-chip">Climate Change &amp; Abiotic Stress</span>
              <span class="m-chip">Seed Production &amp; Nursery Development</span>
              <span class="m-chip">Research Supervision</span>
              <span class="m-chip">Experimental Design &amp; Data Analysis</span>
              <span class="m-chip">Scientific Writing &amp; Public Speaking</span>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-trophy"></i> Key Achievements</h5>
            <ul class="m-tick">
              <li>HEC Approved PhD Supervisor</li>
              <li>Research Impact Factor: 75.068</li>
              <li>59+ International Publications</li>
              <li>Principal Investigator of HEC-funded Research Projects</li>
              <li>International Fellowship – University of Wisconsin, USA</li>
              <li>Research Productivity Award</li>
              <li>Reviewer for leading international journals</li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-cogs"></i> Technical Skills</h5>
            <div>
              <span class="m-chip">Research Design</span><span class="m-chip">SPSS</span><span class="m-chip">Statistical Analysis</span>
              <span class="m-chip">PCR</span><span class="m-chip">Spectrophotometer</span><span class="m-chip">IRGA</span>
              <span class="m-chip">Molecular Techniques</span><span class="m-chip">MS Office</span>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-id-badge"></i> Professional Memberships</h5>
            <ul class="m-tick">
              <li>American Society for Horticultural Science</li>
              <li>Society of Chemical Industry (UK)</li>
              <li>Pakistan Society for Horticultural Science</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2: Karamat Ali Zohaib -->
  <div class="modal fade fac-modal" id="facModal2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header-band">
          <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="fac-modal-head">
          <img loading="lazy" class="fac-modal-avatar" src="{{ asset('assets/img/person/logo.png') }}" alt="Karamat Ali Zohaib">
          <div class="fac-modal-head-info">
            <h2>Karamat Ali Zohaib</h2>
            <div class="fac-modal-role">Plant Pathologist | Research Associate | Visiting Lecturer</div>
            <div class="fac-badges">
              <span class="fac-badge"><i class="fas fa-graduation-cap"></i> M.Sc (Hons.) Plant Pathology</span>
              <span class="fac-badge"><i class="fas fa-flask"></i> Research Associate</span>
              <span class="fac-badge"><i class="fas fa-award"></i> PM Merit Laptop Award</span>
            </div>
          </div>
        </div>
        <div class="fac-modal-body">
          <p class="fac-modal-lead">Dedicated Plant Pathologist and academic with experience in university teaching, plant disease management, microbiology, molecular biology, and sustainable agriculture. Skilled in fungal and bacterial pathogen identification, molecular diagnostics, plant tissue culture, and biological control research. Passionate about research, innovation, and higher education.</p>

          <div class="row">
            <div class="col-md-6">
              <div class="m-section">
                <h5><i class="fas fa-graduation-cap"></i> Education</h5>
                <ul class="m-list">
                  <li><span class="mi-title">M.Sc. (Hons.) Plant Pathology</span><span class="mi-sub">University of the Punjab</span></li>
                  <li><span class="mi-title">B.Sc. (Hons.) Plant Pathology</span><span class="mi-sub">University of Agriculture, Faisalabad</span></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="m-section">
                <h5><i class="fas fa-briefcase"></i> Professional Experience</h5>
                <ul class="m-list">
                  <li><span class="mi-title">Visiting Lecturer</span><span class="mi-sub">Faculty of Agricultural Sciences, University of the Punjab</span><span class="mi-time">2022–Present</span></li>
                  <li><span class="mi-title">Research Associate</span><span class="mi-sub">First Fungal Culture Bank of Pakistan</span><span class="mi-time">2021–2025</span></li>
                  <li><span class="mi-title">Assistant Superintendent</span><span class="mi-sub">University of the Punjab</span><span class="mi-time">2023–Present</span></li>
                  <li><span class="mi-title">Producer Unit Manager</span><span class="mi-sub">Lok Sanjh Foundation (Better Cotton Initiative)</span><span class="mi-time">2020–2021</span></li>
                  <li><span class="mi-title">Research Intern</span><span class="mi-sub">Pakistan Agricultural Research Council (PARC)</span><span class="mi-time">2017</span></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-lightbulb"></i> Core Expertise</h5>
            <div>
              <span class="m-chip">Plant Pathology</span><span class="m-chip">Plant Disease Management</span>
              <span class="m-chip">Molecular Biology &amp; PCR</span><span class="m-chip">Plant Tissue Culture</span>
              <span class="m-chip">Microbial Isolation &amp; Identification</span><span class="m-chip">Biological Control</span>
              <span class="m-chip">Plant Microbiome Research</span><span class="m-chip">Mushroom Cultivation</span>
              <span class="m-chip">Laboratory &amp; Greenhouse Research</span><span class="m-chip">University Teaching</span>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-flask"></i> Research Highlights</h5>
            <ul class="m-tick">
              <li>Published research in Scientific Reports, Sains Malaysiana, Plant Bulletin, and other peer-reviewed journals.</li>
              <li>Presented research at international conferences in Oman, UAE, and Pakistan.</li>
              <li>Research interests include plant microbiome, biological control, fungal biodiversity, sustainable agriculture, and molecular plant pathology.</li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-cogs"></i> Technical Skills</h5>
            <div>
              <span class="m-chip">PCR</span><span class="m-chip">DNA Extraction</span><span class="m-chip">Gel Electrophoresis</span>
              <span class="m-chip">Microscopy</span><span class="m-chip">Plant Tissue Culture</span>
              <span class="m-chip">Microbial Culture Techniques</span><span class="m-chip">Greenhouse &amp; Field Experiments</span>
              <span class="m-chip">Microsoft Office</span><span class="m-chip">Data Analysis</span>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-trophy"></i> Achievements</h5>
            <ul class="m-tick">
              <li>Prime Minister's Merit Laptop Award</li>
              <li>Outcome-Based Education (OBE) Certified</li>
              <li>Certified Trainer (Water Security – GIZ)</li>
              <li>First Aid Certified (Rescue 1122)</li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-id-badge"></i> Professional Memberships</h5>
            <ul class="m-tick">
              <li>Pakistan Phytopathological Society</li>
              <li>Pakistan Society of Horticultural Science</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3: Prof. Dr. Sajid Rashid Ahmad -->
  <div class="modal fade fac-modal" id="facModal3" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header-band">
          <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="fac-modal-head">
          <img loading="lazy" class="fac-modal-avatar" src="{{ asset('assets/img/person/logo.png') }}" alt="Prof. Dr. Sajid Rashid Ahmad">
          <div class="fac-modal-head-info">
            <h2>Prof. Dr. Sajid Rashid Ahmad</h2>
            <div class="fac-modal-role">Dean, Faculty of Geosciences, University of the Punjab, Lahore | Professor of Earth &amp; Environmental Sciences | Institutional Leader | Researcher</div>
            <div class="fac-badges">
              <span class="fac-badge"><i class="fas fa-graduation-cap"></i> PhD (University of Windsor, Canada)</span>
              <span class="fac-badge"><i class="fas fa-briefcase"></i> 30+ Years Experience</span>
              <span class="fac-badge"><i class="fas fa-chart-line"></i> H-Index 42</span>
            </div>
            <p class="resume-contact" style="color:var(--fac-muted);font-size:0.86rem;margin:6px 0 0;">
              <span style="margin-right:16px;"><i class="fas fa-envelope" style="color:var(--fac-primary);"></i> sajidpu@yahoo.com</span>
              <span style="margin-right:16px;"><i class="fas fa-envelope" style="color:var(--fac-primary);"></i> sajid.geo@pu.edu.pk</span>
              <span><i class="fas fa-phone" style="color:var(--fac-primary);"></i> +92 312 9801510</span>
            </p>
          </div>
        </div>
        <div class="fac-modal-body">
          <p class="fac-modal-lead">An accomplished academic leader with over 30 years of teaching, research, and university administration in Pakistan and Canada. Currently serving as Dean, Faculty of Geosciences, University of the Punjab, with previous leadership roles including Acting Vice Chancellor, Controller of Examinations, Principal, Resident Officer-I, and Director GIS Centre. Recognized internationally for excellence in environmental research, institutional governance, and academic leadership.</p>

          <div class="row">
            <div class="col-md-6">
              <div class="m-section">
                <h5><i class="fas fa-graduation-cap"></i> Education</h5>
                <ul class="m-list">
                  <li><span class="mi-title">PhD &amp; MSc – Earth &amp; Environmental Sciences</span><span class="mi-sub">University of Windsor, Canada</span></li>
                  <li><span class="mi-title">MBA (Finance)</span><span class="mi-sub">University of the Punjab, Lahore</span></li>
                  <li><span class="mi-title">MSc Engineering Geology</span></li>
                  <li><span class="mi-title">BSc Applied Geology</span><span class="mi-sub">University of the Punjab, Lahore</span></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="m-section">
                <h5><i class="fas fa-chart-line"></i> Academic &amp; Research Excellence</h5>
                <ul class="m-tick">
                  <li>375+ Peer-reviewed research publications</li>
                  <li>6,300+ Citations</li>
                  <li>H-Index: 42 (Google Scholar), 34 (Web of Science), 32 (Scopus)</li>
                  <li>800+ Cumulative Journal Impact Factor</li>
                  <li>PKR 50+ Million Competitive Research Funding</li>
                  <li>57 PhD, 270 MPhil/MS, and 76 BS/MSc theses supervised</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-microscope"></i> Research Areas</h5>
            <div>
              <span class="m-chip">Climate Change Adaptation</span><span class="m-chip">Hydrology &amp; Water Resources</span>
              <span class="m-chip">Environmental Pollution &amp; Risk Assessment</span><span class="m-chip">Microplastics &amp; Nanotechnology</span>
              <span class="m-chip">GIS &amp; Remote Sensing</span><span class="m-chip">Environmental Policy &amp; Sustainability</span>
              <span class="m-chip">Geospatial Modeling</span>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-chalkboard-teacher"></i> Teaching Expertise</h5>
            <div>
              <span class="m-chip">Research Methods</span><span class="m-chip">Remote Sensing &amp; GIS</span>
              <span class="m-chip">Climate Change</span><span class="m-chip">Urban Hydrology</span>
              <span class="m-chip">Engineering Geology</span><span class="m-chip">Environmental Impact Assessment</span>
              <span class="m-chip">Earth &amp; Environmental Sciences</span>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-sitemap"></i> Leadership &amp; Administration</h5>
            <p class="m-subhead">University of the Punjab</p>
            <ul class="m-tick">
              <li>Dean, Faculty of Geosciences</li>
              <li>Former Acting Vice Chancellor</li>
              <li>Former Controller of Examinations</li>
              <li>Former Principal</li>
              <li>Former Resident Officer-I</li>
              <li>Former Director, GIS Centre</li>
              <li>Member, Syndicate, ASRB, Finance &amp; Planning Committees</li>
              <li>Chairman/Convener of several strategic university committees</li>
            </ul>
            <p class="m-subhead">University of Windsor, Canada</p>
            <ul class="m-tick">
              <li>President, Graduate Student Society</li>
              <li>Member, Board of Governors</li>
              <li>Member, Senate</li>
              <li>President &amp; Provost Search Committees</li>
              <li>Student Wellness Committee</li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-handshake"></i> Projects and Collaboration</h5>
            <p style="margin-bottom:10px;color:#444;">Research funded by:</p>
            <ul class="m-tick">
              <li>Higher Education Commission (HEC)</li>
              <li>Punjab Higher Education Commission (PHEC)</li>
              <li>UNDP</li>
              <li>Ministry of Climate Change</li>
            </ul>
            <p style="margin-top:12px;color:#444;">International research collaborations across Asia, Europe, and North America.</p>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-clipboard-check"></i> Professional Service</h5>
            <ul class="m-tick">
              <li>External Examiner &amp; PhD Reviewer for leading universities in Pakistan and abroad</li>
              <li>Chief Organizer, International Conference on Emerging Trends in Earth &amp; Environmental Sciences (ETEES) – 2017, 2021 &amp; 2023</li>
              <li>Reviewer for leading international journals</li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-id-badge"></i> Professional Memberships</h5>
            <ul class="m-tick">
              <li>Former President, Punjab Geological Society</li>
              <li>Lifetime Member, National Geological Society</li>
              <li>Lifetime Member, Punjab Geological Society</li>
              <li>Member, Royal Geographical Society (UK)</li>
              <li>Member, Association of Professional Geoscientists of Ontario (APGO)</li>
              <li>Member, International Association of Hydrogeologists (IAH)</li>
              <li>President, Educational Division, I Am Pakistan Worldwide Movement (Ottawa, Canada)</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4: Prof. Dr. Muhammad Naveed Aslam -->
  <div class="modal fade fac-modal" id="facModal4" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header-band">
          <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="fac-modal-head">
          <img loading="lazy" class="fac-modal-avatar" src="{{ asset('assets/img/person/logo.png') }}" alt="Prof. Dr. Muhammad Naveed Aslam">
          <div class="fac-modal-head-info">
            <h2>Prof. Dr. Muhammad Naveed Aslam (PhD)</h2>
            <div class="fac-modal-role">Professor &amp; Chairman, Department of Plant Pathology, Faculty of Agriculture &amp; Environment, The Islamia University of Bahawalpur | Director, Advanced Studies &amp; Research</div>
            <div class="fac-badges">
              <span class="fac-badge"><i class="fas fa-graduation-cap"></i> PhD Plant Pathology</span>
              <span class="fac-badge"><i class="fas fa-briefcase"></i> Professor &amp; Chairman</span>
              <span class="fac-badge"><i class="fas fa-flask"></i> Postdoc — Tsinghua University, China</span>
              <span class="fac-badge"><i class="fas fa-clock"></i> 20+ Years Experience</span>
            </div>
          </div>
        </div>
        <div class="fac-modal-body">
          <p class="fac-modal-lead">Dedicated academic leader and plant pathologist with more than 20 years of experience in teaching, research, academic administration and institutional leadership. Experienced in curriculum implementation, quality assurance, governance, committee coordination and stakeholder management, with a strong record of research, public-sector service and results-driven leadership.</p>

          <div class="row">
            <div class="col-md-6">
              <div class="m-section">
                <h5><i class="fas fa-sitemap"></i> Leadership &amp; Administrative Experience</h5>
                <ul class="m-list">
                  <li><span class="mi-title">Professor, Department of Plant Pathology</span><span class="mi-sub">The Islamia University of Bahawalpur (IUB)</span><span class="mi-time">2022–Present</span></li>
                  <li><span class="mi-title">Director, Teaching &amp; Research Assistants</span><span class="mi-sub">IUB</span><span class="mi-time">2022–2024</span></li>
                  <li><span class="mi-title">Director, Sub Campus Ahmad Pur East</span><span class="mi-sub">IUB</span><span class="mi-time">2024–2025</span></li>
                  <li><span class="mi-title">Principal Officer, Space Management</span><span class="mi-sub">IUB</span></li>
                  <li><span class="mi-title">Coordinator, Teaching &amp; Research Assistants Scheme</span><span class="mi-sub">IUB</span><span class="mi-time">2021–2022</span></li>
                  <li><span class="mi-title">Chairman, Departmental Tenure Review Committee &amp; Board of Studies</span><span class="mi-sub">Department of Plant Pathology, IUB</span></li>
                  <li><span class="mi-title">Convenor, National Agricultural Education Accreditation Council (NAEAC)</span><span class="mi-sub">HEC</span><span class="mi-time">since 2017</span></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="m-section">
                <h5><i class="fas fa-graduation-cap"></i> Education &amp; International Research</h5>
                <ul class="m-list">
                  <li><span class="mi-title">Postdoctoral Research / Senior Visiting Scientist</span><span class="mi-sub">Tsinghua University, Beijing, China — RNA Interference (RNAi) Technology for Begomovirus Control, supervised by Prof. Dr. Yule Liu (supported by HEC)</span><span class="mi-time">2025–2026</span></li>
                  <li><span class="mi-title">PhD, Plant Pathology</span><span class="mi-sub">PMAS-Arid Agriculture University Rawalpindi — HEC Indigenous PhD Fellowship</span><span class="mi-time">2011–2015</span></li>
                  <li><span class="mi-title">MSc (Hons.), Plant Pathology</span><span class="mi-sub">PMAS-Arid Agriculture University Rawalpindi</span><span class="mi-time">2002–2004</span></li>
                  <li><span class="mi-title">BSc (Hons.), Agriculture</span><span class="mi-sub">PMAS-Arid Agriculture University Rawalpindi</span><span class="mi-time">1998–2002</span></li>
                  <li><span class="mi-title">Visiting Scientist</span><span class="mi-sub">Department of Plant Pathology, University of Florida, Gainesville, USA</span><span class="mi-time">2013–2014</span></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-flask"></i> Research &amp; Scholarly Contributions</h5>
            <p style="color:#444;margin-bottom:12px;">Author / co-author of <strong>60+ research publications</strong>, with recent work appearing in journals including <em>Frontiers in Plant Science</em>, <em>Physiological and Molecular Plant Pathology</em>, <em>Pest Management Science</em>, <em>Current Microbiology</em>, and <em>The Crop Journal</em>.</p>
            <div>
              <span class="m-chip">Plant Pathology</span><span class="m-chip">Bacterial Wilt</span>
              <span class="m-chip">Plant Viruses</span><span class="m-chip">Biological Control</span>
              <span class="m-chip">Plant–Microbe Interactions</span><span class="m-chip">Disease Management</span>
              <span class="m-chip">Molecular Detection</span><span class="m-chip">Sustainable Agriculture</span>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-project-diagram"></i> Research Projects &amp; Funding</h5>
            <p style="color:#444;margin:0;">Served as <strong>Principal Investigator</strong> on HEC-funded projects concerning bacterial wilt of tomato and molecular characterization / race classification of bacterial spot in chili and tomato. Also served as <strong>Co-Principal Investigator</strong> on HEC-funded projects involving biological control, nematode management and vegetable virus detection.</p>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-pen-nib"></i> Professional &amp; Academic Service</h5>
            <ul class="m-tick">
              <li>Editor-in-Chief: <strong>Plant Bulletin</strong> — HEC Approved Y Category</li>
              <li>Editor: <strong>Plant Protection</strong> — HEC Approved X Category</li>
              <li>Editor: <strong>Journal of Plant Pathology</strong> — HEC Approved Y Category</li>
              <li>Reviewer for multiple high-impact journals</li>
              <li>Member, Academic Council, Senate and Boards of Faculty / Studies at IUB and other institutions</li>
              <li>Former Joint Secretary &amp; Councilor, Pakistan Phytopathological Society</li>
            </ul>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="m-section">
                <h5><i class="fas fa-trophy"></i> Key Achievements</h5>
                <ul class="m-tick">
                  <li>HEC Postdoctoral Fellowship (2025)</li>
                  <li>HEC Indigenous PhD Scholarship</li>
                  <li>HEC NRPU Project</li>
                  <li>International Research Support Initiative</li>
                  <li>Excellent Coordinator Award, China</li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="m-section">
                <h5><i class="fas fa-star"></i> Core Competencies</h5>
                <div>
                  <span class="m-chip">Strategic Planning</span><span class="m-chip">Policy Implementation</span>
                  <span class="m-chip">Academic Governance</span><span class="m-chip">Quality Assurance</span>
                  <span class="m-chip">Research Leadership</span><span class="m-chip">Committee Coordination</span>
                  <span class="m-chip">Communication &amp; Presentation</span><span class="m-chip">Digital &amp; Office Tools</span>
                </div>
              </div>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-user-check"></i> References</h5>
            <ul class="m-list">
              <li><span class="mi-title">Prof. Dr. Tariq Mukhtar</span><span class="mi-sub">Dean, Faculty of Agriculture, PMAS-Arid Agriculture University Rawalpindi</span></li>
              <li><span class="mi-title">Prof. Dr. Saeed Ahmad Buzdar</span><span class="mi-sub">Vice Chancellor, Thal University Bhakkar</span></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5: Aqsa Muzammil -->
  <div class="modal fade fac-modal" id="facModal5" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header-band">
          <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="fac-modal-head">
          <img loading="lazy" class="fac-modal-avatar" src="{{ asset('assets/img/person/logo.png') }}" alt="Aqsa Muzammil">
          <div class="fac-modal-head-info">
            <h2>Aqsa Muzammil</h2>
            <div class="fac-modal-role">IT Coordinator | Web Designer | Front-End Developer</div>
            <div class="fac-badges">
              <span class="fac-badge"><i class="fas fa-graduation-cap"></i> MS Computer Science</span>
              <span class="fac-badge"><i class="fas fa-code"></i> Front-End Developer</span>
              <span class="fac-badge"><i class="fas fa-star"></i> CGPA 3.98 / 4.00</span>
            </div>
          </div>
        </div>
        <div class="fac-modal-body">
          <p class="fac-modal-lead">Dedicated Computer Science professional with 5+ years of teaching experience and a strong academic background in Computer Science. Skilled in web development, front-end technologies, mentoring students, and creating practical learning experiences. Passionate about continuous learning, technical documentation, and innovative problem-solving.</p>

          <div class="row">
            <div class="col-md-6">
              <div class="m-section">
                <h5><i class="fas fa-graduation-cap"></i> Education</h5>
                <ul class="m-list">
                  <li><span class="mi-title">MS Computer Science</span><span class="mi-sub">Islamia University of Bahawalpur (2022)</span><span class="mi-time">CGPA: 3.98/4.00</span></li>
                  <li><span class="mi-title">BS Information Technology</span><span class="mi-sub">Government Sadiq College Women University Bahawalpur (2019)</span><span class="mi-time">CGPA: 3.88/4.00</span></li>
                  <li><span class="mi-title">FSc (Pre-Engineering)</span><span class="mi-time">2015</span></li>
                  <li><span class="mi-title">Matriculation</span><span class="mi-time">2013</span></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="m-section">
                <h5><i class="fas fa-briefcase"></i> Professional Experience</h5>
                <p class="m-subhead" style="margin-top:0;">Computer Science Lecturer (5+ Years)</p>
                <ul class="m-tick">
                  <li>Delivered Computer Science and IT courses.</li>
                  <li>Guided students in programming and software development.</li>
                  <li>Designed responsive websites using HTML, CSS, and JavaScript.</li>
                  <li>Assisted students in academic and technical projects.</li>
                  <li>Prepared technical documentation and educational materials.</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-certificate"></i> Certifications</h5>
            <ul class="m-tick">
              <li>Diploma in Web Designing (Aptech Bahawalpur)</li>
              <li>Diploma in Microsoft Office (Lyceum of South Asia)</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6: Ibtahaj Ahmad Warraich -->
  <div class="modal fade fac-modal" id="facModal6" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header-band">
          <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="fac-modal-head">
          <img loading="lazy" class="fac-modal-avatar" src="{{ asset('assets/img/person/logo.png') }}" alt="Ibtahaj Ahmad Warraich">
          <div class="fac-modal-head-info">
            <h2>Ibtahaj Ahmad Warraich</h2>
            <div class="fac-modal-role">Legal Advisor | Chief Executive Officer, Warraich Traders | Agricultural Business Leader</div>
            <div class="fac-badges">
              <span class="fac-badge"><i class="fas fa-briefcase"></i> CEO — Warraich Traders</span>
              <span class="fac-badge"><i class="fas fa-graduation-cap"></i> LL.B. — University of the Punjab</span>
              <span class="fac-badge"><i class="fas fa-map-marker-alt"></i> Bahawalnagar, Pakistan</span>
            </div>
          </div>
        </div>
        <div class="fac-modal-body">
          <p class="fac-modal-lead">Dynamic agricultural business executive with extensive experience in agricultural trading, rice milling operations, farm management, and business development. Currently leading Warraich Traders as Chief Executive Officer, managing procurement, processing, supply chain, and sales of rice, wheat, sesame, and other agricultural commodities. Skilled in strategic planning, operational management, financial decision-making, and building long-term relationships with farmers, suppliers, and buyers. Supported by a legal education and strong leadership, communication, and organizational skills.</p>

          <div class="m-section">
            <h5><i class="fas fa-lightbulb"></i> Core Expertise</h5>
            <div>
              <span class="m-chip">Agricultural Trading</span>
              <span class="m-chip">Rice Milling Operations</span>
              <span class="m-chip">Farm Management</span>
              <span class="m-chip">Supply Chain &amp; Logistics</span>
              <span class="m-chip">Procurement &amp; Sales</span>
              <span class="m-chip">Business Development</span>
              <span class="m-chip">Financial Management</span>
              <span class="m-chip">Strategic Planning</span>
              <span class="m-chip">Team Leadership</span>
              <span class="m-chip">Relationship Management</span>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-briefcase"></i> Professional Experience</h5>

            <p class="m-subhead" style="margin-top:0;">Chief Executive Officer — Warraich Traders <span style="color:var(--fac-primary);font-weight:600;">(Jan 2023 – Present)</span></p>
            <ul class="m-tick">
              <li>Lead procurement, processing, and sales of agricultural commodities.</li>
              <li>Oversee rice milling operations and quality control.</li>
              <li>Develop business growth strategies and expand market reach.</li>
              <li>Manage supply chain, logistics, pricing, and financial performance.</li>
            </ul>

            <p class="m-subhead">Owner &amp; Farm Manager — Warraich Agriculture Farm <span style="color:var(--fac-primary);font-weight:600;">(Dec 2021 – Dec 2023)</span></p>
            <ul class="m-tick">
              <li>Managed crop planning, cultivation, irrigation, and harvesting.</li>
              <li>Supervised workforce and agricultural operations.</li>
              <li>Implemented profitable crop production strategies.</li>
              <li>Oversaw procurement, storage, and crop sales.</li>
            </ul>

            <p class="m-subhead">Business Development Officer — Meskay &amp; Femtee Trading Co. Pvt. Ltd. <span style="color:var(--fac-primary);font-weight:600;">(Dec 2020 – Dec 2021)</span></p>
            <ul class="m-tick">
              <li>Identified new business opportunities.</li>
              <li>Managed customer relationships.</li>
              <li>Conducted market research and prepared business proposals.</li>
              <li>Supported sales and business expansion initiatives.</li>
            </ul>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="m-section">
                <h5><i class="fas fa-graduation-cap"></i> Education</h5>
                <ul class="m-list">
                  <li><span class="mi-title">LL.B. (Bachelor of Legislative Law)</span><span class="mi-sub">University of the Punjab, Lahore</span></li>
                  <li><span class="mi-title">Bachelor of Arts (B.A.)</span><span class="mi-sub">University of the Punjab, Lahore</span></li>
                  <li><span class="mi-title">Intermediate</span><span class="mi-sub">BISE Bahawalpur</span></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="m-section">
                <h5><i class="fas fa-certificate"></i> Certifications</h5>
                <ul class="m-tick">
                  <li>Laser Tractor Operation</li>
                  <li>Spoken English</li>
                  <li>MS Office &amp; Basic Computer Skills</li>
                  <li>Windows &amp; CorelDRAW</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-trophy"></i> Achievements</h5>
            <ul class="m-tick">
              <li>Participant – ROBOTICA 2019, University of Central Punjab</li>
              <li>Participant – Youth General Assembly Session on Modern Politics</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 7: Abu Sefyan Ibrahim Saad -->
  <div class="modal fade fac-modal" id="facModal7" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header-band">
          <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="fac-modal-head">
          <img loading="lazy" class="fac-modal-avatar" src="{{ asset('assets/img/person/logo.png') }}" alt="Abu Sefyan Ibrahim Saad">
          <div class="fac-modal-head-info">
            <h2>Abu Sefyan Ibrahim Saad</h2>
            <div class="fac-modal-role">Crop Biotechnology Specialist | Wheat Breeder | Agricultural Research Scientist — Agricultural Research Corporation (ARC), Sudan</div>
            <div class="fac-badges">
              <span class="fac-badge"><i class="fas fa-graduation-cap"></i> PhD Crop Biotechnology (China)</span>
              <span class="fac-badge"><i class="fas fa-flask"></i> ARC, Sudan</span>
              <span class="fac-badge"><i class="fas fa-globe-africa"></i> Academy Representative for Africa</span>
            </div>
          </div>
        </div>
        <div class="fac-modal-body">
          <p class="fac-modal-lead">Agricultural research scientist and wheat breeding specialist with extensive experience in crop biotechnology, wheat improvement, drought and heat-stress research, genetic engineering, marker-assisted selection, and agricultural technology transfer. Experienced in national wheat research coordination, field breeding programs, international research projects, and development of climate-resilient wheat technologies.</p>

          <div class="m-section">
            <h5><i class="fas fa-lightbulb"></i> Core Expertise</h5>
            <div>
              <span class="m-chip">Wheat Breeding &amp; Genetic Improvement</span>
              <span class="m-chip">Crop Biotechnology &amp; Genetic Engineering</span>
              <span class="m-chip">Drought, Heat &amp; Salt-Stress Tolerance</span>
              <span class="m-chip">Marker-Assisted Selection</span>
              <span class="m-chip">Plant Physiology &amp; Stress Research</span>
              <span class="m-chip">Agricultural Field Experiments</span>
              <span class="m-chip">Statistical Analysis</span>
              <span class="m-chip">Seed Systems &amp; Technology Transfer</span>
              <span class="m-chip">Research Coordination &amp; Capacity Building</span>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-briefcase"></i> Professional Experience</h5>
            <ul class="m-list">
              <li><span class="mi-title">Wheat Breeder</span><span class="mi-sub">New Halfa Research Station, Kassala State</span> <span class="mi-time">Oct 2023 – Aug 2025</span></li>
              <li><span class="mi-title">National Coordinator, Wheat Research Program</span><span class="mi-sub">Agricultural Research Corporation, Sudan</span> <span class="mi-time">Aug 2021 – Oct 2023</span></li>
              <li><span class="mi-title">Wheat Breeding Program</span><span class="mi-sub">Agricultural Research Corporation, Gezira State</span> <span class="mi-time">Dec 2012 – Aug 2021</span></li>
              <li><span class="mi-title">Wheat Breeder</span><span class="mi-sub">Dongola Research Station, Northern State, Sudan</span> <span class="mi-time">May 2005 – Dec 2006</span></li>
              <li><span class="mi-title">Assistant Researcher, Wheat Research Program</span><span class="mi-sub">Agricultural Research Corporation, Wad Medani</span> <span class="mi-time">Oct 1999 – Mar 2005</span></li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-project-diagram"></i> Project Leadership</h5>
            <ul class="m-list">
              <li><span class="mi-title">SATREPS Climate-Resilient Wheat Project — Coordinator</span><span class="mi-sub">Tottori University, Japan &amp; Agricultural Research Corporation</span> <span class="mi-time">2019–2024</span></li>
              <li><span class="mi-title">TAAT Wheat Project — Coordinator, Sudan</span><span class="mi-sub">Technologies for African Agricultural Transformation, funded by the African Development Bank</span> <span class="mi-time">2023–2026</span></li>
            </ul>
            <p style="color:#444;margin-top:8px;">Also contributed to EFSAC, SARD-SC, TAAT, and ENABLE Youth Sudan agricultural research and technology-transfer initiatives.</p>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-trophy"></i> Achievements</h5>
            <ul class="m-tick">
              <li>Contributed to the development and release of 7 high-yielding, heat-tolerant bread wheat varieties and 4 durum wheat varieties in Sudan.</li>
              <li>Studied genetic and physiological traits associated with wheat yield under drought and heat stress.</li>
              <li>Developed four transgenic wheat lines with enhanced tolerance to drought and salt stresses.</li>
              <li>Contributed to improved wheat breeding through genetic engineering and marker-assisted selection.</li>
              <li>Organized and coordinated field days, training programs, symposia, workshops, and research activities.</li>
              <li>Supported agricultural technology transfer and capacity building through national and regional initiatives.</li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-graduation-cap"></i> Education</h5>
            <ul class="m-list">
              <li>
                <span class="mi-title">Ph.D. in Crop Biotechnology</span>
                <span class="mi-sub">Huazhong Agricultural University, Wuhan, P.R. China</span> <span class="mi-time">2012</span>
                <span class="mi-sub" style="display:block;font-style:italic;margin-top:3px;">Dissertation: Rice NAC Genes and Fusarium TPS Genes Enhance Tolerance of Transgenic Wheat to Drought and Salt Stresses.</span>
              </li>
              <li>
                <span class="mi-title">M.Sc. in Plant Breeding</span>
                <span class="mi-sub">University of Gezira, Sudan</span> <span class="mi-time">2005</span>
                <span class="mi-sub" style="display:block;font-style:italic;margin-top:3px;">Thesis: Interaction of Wheat Lines with Reduced Irrigation under Heat-Stressed Environments.</span>
              </li>
              <li><span class="mi-title">B.Sc. Agriculture with Honors, Crop Science</span><span class="mi-sub">University of Gezira, Sudan</span> <span class="mi-time">1998</span></li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-globe"></i> International Training &amp; Research</h5>
            <ul class="m-tick">
              <li>Advanced Wheat Improvement — CIMMYT, Mexico</li>
              <li>Statistical Analysis of Agricultural Field Experiments — ICARDA</li>
              <li>Participatory Innovation Platforms — ICARDA, Egypt</li>
              <li>Hybrid Rice Training — China</li>
              <li>Quality Seed Supply — ARC/ICARDA</li>
              <li>Wheat Improvement &amp; Plant Physiology — CIMMYT, Mexico</li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-book"></i> Selected Publications</h5>
            <ul class="m-tick">
              <li>Genome Wide Association Study of Yield and Yield-Related Traits in Elite Spring Bread Wheat Genotypes — American Journal of Plant Sciences, 2023.</li>
              <li>Probing Differential Metabolome Responses among Wheat Genotypes to Heat Stress using FTIR Chemical Fingerprinting — Agriculture, 2022.</li>
              <li>A rice stress-responsive NAC gene enhances tolerance of transgenic wheat to drought and salt stresses — Plant Science, 2013.</li>
              <li>Evaluating Potential Genetic Gains in Wheat Associated with Stress-Adaptive Trait Expression — Crop Science, 2007.</li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-bullseye"></i> Professional Focus</h5>
            <div>
              <span class="m-chip">Climate-Resilient Wheat Improvement</span>
              <span class="m-chip">Sustainable Crop Production</span>
              <span class="m-chip">Biotechnology-Enabled Breeding</span>
              <span class="m-chip">Stress-Tolerant Germplasm</span>
              <span class="m-chip">Agricultural Research Leadership</span>
              <span class="m-chip">Technology Transfer</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 8: Mubarak Ali Anjum -->
  <div class="modal fade fac-modal" id="facModal8" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header-band">
          <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="fac-modal-head">
          <img loading="lazy" class="fac-modal-avatar" src="{{ asset('assets/img/person/logo.png') }}" alt="Mubarak Ali Anjum">
          <div class="fac-modal-head-info">
            <h2>Mubarak Ali Anjum, Ph.D.</h2>
            <div class="fac-modal-role">Plant Pathologist | Landscape &amp; Urban Greening Specialist</div>
            <div class="fac-badges">
              <span class="fac-badge"><i class="fas fa-graduation-cap"></i> PhD Plant Pathology</span>
              <span class="fac-badge"><i class="fas fa-tree"></i> Landscape &amp; Urban Greening</span>
              <span class="fac-badge"><i class="fas fa-map-marker-alt"></i> Riyadh, Saudi Arabia</span>
            </div>
          </div>
        </div>
        <div class="fac-modal-body">
          <p class="fac-modal-lead">Accomplished Plant Pathologist and Landscape Professional with a Ph.D. in Plant Pathology and over six years of professional experience in landscape management, nursery operations, irrigation, plant health, arboriculture, and project coordination. Experienced across Pakistan and Saudi Arabia in sustainable landscaping, arid-climate plant management, integrated pest and disease management, and green infrastructure. Currently contributing to Saudi Vision 2030 through sustainable urban greening and climate-resilient landscape projects.</p>

          <div class="m-section">
            <h5><i class="fas fa-lightbulb"></i> Core Expertise</h5>
            <div>
              <span class="m-chip">Sustainable Landscaping &amp; Urban Greening</span>
              <span class="m-chip">Plant Nursery Management</span>
              <span class="m-chip">Arid &amp; Semi-Arid Arboriculture</span>
              <span class="m-chip">Water-Efficient Irrigation</span>
              <span class="m-chip">Integrated Pest &amp; Disease Management (IPM)</span>
              <span class="m-chip">Tree Risk Assessment</span>
              <span class="m-chip">Urban Forestry</span>
              <span class="m-chip">Native &amp; Adaptive Plant Selection</span>
              <span class="m-chip">Soil Health &amp; Growing Media</span>
              <span class="m-chip">Project Coordination</span>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-briefcase"></i> Professional Experience</h5>
            <p class="m-subhead" style="margin-top:0;">Landscape Associate — Rentokil Boecker <span style="color:var(--fac-primary);font-weight:600;">(Dec 2025 – Present, Riyadh, Saudi Arabia)</span></p>
            <ul class="m-tick">
              <li>Manage large-tree relocation, plant quality control, acclimatization, and establishment of ornamental and native species.</li>
              <li>Support nursery and landscape operations focused on plant health, growth performance, and survival.</li>
              <li>Develop efficient irrigation schedules and strategies for water conservation.</li>
              <li>Implement IPM programs for nursery and landscape environments.</li>
              <li>Select climate-resilient and native plants suited to Middle Eastern conditions.</li>
              <li>Contribute to Saudi Vision 2030 sustainable urban greening and green infrastructure initiatives.</li>
            </ul>
            <p class="m-subhead">Agricultural Engineer — Manshoor Nursery Farms <span style="color:var(--fac-primary);font-weight:600;">(Sep 2021 – Sep 2025, Pattoki, Pakistan)</span></p>
            <ul class="m-tick">
              <li>Delivered landscaping activities for the Orange Line Metro Train Project, including plant installation, maintenance, and plant health optimization.</li>
              <li>Managed landscape design and maintenance according to client specifications and standards.</li>
              <li>Interpreted landscape design blueprints and translated technical drawings into practical site applications.</li>
              <li>Managed propagation, potting, pruning, acclimatization, and nursery operations.</li>
              <li>Implemented Integrated Pest Management to reduce dependence on chemical pesticides.</li>
              <li>Developed sustainable irrigation practices and optimized resource utilization.</li>
              <li>Managed procurement and material control while maintaining project budgets.</li>
              <li>Formulated soil mixtures to improve plant growth and seed germination.</li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-graduation-cap"></i> Education</h5>
            <ul class="m-list">
              <li><span class="mi-title">Ph.D. – Plant Pathology</span> <span class="mi-time">2017–2025</span></li>
              <li><span class="mi-title">M.Sc. (Hons) – Plant Pathology</span> <span class="mi-time">2015–2017</span></li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-certificate"></i> Certifications &amp; Professional Development</h5>
            <ul class="m-tick">
              <li>Sustainability Professionals of Saudi Arabia</li>
              <li>WTO Agreement on Agriculture</li>
              <li>Microsoft Office</li>
              <li>Basic AutoCAD</li>
            </ul>
            <p class="m-subhead">Conferences</p>
            <ul class="m-tick">
              <li>Agricultural Nanotechnology &amp; Sustainable Farming</li>
              <li>Advances in Plant Science &amp; Climate</li>
              <li>Recent Innovations in Molecular Sciences</li>
              <li>Controlled Environment Agriculture (ESTIDAMAH)</li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-book"></i> Research &amp; Publications</h5>
            <p style="color:#444;margin-bottom:10px;">Author / contributor to 10+ scientific publications covering plant pathology, molecular biology, biopesticides, crop stress, plant disease characterization, genetic transformation, and sustainable agriculture. Selected research includes:</p>
            <ul class="m-tick">
              <li>Genetic Transformation of Tomato with Enhanced Resistance Against Fusarium Wilt Using Mulberry Chitinase Gene (2025)</li>
              <li>Barley Chitinase Gene Confers Resistance Against Fusarium oxysporum and Alternaria solani in Transgenic Potato (2021)</li>
              <li>Identification and Pathogenic Characterization of Bacteria Causing Rice Grain Discoloration in Pakistan (2021)</li>
              <li>Association of Cladosporium cladosporioides with Brown Leaf Spot of Lady Palm in Pakistan (2020)</li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-bullseye"></i> Professional Focus</h5>
            <div>
              <span class="m-chip">Climate-Resilient Landscaping</span>
              <span class="m-chip">Plant Health</span>
              <span class="m-chip">Sustainable Urban Greening</span>
              <span class="m-chip">Arid-Land Arboriculture</span>
              <span class="m-chip">Water Conservation</span>
              <span class="m-chip">Plant Disease Management</span>
              <span class="m-chip">Nursery &amp; Landscape Operations</span>
              <span class="m-chip">Green Infrastructure</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 9: Prof. Dr. Muhammad Saleem Haider -->
  <div class="modal fade fac-modal" id="facModal9" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header-band">
          <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="fac-modal-head">
          <img loading="lazy" class="fac-modal-avatar" src="{{ asset('assets/img/person/logo.png') }}" alt="Prof. Dr. Muhammad Saleem Haider">
          <div class="fac-modal-head-info">
            <h2>Prof. Dr. Muhammad Saleem Haider</h2>
            <div class="fac-modal-role">CEO, Ciasce.com | Former Dean, Faculty of Agricultural Sciences, University of the Punjab, Lahore | Ph.D., DIC (University of London, UK) | Post Doctorate (University of Toronto, Canada)</div>
            <div class="fac-badges">
              <span class="fac-badge"><i class="fas fa-briefcase"></i> CEO, Ciasce.com</span>
              <span class="fac-badge"><i class="fas fa-university"></i> Former Dean, Faculty of Agricultural Sciences</span>
              <span class="fac-badge"><i class="fas fa-graduation-cap"></i> PhD &mdash; Imperial College London</span>
              <span class="fac-badge"><i class="fas fa-flask"></i> Postdoc &mdash; University of Toronto</span>
            </div>
            <p class="resume-contact" style="color:var(--fac-muted);font-size:0.86rem;margin:6px 0 0;">
              <span><i class="fas fa-map-marker-alt" style="color:var(--fac-primary);"></i> University of the Punjab, Lahore, Pakistan</span>
            </p>
          </div>
        </div>
        <div class="fac-modal-body">
          <p class="fac-modal-lead">Distinguished agricultural scientist, researcher, academician, and university administrator with doctoral training from Imperial College, University of London, and postdoctoral experience at the University of Toronto. Has served in leading national scientific and agricultural institutions, including the Centre of Excellence in Molecular Biology (CEMB), Central Cotton Research Institute (CCRI), Directorate of Pest Warning &amp; Quality Control of Pesticides, and School of Biological Sciences. Previously served as Director, Institute of Agricultural Sciences, University of the Punjab, and Dean, Faculty of Agricultural Sciences. Currently serving as CEO of CIASCE (Ciasce.com).</p>

          <div class="row">
            <div class="col-md-6">
              <div class="m-section">
                <h5><i class="fas fa-microscope"></i> Research Expertise</h5>
                <div>
                  <span class="m-chip">Begomoviruses &amp; Plant Virology</span>
                  <span class="m-chip">RNA Interference (RNAi)</span>
                  <span class="m-chip">Biocontrol &amp; Invertebrate Pathology</span>
                  <span class="m-chip">Transgenic Cotton</span>
                  <span class="m-chip">Insect Pest Management</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="m-section">
                <h5><i class="fas fa-chart-line"></i> Research &amp; Academic Impact</h5>
                <ul class="m-tick">
                  <li>200+ Peer-reviewed research publications</li>
                  <li>Cumulative Impact Factor: 160</li>
                  <li>Citations: 690</li>
                  <li>10 Books / Chapters with renowned international publishers</li>
                  <li>19 National &amp; international research projects completed</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-trophy"></i> Major Distinctions &amp; Achievements</h5>
            <ul class="m-tick">
              <li>Published the first Pakistani US-based international patent</li>
              <li>Recipient of 2 Gold Medals recognizing professional services</li>
              <li>Recipient of 8 Publication Incentive Awards</li>
              <li>Recipient of 4 Performance Awards</li>
              <li>Organized 50 Conferences, Seminars &amp; Symposia</li>
              <li>Participated in 60+ National &amp; International Conferences</li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-user-graduate"></i> Student Supervision</h5>
            <p style="color:#444;margin:0;">Mentored 27+ Ph.D. scholars and 50+ M.Phil. students in Agricultural Sciences, contributing significantly to advanced research training and academic development.</p>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-sitemap"></i> Professional Leadership &amp; Services</h5>
            <ul class="m-list">
              <li><span class="mi-title">CEO</span><span class="mi-sub">CIASCE (Ciasce.com)</span><span class="mi-time">Current</span></li>
              <li><span class="mi-title">Former Dean, Faculty of Agricultural Sciences</span><span class="mi-sub">University of the Punjab, Lahore</span></li>
              <li><span class="mi-title">Director, Institute of Agricultural Sciences</span><span class="mi-sub">University of the Punjab, Lahore</span></li>
              <li><span class="mi-title">Member, Board of Trustees</span><span class="mi-sub">Pakistan Science Foundation</span><span class="mi-time">2021&ndash;2024</span></li>
              <li><span class="mi-title">President</span><span class="mi-sub">Pakistan Phytopathological Society</span><span class="mi-time">2016&ndash;2020</span></li>
              <li><span class="mi-title">Editor &amp; Editorial Board Member</span><span class="mi-sub">Several prestigious national and international research journals</span></li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-id-badge"></i> Professional Positioning</h5>
            <div>
              <span class="m-chip">Agricultural Scientist</span>
              <span class="m-chip">Plant Virologist</span>
              <span class="m-chip">Researcher</span>
              <span class="m-chip">Academic Leader</span>
              <span class="m-chip">University Administrator</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 10: Hafiz Mujeeb Ur Rehman -->
  <div class="modal fade fac-modal" id="facModal10" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header-band">
          <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="fac-modal-head">
          <img loading="lazy" class="fac-modal-avatar" src="{{ asset('assets/img/person/logo.png') }}" alt="Hafiz Mujeeb Ur Rehman">
          <div class="fac-modal-head-info">
            <h2>Hafiz Mujeeb Ur Rehman</h2>
            <div class="fac-modal-role">International Coordinator | Agriculture, Water-Management &amp; Capacity-Building Professional</div>
            <div class="fac-badges">
              <span class="fac-badge"><i class="fas fa-globe"></i> International Coordinator</span>
              <span class="fac-badge"><i class="fas fa-tint"></i> Water Management</span>
              <span class="fac-badge"><i class="fas fa-seedling"></i> Regenerative Agriculture</span>
            </div>
          </div>
        </div>
        <div class="fac-modal-body">
          <p class="fac-modal-lead">Experienced agriculture, water-management, research, and capacity-building professional with extensive experience in national and international development projects. Expertise includes regenerative agriculture, precision agriculture, water conservation, agricultural mechanization, irrigation technologies, research &amp; development, farmer training, and project coordination.</p>

          <div class="m-section">
            <h5><i class="fas fa-briefcase"></i> Professional Experience</h5>
            <ul class="m-list">
              <li><span class="mi-title">Director &mdash; Hydroponic Project</span><span class="mi-sub">Safe Agritech (Pvt.) Limited, Faisalabad</span></li>
              <li><span class="mi-title">District Officer Agriculture / District Head &amp; Coordinator</span><span class="mi-sub">World Bank Project</span></li>
              <li><span class="mi-title">Deputy Director Agriculture (Research)</span><span class="mi-sub">Water Management Research Centre</span></li>
              <li><span class="mi-title">Planning &amp; Programming Officer</span><span class="mi-sub">Punjab Agriculture Research Board (PARB)</span></li>
              <li><span class="mi-title">Project Manager Research</span><span class="mi-sub">ADB / IRRI Conservation Agriculture Project</span></li>
              <li><span class="mi-title">Training Coordinator</span><span class="mi-sub">Farm Water Management Training Institute, Lahore</span></li>
              <li><span class="mi-title">Extension Specialist</span><span class="mi-sub">Cooperative Development Project, Uzbekistan &amp; Pakistan (NZAID)</span></li>
              <li><span class="mi-title">Site Coordinator</span><span class="mi-sub">DFID / Rice-Wheat Consortium / CIMMYT Conservation Agriculture Project</span></li>
              <li><span class="mi-title">Training Coordinator / Consultant</span><span class="mi-sub">Landell Mills International / EU-funded Water Resources Revival Project, Balochistan</span></li>
              <li><span class="mi-title">Principal Investigator</span><span class="mi-sub">Rice-Wheat Project, Ministry of Food &amp; Agriculture, Government of Pakistan</span></li>
              <li><span class="mi-title">Internship Training Coordinator</span><span class="mi-sub">Agriculture University Graduate Programs</span></li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-globe-americas"></i> International Training &amp; Exposure</h5>
            <p style="color:#444;margin-bottom:12px;">International training and professional exposure covering precision agriculture, auto-steering technology, irrigation systems, ecological pest management, water-saving rice technologies, conservation agriculture, mechanical rice transplanting, and GIS-based precision irrigation.</p>
            <div>
              <span class="m-chip">Turkey</span><span class="m-chip">Australia</span><span class="m-chip">Philippines</span>
              <span class="m-chip">China</span><span class="m-chip">Mexico</span><span class="m-chip">South Korea</span><span class="m-chip">Uzbekistan</span>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-lightbulb"></i> Research &amp; Development Expertise</h5>
            <div>
              <span class="m-chip">Regenerative Agriculture</span><span class="m-chip">Conservation Agriculture</span>
              <span class="m-chip">Precision Agriculture</span><span class="m-chip">Water Conservation</span>
              <span class="m-chip">LASER Land Leveling</span><span class="m-chip">Zero Tillage</span>
              <span class="m-chip">Bed Planting</span><span class="m-chip">Crop Residue Management</span>
              <span class="m-chip">Happy Seeder / Super Seeder</span><span class="m-chip">Solar Drip Irrigation</span>
              <span class="m-chip">Mechanical &amp; Parachute Rice Transplanting</span><span class="m-chip">Direct Seeding of Rice</span>
              <span class="m-chip">GreenSeeker</span><span class="m-chip">Hydroponics</span>
              <span class="m-chip">Greenhouse &amp; Tunnel Farming</span><span class="m-chip">Auto-Steering AG Technology</span>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-users"></i> Capacity Building &amp; Training</h5>
            <ul class="m-tick">
              <li>Farmer and Agriculture Service Provider training in regenerative and conservation agriculture.</li>
              <li>Training of OFWM officials and project staff in drip/sprinkler irrigation, farm layout, solar irrigation, and crop-residue management.</li>
              <li>University graduate internship programs focused on water-conservation technologies.</li>
              <li>Farmer Field Schools in Sindh and Balochistan.</li>
              <li>Training in mushroom cultivation, hydroponics, tunnel/greenhouse farming, IPM, and rice nursery management.</li>
              <li>Training for National Bank of Pakistan agricultural field staff and Agriculture Extension Officers on auto-steering precision agriculture.</li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-star"></i> Core Strengths</h5>
            <div>
              <span class="m-chip">Agricultural Research &amp; Development</span><span class="m-chip">International Project Coordination</span>
              <span class="m-chip">Water &amp; Irrigation Management</span><span class="m-chip">Precision Agriculture</span>
              <span class="m-chip">Farmer Training &amp; Capacity Building</span><span class="m-chip">Conservation &amp; Regenerative Agriculture</span>
              <span class="m-chip">Agricultural Mechanization</span><span class="m-chip">Technology Demonstration &amp; Adoption</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 11: Dr. Mujahid Manzoor -->
  <div class="modal fade fac-modal" id="facModal11" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header-band">
          <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="fac-modal-head">
          <img loading="lazy" class="fac-modal-avatar" src="{{ asset('assets/img/person/logo.png') }}" alt="Dr. Mujahid Manzoor">
          <div class="fac-modal-head-info">
            <h2>Dr. Mujahid Manzoor</h2>
            <div class="fac-modal-role">Ph.D. (Entomology) | HEC Approved PhD Supervisor | Visiting Assistant Professor &mdash; Institute of Agricultural Sciences, University of the Punjab, Lahore</div>
            <div class="fac-badges">
              <span class="fac-badge"><i class="fas fa-graduation-cap"></i> PhD Entomology</span>
              <span class="fac-badge"><i class="fas fa-users"></i> HEC Approved PhD Supervisor</span>
              <span class="fac-badge"><i class="fas fa-bug"></i> Biological Control</span>
            </div>
          </div>
        </div>
        <div class="fac-modal-body">
          <p class="fac-modal-lead">Agricultural scientist and university educator specializing in Entomology, Integrated Pest Management (IPM), Biological Control, Molecular Entomology, and Insect Ecology. Experienced in academic teaching, scientific research, international research collaboration, laboratory establishment, project development, and postgraduate research supervision.</p>

          <div class="row">
            <div class="col-md-6">
              <div class="m-section">
                <h5><i class="fas fa-graduation-cap"></i> Academic Qualifications</h5>
                <ul class="m-list">
                  <li><span class="mi-title">Ph.D. Entomology</span><span class="mi-sub">University of Agriculture, Faisalabad</span><span class="mi-time">2012&ndash;2018</span></li>
                  <li><span class="mi-title">M.Sc. (Hons.) Entomology</span><span class="mi-sub">University of Agriculture, Faisalabad</span><span class="mi-time">2010&ndash;2012</span></li>
                  <li><span class="mi-title">B.Sc. (Hons.) Agriculture &mdash; Entomology</span><span class="mi-sub">University of Agriculture, Faisalabad</span><span class="mi-time">2006&ndash;2010</span></li>
                  <li><span class="mi-title">F.Sc. Pre-Medical</span><span class="mi-sub">Govt. Degree College, Layyah</span><span class="mi-time">2006</span></li>
                  <li><span class="mi-title">Matriculation &mdash; Science</span><span class="mi-sub">BISE D.G. Khan</span><span class="mi-time">2003</span></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="m-section">
                <h5><i class="fas fa-briefcase"></i> Professional Experience</h5>
                <ul class="m-list">
                  <li><span class="mi-title">Visiting Assistant Professor</span><span class="mi-sub">University of the Punjab, Lahore</span><span class="mi-time">2019&ndash;Present</span></li>
                  <li><span class="mi-title">Assistant Professor (IPFP)</span><span class="mi-sub">University of the Punjab, Lahore</span><span class="mi-time">2018&ndash;2019</span></li>
                  <li><span class="mi-title">Research Fellow</span><span class="mi-sub">University of Florida, USA (IRSIP / HEC)</span></li>
                  <li><span class="mi-title">Research Associate</span><span class="mi-sub">University of Agriculture, Faisalabad</span><span class="mi-time">2012&ndash;2017</span></li>
                  <li><span class="mi-title">Research Consultant</span><span class="mi-sub">Green Revolution (Pvt.) Ltd.</span><span class="mi-time">2017</span></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-flask"></i> Research &amp; Development</h5>
            <div>
              <span class="m-chip">Red Palm Weevil Management &amp; Molecular Biology</span><span class="m-chip">Integrated Pest Management</span>
              <span class="m-chip">Biological Control</span><span class="m-chip">Entomopathogenic Nematodes &amp; Fungi</span>
              <span class="m-chip">Insecticide Resistance Management</span><span class="m-chip">Molecular Entomology &amp; RNAi</span>
              <span class="m-chip">Insect Ecology &amp; Behavior</span><span class="m-chip">Honey Bee Research &amp; Apiculture</span>
              <span class="m-chip">Botanical Pesticides</span><span class="m-chip">Sustainable Crop Protection</span>
            </div>
            <p style="color:#444;margin-top:12px;">Established an Integrative Biological and Microbial Control Research &amp; Development Lab, an Insectary, and a Honey Bee Research Station at the Faculty of Agricultural Sciences, University of the Punjab.</p>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-book"></i> Research Output</h5>
            <p style="color:#444;margin:0;">25+ published research papers and scholarly contributions, including publications in Scientific Reports, Bulletin of Entomological Research, Nematology, Pakistan Journal of Agricultural Sciences, Pakistan Journal of Zoology, and other scientific journals. Also contributed to book chapters on honey bees, plant quarantine, biosecurity, and integrated pest management.</p>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-chalkboard-teacher"></i> Teaching &amp; Academic Expertise</h5>
            <div>
              <span class="m-chip">Medical &amp; Veterinary Entomology</span><span class="m-chip">Applied Entomology</span>
              <span class="m-chip">Apiculture</span><span class="m-chip">Insect Ecology</span>
              <span class="m-chip">Insect Pathology</span><span class="m-chip">Insect Molecular Biology</span>
              <span class="m-chip">Insecticides &amp; Public Health</span><span class="m-chip">Insect Behavior</span>
              <span class="m-chip">Plant Resistance to Insect Pests</span><span class="m-chip">Insect Resistance Management</span>
              <span class="m-chip">Introductory Agriculture &amp; Plant Pathology</span>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-star"></i> Key Strengths</h5>
            <div>
              <span class="m-chip">Scientific Research</span><span class="m-chip">University Teaching</span>
              <span class="m-chip">PhD Supervision</span><span class="m-chip">IPM</span>
              <span class="m-chip">Biological Control</span><span class="m-chip">Molecular Biology</span>
              <span class="m-chip">Research Project Development</span><span class="m-chip">Laboratory Establishment</span>
              <span class="m-chip">International Collaboration</span><span class="m-chip">Agricultural Innovation</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 12: Mian Abdur Rasheed -->
  <div class="modal fade fac-modal" id="facModal12" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header-band">
          <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="fac-modal-head">
          <img loading="lazy" class="fac-modal-avatar" src="{{ asset('assets/img/person/logo.png') }}" alt="Mian Abdur Rasheed">
          <div class="fac-modal-head-info">
            <h2>Mian Abdur Rasheed</h2>
            <div class="fac-modal-role">Specialist in Entrepreneurial Skills | Chief Executive, Green Culture (Pvt.) Ltd. | M.Phil Sociology</div>
            <div class="fac-badges">
              <span class="fac-badge"><i class="fas fa-briefcase"></i> Chief Executive</span>
              <span class="fac-badge"><i class="fas fa-microphone"></i> Best Motivational Speaker</span>
              <span class="fac-badge"><i class="fas fa-award"></i> Doctor of Inspiring Motivation</span>
            </div>
          </div>
        </div>
        <div class="fac-modal-body">
          <p class="fac-modal-lead">Business leader, entrepreneur, and motivational speaker specializing in entrepreneurial skills development. Chief Executive of Green Culture (Pvt.) Limited and Green Emergency Forum, serving on multiple national committees for trade, eco-security, social protection, and entrepreneurship across Pakistan.</p>

          <div class="m-section">
            <h5><i class="fas fa-user-tie"></i> Current Designations</h5>
            <ul class="m-tick">
              <li>Member, Central Standing Committee on Trade and Public Relations, Federation of Pakistan Chambers of Commerce and Industry (FPCCI)</li>
              <li>Chief Executive, Green Culture (Private) Limited, Faisalabad</li>
              <li>Chief Executive, Green Emergency Forum, Pakistan (Section 42 Company, Islamabad)</li>
              <li>Member, Editorial Committee, National Eco-Security System, Pakistan</li>
              <li>Member, Editorial Advisory Team, The Agricultural Economist</li>
              <li>Mentor, Business Incubation Center, Government College University, Faisalabad (GCUF)</li>
              <li>Member, Steering Committee, ORIC, The University of Faisalabad</li>
              <li>Member (Corporate Class), Faisalabad Chamber of Commerce and Industry (FCCI)</li>
              <li>Founding Member, Forest Protection Committee, Changa Manga</li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-history"></i> Previous Designations &amp; Projects</h5>
            <ul class="m-tick">
              <li>Chairman Task Force, Pakistan Agricultural Scientists Forum</li>
              <li>Chairman/Convener, Regional/Provincial Standing Committee (Punjab) on Social Protection &amp; Public Safety, FPCCI (2019&ndash;2022)</li>
              <li>Chairman, Standing Committee on Social Justice, Climate Change &amp; Entrepreneurship, Faisalabad Chamber of Small Traders &amp; Small Industry (2021&ndash;2022)</li>
              <li>Focal Person, UNDP&ndash;The Urban Unit Punjab: Economic Development Strategy (EDS) for Faisalabad (2020)</li>
              <li>Chairman, FPCCI Provincial Standing Committee (Punjab) on Entrepreneurship, Training &amp; Development (2018)</li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-medal"></i> Honors &amp; Certifications</h5>
            <ul class="m-tick">
              <li>Doctor of Inspiring Motivation (Title awarded by University of Agriculture, Faisalabad)</li>
              <li>Best Motivational Speaker &mdash; Certified and awarded by COMSATS, FPCCI, UAF, GCWUF, GCUF, and KSA</li>
              <li>Best Focal Person / Best Coordinator &mdash; Applauded by UNDP&ndash;The Urban Unit Punjab (2020)</li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-graduation-cap"></i> Education</h5>
            <ul class="m-list">
              <li><span class="mi-title">M.Phil Sociology</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 13: Robina Amin -->
  <div class="modal fade fac-modal" id="facModal13" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header-band">
          <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="fac-modal-head">
          <img loading="lazy" class="fac-modal-avatar" src="{{ asset('assets/img/person/logo.png') }}" alt="Robina Amin">
          <div class="fac-modal-head-info">
            <h2>Robina Amin</h2>
            <div class="fac-modal-role">Course Coordinator | M.Sc. (Hons) Agricultural Entomology | Entomologist | Agri-Marketing &amp; Education Professional</div>
            <div class="fac-badges">
              <span class="fac-badge"><i class="fas fa-graduation-cap"></i> M.Sc. (Hons) Agri. Entomology</span>
              <span class="fac-badge"><i class="fas fa-bug"></i> Entomologist</span>
              <span class="fac-badge"><i class="fas fa-star"></i> CGPA 3.46 / 4.00</span>
            </div>
          </div>
        </div>
        <div class="fac-modal-body">
          <p class="fac-modal-lead">Agricultural Entomology professional with experience in pest control operations, agri-marketing, team coordination, teaching, customer relationship management, and applied entomological research. Strong academic background with an M.Sc. (Hons) in Agricultural Entomology and practical exposure to biocontrol agents, biopesticides, pesticide application, crop protection, sales support, and inspection reporting.</p>

          <div class="m-section">
            <h5><i class="fas fa-lightbulb"></i> Core Competencies</h5>
            <div>
              <span class="m-chip">Agricultural Entomology &amp; Pest Management</span><span class="m-chip">Pest Control Operations</span>
              <span class="m-chip">Agri-Marketing &amp; Sales Support</span><span class="m-chip">Team Supervision &amp; Coordination</span>
              <span class="m-chip">Customer Relationship Management</span><span class="m-chip">Safe Pesticide Application</span>
              <span class="m-chip">Inspection &amp; Reporting</span><span class="m-chip">Biocontrol &amp; Biopesticides</span>
              <span class="m-chip">Teaching &amp; Academic Coordination</span><span class="m-chip">Research &amp; Field Experiments</span>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-briefcase"></i> Professional Experience</h5>
            <ul class="m-list">
              <li><span class="mi-title">Entomologist</span><span class="mi-sub">SS Corporation &mdash; pest control for homes, hospitals, and commercial sites; safe pesticide application and inspection reporting</span><span class="mi-time">May 2023 &ndash; Aug 2024</span></li>
              <li><span class="mi-title">Agri-Marketing Officer (AMO)</span><span class="mi-sub">Haji Sons, Lahore &mdash; sales support, customer records, orders, and key relationships</span><span class="mi-time">May 2022 &ndash; 2023</span></li>
              <li><span class="mi-title">Entomologist / CEO / Coordinator</span><span class="mi-sub">Pest Busters, Lahore</span><span class="mi-time">2021 &ndash; 2022</span></li>
              <li><span class="mi-title">Coordinator</span><span class="mi-sub">Syed School System, Lahore</span><span class="mi-time">2019 &ndash; 2020</span></li>
              <li><span class="mi-title">Biology Teacher</span><span class="mi-sub">Naeem Shah Academy, Lahore</span><span class="mi-time">2018</span></li>
              <li><span class="mi-title">Pre-Medical Teacher</span><span class="mi-sub">Swift College, Okara</span><span class="mi-time">2016</span></li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-graduation-cap"></i> Education</h5>
            <ul class="m-list">
              <li><span class="mi-title">M.Sc. (Hons) Agricultural Entomology</span><span class="mi-sub">IAGS, University of the Punjab, Lahore</span><span class="mi-time">2021&ndash;2022 &middot; CGPA 3.46/4.00</span></li>
              <li><span class="mi-title">B.Sc. (Hons) Agricultural Entomology</span><span class="mi-sub">Institute of Agricultural Sciences, Lahore</span><span class="mi-time">2020 &middot; CGPA 3.34/4.00</span></li>
              <li><span class="mi-title">Pre-Medical</span><span class="mi-sub">Punjab Group of Colleges, Depalpur, Okara</span><span class="mi-time">2016 &middot; 936/1100</span></li>
              <li><span class="mi-title">Matriculation</span><span class="mi-sub">Paradise Model High School, Rajowal, Okara</span><span class="mi-time">2013 &middot; 950/1050</span></li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-flask"></i> Research &amp; Projects</h5>
            <ul class="m-tick">
              <li>Research on rearing biocontrol agents including Green Lacewing, Hoverfly, and Ladybird Beetle.</li>
              <li>Conducted sunflower experiments using different biopesticide treatments.</li>
              <li>Studied weedicide resistance in <em>Phalaris minor</em> in wheat at Syngenta Lab, Lahore.</li>
              <li>Conducted a study on nano-pesticides and mortality of mosquito larvae at GCU Lahore.</li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-users"></i> Professional Participation &amp; Interests</h5>
            <p style="color:#444;margin:0;">Participated in agricultural seminars and international events including the International Conference on Potash Fertilizer Use in Pakistan Agriculture, Technospark 2016, International Entomological Congress 2019 (sponsored by Corteva Agri-Sciences), sustainable crop production seminars, and Agri-EXPO 2019, Lahore with AL-NOOR AGRO Group.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 14: Dr. Sana Khalid -->
  <div class="modal fade fac-modal" id="facModal14" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header-band">
          <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="fac-modal-head">
          <img class="fac-modal-avatar" src="{{ asset('assets/img/person/logo.png') }}" alt="Dr. Sana Khalid">
          <div class="fac-modal-head-info">
            <h2>Dr. Sana Khalid</h2>
            <div class="fac-modal-role">Assistant Professor (BPS-19), Department of Botany, LCWU | Plant Pathology &amp; Molecular Biology | Expert in Molecular Biology, Virology &amp; Diagnostics</div>
            <div class="fac-badges">
              <span class="fac-badge"><i class="fas fa-graduation-cap"></i> PhD Plant Pathology</span>
              <span class="fac-badge"><i class="fas fa-award"></i> Top 2% Most-Cited Scientist 2025</span>
              <span class="fac-badge"><i class="fas fa-users"></i> HEC-Approved PhD/MS Supervisor</span>
            </div>
          </div>
        </div>
        <div class="fac-modal-body">
          <p class="fac-modal-lead">Accomplished academic, researcher, and postgraduate supervisor with extensive experience in Botany, Plant Pathology, Molecular Biology, Plant Virology, Bioinformatics, and Plant Biotechnology. Currently serving as Assistant Professor at LCWU, with a strong record of research publications, international conference participation, student supervision, academic leadership, and scientific training.</p>

          <div class="m-section">
            <h5><i class="fas fa-star"></i> Key Highlights</h5>
            <ul class="m-tick">
              <li>50+ research / review articles in impact-factor and HEC-recognized journals</li>
              <li>Selected among the 2% most-cited scientists worldwide in 2025</li>
              <li>HEC-approved Ph.D. / MS Supervisor</li>
              <li>Supervised / co-supervised 6 Ph.D. and 32 MS researchers</li>
              <li>Supervised 24 undergraduate research projects</li>
              <li>Best Oral Presenter, International Conference on Natural Science &amp; Environment, London</li>
              <li>ASV Undergraduate Virology Teacher Travel Award — USD 1,000 (2025)</li>
              <li>Research Productivity Awards, LCWU (2021 &amp; 2022)</li>
              <li>Research Incentive Awards, LCWU (2016 &amp; 2017)</li>
              <li>Appointed Secretary, Departmental Board of Studies (2025–2028)</li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-lightbulb"></i> Areas of Expertise</h5>
            <div>
              <span class="m-chip">Plant Virology &amp; Plant Pathology</span><span class="m-chip">Molecular Biology</span>
              <span class="m-chip">Plant Biotechnology</span><span class="m-chip">Genome Editing</span>
              <span class="m-chip">Bioinformatics &amp; In-silico Analysis</span><span class="m-chip">Molecular Docking</span>
              <span class="m-chip">Plant Disease Management</span><span class="m-chip">Plant Taxonomy</span>
              <span class="m-chip">Phytochemistry</span><span class="m-chip">Climate-Resilient Agriculture</span>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-graduation-cap"></i> Education</h5>
            <ul class="m-list">
              <li><span class="mi-title">Postdoctoral Fellowship — Molecular Biology</span><span class="mi-sub">CEMB, University of the Punjab — Detection of Transformation Events &amp; Risk Assessment on Model Organisms</span><span class="mi-time">2022</span></li>
              <li><span class="mi-title">Ph.D. Agriculture Sciences (Plant Pathology)</span><span class="mi-sub">University of the Punjab — Role of Coat Protein in Transmission of Two Geminiviruses</span><span class="mi-time">2012–2019</span></li>
              <li><span class="mi-title">M.Phil. Molecular Biology</span><span class="mi-sub">CEMB, University of the Punjab</span><span class="mi-time">2007–2009</span></li>
              <li><span class="mi-title">M.Sc. (Hons.) Botany</span><span class="mi-sub">University of the Punjab</span><span class="mi-time">2004–2006</span></li>
              <li><span class="mi-title">B.Sc. (Hons.) Botany</span><span class="mi-sub">University of the Punjab</span><span class="mi-time">2001–2004</span></li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-briefcase"></i> Academic &amp; Research Experience</h5>
            <ul class="m-list">
              <li><span class="mi-title">Assistant Professor (BPS-19), Department of Botany</span><span class="mi-sub">Lahore College for Women University (LCWU)</span><span class="mi-time">2018–Present</span></li>
              <li><span class="mi-title">Lecturer (BPS-18), Department of Botany</span><span class="mi-sub">LCWU</span><span class="mi-time">2009–2018</span></li>
              <li><span class="mi-title">HEC-IRSIP Research Training (6 months)</span><span class="mi-sub">University of Toronto, Canada — including Introduction to Virology</span></li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-book"></i> Research &amp; Scholarly Contributions</h5>
            <p style="color:#444;margin-bottom:10px;">Author / co-author of <strong>50+ scientific publications</strong> covering plant viruses, molecular characterization, bioinformatics, phytochemistry, plant taxonomy, antimicrobial activity, climate-related plant stress, and biotechnology — in journals such as Medical Oncology, Microbial Pathogenesis, Journal of Phytopathology, Pakistan Journal of Botany, Microscopy Research and Technique, and Saudi Journal of Biological Sciences.</p>
            <p style="color:#444;margin:0;">Author / co-author of book chapters published by <strong>Springer, CABI, Elsevier</strong> and other academic publishers — on genome editing, nanotechnology, climate-resilient agriculture, medicinal plants, and genetically engineered organisms.</p>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-globe"></i> International Academic Engagement</h5>
            <ul class="m-list">
              <li><span class="mi-title">Poster Presenter — American Society for Virology Conference</span><span class="mi-sub">Montréal, Canada</span><span class="mi-time">2025</span></li>
              <li><span class="mi-title">Poster Presenter — 14th International Symposium of dsRNA Viruses</span><span class="mi-sub">Banff, Canada</span><span class="mi-time">2022</span></li>
              <li><span class="mi-title">Oral Presenter &amp; Best Oral Presenter Award — ICNSE</span><span class="mi-sub">London, UK</span><span class="mi-time">2019</span></li>
            </ul>
            <p style="color:#444;margin-top:6px;">Presented research at international scientific events in Canada, USA, UK, Italy, and other forums, including the American Society for Virology and the International Symposium of dsRNA Viruses.</p>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-sitemap"></i> Academic Leadership &amp; Service</h5>
            <ul class="m-tick">
              <li>Secretary, Departmental Board of Studies, LCWU</li>
              <li>Focal Person, Botany Department Alumni</li>
              <li>Editorial Member, Journal Plantarum</li>
              <li>Journal Reviewer for national and international scientific journals</li>
              <li>External Examiner / Thesis Evaluator for BS/MS research</li>
              <li>Organizer / Co-organizer of international conferences, seminars and workshops</li>
              <li>Member: American Society for Virology, American Society for Microbiology, Association of Applied Biology (UK), Asian Council of Science Editors, and other academic bodies</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 15: Faiq Ali -->
  <div class="modal fade fac-modal" id="facModal15" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header-band">
          <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="fac-modal-head">
          <img class="fac-modal-avatar" src="{{ asset('assets/img/person/logo.png') }}" alt="Faiq Ali">
          <div class="fac-modal-head-info">
            <h2>Faiq Ali</h2>
            <div class="fac-modal-role">Marketing &amp; Finance Professional | Academic Coordinator | Social Media Manager</div>
            <div class="fac-badges">
              <span class="fac-badge"><i class="fas fa-bullhorn"></i> Marketing &amp; Social Media</span>
              <span class="fac-badge"><i class="fas fa-user-graduate"></i> Academic Coordinator</span>
              <span class="fac-badge"><i class="fas fa-graduation-cap"></i> BS (Hons) Marketing</span>
            </div>
          </div>
        </div>
        <div class="fac-modal-body">
          <p class="fac-modal-lead">Enthusiastic, self-motivated, reliable and hardworking professional with experience in academic coordination, student admissions, sales, and social media management. Currently pursuing a BS (Hons) in Marketing with an academic background in Accounting &amp; Finance. Strong interest in management, marketing, leadership, and professional growth, with the ability to work effectively in competitive environments.</p>

          <div class="m-section">
            <h5><i class="fas fa-lightbulb"></i> Core Skills</h5>
            <div>
              <span class="m-chip">Management &amp; Coordination</span><span class="m-chip">Leadership &amp; Teamwork</span>
              <span class="m-chip">Sales &amp; Customer Handling</span><span class="m-chip">Student Admissions &amp; Counseling</span>
              <span class="m-chip">Social Media Management</span><span class="m-chip">Critical Thinking</span>
              <span class="m-chip">Creativity &amp; Problem Solving</span><span class="m-chip">Student Records Management</span>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-briefcase"></i> Professional Experience</h5>
            <ul class="m-list">
              <li><span class="mi-title">Admission Advisor &amp; Academic Coordinator</span><span class="mi-sub">Assist students with admissions &amp; course selection; coordinate academic activities and maintain student records.</span><span class="mi-time">May 2025 – Present</span></li>
              <li><span class="mi-title">Social Media Manager — Riphah International College</span><span class="mi-sub">Manage official social media coverage of events and digital content.</span><span class="mi-time">Feb 2024 – Present</span></li>
              <li><span class="mi-title">Salesman — Health Optical Center</span><span class="mi-sub">Sales, customer interactions and product assistance.</span><span class="mi-time">Jan 2022 – Jul 2022</span></li>
            </ul>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-graduation-cap"></i> Education</h5>
            <ul class="m-list">
              <li><span class="mi-title">BS (Hons) Marketing</span><span class="mi-sub">Lahore Leads University</span><span class="mi-time">2025–2027</span></li>
              <li><span class="mi-title">ADP Accounting &amp; Finance</span><span class="mi-sub">Riphah International University, Lahore</span><span class="mi-time">2023–2025</span></li>
              <li><span class="mi-title">Intermediate (I.Com)</span><span class="mi-sub">Govt. Islamia College, Civil Lines, Lahore</span><span class="mi-time">2021–2023</span></li>
              <li><span class="mi-title">Matric (Computer Sciences)</span><span class="mi-sub">Unique Group of Institutions</span><span class="mi-time">2019–2021</span></li>
            </ul>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="m-section">
                <h5><i class="fas fa-trophy"></i> Achievements &amp; Activities</h5>
                <ul class="m-tick">
                  <li>Best Media Member — Riphah International College</li>
                  <li>Agriculture Supply Chain — Tsunagari Management Academy</li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="m-section">
                <h5><i class="fas fa-language"></i> Languages</h5>
                <div>
                  <span class="m-chip">Urdu — Advanced</span><span class="m-chip">Punjabi — Intermediate</span><span class="m-chip">English — Basic</span>
                </div>
                <h5 style="margin-top:18px;"><i class="fas fa-heart"></i> Interests</h5>
                <div>
                  <span class="m-chip">Traveling</span><span class="m-chip">Cooking</span><span class="m-chip">Movies</span>
                </div>
              </div>
            </div>
          </div>

          <div class="m-section">
            <h5><i class="fas fa-bullseye"></i> Career Objective</h5>
            <p style="color:#444;margin:0;">To face challenges with confidence in a competitive environment and achieve professional excellence by contributing my skills and capabilities to a reputed, world-class organization. <em>References will be furnished on demand.</em></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('partials.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <!-- Auto-open a faculty profile when arrived via ?view=facModalN -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var view = new URLSearchParams(window.location.search).get('view');
      if (view && /^facModal[0-9]+$/.test(view)) {
        var el = document.getElementById(view);
        if (el && window.bootstrap) {
          new bootstrap.Modal(el).show();
        }
      }
    });
  </script>

</body>
</html>
