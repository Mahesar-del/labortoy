<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us | Sterling</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            overflow-x: clip;
            box-sizing: border-box;
        }
        *, *:before, *:after {
            box-sizing: border-box;
        }
        .about-hero {
            min-height: 460px;
            display: flex;
            align-items: center;
            position: relative;
            color: #fff;
            background: #061b33 url('{{ asset('images/about-us-hero-img.jpg') }}') center/cover no-repeat;
            padding: 0 99px;
            width: 100%;
            box-sizing: border-box;
        }
        .about-hero:before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(4,23,45,.95), rgba(4,23,45,.72), rgba(4,23,45,.12));
        }
        .about-hero__inner {
            position: relative;
            z-index: 1;
            max-width: 1320px;
            width: 100%;
            margin: 0 auto;
        }
        .about-hero h1 {
            font-size: clamp(38px, 4vw, 58px);
            margin: 0 0 22px;
        }
        .about-hero p {
            max-width: 680px;
            color: #D9E5EE;
            line-height: 1.75;
            font-size: 18px;
        }
        .about-section {
            padding: 40px 99px 10px 99px;
            background: #fff;
            width: 100%;
            box-sizing: border-box;
        }
        .about-layout {
            max-width: 1320px;
            width: 100%;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 760px) minmax(0, 415px);
            justify-content: space-between;
            gap: 22px 64px;
        }
        .about-copy {
            display: grid;
            grid-template-columns: 1.45fr .68fr;
            gap: 42px;
            align-items: start;
        }
        .eyebrow {
            color: #5e6d7e;
            font-size: 12px;
            font-weight: 600;
            display: block;
            margin-top: -15px;
            margin-bottom: 12px;
        }
        .about-copy h2 {
            font-size: clamp(28px, 3vw, 42px);
            line-height: 1.12;
            margin: 0 0 18px;
            color: #101820;
        }
        .about-copy p {
            font-size: 14px;
            color: #273744;
            line-height: 1.75;
            margin: 0;
        }
        .about-process {
            padding-top: 25px;
        }
        .about-image {
            position: relative;
            background: #e8f0f4 center/cover no-repeat;
            border-radius: 17px;
            overflow: hidden;
        }
        .about-image--horizontal {
            width: 100%;
            height: 317px;
            background-image: url('{{ asset('images/about-down.jpg') }}');
            align-self: start;
        }
        .about-right {
            grid-column: 2;
            grid-row: 1/3;
            width: 100%;
            min-width: 0;
        }
        .about-image--vertical {
            width: 100%;
            max-width: 415px;
            height: 400px;
            background-image: url('{{ asset('images/about-up.jpg') }}');
            background-size: cover;
            background-position: center top;
            border-radius: 30px;
        }
        .about-stats {
            display: flex;
            align-items: center;
            gap: 91px;
            margin-top: 50px;
            width: 100%;
            max-width: 415px;
        }
        .stat-card {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        .stat-card:nth-child(1) {
            width: 192.56px;
            height: 125.1px;
        }
        .stat-card:nth-child(2) {
            width: 216.56px;
            height: 125.1px;
        }
        .stat-circle {
            height: 68px;
            width: 68px;
            border: 2px solid #0b3155;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: #0b3155;
            color: #fff;
            font-weight: 800;
            font-size: 18px;
            box-shadow: 0 0 0 4px #fff, 0 0 0 5px #0b3155;
            flex-shrink: 0;
        }
        .stat-copy {
            font-size: 16px;
            line-height: 1.3;
            font-weight: 700;
            color: #101820;
            font-family: 'Plus Jakarta Sans', sans-serif;
            text-align:center;
        }

        /* Our Mission Section Styles */
        .mission-section, .mission-section * {
            box-sizing: border-box;
        }
        .mission-section {
            padding: 0px 99px 34px 99px;
            background: #fff;
            width: 100%;
            box-sizing: border-box;
        }
        .mission-container {
            max-width: 1320px;
            width: 100%;
            margin: 0 auto;
        }

        /* Top 3 Buttons / Tabs (811px x 78px) */
        .mission-tabs {
            max-width: 811px;
            width: 100%;
            height: 78px;
            margin: 0 auto 24px auto;
            display: flex;
            background: #F2F5FA;
            border-radius: 0;
            overflow: hidden;
            border: none;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        }
        .mission-tab {
            flex: 1;
            height: 78px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 0.08em;
            color: #5E6D7E;
            cursor: pointer;
            background: transparent;
            border: none;
            border-radius: 0;
            position: relative;
            text-transform: uppercase;
            transition: all 0.25s ease;
        }
        .mission-tab:not(:last-child):after {
            content: "";
            position: absolute;
            right: 0;
            top: 25%;
            height: 50%;
            width: 1px;
            background: #D1D5DB;
        }
        .mission-tab.active {
            background: #FFFFFF;
            color: #101820;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
            border: none;
            outline: none;
        }

        /* Content Box (spans full 1320px container width) */
        .mission-content-box {
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            height: 361px;
            display: grid;
            grid-template-columns: 270px minmax(0, 1fr) 270px;
            gap: 0;
            align-items: stretch;
            background: #FFFFFF;
            border: none;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            border-radius: 0;
            overflow: hidden;
        }
        .mission-img-wrapper {
            width: 270px;
            height: 361px;
            flex-shrink: 0;
            overflow: hidden;
        }
        .mission-img {
            width: 270px;
            height: 361px;
            object-fit: cover;
            display: block;
        }
        .mission-text {
            height: 361px;
            padding: 24px 32px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            box-sizing: border-box;
            border: none;
        }
        .mission-panel {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            border: none;
        }
        .mission-heading {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(20px, 2vw, 30px);
            font-weight: 700;
            color: #000000;
            line-height: 1.25;
            margin: 0 0 16px 0;
            max-width: 580px;
            text-align: center;
            border: none;
        }
        .mission-desc {
            font-family: 'Inter', sans-serif;
            font-size: clamp(13px, 1vw, 14px);
            color: #273744;
            line-height: 1.6;
            margin: 0 0 12px 0;
            max-width: 580px;
            text-align: center;
            border: none;
        }
        .mission-desc:last-child {
            margin-bottom: 0;
        }

        /* Responsive Breakpoints */
        @media (max-width: 1150px) {
            .about-hero, .about-section, .mission-section, .why-choose-section {
                padding-left: 20px;
                padding-right: 20px;
            }
            .about-layout {
                grid-template-columns: minmax(0, 1fr) minmax(0, 250px);
                gap: 22px 34px;
            }
            .about-copy {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            .about-image--horizontal {
                height: auto;
                aspect-ratio: 760/317;
            }
            .mission-content-box {
                grid-template-columns: 220px minmax(0, 1fr) 220px;
                gap: 16px;
                height: 361px;
            }
            .mission-img-wrapper, .mission-img {
                width: 220px;
                height: 361px;
            }
            .mission-text {
                height: 361px;
                padding: 16px;
            }
            .why-choose-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 24px;
            }
        }
        @media (max-width: 900px) {
            .mission-content-box {
                grid-template-columns: 1fr;
                min-height: auto;
            }
            .mission-img-wrapper {
                width: 100%;
                height: 240px;
            }
            .mission-img {
                width: 100%;
                height: 240px;
            }
            .mission-img-wrapper--right {
                display: none;
            }
            .mission-tabs {
                height: 60px;
            }
            .mission-tab {
                height: 60px;
                font-size: 12px;
            }
        }
        @media (max-width: 760px) {
            .about-hero {
                height: 480px;
                min-height: 480px;
                padding: 195px 20px 30px 20px;
                display: flex;
                align-items: flex-start;
                box-sizing: border-box;
            }
            .about-hero h1 {
                font-family: 'Plus Jakarta Sans', sans-serif;
                font-weight: 800;
                font-size: 28px;
                line-height: 38px;
                letter-spacing: 0px;
                max-width: 336px;
                width: 100%;
                margin: 0 0 16px 0;
            }
            .about-hero p {
                font-family: 'Inter', sans-serif;
                font-weight: 400;
                font-size: 16px;
                line-height: 30px;
                letter-spacing: 0px;
                text-align: justify;
                max-width: 345px;
                width: 100%;
                margin: 0;
                color: #D9E5EE;
            }
            .about-section {
                padding: 48px 20px 20px 20px;
            }
            .mission-section {
                padding: 0 20px 5px 20px;
            }
            .why-choose-section {
                padding: 48px 20px;
            }
            .about-layout {
                display: flex;
                flex-direction: column;
                max-width: 364px;
                width: 100%;
                margin: 0 auto;
            }
            .about-right {
                display: contents;
            }
            .about-image--vertical {
                order: 1;
                width: 100%;
                max-width: 364px;
                height: 300px;
                aspect-ratio: auto;
                border-radius: 24px;
                margin-bottom: 24px;
                background-size: cover;
                background-position: center;
            }
            .about-copy {
                order: 2;
                display: flex;
                flex-direction: column;
                gap: 16px;
            }
            .about-copy .eyebrow {
                display: none;
            }
            .about-copy h2 {
                font-size: 24px;
                line-height: 1.25;
                margin: 0 0 12px 0;
                color: #101820;
            }
            .about-copy p {
                font-family: 'Inter', sans-serif;
                font-weight: 400;
                font-size: 16px;
                line-height: 30px;
                letter-spacing: 0px;
                text-align: justify;
                color: #000000;
            }
            .about-process {
                padding-top: 0;
            }
            .about-image--horizontal {
                display: none;
            }
            .about-stats {
                order: 3;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                gap: 16px;
                width: 100%;
                max-width: 364px;
                margin: 24px auto 0 auto;
            }
            .stat-card {
                width: 142px;
                height: auto;
                min-height: 100px;
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                box-sizing: border-box;
                gap: 0px;
            }
            .stat-circle {
                margin-bottom: 12px;
            }
            .stat-copy {
                font-size: 13px;
                line-height: 1.25;
                font-weight: 700;
                color: #101820;
                text-align: center;
            }
            .stat-copy br {
                display: none;
            }
            .mission-container {
                max-width: 364px;
                width: 100%;
                margin: 0 auto;
            }
            .mission-tabs {
                max-width: 364px;
                width: 100%;
                height: 60px;
                margin: 0 auto 24px auto;
                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
                overflow-x: auto;
                overflow-y: hidden;
                -webkit-overflow-scrolling: touch;
                scrollbar-width: none;
                background: #F2F5FA;
            }
            .mission-tabs::-webkit-scrollbar {
                display: none;
            }
            .mission-tab {
                flex: 0 0 50%;
                min-width: 50%;
                height: 60px;
                font-size: 13px;
                padding: 0 12px;
                box-sizing: border-box;
            }
            .mission-tab.active {
                border-bottom: 3px solid #0B2545;
            }
            .mission-content-box {
                display: flex;
                flex-direction: column;
                width: 100%;
                max-width: 364px;
                height: auto;
                margin: 0 auto;
                background: transparent;
                box-shadow: none;
                overflow: visible;
            }
            .mission-img-wrapper--left {
                display: block !important;
                order: 1;
                width: 100%;
                max-width: 364px;
                height: 300px;
                margin-bottom: 24px;
                overflow: hidden;
            }
            .mission-img-wrapper--left .mission-img {
                width: 100%;
                height: 300px;
                object-fit: cover;
            }
            .mission-img-wrapper--right {
                display: none !important;
            }
            .mission-text {
                order: 2;
                width: 100%;
                max-width: 364px;
                height: auto;
                padding: 0;
                display: block;
            }
            .mission-panel {
                width: 100%;
                height: auto;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: flex-start;
                text-align: left;
            }
            .mission-heading {
                font-family: 'Plus Jakarta Sans', sans-serif;
                font-weight: 700;
                font-size: 20px;
                line-height: 1.3;
                color: #000000;
                margin: 0 0 16px 0;
                max-width: 364px;
                width: 100%;
                text-align: left;
            }
            .mission-desc {
                font-family: 'Inter', sans-serif;
                font-size: 14px;
                line-height: 1.6;
                color: #273744;
                margin: 0 0 12px 0;
                max-width: 364px;
                width: 100%;
                text-align: justify;
            }
        }

        /* Why Choose Sterling Section */
        .why-choose-section {
            padding: 0 99px 25px 99px;
            background: #fff;
            width: 100%;
            box-sizing: border-box;
        }
        .why-choose-container {
            max-width: 1320px;
            width: 100%;
            margin: 0 auto;
        }
        .why-choose-header {
            text-align: center;
            max-width: 650px;
            margin: 0 auto 35px auto;
            width: 100%;
        }
        .why-choose-header h2 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(24px, 2.5vw, 32px);
            font-weight: 700;
            color: #101820;
            margin: 0 0 16px 0;
        }
        .why-choose-header p {
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            color: #000;
            line-height: 1.6;
            margin: 0;
        }
        .why-choose-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 24px;
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
        }
        .why-card {
            width: 100%;
            min-height: 307px;
            border: 1px solid #ABABAB;
            padding: clamp(24px, 2.5vw, 40px) clamp(11px, 0.8vw, 0px);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            background: #fff;
            box-sizing: border-box;
        }
        .why-card img {
            width: 74.57px;
            height: 59.45px;
            object-fit: contain;
            margin-bottom: 24px;
            max-width: 100%;
        }
        .why-card h3 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 20px;
            font-weight: 600;
            line-height: 30px;
            letter-spacing: 0px;
            color: #101820;
            margin: 0 0 12px 0;
            width: 227px;
            max-width: 100%;
            min-height: 60px;
        }
        .why-card p {
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            color: #2C2C2C;
            line-height: 1.6;
            margin: 0;
            min-height: 90px;
        }

        /* Standards Credentials Section */
        .standards-section {
            padding: 0 99px 45px 99px;
            background: #fff;
            width: 100%;
            box-sizing: border-box;
        }
        .standards-container {
            max-width: 1320px;
            width: 100%;
            margin: 0 auto;
        }
        .standards-header {
            text-align: center;
            max-width: 804px;
            margin: 0 auto 35px auto;
            width: 100%;
        }
        .standards-header h2 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(24px, 2.5vw, 32px);
            font-weight: 700;
            color: #000000;
            margin: 0 0 12px 0;
            line-height: 1.25;
        }
        .standards-header p {
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            color: #000000;
            line-height: 1.6;
            max-width: 650px;
            margin: 0 auto;
        }
        .standards-banner {
            width: 100%;
            max-width: 100%;
            height: 125px;
            margin: 0 auto;
            background-color: #0B2545;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            padding: 0 32px;
            box-sizing: border-box;
        }
        .standards-col {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .standards-label {
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            font-weight: 500;
            color: #CCCCCC;
            margin-bottom: 8px;
            display: block;
        }
        .standards-value {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 18px;
            font-weight: 700;
            color: #FFFFFF;
            display: block;
            font-weight:500;
        }
        .standards-divider {
            width: 1px;
            height: 48px;
            background: rgba(255, 255, 255, 0.2);
            flex-shrink: 0;
        }

        /* Responsive Breakpoints for Standards Section */
        @media (max-width: 1150px) {
            .standards-section {
                padding-left: 20px;
                padding-right: 20px;
            }
        }
        @media (max-width: 900px) {
            .standards-banner {
                height: auto;
                flex-direction: column;
                padding: 24px;
                gap: 20px;
            }
            .standards-divider {
                width: 146px;
                height: 2px;
                background: #D6D6D6;
            }
        }
        @media (max-width: 760px) {
            .standards-section {
                padding-bottom: 48px;
            }
        }

        /* Leadership Section */
        .leadership-section {
            padding: 0 99px 70px 99px;
            background: #fff;
            width: 100%;
            box-sizing: border-box;
        }
        .leadership-container {
            max-width: 1320px;
            width: 100%;
            margin: 0 auto;
        }
        .leadership-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(24px, 2.5vw, 32px);
            font-weight: 700;
            color: #000000;
            margin: 0 0 35px 0;
            max-width: 644px;
            width: 100%;
            line-height: 1.25;
        }
        .leadership-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 24px;
            width: 100%;
            max-width: 100%;
        }
        .leadership-card {
            width: 100%;
            min-height: 342px;
            border: 1px solid #D4D2E3;
            border-radius: 10px;
            background: #FFFFFF;
            display: grid;
            grid-template-columns: 267px 1fr;
            overflow: hidden;
            box-sizing: border-box;
        }
        .leadership-image-box {
            width: 267px;
            height: 342px;
            background: #F4F6FC;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .placeholder-icon {
            width: 64px;
            height: 64px;
            opacity: 0.7;
        }
        .leadership-content {
            padding: 32px 28px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            box-sizing: border-box;
        }
        .leadership-role {
            font-family: 'Inter', sans-serif;
            font-size: 12px;
            font-weight: 700;
            color: #21A09A;
            letter-spacing: 0.05em;
            margin-bottom: 8px;
            display: block;
            line-height: 1.3;
        }
        .leadership-name {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 22px;
            font-weight: 700;
            color: #0B2545;
            margin: 0 0 4px 0;
            line-height: 1.3;
        }
        .leadership-credentials {
            font-family: 'Inter', sans-serif;
            font-size: 12px;
            font-weight: 700;
            color: #000000;
            margin-bottom: 16px;
            display: block;
            letter-spacing: 0.03em;
        }
        .leadership-bio {
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            color: #000000;
            line-height: 1.6;
            margin: 0;
        }

        /* Responsive Breakpoints for Leadership Section */
        @media (max-width: 1150px) {
            .leadership-section {
                padding-left: 20px;
                padding-right: 20px;
                padding-bottom:0px;
            }
            .leadership-grid {
                grid-template-columns: 1fr;
                gap: 24px;
            }
        }
        @media (max-width: 650px) {
            .leadership-card {
                grid-template-columns: 1fr;
                min-height: auto;
            }
            .leadership-image-box {
                width: 100%;
                height: 220px;
            }
        }
        
        .mobile-cta-wrapper {
            display: none;
        }
        @media (max-width: 768px) {
            .mobile-cta-wrapper {
                display: block;
            }
        }
        /* Responsive Breakpoints for Why Choose Sterling Section */
        @media (max-width: 760px) {
            .why-choose-section {
                padding-left: 0 !important;
                padding-right: 0 !important;
                padding-top: 15px !important;
                padding-bottom: 48px !important;
                width: 100% !important;
                box-sizing: border-box !important;
            }
            .why-choose-container {
                max-width: 364px !important;
                width: 100% !important;
                margin: 0 auto !important;
                padding: 0 !important;
                box-sizing: border-box !important;
            }
            .why-choose-header {
                max-width: 364px !important;
                width: 100% !important;
                margin: 0 auto 32px auto !important;
                text-align: center !important;
                display: flex !important;
                flex-direction: column !important;
                align-items: center !important;
            }
            .why-choose-header h2 {
                font-size: 24px !important;
                line-height: 1.25 !important;
                margin: 0 auto 12px auto !important;
                text-align: center !important;
                max-width: 250px !important;
                width: 100% !important;
            }
            .why-choose-header p {
                font-size: 14px !important;
                line-height: 1.6 !important;
                text-align: center !important;
                max-width: 345px !important;
                width: 100% !important;
                margin: 0 auto !important;
            }
            .why-choose-grid {
                grid-template-columns: 1fr !important;
                gap: 20px !important;
                max-width: 364px !important;
                width: 100% !important;
                margin: 0 auto !important;
            }
            .why-card {
                width: 100% !important;
                max-width: 364px !important;
                height: 288px !important;
                min-height: 288px !important;
                padding: 32px 24px !important;
                display: flex !important;
                flex-direction: column !important;
                align-items: center !important;
                justify-content: center !important;
                text-align: center !important;
                box-sizing: border-box !important;
                background: #fff !important;
                margin: 0 auto !important;
            }
            .why-card img {
                width: 48px !important;
                height: 48px !important;
                object-fit: contain !important;
                margin: 0 auto 20px auto !important;
            }
            .why-card h3 {
                font-family: 'Plus Jakarta Sans', sans-serif !important;
                font-size: 20px !important;
                font-weight: 600 !important;
                line-height: 28px !important;
                color: #101820 !important;
                text-align: center !important;
                margin: 0 auto 12px auto !important;
                width: 100% !important;
                max-width: 250px !important;
                min-height: auto !important;
            }
            .why-card p {
                font-family: 'Inter', sans-serif !important;
                font-size: 14px !important;
                color: #2C2C2C !important;
                line-height: 1.6 !important;
                text-align: center !important;
                margin: 0 auto !important;
                width: 100% !important;
                max-width: 260px !important;
                min-height: auto !important;
            }
            /* Standards Section Mobile View (364x414) */
            .standards-section {
                padding-left: 0 !important;
                padding-right: 0 !important;
                padding-top: 7px !important;
                padding-bottom: 48px !important;
                width: 100% !important;
                box-sizing: border-box !important;
            }
            .standards-container {
                max-width: 364px !important;
                width: 100% !important;
                margin: 0 auto !important;
                padding: 0 !important;
                box-sizing: border-box !important;
            }
            .standards-header {
                max-width: 364px !important;
                width: 100% !important;
                margin: 0 auto 32px auto !important;
                text-align: center !important;
            }
            .standards-header h2 {
                font-size: 24px !important;
                line-height: 1.25 !important;
                margin: 0 auto 12px auto !important;
                text-align: center !important;
            }
            .standards-header p {
                font-size: 14px !important;
                line-height: 1.6 !important;
                text-align: center !important;
                max-width: 345px !important;
                margin: 0 auto !important;
            }
            .standards-banner {
                width: 100% !important;
                max-width: 364px !important;
                height: 414px !important;
                min-height: 414px !important;
                margin: 0 auto !important;
                background-color: #0B2545 !important;
                border-radius: 20px !important;
                display: flex !important;
                flex-direction: column !important;
                align-items: center !important;
                justify-content: space-evenly !important;
                padding: 24px 20px !important;
                box-sizing: border-box !important;
            }
            .standards-col {
                flex: initial !important;
                display: flex !important;
                flex-direction: column !important;
                align-items: center !important;
                justify-content: center !important;
                text-align: center !important;
                width: 100% !important;
            }
            .standards-label {
                font-size: 13px !important;
                font-weight: 400 !important;
                color: #A0AEC0 !important;
                margin-bottom: 6px !important;
                text-align: center !important;
            }
            .standards-value {
                font-size: 18px !important;
                font-weight: 700 !important;
                color: #FFFFFF !important;
                text-align: center !important;
            }
            .standards-divider {
                width: 146px !important;
                height: 2px !important;
                background: #D6D6D6 !important;
                margin: 12px 0 !important;
                flex-shrink: 0 !important;
            }
        }
    </style>
