<section class="hero-section" aria-labelledby="hero-title">
    <div class="hero-section__background" aria-hidden="true">
        <img class="hero-bg-img-right" src="{{ asset('img/hero-bg-img-right.jpg') }}" alt="">
        <div class="hero-section__left">
            <img class="hero-bg-img-left" src="{{ asset('img/hero-bg-img-left.png') }}" alt="">
        </div>
    </div>

    <div class="hero-section__content">
        <img class="hero-doc-img" src="{{ asset('img/hero-doc-img.png') }}" alt="">
        <img class="hero-section__dots" src="{{ asset('img/dots-hero.png') }}" alt="">
        <div class="hero-section__copy">
            <h1 id="hero-title">Precision Diagnostics.<br>Better Answers for<br>Better Care.</h1>
            <p>Sterling Genomic, Molecular &amp; Clinical Diagnostics is a U.S. laboratory providing accurate, science-driven testing for patients and providers.</p>
            <div class="hero-section__actions">
                <a class="hero-section__button hero-section__button--primary" href="#services">Our Services</a>
                <a class="hero-section__button hero-section__button--secondary" href="#contact">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<style>
    .hero-section, .hero-section * { box-sizing: border-box; }
    .hero-section {
        isolation: isolate;
        position: relative;
        overflow: hidden;
        padding: clamp(28px, 5.4vw, 72px) 99px; /* Changed from 7% to 99px to align with header/footer */
        color: #102d55;
        background: #315fc1;
    }
    .hero-section__background { position: absolute; inset: 0; z-index: -1; }
    .hero-bg-img-right { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; object-position: right center; }
    .hero-section__left {
        position: absolute;
        inset: 0;
        background: #0F3DB4;
        clip-path: polygon(0 0, 56% 0, 43% 100%, 0 100%);
    }
    .hero-bg-img-left { width: 62%; height: 100%; object-fit: cover; object-position: left center; opacity: .42; }
    .hero-section__left::after { content: ''; position: absolute; inset: 0; background: #0F3DB4; opacity: .72; }
    .hero-section__content {
        position: relative;
        max-width: 1320px;
        min-height: 0;
        aspect-ratio: 1170 / 483;
        margin: 0 auto;
        border-radius: 18px;
        overflow: hidden;
        display: flex;
        align-items: center;
        background: #e6eff2;
    }
    .hero-doc-img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
    .hero-section__copy { position: relative; z-index: 1; width: 49%; padding: 5% 0 5% 6.8%; }
    .hero-section h1 { margin: 0; font-size: clamp(24px, 3.25vw, 56px); font-weight: 800; letter-spacing: -.035em; line-height: 1.17; }
    .hero-section p { max-width: 95%; margin: 24px 0 32px; color: #253238; font-size: clamp(11px, 1.12vw, 16px); line-height: 1.65; text-align: justify; }
    .hero-section__dots {
        position: absolute;
        left: 50%;
        top: 16%;
        width: 9%;
        aspect-ratio: 1;
        object-fit: contain;
    }
    .hero-section__actions { display: flex; flex-wrap: wrap; gap: 18px; }
    .hero-section__button { display: inline-flex; justify-content: center; align-items: center; border: 1px solid transparent; border-radius: 999px; padding: 15px 31px; font-size: clamp(11px, 1vw, 14px); font-weight: 700; text-decoration: none; }
    .hero-section__button--primary { background: #20b3b5; color: #fff; }
    .hero-section__button--secondary { background: transparent; border-color: #afc3ca; color: #18313b; }
    .hero-section__button:hover { filter: brightness(.93); }
    .hero-section__button:focus-visible { outline: 3px solid #102d55; outline-offset: 4px; }
    @media (max-width: 900px) {
        .hero-section__content { border-radius: 12px; }
        .hero-section p { margin: 12px 0 16px; }
        .hero-section__actions { gap: 10px; }
        .hero-section__button { padding: 9px 17px; }
    }
    @media (max-width: 600px) {
        .hero-section { padding: 40px 28px 37px; }
        .hero-section__left { clip-path: polygon(0 0, 61% 0, 48% 100%, 0 100%); }
        .hero-section__content { min-height: 350px; aspect-ratio: auto; align-items: flex-start; background: rgba(244, 249, 250, .9); }
        .hero-doc-img { display: none; }
        .hero-section__copy { width: 100%; padding: 44px 24px 28px; }
        .hero-section h1 { font-size: clamp(22px, 5.5vw, 32px); }
        .hero-section p { max-width: 100%; font-size: 12px; margin: 20px 0; text-align: justify; }
        .hero-section__button { padding: 12px 27px; }
        .hero-section__dots { display: none; }
    }
</style>
