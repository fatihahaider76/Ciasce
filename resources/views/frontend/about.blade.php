<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About - CIASCE</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
            --secondary-color: #2e7d32;
            /* --accent-color: #e74c3c; */
            --gold-color: #f1c40f;
            --light-bg: #f8f9fa;
            --dark-text: #2c3e50;
            --light-text: #7f8c8d;
            --card-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--dark-text);
            line-height: 1.7;
            overflow-x: hidden;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1a2530 100%);
            color: white;
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
        }
        
        .hero-section:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.05" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,192C672,181,768,139,864,138.7C960,139,1056,181,1152,197.3C1248,213,1344,203,1392,197.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-size: cover;
            background-position: center bottom;
        }
        
        .profile-img-container {
            position: relative;
            z-index: 2;
        }
        
        .profile-img {
            width: 220px;
            height: 220px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid rgba(255,255,255,0.3);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
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
            font-size: 3rem;
            margin-bottom: 1rem;
            text-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .hero-content .lead {
            font-size: 1.4rem;
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
            padding: 10px 18px;
            border-radius: 50px;
            font-size: 0.95rem;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255,255,255,0.3);
            transition: all 0.3s ease;
        }
        
        .contact-badge:hover {
            background: rgba(255,255,255,0.3);
            transform: translateY(-3px);
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
            background: linear-gradient(90deg, var(--secondary-color), var(--accent-color));
            border-radius: 2px;
        }
        
        .section-padding {
            padding: 100px 0;
        }
        
        .bg-light-custom {
            background-color: var(--light-bg);
            border-radius: 20px;
            padding: 40px;
            margin: 20px 0;
            box-shadow: var(--card-shadow);
        }
        
        .info-card {
            background: white;
            border-radius: 15px;
            box-shadow: var(--card-shadow);
            padding: 30px;
            margin-bottom: 30px;
            transition: transform 0.4s, box-shadow 0.4s;
            height: 100%;
            border-left: 5px solid var(--secondary-color);
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
            background: linear-gradient(135deg, var(--secondary-color) 0%, transparent 70%);
            opacity: 0.05;
            z-index: 0;
        }
        
        .info-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        }
        
        .info-card i {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }
        
        .info-card h4 {
            position: relative;
            z-index: 1;
            color: var(--primary-color);
        }
        
        .info-card p {
            position: relative;
            z-index: 1;
        }
        
        .stat-box {
            text-align: center;
            padding: 35px 25px;
            border-radius: 15px;
            background: white;
            box-shadow: var(--card-shadow);
            margin-bottom: 30px;
            transition: transform 0.3s;
            border-top: 5px solid var(--secondary-color);
        }
        
        .stat-box:hover {
            transform: translateY(-8px);
        }
        
        .stat-number {
            font-size: 3.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
            line-height: 1;
        }
        
        .stat-label {
            font-size: 1.1rem;
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
            background: linear-gradient(to bottom, var(--secondary-color), var(--accent-color));
            border-radius: 3px;
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 30px;
        }
        
        .timeline-item:before {
            content: '';
            position: absolute;
            left: -38px;
            top: 5px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: var(--secondary-color);
            border: 4px solid white;
            box-shadow: 0 0 0 3px var(--secondary-color);
        }
        
        .timeline-date {
            font-size: 0.95rem;
            color: var(--secondary-color);
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
            color: var(--secondary-color);
            margin-right: 15px;
            font-size: 1.3rem;
            margin-top: 3px;
            background: rgba(52, 152, 219, 0.1);
            width: 45px;
            height: 45px;
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
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(52, 152, 219, 0.4);
            }
            70% {
                box-shadow: 0 0 0 15px rgba(52, 152, 219, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(52, 152, 219, 0);
            }
        }
        
        .academic-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: var(--card-shadow);
            border-radius: 10px;
            overflow: hidden;
        }
        
        .academic-table th {
            background: var(--secondary-color);
            color: white;
            padding: 15px;
            text-align: left;
        }
        
        .academic-table td {
            padding: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .academic-table tr:nth-child(even) {
            background: #f9f9f9;
        }
        
        .academic-table tr:hover {
            background: #f1f7fd;
        }
        
        .experience-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: var(--card-shadow);
            border-radius: 10px;
            overflow: hidden;
        }
        
        .experience-table th {
            background: var(--primary-color);
            color: white;
            padding: 15px;
            text-align: left;
        }
        
        .experience-table td {
            padding: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .experience-table tr:nth-child(even) {
            background: #f9f9f9;
        }
        
        .experience-table tr:hover {
            background: #f1f7fd;
        }
        
        .research-interest-list {
            list-style: none;
            padding: 0;
        }
        
        .research-interest-list li {
            margin-bottom: 15px;
            padding-left: 25px;
            position: relative;
        }
        
        .research-interest-list li:before {
            content: '▸';
            position: absolute;
            left: 0;
            color: var(--secondary-color);
            font-weight: bold;
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
                font-size: 2.2rem;
            }
            
            .section-padding {
                padding: 60px 0;
            }
            
            .bg-light-custom {
                padding: 14px 3px;
                margin: 10px 0;
                border-radius: 12px;
            }

            /* Full-width content on phones — content spans edge to edge */
            .container,
            .container-fluid {
                padding-left: 6px;
                padding-right: 6px;
            }

            /* Tables: scroll sideways so every column stays fully readable */
            .academic-table,
            .experience-table {
                display: block;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                white-space: nowrap;
                font-size: 0.82rem;
                border-radius: 10px;
            }

            .academic-table th,
            .academic-table td,
            .experience-table th,
            .experience-table td {
                padding: 10px 12px;
            }

            .contact-badges {
                justify-content: center;
            }
        }
        header div nav ul li a{text-decoration:none}
     </style>
     <style>
        
        
        .fade-in {
            animation: fadeIn 1s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .mb-4 {
            margin-bottom: 1.5rem;
        }
        
        h4 {
            font-size: 1.5rem;
            color: #2c3e50;
            font-weight: 600;
        }
        
        .info-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-left: 5px solid #2e7d32;
        }
        
        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }
        
        .info-card p {
            margin: 0;
            line-height: 1.6;
        }
        
        strong {
            color: #2c3e50;
            font-weight: 700;
        }
        
        .highlight-author {
            font-weight: 700;
            color: #2e7d32;
            background-color: rgba(231, 76, 60, 0.1);
            padding: 0 2px;
            border-radius: 3px;
        }
        
        .impact-factor {
            display: inline-block;
            background: #2e7d32;
            color: white;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.85rem;
            margin-top: 8px;
            margin-right: 8px;
            font-weight: 500;
        }
        
        .section {
            background: white;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }
        
        /* .section-title {
            font-size: 1.8rem;
            color: #2c3e50;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #3498db;
            display: inline-block;
        } */
        
        .publication-list {
            counter-reset: publication-counter;
        }
        
        .publication-item {
            background: white;
            border-radius: 10px;
            padding: 25px 25px 25px 40px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            border-left: 5px solid #2e7d32;
        }
        
        .publication-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }
        
        .publication-item::before {
            counter-increment: publication-counter;
            content: counter(publication-counter);
            position: absolute;
            left: -15px;
            top: 20px;
            background: #2e7d32;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
            font-size: 0.9rem;
        }
        
        .authors {
            font-weight: 600;
            margin-bottom: 10px;
            color: #2c3e50;
            line-height: 1.5;
        }
        
        .title {
            font-style: italic;
            margin-bottom: 10px;
            color: #2c3e50;
            line-height: 1.4;
        }
        
        .journal {
            font-weight: 500;
            margin-bottom: 8px;
            line-height: 1.4;
        }
        
        .journal-name {
            font-weight: 600;
            color: #2980b9;
        }
        
        .details {
            color: #7f8c8d;
            font-size: 0.95rem;
            margin-top: 8px;
        }
        
        .footer {
            text-align: center;
            padding: 30px;
            margin-top: 50px;
            color: #7f8c8d;
            border-top: 1px solid #ecf0f1;
            font-size: 0.95rem;
        }
        
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.2rem;
            }
            
            .header p {
                font-size: 1.1rem;
            }
            
            .publication-item {
                padding: 20px 20px 20px 35px;
            }
            
            .publication-item::before {
                left: -12px;
                width: 25px;
                height: 25px;
                font-size: 0.8rem;
            }
        }
        
        @media (max-width: 480px) {
            body {
                padding: 10px;
            }
            
            .header {
                padding: 30px 0;
            }
            
            .header h1 {
                font-size: 1.8rem;
            }
            
            .section {
                padding: 20px;
            }
        }
     </style>
</head>
<body class="index-page">
    @include('partials.navbar')
      <main class="main m-reset-top" style="position:relative; top:100px;">
    

    <!-- Academic Background Section -->
    <section class="section-padding">
        <div class="container">
            <h2 class="section-title fade-in">Academic Background</h2>
            <div class="fade-in">
                <table class="academic-table">
                    <thead>
                        <tr>
                            <th>Degree</th>
                            <th>Discipline</th>
                            <th>University/Country</th>
                            <th>Year</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Post Doctorate</td>
                            <td>Agriculture (Resistance through RNAi)</td>
                            <td>University of Toronto, Canada</td>
                            <td>2008</td>
                        </tr>
                        <tr>
                            <td>PhD</td>
                            <td>Agriculture (Molecular Plant Virology)</td>
                            <td>University of London, Imperial College, UK</td>
                            <td>1997</td>
                        </tr>
                        <tr>
                            <td>DIC</td>
                            <td>Agriculture (Plant Virology)</td>
                            <td>University of London, Imperial College, UK</td>
                            <td>2003</td>
                        </tr>
                        <tr>
                            <td>M.Sc. (Hons.) Agri.</td>
                            <td>Agriculture (Plant Pathology)</td>
                            <td>University of Agriculture, Faisalabad</td>
                            <td>1991</td>
                        </tr>
                        <tr>
                            <td>B.Sc. (Hons.) Agri.</td>
                            <td>Agriculture (Plant Pathology)</td>
                            <td>University of Agriculture, Faisalabad</td>
                            <td>1989</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Academic and Research Experience Section -->
    <section class="section-padding bg-light-custom">
        <div class="container">
            <h2 class="section-title fade-in">Academic and Research Experience</h2>
            <div class="fade-in">
                <table class="experience-table">
                    <thead>
                        <tr>
                            <th>Position</th>
                            <th>Institution</th>
                            <th>Period</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dean, Faculty of Agricultural Sciences</td>
                            <td>University of the Punjab, Lahore</td>
                            <td>06.05.2021 - To date</td>
                        </tr>
                        <tr>
                            <td>Incharge, Faculty of Agricultural Sciences</td>
                            <td>University of the Punjab, Lahore</td>
                            <td>10.03.2021 - To date</td>
                        </tr>
                        <tr>
                            <td>Director</td>
                            <td>Institute of Agricultural Sciences, University of the Punjab, Lahore</td>
                            <td>14.03.2011 - 09.03.2021</td>
                        </tr>
                        <tr>
                            <td>Professor</td>
                            <td>Institute of Agricultural Sciences, University of the Punjab, Lahore</td>
                            <td>07.03.2010 - To date</td>
                        </tr>
                        <tr>
                            <td>Assistant Professor</td>
                            <td>School of Biological Sciences, University of the Punjab, Lahore</td>
                            <td>26.04.2003 - 06.03.2010</td>
                        </tr>
                        <tr>
                            <td>Assistant Research Officer</td>
                            <td>Plant Virology Section, AARI, Faisalabad</td>
                            <td>28.07.2002 –25.04.2003</td>
                        </tr>
                        <tr>
                            <td>Agriculture Officer</td>
                            <td>Pest Warning and Quality Control of Pesticides, Punjab, Lodhran</td>
                            <td>19.09.1998 –27.07.2002</td>
                        </tr>
                        <tr>
                            <td>Senior Scientific Officer</td>
                            <td>Central Cotton Research Institute, Multan</td>
                            <td>01.10.1997 – 18.09.1998</td>
                        </tr>
                        <tr>
                            <td>Research Officer</td>
                            <td>Centre for Advanced Molecular Biology, 
University of the Punjab, Lahore</td>
                            <td>21.01.1997 – 20.7.1997</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Research Interests Section -->
    <section class="section-padding">
        <div class="container">
            <h2 class="section-title fade-in">Research Interests</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="fade-in">
                        <p>My research interest focuses on the control of plant diseases caused by whitefly-transmitted geminivirus pathogens (begomoviruses), based on an understanding of the mechanisms underlying the successful interactions between the components of these virus-vector-host complexes.</p>
                        
                        <h4 class="mt-4 mb-3">Current studies involve:</h4>
                        <ul class="research-interest-list">
                            <li>Begomovirus diversity, with respect to viral genotype and phenotype</li>
                            <li>The <em>Bemisia tabaci</em> species complex: variability within populations using molecular markers</li>
                            <li>The molecular basis for the specificity of whitefly-mediated transmission of begomoviruses</li>
                            <li>Development of diagnostic tests for unidentified or new viruses and virus-like diseases</li>
                            <li>Use of fungus <em>Aspergillus sp.</em> for the cloning, expression and purification of amylases enzymes</li>
                            <li>Exploiting viral coat protein gene for vaccine production against animal and human viruses</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Publications Section -->
    <section class="section-padding bg-light-custom">
        <div class="container">
            <h2 class="section-title fade-in">Research Publications</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="stat-box fade-in">
                        <div class="stat-number">219</div>
                        <div class="stat-label">Research Papers</div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="stat-box fade-in">
                        <div class="stat-number">10</div>
                        <div class="stat-label">Books & Chapters</div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="stat-box fade-in">
                        <div class="stat-number">19+</div>
                        <div class="stat-label">Research Projects</div>
                    </div>
                </div>
            </div>
            
            {{-- <div class="fade-in">
                <h4 class="mb-4">Recent Publications</h4>
                <div class="info-card">
                    <p><strong>Asif, M.; Haider, M.S.; Akhter, A.</strong> Impact of Biochar on Fusarium Wilt of Cotton and the Dynamics of Soil Microbial Community. Sustainability 2023, 15, 12936. <strong>(Impact factor: 3.9)</strong></p>
                </div>
                <div class="info-card">
                    <p><strong>Bahar, T., Rauf, M., Muqeet, S., Haider M.S.</strong> Farmers' Perception and Knowledge in Begomovirus Epidemiology and Control in Pakistan. Int. Journal of Phytopathology 2023, 12(1):37-47. <strong>(Impact factor: 3.4)</strong></p>
                </div>
                <div class="info-card">
                    <p><strong>Ahmad C.A, Haider MS, AkhterA.</strong> Physiological and biochemical characterization of biochar-induced resistance against bacterial wilt of eggplants. R. Soc. OpenSci. 2023, 10:230442. <strong>(Impact factor: 3.653)</strong></p>
                </div>
            </div> --}}
            {{-- <div class="fade-in">
            <div class="section">
                <h4 class="mb-4">Recent Publications</h4>
                <div class="info-card">
                    <p><strong>Asif, M.; Haider, M.S.; Akhter, A.</strong> Impact of Biochar on Fusarium Wilt of Cotton and the Dynamics of Soil Microbial Community. Sustainability 2023, 15, 12936. <strong>(Impact factor: 3.9)</strong></p>
                </div>
                <div class="info-card">
                    <p><strong>Bahar, T., Rauf, M., Muqeet, S., Haider M.S.</strong> Farmers' Perception and Knowledge in Begomovirus Epidemiology and Control in Pakistan. Int. Journal of Phytopathology 2023, 12(1):37-47. <strong>(Impact factor: 3.4)</strong></p>
                </div>
                <div class="info-card">
                    <p><strong>Ahmad C.A, Haider MS, AkhterA.</strong> Physiological and biochemical characterization of biochar-induced resistance against bacterial wilt of eggplants. R. Soc. OpenSci. 2023, 10:230442. <strong>(Impact factor: 3.653)</strong></p>
                </div>
            </div>
        </div> --}}
        

         <section class="section-padding bg-light-custom">
        <div class="container-fluid">
            <h2 class="section-title fade-in">Academic and Research Experience</h2>
            <div class="fade-in">
                <table class="experience-table">
                    <thead>
                        <tr>
                            <th style="text-align: center">Project Title</th>
                            <th style="text-align: center">Duration</th>
                            <th  style="width:400px; text-align: center;">Total amount of grant</th>
                            <th style="text-align: center">Funding Agency</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center">
                        <tr>
                            <td style="text-align: start">Effect of exogenous application of leaf extract of bio stimulant Moringa oleifera and plant growth promoting bacteria on the growth and productivity of cotton.</td>
                            <td>2022-23</td>
                            <td>Rs. 3.0 million</td>
                            <td>University of the Punjab</td>
                        </tr>
                        <tr>
                            <td style="text-align: start">Effect of indigenously produced bio char on the induction of Cotton defense response against wilt inducing pathogens</td>
                            <td>2021-22</td>
                            <td>Rs. 3 million</td>
                            <td>University of the Punjab</td>
                        </tr>
                         <tr>
                            <td style="text-align: start">Occurrence Diversity of Wheat Associated Microbiome and their Impact on Production.</td>
                            <td>2020-21</td>
                            <td>Rs.0.250</td>
                            <td>University of the Punjab</td>
                        </tr>
                         <tr>
                            <td style="text-align: start">Evaluation of biochar produced from indigenous organic waste in priming plant defense and growth stimulation.</td>
                            <td>2019</td>
                            <td>Rs.0.250</td>
                            <td>University of the Punjab.</td>
                        </tr>
                         <tr>
                            <td style="text-align: start">Awareness of climate smart agriculture practices among the agri communities for sustainable environment development (under Social Integration Outreach Program (SIOP) of HEC).</td>
                            <td>2018</td>
                            <td>Rs.1.0 million</td>
                            <td>Jointly funded by HEC and PU</td>
                        </tr>
                        
                         <tr>
                            <td style="text-align: start">Functional characterization of Mastrevirus promoter – An alternative of CaMV 35S Promoter.</td>
                            <td>1 year (2017-2018)</td>
                            <td></td>
                            <td>Functional characterization of Mastrevirus promoter – An alternative of CaMV 35S Promoter</td>
                        </tr>
                         <tr>
                            <td style="text-align: start">Development of bio-pesticide for the control of soil-borne diseases of tomatoes and chilies caused by Pythium and Phytophthora spp.</td>
                            <td>4 years (01.02.2015 to 31.01.2019)</td>
                            <td>29.9157 Million</td>
                            <td>Punjab Agriculture Research Board (PARB)</td>
                        </tr>
                         <tr>
                            <td style="text-align: start">Biochemical remodulation mechanisms underlying effects of chickpea chlorotic dwarf virus on tomato plant that mediate transmission by leafhopper vectors.</td>
                            <td>1 year (2015-2016)</td>
                            <td></td>
                            <td>Biochemical remodulation mechanisms underlying effects of chickpea chlorotic dwarf virus on tomato plant that mediate transmission by leafhopper vectors</td>
                        </tr>
                         <tr>
                            <td style="text-align: start">Investigation of in planta accumulation and localization of cotton leaf curl Kokhran virus (CLCuKoV) at tissue and cellular level.</td>
                            <td>1 year (2014-2015)
Completed</td>
                            <td>Rs.0.250 Million</td>
                            <td>University of the Punjab, Lahore
(PI)</td>
                        </tr>
                         <tr>
                            <td style="text-align: start">The studies to control Jassid (Amrsca spp.) on the Brinjal (Solanum melongena L.) through bio-pesticides and habitat management in Lahore Division.</td>
                            <td>9 months
Completed</td>
                            <td>Rs.0.50 million</td>
                            <td>Higher Education Commission, Islamabad (As Co-PI)</td>
                        </tr>
                         <tr>
                            <td style="text-align: start">Molecular and biological characterization of begomoviruses and/or associated DNA-satellites from the vicinity of University of the Punjab, Lahore, Pakistan.</td>
                            <td>1 year (2013-2014)</td>
                            <td></td>
                            <td>Molecular and biological characterization of begomoviruses and/or associated DNA-satellites from the vicinity of University of the Punjab, Lahore, Pakistan</td>
                        </tr>
                         <tr>
                            <td style="text-align: start">Diversity of endosymbiotic bacteria associated with Bemisia tabaci from Pakistan (awarded vide Notification No. D/5227/Est.I dated 13.02.2013).</td>
                            <td>1 year (2012-2013)</td>
                            <td></td>
                            <td>Diversity of endosymbiotic bacteria associated with Bemisia tabaci from Pakistan (awarded vide Notification No. D/5227/Est.I dated 13.02.2013)</td>
                        </tr>
                         <tr>
                            <td style="text-align: start">Enhancing Cotton Germplasm, Improving Resistance to Cotton Leaf Curl Virus (CLCV) Disease and Supporting Cotton Best Management Practices (BMPs) for Small Farmers (ID-1198) – Virology Component.</td>
                            <td>6 years (2011-2017) Completed</td>
                            <td>US $</td>
                            <td>Enhancing Cotton Germplasm, Improving Resistance to Cotton Leaf Curl Virus (CLCV) Disease and Supporting Cotton Best Management Practices (BMPs) for Small Farmers (ID-1198) – Virology Component</td>
                        </tr>
                         <tr>
                            <td style="text-align: start">Screening of diverse germplasm for the genetic studies of drought tolerance in rice (Oryza sativa L).</td>
                            <td>9 months</td>
                            <td>Rs. 3.0 million</td>
                            <td>Screening of diverse germplasm for the genetic studies of drought tolerance in rice (Oryza sativa L)</td>
                        </tr>
                         <tr>
                            <td style="text-align: start">Impact assessment of water conservation and productivity enhancement through high efficiency irrigation system among vegetable growers of distt. Sheikhupura.</td>
                            <td>9 months</td>
                            <td></td>
                            <td>Impact assessment of water conservation and productivity enhancement through high efficiency irrigation system among vegetable growers of distt. Sheikhupura</td>
                        </tr>
                         <tr>
                            <td style="text-align: start">Genetic diversity of Entomopathogenic Fungi Metarhizium and Beauveria  spp. isolated from the Soils of different Ecosystems (awarded vide Notification No. D/473/Est.I dated 25.01.2012).</td>
                            <td>1 year (2011-2012) Completed</td>
                            <td>Rs 0.25 Million</td>
                            <td>University of the Punjab, Lahore (As PI)</td>
                        </tr>
                         <tr>
                            <td style="text-align: start">Molecular analyses of Potato virus Y infecting potato crop in different regions of Punjab.</td>
                            <td>1 years (2010-2011) Completed</td>
                            <td>Rs 0.25 Million</td>
                            <td>University of the Punjab, Lahore (As PI)</td>
                        </tr>
                         <tr>
                            <td style="text-align: start">Novel approach to generate wide spectrum virus resistance to all cotton infecting begomoviruses infecting cotton and other cultivated crops.</td>
                            <td>3 years completed (2006-2009)</td>
                            <td>Rs. 3.0 million</td>
                            <td>Novel approach to generate wide spectrum virus resistance to all cotton infecting begomoviruses infecting cotton and other cultivated crops.</td>
                        </tr>
                         <tr>
                            <td style="text-align: start">Development of Biosorption-Biodegradation System for the Removal of Dyes from Textile and Printing Industry Effluents by Saprophytic Fungi, White Rot Basidiomycetes and Plant Residues.</td>
                            <td>3 years completed (2006-2009)</td>
                            <td>Rs. 4.3 Million</td>
                            <td>Higher Education Commission, Islamabad, Pakistan (As Co-PI)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
   
   
    </section>

        <div class="section">
            <h2 class="section-title">Books, Articles, Chapters and Annual Reports</h2>
            
            <div class="publication-list">
                <div class="publication-item">
                    <div class="authors">1. Abbas, M. T., Shafiq, M., Arshad, H., Haroon, R., Maqsood, H., & <span class="highlight-author">Haider, M. S.</span> (2022). Viral Diseases of Maize. In <span class="journal-name">Cereal Diseases: Nanobiotechnological Approaches for Diagnosis and Management</span> (pp. 83-96). Springer, Singapore.</div>
                </div>
                
                <div class="publication-item">
                    <div class="authors">2. Abbas, M. T., Shafiq, M., Khaliq, R., Arshad, H., Haroon, R., & <span class="highlight-author">Haider, M. S.</span> (2022). Viral Diseases of Rice. In <span class="journal-name">Cereal Diseases: Nanobiotechnological Approaches for Diagnosis and Management</span> (pp. 31-51). Springer, Singapore.</div>
                </div>
                
                <div class="publication-item">
                    <div class="authors">3. Anwar, W., Shahid, A.A. and <span class="highlight-author">Haider, M.S.</span> (2017). Entomopathogenic fungi: Introduction, history, classification, infection mechanism, enzymes and toxins. Chapter in book: <span class="journal-name">Biopesticides and Bioagents Novel Tools for Pest Management</span>, 1st Edn, pp.51. Apple Academic Press, USA.</div>
                </div>
                
                <div class="publication-item">
                    <div class="authors">4. Shahid, A.A., Yasin, S., Inam-ul-Haq, M., Ali, M. and <span class="highlight-author">Haider, M.S.</span> (2013). Use of rhizobacteria for the management of soft rot disease of potato. <span class="journal-name">ATINER CONFERENCE PAPER SERIES</span> No: AGR2013-0770 5.</div>
                </div>
                
                <div class="publication-item">
                    <div class="authors">5. Saeed F., <span class="highlight-author">Haider M. S.</span> and Shafiq M. (2012) Biotypes of Whitefly (Bemisia tabaci) in Pakistan. <span class="journal-name">LAP Lambert Academic Publishing</span>, ISBN 978-3-8484-1231-0, paperback, 56 Pages</div>
                </div>
                
                <div class="publication-item">
                    <div class="authors">6. Qureshi F., <span class="highlight-author">Haider M. S.</span> and Shafiq M. (2012) Molecular Characterization of Begomoviruses isolated from a Weed. <span class="journal-name">LAP Lambert Academic Publishing</span> ISBN 978-3-8484-9934-2, paperback, 68 Pages</div>
                </div>
                <div class="publication-item">
    <div class="authors">7. Javed S, Ahmad R, and <span class="highlight-author">Haider MS</span> (2012) Phytochemical Investigation of Citrus limetta Peel Oil. 978-3-8484-9789-8, 89 pages VMD Verlag Dr Muller and the German National Library and Online at www.amazon.com</div>
