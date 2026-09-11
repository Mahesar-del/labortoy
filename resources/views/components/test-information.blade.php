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
    .test-information-section {
        background-color: #ffffff;
        padding: 5rem 7% 5rem 7%;
        box-sizing: border-box;
        width: 100%;
    }

    .ti-container {
        max-width: 1320px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        gap: 4rem;
    }

    .ti-content {
        flex: 1;
    }

    .ti-image {
        flex: 1;
        display: flex;
        justify-content: flex-start;
    }

    .ti-image img {
        max-width: 100%;
        height: auto;
        border-radius: 1rem;
        object-fit: cover;
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
            gap: 2rem;
        }
        
        .ti-image {
            justify-content: center;
            width: 100%;
        }
    }

    @media (max-width: 768px) {
        .test-information-section {
            padding: 3rem 7% 3rem 7%;
        }

        .ti-title {
            font-size: 28px;
            line-height: 36px;
            text-align: left;
        }
        
        .ti-text {
            text-align: justify;
        }
    }
</style>
