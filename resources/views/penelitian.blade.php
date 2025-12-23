<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bidang Penelitian - KK SCOUT</title>
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

        .research-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 30px;
        }

        .research-card {
            background: #fff;
            border: 2px solid #e2e8f0;
            border-radius: 20px;
            padding: 40px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .research-card::before {
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

        .research-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-color: #3b82f6;
        }

        .research-card:hover::before {
            transform: scaleX(1);
        }

        .research-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #3b82f6, #60a5fa);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            margin-bottom: 25px;
            box-shadow: 0 10px 30px rgba(59, 130, 246, 0.3);
        }

        .research-card h3 {
            font-size: 26px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 15px;
        }

        .research-card p {
            font-size: 16px;
            color: #64748b;
            line-height: 1.8;
        }

        .research-topics {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e2e8f0;
        }

        .research-topics h4 {
            font-size: 16px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 10px;
        }

        .topics-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .topic-tag {
            padding: 6px 14px;
            background: #eff6ff;
            color: #2563eb;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
        }

        .empty-state {
            text-align: center;
            padding: 80px 20px;
            color: #64748b;
        }

        .empty-state-icon {
            font-size: 80px;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 36px;
            }

            .research-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    @include('layouts.nav')

    <div class="page-header">
        <div class="circuit-bg"></div>
        <h1>Bidang Penelitian</h1>
        <p>Fokus riset dan pengembangan teknologi terkini</p>
    </div>

    <div class="container">
        <div class="research-grid">
            @forelse($researchs as $research)
            <div class="research-card">
                <div class="research-icon">
                    @if(\Illuminate\Support\Str::contains(strtolower($research->name), 'software'))
                        💻
                    @elseif(\Illuminate\Support\Str::contains(strtolower($research->name), ['data', 'ai', 'artificial', 'machine']))
                        🤖
                    @elseif(\Illuminate\Support\Str::contains(strtolower($research->name), ['security', 'cyber']))
                        🔐
                    @elseif(\Illuminate\Support\Str::contains(strtolower($research->name), ['cloud', 'computing']))
                        ☁️
                    @elseif(\Illuminate\Support\Str::contains(strtolower($research->name), ['iot', 'internet']))
                        📡
                    @elseif(\Illuminate\Support\Str::contains(strtolower($research->name), ['mobile', 'app']))
                        📱
                    @elseif(\Illuminate\Support\Str::contains(strtolower($research->name), ['web', 'frontend']))
                        🌐
                    @elseif(\Illuminate\Support\Str::contains(strtolower($research->name), ['database', 'data']))
                        🗄️
                    @else
                        🔬
                    @endif
                </div>
                <h3>{{ $research->name }}</h3>
                <p>{{ $research->description }}</p>

                @if($research->keywords)
                <div class="research-topics">
                    <h4>Topik Penelitian:</h4>
                    <div class="topics-list">
                        @foreach(explode(',', $research->keywords) as $keyword)
                        <span class="topic-tag">{{ trim($keyword) }}</span>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
            @empty
            <div class="empty-state" style="grid-column: 1 / -1;">
                <div class="empty-state-icon">🔬</div>
                <h3 style="font-size: 24px; font-weight: 700; color: #1e293b; margin-bottom: 10px;">
                    Belum Ada Data Penelitian
                </h3>
                <p>Bidang penelitian akan segera ditambahkan.</p>
            </div>
            @endforelse
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>
