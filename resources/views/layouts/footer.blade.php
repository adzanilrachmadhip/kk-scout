{{-- resources/views/components/footer.blade.php --}}
<footer class="footer">
    <div class="footer-container">
        <!-- Footer Top -->
        <div class="footer-top">
            <div class="footer-column">
                <div class="footer-logo-section">
                    <div class="footer-logo">
                        <div class="hexagon-footer">
                            <div class="hex-inner-footer"></div>
                        </div>
                        <span class="footer-logo-text">SCOUT</span>
                    </div>
                    <p class="footer-tagline">Smart Computing Technology</p>
                    <p class="footer-description">
                        Kelompok Keahlian di Telkom University Surabaya yang fokus pada 
                        pengembangan teknologi computing terkini.
                    </p>
                </div>
            </div>
            
            <div class="footer-column">
                <h3 class="footer-heading">Navigasi</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('tentang') }}">Tentang</a></li>
                    <li><a href="{{ route('fasilitas') }}">Fasilitas</a></li>
                    <li><a href="{{ route('penelitian') }}">Bidang Penelitian</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3 class="footer-heading">Bidang Keahlian</h3>
                <ul class="footer-links">
                    <li><a href="#">Software Engineering</a></li>
                    <li><a href="#">Data & AI</a></li>
                    <li><a href="#">Cyber Security</a></li>
                    <li><a href="#">Cloud Computing</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3 class="footer-heading">Kontak</h3>
                <ul class="footer-contact">
                    <li>
                        <span class="contact-icon">📍</span>
                        <span>Telkom University Surabaya<br>Jl. Ketintang, Surabaya</span>
                    </li>
                    <li>
                        <span class="contact-icon">📧</span>
                        <span>scout@telkomuniversity.ac.id</span>
                    </li>
                    <li>
                        <span class="contact-icon">📞</span>
                        <span>+62 31 1234 5678</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <p class="copyright">
                    &copy; {{ date('Y') }} KK SCOUT - Telkom University Surabaya. All rights reserved.
                </p>
                <div class="social-links">
                    <a href="#" class="social-link" aria-label="LinkedIn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link" aria-label="Instagram">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link" aria-label="Twitter">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link" aria-label="YouTube">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    .footer {
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        color: #e2e8f0;
        padding: 60px 0 0;
    }
    
    .footer-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 2rem;
    }
    
    .footer-top {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1.5fr;
        gap: 50px;
        padding-bottom: 50px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .footer-logo-section {
        max-width: 400px;
    }
    
    .footer-logo {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 20px;
    }
    
    .hexagon-footer {
        width: 40px;
        height: 40px;
        background: rgba(96, 165, 250, 0.2);
        clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
        border: 2px solid #60a5fa;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .hex-inner-footer {
        width: 60%;
        height: 60%;
        background: radial-gradient(circle, #60a5fa 0%, transparent 70%);
        border-radius: 50%;
    }
    
    .footer-logo-text {
        font-size: 28px;
        font-weight: 900;
        letter-spacing: 2px;
        color: #e0e7ff;
        font-family: 'Arial Black', sans-serif;
    }
    
    .footer-tagline {
        font-size: 16px;
        font-weight: 600;
        color: #94a3b8;
        margin-bottom: 15px;
        letter-spacing: 0.5px;
    }
    
    .footer-description {
        font-size: 14px;
        line-height: 1.7;
        color: #cbd5e1;
    }
    
    .footer-heading {
        font-size: 18px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 10px;
    }
    
    .footer-heading::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 40px;
        height: 3px;
        background: linear-gradient(90deg, #3b82f6, #60a5fa);
        border-radius: 3px;
    }
    
    .footer-links {
        list-style: none;
    }
    
    .footer-links li {
        margin-bottom: 12px;
    }
    
    .footer-links a {
        color: #cbd5e1;
        text-decoration: none;
        font-size: 14px;
        transition: all 0.3s ease;
        display: inline-block;
    }
    
    .footer-links a:hover {
        color: #60a5fa;
        transform: translateX(5px);
    }
    
    .footer-contact {
        list-style: none;
    }
    
    .footer-contact li {
        display: flex;
        gap: 12px;
        margin-bottom: 15px;
        font-size: 14px;
        color: #cbd5e1;
        line-height: 1.6;
    }
    
    .contact-icon {
        font-size: 18px;
        flex-shrink: 0;
    }
    
    .footer-bottom {
        padding: 30px 0;
    }
    
    .footer-bottom-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .copyright {
        font-size: 14px;
        color: #94a3b8;
    }
    
    .social-links {
        display: flex;
        gap: 15px;
    }
    
    .social-link {
        width: 40px;
        height: 40px;
        background: rgba(96, 165, 250, 0.1);
        border: 1px solid rgba(96, 165, 250, 0.3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #94a3b8;
        transition: all 0.3s ease;
    }
    
    .social-link:hover {
        background: rgba(96, 165, 250, 0.2);
        border-color: #60a5fa;
        color: #60a5fa;
        transform: translateY(-3px);
    }
    
    @media (max-width: 1024px) {
        .footer-top {
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }
    }
    
    @media (max-width: 768px) {
        .footer-top {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        
        .footer-bottom-content {
            flex-direction: column;
            gap: 20px;
            text-align: center;
        }
    }
</style>