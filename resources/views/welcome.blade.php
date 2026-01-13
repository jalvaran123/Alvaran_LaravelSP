<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', "Alvaran's Portfolio Hub") }}</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Fonts - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --teal-primary: #008B8B;
            --teal-dark: #006666;
            --teal-light: #00A3A3;
            --purple-dark: #1a1a2e;
            --purple-accent: #6B4C9A;
            --navy-dark: #0f0f23;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* ========== NAVBAR ========== */
        .navbar {
            background-color: var(--teal-primary) !important;
            padding: 1rem 0;
            box-shadow: 0 2px 15px rgba(0, 139, 139, 0.3);
        }

        .navbar-brand {
            color: #fff !important;
            font-weight: 700;
            font-size: 1.5rem;
            letter-spacing: 0.5px;
        }

        .navbar-brand:hover {
            color: rgba(255, 255, 255, 0.9) !important;
        }

        .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            padding: 0.5rem 1rem !important;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #fff !important;
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }

        .navbar-toggler {
            border: 2px solid rgba(255, 255, 255, 0.5);
            padding: 0.5rem;
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.25);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.9%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* ========== HERO SECTION ========== */
        .hero-section {
            background: linear-gradient(135deg, var(--purple-dark) 0%, var(--navy-dark) 50%, var(--purple-accent) 100%);
            min-height: 90vh;
            display: flex;
            align-items: center;
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 70%, rgba(107, 76, 154, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 70% 30%, rgba(0, 139, 139, 0.2) 0%, transparent 50%);
            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            color: var(--teal-light);
            font-weight: 500;
            margin-bottom: 1.5rem;
        }

        .hero-description {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 2rem;
            max-width: 500px;
        }

        .btn-hero {
            background: linear-gradient(135deg, var(--teal-primary), var(--teal-light));
            color: #fff;
            padding: 0.875rem 2.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 50px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(0, 139, 139, 0.4);
        }

        .btn-hero:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(0, 139, 139, 0.5);
            color: #fff;
        }

        .hero-image-container {
            position: relative;
            z-index: 1;
        }

        .hero-image {
            width: 100%;
            max-width: 450px;
            height: auto;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s ease;
        }

        .hero-image:hover {
            transform: scale(1.02);
        }

        /* ========== CONTACT SECTION ========== */
        .contact-section {
            background-color: #f8f9fa;
            padding: 5rem 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--purple-dark);
            margin-bottom: 3rem;
            text-align: center;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--teal-primary), var(--purple-accent));
            border-radius: 2px;
        }

        .contact-card {
            background: #fff;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            height: 100%;
        }

        .contact-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--purple-dark);
            margin-bottom: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            background: linear-gradient(135deg, rgba(0, 139, 139, 0.1), rgba(107, 76, 154, 0.1));
            transform: translateX(5px);
        }

        .contact-item:last-child {
            margin-bottom: 0;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--teal-primary), var(--purple-accent));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .contact-icon i {
            color: #fff;
            font-size: 1.25rem;
        }

        .contact-info h5 {
            font-size: 0.9rem;
            color: #888;
            font-weight: 500;
            margin-bottom: 0.25rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .contact-info p {
            font-size: 1rem;
            color: var(--purple-dark);
            font-weight: 500;
            margin: 0;
            word-break: break-word;
        }

        .map-container {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            height: 100%;
            min-height: 400px;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            min-height: 400px;
            border: none;
        }

        /* ========== RESPONSIVE STYLES ========== */
        @media (max-width: 991.98px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.25rem;
            }

            .navbar-collapse {
                background-color: var(--teal-dark);
                margin-top: 1rem;
                padding: 1rem;
                border-radius: 10px;
            }

            .navbar-nav .nav-link {
                padding: 0.75rem 1rem !important;
                margin: 0.25rem 0;
            }
        }

        @media (max-width: 767.98px) {
            .hero-section {
                padding: 3rem 0;
                min-height: auto;
            }

            .hero-title {
                font-size: 2rem;
                text-align: center;
            }

            .hero-subtitle {
                font-size: 1.1rem;
                text-align: center;
            }

            .hero-description {
                text-align: center;
                margin-left: auto;
                margin-right: auto;
            }

            .hero-content {
                text-align: center;
                margin-bottom: 2rem;
            }

            .hero-image-container {
                text-align: center;
            }

            .hero-image {
                max-width: 300px;
            }

            .contact-card {
                padding: 1.5rem;
                margin-bottom: 2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .contact-item {
                padding: 0.75rem;
            }

            .contact-icon {
                width: 45px;
                height: 45px;
            }
        }

        @media (max-width: 575.98px) {
            .hero-title {
                font-size: 1.75rem;
            }

            .contact-info p {
                font-size: 0.9rem;
            }
        }

        /* ========== UTILITY CLASSES ========== */
        .gradient-text {
            background: linear-gradient(135deg, var(--teal-light), var(--purple-accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Alvaran's Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1 class="hero-title">web dev</h1>
                    <p class="hero-subtitle">trying to be a full stack dev</p>
                    <p class="hero-description">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam porro ipsum temporibus rem.
                        Voluptatem repudiandae commodi, vel optio illo excepturi, dolorum veniam dolor temporibus
                        cupiditate provident quas veritatis quasi quod.
                    </p>
                    <a href="#" class="btn-hero">
                        <i class="fas fa-rocket me-2"></i>View My Projects
                    </a>
                </div>
                <div class="col-lg-6 hero-image-container text-center text-lg-end mt-5 mt-lg-0">
                    <img src="{{ asset('cookiebap.jpg') }}" alt="Developer Profile" class="hero-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="contact-card">
                        <h3><i class="fas fa-address-card me-2 gradient-text"></i>Contact Details</h3>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-info">
                                <h5>Main Location</h5>
                                <p>Davao City</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-info">
                                <h5>School Email</h5>
                                <p>jalvaran_240000002585@uic.edu.ph</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="contact-info">
                                <h5>Phone Number</h5>
                                <p>09916692884</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-university"></i>
                            </div>
                            <div class="contact-info">
                                <h5>Contact Location</h5>
                                <p>UIC Main Campus</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.3775862776943!2d125.5772!3d7.0892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d7f5f5c5555%3A0x1234567890abcdef!2sMaa%2C%20Davao%20City%2C%20Davao%20del%20Sur!5e0!3m2!1sen!2sph!4v1234567890"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
