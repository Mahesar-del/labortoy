<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $seo->title }}</title>
    <meta name="description" content="{{ $seo->description }}">
    @if(!empty($seo->keywords))<meta name="keywords" content="{{ $seo->keywords }}">@endif
    <link rel="icon" type="image/jpeg" href="{{ asset('images/favicon.jpg') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Barlow:wght@500;700&display=swap');

        :root {
            --primary-color: #0B2545;
            --text-main: #000000;
            --text-muted: #4B5563; 
            --accent-cyan: #20B2AA; 
            --bg-light: #F9FAFB;
            --border-color: #E5E7EB;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-main);
            background-color: #ffffff;
            line-height: 1.5;
            overflow-x: clip;
        }

        .main-wrapper {
            width: 100%;
            margin: 0 auto;
            overflow-x: clip;
        }

        /* Unified Container matching Hero Card Grid */
        .container {
            box-sizing: border-box;
            max-width: 94.875rem; /* 1518px (1320px content + 198px padding) */
            margin: 0 auto;
            padding: 3rem 99px;
        }


        /* Tabs Navigation */
        .tabs-nav {
            display: flex;
            justify-content: center;
            gap: 2.5rem;
            border-bottom: 0.166875rem solid #D3D2D2;
            margin-bottom: 2rem;
            width: 100%;
        }

        .tab-item {
            font-size: 1.125rem; 
            font-weight: 600;
            line-height: 1.375rem; 
            color: var(--text-muted);
            padding-bottom: 1rem;
            border-bottom: 0.166875rem solid transparent;
            margin-bottom: -0.166875rem;
            position: relative;
            cursor: pointer;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .tab-item::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -0.166875rem;
            width: 100%;
            height: 0.166875rem;
            border-radius: 0.625rem; /* 0.625rem */
            background-color: transparent;
            transition: background-color 0.2s ease;
        }

        .tab-item.active {
            color: #0B2545;
        }

        .tab-item.active::after {
            background-color: #0B2545;
        }

        /* Action Buttons */
        .actions-container {
            max-width: 61.75rem;
            width: 100%;
            margin: 0 auto;
        }

        .actions-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 1.25rem;
            justify-content: center;
            width: 100%;
            margin-bottom: 1rem;
        }

        .action-btn {
            flex: 0 1 14.5rem; /* ~14.5rem */
            width: 100%;
            height: 4rem; /* 4rem */
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            background: #ffffff;
            border: 0.125rem solid #0B2545;
            border-radius: 0.5rem;
            font-size: 1rem; /* 1rem */
            font-weight: 500;
            color: var(--text-main);
            text-decoration: none;
            transition: all 0.2s ease;
            white-space: nowrap;
            padding: 0 1.5rem;
        }

        .action-btn:hover {
            background: var(--bg-light);
        }

        .action-icon {
            width: 1.5rem;
            height: 1.5rem;
            object-fit: contain;
        }

        /* View Page Link */
        .view-page-link {
            display: block;
            text-align: right;
            font-family: 'Inter', sans-serif;
            font-size: 1.125rem; /* 1.125rem */
            font-weight: 500;
            line-height: 1.25rem; /* 1.25rem */
            letter-spacing: 0;
            color: #0B2545;
            text-decoration: none;
            margin-top: 1.5rem;
            margin-bottom: 4rem;
        }

        /* Main Content Split */
        .content-split {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 100%;
            width: 100%;
            margin: 0 auto;
            gap: 3rem;
        }

        .content-left {
            flex: 0 0 48%;
            position: relative;
            min-width: 0;
        }

        /* Image Styling */
        .image-wrapper {
            position: relative;
            width: 100%;
        }

        .image-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 16px;
        }

        .content-right {
            flex: 1;
            min-width: 0;
            container-type: inline-size;
        }

        /* Typography & Content Right */
        .section-subtitle {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 1rem; /* 1rem */
            font-weight: 600;
            line-height: 1.625rem; /* 1.625rem */
            color: #22B6AF;
            text-transform: uppercase;
            letter-spacing: 0.03125rem; /* 0.03125rem */
            margin-bottom: 0.5rem;
        }

        .section-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(1.4rem, 2.1vw, 2.125rem);
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -0.015em;
            color: #000000;
            margin-bottom: 1rem;
            max-width: 100%;
            word-wrap: break-word;
        }

        .section-description {
            font-family: 'Inter', sans-serif;
            font-size: 1rem; /* 1rem */
            font-weight: 400;
            line-height: 1.6;
            color: #4B5563;
            text-align: left;
            margin-bottom: 1.5rem;
        }

        .feature-list {
            list-style: none;
            margin-bottom: 2rem;
        }

        .feature-list li {
            position: relative;
            padding-left: 1.5rem;
            margin-bottom: 0.875rem;
            font-size: 1.125rem;
            color: #000000;
            font-weight: 500;
        }

        .feature-list li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.5rem;
            width: 0.5rem;
            height: 0.5rem;
            background-color: var(--primary-color);
            border-radius: 50%;
        }

        /* Stats Bottom */
        .stats-container {
            display: flex;
            border-top: 0.0625rem solid #E5E7EB;
            padding-top: 0.75rem;
            width: 100%;
            max-width: 35.625rem; /* 35.625rem matching Figma */
        }

        .stat-item {
            flex: 1;
            text-align: center;
        }

        .stat-item:first-child {
            border-right: 0.0625rem solid #E5E7EB;
        }

        .stat-number {
            font-family: 'Barlow', sans-serif;
            font-size: 2.25rem; /* 2.25rem (reduced from 2.625rem) */
            font-weight: 700;
            line-height: 1.2;
            color: #142441;
            margin-bottom: 0.25rem;
        }

        .stat-label {
            font-family: 'Inter', sans-serif;
            font-size: 1rem; /* 1rem */
            font-weight: 500;
            color: #9CA3AF;
        }

        /* Science Precision Section */
        .science-precision-container {
            padding-top: 1rem;
            padding-bottom: 3rem;
        }

        .science-precision-section {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            max-width: 100%;
            width: 100%;
            margin: 0 auto;
            gap: 3rem;
        }

        .science-left {
            flex: 0 0 48%;
            display: flex;
            justify-content: flex-start;
        }

        .science-image-container {
            position: relative;
            width: 100%;
            max-width: 100%;
            margin-bottom: 0;
            padding-bottom: 5%;
            margin-left: 0;
        }

        .science-img-back {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 16px;
        }

        .science-img-front {
            position: absolute;
            width: 50%;
            height: auto;
            bottom: -1rem;
            right: 4%;
            border-radius: 12px;
        }

        .science-right {
            flex: 1;
            min-width: 0;
            display: flex;
            align-items: flex-start;
        }

        .science-right-content {
            width: 100%;
            padding-left: 1rem;
            display: flex;
            flex-direction: column;
        }

        .science-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 1.875rem; /* 1.875rem */
            font-weight: 700;
            line-height: 1.3;
            letter-spacing: -0.015em;
            color: #12263A;
            margin-top: 0.4rem;
            margin-bottom: 1rem;
            max-width: 32rem;
        }

        .science-description {
            font-family: 'Inter', sans-serif;
            font-size: 1rem; /* 1rem */
            font-weight: 400;
            line-height: 1.6; /* 1.625rem */
            letter-spacing: -0.01em;
            word-spacing: -0.05em;
            text-align: left;
            color: #000000;
            margin-bottom: 1rem;
        }

        .explore-link {
            display: inline-flex;
            align-items: center;
            font-family: 'Inter', sans-serif;
            font-size: 1.125rem;
            font-weight: 700;
            color: #0B2545;
            text-decoration: none;
            margin-top: 0.5rem;
            margin-bottom: 0;
            transition: color 0.2s ease;
        }

        .explore-link:hover {
            color: #20B2AA;
        }

        /* Services Section (#F3F8FA) */
        .services-section {
            background-color: #F3F8FA;
            padding: 1rem 99px 1rem 99px;
            width: 100%;
            box-sizing: border-box;
            margin-top: 0;
        }

        .services-section .container {
            max-width: 1320px;
            margin: 0 auto;
            padding: 0;
            width: 100%;
        }

        .services-header {
            margin-bottom: 2.5rem;
        }

        .services-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 2.125rem;
            font-weight: 700;
            line-height: 2.875rem;
            color: #000000;
            margin-bottom: 0.75rem;
            letter-spacing: 0px;
        }

        .services-description {
            font-family: 'Inter', sans-serif;
            font-size: 1.125rem;
            font-weight: 400;
            line-height: 1.625rem;
            color: #000000;
            max-width: 100%;
            letter-spacing: 0px;
        }

        /* Services Grid Layout */
        .services-grid {
            display: flex;
            gap: 1.5rem;
            width: 100%;
            height: 34.56rem;
        }

        .service-card-left {
            flex: 0 0 calc(52% - 0.75rem);
            position: relative;
            border-radius: 18px;
            overflow: hidden;
            height: 100%;
            background-color: #0B2545;
        }

        .service-column-right {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            height: 100%;
            min-width: 0;
        }

        .service-card-small {
            flex: 1;
            position: relative;
            border-radius: 18px;
            overflow: hidden;
            background-color: #0B2545;
        }

        /* Card Overlay & Background Image */
        .service-card-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
            transition: transform 0.4s ease;
        }

        .service-card-left:hover .service-card-bg,
        .service-card-small:hover .service-card-bg {
            transform: scale(1.05);
        }

        .service-card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgba(11, 37, 69, 0.25) 0%, rgba(11, 37, 69, 0.75) 60%, rgba(11, 37, 69, 0.92) 100%);
            z-index: 2;
        }

        .service-card-content {
            position: relative;
            z-index: 3;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 2.25rem;
            color: #ffffff;
        }

        .service-card-left .service-card-content {
            padding: 2.75rem 2.5rem;
        }

        .service-card-small .service-card-content {
            padding: 1.5rem 2rem;
        }

        .card-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 0.75rem;
        }

        .service-card-left .card-title {
            font-size: 1.875rem; /* 1.875rem */
            line-height: 2.5rem; /* 2.5rem */
            letter-spacing: 0;
        }

        .service-card-small .card-title {
            font-size: 1.5rem; /* 1.5rem */
            line-height: 2.55rem; /* 2.55rem */
            letter-spacing: 0;
        }

        .card-text {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            color: #E2E8F0;
            margin-bottom: 1.5rem;
            line-height: 1.5;
        }

        .service-card-left .card-text {
            font-size: 1rem; /* 1rem */
            line-height: 1.5rem; /* 1.5rem */
            color: #ffffff;
            text-align: justify;
            letter-spacing: 0;
            max-width: 90%;
        }

        .service-card-small .card-text {
            font-size: 1rem; /* 1rem */
            line-height: 1.5rem; /* 1.5rem */
            color: #ffffff;
            text-align: justify;
            letter-spacing: 0;
            max-width: 95%;
            margin-bottom: 1.25rem;
        }

        .explore-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            background-color: #23B3B0;
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            font-size: 1rem; /* 1rem */
            font-weight: 700;
            line-height: 1.68312rem;
            width: 11.375rem;
            height: 3rem;
            border-radius: 1.875rem;
            text-decoration: none;
            transition: all 0.25s ease;
            box-shadow: 0 0.25rem 0.75rem rgba(35, 179, 176, 0.25);
        }

        .explore-btn:hover {
            background-color: #1A9C99;
            transform: translateY(-0.125rem);
            box-shadow: 0 0.375rem 1rem rgba(35, 179, 176, 0.35);
        }

        .explore-btn svg {
            width: 1.125rem;
            height: 1.125rem;
            fill: none;
            stroke: currentColor;
            stroke-width: 2.2;
            stroke-linecap: round;
            stroke-linejoin: round;
            transition: transform 0.2s ease;
        }

        .explore-btn:hover svg {
            transform: translateX(0.1875rem);
        }

        .science-moves-section .container {
            max-width: 82.5rem;
            margin: 0 auto;
            padding: 0;
            width: 100%;
        }

        /* Science Moves Section */
        .science-moves-section {
            background-color: #ffffff;
            padding: 1rem 99px 1rem 99px;
            width: 100%;
            box-sizing: border-box;
        }

        .science-moves-section .container {
            max-width: 1320px;
            margin: 0 auto;
            padding: 0;
            width: 100%;
        }

        .science-moves-card {
            display: flex;
            background-color: #0B2545;
            border-radius: 0.75rem;
            overflow: hidden;
            width: 100%;
        }

        .sm-left {
            flex: 0 0 50%;
        }

        .sm-left img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .sm-right {
            flex: 0 0 50%;
            padding: 4rem 5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .sm-category {
            color: #00A3A8;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            font-size: 0.875rem;
            letter-spacing: 0.0625rem;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .sm-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 2.125rem;
            font-weight: 700;
            color: #ffffff;
            line-height: 1.3;
            margin-bottom: 1.5rem;
        }

        .sm-description {
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            line-height: 1.6;
            color: #E2E8F0;
        }

        /* Visit Section */
        .visit-section {
            background-color: #F3F8FA;
            padding: 1.5rem 99px 1.5rem 99px;
            width: 100%;
            box-sizing: border-box;
        }

        .visit-section .container {
            max-width: 82.5rem;
            margin: 0 auto;
            padding: 0;
            width: 100%;
        }

        .visit-wrapper {
            display: flex;
            justify-content: space-between;
            gap: 4rem;
            width: 100%;
        }

        .visit-left {
            flex: 0 0 45%;
        }

        .visit-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 2.125rem;
            font-weight: 700;
            color: #0B2545;
            margin-bottom: 1rem;
        }

        .visit-subtitle {
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            color: #4B5563;
            line-height: 1.6;
            margin-bottom: 2rem;
            max-width: 90%;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 1.5rem;
            padding: 1rem 0;
        }

        .contact-icon-box {
            width: 3rem;
            height: 3rem;
            background-color: #E6F3F5;
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .contact-icon-box img {
            width: 1.5rem;
            height: 1.5rem;
        }

        .contact-info h4 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.875rem;
            font-weight: 700;
            color: #1E3A5F;
            margin-bottom: 0.25rem;
            text-transform: uppercase;
            letter-spacing: 0.03125rem;
        }

        .contact-info p {
            font-family: 'Inter', sans-serif;
            font-size: 0.9375rem;
            color: #4B5563;
            margin: 0;
        }

        .visit-right {
            flex: 1;
        }

        .map-placeholder {
            background-color: #EDF2F7;
            border-radius: 1rem;
            width: 100%;
            height: 100%;
            min-height: 21.875rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 2rem;
        }

        .map-icon-circle {
            width: 4rem;
            height: 4rem;
            background-color: #0B2545;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            box-shadow: 0 0.625rem 0.9375rem -0.1875rem rgba(11, 37, 69, 0.2);
        }

        .map-icon-circle img {
            width: 1.5rem;
            height: 1.5rem;
            filter: brightness(0) invert(1);
        }

        .map-placeholder p {
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            color: #4B5563;
            line-height: 1.6;
            max-width: 15.625rem;
        }

        /* Insights Section */
        .insights-section {
            background-color: #ffffff;
            padding: 1rem 99px 1rem 99px;
            width: 100%;
            box-sizing: border-box;
        }
        
        .insights-section .container {
            max-width: 82.5rem;
            margin: 0 auto;
            padding: 0;
            width: 100%;
        }

        .insights-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 2.125rem;
            font-weight: 700;
            color: #000000;
            line-height: 2.125rem;
            margin-bottom: 3rem;
            text-align: left;
        }

        .insights-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            width: 100%;
        }

        .insight-card {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .insight-img {
            width: 100%;
            aspect-ratio: 4 / 3;
            object-fit: cover;
            border-radius: 1rem;
            margin-bottom: 1.5rem;
        }

        .insight-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.75rem;
        }

        .insight-category {
            font-family: 'Inter', sans-serif;
            font-size: 0.75rem;
            font-weight: 600;
            color: #0B2545;
            text-transform: uppercase;
            letter-spacing: 0.03125rem;
        }

        .insight-date {
            font-family: 'Inter', sans-serif;
            font-size: 0.75rem;
            color: #4B5563;
        }

        .insight-heading {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 1.5rem;
            font-weight: 500;
            color: #000000;
            line-height: 2.125rem;
        }

        /* Responsive Layouts */
        @media (max-width: 900px) {
            .container {
                padding-left: 32px;
                padding-right: 32px;
            }

            .services-section,
            .process-section,
            .science-moves-section,
            .visit-section,
            .insights-section {
                padding-left: 32px;
                padding-right: 32px;
            }

            .services-grid {
                flex-direction: column;
                height: auto;
            }

            .service-card-left {
                height: 22rem;
                flex: none;
            }

            .service-card-small {
                height: 22rem;
                flex: none;
            }

            .content-split {
                flex-direction: column;
                gap: 2rem;
            }

            .content-left, .content-right {
                flex: 1 1 100%;
                width: 100%;
            }

            .science-precision-container {
                padding-top: 2rem;
                padding-bottom: 2rem;
            }

            .science-precision-section {
                flex-direction: column;
                gap: 0;
            }


            .science-left, .science-right {
                flex: 1 1 100%;
                width: 100%;
            }

            .science-left {
                overflow: hidden;
                border-radius: 1rem;
            }

            .science-image-container {
                overflow: hidden;
                border-radius: 1rem;
                margin: 0 auto;
                max-width: 22.75rem;
                padding-bottom: 0 !important;
                position: relative;
            }

            .science-img-back {
                width: 100%;
                height: 18.75rem;
                object-fit: cover;
                display: block;
                border-radius: 1rem !important;
            }

            .science-img-front {
                display: none;
            }

            .science-right-content {
                padding-left: 0;
            }

            .science-moves-card {
                flex-direction: column;
            }

            .sm-left, .sm-right {
                flex: 1 1 100%;
                width: 100%;
                box-sizing: border-box;
            }

            .sm-left {
                padding: 1.25rem 1.25rem 0 1.25rem;
            }

            .sm-left img {
                border-radius: 1rem;
                height: auto;
            }

            .sm-right {
                padding: 1.25rem;
            }

            .visit-wrapper {
                flex-direction: column;
                gap: 2rem;
            }

            .visit-left {
                flex: 1 1 100%;
            }

            .insights-grid {
                grid-template-columns: 1fr;
            }

            .process-grid {
                flex-direction: column;
                gap: 2rem;
            }
        }

        @media (max-width: 600px) {
            .container {
                padding: 2rem 20px;
            }

            .services-section,
            .process-section,
            .science-moves-section,
            .visit-section,
            .insights-section {
                padding-left: 20px;
                padding-right: 20px;
                padding-top: 2.5rem;
                padding-bottom: 2.5rem;
            }

            .actions-grid {
                flex-direction: column;
                gap: 1rem;
            }

            .action-btn {
                width: 100%;
                max-width: 100%;
                flex: none;
            }

            .view-page-link {
                text-align: center;
                margin-top: 1rem;
            }
            
            .tabs-nav {
                flex-direction: row;
                overflow-x: auto;
                white-space: nowrap;
                justify-content: flex-start;
                padding-bottom: 0.5rem;
                gap: 1.5rem;
                -webkit-overflow-scrolling: touch;
                scrollbar-width: none;
            }

            .tabs-nav::-webkit-scrollbar {
                display: none;
            }

            .services-title {
                font-family: 'Plus Jakarta Sans', sans-serif;
                font-weight: 700;
                font-size: 24px;
                line-height: 30px;
                letter-spacing: 0px;
                color: #000000;
                text-align: center;
            }

            .process-title {
                font-family: 'Plus Jakarta Sans', sans-serif;
                font-weight: 700;
                font-size: 24px;
                line-height: 34px;
                letter-spacing: 0px;
                color: #000000;
                text-align: center;
            }

            .process-step-title {
                font-family: 'Libre Franklin', sans-serif;
                font-weight: 600;
                font-size: 18px;
                line-height: 23.4px;
                letter-spacing: 0px;
                margin-bottom: 1rem;
            }

            .step-num {
                font-family: 'Libre Franklin', sans-serif;
                font-weight: 600;
                font-size: 18px;
                line-height: 23.4px;
                letter-spacing: 0px;
            }

            .process-description {
                font-family: 'Inter', sans-serif;
                font-weight: 400;
                font-size: 16px;
                line-height: 26px;
                letter-spacing: 0px;
                text-align: center;
                color: #000000;
            }

            .sm-category {
                font-family: 'Plus Jakarta Sans', sans-serif;
                font-weight: 700;
                font-size: 14px;
                line-height: 28.9px;
                letter-spacing: 1.53px;
                text-transform: uppercase;
                color: #20B8C5;
            }

            .sm-title {
                font-family: 'Plus Jakarta Sans', sans-serif;
                font-weight: 700;
                font-size: 24px;
                line-height: 34px;
                letter-spacing: 0px;
                color: #FFFFFF;
                text-align: left;
                margin-top: 1rem;
                margin-bottom: 1rem;
            }

            .sm-description {
                font-family: 'Inter', sans-serif;
                font-weight: 400;
                font-size: 16px;
                line-height: 28px;
                letter-spacing: 0px;
                text-align: justify;
                color: #FFFFFF;
            }

            .visit-title {
                font-family: 'Plus Jakarta Sans', sans-serif;
                font-weight: 700;
                font-size: 24px;
                line-height: 40.8px;
                letter-spacing: 0px;
                color: #12263A;
                text-align: left;
                margin-bottom: 0.5rem;
            }

            .visit-subtitle {
                font-family: 'Inter', sans-serif;
                font-weight: 400;
                font-size: 16px;
                line-height: 24px;
                letter-spacing: 0px;
                color: #000000;
                text-align: left;
                margin-bottom: 2rem;
            }

            .contact-info h4 {
                font-family: 'Plus Jakarta Sans', sans-serif;
                font-weight: 700;
                font-size: 16px;
                line-height: 22.1px;
                letter-spacing: 0.65px;
                text-transform: uppercase;
                color: #0B2545;
                margin-top: 0;
                margin-bottom: 0.25rem;
            }

            .contact-info p {
                font-family: 'Inter', sans-serif;
                font-weight: 400;
                font-size: 16px;
                line-height: 26.35px;
                letter-spacing: 0px;
                color: #000000;
                margin: 0;
            }

            .insights-title {
                font-family: 'Plus Jakarta Sans', sans-serif;
                font-weight: 700;
                font-size: 24px;
                line-height: 34px;
                letter-spacing: 0px;
                color: #000000;
                text-align: center;
                margin-bottom: 2rem;
            }

            .insight-heading {
                font-family: 'Plus Jakarta Sans', sans-serif;
                font-weight: 500;
                font-size: 22px;
                line-height: 30px;
                letter-spacing: 0px;
                color: #000000;
                margin: 0;
            }

            .insights-grid {
                display: flex;
                flex-direction: row;
                overflow-x: auto;
                scroll-snap-type: x mandatory;
                scrollbar-width: none; /* Firefox */
                gap: 1.5rem;
                padding-bottom: 1rem; /* Space for scrollbar/shadows */
                -webkit-overflow-scrolling: touch;
            }

            .insights-grid::-webkit-scrollbar {
                display: none; /* Chrome/Safari */
            }

            .insight-card {
                flex: 0 0 100%; /* Show exactly one card without peeking */
                scroll-snap-align: start; /* Align to start of container */
            }

            .section-title {
                font-family: 'Plus Jakarta Sans', sans-serif;
                font-weight: 700;
                font-size: 24px;
                line-height: 30px;
                letter-spacing: 0px;
                color: #000000;
            }

            .science-title {
                font-family: 'Plus Jakarta Sans', sans-serif;
                font-size: 24px;
                font-weight: 700;
                line-height: 30px;
                color: #12263A;
                text-align: left;
                margin-top: 0;
                margin-bottom: 1rem;
            }

            .science-description {
                font-family: 'Inter', sans-serif;
                font-size: 16px;
                font-weight: 400;
                line-height: 30px;
                text-align: justify;
                color: #000000;
                margin-bottom: 1rem;
            }

            .explore-link {
                font-family: 'Inter', sans-serif;
                font-size: 18px;
                font-weight: 700;
                line-height: 26.35px;
                color: #0B2545;
            }

            .section-description {
                font-family: 'Inter', sans-serif;
                font-weight: 400;
                font-size: 16px;
                line-height: 30px;
                letter-spacing: 0px;
                text-align: justify;
                color: #000000;
            }

            .feature-list li {
                font-family: 'Inter', sans-serif;
                font-weight: 400;
                font-size: 16px;
                line-height: 30px;
                letter-spacing: 0px;
                text-align: justify;
                color: #000000;
            }

            .services-description {
                font-family: 'Inter', sans-serif;
                font-weight: 400;
                font-size: 16px;
                line-height: 24px;
                letter-spacing: 0px;
                text-align: justify;
                color: #000000;
            }

            .service-card-content {
                padding: 1.25rem 1rem;
            }

            .service-card-left .service-card-content {
                padding: 1.25rem 1rem;
            }

            .card-title {
                font-family: 'Plus Jakarta Sans', sans-serif;
                font-weight: 700;
                font-size: 16px;
                line-height: 22.65px;
                letter-spacing: 0px;
                color: #FFFFFF;
                white-space: nowrap;
            }

            .card-text {
                font-family: 'Inter', sans-serif;
                font-weight: 400;
                font-size: 12px;
                line-height: 13.59px;
                letter-spacing: 0px;
                text-align: justify;
                color: #FFFFFF;
                max-width: 100%;
            }

            .explore-btn {
                font-family: 'Inter', sans-serif;
                font-weight: 700;
                font-size: 8px;
                line-height: 15.99px;
                letter-spacing: 0px;
                color: #FFFFFF;
                border-radius: 18px;
                width: 108px;
                height: 28.5px;
                padding: 0;
                background-color: #23B3B0;
                gap: 0.3rem;
            }
        }
    </style>
