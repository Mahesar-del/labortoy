<style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700&family=Inter:wght@400&display=swap');

    .clinical-section {
        max-width: 1240px;
        margin: 0 auto;
        padding: 40px 20px;
        color: #000000;
        box-sizing: border-box;
    }

    .clinical-heading {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 700;
        font-size: 34px;
        line-height: 44px;
        text-align: center;
        margin-bottom: 16px;
    }

    .clinical-paragraph {
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 16px;
        line-height: 24px;
        text-align: center;
        max-width: 800px;
        margin: 0 auto 40px auto;
    }

    .clinical-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
        justify-items: center;
    }

    .clinical-card {
        width: 100%;
        max-width: 307px;
        height: 151px;
        border: 0.67px solid #000000;
        border-radius: 15px;
        padding: 24px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: #ffffff;
        color: #000000;
    }

    .clinical-card-heading {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 700;
        font-size: 20px;
        line-height: 30px;
        margin-bottom: 8px;
    }

    .clinical-card-text {
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 14px;
        line-height: 20px;
    }

    .clinical-image-wrapper {
        width: 100%;
        max-width: 555px;
    }

    .clinical-image {
        width: 100%;
        height: auto;
        border-radius: 20px;
        object-fit: cover;
    }

    /* Mobile Layout Order */
    .card-a { grid-column: 1; grid-row: 1; }
    .card-b { grid-column: 1; grid-row: 2; }
    .clinical-image-wrapper { grid-column: 1; grid-row: 3; }
    .card-c { grid-column: 1; grid-row: 4; }
    .card-d { grid-column: 1; grid-row: 5; }

    /* Desktop Layout Grid */
    @media (min-width: 992px) {
        .clinical-grid {
            grid-template-columns: 307px 555px 307px;
            grid-template-rows: 1fr 1fr;
            gap: 20px 30px;
            justify-content: center;
        }
        .clinical-image-wrapper { 
            grid-column: 2; 
            grid-row: 1 / span 2; 
            height: 398px;
        }
        .clinical-image {
            height: 100%;
        }
        .card-a { grid-column: 1; grid-row: 1; align-self: end; }
        .card-c { grid-column: 1; grid-row: 2; align-self: start; }
        .card-b { grid-column: 3; grid-row: 1; align-self: end; }
        .card-d { grid-column: 3; grid-row: 2; align-self: start; }
    }
</style>

<div class="clinical-section">
    <div class="clinical-heading">Preparing for Your Clinical Test</div>
    <div class="clinical-paragraph">
        Test preparation and sample collection requirements vary depending on the specific laboratory test. Patients should follow the instructions provided for their individual test.
    </div>

    <div class="clinical-grid">
        <div class="clinical-card card-a">
            <div class="clinical-card-heading">Preparing for a Test</div>
            <div class="clinical-card-text">Follow any preparation instructions provided before sample collection.</div>
        </div>
        
        <div class="clinical-card card-b">
            <div class="clinical-card-heading">Sample Collection</div>
            <div class="clinical-card-text">Learn what to expect during the collection of the required specimen.</div>
        </div>
        
        <div class="clinical-image-wrapper">
            <img src="{{ asset('images/clinical-test.png') }}" alt="Preparing for clinical test" class="clinical-image" />
        </div>

        <div class="clinical-card card-c">
            <div class="clinical-card-heading">What to Expect</div>
            <div class="clinical-card-text">Understand the general steps involved in laboratory testing.</div>
        </div>
        
        <div class="clinical-card card-d">
            <div class="clinical-card-heading">Test Instructions</div>
            <div class="clinical-card-text">Review test-specific requirements before your laboratory visit.</div>
        </div>
    </div>
</div>