</div>

<div class="publication-item">
    <div class="authors">8. Ashfaq, M., Khan A. S. and <span class="highlight-author">Haider M. S.</span> (2012) Genetics of rice under normal and water stress conditions. <span class="journal-name">LAP Lambert Academic Publishing</span>, ISBN 978-3-8473-2955-8, paperback, 184 Pages</div>
</div>

<div class="publication-item">
    <div class="authors">9. <span class="highlight-author">Haider, MS</span> (1999) Characterization of whitefly-transmitted geminiviruses from Pakistan In “Research on Plant Viral Diseases in Pakistan” (1999) ed. Khalid, S., pp 197-199. Agha Jee Printers, Islamabad, Pakistan</div>
</div>

<div class="publication-item">
    <div class="authors">10. Markham, P. G., Bedford, I. D., Pinner, M., Liu, S. and <span class="highlight-author">Haider, M. S.</span> (1993) Variation within the whitefly-transmitted geminiviruses and vector Bemisia tabaci (Gennadius). <span class="journal-name">Annual Report 1993, AFRC Institute of Plant Science Research, John Innes Centre, Norwich, UK.</span> p38.</div>
</div>










<div class="publication-item">
    <div class="authors">1. Asif, M.; <span class="highlight-author">Haider, M.S.</span>; Akhter, A. Impact of Biochar on Fusarium Wilt of Cotton and the Dynamics of Soil Microbial Community. <span class="journal-name">Sustainability</span> 2023, 15, 12936. https://doi.org/10.3390/su151712936 <span class="impact-factor">(Impact factor: 3.9)</span></div>
</div>

<div class="publication-item">
    <div class="authors">2. Bahar, T., Rauf, M., Muqeet, S., <span class="highlight-author">Haider M.S.</span> (2023) Farmers' Perception and Knowledge in Begomovirus Epidemiology and Control in Pakistan. <span class="journal-name">Int. Journal of Phytopathology</span> 12(1):37-47. <span class="impact-factor">(Impact factor 3.4)</span></div>
</div>

