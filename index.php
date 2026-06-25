<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arjuna Hettiarachchi | ICT Professional Portfolio</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-bg: #050505;
            --secondary-bg: #111111;
            --accent-color: #ff3e00; /* Vibrant Orange/Red */
            --accent-glow: rgba(255, 62, 0, 0.3);
            --text-primary: #ffffff;
            --text-secondary: #a0a0a0;
            --nav-bg: rgba(5, 5, 5, 0.9);
        }
        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-primary);
            background-color: var(--primary-bg);
            scroll-behavior: smooth;
            overflow-x: hidden;
        }
        /* New Background Animation */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #050505 0%, #1a0a00 100%);
            z-index: -1;
        }
        .navbar {
            background: var(--nav-bg);
            backdrop-filter: blur(15px);
            border-bottom: 1px solid rgba(255, 62, 0, 0.1);
            padding: 20px 0;
            transition: 0.4s;
        }
        .navbar-brand {
            color: var(--accent-color) !important;
            font-weight: 900;
            letter-spacing: 2px;
            text-shadow: 0 0 10px var(--accent-glow);
        }
        .nav-link {
            color: var(--text-primary) !important;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.9rem;
            margin: 0 10px;
            transition: 0.3s;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--accent-color) !important;
        }
        .hero-section {
            padding: 160px 0 100px;
            background: radial-gradient(circle at 70% 30%, rgba(255, 62, 0, 0.05) 0%, transparent 50%);
        }
        .hero-section h1 {
            font-size: 4rem;
            font-weight: 900;
            background: linear-gradient(to right, #fff 20%, var(--accent-color) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textShine 3s ease-in-out infinite alternate;
        }
        @keyframes textShine {
            from { filter: drop-shadow(0 0 0 var(--accent-glow)); }
            to { filter: drop-shadow(0 0 15px var(--accent-glow)); }
        }
        .hero-accent {
            display: inline-block;
            width: 150px;
            height: 5px;
            background: var(--accent-color);
            box-shadow: 0 0 20px var(--accent-color);
            margin-bottom: 30px;
            border-radius: 10px;
        }
        .role-badge {
            background: transparent;
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 8px 18px;
            border-radius: 50px;
            transition: 0.3s;
            position: relative;
            overflow: hidden;
            display: inline-block;
            margin: 5px;
            font-size: 0.85rem;
            font-weight: 600;
            animation: fadeIn 0.5s ease-out;
        }
        .role-badge:hover {
            border-color: var(--accent-color);
            background: var(--accent-color);
            transform: scale(1.1) rotate(2deg);
        }
        .hero-text {
            color: var(--text-secondary);
            font-size: 1.1rem;
            max-width: 600px;
        }
        .profile-img-container {
            position: relative;
            display: inline-block;
        }
        .profile-img {
            width: 400px;
            height: 400px;
            border-radius: 30px;
            border: 2px solid var(--accent-color);
            box-shadow: 0 0 40px var(--accent-glow);
            object-fit: cover;
            padding: 5px;
            background: linear-gradient(145deg, var(--secondary-bg), #1a1a1a);
            transition: all 0.3s ease-out;
            cursor: pointer;
            filter: contrast(1.1) brightness(1.1);
        }
        .profile-img:hover {
            border-radius: 50%;
            border-width: 4px;
            box-shadow: 0 0 60px var(--accent-color);
        }
        .profile-img-container::after {
            content: "";
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border: 1px solid var(--accent-color);
            border-radius: 35px;
            opacity: 0.3;
            z-index: -1;
            transition: 0.5s;
        }
        .profile-img-container:hover::after {
            transform: scale(1.05);
            opacity: 0.6;
            border-radius: 50%;
        }
        .section-title {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 40px;
            text-transform: uppercase;
        }
        .section-title span {
            display: block;
            width: 60px;
            height: 3px;
            background: var(--accent-color);
            box-shadow: 0 0 10px var(--accent-color);
            margin-top: 10px;
        }
        .text-accent {
            color: var(--accent-color) !important;
            transition: 0.3s;
            background: rgba(255, 71, 26, 0.15);
            padding: 5px 15px;
            border-radius: 50px;
            border: 2px solid var(--accent-color);
            text-decoration: none;
            font-size: 0.8rem;
            font-weight: 700;
            white-space: nowrap;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 0 10px rgba(255, 71, 26, 0.2);
        }
        .text-accent:hover {
            background: var(--accent-color);
            color: #fff !important;
            box-shadow: 0 0 20px var(--accent-color);
            transform: translateY(-2px);
            border-color: #fff;
        }
        .activities-detail-item {
            background: rgba(255, 255, 255, 0.03);
            border-left: 3px solid var(--accent-color);
            padding: 12px 15px;
            border-radius: 0 10px 10px 0;
            transition: 0.3s;
            margin-bottom: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .activities-detail-item:hover {
            background: rgba(255, 71, 26, 0.08);
            transform: translateX(5px);
            box-shadow: -5px 0 15px rgba(255, 71, 26, 0.1);
        }
        .activities-detail-item span {
            color: #e0e0e0;
            font-weight: 500;
        }
        .skill-card, .project-card {
            background: var(--secondary-bg);
            border: 1px solid rgba(255, 255, 255, 0.05);
            padding: 30px;
            border-radius: 15px;
            height: 100%;
            transition: 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .skill-card:hover, .project-card:hover {
            border-color: var(--accent-color);
            transform: translateY(-15px) rotateX(10deg);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4), 0 0 20px var(--accent-glow);
        }
        .skill-card h4 {
            color: var(--accent-color);
            font-weight: 700;
            margin-bottom: 15px;
        }
        .tech-tag {
            background: transparent;
            color: var(--accent-color);
            border: 1px solid var(--accent-color);
            font-size: 0.75rem;
            padding: 3px 10px;
            border-radius: 4px;
            margin-right: 5px;
            margin-bottom: 10px;
            display: inline-block;
        }
        .btn-cyan {
            background: var(--accent-color);
            color: #000 !important;
            font-weight: 700;
            border-radius: 0;
            clip-path: polygon(10% 0, 100% 0, 90% 100%, 0 100%);
            padding: 12px 35px;
            transition: 0.3s;
            border: none;
            text-transform: uppercase;
        }
        .btn-cyan:hover {
            background: #fff;
            color: #000 !important;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px var(--accent-glow);
        }
        .btn-outline-cyan {
            background: transparent;
            color: var(--accent-color) !important;
            border: 2px solid var(--accent-color);
            font-weight: 700;
            border-radius: 5px;
            padding: 8px 23px;
            transition: 0.3s;
            text-transform: uppercase;
        }
        .btn-outline-cyan:hover {
            background: var(--accent-color);
            color: #000 !important;
        }
        .social-icon {
            width: 45px;
            height: 45px;
            border: 1px solid var(--accent-color);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: var(--accent-color);
            font-size: 1.2rem;
            margin: 0 8px;
            transition: 0.3s;
            text-decoration: none;
        }
        .social-icon:hover {
            background: var(--accent-color);
            color: #000;
            transform: rotate(360deg);
        }
        footer {
            background: var(--primary-bg);
            padding: 60px 0 30px;
            border-top: 1px solid rgba(255, 62, 0, 0.1);
        }
        .wa-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.3);
            z-index: 1000;
            text-decoration: none;
            animation: pulse-wa 2s infinite;
        }
        @keyframes pulse-wa {
            0% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7); }
            70% { box-shadow: 0 0 0 15px rgba(37, 211, 102, 0); }
            100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
        }
        .cv-dropdown .dropdown-menu {
            background: var(--secondary-bg);
            border: 1px solid var(--accent-color);
            border-radius: 10px;
            padding: 10px;
            margin-top: 10px;
        }
        .cv-dropdown .dropdown-item {
            color: var(--text-primary);
            border-radius: 5px;
            padding: 8px 20px;
        }
        .cv-dropdown .dropdown-item:hover {
            background: var(--accent-color);
            color: #000;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .activity-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: 0.4s;
        }
        .activity-img:hover {
            transform: scale(1.05);
            border-color: var(--accent-color);
            box-shadow: 0 10px 20px rgba(0,0,0,0.5);
        }
        /* Custom Modal Styling */
        .custom-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.85);
            backdrop-filter: blur(8px);
            z-index: 9999;
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.3s ease;
        }
        .modal-content-box {
            background: var(--secondary-bg);
            border: 2px solid var(--accent-color);
            padding: 40px;
            border-radius: 20px;
            max-width: 400px;
            width: 90%;
            text-align: center;
            box-shadow: 0 0 30px var(--accent-color);
            position: relative;
            transform: scale(0.7);
            animation: popIn 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
        }
        .modal-close {
            position: absolute;
            top: 15px;
            right: 15px;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
            transition: 0.3s;
        }
        .modal-close:hover {
            color: var(--accent-color);
            transform: rotate(90deg);
        }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        @keyframes popIn { to { transform: scale(1); } }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">PORTFOLIO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link" href="#certificates">Certificates</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#activities-certificates">Activities & Certificates</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1 class="display-3 fw-bold">HI, I'M <span style="color: var(--accent-color);">ARJUNA HETTIARACHCHI</span></h1>
                    <div class="hero-accent"></div>
                    <div class="mb-4">
                        <span class="role-badge">✓ Web Developer</span>
                        <span class="role-badge">✓ System Analyst</span>
                        <span class="role-badge">✓ Software Tester</span>
                        <span class="role-badge">✓ System Developer</span>
                        <span class="role-badge">✓ Graphic Designer</span>
                        <span class="role-badge">✓ Technical Supporter</span>
                        <span class="role-badge">✓ ICT Enthusiast</span>
                    </div>
                    <p class="hero-text mb-5">
                        I am a motivated ICT student with experience in data handling, workplace information management, and hardware troubleshooting. Passionate about building modern web solutions and managing complex IT infrastructures.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <div class="dropdown cv-dropdown">
                            <button class="btn btn-cyan dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                <i class="bi bi-file-earmark-pdf-fill me-2"></i>View CV
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Arjuna%20Adeehsa%20Dulanjana%20Hettiarachchi.pdf" target="_blank">View in Browser</a></li>
                                <li><a class="dropdown-item" href="Arjuna%20Adeehsa%20Dulanjana%20Hettiarachchi.pdf" download>Download PDF</a></li>
                            </ul>
                        </div>
                        <a href="#projects" class="btn btn-outline-cyan">View My Work</a>
                    </div>
                </div>
                <div class="col-lg-5 text-center mt-5 mt-lg-0">
                    <div class="profile-img-container">
                        <img src="WhatsApp Image 2026-01-29 at 22.47.29.jpeg" alt="Arjuna Hettiarachchi" class="profile-img shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5" style="background: var(--secondary-bg);">
        <div class="container">
            <h2 class="section-title">Who I Am<span></span></h2>
            <div class="row">
                <div class="col-lg-12">
                    <p class="lead" style="color: var(--text-secondary);">
                        Motivated ICT student with a strong foundation in hardware, networking, and web development. I focus on creating efficient, reliable systems and user-friendly web experiences.
                    </p>
                    <p style="color: var(--text-secondary);">
                        With a Diploma in ICT (NVQ Level 5) and extensive experience in student management systems and global problem-solving platforms, I bring a unique blend of technical skill and creative problem-solving to every project.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-5">
        <div class="container">
            <h2 class="section-title">Education<span></span></h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="skill-card h-100">
                        <h4 class="h5">DIPLOMA IN ICT (NVQ L5)</h4>
                        <p class="text-secondary mb-3">Vocational Training Authority (VTA), Horana | 2025</p>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3">
                                <span class="fw-bold d-block">G.C.E Advanced Level (2021)</span>
                                <small class="text-secondary">Palannoruwa C.C</small>
                                <div class="mt-2">
                                    <span class="tech-tag">ICT - C</span>
                                    <span class="tech-tag">Engineering Tech - C</span>
                                    <span class="tech-tag">Science for Tech - C</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill-card h-100">
                        <h4 class="h5">SCHOOLING & LANGUAGE</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3">
                                <span class="fw-bold d-block">G.C.E Ordinary Level (2021)</span>
                                <small class="text-secondary">Palannoruwa C.C</small>
                                <div class="mt-2">
                                    <span class="tech-tag">1 A</span>
                                    <span class="tech-tag">2 B's</span>
                                    <span class="tech-tag">4 C's</span>
                                    <span class="tech-tag">4 S's</span>
                                </div>
                            </li>
                            <li>
                                <span class="fw-bold d-block">Certificates & Spoken English</span>
                                <div class="mt-2">
                                    <span class="badge bg-secondary">Sinhala</span>
                                    <span class="badge bg-secondary">English</span>
                                    <span class="badge bg-secondary">Tamil (Basic)</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-5" style="background: var(--secondary-bg);">
        <div class="container">
            <h2 class="section-title">Technical Expertise<span></span></h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="skill-card text-center">
                        <i class="bi bi-code-slash display-5 mb-3" style="color: var(--accent-color);"></i>
                        <h4 class="h5">Web & Design</h4>
                        <p class="text-secondary small mb-0">HTML5, CSS3, JS, PHP, Python, Java, Photoshop</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="skill-card text-center">
                        <i class="bi bi-database display-5 mb-3" style="color: var(--accent-color);"></i>
                        <h4 class="h5">Database</h4>
                        <p class="text-secondary small mb-0">SQL (MySQL/PostgreSQL), Data Entry</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="skill-card text-center">
                        <i class="bi bi-shield-check display-5 mb-3" style="color: var(--accent-color);"></i>
                        <h4 class="h5">Software Testing</h4>
                        <p class="text-secondary small mb-0">Manual Testing, Automated Testing (Basic)</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="skill-card text-center">
                        <i class="bi bi-cpu display-5 mb-3" style="color: var(--accent-color);"></i>
                        <h4 class="h5">IT Support</h4>
                        <p class="text-secondary small mb-0">Hardware Troubleshooting, Networking, Software Install</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="skill-card text-center">
                        <i class="bi bi-people display-5 mb-3" style="color: var(--accent-color);"></i>
                        <h4 class="h5">Soft Skills</h4>
                        <p class="text-secondary small mb-0">Team Leadership, Communication, Problem Solving</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-5">
        <div class="container">
            <h2 class="section-title">Web Projects<span></span></h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="project-card h-100">
                        <div class="card-body">
                            <i class="bi bi-laptop display-6 mb-3" style="color: var(--accent-color);"></i>
                            <h5 class="card-title fw-bold">Nexus - SMS</h5>
                            <p class="card-text text-secondary small">VTA Group Project using Java (NetBeans) to manage student information efficiently.</p>
                            <div class="mb-3">
                                <span class="tech-tag">JAVA</span>
                                <span class="tech-tag">NETBEANS</span>
                                <span class="tech-tag">SQL</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project-card h-100">
                        <div class="card-body">
                            <i class="bi bi-globe display-6 mb-3" style="color: var(--accent-color);"></i>
                            <h5 class="card-title fw-bold">Global Help Platform</h5>
                            <p class="card-text text-secondary small">Expert-user interaction platform for solving complex global problems.</p>
                            <div class="mb-3">
                                <span class="tech-tag">HTML</span>
                                <span class="tech-tag">CSS</span>
                                <span class="tech-tag">JS</span>
                                <span class="tech-tag">PHP</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project-card h-100">
                        <div class="card-body">
                            <i class="bi bi-person-badge display-6 mb-3" style="color: var(--accent-color);"></i>
                            <h5 class="card-title fw-bold">Portfolio V2</h5>
                            <p class="card-text text-secondary small">Modern, responsive personal portfolio website to showcase my projects and technical skills.</p>
                            <div class="mb-3">
                                <span class="tech-tag">HTML</span>
                                <span class="tech-tag">CSS</span>
                                <span class="tech-tag">BOOTSTRAP</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities & Certificates Section -->
    <section id="activities-certificates" class="py-5" style="background: var(--secondary-bg);">
        <div class="container">
            <h2 class="section-title">Activities & Certificates<span></span></h2>
            
            <div class="row g-4 mb-5">
                <!-- Achievements & Awards -->
                <div class="col-md-4">
                    <div class="project-card h-100">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3" style="color: var(--accent-color);"><i class="bi bi-trophy-fill me-2"></i>Awards</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="activities-detail-item">
                                    <span>✓ 3rd Place - Innovation & Technology Competition (2024)</span>
                                    <a href="WhatsApp Image 2026-01-29 at 23.22.29.jpeg" target="_blank" class="text-accent" title="View Certificate"><i class="bi bi-eye me-1"></i>view certificat</a>
                                </li>
                                <li class="activities-detail-item">
                                    <span>✓ Merit Award - Dept. of Buddhist Affairs (2016)</span>
                                    <a href="WhatsApp Image 2026-.jpeg" target="_blank" class="text-accent" title="View Certificate"><i class="bi bi-eye me-1"></i>view certificat</a>
                                </li>
                                <li class="activities-detail-item">
                                    <span>✓ Winner - Ceylife Colour & Win (Ceylinco Life)</span>
                                    <a href="WhatsApp Imag.jpeg" target="_blank" class="text-accent" title="View Certificate"><i class="bi bi-eye me-1"></i>view certificat</a>
                                </li>
                                <li class="activities-detail-item border-bottom-0 mb-0">
                                    <span>✓ 3rd Place - Cricket (2024)</span>
                                    <a href="WhatsApp Image 2026-01-29 at.jpeg" target="_blank" class="text-accent" title="View Certificate"><i class="bi bi-eye me-1"></i>view certificat</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Education & Certs -->
                <div class="col-md-4">
                    <div class="project-card h-100">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3" style="color: var(--accent-color);"><i class="bi bi-patch-check-fill me-2"></i>Certifications</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="activities-detail-item">
                                    <span>✓ Diploma in ICT (NVQ Level 5) - VTA (2025)</span>
                                    <a href="javascript:void(0)" onclick="showPendingModal()" class="text-accent" title="View Certificate"><i class="bi bi-eye me-1"></i>view certificat</a>
                                </li>
                                <li class="activities-detail-item">
                                    <span>✓ English Spoken Course (6 Months, 2025)</span>
                                    <a href="javascript:void(0)" onclick="showPendingModal()" class="text-accent" title="View Certificate"><i class="bi bi-eye me-1"></i>view certificat</a>
                                </li>
                                <li class="activities-detail-item border-bottom-0 mb-0">
                                    <span>✓ Artificial Intelligence Workshop (2023/24)</span>
                                    <a href="WhatsApp Image 2026-01-29 at 23.22.28.jpeg" target="_blank" class="text-accent" title="View Certificate"><i class="bi bi-eye me-1"></i>view certificat</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Camps & Social -->
                <div class="col-md-4">
                    <div class="project-card h-100">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3" style="color: var(--accent-color);"><i class="bi bi-people-fill me-2"></i>Activities</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="activities-detail-item">
                                    <span>✓ Participated Camp in Rantembe NAVY(AB)</span>
                                    <a href="WhatsApp Image 2026-01-29.jpeg" target="_blank" class="text-accent" title="View Certificate"><i class="bi bi-eye me-1"></i>view certificat</a>
                                </li>
                                <li class="activities-detail-item border-bottom-0 mb-0">
                                    <span>✓ Dedicated Support for Olaboduwa Rajamaha Viharaya Perahera (2018)</span>
                                    <a href="WhatsApp Image 2026-01-29 at 23.22.30.jpeg" target="_blank" class="text-accent" title="View Certificate"><i class="bi bi-eye me-1"></i>view certificat</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5" style="background: var(--secondary-bg);">
        <div class="container text-center">
            <h2 class="section-title">CONNECT WITH ME<span></span></h2>
            <div class="mt-5">
                <a href="https://github.com/arjunaadeesha" target="_blank" class="social-icon"><i class="bi bi-github"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                <a href="https://wa.me/94762523005" target="_blank" class="social-icon"><i class="bi bi-whatsapp"></i></a>
                <a href="mailto:hetthiarachchiarjuna@gmail.com" class="social-icon"><i class="bi bi-envelope"></i></a>
            </div>
            <p class="mt-4 text-secondary">Ready to start a new project or just want to say hi?</p>
            <a href="mailto:hetthiarachchiarjuna@gmail.com" class="btn btn-cyan mt-3 px-5">Message Me</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p class="mb-0">&copy; 2026 My Portfolio. All rights reserved.</p>
            <small class="text-muted">Built with Bootstrap 5</small>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/94762523005" class="wa-float" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Custom Pending Modal -->
    <div id="pendingModal" class="custom-modal">
        <div class="modal-content-box">
            <span class="modal-close" onclick="hidePendingModal()">&times;</span>
            <i class="bi bi-hourglass-split display-1 mb-3" style="color: var(--accent-color);"></i>
            <h2 class="fw-bold mb-3">PENDING</h2>
            <p class="text-secondary">This certificate is currently being processed and will be available to view very soon!</p>
            <button class="btn btn-outline-light mt-3 px-4 rounded-pill" onclick="hidePendingModal()">Got it</button>
        </div>
    </div>

    <!-- Bootstrap JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showPendingModal() {
            document.getElementById('pendingModal').style.display = 'flex';
        }
        function hidePendingModal() {
            document.getElementById('pendingModal').style.display = 'none';
        }
        
        // Close modal when clicking outside
        window.onclick = function(event) {
            let modal = document.getElementById('pendingModal');
            if (event.target == modal) {
                hidePendingModal();
            }
        }

        // JavaScript for Interactive Profile Image
        const profileImg = document.querySelector('.profile-img');
        
        if (profileImg) {
            document.addEventListener('mousemove', (e) => {
                const { clientX, clientY } = e;
                const { left, top, width, height } = profileImg.getBoundingClientRect();
                
                const centerX = left + width / 2;
                const centerY = top + height / 2;
                
                const moveX = (clientX - centerX) / 25;
                const moveY = (clientY - centerY) / 25;
                
                profileImg.style.transform = `translate(${moveX}px, ${moveY}px) rotateX(${-moveY}deg) rotateY(${moveX}deg)`;
            });

            // Reset position when mouse leaves the window or section
            document.addEventListener('mouseleave', () => {
                profileImg.style.transform = 'translate(0, 0) rotateX(0) rotateY(0)';
            });
        }
    </script>
</body>
</html>
