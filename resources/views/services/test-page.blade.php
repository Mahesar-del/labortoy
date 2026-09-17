<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $testPage->meta_title ?: $testPage->title . ' - Sterling Diagnostics' }}</title>
    <meta name="description" content="{{ $testPage->meta_description ?: $testPage->description }}">
    @if(!empty($testPage->meta_keywords))<meta name="keywords" content="{{ $testPage->meta_keywords }}">@endif
    <link rel="icon" type="image/jpeg" href="{{ asset('images/favicon.jpg') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}">
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

        .dynamic-test-page {
            min-width: 0;
            overflow-x: clip;
        }

        .dynamic-test-page .services-hero__container {
            box-sizing: border-box;
            margin-left: auto;
            margin-right: auto;
            max-width: 1320px;
            padding-left: 0 !important;
            padding-right: 0 !important;
            width: 100%;
        }

        @media (max-width: 1517px) and (min-width: 1151px) {
            .dynamic-test-page .services-hero__container {
                padding-left: 99px !important;
                padding-right: 99px !important;
            }
        }

        @media (max-width: 1150px) {
            .dynamic-test-page .services-hero__container {
                padding-left: 20px !important;
                padding-right: 20px !important;
            }
        }
    </style>
</head>

<body class="dynamic-test-page">
    @include('components.header')

    @php
        $heroImage = $testPage->bg_image && \Illuminate\Support\Facades\Storage::disk('public')->exists($testPage->bg_image)
            ? asset('storage/' . $testPage->bg_image)
            : asset('images/cbc-test-hero.jpg');
        $aboutImage = $testPage->about_image && \Illuminate\Support\Facades\Storage::disk('public')->exists($testPage->about_image)
            ? asset('storage/' . $testPage->about_image)
            : asset('images/what-cbc-test.jpg');
    @endphp

    @include('components.services-hero', [
    'title' => $testPage->title,
    'description' => $testPage->description,
    'bgImage' => $heroImage
    ])

    <!-- Overlapping Info Box -->
    <section class="test-quick-info">
        <div class="tqi-container">
            <div class="tqi-item">
                <span class="tqi-label">TEST TYPE</span>
                <span class="tqi-value">{{ $testPage->quick_info_type ?? 'N/A' }}</span>
            </div>
            <div class="tqi-divider"></div>
            <div class="tqi-item">
                <span class="tqi-label">SPECIMEN</span>
                <span class="tqi-value">{{ $testPage->quick_info_specimen ?? 'N/A' }}</span>
            </div>
            <div class="tqi-divider"></div>
            <div class="tqi-item">
                <span class="tqi-label">TEST PREPARATION</span>
                <span class="tqi-value">{{ $testPage->quick_info_prep ?? 'Usually No Special Preparation' }}</span>
            </div>
        </div>
    </section>

    <!-- What Is a CBC Test Section -->
    <section class="cbc-about-section">
        <div class="cbc-about-container">
            <div class="cbc-about-content">
                <h2>{{ $testPage->about_heading ?? 'About ' . $testPage->title }}</h2>
                @foreach(explode("\n", $testPage->about_text) as $paragraph)
                    @if(trim($paragraph))
                        <p>{{ $paragraph }}</p>
                    @endif
                @endforeach
            </div>
            <div class="cbc-about-image">
                <img src="{{ $aboutImage }}" alt="{{ $testPage->title }}">
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
            color: #000;
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
                text-align: left;
            }
        }
    </style>

    @if($testPage->components && $testPage->components->count())
    <!-- Key Components Section -->
    <section class="cbc-components-section">
        <div class="cbc-components-container">
            <div class="cbc-components-header">
                <h2>{{ $testPage->components_heading ?? 'Key Components of a ' . $testPage->title }}</h2>
                <p>{{ $testPage->components_text ?? "A {$testPage->title} report includes the parameters listed below. Normal ranges may vary slightly between laboratories, so always use the reference range provided on your own report as the primary guide." }}</p>
            </div>

            <div class="cbc-cards-grid">
                @foreach($testPage->components as $component)
                <div class="cbc-card">
                    <div class="cbc-card-icon">
                        @if($component->icon)
                            <img src="{{ asset('storage/' . $component->icon) }}" alt="{{ $component->title }}">
                                                @else
                            @php $svgIndex = $loop->index % 4; @endphp
                            @if($svgIndex == 0)
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                            @elseif($svgIndex == 1)
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
                            @elseif($svgIndex == 2)
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                            @elseif($svgIndex == 3)
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                            @endif
                        @endif
                    </div>
                    <h3>{{ $component->title }}</h3>
                    <p>{{ $component->description }}</p>
                </div>
                @endforeach
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
    @endif

    @if($testPage->specimen_title || $testPage->preparation_title)
    <!-- Specimen and Preparation Section -->
    <section class="cbc-sp-section">
        <div class="cbc-sp-container">
            <div class="cbc-sp-column">
                <span class="cbc-sp-label">SPECIMEN</span>
                <h2>{{ $testPage->specimen_title }}</h2>
                <p>{{ $testPage->specimen_description }}</p>
                @if($testPage->specimen_items)
                <ul class="cbc-sp-list">
                    @foreach(explode("\n", str_replace("\r", "", $testPage->specimen_items)) as $item)
                    @if(trim($item))
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#06B6D4"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        {{ trim($item) }}
                    </li>
                    @endif
                    @endforeach
                </ul>
                @endif
            </div>

            <div class="cbc-sp-divider"></div>

            <div class="cbc-sp-column">
                <span class="cbc-sp-label">PREPARATION</span>
                <h2>{{ $testPage->preparation_title }}</h2>
                <p>{{ $testPage->preparation_description }}</p>
                @if($testPage->preparation_items)
                <ul class="cbc-sp-list">
                    @foreach(explode("\n", str_replace("\r", "", $testPage->preparation_items)) as $item)
                    @if(trim($item))
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#06B6D4"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        {{ trim($item) }}
                    </li>
                    @endif
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </section>

    <style>
        /* Specimen and Preparation Section */
        .cbc-sp-section {
            background-color: #0b2545;
            padding: 60px 99px;
            width: 100%;
            box-sizing: border-box;
            color: #ffffff;
        }

        .cbc-sp-container {
            max-width: 1320px;
            margin: 0 auto;
            display: flex;
            gap: 60px;
            box-sizing: border-box;
        }

        .cbc-sp-column {
            flex: 1;
        }

        .cbc-sp-divider {
            width: 1px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 0 20px;
        }

        .cbc-sp-label {
            font-family: 'Inter', sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            color: #06B6D4;
            text-transform: uppercase;
            display: block;
            margin-bottom: 12px;
        }

        .cbc-sp-column h2 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 28px;
            font-weight: 800;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .cbc-sp-column p {
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            line-height: 1.8;
            color: #e2e8f0;
            margin-top: 0;
            margin-bottom: 24px;
        }

        .cbc-sp-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .cbc-sp-list li {
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 16px;
            display: flex;
            align-items: flex-start;
        }

        .check-icon {
            margin-right: 12px;
            margin-top: 3px;
            flex-shrink: 0;
        }

        @media (max-width: 768px) {
            .cbc-sp-section {
                padding: 40px 28px;
            }

            .cbc-sp-container {
                flex-direction: column;
                gap: 40px;
            }

            .cbc-sp-divider {
                width: 100%;
                height: 1px;
                margin: 0;
            }
        }
    </style>
    @endif

