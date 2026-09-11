<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patient</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body { margin: 0; font-family: 'Manrope', sans-serif; }</style>
</head>
<body>
    @include('components.header')
    <section class="services-hero" aria-labelledby="services-hero-title">
        <div class="services-hero__background" style="background-image: url('{{ asset('img/genomic-diagnostics-hero.png') }}');"></div>
        <div class="services-hero__overlay"></div>
    
        <div class="services-hero__container">
            <div class="services-hero__content">
                <h1 id="services-hero-title">Patient<br>Portal</h1>
                <p>Advanced genomic testing that helps identify genetic variation, understand disease risk, and support more informed clinical decisions.</p>
            </div>
        </div>
    </section>
    
    <style>
        .services-hero, .services-hero * { box-sizing: border-box; }
        .services-hero { background: #020b1c; color: #fff; isolation: isolate; min-height: 460px; overflow: hidden; position: relative; }
        .services-hero__background, .services-hero__overlay { height: 100%; inset: 0; position: absolute; width: 100%; }
        .services-hero__background { background-position: center; background-repeat: no-repeat; background-size: 100% 100%; z-index: -2; }
        .services-hero__overlay { background: linear-gradient(90deg, rgba(7,26,49,.96) 0%, rgba(7,26,49,.86) 48%, rgba(7,26,49,.25) 100%); z-index: -1; }
        .services-hero__container { align-items: center; display: flex; margin: 0 auto; max-width: 1320px; min-height: 460px; padding: 56px 76px; }
        .services-hero__content { max-width: 530px; }
        .services-hero h1 { font-size: clamp(34px, 3.1vw, 56px); letter-spacing: -.04em; line-height: 1.1; margin: 0; }
        .services-hero p { color: rgba(255,255,255,.84); font-size: clamp(14px, 1vw, 17px); line-height: 1.7; margin: 25px 0 30px; }
        .services-hero__button { background: #20b3b5; border-radius: 999px; color: #fff; display: inline-block; font-size: 14px; font-weight: 700; padding: 15px 25px; text-decoration: none; }
        .services-hero__button:hover { filter: brightness(.94); }
        .services-hero__button:focus-visible { outline: 3px solid #fff; outline-offset: 4px; }
        @media (max-width: 700px) {
            .services-hero, .services-hero__container { min-height: 430px; }
            .services-hero__container { align-items: flex-end; padding: 48px 28px; }
            .services-hero__overlay { background: linear-gradient(90deg, rgba(7,26,49,.96), rgba(7,26,49,.25)); }
            .services-hero__content { max-width: 350px; }
        }
    </style>
    <section class="patient-info">
        <div class="patient-info__container">
            <!-- Left Side: Image + Overlay Card -->
            <div class="patient-info__image-wrapper">
                <img src="{{ asset('images/patient-info-section-left-img.png') }}" alt="Patient typing on laptop" class="patient-info__image">
            </div>
            
            <!-- Right Side: Content -->
            <div class="patient-info__content">
                <h2>Information You Can Understand</h2>
                <p>Laboratory testing can be an important part of understanding your health. Sterling provides patient-focused information to help you understand what may be required before your test, what happens during sample collection, and what to expect afterward.</p>
                <p>Test-specific instructions may vary depending on the test ordered. Always follow the instructions provided by your healthcare provider or Sterling.</p>
                <ul class="patient-info__list">
                    <li>
                        <div class="check-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        Prepare for your laboratory test
                    </li>
                    <li>
                        <div class="check-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        Understand the sample collection process
                    </li>
                    <li>
                        <div class="check-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        Learn what happens after testing
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <style>
        .patient-info, .patient-info * { box-sizing: border-box; }
        .patient-info {
            width: 100%;
            padding: 5rem 0;
            background-color: #ffffff;
        }

        .patient-info__container {
            max-width: 90rem; /* 1440px */
            margin: 0 auto;
            display: flex;
            gap: 73px;
            align-items: center;
            justify-content: center;
            padding: 0 5%;
        }

        .patient-info__image-wrapper {
            position: relative;
            width: 555px;
            height: 470px;
            flex-shrink: 0;
        }

        .patient-info__image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
        }

        .patient-info__content {
            width: 612px;
            flex-shrink: 0;
        }

        .patient-info__content h2 {
            font-size: 28px;
            font-weight: 700;
            color: #000000;
            margin: 0 0 20px 0;
        }

        .patient-info__content p {
            font-size: 15px;
            color: #333333;
            line-height: 1.6;
            margin: 0 0 20px 0;
        }

        .patient-info__list {
            list-style: none;
            padding: 0;
            margin: 24px 0 0 0;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .patient-info__list li {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
            color: #000000;
            font-weight: 600;
        }

        .patient-info__list .check-icon {
            width: 20px;
            height: 20px;
            background-color: #e6f3f8;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #0c75a9;
            flex-shrink: 0;
        }

        .patient-info__list .check-icon svg {
            width: 12px;
            height: 12px;
        }

        @media (max-width: 1250px) {
            .patient-info__container {
                flex-direction: column;
                align-items: center;
            }
            .patient-info__image-wrapper, .patient-info__content {
                width: 100%;
                max-width: 600px;
                height: auto;
            }
            .patient-info__image {
                aspect-ratio: 555 / 470;
            }
        }
    </style>
    @include('components.what-you-need')
    @include('components.preparing-for-test')
    <section class="specimen-collection">
        <div class="specimen-collection__container">
            <!-- Left Side: Content -->
            <div class="specimen-collection__content">
                <div class="specimen-collection__header">
                    <h2>Specimen Collection</h2>
                    <p>Different laboratory tests require different types of specimens. Proper collection, identification, handling, and transport help maintain specimen quality throughout the testing process.</p>
                </div>
                
                <div class="specimen-collection__boxes">
                    <div class="specimen-box">
                        <h3>Correct Specimen</h3>
                        <p>The required specimen depends on the test ordered by your healthcare provider.</p>
                    </div>
                    <div class="specimen-box">
                        <h3>Proper Collection</h3>
                        <p>Follow the collection instructions provided for your specific test.</p>
                    </div>
                    <div class="specimen-box">
                        <h3>Safe Handling</h3>
                        <p>Samples are handled according to established laboratory procedures.</p>
                    </div>
                </div>
            </div>
            
            <!-- Right Side: Image -->
            <div class="specimen-collection__image-wrapper">
                <img src="{{ asset('images/patient-page-DR-img.png') }}" alt="Doctor giving thumbs up" class="specimen-collection__image">
            </div>
        </div>
    </section>

    <style>
        .specimen-collection, .specimen-collection * { box-sizing: border-box; }
        .specimen-collection {
            width: 100%;
            background-color: #0B2545;
            padding: 5rem 0;
            display: flex;
            justify-content: center;
        }

        .specimen-collection__container {
            max-width: 90rem; /* 1440px */
            width: 100%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 2rem;
            gap: 6rem;
        }

        .specimen-collection__content {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            width: 560px;
            flex-shrink: 0;
        }

        .specimen-collection__header {
            width: 100%;
            text-align: center;
        }

        .specimen-collection__header h2 {
            font-size: 28px;
            font-weight: 700;
            color: #ffffff;
            margin: 0 0 12px 0;
            font-family: 'Manrope', sans-serif;
        }

        .specimen-collection__header p {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.6;
            margin: 0;
        }

        .specimen-collection__boxes {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .specimen-box {
            background-color: #263B55; /* Lighter navy box color */
            border-radius: 8px;
            padding: 24px;
            width: 100%;
            max-width: 560px;
            /* Approximate the 560x110 size, letting padding handle it */
        }

        .specimen-box h3 {
            font-size: 16px;
            font-weight: 700;
            color: #ffffff;
            margin: 0 0 8px 0;
            font-family: 'Manrope', sans-serif;
        }

        .specimen-box p {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.5;
            margin: 0;
        }

        .specimen-collection__image-wrapper {
            width: 586px;
            height: 487px;
            flex-shrink: 0;
            border-radius: 12px;
            overflow: hidden;
        }

        .specimen-collection__image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
        }

        @media (max-width: 1200px) {
            .specimen-collection__container {
                flex-direction: column;
                align-items: center;
                gap: 3rem;
            }
            .specimen-collection__content {
                max-width: 100%;
                width: 100%;
            }
            .specimen-box {
                max-width: 100%;
            }
            .specimen-collection__image-wrapper {
                width: 100%;
                max-width: 586px;
                height: auto;
                aspect-ratio: 586 / 487;
            }
        }
        
        @media (max-width: 768px) {
            .specimen-collection {
                padding: 2rem 0;
            }
            .specimen-collection__image-wrapper {
                display: none;
            }
        }
    </style>
    @include('components.test-information')
    @include('components.patient-faq')
    @include('components.footer')
</body>
</html>
