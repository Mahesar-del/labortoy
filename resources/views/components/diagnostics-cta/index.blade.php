<section class="diagnostics-cta" aria-labelledby="diagnostics-cta-title">
    <div class="diagnostics-cta__container">
        <div class="diagnostics-cta__card">
            <img class="diagnostics-cta__decoration diagnostics-cta__decoration--left" src="{{ asset('img/cta-section-right.svg') }}" alt="">
            <img class="diagnostics-cta__decoration diagnostics-cta__decoration--right" src="{{ asset('img/cta-section-left.svg') }}" alt="">

            <div class="diagnostics-cta__content">
                <h2 id="diagnostics-cta-title">Better Diagnostics Start Here</h2>
                <p>Access reliable laboratory testing backed by advanced technology, scientific expertise, and a commitment to accurate results.</p>
                <div class="diagnostics-cta__actions">
                    <a class="diagnostics-cta__button diagnostics-cta__button--primary" href="#services">Our Services</a>
                    <a class="diagnostics-cta__button diagnostics-cta__button--secondary" href="#contact">Contact Our Team</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .diagnostics-cta, .diagnostics-cta * { box-sizing: border-box; }
    .diagnostics-cta { padding: 42px 99px; background: #fff; width: 100%; }
    .diagnostics-cta__container { width: 100%; max-width: 1320px; margin: 0 auto; }
    .diagnostics-cta__card { align-items: center; background: #0B2545; border-radius: 18px; color: #fff; display: flex; justify-content: center; min-height: 330px; overflow: hidden; padding: 42px 24px; position: relative; text-align: center; }
    .diagnostics-cta__content { max-width: 880px; position: relative; z-index: 1; }
    .diagnostics-cta h2 { font-size: clamp(24px, 2.2vw, 40px); margin: 0; }
    .diagnostics-cta p { font-size: clamp(14px, 1.15vw, 22px); line-height: 1.6; margin: 24px auto 34px; max-width: 800px; }
    .diagnostics-cta__actions { display: flex; flex-wrap: wrap; gap: 16px; justify-content: center; }
    .diagnostics-cta__button { border: 1px solid transparent; border-radius: 999px; color: #fff; font-size: clamp(14px, 1vw, 20px); font-weight: 700; padding: 18px 48px; text-decoration: none; }
    .diagnostics-cta__button--primary { background: #20b3b5; }
    .diagnostics-cta__button--secondary { border-color: rgba(255,255,255,.65); }
    .diagnostics-cta__decoration { bottom: 0; height: 64%; max-width: 23%; object-fit: contain; object-position: bottom; position: absolute; width: auto; }
    .diagnostics-cta__decoration--left { left: 0; }
    .diagnostics-cta__decoration--right { right: 0; }
    @media (max-width: 900px) {
        .diagnostics-cta { padding: 32px; }
    }
    @media (max-width: 600px) {
        .diagnostics-cta { padding: 20px; }
        .diagnostics-cta__card { border-radius: 16px; min-height: 300px; }
        .diagnostics-cta h2 { font-size: 22px; }
        .diagnostics-cta p { font-size: 12px; margin: 18px auto 24px; }
        .diagnostics-cta__button { font-size: 12px; padding: 12px 20px; }
        .diagnostics-cta__decoration { opacity: .55; }
    }
</style>
