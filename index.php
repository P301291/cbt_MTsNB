<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning CBT | MTS NURUL BAHRI</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #059669;
            --primary-light: #ecfdf5;
            --dark: #0f172a;
            --slate: #64748b;
            --bg: #f8fafc;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg);
            color: var(--dark);
            margin: 0;
        }

        .glass-header {
            background: linear-gradient(135deg, var(--dark) 0%, #1e293b 100%);
            padding: 60px 0 100px 0;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
            color: white;
            text-align: center;
        }

        .search-container {
            max-width: 700px;
            margin: -35px auto 40px;
            background: white;
            padding: 15px 25px;
            border-radius: 25px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .subject-card {
            background: white;
            border: 1px solid rgba(0,0,0,0.05);
            border-radius: 24px;
            padding: 24px;
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .subject-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
            border-color: var(--primary);
        }

        .icon-box {
            width: 55px;
            height: 55px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-bottom: 15px;
        }

        .status-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 5px 12px;
            border-radius: 100px;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .badge-ready { background: #dcfce7; color: #15803d; }

        .btn-exam {
            background: var(--dark);
            color: white;
            border-radius: 12px;
            padding: 10px;
            width: 100%;
            font-weight: 600;
            border: none;
            margin-top: auto;
            transition: 0.3s;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-exam:hover {
            background: var(--primary);
            color: white;
        }

        .meta-info {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            color: var(--slate);
            margin-bottom: 15px;
        }

        .card-title { font-size: 1.1rem; font-weight: 700; margin-bottom: 5px; }
        .card-desc { font-size: 0.85rem; color: #64748b; margin-bottom: 15px; line-height: 1.4; }
    </style>
</head>
<body>

    <header class="glass-header">
        <div class="container">
            <span class="badge bg-success mb-3 px-3 py-2 rounded-pill">Portal Ujian Madrasah 2026</span>
            <h1 class="display-5 fw-800">MTS NURUL BAHRI</h1>
            <p class="lead opacity-75">Silakan pilih mata pelajaran untuk memulai ujian.</p>
        </div>
    </header>

    <main class="container">
        <div class="search-container d-none d-md-flex">
            <div class="text-muted small">
                <i class="fas fa-user-graduate me-2 text-primary"></i> 
                Selamat Datang, <strong>Peserta Ujian</strong>
            </div>
            <div class="text-muted small">
                <i class="far fa-calendar-alt me-2 text-primary"></i>
                <span id="currentDate">Rabu, 4 Maret 2026</span>
            </div>
        </div>

        <div class="row g-4 mb-5">
            
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="subject-card">
                    <span class="status-badge badge-ready">Siap</span>
                    <div class="icon-box" style="background: #eff6ff; color: #2563eb;"><i class="fas fa-book-quran"></i></div>
                    <h5 class="card-title">Al-Qur'an Hadits</h5>
                    <p class="card-desc">Ujian pemahaman tafsir ayat dan sanad hadits.</p>
                    <div class="meta-info">
                        <span><i class="far fa-clock me-1"></i> 90m</span>
                        <span><i class="far fa-list-alt me-1"></i> 40 Soal</span>
                    </div>
                    <a href="#" class="btn-exam">Mulai <i class="fas fa-chevron-right ms-1"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="subject-card">
                    <span class="status-badge badge-ready">Siap</span>
                    <div class="icon-box" style="background: #fff1f2; color: #e11d48;"><i class="fas fa-heart"></i></div>
                    <h5 class="card-title">Akidah Akhlak</h5>
                    <p class="card-desc">Evaluasi tauhid dan perilaku terpuji.</p>
                    <div class="meta-info">
                        <span><i class="far fa-clock me-1"></i> 90m</span>
                        <span><i class="far fa-list-alt me-1"></i> 40 Soal</span>
                    </div>
                    <a href="#" class="btn-exam">Mulai <i class="fas fa-chevron-right ms-1"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="subject-card">
                    <span class="status-badge badge-ready">Siap</span>
                    <div class="icon-box" style="background: #f0fdf4; color: #16a34a;"><i class="fas fa-hand-holding-heart"></i></div>
                    <h5 class="card-title">Fikih</h5>
                    <p class="card-desc">Ujian hukum ibadah dan muamalah.</p>
                    <div class="meta-info">
                        <span><i class="far fa-clock me-1"></i> 90m</span>
                        <span><i class="far fa-list-alt me-1"></i> 40 Soal</span>
                    </div>
                    <a href="#" class="btn-exam">Mulai <i class="fas fa-chevron-right ms-1"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="subject-card">
                    <span class="status-badge badge-ready">Siap</span>
                    <div class="icon-box" style="background: #fffbeb; color: #d97706;"><i class="fas fa-history"></i></div>
                    <h5 class="card-title">Sejarah Kebudayaan Islam</h5>
                    <p class="card-desc">Wawasan sejarah peradaban Islam dunia.</p>
                    <div class="meta-info">
                        <span><i class="far fa-clock me-1"></i> 90m</span>
                        <span><i class="far fa-list-alt me-1"></i> 40 Soal</span>
                    </div>
                    <a href="#" class="btn-exam">Mulai <i class="fas fa-chevron-right ms-1"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="subject-card">
                    <span class="status-badge badge-ready">Siap</span>
                    <div class="icon-box" style="background: #f5f3ff; color: #7c3aed;"><i class="fas fa-language"></i></div>
                    <h5 class="card-title">Bahasa Arab</h5>
                    <p class="card-desc">Ujian qawaid dan istima' dasar.</p>
                    <div class="meta-info">
                        <span><i class="far fa-clock me-1"></i> 90m</span>
                        <span><i class="far fa-list-alt me-1"></i> 40 Soal</span>
                    </div>
                    <a href="#" class="btn-exam">Mulai <i class="fas fa-chevron-right ms-1"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="subject-card">
                    <span class="status-badge badge-ready">Siap</span>
                    <div class="icon-box" style="background: #ecfdf5; color: #059669;"><i class="fas fa-pen-nib"></i></div>
                    <h5 class="card-title">Bahasa Indonesia</h5>
                    <p class="card-desc">Analisis teks dan kemampuan literasi.</p>
                    <div class="meta-info">
                        <span><i class="far fa-clock me-1"></i> 120m</span>
                        <span><i class="far fa-list-alt me-1"></i> 45 Soal</span>
                    </div>
                    <a href="#" class="btn-exam">Mulai <i class="fas fa-chevron-right ms-1"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="subject-card">
                    <span class="status-badge badge-ready">Siap</span>
                    <div class="icon-box" style="background: #fff1f2; color: #e11d48;"><i class="fas fa-calculator"></i></div>
                    <h5 class="card-title">Matematika</h5>
                    <p class="card-desc">Logika angka, aljabar, dan geometri.</p>
                    <div class="meta-info">
                        <span><i class="far fa-clock me-1"></i> 120m</span>
                        <span><i class="far fa-list-alt me-1"></i> 35 Soal</span>
                    </div>
                    <a href="#" class="btn-exam">Mulai <i class="fas fa-chevron-right ms-1"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="subject-card">
                    <span class="status-badge badge-ready">Siap</span>
                    <div class="icon-box" style="background: #f0f9ff; color: #0284c7;"><i class="fas fa-microscope"></i></div>
                    <h5 class="card-title">IPA Terpadu</h5>
                    <p class="card-desc">Eksplorasi biologi, fisika, dan kimia.</p>
                    <div class="meta-info">
                        <span><i class="far fa-clock me-1"></i> 120m</span>
                        <span><i class="far fa-list-alt me-1"></i> 40 Soal</span>
                    </div>
                    <a href="#" class="btn-exam">Mulai <i class="fas fa-chevron-right ms-1"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="subject-card">
                    <span class="status-badge badge-ready">Siap</span>
                    <div class="icon-box" style="background: #fef2f2; color: #dc2626;"><i class="fas fa-globe-asia"></i></div>
                    <h5 class="card-title">IPS Terpadu</h5>
                    <p class="card-desc">Wawasan geografi, ekonomi, dan sosial.</p>
                    <div class="meta-info">
                        <span><i class="far fa-clock me-1"></i> 90m</span>
                        <span><i class="far fa-list-alt me-1"></i> 40 Soal</span>
                    </div>
                    <a href="#" class="btn-exam">Mulai <i class="fas fa-chevron-right ms-1"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="subject-card">
                    <span class="status-badge badge-ready">Siap</span>
                    <div class="icon-box" style="background: #fdf2f8; color: #db2777;"><i class="fas fa-comment-dots"></i></div>
                    <h5 class="card-title">Bahasa Inggris</h5>
                    <p class="card-desc">Reading comprehension and grammar.</p>
                    <div class="meta-info">
                        <span><i class="far fa-clock me-1"></i> 120m</span>
                        <span><i class="far fa-list-alt me-1"></i> 45 Soal</span>
                    </div>
                    <a href="#" class="btn-exam">Mulai <i class="fas fa-chevron-right ms-1"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="subject-card">
                    <span class="status-badge badge-ready">Siap</span>
                    <div class="icon-box" style="background: #f0fdf4; color: #16a34a;"><i class="fas fa-shield-alt"></i></div>
                    <h5 class="card-title">PKn</h5>
                    <p class="card-desc">Pemahaman ideologi dan kewarganegaraan.</p>
                    <div class="meta-info">
                        <span><i class="far fa-clock me-1"></i> 90m</span>
                        <span><i class="far fa-list-alt me-1"></i> 40 Soal</span>
                    </div>
                    <a href="#" class="btn-exam">Mulai <i class="fas fa-chevron-right ms-1"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="subject-card">
                    <span class="status-badge badge-ready">Siap</span>
                    <div class="icon-box" style="background: #faf5ff; color: #9333ea;"><i class="fas fa-palette"></i></div>
                    <h5 class="card-title">Seni Budaya</h5>
                    <p class="card-desc">Apresiasi seni rupa dan budaya lokal.</p>
                    <div class="meta-info">
                        <span><i class="far fa-clock me-1"></i> 90m</span>
                        <span><i class="far fa-list-alt me-1"></i> 40 Soal</span>
                    </div>
                    <a href="#" class="btn-exam">Mulai <i class="fas fa-chevron-right ms-1"></i></a>
                </div>
            </div>

        </div>
    </main>

    <footer class="py-5 text-center text-muted">
        <div class="container border-top pt-4">
            <p class="small mb-0">&copy; 2026 <strong>MTS NURUL BAHRI</strong>. <br class="d-md-none"> Sistem Informasi CBT Digital.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>