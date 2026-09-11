<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
    <style>body { margin: 0; font-family: 'Manrope', sans-serif; }</style>
</head>
<body>
    @include('components.header')

    <section class="services-hero" aria-labelledby="services-hero-title">
        <div class="services-hero__background" style="background-image: url('{{ asset('img/genomic-diagnostics-hero.png') }}');"></div>
        <div class="services-hero__overlay"></div>
    
        <div class="services-hero__container">
            <div class="services-hero__content">
                <h1 id="services-hero-title">Contact Us</h1>
                <p>Access laboratory testing information, specimen requirements, clinical resources, and provider support to help you navigate the testing process with Sterling.</p>
            </div>
        </div>
    </section>
    
    <style>
        .services-hero, .services-hero * { box-sizing: border-box; }
        .services-hero { background: #020b1c; color: #fff; isolation: isolate; min-height: 460px; overflow: hidden; position: relative; padding: 0 7%; box-sizing: border-box; }
        .services-hero__background, .services-hero__overlay { height: 100%; inset: 0; position: absolute; width: 100%; }
        .services-hero__background { background-position: center; background-repeat: no-repeat; background-size: 100% 100%; z-index: -2; }
        .services-hero__overlay { background: linear-gradient(90deg, rgba(7,26,49,.96) 0%, rgba(7,26,49,.86) 48%, rgba(7,26,49,.25) 100%); z-index: -1; }
        .services-hero__container { align-items: center; display: flex; margin: 0 auto; max-width: 1320px; width: 100%; min-height: 460px; padding: 56px 0; }
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
        @media (max-width: 700px) {
            .services-hero, .services-hero__container { min-height: 430px; }
            .services-hero__container { align-items: flex-end; padding: 48px 20px; }
            .services-hero__overlay { background: linear-gradient(90deg, rgba(7,26,49,.96), rgba(7,26,49,.25)); }
            .services-hero__content { max-width: 350px; }
            .services-hero p {
                font-size: 16px;
                line-height: 26px;
            }
        }
    </style>

    <section class="contact-section">
        <div class="contact-container">
            <!-- Left Info Section -->
            <div class="contact-info">
                <h2>Urgent Testing Support</h2>
                <p class="contact-intro">For expedited laboratory services, connect with us directly or come in while we're open.</p>

                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <div class="contact-text">
                            <strong>Laboratory Location</strong>
                            <span>5th Street, 21st Floor, New York, USA</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </div>
                        <div class="contact-text">
                            <strong>Customer Support</strong>
                            <span>info@example.com</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </div>
                        <div class="contact-text">
                            <strong>Appointment & Reports</strong>
                            <span>(888) 4567890</span>
                        </div>
                    </div>
                </div>

                <div class="working-schedule">
                    <h3>Working Schedule</h3>
                    <ul>
                        <li><span>Mon - Fri</span> <span>7:00 AM – 8:00 PM</span></li>
                        <li><span>Sat - Sun</span> <span>8:00 AM – 4:00 PM</span></li>
                        <li><span>Emergency Testing</span> <span>24/7 Hours</span></li>
                    </ul>
                </div>
            </div>

            <!-- Right Form Section -->
            <div class="contact-form-wrapper">
                <h2>Have Any Questions Contact With Us</h2>
                <form class="contact-form">
                    <div class="form-row">
                        <input type="text" placeholder="First Name" required>
                        <input type="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-row">
                        <input type="tel" placeholder="Phone" required>
                        <input type="text" placeholder="Subject" required>
                    </div>
                    <textarea placeholder="Type Your Message" rows="5" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <style>
        .contact-section {
            padding: 80px 99px;
            background-color: #ffffff;
            color: #0d233a;
            font-family: 'Manrope', sans-serif;
            box-sizing: border-box;
        }
        .contact-container {
            max-width: 1320px;
            margin: 0 auto;
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 74px;
            flex-wrap: wrap;
        }
        /* Left Info */
        .contact-info {
            flex: 1;
            min-width: 320px;
            max-width: 452px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .contact-info h2 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 34px;
            font-weight: 700;
            line-height: 44px;
            letter-spacing: 0px;
            color: #0B2545;
            margin: 0 0 16px 0;
        }
        .contact-intro {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 25.6px;
            letter-spacing: 0px;
            color: #000000;
            margin: 0 0 40px 0;
        }
        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 28px;
            margin-bottom: 50px;
        }
        .contact-item {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        .contact-icon {
            width: 44px;
            height: 44px;
            background-color: #0B2545 !important;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            flex-shrink: 0;
        }
        .contact-icon svg {
            width: 20px;
            height: 20px;
        }
        .contact-text {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }
        .contact-text strong {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 20px;
            font-weight: 600;
            line-height: 24px;
            letter-spacing: 0px;
            color: #000000;
        }
        .contact-text span {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            letter-spacing: 0px;
            color: #000000;
        }
        
        .working-schedule h3 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 24px;
            font-weight: 700;
            line-height: 34px;
            letter-spacing: 0px;
            color: #0B2545;
            margin: 0 0 24px 0;
        }
        .working-schedule ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 18px;
        }
        .working-schedule li {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            font-weight: 600;
            padding-bottom: 18px;
            border-bottom: 1px solid #eaeaea;
        }
        .working-schedule li:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }
        .working-schedule li span:last-child {
            font-weight: 700;
            color: #000;
        }

        /* Right Form */
        .contact-form-wrapper {
            flex: 1;
            min-width: 320px;
            max-width: 713px;
            background-color: #0b2545;
            border-radius: 20px;
            padding: 56px 48px;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 20px 40px rgba(13, 35, 58, 0.08);
        }
        .contact-form-wrapper h2 {
            font-size: clamp(18px, 1.8vw, 24px);
            font-weight: 700;
            margin: 0 0 36px 0;
            text-align: center;
            white-space: nowrap;
        }
        .contact-form {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }
        .form-row {
            display: flex;
            gap: 16px;
        }
        .form-row input {
            flex: 1;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 16px 20px;
            border-radius: 6px;
            border: none;
            background-color: #fff;
            font-family: inherit;
            font-size: 14px;
            color: #333;
            box-sizing: border-box;
        }
        .contact-form input::placeholder, .contact-form textarea::placeholder {
            color: #888;
        }
        .contact-form textarea {
            resize: vertical;
            min-height: 140px;
        }
        .contact-form button {
            background-color: #20b3b5;
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            border: none;
            border-radius: 99px;
            padding: 16px 36px;
            cursor: pointer;
            margin: 24px auto 0 auto;
            display: block;
            min-width: 220px;
            transition: opacity 0.2s, transform 0.2s;
        }
        .contact-form button:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        @media (max-width: 1024px) {
            .contact-container {
                flex-direction: column;
                align-items: center;
                gap: 50px;
            }
            .contact-info, .contact-form-wrapper {
                max-width: 100%;
                width: 100%;
            }
        }
        @media (max-width: 600px) {
            .form-row {
                flex-direction: column;
            }
            .contact-form-wrapper {
                padding: 40px 24px;
            }
            .contact-section {
                padding: 60px 16px;
            }
        }
    </style>

    <section class="map-faq-section">
        <div class="map-faq-container">
            <!-- Left Map -->
            <div class="map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.057396656094!2d-0.14447608422961425!3d51.523091979637775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ad554c335c1%3A0xda2164b934c67c1a!2sFitzrovia%2C%20London!5e0!3m2!1sen!2suk!4v1650000000000!5m2!1sen!2suk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <!-- Right FAQ -->
            <div class="faq-wrapper">
                <h2>Frequently Asked Questions</h2>
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>What is genomic testing?<span class="icon">+</span></summary>
                        <div class="faq-answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit id venenatis pretium risus euismod dictum egestas.</div>
                    </details>
                    <details class="faq-item">
                        <summary>Who may need genomic testing?<span class="icon">+</span></summary>
                        <div class="faq-answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit id venenatis pretium risus euismod dictum egestas.</div>
                    </details>
                    <details class="faq-item">
                        <summary>What type of sample is required?<span class="icon">+</span></summary>
                        <div class="faq-answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit id venenatis pretium risus euismod dictum egestas.</div>
                    </details>
                    <details class="faq-item">
                        <summary>How long do genomic test results take?<span class="icon">+</span></summary>
                        <div class="faq-answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit id venenatis pretium risus euismod dictum egestas.</div>
                    </details>
                    <details class="faq-item">
                        <summary>Can patients order genomic tests directly?<span class="icon">+</span></summary>
                        <div class="faq-answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit id venenatis pretium risus euismod dictum egestas.</div>
                    </details>
                </div>
            </div>
        </div>
    </section>

    <style>
        .map-faq-section {
            padding: 0 99px 80px 99px;
            background-color: #ffffff;
            font-family: 'Manrope', sans-serif;
            box-sizing: border-box;
        }
        .map-faq-container {
            max-width: 1320px;
            margin: 0 auto;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 54px;
        }
        .map-wrapper {
            flex: 1;
            min-width: 320px;
            max-width: 706px;
            height: 479px;
            border-radius: 12px;
            overflow: hidden;
            background: #eaeaea;
        }
        .faq-wrapper {
            flex: 1;
            min-width: 320px;
            max-width: 479px;
            display: flex;
            flex-direction: column;
        }
        .faq-wrapper h2 {
            font-size: 28px;
            font-weight: 800;
            color: #000;
            margin: 0 0 24px 0;
            letter-spacing: -0.02em;
        }
        .faq-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .faq-item {
            border: 1px solid #eaeaea;
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.2s ease;
        }
        .faq-item[open] {
            background-color: #f4f9fc;
            border-color: #eaeaea;
        }
        .faq-item summary {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 60px;
            padding: 0 20px;
            font-size: 14.5px;
            font-weight: 700;
            color: #111827;
            cursor: pointer;
            list-style: none;
            user-select: none;
        }
        .faq-item summary::-webkit-details-marker {
            display: none;
        }
        .faq-item summary .icon {
            width: 22px;
            height: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background-color: #f0f4f8;
            color: #8b9bb4;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.2s ease;
        }
        .faq-item[open] summary .icon {
            background-color: #0d233a;
            color: #ffffff;
            transform: rotate(45deg);
        }
        .faq-answer {
            padding: 0 20px 20px 20px;
            font-size: 14px;
            line-height: 1.6;
            color: #4b5563;
        }

        @media (max-width: 1024px) {
            .map-faq-container {
                flex-direction: column;
                align-items: center;
            }
            .map-wrapper, .faq-wrapper {
                width: 100%;
                height: auto;
            }
            .map-wrapper {
                height: 400px;
            }
        }
    </style>

    @include('components.footer')
</body>
</html>
