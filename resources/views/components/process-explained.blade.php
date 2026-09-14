<section class="process-section">
    <div class="process-container">
        <h2 class="process-title">From Sample to Results Our<br>Process Explained</h2>
        <div class="process-grid">
            <!-- Step 1 -->
            <div class="process-card">
                <img src="{{ asset('images/request-your-kit.svg') }}" alt="Request your test kit" class="process-icon">
                <h3 class="process-step-title"><span class="step-num">01.</span> <span>Request Your Test Kit</span></h3>
                <p class="process-description">
                    Easily place orders via our secure Physician Portal with custom panels and comprehensive test combinations.
                </p>
            </div>
            <!-- Step 2 -->
            <div class="process-card">
                <img src="{{ asset('images/sample-collection.png') }}" alt="Sample Collection" class="process-icon">
                <h3 class="process-step-title"><span class="step-num">02.</span> <span>Sample Collection</span></h3>
                <p class="process-description">
                    For added convenience, choose our home collection option or a qualified visit to collect samples safely.
                </p>
            </div>
            <!-- Step 3 -->
            <div class="process-card">
                <img src="{{ asset('images/analysis-review.svg') }}" alt="Analysis and Review" class="process-icon">
                <h3 class="process-step-title"><span class="step-num">03.</span> <span>Analysis and Review</span></h3>
                <p class="process-description">
                    Our skilled pathologists and lab scientists carefully analyze the test data with the latest advanced technology.
                </p>
            </div>
            <!-- Step 4 -->
            <div class="process-card">
                <img src="{{ asset('images/follow-support.svg') }}" alt="Follow-Up and Support" class="process-icon">
                <h3 class="process-step-title"><span class="step-num">04.</span> <span>Follow-Up and Support</span></h3>
                <p class="process-description">
                    Our customer support team is here to answer any questions regarding results, next steps, or any additional testing needed.
                </p>
            </div>
        </div>
    </div>
</section>

<style>
    .process-section {
        background-color: #F3F8FA;
        padding: 20px 99px;
        width: 100%;
        box-sizing: border-box;
    }

    .process-container {
        max-width: 82.5rem;
        margin: 0 auto;
        padding: 0;
        width: 100%;
    }

    .process-title {
        text-align: center;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 2.rem;
        font-weight: 700;
        color: #000000;
        line-height: 2.1rem;
        margin-bottom: 2.5rem;
    }

    .process-grid {
        display: flex;
        justify-content: space-between;
        gap: 2rem;
        width: 100%;
    }

    .process-card {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .process-icon {
        height: 4.5rem;
        width: auto;
        margin-bottom: 1rem;
        object-fit: contain;
    }

    .process-step-title {
        font-family: 'Libre Franklin', sans-serif;
        font-size: 1rem;
        font-weight: 600;
        line-height: 1.4625rem;
        color: #1E3A5F;
        margin-bottom: 0.5rem;
        white-space: nowrap;
    }

    .step-num {
        color: #6392C9;
        font-weight: 600;
    }

    .process-description {
        font-family: 'Inter', sans-serif;
        font-size: 15px !important;
        line-height: 1.625rem;
        color: #000000;
        text-align: center;
    }

    @media (max-width: 900px) {
        .process-section {
            padding-left: 32px;
            padding-right: 32px;
        }
        .process-grid {
            flex-direction: column;
            gap: 2rem;
        }
    }

    @media (max-width: 600px) {
        .process-section {
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 2.5rem;
            padding-bottom: 2.5rem;
        }
    }
</style>
