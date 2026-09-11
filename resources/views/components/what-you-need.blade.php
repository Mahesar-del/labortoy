<section class="what-you-need-section">
    <div class="container wyn-container">
        <h2 class="wyn-title">What You Need to Know</h2>
        <p class="wyn-subtitle">Start with the information most relevant to your laboratory testing experience.</p>

        <div class="wyn-grid">
            <!-- Card 1 -->
            <div class="wyn-card">
                <div class="wyn-card-bg-wrapper">
                    <img src="{{ asset('images/what-you-need-sider.png') }}" class="wyn-card-shape" alt="">
                </div>
                <div class="wyn-icon-box">
                    <img src="{{ asset('images/test-directory.svg') }}" alt="Test Directory">
                </div>
                <h3 class="wyn-card-title">Test Directory</h3>
                <p class="wyn-card-text">Explore Sterling's available laboratory tests and services to identify testing relevant to your clinical needs</p>
            </div>

            <!-- Card 2 -->
            <div class="wyn-card">
                <div class="wyn-card-bg-wrapper">
                    <img src="{{ asset('images/what-you-need-sider.png') }}" class="wyn-card-shape" alt="">
                </div>
                <div class="wyn-icon-box">
                    <img src="{{ asset('images/specimen-requirement.svg') }}" alt="Specimen Requirements">
                </div>
                <h3 class="wyn-card-title">Specimen Requirements</h3>
                <p class="wyn-card-text">Review information about specimen types, requirements, and considerations associated with laboratory testing.</p>
            </div>

            <!-- Card 3 -->
            <div class="wyn-card">
                <div class="wyn-card-bg-wrapper">
                    <img src="{{ asset('images/what-you-need-sider.png') }}" class="wyn-card-shape" alt="">
                </div>
                <div class="wyn-icon-box">
                    <img src="{{ asset('images/collection-information.svg') }}" alt="Collection Information">
                </div>
                <h3 class="wyn-card-title">Collection Information</h3>
                <p class="wyn-card-text">Access general guidance related to specimen collection, handling, and preparation for laboratory testing.</p>
            </div>

            <!-- Card 4 -->
            <div class="wyn-card">
                <div class="wyn-card-bg-wrapper">
                    <img src="{{ asset('images/what-you-need-sider.png') }}" class="wyn-card-shape" alt="">
                </div>
                <div class="wyn-icon-box">
                    <img src="{{ asset('images/clinical-resources.svg') }}" alt="Clinical Resources">
                </div>
                <h3 class="wyn-card-title">Clinical Resources</h3>
                <p class="wyn-card-text">Find relevant laboratory information and clinical resources intended to support healthcare professionals.</p>
            </div>

            <!-- Card 5 -->
            <div class="wyn-card">
                <div class="wyn-card-bg-wrapper">
                    <img src="{{ asset('images/what-you-need-sider.png') }}" class="wyn-card-shape" alt="">
                </div>
                <div class="wyn-icon-box">
                    <img src="{{ asset('images/ordering-information.svg') }}" alt="Ordering Information">
                </div>
                <h3 class="wyn-card-title">Ordering Information</h3>
                <p class="wyn-card-text">Review available information about laboratory test ordering and the information required for testing.</p>
            </div>

            <!-- Card 6 -->
            <div class="wyn-card">
                <div class="wyn-card-bg-wrapper">
                    <img src="{{ asset('images/what-you-need-sider.png') }}" class="wyn-card-shape" alt="">
                </div>
                <div class="wyn-icon-box">
                    <img src="{{ asset('images/provider-support.svg') }}" alt="Provider Support">
                </div>
                <h3 class="wyn-card-title">Provider Support</h3>
                <p class="wyn-card-text">Connect with Sterling when you need assistance with laboratory testing or provider-related questions.</p>
            </div>
        </div>
    </div>
</section>

<style>
    .what-you-need-section, .what-you-need-section * { box-sizing: border-box; }
    .what-you-need-section {
        background-color: #F3F8FA;
        padding: 4rem 7%;
        width: 100%;
        font-family: 'Inter', sans-serif;
        box-sizing: border-box;
    }

    .wyn-container {
        max-width: 1320px;
        width: 100%;
        margin: 0 auto;
    }

    .wyn-title {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 2.25rem;
        font-weight: 700;
        color: #000000;
        margin-bottom: 0.5rem;
        margin-top: 0;
    }

    .wyn-subtitle {
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        color: #333333;
        margin-bottom: 2.5rem;
        font-weight: 400;
    }

    .wyn-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        column-gap: 2rem;
        row-gap: 4rem; /* Increased row gap to accommodate the icon overlap */
    }

    .wyn-card {
        background: #ffffff;
        border-radius: 1.25rem;
        padding: 3rem 2.25rem 2.25rem 2.25rem;
        position: relative;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.03);
        border: 1px solid #E2E8F0; /* Added to make the top edge visible */
        display: flex;
        flex-direction: column;
    }

    /* Inner wrapper to contain the overflow of the shape without clipping the top icon */
    .wyn-card-bg-wrapper {
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        overflow: hidden;
        border-radius: 1.25rem;
        z-index: 1;
        pointer-events: none;
    }

    .wyn-card-shape {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 7.5rem;
        height: auto;
        object-fit: contain;
    }

    .wyn-icon-box {
        position: absolute;
        top: -1.375rem;
        left: 2.25rem;
        width: 2.75rem;
        height: 2.75rem;
        background-color: #12263A; /* Darker blue as per design */
        border-radius: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 3;
    }

    .wyn-icon-box img {
        width: 1.35rem;
        height: 1.35rem;
        object-fit: contain;
    }

    .wyn-card-title {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 1.15rem;
        font-weight: 700;
        color: #000000;
        margin-top: 1rem;
        margin-bottom: 1.25rem;
        z-index: 2;
        position: relative;
    }

    .wyn-card-text {
        font-family: 'Inter', sans-serif;
        font-size: 0.95rem;
        color: #333333;
        line-height: 1.6;
        margin: 0;
        z-index: 2;
        position: relative;
        flex-grow: 1;
        text-align: justify;
    }

    @media (max-width: 992px) {
        .wyn-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .what-you-need-section {
            padding: 2.5rem 20px;
        }
        .wyn-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            font-size: 24px;
            line-height: 30px;
            letter-spacing: 0px;
            color: #000000;
            text-align: center;
        }
        .wyn-subtitle {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: 0px;
            color: #000000;
            text-align: center;
            margin-bottom: 2.5rem;
        }
        .wyn-card-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            font-size: 18px;
            line-height: 1.3;
        }
        .wyn-card-text {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: 0px;
            color: #333333;
            text-align: justify;
        }
        .wyn-grid {
            grid-template-columns: 1fr;
            row-gap: 2.5rem;
        }
    }
</style>
