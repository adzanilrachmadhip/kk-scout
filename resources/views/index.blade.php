<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCOUT - Smart Computing Technology</title>
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
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 50%, #60a5fa 100%);
            position: relative;
            overflow: hidden;
            padding: 100px 0;
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
        
        .hero-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            position: relative;
            z-index: 1;
        }
        
        .hero-content h1 {
            font-size: 56px;
            font-weight: 900;
            color: #fff;
            margin-bottom: 10px;
            letter-spacing: -1px;
            text-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
        }
        
        .hero-content .subtitle {
            font-size: 24px;
            font-weight: 600;
            color: #e0e7ff;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }
        
        .hero-content .university {
            font-size: 22px;
            font-weight: 700;
            color: #ef4444;
            margin-bottom: 30px;
            text-shadow: 0 2px 10px rgba(239, 68, 68, 0.3);
        }
        
        .hero-content .description {
            font-size: 17px;
            line-height: 1.8;
            color: #e0e7ff;
            max-width: 600px;
            margin-bottom: 40px;
        }
        
        .expertise-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }
        
        .badge {
            padding: 12px 24px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 30px;
            color: #fff;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        
        .badge:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
        
        .hero-illustration {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .illustration-bg {
            width: 500px;
            height: 500px;
            background: linear-gradient(135deg, rgba(134, 239, 172, 0.3), rgba(74, 222, 128, 0.5));
            border-radius: 50%;
            position: relative;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .illustration-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        
        .tech-icon {
            font-size: 120px;
            margin-bottom: 10px;
            animation: iconPulse 2s ease-in-out infinite;
        }
        
        @keyframes iconPulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        /* About Section */
        .about-section {
            padding: 100px 0;
            background: #fff;
        }
        
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-header h2 {
            font-size: 48px;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 15px;
        }
        
        .section-header .highlight {
            color: #22c55e;
        }
        
        .section-header p {
            font-size: 18px;
            color: #64748b;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.8;
        }
        
        /* Features Grid */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .feature-card {
            background: #fff;
            border: 2px solid #e2e8f0;
            border-radius: 20px;
            padding: 40px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #3b82f6, #60a5fa);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-color: #3b82f6;
        }
        
        .feature-card:hover::before {
            transform: scaleX(1);
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #3b82f6, #60a5fa);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            margin-bottom: 25px;
            box-shadow: 0 10px 30px rgba(59, 130, 246, 0.3);
        }
        
        .feature-card h3 {
            font-size: 24px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 15px;
        }
        
        .feature-card p {
            font-size: 16px;
            color: #64748b;
            line-height: 1.7;
        }
        
        /* CTA Section */
        .cta-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            text-align: center;
        }
        
        .cta-section h2 {
            font-size: 42px;
            font-weight: 800;
            color: #fff;
            margin-bottom: 20px;
        }
        
        .cta-section p {
            font-size: 18px;
            color: #e0e7ff;
            margin-bottom: 40px;
        }
        
        .cta-button {
            display: inline-block;
            padding: 16px 40px;
            background: #fff;
            color: #1e3a8a;
            font-weight: 700;
            font-size: 16px;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }
        
        @media (max-width: 768px) {
            .hero-container {
                grid-template-columns: 1fr;
                text-align: center;
                padding: 50px 1rem;
            }
            
            .hero-content h1 {
                font-size: 36px;
            }
            
            .illustration-bg {
                width: 300px;
                height: 300px;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    @include('layouts.nav')
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="circuit-bg"></div>
        <div class="hero-container">
            <div class="hero-content">
                <h1>KK SCOUT</h1>
                <div class="subtitle">Smart Computing Technology</div>
                <div class="subtitle">TELKOM UNIVERSITY SURABAYA</div>
                <p class="description">
                    Pusat unggulan pengembangan inovasi dan teknologi di bidang keilmuan terkini. 
                    Bergabunglah bersama kami menciptakan masa depan yang lebih baik.
                </p>
                <div class="expertise-badges">
                    <div class="badge">Software Engineering</div>
                    <div class="badge">Data & AI</div>
                    <div class="badge">Cyber Security</div>
                </div>
            </div>
            
            <div class="hero-illustration">
                <div class="illustration-bg">
                    <div class="illustration-content">
                        <div class="tech-icon">  
                        <img src="{{asset('assets/img/scout.webp')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="section-header">
                <h2>Tentang <span class="highlight">KK-SCOUT</span></h2>
                <p>Inisiatif riset dan inovasi dari Telkom University Surabaya</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">💻</div>
                    <h3>Software Engineering</h3>
                    <p>Pengembangan perangkat lunak berkualitas tinggi dengan metodologi modern dan best practices industri.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🤖</div>
                    <h3>Data & Artificial Intelligence</h3>
                    <p>Riset dan implementasi solusi AI dan machine learning untuk berbagai aplikasi bisnis dan industri.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🔐</div>
                    <h3>Cyber Security</h3>
                    <p>Keamanan sistem informasi dan jaringan dengan teknologi terkini untuk melindungi aset digital.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🔬</div>
                    <h3>Riset & Inovasi</h3>
                    <p>Penelitian terapan yang menghasilkan solusi inovatif untuk permasalahan industri dan masyarakat.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🤝</div>
                    <h3>Kolaborasi Industri</h3>
                    <p>Kemitraan strategis dengan perusahaan teknologi terkemuka untuk pengembangan produk dan layanan.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">📚</div>
                    <h3>Pengembangan SDM</h3>
                    <p>Program pelatihan dan mentoring untuk meningkatkan kompetensi mahasiswa di bidang teknologi.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Bergabung Dengan Kami</h2>
            <p>Mari bersama menciptakan inovasi teknologi untuk masa depan yang lebih baik</p>
            <a href="{{ route('tim') }}" class="cta-button">Hubungi Tim Kami</a>
        </div>
    </section>
    
    @include('layouts.footer')
</body>
</html>