</head>
<body>
<div class="main-wrapper">
    @include('components.header')
    @include('components.hero-section.index')

    <!-- Main Container for Tabs, Actions and About -->
    <div class="container">


        <!-- Main Content -->
        <div class="content-split">
            <!-- Left Image Section -->
            <div class="content-left">
                <div class="image-wrapper">
                    <img src="{{ asset('images/advance-senior.png') }}" alt="Laboratory Scientist">
                </div>
            </div>

            <!-- Right Text Section -->
            <div class="content-right">
                <div class="section-subtitle">ABOUT OUR LABORATORY</div>
                <h2 class="section-title">Advanced Science. Clinical Purpose.</h2>
                <p class="section-description">
                    Sterling Genomic, Molecular & Clinical Diagnostics operates as a dedicated diagnostic laboratory, built around a simple premise: diagnostic testing should be rigorous, clearly communicated, and genuinely useful to the people who depend on it.
                </p>

                <ul class="feature-list">
                    <li>Genomic, molecular, and clinical diagnostics.</li>
                    <li>Consistent care from testing to reporting.</li>
                    <li>Supports informed clinical decisions.</li>
                    <li>A precise and dependable laboratory partner.</li>
                </ul>

                <div class="stats-container">
                    <div class="stat-item">
                        <div class="stat-number"><span class="counter" data-target="320">0</span>+</div>
                        <div class="stat-label">Wining Awards</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><span class="counter" data-target="10">0</span>k+</div>
                        <div class="stat-label">Test Completed</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Diagnostic Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="services-header">
                <h2 class="services-title">Our Diagnostic Services</h2>
                <p class="services-description">
                    Sterling's laboratory work is organized around three core diagnostic disciplines, each supporting a different layer of clinical understanding — from inherited genetic information to real-time molecular and clinical findings.
                </p>
            </div>
            <div class="services-grid">
                <!-- Genomic Diagnostics (Left Large Card) -->
                <div class="service-card-left">
                    <img src="{{ asset('images/our-dioginostic-first.jpg') }}" alt="Chemistry" class="service-card-bg">
                    <div class="service-card-overlay"></div>
                    <div class="service-card-content">
                        <h3 class="card-title">Chemistry</h3>
                        <p class="card-text">
                            Comprehensive testing of blood and bodily fluids to evaluate metabolic function and detect imbalances, providing essential baseline data for patient care.
                        </p>
                        <a href="{{ url('/service/chemistry-testing') }}" class="explore-btn">
                            Explore Service
                            <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Right Column (Molecular & Clinical Diagnostics) -->
                <div class="service-column-right">
                    <!-- Molecular Diagnostics (Top Right Card) -->
                    <div class="service-card-small">
                        <img src="{{ asset('images/our-dioginostic-second.jpg') }}" alt="Immunoassay" class="service-card-bg">
                        <div class="service-card-overlay"></div>
                        <div class="service-card-content">
                            <h3 class="card-title">Immunoassay</h3>
                            <p class="card-text">
                                Advanced testing using precise antibody reactions to accurately measure hormones, disease markers, and immune system health.
                            </p>
                            <a href="{{ url('/service/immunoassay-testing') }}" class="explore-btn">
                                Explore Service
                                <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Clinical Diagnostics (Bottom Right Card) -->
                    <div class="service-card-small">
                        <img src="{{ asset('images/our-dioginostic-third.jpg') }}" alt="Hematology" class="service-card-bg">
                        <div class="service-card-overlay"></div>
                        <div class="service-card-content">
                            <h3 class="card-title">Hematology</h3>
                            <p class="card-text">
                                Detailed analysis of blood and its components to detect and monitor conditions like anemia, infection, and leukemia.
                            </p>
                            <a href="{{ url('/service/hematology') }}" class="explore-btn">
                                Explore Service
                                <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Science Precision Section -->
    <div class="container science-precision-container">
        <div class="science-precision-section">
            <div class="science-left">
                <div class="science-image-container" style="isolation:isolate;">
                    <img src="{{ asset('images/science-meet-two.png') }}" class="science-img-back" style="border-radius:1rem;" alt="Laboratory Diagnostic Process">
                    <img src="{{ asset('images/science-meet-one.png') }}" class="science-img-front" alt="Microscope Analysis">
                </div>
            </div>
            <div class="science-right">
                <div class="science-right-content">
                    <h2 class="science-title">Where Diagnostic Science Meets Clinical Precision</h2>
                    <p class="science-description">
                        Sterling is a physical diagnostic laboratory, staffed by scientists and technicians who carry out testing in a controlled clinical environment. Every stage of the process, starting from sample handling through to final analysis, follows established laboratory protocol.
                    </p>
                    <p class="science-description">
                        Our laboratory environment is designed around accuracy and consistency, so that referring providers and patients alike can rely on the diagnostic information Sterling produces.
                    </p>
                    <a href="{{ route('about') }}" class="explore-link">Explore Our Laboratory &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Process Section -->
    @include('components.process-explained')

    <!-- Science Moves Section -->
    <section class="science-moves-section">
        <div class="container">
            <div class="science-moves-card">
                <div class="sm-left">
                    <img src="{{ asset('images/science-moves.jpg') }}" alt="Science Moves Diagnostics Forward">
                </div>
                <div class="sm-right">
                    <p class="sm-category"><span>&mdash;</span> SCIENCE & TECHNOLOGY</p>
                    <h2 class="sm-title">Science That Moves<br>Diagnostics Forward</h2>
                    <p class="sm-description">
                        Sterling's laboratory work is grounded in the ongoing evolution of genomic, molecular and clinical diagnostics &mdash; disciplines that continue to sharpen how health questions can be answered.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Visit Section -->
    <section class="visit-section">
        <div class="container">
            <div class="visit-wrapper">
                <div class="visit-left">
                    <h2 class="visit-title">Visit Sterling</h2>
                    <p class="visit-subtitle">
                        Connect with our laboratory team or find the information you need before your visit.
                    </p>
                    <div class="contact-list">
                        <!-- Address -->
                        <div class="contact-item">
                            <div class="contact-icon-box">
                                <img src="{{ asset('images/adress.svg') }}" alt="Address">
                            </div>
                            <div class="contact-info">
                                <h4>ADDRESS</h4>
                                <p>{!! nl2br(e($contact->address)) !!}</p>
                            </div>
                        </div>
                        <!-- Phone -->
                        <div class="contact-item">
                            <div class="contact-icon-box">
                                <img src="{{ asset('images/phone.svg') }}" alt="Phone">
                            </div>
                            <div class="contact-info">
                                <h4>PHONE</h4>
                                <p>{{ $contact->phone }}</p>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="contact-item">
                            <div class="contact-icon-box">
                                <img src="{{ asset('images/email.svg') }}" alt="Email">
                            </div>
                            <div class="contact-info">
                                <h4>EMAIL</h4>
                                <p>{{ $contact->email }}</p>
                            </div>
                        </div>
                        <!-- Hours -->
                        <div class="contact-item">
                            <div class="contact-icon-box">
                                <img src="{{ asset('images/labortory-hours.svg') }}" alt="Laboratory Hours">
                            </div>
                            <div class="contact-info">
                                <h4>LABORATORY HOURS</h4>
                                <p>Contact us for laboratory hours</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="visit-right">
                    @if($contact->address)
                        <iframe title="Sterling laboratory location" src="https://www.google.com/maps?q={{ urlencode($contact->address) }}&output=embed" width="100%" height="100%" style="border:0;border-radius:16px" loading="lazy"></iframe>
                    @else
                        <div class="map-placeholder"><div class="map-icon-circle"><img src="{{ asset('images/location.svg') }}" alt="Location"></div><p>Map location will appear here once laboratory address is confirmed</p></div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Insights Section -->
    <section class="insights-section">
        <div class="container">
            <h2 class="insights-title">Latest Research and Laboratory Insights</h2>
            <div class="insights-grid">
                @forelse($blogPosts as $post)
                <a class="insight-card" href="{{ route('blog.show', $post->slug) }}" style="text-decoration:none;">
                    <img src="{{ $post->image_url ?: asset('images/related_lab_on_chip.jpg') }}" alt="{{ $post->image_alt_text ?: $post->title }}" class="insight-img">
                    <div class="insight-meta">
                        <span class="insight-category">{{ $post->category ?: 'LABORATORY' }}</span>
                        <span class="insight-date">&mdash; {{ optional($post->publish_date)->format('M d, Y') }}</span>
                    </div>
                    <h3 class="insight-heading">{{ $post->title }}</h3>
                </a>
                @empty
                <!-- Sample cards are shown until home-featured posts are available. -->
                <div class="insight-card">
                    <img src="{{ asset('images/related_lab_on_chip.jpg') }}" alt="Lab-on-a-chip diagnostic technology" class="insight-img">
                    <div class="insight-meta">
                        <span class="insight-category">BIOMEDICAL</span>
                        <span class="insight-date">&mdash; MARCH 18, 2026</span>
                    </div>
                    <h3 class="insight-heading">Lab-on-a-Chip Devices for Rapid Diagnostics</h3>
                </div>
                <!-- Card 2 -->
                <div class="insight-card">
                    <img src="{{ asset('images/related_sample_handling.jpg') }}" alt="Careful sample handling in a diagnostic laboratory" class="insight-img">
                    <div class="insight-meta">
                        <span class="insight-category">LABORATORY</span>
                        <span class="insight-date">&mdash; MARCH 18, 2026</span>
                    </div>
                    <h3 class="insight-heading">Standardizing Sample Handling in Clinical Labs</h3>
                </div>
                <!-- Card 3 -->
                <div class="insight-card">
                    <img src="{{ asset('images/rapid-diagonics.jpg') }}" alt="Modern diagnostic laboratory testing" class="insight-img">
                    <div class="insight-meta">
                        <span class="insight-category">BIOLOGY</span>
                        <span class="insight-date">&mdash; MARCH 18, 2026</span>
                    </div>
                    <h3 class="insight-heading">AI-Powered Drug Discovery in Modern Research</h3>
                </div>
                @endforelse
            </div>
        </div>
    </section>

   
    @include('components.diagnostics-cta.cta')
