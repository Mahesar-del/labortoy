<section class="find-right-test">
    <div class="frt-section">
        <div class="frt-heading">Find the Right Laboratory Test</div>
        <div class="frt-paragraph">
            Use Sterling's test directory to explore available diagnostic services and identify testing relevant to your patient's clinical needs.
        </div>

        <div class="frt-grid">
            <div class="frt-card card-a">
                <div class="frt-card-heading">Genomic Diagnostics</div>
                <div class="frt-card-text">Advanced DNA and gene testing for inherited conditions and genetic variations.</div>
            </div>
            
            <div class="frt-card card-b">
                <div class="frt-card-heading">Molecular Diagnostics</div>
                <div class="frt-card-text">Precise detection of DNA, RNA, and molecular markers linked to disease.</div>
            </div>
            
            <div class="frt-image-wrapper">
                <img src="{{ asset('images/laboratory-test.png') }}" alt="Laboratory" class="frt-image" />
            </div>

            <div class="frt-card card-c">
                <div class="frt-card-heading">Clinical Diagnostics</div>
                <div class="frt-card-text">Comprehensive laboratory testing to support diagnosis, treatment, and patient care.</div>
            </div>
            
            <div class="frt-card card-d">
                <div class="frt-card-heading">Specialized Laboratory Testing</div>
                <div class="frt-card-text">Advanced testing solutions for complex and highly specific diagnostic requirements.</div>
            </div>
        </div>
    </div>
</section>

<style>
    .find-right-test, .find-right-test * { box-sizing: border-box; }
    .find-right-test {
        padding: 2rem 7%;
        background-color: #ffffff;
        overflow: hidden;
        width: 100%;
    }

    .frt-section {
        max-width: 1320px;
        margin: 0 auto;
        color: #000000;
    }

    .frt-heading {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 700;
        font-size: clamp(28px, 2.5vw, 36px);
        line-height: 1.2;
        text-align: center;
        margin-bottom: 12px;
    }

    .frt-paragraph {
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 15px;
        line-height: 1.6;
        text-align: center;
        max-width: 800px;
        margin: 0 auto 40px auto;
        color: #333333;
    }

    .frt-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
        justify-items: center;
    }

    .frt-card {
        width: 100%;
        max-width: 320px;
        min-height: 140px;
        border: 1px solid #cccccc;
        border-radius: 12px;
        padding: 24px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: #ffffff;
        color: #000000;
    }

    .frt-card-heading {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 700;
        font-size: 18px;
        line-height: 1.3;
        margin-bottom: 8px;
    }

    .frt-card-text {
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 14px;
        line-height: 1.5;
        color: #333333;
    }

    .frt-image-wrapper {
        width: 100%;
        max-width: 555px;
    }

    .frt-image {
        width: 100%;
        height: 100%;
        border-radius: 20px;
        object-fit: cover;
    }

    /* Mobile Layout Order */
    .find-right-test .card-a { grid-column: 1; grid-row: 1; }
    .find-right-test .card-b { grid-column: 1; grid-row: 2; }
    .find-right-test .frt-image-wrapper { grid-column: 1; grid-row: 3; }
    .find-right-test .card-c { grid-column: 1; grid-row: 4; }
    .find-right-test .card-d { grid-column: 1; grid-row: 5; }

    /* Desktop Layout Grid */
    @media (min-width: 992px) {
        .frt-grid {
            grid-template-columns: 1fr 1.8fr 1fr;
            grid-template-rows: 1fr 1fr;
            gap: 20px 30px;
            justify-content: center;
        }
        .find-right-test .frt-image-wrapper { 
            grid-column: 2; 
            grid-row: 1 / span 2; 
            height: 100%;
            min-height: 380px;
        }
        .find-right-test .card-a { grid-column: 1; grid-row: 1; align-self: end; }
        .find-right-test .card-b { grid-column: 1; grid-row: 2; align-self: start; }
        .find-right-test .card-c { grid-column: 3; grid-row: 1; align-self: end; }
        .find-right-test .card-d { grid-column: 3; grid-row: 2; align-self: start; }
    }
</style>
