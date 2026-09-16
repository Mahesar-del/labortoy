<section class="clinical-workflow">
    <div class="cw-container">
        <!-- Left Side: Image -->
        <div class="cw-image-wrapper">
            <img src="{{ asset('images/test-information.jpg') }}" alt="Built Around Your Clinical Workflow" class="cw-image">
        </div>
        
        <!-- Right Side: Content -->
        <div class="cw-content">
            <h2 class="cw-title">Built Around Your Clinical Workflow</h2>
            
            <p class="cw-text">Sterling's provider resources are designed to make it easier for physicians, clinics, and healthcare professionals to access information related to laboratory testing.</p>
            
            <p class="cw-text">From selecting a test to understanding specimen requirements and accessing clinical resources, this section brings essential provider information together in one place.</p>
            
            <ul class="cw-list">
                <li>
                    <span class="cw-check"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 13l4 4L19 7" stroke="#3182ce" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    Explore available laboratory testing
                </li>
                <li>
                    <span class="cw-check"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 13l4 4L19 7" stroke="#3182ce" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    Review specimen and collection requirements
                </li>
                <li>
                    <span class="cw-check"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 13l4 4L19 7" stroke="#3182ce" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    Access relevant clinical resources
                </li>
                <li>
                    <span class="cw-check"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 13l4 4L19 7" stroke="#3182ce" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    Connect with Sterling provider support
                </li>
            </ul>
        </div>
    </div>
</section>

<style>
    .clinical-workflow, .clinical-workflow * { box-sizing: border-box; }
    .clinical-workflow {
        width: 100%;
        padding: 2rem 7%;
        background-color: #ffffff;
    }

    .cw-container {
        max-width: 1320px;
        margin: 0 auto;
        display: flex;
        gap: 80px;
        align-items: center;
    }

    .cw-image-wrapper {
        flex: 1;
        max-width: 500px;
    }

    .cw-image {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 16px;
    }

    .cw-content {
        flex: 1;
        max-width: 650px;
    }

    .cw-title {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: clamp(28px, 2.5vw, 36px);
        font-weight: 700;
        color: #000000;
        margin: 0 0 24px 0;
        line-height: 1.2;
    }

    .cw-text {
        font-family: 'Inter', sans-serif;
        font-size: 15px;
        color: #333333;
        line-height: 1.6;
        margin: 0 0 20px 0;
    }

    .cw-list {
        list-style: none;
        padding: 0;
        margin: 30px 0 0 0;
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .cw-list li {
        font-family: 'Inter', sans-serif;
        font-size: 15px;
        color: #000000;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .cw-check {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 24px;
        height: 24px;
        background-color: #e6f6ff;
        border-radius: 50%;
        flex-shrink: 0;
    }

    .cw-check svg {
        width: 12px;
        height: 12px;
    }

    @media (max-width: 992px) {
        .cw-container {
            flex-direction: column;
            gap: 40px;
        }
        .cw-image-wrapper, .cw-content {
            max-width: 100%;
        }
    }
</style>
