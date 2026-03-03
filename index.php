<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBT Modern | MTS NURUL BAHRI</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #10b981;
            --primary-dark: #059669;
            --secondary: #6366f1;
            --dark: #0f172a;
            --slate: #64748b;
            --bg: #f8fafc;
            --white: #ffffff;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg);
            color: var(--dark);
            overflow-x: hidden;
        }

        /* Animated Background Shapes */
        .bg-shape {
            position: fixed;
            z-index: -1;
            filter: blur(80px);
            border-radius: 50%;
            opacity: 0.4;
        }
        .shape-1 { width: 300px; height: 300px; background: var(--primary); top: -100px; right: -50px; }
        .shape-2 { width: 400px; height: 400px; background: var(--secondary); bottom: -150px; left: -100px; }

        /* Modern Navbar */
        .navbar {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.8);
            border-bottom: 1px solid rgba(0,0,0,0.05);
            padding: 15px 0;
        }

        /* Header Section */
        .hero-section {
            background: linear-gradient(135deg, var(--dark) 0%, #1e293b 100%);
            padding: 120px 0 100px 0;
            border-bottom-left-radius: 60px;
            border-bottom-right-radius: 60px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');
            opacity: 0.1;
        }

        /* Search Container Floating */
        .search-container {
            max-width: 700px;
            margin: -45px auto 50px;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(15px);
            padding: 15px 25px;
            border-radius: 25px;
            border: 1px solid white;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            z-index: 10;
            position: relative;
        }

        /* Bento Card Style */
        .subject-card {
            background: white;
            border: 1px solid rgba(0,0,0,0.03);
            border-radius: 30px;
            padding: 30px;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .subject-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 40px 60px -15px rgba(0, 0, 0, 0.1);
            border-color: var(--primary);
        }

        .icon-box {
            width: 70px;
            height: 70px;
            border-radius: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin-bottom: 25px;
            transition: 0.5s;
            box-shadow: 0 10px 20px -5px rgba(0,0,0,0.1);
        }

        .subject-card:hover .icon-box {
            transform: rotateY(180deg);
        }

        .status-badge {
            position: absolute;
            top: 25px;
            right: 25px;
            padding: 6px 16px;
            border-radius: 100px;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }

        .badge-online { background: #dcfce7; color: #059669; border: 1px solid #bdf4d4; }

        .btn-exam {
            background: var(--dark);
            color: white;
            border-radius: 18px;
            padding: 14px;
            width: 100%;
            font-weight: 700;
            border: none;
            margin-top: auto;
            transition: 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-exam:hover {
            background: var(--primary);
            transform: translateY(-2px);
            box-shadow: 0 15px 30px -5px rgba(16, 185, 129, 0.4);
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: 800;
            margin-bottom: 10px;
        }

        /* Animation Classes */
        [data-aos="fade-up"] {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        [data-aos="fade-up"].is-visible {
            opacity: 1;
            transform: translateY(0);
        }

    </style>
</head>
<body>

    <div class="bg-shape shape-1"></div>
    <div class="bg-shape shape-2"></div>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fw-800 text-dark" href="#">
                <i class="fas fa-graduation-cap text-primary me-2"></i>CBT NURUL BAHRI
            </a>
            <div class="ms-auto d-flex align-items-center">
                <span class="small fw-bold text-muted d-none d-md-block"><i class="far fa-user-circle me-1"></i> Peserta Ujian</span>
            </div>
        </div>
    </nav>

    <header class="hero-section">
        <div class="container text-center">
            <span class="badge bg-primary mb-3 px-4 py-2 rounded-pill shadow-sm" style="font-weight: 700;">TP 2025/2026</span>
            <h1 class="display-3 fw-800 mb-2">MTS NURUL BAHRI</h1>
            <p class="lead opacity-75 mb-0">Gerbang Masa Depan Digital Madrasah</p>
        </div>
    </header>

    <main class="container">
        <div class="search-container">
            <div class="ms-1 d-flex align-items-center flex-grow-1">
                <div class="icon-circle bg-primary-light text-primary me-3 p-2 rounded-circle">
                    <i class="fas fa-quote-left"></i>
                </div>
                <span class="text-muted fw-500">Bekerjalah seolah-olah kamu hidup selamanya, beribadahlah seolah-olah kamu mati esok hari.</span>
            </div>
            <div class="d-none d-md-block">
                <span class="badge bg-dark px-3 py-2 rounded-4">Portal CBT v2.0</span>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-6 col-lg-4 card-reveal" data-aos="fade-up">
                <div class="subject-card">
                    <span class="status-badge badge-online">Tersedia</span>
                    <div class="icon-box" style="background: #eff6ff; color: #2563eb;">
                        <i class="fas fa-book-quran"></i>
                    </div>
                    <h5 class="card-title">Al-Qur'an Hadits</h5>
                    <p class="text-muted small mb-4">Evaluasi pemahaman tajwid, ayat makkiyah, dan hafalan hadits pilihan.</p>
                    <div class="d-flex justify-content-between mb-4 text-muted small fw-600">
                        <span><i class="far fa-clock me-2 text-primary"></i>90 Menit</span>
                        <span><i class="far fa-file-alt me-2 text-primary"></i>40 Soal</span>
                    </div>
                    <a href="https://forms.gle/VasYkRjvcnti5QoX7" class="btn btn-exam">
                        Mulai Ujian <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 card-reveal" data-aos="fade-up">
                <div class="subject-card">
                    <span class="status-badge badge-online">Tersedia</span>
                    <div class="icon-box" style="background: #fff7ed; color: #ea580c;">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h5 class="card-title">IPA Terpadu</h5>
                    <p class="text-muted small mb-4">Eksplorasi hukum alam, biologi sel, dan fenomena fisika dasar.</p>
                    <div class="d-flex justify-content-between mb-4 text-muted small fw-600">
                        <span><i class="far fa-clock me-2 text-primary"></i>90 Menit</span>
                        <span><i class="far fa-file-alt me-2 text-primary"></i>40 Soal</span>
                    </div>
                    <a href="#" class="btn btn-exam">
                        Mulai Ujian <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 card-reveal" data-aos="fade-up">
                <div class="subject-card">
                    <span class="status-badge badge-online">Tersedia</span>
                    <div class="icon-box" style="background: #fdf2f8; color: #db2777;">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h5 class="card-title">Matematika</h5>
                    <p class="text-muted small mb-4">Uji ketajaman logika angka, persamaan aljabar, dan analisis data.</p>
                    <div class="d-flex justify-content-between mb-4 text-muted small fw-600">
                        <span><i class="far fa-clock me-2 text-primary"></i>120 Menit</span>
                        <span><i class="far fa-file-alt me-2 text-primary"></i>35 Soal</span>
                    </div>
                    <a href="#" class="btn btn-exam">
                        Mulai Ujian <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            </div>
    </main>

    <footer class="py-5 text-center text-muted">
        <div class="container border-top pt-4">
            <p class="small mb-2 fw-bold">MTs Nurul Bahri - Membangun Generasi Qur'ani & IT</p>
            <p class="small opacity-50">&copy; 2026 Digital Madrasah System. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Simple Scroll Reveal Animation
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.classList.add('is-visible');
                        }, index * 100); // Stagger effect
                    }
                });
            }, observerOptions);

            document.querySelectorAll('[data-aos]').forEach((el) => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>