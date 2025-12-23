{{-- resources/views/components/nav.blade.php --}}
<nav class="navbar">
    <div class="container-nav">
        <div class="logo-section">
            <div class="logo-icon">
                <div class="hexagon-logo">
                    <div class="hex-inner"></div>
                </div>
            </div>
            <span class="logo-text">SCOUT</span>
        </div>
        
        <ul class="nav-menu">
            <li><a href="{{ route('index') }}" class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('tentang') }}" class="nav-link {{ request()->routeIs('tentang') ? 'active' : '' }}">Tentang</a></li>
            <li><a href="{{ route('fasilitas') }}" class="nav-link {{ request()->routeIs('fasilitas') ? 'active' : '' }}">Fasilitas</a></li>
            <li><a href="{{ route('penelitian') }}" class="nav-link {{ request()->routeIs('penelitian') ? 'active' : '' }}">Penelitian</a></li>
            <li><a href="{{ route('pengabdian') }}" class="nav-link {{ request()->routeIs('produk') ? 'active' : '' }}">Pengabdian Masyarakat</a></li>
            <li><a href="{{ route('mitra') }}" class="nav-link {{ request()->routeIs('mitra') ? 'active' : '' }}">Mitra</a></li>
            <li><a href="{{ route('tim') }}" class="nav-link {{ request()->routeIs('tim') ? 'active' : '' }}">Tim Kami</a></li>
        </ul>
        
        <button class="mobile-toggle" id="mobileToggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>

<style>
    .navbar {
        background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        position: sticky;
        top: 0;
        z-index: 1000;
        padding: 1rem 0;
    }
    
    .container-nav {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .logo-section {
        display: flex;
        align-items: center;
        gap: 15px;
    }
    
    .logo-icon {
        position: relative;
        width: 45px;
        height: 45px;
    }
    
    .hexagon-logo {
        width: 100%;
        height: 100%;
        background: rgba(96, 165, 250, 0.3);
        clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
        border: 2px solid #60a5fa;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: hexagonPulse 3s ease-in-out infinite;
    }
    
    .hex-inner {
        width: 60%;
        height: 60%;
        background: radial-gradient(circle, #60a5fa 0%, transparent 70%);
        border-radius: 50%;
        animation: innerPulse 2s ease-in-out infinite;
    }
    
    @keyframes hexagonPulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    
    @keyframes innerPulse {
        0%, 100% { opacity: 0.6; }
        50% { opacity: 1; }
    }
    
    .logo-text {
        font-size: 32px;
        font-weight: 900;
        letter-spacing: 3px;
        color: #e0e7ff;
        text-shadow: 0 0 20px rgba(96, 165, 250, 0.8);
        font-family: 'Arial Black', sans-serif;
    }
    
    .nav-menu {
        display: flex;
        list-style: none;
        gap: 10px;
        margin: 0;
        padding: 0;
    }
    
    .nav-link {
        color: #e0e7ff;
        text-decoration: none;
        padding: 10px 18px;
        border-radius: 8px;
        font-weight: 500;
        font-size: 15px;
        transition: all 0.3s ease;
        position: relative;
    }
    
    .nav-link:hover {
        background: rgba(96, 165, 250, 0.2);
        color: #fff;
        transform: translateY(-2px);
    }
    
    .nav-link.active {
        background: rgba(96, 165, 250, 0.3);
        color: #fff;
        box-shadow: 0 0 15px rgba(96, 165, 250, 0.5);
    }
    
    .mobile-toggle {
        display: none;
        flex-direction: column;
        gap: 5px;
        background: none;
        border: none;
        cursor: pointer;
        padding: 5px;
    }
    
    .mobile-toggle span {
        width: 25px;
        height: 3px;
        background: #e0e7ff;
        border-radius: 3px;
        transition: all 0.3s ease;
    }
    
    @media (max-width: 1024px) {
        .nav-menu {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
            flex-direction: column;
            padding: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            display: none;
        }
        
        .nav-menu.active {
            display: flex;
        }
        
        .mobile-toggle {
            display: flex;
        }
        
        .nav-link {
            width: 100%;
            text-align: center;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileToggle = document.getElementById('mobileToggle');
        const navMenu = document.querySelector('.nav-menu');
        
        if (mobileToggle) {
            mobileToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');
            });
        }
    });
</script>