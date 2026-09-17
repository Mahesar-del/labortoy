<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/favicon.jpg') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: 'Manrope', sans-serif; overflow-x: clip; width: 100%; }
        .main-wrapper { width: 100%; margin: 0 auto; overflow-x: clip; }
    </style>
</head>
<body>
    @include('components.header')

    @include('components.provider-hero', [
        'title' => 'Contact Us',
        'description' => 'Access laboratory testing information, specimen requirements, clinical resources, and provider support to help you navigate the testing process with Sterling.',
        'bgImage' => asset('images/molecular-diagonostics-hero-img.jpg'),
        'bgPosition' => 'center 42%',
        'showButton' => false
    ])

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
                            <!-- <strong>Laboratory Location</strong> -->
                            <span>{!! nl2br(e($contact->address)) !!}</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </div>
                        <div class="contact-text">
                            <!-- <strong>Customer Support</strong> -->
                            <span>{{ $contact->email }}</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </div>
                        <div class="contact-text">
                            <!-- <strong>Appointment & Reports</strong> -->
                            <span>{{ $contact->phone }}</span>
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
            <div class="contact-form-wrapper" id="contact-form">
                <h2>Have Any Questions Contact With Us</h2>
                @if(session('contact_success'))<div class="contact-form-alert success">{{ session('contact_success') }}</div>@endif
                @if($errors->any())<div class="contact-form-alert error">{{ $errors->first() }}</div>@endif
                <form class="contact-form" method="post" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="form-row">
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="First Name" pattern="[A-Za-zÀ-ÿ' .\-]+" title="Name can contain letters only" oninput="this.value=this.value.replace(/[^A-Za-zÀ-ÿ' .\-]/g,'')" required>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email Address" required>
                    </div>
                    <div class="form-row">
                        <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="Phone" inputmode="tel" pattern="[0-9+()\- ]+" title="Phone number can contain digits only" oninput="this.value=this.value.replace(/[^0-9+()\- ]/g,'')" required>
                        <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Subject" required>
                    </div>
                    <textarea name="message" placeholder="Type Your Message" rows="5" required>{{ old('message') }}</textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <style>
        .contact-section {
            padding: 25px 99px;
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
            min-width: 300px;
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
            margin: 0 0 7px 0;
        }
        .contact-intro {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 25.6px;
            letter-spacing: 0px;
            color: #000000;
            margin: 0 0 30px 0;
        }
        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 28px;
            margin-bottom: 40px;
        }
        .contact-section .contact-item {
            display: flex;
            align-items: center;
            gap: 16px;
            width: 427.33px;
            height: 40px;
        }
        .contact-section .contact-icon {
            width: 40px;
            height: 40px;
            background-color: #0B2545 !important;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            flex-shrink: 0;
        }
        .contact-section .contact-icon svg {
            width: 20px;
            height: 20px;
        }
        .contact-section .contact-text {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }
        .contact-section .contact-text strong {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 20px;
            font-weight: 600;
            line-height: 24px;
            letter-spacing: 0px;
            color: #000000;
        }
        .contact-section .contact-text span {
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
            min-width: 300px;
            width: 713px;
            max-width: 100%;
            height: auto;
            background-color: #0b2545;
            border-radius: 20px;
            padding: 56px 48px;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 20px 40px rgba(13, 35, 58, 0.08);
            box-sizing: border-box;
            margin-top: 2rem;
        }
        .contact-form-wrapper h2 {
            font-size: clamp(20px, 2vw, 24px);
            font-weight: 700;
            margin: 0 0 36px 0;
            text-align: center;
            white-space: normal;
            line-height: 1.3;
        }
        .contact-form {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }
        .contact-form-alert{margin:0 auto 18px;max-width:674px;padding:13px 16px;border-radius:8px;font-weight:700}.contact-form-alert.success{background:#dff8f1;color:#087a6b}.contact-form-alert.error{background:#fff0f0;color:#b23a45}
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
            resize: none;
            height: 120px;
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
            margin: 18px 0 0 0;
            display: block;
            width: 250px;
            align-self: center;
            transition: opacity 0.2s, transform 0.2s;
        }
        .contact-form button:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        @media (max-width: 1024px) {
            .contact-section {
                padding: 60px 40px;
            }
            .contact-container {
                flex-direction: column;
                align-items: center;
                gap: 50px;
            }
            .contact-info, .contact-form-wrapper {
                max-width: 100%;
                width: 100%;
            }
            .contact-form-wrapper {
                order: 1;
            }
            .contact-info {
                order: 2;
            }
        }
        @media (max-width: 768px) {
            .contact-section {
                padding: 40px 20px;
            }
            .contact-info h2 {
                font-size: 26px;
                line-height: 34px;
            }
            .contact-details {
                margin-bottom: 36px;
                gap: 20px;
            }
            .contact-form-wrapper {
                padding: 36px 20px;
                border-radius: 16px;
                min-width: 0;
            }
            .contact-form-wrapper h2 {
                margin-bottom: 24px;
            }
            .form-row {
                flex-direction: column;
                gap: 16px;
            }
            .contact-form button {
                width: 100%;
                padding: 16px 24px;
                font-size: 16px;
                margin: 20px 0 0 0;
            }
        }
        @media (max-width: 480px) {
            .contact-section {
                padding: 0px 16px;
            }
            .contact-form-wrapper {
                padding: 28px 16px;
            }
        }
    </style>

    <section class="map-faq-section">
        <div class="map-faq-container">
            <!-- Left Map -->
            <div class="map-wrapper">
                <iframe src="https://www.google.com/maps?q={{ urlencode($contact->address) }}&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <!-- Right FAQ -->
            <div class="faq-wrapper">
                <h2>Frequently Asked Questions</h2>
                <div class="faq-list">
                    <div class="faq-item">
                        <button class="faq-summary">How can I contact Sterling Laboratory?<span class="icon">+</span></button>
                        <div class="faq-answer-wrapper">
                            <div class="faq-answer">You can send us a message using the contact form on this page, email us at {{ $contact->email }}, or call us at {{ $contact->phone }}.</div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-summary">What information should I include in my message?<span class="icon">+</span></button>
                        <div class="faq-answer-wrapper">
                            <div class="faq-answer">Please include your name, preferred contact details, and a short description of your question. Avoid sharing sensitive medical information through the general contact form.</div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-summary">How soon will the laboratory respond?<span class="icon">+</span></button>
                        <div class="faq-answer-wrapper">
                            <div class="faq-answer">Our support team reviews messages during regular laboratory hours and will respond as soon as possible using the email address or phone number you provide.</div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-summary">Can I schedule a laboratory appointment online?<span class="icon">+</span></button>
                        <div class="faq-answer-wrapper">
                            <div class="faq-answer">Yes. Use the Book an Appointment page to request a laboratory visit or home sample collection and select your preferred available date and time.</div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-summary">Who should I contact about test results or an existing order?<span class="icon">+</span></button>
                        <div class="faq-answer-wrapper">
                            <div class="faq-answer">Contact our laboratory support team with your name and order details. For clinical interpretation of results, please speak with the healthcare provider who ordered your test.</div>
                        </div>
                    </div>
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
            min-width: 300px;
            max-width: 706px;
            height: 479px;
            min-height: 460px;
            border-radius: 12px;
            overflow: hidden;
            background: #eaeaea;
        }
        .map-wrapper iframe {
            width: 100%;
            height: 100%;
            display: block;
            border: 0;
        }
        .faq-wrapper {
            flex: 1;
            min-width: 300px;
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
            background-color: #fff;
            transition: border-color 0.3s ease;
        }
        .faq-item.active {
            border-color: #0b2545;
        }
        .faq-summary {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-height: 60px;
            padding: 14px 20px;
            font-size: 14.5px;
            font-weight: 700;
            color: #111827;
            background-color: transparent;
            border: none;
            cursor: pointer;
            text-align: left;
            transition: background-color 0.3s ease, color 0.3s ease;
            font-family: inherit;
        }
        .faq-item.active .faq-summary {
            background-color: #0b2545;
            color: #ffffff;
        }
        .faq-summary .icon {
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
            transition: all 0.3s ease;
            flex-shrink: 0;
            margin-left: 10px;
        }
        .faq-item.active .faq-summary .icon {
            background-color: #0b2545;
            color: #ffffff;
            transform: rotate(45deg);

            
        }
        .faq-answer-wrapper {
            display: grid;
            grid-template-rows: 0fr;
            transition: grid-template-rows 0.3s ease-in-out, background-color 0.3s ease;
            background-color: #fff;
        }
        .faq-item.active .faq-answer-wrapper {
            grid-template-rows: 1fr;
            background-color: #f4f9fc;
        }
        .faq-answer {
            overflow: hidden;
            padding: 0 20px;
            font-size: 14px;
            line-height: 1.6;
            color: #4b5563;
            transition: padding 0.3s ease-in-out;
            min-height: 0;
        }
        .faq-item.active .faq-answer {
            padding: 20px 20px 20px 20px;
        }

        @media (max-width: 1024px) {
            .map-faq-section {
                padding: 0 40px 60px 40px;
            }
            .map-faq-container {
                flex-direction: column;
                align-items: center;
                gap: 40px;
            }
            .map-wrapper, .faq-wrapper {
                width: 100%;
                max-width: 100%;
            }
            .map-wrapper, .map-wrapper iframe {
                height: 460px !important;
                min-height: 460px !important;
            }
        }
        @media (max-width: 768px) {
            .map-faq-section {
                padding: 0 20px 40px 20px;
            }
            .map-wrapper, .map-wrapper iframe {
                height: 460px !important;
                min-height: 460px !important;
            }
            .faq-wrapper {
                display: none !important;
            }
        }
        @media (max-width: 480px) {
            .map-faq-section {
                padding: 0 16px 32px 16px;
            }
            .map-wrapper, .map-wrapper iframe {
                height: 460px !important;
                min-height: 460px !important;
            }
        }
    </style>

    <div class="main-wrapper">
        @include('components.footer')
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const summary = item.querySelector('.faq-summary');
                summary.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');
                    
                    // Close all FAQs
                    faqItems.forEach(faq => {
                        faq.classList.remove('active');
                    });
                    
                    // Toggle current FAQ
                    if (!isActive) {
                        item.classList.add('active');
                    }
                });
            });
        });
    </script>
</body>
</html>
