<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Frequently Asked Questions | Sterling Laboratory</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/favicon.jpg') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        html, body { margin: 0; padding: 0; width: 100%; overflow-x: clip; font-family: 'Manrope', sans-serif; background-color: #ffffff; }
        .main-wrapper { width: 100%; margin: 0 auto; overflow-x: clip; }
        /* Outer Page Section with matching Header & Footer 99px padding grid */
        .faq-page-section {
            width: 100%;
            padding: 48px 99px 80px 99px;
            background-color: #ffffff;
            box-sizing: border-box;
        }

        /* Inner Content Container matching exact 1320px max-width */
        .faq-page-container {
            width: 100%;
            max-width: 1320px;
            margin: 0 auto;
            padding: 0;
            box-sizing: border-box;
        }

        .faq-sections-wrapper {
            display: flex;
            flex-direction: column;
            gap: 30px;
            width: 100%;
        }

        .faq-category-block {
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        .faq-category-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 22px;
            font-weight: 700;
            color: #000000;
            margin: 0 0 20px 0;
            line-height: 1.3;
        }

        .faq-accordion-group {
            display: grid;
            gap: 12px;
        }

        .faq-item {
            border: 1px solid #d7e1e8;
            border-radius: 12px;
            cursor: pointer;
            overflow: hidden;
        }

        .faq-question {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 22px;
            color: #102b49;
            font: 600 16px Arial;
            transition: all 0.2s ease;
        }

        .faq-question b {
            background: #edf2f7;
            border-radius: 50%;
            color: #52708c;
            display: grid;
            font-size: 21px;
            height: 28px;
            place-items: center;
            width: 28px;
            transition: all 0.2s ease;
            font-weight: normal;
        }

        .faq-answer {
            display: none;
            border-top: 1px solid #d7e1e8;
            padding: 17px 22px;
        }

        .faq-answer p {
            color: #526b81;
            font: 15px/1.65 Arial;
            margin: 0;
        }

        .faq-item.active {
            border-color: #0b2545;
        }

        .faq-item.active .faq-question {
            background: #0b2545;
            color: #fff;
        }

        .faq-item.active .faq-question b {
            background: transparent;
            color: #fff;
            transform: rotate(45deg); /* Optional: turn + into x */
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        /* Contact Hero Section */
        .contact-hero {
            background: #041b34;
            color: #fff;
            height: 420px;
            isolation: isolate;
            overflow: hidden;
            position: relative;
            width: 100%;
        }
        .contact-hero__image, .contact-hero__shade {
            inset: 0;
            position: absolute;
        }
        .contact-hero__image {
            background-image: url('{{ asset('images/molecular-diagonostics-hero-img.jpg') }}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            z-index: -2;
        }
        .contact-hero__shade {
            background: linear-gradient(90deg, rgba(3, 21, 42, 0.98) 0%, rgba(3, 21, 42, 0.92) 38%, rgba(3, 21, 42, 0.42) 67%, rgba(3, 21, 42, 0.16));
            z-index: -1;
        }
        .contact-hero__content {
            left: max(99px, calc((100% - 1320px) / 2));
            max-width: 700px;
            position: absolute;
            top: calc(50% - 30px);
            transform: translateY(-50%);
        }
        .contact-hero h1 {
            font: 800 clamp(44px, 4.2vw, 62px) / 0.98 'Plus Jakarta Sans', sans-serif;
            letter-spacing: -0.055em;
            margin: 0 0 24px;
        }
        .mobile-break { display: none; }
        .contact-hero p {
            color: #f4f8fb;
            font: 400 clamp(16px, 1.2vw, 20px) / 1.6 'Inter', sans-serif;
            margin: 0;
            max-width: 680px;
            text-align: justify;
        }

        /* Category Filter Buttons Outer & Inner Wrapper matching 99px padding & 1320px grid */
        .contact-hero__buttons-wrapper {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 0 99px;
            box-sizing: border-box;
            z-index: 2;
        }

        .contact-hero__buttons {
            width: 100%;
            max-width: 1320px;
            height: 60px;
            margin: 0 auto;
            display: flex;
            gap: 16px;
            align-items: stretch;
            justify-content: space-between;
            box-sizing: border-box;
        }
        .faq-btn {
            flex: 1;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background-color: #F3F4F6;
            color: #334155;
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            font-weight: 600;
            padding: 0 12px;
            border: none;
            border-radius: 12px 12px 0 0;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
            white-space: nowrap;
            box-sizing: border-box;
        }
        .faq-btn:hover {
            background-color: #ffffff;
        }
        .faq-btn.active {
            background-color: #ffffff;
            color: #000000;
            font-weight: 700;
        }

        /* Responsive Breakpoint 1150px matching Header & Footer */
        @media (max-width: 1150px) {
            .faq-page-section {
                padding: 32px 20px 48px 20px;
            }
            .contact-hero__content {
                left: 20px;
                right: 20px;
            }
            .contact-hero__buttons-wrapper {
                padding: 0 20px;
            }
            .contact-hero__buttons {
                gap: 8px;
                height: 50px;
                overflow-x: auto;
                flex-wrap: nowrap;
                -webkit-overflow-scrolling: touch;
            }
            .faq-btn {
                font-size: 13px;
                height: 50px;
                min-width: 170px;
                flex-shrink: 0;
            }
        }

        @media (max-width: 768px) {
            .faq-sections-wrapper {
                gap: 36px;
            }
            .faq-category-title {
                font-size: 18px;
                margin-bottom: 14px;
            }
            .faq-question {
                font-size: 14px;
                padding: 16px 18px;
            }
            .faq-answer {
                padding: 16px 18px;
            }
            .faq-answer p {
                font-size: 14px;
            }
        }
        @media (max-width: 700px) {
            .contact-hero {
                height: 380px;
            }
            .contact-hero__image {
                background-position: 64% center;
            }
            .contact-hero__shade {
                background: linear-gradient(90deg, rgba(3, 21, 42, 0.97), rgba(3, 21, 42, 0.72));
            }
            .contact-hero__content {
                left: 20px;
                right: 20px;
                top: calc(50% - 26px);
                transform: translateY(-50%);
            }
            .contact-hero h1 {
                margin-bottom: 16px;
                font-size: 38px;
                line-height: 1.15;
                letter-spacing: 0.5px;
            }
            .mobile-break { display: block; }
            .contact-hero p {
                font-size: 15px;
                line-height: 1.5;
            }
            .contact-hero__buttons-wrapper {
                bottom: 0;
            }
            .faq-btn {
                border-radius: 12px 12px 0 0;
                height: 52px;
                font-size: 14px;
                min-width: 180px;
            }
            .site-footer .contact-text p {
                white-space: normal;
                line-height: 1.4;
                margin-top: 4px;
            }
            .site-footer .contact-text h5 {
                white-space: normal;
                line-height: 1.2;
            }
            .site-footer .footer-contact-info {
                gap: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="main-wrapper">
        <!-- Header Component -->
        @include('components.header')

        <!-- Contact Us Hero Section with Exact 500px Height -->
        <section class="contact-hero" aria-labelledby="contact-hero-title">
            <div class="contact-hero__image"></div>
            <div class="contact-hero__shade"></div>
            <div class="contact-hero__content">
                <h1 id="contact-hero-title">Frequently Asked <br class="mobile-break"> Questions</h1>
                <p>Find answers to common questions about Sterling's diagnostic services, testing process, appointments, specimens, and results. Learn how to prepare for your laboratory visit, access your online test reports securely, and get support for billing and insurance inquiries.</p>
            </div>

            <!-- Category Filter Buttons at Bottom -->
            <div class="contact-hero__buttons-wrapper">
                <div class="contact-hero__buttons">
                    @if(isset($categories) && count($categories) > 0)
                        @foreach($categories as $category)
                            <button class="faq-btn {{ $loop->first ? 'active' : '' }}" onclick="scrollToCategory('{{ $category->slug }}', this)">{{ $category->name }}</button>
                        @endforeach
                    @else
                        <button class="faq-btn active" onclick="scrollToCategory('cat-getting-ready', this)">Getting Ready for Testing</button>
                        <button class="faq-btn" onclick="scrollToCategory('cat-testing-results', this)">Testing & Results</button>
                        <button class="faq-btn" onclick="scrollToCategory('cat-billing-payments', this)">Billing & Payments</button>
                        <button class="faq-btn" onclick="scrollToCategory('cat-appointments', this)">Appointments</button>
                        <button class="faq-btn" onclick="scrollToCategory('cat-general-questions', this)">General Questions</button>
                    @endif
                </div>
            </div>
        </section>

        <!-- 5-Part FAQ Accordion Section -->
        <section class="faq-page-section">
            <main class="faq-page-container">
                <div class="faq-sections-wrapper">
                    @if(isset($categories) && count($categories) > 0)
                        @foreach($categories as $category)
                            <div class="faq-category-block" id="{{ $category->slug }}">
                                <h2 class="faq-category-title">{{ $category->name }}</h2>
                                <div class="faq-accordion-group">
                                    @foreach($category->items as $item)
                                        <article class="faq-item" onclick="toggleFaqItem(this)">
                                            <div class="faq-question">
                                                <span>{{ $item->question }}</span>
                                                <b>+</b>
                                            </div>
                                            <div class="faq-answer">
                                                <p>{{ $item->answer }}</p>
                                            </div>
                                        </article>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </main>
        </section>

        <!-- Footer Component -->
        @include('components.footer')
    </div>

    <script>
        function scrollToCategory(categoryId, btnElement) {
            // Update active button state
            const buttons = document.querySelectorAll('.faq-btn');
            buttons.forEach(b => b.classList.remove('active'));
            btnElement.classList.add('active');

            // Scroll to the targeted category section smoothly
            const targetElement = document.getElementById(categoryId);
            if (targetElement) {
                const yOffset = -30;
                const y = targetElement.getBoundingClientRect().top + window.pageYOffset + yOffset;
                window.scrollTo({ top: y, behavior: 'smooth' });
            }
        }

        // FAQ Accordion Card Toggle with Smooth Transitions
        function toggleFaqItem(cardElement) {
            const isActive = cardElement.classList.contains('active');
            
            // Close all currently active cards within the same group
            const group = cardElement.closest('.faq-accordion-group');
            if (group) {
                group.querySelectorAll('.faq-item.active').forEach(card => {
                    card.classList.remove('active');
                });
            }

            // If it wasn't active, open it
            if (!isActive) {
                cardElement.classList.add('active');
            }
        }
    </script>
</body>
</html>