</head>
<body>
    @include('components.header')
    @include('components.provider-hero', [
        'title' => 'Advancing Diagnostics Through Science.',
        'description' => 'Sterling is a diagnostic laboratory focused on precision, scientific expertise, and reliable laboratory testing that supports better-informed healthcare decisions.',
        'bgImage' => asset('images/about-us-hero-img.jpg'),
        'bgPosition' => 'center 45%',
        'showButton' => false
    ])

    <!-- Top About Section -->
    <section class="about-section">
        <div class="about-layout">
            <div class="about-copy">
                <div>
                    <span class="eyebrow">• Who We Are</span>
                    <h2>Diagnostics Built Around Precision</h2>
                    <p>Sterling is a diagnostic laboratory where science, technology, and laboratory expertise come together to support better-informed healthcare decisions.</p>
                </div>
                <div class="about-process">
                    <p>From specimen handling to laboratory analysis, our work follows structured processes designed around accuracy, consistency, and quality.</p>
                </div>
            </div>
            <div class="about-image about-image--horizontal"></div>
            <div class="about-right">
                <div class="about-image about-image--vertical"></div>
                <div class="about-stats">
                    <div class="stat-card">
                        <span class="stat-circle">20+</span>
                        <span class="stat-copy">Winning<br>Awards</span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-circle">20k+</span>
                        <span class="stat-copy">Test<br>Completed</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Mission / Value / Process Section -->
    <section class="mission-section">
        <div class="mission-container">
            <!-- Tabs Bar (811px x 78px) -->
            <div class="mission-tabs" role="tablist">
                <button class="mission-tab active" id="tab-mission" role="tab" aria-selected="true" aria-controls="panel-mission" onclick="switchMissionTab('mission')">
                    OUR MISSION
                </button>
                <button class="mission-tab" id="tab-value" role="tab" aria-selected="false" aria-controls="panel-value" onclick="switchMissionTab('value')">
                    OUR VALUE
                </button>
                <button class="mission-tab" id="tab-process" role="tab" aria-selected="false" aria-controls="panel-process" onclick="switchMissionTab('process')">
                    OUR PROCESS
                </button>
            </div>

            <!-- Content Box (1238px x 361px) -->
            <div class="mission-content-box">
                <!-- Left Image (270px x 361px) -->
                <div class="mission-img-wrapper mission-img-wrapper--left">
                    <img src="{{ asset('images/our-mission-left.png') }}" alt="Laboratory Test Specimens" class="mission-img">
                </div>

                <!-- Center Text Box (Justified Center) -->
                <div class="mission-text">
                    <div id="panel-mission" class="mission-panel active" role="tabpanel">
                        <h2 class="mission-heading">Our Mission is Give You Always Best Results.</h2>
                        <p class="mission-desc">At Sterling, we are committed to delivering accurate, reliable, and timely diagnostic results that support better healthcare decisions. Our laboratory combines modern technology, skilled professionals, and carefully controlled testing processes to maintain high standards of quality. From genomic and molecular testing to clinical diagnostics, every test is handled with precision and care, providing dependable information for patients and healthcare providers.</p>
                    </div>
                    <div id="panel-value" class="mission-panel" role="tabpanel" style="display: none;">
                        <h2 class="mission-heading">Our Core Values Drive Excellence.</h2>
                        <p class="mission-desc">We operate with integrity, precision, and patient-first dedication across every laboratory service we offer. Innovation and reliability guide our commitment to quality. Through continuous quality improvement and rigorous standards, we ensure that every result is dependable and actionable for clinical decision-making.</p>
                    </div>
                    <div id="panel-process" class="mission-panel" role="tabpanel" style="display: none;">
                        <h2 class="mission-heading">Structured Quality Controlled Workflows.</h2>
                        <p class="mission-desc">From initial specimen collection to advanced analysis, our state-of-the-art workflow follows stringent quality controls at every single phase. Our multidisciplinary team of pathologists, scientists, and technicians work seamlessly to deliver rapid and accurate diagnostics.</p>
                    </div>
                </div>

                <!-- Right Image (270px x 361px) -->
                <div class="mission-img-wrapper mission-img-wrapper--right">
                    <img src="{{ asset('images/our-mission-right.png') }}" alt="Laboratory Microscope and Equipment" class="mission-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Sterling Section -->
    <section class="why-choose-section">
        <div class="why-choose-container">
            <div class="why-choose-header">
                <h2>Why Choose Sterling</h2>
                <p>Advanced technology, skilled professionals, and dependable diagnostic services all focused on delivering accurate results and quality patient care.</p>
            </div>
            <div class="why-choose-grid">
                <div class="why-card">
                    <img src="{{ asset('images/ws-card1-icon.png') }}" alt="High-End Latest Technology">
                    <h3>High-End Latest Technology</h3>
                    <p>Advanced laboratory technology for accurate and efficient diagnostic testing.</p>
                </div>
                <div class="why-card">
                    <img src="{{ asset('images/ws-card2-icon.png') }}" alt="Medical Laboratory Technician">
                    <h3>Medical Laboratory Technician</h3>
                    <p>Skilled technicians ensure every test is performed with complete care and precision.</p>
                </div>
                <div class="why-card">
                    <img src="{{ asset('images/ws-card3-icon.png') }}" alt="Highest Quality Pathological Testing">
                    <h3>Highest Quality Pathological Testing</h3>
                    <p>Reliable pathology testing maintained to high standards of quality and accuracy.</p>
                </div>
                <div class="why-card">
                    <img src="{{ asset('images/ws-card4-icon.png') }}" alt="Emergency Help Available 24/7">
                    <h3>Emergency Help Available 24/7</h3>
                    <p>Dedicated support is available around the clock whenever you need assistance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Transparent Standards Credentials Section -->
    <section class="standards-section">
        <div class="standards-container">
            <div class="standards-header">
                <h2>Committed to Transparent Laboratory Standards</h2>
                <p>Sterling provides clear and accurate credential information for patients, healthcare providers, and healthcare organizations.</p>
            </div>
            <div class="standards-banner">
                <div class="standards-col">
                    <span class="standards-label">Registration Status</span>
                    <span class="standards-value">Active CLIA Registration</span>
                </div>
                <div class="standards-divider"></div>
                <div class="standards-col">
                    <span class="standards-label">CLIA ID</span>
                    <span class="standards-value">14D2349787</span>
                </div>
                <div class="standards-divider"></div>
                <div class="standards-col">
                    <span class="standards-label">National Provider Identifier</span>
                    <span class="standards-value">1134037385</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Section -->
    <section class="leadership-section">
        <div class="leadership-container">
            <h2 class="leadership-title">Leadership Behind Sterling Diagnostics</h2>
            <div class="leadership-grid">
                <!-- Card 1 -->
                <div class="leadership-card">
                    <div class="leadership-image-box">
                        <svg class="placeholder-icon" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="64" height="64" rx="8" fill="#E2E8F0"/>
                            <path d="M18 44L28 30L36 40L42 32L50 44H18Z" fill="#CBD5E1"/>
                            <circle cx="44" cy="24" r="5" fill="#CBD5E1"/>
                        </svg>
                    </div>
                    <div class="leadership-content">
                        <span class="leadership-role">LABORATORY DIRECTOR</span>
                        <h3 class="leadership-name">Jelena Gradistanac</h3>
                        <span class="leadership-credentials">PHD, HCLD(ABB)</span>
                        <p class="leadership-bio">Provides laboratory leadership and oversight for Sterling's clinical laboratory operations.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="leadership-card">
                    <div class="leadership-image-box">
                        <svg class="placeholder-icon" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="64" height="64" rx="8" fill="#E2E8F0"/>
                            <path d="M18 44L28 30L36 40L42 32L50 44H18Z" fill="#CBD5E1"/>
                            <circle cx="44" cy="24" r="5" fill="#CBD5E1"/>
                        </svg>
                    </div>
                    <div class="leadership-content">
                        <span class="leadership-role">VICE PRESIDENT, SECRETARY, TREASURER</span>
                        <h3 class="leadership-name">Faisal Niaz</h3>
                        <p class="leadership-bio" style="margin-top: 16px;">Supports Sterling's organizational leadership, administration, and business direction.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="mobile-cta-wrapper">
        @include('components.diagnostics-cta.cta')
    </div>

    @include('components.footer')

    <script>
        function switchMissionTab(tabName) {
            const tabs = document.querySelectorAll('.mission-tab');
            const panels = document.querySelectorAll('.mission-panel');
            
            tabs.forEach(t => {
                t.classList.remove('active');
                t.setAttribute('aria-selected', 'false');
            });
            panels.forEach(p => {
                p.style.display = 'none';
                p.classList.remove('active');
            });
            
            const activeTab = document.getElementById('tab-' + tabName);
            const activePanel = document.getElementById('panel-' + tabName);
            
            if (activeTab && activePanel) {
                activeTab.classList.add('active');
                activeTab.setAttribute('aria-selected', 'true');
                activePanel.style.display = 'flex';
                activePanel.classList.add('active');
            }
        }
    </script>
</body>
</html>