@include('components.process-explained')

@if($testPage->results && $testPage->results->count())
    <!-- Results Section -->
    <section class="cbc-results-section">
        <div class="cbc-results-container">
            <!-- Left Column -->
            <div class="cbc-results-left">
                <h2>{!! nl2br(e($testPage->results_heading ?? 'What Do Results Tell You?')) !!}</h2>
                <p>{{ $testPage->results_text ?? 'Your healthcare provider interprets these values together with your symptoms, medical history, and other clinical information.' }}</p>
            </div>

            <!-- Right Column -->
            <div class="cbc-results-right">
                @foreach($testPage->results as $index => $result)
                <div class="cbc-result-card">
                    <div class="result-number">{{ sprintf('%02d', $index + 1) }}</div>
                    <div class="result-content">
                        <h3>{{ $result->title }}</h3>
                        <p>{{ $result->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <style>
        /* Results Section */
        .cbc-results-section {
            padding: 40px 99px;
            background-color: #ffffff;
            width: 100%;
            box-sizing: border-box;
        }

        .cbc-results-container {
            max-width: 1320px;
            margin: 0 auto;
            display: flex;
            align-items: flex-start;
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
            color: #000;
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
                padding: 6vw 5vw 2vw;
            }

            .cbc-result-card {
                padding: 4vw;
                gap: 3vw;
            }

            .cbc-results-left h2 {
                font-size: 5.2vw;
                line-height: 1.3;
            }
        }
    </style>
    @endif

    @if($testPage->service && $testPage->service->faqs && $testPage->service->faqs->count() > 0)
    <!-- Dynamic FAQ Section -->
    <section class="cbc-faq-section">
        <div class="cbc-faq-container">
            <div class="cbc-faq-header">
                <h2>{{ $testPage->faq_heading ?: $testPage->title . ' FAQs' }}</h2>
                <p>{{ $testPage->faq_description ?: 'Answers to common questions about this test.' }}</p>
            </div>
            <div class="cbc-faq-list">
                @foreach($testPage->service->faqs->where('is_active', true) as $faq)
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
                @endforeach
            </div>
        </div>
    </section>

    <style>
        /* FAQ Section CSS */
        .cbc-faq-section {
            padding: 0 99px 20px 99px;
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
            color: #000;
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
            max-height: 500px;
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
                padding: 3vw 5vw 6vw;
            }
            .cbc-faq-header {
                margin-bottom: 4vw;
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
    @endif

    @include('components.diagnostics-cta.cta')
    @include('components.footer')

    <script>
        function toggleMobileMenu() {
            var menu = document.getElementById('mobileMenu');
            menu.classList.toggle('active');
            document.body.style.overflow = menu.classList.contains('active') ? 'hidden' : '';
        }
    </script>
</body>

</html>
