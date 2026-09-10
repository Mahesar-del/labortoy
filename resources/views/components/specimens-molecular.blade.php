<section class="specimens-section" aria-labelledby="specimens-title">
    <div class="specimens-backdrop"></div>
    <div class="specimens-container">
        <div class="specimens-content">
            <h2 id="specimens-title">Specimens Used for Molecular Testing</h2>
            <p>Molecular testing can require different specimen types depending on the specific test and clinical indication. Final specimen requirements should always be based on Sterling's current test menu and laboratory protocols.</p>
        </div>
        <div class="specimens-grid">
            <article class="specimen-card">
                <h3>Blood</h3>
                <p>Used for selected molecular and genetic investigations.</p>
            </article>
            <article class="specimen-card">
                <h3>Swab</h3>
                <p>May be used for selected infectious or respiratory testing.</p>
            </article>
            <article class="specimen-card">
                <h3>Tissue</h3>
                <p>May support specific oncology and molecular investigations.</p>
            </article>
            <article class="specimen-card">
                <h3>Other Specimens</h3>
                <p>Requirements vary according to the individual test.</p>
            </article>
        </div>
    </div>
</section>

<style>
    .specimens-section, .specimens-section * { box-sizing: border-box; }
    .specimens-section {
        position: relative;
        padding: 50px 7%;
        background-color: #0B2545; /* Base color fallback */
        color: #ffffff;
        isolation: isolate;
        overflow: hidden;
    }
    
    .specimens-backdrop {
        position: absolute;
        inset: 0;
        background-image: linear-gradient(90deg, rgba(11, 37, 69, 0.92) 0%, rgba(11, 37, 69, 0.75) 100%), url('{{ asset("images/simplement-molecular-testing.jpg") }}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        z-index: -1;
    }

    .specimens-container {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 60px;
        max-width: 1320px;
        margin: 0 auto;
        align-items: center;
    }

    .specimens-content h2 {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 34px;
        font-weight: 700;
        line-height: 44px;
        margin-top: 0;
        margin-bottom: 24px;
        letter-spacing: 0px;
        color: #ffffff;
    }

    .specimens-content p {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 30px;
        text-align: justify;
        margin: 0;
        color: #ffffff;
    }

    .specimens-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .specimen-card {
        background: #ffffff;
        border: 0.67px solid #000000;
        border-radius: 12px;
        padding: 32px 28px;
        color: #000000;
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }

    .specimen-card h3 {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 20px;
        font-weight: 700;
        line-height: 30px;
        margin-top: 0;
        margin-bottom: 12px;
        color: #000000;
        letter-spacing: 0px;
    }

    .specimen-card p {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        margin: 0;
        color: #000000;
        letter-spacing: 0px;
    }

    @media (max-width: 992px) {
        .specimens-container {
            grid-template-columns: 1fr;
            gap: 45px;
        }
    }

    @media (max-width: 600px) {
        .specimens-section {
            padding: 60px 28px;
        }
        .specimens-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
