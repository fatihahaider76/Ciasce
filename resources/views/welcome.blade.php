<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CIASCE - Canadian International Academy of Skills and Career Excellence</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/person/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css?v=15" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
   <style>
       :root {
           --primary-color: #2e7d32;
           --primary-light: #66bb6a;
           --primary-dark: #1b5e20;
           --secondary-color: #f8f9fa;
           /* --accent-color: #ff6b6b; */
           --dark-text: #2c3e50;
           --light-text: #7f8c8d;
           --card-shadow: 0 10px 30px rgba(46, 125, 50, 0.1);
       }
       
       
       
       .hero-sections {
           background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
           color: white;
           padding: 100px 0 80px;
           position: relative;
           overflow: hidden;
           border-radius: 0 0 30px 30px;
           box-shadow: 0 10px 30px rgba(46, 125, 50, 0.3);
       }
       
       .hero-sections:before {
           content: '';
           position: absolute;
           top: 0;
           left: 0;
           width: 100%;
           height: 100%;
           background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.1" d="M0,96L48,112C96,128,192,160,288,186.7C384,213,480,235,576,213.3C672,192,768,128,864,128C960,128,1056,192,1152,192C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
           background-size: cover;
           background-position: center bottom;
       }
       
       .profile-container {
           position: relative;
           z-index: 2;
       }
       
       .profile-img {
           width: 200px;
           height: 200px;
           border-radius: 50%;
           object-fit: cover;
           border: 5px solid rgba(255,255,255,0.3);
           box-shadow: 0 15px 30px rgba(0,0,0,0.2);
           background: linear-gradient(135deg, #ffffff 0%, #f0f0f0 100%);
           display: flex;
           align-items: center;
           justify-content: center;
       }
       
       .profile-img i {
           font-size: 5rem;
           color: var(--primary-color);
       }
       
       .hero-content h1 {
           font-size: 2.8rem;
           margin-bottom: 1rem;
           text-shadow: 0 2px 10px rgba(0,0,0,0.1);
       }
       
       .hero-content .lead {
           font-size: 1.3rem;
           opacity: 0.9;
           margin-bottom: 1.5rem;
       }
       
       .contact-badges {
           display: flex;
           flex-wrap: wrap;
           gap: 10px;
           margin-top: 1.5rem;
       }
       
       .contact-badge {
           background: rgba(255,255,255,0.2);
           padding: 8px 15px;
           border-radius: 50px;
           font-size: 0.9rem;
           backdrop-filter: blur(5px);
           border: 1px solid rgba(255,255,255,0.3);
       }
       
       .section-title {
           position: relative;
           margin-bottom: 3rem;
           padding-bottom: 1.5rem;
           text-align: center;
       }
       
       .section-title:after {
           content: '';
           position: absolute;
           bottom: 0;
           left: 50%;
           transform: translateX(-50%);
           width: 80px;
           height: 4px;
           background: linear-gradient(90deg, var(--primary-color), var(--primary-light));
           border-radius: 2px;
       }
       
       .section-padding {
           padding: 80px 0;
       }
       
       .bg-light-custom {
           background-color: var(--secondary-color);
           border-radius: 30px;
           margin: 20px;
           box-shadow: var(--card-shadow);
       }
       
       .info-card {
           background: white;
           border-radius: 20px;
           box-shadow: var(--card-shadow);
           padding: 30px;
           margin-bottom: 30px;
           transition: transform 0.4s, box-shadow 0.4s;
           height: 100%;
           border-top: 4px solid var(--primary-color);
           position: relative;
           overflow: hidden;
       }
       
       .info-card:before {
           content: '';
           position: absolute;
           top: 0;
           left: 0;
           width: 100%;
           height: 100%;
           background: linear-gradient(135deg, var(--primary-color) 0%, transparent 70%);
           opacity: 0.03;
           z-index: 0;
       }
       
       .info-card:hover {
           transform: translateY(-10px);
           box-shadow: 0 20px 40px rgba(46, 125, 50, 0.15);
       }
       
       .info-card i {
           font-size: 2.5rem;
           color: var(--primary-color);
           margin-bottom: 1.5rem;
           position: relative;
           z-index: 1;
       }
       
       .info-card h4 {
           position: relative;
           z-index: 1;
       }
       
       .info-card p {
           position: relative;
           z-index: 1;
       }
       
       .stat-box {
           text-align: center;
           padding: 30px 20px;
           border-radius: 20px;
           background: white;
           box-shadow: var(--card-shadow);
           margin-bottom: 30px;
           transition: transform 0.3s;
           border-top: 4px solid var(--primary-color);
       }
       
       .stat-box:hover {
           transform: translateY(-5px);
       }
       
       .stat-number {
           font-size: 3rem;
           font-weight: 700;
           background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
           -webkit-background-clip: text;
           -webkit-text-fill-color: transparent;
           margin-bottom: 0.5rem;
           line-height: 1;
       }
       
       .stat-label {
           font-size: 1rem;
           color: var(--light-text);
           font-weight: 500;
       }
       
       .timeline {
           position: relative;
           padding-left: 30px;
       }
       
       .timeline:before {
           content: '';
           position: absolute;
           left: 0;
           top: 0;
           bottom: 0;
           width: 3px;
           background: linear-gradient(to bottom, var(--primary-color), var(--primary-light));
           border-radius: 3px;
       }
       
       .timeline-item {
           position: relative;
           margin-bottom: 30px;
       }
       
       .timeline-item:before {
           content: '';
           position: absolute;
           left: -36px;
           top: 5px;
           width: 15px;
           height: 15px;
           border-radius: 50%;
           background: var(--primary-color);
           border: 3px solid white;
           box-shadow: 0 0 0 3px var(--primary-color);
       }
       
       .timeline-date {
           font-size: 0.9rem;
           color: var(--primary-color);
           margin-bottom: 5px;
           font-weight: 600;
       }
       
       .timeline-content h4 {
           margin-bottom: 5px;
           color: var(--dark-text);
       }
       
       .contact-info {
           list-style: none;
           padding: 0;
       }
       
       .contact-info li {
           margin-bottom: 20px;
           display: flex;
           align-items: flex-start;
       }
       
       .contact-info i {
           color: var(--primary-color);
           margin-right: 15px;
           font-size: 1.3rem;
           margin-top: 3px;
           background: rgba(46, 125, 50, 0.1);
           width: 40px;
           height: 40px;
           border-radius: 50%;
           display: flex;
           align-items: center;
           justify-content: center;
       }
       
       .floating-shapes {
           position: absolute;
           width: 100%;
           height: 100%;
           top: 0;
           left: 0;
           overflow: hidden;
           z-index: 1;
       }
       
       .shape {
           position: absolute;
           border-radius: 50%;
           background: rgba(255, 255, 255, 0.1);
       }
       
       .shape-1 {
           width: 80px;
           height: 80px;
           top: 10%;
           left: 5%;
           animation: float 8s ease-in-out infinite;
       }
       
       .shape-2 {
           width: 120px;
           height: 120px;
           top: 60%;
           right: 10%;
           animation: float 10s ease-in-out infinite 1s;
       }
       
       .shape-3 {
           width: 60px;
           height: 60px;
           bottom: 20%;
           left: 15%;
           animation: float 7s ease-in-out infinite 0.5s;
       }
       
       @keyframes float {
           0% {
               transform: translateY(0) rotate(0deg);
           }
           50% {
               transform: translateY(-20px) rotate(10deg);
           }
           100% {
               transform: translateY(0) rotate(0deg);
           }
       }
       
       /* Animation classes */
       .fade-in {
           opacity: 0;
           transform: translateY(30px);
           transition: opacity 0.8s ease, transform 0.8s ease;
       }
       
       .fade-in.visible {
           opacity: 1;
           transform: translateY(0);
       }
       
       .slide-in-left {
           opacity: 0;
           transform: translateX(-50px);
           transition: opacity 0.8s ease, transform 0.8s ease;
       }
       
       .slide-in-left.visible {
           opacity: 1;
           transform: translateX(0);
       }
       
       .slide-in-right {
           opacity: 0;
           transform: translateX(50px);
           transition: opacity 0.8s ease, transform 0.8s ease;
       }
       
       .slide-in-right.visible {
           opacity: 1;
           transform: translateX(0);
       }
       
       .zoom-in {
           opacity: 0;
           transform: scale(0.9);
           transition: opacity 0.8s ease, transform 0.8s ease;
       }
       
       .zoom-in.visible {
           opacity: 1;
           transform: scale(1);
       }
       
       .pulse {
           animation: pulse 2s infinite;
       }
       
       @keyframes pulse {
           0% {
               box-shadow: 0 0 0 0 rgba(46, 125, 50, 0.4);
           }
           70% {
               box-shadow: 0 0 0 15px rgba(46, 125, 50, 0);
           }
           100% {
               box-shadow: 0 0 0 0 rgba(46, 125, 50, 0);
           }
       }
       
       /* Responsive adjustments */
       @media (max-width: 768px) {
           .hero-content h1 {
               font-size: 2.2rem;
           }
           
           .section-padding {
               padding: 60px 0;
           }
           
           .bg-light-custom {
               margin: 10px;
           }
       }
       header div nav ul li a{text-decoration:none}
   </style>
</head>

<body class="index-page">

  @include('partials.navbar')


   

  <main class="main">

    
    <style>
      /* Decorative wave overlay must not block clicks on hero buttons */
      .hero-section:before { pointer-events: none !important; }
      .hero-section .container { position: relative; z-index: 2; }
      .hero-section .col-lg-8 { position: relative; z-index: 3; }

      /* ===== SAMPLE: Green + Earthy hero (nature-aligned) ===== */
      .hero-nature { background: linear-gradient(135deg, #2e7d32 0%, #1b7d47 45%, #14532d 100%) !important; }
      .hero-nature .tagline { color: #ffd75e !important; }
      .hero-nature .btn-light { background: #ffffff !important; color: #1b5e20 !important; border: none; font-weight: 700; }
      .hero-nature .btn-light:hover { background: #ffd75e !important; color: #14532d !important; }
      .hero-nature .btn-outline-light { border: 2px solid #ffffff !important; color: #ffffff !important; }
      .hero-nature .btn-outline-light:hover { background: #ffffff !important; color: #1b5e20 !important; }
      .hero-nature .p-4.rounded { background: rgba(255,255,255,0.14) !important; border: 1px solid rgba(255,255,255,0.18); }
    </style>
    <section class="hero-section hero-nature" style="margin-top:80px">
        <div class="container m-reset-negmargin" style="margin-top: -60px">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4">Canadian International Academy of Skills and Career Excellence</h1>
                    <p class="lead mb-4 tagline">"We believe in nature!"</p>
                    <p class="mb-5">A premier training and consultancy firm dedicated to advancing professional competencies in management, agriculture, and agribusiness.</p>
                    <a href="{{ route('programs.index') }}" class="btn btn-light btn-lg px-4 py-2 me-3" style="user-select:none; position:relative; z-index:5;">Explore Programs</a>
                    <a href="#contact" class="btn btn-outline-light btn-lg px-4 py-2 js-scroll-contact" style="user-select:none; position:relative; z-index:5;">Contact Us</a>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="p-4 rounded" style="background-color: rgba(255,255,255,0.1);">
                       <img src="{{ asset('assets/img/person/one.jpeg') }}" style="height:auto; width:300px; max-width:100%; border-radius:12px;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var btn = document.querySelector('.js-scroll-contact');
        if (btn) {
          btn.addEventListener('click', function (e) {
            var target = document.getElementById('contact');
            if (target) {
              e.preventDefault();
              e.stopPropagation();
              target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
          });
        }
      });
    </script>

    <!-- ===== Featured Course: Kitchen Gardening ===== -->
    <section class="kg-section">
      <div class="container">
        <div class="text-center">
          <span class="kg-badge-top"><i class="fas fa-seedling"></i> Upcoming Certificate Course</span>
        </div>
        <div class="kg-slider">
          <div class="kg-viewport">
            <div class="kg-track">

              <!-- Slide 2: Agribusiness & Entrepreneurship -->
              <div class="kg-slide">
                <div class="kg-card">
                  <div class="row g-0">

                    <div class="col-lg-5 kg-left">
                      <div class="kg-left-inner">
                        <span class="kg-online-badge"><i class="fas fa-laptop"></i> 2 Days &bull; Online</span>
                        <h2 class="kg-title" style="font-size:2rem;">Agribusiness &amp;<br>Entrepreneurship</h2>
                        <p class="kg-tagline">Learn. Innovate. Grow. Succeed.</p>
                        <p class="kg-desc">Agribusiness and entrepreneurship sit at the heart of a sustainable future. This course equips you with the knowledge and practical skills to turn ideas into impactful ventures in agriculture and beyond.</p>
                        <div class="kg-quote"><i class="fas fa-quote-left"></i> Invest in Knowledge, <strong>Harvest Success!</strong></div>
                      </div>
                      <svg class="kg-illus" viewBox="0 0 440 150" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <circle cx="398" cy="30" r="13" stroke="rgba(255,255,255,0.38)" stroke-width="2"/>
                        <g stroke="rgba(255,255,255,0.30)" stroke-width="2" stroke-linecap="round">
                          <line x1="398" y1="6" x2="398" y2="12"/><line x1="398" y1="48" x2="398" y2="54"/>
                          <line x1="374" y1="30" x2="380" y2="30"/><line x1="416" y1="30" x2="422" y2="30"/>
                          <line x1="381" y1="13" x2="385" y2="17"/><line x1="411" y1="43" x2="415" y2="47"/>
                          <line x1="381" y1="47" x2="385" y2="43"/><line x1="411" y1="17" x2="415" y2="13"/>
                        </g>
                        <line x1="16" y1="132" x2="424" y2="132" stroke="rgba(255,255,255,0.25)" stroke-width="2" stroke-linecap="round"/>
                        <!-- growth bars -->
                        <rect x="70" y="102" width="30" height="30" rx="3" fill="rgba(255,255,255,0.14)" stroke="rgba(255,255,255,0.5)" stroke-width="2"/>
                        <rect x="112" y="86" width="30" height="46" rx="3" fill="rgba(255,255,255,0.18)" stroke="rgba(255,255,255,0.5)" stroke-width="2"/>
                        <rect x="154" y="68" width="30" height="64" rx="3" fill="rgba(255,255,255,0.22)" stroke="rgba(255,255,255,0.5)" stroke-width="2"/>
                        <rect x="196" y="48" width="30" height="84" rx="3" fill="rgba(255,255,255,0.28)" stroke="rgba(255,255,255,0.5)" stroke-width="2"/>
                        <!-- rising arrow -->
                        <path d="M78 112 L126 96 L168 78 L214 56" stroke="rgba(255,255,255,0.6)" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M214 56 L201 56 M214 56 L214 69" stroke="rgba(255,255,255,0.6)" stroke-width="2.4" stroke-linecap="round"/>
                        <!-- sprout -->
                        <path d="M262 132 V102" stroke="rgba(255,255,255,0.55)" stroke-width="2.2" stroke-linecap="round"/>
                        <path d="M262 114 C250 112 244 102 246 92 C258 93 266 103 262 114 Z" fill="rgba(255,255,255,0.20)" stroke="rgba(255,255,255,0.5)" stroke-width="1.5"/>
                        <path d="M262 108 C274 106 280 96 278 86 C266 87 258 97 262 108 Z" fill="rgba(255,255,255,0.30)" stroke="rgba(255,255,255,0.5)" stroke-width="1.5"/>
                        <!-- coins -->
                        <circle cx="306" cy="120" r="10" fill="rgba(255,255,255,0.14)" stroke="rgba(255,255,255,0.5)" stroke-width="2"/>
                        <circle cx="326" cy="120" r="10" fill="rgba(255,255,255,0.20)" stroke="rgba(255,255,255,0.5)" stroke-width="2"/>
                      </svg>
                    </div>

                    <div class="col-lg-7 kg-right">
                      <div class="kg-highlights">
                        <div class="kg-hl"><span class="kg-hl-ic"><i class="fas fa-chart-line"></i></span><span>Explore opportunities in modern agribusiness &amp; value chains</span></div>
                        <div class="kg-hl"><span class="kg-hl-ic"><i class="fas fa-lightbulb"></i></span><span>Build entrepreneurial thinking &amp; business planning skills</span></div>
                        <div class="kg-hl"><span class="kg-hl-ic"><i class="fas fa-seedling"></i></span><span>Gain insights into sustainable solutions for global challenges</span></div>
                        <div class="kg-hl"><span class="kg-hl-ic"><i class="fas fa-bullseye"></i></span><span>Practical knowledge for real-world impact</span></div>
                      </div>

                      <div class="kg-info">
                        <div class="kg-info-item"><i class="fas fa-calendar-days"></i><b>Sep 19 &amp; 20</b><small>2 Days</small></div>
                        <div class="kg-info-item"><i class="fas fa-laptop-code"></i><b>Fully Online</b><small>Live Session</small></div>
                        <div class="kg-info-item"><i class="fas fa-clock"></i><b>10:30&ndash;1:30</b><small>PM Daily</small></div>
                        <div class="kg-info-item kg-fee"><i class="fas fa-tags"></i><b>Rs. 2000</b><small><s>Rs. 3000</s> &nbsp;30% OFF</small></div>
                      </div>

                      <div class="kg-earlybird">
                        <i class="fas fa-star"></i> <strong>Early Reg:</strong> Rs. 2000 (30% OFF) &nbsp;&bull;&nbsp; <strong>Foreign:</strong> 40 CAD / Early Bird 25 CAD &mdash; until 12 September &nbsp;<span class="kg-seats">Limited Seats!</span>
                      </div>

                      <div class="kg-who">
                        <b><i class="fas fa-bullseye"></i> Who should join?</b> Students, aspiring entrepreneurs, farmers, professionals &amp; anyone passionate about building a career in agribusiness.
                      </div>

                      <div class="kg-cta-row">
                        <a href="{{ route('register.form') }}" class="kg-enroll">Enroll Now <i class="fas fa-arrow-right"></i></a>
                        <div class="kg-contact">
                          <span><i class="fas fa-envelope"></i> info@ciasce.com</span>
                          <span><i class="fas fa-phone"></i> +1 647 786 6307</span>
                          <span><i class="fab fa-whatsapp"></i> 0333 4123220</span>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div><!-- /Slide 2 -->

            </div><!-- /kg-track -->
          </div><!-- /kg-viewport -->

        </div><!-- /kg-slider -->
      </div>
    </section>

    <script>
      (function () {
        var slider = document.querySelector('.kg-slider');
        if (!slider) return;
        var track = slider.querySelector('.kg-track');
        var dots = [].slice.call(slider.querySelectorAll('.kg-dot'));
        var n = dots.length, i = 0, timer = null;
        if (n <= 1) return; // single slide — no rotation needed
        function go(k) {
          i = (k + n) % n;
          track.style.transform = 'translateX(-' + (i * 100) + '%)';
          dots.forEach(function (d, j) { d.classList.toggle('active', j === i); });
        }
        function start() { stop(); timer = setInterval(function () { go(i + 1); }, 6000); }
        function stop() { if (timer) { clearInterval(timer); timer = null; } }
        dots.forEach(function (d) { d.addEventListener('click', function () { go(+d.getAttribute('data-i')); start(); }); });
        slider.addEventListener('mouseenter', stop);
        slider.addEventListener('mouseleave', start);
        start();
      })();
    </script>

    <style>
      .kg-section { background: linear-gradient(180deg, #f1f8f1 0%, #ecebff 100%); padding: 70px 0; }
      .kg-badge-top {
        display: inline-flex; align-items: center; gap: 9px; background: linear-gradient(135deg,#2e7d32,#1b5e20); color: #fff;
        font-weight: 700; letter-spacing: 1px; text-transform: uppercase; font-size: 0.82rem;
        padding: 10px 22px; border-radius: 30px; margin-bottom: 26px; box-shadow: 0 10px 24px rgba(46,125,50,0.30);
      }
      .kg-card {
        background: #fff; border-radius: 26px; overflow: hidden;
        box-shadow: 0 30px 70px rgba(20,83,45,0.18); max-width: 1050px; margin: 0 auto;
      }
      /* Slider */
      .kg-slider { position: relative; max-width: 1050px; margin: 0 auto; }
      .kg-viewport { overflow: hidden; border-radius: 26px; filter: drop-shadow(0 24px 50px rgba(20,83,45,0.20)); }
      .kg-track { display: flex; align-items: stretch; transition: transform 0.6s cubic-bezier(0.65,0,0.35,1); }
      .kg-slide { min-width: 100%; }
      .kg-slide .kg-card { max-width: none; margin: 0; height: 100%; box-shadow: none; }
      .kg-dots { display: flex; justify-content: center; gap: 10px; margin-top: 24px; }
      .kg-dot { width: 11px; height: 11px; border-radius: 50%; border: none; background: #bfe0c4; cursor: pointer; padding: 0; transition: all 0.3s ease; }
      .kg-dot:hover { background: #8fce97; }
      .kg-dot.active { background: #2e7d32; width: 30px; border-radius: 6px; }
      /* Left panel */
      .kg-left {
        position: relative; overflow: hidden;
        background: linear-gradient(150deg, #43a047 0%, #1b5e20 52%, #14532d 100%); color: #fff;
      }
      .kg-illus { position: absolute; left: 0; right: 0; bottom: 0; width: 100%; height: auto; z-index: 1; opacity: 0.95; pointer-events: none; }
      .kg-left-inner { position: relative; z-index: 2; padding: 42px 36px 150px; }
      .kg-online-badge {
        display: inline-flex; align-items: center; gap: 8px; background: rgba(255,255,255,0.18);
        border: 1px solid rgba(255,255,255,0.35); color: #fff; font-weight: 600; font-size: 0.82rem;
        padding: 7px 15px; border-radius: 30px; margin-bottom: 18px;
      }
      .kg-title { font-weight: 800; font-size: 2.9rem; line-height: 1.02; margin: 0 0 12px; text-shadow: 0 3px 12px rgba(0,0,0,0.2); }
      .kg-tagline { color: #bfe3c1; font-weight: 600; font-size: 1.05rem; margin-bottom: 16px; }
      .kg-desc { color: rgba(255,255,255,0.9); font-size: 0.94rem; line-height: 1.65; margin-bottom: 22px; }
      .kg-quote { border-left: 3px solid #a5d6a7; padding-left: 14px; font-style: italic; color: #eaf7ea; font-size: 1.02rem; }
      .kg-quote strong { color: #fff; font-style: normal; }
      .kg-quote i { color: #a5d6a7; margin-right: 6px; }
      /* Right panel */
      .kg-right { padding: 38px 38px 32px; }
      .kg-highlights { display: grid; gap: 12px; margin-bottom: 26px; }
      .kg-hl { display: flex; align-items: center; gap: 13px; color: #3a3a52; font-size: 0.95rem; font-weight: 500; }
      .kg-hl-ic {
        flex-shrink: 0; width: 38px; height: 38px; border-radius: 11px; background: #e8f5e9; color: #2e7d32;
        display: flex; align-items: center; justify-content: center; font-size: 0.95rem;
      }
      .kg-info { display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px; margin-bottom: 18px; }
      .kg-info-item {
        background: #f1f8f1; border: 1px solid #d9ead9; border-radius: 14px; padding: 14px 8px; text-align: center;
      }
      .kg-info-item i { color: #2e7d32; font-size: 1.15rem; display: block; margin-bottom: 7px; }
      .kg-info-item b { display: block; color: #14532d; font-size: 0.9rem; line-height: 1.2; }
      .kg-info-item small { display: block; color: #8785a8; font-size: 0.72rem; margin-top: 3px; }
      .kg-info-item.kg-fee { background: linear-gradient(135deg,#2e7d32,#1b5e20); border-color: #1b5e20; }
      .kg-info-item.kg-fee i, .kg-info-item.kg-fee b { color: #fff; }
      .kg-info-item.kg-fee small { color: #c8e6c9; }
      .kg-info-item.kg-fee s { color: #a5d6a7; }
      .kg-earlybird {
        background: #eef7ee; border: 1px dashed #9ccc9f; border-radius: 12px; padding: 11px 16px;
        color: #1b5e20; font-size: 0.86rem; margin-bottom: 16px;
      }
      .kg-earlybird i { color: #f5a623; }
      .kg-earlybird .kg-seats { color: #d6336c; font-weight: 700; }
      .kg-who { color: #55536e; font-size: 0.9rem; line-height: 1.55; margin-bottom: 22px; }
      .kg-who b { color: #14532d; }
      .kg-who i { color: #2e7d32; margin-right: 5px; }
      .kg-cta-row { display: flex; align-items: center; gap: 20px; flex-wrap: wrap; }
      .kg-enroll {
        display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #2e7d32, #1b5e20);
        color: #fff; font-weight: 700; font-size: 1rem; padding: 14px 30px; border-radius: 30px; text-decoration: none;
        box-shadow: 0 12px 26px rgba(46,125,50,0.36); transition: all 0.3s ease; white-space: nowrap;
      }
      .kg-enroll:hover { transform: translateY(-3px); box-shadow: 0 18px 34px rgba(46,125,50,0.48); color: #fff; }
      .kg-enroll i { transition: transform 0.3s ease; }
      .kg-enroll:hover i { transform: translateX(4px); }
      .kg-contact { display: flex; flex-wrap: wrap; gap: 8px 18px; }
      .kg-contact span { color: #667085; font-size: 0.82rem; white-space: nowrap; }
      .kg-contact i { color: #2e7d32; margin-right: 5px; }
      @media (max-width: 991px) {
        .kg-title { font-size: 2.5rem; }
        .kg-left-inner { padding: 36px 30px 140px; }
      }
      @media (max-width: 576px) {
        .kg-section { padding: 50px 0; }
        .kg-info { grid-template-columns: repeat(2, 1fr); }
        .kg-right { padding: 28px 24px; }
        .kg-title { font-size: 2.3rem; }
        .kg-left-inner { padding: 32px 24px 120px; }
      }
    </style>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title center">About CIASCE</h2>
                    <p class="lead">CIASCE integrates sustainability, innovation, and practical learning to nurture future-ready professionals capable of driving meaningful impact.</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="highlight-box">
                        <p class="mb-0">Under the visionary leadership of <strong>Prof. Dr. Muhammad Saleem Haider</strong>, CIASCE stands as a hub of experiential learning, industry-oriented training, and global collaboration. Our programs are designed to bridge the gap between theory and practice, empowering individuals and institutions with the skills and confidence to thrive in today's dynamic and competitive world.</p>
                    </div>
                </div>
            </div>
        </div>

          <div class="container">
        <div class="row mt-5">
            <div class="col-md-4 text-center">
                <div class="value-item" style="
                    background: linear-gradient(135deg, #ffffff 0%, #f4faf4 100%);
                    border-radius: 20px;
                    padding: 40px 25px;
                    box-shadow: 0 10px 30px rgba(46, 125, 50, 0.1);
                    border: 1px solid rgba(46, 125, 50, 0.1);
                    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    position: relative;
                    overflow: hidden;
                    height: 100%;
                ">
                    <div class="value-icon" style="
                        width: 100px;
                        height: 100px;
                        background: linear-gradient(135deg, #2e7d32 0%, #66bb6a 100%);
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin: 0 auto 25px;
                        color: white;
                        font-size: 40px;
                        box-shadow: 0 15px 30px rgba(46, 125, 50, 0.3);
                        transition: all 0.4s ease;
                        position: relative;
                        z-index: 2;
                    ">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h4 style="
                        color: #14532d;
                        font-weight: 700;
                        margin-bottom: 15px;
                        font-size: 1.5rem;
                        position: relative;
                        z-index: 2;
                        transition: all 0.4s ease;
                    ">Sustainability</h4>
                    <p style="
                        color: #666;
                        line-height: 1.6;
                        margin-bottom: 0;
                        position: relative;
                        z-index: 2;
                        transition: all 0.4s ease;
                    ">Integrating eco-friendly practices and sustainable approaches in all our programs.</p>
                    
                    <!-- Hover effect background -->
                    <div class="hover-bg" style="
                        position: absolute;
                        top: 0;
                        left: 0;
                        right: 0;
                        height: 0;
                        background: linear-gradient(135deg, #2e7d32 0%, #1b5e20 100%);
                        transition: height 0.4s ease;
                        border-radius: 20px;
                        z-index: 1;
                    "></div>
                </div>
            </div>
            
            <div class="col-md-4 text-center">
                <div class="value-item" style="
                    background: linear-gradient(135deg, #ffffff 0%, #f4faf4 100%);
                    border-radius: 20px;
                    padding: 40px 25px;
                    box-shadow: 0 10px 30px rgba(46, 125, 50, 0.1);
                    border: 1px solid rgba(46, 125, 50, 0.1);
                    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    position: relative;
                    overflow: hidden;
                    height: 100%;
                ">
                    <div class="value-icon" style="
                        width: 100px;
                        height: 100px;
                        background: linear-gradient(135deg, #2e7d32 0%, #66bb6a 100%);
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin: 0 auto 25px;
                        color: white;
                        font-size: 40px;
                        box-shadow: 0 15px 30px rgba(46, 125, 50, 0.3);
                        transition: all 0.4s ease;
                        position: relative;
                        z-index: 2;
                    ">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h4 style="
                        color: #14532d;
                        font-weight: 700;
                        margin-bottom: 15px;
                        font-size: 1.5rem;
                        position: relative;
                        z-index: 2;
                        transition: all 0.4s ease;
                    ">Innovation</h4>
                    <p style="
                        color: #666;
                        line-height: 1.6;
                        margin-bottom: 0;
                        position: relative;
                        z-index: 2;
                        transition: all 0.4s ease;
                    ">Fostering creative thinking and cutting-edge solutions for modern challenges.</p>
                    
                    <!-- Hover effect background -->
                    <div class="hover-bg" style="
                        position: absolute;
                        top: 0;
                        left: 0;
                        right: 0;
                        height: 0;
                        background: linear-gradient(135deg, #2e7d32 0%, #1b5e20 100%);
                        transition: height 0.4s ease;
                        border-radius: 20px;
                        z-index: 1;
                    "></div>
                </div>
            </div>
            
            <div class="col-md-4 text-center">
                <div class="value-item" style="
                    background: linear-gradient(135deg, #ffffff 0%, #f4faf4 100%);
                    border-radius: 20px;
                    padding: 40px 25px;
                    box-shadow: 0 10px 30px rgba(46, 125, 50, 0.1);
                    border: 1px solid rgba(46, 125, 50, 0.1);
                    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    position: relative;
                    overflow: hidden;
                    height: 100%;
                ">
                    <div class="value-icon" style="
                        width: 100px;
                        height: 100px;
                        background: linear-gradient(135deg, #2e7d32 0%, #66bb6a 100%);
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin: 0 auto 25px;
                        color: white;
                        font-size: 40px;
                        box-shadow: 0 15px 30px rgba(46, 125, 50, 0.3);
                        transition: all 0.4s ease;
                        position: relative;
                        z-index: 2;
                    ">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h4 style="
                        color: #14532d;
                        font-weight: 700;
                        margin-bottom: 15px;
                        font-size: 1.5rem;
                        position: relative;
                        z-index: 2;
                        transition: all 0.4s ease;
                    ">Practical Learning</h4>
                    <p style="
                        color: #666;
                        line-height: 1.6;
                        margin-bottom: 0;
                        position: relative;
                        z-index: 2;
                        transition: all 0.4s ease;
                    ">Hands-on experience that prepares you for real-world professional scenarios.</p>
                    
                    <!-- Hover effect background -->
                    <div class="hover-bg" style="
                        position: absolute;
                        top: 0;
                        left: 0;
                        right: 0;
                        height: 0;
                        background: linear-gradient(135deg, #2e7d32 0%, #1b5e20 100%);
                        transition: height 0.4s ease;
                        border-radius: 20px;
                        z-index: 1;
                    "></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Add hover effects with JavaScript
        document.addEventListener('DOMContentLoaded', function() {
            const valueItems = document.querySelectorAll('.value-item');
            
            valueItems.forEach(item => {
                const hoverBg = item.querySelector('.hover-bg');
                const icon = item.querySelector('.value-icon');
                const heading = item.querySelector('h4');
                const paragraph = item.querySelector('p');
                
                item.addEventListener('mouseenter', function() {
                    // Expand background but only partially
                    hoverBg.style.height = '100%';
                    
                    // Change text color to white for better contrast
                    heading.style.color = 'white';
                    paragraph.style.color = 'rgba(255,255,255,0.9)';
                    
                    // Transform icon - more subtle effect
                    icon.style.transform = 'scale(1.1)';
                    icon.style.background = 'linear-gradient(135deg, #ffffff 0%, #eef6ee 100%)';
                    icon.style.color = '#2e7d32';
                    icon.style.boxShadow = '0 15px 30px rgba(255,255,255,0.4)';
                    
                    // Lift card slightly
                    item.style.transform = 'translateY(-10px)';
                    item.style.boxShadow = '0 20px 40px rgba(46, 125, 50, 0.25)';
                });
                
                item.addEventListener('mouseleave', function() {
                    // Reset background
                    hoverBg.style.height = '0';
                    
                    // Reset text color
                    heading.style.color = '#14532d';
                    paragraph.style.color = '#666';
                    
                    // Reset icon
                    icon.style.transform = 'scale(1)';
                    icon.style.background = 'linear-gradient(135deg, #2e7d32 0%, #66bb6a 100%)';
                    icon.style.color = 'white';
                    icon.style.boxShadow = '0 15px 30px rgba(46, 125, 50, 0.3)';
                    
                    // Reset card position
                    item.style.transform = 'translateY(0)';
                    item.style.boxShadow = '0 10px 30px rgba(46, 125, 50, 0.1)';
                });
            });
        });
    </script>
    </section>

  <div class="container my-5">
    <div class="row justify-content-center">
        <!-- Image 1 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="image-card" style="
                position: relative;
                border-radius: 20px;
                overflow: hidden;
                box-shadow: 0 15px 35px rgba(46, 125, 50, 0.15);
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                background: linear-gradient(135deg, #ffffff 0%, #f4faf4 100%);
                padding: 15px;
                height: 100%;
            ">
                <div class="image-container" style="
                    position: relative;
                    border-radius: 15px;
                    overflow: hidden;
                    height: 300px;
                    background: #f1f8f1;
                ">
                    <img loading="lazy" src="{{ asset('assets/img/person/image-1.jpeg') }}"
                         alt="International Collaboration"
                         style="
                            width: 100%;
                            height: 100%;
                            object-fit: contain;
                            transition: all 0.4s ease;
                         ">
                    <div class="image-overlay" style="
                        position: absolute;
                        top: 0;
                        left: 0;
                        right: 0;
                        bottom: 0;
                        background: linear-gradient(to bottom, transparent 0%, rgba(46, 125, 50, 0.8) 100%);
                        opacity: 0;
                        transition: all 0.4s ease;
                        display: flex;
                        align-items: flex-end;
                        padding: 25px;
                    ">
                        <h5 style="
                            color: white;
                            font-weight: 600;
                            font-size: 1.3rem;
                            margin: 0;
                            transform: translateY(20px);
                            transition: all 0.4s ease;
                        ">Global Partnerships</h5>
                    </div>
                </div>
                <div class="image-content" style="padding: 25px 15px 15px;">
                    <h4 style="
                        color: #14532d;
                        font-weight: 700;
                        margin-bottom: 10px;
                        font-size: 1.4rem;
                    ">International Collaboration</h4>
                    <p style="
                        color: #666;
                        line-height: 1.6;
                        margin-bottom: 0;
                        font-size: 0.95rem;
                    ">Building strong ties with leading global institutions to bring world-class opportunities to our learners.</p>
                </div>
            </div>
        </div>

        <!-- Image 2 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="image-card" style="
                position: relative;
                border-radius: 20px;
                overflow: hidden;
                box-shadow: 0 15px 35px rgba(46, 125, 50, 0.15);
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                background: linear-gradient(135deg, #ffffff 0%, #f4faf4 100%);
                padding: 15px;
                height: 100%;
            ">
                <div class="image-container" style="
                    position: relative;
                    border-radius: 15px;
                    overflow: hidden;
                    height: 300px;
                    background: #f1f8f1;
                ">
                    <img loading="lazy" src="{{ asset('assets/img/person/image-2.jpeg') }}"
                         alt="MoU Signing"
                         style="
                            width: 100%;
                            height: 100%;
                            object-fit: contain;
                            transition: all 0.4s ease;
                         ">
                    <div class="image-overlay" style="
                        position: absolute;
                        top: 0;
                        left: 0;
                        right: 0;
                        bottom: 0;
                        background: linear-gradient(to bottom, transparent 0%, rgba(46, 125, 50, 0.8) 100%);
                        opacity: 0;
                        transition: all 0.4s ease;
                        display: flex;
                        align-items: flex-end;
                        padding: 25px;
                    ">
                        <h5 style="
                            color: white;
                            font-weight: 600;
                            font-size: 1.3rem;
                            margin: 0;
                            transform: translateY(20px);
                            transition: all 0.4s ease;
                        ">MoU Signing</h5>
                    </div>
                </div>
                <div class="image-content" style="padding: 25px 15px 15px;">
                    <h4 style="
                        color: #14532d;
                        font-weight: 700;
                        margin-bottom: 10px;
                        font-size: 1.4rem;
                    ">Strategic Agreements</h4>
                    <p style="
                        color: #666;
                        line-height: 1.6;
                        margin-bottom: 0;
                        font-size: 0.95rem;
                    ">Formalizing partnerships that open doors to research, exchange, and professional growth.</p>
                </div>
            </div>
        </div>

        <!-- Image 3 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="image-card" style="
                position: relative;
                border-radius: 20px;
                overflow: hidden;
                box-shadow: 0 15px 35px rgba(46, 125, 50, 0.15);
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                background: linear-gradient(135deg, #ffffff 0%, #f4faf4 100%);
                padding: 15px;
                height: 100%;
            ">
                <div class="image-container" style="
                    position: relative;
                    border-radius: 15px;
                    overflow: hidden;
                    height: 300px;
                    background: #f1f8f1;
                ">
                    <img loading="lazy" src="{{ asset('assets/img/person/image-3.jpeg') }}"
                         alt="Scientists Convention"
                         style="
                            width: 100%;
                            height: 100%;
                            object-fit: contain;
                            transition: all 0.4s ease;
                         ">
                    <div class="image-overlay" style="
                        position: absolute;
                        top: 0;
                        left: 0;
                        right: 0;
                        bottom: 0;
                        background: linear-gradient(to bottom, transparent 0%, rgba(46, 125, 50, 0.8) 100%);
                        opacity: 0;
                        transition: all 0.4s ease;
                        display: flex;
                        align-items: flex-end;
                        padding: 25px;
                    ">
                        <h5 style="
                            color: white;
                            font-weight: 600;
                            font-size: 1.3rem;
                            margin: 0;
                            transform: translateY(20px);
                            transition: all 0.4s ease;
                        ">Scientists Convention</h5>
                    </div>
                </div>
                <div class="image-content" style="padding: 25px 15px 15px;">
                    <h4 style="
                        color: #14532d;
                        font-weight: 700;
                        margin-bottom: 10px;
                        font-size: 1.4rem;
                    ">Scientific Excellence</h4>
                    <p style="
                        color: #666;
                        line-height: 1.6;
                        margin-bottom: 0;
                        font-size: 0.95rem;
                    ">Celebrating decades of excellence in science and technology alongside the nation's leading researchers.</p>
                </div>
            </div>
        </div>

        <!-- Image 4 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="image-card" style="
                position: relative;
                border-radius: 20px;
                overflow: hidden;
                box-shadow: 0 15px 35px rgba(46, 125, 50, 0.15);
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                background: linear-gradient(135deg, #ffffff 0%, #f4faf4 100%);
                padding: 15px;
                height: 100%;
            ">
                <div class="image-container" style="
                    position: relative;
                    border-radius: 15px;
                    overflow: hidden;
                    height: 300px;
                    background: #f1f8f1;
                ">
                    <img loading="lazy" src="{{ asset('assets/img/person/image-4.jpeg') }}"
                         alt="Academic Exchange"
                         style="
                            width: 100%;
                            height: 100%;
                            object-fit: contain;
                            transition: all 0.4s ease;
                         ">
                    <div class="image-overlay" style="
                        position: absolute;
                        top: 0;
                        left: 0;
                        right: 0;
                        bottom: 0;
                        background: linear-gradient(to bottom, transparent 0%, rgba(46, 125, 50, 0.8) 100%);
                        opacity: 0;
                        transition: all 0.4s ease;
                        display: flex;
                        align-items: flex-end;
                        padding: 25px;
                    ">
                        <h5 style="
                            color: white;
                            font-weight: 600;
                            font-size: 1.3rem;
                            margin: 0;
                            transform: translateY(20px);
                            transition: all 0.4s ease;
                        ">Academic Exchange</h5>
                    </div>
                </div>
                <div class="image-content" style="padding: 25px 15px 15px;">
                    <h4 style="
                        color: #14532d;
                        font-weight: 700;
                        margin-bottom: 10px;
                        font-size: 1.4rem;
                    ">Knowledge Exchange</h4>
                    <p style="
                        color: #666;
                        line-height: 1.6;
                        margin-bottom: 0;
                        font-size: 0.95rem;
                    ">Sharing expertise and honoring collaborations that strengthen learning across borders.</p>
                </div>
            </div>
        </div>

        <!-- Image 5 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="image-card" style="
                position: relative;
                border-radius: 20px;
                overflow: hidden;
                box-shadow: 0 15px 35px rgba(46, 125, 50, 0.15);
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                background: linear-gradient(135deg, #ffffff 0%, #f4faf4 100%);
                padding: 15px;
                height: 100%;
            ">
                <div class="image-container" style="
                    position: relative;
                    border-radius: 15px;
                    overflow: hidden;
                    height: 300px;
                    background: #f1f8f1;
                ">
                    <img loading="lazy" src="{{ asset('assets/img/person/image-5.jpeg') }}"
                         alt="Professional Networking"
                         style="
                            width: 100%;
                            height: 100%;
                            object-fit: contain;
                            transition: all 0.4s ease;
                         ">
                    <div class="image-overlay" style="
                        position: absolute;
                        top: 0;
                        left: 0;
                        right: 0;
                        bottom: 0;
                        background: linear-gradient(to bottom, transparent 0%, rgba(46, 125, 50, 0.8) 100%);
                        opacity: 0;
                        transition: all 0.4s ease;
                        display: flex;
                        align-items: flex-end;
                        padding: 25px;
                    ">
                        <h5 style="
                            color: white;
                            font-weight: 600;
                            font-size: 1.3rem;
                            margin: 0;
                            transform: translateY(20px);
                            transition: all 0.4s ease;
                        ">Professional Networking</h5>
                    </div>
                </div>
                <div class="image-content" style="padding: 25px 15px 15px;">
                    <h4 style="
                        color: #14532d;
                        font-weight: 700;
                        margin-bottom: 10px;
                        font-size: 1.4rem;
                    ">Networking &amp; Dialogue</h4>
                    <p style="
                        color: #666;
                        line-height: 1.6;
                        margin-bottom: 0;
                        font-size: 0.95rem;
                    ">Connecting diverse professionals and experts to exchange ideas and build lasting relationships.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Hover Effects */
    .image-card:hover {
        transform: translateY(-15px) !important;
        box-shadow: 0 25px 50px rgba(46, 125, 50, 0.25) !important;
    }

    .image-card:hover .image-overlay {
        opacity: 1 !important;
    }

    .image-card:hover .image-overlay h5 {
        transform: translateY(0) !important;
    }

    .image-card:hover img {
        transform: scale(1.1) !important;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .image-container {
            height: 250px !important;
        }
        
        .image-content {
            padding: 20px 10px 10px !important;
        }
    }

    @media (max-width: 576px) {
        .image-container {
            height: 200px !important;
        }
    }
</style>

    <!-- ===== Events & Seminars Gallery ===== -->
    <section class="section-padding events-gallery-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center mb-5">
            <h2 class="section-title center fade-in">Events &amp; Seminars</h2>
            <p class="lead">Glimpses from CIASCE seminars, conferences, and knowledge-sharing sessions on conservation agriculture, food security, and sustainable development.</p>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6">
            <div class="event-photo"><img loading="lazy" src="{{ asset('assets/img/person/img.1.jpeg') }}" alt="CIASCE Seminar"></div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="event-photo"><img loading="lazy" src="{{ asset('assets/img/person/img.2.jpeg') }}" alt="Guest Speaker Session"></div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="event-photo"><img loading="lazy" src="{{ asset('assets/img/person/img.3.jpeg') }}" alt="Award &amp; Recognition"></div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="event-photo"><img loading="lazy" src="{{ asset('assets/img/person/img.4.jpeg') }}" alt="Conference Session"></div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="event-photo"><img loading="lazy" src="{{ asset('assets/img/person/img.5.jpeg') }}" alt="International Symposium"></div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="event-photo"><img loading="lazy" src="{{ asset('assets/img/person/img.6.jpeg') }}" alt="Guest Speaker Seminar"></div>
          </div>
        </div>
      </div>
    </section>

    <style>
      .events-gallery-section { background: #f6f7fb; }
      .event-photo {
        border-radius: 18px; overflow: hidden; height: 260px;
        box-shadow: 0 12px 34px rgba(20,83,45,0.12);
        background: #e8f5e9; position: relative;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
      }
      .event-photo img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
      .event-photo:hover { transform: translateY(-8px); box-shadow: 0 22px 48px rgba(46,125,50,0.22); }
      .event-photo:hover img { transform: scale(1.07); }
      @media (max-width: 768px) { .event-photo { height: 220px; } }
    </style>

    <!-- Programs Section (auto-scrolling reel from database) -->
    <section class="section-padding programs-reel-section" id="programs">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-4">
                    <h2 class="section-title center fade-in">Our Programs</h2>
                    <p class="lead">Professional training programs designed to advance skills in management, agriculture, and agribusiness.</p>
                </div>
            </div>
        </div>

        @if (isset($programs) && $programs->count())
            <div class="prog-reel">
                <div class="prog-reel-track">
                    @foreach ($programs->concat($programs) as $prog)
                        <a href="{{ route('programs.index') }}" class="prog-reel-card">
                            <div class="prog-reel-img">
                                @if ($prog->image)
                                    <img src="{{ asset($prog->image) }}" alt="{{ $prog->heading }}">
                                @else
                                    <img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="CIASCE" style="object-fit:contain;padding:24px;">
                                @endif
                            </div>
                            <div class="prog-reel-body">
                                <h4>{{ $prog->heading }}</h4>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="container text-center mt-4">
                <a href="{{ route('programs.index') }}" class="btn btn-ciasce">View All Programs</a>
            </div>
        @else
            <div class="container text-center text-muted">Programs will be shown here soon.</div>
        @endif
    </section>

    <style>
        .programs-reel-section { background: #ffffff; }
        .prog-reel {
            overflow: hidden; padding: 12px 0;
            -webkit-mask-image: linear-gradient(90deg, transparent, #000 5%, #000 95%, transparent);
            mask-image: linear-gradient(90deg, transparent, #000 5%, #000 95%, transparent);
        }
        .prog-reel-track { display: flex; gap: 24px; width: max-content; animation: progReelScroll 60s linear infinite; }
        .prog-reel:hover .prog-reel-track { animation-play-state: paused; }
        .prog-reel-card {
            width: 300px; flex-shrink: 0; background: #fff; border-radius: 18px; overflow: hidden; text-decoration: none;
            box-shadow: 0 12px 34px rgba(20,83,45,0.10); transition: transform 0.35s ease, box-shadow 0.35s ease;
        }
        .prog-reel-card:hover { transform: translateY(-8px); box-shadow: 0 22px 46px rgba(46,125,50,0.2); }
        .prog-reel-img { height: 180px; overflow: hidden; background: linear-gradient(135deg,#e8f5e9,#f6f7fb); }
        .prog-reel-img img { width: 100%; height: 100%; object-fit: cover; }
        .prog-reel-body { padding: 18px 20px; }
        .prog-reel-body h4 { color: #14532d; font-weight: 700; font-size: 1.12rem; margin: 0; line-height: 1.35; }
        @keyframes progReelScroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }
    </style>

    <!-- Leadership Section -->
    <section class="leadership-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title center">Visionary Leadership</h2>
                    <p class="lead">Guided by expertise and a commitment to excellence</p>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="leadership-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img loading="lazy" src="{{ asset('assets/img/person/saleem.jpeg') }}" class="card-img-top" alt="Prof. Dr. Muhammad Saleem Haider">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body h-100 d-flex flex-column">
                                    <h3 class="card-title">Prof. Dr. Muhammad Saleem Haider</h3>
                                    <h5 class="card-subtitle">Founder & Director</h5>
                                    <p class="card-text flex-grow-1">With decades of experience in academia and industry, Prof. Dr. Haider has dedicated his career to advancing professional education and sustainable practices in agriculture and management.</p>
                                    <p class="card-text">His visionary approach has positioned CIASCE as a leader in skills development and career excellence, bridging the gap between theoretical knowledge and practical application.</p>
                                    <div class="mt-auto">
                                        <a href="#" class="btn btn-ciasce">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Management Team ===== -->
    <section class="section-padding mgmt-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center mb-5">
            <h2 class="section-title center fade-in">Management Team</h2>
            <p class="lead">The dedicated team driving CIASCE&rsquo;s administration and academic excellence.</p>
          </div>
        </div>
        <div class="row g-4 justify-content-center">

          <div class="col-lg-4 col-md-6">
            <div class="mgmt-card">
              <div class="mgmt-avatar"><img loading="lazy" src="{{ asset('assets/img/person/saleem.jpeg') }}" alt="Prof. Dr. Muhammad Saleem Haider"></div>
              <h4>Prof. Dr. Muhammad Saleem Haider</h4>
              <p>Chief Executive Officer (CEO)</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mgmt-card">
              <div class="mgmt-avatar mgmt-logo"><img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="Aftikhar Ahmad"></div>
              <h4>Aftikhar Ahmad</h4>
              <p>Administrator</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mgmt-card">
              <div class="mgmt-avatar mgmt-logo"><img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="Aqsa Muzammil"></div>
              <h4>Aqsa Muzammil</h4>
              <p>IT Coordinator</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mgmt-card">
              <div class="mgmt-avatar mgmt-logo"><img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="Robina Amin"></div>
              <h4>Robina Amin</h4>
              <p>Course Coordinator</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mgmt-card">
              <div class="mgmt-avatar mgmt-logo"><img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="Faiq Ali"></div>
              <h4>Faiq Ali</h4>
              <p>Academic Coordinator</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <style>
      .mgmt-section { background: #ffffff; }
      .mgmt-card {
        background: #ffffff; border-radius: 18px; text-align: center; padding: 30px 22px 26px;
        box-shadow: 0 12px 34px rgba(20,83,45,0.10); border: 1px solid #eef4ea;
        transition: transform 0.35s ease, box-shadow 0.35s ease; height: 100%;
      }
      .mgmt-card:hover { transform: translateY(-8px); box-shadow: 0 22px 46px rgba(46,125,50,0.20); }
      .mgmt-avatar {
        width: 128px; height: 128px; border-radius: 50%; margin: 0 auto 18px; overflow: hidden;
        border: 4px solid #e8f5e9; box-shadow: 0 8px 20px rgba(46,125,50,0.18);
        display: flex; align-items: center; justify-content: center; background: #fff;
      }
      .mgmt-avatar img { width: 100%; height: 100%; object-fit: cover; object-position: top center; }
      .mgmt-avatar.mgmt-logo { background: linear-gradient(135deg,#2e7d32,#1b5e20); }
      .mgmt-avatar.mgmt-logo img { width: 74%; height: 74%; object-fit: contain; }
      .mgmt-card h4 { color: #14532d; font-weight: 700; font-size: 1.12rem; margin: 0 0 5px; line-height: 1.3; }
      .mgmt-card p { color: #2e7d32; font-weight: 600; font-size: 0.92rem; margin: 0; }
    </style>

    <!-- ===== Our Faculty (auto-scrolling reel) ===== -->
    @php
      $reelFaculty = [
        ['name' => 'Dr. Mubeen Sarwar', 'role' => 'Senior Horticulture Consultant', 'modal' => 'facModal1'],
        ['name' => 'Karamat Ali Zohaib', 'role' => 'Plant Pathologist', 'modal' => 'facModal2'],
        ['name' => 'Prof. Dr. Sajid Rashid Ahmad', 'role' => 'Dean, Faculty of Geosciences', 'modal' => 'facModal3'],
        ['name' => 'Prof. Dr. M. Naveed Aslam', 'role' => 'Professor & Chairman, Plant Pathology', 'modal' => 'facModal4'],
        ['name' => 'Aqsa Muzammil', 'role' => 'IT Coordinator', 'modal' => 'facModal5'],
        ['name' => 'Ibtahaj Ahmad Warraich', 'role' => 'Legal Advisor', 'modal' => 'facModal6'],
        ['name' => 'Abu Sefyan Ibrahim Saad', 'role' => 'Crop Biotechnology Specialist & Wheat Breeder', 'modal' => 'facModal7'],
        ['name' => 'Mubarak Ali Anjum, Ph.D.', 'role' => 'Plant Pathologist & Landscape Specialist', 'modal' => 'facModal8'],
      ];
    @endphp
    <section class="section-padding fac-reel-section">
      <div class="container">
        <h2 class="section-title center fade-in">Our Faculty</h2>
        <p class="lead" style="text-align:center;">Meet our distinguished scholars, scientists, and expert consultants.</p>
      </div>
      <div class="fac-reel">
        <div class="fac-reel-track">
          @foreach (array_merge($reelFaculty, $reelFaculty) as $f)
            <div class="fac-reel-card">
              <div class="fac-reel-avatar"><img loading="lazy" src="{{ asset('assets/img/person/logo.png') }}" alt="{{ $f['name'] }}"></div>
              <h4>{{ $f['name'] }}</h4>
              <p>{{ $f['role'] }}</p>
              <a href="{{ route('faculty.fac') }}?view={{ $f['modal'] }}" class="fac-reel-btn">View Profile</a>
            </div>
          @endforeach
        </div>
      </div>
    </section>

    <style>
      .fac-reel-section { background: #f6f7fb; }
      .fac-reel {
        overflow: hidden; padding: 16px 0 8px;
        -webkit-mask-image: linear-gradient(90deg, transparent, #000 6%, #000 94%, transparent);
        mask-image: linear-gradient(90deg, transparent, #000 6%, #000 94%, transparent);
      }
      .fac-reel-track { display: flex; gap: 24px; width: max-content; animation: facReelScroll 55s linear infinite; }
      .fac-reel:hover .fac-reel-track { animation-play-state: paused; }
      .fac-reel-card {
        width: 258px; flex-shrink: 0; background: #fff; border-radius: 20px; text-align: center;
        padding: 28px 22px 24px; box-shadow: 0 12px 34px rgba(20,83,45,0.10);
        display: flex; flex-direction: column; align-items: center;
      }
      .fac-reel-avatar {
        width: 108px; height: 108px; border-radius: 50%; background: #fff; border: 3px solid #e8f5e9;
        display: flex; align-items: center; justify-content: center; margin-bottom: 16px; overflow: hidden;
        box-shadow: 0 8px 20px rgba(46,125,50,0.15);
      }
      .fac-reel-avatar img { width: 82%; height: 82%; object-fit: contain; }
      .fac-reel-card h4 { color: #14532d; font-weight: 700; font-size: 1.08rem; margin: 0 0 4px; }
      .fac-reel-card p { color: #667085; font-size: 0.85rem; margin: 0 0 16px; min-height: 40px; line-height: 1.4; }
      .fac-reel-btn {
        margin-top: auto; width: 100%; border: 1.5px solid #2e7d32; color: #2e7d32; background: transparent;
        border-radius: 12px; padding: 9px; font-weight: 600; font-size: 0.9rem; text-decoration: none; transition: all 0.3s ease;
      }
      .fac-reel-btn:hover { background: #2e7d32; color: #fff; }
      @keyframes facReelScroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }
    </style>

    <!-- ===== Student Reviews ===== -->
    @php
      $reviews = [
        [
          'name' => 'Eman F.',
          'role' => 'Student',
          'quote' => 'I really enjoyed the Agribusiness Entrepreneurship course and learned many new and useful things. It changed my mindset towards business and helped me start thinking more like an entrepreneur. I especially liked that it was conducted online over the weekend, so I could learn from home without missing my college classes.',
        ],
        [
          'name' => 'Dr. Hafza S.',
          'role' => 'Assistant Professor, Botany Department, University of Karachi',
          'quote' => 'It was a wonderful experience. I think this is very useful for young students who want to pursue this field.',
        ],
        [
          'name' => 'Bilal A.',
          'role' => 'Participant',
          'quote' => 'Thank you to the whole team of CIASCE for organizing this valuable session. It gave us practical knowledge and a lot of technical insight into agribusiness. The instructor was a skillful person, and the session was really helpful.',
        ],
        [
          'name' => 'Farah N.',
          'role' => 'Participant',
          'quote' => 'The session was informative and supportive, with in-depth knowledge. The comprehensive lectures of our instructor truly helped us learn a lot about agribusiness entrepreneurship.',
        ],
        [
          'name' => 'Amir N.',
          'role' => 'Participant',
          'quote' => 'The session was very informative. We learned a lot of things from Dr. Zahid.',
        ],
      ];
    @endphp
    <section class="section-padding reviews-section" id="reviews">
      <div class="container">
        <h2 class="section-title center fade-in">What Our Students Say</h2>
        <p class="lead" style="text-align:center;">Feedback from participants of the Entrepreneurship in Agribusiness Certificate Course.</p>
        <div class="reviews-grid">
          @foreach ($reviews as $r)
            <figure class="review-card">
              <div class="review-stars" aria-hidden="true">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
              <blockquote>&ldquo;{{ $r['quote'] }}&rdquo;</blockquote>
              <figcaption>
                <div class="review-avatar">{{ mb_substr(preg_replace('/^Dr\.\s*/', '', $r['name']), 0, 1) }}</div>
                <div>
                  <h4>{{ $r['name'] }}</h4>
                  <p>{{ $r['role'] }}</p>
                </div>
              </figcaption>
            </figure>
          @endforeach
        </div>
      </div>
    </section>

    <style>
      .reviews-section { background: #ffffff; }
      .reviews-grid {
        display: flex; flex-wrap: wrap; justify-content: center; gap: 24px;
        margin: 32px auto 0; max-width: 1140px;
      }
      .review-card {
        flex: 0 1 320px; max-width: 100%; box-sizing: border-box;
        margin: 0; background: #fff; border-radius: 20px; padding: 28px 26px 24px;
        border: 1px solid #e8f5e9; box-shadow: 0 12px 34px rgba(20,83,45,0.10);
        display: flex; flex-direction: column; position: relative; transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .review-card:hover { transform: translateY(-6px); box-shadow: 0 22px 46px rgba(46,125,50,0.18); }
      .review-card::before {
        content: "\201C"; position: absolute; top: 4px; right: 22px;
        font-size: 5rem; line-height: 1; color: #e8f5e9; font-family: Georgia, serif;
      }
      .review-stars { color: #f5b301; font-size: 0.9rem; margin-bottom: 14px; }
      .review-stars i { margin-right: 2px; }
      .review-card blockquote {
        margin: 0 0 22px; color: #2c3e50; font-size: 0.98rem; line-height: 1.7; font-style: italic; position: relative;
      }
      .review-card figcaption { margin-top: auto; display: flex; align-items: center; gap: 14px; }
      .review-avatar {
        width: 48px; height: 48px; flex-shrink: 0; border-radius: 50%;
        background: linear-gradient(135deg,#2e7d32,#1b5e20); color: #fff;
        display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.15rem;
      }
      .review-card h4 { color: #14532d; font-weight: 700; font-size: 1.02rem; margin: 0 0 2px; }
      .review-card figcaption p { color: #667085; font-size: 0.84rem; margin: 0; line-height: 1.4; }
      @media (max-width: 575px) {
        .review-card { flex-basis: 100%; }
      }
    </style>

    <!-- CTA Section -->
   
    <style>
        :root {
            --ciasce-primary: #2e7d32;
            --ciasce-secondary: #1b5e20;
            --ciasce-light: #f4faf4;
            --ciasce-dark: #12261a;
        }
        
      
        
        .hero-section {
            background: linear-gradient(135deg, var(--ciasce-primary) 0%, var(--ciasce-secondary) 100%);
            color: white;
            padding: 100px 0;
            margin-bottom: 80px;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 40px;
            padding-bottom: 15px;
            font-weight: 700;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background-color: var(--ciasce-primary);
        }
        
        .section-title.center:after {
            left: 50%;
            transform: translateX(-50%);
        }
        
        .highlight-box {
            background-color: var(--ciasce-light);
            border-left: 5px solid var(--ciasce-primary);
            padding: 30px;
            border-radius: 0 8px 8px 0;
            margin: 30px 0;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .mission-section {
            background-color: var(--ciasce-light);
            padding: 80px 0;
        }
        
        .leadership-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
            margin-bottom: 30px;
        }
        
        .leadership-card:hover {
            transform: translateY(-10px);
        }
        
        .leadership-card .card-img-top {
            height: 250px;
            object-fit: cover;
        }
        
        .leadership-card .card-body {
            padding: 25px;
        }
        
        .leadership-card .card-title {
            color: var(--ciasce-primary);
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .leadership-card .card-subtitle {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }
        
        .program-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
            margin-bottom: 30px;
        }
        
        .program-card:hover {
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
        
        .program-card .card-header {
            background-color: var(--ciasce-primary);
            color: white;
            padding: 20px;
            border: none;
            font-weight: 700;
        }
        
        .program-card .card-body {
            padding: 25px;
        }
        
        .program-card .card-body ul {
            padding-left: 20px;
        }
        
        .program-card .card-body ul li {
            margin-bottom: 10px;
        }
        
        .values-section {
            padding: 80px 0;
        }
        
        .value-item {
            text-align: center;
            padding: 30px 20px;
            border-radius: 10px;
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }
        
        .value-item:hover {
            background-color: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
        
        .value-icon {
            width: 80px;
            height: 80px;
            background-color: var(--ciasce-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: var(--ciasce-primary);
            font-size: 30px;
        }
        
        .cta-section {
            background: linear-gradient(135deg, var(--ciasce-primary) 0%, var(--ciasce-secondary) 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        
        .btn-ciasce {
            background-color: var(--ciasce-primary);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
        }
        
        .btn-ciasce:hover {
            background-color: var(--ciasce-secondary);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .btn-outline-ciasce {
            background-color: transparent;
            color: var(--ciasce-primary);
            border: 2px solid var(--ciasce-primary);
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-outline-ciasce:hover {
            background-color: var(--ciasce-primary);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        footer {
            background-color: var(--ciasce-dark);
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer-links h5 {
            color: white;
            margin-bottom: 20px;
            font-weight: 700;
        }
        
        .footer-links ul {
            list-style: none;
            padding: 0;
        }
        
        .footer-links ul li {
            margin-bottom: 10px;
        }
        
        .footer-links ul li a {
            color: #aaa;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-links ul li a:hover {
            color: white;
        }
        
        .copyright {
            border-top: 1px solid #333;
            padding-top: 20px;
            margin-top: 40px;
            text-align: center;
            color: #aaa;
            font-size: 0.9rem;
        }
        
        .tagline {
            font-style: italic;
            font-weight: 600;
            color: rgba(255,255,255,0.9);
            margin-top: 15px;
        }
        
        .logo {
            font-weight: 800;
            font-size: 2rem;
            color: white;
            margin-bottom: 15px;
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 60px 0;
                margin-bottom: 50px;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
        }
    </style>



{{-- <img src="assets/img/person/one.jpeg" class="img-fluid" alt=""> --}}




<!-- Biography Section -->
<section  class="section-padding m-reset-negmargin" style="margin-top: -190px">
  <div style="position: relative; top:100px;" class="container m-reset-top">
      <div class="row justify-content-center">
          <div class="col-lg-10">
              <h2 class="section-title fade-in">Biography</h2>
              <div class="fade-in text-center">
                  <p>Doctorate from Imperial College, University of London (ranked 2<sup>nd</sup> worldwide by QS Ranking 2024); Post doctorate from University of Toronto, Canada; Served in many national organizations including: Centre of Excellence in Molecular Biology (CEMB), Central Cotton Research Institute (CCRI), Directorate of Pest Warning and Quality Control of Pesticides, School of Biological Sciences; Director, Institute of Agricultural Sciences, University of the Punjab, Lahore as researcher, academician and administrator. Currently serving as Dean, Faculty of Agricultural Sciences.</p>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- Research Interests Section -->
<section class="section-padding bg-light-custom">
  <div class="container">
      <h2 class="section-title fade-in">Research Interests</h2>
      <div class="row">
          <div class="col-md-6 col-lg-4 mb-4">
              <div class="info-card slide-in-left">
                  <i class="fas fa-virus"></i>
                  <h4>Begomoviruses</h4>
                  <p>Research on plant viruses transmitted by whiteflies, focusing on their molecular characterization and management.</p>
              </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
              <div class="info-card slide-in-left">
                  <i class="fas fa-dna"></i>
                  <h4>RNAi</h4>
                  <p>Utilizing RNA interference technology for crop protection and genetic improvement.</p>
              </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
              <div class="info-card slide-in-left">
                  <i class="fas fa-leaf"></i>
                  <h4>Biocontrol</h4>
                  <p>Developing biological control methods for sustainable agriculture and pest management.</p>
              </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
              <div class="info-card slide-in-right">
                  <i class="fas fa-microscope"></i>
                  <h4>Plant Virology</h4>
                  <p>Comprehensive study of plant viruses, their transmission, and control strategies.</p>
              </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
              <div class="info-card slide-in-right">
                  <i class="fas fa-seedling"></i>
                  <h4>Transgenic Cotton</h4>
                  <p>Genetic engineering of cotton for improved resistance to pests and environmental stresses.</p>
              </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
              <div class="info-card slide-in-right">
                  <i class="fas fa-bug"></i>
                  <h4>Insect Pest Management</h4>
                  <p>Integrated approaches for sustainable management of insect pests in agricultural systems.</p>
              </div>
          </div>
      </div>
  </div>
</section>








<!-- Hero Section -->
    <section class="hero-section">
        <div class="floating-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="hero-content fade-in">
                        <h1>Our Vision & Mission</h1>
                        <p class="lead">Guiding our journey towards excellence, innovation, and meaningful impact</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="section-padding">
        <div class="container">
            <h2 class="section-title fade-in">Our Vision</h2>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="vision-mission-card fade-in">
                        <div class="card-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3 class="card-title">To Be a Catalyst for Excellence</h3>
                        <div class="card-content">
                            <p>To be a catalyst for personal and professional excellence by equipping learners with the tools, mindset, and confidence to achieve lasting success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="section-padding" style="background: var(--secondary-color);">
        <div class="container">
            <h2 class="section-title fade-in">Our Mission</h2>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="vision-mission-card fade-in">
                        <div class="card-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3 class="card-title">Cultivating Excellence & Innovation</h3>
                        <div class="card-content">
                            <p>To cultivate an environment that promotes intellectual curiosity, skill mastery, and ethical values. We strive to develop well-rounded individuals who can think critically, communicate effectively, and contribute meaningfully to society.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
   <section class="values-section" style="
    background: linear-gradient(135deg, #2e7d32 0%, #1b5e20 100%);
    padding: 100px 0;
    position: relative;
    overflow: hidden;
">
    <!-- Floating Shapes Background -->
    <div class="floating-shapes" style="
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 1;
    ">
        <div class="shape shape-1" style="
            position: absolute;
            width: 150px;
            height: 150px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            top: 10%;
            left: 5%;
            animation: float 6s ease-in-out infinite;
        "></div>
        <div class="shape shape-2" style="
            position: absolute;
            width: 100px;
            height: 100px;
            background: rgba(255,255,255,0.08);
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            top: 70%;
            right: 10%;
            animation: float 8s ease-in-out infinite reverse;
        "></div>
        <div class="shape shape-3" style="
            position: absolute;
            width: 120px;
            height: 120px;
            background: rgba(255,255,255,0.05);
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
            bottom: 10%;
            left: 15%;
            animation: float 7s ease-in-out infinite 1s;
        "></div>
    </div>

    <div class="container" style="position: relative; z-index: 2;">
        <!-- Section Header -->
        <div class="text-center mb-5" style="margin-bottom: 3rem !important;">
            <h2 class="section-title" style="
                color: white;
                font-size: 3rem;
                font-weight: 800;
                margin-bottom: 1rem;
                text-shadow: 0 4px 10px rgba(0,0,0,0.2);
            ">Our Core Values</h2>
            <p style="
                color: rgba(255,255,255,0.9);
                font-size: 1.2rem;
                max-width: 600px;
                margin: 0 auto;
                line-height: 1.6;
            ">Guiding principles that define our mission and drive our success</p>
        </div>

        <!-- Core Values Grid -->
        <div class="row">
            <!-- Integrity -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="value-item" style="
                    background: rgba(255,255,255,0.95);
                    border-radius: 20px;
                    padding: 40px 30px;
                    text-align: center;
                    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
                    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    height: 100%;
                    border: 2px solid transparent;
                    position: relative;
                    overflow: hidden;
                ">
                    <div class="value-icon" style="
                        width: 90px;
                        height: 90px;
                        background: linear-gradient(135deg, #2e7d32 0%, #66bb6a 100%);
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin: 0 auto 25px;
                        color: white;
                        font-size: 36px;
                        box-shadow: 0 10px 25px rgba(46, 125, 50, 0.3);
                        transition: all 0.4s ease;
                    ">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4 class="value-title" style="
                        color: #14532d;
                        font-weight: 700;
                        margin-bottom: 15px;
                        font-size: 1.5rem;
                        transition: all 0.4s ease;
                    ">Integrity</h4>
                    <p class="value-description" style="
                        color: #666;
                        line-height: 1.6;
                        margin-bottom: 0;
                        transition: all 0.4s ease;
                    ">We uphold the highest standards of ethics, trust, and transparency in everything we do.</p>
                </div>
            </div>

            <!-- Innovation -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="value-item" style="
                    background: rgba(255,255,255,0.95);
                    border-radius: 20px;
                    padding: 40px 30px;
                    text-align: center;
                    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
                    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    height: 100%;
                    border: 2px solid transparent;
                    position: relative;
                    overflow: hidden;
                ">
                    <div class="value-icon" style="
                        width: 90px;
                        height: 90px;
                        background: linear-gradient(135deg, #2e7d32 0%, #66bb6a 100%);
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin: 0 auto 25px;
                        color: white;
                        font-size: 36px;
                        box-shadow: 0 10px 25px rgba(46, 125, 50, 0.3);
                        transition: all 0.4s ease;
                    ">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h4 class="value-title" style="
                        color: #14532d;
                        font-weight: 700;
                        margin-bottom: 15px;
                        font-size: 1.5rem;
                        transition: all 0.4s ease;
                    ">Innovation</h4>
                    <p class="value-description" style="
                        color: #666;
                        line-height: 1.6;
                        margin-bottom: 0;
                        transition: all 0.4s ease;
                    ">We foster creativity and forward-thinking approaches to drive continuous improvement and growth.</p>
                </div>
            </div>

            <!-- Sustainability -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="value-item" style="
                    background: rgba(255,255,255,0.95);
                    border-radius: 20px;
                    padding: 40px 30px;
                    text-align: center;
                    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
                    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    height: 100%;
                    border: 2px solid transparent;
                    position: relative;
                    overflow: hidden;
                ">
                    <div class="value-icon" style="
                        width: 90px;
                        height: 90px;
                        background: linear-gradient(135deg, #2e7d32 0%, #66bb6a 100%);
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin: 0 auto 25px;
                        color: white;
                        font-size: 36px;
                        box-shadow: 0 10px 25px rgba(46, 125, 50, 0.3);
                        transition: all 0.4s ease;
                    ">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h4 class="value-title" style="
                        color: #14532d;
                        font-weight: 700;
                        margin-bottom: 15px;
                        font-size: 1.5rem;
                        transition: all 0.4s ease;
                    ">Sustainability</h4>
                    <p class="value-description" style="
                        color: #666;
                        line-height: 1.6;
                        margin-bottom: 0;
                        transition: all 0.4s ease;
                    ">Rooted in our belief in nature, we promote environmentally responsible and sustainable practices.</p>
                </div>
            </div>

            <!-- Excellence -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="value-item" style="
                    background: rgba(255,255,255,0.95);
                    border-radius: 20px;
                    padding: 40px 30px;
                    text-align: center;
                    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
                    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    height: 100%;
                    border: 2px solid transparent;
                    position: relative;
                    overflow: hidden;
                ">
                    <div class="value-icon" style="
                        width: 90px;
                        height: 90px;
                        background: linear-gradient(135deg, #2e7d32 0%, #66bb6a 100%);
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin: 0 auto 25px;
                        color: white;
                        font-size: 36px;
                        box-shadow: 0 10px 25px rgba(46, 125, 50, 0.3);
                        transition: all 0.4s ease;
                    ">
                        <i class="fas fa-award"></i>
                    </div>
                    <h4 class="value-title" style="
                        color: #14532d;
                        font-weight: 700;
                        margin-bottom: 15px;
                        font-size: 1.5rem;
                        transition: all 0.4s ease;
                    ">Excellence</h4>
                    <p class="value-description" style="
                        color: #666;
                        line-height: 1.6;
                        margin-bottom: 0;
                        transition: all 0.4s ease;
                    ">We are dedicated to delivering superior quality in education, consultancy, and professional development.</p>
                </div>
            </div>

            <!-- Collaboration -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="value-item" style="
                    background: rgba(255,255,255,0.95);
                    border-radius: 20px;
                    padding: 40px 30px;
                    text-align: center;
                    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
                    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    height: 100%;
                    border: 2px solid transparent;
                    position: relative;
                    overflow: hidden;
                ">
                    <div class="value-icon" style="
                        width: 90px;
                        height: 90px;
                        background: linear-gradient(135deg, #2e7d32 0%, #66bb6a 100%);
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin: 0 auto 25px;
                        color: white;
                        font-size: 36px;
                        box-shadow: 0 10px 25px rgba(46, 125, 50, 0.3);
                        transition: all 0.4s ease;
                    ">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h4 class="value-title" style="
                        color: #14532d;
                        font-weight: 700;
                        margin-bottom: 15px;
                        font-size: 1.5rem;
                        transition: all 0.4s ease;
                    ">Collaboration</h4>
                    <p class="value-description" style="
                        color: #666;
                        line-height: 1.6;
                        margin-bottom: 0;
                        transition: all 0.4s ease;
                    ">We build meaningful partnerships across borders and disciplines to create shared value and impact.</p>
                </div>
            </div>

            <!-- Empowerment -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="value-item" style="
                    background: rgba(255,255,255,0.95);
                    border-radius: 20px;
                    padding: 40px 30px;
                    text-align: center;
                    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
                    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    height: 100%;
                    border: 2px solid transparent;
                    position: relative;
                    overflow: hidden;
                ">
                    <div class="value-icon" style="
                        width: 90px;
                        height: 90px;
                        background: linear-gradient(135deg, #2e7d32 0%, #66bb6a 100%);
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin: 0 auto 25px;
                        color: white;
                        font-size: 36px;
                        box-shadow: 0 10px 25px rgba(46, 125, 50, 0.3);
                        transition: all 0.4s ease;
                    ">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h4 class="value-title" style="
                        color: #14532d;
                        font-weight: 700;
                        margin-bottom: 15px;
                        font-size: 1.5rem;
                        transition: all 0.4s ease;
                    ">Empowerment</h4>
                    <p class="value-description" style="
                        color: #666;
                        line-height: 1.6;
                        margin-bottom: 0;
                        transition: all 0.4s ease;
                    ">We inspire confidence, leadership, and lifelong learning in every individual we serve.</p>
                </div>
            </div>
        </div>

        <!-- Join Us CTA -->
        <div class="text-center mt-5" style="margin-top: 4rem !important;">
            <div style="
                background: rgba(255,255,255,0.95);
                border-radius: 20px;
                padding: 50px 40px;
                box-shadow: 0 20px 50px rgba(0,0,0,0.2);
                max-width: 800px;
                margin: 0 auto;
            ">
                <h3 style="
                    color: #14532d;
                    font-weight: 700;
                    margin-bottom: 20px;
                    font-size: 2rem;
                ">Join Us</h3>
                <p style="
                    color: #666;
                    line-height: 1.7;
                    font-size: 1.1rem;
                    margin-bottom: 30px;
                ">At CIASCE, we believe that true progress begins with empowered individuals and sustainable practices. Join us in our mission to build a skilled, sustainable, and globally competitive future — one where knowledge meets purpose, and innovation grows in harmony with nature.</p>
                <a href="#" style="
                    background: linear-gradient(135deg, #2e7d32 0%, #1b5e20 100%);
                    color: white;
                    padding: 15px 40px;
                    border-radius: 50px;
                    text-decoration: none;
                    font-weight: 600;
                    font-size: 1.1rem;
                    display: inline-block;
                    transition: all 0.3s ease;
                    box-shadow: 0 10px 25px rgba(46, 125, 50, 0.3);
                ">Start Your Journey</a>
            </div>
        </div>
    </div>
</section>

<style>
    /* Floating Animation */
    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(5deg); }
    }

    /* Hover Effects */
    .value-item:hover {
        transform: translateY(-10px) !important;
        box-shadow: 0 25px 60px rgba(0,0,0,0.25) !important;
        border-color: #2e7d32 !important;
    }

    .value-item:hover .value-icon {
        transform: scale(1.1) !important;
        background: linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%) !important;
        box-shadow: 0 15px 35px rgba(46, 125, 50, 0.4) !important;
    }

    .value-item:hover .value-title {
        color: #2e7d32 !important;
    }

    /* CTA Button Hover */
    a[style*="background: linear-gradient(135deg, #2e7d32"]:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(46, 125, 50, 0.4) !important;
    }
</style>

    <!-- Call to Action Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="fade-in">
                        <h2 class="mb-4" style="color:black;">Join Us on This Journey</h2>
                        <p class="lead mb-5" style="color:black;">Become part of our community dedicated to excellence, innovation, and meaningful impact.</p>
                        <button class="cta-button">
                            <i class="fas fa-rocket me-2"></i> Get Started Today
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
      .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
            padding: 120px 0 100px;
            position: relative;
            overflow: hidden;
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        }
        
        .hero-section:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.1" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,192C672,181,768,139,864,138.7C960,139,1056,181,1152,197.3C1248,213,1344,203,1392,197.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-size: cover;
            background-position: center bottom;
        }
        
        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .hero-content .lead {
            font-size: 1.3rem;
            opacity: 0.9;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 3rem;
            padding-bottom: 1.2rem;
            text-align: center;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--primary-light));
            border-radius: 2px;
        }
        
        .section-padding {
            padding: 100px 0;
        }
        
        .vision-mission-card {
            background: white;
            border-radius: 20px;
            box-shadow: var(--card-shadow);
            padding: 40px;
            margin-bottom: 30px;
            transition: transform 0.4s, box-shadow 0.4s;
            height: 100%;
            border-top: 5px solid var(--primary-color);
            position: relative;
            overflow: hidden;
        }
        
        .vision-mission-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary-color) 0%, transparent 70%);
            opacity: 0.05;
            z-index: 0;
        }
        
        .vision-mission-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(46, 125, 50, 0.15);
        }
        
        .card-icon {
            font-size: 3.5rem;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }
        
        .card-title {
            position: relative;
            z-index: 1;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }
        
        .card-content {
            position: relative;
            z-index: 1;
        }
        
        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            overflow: hidden;
            z-index: 1;
        }
        
        .shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }
        
        .shape-1 {
            width: 100px;
            height: 100px;
            top: 10%;
            left: 5%;
            animation: float 8s ease-in-out infinite;
        }
        
        .shape-2 {
            width: 150px;
            height: 150px;
            top: 60%;
            right: 10%;
            animation: float 10s ease-in-out infinite 1s;
        }
        
        .shape-3 {
            width: 70px;
            height: 70px;
            bottom: 20%;
            left: 15%;
            animation: float 7s ease-in-out infinite 0.5s;
        }
        
        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(10deg);
            }
            100% {
                transform: translateY(0) rotate(0deg);
            }
        }
        
        .values-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        
        .values-section:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.05" d="M0,96L48,112C96,128,192,160,288,186.7C384,213,480,235,576,213.3C672,192,768,128,864,128C960,128,1056,192,1152,192C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-size: cover;
            background-position: center bottom;
        }
        
        .value-item {
            text-align: center;
            padding: 30px 20px;
            position: relative;
            z-index: 1;
        }
        
        .value-icon {
            font-size: 3rem;
            color: white;
            margin-bottom: 1.5rem;
            background: rgba(255, 255, 255, 0.2);
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
        }
        
        .value-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: white;
        }
        
        .value-description {
            opacity: 0.9;
        }
        
        .cta-section {
            background: white;
            padding: 80px 0;
            text-align: center;
        }
        
        .cta-button {
            background: var(--primary-color);
            color: white;
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(46, 125, 50, 0.3);
        }
        
        .cta-button:hover {
            background: var(--primary-dark);
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(46, 125, 50, 0.4);
        }
        
        /* Animation classes */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .zoom-in {
            opacity: 0;
            transform: scale(0.9);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .zoom-in.visible {
            opacity: 1;
            transform: scale(1);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .section-padding {
                padding: 60px 0;
            }
            
            .vision-mission-card {
                padding: 25px;
            }
        }
    </style>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Animation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Scroll animation function
            function checkScroll() {
                const elements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .zoom-in');
                
                elements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const elementVisible = 150;
                    
                    if (elementTop < window.innerHeight - elementVisible) {
                        element.classList.add('visible');
                    }
                });
            }
            
            // Initial check
            checkScroll();
            
            // Check on scroll
            window.addEventListener('scroll', checkScroll);
        });
    </script>



<!-- Publications Section -->
<section class="section-padding">
  <div class="container">
      <h2 class="section-title fade-in">Publications & Research</h2>
      <div class="row">
          <div class="col-md-4 mb-4">
              <div class="stat-box fade-in">
                  <div class="stat-number">200+</div>
                  <div class="stat-label">Research Articles</div>
              </div>
          </div>
          <div class="col-md-4 mb-4">
              <div class="stat-box fade-in">
                  <div class="stat-number">160</div>
                  <div class="stat-label">Cumulative Impact Factor</div>
              </div>
          </div>
          <div class="col-md-4 mb-4">
              <div class="stat-box fade-in">
                  <div class="stat-number">690</div>
                  <div class="stat-label">Citations</div>
              </div>
          </div>
      </div>
      <div class="row mt-4">
          <div class="col-md-6 mb-4">
              <div class="info-card slide-in-left">
                  <i class="fas fa-book"></i>
                  <h4>Books & Chapters</h4>
                  <p>Published 10 Books/Chapters with renowned international publishing groups.</p>
              </div>
          </div>
          <div class="col-md-6 mb-4">
              <div class="info-card slide-in-right">
                  <i class="fas fa-project-diagram"></i>
                  <h4>Research Projects</h4>
                  <p>Successfully completed 19 National/International research projects.</p>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- Achievements Section -->
<section class="section-padding bg-light-custom">
  <div class="container">
      <h2 class="section-title fade-in">Distinctions & Achievements</h2>
      <div class="row">
          <div class="col-lg-6 mb-5">
              <div class="fade-in">
                  <h3 class="mb-4">Key Achievements</h3>
                  <ul class="list-unstyled">
                      <li class="mb-3"><i class="fas fa-award me-2" style="color: #2e7d32;"></i> Published First Pakistani US based international patent</li>
                      <li class="mb-3"><i class="fas fa-medal me-2" style="color: #2e7d32;"></i> Received 02 Gold Medals as recognition of services</li>
                      <li class="mb-3"><i class="fas fa-trophy me-2" style="color: #2e7d32;"></i> Won 08 publication incentive and 04 performance awards</li>
                      <li class="mb-3"><i class="fas fa-users me-2" style="color: #2e7d32;"></i> Organized 50+ Conferences/Seminars/Symposia</li>
                      <li class="mb-3"><i class="fas fa-globe me-2" style="color: #2e7d32;"></i> Participated in 60+ national/international conferences</li>
                  </ul>
              </div>
          </div>
          <div class="col-lg-6">
              <div class="fade-in">
                  <h3 class="mb-4">Professional Services</h3>
                  <div class="timeline">
                      <div class="timeline-item">
                          <div class="timeline-date">2021-2024</div>
                          <div class="timeline-content">
                              <h4>Member Board of Trustees</h4>
                              <p>Pakistan Science Foundation (PSF)</p>
                          </div>
                      </div>
                      <div class="timeline-item">
                          <div class="timeline-date">2016-2020</div>
                          <div class="timeline-content">
                              <h4>President</h4>
                              <p>Pakistan Phytopathological Society (PPS)</p>
                          </div>
                      </div>
                      <div class="timeline-item">
                          <div class="timeline-date">Ongoing</div>
                          <div class="timeline-content">
                              <h4>Editor & Editorial Board Member</h4>
                              <p>Prestigious national and international journals</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="row mt-5">
          <div class="col-12">
              <div class="fade-in">
                  <h3 class="mb-4 text-center">Students Supervision</h3>
                  <div class="row justify-content-center">
                      <div class="col-md-5">
                          <div class="stat-box">
                              <div class="stat-number">27+</div>
                              <div class="stat-label">PhD Students</div>
                          </div>
                      </div>
                      <div class="col-md-5">
                          <div class="stat-box">
                              <div class="stat-number">50+</div>
                              <div class="stat-label">M.Phil Students</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- Contact Section -->
<section class="section-padding" id="contact">
  <div class="container">
      <h2 class="section-title fade-in">Contact Information</h2>
      <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="info-card">
                  <div class="row">
                      <div class="col-md-6 mb-4 mb-md-0">
                          <h4 class="mb-4">Get In Touch</h4>
                          <ul class="contact-info">
                              <li>
                                  <i class="fas fa-phone"></i>
                                  <div>
                                      <strong>Cell:</strong> +1 647 786 6307 (Canada)
                                  </div>
                              </li>
                              <li>
                                  <i class="fas fa-envelope"></i>
                                  <div>
                                      <strong>Email:</strong><br>
                                      info@ciasce.com
                                  </div>
                              </li>
                              <li>
                                  <i class="fas fa-map-marker-alt"></i>
                                  <div>
                                      <strong>Canadian Head Office:</strong><br>
                                      Toronto, Ontario,<br>
                                      Canada 🇨🇦
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <div class="col-md-6">
                          <h4 class="mb-4">Professional Profile</h4>
                          <p>Prof. Dr. Muhammad Saleem Haider is an accomplished researcher, academician and administrator with extensive experience in agricultural sciences.</p>
                          <p>With over 200 research publications, numerous awards, and leadership roles in prestigious organizations, he continues to contribute significantly to the field of agricultural sciences.</p>
                          {{-- <div class="mt-4">
                              <button class="btn btn-primary me-2" style="background: #2e7d32; border: none;">
                                  <i class="fas fa-download me-1"></i> Download CV
                              </button>
                              <button class="btn btn-outline-primary" style="color: #2e7d32; border-color: #2e7d32;">
                                  <i class="fas fa-envelope me-1"></i> Send Message
                              </button>
                          </div> --}}
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Animation Script -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
      // Scroll animation function
      function checkScroll() {
          const elements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .zoom-in');
          
          elements.forEach(element => {
              const elementTop = element.getBoundingClientRect().top;
              const elementVisible = 150;
              
              if (elementTop < window.innerHeight - elementVisible) {
                  element.classList.add('visible');
              }
          });
      }
      
      // Initial check
      checkScroll();
      
      // Check on scroll
      window.addEventListener('scroll', checkScroll);
  });
</script>
  </main>

  @include('partials.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>