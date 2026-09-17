<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CBC Test - Sterling Diagnostics</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap"
        rel="stylesheet">
    <style>
        html,
        body {
            max-width: 100%;
            overflow-x: clip; /* clip instead of hidden to keep position: sticky working */
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
        }

        /* Match the CBC hero's content rail to the shared site header. */
        .cbc-test-page {
            min-width: 0;
            overflow-x: clip;
        }

        .cbc-test-page .services-hero__container {
            box-sizing: border-box;
            margin-left: auto;
            margin-right: auto;
            max-width: 1320px;
            padding-left: 0 !important;
            padding-right: 0 !important;
            width: 100%;
        }

        @media (max-width: 1517px) and (min-width: 1151px) {
            .cbc-test-page .services-hero__container {
                padding-left: 99px !important;
                padding-right: 99px !important;
            }
        }

        @media (max-width: 1150px) {
            .cbc-test-page .services-hero__container {
                padding-left: 20px !important;
                padding-right: 20px !important;
            }
        }
    </style>
</head>

<body class="cbc-test-page">
    @include('components.header')

    @include('components.services-hero', [
    'title' => 'Complete Blood Count (CBC)',
    'description' => 'A common blood test used to evaluate blood cells and provide important information about overall
    health, infection, inflammation, anemia, and other clinical conditions.',
    'bgImage' => asset('images/cbc-test-hero.jpg')
    ])

    <!-- Overlapping Info Box -->
    <section class="test-quick-info">
        <div class="tqi-container">
            <div class="tqi-item">
                <span class="tqi-label">TEST TYPE</span>
                <span class="tqi-value">Blood Test</span>
            </div>
            <div class="tqi-divider"></div>
            <div class="tqi-item">
                <span class="tqi-label">SPECIMEN</span>
                <span class="tqi-value">Whole Blood</span>
            </div>
            <div class="tqi-divider"></div>
            <div class="tqi-item">
                <span class="tqi-label">TEST PREPARATION</span>
                <span class="tqi-value">Usually No Special Preparation</span>
            </div>
        </div>
    </section>

    <!-- What Is a CBC Test Section -->
    <section class="cbc-about-section">
        <div class="cbc-about-container">
            <div class="cbc-about-content">
                <h2>What Is a CBC Test?</h2>
                <p>A Complete Blood Count (CBC) is a common blood test that measures the number, size, and condition of
                    three main components of your blood &mdash; red blood cells, white blood cells, and platelets. These
                    cells perform essential functions in the body, including carrying oxygen, fighting infections, and
                    helping blood clot properly.</p>
                <p>For this reason, a CBC is often considered a general "snapshot" of your health. Doctors may use the
                    results to help identify anemia, infections, blood disorders, or problems affecting the immune
                    system.</p>
            </div>
            <div class="cbc-about-image">
                <img src="{{ asset('images/what-cbc-test.jpg') }}" alt="CBC Test Tubes">
            </div>
        </div>
    </section>

    <style>
        /* Test Quick Info Styles */
        .test-quick-info {
            position: relative;
            z-index: 10;
            margin-top: -45px;
            width: 100%;
            padding: 0 99px;
            /* Match global container padding */
            box-sizing: border-box;
        }

        .tqi-container {
            max-width: 1320px;
            /* Match global container width */
            margin: 0 auto;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 25px 40px;
            box-sizing: border-box;
        }

        .tqi-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            flex: 1;
        }

        .tqi-label {
            font-size: 11px;
            color: #9ca3af;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            margin-bottom: 8px;
            font-family: 'Inter', sans-serif;
        }

        .tqi-value {
            font-size: 15px;
            color: #111827;
            font-weight: 700;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .tqi-divider {
            width: 1px;
            height: 40px;
            background-color: #e5e7eb;
        }

        /* CBC About Section Styles */
        .cbc-about-section {
            padding: 20px 99px;
            /* Further reduced top and bottom padding */
            background-color: #ffffff;
            width: 100%;
            box-sizing: border-box;
        }

        .cbc-about-container {
            max-width: 1320px;
            /* Match global container width */
            margin: 0 auto;
            display: flex;
            align-items: stretch;
            /* Stretch to make both columns same height */
            gap: 60px;
            box-sizing: border-box;
        }

        .cbc-about-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .cbc-about-content h2 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 32px;
            font-weight: 800;
            color: #0b2545;
            margin-top: 0;
            margin-bottom: 16px;
        }

        .cbc-about-content p {
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            line-height: 1.8;
            color: #000000;
            margin-top: 0;
            margin-bottom: 12px;
            text-align: justify;
        }

        .cbc-about-content p:last-child {
            margin-bottom: 0;
            /* Remove bottom margin on last paragraph to align bottom edge perfectly */
        }

        .cbc-about-image {
            flex: 1;
            max-width: 500px;
            display: flex;
        }

        .cbc-about-image img {
            width: 100%;
            height: 100%;
            /* Fill the container height */
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .test-quick-info {
                display: none; /* Hide quick info box on mobile */
            }

            .tqi-divider {
                width: 100%;
                height: 1px;
            }

            .cbc-about-section {
                padding: 4vw 5vw 12vw;
            }

            .cbc-about-container {
                flex-direction: column-reverse; /* Image above text on mobile */
                gap: 6vw;
                padding: 0;
            }

            .cbc-about-content h2 {
                font-size: 28px;
            }
        }
    </style>

    <!-- Key Components Section -->
    <section class="cbc-components-section">
        <div class="cbc-components-container">
            <div class="cbc-components-header">
                <h2>Key Components of a CBC</h2>
                <p>A CBC report includes the parameters listed below. Normal ranges may vary slightly between
                    laboratories, so always use the reference range provided on your own report as the primary guide.
                </p>
            </div>

            <div class="cbc-cards-grid">
                <!-- Card 1 -->
                <div class="cbc-card">
                    <div class="cbc-card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                    </div>
                    <h3>Red Blood Cells</h3>
                    <p>Measures red blood cell-related values that help assess the blood's ability to carry oxygen
                        throughout the body.</p>
                </div>
                <!-- Card 2 -->
                <div class="cbc-card">
                    <div class="cbc-card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
                    </div>
                    <h3>Hemoglobin</h3>
                    <p>Measures the amount of hemoglobin, the protein in red blood cells responsible for carrying
                        oxygen.</p>
                </div>
                <!-- Card 3 -->
                <div class="cbc-card">
                    <div class="cbc-card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                    </div>
                    <h3>White Blood Cells</h3>
                    <p>Measures white blood cells, which are an important part of the body's immune response to help
                        fight off infections.</p>
                </div>
                <!-- Card 4 -->
                <div class="cbc-card">
                    <div class="cbc-card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                    </div>
                    <h3>Platelets</h3>
                    <p>Measures platelet levels, which play an important role in normal blood clotting to prevent
                        excessive bleeding.</p>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* CBC Components Section */
        .cbc-components-section {
            padding: 20px 99px;
            background-color: #ffffff;
            width: 100%;
            box-sizing: border-box;
        }

        .cbc-components-container {
            max-width: 1320px;
            /* Match global container width */
            margin: 0 auto;
            box-sizing: border-box;
        }

        .cbc-components-header {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 30px auto;
        }

        .cbc-components-header h2 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 30px;
            font-weight: 800;
            color: #000000;
            margin-top: 0;
            margin-bottom: 15px;
        }

        .cbc-components-header p {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 30px;
            color: #000000;
            margin: 0;
            text-align: center;
        }

        .cbc-cards-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .cbc-card {
            background-color: #F3F8FA;
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            padding: 40px 24px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .cbc-card-icon {
            width: 56px;
            height: 56px;
            background-color: #0b2545;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 24px;
        }

        .cbc-card-icon img {
            width: 28px;
            height: 28px;
            object-fit: contain;
        }

        .cbc-card h3 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 20px;
            font-weight: 700;
            line-height: 23.26px;
            color: #000000;
            margin-top: 0;
            margin-bottom: 12px;
        }

        .cbc-card p {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 26px;
            color: #000000;
            margin: 0;
        }

        @media (max-width: 1024px) {
            .cbc-cards-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 640px) {
            .cbc-cards-grid {
                grid-template-columns: 1fr;
            }

            .cbc-components-section {
                padding: 0vw 4vw 8vw;
            }

            .cbc-components-header {
                margin: 0 auto 3vw auto;
            }

            .cbc-components-header h2 {
                font-size: 3.5vw;
                white-space: nowrap;
                margin-top: 0;
                margin-bottom: 2vw;
            }
        }
    </style>

    <!-- Specimen and Preparation Section -->
    <section class="cbc-sp-section">
        <div class="cbc-sp-container">
            <div class="cbc-sp-column">
                <span class="cbc-sp-label">SPECIMEN</span>
                <h2>What Sample Is Needed?</h2>
                <p>A CBC is generally performed using a blood specimen collected from a vein.</p>
                <ul class="cbc-sp-list">
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#06B6D4"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        Whole blood specimen
                    </li>
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#06B6D4"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        Collected by trained laboratory personnel
                    </li>
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#06B6D4"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        Sample is handled according to laboratory procedures
                    </li>
                </ul>
            </div>

            <div class="cbc-sp-divider"></div>

            <div class="cbc-sp-column">
                <span class="cbc-sp-label">PREPARATION</span>
                <h2>Preparing for Your CBC</h2>
                <p>A CBC generally does not require special preparation. However, preparation requirements can depend on
                    other tests ordered at the same time.</p>
                <ul class="cbc-sp-list">
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#06B6D4"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        Follow any instructions provided by your healthcare provider
                    </li>
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#06B6D4"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        Tell the collection staff about any relevant instructions
                    </li>
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#06B6D4"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        Ask your provider if other tests require fasting
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <style>
        /* Specimen and Preparation Section */
        .cbc-sp-section {
            background-color: #0B2545;
            padding: 40px 99px;
            /* Reduced internal top and bottom gap */
            width: 100%;
            box-sizing: border-box;
        }

        .cbc-sp-container {
            max-width: 1320px;
            /* Match global container width */
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 60px;
            box-sizing: border-box;
        }

        .cbc-sp-column {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .cbc-sp-divider {
            width: 1px;
            background-color: #6B6B6B;
            align-self: stretch;
            /* stretch to full height */
        }

        .cbc-sp-label {
            font-family: 'Inter', sans-serif;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1px;
            color: #06B6D4;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .cbc-sp-column h2 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 34px;
            font-weight: 700;
            line-height: 34.5px;
            color: #FFFFFF;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .cbc-sp-column p {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            color: #FFFFFF;
            margin-top: 0;
            margin-bottom: 30px;
        }

        .cbc-sp-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .cbc-sp-list li {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            color: #FFFFFF;
            display: flex;
            align-items: flex-start;
            gap: 12px;
            white-space: nowrap;
        }

        .check-icon {
            flex-shrink: 0;
            margin-top: 4px;
            /* slight visual adjustment */
        }

        @media (max-width: 992px) {
            .cbc-sp-container {
                flex-direction: column;
                gap: 40px;
            }

            .cbc-sp-divider {
                width: 100%;
                height: 1px;
            }

            .cbc-sp-section {
                padding: 60px 40px;
            }

            .cbc-sp-list li {
                white-space: normal;
            }
        }

        @media (max-width: 640px) {
            .cbc-sp-section {
                padding: 40px 20px;
            }

            .cbc-sp-column h2 {
                font-size: 28px;
                line-height: 32px;
            }
        }
    </style>

    @include('components.process-explained')

    <!-- CBC Results Section -->
    <section class="cbc-results-section">
        <div class="cbc-results-container">
            <!-- Left Column -->
            <div class="cbc-results-left">
                <h2>What Do CBC Results Tell<br>You?</h2>
                <p>CBC results contain multiple measurements. Your healthcare provider interprets these values together
                    with your symptoms, medical history, and other clinical information. This comprehensive analysis helps in forming a complete picture of your overall health and guiding any necessary treatments or further diagnostic steps.</p>
            </div>

            <!-- Right Column -->
            <div class="cbc-results-right">
                <!-- Card 1 -->
                <div class="cbc-result-card">
                    <div class="result-number">01</div>
                    <div class="result-content">
                        <h3>Blood Cell Levels</h3>
                        <p>Results provide measurements of different blood cell types and related values.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="cbc-result-card">
                    <div class="result-number">02</div>
                    <div class="result-content">
                        <h3>Possible Abnormalities</h3>
                        <p>Results outside the expected reference range may require further clinical evaluation.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="cbc-result-card">
                    <div class="result-number">03</div>
                    <div class="result-content">
                        <h3>Clinical Interpretation</h3>
                        <p>A healthcare provider determines what the results mean in the context of the individual
                            patient.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* CBC Results Section */
        .cbc-results-section {
            padding: 40px 99px;
            background-color: #ffffff;
            width: 100%;
            box-sizing: border-box;
        }

        .cbc-results-container {
            max-width: 1320px;
            /* Match global container width */
            margin: 0 auto;
            display: flex;
            align-items: flex-start;
            /* Aligns the left text block to the top of the cards */
            gap: 80px;
            box-sizing: border-box;
        }

        .cbc-results-left {
            flex: 1;
        }

        .cbc-results-left h2 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 34px;
            font-weight: 700;
            line-height: 44px;
            color: #12263A;
            margin-top: 0;
            margin-bottom: 24px;
        }

        .cbc-results-left p {
            text-align: justify;
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 30px;
            color: #000000;
            margin: 0;
        }

        .cbc-results-right {
            flex: 1.2;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .cbc-result-card {
            background-color: #0B2545;
            border-radius: 14px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
            /* For the 0.67px border in figma */
            padding: 24px 32px;
            display: flex;
            align-items: flex-start;
            gap: 24px;
        }

        .result-number {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 20px;
            font-weight: 700;
            color: #06B6D4;
            margin-top: 2px;
        }

        .result-content h3 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 18px;
            font-weight: 700;
            color: #FFFFFF;
            margin-top: 0;
            margin-bottom: 8px;
        }

        .result-content p {
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 22px;
            color: rgba(255, 255, 255, 0.85);
            margin: 0;
        }

        @media (max-width: 992px) {
            .cbc-results-container {
                flex-direction: column;
                gap: 40px;
            }

            .cbc-results-left {
                margin-bottom: 20px;
            }

            .cbc-results-section {
                padding: 60px 40px;
            }
        }

        @media (max-width: 640px) {
            .cbc-results-section {
                padding: 40px 20px;
            }

            .cbc-result-card {
                padding: 20px;
                gap: 16px;
            }

            .cbc-results-left h2 {
                font-size: 20px; /* Reduced from 28px to fit on one line */
                line-height: 28px;
            }
        }
    </style>

    <!-- CBC FAQ Section -->
    <section class="cbc-faq-section">
        <div class="cbc-faq-container">
            <div class="cbc-faq-header">
                <h2>{{ $test->faq_heading ?: ($test->name ?? 'CBC Test') . ' FAQs' }}</h2>
                <p>{{ $test->faq_description ?: 'Answers to common questions about ' . ($test->name ?? 'CBC') . ' testing.' }}</p>
            </div>
            <div class="cbc-faq-list">
                @forelse($faqs as $faq)
                    <div class="cbc-faq-item">
                        <div class="cbc-faq-question" onclick="toggleCbcFaq(this)">
                            <span class="cbc-faq-qtext">{{ $faq->question }}</span>
                            <div class="cbc-faq-icon">
                                <svg class="icon-plus" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                <svg class="icon-close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </div>
                        </div>
                        <div class="cbc-faq-answer">
                            <p>{{ $faq->answer }}</p>
                        </div>
                    </div>
                @empty
                    <p style="text-align: center; color: #666;">No FAQs available for this test yet.</p>
                @endforelse
            </div>
        </div>
    </section>

    <style>
        /* CBC FAQ Section */
        .cbc-faq-section {
            padding: 0 99px 20px 99px; /* Very tight spacing */
            background-color: #ffffff;
            width: 100%;
            box-sizing: border-box;
        }
        .cbc-faq-container {
            max-width: 900px;
            margin: 0 auto;
            width: 100%;
        }
        .cbc-faq-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .cbc-faq-header h2 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 34px;
            font-weight: 700;
            color: #000000;
            margin-top: 0;
            margin-bottom: 12px;
        }
        .cbc-faq-header p {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            color: #4B5563;
            margin: 0;
        }
        .cbc-faq-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .cbc-faq-item {
            border: 1px solid #d7e1e8;
            border-radius: 12px;
            background-color: #FFFFFF;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .cbc-faq-item.active {
            border-color: #0b2545;
        }
        .cbc-faq-question {
            padding: 20px 22px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .cbc-faq-item.active .cbc-faq-question {
            background-color: #0b2545;
        }
        .cbc-faq-qtext {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 600;
            color: #102b49;
            transition: color 0.3s ease;
        }
        .cbc-faq-item.active .cbc-faq-qtext {
            color: #fff;
        }
        .cbc-faq-icon {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background-color: #edf2f7;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }
        .cbc-faq-item.active .cbc-faq-icon {
            background-color: transparent;
        }
        .icon-plus, .icon-close {
            width: 16px;
            height: 16px;
            stroke: #52708c;
        }
        .icon-close {
            display: none;
        }
        .cbc-faq-item.active .icon-plus {
            display: none;
        }
        .cbc-faq-item.active .icon-close {
            display: block;
            stroke: #fff;
        }
        .cbc-faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            padding: 0 22px;
            border-top: 1px solid transparent;
        }
        .cbc-faq-item.active .cbc-faq-answer {
            max-height: 300px;
            padding: 17px 22px;
            border-top-color: #d7e1e8;
        }
        .cbc-faq-answer p {
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            line-height: 1.65;
            color: #526b81;
            margin: 0;
        }

        @media (max-width: 640px) {
            .cbc-faq-section {
                padding: 3vw 5vw 6vw !important;
            }
            .cbc-faq-header {
                margin-bottom: 4vw !important;
            }
            .cbc-faq-header h2 {
                font-size: 5.5vw;
                margin-bottom: 1.5vw;
            }
            .cbc-faq-header p {
                font-size: 3.6vw;
            }
            .cbc-faq-list {
                gap: 2.5vw;
            }
            .cbc-faq-question {
                padding: 3.5vw 4vw;
            }
            .cbc-faq-item.active .cbc-faq-answer {
                padding: 3.5vw 4vw;
            }
        }
    </style>

    <script>
        function toggleCbcFaq(element) {
            const item = element.parentElement;
            const wasActive = item.classList.contains('active');
            
            // Close all
            document.querySelectorAll('.cbc-faq-item').forEach(faq => {
                faq.classList.remove('active');
            });
            
            // Toggle clicked
            if (!wasActive) {
                item.classList.add('active');
            }
        }
    </script>

    @include('components.diagnostics-cta.cta')

    @include('components.footer')
</body>

</html>
