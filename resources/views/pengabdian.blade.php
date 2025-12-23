<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengabdian Masyarakat - KK SCOUT</title>
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

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .product-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .product-image {
            width: 100%;
            height: 250px;
            overflow: hidden;
            background: linear-gradient(135deg, #e0e7ff, #dbeafe);
            position: relative;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.1);
        }

        .product-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 80px;
            background: linear-gradient(135deg, #e0e7ff, #dbeafe);
        }

        .product-content {
            padding: 30px;
        }

        .product-badge {
            display: inline-block;
            padding: 6px 16px;
            background: linear-gradient(135deg, #22c55e, #16a34a);
            color: #fff;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .product-content h3 {
            font-size: 24px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 15px;
        }

        .product-content p {
            font-size: 16px;
            color: #64748b;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .product-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            color: #fff;
            font-weight: 600;
            font-size: 15px;
            text-decoration: none;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .product-link:hover {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            transform: translateX(5px);
        }

        .empty-state {
            text-align: center;
            padding: 100px 20px;
            grid-column: 1 / -1;
        }

        .empty-state-icon {
            font-size: 100px;
            margin-bottom: 20px;
        }

        .empty-state h3 {
            font-size: 28px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 10px;
        }

        .empty-state p {
            font-size: 18px;
            color: #64748b;
        }

        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 36px;
            }

            .products-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    @include('layouts.nav')

    <div class="page-header">
        <div class="circuit-bg"></div>
        <h1>Pengabdian Masyarakat</h1>
        <p>Kontribusi nyata untuk kemajuan masyarakat</p>
    </div>

    <div class="container">
        <div class="products-grid">
            @forelse($pengabdian as $item)
            <div class="product-card">
                <div class="product-image">
                    @if($item->image)
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
                    @else
                    <div class="product-placeholder">🤝</div>
                    @endif
                </div>
                <div class="product-content">
                    <span class="product-badge">Pengabdian Masyarakat</span>
                    <h3>{{ $item->name }}</h3>
                    <p>{{ $item->description }}</p>
                    @if($item->url)
                    <a href="{{ $item->url }}" target="_blank" class="product-link">
                        Lihat Detail
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                    @endif
                </div>
            </div>
            @empty
            <div class="empty-state">
                <div class="empty-state-icon">🤝</div>
                <h3>Belum Ada Program Pengabdian</h3>
                <p>Program pengabdian masyarakat akan segera ditampilkan di sini.</p>
            </div>
            @endforelse
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>
