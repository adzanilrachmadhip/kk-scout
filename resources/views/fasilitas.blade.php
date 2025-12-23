<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas - KK SCOUT</title>
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

        .facilities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .facility-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .facility-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .facility-icon {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, #e0e7ff, #dbeafe);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 80px;
        }

        .facility-content {
            padding: 30px;
        }

        .facility-content h3 {
            font-size: 24px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 15px;
        }

        .facility-content p {
            font-size: 16px;
            line-height: 1.7;
            color: #64748b;
        }

        .feature-list {
            list-style: none;
            margin-top: 20px;
        }

        .feature-list li {
            padding: 10px 0;
            color: #475569;
            font-size: 15px;
            border-bottom: 1px solid #e2e8f0;
        }

        .feature-list li:last-child {
            border-bottom: none;
        }

        .feature-list li::before {
            content: "✓";
            color: #22c55e;
            font-weight: bold;
            margin-right: 10px;
        }

        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 36px;
            }

            .facilities-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    @include('layouts.nav')

    <div class="page-header">
        <div class="circuit-bg"></div>
        <h1>Fasilitas</h1>
        <p>Infrastruktur dan sarana penunjang riset berkualitas</p>
    </div>

    <div class="container">
        <div class="facilities-grid">
            <div class="facility-card">
                <div class="facility-icon">💻</div>
                <div class="facility-content">
                    <h3>Laboratorium Komputer</h3>
                    <p>Laboratorium dengan perangkat komputer terkini untuk pengembangan software dan penelitian.</p>
                    <ul class="feature-list">
                        <li>Workstation High Performance</li>
                        <li>Development Tools Terbaru</li>
                        <li>Cloud Infrastructure Access</li>
                    </ul>
                </div>
            </div>

            <div class="facility-card">
                <div class="facility-icon">🤖</div>
                <div class="facility-content">
                    <h3>AI & Machine Learning Lab</h3>
                    <p>Fasilitas khusus untuk riset dan pengembangan artificial intelligence dan machine learning.</p>
                    <ul class="feature-list">
                        <li>GPU Computing Cluster</li>
                        <li>Deep Learning Frameworks</li>
                        <li>Large Dataset Storage</li>
                    </ul>
                </div>
            </div>

            <div class="facility-card">
                <div class="facility-icon">🔐</div>
                <div class="facility-content">
                    <h3>Cyber Security Lab</h3>
                    <p>Laboratorium untuk penelitian dan praktik keamanan siber dengan tools profesional.</p>
                    <ul class="feature-list">
                        <li>Penetration Testing Tools</li>
                        <li>Security Monitoring Systems</li>
                        <li>Isolated Testing Environment</li>
                    </ul>
                </div>
            </div>

            <div class="facility-card">
                <div class="facility-icon">☁️</div>
                <div class="facility-content">
                    <h3>Cloud Computing Infrastructure</h3>
                    <p>Akses ke infrastruktur cloud computing untuk pengembangan aplikasi skala besar.</p>
                    <ul class="feature-list">
                        <li>AWS & Azure Partnership</li>
                        <li>Container Orchestration</li>
                        <li>DevOps Tools & CI/CD</li>
                    </ul>
                </div>
            </div>

            <div class="facility-card">
                <div class="facility-icon">📚</div>
                <div class="facility-content">
                    <h3>Digital Library</h3>
                    <p>Perpustakaan digital dengan akses ke jurnal internasional dan resource pembelajaran.</p>
                    <ul class="feature-list">
                        <li>International Journal Access</li>
                        <li>E-books & Research Papers</li>
                        <li>Online Learning Platforms</li>
                    </ul>
                </div>
            </div>

            <div class="facility-card">
                <div class="facility-icon">🎯</div>
                <div class="facility-content">
                    <h3>Collaboration Space</h3>
                    <p>Ruang kolaborasi modern untuk diskusi, brainstorming, dan kerja tim.</p>
                    <ul class="feature-list">
                        <li>Smart Meeting Rooms</li>
                        <li>Video Conference Facilities</li>
                        <li>Project Workspace</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>
