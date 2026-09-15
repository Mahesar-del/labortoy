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
                <div class="wyn-card-header">
                    <span class="wyn-card-number">01</span>
                    <div class="wyn-icon-box">
                        <img src="{{ asset('images/card1-icon.png') }}" alt="Preparing for a Test">
                    </div>
                </div>
                <h3 class="wyn-card-title">Preparing for a Test</h3>
                <p class="wyn-card-text">Learn about preparation requirements such as fasting, medications, timing, or other instructions that may apply to your specific test.</p>
            </div>

            <!-- Card 2 -->
            <div class="wyn-card">
                <div class="wyn-card-bg-wrapper">
                    <img src="{{ asset('images/what-you-need-sider.png') }}" class="wyn-card-shape" alt="">
                </div>
                <div class="wyn-card-header">
                    <span class="wyn-card-number">02</span>
                    <div class="wyn-icon-box">
                        <img src="{{ asset('images/card2-icon.png') }}" alt="Specimen Collection">
                    </div>
                </div>
                <h3 class="wyn-card-title">Specimen Collection</h3>
                <p class="wyn-card-text">Understand how samples may be collected and why correct collection and handling are important for accurate testing.</p>
            </div>

            <!-- Card 3 -->
            <div class="wyn-card">
                <div class="wyn-card-bg-wrapper">
                    <img src="{{ asset('images/what-you-need-sider.png') }}" class="wyn-card-shape" alt="">
                </div>
                <div class="wyn-card-header">
                    <span class="wyn-card-number">03</span>
                    <div class="wyn-icon-box">
                        <img src="{{ asset('images/card3-icon.png') }}" alt="What to Expect">
                    </div>
                </div>
                <h3 class="wyn-card-title">What to Expect</h3>
                <p class="wyn-card-text">Get a simple overview of what may happen before, during, and after your laboratory visit.</p>
            </div>

            <!-- Card 4 -->
            <div class="wyn-card">
                <div class="wyn-card-bg-wrapper">
                    <img src="{{ asset('images/what-you-need-sider.png') }}" class="wyn-card-shape" alt="">
                </div>
                <div class="wyn-card-header">
                    <span class="wyn-card-number">04</span>
                    <div class="wyn-icon-box">
                        <img src="{{ asset('images/card4-icon.png') }}" alt="Test Information">
                    </div>
                </div>
                <h3 class="wyn-card-title">Test Information</h3>
                <p class="wyn-card-text">Find general information about laboratory tests and the types of information they may provide to your healthcare provider.</p>
            </div>

            <!-- Card 5 -->
            <div class="wyn-card">
                <div class="wyn-card-bg-wrapper">
                    <img src="{{ asset('images/what-you-need-sider.png') }}" class="wyn-card-shape" alt="">
                </div>
                <div class="wyn-card-header">
                    <span class="wyn-card-number">05</span>
                    <div class="wyn-icon-box">
                        <img src="{{ asset('images/card5-icon.png') }}" alt="Results Information">
                    </div>
                </div>
                <h3 class="wyn-card-title">Results Information</h3>
                <p class="wyn-card-text">Learn what to expect regarding laboratory results and how results may be communicated or accessed.</p>
            </div>

            <!-- Card 6 -->
            <div class="wyn-card">
                <div class="wyn-card-bg-wrapper">
                    <img src="{{ asset('images/what-you-need-sider.png') }}" class="wyn-card-shape" alt="">
                </div>
                <div class="wyn-card-header">
                    <span class="wyn-card-number">06</span>
                    <div class="wyn-icon-box">
                        <img src="{{ asset('images/card6-icon.png') }}" alt="Frequently Asked Questions">
                    </div>
                </div>
                <h3 class="wyn-card-title">Frequently Asked Questions</h3>
                <p class="wyn-card-text">Find answers to common questions about laboratory testing, preparation, specimen collection, and results.</p>
            </div>
        </div>
    </div>
</section>

<style>
    .what-you-need-section, .what-you-need-section * { box-sizing: border-box; }
    .what-you-need-section {
        background-color: #F8F9FA;
        padding: 4rem 99px;
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
        color: #000000;
        margin-bottom: 2.5rem;
        font-weight: 400;
    }

    .wyn-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 24px;
        width: 100%;
    }

    .wyn-card {
        background: #ffffff;
        border-radius: 16px;
        width: 100%;
        min-height: 278px;
        height: auto;
        padding: 24px 28px;
        position: relative;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
        border: 1px solid #E2E8F0;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        overflow: hidden;
    }

    .wyn-card-bg-wrapper {
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        overflow: hidden;
        border-radius: 16px;
        z-index: 1;
        pointer-events: none;
    }

    .wyn-card-shape {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 120px;
        height: auto;
        object-fit: contain;
        pointer-events: none;
    }

    .wyn-card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        margin-bottom: 20px;
        position: relative;
        z-index: 2;
    }

    .wyn-card-number {
        font-family: 'Inter', sans-serif;
        font-weight: 700;
        font-size: 15px;
        line-height: 1;
        color: #0B2545;
        background-color: #F0F4F8;
        padding: 10px 10px;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .wyn-icon-box {
        width: 60px;
        height: 60px;
        background-color: #0B2545;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
        position: relative;
        flex-shrink: 0;
    }

    .wyn-icon-box img {
        width: 26px;
        height: 26px;
        object-fit: contain;
    }

    .wyn-card-title {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 1.125rem;
        font-weight: 700;
        color: #000000;
        margin-top: 0;
        margin-bottom: 10px;
        z-index: 2;
        position: relative;
        line-height: 1.3;
    }

    .wyn-card-text {
        font-family: 'Inter', sans-serif;
        font-size: 0.9rem;
        color: #000000;
        line-height: 1.55;
        text-align: justify;
        margin: 0;
        z-index: 2;
        position: relative;
    }

    @media (max-width: 1150px) {
        .what-you-need-section {
            padding-left: 20px;
            padding-right: 20px;
        }
    }

    @media (max-width: 992px) {
        .wyn-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 768px) {
        .what-you-need-section {
            padding: 2.5rem 20px;
        }
        .wyn-title {
            font-size: 24px;
            line-height: 30px;
            text-align: center;
        }
        .wyn-subtitle {
            font-size: 16px;
            line-height: 24px;
            text-align: center;
            margin-bottom: 2rem;
        }
        .wyn-grid {
            grid-template-columns: 1fr;
            row-gap: 1.5rem;
        }
        .wyn-card {
            width: 100%;
            min-height: 278px;
            height: auto;
        }
    }
</style>
