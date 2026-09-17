<section class="test-information-section">
    <div class="ti-container">
        <div class="ti-image">
            <img src="{{ asset('images/test-information.webp') }}" alt="Test Information">
        </div>
        <div class="ti-content">
            <h2 class="ti-title">Test Information</h2>
            <p class="ti-text">
                Laboratory tests measure specific biological markers or substances in a specimen to help evaluate different aspects of your health. Your healthcare provider selects the appropriate test based on your individual clinical needs, symptoms, and medical history. Each test may have a specific purpose, require a particular specimen type, and include certain preparation instructions before collection. The specimen is then analyzed in the laboratory using the appropriate testing process, and the results are reported to your healthcare provider. Laboratory results should always be interpreted by a qualified healthcare professional in the context of your overall health and clinical history.
            </p>
        </div>
    </div>
</section>

<style>
    .test-information-section, .test-information-section * { box-sizing: border-box; }
    .test-information-section {
        background-color: #ffffff;
        padding: 4rem 99px;
        box-sizing: border-box;
        width: 100%;
    }

    .ti-container {
        max-width: 1320px;
        width: 100%;
        min-height: 398px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 48px;
        padding: 0;
    }

    .ti-image {
        flex: 1;
        max-width: 570px;
        width: 100%;
        height: 398px;
        flex-shrink: 0;
    }

    .ti-image img {
        width: 100%;
        height: 100%;
        border-radius: 20px;
        object-fit: cover;
    }

    .ti-content {
        flex: 1;
        max-width: 612px;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .ti-title {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 32px;
        font-weight: 700;
        line-height: 1.25;
        color: #000000;
        margin-bottom: 20px;
        margin-top: 0;
    }

    .ti-text {
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 15px;
        line-height: 1.65;
        color: #000;
        text-align: justify;
        margin: 0;
    }

    @media (max-width: 1150px) {
        .test-information-section {
            padding-left: 20px;
            padding-right: 20px;
        }
    }

    @media (max-width: 992px) {
        .ti-container {
            flex-direction: column;
            gap: 24px;
            min-height: auto;
        }
        
        .ti-image {
            width: 100%;
            max-width: 100%;
            height: auto;
            max-height: 398px;
            aspect-ratio: 16 / 9;
        }

        .ti-content {
            width: 100%;
            max-width: 100%;
        }
    }

    @media (max-width: 768px) {
        .test-information-section {
            padding: 2.5rem 20px;
        }

        .ti-title {
            font-size: 24px;
            line-height: 32px;
            margin-bottom: 14px;
        }

        .ti-text {
            font-size: 14px;
            line-height: 1.6;
        }
    }
</style>