<div class="publication-item">
    <div class="authors">3. Mushtaq, R., Khan, M., Manzoor, M., Shafiq, M., Chattha., M.B., Manzoor., M.T., Ali, M., Mazhar., H.S.U.D., Hashmi, M., Anees, M., Tariq., M.R. and <span class="highlight-author">Haider, M.S.</span> (2023) Genome-Wide Analysis of the Ethylene-Insensitive3-Like Gene Family in Cucumber (Cucumis sativus) <span class="journal-name">Journal of Applied Research in Plant Sciences</span> 4(2):702-710 <span class="category">(HEC recognized "Y" category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">4. Ahmad C.A, <span class="highlight-author">Haider MS</span>, AkhterA. 2023 Physiological and biochemical characterization of biochar-induced resistance against bacterial wilt of eggplants. <span class="journal-name">R. Soc. OpenSci.</span> 10:230442. https://doi.org/10.1098/rsos.230442 <span class="impact-factor">(Impact factor: 3.653)</span></div>
</div>

<div class="publication-item">
    <div class="authors">5. Malik, M. A. M., <span class="highlight-author">Haider, M. S.</span>, Zhai, Y., Khan, M. A. U., & Pappu, H. R. (2023). Towards developing resistance to chickpea chlorotic dwarf virus through CRISPR/Cas9-mediated gene editing using multiplexed gRNAs. <span class="journal-name">Journal of Plant Diseases and Protection</span>, 130(1), 23-33. <span class="impact-factor">(Impact Factor 2.00)</span></div>
</div>

<div class="publication-item">
    <div class="authors">6. Shakeel, M., Shafiq, M., Abbas, S. A. A. A., Haseeb, M., Ali, N., Batool, A., ... & <span class="highlight-author">Haider, M. S.</span> (2023). GENOME-WIDE IDENTIFICATION AND CHARACTERIZATION OF PLANT-SPECIFIC DOF TRANSCRIPTION FACTOR GENE FAMILY IN CASHEW (ANACARDIUM OCCIDENTALE). <span class="journal-name">Agricultural Sciences Journal</span>, 5(1), 83-107. <span class="category">(HEC recognized "Y" category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">7. Ishfaqe, Q., Shafiq, M., Ali, M. R., & <span class="highlight-author">Haider, M. S.</span> (2023). Is the best resistance strategy against begomoviruses yet to come? A Comprehensive Review. <span class="journal-name">Summa Phytopathologica</span>, 48, 151-157. <span class="impact-factor">(Impact factor: 0.40)</span></div>
</div>

<div class="publication-item">
    <div class="authors">8. Malik, M. A. M., <span class="highlight-author">Haider, M. S.</span>, Zhai, Y., Khan, M. A. U., & Pappu, H. R. (2023). Towards developing resistance to chickpea chlorotic dwarf virus through CRISPR/Cas9-mediated gene editing using multiplexed gRNAs. <span class="journal-name">Journal of Plant Diseases and Protection</span>, 130(1), 23-33. <span class="impact-factor">(Impact Factor 2.00)</span></div>
</div>

<div class="publication-item">
    <div class="authors">9. Bahar, T., Qurashi, F., <span class="highlight-author">Haider, M. S.</span>, Rahat, M. A., Akbar, F., Israr, M., ... & Elansary, H. O. (2023). Unveiling Lathyrus aphaca L. as a Newly Identified Host for Begomovirus Infection: A Comprehensive Study. <span class="journal-name">Genes</span>, 14(6), 1221. <span class="impact-factor">(Impact Factor 4.141)</span></div>
</div>

<div class="publication-item">
    <div class="authors">10. Iqbal, M. J., Zia-Ur-Rehman, M., Ilyas, M., Hameed, U., Herrmann, H. W., Chingandu, N., Manzoor, M.T., <span class="highlight-author">Haider., M.S.</span>, & Brown, J. K. Sentinel plot surveillance of cotton leaf curl disease in Pakistan-a case study at the cultivated cotton-wild host plant interface. <span class="journal-name">Virus research</span>, 199144. <span class="impact-factor">(Impact Factor 6.286)</span></div>
</div>

<div class="publication-item">
    <div class="authors">11. Mushtaq S, Shafiq M, Tariq MR, Sami A, Nawaz-ul-Rehman MS, Bhatti MHT, <span class="highlight-author">Haider MS</span>, Sadiq S, Abbas MT, Hussain M and Shahid MA (2023) Interaction between bacterial endophytes and host plants. <span class="journal-name">Front. Plant Sci.</span> 13:1092105. doi: 10.3389/fpls.2022.1092105 <span class="impact-factor">(Impact Factor 6.627)</span></div>
</div>

<div class="publication-item">
    <div class="authors">12. Khan, T., Khan, H. A. A., <span class="highlight-author">Haider, M. S.</span>, Anwar, W., & Akhter, A. (2023). Selection for resistance to pirimiphos-methyl, permethrin and spinosad in a field strain of Sitophilus oryzae: resistance risk assessment, cross-resistance potential and synergism of insecticides. <span class="journal-name">Environmental Science and Pollution Research</span>, 30: 29921–29928 <span class="impact-factor">(Impact factor: 5.19)</span></div>
</div>

<div class="publication-item">
    <div class="authors">13. Almas, M.H., Shah, R.A., & <span class="highlight-author">Haider, M. S.</span> (2023). Effect of Substrate, Growth Condition and Nutrient Application Methods in Morphological and Commercial Attributes of Hybrid Rose (Rosa indica L.) Cv. Kardinal. <span class="journal-name">Journal of Applied Research in Plant Sciences</span>, 4(01), 356-362. <span class="category">(Y- Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">14. Islam, M.A.U., Nupur, J.A., Khalid, M.H.B., Din, A.M.U., Shafiq, M., Alshegaihi, R.M., Ali, Q., Ali, Q., Kamran, Z., Manzoor, M. and <span class="highlight-author">Haider, M.S.</span>, 2022. Genome-Wide Identification and In Silico Analysis of ZF-HD Transcription Factor Genes in Zea mays L. <span class="journal-name">Genes</span>, 13(11), p.2112. <span class="impact-factor">(Impact Factor 4.141)</span></div>
</div>

<div class="publication-item">
    <div class="authors">15. Mushtaq, S., Shafiq, M., Abbas, M.T., Sami, A., Bhatti, M.H.T., Nawaz-ul-Rehman, M.S., Hussain, M., <span class="highlight-author">Haider, M.S.</span>, Sadiq, S., Tariq, M.R. and Shahid, M.A., (2023). Interaction between bacterial endophytes and different host plants. <span class="journal-name">Frontiers in Plant Science</span>, 13, p.5576. <span class="impact-factor">(Impact Factor 6.627)</span></div>
</div>

<div class="publication-item">
    <div class="authors">16. Farooq, N., Ather, L., Shafiq, M., Anjum, T., Hussain, M., Muhammad Haseeb, Numan Ali, Sehrish Mushtaq, <span class="highlight-author">Haider, M.S.</span>, and Shahid, M.A. (2022) Magnetofection approach for the transformation of okra using green iron nanoparticles <span class="journal-name">Scientific Reports</span>. DOI: 10.1038/s41598-022-20569-x <span class="impact-factor">(Impact Factor 3.998)</span></div>
</div>

<div class="publication-item">
    <div class="authors">17. Mushtaq, S., Shafiq, M., <span class="highlight-author">Haider, M. S.</span>, Nayik, G. A., Salmen, S. H., El Enshasy, H. A., ... & Ansari, M. J. (2022). Morphological and physiological response of sour orange (Citrus aurantium L.) seedlings to the inoculation of taxonomically characterized bacterial endophytes. <span class="journal-name">Saudi Journal of Biological Sciences</span>, 29(5), 3232-3243. <span class="impact-factor">(Impact Factor 4.05)</span></div>
</div>

<div class="publication-item">
    <div class="authors">18. Farooq, N., Ather, L., Shafiq, M., Nawaz-ul-Rehman, M. S., Haseeb, M., Anjum, T., <span class="highlight-author">Haider, M. S.</span>... & Shahid, M. A. (2022). Magnetofection approach for the transformation of okra using green iron nanoparticles. <span class="journal-name">Scientific Reports</span>, 12(1), 1-11. <span class="impact-factor">(Impact Factor 3.998)</span></div>
</div>

<div class="publication-item">
    <div class="authors">19. Hashmi, M. M., Kamran, Z., Manzoor, M., Shafiq, M., Qamar, M., Nisa, M. U., .. <span class="highlight-author">Haider, M. S.</span> ... & Shahid, M. A. (2022). Genome-wide Identification and Characterization of Plant-specific Transcription Factor YABBY Gene Family in Cucumber (Cucumis sativus) and its Comparison with Arabidopsis to Reveal its Role in Abiotic Stress Responses. <span class="journal-name">Journal of Applied Research in Plant Sciences</span>, 3(02), 325-341. <span class="category">(Y- Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">20. Khan, T., <span class="highlight-author">Haider, M. S.</span>, & Khan, H. A. A. (2022). Resistance to grain protectants and synergism in Pakistani strains of Sitophilus oryzae (Coleoptera: Curculionidae). <span class="journal-name">Scientific Reports</span>, 12(1), 1-8. <span class="impact-factor">(Impact Factor 3.998)</span></div>
</div>

<div class="publication-item">
    <div class="authors">21. Mushtaq, S., Shafiq, M., <span class="highlight-author">Haider, M. S.</span>, Nayik, G. A., Salmen, S. H., El Enshasy, H. A., Kenawy, A. A., Goksen, G., Vázquez-Núñez, E., and Ansari, M. J. (2022). Morphological and physiological response of sour orange (Citrus aurantium L.) seedlings to the inoculation of taxonomically characterized bacterial endophytes. <span class="journal-name">Saudi Journal of Biological Sciences</span>, https://doi.org/10.1016/j.sjbs.2022.01.051 <span class="impact-factor">(Impact factor 4.4)</span></div>
</div>

<div class="publication-item">
    <div class="authors">22. Zahra., M.S., <span class="highlight-author">Haider, M.S.</span>, Akhter, A., Zill-e-Huma Bakhtawar Fayyaz, Bahar., T., and Anwar., W. (2022). Characterization and utilization of cow manure biochar as soil amendment for the management of Northern corn leaf blight. <span class="journal-name">Journal of Soil Science and Plant Nutrition</span>. (In press)</div>
</div>

<div class="publication-item">
    <div class="authors">23. Sarwar, M., Anjum, S., Alam, M.W., Ayyub C.M., <span class="highlight-author">Haider M.S.</span>, Ashraf M. I and Mahboob W. (2022). Triacontanol regulates morphological traits and enzymatic activities of salinity affected hot pepper plants. <span class="journal-name">Sci Rep</span> 12, 3736 <span class="impact-factor">(Impact Factor 3.998)</span></div>
</div>

<div class="publication-item">
    <div class="authors">24. Ashfaq, M., Rasheed, A., Ali, M., Sajjad, M., Rasool, B., Shaheen, S., ... <span class="highlight-author">Haider, M. S.</span>, & Mubashar, U. (2022). Identifying and characterizing the main causal pathogen responsible for rice grain discoloration in Pakistan. <span class="journal-name">Pakistan Journal of Agricultural Sciences</span>, 59(2). <span class="impact-factor">(Impact factor: 0.856)</span></div>
</div>

<div class="publication-item">
    <div class="authors">25. Nadeem, F., Mahmood, R., Sabir, M., <span class="highlight-author">Haider, M. S.</span>, Wang, R., Zhong, Y., ... & Li, X. (2022). Foxtail millet [Setaria italica (L.) Beauv.] over-accumulates ammonium under low nitrogen supply. <span class="journal-name">Plant Physiology and Biochemistry</span>, 185, 35-44. <span class="impact-factor">(Impact Factor 6.5)</span></div>
</div>

<div class="publication-item">
    <div class="authors">26. Khalid, S., Zia-ur-Rehman, M., Hameed, U., Shaheen, S., Shahid, M. N., Jabeen, K., ... & <span class="highlight-author">Haider, M. S.</span> (2022). Whiteflies are Not Responsible for Transmission of Chickpea Chlorotic Dwarf Virus and Mastrebegomo Chimeric Virus. <span class="journal-name">Pakistan Journal of Zoology</span>, 54(3), 1397. <span class="impact-factor">(Impact Factor 0.7)</span></div>
</div>

<div class="publication-item">
    <div class="authors">27. Anwar, W., Javed, S., Ahmad, F., Akhter, A., Khan, H. A. A., <span class="highlight-author">Haider, M. S.</span>, & Kalsoom, R. (2022). Boeremia exigua leaf spot: A new emerging threat to Gossypium hirsutum L. in Pakistan. <span class="journal-name">Plant Protection</span>, 6(3), 167-174. <span class="category">(Y-category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">28. Bahar, T., Qureshi, A.M., Qurashi1, F., Abid, M., Zahra, M.B. and <span class="highlight-author">Haider, M.S.</span> (2021). Changes in Phyto-Chemical Status upon Viral Infections in Plant: A Critical Review. <span class="journal-name">Phyton-International Journal of Experimental Botany</span>, 90(1): 75-86. <span class="impact-factor">(Impact Factor: 1.039)</span></div>
</div>

<div class="publication-item">
    <div class="authors">29. Zahra, M.B., Fayyaz, B., Aftab, Z.H. (2021). Mitigation of degraded soils by using biochar and compost: a systematic review. <span class="journal-name">Journal of Soil Science and Plant Nutrition</span> <span class="impact-factor">(Impact Factor: 3.771)</span></div>
</div>

<div class="publication-item">
    <div class="authors">30. Sarwar, M., Anjum, S., Ali, Q., Alam, M. W., <span class="highlight-author">Haider, M. S.</span>, & Mehboob, W. (2021). Triacontanol modulates salt stress tolerance in cucumber by altering the physiological and biochemical status of plant cells. <span class="journal-name">Scientific reports</span>, 11(1), 24504. <span class="impact-factor">(Impact Factor 3.998)</span></div>
</div>

{{-- <div class="publication-item">
    <div class="authors">31. Mariyam, Shafiq, M., Haseeb, M., Atif, R. M., Naqvi, S. A. A. A. A., Ali, N., ... & <span class="highlight-author">Haider, M. S.</span> (2021). Genome-wide identification and characterization of a plant-specific Dof transcription factor gene family in olive (Olea europaea) and its comparison with Arabidopsis. <span class="journal-name">Horticulture, Environment, and Biotechnology</span>, 62(6), 949-968. <span class="impact-factor">(Impact Factor: 2.4)</span></div>
</div>

<div class="publication-item">
    <div class="authors">32. Khan, M.A.F., Sohaib, M., Iqbal, S., <span class="highlight-author">Haider, M.S.</span> and Chaudhry, M. (2021). Nutritional assessment of servicemen in relation to area of duty and feeding habits: a Pakistani prospective. <span class="journal-name">Brazilian Journal of Biology</span>, 83: 1-7 <span class="impact-factor">(Impact Factor: 1.36)</span></div>
</div>

<div class="publication-item">
    <div class="authors">33. Zhou, X., Shafique, K., Sajid, M., Ali, Q., Khalili, E., Javed, M.A., <span class="highlight-author">Haider, M.S.</span>, Zhouh, G. and Zhu, G. (2021). Era-like GTP protein gene expression in rice. <span class="journal-name">Brazilian Journal of Biology</span>, 82: e250700, 1-24. https://doi.org/10.1590/1519-6984.250700 <span class="impact-factor">(Impact Factor: 1.36)</span></div>
</div>

<div class="publication-item">
    <div class="authors">34. Mushtaq, S., Shafiq, M., Ashfaq, M., Ali, M., Shaheen, S., Hsieh, D., Finan, T. and <span class="highlight-author">Haider, M.S.</span> (2021). Study of varying ph ranges on the growth rate of bacterial strains isolated from plants. <span class="journal-name">Pakistan Journal of Agricultural Research</span>, 58(3): 1051-1057. <span class="impact-factor">(Impact Factor: 0.663)</span></div>
</div>

<div class="publication-item">
    <div class="authors">35. Ali, M., Rizvi, S.S.B., Shafiq, M., Javed, M.A., Shahid, A.A., Ali, N., Haseeb, M., Tabassum, N., Dastagir, S. and <span class="highlight-author">Haider, M.S.</span> (2021). Genome wide in-silico analysis of NPR1 gene family in Citrus reticulate and its comparison with Arabidopsis. <span class="journal-name">Journal of Applied Horticulture</span>, 23(3): <span class="impact-factor">(Impact Factor = 0.16)</span></div>
</div>

<div class="publication-item">
    <div class="authors">36. Rasool, M., Akhter, A. and <span class="highlight-author">Haider, M.S.</span> (2021). Molecular and biochemical insight into biochar and Bacillus subtilis induced defense in tomatoes against Alternaria solani. <span class="journal-name">Scientia Horticulturae</span>, 285: 110203. https://doi.org/10.1016/j.scienta.2021.110203. <span class="impact-factor">(Impact factor: 3.364)</span></div>
</div>

<div class="publication-item">
    <div class="authors">37. Iftikhar, S., Anwar, W., Ali, S., Akhter, A., Khan, H.A.A., Khurshid, M. and <span class="highlight-author">Haider, M.S.</span> (2021). Genetic analysis and pathogenic characterization of Alternaria tenuissima induced fruit rot of bitter gourd. <span class="journal-name">Biodiversitas</span>, 22(2): 615-623. <span class="category">(HEC X Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">38. Rasool, M., Akhter, A., Soja, G. and <span class="highlight-author">Haider, M.S.</span> (2021). Role of biochar, compost and plant growth promoting rhizobacteria in the management of tomato early blight disease. <span class="journal-name">Scientific Reports</span>, 11(1): 1-16. <span class="impact-factor">(Impact Factor 3.998)</span></div>
</div>

<div class="publication-item">
    <div class="authors">39. Zahra, M.B., Aftab, Z.H. and <span class="highlight-author">Haider, M.S.</span> (2021). Water productivity, yield and agronomic attributes of maize crop in response to varied irrigation levels and biochar-compost application. <span class="journal-name">Journal of the Science of Food and Agriculture</span>, https://doi.org/10.1002/jsfa.11102 <span class="impact-factor">(Impact Factor: 2.463)</span></div>
</div>

<div class="publication-item">
    <div class="authors">40. Zahra, M.B., Aftab, Z.H., Akhter, A. and <span class="highlight-author">Haider, M.S.</span> (2021). Cumulative effect of biochar and compost on nutritional profile of soil and maize productivity. <span class="journal-name">Journal of Plant Nutrition</span>, 44(11):1-4 https://doi.org/10.1080/01904167.2021.1871743 <span class="impact-factor">(Impact Factor: 1.132)</span></div>
</div>

<div class="publication-item">
    <div class="authors">40. Anwar, W., Nawaz, K., Javed, M.A., Akhter, A., Shahid A.A, <span class="highlight-author">Haider, M.S.</span>, Ur Rehman, M.Z. and Ali, S. (2021). Characterization of fungal flora associated with sternorrhyncha insects of cotton plants. <span class="journal-name">Biologia</span>. https://doi.org/10.2478/s11756-020-00549-0 <span class="impact-factor">(Impact factor: 0.81)</span></div>
</div>

<div class="publication-item">
    <div class="authors">41. Afzaal, S., Ali, S. W., Hameed, U., Ahmad, A., Akhlaq, M., Javed, M. A., & <span class="highlight-author">Haider, M. S.</span> (2021). Molecular probing of Aflatoxigenic fungi in rice grains collected from local markets of Lahore, Pakistan. <span class="journal-name">Advancements in Life Sciences</span>, 8(2), 190-194. <span class="impact-factor">(Impact factor: 0.216)</span></div>
</div>

<div class="publication-item">
    <div class="authors">42. Kalsoom, R., <span class="highlight-author">Haider, M.S.</span> and Chohan, S. (2020). Phytochemical analysis and antifungal activity of some medicinal plants against Alternaria species isolated from onion. <span class="journal-name">The Journal of Animal and Plant Sciences</span>, 30(2): 1-7. <span class="impact-factor">(Impact factor: 0.490)</span></div>
</div>

<div class="publication-item">
    <div class="authors">43. Manzoor, M., Ahmad, J.N., Giblin-Davis, R.M., Javed, N. and <span class="highlight-author">Haider, M.S.</span> (2020). Effects of entomopathogenic nematodes and/or fungus on the red palm weevil, Rhynchophorus ferrugineus (Curculionidae: Coleoptera). <span class="journal-name">Nematology</span>, 0: 1-15 <span class="impact-factor">(Impact Factor: 1.442)</span></div>
</div>

<div class="publication-item">
    <div class="authors">44. Manzoor, M., Ahmad, J.N., Samina, J.N., Ahmad, Naqvi, S.A., Umar, U., Rasheed, R. and <span class="highlight-author">Haider, M.S.</span> (2020). Population dynamics, abundance and infestation of the red palm weevil, Rhynchophorus ferrugineus (Olivier) in different geographical regions of date palm in Pakistan. <span class="journal-name">Pakistan Journal of Agricultural Sciences</span>, 57(2): 381-391 <span class="impact-factor">(Impact Factor: 0.748)</span></div>
</div>

<div class="publication-item">
    <div class="authors">45. Ashfaq, M., Anjum, M.A., <span class="highlight-author">Haider, M.S.</span>, Ali, M., Mubashar, U, Aslam, H.M.U. and Sajjad, M. (2020). Association of Cladosporium cladosporioides brown leaf spot of Lady Palm in Pakistan. <span class="journal-name">The Journal of Animal & Plant Sciences</span>, 30(2): 371-376 <span class="impact-factor">(Impact factor: 0.490)</span></div>
</div>

<div class="publication-item">
    <div class="authors">46. Riaz, M., Mahmood, R., Khan, S.N. and <span class="highlight-author">Haider, M.S.</span> (2020). Onion tip burn: Significance and response to amount and form of nitrogen. <span class="journal-name">Scientia Horticulturae</span>, 261: 1-5 <span class="impact-factor">(Impact factor: 3.463)</span></div>
</div>

<div class="publication-item">
    <div class="authors">47. Rasool, M., Ahmad, F., Akhter, A., Khan, H.A.A., Khurshid, M., Anwar, W., Asif, M.S., Waqar, M. and <span class="highlight-author">Haider M.S.</span> (2019). Biochemical and molecular analysis of Alstonia scholaris leaf galls induced by Pauropsylla tuberculata (Psyllidae). <span class="journal-name">Mycopath</span>, 17(2): 79-88.</div>
</div>

<div class="publication-item">
    <div class="authors">48. Ahmad, F., Anwar, W., Javed, M.A, Basit, R., Akhter, A., Ali, S., Khan, H.A.A., Amin, H. and <span class="highlight-author">Haider M.S.</span> (2019). Infection mechanism of Aspergillus and Fusarium species against Bemisia tabaci. <span class="journal-name">Mycopath</span>, 17(2): 63-72.</div>
</div>

<div class="publication-item">
    <div class="authors">49. Ashfaq, M. Ali, M., Shahzad, M., Anjum, M.A., <span class="highlight-author">Haider, M.S.</span> and Mubashar, U. (2019). Efficacy assessment of bio-pesticides against rice leaf folder, Cnaphalocrocis medinalis (Guenee) (Lepidoptera: Pyralidae) using DNA quantification method. <span class="journal-name">International Journal of Biology & Biotechnology</span>, 16(2): 391-399. <span class="category">(HEC recognized Y category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">50. Anwar, W., Javed, M.A., Shahid, A.A., Nawaz, K., Akhter, A., Ur-Rehman, M.Z., Hameed, U., Iftikhar, S. and <span class="highlight-author">Haider, M.S.</span> (2019). Chitinase genes from Metarhizium anisopliae for the control of whitefly in cotton. <span class="journal-name">Royal Society Open Science</span>, 6: 1-12 <span class="impact-factor">(Impact Factor: 2.515)</span></div>
</div>

<div class="publication-item">
    <div class="authors">51. Ali, Z., Shahzad, H., Hussain, M., Mushtaq, S., <span class="highlight-author">Haider, M.S.</span> and Shafiq, M. (2019). Combined effect of plant growth regulators (IBA and Zeatin) on physiological parameters of Capsicum annum L. fruit. <span class="journal-name">World Journal of Biology and Biotechnology</span>, 4(3): 11-14.</div>
</div>

<div class="publication-item">
    <div class="authors">52. Abid, M., Khan, MA, Mushtaq, S., Rana, M.A., Afzaal, S. and <span class="highlight-author">Haider, M.S.</span> (2019). A review on future of baculoviruses as a microbial biocontrol agent. <span class="journal-name">World Journal of Biology and Biotechnology</span>, 4(3): 1-6.</div>
</div>

<div class="publication-item">
    <div class="authors">53. Kalsoom, R., Chohan, S., <span class="highlight-author">Haider, M.S.</span> and Abid, M. (2019). Synergistic effect of plant extracts and fungicide against purple blotch disease of onion. <span class="journal-name">Plant Protection</span>, 3(1): 53-57.</div>
</div>

<div class="publication-item">
    <div class="authors">54. Mushtaq, S., Shafiq, M., Ashraf, T., <span class="highlight-author">Haider, M.S.</span>, Ashfaq, M. and Ali, M. (2019). Characterization of plant growth promoting activities of bacterial endophytes and their antibacterial potential isolated from citrus. <span class="journal-name">Journal of Animal and Plant Sciences</span>, 29(4): 978-991 <span class="impact-factor">(Impact factor: 0.27)</span></div>
</div>

<div class="publication-item">
    <div class="authors">55. Afzaal, S., Hameed, U., Ahmad, N., Rashid, N. and <span class="highlight-author">Haider, M.S.</span> (2019). Molecular identification and characterization of lactic acid producing bacterial strains isolated from raw and traditionally processed foods of Punjab, Pakistan. <span class="journal-name">Pakistan Journal of Zoology</span>, 51(3): 1145-1153. <span class="impact-factor">(Impact factor 0.105)</span></div>
</div>

<div class="publication-item">
    <div class="authors">56. Mushtaq, S., Shafiq, M., Abid, M., Rana, M.A., Yaqub, S. and <span class="highlight-author">Haider, M.S.</span> (2019). A review on wheat streak mosaic virus (WSMV) disease complex. <span class="journal-name">World Journal of Biology and Biotechnology</span>, 4(1): 29-33.</div>
</div>

<div class="publication-item">
    <div class="authors">57. Ali, S., Fatima, A., Khalid, S., Saeed, F., Shafiq, M., Afzaal, S., <span class="highlight-author">Haider, M.S.</span>, Tariq, W. and Khan, J. (2019). Virus titer as a disease resistance indicator in tomato. <span class="journal-name">Bangladesh J. Bot.</span>, 48(3): 609-617. <span class="impact-factor">(Impact Factor: 0.331)</span></div>
</div>

<div class="publication-item">
    <div class="authors">58. Hameed, U., Zua-ur-Rehman, M., Ali, S.A., <span class="highlight-author">Haider, M.S.</span> and Brown, J.K. (2019). Invasion of previously unreported dicot plant hosts by chickpea chlorotic dwarf virus in Pakistan. <span class="journal-name">Virus Disease</span>, 30(1): 95-100. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">59. Choudhury, F.A., Jabeen, N., <span class="highlight-author">Haider, M.S.</span> and Hussain, R. (2019). Comparative analysis of leaf spot disease in Rice Belt of Punjab, Pakistan. <span class="journal-name">Advancements in Life Sciences</span>, 6(2): 76-80. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">60. Maqsood, S., Afzal, M., <span class="highlight-author">Haider, M.S.</span>, Khan1, H.A.A., Ali, M., Ashfaq, M., Aqueel, M.A. and Irfan Ullah, M. (2019). Effectiveness of Nuclear Polyhedrosis Virus and Bacillus thuringiensis alone and in Combination against Spodoptera litura (Fabricius). <span class="journal-name">Pakistan Journal of Zoology</span>, 51(2): 631-641. <span class="impact-factor">(Impact factor 0.105)</span></div>
</div>

<div class="publication-item">
    <div class="authors">61. Ashfaq, M., Ahmad, W., <span class="highlight-author">Haider, M.S.</span>, Ali, M., Sajjad, M., Khan, F., Shaheen, S., Anjum, M.A. and Mubashar, U. (2019). Molecular and agronomic characterization of selected rice germplasm under normal and water stress conditions. <span class="journal-name">Pakistan Journal of Agricultural Sciences</span>, 56(1): 29-36. <span class="impact-factor">(Impact Factor: 0.618)</span></div>
</div>

<div class="publication-item">
    <div class="authors">62. Rashid, N., Shehzad, A., Ahmad, N., Hussain, Z. and <span class="highlight-author">Haider, M.S.</span> (2018). Valorization of waste foods using pullulan hydrolase from Thermococcus kodakarensis. <span class="journal-name">Amylase</span>, 2: 39-43. <span class="impact-factor">(Impact factor: 0.8)</span></div>
</div>

<div class="publication-item">
    <div class="authors">63. Sarwar, M., Anjum, S., Khan, M.A., Haider A.S., Ali S. and Naseem M.K.(2018). Assessment of sustainable and biodegradable agricultural substrates for eminence production of cucumber for kitchen gardening. <span class="journal-name">Int J Recycl Org Waste Agricult</span> 7, 365–374. <span class="impact-factor">(Impact factor 2.929)</span></div>
</div>
<div class="publication-item">
    <div class="authors">64. Mushtaq, S., Shafiq, M., Khan, F., Ashraf, T. and <span class="highlight-author">Haider, M.S.</span> (2018). Effect of bacterial endophytes isolated from the citrus on the physical parameter of bitter gourd (Momordica charantia L.). <span class="journal-name">World Journal of Biology and Biotechnology</span>, 3(2): 193-197. <span class="impact-factor">(Impact factor: 4.253)</span></div>
</div>

<div class="publication-item">
    <div class="authors">65. Abid, M., Khan, M.A.U., Mushtaq, S., Afzaal, S. and <span class="highlight-author">Haider, M.S.</span> (2018). A comprehensive review on mycoviruses as biological control agent. <span class="journal-name">World Journal of Biology and Biotechnology</span>, 3(2): 187-192. <span class="impact-factor">(Impact factor: 4.253)</span></div>
</div>

<div class="publication-item">
    <div class="authors">66. Saeed, F., Sattar, M.N., Hameed, U., Ilyas, M., <span class="highlight-author">Haider, M.S.</span> and Hamza, M. (2018). Infectivity of okra enation leaf curl virus and the role of its V2 protein in pathogenicity. <span class="journal-name">Virus Research</span>, 255: 90-94. <span class="impact-factor">(Impact Factor: 2.905)</span></div>
</div>

<div class="publication-item">
    <div class="authors">67. Iftikhar, S., Shahid, A.A., Nawaz, K., Zahid, A., Anwar, W. and <span class="highlight-author">Haider, M.S.</span> (2018). First report of black pit of potato caused by Alternaria alternata in Pakistan. <span class="journal-name">Plant Disease</span>, 102(2): 442. <span class="impact-factor">(Impact Factor: 2.94)</span></div>
</div>

<div class="publication-item">
    <div class="authors">68. Anjum, N., Shahid, A.A., Iftikhar, S., Nawaz, K. and <span class="highlight-author">Haider, M.S.</span> (2018). First report of postharvest fruit rot of tomato (Lycopersicum esculentum Mill.) caused by Penicillium olsonii in Pakistan. <span class="journal-name">Plant Disease</span>, 102(2): 451. <span class="impact-factor">(Impact Factor: 2.94)</span></div>
</div>

<div class="publication-item">
    <div class="authors">69. Zia-ur-Rehman, M., Iqbal, M.J., Hameed, U. and <span class="highlight-author">Haider, M.S.</span> (2018). First detection of Hollyhock leaf curl virus in Malvastrum coromandellanum in Pakistan. <span class="journal-name">Plant Disease</span>, 102(1): 256. <span class="impact-factor">(Impact Factor: 2.94)</span></div>
</div>

<div class="publication-item">
    <div class="authors">70. Alam, M.W., Rehman, A., <span class="highlight-author">Haider, M.S.</span>, Gleason, M.L., Rosli, H., Saira, M., Khan, S.M., Aslam, S., Khan, M.A., Hameed, A. and Sarfraz, S. (2018). First report of Ceratocystis fimbriata causing wilt of Loquat in Pakistan. <span class="journal-name">Plant Disease</span>, 102(10): 2034. <span class="impact-factor">(Impact Factor: 2.94)</span></div>
</div>

<div class="publication-item">
    <div class="authors">71. Sarwar, M., Anjum, S.,·Khan, M.A., <span class="highlight-author">Haider, M.S.</span>, Ali, S. and Naseem, M.K. (2018). Assessment of sustainable and biodegradable agricultural substrates for eminence production of cucumber for kitchen gardening. <span class="journal-name">International Journal of Recycling of Organic Waste in Agriculture</span>, 7(4): 365-374. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">72. Sattar, M.N., Qurashi, F., Iqbal, Z. and <span class="highlight-author">Haider, M.S.</span> (2018). Molecular characterization of ageratum enation virus and DNA-satellites associated with yellowing and leaf curl symptoms on mulberry in Pakistan. <span class="journal-name">Can. J. Plant Pathol.</span>, 40(3): 442–449 <span class="impact-factor">(Impact Factor 1.42)</span></div>
</div>

<div class="publication-item">
    <div class="authors">73. Mushtaq, S., Shafiq, M., Asim, M. and <span class="highlight-author">Haider, M.S.</span> (2018). Effect of bacterial endophytes isolated from citrus on the physiology of Brassica oleracea. <span class="journal-name">International Journal of Biosciences</span>, 12(6): 225-234. <span class="impact-factor">(Impact Factor: 0.553)</span></div>
</div>

<div class="publication-item">
    <div class="authors">74. Mushtaq, S., Shafiq, M., Ashfaq, M., Khan, F., Afzaal, S., Hussain, U., Hussain, M., Balal, R.M. and <span class="highlight-author">Haider, M.S.</span> (2018). Isolation and morphological characterization of novel bacterial Endophytes from Citrus and evaluation for antifungal potential against Alternaria solani. <span class="journal-name">Biologia (Pakistan)</span>, 64(1): 119-128. <span class="category">(HEC Recognized Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">75. Mushtaq, S., Shafiq, M., Afzaal, S., Ashraf, T. and <span class="highlight-author">Haider, M.S.</span> (2018). An uncultured bacterium associated with infection in mandarin (Citrus reticulata) in Pakistan. <span class="journal-name">World Journal of Biology and Biotechnology</span>, 3(1): 179-181. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">76. Majeed, R.A., Shahid, A.A., Paret, M., Akhter, M. and <span class="highlight-author">Haider, M.S.</span> (2017). Antifungal potential of essential oils of Cymbopogon citratus and Eucalyptus citriodora against brown spot disease of rice. <span class="journal-name">Phytopathology</span>, 107(12): 196 <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">77. <span class="highlight-author">Haider, M.S.</span>, Shahid, A. and Anwar, W. (2017). Entomopathogenic fungi: Introductory, history, classification, infection mechanism, enzymes and toxins. <span class="journal-name">Biopesticides and Bioagents</span>, 117-168.</div>
</div>

<div class="publication-item">
    <div class="authors">78. Zia-ur-Rehman, M., Hameed, U., Ali, C.A., <span class="highlight-author">Haider, M.S.</span> and Brown, J.K. (2017). First report of chickpea chlorotic dwarf virus infecting Okra in Pakistan. <span class="journal-name">Plant Disease</span>, 101(7): 1336. <span class="impact-factor">(Impact Factor: 3.173)</span></div>
</div>

<div class="publication-item">
    <div class="authors">79. Anwar, W., <span class="highlight-author">Haider, M.S.</span>, Shahid, A.A., Mushtaq, H., Hameed, U. and Rehman, M.Z.U. (2017). Genetic diversity of Fusarium isolated from members of Sternorrhyncha (Hemiptera): Entomopathogens against Bermisia tabaci. <span class="journal-name">Pakistan Journal of Zoology</span>, 49(2): 639-645 <span class="impact-factor">(Impact factor 0.105)</span></div>
</div>

<div class="publication-item">
    <div class="authors">80. Mushtaq, S., Khan, F., Shafiq, M., Hussain, M. and <span class="highlight-author">Haider, M.S.</span> (2017). Endophytic Bacteria: A beneficial organism. <span class="journal-name">International Journal of Biosciences</span>, 10(6), 1-12. <span class="impact-factor">(Impact Factor: 0.553)</span></div>
</div>

<div class="publication-item">
    <div class="authors">81. Qurashi, F., Sattar, M.N., Iqbal, Z. and <span class="highlight-author">Haider, M.S.</span> (2017). First report of Cherry tomato leaf curl virus and associated DNA-satellites infesting an invasive weed Parthenium hysterophorus, from Pakistan. <span class="journal-name">Journal of Plant Pathology</span>, 99(1): 267-272 <span class="impact-factor">(Impact Factor 1.25)</span></div>
</div>

<div class="publication-item">
    <div class="authors">82. Sattar, M.N., Qurashi, F., Iqbal, Z. and <span class="highlight-author">Haider, M.S.</span> (2017). Molecular characterization of Hollyhock leaf curl virus and associated DNA-satellites infecting Malva parviflora in Pakistan. <span class="journal-name">Canadian Journal of Plant Pathology</span>, 39(2): 229-234 <span class="impact-factor">(Impact Factor 1.25)</span></div>
</div>

<div class="publication-item">
    <div class="authors">83. Khalid, S., Zia-ur-Rehman, M., Ali, S.A., Hameed, U., Khan, F., Ahmad, N., Farooq, A.M. and <span class="highlight-author">Haider, M.S.</span> (2017). Construction of an infectious chimeric geminivirus by molecular cloning based on coinfection and recombination. <span class="journal-name">International Journal of Agriculture and Biology</span>, 19(4): 629-634. <span class="impact-factor">(Impact Factor: 0.758)</span></div>
</div>

<div class="publication-item">
    <div class="authors">84. Khalid, S., Zia-ur-Rehman, M., Hameed, U., Saeed, F., Khan, F. and <span class="highlight-author">Haider, M.S.</span> (2017). Transmission specificity and coinfection of mastrevirus with begomovirus. <span class="journal-name">International Journal of Agriculture and Biology</span>, 19(1): 105‒113. <span class="impact-factor">(Impact Factor: 0.758)</span></div>
</div>

<div class="publication-item">
    <div class="authors">85. Mahmood, A., <span class="highlight-author">Haider, M.S.</span>, Ali, Q. and Nasir, I.A. (2017). Multivariate analysis to assess abscisic acid content association with different physiological and plant growth related traits of Petunia. <span class="journal-name">Acta Agriculturae Slovenica</span>, 109(2): 175-186. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">86. Ashfaq, M., Anjum, M.A., Hafeez, R., Ali, A., <span class="highlight-author">Haider, M.S.</span>, Ali, M., Chattha, M.B., Ahmad, S.R., Ahmad, F., Khan, F. and Sajjad, M. (2017). First report of Fusarium equiseti causing brown leaf spot of Fishtail Palm (Caryota mitis) in Pakistan. <span class="journal-name">Plant Disease</span>, 101(5): 840-840 <span class="impact-factor">(Impact Factor: 3.173)</span></div>
</div>

<div class="publication-item">
    <div class="authors">87. Ashfaq, M., Mubashar, U., <span class="highlight-author">Haider, M.S.</span>, Ali, M., Ali, A. and Sajjad, M. (2017). Grain discoloration: An emerging threat to rice crop in Pakistan. <span class="journal-name">Journal of Animal and Plant Sciences</span>, 27(3): 696-707 <span class="impact-factor">(Impact Factor: 0.381)</span></div>
</div>
<div class="publication-item">
    <div class="authors">88. Anwar, W., Nawaz, K., <span class="highlight-author">Haider, M.S.</span>, Shahid, A.A. and Iftikhar, S. (2017). Biocontrol potential of Trichoderma longibrachbiatum as an entomopathogenic fungi against Bemisia tabaci. <span class="journal-name">Canadian Journal of Plant Pathology</span>, 39(4): 559. <span class="impact-factor">(Impact Factor 1.25)</span></div>
</div>

<div class="publication-item">
    <div class="authors">89. Ashfaq, M., <span class="highlight-author">Haider, M.S.</span>, Ali, M., Shaheen, S., Khan, F. and Mubashar, U. (2017). Molecular diversity and heterosis analysis for rice grain discoloration. <span class="journal-name">Pakistan Journal of Agricultural Sciences</span>, 54(3): 579-587. <span class="impact-factor">(Impact Factor 0.609)</span></div>
</div>

<div class="publication-item">
    <div class="authors">90. Ashfaq, M., Asghari, Q.A., Hafeez, R., Ali, A., <span class="highlight-author">Haider, M.S.</span>, Ali, M., Chattha, M.B., Rasheed, A. and Sajjad, M. (2017). Microbial Diversity Associated With Rice Seeds. <span class="journal-name">Biologia (Pakistan)</span>, 63(2): 161-168. <span class="category">HEC recognized Y category</span></div>
</div>

<div class="publication-item">
    <div class="authors">91. Ahmad, A., Zia-ur-Rehman, M., Hameed, U., Rao, A.Q., Ahad, A., Yasmeen, A., Akram, F., Bajwa, K.S., Scheffler, J., Nasir, I.A., Shahid, A.A., Iqbal, M.J., Husnain, T., <span class="highlight-author">Haider, M.S.</span> and Brown, J.K. (2017). Engineered Disease Resistance in Cotton Using RNA-Interference to Knock down Cotton leaf curl Kokhran virus-Burewala and Cotton leaf curl Multan betasatellite Expression. <span class="journal-name">Viruses</span>, 9(257): 1-13 <span class="impact-factor">(Impact Factor: 3.173)</span></div>
</div>

<div class="publication-item">
    <div class="authors">92. Ashfaq, M., <span class="highlight-author">Haider, M.S.</span>, Ali, A., Ali, M., Mubashar, H., Sajjad, M. and Mubashar, U. (2017). Diversity and correlation analysis in Basmati rice germplasm. <span class="journal-name">Bangladesh J. Bot.</span>, 46(2): 565-574) <span class="impact-factor">(Impact Factor: 0.331)</span></div>
</div>

<div class="publication-item">
    <div class="authors">93. Ashfaq, M., Rashid, A., <span class="highlight-author">Haider, M.S.</span>, Ali, A., Shahzad, M., Ali, M., Khan, F., Farooq, H.U. and Mubashar, U. (2017). Genetic variability and association study of some quantitative traits in chickpea (Cicer arietinum L.). <span class="journal-name">Int. J. Biol. Biotech.</span>, 14(2): 279-282. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">94. Hameed, U., Zia-Ur-Rehman, M., Ali, S.A., <span class="highlight-author">Haider, M.S.</span> and Brown, J.K. (2017). First report of Chickpea chlorotic dwarf virus infecting cucumber in Pakistan. <span class="journal-name">Plant Disease</span>, 101(5): 848. <span class="impact-factor">(Impact Factor = 3.2)</span></div>
</div>

<div class="publication-item">
    <div class="authors">95. Khalid, S., Zia-ur-Rehman, M., Hameed, U., Saeed, F., Khan, F. and <span class="highlight-author">Haider, M.S.</span> (2017). Transmission Specificity and Coinfection of Mastrevirus with Begomovirus. <span class="journal-name">International Journal of Agriculture & Biology</span>, 19(1): 101-113 <span class="impact-factor">(Impact Factor = 0.758)</span></div>
</div>

<div class="publication-item">
    <div class="authors">96. Shafiq, M., Arif, S., Bibi, A., Ali, M., <span class="highlight-author">Haider, M.S.</span>, Ashfaq, M., Ahmad, S., Manzoorm M.T., Shahzad, M., Tanveer,A. and Ahmad, A. (2016). Detection and geographical distribution of wolbachia endosymbiont in the natural populations of cotton leafhopper, (Amrasca devastans) in Pakistan. <span class="journal-name">Pakistan Entomologist</span>, 38(2): 141-146 <span class="category">(HEC Recognized "Y" Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">97. Ali, A., Ashfaq, M., <span class="highlight-author">Haider, M.S.</span>, Hanif, S., Ali, M. and Hafeez, R. (2016). Allelopathic potential of Lantana camara L. against plant pathogenic bacteria. <span class="journal-name">Biologia (Pakistan)</span>, 62(2): 357-361. <span class="category">(HEC Recognized "Y" Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">98. Anwar, W., Subhani, M.N., <span class="highlight-author">Haider, M.S.</span>, Shahid, A.A., Mushtaq, H., Rehman, M.Z.U., Hameed, U. and Javed, S. (2016). First record of Trichoderma longibrachiatum as entomopathogenic fungi against Bemisia tabaci in Pakistan. <span class="journal-name">Pak. J. Phytopathol.</span>, 28(02): 287-294. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">99. Majeed, R.A., Shahid, A.A., Liaqat, G.A., Saleem, K., Asif, M., Shafiq, M., <span class="highlight-author">Haider, M.S.</span> and Noreen, M. (2016). First report of Setosphaeria rostrata causing brown leaf spot of rice in Pakistan. <span class="journal-name">Plant Disease</span>, 100(10): 2162. <span class="impact-factor">(Impact Factor 3.2)</span></div>
</div>

<div class="publication-item">
    <div class="authors">100. Ghaffar, R., Anwar, W., Imtiaz, K., Shafiq, M., Subhani, M.N. and <span class="highlight-author">Haider, M.S.</span> (2016). Diversity of internal transcribed spacer (ITS) region of Fusarium isolates in Pakistan. <span class="journal-name">Journal of Animal and Plant Sciences</span>, 26(5): 1368-1373 <span class="impact-factor">(Impact Factor: 0.422)</span></div>
</div>

<div class="publication-item">
    <div class="authors">101. Iqbal, M.J., Hussain, W., Zia-ur-Rehman, Hameed, U. and <span class="highlight-author">Haider, M.S.</span> (2016). First report of chilli leaf curl virus and associated alpha- and beta-satellite DNAs infecting nettle weed (Urtica dioica) in Pakistan. <span class="journal-name">Plant Disease</span>, 100(4): 870. <span class="impact-factor">(Impact Factor 3.2)</span></div>
</div>

<div class="publication-item">
    <div class="authors">102. Khan, H.A.A., Akram, W., Khan, T., <span class="highlight-author">Haider, M.S.</span>, Iqbal, N. and Zubair, M. (2016). Risk assessment, cross-resistance potential, and biochemical mechanism of reistance to emamectin benzoate in a field strain of house fly (Musca domestica Linnaeus). <span class="journal-name">Chemosphere</span>, 151: 133-137. <span class="impact-factor">(Impact Factor 3.34)</span></div>
</div>

<div class="publication-item">
    <div class="authors">103. Ashfaq, M., Mubarak, R., Saleem, M.Y., Ali, A., Ali, M. and <span class="highlight-author">Haider, M.S.</span> (2016). Quantitative disease study of early blight of tomato under natural field conditions. <span class="journal-name">International Journal of Agriculture & Applied Sciences</span>, 8(1): 31-34. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">104. Ali, A., Ashfaq, M., <span class="highlight-author">Haider, M.S.</span>, Hafeez, R. and Ali, M. (2016). Evaluation of phyllospheric bacterial community in some medicinal plants and their antimicrobial activity. <span class="journal-name">International Journal of Biology & Biotechnology</span>, 13(3): 407-413. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">105. Ali, A., Bashir, U., Akhtar, N. and <span class="highlight-author">Haider, M.S.</span> (2016). Characterization of growth promoting rhizobacteria of leguminous plants. <span class="journal-name">Pakistan Journal of Phytopathology</span>, 28(1): 57-60. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">106. Ashfaq, M., <span class="highlight-author">Haider, M.S.</span>, Ali, A., Ali, M., Saleem, I. and Mubashar, U. (2016). Morphological characterization of endophytic bacterial strains isolated from discolored rice grain. <span class="journal-name">Pakistan Journal of Phytopathology</span>, 28(1): 1-8. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">107. Majeed, R.A., Shahid, A.A., Ashfaq, M., Saleem, M.Z. and <span class="highlight-author">Haider, M.S.</span> (2016). First Report of Curvularia lunata Causing Brown Leaf Spots of Rice in Punjab, Pakistan. <span class="journal-name">Plant Disease</span>, 100(1): 219. <span class="impact-factor">(Impact Factor 3.2)</span></div>
</div>

<div class="publication-item">
    <div class="authors">108. Ali, M., Shahid, A.A. and <span class="highlight-author">Haider, M.S.</span> (2016). Isolation and in vitro screening of potential antagonistic rhizobacteria against Pythium debaryanum. <span class="journal-name">Pakistan Journal of Phytopathology</span>, 28(2): 231-240. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">109. Anwar, W., Mushtaq, <span class="highlight-author">Haider, M.S.</span>, Shahid, A.A., Hameed, U. and Zia-ur-Rehman, M. (2016). Infection duration of entomopathogenic fungi Aspergillus spp and Fusarium spp against Bemisia tabaci. <span class="journal-name">Phytopathology</span>, 106(12): 55. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">110. Majeed, R.A., Shahid, A.A., Saleem, M.Z., Asif, M., Zahid, M.A. and <span class="highlight-author">Haider, M.S.</span> (2016). First report of Curvularia tuberculata causing brown leaf spot of rice in Punjab, Pakistan. <span class="journal-name">Plant Disease</span>, 100(8): 1791. <span class="impact-factor">(Impact Factor 3.2)</span></div>
</div>

<div class="publication-item">
    <div class="authors">111. Azam, M., Shahid, A.A., Majeed, R., Ali, M., Ahmad, N. and <span class="highlight-author">Haider, M.S.</span> (2016). First report of Penicillium biourgeianum causing post-harvest fruit rot of apple in Pakistan. <span class="journal-name">Plant Disease</span>, 100(6): 1778. <span class="impact-factor">(Impact Factor 3.2)</span></div>
</div>

<div class="publication-item">
    <div class="authors">112. Ahmad, N., Rashid, N., <span class="highlight-author">Haider, M.S.</span> and Akhtar, M. (2016). Single step liquefaction and saccharification of corn starch using an acidophilic, calcium independent and hyperthermophilic pullulanase. <span class="journal-name">US Patent</span>, 9,340,778. <span class="patent">(equivalent to 5 publications having impact factor)</span></div>
</div>

<div class="publication-item">
    <div class="authors">113. Akhtar, N., Ali, A., Bashir, U. and <span class="highlight-author">Haider, M.S.</span> (2016). Bactericidal action of crude leaf extracts of common weeds. <span class="journal-name">Pakistan Journal of Weed Science Research</span>, 22(1): 157-167 <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">114. Zia-Ur-Rehman, M., Hameed, U., Herrmann, H.W., Iqbal, M.J., <span class="highlight-author">Haider, M.S.</span> and Brown, J.K. (2015). Invasion of the dicot-infecting mastrevirus "Chickpea chlorotic dwarf virus" in solanaceous hosts in Pakistan. <span class="journal-name">Phytopathology</span>, 105(Suppl. 4): 498. <span class="impact-factor">(Impact Factor 3.2)</span></div>
</div>

<div class="publication-item">
    <div class="authors">115. Mushtaq, S., Shafiq, M., Hussain, U., Asim, M. and <span class="highlight-author">Haider, M.S.</span> (2015) Incidence of Pantoea agglomerans associated with Barnyard grass (Echinochloa crusgalli L.) in Pakistan. <span class="journal-name">Plant Disease</span>, 31(1): 1034 <span class="impact-factor">(Impact Factor: 3.02)</span></div>
</div>

<div class="publication-item">
    <div class="authors">116. Shahbaz, M., Shahzad, A.N., Khan, H.A.A., Anees, M., <span class="highlight-author">Haider, M.S.</span> and Fatima, A. (2015). Impact of copper toxicity on stone-head cabbage (Brassica oleracea var. capitata) in Hydroponics. <span class="journal-name">Peer J.</span>, 3: 2-10. 0.7717/peerj.1119. <span class="impact-factor">(Impact Factor 2.112)</span></div>
</div>

<div class="publication-item">
    <div class="authors">117. Anwar, W., <span class="highlight-author">Haider, M.S.</span>, Aslam, M., Shahbaz, M., Khan, S.N. and Bibi, A. (2015). Assessment of antifungal potentials of some aqueous plant extracts and fungicides against Alternaria alternata. <span class="journal-name">Journal of Agriculture Research</span>, 53(1): 75-82. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">118. Anwar, W., Khan, S.N., Aslam, M., <span class="highlight-author">Haider, M.S.</span>, Shahid, A.A. and Ali, M. (2015). Exploring fungal flora associated with insects of cotton agroecological zones of Punjab, Pakistan. <span class="journal-name">Pakistan Entomologist</span>, 37(1): 27-31. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">119. Iqbal, M.J., Hussain, W., Zia-ur-Rehman, M., Hameed, U. and <span class="highlight-author">Haider, M.S.</span> (2015). First report of chilli leaf curl virus and associated alpha- and beta-satellite DNAs infecting nettle weed (Urtica dioica L.) in Pakistan. <span class="journal-name">Plant Disease</span>, 100(4): 870 (accepted and published online on 17 Nov. 2015) <span class="impact-factor">(Impact Factor 3.02)</span></div>
</div>

<div class="publication-item">
    <div class="authors">120. Bibi, A., Shafiq, S., Arif, S. Tanveer, A., Manzoor, M.T. and <span class="highlight-author">Haider, M.S.</span> (2015). First report of the molecular characterization of the endosymbiont Candidatus portiera Aleyrodidarum from cotton whiteflies collected from Pakistan. <span class="journal-name">International Journal of Agriculture & Biology</span>, 18: 282-285. <span class="impact-factor">(Impact Factor: 0.902)</span></div>
</div>

<div class="publication-item">
    <div class="authors">121. Ali, M., Ali, Q., Anwer, S., Khalid, H., Ahmad, A., Ali, A., Shafiq, S., <span class="highlight-author">Haider, M.S.</span>, Nasir, I.A. and Husnain, T. (2015). Estimation of correlation among various morphological traits of Coronopus didymus, Euphorbia helioscopia, Cyperus difformis and Aristida abscensionis. <span class="journal-name">New York Science Journal</span>, 8(4): 47-52. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">122. Khalid, H., Ali, Q., Anwer, S., Ali, M., Ahmad, A., Ali, A., Shafiq, S., <span class="highlight-author">Haider, M.S.</span>, Nasir, I.A. and Husnain, T. (2015). Biodiversity and correlation studies among various traits of Digeria arvensis, Cyperus rotundus, Digitaria adescendense and Sorghum halepense. <span class="journal-name">New York Science Journal</span>, 8(4): 37-42. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">123. Ashfaq, M., Shaukat, M.S., Akhter, M., <span class="highlight-author">Haider, M.S.</span>, Mubashar, U. and Hussain, S.B. (2015). Comparison of fungal diversity of local and exotic rice (Oryza sativa L.) germplasm for their seed health. <span class="journal-name">Journal of Animal and Plant Sciences</span>, 25(5): 1349-1357. <span class="impact-factor">(Impact Factor: 0.48)</span></div>
</div>

<div class="publication-item">
    <div class="authors">124. Ashfaq, M., <span class="highlight-author">Haider, M.S.</span>, Saleem, I., Ali, M., Ali, A. and Chohan, S.A. (2015). Basmati–Rice a Class Apart (A review). <span class="journal-name">J. Rice Res.</span> 3(4): 1-8. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">125. Ali, A., Akhtar, N., Bashir, U., Hafeez,R. and <span class="highlight-author">Haider, M.S.</span> (2015). Morphological and biochemical characterization of bacteria isolated from milk products. <span class="journal-name">Biologia (Pakistan)</span>, 61(2): 271-277. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">126. Hafeez, R., Akhtar, N., Shoaib, A., Bashir, U., <span class="highlight-author">Haider, M.S.</span> and Awan, Z.A. (2015). First report of Geotrichum candidum from Pakistan causing postharvest sour rot in Loquat (Eriobotrya japonica). <span class="journal-name">Journal of Animal & Plant Sciences</span>, 25(6): 1737-1740 <span class="impact-factor">(Impact Factor: 0.448)</span></div>
</div>

<div class="publication-item">
    <div class="authors">127. Khan, H.A.A., Akram, W. and <span class="highlight-author">Haider, M.S.</span> (2015). Genetics and mechanism of resistance to deltamethrin in the house fly, Musca domestica L., from Pakistan. <span class="journal-name">Ecotoxicology</span>, 24: 1213-1220 <span class="impact-factor">(Impact Factor: 2.706)</span></div>
</div>

<div class="publication-item">
    <div class="authors">128. Zia-Ur-Rehman, M., Hameed, U., Herrmann, H.W., Iqbal, M.J., <span class="highlight-author">Haider, M.S.</span> and Brown, J.K. (2015). First report of Chickpea chlorotic dwarf virus infecting tomato crops in Pakistan. <span class="journal-name">Plant Disease</span>, 99(9): 1287 <span class="impact-factor">(Impact factor 3.02)</span></div>
</div>

<div class="publication-item">
    <div class="authors">129. Tahir, M., Amin, I., <span class="highlight-author">Haider, M.S.</span>, Mansoor, S. and Briddon, R.W. (2015). Ageratum enation virus—A begomovirus of weeds with the potential to infect crops. <span class="journal-name">Viruses</span>, 7(2): 647-665. <span class="impact-factor">(Impact Factor: 3.173)</span></div>
</div>

<div class="publication-item">
    <div class="authors">130. Anwar, S., Ali, Q., Ali, M., Khalid, H., Ahmad, A., Ali, A., Shafiq, M. and <span class="highlight-author">Haider, M.S.</span> (2015). Assessment of association among various morphological traits of Euphorbia granulate, Euphorbia hirta, Fumaria indica and Parthenium hysterophorus. <span class="journal-name">Nature and Science</span>, 13(5): 47-51.</div>
</div>

<div class="publication-item">
    <div class="authors">131. Ali, A., <span class="highlight-author">Haider, M.S.</span> and Ashfaq, M. (2014). Bacterial diversity in some selected agricultural food products. <span class="journal-name">Bangladesh Journal of Botany</span>, 43(2): 219-222 <span class="impact-factor">(Impact Factor: 0.127)</span></div>
</div>

<div class="publication-item">
    <div class="authors">132. Hafeez, R., Bashir, U., Ali, A. and <span class="highlight-author">Haider, M.S.</span> (2014). Determination of microbial load associated with spoilage of tomato (Solanum lycopersicum) under storage. <span class="journal-name">Journal of Pure and Applied Microbiology</span>, 8(6): 4415-4420 <span class="impact-factor">(Impact Factor: 0.073)</span></div>
</div>

<div class="publication-item">
    <div class="authors">133. Mahmood, R., Shahid, A.A., Usmani, A., <span class="highlight-author">Haider, M.S.</span> and Ali, S. (2014). Nitrification inhibition potential of various leaf extracts. <span class="journal-name">Philippine Agricultural Scientist</span>, 97(3): 287-293 <span class="impact-factor">(Impact Factor: 0.256)</span></div>
</div>

<div class="publication-item">
    <div class="authors">134. Ali, A., <span class="highlight-author">Haider, M.S.</span>, Hanif, S. and Akhtar, N. (2014). Assessment of the antibacterial activity of Cuscuta pedicellata Ledeb. <span class="journal-name">African Journal of Biotechnology</span>, 13(3): 430-433. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">135. Hameed, U., Zia-Ur-Rehman, M., Herrmann, H.W., <span class="highlight-author">Haider, M.S.</span> and Brown, J.K (2014). First report of Okra enation leaf curl virus and associated Cotton leaf curl Multan betasatellite and Cotton leaf curl Multan alphasatellite, infecting cotton in Pakistan: a new member of the cotton leaf curl disease complex. <span class="journal-name">Plant Disease</span>, 98(10): 1447-1447 <span class="impact-factor">(Impact Factor 3.020)</span></div>
</div>

<div class="publication-item">
    <div class="authors">136. Brown, J.K., Herrmann, H.W., Zia-Ur-Rehman, M., Hameed, U. and <span class="highlight-author">Haider, M.S.</span> (2014). Begomovirus diversity, phylogeography, and population genetics in cultivated and uncultivated plant ecosystems in Pakistan. <span class="journal-name">Crop Protection</span>, 61: 104 <span class="impact-factor">(Impact Factor 1.493)</span></div>
</div>

<div class="publication-item">
    <div class="authors">137. Bashir, U., Ali, A., Akhtar, N. and <span class="highlight-author">Haider, M.S.</span> (2014). Isolation and characterization of bacterial species associated with weed plants. <span class="journal-name">Pakistan Journal of Weed Science</span>, 20(4): 439-447. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">138. Ali, S., Shahbaz, M., Nadeem, M.A., Ijaz, M., <span class="highlight-author">Haider, M.S.</span>, Anees, M. and Ali, H.A. (2014). The relative performance of weed control practices in September sown maize. <span class="journal-name">Mycopath</span>, 12(1): 43-51. <span class="category">(National)</span></div>
</div>

<div class="publication-item">
    <div class="authors">139. Ashfaq, M., Ali, A., Nawaz, A., Bashir, U., <span class="highlight-author">Haider, M.S.</span> and Ali, M. (2014). Isolation and characterization of Pseudomonas species associated with tomato wilt. <span class="journal-name">Biologia (Pakistan)</span>, 60(2): 237-242. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">140. Ashfaq, M., <span class="highlight-author">Haider, M.S.</span>, Ali, A., Hanif, S. and Mubashar, U. (2014). Screening of diverse germplasms for genetic studies of drought tolerance in rice (Oryza sativa L.). <span class="journal-name">Caryologia (International Journal of Cytology, Cytosystematics and Cytogenetics)</span>, 67(4): 296-304 <span class="impact-factor">(Impact Factor: 0.740)</span></div>
</div>

<div class="publication-item">
    <div class="authors">141. Ashfaq, M., Ali, A., <span class="highlight-author">Haider, M.S.</span>, Ali, M., Asadullah, Mubashar, U., Mubashar, H., Saleem, I. and Sajjad, M. (2014). Allelopathic Association Between Weeds Extract and Rice (Oryza sativa L.) Seedlings. <span class="journal-name">Journal of Pure & Applied Microbiology</span>, 8(2): 573-580 <span class="impact-factor">(Impact Factor: 0.017)</span></div>
</div>

<div class="publication-item">
    <div class="authors">142. Javaid, A., Akram, W., Shoaib, A., <span class="highlight-author">Haider, M.S.</span> and Ahmad, A. (2014). ISSR analysis of genetic diversity in Dalbergia sissoo in Punjab, Pakistan. <span class="journal-name">Pak. J. Bot.</span>, 46(5): 1573-1576 <span class="impact-factor">(Impact factor: 0.822)</span></div>
</div>

<div class="publication-item">
    <div class="authors">143. Ali, M., Ashfaq, M., Rana, N., <span class="highlight-author">Haider, M.S.</span>, Ashfaq, M. and Amjad, M. (2014). The susceptibility study of some aubergine (Solanum melongena L.) cultivars against jassid (Amrasca biguttula biguttula (ISHIDA). <span class="journal-name">Pakistan Journal of Agricultural Sciences</span>, 51(3): 679-683 <span class="impact-factor">(Impact Factor: 1.049)</span></div>
</div>

<div class="publication-item">
    <div class="authors">144. Mushtaq, S., Shamim, F., Shafique, M. and <span class="highlight-author">Haider, M.S.</span> (2014). Effect of whitefly transmitted geminiviruses on the physiology of tomato (Lycopersicon esculentum L.) and tobacco (Nicotiana benthamiana L.) plants. <span class="journal-name">Journal of Natural Sciences Research</span>, 4(9): 109-118. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">145. Ali, A., <span class="highlight-author">Haider, M.S.</span> and Ashfaq, M. (2014). Effect of culture filtrates of Trichoderma spp., on seed germination and seedling growth in chickpea – An in vitro study. <span class="journal-name">Pakistan Journal of Phytopathology</span>, 26(01): 01-05. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">146. Ashfaq, M., Ali, A., <span class="highlight-author">Haider, M.S.</span>, Ali, M., Abdullah, M. and Mubashar, U. (2014). A role of weed solvents on seed priming of diverse rice germplasm lines. <span class="journal-name">Journal of Pure & Applied Microbiology</span>, 8(3): 2175-2184 <span class="impact-factor">(Impact Factor: 0.017)</span></div>
</div>

<div class="publication-item">
    <div class="authors">147. Ashfaq, M., <span class="highlight-author">Haider, M.S.</span>, Khan, A.S., Ali, M., Ali, A. and Mubashar, U. (2014). Breeding for micronutrient improvements in rice (Oryza sativa L.) for better human health. <span class="journal-name">Journal of Food, Agriculture & Environment</span>, 12(2): 365-369. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">148. Ali, S., Nadeem, M.A., <span class="highlight-author">Haider, M.S.</span>, Anees, M., Khan, H.A.A. and Shahbaz, M. (2014). The relative performance of weed control practices in September sown maize (Zea mays L.). <span class="journal-name">Mycopath</span>, 12(1): 43-51. <span class="category">(National)</span></div>
</div>

<div class="publication-item">
    <div class="authors">149. Manzoor, M.T., Ilyas, M., Shafiq, M., <span class="highlight-author">Haider, M.S.</span> and Briddon, R.W. (2014). A distinct strain of chickpea chlorotic dwarf virus (genus Mastrevirus, family Geminiviridae) identified in cotton plants affected by leaf curl disease. <span class="journal-name">Arch. Virol.</span>, 159(5): 1217-1221 <span class="impact-factor">(Impact factor: 2.390)</span></div>
</div>

<div class="publication-item">
    <div class="authors">150. Javed, M.A., Huyop, F.Z., Ishii, T.A., ABD A.ST., <span class="highlight-author">Haider, M.S.</span> and Saleem, M. (2013). Construction of Microsatellite Linkage Map and detection of segregation distortion in Indica rice (Oryza sativa L.). <span class="journal-name">Pakistan Journal of Botany</span>, 45(6): 2085-2092. <span class="impact-factor">(Impact Factor: 0.690)</span></div>
</div>

<div class="publication-item">
    <div class="authors">151. Zia-ur-Rehman, M., Herrmann, H.W., Hameed, U., <span class="highlight-author">Haider, M.S.</span> and Brown, J.K. (2013). First detection of cotton leaf curl Burewala virus and cognate cotton leaf curl Multan batasatellite and Gossypium darwinii symptomless alphasatellite in symptomatic Luffa cylindrical in Pakistan. <span class="journal-name">Plant Disease</span>, 97(8): 1122-1122. http://dx.doi.org/10.1094/PDIS-12-12-1159-PDN. <span class="impact-factor">(Impact Factor = 2.742)</span></div>
</div>

<div class="publication-item">
    <div class="authors">152. Bashir, M.F., <span class="highlight-author">Haider, M.S.</span>, Rashid, N. and Riaz, S. (2013). Core gene expression and association of genotypes with viral load in HCV infected patients of Punjab, Pakistan. <span class="journal-name">Trop. J. Pharm. Res.</span>, 12(3): 335-341 <span class="impact-factor">(Impact factor: 0.495)</span></div>
</div>

<div class="publication-item">
    <div class="authors">153. Bashir, M.F., <span class="highlight-author">Haider, M.S.</span>, Rashid, N. and Riaz, S. (2013). Association of biochemical markers, hepatitis C virus and diabetes mellitus in Pakistani males. <span class="journal-name">Trop. J. Pharm. Res.</span>, 12(5): 845-850 <span class="impact-factor">(Impact factor: 0.495)</span></div>
</div>

<div class="publication-item">
    <div class="authors">154. Ali, A., <span class="highlight-author">Haider, M.S.</span> and Ashfaq, M. (2013). Biological control of fruit lesions caused by Xanthomonas campestris pathovars from Cuscuta pedicellata Ledeb. in vitro. <span class="journal-name">Journal of Pure and Applied Microbiology</span>, 7(4): 3149-3153. <span class="impact-factor">(Impact Factor = 0.073)</span></div>
</div>

<div class="publication-item">
    <div class="authors">155. Akhtar, N., Ali, A., Bashir, U. and <span class="highlight-author">Haider, M.S.</span> (2013). Morphological and biochemical studies on bacterial microfauna from Lahore soils. <span class="journal-name">Pakistan Journal of Phytopathology</span>, 25(02): 137-140. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">156. Anwar, W., Shafiq, M., <span class="highlight-author">Haider, M.S.</span>, Bibi, A. and Khan, S.N. (2013). First report of Cochliobolus australiensis causing leaf spot of Bermudagrass in Pakistan. <span class="journal-name">Journal of Plant Pathology</span>, 95(2): 448 <span class="impact-factor">(Impact Factor 0.768)</span></div>
</div>

<div class="publication-item">
    <div class="authors">157. Ilyas, M., Nawaz, K., Shafiq, M., <span class="highlight-author">Haider, M.S.</span> and Shahid, A.A. (2013) Complete nucleotide sequence of two begomoviruses infecting Madagascarp periwincle (Catharanthus roseus) from Pakistan. <span class="journal-name">Archives of Virology</span>, 158: 505-510 <span class="impact-factor">(Impact Factor 2.282)</span></div>
</div>
<div class="publication-item">
    <div class="authors">158. Ashfaq, M., Ali, A., Siddique, S., <span class="highlight-author">Haider, M.S.</span>, Ali, M., Hussain, S.B., Mubashar, U. and Khan, A.U.A. (2013). In-vitro antibacterial activity of Parthenium hysterophorus against isolated bacterial species from discolored rice grains. <span class="journal-name">International Journal of Agriculture & Biology</span>, 15(6): 1119–1125. <span class="impact-factor">(Impact Factor = 0.902)</span></div>
</div>

<div class="publication-item">
    <div class="authors">159. Ali, A., <span class="highlight-author">Haider, M.S.</span> and Hanif, S. (2013). Bio-control assays of plant pathogenic bacteria with different solvents of Datura alba Nees. <span class="journal-name">Pak. J. Weed Sci. Res.</span>, 19(3): 295-303. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">160. Ashfaq, M., <span class="highlight-author">Haider, M.S.</span>, Khan, A.S. and Allah, S.U. (2013). Heterosis studies for various morphological traits of basmati rice germplasm under water stress conditions. <span class="journal-name">Journal of Animal & Plant Sciences</span>, 23(4): 1131-1139 <span class="impact-factor">(Impact Factor 0.549)</span></div>
</div>

<div class="publication-item">
    <div class="authors">161. Ali, S.W., Yu, F.B., <span class="highlight-author">Haider, M.S.</span>, Yan, X. and Li, S.P. (2013). Phenotypic and phylogenetic characterization of an abamectin-degrading bacterial strain isolated from a citrus orchard. <span class="journal-name">J. Gen. Appl. Microbiol.</span>, 59: 215‒225. <span class="impact-factor">(Impact Factor 0.598)</span></div>
</div>

<div class="publication-item">
    <div class="authors">162. Iftikhar, S., Shahid, A.A., Javed, S., Nasir, I.A., Tabassum, B. and <span class="highlight-author">Haider, M.S.</span> (2013). Essential oils and lattices as novel antiviral agent against potato leaf roll virus and analysis of their phytochemical constituents responsible for antiviral activity. <span class="journal-name">Journal of Agricultural Science</span>, 5(7): 167-187. <span class="impact-factor">(Impact Factor 2.891)</span></div>
</div>

<div class="publication-item">
    <div class="authors">163. Ashraf, M.A., Shahid, A.A., Mohamed, B.B., Dahab, A.A., Bajwa, K.S., Rao, A.Q., Khan, M.A.U., Ilyas, M., <span class="highlight-author">Haider, M.S.</span> and Husnain, T. (2013). Molecular characterization and phylogenetic analysis of a variant of highly infectious cotton leaf curl Burewala virus associated with CLCuD from Pakistan. <span class="journal-name">Australian Journal of Crop Science</span>, 7(8): 1113-1122. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">164. Ali, A., <span class="highlight-author">Haider, M.S.</span>, Hanif, S., Akhtar, N. and Ashfaq, M. (2013). Bio-control of bacterial species isolated from diseased citrus fruits by methanolic extracts of weeds in vitro. <span class="journal-name">European Journal of Experimental Biology</span>, 3(1): 1-9. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">165. Khokhar, I., <span class="highlight-author">Haider, M.S.</span>, Ashfaq, M., Mukhtar, I., Ali, A. and Mushtaq, S. (2013). Effect of Penicillium species culture filtrate on seedling growth of wheat. <span class="journal-name">International Research Journal of Agricultural Science and Soil Science</span>, 3(1): 24-29. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">166. <span class="highlight-author">Haider, M.S.</span>, Hussain, Z., Qureshi Z.U.A, Andr´es Velasco-Villa, Afzal, S. and Xiang, W.U. (2012). Development of Genetically Recombinant Rabies Vaccine. Published in Abstract Book of <span class="journal-name">Journal of Antivirals and Antiretrovirals</span>, 4(4): 37. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">167. Hussain, Z., <span class="highlight-author">Haider, M.S.</span>, Zafar Ul Ehsan Qureshi, Andres Velasco-Villa, Shahida Afzaal and Xianfu Wu (2012). Efficacy Test in Mice of Two Novel Rabies Vaccine Candidates Using a Pakistan Rabies Virus Glycoprotein Gene. <span class="journal-name">J. Antivir. Antiretrovir.</span>, S15: 1-4. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">168. Mukhtar, I., Mushtaq, S., <span class="highlight-author">Haider, M.S.</span> and Khokar, I. (2012). Comparative analysis of autotoxicity in different weeds. <span class="journal-name">Pakistan Journal Phytopathology</span>, 24(2): 85-89 <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">169. Ibrahim, A., Shahid, A.A., Shafiq, M. and <span class="highlight-author">Haider, M.S.</span> (2012). Management of root-knot nematodes on the turnip plant (Brassica rapa) by using fungus (Trichoderma harzianum) and neem (Azadirachta indica) and effect on the growth rate. <span class="journal-name">Pakistan Journal of Phytopathology</span>, 24(2): 101-105. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">170. Hina, S., Javed, A., <span class="highlight-author">Haider, M.S.</span> and Saleem, M. (2012) Isolation and sequence analyses of cotton infecting begomoviruses. <span class="journal-name">Pakistan Journal of Botany</span> (special issue March 2012), 44: 223-230. <span class="impact-factor">(Impact Factor 0.872)</span></div>
</div>

<div class="publication-item">
    <div class="authors">171. Ali, A., <span class="highlight-author">Haider, M.S.</span>, Mushtaq, S., Khokhar, I., Mukhtar, I., Hanif, S. and Akhtar, N. (2012) In vitro, controlling the establishment of Xanthomonas campestris with different bacterial bioagents. <span class="journal-name">Global Bangladesh Journal of Microbiology</span>, 1(8): 135-139. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">172. Bashir, M.F., <span class="highlight-author">Haider, M.S.</span>, Rashid, N. and Riaz, S. (2012). Distribution of Hepatitis C virus (HCV) genotypes in different remote cities of Pakistan. <span class="journal-name">African Journal of Microbiology Research</span>, 6(22): 4747-4751. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">173. Farooq, A.M., Nasir, I.A., Tabbusm, B., Tariq, M., Qamar, Z., Khan, M.A., Ahmad, N., <span class="highlight-author">Haider, M.S.</span>, Anwar, W., Javed, M.A. and Hussnain, T. (2012). Development and comparative studies of double cross tomato hybrids. <span class="journal-name">African Journal of Agricultural Research</span>, 7(37): 5259-5264. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">174. Jamal, A., Nasir, I.A., Tabbusm, B., Tariq, M., Farooq, A.M., Qamar, Z., Khan, M.A.., Ahmad, N., Shafiq, M., <span class="highlight-author">Haider, M.S.</span>, Javed, M.A. and Hussnain, T. (2012). Molecular characterization of capsid protein gene of potato virus X from Pakistan. <span class="journal-name">African Journal of Biotechnology</span>, 11(74): 13854-13857. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">175. Naeem, M., Ilyas, M., <span class="highlight-author">Haider, M.S.</span>, Baig, S. and Saleem, M. (2012) Isolation, Characterization and Identification of Lactic Acid bacteria from fruit juices and their Efficacy against Antibiotics. <span class="journal-name">Pak. J. of Botany</span> (special issue March 2012), 44: 323-328 <span class="impact-factor">(Impact Factor 0.872)</span></div>
</div>

<div class="publication-item">
    <div class="authors">176. Khokhar, I., <span class="highlight-author">Haider, M.S.</span>, Mushtaq, S. and Mukhtar, I. (2012). Isolation and Screening of Highly Cellulolytic Filamentous Fungi. <span class="journal-name">J. Appl. Sci. Environ. Manage.</span>, 16(3): 223-226. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">177. Mushtaq, S., <span class="highlight-author">Haider, M.S.</span>, Ali, A., Javed, S., Khokhar, I. and Mukhtar, I. (2012). In vitro comparative screening of antibacterial and antiful activity of some common weed extracts. <span class="journal-name">Pakistan journal of Weed Science Research</span>, 18(1): 15-25. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">178. Mukhtar, I., Khokhar, I., <span class="highlight-author">Haider, M.S.</span> and Mushtaq, S. (2012). New record of Ramularia leaf spot on Aristolochia punjabensis L. in Pakistan. <span class="journal-name">African Journal of Microbiology Research</span>, 6(30): 6013-6015. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">179. Ashfaq, M., <span class="highlight-author">Haider, M.S.</span>, Khan, A.S and Ullah, S. (2012). Breeding potential of the basmati rice germplasm under water stress condition. <span class="journal-name">African Journal of Biotechnology</span>, 11(25): 6647-6657. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">180. Anwar, W., Khan, S.N. and <span class="highlight-author">Haider, M.S.</span> (2012). Occurrence of Insect associated Fungi in Hot Arid Zone, Pakistan. <span class="journal-name">African Journal of Microbiology Research</span>, 6(41): <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">181. Khokhar, I. <span class="highlight-author">Haider, M.S.</span>, Mukhtar, I. and Mushtaq, S. (2012). Biological Control of Aspergillus niger- the cause of Black-rot disease of Allium cepa (onion) by Penicillium species. <span class="journal-name">Journal of Agrobiology</span>, 29(1): 23–28. <span class="international">(International)</span></div>
</div>
<div class="publication-item">
    <div class="authors">182. Javed, S., Shahid, A.A., <span class="highlight-author">Haider, M.S</span>, Umeera, A., Ahmad, R. and Mushtaq, S. (2012). Nutritional, Phytochemical Potential & pharmacological evaluation of Nigella sativa (Kalonji) & Trachyspermum ammi (Ajwain). <span class="journal-name">J. Med. Plants Res.</span>, 6(5): 768-775. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">183. Javed, S., Mushtaq, S., Khokhar, I., Ahmad, R. and <span class="highlight-author">Haider, M.S.</span> (2012). Comparative antimicrobial activity of clove & fennel essential oils against food borne pathogenic fungi and food spoilage bacteria. <span class="journal-name">African Journal of Biotechnology</span>, 11(94): 16065-16070. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">184. Ashfaq, M., Khan, A.S. and <span class="highlight-author">Haider, M.S.</span> (2012). Genetic variation of rice genotypes on the basis of root seedling trait by using single SSR marker under water stress condition. <span class="journal-name">European Journal of Scientific Research</span>, 87(2): 267-277. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">185. <span class="highlight-author">Haider, M.S.</span>, Afghan, S., Riaz, H., Javed, M.A., Tahir, M., Rashid, N. and Iqbal, J. (2011). Identification of two sugarcane mosaic virus (SCMV) variants from naturally infected sugarcane crop in Pakistan. <span class="journal-name">Pak. J. Bot.</span>, 43(2): 1157-1162 <span class="impact-factor">(Impact Factor 0.907)</span></div>
</div>

<div class="publication-item">
    <div class="authors">186. Shakoor, S., Chohan, S., Riaz, A., Perveen, R., Naz, S., Mehmood, M.A., <span class="highlight-author">Haider, M.S.</span> and Ahmad, S. (2011). Screening of systemic fungicides and biochemicals against seed borne mycoflora associated with Momordica charantia. <span class="journal-name">African Journal of Biotechnology</span>, 10(36): 6933-6940 <span class="impact-factor">(Impact Factor: 0.049)</span></div>
</div>

<div class="publication-item">
    <div class="authors">187. Ali, A., <span class="highlight-author">Haider, M.S.</span>, Khokhar, I., Bashir, U., Mushtaq, S. And Mukhtar, I. (2011). Antibacterial activity of cultural extract of Penicillum species against some soil borne bacteria. <span class="journal-name">Mycopath</span>, 9(1): 17-20. <span class="category">(National)</span></div>
</div>

<div class="publication-item">
    <div class="authors">188. <span class="highlight-author">Haider, M.S.</span> and Shafiq, M. (2011). Cotton leaf curl disease, a potential threat to Pakistan Cotton. <span class="journal-name">The Agricultural News</span>, 1: 1. <span class="category">(National)</span></div>
</div>

<div class="publication-item">
    <div class="authors">189. Sobia, M., <span class="highlight-author">Haider, M.S.</span>, Mukhtar, I. and Khokhar, I. (2011). Species of Deuteromycetes (fungi imperfect) present at residential houses in Railway Colony Lahore, Pakistan. <span class="journal-name">Pak. J. of Phytopath.</span>, 23(2): 118-124. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">190. Khokhar, I., <span class="highlight-author">Haider, M.S.</span>, Ali, A., Mukhtar, I. and Mushtaq, S. (2011) Evaluation of antagonistic activity of soil bacteria against plant pathogenic fungi. <span class="journal-name">Pak. J. of Phytopath.</span>, 23(2): 166-169. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">191. Tahir, M., <span class="highlight-author">Haider, M.S.</span> and Briddon, R.W. (2010). Chili leaf curl betasatellite is associated with a distinct recombinant begomovirus, Pepper leaf curl Lahore virus, in Capsicum in Pakistan. <span class="journal-name">Virus Research</span>, 149(1): 109-114. <span class="impact-factor">(Impact Factor, 2.905)</span></div>
</div>

<div class="publication-item">
    <div class="authors">192. Tahir, M., <span class="highlight-author">Haider, M.S.</span> and Briddon, R.W. (2010). First report of Squash leaf curl China virus in Pakistan. <span class="journal-name">Australasian Plant Disease Notes</span>, 5: 21-24. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">193. Tahir, M., <span class="highlight-author">Haider, M.S.</span> and Briddon, R.W. (2010). Complete nucleotide sequences of a distinct bipartite begomovirus, bitter gourd yellow vein virus infecting Momordica charantia. <span class="journal-name">Archives of Virology</span> 155: 1901-1905. <span class="impact-factor">(Impact Factor, 2.209)</span></div>
</div>

<div class="publication-item">
    <div class="authors">194. Rashid, N., Ahmed, N., <span class="highlight-author">Haider, M.S.</span> and Haq, I. (2010). Effective Solublization and Single-Step Purification of Bacillus licheniformis α-Amylase from Insoluble Aggregates. <span class="journal-name">Folia Microbiol.</span>, 55(2): 133-136 <span class="impact-factor">(Impact Factor, 0.977)</span></div>
</div>

<div class="publication-item">
    <div class="authors">195. Parveen, R., Fani, I., Islam, N., <span class="highlight-author">Haider, M.S.</span>, Chohan, S. and Rehman, A. (2010). Correlation of Biweekly Environmental Conditions on CLCuV Disease Growth in Pakistan. <span class="journal-name">European Journal of Scientific Research</span>, 42(4): 614-621. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">196. Parveen, R., Fani, I., Chohan, S., <span class="highlight-author">Haider, M.S.</span> and Naz, S. (2010). Effect of Nitrogen and Carbon from different organic supplements on pathogenic potential of phytophthora capsici, in the collar rot of chillies. <span class="journal-name">European Journal of Scientific Research</span>, 43(1): 107-112. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">197. Rasool, N., Rashid, N., Javed, M.A. and <span class="highlight-author">Haider, M.S.</span> (2010). Requirement of Pro-peptide in proper folding of subtilisin-like Serine protease TK0076. <span class="journal-name">Pak. J. Bot.</span>, 43(4): 2059-2065 <span class="impact-factor">(Impact Factor 0.947)</span></div>
</div>

<div class="publication-item">
    <div class="authors">198. Rashid, N., Siddiqui, M.A., <span class="highlight-author">Haider, M.S.</span> and Javed, M.A. (2010). Crystallization of Fructose 1,6-bisphosphatase from the Hyperthermophilic Archaeon Thermococcus kodakaraensis. <span class="journal-name">Pakistan Journal of Botany</span>, 42(4): 2313-2316. <span class="impact-factor">(Impact Factor 0.947)</span></div>
</div>

<div class="publication-item">
    <div class="authors">199. Parveen R., Fani I., Rasheed I., Chohan S., Rehman A. and <span class="highlight-author">Haider M.S.</span> (2010). Identification of Cotton leaf curl begomovirus in Pakistan in different Symptomatic and Asymptomatic Plants through Enzyme-linked Immunosorbent Assay (ELISA). <span class="journal-name">European Journal of Social Sciences</span>, 14(4): 502-507. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">200. Ahmad, I., Nasir, I.A., <span class="highlight-author">Haider, M.S.</span>, Javed, M.A., Javed, M.A., Latif, Z. and Husnain, T. (2010). In vitro induction of Mutation in Potato Cultivars. <span class="journal-name">Pakistan Journal of Phytopathology</span>, 22(1): 51-57. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">201. Perveen, R., Khan, M.A., Islam, N., <span class="highlight-author">Haider, M.S.</span> and Nasir, I.A. (2010). Whitefly population on different cotton varieties in Punjab. <span class="journal-name">Sarhad Journal of Agriculture</span>, 26(4): 583-589. <span class="category">(HEC X Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">202. Nasir, I.A., Tabbasum, B., Latif, Z., Javed, M.A., <span class="highlight-author">Haider, M.S.</span>, Javed, M.A. and Husnain, T. (2010). Strategies to control Potato Virus Y under In-Vitro conditions. <span class="journal-name">Pakistan Journal of Phytopathology</span>, 22(1): 63-70. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">203. Tahir, M., <span class="highlight-author">Haider, M.S.</span>, Iqbal. J. and Briddon, R.W. (2009). Association of a distinct begomovirus and a betasatellite with leaf curl disease of Pedilanthus tithymaloides. <span class="journal-name">Journal of Phytopathology</span>, 157(3): 188-193 <span class="impact-factor">(Impact Factor 0.974)</span></div>
</div>

<div class="publication-item">
    <div class="authors">204. Shah, A.H., Rashid, N., <span class="highlight-author">Haider, M.S.</span> Saleem, F., Tahir, M and Iqbal J. (2009). An efficient, short and cost effective regeneration system for transformation studies of sugarcane (Saccharum officinarum L.). <span class="journal-name">Pak. J. of Botany</span>, 41(2): 609-614. <span class="impact-factor">(Impact Factor 0.520)</span></div>
</div>

<div class="publication-item">
    <div class="authors">205. <span class="highlight-author">Haider, M.S.</span> Tahir, M, Saeed, A., Ahmed, S., Parveen, R and Rashid, N. (2008). First report of a begomovirus infecting the ornamental plant Vinca minor L. <span class="journal-name">Australasian Plant Disease Notes</span>, 3: 150-151. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">206. <span class="highlight-author">Haider, M.S.</span>, Tahir, M., Evans, A.A.F. and Markham, P.G. (2007). Coat protein gene sequence analysis of three begomovirus isolates from Pakistan and their affinities with other begomoviruses. <span class="journal-name">Pakistan Journal of Zoology</span>, 39(3): 165-170. <span class="impact-factor">(Impact factor 0.105)</span></div>
</div>

<div class="publication-item">
    <div class="authors">207. Tahir, M., <span class="highlight-author">Haider, M.S.</span>, Shah, A. H., Rashid, N., and Saleem, F. (2006). First report of a bipartite begomovirus associated with leaf curl disease of Duranta repens in Pakistan. <span class="journal-name">Journal of Plant Pathology</span>, 88(3): 339. <span class="impact-factor">(Impact Factor 0.783)</span></div>
</div>

<div class="publication-item">
    <div class="authors">208. <span class="highlight-author">Haider, M.S.</span>, Tahir, M., Latif, S. and Briddon, R.W. (2006). First report of Tomato leaf curl New Delhi virus infecting Eclipta prostrata in Pakistan. <span class="journal-name">New Disease Reports</span>, (http://www.bspp.org.uk/ndr/) volume 11, Plant Pathology, 55(2): 285. <span class="impact-factor">(Impact Factor 2.198)</span></div>
</div>

<div class="publication-item">
    <div class="authors">209. Rashid, N., Shah, A.H., <span class="highlight-author">Haider, M.S.</span> and Iqbal, J. (2006). Thermostable cyclodextrin Glucanotransferses. <span class="journal-name">Pak. J. of Scientific and Industrial Research</span>, 49(1): 68-74. <span class="category">(National)</span></div>
</div>

<div class="publication-item">
    <div class="authors">210. Tahir, M. and <span class="highlight-author">Haider, M.S.</span> (2006). First report of a begomovirus associated with leaf curl disease of bell pepper in Pakistan. <span class="journal-name">New Disease Reports</span> (http://www.bspp.org.uk/ndr/) volume 12, Plant Pathology, 55(4): 570. <span class="impact-factor">(Impact Factor 2.198)</span></div>
</div>

<div class="publication-item">
    <div class="authors">211. Tahir, M. and <span class="highlight-author">Haider, M.S.</span> (2005). First report of Tomato leaf curl New Delhi virus infecting Bitter Gourd in Pakistan. <span class="journal-name">New Disease Reports</span> (http://www.bspp.org.uk/ndr/) volume 10, Plant Pathology 54: 807. <span class="impact-factor">(Impact Factor 2.198)</span></div>
</div>

<div class="publication-item">
    <div class="authors">212. Afghan, S, <span class="highlight-author">Haider, M.S.</span>, Shah, A.H., Rashid, N., Iqbal, J., Tahir M. and Akhtar, M. (2005). Detection of genetic diversity among sugarcane (Saccharum sp.) genotypes using Random Amplified Polymorphic DNA markers. <span class="journal-name">Sugar Cane International Journal</span>, 23(6): 17-21. <span class="international">(International)</span></div>
</div>

<div class="publication-item">
    <div class="authors">213. <span class="highlight-author">Haider, M.S.</span>, Liu, S., Ahmed, W., Evans, A.A.F. and Markham, P.G. (2005). Detection and relationship among begomoviruses from five different host plants, based on ELISA and Western Blot analysis. <span class="journal-name">Pak. J. of Zool.</span>, 37(1): 69-74 <span class="impact-factor">(Impact Factor: 0.046)</span></div>
</div>

<div class="publication-item">
    <div class="authors">214. <span class="highlight-author">Haider, M.S.</span>, Tahir, M. and Markham, P.G. (2004). Begomovirus transmission by mechanical inoculation, grafting, determination of host range and symptomatology. <span class="journal-name">Mycopath</span>, 2(2): 95-100. <span class="category">(National)</span></div>
</div>

<div class="publication-item">
    <div class="authors">215. <span class="highlight-author">Haider, M.S.</span>, Muneer, B., Evans A.A.F. and Markham P.G. (2003). Dot blot hybridisation and PCR based detection of begomoviruses from the cotton growing regions of Punjab, Pakistan. <span class="journal-name">Mycopath</span>, 1(2): 195-203. <span class="category">(National)</span></div>
</div>

<div class="publication-item">
    <div class="authors">216. <span class="highlight-author">Haider, M.S.</span>, Bedford, I.D., Evans, A.A.F. and Markham, P.G. (2003). Geminivirus transmission by different biotypes of the whitefly Bemisia tabaci (Gennadius). <span class="journal-name">Pak. J. of Zool.</span>, 35(4): 343-351 <span class="impact-factor">(Impact Factor: 0.046)</span></div>
</div>

<div class="publication-item">
    <div class="authors">217. <span class="highlight-author">Haider, M.S.</span>, Ahmed, W., Evans, A.A.F. and Markham, P.G. (2002). Purification of whitefly-transmitted geminiviruses from fields of the Punjab, Pakistan. <span class="journal-name">Pak. J. of Phytopath.</span>, 14(2): 99-104. <span class="category">(HEC Y Category)</span></div>
</div>

<div class="publication-item">
    <div class="authors">218. <span class="highlight-author">Haider, M.S.</span>, Nadeem, A., Evans, A.A.F. and Markham, P.G. (2001). Serological relationships of whitefly-transmitted geminiviruses in and around the cotton fields in Punjab, Pakistan. <span class="journal-name">Phytopath.</span>, 91: S35 Pb. No. P- 2001-0251AMA. <span class="impact-factor">(Impact Factor 2.22)</span></div>
</div>

<div class="publication-item">
    <div class="authors">219. Liu, S., Pinner, M., <span class="highlight-author">Haider, M.S.</span> and Markham, P.G. (1995). In vitro expression of geminivirus coat proteins and the use of expressed fusion proteins for producing antisera. <span class="journal-name">European J. of Plant. Path.</span> p0636. <span class="impact-factor">(Impact Factor 1.931)</span></div>
</div>










<div class="publication-item">
    <div class="authors">1. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> participated and chaired 17th National Weed Science Conference at Faculty of Agricultural Sciences, University of the Punjab Lahore. (27-28th of October, 2022)</div>
</div>
<div class="publication-item">
    <div class="authors">2. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> participated in Cotton Conference, at CEMB, University of the Punjab Lahore. (22nd of March, 2022)</div>
</div>
<div class="publication-item">
    <div class="authors">3. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> attended World Food day event at Faisal Auditorium by Department of Food Sciences & IER, University of the Punjab Lahore. (14th of October, 2022)</div>
</div>
<div class="publication-item">
    <div class="authors">4. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> chaired International symposium on Climate smart sustainable Rice-Wheat production system. Faculty of Agricultural Sciences, University of the Punjab Lahore (11th of August 2022)</div>
</div>
<div class="publication-item">
    <div class="authors">5. <span class="highlight-author">Muhammad Saleem Haider</span> (2020). Three-day International Horticulture Conference 2020, February 26-28, 2020 at IAGS</div>
</div>
<div class="publication-item">
    <div class="authors">6. <span class="highlight-author">Muhammad Saleem Haider</span> (2019). Organized two-days International Symposium 2019. "Halal Accreditation: Adding Value of Lifestyle & Economic Success", at IAGS on 23-24 october</div>
</div>
<div class="publication-item">
    <div class="authors">7. <span class="highlight-author">Muhammad Saleem Haider</span> (2019). Organized 3-days International Conference on "Pharmaceutical and Biological Sciences (IC-PBS-2019)", at IAGS, on 15-17 January, 2019</div>
</div>
<div class="publication-item">
    <div class="authors">8. <span class="highlight-author">Muhammad Saleem Haider</span> (2018). Seminar on "Climate Smart Agriculture: Building Resilience to Climate Change" at IAGS on 12.10.2018</div>
</div>
<div class="publication-item">
    <div class="authors">9. <span class="highlight-author">Muhammad Saleem Haider</span> (2018). Seminar on "WWF-Pak International Eco. Internship Program-2018", at IAGS on 11.10.2018</div>
</div>
<div class="publication-item">
    <div class="authors">10. <span class="highlight-author">Muhammad Saleem Haider</span> (2018). Seminar on "Burning crop residue in Punjab, Pakistan, can farmers do better for the environment" at IAGS on 02.10.2018</div>
</div>
<div class="publication-item">
    <div class="authors">11. <span class="highlight-author">Muhammad Saleem Haider</span> (2018). Seminar on "3rd Kitchen Gardening and Seed Distribution", at IAGS on 27.09.2018</div>
</div>
<div class="publication-item">
    <div class="authors">12. <span class="highlight-author">Muhammad Saleem Haider</span> (2018). Seminar on "Significance of bioinformatics in biological sciences", held at IAGS on 10.09.2018</div>
</div>
<div class="publication-item">
    <div class="authors">13. <span class="highlight-author">Muhammad Saleem Haider</span> (2018). One-day International seminar on "An overview of food safety & nutrition policies in the western world: An opportunity for Pakistan to benefit from the experience", held at IAGS on 04.08.2018</div>
</div>
<div class="publication-item">
    <div class="authors">14. <span class="highlight-author">Muhammad Saleem Haider</span> (2018). Organized one-day National Seminar on "Looming Water Crisis in Pakistan, Impact & Solution" at LCCI on 12.07.2018</div>
</div>
<div class="publication-item">
    <div class="authors">15. <span class="highlight-author">Muhammad Saleem Haider</span> (2018). Organized a national seminar on "Future Outlook & Challenges for the Sustainable Management of Insect Pests: Progress & Prospects" at IAGS on 02.05.2018</div>
</div>
<div class="publication-item">
    <div class="authors">16. <span class="highlight-author">Muhammad Saleem Haider</span> (2018). Organized one-day training on "Current Trends in Halal Food Safety Assurance (Issues/Challenges)" in collaboration with different organizations like Halal Food & Minhaj University, at IAGS on 26.04.2018</div>
</div>
<div class="publication-item">
    <div class="authors">17. <span class="highlight-author">Muhammad Saleem Haider</span> (2018). Organized an International Seminar on "Resource Conservation for Sustainable Agriculture and Food Security" at IAGS on 19.04.2018</div>
</div>
<div class="publication-item">
    <div class="authors">18. <span class="highlight-author">Muhammad Saleem Haider</span> (2018). International seminar on "Consequences of Indus Water Treaty on Pakistani Agriculture", held at IAGS on 09.04.2018</div>
</div>
<div class="publication-item">
    <div class="authors">19. <span class="highlight-author">Muhammad Saleem Haider</span> (2018). Organized an International Seminar on "Floriculture Industry and Business Opportunities in Pakistan" at IAGS on 06.04.2018</div>
</div>
<div class="publication-item">
    <div class="authors">20. <span class="highlight-author">Muhammad Saleem Haider</span> (2018). Organized one-day 3-D Designing Workshop on "e-Garden" at IAGS on 08.02.2018</div>
</div>
<div class="publication-item">
    <div class="authors">21. <span class="highlight-author">Muhammad Saleem Haider</span> (2018). Organized a seminar on "Pest (Termites) Control in Food Processing Industries" at IAGS on 31.01.2018</div>
</div>
<div class="publication-item">
    <div class="authors">22. <span class="highlight-author">Muhammad Saleem Haider</span> (2017). Organized a seminar on "Peace Activities" at IAGS on 11.12.2017</div>
</div>
<div class="publication-item">
    <div class="authors">23. <span class="highlight-author">Muhammad Saleem Haider</span> (2017). Organized a seminar on "Climate Change" at IAGS, on 23.11.2017</div>
</div>
<div class="publication-item">
    <div class="authors">24. <span class="highlight-author">Muhammad Saleem Haider</span> (2017). Organized a one-day 3-D Designing Workshop on "e-Garden" at IAGS on 08.02.2018</div>
</div>
<div class="publication-item">
    <div class="authors">25. <span class="highlight-author">Muhammad Saleem Haider</span> (2017). Organized a one-day international seminar on "Pest (Termites) Control in Food Processing Industries" in collaboration with C-Shine Group, Pakistan on 31.01.2018</div>
</div>
<div class="publication-item">
    <div class="authors">26. <span class="highlight-author">Muhammad Saleem Haider</span> (2017). Organized 'Inspiring the Future' Training with students on Peace Promotion in collaboration with Centre for Health and Gender Equality (CHANGE), at IAGS on 26-27 October, 2017</div>
</div>
<div class="publication-item">
    <div class="authors">27. <span class="highlight-author">Muhammad Saleem Haider</span> (2017). Organized a seminar on "Kitchen Gardening and Seed Distribution" on 21st September 2017 at IAGS</div>
</div>
<div class="publication-item">
    <div class="authors">28. <span class="highlight-author">Muhammad Saleem Haider</span> (2017). Organized an International seminar on "Prospects of Agricultural Research (Current & Future)" on 23rd August 2017 at IAGS</div>
</div>
<div class="publication-item">
    <div class="authors">29. <span class="highlight-author">Muhammad Saleem Haider</span> (2017). Organized International Seminar on "Global Halal Industry: Opportunities and Challenges", at IAGS, on 29.03.2017</div>
</div>
<div class="publication-item">
    <div class="authors">30. <span class="highlight-author">Muhammad Saleem Haider</span> (2016). Organized a seminar on 8th December 2016 at IAGS on "Adhoori Daastan" delivered by Mr. Abid Iqbal Khari</div>
</div>
<div class="publication-item">
    <div class="authors">31. <span class="highlight-author">Muhammad Saleem Haider</span> (2016). Organized a seminar on "Study Abroad" in collaboration with AGOG International (Pvt.) Ltd on 1st December 2016</div>
</div>
<div class="publication-item">
    <div class="authors">32. <span class="highlight-author">Muhammad Saleem Haider</span> (2016). A Campaign/Seminar on "Importance of Certified Seeds" was organized at IAGS in collaboration with ICS on Thursday, 22nd September 2016</div>
</div>
<div class="publication-item">
    <div class="authors">33. <span class="highlight-author">Muhammad Saleem Haider</span> (2016). Organized two-day International Conference on "Significance of Potash Use in Pakistani Agriculture" at the IAGS, on October 4-5, 2016</div>
</div>
<div class="publication-item">
    <div class="authors">34. <span class="highlight-author">Muhammad Saleem Haider</span> (2016). A seminar on "Overseas Scholarship Opportunities and How to Write Motivational Letter" was organized at IAGS, delivered by Shah Faisal Naeem, Winner of Frasma Scholarship on 24.05.2016</div>
</div>
<div class="publication-item">
    <div class="authors">35. <span class="highlight-author">Muhammad Saleem Haider</span> (2016). A seminar on "Anti-Dengue Day" was organized at IAGS, delivered by Dr. Shahbaz Ahmad (Entomologist) and Mr. Farman Ahmad Ch., Ph.D. Scholar, IAGS on 6th April 2016</div>
</div>
<div class="publication-item">
    <div class="authors">36. <span class="highlight-author">Muhammad Saleem Haider</span> (2016). A seminar on "Iqbal Aur Noujwan Nasal" on the eve of 78th Death Anniversary of Great Poet and Philosopher Dr. Allama Muhammad Iqbal was organized on 21st April 2016</div>
</div>
<div class="publication-item">
    <div class="authors">37. <span class="highlight-author">Muhammad Saleem Haider</span> (2016). Organized a seminar on "How to do productive internship?" delivered by Dr. Javed Aziz Awan on 23rd February 2016</div>
</div>
<div class="publication-item">
    <div class="authors">38. <span class="highlight-author">Muhammad Saleem Haider</span> (2016). Organized a seminar at IAGS on "Kashmir Issue" on 26th February 2016</div>
</div>
<div class="publication-item">
    <div class="authors">39. <span class="highlight-author">Muhammad Saleem Haider</span> (2016). Organized a seminar on "Landscape aspects of Lahore and needs of research in the field of Landscape", delivered by Mr. Mustafa Kamal, Director, Horti Group (Pvt.) Lahore on Tuesday, 9th February 2016</div>
</div>
<div class="publication-item">
    <div class="authors">40. <span class="highlight-author">Muhammad Saleem Haider</span> (2016). A seminar on "Post Harvest Technology", delivered by Dr. Chris Bishop, UK, was organized at IAGS, on 26th January 2016</div>
</div>
<div class="publication-item">
    <div class="authors">41. <span class="highlight-author">Muhammad Saleem Haider</span> (2015). Organized one-day workshop on "Dengue Management", on 21st December 2015 at IAGS</div>
</div>
<div class="publication-item">
    <div class="authors">42. <span class="highlight-author">Muhammad Saleem Haider</span> (2015). Organized 2-day Workshop on "Next Generation Sequencing" from 4th to 5th December 2015 at IAGS</div>
</div>
<div class="publication-item">
    <div class="authors">43. <span class="highlight-author">Muhammad Saleem Haider</span> (2015). Organized 5th International/10th National Conference of Pakistan Phytopathological Society on "Crop Protection for Sustainable Agriculture", from 23rd to 25th November 2015 at IAGS</div>
</div>
<div class="publication-item">
    <div class="authors">44. <span class="highlight-author">Muhammad Saleem Haider</span> (2015). Organized a Stall of Agricultural products and activities in the "Dawn Sarsabz Pakistan Agri Expo & Conference 2015, held from 19th to 20th March 2015 at Expo Centre, Johar Town, Lahore</div>
</div>
<div class="publication-item">
    <div class="authors">45. <span class="highlight-author">Muhammad Saleem Haider</span> (2014). Organized an awareness seminar on "Food Safety and Hygiene", on 13th November 2014 at IAGS</div>
</div>
<div class="publication-item">
    <div class="authors">46. <span class="highlight-author">Muhammad Saleem Haider</span> (2014). Organized an International Conference on "Stress Biology and Biotechnology: Challenges & Management", held from 21st to 23rd May 2014 at the Institute of Agricultural Sciences</div>
</div>
<div class="publication-item">
    <div class="authors">47. <span class="highlight-author">Muhammad Saleem Haider</span> (2013). Organized a seminar on "Policy Adequacy and Awareness on Agriculture Financing" in collaboration with State Bank of Pakistan, Agricultural Credit & Microfinance Department, Karachi, held on 3rd October 2013 at the IAGS</div>
</div>
<div class="publication-item">
    <div class="authors">48. <span class="highlight-author">Muhammad Saleem Haider</span> (2013). Organized 3-day training workshop on "Cotton Leaf Curl Disease (CLCuD) Diagnostics & Resistance" at the IAGS, from 26th to 28th August 2013, sponsored by USDA through ICARDA</div>
</div>
<div class="publication-item">
    <div class="authors">49. <span class="highlight-author">Muhammad Saleem Haider</span> (2013). 49.Organized “Invention to Innovation Summit 2013” from 9th to 10th April 2013 in collaboration with ORIC, University of the Punjab, Lahore.</div>
</div>
<div class="publication-item">
    <div class="authors">50. <span class="highlight-author">Muhammad Saleem Haider</span> (2013). Organized “Dawn Sarsabz Pakistan Agri Expo & Conference 2013 at Expo Centre, Johar Town, Lahore.</div>
</div>

<div class="publication-item">
    <div class="authors">1. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> was an Invited speaker (Oral Presentation) in First International Conference on Plant Protection (1stICPP-2022), Sultan Qaboos University, Muscat, Oman. (5-7 December, 2022)</div>
</div>
<div class="publication-item">
    <div class="authors">2. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> participated in the International Conference on "Recent Innovation in Molecular Sciences", held on November 6-8, 2019 in the University of the Punjab, Lahore</div>
</div>
<div class="publication-item">
    <div class="authors">3. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> participated and presented paper titled "Molecular characterization of okra enation leaf curl virus, a new member of cotton leaf curl disease complex infecting cotton in Pakistan" in '3rd ACSTM 2019 Conference, held on 12-14 February 2019 in Dubai, UAE. (Travel grant Rs.263,440/- awarded by the HEC)</div>
</div>
<div class="publication-item">
    <div class="authors">4. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> participated in Conference on Microbiology & Molecular Genetics, on 07.02.2018 organized by the Department of Microbiology & Molecular Genetics, P.U. Lahore</div>
</div>
<div class="publication-item">
    <div class="authors">5. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> attended GROW Festival & Launch of Climate Public Expenditure Review (CPER) on 13.12.2017 at College of Earth & Environmental Sciences (CEES), P.U., Lahore</div>
</div>
<div class="publication-item">
    <div class="authors">6. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> presented research paper entitled "Infectivity and host pathogen interaction study of chickpea chlorotic dwarf virus L strain isolated from cotton" in the 'International Virology Conference', held from 30th to 31st October, 2017 at Toronto, Canada. (sponsored by HEC with amount of Rs.270,000/-)</div>
</div>
<div class="publication-item">
    <div class="authors">7. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> attended Meeting of Canadian Psychopathological Society and the Canadian Society of Agronomy, held on 18-22 June 2017 at Manitoba, Canada (sponsored by the PU with an amount of Rs.300,000)</div>
</div>
<div class="publication-item">
    <div class="authors">8. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> attended National Seminar on "Recent Advances and Strategies for Management of Cotton Whitefly in Pakistan", held on 23rd February 2017 at AARI, Faisalabad</div>
</div>
<div class="publication-item">
    <div class="authors">9. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> attended International Conference on Biosciences & Medical Engineering (ICBME 2016) as Invited Speaker, held on 10-11 November 2016 at UTM Johor Bahru, Malaysia (sponsored by UTM, Malaysia)</div>
</div>
<div class="publication-item">
    <div class="authors">10. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> attended national level meeting on Cotton, held at Islamabad on 26.07.2016</div>
</div>
<div class="publication-item">
    <div class="authors">11. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> attended and presented paper titled "Molecular characterization and pathogenicity of Cucurbita pepo infecting new variant of tomato leaf curl palampur virus in Pakistan" in the 34th Annual Meeting of the ASV, held from 11-15 July 2015 at Western University, London, Ontario, Canada</div>
</div>
<div class="publication-item">
    <div class="authors">12. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> attended Plant & Animal Genome (PAG XXIII) Conference, held in San Diego, CA, USA, from 10th to 14th January, 2015 (sponsored by ICARDA, USDA with an amount of Rs.350,000)</div>
</div>
<div class="publication-item">
    <div class="authors">13. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> attended and presented paper on "Are we heading towards the third epidemic in cotton: Past, present and future consequences?" in the XIVth International Congress of Bacteriology and Applied Microbiology; XVIth International Congress of Mycology and Eukaryotic Microbiology; and XVth International Congress of Virology, held from 27th July to 1st August 2014 at Montreal, Canada (sponsored by PU with an amount of Rs.338,455)</div>
</div>
<div class="publication-item">
    <div class="authors">14. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> participated in 'World Mango Conference & Exhibition', held on 24-25 June 2014 at University College of Agriculture & Environmental Sciences, Islamia University, Bahawalpur</div>
</div>
<div class="publication-item">
    <div class="authors">15. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> attended a seminar on "Genomic-assisted plant breeding approaches – An emerging paradigm for crop improvement" delivered by Dr. Javed Iqbal, Centre of Excellence in Molecular Biology (CEMB) on 12th June 2014</div>
</div>
<div class="publication-item">
    <div class="authors">16. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> participated in the seminar on "Effect of global warming on agriculture" by Mr. Haroon Akram Gill, Climate Leader, Climate Reality Project, USA, held on Thursday, 29th May 2014 in the IAGS</div>
</div>
<div class="publication-item">
    <div class="authors">17. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> attended a training workshop on "Self esteem & fear of failure" organized by the Career Counseling & Placement Centre, University of the Punjab, held on 15.05.2014 at IAGS</div>
</div>
<div class="publication-item">
    <div class="authors">18. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> participated in International Conference of Pakistan Phytopathological Society "Climate Change and Plant Diseases: Challenges and Opportunities", held from 23-25 January, 2014 at University of Karachi, Karachi</div>
</div>
<div class="publication-item">
    <div class="authors">19. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> co-authored: Rehman, Z.U., Hammed, U., Haider, M.S., Herrmann, H.W. and Brown, J.K. (2013). Cotton leaf curl virus invading new hosts in Pakistan. Abstract – published in 7th International Geminivirus Symposium & 5th International ssDNA Comparative Virology Workshop, held from 3-9 November 2013 at Hangzhou, China, pp.41</div>
</div>
<div class="publication-item">
    <div class="authors">20. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> co-authored: Haider, M.S., Qureshi, F., Ilyas, M. and Shafiq, M. (2013). Characterization of begomovirus isolated from a weed Sonchus oleraceus (Sowthistle) from Pakistan. Abstract – published in 7th International Geminivirus Symposium & 5th International ssDNA Comparative Virology Workshop, held from 3-9 November 2013 at Hangzhou, China, pp.57</div>
</div>
<div class="publication-item">
    <div class="authors">21. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> co-authored: Tahir, M., Amin, I., Haider, M.S., Mansoor, S. and Briddon, R.W. (2013). Ageratum enation virus – a begomovirus of weeds with the potential to infect crops. Abstract – published in 7th International Geminivirus Symposium & 5th International ssDNA Comparative Virology Workshop, held from 3-9 November 2013 at Hangzhou, China, pp.68</div>
</div>
<div class="publication-item">
    <div class="authors">22. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> co-authored: Manzoor, M.T., Ilyas, M., Shafiq, M., Haider, M.S., Bibi, A. and Mushtaq, S. (2013). Infectivity analysis of strain F of chickpea chlorotic dwarf virus (mastrevirus) isolated from cotton in Nicotiana benthamiana plants. Abstract – published in 7th International Geminivirus Symposium & 5th International ssDNA Comparative Virology Workshop, held from 3-9 November 2013 at Hangzhou, China, pp.90</div>
</div>
<div class="publication-item">
    <div class="authors">23. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> co-authored: Ashfaq, M., Haider, M.S. and Khan, A.S. (2013). Genetic potential of the Basmati rice germplasm for development of drought tolerant varieties. Proceedings, Vol. ISBN 978-953-7871-08-6 pp.233-237</div>
</div>
<div class="publication-item">
    <div class="authors">24. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> co-authored: Ali, M., Ashfaq, M., Haider, M.S., Ashfaq, M. and Anjum, F. (2013). Biochemical characters of eggplant (Solanum melongena L.) leaves and their correlation with the fluctuations of Jassid (Amrasca biguttula biguttula (Ishida) populations. Paper presented in 'XV EUCARPIA Meeting on Genetics and Breeding of Capsicum and Eggplant', held at Torino, Italy, from 2nd to 4th September 2013, pp.21-27</div>
</div>
<div class="publication-item">
    <div class="authors">25. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> attended and presented paper on "Characterization of begomoviruses isolated from a weed Sonchus oleraceus (Sowthistle) from Pakistan" in 7th International Geminivirus Symposium & 5th International ssDNA Comparative Virology Workshop, held at Hangshou, China, from 3-9 November 2013 (sponsored by the HEC with an amount of Rs.191,195)</div>
</div>
<div class="publication-item">
    <div class="authors">26. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> attended "11th Biennial Conference on "Molecular Biosciences – Challenges and Opportunities", held on 25-28 November 2013 at Faisal Auditorium, University of the Punjab, Lahore, under the auspices of Pakistan Society for Biochemistry and Molecular Biology</div>
</div>
<div class="publication-item">
    <div class="authors">27. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> attended the Training Workshop on "Trade in Services", held on 8th October 2013 at Pearl Continental Hotel, Lahore under the auspices of Pakistan Institute of Trade and Development (PITAD), Ministry of Commerce, Islamabad</div>
</div>
<div class="publication-item">
    <div class="authors">28. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> participated in the training workshop on "Trade and Investment", held at Pearl Continental Hotel, Lahore, from 10th to 11th September 2013</div>
</div>
<div class="publication-item">
    <div class="authors">29. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> participated in the conference on "Bio-physicochemical basis for Technopreneurship" – a joint venture of MMG & IBA, held on 2nd April 2013 at Al-Razi Hall, Undergraduate Block, University of the Punjab, Lahore</div>
</div>

<div class="publication-item">
    <div class="authors">30. <span class="highlight-author">Muhammad Saleem Haider</span>, Zaheer Hussain, Xiang WU, Zafar Ul Ahsan Qureshi, Andr´es Velasco-Villa, Shahida Afzaal and Charles Rupperchet (2012) Development of Genetically Recombinant Rabies Vaccine. 2nd Word Congress of Virology, held August, 20-22, 2012, Embassy Suits, Las Vegas, USA</div>
</div>
<div class="publication-item">
    <div class="authors">31. <span class="highlight-author">Muhammad Saleem Haider</span>, Naseer Ahmed and Naeem Rashid (2012) Production of Glucose Syrup by the action of Recombinant α -Amaylase purified by efficient method. International Food and Agricultural Congress held February,15-19, 2012, Antalya, Belek, Turkey (self sponsored)</div>
</div>
<div class="publication-item">
    <div class="authors">32. Shabnam Javed, Sehrish Iftikhar, Ahmad Ali Shahid, Sabahat Zahra Siddiqui and <span class="highlight-author">M. Saleem Haider</span>, 2012. Essential Oils and Latex as Novel Antiviral Agents against Potato Leaf Roll Virus (PLRV). In Abstracts book; 13TH International Symposium on Natural Product Chemistry, September 22-25, H.E.J Research Institute Of Chemistry, International Centre For Chemical And Biological Sciences, University of Karachi, Pakistan:201</div>
</div>
<div class="publication-item">
    <div class="authors">33. Sehrish Iftikhar, Shabnam Javed, Ahmad Ali Shahid, Sobia Mushtaq and <span class="highlight-author">M. Saleem Haider</span>, 2012. Monitoring of Antimicrobial Activity of Natural Products Using Molecular Marker. In Abstracts book; 13TH International Symposium on Natural Product Chemistry, September 22-25, H.E.J Research Institute Of Chemistry, International Centre For Chemical And Biological Sciences, University of Karachi, Pakistan:199</div>
</div>
<div class="publication-item">
    <div class="authors">34. Shabnam Javed, Sehrish Iftikhar, <span class="highlight-author">Muhammad Saleem Haider</span> & Shaista Nawaz, 2012. Garlic (Allium sativu), Onion (Allium cepa) and Ginger (Zingiber officinalis) Powder preparation and their Nutritional and Phytochemical Investigation. In Abstracts book; International Conference on Safe Food and Human Health, January 10-11, GC University, Faisalabad, Pakistan: 50</div>
</div>
<div class="publication-item">
    <div class="authors">35. Shabnam Javed, Ahmad Ali Shahid  & <span class="highlight-author">Muhammad Saleem Haider</span>, Ayesha Umeera, Rauf Ahmad  and Sobia Mushtaq, 2012. Nutritional, Phytochemical & Antimicrobial evaluation Of Kitchen Spices Nigella Sativa (Kalonji) & Trachyspermum Ammi (Ajwain). In Abstracts book; International Conference on Safe Food and Human Health, January 10-11, GC University, Faisalabad, Pakistan:50</div>
</div>
<div class="publication-item">
    <div class="authors">36. Shabnam Javed, Sobia mushtaq, <span class="highlight-author">Muhammad Saleem Haider</span>, 2012. In vitro fungitoxicity of the essential oil of Syzygium aromaticum (Clove) and Foeniculum vulgare (Fennel) Essential Oils, In Abstracts book; International Conference on Safe Food and Human Health, January 10-11, GC University, Faisalabad, Pakistan:63</div>
</div>
<div class="publication-item">
    <div class="authors">37. Shabnam Javed, Sobia mushtaq, <span class="highlight-author">Muhammad Saleem Haider</span>, Rauf Ahmed & Shaista. 2012. Essential Oils Derived From Citrus Fruits in Food Protection and Medicine:GC-MS analysis of Citrus essential oils. In Abstracts book; International Conference on Safe Food and Human Health, January 10-11, GC University, Faisalabad, Pakistan:64</div>
</div>
<div class="publication-item">
    <div class="authors">38. Shabnam Javed, <span class="highlight-author">M. Saleem Haider</span> and Sobia Mushtaq, 2011. Phytochemical investigation & in vitro comparative screening of antimicrobial activities of some common weed extracts. In Abstracts 8TH National Conference of Pakistan Phytopathological Society, November 28-29,2011, University of Agriculture, Faisalabad :107</div>
</div>
<div class="publication-item">
    <div class="authors">39. <span class="highlight-author">Haider M.S</span>, Ilyas M, Ahmed T and AbouHaidar M.G. (2011) A study of Begomoviruses from Malvaceous hosts and use of RNAi approach for their control. Challenges and Options for Plant Health Management, 8th National Conference of Phytopathology, held November 28-29, University of Agriculture, Faisalabad p-96</div>
</div>
<div class="publication-item">
    <div class="authors">40. Khan S. N., Anwar W., and <span class="highlight-author">Haider M. S.</span> (2011) Effect of planting environment and input application on natural distribution pattern of entomopathogens. International Science and Technology Conference 2011, held December 7-9, at Istanbul University, Turkey</div>
</div>
<div class="publication-item">
    <div class="authors">41. M. Zia-Ur-Rehman, <span class="highlight-author">M.S. Haider</span> and J. K. Brown (2011) Hollyhock (Alcea rosea) as a reservoir of the Cotton leaf curl disease (CLCuD) associated begomoviruses. 5th Meeting of the Asian Cotton Research & Development Network, held Feb. 23-25 ,Pearl Continental Hotel, Lahore, Pakistan</div>
</div>
<div class="publication-item">
    <div class="authors">42. Farah S., <span class="highlight-author">Haider M. S.</span>, Shafiq M. and Ilyas M. (2011) A study based on Molecular analyses of whitefly (Bemisia tabaci) populations from Punjab, Pakistan. Challenges and Options for Plant Health Management, 8th National Conference of Phytopathology, held November 28-29, University of Agriculture, Faisalabad p-97</div>
</div>
<div class="publication-item">
    <div class="authors">43. M. Zia-Ur-Rehman, <span class="highlight-author">M.S. Haider</span> and J. K. Brown (2011) Molecular Characterization of a Novel Monopartite Begomovirus infecting Hollyhock (Alcea rosea) in Pakistan. Challenges and Options for Plant Health Management, 8th National Conference of Phytopathology, held November 28-29, University of Agriculture, Faisalabad p-83</div>
</div>
<div class="publication-item">
    <div class="authors">44. M. Zia-Ur-Rehman, <span class="highlight-author">M.S. Haider</span> and J. K. Brown (2011) Multiple infection and recombination among begomoviruses infecting Hollyhock (Alcea rosea) in Pakistan. Challenges and Options for Plant Health Management,8th National Conference of Phytopathology, held November 28-29, University of Agriculture, Faisalabad p-97-98</div>
</div>
<div class="publication-item">
    <div class="authors">45. Perveen R. and <span class="highlight-author">Haider M.S.</span> (2011) Studies on correlation between CLCuV disease and whitefly population on different local cotton varieties. Challenges and Options for Plant Health Management, 8th National Conference of Phytopathology, held November 28-29, University of Agriculture, Faisalabad p-95</div>
</div>
<div class="publication-item">
    <div class="authors">46. Shafiq M., Anwar W., Bibi A., Manzoor M. T. and <span class="highlight-author">Haider M. S.</span> (2011). Effects of Humic Acid and Foliar NPK in Potato Fields. International Conference on Prospects and Challenges to Sustainable Agriculture. Organized by Faculty of Agriculture, Rawalakot, University of Azad Jammu and Kashmir. July 14-16</div>
</div>
<div class="publication-item">
    <div class="authors">47. Anwar W., Khan S. N., and <span class="highlight-author">Haider M. S.</span>, (2011). Diversity of Insect Associated Fungi in Agroecological Zones and different land use type. National Symposium on Biodiversity of Pakistan at Pakistan Museum of Natural History. June 07-09</div>
</div>
<div class="publication-item">
    <div class="authors">48. Briddon, R. W., <span class="highlight-author">Haider, M. S.</span> and Tahir, M. (2010) Cucurbits-A Paradise of Begomoviruses. Cucurbitaceae 2010, 14-18 November 2010, Francis Marion Hotel, Charleston, South Carolina. USA</div>
</div>
<div class="publication-item">
    <div class="authors">49. <span class="highlight-author">Haider, M. S.</span>, Tahir, M., Iqbal. J.,and Briddon, R. W. (2008). Complete nucleotide sequence and phylogenetic analysis of the bipartite begomovirus squash leaf curl China virus infecting Cucurbita pepo in Pakistan. Accepted as Poster Presentation in 6th Canadian Plant genomics Workshop, to be held 23-26 June, 2008 in Toronto, Ontario. Canada</div>
</div>
<div class="publication-item">
    <div class="authors">50. Tahir, M., <span class="highlight-author">Haider, M. S.</span>, and Briddon, R. W. (2007). Ageratum enation virus causes yellow vein disease of Sonchus oleraceus. 5th International Geminivirus Symposium, (May 20 to 26, 2007) Ouro Preto, Brazil. Section W2-2, 18p</div>
</div>
<div class="publication-item">
    <div class="authors">51. Tahir, M., <span class="highlight-author">Haider, M. S.</span>, Akhtar, M and Briddon, R. W. (2007). A new species of begomovirus "Pepper leaf curl Lahore virus" infecting Capsicum annuum var. grossum under natural conditions. 5th International Geminivirus Symposium, (May 20 to 26, 2007) Ouro Preto, Brazil. Section P2-4, 94p</div>
</div>
<div class="publication-item">
    <div class="authors">52. <span class="highlight-author">Haider M. S.</span>, Tahir, M. Saeed A, Shah A. H. Rashid N., Javed M. A. and Iqbal J. (2007) Vinca minor: another host of a tomato infecting begomovirus in Pakistan. African Crop Science Conference Proceedings Vol. 8, pp 905-907</div>
</div>
<div class="publication-item">
    <div class="authors">53. Javed M. A., Misoo S., Mahmood T, <span class="highlight-author">Haider M. S.</span> Shah A.  H., Rashid V. N. and Iqbal J. (2007) Effectiveness of alternate culture temperatures and maltose in the anther culture of salt tolerant Indica rice cultivars. African Crop Science Conference Proceedings Vol. 8, pp</div>
</div>

<div class="publication-item">
    <div class="authors">54. Tahir, M and <span class="highlight-author">Haider M. S.</span> (2006) Naturally occurring bipartite strains of Bipartite begomoviruses affect some members of Cucurbitaceae family inside and outside the cotton zone in Pakistan. Presented as an oral presentation in an International conference on Cucurbitaceae 2006 (Sep. 17-21) North Carolina State University, USA, Cucurbitaceae proceedings, p 527-533</div>
</div>
<div class="publication-item">
    <div class="authors">55. Tahir, M., <span class="highlight-author">Haider, M. S.</span> and Briddon, R. W. (2006) Presence of natural reservoir for "cottn leaf curl virus" outside the cotton growing region of Pakistan. Presented as poster presentation in "20th IUBMB International Congress of Biochemistry and Molecular Biology and 11th FAOBMB Congress in Life: Molecular Integration & Bilogical Diversity" held June 18-23, 2006, at Kayoto, Japan in Young Scientist Program</div>
</div>
<div class="publication-item">
    <div class="authors">56. Tahir, M., <span class="highlight-author">Haider, M.S.</span> and Briddon, R. W. (2006) Ageratum enation virus causes yellow vein disease of Sonchus oleraceus. Presented as an oral presentation in "Characterization and Management of Emerging Viral Diseases in the Developing World" An International Symposium held Nov. 20-22, 2006 at NIBGE, Faisalabad, Pakistan</div>
</div>
<div class="publication-item">
    <div class="authors">57. <span class="highlight-author">Haider, M. S.</span> and Tahir, M. (2005) A new species of Begomovirus infecting capsicum annuum grossum (Bell pepper) and prevalence of Tomato leaf curl New Delhi virus in Momordica charantia and Eclipta prostrata under natural conditions of Pakistan. Accepted as an oral presentation for '2nd Joint Conference of the International Working Groups on Legume (IWGLV) and Vegetable Viruses (IWGVV)' held April 10-14, 2005 in Fort Lauderdale, Florida, USA</div>
</div>
<div class="publication-item">
    <div class="authors">58. Tahir, M., <span class="highlight-author">Haider, M.S.</span> and Briddon R. W. (2005) Naturally occurring bipartite strains of Tomato leaf curl New Delhi virus (ToLCNDV) affect Luffa cylindrica and Momordica charantia inside and outside the cotton zone in Pakistan. Presented as an oral presentation in "18th FAOBMB symposium on Genomics and Proteomics in Health and Agriculture" held November 20-23, 2005 at Aiwan-i-Iqbal, Lahore. Pakistan. p 102</div>
</div>
<div class="publication-item">
    <div class="authors">59. Tahir, M., Haider, Sabtian, Siddiqui, R. and <span class="highlight-author">Haider, M. S.</span> (2005) Begomoviruses affecting an ornamental plant (Pedilenthus tithymeloides variegated) and oil seed crop (Sesamum indicum) under natural conditions of Pakistan. Presented as an oral presentation in "8th Biennial National Conference of Pakistan Society For Biochemistry and Molecular Biology" held March 7-9 in University of Karachi, Pakistan. p 62</div>
</div>
<div class="publication-item">
    <div class="authors">60. Afghan, S, <span class="highlight-author">Haider, M. S.</span>, Shah, A. H., Rashid, N., Iqbal, J., Tahir, M., Riaz, R., Altaf, M. and Akhtar, M. (2005) Cloning and sequencing of Sugarcane mosaic virus (SCMV) coat protein gene from naturally infected sugarcane crop in Pakistan. "International Symposium on Plant Disease Management" held December 20-22, 2005 at University of Karachi, Pakistan</div>
</div>
<div class="publication-item">
    <div class="authors">61. <span class="highlight-author">Haider, M. S.</span>, Liu, S., Evans, A. A. F. and Markham, P.G. (2003) Molecular and Biological properties of some begomoviruses from Pakistan. Presented as an oral paper in Fourth National Conference of Plant Pathology, 14-16 October, 2003 UAAR. Plant Virology p. 41</div>
</div>
<div class="publication-item">
    <div class="authors">62. Bedford, I. D., <span class="highlight-author">Haider, M. S.</span>, Soko, M. and Markham, P. G. (1996) Bemisia tabaci biotype/host/virus interactions. Proceedings of the XX International Congress of Entomology, Firenze, Italy, 15-047</div>
</div>




<div class="publication-item">
    <div class="authors">1. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Mehwish Rauf. Real time titer of Begomovirus in vector Bemisia tabaci, plant host and its relationship with transmission and disease severity. (Ph.D thesis submitted)</div>
</div>
<div class="publication-item">
    <div class="authors">2. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Taiba Muhammad Ahmad. Monitoring, mapping and spatial-modeling of bacterial leaf blight disease assessment and yield losses of rice in Lahore Division, Pakistan. (Ph.D thesis submitted)</div>
</div>
<div class="publication-item">
    <div class="authors">3. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Mamoona Asif (FAS) Linking Biochar and Soil Microbial Community Dynamics with the Development of Fusarium and Verticillium Wilt of Cotton. (Ph.D thesis submitted)</div>
</div>
<div class="publication-item">
    <div class="authors">4. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Tiyyabah Khan (FAS) Fungal diversity and resistance to grain protectants associated with rice Weevil, Sitophilus oryzae (Linnaeus). (Ph.D thesis submitted)</div>
</div>
<div class="publication-item">
    <div class="authors">5. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Muniba Abid Munir Malik (FAS) CRISPR/Cas9 based strategy to control Mastreviruses in Pakistan. (PhD awarded on 6.10.2023)</div>
</div>
<div class="publication-item">
    <div class="authors">6. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Tehmina Bahar (FAS) Molecular epidemiology of Geminiviruses infecting weeds and ornamental Plants. (PhD awarded on 4.10. 2023)</div>
</div>
<div class="publication-item">
    <div class="authors">7. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Chaudhry Ali Ahmad (FAS) Effect of Biochar on bacterialWilt (Ralstonia solancearum) development and biochemical alterations in eggplant. (PhD awarded on 5.09.2023)</div>
</div>
<div class="publication-item">
    <div class="authors">8. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Mr. Mujahid Rasool (FAS) Physiological and molecular characterization of biochar induced resistance against early blight (Alternaria solani) in tomato. (Ph.D awarded in 2022)</div>
</div>
<div class="publication-item">
    <div class="authors">9. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Akhtar Mahmood (Old Scheme) Gene action and hybrid vigour studies in Petunia. (Ph.D awarded in 2022)</div>
</div>
<div class="publication-item">
    <div class="authors">10. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Misbah Batool Zahra. Effect of cow manure biochar and compost on soil, water productivity and diseases of maize crop under field conditions. (Ph.D awarded in 2021)</div>
</div>
<div class="publication-item">
    <div class="authors">11. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Huma Adrees (HEC Scholar) Management of charcoal root rot of cotton by combined application of bio-antagonists and chemical elicitors. (PhD awarded on 02.09.2021)</div>
</div>
<div class="publication-item">
    <div class="authors">12. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Muhammad Tariq Manzoor (IAGS) Molecular and biological characterization of cotton infecting Mastreviruses from different cotton growing districts of Punjab and Sindh. (PhD awarded on 25.02.2020)</div>
</div>
<div class="publication-item">
    <div class="authors">13. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Rabia Kalsoom Induction of resistance using plant extracts against purple blotch disease of onion (Alium cepa L.) (Ph.D awarded in 2020)</div>
</div>
<div class="publication-item">
    <div class="authors">14. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Sana Khalid (IAGS) Molecular Investigation of Role of coat protein in Transmission of Two Different Geminiviruses. (PhD awarded in 2019)</div>
</div>
<div class="publication-item">
    <div class="authors">15. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Sehrish Mushtaq (HEC Scholar) Effect of whitefly transmitted geminiviruses on the physiology of Lycopersicon esculentum and Nicotiana benthamiana (PhD awarded in 2019)</div>
</div>
<div class="publication-item">
    <div class="authors">16. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Farman Ahmad Choudhury. Role of Commercial Banks in Agribusiness management in Pakistan (Punjab): A case study of rice business in Sialkot district (Punjab) (PhD awarded in 2019)</div>
</div>
<div class="publication-item">
    <div class="authors">17. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Farah Saeed (HEC Scholar) Post transcriptional gene silencing suppression ability of various genes encoded by helper Begomoviruses and DNA-satellites. (PhD awarded in 2019)</div>
</div>
<div class="publication-item">
    <div class="authors">18. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Fasiha Qurashi (IAGS) Genetic diversity of begomoviruses affecting diverse host plants in Peri-urban areas of Lahore (PhD awarded in 2019)</div>
</div>
<div class="publication-item">
    <div class="authors">19. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised M. Javed Iqbal (IAGS) A comprehensive approach to combat CLCuV (Ph.D. Awarded in 2018)</div>
</div>
<div class="publication-item">
    <div class="authors">20. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Waheed Anwar (IAGS) Isolation and characterization of chitinase gene from entomopathogenic fungi and its evaluation against Bemisia tabaci (Ph.D. Awarded in 2017)</div>
</div>
<div class="publication-item">
    <div class="authors">21. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Aeysha Bibi (IAGS) Diversity of endosymbiotic bacteria present in Bemisia tabaci of Pakistan (Ph.D. Awarded in 2016)</div>
</div>
<div class="publication-item">
    <div class="authors">22. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Muhammad Faisal Bashir (HEC-Scholar) Characterization of Hepatitis C Virus Structural and Non-Structural Proteins from Pakistani isolates (Ph.D. Awarded in 2015)</div>
</div>
<div class="publication-item">
    <div class="authors">23. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Zaheer Hussain (HEC-Scholar) Cloning, expression and purification of antigenic protein of Rabies virus for GM-vaccine production (Ph.D. Awarded in 2013)</div>
</div>
<div class="publication-item">
    <div class="authors">24. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Nasir Ahmed (Higher Education Commission; HEC-Scholar) Amylolytic enzyme (s) from hyperthermophilic archaea: cloning and characterization. (Ph.D. awarded, December 2012)</div>
</div>
<div class="publication-item">
    <div class="authors">25. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Zia-u-Rehman (HEC-Scholar) Molecular and biological characterization of two begomoviruses infecting hollyhock plant, exhibiting different types of symptoms. (Ph.D. awarded, December 2012)</div>
</div>
<div class="publication-item">
    <div class="authors">26. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Saima Iftikhar (School of Biological Sciences) as co-supervisor Cloning, Expression and Purification of antigenic protein of Hepatitis B Virus (HBV) (PhD awarded, March 2010)</div>
</div>
<div class="publication-item">
    <div class="authors">27. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Muhammad Tahir (School of Biological Sciences). Molecular and biological analysis of begomoviruses; inside and outside the cotton zone in Pakistan. (PhD awarded, May 2009)</div>
</div>


<div class="publication-item">
    <div class="authors">1. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Aqib Saeed (2023) Impact of rice straw biochar in association with inorganic fertilizers and Trichoderma harzianum on Charcol rot (Macrophomia phaseolina) of maize.</div>
</div>
<div class="publication-item">
    <div class="authors">2. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Habiba Shahid (2022) Determination of fungicidal resistance in different field crops pathogens.</div>
</div>
<div class="publication-item">
    <div class="authors">3. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Syeda Mah-e-Zahra (2022) Determination of transgene flow of herbicide and cotton leaf curl virus (CLCuv) resistance in cotton (Gossypium hirsutum L,)</div>
</div>
<div class="publication-item">
    <div class="authors">4. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Muhammad Taqqi Abbas (2022) Impact of biochar on the development of bacterial wilt (Ralstonia solancearum) in chili pepper.</div>
</div>
<div class="publication-item">
    <div class="authors">5. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Sabahat Shamim (2021) Screening of Rice Germplasm by the identification of pathogen that causing bacterial panicle blight in rice and other morphological traits.</div>
</div>
<div class="publication-item">
    <div class="authors">6. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Omaima Abid Khan (2020). Isolation and characterization of fungal species associated with grain discoloration disease in rice.</div>
</div>
<div class="publication-item">
    <div class="authors">7. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Muhammad Shaharyar Asif (2020). Biochar induced defense Resopnse against bacterial leaf spot (Xanthomonas compestris pv. Versicola) of chilies.</div>
</div>
<div class="publication-item">
    <div class="authors">8. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Ramsha Basit (2020). Production of total secondary metabolites of Trichoderma spp. and their evaluation against different plant pathogens.</div>
</div>
<div class="publication-item">
    <div class="authors">9. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Anam Rashid (2020). Enhancement Oyster Mushrooms Production through different substrates.</div>
</div>
<div class="publication-item">
    <div class="authors">10. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Muhammad Hafeez UL Haq (2019). Effect of biochar and compost as soil organic amendment against early blight (Alternaria solani) in tomato.</div>
</div>
<div class="publication-item">
    <div class="authors">11. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Muhammad Awais Riaz (2019). Characterization of Fusarium oxysporum and its inhibition by different plant extracts and essential oils.</div>
</div>
<div class="publication-item">
    <div class="authors">12. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Waqas Bin Nisar (2019). Characterization and evaluation of antifungal potential of bacterial endophytes associated with rice.</div>
</div>
<div class="publication-item">
    <div class="authors">13. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Huma Amin (2019). Evaluation of fungal chitinases for the control of Aphis gossypii.</div>
</div>
<div class="publication-item">
    <div class="authors">14. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Sayed. M. Jawad Raza (2019). Effect of intercropping partner lemon basil on physiology of tomato under Fusarium wilt disease stress.</div>
</div>
<div class="publication-item">
    <div class="authors">15. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Haleema Saeed (2019).</div>
</div>
<div class="publication-item">
    <div class="authors">16. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Hafiz Umar Farooq (2019). Cloning and transformation of grapes (Vitis vinifera L.) derived chitinase gene in potato plant (Solanum tuberosum L.).</div>
</div>
<div class="publication-item">
    <div class="authors">17. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Muhammad Asim Javed (2019). Assessment of wheat (Triticum aestivum L.) associated microbiomes and their impact on plant health.</div>
</div>
<div class="publication-item">
    <div class="authors">18. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Iqra Shakeel (2018). Biochar Induced Activation of Plant Defence Response Against CLCUV Disease.</div>
</div>
<div class="publication-item">
    <div class="authors">19. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Kamran Asif Khilji (2017). Management of Begomovirus in chilli crop by using high dosage of potash, Biopesticides,nitrogen from poultry manure and their molecular characterized comparison.</div>
</div>
<div class="publication-item">
    <div class="authors">20. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Hafiz Muhammad Salman (2017). Cloning, screening of mutant plants and characterization of a novel ubiquitin conjugating enzyme xbat34 against pathogen resistance</div>
</div>
<div class="publication-item">
    <div class="authors">21. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Mubarak Ali Anjum (2017). Revealing the potential of chitinase gene in transgenic potato plants against biotic and abiotic stress</div>
</div>
<div class="publication-item">
    <div class="authors">22. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Muhammad Usman Majeed (2017). Phenotypic and pathogenic characterization of grain discoloration resistant rice.</div>
</div>
<div class="publication-item">
    <div class="authors">23. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Mubashra (2017). Development of RNAi construct against Okra enation leaf curl virus and associated Cotton leaf curl Multan betasatelite.</div>
</div>
<div class="publication-item">
    <div class="authors">24. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Nida Javaid (2017). Effect of Crg1 gene on the developmental processes of an edible mushroom Coprinopsis cinerea.</div>
</div>
<div class="publication-item">
    <div class="authors">25. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Saif Anwar (2017). Estimation the efficacy of various fungicides against Pseudopenspora cubensis on Citrullvs lantus.</div>
</div>
<div class="publication-item">
    <div class="authors">26. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Anila Zainab (2017). Silencing of fibre related transcription factor through RNA interference technology.</div>
</div>
<div class="publication-item">
    <div class="authors">27. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Samra Ramzan (2016). Effect of form of nitrogen on leaf tip burning, growth and yield of hydroponically grown onion.</div>
</div>
<div class="publication-item">
    <div class="authors">28. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Iqra Khan (2016). Parthenium hysterophorus, a newly reported host of Begomoviruses in Pakistan.</div>
</div>
<div class="publication-item">
    <div class="authors">29. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Iqra Asghar (2016). Begomoviruses and associated satellites infecting cucurbits in Lahore region.</div>
</div>
<div class="publication-item">
    <div class="authors">30. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Abdul Rehman (2016). Begomoviruses infecting Malvestrum tricupsidatum in Lahore.</div>
</div>
<div class="publication-item">
    <div class="authors">31. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Sidra Amanat Ali (2015). Development of infectious clone of chickpea chlorotic dwarf virus and infectivity analysis.</div>
</div>
<div class="publication-item">
    <div class="authors">32. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Chaudhry Ali Ahmad (2015) (HEC Scholar). Molecular characterization of geminiviruses infecting Okra.</div>
</div>
<div class="publication-item">
    <div class="authors">33. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Iqra Saleem (2015). Conventional and microsatellite based screening of rice germplasm against blast disease.</div>
</div>
<div class="publication-item">
    <div class="authors">34. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Mamoona Asif (2015). Transient and transgenic expression of GFP and Malvesterum yellow vein Chhanga Manga virus in different plants.</div>
</div>
<div class="publication-item">
    <div class="authors">35. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Mujahid Rasool (2015). Molecular and biochemical analysis of Alistonia leaf galls.</div>
</div>
<div class="publication-item">
    <div class="authors">36. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Tehmina Bahar (2014). Plant response to transient expression of chickpea chlorotic dwarf virus coat protein gene and study of suppressor of RNA silencing.</div>
</div>
<div class="publication-item">
    <div class="authors">37. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Rida-e-Fatima (2014). PCR detection of the Candidatus liberibacter and biotyping of Asian citrus Psyllid species associated with Huanglongbing disease of citrus in Pakistan.</div>
</div>
<div class="publication-item">
    <div class="authors">38. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Wajid Hussain (2014). Detection and identification of begomoviruses from selected weeds of Lahore region.</div>
</div>
<div class="publication-item">
    <div class="authors">39. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Khadija Imtiaz (2014). Morphological and molecular characterization of Genera Alternaria from Pakistan.</div>
</div>
<div class="publication-item">
    <div class="authors">40. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Rahat Ghaffar (2014). Morphological and molecular characterization of Genera Fusarium from Pakistan.</div>
</div>
<div class="publication-item">
    <div class="authors">41. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Anam Nawaz (2013). Identification of pathogenic bacteria that associated with bacterial wilt disease of tomato.</div>
</div>
<div class="publication-item">
    <div class="authors">42. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Sehrish Mushtaq (2013). Effect of whitefly transmitted geminiviruses on the physiology of Lycopersicon esculentum and Nicotiana benthamiana.</div>
</div>
<div class="publication-item">
    <div class="authors">43. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Saima Arif (2013). Identification and phylogenetic analysis of Wolbachia endosymbiont from leafhopper using 16s rDNA gene.</div>
</div>
<div class="publication-item">
    <div class="authors">44. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Asma Tanvir (2013). Characterization and identification Arsenophonus endosymbiont from whitefly using 23s rDNA gene.</div>
</div>
<div class="publication-item">
    <div class="authors">45. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Mehwish Rauf (2013). Diversity and phylogenetic analysis of Bemisia tabaci species complex from Punjab, Pakistan based on mitochondrial DNA marker.</div>
</div>
<div class="publication-item">
    <div class="authors">46. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Shagufta Perveen (2013). Cloning and E. coli expression from cotton leaf curl multan virus rep gene.</div>
</div>
<div class="publication-item">
    <div class="authors">47. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Saniya Sattar (2013). Cloning and E. coli expression of C1 gene from cotton leaf curl burewala betasatelite.</div>
</div>
<div class="publication-item">
    <div class="authors">48. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Jahangir Khan (2013). Evaluation of tomato and associated weeds for resistance against tomato leaf curl disease complex.</div>
</div>
<div class="publication-item">
    <div class="authors">49. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Muneeb Ullah Khan (2013). Evaluating the effect of neem (Azadirachta indica) extract (leaves) in controlling bacterial diseases (bacterial leaf blight & soft rot) of cabbage and cauliflower.</div>
</div>
<div class="publication-item">
    <div class="authors">50. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Mukhtar Ahmad (2012) Molecular Characterization of Begomoviruses isolated from cucurbits and cotton.</div>
</div>
<div class="publication-item">
    <div class="authors">51. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Fasiha Qureshi (2011) Molecular Characterization of Begomoviruses isolated from a weed Sonchus oleraceus (Sowthistle)</div>
</div>
<div class="publication-item">
    <div class="authors">52. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Farah Saeed (2011) Molecular study of whitefly (Bemisia tabaci) biotypes in Pakistan.</div>
</div>
<div class="publication-item">
    <div class="authors">53. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Kirn Nawaz (2011) Molecular Characterization of Begomoviruses infecting Catharanthus roseus, Ornamental Plants in Pakistan.</div>
</div>
<div class="publication-item">
    <div class="authors">54. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Sidra Bashir (2006) characterization of begomoviruses from different vegetables, under natural conditions.</div>
</div>
<div class="publication-item">
    <div class="authors">55. <span class="highlight-author">Prof. Dr. Muhammad Saleem Haider</span> supervised Subtain Haider (2006) characterization of begomoviruses from ornamentals plants in Lahore (2006)</div>
</div>










<div class="publication-item">
    <div class="authors">1. Hibba Arshad (2022-2024)</div>
</div>
<div class="publication-item">
    <div class="authors">2. Atta Ur Rehman (2022-2024)</div>
</div>
<div class="publication-item">
    <div class="authors">3. M. Saad Noor (2022-24)</div>
</div>
<div class="publication-item">
    <div class="authors">4. Proficient knowledge of Microsoft word, Microsoft Excel, Microsoft PowerPoint and other Windows based packages, DNA analysis software; BLAST, Multiple sequence alignment, Phylogenetic analysis.</div>
</div>
<div class="publication-item">
    <div class="authors">5. Delivered seminar as Invited Speaker on "Role of Academia in adaptive research and implementation in Agriculture" in 'Launch of Sectoral Local Adaptation Plans of Action on Agriculture' held at CEES, P.U. Lahore on 15.11.2018.</div>
</div>
<div class="publication-item">
    <div class="authors">6. Delivered an Invited Lecture on "An overview of research activities at IAGS, PU" in a three-day workshop on 'Advances in Agricultural Biotechnology and Regulatory Affairs, held at Forman Christian College (FC College), Lahore on 26.09.2017.</div>
</div>
<div class="publication-item">
    <div class="authors">7. Delivered an Invited Lecture on "Advances in Geminivirus research in Pakistan" in the International Conference on Biosciences & Medical Engineering, held on 10-11 November, 2016 at Faculty of Biosciences & Medical Engineering, UTM, Malaysia.</div>
</div>
<div class="publication-item">
    <div class="authors">8. Delivered an Invited Lecturer on "Whitefly: Vector of begomoviruses and its management", in the workshop 'The development and testing of transgenic for cotton leaf curl virus (CLCuV) disease resistance', held at CEMB on 18-19 March 2014.</div>
</div>
<div class="publication-item">
    <div class="authors">9. Attended Fourth Training Workshop of PEs (Program Evaluators) as an expert, organized by National Agriculture Education Accreditation Council (NAEAC), HEC, held from 28-30 September 2017 in Margala Hotel, Islamabad.</div>
</div>
<div class="publication-item">
    <div class="authors">10. A three days training workshop on Project Proposal Writing under Punjab Agricultural Research Board (PARB) Competitive Grant System (CGS) at Agriculture House, Lahore, Pakistan. November 9-11, 2009.</div>
</div>
<div class="publication-item">
    <div class="authors">11. Training course on the hazards of ionizing radiation and safe handling of radioactive substances, 22nd June 1993 at Institute of Food Research (Norwich Laboratory)</div>
</div>
<div class="publication-item">
    <div class="authors">12. Postgraduates Lectures on Molecular Techniques in Biology, January/February 1995 at John Innes Centre, Norwich.</div>
</div>
<div class="publication-item">
    <div class="authors">13. Lectures on Plant Virology, Transmission-vector specificity, purification, serology and molecular biology (Oct. 1995-Dec. 1995, University of East Anglia, Norwich).</div>
</div>
<div class="publication-item">
    <div class="authors">14. Ahmad, N, Rashid, N, Haider, MS and Akhtar, M. (2013). Single step liquefaction and saccharification of corn starch using an acidophilic, calcium independent and hyperthermophilic pullulanase. Patent with United States Patent and Trademark Office (USPTO), vide application No. 13/765,481 dated 12th February 2013.</div>
</div>
<div class="publication-item">
    <div class="authors">15. Publication Incentive Award 2017, by the University of the Punjab.</div>
</div>
<div class="publication-item">
    <div class="authors">16. Publication Incentive Award 2016, by the University of the Punjab.</div>
</div>
<div class="publication-item">
    <div class="authors">17. Publication Incentive Award 2015, by the University of the Punjab.</div>
</div>
<div class="publication-item">
    <div class="authors">18. Awarded Publication Incentive Award 2014 (Rs.65,667/-) by the University of the Punjab.</div>
</div>
<div class="publication-item">
    <div class="authors">19. Awarded Publication Incentive Award 2013 (Rs.66,500/-) by the University of the Punjab.</div>
</div>
<div class="publication-item">
    <div class="authors">20. Publication Incentive Award 2012 (Rs.91,303/-) by the University of the Punjab.</div>
</div>
<div class="publication-item">
    <div class="authors">21. Publication Incentive Award 2011 (Rs.62,498/-) by the University of the Punjab.</div>
</div>
<div class="publication-item">
    <div class="authors">22. Performance Evaluation Award 2021, awarded by the University of the Punjab.</div>
</div>
<div class="publication-item">
    <div class="authors">23. Performance Evaluation Award 2015, awarded by the University of the Punjab.</div>
</div>
<div class="publication-item">
    <div class="authors">24. Performance Evaluation Award 2014, awarded by the University of the Punjab.</div>
</div>
<div class="publication-item">
    <div class="authors">25. Performance Evaluation Award 2013, awarded by the University of the Punjab.</div>
</div>
<div class="publication-item">
    <div class="authors">26. Performance Evaluation Award 2012, awarded by the University of the Punjab.</div>
</div>
<div class="publication-item">
    <div class="authors">27. Awarded Quaid-e-Azam Gold Medal – 2014 by Tehreek-e-Istehkam-e-Pakistan Council (Regd.) Pakistan on 28th June 2014 on best performance in the field of Agriculture.</div>
</div>
<div class="publication-item">
    <div class="authors">28. Awarded Gold Medal on great performance in Agriculture/Dairy & Livestock/ Poultry by Unity Human Well Wishers Council, Lahore, Pakistan – A registered social welfare department, Government of the Punjab (2013).</div>
</div>
<div class="publication-item">
    <div class="authors">29. Awarded Pot-Doc Research Certificate in 2008, by the University of Toronto, Canada</div>
</div>


<div class="publication-item">
    <div class="authors">30. Member, Punjab University Projects Evaluation Committee (Faculty of Life Sciences)</div>
</div>
<div class="publication-item">
    <div class="authors">31. Member, Departmental Tenure Review Committee for the Discipline of Plant Pathology, University College of Agriculture & Environmental Sciences, Islamia University Bahawalpur</div>
</div>
<div class="publication-item">
    <div class="authors">32. Convener, Board of Studies in Agricultural Sciences (2010 – todate)</div>
</div>
<div class="publication-item">
    <div class="authors">33. President, Pakistan Phytopathological Society – since 2016</div>
</div>
<div class="publication-item">
    <div class="authors">34. Member, Board of Faculty of Life Sciences</div>
</div>
<div class="publication-item">
    <div class="authors">35. Editor In-Chief for Mycopath Journal</div>
</div>
<div class="publication-item">
    <div class="authors">36. Editor-in-Chief, Pakistan Journal of Phytopathology</div>
</div>
<div class="publication-item">
    <div class="authors">37. Member-Editorial Board for Journal of Life Sciences, USA</div>
</div>
<div class="publication-item">
    <div class="authors">38. Member-European Federation of Biotechnology</div>
</div>
<div class="publication-item">
    <div class="authors">39. Member, Editorial Board, Quarterly Journal of Agricultural Research</div>
</div>
<div class="publication-item">
    <div class="authors">40. Fellow-The Zoological Society of Pakistan</div>
</div>
<div class="publication-item">
    <div class="authors">41. Member Myco-Phytopathological Society of Pakistan</div>
</div>
<div class="publication-item">
    <div class="authors">42. Member Bioinformatics.org</div>
</div>
<div class="publication-item">
    <div class="authors">43. Member-Pakistan Agricultural Research Scientists Association</div>
</div>
<div class="publication-item">
    <div class="authors">44. Member Association of Applied Biologists (1993-1996)</div>
</div>
<div class="publication-item">
    <div class="authors">45. Member world Cucurbitaceae Scientists</div>
</div>
<div class="publication-item">
    <div class="authors">46. Reviewer: Journal of Microbiology and Antimicrobials</div>
</div>
<div class="publication-item">
    <div class="authors">47. Reviewer: Journal of Life Sciences, USA</div>
</div>
<div class="publication-item">
    <div class="authors">48. Reviewer: Pakistan Journal of Botany</div>
</div>
<div class="publication-item">
    <div class="authors">49. Reviewer: Sarhad Journal of Agriculture</div>
</div>
<div class="publication-item">
    <div class="authors">50. Reviewer: Pakistan Journal of Agricultural Sciences</div>
</div>
<div class="publication-item">
    <div class="authors">51. Reviewer: African Journal of Biotechnology</div>
</div>
<div class="publication-item">
    <div class="authors">52. Reviewer: African Journal of Agricultural Sciences</div>
</div>
<div class="publication-item">
    <div class="authors">53. Warden, Boys Hostel No.19</div>
</div>
<div class="publication-item">
    <div class="authors">54. Warden, Boys Hostel No.15 (additional duty)</div>
</div>
<div class="publication-item">
    <div class="authors">55. Member, Departmental Tenure Review Committee (DTRC), CEMB (since 2015)</div>
</div>
<div class="publication-item">
    <div class="authors">56. Member, Departmental Tenure Review Committee (DTRC), CEES (since 2016)</div>
</div>
<div class="publication-item">
    <div class="authors">57. Member, Departmental Technical Review Committee (DTRC), BZU, Multan (since 2017)</div>
</div>
<div class="publication-item">
    <div class="authors">58. Member, Capacity Building of Government Departments (since 2016)</div>
</div>
<div class="publication-item">
    <div class="authors">59. Member, Committee to issue clearance certificate for submission of NRPU projects to HEC (since 2016)</div>
</div>



<div class="publication-item">
    <div class="authors">1. Director, Institute of Agricultural Sciences (IAGS), University of the Punjab, Lahore</div>
</div>
<div class="publication-item">
    <div class="authors">2. Convener, Doctoral Program Committee, IAGS, University of the Punjab, Lahore</div>
</div>
<div class="publication-item">
    <div class="authors">3. Chairman, Board of Studies, IAGS, University of the Punjab, Lahore</div>
</div>
<div class="publication-item">
    <div class="authors">4. Member Curricula Plant Pathology (Virology) Committee for Universities</div>
</div>
<div class="publication-item">
    <div class="authors">5. Member, Technical Organizing Committee, 5th Meeting of the Asian Cotton Research and Development Network, held Feb. 23-25, Pearl Continental Hotel, Lahore, Pakistan</div>
</div>
<div class="publication-item">
    <div class="authors">6. Member Board of Studies of Faculty of Life Sciences</div>
</div>
<div class="publication-item">
    <div class="authors">7. Off-Site Invigilator, York University, Toronto, Ontario, Canada</div>
</div>
<div class="publication-item">
    <div class="authors">8. Editor-In-Chief, Mycopath, IAGS, Punjab University, Lahore</div>
</div>
<div class="publication-item">
    <div class="authors">9. Technical Editor, Mycopath Virology Section</div>
</div>
<div class="publication-item">
    <div class="authors">10. Chairman, Purchase & Technical Committee of IAGS</div>
</div>
<div class="publication-item">
    <div class="authors">11. Accession#: HE802675 Status: confidential until 31-DEC-2012 Description: Rabies virus complete genome, viral cRNA, isolate Pk 23</div>
</div>
<div class="publication-item">
    <div class="authors">12. Accession#: HE802676 Status: confidential until 31-DEC-2012 Description: Rabies virus complete genome, viral cRNA, isolate Pk 24</div>
</div>
<div class="publication-item">
    <div class="authors">13. Accession#: HE801592 Status: confidential until 31-DEC-2012 Description: Rabies virus G-L intergenic spacer, genomic RNA, isolate Pk 294</div>
</div>
<div class="publication-item">
    <div class="authors">14. Accession#: HE801593 Status: confidential until 31-DEC-2012 Description: Rabies virus G-L intergenic spacer, genomic RNA, isolate Pk 19</div>
</div>
<div class="publication-item">
    <div class="authors">15. Accession#: HE801594 Status: confidential until 31-DEC-2012 Description: Rabies virus G-L intergenic spacer, genomic RNA, isolate Pk 20</div>
</div>
<div class="publication-item">
    <div class="authors">16. Accession#: HE801595 Status: confidential until 31-DEC-2012 Description: Rabies virus G-L intergenic spacer, genomic RNA, isolate Pk 21</div>
</div>
<div class="publication-item">
    <div class="authors">17. Accession#: HE801596 Status: confidential until 31-DEC-2012 Description: Rabies virus G-L intergenic spacer, genomic RNA, isolate Pk 22</div>
</div>
<div class="publication-item">
    <div class="authors">18. Accession#: HE801597 Status: confidential until 31-DEC-2012 Description: Rabies virus G-L intergenic spacer, genomic RNA, isolate Pk 25</div>
</div>
<div class="publication-item">
    <div class="authors">19. Accession#: HE801598 Status: confidential until 31-DEC-2012 Description: Rabies virus G-L intergenic spacer, genomic RNA, isolate Pk 26</div>
</div>
<div class="publication-item">
    <div class="authors">20. Accession#: HE801599 Status: confidential until 31-DEC-2012 Description: Rabies virus G-L intergenic spacer, genomic RNA, isolate Pk 27</div>
</div>
<div class="publication-item">
    <div class="authors">21. Accession#: HE801600 Status: confidential until 31-DEC-2012 Description: Rabies virus G-L intergenic spacer, genomic RNA, isolate Pk 55</div>
</div>
<div class="publication-item">
    <div class="authors">22. Accession#: HE801601 Status: confidential until 31-DEC-2012 Description: Rabies virus G-L intergenic spacer, genomic RNA, isolate Pk 56</div>
</div>
<div class="publication-item">
    <div class="authors">23. Accession#: HE801602 Status: confidential until 31-DEC-2012 Description: Rabies virus G-L intergenic spacer, genomic RNA, isolate Pk 57</div>
</div>
<div class="publication-item">
    <div class="authors">24. Accession#: HE801603 Status: confidential until 31-DEC-2012 Description: Rabies virus G-L intergenic spacer, genomic RNA, isolate Pk 58</div>
</div>
<div class="publication-item">
    <div class="authors">25. Accession#: HE801604 Status: confidential until 31-DEC-2012 Description: Rabies virus G-L intergenic spacer, genomic RNA, isolate Pk 59</div>
</div>
<div class="publication-item">
    <div class="authors">26. Accession#: HE801605 Status: confidential until 31-DEC-2012 Description: Rabies virus G-L intergenic spacer, genomic RNA, isolate Pk 60</div>
</div>
<div class="publication-item">
    <div class="authors">27. Accession#: HE801606 Status: confidential until 31-DEC-2012 Description: Rabies virus G gene for glycoprotein, genomic RNA, isolate Pk 19</div>
</div>
<div class="publication-item">
    <div class="authors">28. Accession#: HE801607 Status: confidential until 31-DEC-2012 Description: Rabies virus G gene for glycoprotein, genomic RNA, isolate Pk 20</div>
</div>
<div class="publication-item">
    <div class="authors">29. Accession#: HE801608 Status: confidential until 31-DEC-2012 Description: Rabies virus G gene for glycoprotein, genomic RNA, isolate Pk 21</div>
</div>
<div class="publication-item">
    <div class="authors">30. Accession#: HE801609 Status: confidential until 31-DEC-2012 Description: Rabies virus G gene for glycoprotein, genomic RNA, isolate Pk 22</div>
</div>
<div class="publication-item">
    <div class="authors">31. Accession#: HE801610 Status: confidential until 31-DEC-2012 Description: Rabies virus G gene for glycoprotein, genomic RNA, isolate Pk 25</div>
</div>
<div class="publication-item">
    <div class="authors">32. Accession#: HE801611 Status: confidential until 31-DEC-2012 Description: Rabies virus G gene for glycoprotein, genomic RNA, isolate Pk 26</div>
</div>
<div class="publication-item">
    <div class="authors">33. Accession#: HE801612 Status: confidential until 31-DEC-2012 Description: Rabies virus G gene for glycoprotein, genomic RNA, isolate Pk 27</div>
</div>
<div class="publication-item">
    <div class="authors">34. Accession#: HE801613 Status: confidential until 31-DEC-2012 Description: Rabies virus G gene for glycoprotein, genomic RNA, isolate Pk 55</div>
</div>
<div class="publication-item">
    <div class="authors">35. Accession#: HE801614 Status: confidential until 31-DEC-2012 Description: Rabies virus G gene for glycoprotein, genomic RNA, isolate Pk 56</div>
</div>
<div class="publication-item">
    <div class="authors">36. Accession#: HE801615 Status: confidential until 31-DEC-2012 Description: Rabies virus G gene for glycoprotein, genomic RNA, isolate Pk 57</div>
</div>



<div class="publication-item">
    <div class="authors">37. Accession#: HE801616 Status: confidential until 31-DEC-2012 Description: Rabies virus G gene for glycoprotein, genomic RNA, isolate Pk 58</div>
</div>
<div class="publication-item">
    <div class="authors">38. Accession#: HE801617 Status: confidential until 31-DEC-2012 Description: Rabies virus G gene for glycoprotein, genomic RNA, isolate Pk 59</div>
</div>
<div class="publication-item">
    <div class="authors">39. Accession#: HE801618 Status: confidential until 31-DEC-2012 Description: Rabies virus G gene for glycoprotein, genomic RNA, isolate Pk 60</div>
</div>
<div class="publication-item">
    <div class="authors">40. Accession#: HE801619 Status: confidential until 31-DEC-2012 Description: Rabies virus L gene for RNA dependent RNA polymerase, genomic RNA, isolate Pk 294</div>
</div>
<div class="publication-item">
    <div class="authors">41. Accession#: HE801620 Status: confidential until 31-DEC-2012 Description: Rabies virus L gene for RNA dependent RNA polymerase, genomic RNA, isolate Pk 19</div>
</div>
<div class="publication-item">
    <div class="authors">42. Accession#: HE801621 Status: confidential until 31-DEC-2012 Description: Rabies virus L gene for RNA dependent RNA polymerase, genomic RNA, isolate Pk 20</div>
</div>
<div class="publication-item">
    <div class="authors">43. Accession#: HE801622 Status: confidential until 31-DEC-2012 Description: Rabies virus L gene for RNA dependent RNA polymerase, genomic RNA, isolate Pk 21</div>
</div>
<div class="publication-item">
    <div class="authors">44. Accession#: HE801632 Status: confidential until 31-DEC-2012 Description: Rabies virus L gene for RNA dependent RNA polymerase, genomic RNA, isolate Pk 60</div>
</div>
<div class="publication-item">
    <div class="authors">45. Accession#: HE801579 Status: confidential until 31-DEC-2012 Description: Rabies virus N gene for nucleoprotein, genomic RNA, isolate Pk 19</div>
</div>
<div class="publication-item">
    <div class="authors">46. Accession#: HE801580 Status: confidential until 31-DEC-2012 Description: Rabies virus N gene for nucleoprotein, genomic RNA, isolate Pk 20</div>
</div>
<div class="publication-item">
    <div class="authors">47. Accession#: HE801581 Status: confidential until 31-DEC-2012 Description: Rabies virus N gene for nucleoprotein, genomic RNA, isolate Pk 21</div>
</div>
<div class="publication-item">
    <div class="authors">48. Accession#: HE801582 Status: confidential until 31-DEC-2012 Description: Rabies virus N gene for nucleoprotein, genomic RNA, isolate Pk 22</div>
</div>
<div class="publication-item">
    <div class="authors">49. Accession#: HE801583 Status: confidential until 31-DEC-2012 Description: Rabies virus N gene for nucleoprotein, genomic RNA, isolate Pk 25</div>
</div>
<div class="publication-item">
    <div class="authors">50. Accession#: HE801584 Status: confidential until 31-DEC-2012 Description: Rabies virus N gene for nucleoprotein, genomic RNA, isolate Pk 26</div>
</div>
<div class="publication-item">
    <div class="authors">51. Accession#: HE801585 Status: confidential until 31-DEC-2012 Description: Rabies virus N gene for nucleoprotein, genomic RNA, isolate Pk 27</div>
</div>
<div class="publication-item">
    <div class="authors">52. Accession#: HE801586 Status: confidential until 31-DEC-2012 Description: Rabies virus N gene for nucleoprotein, genomic RNA, isolate Pk 55</div>
</div>
<div class="publication-item">
    <div class="authors">53. Accession#: HE801587 Status: confidential until 31-DEC-2012 Description: Rabies virus N gene for nucleoprotein, genomic RNA, isolate Pk 56</div>
</div>
<div class="publication-item">
    <div class="authors">54. Accession#: HE801588 Status: confidential until 31-DEC-2012 Description: Rabies virus N gene for nucleoprotein, genomic RNA, isolate Pk 57</div>
</div>
<div class="publication-item">
    <div class="authors">55. Accession#: HE801589 Status: confidential until 31-DEC-2012 Description: Rabies virus N gene for nucleoprotein, genomic RNA, isolate Pk 58</div>
</div>
<div class="publication-item">
    <div class="authors">56. Accession#: HE801590 Status: confidential until 31-DEC-2012 Description: Rabies virus N gene for nucleoprotein, genomic RNA, isolate Pk 59</div>
</div>
<div class="publication-item">
    <div class="authors">57. Accession#: HE801591 Status: confidential until 31-DEC-2012 Description: Rabies virus N gene for nucleoprotein, genomic RNA, isolate Pk 60</div>
</div>
<div class="publication-item">
    <div class="authors">58. Accession#: FR772081 Description: Hollyhock yellow vein mosaic virus, complete genome, isolate [Pakistan:17-5:06] Lahore10</div>
</div>
<div class="publication-item">
    <div class="authors">59. Accession#: FR772082 Description: Hollyhock leaf curl virus, complete genome, isolate [Pakistan:20-4:06] Faisalabad3</div>
</div>
<div class="publication-item">
    <div class="authors">60. Accession#: FR772083 Description: Cotton leaf curl Multan virus betasatellite, isolate [Pakistan:20-4:06] Faisalabad1</div>
</div>
<div class="publication-item">
    <div class="authors">61. Accession#: FR772084 Description: Gossypium darwinii symptomless alphasatellite, isolate [Pakistan:20-4:06] Faisalabad2</div>
</div>
<div class="publication-item">
    <div class="authors">62. Accession#: FR772085 Description: Ageratum conyzoides associated symptomless virus alphasatellite, isolate [Pakistan:17-5:06] Lahore1</div>
</div>
<div class="publication-item">
    <div class="authors">63. Accession#: FR772086 Description: Hollyhock yellow vein virus associated symptomless alphasatellite, isolate [Pakistan:17-5:06] Lahore2</div>
</div>
<div class="publication-item">
    <div class="authors">64. Accession#: FR772087 Description: Gossypium mustilinum symptomless alphasatellite, isolate [Pakistan:17-5:06] Lahore3</div>
</div>
<div class="publication-item">
    <div class="authors">65. Accession#: FR772088 Description: Sida leaf curl virus-associated DNA 1, isolate [Pakistan:17-5:06] Lahore 4</div>
</div>
<div class="publication-item">
    <div class="authors">66. Accession#: FR772089 Description: Cotton leaf curl Burewala alphasatellite, isolate [Pakistan:17-5:06] Lahore 5</div>
</div>
<div class="publication-item">
    <div class="authors">67. Accession#: FR772090 Description: Cotton leaf curl Burewala alphasatellite, isolate [Pakistan:17-5:06] Lahore 6</div>
</div>
<div class="publication-item">
    <div class="authors">68. Accession#: FR772091 Description: Cotton leaf curl Burewala alphasatellite, isolate [Pakistan:17-5:06] Lahore7</div>
</div>
<div class="publication-item">
    <div class="authors">69. Accession#: FR772092 Description: Gossypium darwinii symptomless alphasatellite, isolate [Pakistan:17-5:06] Lahore9</div>
</div>
<div class="publication-item">
    <div class="authors">70. Accession#: FR750318 Description: Cotton leaf curl Burewala virus complete genome, clone MV12</div>
</div>
<div class="publication-item">
    <div class="authors">71. Accession#: FR750319 Description: Cotton leaf curl Burewala virus complete genome, clone MV2A</div>
</div>
<div class="publication-item">
    <div class="authors">72. Accession#: FR750320 Description: Cotton leaf curl Burewala virus complete genome, clone MV2B</div>
</div>
<div class="publication-item">
    <div class="authors">73. Accession#: FR750321 Description: Cotton leaf curl Burewala virus complete genome, clone MV15</div>
</div>
<div class="publication-item">
    <div class="authors">74. Accession#: FR750322 Description: Cotton leaf curl Burewala virus complete genome, clone MV16</div>
</div>
<div class="publication-item">
    <div class="authors">75. Accession#: FR750323 Description: Cotton leaf curl Burewala virus complete genome, clone MV18A</div>
</div>
<div class="publication-item">
    <div class="authors">76. Accession#: FR750324 Description: Cotton leaf curl Burewala virus complete genome, clone MV18B</div>
</div>
<div class="publication-item">
    <div class="authors">77. Accession#: FR715681 Description: Malvastrum yellow vein Changa Manga virus complete sequence, clone MV10</div>
</div>
<div class="publication-item">
    <div class="authors">78. Accession No. FN678906: Description: Croton yellow vein mosaic virus, complete genome sequence, clone HYDNA A</div>
</div>
<div class="publication-item">
    <div class="authors">79. Accession No: FN678779: Description: Cotton leaf curl Multan betasatellite, complete sequence, clone HYBETA</div>
</div>
<div class="publication-item">
    <div class="authors">80. Accession No. AM261836: Description: Ageratum enation virus complete genome</div>
</div>
<div class="publication-item">
    <div class="authors">81. Accession No. AM258977: Description: Tomato leaf curl New Delhi virus, complete genome</div>
</div>
<div class="publication-item">
    <div class="authors">82. Accession No. AM258978: Description: Chilli leaf curl virus satellite DNA beta, complete sequence</div>
</div>



<div class="publication-item">
    <div class="authors">83. Accession No. AM260465: Description: Tobacco leaf curl virus C1 gene</div>
</div>
<div class="publication-item">
    <div class="authors">84. Accession No. AM260466: Description: Bell pepper leaf curl virus C1 gene</div>
</div>
<div class="publication-item">
    <div class="authors">85. Accession No. AM392426: Description: Tomato leaf curl New Dehli virus [Multan;Duranta repens] segment B, complete viral segment</div>
</div>
<div class="publication-item">
    <div class="authors">86. Accession No. AM292302: Description: Tomato leaf curl New Dehli virus-[Multan; Luffa] V2 gene, AV3 gene, CP gene, AC1 gene, REn gene, TrAP gene, AC4 gene and AC5 gene</div>
</div>
<div class="publication-item">
    <div class="authors">87. Accession No. AM286794: Description: Squash leaf curl China virus - [Cucurbita pepo: Lahore] AV2 gene, CP gene, AC1 gene, TrAP gene, ReN gene, AC4 gene and AC5 gene</div>
</div>
<div class="publication-item">
    <div class="authors">88. Accession No. AM292303: Description: Papaya leaf curl virus [vinca;Lahore] partial CP gene for Coat protein</div>
</div>
<div class="publication-item">
    <div class="authors">89. Accession No. AJ 810825: Description: Ageratum yellow vein virus-Pakistan, V2 gene for coat protein</div>
</div>
<div class="publication-item">
    <div class="authors">90. Accession No. AJ 854186: Description: Tomato leaf curl New Delhi virus (Bitter Gourd), V2 gene for coat protein</div>
</div>
<div class="publication-item">
    <div class="authors">91. Accession No. AJ 889185: Description: Tomato leaf curl New Delhi virus (Eclipta prostrata) V2 gene for coat protein</div>
</div>
<div class="publication-item">
    <div class="authors">92. Accession No. AM 040436: Description: Sugarcane mosaic virus (SCMV) coat protein gene (Bundaberg isolate)</div>
</div>
<div class="publication-item">
    <div class="authors">93. Accession No. DQ648195: Description: Sugarcane mosaic virus (SCMV) coat protein gene (Brisbane isolate)</div>
</div>
<div class="publication-item">
    <div class="authors">94. Accession No. AM 040437: Description: Solanum Yellow leaf curl virus (SYLCV) V2 gene for coat protein</div>
</div>
<div class="publication-item">
    <div class="authors">95. Accession No. AM 040438: Description: Zinnia leaf curl virus (ZLCV) V2 gene for coat protein</div>
</div>
<div class="publication-item">
    <div class="authors">96. Accession No. AM117759: Description: Cotton leaf curl virus (Sonchus) C1 gene for replication</div>
</div>
<div class="publication-item">
    <div class="authors">97. Accession No. AM491589: Description: Pepper leaf curl Bangladesh virus V2 gene, CP gene, TrAP gene, REn gene, C1 gene and C4 gene, segment A, complete sequence</div>
</div>
<div class="publication-item">
    <div class="authors">98. Accession No. AM491590: Description: Tomato leaf curl New Delhi virus CP gene, V3 gene, V2 gene, REn gene, C2 gene, C1 gene and C4 gene, segment A, complete sequence</div>
</div> --}}

            </div>
        </div>
        </div>
    </section>

    <!-- Research Projects Section -->
    {{-- <section class="section-padding">
        <div class="container">
            <h2 class="section-title fade-in">Research Projects</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="info-card slide-in-left">
                        <i class="fas fa-seedling"></i>
                        <h4>Effect of Moringa oleifera on Cotton</h4>
                        <p>Effect of exogenous application of leaf extract of bio stimulant Moringa oleifera and plant growth promoting bacteria on the growth and productivity of cotton.</p>
                        <p><strong>Duration:</strong> 2022-23 | <strong>Funding:</strong> Rs. 3.0 million</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="info-card slide-in-right">
                        <i class="fas fa-tree"></i>
                        <h4>Biochar for Cotton Defense</h4>
                        <p>Effect of indigenously produced bio char on the induction of Cotton defense response against wilt inducing pathogens.</p>
                        <p><strong>Duration:</strong> 2021-22 | <strong>Funding:</strong> Rs. 3 million</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="info-card slide-in-left">
                        <i class="fas fa-wheat-awn"></i>
                        <h4>Wheat Associated Microbiome</h4>
                        <p>Occurrence Diversity of Wheat Associated Microbiome and their Impact on Production.</p>
                        <p><strong>Duration:</strong> 2020-21 | <strong>Funding:</strong> Rs. 0.250 million</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="info-card slide-in-right">
                        <i class="fas fa-recycle"></i>
                        <h4>Biochar from Organic Waste</h4>
                        <p>Evaluation of biochar produced from indigenous organic waste in priming plant defense and growth stimulation.</p>
                        <p><strong>Duration:</strong> 2019 | <strong>Funding:</strong> Rs. 0.250 million</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="info-card slide-in-right">
                        <i class="fas fa-recycle"></i>
                        <h4>Biochar from Organic Waste</h4>
                        <p>Evaluation of biochar produced from indigenous organic waste in priming plant defense and growth stimulation.</p>
                        <p><strong>Duration:</strong> 2019 | <strong>Funding:</strong> Rs. 0.250 million</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="info-card slide-in-right">
                        <i class="fas fa-recycle"></i>
                        <h4>Biochar from Organic Waste</h4>
                        <p>Evaluation of biochar produced from indigenous organic waste in priming plant defense and growth stimulation.</p>
                        <p><strong>Duration:</strong> 2019 | <strong>Funding:</strong> Rs. 0.250 million</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

   


    <!-- Contact Section -->
    {{-- <section class="section-padding bg-light-custom">
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
                                            <strong>Office:</strong> 042-99231847<br>
                                            <strong>Cell:</strong> 0312-4155908
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        <div>
                                            <strong>Email:</strong><br>
                                            haider65us@yahoo.com<br>
                                            dean.fas@pu.edu.pk
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div>
                                            <strong>Address:</strong><br>
                                            Faculty of Agricultural Sciences<br>
                                            University of the Punjab, Lahore
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4 class="mb-4">Professional Profile</h4>
                                <p>Prof. Dr. Muhammad Saleem Haider is an accomplished researcher, academician and administrator with extensive experience in agricultural sciences, particularly in plant virology, transgenic crops, and pest management.</p>
                                <p>With over 200 research publications, numerous awards, and leadership roles in prestigious organizations, he continues to contribute significantly to the field of agricultural sciences in Pakistan and internationally.</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

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