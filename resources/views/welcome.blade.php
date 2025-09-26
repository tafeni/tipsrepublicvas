<!DOCTYPE html>
<html lang="en">

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- #title -->
    <title>Tips Republic - Professional Sports Predictions & Betting Tips</title>
    <!-- #keywords -->
    <meta name="keywords" content="Sports Predictions, Betting Tips, Football Tips, Basketball Tips, Soccer Predictions, Sports Analysis">
    <!-- #description -->
    <meta name="description" content="Get professional AI-powered sports predictions and betting tips. Join thousands of successful bettors with our premium sports analysis and predictions.">

    <!--  css dependencies start  -->

    <!-- bootstrap five css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- line awesome css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/line-awesome/css/line-awesome.min.css') }}">
    <!-- nice select css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/nice-select/css/nice-select.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/css/magnific-popup.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" href="https://pixner.net/nftlotty3/main/nftlotty-one/assets/vendor/slick/css/slick.css">
    <!-- odometer css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/odometer/css/odometer.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <!-- google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <!-- Font Awesome for sports icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!--  / css dependencies end  -->

    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Custom Sports Theme CSS -->
    <style>
        :root {
            --primary-color: #0f172a;
            --secondary-color: #1e293b;
            --accent-color: #10b981;
            --success-color: #059669;
            --warning-color: #f59e0b;
            --danger-color: #ef4444;
            --dark-color: #0f172a;
            --light-color: #f8fafc;
            --text-primary: #1f2937;
            --text-secondary: #6b7280;
            --gradient-primary: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
            --gradient-accent: linear-gradient(135deg, #10b981 0%, #059669 100%);
            --gradient-light: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            --shadow-soft: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --shadow-medium: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --shadow-strong: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        * {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--gradient-primary);
            color: var(--text-primary);
            line-height: 1.7;
            overflow-x: hidden;
        }

        .sports-hero {
            background: var(--gradient-primary);
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }

        .sports-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 80%, rgba(16, 185, 129, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(16, 185, 129, 0.1) 0%, transparent 50%),
                url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            opacity: 0.8;
        }

        .sports-hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(16, 185, 129, 0.05) 50%, transparent 70%);
            animation: shimmer 8s ease-in-out infinite;
        }

        @keyframes shimmer {
            0%, 100% { opacity: 0.3; transform: translateX(-100%); }
            50% { opacity: 0.8; transform: translateX(100%); }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        @keyframes slideInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Navigation Enhancements */
        .navbar {
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.8rem;
            color: white !important;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        .navbar-brand:hover {
            transform: scale(1.05);
            color: var(--accent-color) !important;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            padding: 0.8rem 1.2rem !important;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--gradient-accent);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover {
            color: var(--accent-color) !important;
            transform: translateY(-2px);
        }

        .nav-link:hover::after {
            width: 80%;
        }

        /* Enhanced Button Styles */
        .btn-primary-custom {
            background: var(--gradient-accent);
            border: none;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: var(--shadow-medium);
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-primary-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-primary-custom:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: var(--shadow-strong);
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
        }

        .btn-primary-custom:hover::before {
            left: 100%;
        }

        .btn-outline-light {
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .btn-outline-light:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--accent-color);
            color: var(--accent-color);
            transform: translateY(-2px);
        }

        .stats-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 24px;
            padding: 2.5rem 2rem;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            animation: float 6s ease-in-out infinite;
        }

        .stats-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--gradient-accent);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .stats-card:hover {
            transform: translateY(-8px) scale(1.02);
            background: rgba(255, 255, 255, 0.15);
            box-shadow: var(--shadow-strong);
            border-color: rgba(16, 185, 129, 0.3);
        }

        .stats-card:hover::before {
            transform: scaleX(1);
        }

        .stats-card:nth-child(1) { animation-delay: 0s; }
        .stats-card:nth-child(2) { animation-delay: 1.5s; }
        .stats-card:nth-child(3) { animation-delay: 3s; }
        .stats-card:nth-child(4) { animation-delay: 4.5s; }

        .prediction-card {
            background: linear-gradient(145deg, #ffffff 0%, #f8fafc 100%);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: var(--shadow-soft);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(16, 185, 129, 0.1);
            color: var(--text-primary) !important;
            position: relative;
            overflow: hidden;
        }

        .prediction-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--gradient-accent);
            transition: width 0.3s ease;
        }

        .prediction-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: var(--shadow-strong);
            border-color: rgba(16, 185, 129, 0.3);
        }

        .prediction-card:hover::before {
            width: 8px;
        }

        .prediction-card h5,
        .prediction-card h4,
        .prediction-card h6 {
            color: var(--text-primary) !important;
        }

        .prediction-card p {
            color: var(--text-secondary) !important;
        }

        .prediction-card .text-muted {
            color: #6b7280 !important;
        }

        .win-rate {
            background: var(--gradient-accent);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 900;
            font-size: 3rem;
            text-shadow: 0 4px 8px rgba(16, 185, 129, 0.3);
            animation: pulse 3s ease-in-out infinite;
        }

        .sport-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient-accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: white;
            box-shadow: var(--shadow-medium);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .sport-icon::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.2) 50%, transparent 70%);
            transform: translateX(-100%);
            transition: transform 0.6s;
        }

        .sport-icon:hover {
            transform: scale(1.1) rotate(5deg);
            box-shadow: var(--shadow-strong);
        }

        .sport-icon:hover::before {
            transform: translateX(100%);
        }

        .feature-section {
            background: var(--light-color);
            padding: 5rem 0;
            color: var(--text-primary);
        }

        .feature-section h2,
        .feature-section h3,
        .feature-section h4,
        .feature-section h5,
        .feature-section h6 {
            color: var(--text-primary) !important;
        }

        .feature-section .lead {
            color: var(--text-secondary) !important;
        }

        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            color: var(--text-primary) !important;
        }

        .testimonial-card h6 {
            color: var(--text-primary) !important;
        }

        .testimonial-card p {
            color: var(--text-secondary) !important;
        }

        .testimonial-card .text-muted {
            color: #6b7280 !important;
        }

        .rating {
            color: #fbbf24;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        /* Ensure all text in white sections is visible */
        .feature-section .text-muted,
        section[style*="background: linear-gradient(135deg, #f8fafc"] .text-muted {
            color: #6b7280 !important;
        }

        /* Make sure headings are dark and visible */
        .feature-section h1,
        .feature-section h2,
        .feature-section h3,
        .feature-section h4,
        .feature-section h5,
        .feature-section h6,
        section[style*="background: linear-gradient(135deg, #f8fafc"] h1,
        section[style*="background: linear-gradient(135deg, #f8fafc"] h2,
        section[style*="background: linear-gradient(135deg, #f8fafc"] h3,
        section[style*="background: linear-gradient(135deg, #f8fafc"] h4,
        section[style*="background: linear-gradient(135deg, #f8fafc"] h5,
        section[style*="background: linear-gradient(135deg, #f8fafc"] h6 {
            color: #1f2937 !important;
            font-weight: bold;
        }

        /* Ensure paragraph text is visible */
        .feature-section p,
        section[style*="background: linear-gradient(135deg, #f8fafc"] p {
            color: #374151 !important;
        }

        /* Make sure all card content is visible */
        .prediction-card * {
            color: inherit;
        }

        .prediction-card .fw-bold {
            color: var(--text-primary) !important;
        }

        .prediction-card small {
            color: #6b7280 !important;
        }

        /* Make section titles in light backgrounds highly conspicuous */
        section[style*="background: linear-gradient(135deg, #f8fafc"] .display-4,
        section[style*="background: linear-gradient(135deg, #f8fafc"] h2.display-4 {
            color: #0f172a !important;
            font-weight: 900 !important;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-size: 3.5rem !important;
        }

        /* Specific styling for Today's Hot Picks and Testimonials sections */
        .hot-picks-title,
        .testimonials-title {
            color: #0f172a !important;
            font-weight: 900 !important;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
            font-size: 3.5rem !important;
            margin-bottom: 2rem !important;
        }

        /* Make lead text more visible in light sections */
        section[style*="background: linear-gradient(135deg, #f8fafc"] .lead {
            color: #1f2937 !important;
            font-weight: 500 !important;
            font-size: 1.3rem !important;
        }

        /* Professional Badge Styles */
        .badge {
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: var(--shadow-soft);
        }

        .badge.bg-success {
            background: var(--gradient-accent) !important;
            border: none;
        }

        .badge.bg-warning {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important;
            border: none;
        }

        /* Progress Bar Enhancements */
        .progress {
            background: rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .progress-bar {
            border-radius: 10px;
            transition: width 1s ease-in-out;
            position: relative;
            overflow: hidden;
        }

        .progress-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.3) 50%, transparent 70%);
            animation: shimmer 2s infinite;
        }

        /* Enhanced Typography */
        .display-1, .display-2, .display-3, .display-4 {
            font-weight: 900;
            line-height: 1.2;
            letter-spacing: -0.02em;
        }

        .lead {
            font-size: 1.4rem;
            font-weight: 400;
            line-height: 1.6;
        }

        /* Professional Section Spacing */
        section {
            padding: 6rem 0;
        }

        .section-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(16, 185, 129, 0.3), transparent);
            margin: 4rem 0;
        }

        /* Testimonial Enhancements */
        .testimonial-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: var(--shadow-soft);
            text-align: center;
            color: var(--text-primary) !important;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .testimonial-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-accent);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-strong);
        }

        .testimonial-card:hover::before {
            transform: scaleX(1);
        }

        /* Footer Enhancements */
        footer {
            background: var(--gradient-primary) !important;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: white !important;
        }

        /* Ensure all footer text is visible */
        footer h5,
        footer h6,
        footer p,
        footer a,
        footer li,
        footer small,
        footer .text-muted {
            color: white !important;
        }

        footer .text-muted {
            color: rgba(255, 255, 255, 0.7) !important;
        }

        footer a:hover {
            color: var(--accent-color) !important;
            text-decoration: none;
        }

        footer .list-unstyled a {
            color: rgba(255, 255, 255, 0.8) !important;
            transition: all 0.3s ease;
        }

        footer .list-unstyled a:hover {
            color: var(--accent-color) !important;
            transform: translateX(5px);
        }

        footer .fab,
        footer .fas {
            color: rgba(255, 255, 255, 0.7) !important;
            transition: all 0.3s ease;
        }

        footer .fab:hover,
        footer .fas:hover {
            color: var(--accent-color) !important;
            transform: scale(1.2);
        }

        /* Scroll to Top Button */
        .scrollToTop {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--gradient-accent);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: var(--shadow-medium);
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .scrollToTop:hover {
            transform: translateY(-3px) scale(1.1);
            box-shadow: var(--shadow-strong);
            color: white;
        }

        /* Loading Animation */
        #pre_loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-primary);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #pre_loader::after {
            content: '';
            width: 50px;
            height: 50px;
            border: 3px solid rgba(16, 185, 129, 0.3);
            border-top: 3px solid var(--accent-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

</head>

<body>

<!--  Preloader  -->
<div id="pre_loader"></div>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: rgba(26, 71, 42, 0.95); backdrop-filter: blur(10px);">
    <div class="container">
        <a class="navbar-brand" href="/">
            <i class="fas fa-chart-line me-2"></i>
            TIPS REPUBLIC
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#predictions">Predictions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#stats">Statistics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
            </ul>
            
            <form action="/secured" method="post" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-primary-custom">
                    <i class="fas fa-crown me-2"></i>Subscribe Now
                </button>
            </form>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="home" class="sports-hero d-flex align-items-center">
    <div class="container position-relative">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6">
                <div class="text-white">
                    <h1 class="display-3 fw-bold mb-4 wow fadeInUp" data-wow-duration="1s">
                        Professional Sports 
                        <span style="color: var(--accent-color);">Predictions</span>
                    </h1>
                    <p class="lead mb-4 wow fadeInUp" data-wow-duration="1.2s">
                        Get AI-powered sports predictions with industry-leading accuracy. Join thousands of successful bettors who trust our expert analysis.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-5 wow fadeInUp" data-wow-duration="1.4s">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <span>87% Win Rate</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <span>Daily Predictions</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <span>Expert Analysis</span>
                        </div>
                    </div>
                    <form action="/secured" method="post" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-primary-custom btn-lg me-3 wow fadeInUp" data-wow-duration="1.6s">
                            <i class="fas fa-rocket me-2"></i>Start Winning Today
                        </button>
                    </form>
                    <a href="#predictions" class="btn btn-outline-light btn-lg wow fadeInUp" data-wow-duration="1.8s">
                        View Predictions
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3 wow fadeInRight" data-wow-duration="1s">
                    <div class="col-6">
                        <div class="stats-card">
                            <div class="win-rate">87%</div>
                            <h5 class="text-white mb-0">Win Rate</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stats-card">
                            <div class="win-rate">15K+</div>
                            <h5 class="text-white mb-0">Happy Users</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stats-card">
                            <div class="win-rate">500+</div>
                            <h5 class="text-white mb-0">Daily Tips</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stats-card">
                            <div class="win-rate">24/7</div>
                            <h5 class="text-white mb-0">Support</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sports Categories Section -->
<section id="predictions" class="feature-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="display-4 fw-bold mb-4 wow fadeInUp" data-wow-duration="0.8s">
                    Sports We Cover
                </h2>
                <p class="lead text-muted wow fadeInUp" data-wow-duration="1s">
                    Get expert predictions across all major sports with our AI-powered analysis system
                </p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="prediction-card text-center wow fadeInUp" data-wow-duration="0.8s">
                    <div class="sport-icon">
                        <i class="fas fa-futbol"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Football</h5>
                    <p class="text-muted mb-3">NFL predictions with detailed analysis of team performance, player stats, and weather conditions.</p>
                    <div class="d-flex justify-content-between">
                        <small class="text-success fw-bold">89% Win Rate</small>
                        <small class="text-muted">Daily Tips</small>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="prediction-card text-center wow fadeInUp" data-wow-duration="1s">
                    <div class="sport-icon">
                        <i class="fas fa-basketball-ball"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Basketball</h5>
                    <p class="text-muted mb-3">NBA and college basketball predictions with advanced statistical modeling and trend analysis.</p>
                    <div class="d-flex justify-content-between">
                        <small class="text-success fw-bold">85% Win Rate</small>
                        <small class="text-muted">Live Updates</small>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="prediction-card text-center wow fadeInUp" data-wow-duration="1.2s">
                    <div class="sport-icon">
                        <i class="fas fa-baseball-ball"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Baseball</h5>
                    <p class="text-muted mb-3">MLB predictions covering pitcher matchups, team form, and historical performance data.</p>
                    <div class="d-flex justify-content-between">
                        <small class="text-success fw-bold">82% Win Rate</small>
                        <small class="text-muted">Season Long</small>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="prediction-card text-center wow fadeInUp" data-wow-duration="1.4s">
                    <div class="sport-icon">
                        <i class="fas fa-hockey-puck"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Hockey</h5>
                    <p class="text-muted mb-3">NHL predictions with goalie analysis, power play statistics, and injury reports.</p>
                    <div class="d-flex justify-content-between">
                        <small class="text-success fw-bold">87% Win Rate</small>
                        <small class="text-muted">Playoffs</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Today's Predictions Section -->
<section class="py-5" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="display-4 fw-bold mb-4 wow fadeInUp hot-picks-title" data-wow-duration="0.8s">
                    Today's Hot Picks
                </h2>
                <p class="lead text-muted wow fadeInUp" data-wow-duration="1s">
                    Our AI has analyzed thousands of data points to bring you today's most confident predictions
                </p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="prediction-card wow fadeInUp" data-wow-duration="0.8s">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-futbol text-primary me-2"></i>
                            <span class="fw-bold">NFL</span>
                        </div>
                        <span class="badge bg-success">High Confidence</span>
                    </div>
                    <h5 class="fw-bold mb-2">Chiefs vs Bills</h5>
                    <p class="text-muted mb-3">Kansas City Chiefs to win by 3+ points</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">Confidence:</small>
                            <div class="progress" style="height: 6px; width: 100px;">
                                <div class="progress-bar bg-success" style="width: 92%"></div>
                            </div>
                        </div>
                        <span class="fw-bold text-success">92%</span>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="prediction-card wow fadeInUp" data-wow-duration="1s">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-basketball-ball text-warning me-2"></i>
                            <span class="fw-bold">NBA</span>
                        </div>
                        <span class="badge bg-warning">Medium Confidence</span>
                    </div>
                    <h5 class="fw-bold mb-2">Lakers vs Warriors</h5>
                    <p class="text-muted mb-3">Over 225.5 total points scored</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">Confidence:</small>
                            <div class="progress" style="height: 6px; width: 100px;">
                                <div class="progress-bar bg-warning" style="width: 78%"></div>
                            </div>
                        </div>
                        <span class="fw-bold text-warning">78%</span>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="prediction-card wow fadeInUp" data-wow-duration="1.2s">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-baseball-ball text-info me-2"></i>
                            <span class="fw-bold">MLB</span>
                        </div>
                        <span class="badge bg-success">High Confidence</span>
                    </div>
                    <h5 class="fw-bold mb-2">Yankees vs Red Sox</h5>
                    <p class="text-muted mb-3">Yankees moneyline victory</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">Confidence:</small>
                            <div class="progress" style="height: 6px; width: 100px;">
                                <div class="progress-bar bg-success" style="width: 88%"></div>
                            </div>
                        </div>
                        <span class="fw-bold text-success">88%</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <form action="/secured" method="post" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-primary-custom btn-lg wow fadeInUp" data-wow-duration="1s">
                    <i class="fas fa-unlock me-2"></i>Unlock All Predictions
                </button>
            </form>
        </div>
    </div>
</section>


<!-- Statistics Section -->
<section id="stats" class="py-5" style="background: var(--dark-color); color: white;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="display-4 fw-bold mb-4 wow fadeInUp" data-wow-duration="0.8s">
                    Proven Track Record
                </h2>
                <p class="lead wow fadeInUp" data-wow-duration="1s">
                    Our numbers speak for themselves. Join thousands of successful bettors who trust our predictions.
                </p>
            </div>
        </div>
        
        <div class="row g-4 text-center">
            <div class="col-md-3">
                <div class="wow fadeInUp" data-wow-duration="0.8s">
                    <div class="win-rate">87%</div>
                    <h5 class="mb-0">Overall Win Rate</h5>
                    <small class="text-muted">Last 30 days</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="wow fadeInUp" data-wow-duration="1s">
                    <div class="win-rate">15,247</div>
                    <h5 class="mb-0">Active Members</h5>
                    <small class="text-muted">Growing daily</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="wow fadeInUp" data-wow-duration="1.2s">
                    <div class="win-rate">$2.4M</div>
                    <h5 class="mb-0">Member Winnings</h5>
                    <small class="text-muted">This month</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="wow fadeInUp" data-wow-duration="1.4s">
                    <div class="win-rate">500+</div>
                    <h5 class="mb-0">Daily Predictions</h5>
                    <small class="text-muted">All sports covered</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="feature-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="display-4 fw-bold mb-4 wow fadeInUp" data-wow-duration="0.8s">
                    Choose Your Plan
                </h2>
                <p class="lead text-muted wow fadeInUp" data-wow-duration="1s">
                    Start winning today with our professional sports predictions
                </p>
            </div>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4">
                <div class="prediction-card text-center wow fadeInUp" data-wow-duration="0.8s">
                    <h4 class="fw-bold mb-3">Starter</h4>
                    <div class="win-rate mb-3">$29</div>
                    <p class="text-muted mb-4">per month</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>5 Daily Predictions</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Basic Analysis</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Email Support</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Mobile Access</li>
                    </ul>
                    <form action="/secured" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary w-100">Get Started</button>
                    </form>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="prediction-card text-center position-relative wow fadeInUp" data-wow-duration="1s" style="border: 2px solid var(--accent-color);">
                    <div class="position-absolute top-0 start-50 translate-middle">
                        <span class="badge bg-success px-3 py-2">Most Popular</span>
                    </div>
                    <h4 class="fw-bold mb-3 mt-3">Professional</h4>
                    <div class="win-rate mb-3">$79</div>
                    <p class="text-muted mb-4">per month</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Unlimited Predictions</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Advanced Analysis</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Priority Support</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Live Chat</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Exclusive Tips</li>
                    </ul>
                    <form action="/secured" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary-custom w-100">Start Winning</button>
                    </form>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="prediction-card text-center wow fadeInUp" data-wow-duration="1.2s">
                    <h4 class="fw-bold mb-3">VIP</h4>
                    <div class="win-rate mb-3">$149</div>
                    <p class="text-muted mb-4">per month</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Everything in Pro</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Personal Analyst</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Custom Strategies</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Phone Support</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>VIP Community</li>
                    </ul>
                    <form action="/secured" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary w-100">Go VIP</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="display-4 fw-bold mb-4 wow fadeInUp testimonials-title" data-wow-duration="0.8s">
                    What Our Members Say
                </h2>
                <p class="lead text-muted wow fadeInUp" data-wow-duration="1s">
                    Join thousands of successful bettors who trust Tips Republic
                </p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="testimonial-card wow fadeInUp" data-wow-duration="0.8s">
                    <div class="rating mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="mb-4">"I've been using Tips Republic for 6 months and my betting success rate has improved dramatically. The AI predictions are incredibly accurate!"</p>
                    <div class="d-flex align-items-center">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                            <span class="text-white fw-bold">MJ</span>
                        </div>
                        <div>
                            <h6 class="mb-0">Mike Johnson</h6>
                            <small class="text-muted">Professional Bettor</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="testimonial-card wow fadeInUp" data-wow-duration="1s">
                    <div class="rating mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="mb-4">"The detailed analysis and high win rate make this service worth every penny. I've made back my subscription fee in the first week!"</p>
                    <div class="d-flex align-items-center">
                        <div class="bg-success rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                            <span class="text-white fw-bold">SR</span>
                        </div>
                        <div>
                            <h6 class="mb-0">Sarah Rodriguez</h6>
                            <small class="text-muted">Sports Enthusiast</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="testimonial-card wow fadeInUp" data-wow-duration="1.2s">
                    <div class="rating mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="mb-4">"Best sports prediction service I've ever used. The customer support is excellent and the predictions are consistently profitable."</p>
                    <div class="d-flex align-items-center">
                        <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                            <span class="text-white fw-bold">DL</span>
                        </div>
                        <div>
                            <h6 class="mb-0">David Lee</h6>
                            <small class="text-muted">Business Owner</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5" style="background: var(--dark-color); color: white;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="wow fadeInLeft" data-wow-duration="1s">
                    <h2 class="display-4 fw-bold mb-4">About Tips Republic</h2>
                    <p class="lead mb-4">
                        We are a team of data scientists, sports analysts, and AI experts dedicated to providing the most accurate sports predictions in the industry.
                    </p>
                    <p class="mb-4">
                        Our advanced machine learning algorithms analyze thousands of data points including team performance, player statistics, weather conditions, historical matchups, and market trends to deliver predictions with industry-leading accuracy.
                    </p>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-brain text-success me-3 fs-4"></i>
                                <div>
                                    <h6 class="mb-0">AI-Powered</h6>
                                    <small class="text-muted">Advanced algorithms</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-shield-alt text-success me-3 fs-4"></i>
                                <div>
                                    <h6 class="mb-0">Trusted</h6>
                                    <small class="text-muted">15K+ members</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-chart-line text-success me-3 fs-4"></i>
                                <div>
                                    <h6 class="mb-0">Profitable</h6>
                                    <small class="text-muted">87% win rate</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-clock text-success me-3 fs-4"></i>
                                <div>
                                    <h6 class="mb-0">24/7 Support</h6>
                                    <small class="text-muted">Always here to help</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center wow fadeInRight" data-wow-duration="1s">
                    <div class="bg-gradient p-5 rounded-3" style="background: linear-gradient(135deg, var(--accent-color), var(--success-color));">
                        <i class="fas fa-trophy text-white mb-4" style="font-size: 4rem;"></i>
                        <h3 class="text-white fw-bold mb-3">Ready to Start Winning?</h3>
                        <p class="text-white mb-4">Join thousands of successful bettors today</p>
                        <form action="/secured" method="post">
                            @csrf
                            <button type="submit" class="btn btn-light btn-lg">
                                <i class="fas fa-rocket me-2"></i>Get Started Now
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-5" style="background: #0f172a; color: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <h5 class="fw-bold mb-3">
                    <i class="fas fa-chart-line me-2"></i>
                    TIPS REPUBLIC
                </h5>
                <p class="text-muted">
                    Professional AI-powered sports predictions with industry-leading accuracy. Join thousands of successful bettors today.
                </p>
                <div class="d-flex gap-3">
                    <a href="#" class="text-muted"><i class="fab fa-twitter fs-5"></i></a>
                    <a href="#" class="text-muted"><i class="fab fa-facebook fs-5"></i></a>
                    <a href="#" class="text-muted"><i class="fab fa-instagram fs-5"></i></a>
                    <a href="#" class="text-muted"><i class="fab fa-telegram fs-5"></i></a>
                </div>
            </div>
            <div class="col-lg-2 mb-4">
                <h6 class="fw-bold mb-3">Sports</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Football</a></li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Basketball</a></li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Baseball</a></li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Hockey</a></li>
                </ul>
            </div>
            <div class="col-lg-2 mb-4">
                <h6 class="fw-bold mb-3">Company</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#about" class="text-muted text-decoration-none">About</a></li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Contact</a></li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Privacy</a></li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Terms</a></li>
                </ul>
            </div>
            <div class="col-lg-2 mb-4">
                <h6 class="fw-bold mb-3">Support</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Help Center</a></li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">FAQ</a></li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Live Chat</a></li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-2 mb-4">
                <h6 class="fw-bold mb-3">Quick Start</h6>
                <form action="/secured" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary-custom w-100 mb-3">
                        <i class="fas fa-crown me-2"></i>Subscribe
                    </button>
                </form>
                <small class="text-muted">Start winning today with our premium predictions</small>
            </div>
        </div>
        <hr class="my-4" style="border-color: #374151;">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="text-muted mb-0">&copy; 2024 Tips Republic. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="text-muted mb-0">Made with <i class="fas fa-heart text-danger"></i> for sports bettors</p>
            </div>
        </div>
    </div>
</footer>

<!-- scroll to top -->
<a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>

<!--  js dependencies start  -->

<!-- jquery -->
<script data-cfasync="false" src="{{ asset('assets/js/email-decode.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery/jquery-3.6.3.min.js') }}"></script>
<!-- bootstrap five js -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- magnific popup js -->
<script src="{{ asset('assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
<!-- circular-progress-bar -->
<script src="https://cdn.jsdelivr.net/gh/tomik23/circular-progress-bar@latest/docs/circularProgressBar.min.js"></script>
<!-- slick js -->
<script src="{{ asset('assets/vendor/slick/js/slick.min.js') }}"></script>
<!-- odometer js -->
<script src="{{ asset('assets/vendor/odometer/js/odometer.min.js') }}"></script>
<!-- viewport js -->
<script src="{{ asset('assets/vendor/viewport/viewport.jquery.js') }}"></script>
<!-- jquery ui js -->
<script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- wow js -->
<script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>

<script src="{{ asset('assets/vendor/jquery-validate/jquery.validate.min.js') }}"></script>

<!--  / js dependencies end  -->

<!-- plugins js -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<!-- main js -->
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
