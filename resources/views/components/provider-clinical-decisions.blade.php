<section class="clinical-decisions">
    <div class="cd-container">
        <!-- Left Side: Image -->
        <div class="cd-image-wrapper">
            <img src="{{ asset('images/support-clinical-decision.png') }}" alt="Information to Support Clinical Decisions" class="cd-image">
        </div>
        
        <!-- Right Side: Content -->
        <div class="cd-content">
            <h2 class="cd-title">Information to Support Clinical Decisions</h2>
            
            <p class="cd-text">Sterling's clinical resources can help healthcare professionals access relevant laboratory information when evaluating testing options for their patients.</p>
            
            <ul class="cd-list">
                <li>
                    <span class="cd-check"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 13l4 4L19 7" stroke="#3182ce" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    Test-related clinical information
                </li>
                <li>
                    <span class="cd-check"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 13l4 4L19 7" stroke="#3182ce" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    Specimen and collection guidance
                </li>
                <li>
                    <span class="cd-check"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 13l4 4L19 7" stroke="#3182ce" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    Laboratory testing information
                </li>
                <li>
                    <span class="cd-check"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 13l4 4L19 7" stroke="#3182ce" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    Relevant provider resources
                </li>
                <li>
                    <span class="cd-check"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 13l4 4L19 7" stroke="#3182ce" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    Ordering-related information
                </li>
            </ul>
        </div>
    </div>
</section>

<style>
    .clinical-decisions, .clinical-decisions * { box-sizing: border-box; }
    .clinical-decisions {
        width: 100%;
        padding: 2rem 7%;
        background-color: #ffffff;
    }

    .cd-container {
        max-width: 1320px;
        margin: 0 auto;
        display: flex;
        gap: 80px;
        align-items: center;
    }

    .cd-image-wrapper {
        flex: 1;
        max-width: 500px;
    }

    .cd-image {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 16px;
    }

    .cd-content {
        flex: 1;
        max-width: 650px;
    }

    .cd-title {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: clamp(28px, 2.5vw, 36px);
        font-weight: 700;
        color: #000000;
        margin: 0 0 24px 0;
        line-height: 1.2;
    }

    .cd-text {
        font-family: 'Inter', sans-serif;
        font-size: 15px;
        color: #333333;
        line-height: 1.6;
        margin: 0 0 20px 0;
    }

    .cd-list {
        list-style: none;
        padding: 0;
        margin: 30px 0 0 0;
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .cd-list li {
        font-family: 'Inter', sans-serif;
        font-size: 15px;
        color: #000000;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .cd-check {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 24px;
        height: 24px;
        background-color: #e6f6ff;
        border-radius: 50%;
        flex-shrink: 0;
    }

    .cd-check svg {
        width: 12px;
        height: 12px;
    }

    @media (max-width: 992px) {
        .cd-container {
            flex-direction: column;
            gap: 40px;
        }
        .cd-image-wrapper, .cd-content {
            max-width: 100%;
        }
    }
</style>
