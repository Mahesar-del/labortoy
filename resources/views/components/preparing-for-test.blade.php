<section class="preparing-test-section">
    <div class="pt-container">
        <!-- Left Side: Image -->
        <div class="pt-image-wrapper">
            <img src="{{ asset('images/prepare-for-the-test.jpg') }}" alt="Preparing for a Test" class="pt-image">
        </div>
        
        <!-- Right Side: Content -->
        <div class="pt-content">
            <h2>Preparing for a Test</h2>
            <p class="pt-intro">Preparation depends on the laboratory test your healthcare provider has ordered. Make sure you understand any test-specific instructions before your appointment.</p>
            
            <div class="pt-timeline">
                <div class="pt-step">
                    <div class="pt-step-indicator">
                        <div class="pt-dot"></div>
                        <div class="pt-line"></div>
                    </div>
                    <div class="pt-step-content">
                        <span class="pt-step-label">STEP 01</span>
                        <h3>Review Your Instructions</h3>
                        <p>Check whether your test requires fasting, specific timing, or any other preparation.</p>
                    </div>
                </div>
                
                <div class="pt-step">
                    <div class="pt-step-indicator">
                        <div class="pt-dot"></div>
                        <div class="pt-line"></div>
                    </div>
                    <div class="pt-step-content">
                        <span class="pt-step-label">STEP 02</span>
                        <h3>Follow Test-Specific Requirements</h3>
                        <p>Follow the instructions given by your healthcare provider or laboratory.</p>
                    </div>
                </div>
                
                <div class="pt-step">
                    <div class="pt-step-indicator">
                        <div class="pt-dot"></div>
                        <div class="pt-line"></div>
                    </div>
                    <div class="pt-step-content">
                        <span class="pt-step-label">STEP 03</span>
                        <h3>Bring Required Information</h3>
                        <p>Have any requested identification, test order, or relevant information available.</p>
                    </div>
                </div>
                
                <div class="pt-step">
                    <div class="pt-step-indicator">
                        <div class="pt-dot"></div>
                        <!-- No line for the last step -->
                    </div>
                    <div class="pt-step-content">
                        <span class="pt-step-label">STEP 04</span>
                        <h3>Ask Questions</h3>
                        <p>If you are unsure about preparation, ask your healthcare provider before testing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .preparing-test-section, .preparing-test-section * { box-sizing: border-box; }
    .preparing-test-section {
        width: 100%;
        padding: 3rem 7%;
        background-color: #ffffff;
        box-sizing: border-box;
    }

    .pt-container {
        max-width: 1320px;
        width: 100%;
        margin: 0 auto;
        display: flex;
        gap: 48px;
        justify-content: space-between;
        align-items: stretch;
    }

    .pt-image-wrapper {
        flex: 1;
        max-width: 600px;
        width: 100%;
        position: relative;
        display: flex;
        flex-shrink: 1;
    }

    .pt-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    }

    .pt-content {
        flex: 1;
        max-width: 624px;
        width: 100%;
        flex-shrink: 1;
    }

    .pt-content h2 {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 32px;
        font-weight: 700;
        color: #000000;
        margin: 0 0 16px 0;
    }

    .pt-intro {
        font-family: 'Inter', sans-serif;
        font-size: 15px;
        color: #333333;
        line-height: 1.6;
        margin: 0 0 40px 0;
    }

    .pt-timeline {
        display: flex;
        flex-direction: column;
    }

    .pt-step {
        display: flex;
        gap: 20px;
        position: relative;
    }

    .pt-step-indicator {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 12px;
    }

    .pt-dot {
        width: 12px;
        height: 12px;
        background-color: #38b2ac; /* Cyan color matching screenshot */
        border-radius: 50%;
        flex-shrink: 0;
        margin-top: 6px;
    }

    .pt-line {
        width: 2px;
        background-color: #1a365d; /* Dark blue color */
        flex-grow: 1;
        margin: 4px 0;
        min-height: 40px;
    }

    .pt-step-content {
        padding-bottom: 30px;
    }

    .pt-step:last-child .pt-step-content {
        padding-bottom: 0;
    }

    .pt-step-label {
        font-family: 'Inter', sans-serif;
        font-size: 12px;
        font-weight: 700;
        color: #38b2ac;
        letter-spacing: 1px;
        text-transform: uppercase;
        display: block;
        margin-bottom: 6px;
    }

    .pt-step-content h3 {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 18px;
        font-weight: 700;
        line-height: 18.2px;
        letter-spacing: 0.28px;
        color: #0B2545;
        margin: 0 0 8px 0;
    }

    .pt-step-content p {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        color: #44474E;
        line-height: 24px;
        letter-spacing: 0px;
        margin: 0;
    }

    @media (max-width: 992px) {
        .pt-container {
            flex-direction: column;
            align-items: flex-start;
        }
        .pt-image-wrapper, .pt-content {
            max-width: 100%;
            width: 100%;
        }
    }

    @media (max-width: 768px) {
        .preparing-test-section {
            padding: 2.5rem 20px;
        }
        .pt-container {
            gap: 24px;
        }
        .pt-image-wrapper {
            display: none;
        }
        .pt-content h2 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            font-size: 24px;
            line-height: 30px;
            letter-spacing: 0px;
            color: #000000;
            margin-bottom: 12px;
        }
        .pt-intro {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: 0px;
            text-align: justify;
            color: #000000;
            margin-bottom: 24px;
        }
        .pt-step-content h3 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            font-size: 18px;
            line-height: 18.2px;
            letter-spacing: 0.28px;
            color: #0B2545;
        }
        .pt-step-content p {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: 0px;
            color: #44474E;
        }
    }
</style>
