<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mitra - KK SCOUT</title>
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
            max-width: 1400px;
            margin: 0 auto;
            padding: 80px 2rem;
        }

        .section-title {
            font-size: 36px;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 15px;
            text-align: center;
        }

        .section-subtitle {
            font-size: 18px;
            color: #64748b;
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title .highlight {
            color: #22c55e;
        }

        .partners-section {
            margin-bottom: 80px;
        }

        .partners-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
        }

        .partner-card {
            background: #fff;
            border: 2px solid #e2e8f0;
            border-radius: 16px;
            padding: 40px 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 180px;
            transition: all 0.3s ease;
            text-align: center;
        }

        .partner-card:hover {
            border-color: #3b82f6;
            box-shadow: 0 10px 30px rgba(59, 130, 246, 0.2);
            transform: translateY(-8px);
        }

        .partner-logo {
            max-width: 150px;
            max-height: 100px;
            object-fit: contain;
            filter: grayscale(100%);
            transition: filter 0.3s ease;
            margin-bottom: 15px;
        }

        .partner-card:hover .partner-logo {
            filter: grayscale(0%);
        }

        .partner-placeholder {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #3b82f6, #60a5fa);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            font-weight: 900;
            color: #fff;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .partner-name {
            font-size: 16px;
            font-weight: 600;
            color: #1e293b;
            margin-top: 10px;
        }

        .partner-type {
            font-size: 13px;
            color: #64748b;
            margin-top: 5px;
        }

        .empty-state {
            text-align: center;
            padding: 80px 20px;
            grid-column: 1 / -1;
        }

        .empty-state-icon {
            font-size: 80px;
            margin-bottom: 20px;
        }

        .empty-state h3 {
            font-size: 24px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 10px;
        }

        .empty-state p {
            font-size: 16px;
            color: #64748b;
        }

        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 36px;
            }

            .partners-grid {
                grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            }
        }
    </style>
</head>
<body>
    @include('layouts.nav')

    <div class="page-header">
        <div class="circuit-bg"></div>
        <h1>Mitra Kami</h1>
        <p>Kolaborasi strategis dengan institusi dan industri</p>
    </div>

    <div class="container">
        @if($mitras->count() > 0)
        <div class="partners-section">
            <h2 class="section-title">Mitra <span class="highlight">Strategis</span></h2>
            <p class="section-subtitle">Institusi dan perusahaan yang berkolaborasi dengan kami</p>

            <div class="partners-grid">
                @foreach($mitras as $mitra)
                <div class="partner-card">
                    @if($mitra->logo)
                    <img src="{{ asset('storage/' . $mitra->logo) }}" alt="{{ $mitra->name }}" class="partner-logo">
                    @else
                    <div class="partner-placeholder">{{ Str::limit($mitra->name, 2, '') }}</div>
                    @endif
                    <div class="partner-name">{{ $mitra->name }}</div>
                    @if($mitra->type)
                    <div class="partner-type">{{ $mitra->type }}</div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
        @endif

        @if($kerjasamas->count() > 0)
        <div class="partners-section">
            <h2 class="section-title">Kerjasama <span class="highlight">Penelitian</span></h2>
            <p class="section-subtitle">Partner dalam proyek riset dan pengembangan</p>

            <div class="partners-grid">
                @foreach($kerjasamas as $kerjasama)
                <div class="partner-card">
                    @if($kerjasama->logo)
                    <img src="{{ asset('storage/' . $kerjasama->logo) }}" alt="{{ $kerjasama->partner_name }}" class="partner-logo">
                    @else
                    <div class="partner-placeholder">{{ Str::limit($kerjasama->partner_name, 2, '') }}</div>
                    @endif
                    <div class="partner-name">{{ $kerjasama->partner_name }}</div>
                    @if($kerjasama->collaboration_type)
                    <div class="partner-type">{{ $kerjasama->collaboration_type }}</div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
        @endif

        @if($mitras->count() == 0 && $kerjasamas->count() == 0)
        <div class="empty-state">
            <div class="empty-state-icon">🤝</div>
            <h3>Belum Ada Data Mitra</h3>
            <p>Informasi mitra dan kerjasama akan segera ditampilkan di sini.</p>
        </div>
        @endif
    </div>

    @include('layouts.footer')
</body>
</html>
