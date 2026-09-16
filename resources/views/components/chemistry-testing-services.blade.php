@php
    $cards = $cards ?? [
        [
            'title' => 'Comprehensive Metabolic Panel',
            'description' => 'Measures key substances in the blood to assess metabolism, liver, kidney, and overall health.',
            'image' => asset('images/chemistry-card-bg.jpg')
        ],
        [
            'title' => 'Basic Metabolic Panel',
            'description' => 'Evaluates glucose, electrolytes, kidney function, and other essential metabolic markers.',
            'image' => asset('images/chemistry-card-bg.jpg')
        ],
        [
            'title' => 'Lipid Panel',
            'description' => 'Measures cholesterol and triglyceride levels to help assess cardiovascular health.',
            'image' => asset('images/chemistry-card-bg.jpg')
        ],
        [
            'title' => 'Blood Glucose',
            'description' => 'Measures blood sugar levels to support the assessment and monitoring of glucose control.',
            'image' => asset('images/chemistry-card-bg.jpg')
        ],
        [
            'title' => 'Liver Function Tests (LFT)',
            'description' => 'Evaluates enzymes and proteins that provide information about liver function and health.',
            'image' => asset('images/chemistry-card-bg.jpg')
        ],
        [
            'title' => 'Kidney Function Tests',
            'description' => 'Measures key markers that help assess kidney function and overall renal health.',
            'image' => asset('images/chemistry-card-bg.jpg')
        ]
    ];
@endphp

<section class="chemistry-services-section" aria-labelledby="chemistry-services-title">
    <div class="chemistry-services-container">
        <header class="chemistry-services-header">
            <h2 id="chemistry-services-title">{{ $sectionTitle ?? 'Chemistry Testing Services' }}</h2>
            <p>{{ $sectionDescription ?? 'Explore chemistry testing categories designed to support different diagnostic and clinical needs.' }}</p>
        </header>

        <div class="chemistry-services-grid">
            @foreach ($cards as $card)
                <a href="{{ url('/cbc-test') }}" class="chemistry-card" style="text-decoration: none;">
                    <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}" class="chemistry-card__bg" loading="lazy">
                    <div class="chemistry-card__overlay"></div>
                    <div class="chemistry-card__content">
                        <h3 class="chemistry-card__title">{{ $card['title'] }}</h3>
                        <p class="chemistry-card__description">{{ $card['description'] }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

<style>
    .chemistry-services-section,
    .chemistry-services-section * {
        box-sizing: border-box;
    }

    .chemistry-services-section {
        background-color: #ffffff;
        padding: 0px 0 80px;
        width: 100%;
    }

    .chemistry-services-container {
        max-width: 1440px;
        margin: 0 auto;
        padding: 0 99px;
    }

    .chemistry-services-header {
        text-align: center;
        max-width: 760px;
        margin: 0 auto 48px;
    }

    .chemistry-services-header h2 {
        font-family: 'Manrope', sans-serif;
        color: #000000;
        font-size: clamp(26px, 2.5vw, 36px);
        font-weight: 700;
        letter-spacing: -0.025em;
        line-height: 1.25;
        margin: 0 0 12px;
    }

    .chemistry-services-header p {
        font-family: 'Manrope', sans-serif;
        color: #000;
        font-size: clamp(14px, 1.05vw, 16px);
        line-height: 1.6;
        margin: 0;
    }

    .chemistry-services-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
    }

    .chemistry-card {
        position: relative;
        border-radius: 24px;
        overflow: hidden;
        min-height: 440px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 32px 28px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
        transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        cursor: pointer;
    }

    .chemistry-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.14);
    }

    .chemistry-card__bg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        z-index: 1;
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .chemistry-card:hover .chemistry-card__bg {
        transform: scale(1.05);
    }

    .chemistry-card__overlay {
        position: absolute;
        inset: 0;
        z-index: 2;
        background: linear-gradient(
            180deg,
            rgba(0, 0, 0, 0) 0%,
            rgba(0, 0, 0, 0.2) 35%,
            rgba(0, 0, 0, 0.75) 70%,
            rgba(0, 0, 0, 0.95) 100%
        );
    }

    .chemistry-card__content {
        position: relative;
        z-index: 3;
        width: 100%;
    }

    .chemistry-card__title {
        font-family: 'Manrope', sans-serif;
        color: #ffffff;
        font-size: clamp(18px, 1.4vw, 21px);
        font-weight: 700;
        line-height: 1.3;
        margin: 0 0 10px;
        letter-spacing: -0.01em;
        min-height: 56px;
        display: flex;
        align-items: flex-start;
    }

    .chemistry-card__description {
        font-family: 'Manrope', sans-serif;
        color: rgba(255, 255, 255, 0.88);
        font-size: clamp(13px, 0.95vw, 14px);
        line-height: 1.55;
        font-weight: 400;
        margin: 0;
        min-height: 65px;
    }

    @media (max-width: 1024px) {
        .chemistry-services-container {
            padding: 0 40px;
        }

        .chemistry-services-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 22px;
        }

        .chemistry-card {
            min-height: 400px;
        }
    }

    @media (max-width: 640px) {
        .chemistry-services-section {
            padding: 40px 0 60px;
        }

        .chemistry-services-container {
            padding: 0 24px;
        }

        .chemistry-services-header {
            margin-bottom: 32px;
        }

        .chemistry-services-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .chemistry-card {
            min-height: 380px;
            padding: 24px 20px;
            border-radius: 20px;
        }
    }
</style>
