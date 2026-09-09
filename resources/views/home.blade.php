<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Include Compiled CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <style>
        /* Header Styling */
        .site-header {
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
            box-sizing: border-box;
            padding-left: 99px;
            padding-right: 97px; /* 1440 - (1264 + 79) = 97px */
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background-color: #0B2545;
            border-radius: 12.5px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            flex-shrink: 0;
        }

        .logo-text {
            font-size: 34px; /* Approximating the 48px height box */
            line-height: 48px;
            width: 85px;
            height: 48px;
            font-weight: 800;
            color: #0B2545;
            font-family: sans-serif;
            display: flex;
            align-items: center;
        }

        .nav-links {
            position: absolute;
            left: 339px;
            display: flex;
            justify-content: space-between;
            width: 762px;
            height: 20px;
            list-style: none;
            margin: 0;
            padding: 0;
            align-items: center;
            margin-top:4px;
        }

        .nav-links a {
            text-decoration: none;
            color: #000000;
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            font-size: 16px;
            line-height: 20px;
            letter-spacing: 0px;
            vertical-align: middle;
            transition: color 0.2s;
        }

        .nav-links a:hover {
            color: #0d233a;
        }

        .login-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
            color: #0B2545;
            font-weight: 700;
            font-size: 16px;
            font-family: sans-serif;
            width: 79px;
            height: 24px;
        }

        .login-btn svg {
            width: 20px;
            height: 20px;
            fill: currentColor;
            flex-shrink: 0;
        }

        .mobile-menu-btn {
            display: none; /* Hidden by default */
            background: none;
            border: none;
            cursor: pointer;
            color: #0B2545;
            padding: 0;
            align-items: center;
            justify-content: center;
        }

        .mobile-menu-btn svg {
            width: 32px;
            height: 32px;
            display: block;
        }

        @media (max-width: 900px) {
            .site-header {
                width: 100%;
                max-width: 412px;
                padding-left: 28px;
                padding-right: 28px;
            }

            .nav-links, .login-btn {
                display: none;
            }

            .mobile-menu-btn {
                display: flex;
            }
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color: #ffffff;
            color: var(--text-color, #333333);
            overflow-x: hidden;
        }

        .main-container {
            max-width: 1440px;
            margin: 0 auto;
            background-color: #ffffff;
            min-height: 100vh;
        }

    </style>
</head>
<body>

    <!-- 1440px Container -->
    <div class="main-container">
        
        <!-- Header Section -->
        <x-header />

        <x-hero-section.index />

        <x-footer />

    </div>

</body>
</html>
