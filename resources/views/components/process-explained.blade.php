<section class="genomic-process" aria-labelledby="genomic-process-title">
    <div class="genomic-process__container">
        <header class="genomic-process__header">
            <h2 id="genomic-process-title">From Sample to Results Our Process Explained</h2>
        </header>

        <div class="genomic-process__steps">
            <article class="genomic-process-step">
                <img class="genomic-process-step__image" src="{{ asset('images/req-sample-kid.svg') }}" alt="" aria-hidden="true">
                <h3><span>01.</span> Request your test kit</h3>
                <p>Easily place orders through our secure Physician Portal, with options for custom panels and test combinations.</p>
            </article>

            <article class="genomic-process-step">
                <img class="genomic-process-step__image" src="{{ asset('images/sample.svg') }}" alt="" aria-hidden="true">
                <h3><span>02.</span> Sample Collection</h3>
                <p>For added convenience, choose our home collection option or schedule a qualified visit to collect samples safely.</p>
            </article>

            <article class="genomic-process-step">
                <img class="genomic-process-step__image" src="{{ asset('images/analysis-and-review.svg') }}" alt="" aria-hidden="true">
                <h3><span>03.</span> Analysis and Review</h3>
                <p>Our skilled pathologists and laboratory scientists analyze the test data using the latest technology.</p>
            </article>

            <article class="genomic-process-step">
                <img class="genomic-process-step__image" src="{{ asset('images/follow-up and support.svg') }}" alt="" aria-hidden="true">
                <h3><span>04.</span> Follow-Up and Support</h3>
                <p>Our customer support team is here to answer questions about results, next steps, or any additional testing.</p>
            </article>
        </div>
    </div>
</section>

<style>
    .genomic-process, .genomic-process * { box-sizing: border-box; }
    .genomic-process { background: #f3f8fb; padding: 22px 7% 78px; }
    .genomic-process__container { margin: 0 auto; max-width: 1320px; }
    .genomic-process__header { margin: 0 auto 46px; text-align: center; }
    .genomic-process__header h2 { color: #111820; font-size: clamp(26px, 2.15vw, 36px); letter-spacing: -.035em; line-height: 1.2; margin: 0; font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 700; }
    .genomic-process__steps { display: grid; gap: clamp(30px, 4vw, 64px); grid-template-columns: repeat(4, minmax(0, 1fr)); }
    .genomic-process-step { text-align: center; }
    .genomic-process-step__image { display: block; height: 89px; margin: 0 auto 24px; object-fit: contain; width: 82px; }
    .genomic-process-step h3 { color: #173a60; font-size: clamp(15px, 1.1vw, 18px); font-weight: 800; line-height: 1.35; margin: 0 0 15px; font-family: 'Inter', sans-serif; }
    .genomic-process-step h3 span { color: #79a0c8; }
    .genomic-process-step p { color: #222b34; font-size: clamp(13px, .92vw, 15px); line-height: 1.65; margin: 0 auto; max-width: 265px; font-family: 'Inter', sans-serif; }
    @media (max-width: 950px) {
        .genomic-process__steps { grid-template-columns: repeat(2, minmax(0, 1fr)); row-gap: 52px; }
    }
    @media (max-width: 560px) {
        .genomic-process { padding: 48px 28px 58px; }
        .genomic-process__header { margin-bottom: 40px; }
        .genomic-process__steps { grid-template-columns: 1fr; }
    }
</style>
