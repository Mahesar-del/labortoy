<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patient</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/favicon.jpg') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
    <style>html, body { margin: 0; padding: 0; width: 100%; overflow-x: clip; font-family: 'Manrope', sans-serif; box-sizing: border-box; }</style>
</head>
<body>
    @include('components.header')
    @include('components.provider-hero', [
 'title' => 'Patient<br>Portal',
        'description' => 'Access laboratory testing information, specimen requirements, clinical resources, and provider support to help you navigate the testing process with Sterling.',
        'bgImage' => asset('images/patient_hero_image.jpg'),
        'bgPosition' => 'center 28%',
        'showButton' => false
    ])
    <section class="services-hero" aria-labelledby="services-hero-title">
        <div class="services-hero__background" style="background-image: url('{{ asset('images/patient-banner.webp') }}');"></div>
        <div class="services-hero__overlay"></div>
    
        <div class="services-hero__container">
            <div class="services-hero__content">
                <h1 id="services-hero-title">Patient<br>Portal</h1>
                <p>Access laboratory testing information, specimen requirements, clinical resources, and provider support to help you navigate the testing process with Sterling.</p>
            </div>
        </div>
    </section>
    
    <style>
        .services-hero, .services-hero * { box-sizing: border-box; }
        .services-hero { background: #020b1c; color: #fff; isolation: isolate; min-height: 460px; overflow: hidden; position: relative; padding: 0 99px; }
        .services-hero__background, .services-hero__overlay { height: 100%; inset: 0; position: absolute; width: 100%; }
        .services-hero__background { background-position: center top; background-repeat: no-repeat; background-size: cover; z-index: -2; }
        .services-hero__overlay { background: linear-gradient(90deg, rgba(7,26,49,.96) 0%, rgba(7,26,49,.86) 48%, rgba(7,26,49,.25) 100%); z-index: -1; }
        .services-hero__container { align-items: center; display: flex; margin: 0 auto; max-width: 1320px; min-height: 460px; padding: 56px 0; width: 100%; }
        .services-hero__content { max-width: 580px; }
        .services-hero h1 { font-size: clamp(34px, 3.1vw, 56px); letter-spacing: -.04em; line-height: 1.1; margin: 0; }
        .services-hero p { 
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 18px; 
            line-height: 30px; 
            letter-spacing: 0px;
            color: #D9E5EE; 
            margin: 25px 0 30px; 
        }
        .services-hero__button { background: #20b3b5; border-radius: 999px; color: #fff; display: inline-block; font-size: 14px; font-weight: 700; padding: 15px 25px; text-decoration: none; }
        .services-hero__button:hover { filter: brightness(.94); }
        .services-hero__button:focus-visible { outline: 3px solid #fff; outline-offset: 4px; }
        @media (max-width: 1150px) {
            .services-hero { padding: 0 20px; }
        }
        @media (max-width: 700px) {
            .services-hero { padding: 0 20px; }
            .services-hero, .services-hero__container { min-height: 430px; }
            .services-hero__container { align-items: flex-end; padding: 48px 0; }
            .services-hero__overlay { background: linear-gradient(90deg, rgba(7,26,49,.96), rgba(7,26,49,.25)); }
            .services-hero__content { max-width: 350px; }
            .services-hero p {
                font-size: 15px;
                line-height: 1.4;
                text-align: justify;
            }
        }
    </style>
    <section class="patient-info">
        <div class="patient-info__container">
            <!-- Left Side: Image + Overlay Card -->
            <div class="patient-info__image-wrapper">
                <picture>
                    <source media="(max-width: 768px)" srcset="{{ asset('images/test-information.jpg') }}">
                    <img src="{{ asset('images/information-you-can-understand.webp') }}" alt="Patient typing on laptop" class="patient-info__image">
                </picture>
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
            padding: 3rem 99px;
            background-color: #ffffff;
            box-sizing: border-box;
        }

        .patient-info__container {
            max-width: 1320px;
            width: 100%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 48px;
        }

        .patient-info__image-wrapper {
            position: relative;
            flex: 1;
            max-width: 520px;
            width: 100%;
            aspect-ratio: 555 / 470;
            height: auto;
            flex-shrink: 1;
            border-radius: 12px;
            overflow: hidden;
        }

        .patient-info__image-wrapper picture {
            width: 100%;
            height: 100%;
            display: block;
        }

        .patient-info__image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
            display: block;
        }

        .patient-info__content {
            flex: 1;
            max-width: 624px;
            width: 100%;
            flex-shrink: 1;
        }

        .patient-info__content h2 {
            font-size: 28px;
            font-weight: 700;
            color: #000000;
            margin: 0 0 20px 0;
        }

        .patient-info__content p {
            font-size: 15px;
            color: #000;
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

        @media (max-width: 1150px) {
            .patient-info, .specimen-collection {
                padding-left: 20px;
                padding-right: 20px;
            }
        }

        @media (max-width: 992px) {
            .patient-info__container {
                flex-direction: column;
                align-items: flex-start;
            }
            .patient-info__image-wrapper, .patient-info__content {
                width: 100%;
                max-width: 100%;
                height: auto;
            }
        }

        @media (max-width: 768px) {
            .patient-info {
                padding: 2.5rem 20px;
            }
            .patient-info__container {
                gap: 24px;
            }
            .patient-info__image-wrapper {
                aspect-ratio: 555 / 380;
                border-radius: 12px;
            }
            .patient-info__content h2 {
                font-family: 'Plus Jakarta Sans', sans-serif;
                font-weight: 700;
                font-size: 24px;
                line-height: 34px;
                letter-spacing: 0px;
                color: #000000;
                margin-bottom: 16px;
            }
            .patient-info__content p {
                font-family: 'Inter', sans-serif;
                font-weight: 400;
                font-size: 16px;
                line-height: 30px;
                letter-spacing: 0px;
                text-align: justify;
                color: #000000;
                margin-bottom: 16px;
            }
            .patient-info__list {
                margin-top: 20px;
                gap: 16px;
            }
            .patient-info__list li {
                font-family: 'Inter', sans-serif;
                font-weight: 500;
                font-size: 16px;
                line-height: 24px;
                letter-spacing: 0px;
                color: #000000;
            }
        }
    </style>
    @include('components.patient-what-you-need')
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
                <img src="{{ asset('images/specimen-collection.webp') }}" alt="Doctor giving thumbs up" class="specimen-collection__image">
            </div>
        </div>
    </section>

    <style>
        .specimen-collection, .specimen-collection * { box-sizing: border-box; }
        .specimen-collection {
            width: 100%;
            background-color: #0B2545;
            padding: 3rem 99px;
            display: flex;
            justify-content: center;
            box-sizing: border-box;
        }

        .specimen-collection__container {
            max-width: 1320px;
            width: 100%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 48px;
        }

        .specimen-collection__content {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            flex: 1;
            max-width: 624px;
            width: 100%;
            flex-shrink: 1;
        }

        .specimen-collection__header {
            width: 100%;
            text-align: left;
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
            color: #ffffff;
            line-height: 1.6;
            margin: 0;
        }

        .specimen-collection__boxes {
            display: flex;
            flex-direction: column;
            gap: 16px;
            width: 100%;
        }

        .specimen-box {
            background-color: #263B55;
            border-radius: 8px;
            padding: 20px 24px;
            width: 100%;
            box-sizing: border-box;
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
            color: #ffffff;
            line-height: 1.5;
            margin: 0;
        }

        .specimen-collection__image-wrapper {
            flex: 1;
            max-width: 600px;
            width: 100%;
            aspect-ratio: 586 / 487;
            height: auto;
            flex-shrink: 1;
            border-radius: 12px;
            overflow: hidden;
        }

        .specimen-collection__image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
        }

        @media (max-width: 992px) {
            .specimen-collection__container {
                flex-direction: column;
                align-items: flex-start;
                gap: 2rem;
            }
            .specimen-collection__content, .specimen-collection__image-wrapper {
                max-width: 100%;
                width: 100%;
            }
        }
        
        @media (max-width: 768px) {
            .specimen-collection {
                padding: 2.5rem 20px;
            }
            .specimen-collection__container {
                gap: 24px;
            }
            .specimen-collection__header {
                text-align: center;
            }
            .specimen-collection__header h2 {
                font-family: 'Plus Jakarta Sans', sans-serif;
                font-weight: 700;
                font-size: 24px;
                line-height: 30px;
                letter-spacing: 0px;
                color: #ffffff;
            }
            .specimen-collection__header p {
                font-family: 'Inter', sans-serif;
                font-weight: 400;
                font-size: 16px;
                line-height: 30px;
                letter-spacing: 0px;
                text-align: center;
                color: #ffffff;
            }
            .specimen-collection__image-wrapper {
                display: none;
            }
        }
    </style>
    @include('components.test-information')
    @include('components.patient-faq')
    @include('components.diagnostics-cta.cta')
    <style>
        /* Fix for footer contact info overlap on mobile view (specific to patient page as requested) */
        @media (max-width: 1150px) {
            .site-footer .footer-contact-info {
                gap: 1.5rem !important;
            }
        }
    </style>
    @include('components.footer')
</body>
</html>
