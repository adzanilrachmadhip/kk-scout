<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang - KK SCOUT</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f8fafc;
            color: #1e293b;
        }

        .page-header {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 50%, #60a5fa 100%);
            padding: 100px 0 60px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .circuit-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            background-image:
                linear-gradient(90deg, rgba(255,255,255,.1) 1px, transparent 1px),
                linear-gradient(rgba(255,255,255,.1) 1px, transparent 1px);
            background-size: 50px 50px;
        }

        .page-header h1 {
            font-size: 56px;
            font-weight: 900;
            color: #fff;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .page-header p {
            font-size: 20px;
            color: #e0e7ff;
            position: relative;
            z-index: 1;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 2rem;
        }

        .content-section {
            background: #fff;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 40px;
        }

        .content-section h2 {
            font-size: 36px;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 25px;
        }

        .content-section .highlight {
            color: #22c55e;
        }

        .content-section p {
            font-size: 17px;
            line-height: 1.8;
            color: #475569;
            margin-bottom: 20px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .stat-card {
            text-align: center;
            padding: 30px;
            background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
            border-radius: 16px;
            border: 2px solid #bae6fd;
        }

        .stat-number {
            font-size: 48px;
            font-weight: 900;
            color: #0284c7;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 16px;
            font-weight: 600;
            color: #475569;
        }

        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 36px;
            }

            .content-section {
                padding: 30px 25px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    @include('layouts.nav')

    <div class="page-header">
        <div class="circuit-bg"></div>
        <h1>Tentang KK SCOUT</h1>
        <p>Smart Computing Technology</p>
    </div>

    <div class="container">
        <div class="content-section">
            <h2>Selamat Datang di <span class="highlight">KK SCOUT</span></h2>
            <p>{!! nl2br(e($about->about ?? 'Kelompok Keahlian Smart Computing Technology (KK SCOUT) adalah pusat keunggulan di Telkom University Surabaya yang berfokus pada pengembangan dan inovasi di bidang teknologi komputasi modern.')) !!}</p>

            <p>Kami berkomitmen untuk menghasilkan penelitian berkualitas tinggi, mengembangkan solusi teknologi inovatif, dan membina talenta muda di bidang teknologi informasi dan komputasi.</p>
        </div>

        <div class="content-section">
            <h2>Visi & <span class="highlight">Misi</span></h2>

            <h3 style="font-size: 24px; font-weight: 700; color: #1e293b; margin: 30px 0 15px;">Visi</h3>
            <p>Menjadi pusat keunggulan dalam riset dan pengembangan teknologi komputasi yang diakui secara nasional dan internasional.</p>

            <h3 style="font-size: 24px; font-weight: 700; color: #1e293b; margin: 30px 0 15px;">Misi</h3>
            <ul style="font-size: 17px; line-height: 2; color: #475569; padding-left: 25px;">
                <li>Melaksanakan penelitian dan pengembangan di bidang teknologi komputasi terkini</li>
                <li>Menghasilkan publikasi ilmiah berkualitas tinggi di jurnal dan konferensi internasional</li>
                <li>Mengembangkan produk dan inovasi teknologi yang berdampak bagi masyarakat</li>
                <li>Membangun kolaborasi strategis dengan industri dan institusi pendidikan</li>
                <li>Membina dan mengembangkan sumber daya manusia yang kompeten di bidang teknologi</li>
            </ul>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">10+</div>
                <div class="stat-label">Peneliti</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">50+</div>
                <div class="stat-label">Publikasi</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">20+</div>
                <div class="stat-label">Proyek</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">15+</div>
                <div class="stat-label">Mitra</div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>
