<section class="test-information-section">
    <div class="ti-container">
        <div class="ti-image">
            <img src="{{ asset('images/test-information.jpg') }}" alt="Test Information">
        </div>
        <div class="ti-content">
            <h2 class="ti-title">Test Information</h2>
            <p class="ti-text">
                Laboratory tests measure specific biological markers or substances in a specimen to help evaluate different aspects of your health. Your healthcare provider selects the appropriate test based on your individual clinical needs, symptoms, and medical history. Each test may require different preparation.
            </p>
        </div>
    </div>
</section>

<style>
    .test-information-section, .test-information-section * { box-sizing: border-box; }
    .test-information-section {
        background-color: #ffffff;
        padding: 5rem 7%;
        box-sizing: border-box;
        width: 100%;
    }

    .ti-container {
        max-width: 1320px;
        width: 100%;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 48px;
        padding: 0;
    }

    .ti-image {
        flex: 1;
        max-width: 520px;
        width: 100%;
        aspect-ratio: 555 / 470;
        height: auto;
        flex-shrink: 1;
    }

    .ti-image img {
        width: 100%;
        height: 100%;
        border-radius: 12px;
        object-fit: cover;
    }

    .ti-content {
        flex: 1;
        max-width: 580px;
        width: 100%;
        flex-shrink: 1;
    }

    .ti-title {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 34px;
        font-weight: 700;
        line-height: 44px;
        color: #000000;
        margin-bottom: 1.5rem;
        margin-top: 0;
    }

    .ti-text {
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 16px;
        line-height: 30px;
        color: #000000;
        text-align: justify;
        margin: 0;
    }

    @media (max-width: 992px) {
        .ti-container {
            flex-direction: column;
            gap: 24px;
        }
        
        .ti-image, .ti-content {
            width: 100%;
            max-width: 100%;
        }
    }

    @media (max-width: 768px) {
        .test-information-section {
            padding: 2.5rem 20px;
        }

        .ti-image {
            aspect-ratio: 555 / 380;
        }

        .ti-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            font-size: 24px;
            line-height: 34px;
            letter-spacing: 0px;
            color: #000000;
            text-align: left;
            margin-bottom: 14px;
        }
        
        .ti-text {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 30px;
            letter-spacing: 0px;
            text-align: justify;
            color: #000000;
        }
    }
</style>
