<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim Kami - KK SCOUT</title>
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

        .leader-section {
            margin-bottom: 80px;
        }

        .leader-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 40px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .leader-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .leader-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .leader-image-container {
            width: 100%;
            height: 400px;
            overflow: hidden;
            background: linear-gradient(135deg, #e0e7ff, #dbeafe);
            position: relative;
        }

        .leader-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .leader-card:hover .leader-image {
            transform: scale(1.05);
        }

        .leader-content {
            padding: 30px;
            text-align: center;
        }

        .leader-badge {
            display: inline-block;
            padding: 8px 20px;
            background: linear-gradient(135deg, #22c55e, #16a34a);
            color: #fff;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .leader-name {
            font-size: 26px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 8px;
        }

        .leader-position {
            font-size: 16px;
            color: #64748b;
            margin-bottom: 15px;
        }

        .leader-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: center;
            margin-top: 20px;
        }

        .tag {
            padding: 6px 14px;
            background: #eff6ff;
            color: #2563eb;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
        }

        .staff-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .staff-card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .staff-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        .staff-image-container {
            width: 100%;
            height: 300px;
            overflow: hidden;
            background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
            position: relative;
        }

        .staff-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .staff-card:hover .staff-image {
            transform: scale(1.05);
        }

        .staff-content {
            padding: 25px;
            text-align: center;
        }

        .staff-name {
            font-size: 20px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 8px;
        }

        .staff-position {
            font-size: 15px;
            color: #64748b;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.6);
            animation: fadeIn 0.3s ease;
        }

        .modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .modal-content {
            background-color: #fff;
            margin: auto;
            border-radius: 20px;
            width: 90%;
            max-width: 900px;
            max-height: 90vh;
            overflow-y: auto;
            animation: slideUp 0.3s ease;
            position: relative;
        }

        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .modal-header {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            color: #fff;
            padding: 25px 30px;
            border-radius: 20px 20px 0 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h2 {
            font-size: 24px;
            font-weight: 700;
            margin: 0;
        }

        .close-btn {
            width: 35px;
            height: 35px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 50%;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .close-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: rotate(90deg);
        }

        .modal-body {
            padding: 40px;
        }

        .profile-section {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .profile-image-container {
            position: relative;
        }

        .profile-image {
            width: 100%;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .profile-info h3 {
            font-size: 28px;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 25px;
        }

        .info-item {
            margin-bottom: 20px;
        }

        .info-label {
            font-size: 14px;
            font-weight: 600;
            color: #3b82f6;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
        }

        .info-value {
            font-size: 16px;
            color: #475569;
            line-height: 1.6;
        }

        .details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .detail-card {
            background: #f8fafc;
            border-radius: 16px;
            padding: 25px;
        }

        .detail-card h4 {
            font-size: 20px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .detail-card h4::before {
            content: "";
            width: 4px;
            height: 24px;
            background: linear-gradient(135deg, #3b82f6, #60a5fa);
            border-radius: 2px;
        }

        .detail-list {
            list-style: none;
        }

        .detail-list li {
            padding: 15px 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .detail-list li:last-child {
            border-bottom: none;
        }

        .detail-title {
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 5px;
        }

        .detail-subtitle {
            font-size: 14px;
            color: #64748b;
            margin-bottom: 3px;
        }

        .detail-institution {
            font-size: 13px;
            color: #94a3b8;
        }

        .social-links {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .social-link {
            padding: 10px 20px;
            background: #eff6ff;
            color: #3b82f6;
            border-radius: 10px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: #3b82f6;
            color: #fff;
            transform: translateY(-2px);
        }

        .empty-message {
            color: #94a3b8;
            font-style: italic;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 36px;
            }

            .leader-grid {
                grid-template-columns: 1fr;
            }

            .staff-grid {
                grid-template-columns: 1fr;
            }

            .profile-section {
                grid-template-columns: 1fr;
            }

            .details-grid {
                grid-template-columns: 1fr;
            }

            .modal-body {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    @include('layouts.nav')

    <div class="page-header">
        <div class="circuit-bg"></div>
        <h1>Tim Kami</h1>
        <p>Bertemu dengan tim profesional yang berdedikasi</p>
    </div>

    <div class="container">
        @if($leaders->count() > 0)
        <div class="leader-section">
            <h2 class="section-title">Ketua <span class="highlight">KK SCOUT</span></h2>
            <p class="section-subtitle">Pemimpin yang menginspirasi dan membimbing tim</p>

            <div class="leader-grid">
                @foreach($leaders as $leader)
                <div class="leader-card" onclick="openModal('leader{{ $leader->id }}')">
                    <div class="leader-image-container">
                        @if($leader->photo)
                        <img src="{{ asset('storage/' . $leader->photo) }}" alt="{{ $leader->name }}" class="leader-image">
                        @else
                        <div style="display: flex; align-items: center; justify-content: center; height: 100%; font-size: 80px;">👤</div>
                        @endif
                    </div>
                    <div class="leader-content">
                        <div class="leader-badge">KETUA KK SCOUT</div>
                        <h3 class="leader-name">{{ $leader->name }}</h3>
                        <p class="leader-position">{{ $leader->email }}</p>
                        @if($leader->education && count($leader->education) > 0)
                        <div class="leader-tags">
                            @foreach($leader->education as $edu)
                            <span class="tag">{{ $edu->degree }}</span>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        @if($employees->count() > 0)
        <div class="staff-section">
            <h2 class="section-title">Anggota <span class="highlight">Tim</span></h2>
            <p class="section-subtitle">Para profesional yang berkontribusi dalam penelitian dan pengembangan</p>

            <div class="staff-grid">
                @foreach($employees as $employee)
                <div class="staff-card" onclick="openModal('employee{{ $employee->id }}')">
                    <div class="staff-image-container">
                        @if($employee->photo)
                        <img src="{{ asset('storage/' . $employee->photo) }}" alt="{{ $employee->name }}" class="staff-image">
                        @else
                        <div style="display: flex; align-items: center; justify-content: center; height: 100%; font-size: 60px;">👤</div>
                        @endif
                    </div>
                    <div class="staff-content">
                        <h3 class="staff-name">{{ $employee->name }}</h3>
                        <p class="staff-position">{{ $employee->position->position_name }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>

    <!-- Leader Modals -->
    @foreach($leaders as $leader)
    <div id="leader{{ $leader->id }}" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Profil Lengkap</h2>
                <button class="close-btn" onclick="closeModal('leader{{ $leader->id }}')">&times;</button>
            </div>
            <div class="modal-body">
                <div class="profile-section">
                    <div class="profile-image-container">
                        @if($leader->photo)
                        <img src="{{ asset('storage/' . $leader->photo) }}" alt="{{ $leader->name }}" class="profile-image">
                        @else
                        <div style="width: 100%; height: 300px; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #e0e7ff, #dbeafe); border-radius: 16px; font-size: 80px;">👤</div>
                        @endif
                    </div>
                    <div class="profile-info">
                        <h3>Biodata</h3>
                        <div class="info-item">
                            <div class="info-label">Nama</div>
                            <div class="info-value">{{ $leader->name }}</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Jabatan</div>
                            <div class="info-value">Ketua KK SCOUT</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Email</div>
                            <div class="info-value">{{ $leader->email }}</div>
                        </div>
                        @if($leader->bio)
                        <div class="info-item">
                            <div class="info-label">Bio</div>
                            <div class="info-value">{{ $leader->bio }}</div>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="details-grid">
                    <div class="detail-card">
                        <h4>Pendidikan</h4>
                        @if($leader->education && count($leader->education) > 0)
                        <ul class="detail-list">
                            @foreach($leader->education as $edu)
                            <li>
                                <div class="detail-title">{{ $edu->degree }}</div>
                                <div class="detail-subtitle">{{ $edu->major }}</div>
                                <div class="detail-institution">{{ $edu->institution }}</div>
                            </li>
                            @endforeach
                        </ul>
                        @else
                        <p class="empty-message">Tidak ada informasi pendidikan</p>
                        @endif
                    </div>

                    <div class="detail-card">
                        <h4>Penelitian</h4>
                        @if($leader->research && count($leader->research) > 0)
                        <ul class="detail-list">
                            @foreach($leader->research as $research)
                            <li>
                                <div class="detail-title">{{ $research->research_field }}</div>
                                <div class="detail-subtitle">{{ $research->description }}</div>
                            </li>
                            @endforeach
                        </ul>
                        @else
                        <p class="empty-message">Tidak ada penelitian yang terdaftar</p>
                        @endif
                    </div>
                </div>

                @if($leader->media && count($leader->media) > 0)
                <div style="margin-top: 30px;">
                    <h4 style="font-size: 20px; font-weight: 700; color: #1e293b; margin-bottom: 15px;">Media Sosial</h4>
                    <div class="social-links">
                        @foreach($leader->media as $media)
                        <a href="{{ $media->url }}" class="social-link" target="_blank">{{ $media->platform }}</a>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    @endforeach

    <!-- Employee Modals -->
    @foreach($employees as $employee)
    <div id="employee{{ $employee->id }}" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Profil Lengkap</h2>
                <button class="close-btn" onclick="closeModal('employee{{ $employee->id }}')">&times;</button>
            </div>
            <div class="modal-body">
                <div class="profile-section">
                    <div class="profile-image-container">
                        @if($employee->photo)
                        <img src="{{ asset('storage/' . $employee->photo) }}" alt="{{ $employee->name }}" class="profile-image">
                        @else
                        <div style="width: 100%; height: 300px; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #f0f9ff, #e0f2fe); border-radius: 16px; font-size: 80px;">👤</div>
                        @endif
                    </div>
                    <div class="profile-info">
                        <h3>Biodata</h3>
                        <div class="info-item">
                            <div class="info-label">Nama</div>
                            <div class="info-value">{{ $employee->name }}</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Jabatan</div>
                            <div class="info-value">{{ $employee->position->position_name }}</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Email</div>
                            <div class="info-value">{{ $employee->email }}</div>
                        </div>
                        @if($employee->bio)
                        <div class="info-item">
                            <div class="info-label">Bio</div>
                            <div class="info-value">{{ $employee->bio }}</div>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="details-grid">
                    <div class="detail-card">
                        <h4>Pendidikan</h4>
                        @if($employee->education && count($employee->education) > 0)
                        <ul class="detail-list">
                            @foreach($employee->education as $edu)
                            <li>
                                <div class="detail-title">{{ $edu->degree }}</div>
                                <div class="detail-subtitle">{{ $edu->major }}</div>
                                <div class="detail-institution">{{ $edu->institution }}</div>
                            </li>
                            @endforeach
                        </ul>
                        @else
                        <p class="empty-message">Tidak ada informasi pendidikan</p>
                        @endif
                    </div>

                    <div class="detail-card">
                        <h4>Penelitian</h4>
                        @if($employee->research && count($employee->research) > 0)
                        <ul class="detail-list">
                            @foreach($employee->research as $research)
                            <li>
                                <div class="detail-title">{{ $research->research_field }}</div>
                                <div class="detail-subtitle">{{ $research->description }}</div>
                            </li>
                            @endforeach
                        </ul>
                        @else
                        <p class="empty-message">Tidak ada penelitian yang terdaftar</p>
                        @endif
                    </div>
                </div>

                @if($employee->media && count($employee->media) > 0)
                <div style="margin-top: 30px;">
                    <h4 style="font-size: 20px; font-weight: 700; color: #1e293b; margin-bottom: 15px;">Media Sosial</h4>
                    <div class="social-links">
                        @foreach($employee->media as $media)
                        <a href="{{ $media->url }}" class="social-link" target="_blank">{{ $media->platform }}</a>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    @endforeach

    @include('layouts.footer')

    <script>
        function openModal(modalId) {
            document.getElementById(modalId).classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        }

        // Close modal with ESC key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                const modals = document.querySelectorAll('.modal.active');
                modals.forEach(modal => {
                    modal.classList.remove('active');
                });
                document.body.style.overflow = 'auto';
            }
        });
    </script>
</body>
</html>