</div>
<div class="main-wrapper">
    @include('components.footer')
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.tab-item');
        const grids = document.querySelectorAll('.actions-grid');

        tabs.forEach(tab => {
            tab.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all tabs
                tabs.forEach(t => t.classList.remove('active'));
                
                // Hide all button grids
                grids.forEach(grid => grid.style.display = 'none');
                
                // Add active class to clicked tab
                this.classList.add('active');
                
                // Scroll into view on mobile
                if (window.innerWidth <= 600) {
                    this.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
                }
                
                // Show the corresponding button grid
                const targetId = this.getAttribute('data-target');
                const targetGrid = document.getElementById(targetId);
                if (targetGrid) {
                    targetGrid.style.display = 'flex';
                }
            });
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const counters = document.querySelectorAll('.counter');
        const duration = 1000; // Animation duration in milliseconds (faster)

        const animateCounters = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = +counter.getAttribute('data-target');
                    const startTime = performance.now();
                    counter.innerText = '0'; // Ensure it starts from 0

                    const updateCount = (currentTime) => {
                        const elapsedTime = currentTime - startTime;
                        const progress = Math.min(elapsedTime / duration, 1);
                        
                        // Linear progress for consistent fast counting like 0, 1, 2...
                        const currentCount = Math.floor(target * progress);
                        
                        counter.innerText = currentCount;

                        if (progress < 1) {
                            requestAnimationFrame(updateCount);
                        } else {
                            counter.innerText = target;
                        }
                    };
                    
                    requestAnimationFrame(updateCount);
                    observer.unobserve(counter); // Only animate once
                }
            });
        };

        const observer = new IntersectionObserver(animateCounters, {
            threshold: 0.1
        });

        counters.forEach(counter => {
            observer.observe(counter);
        });
    });
</script>
</body>
</html>
