<section class="hero-section" aria-labelledby="hero-title">
    <div class="hero-section__background" aria-hidden="true">
        <img class="hero-bg-img-right" src="{{ asset('img/hero-bg-img-right.jpg') }}" alt="">
        <div class="hero-section__left">
            <img class="hero-bg-img-left" src="{{ asset('img/hero-bg-img-left.png') }}" alt="">
        </div>
    </div>

    <div class="hero-section__content" aria-live="polite">
        <img class="hero-doc-img" src="{{ !empty($hero) && !empty($hero->image_path) ? asset('storage/' . $hero->image_path) : asset('img/hero-doc-img.png') }}" alt="Laboratory scientist examining a sample">
        <img class="hero-section__dots" src="{{ asset('img/dots-hero.png') }}?v={{ filemtime(public_path('img/dots-hero.png')) }}" alt="">
        <div class="hero-section__copy">
            <h1 id="hero-title">{!! nl2br(e($hero->heading ?? 'Precision Diagnostics. Better Answers for Better Care.')) !!}</h1>
            <p>{{ $hero->description ?? 'Sterling Genomic, Molecular & Clinical Diagnostics is a U.S. laboratory providing accurate, science-driven testing for patients and providers.' }}</p>
            <div class="hero-section__actions">
                <a class="hero-section__button hero-section__button--primary" href="{{ $hero->primary_button_link ?? '#services' }}">{{ $hero->primary_button_text ?? 'Our Services' }}</a>
                <a class="hero-section__button hero-section__button--secondary" href="{{ $hero->secondary_button_link ?? '#contact' }}">{{ $hero->secondary_button_text ?? 'Contact Us' }}</a>
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
        will-change: transform, opacity;
    }
    .hero-section__content--leaving { animation: hero-slide-out .7s ease-in both; }
    .hero-section__content--entering { animation: hero-slide-in .7s ease-out both; }
    @keyframes hero-slide-out { to { opacity: 0; transform: translateY(-115%); } }
    @keyframes hero-slide-in { from { opacity: 0; transform: translateY(115%); } to { opacity: 1; transform: translateY(0); } }
    .hero-doc-img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
    .hero-section__copy { position: relative; z-index: 1; width: 49%; padding: 5% 0 5% 6.8%; }
    .hero-section h1 { margin: 0; font-size: clamp(24px, 3.25vw, 56px); font-weight: 800; letter-spacing: -.035em; line-height: 1.17; }
    .hero-section p { max-width: 95%; margin: 24px 0 32px; color: #000; font-size: 16px; line-height: 1.65; text-align: justify; }
    .hero-section__dots {
        position: absolute;
        left: 50%;
        top: 16%;
        width: 9%;
        aspect-ratio: 1;
        display: block;
        object-fit: contain;
        transform: rotate(43deg);
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
        .hero-section { padding: 20px 10px; }
        .hero-section__left { clip-path: polygon(0 0, 70% 0, 40% 100%, 0 100%); }
        .hero-section__content { 
            min-height: 450px; 
            aspect-ratio: auto; 
            align-items: center; 
            background: transparent; 
        }
        .hero-doc-img { 
            display: none; 
        }
        .hero-section__copy { 
            width: 100%; 
            padding: 40px 20px; 
            margin: 0; 
            background: linear-gradient(135deg, rgba(244, 249, 250, 0.95), rgba(244, 249, 250, 0.85));
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }
        .hero-section h1 { 
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            font-size: 28px; 
            line-height: 38px;
            letter-spacing: 0px;
            color: #0B2545;
        }
        .hero-section h1 br {
            display: none;
        }
        .hero-section p { 
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 16px !important;
            line-height: 30px;
            letter-spacing: 0px;
            text-align: justify;
            color: #222222;
            max-width: 100%;
            margin: 20px 0 25px 0;
        }
        .hero-section__actions { flex-wrap: nowrap; gap: 12px; }
        .hero-section__button { padding: 12px 18px; font-size: 12px; flex: 1; text-align: center; border-radius: 30px; }
        .hero-section__button--primary { background-color: #22B6AF; }
        .hero-section__button--secondary { border: 0.71px solid #828282; }
        .hero-section__dots { display: none; }
    }
    @media (prefers-reduced-motion: reduce) {
        .hero-section__content--leaving, .hero-section__content--entering { animation: none; }
    }
</style>

<script>
    (() => {
        const hero = document.querySelector('.hero-section');
        if (!hero || hero.dataset.sliderReady) return;
        hero.dataset.sliderReady = 'true';

        const slides = [
            {
                title: @json(nl2br(e($hero->heading ?? 'Precision Diagnostics. Better Answers for Better Care.'))),
                description: @json(e($hero->description ?? 'Sterling Genomic, Molecular & Clinical Diagnostics is a U.S. laboratory providing accurate, science-driven testing for patients and providers.')),
                docImage: @json(!empty($hero) && !empty($hero->image_path) ? asset('storage/' . $hero->image_path) : asset('img/hero-doc-img.png')),
                bgLeft: '{{ asset('img/hero-bg-img-left.png') }}',
                bgRight: '{{ asset('img/hero-bg-img-right.jpg') }}'
            }
        ];

        slides.forEach(({ docImage }) => {
            const image = new Image();
            image.src = docImage;
        });

        const content = hero.querySelector('.hero-section__content');
        const title = hero.querySelector('#hero-title');
        const description = hero.querySelector('.hero-section__copy p');
        const doctorImage = hero.querySelector('.hero-doc-img');
        const leftImage = hero.querySelector('.hero-bg-img-left');
        const rightImage = hero.querySelector('.hero-bg-img-right');
        let index = 0;
        let changing = false;

        const showSlide = () => {
            if (changing) return;
            changing = true;
            content.classList.add('hero-section__content--leaving');

            window.setTimeout(() => {
                index = (index + 1) % slides.length;
                const next = slides[index];
                title.innerHTML = next.title;
                description.innerHTML = next.description;
                doctorImage.src = next.docImage;
                leftImage.src = next.bgLeft;
                rightImage.src = next.bgRight;
                content.classList.remove('hero-section__content--leaving');
                content.classList.add('hero-section__content--entering');

                window.setTimeout(() => {
                    content.classList.remove('hero-section__content--entering');
                    changing = false;
                }, 700);
            }, 700);
        };

        if (slides.length > 1 && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            let sliderTimer;
            const startSlider = () => {
                if (!sliderTimer) sliderTimer = window.setInterval(showSlide, 3500);
            };
            const stopSlider = () => {
                window.clearInterval(sliderTimer);
                sliderTimer = undefined;
            };

            content.addEventListener('pointerenter', stopSlider);
            content.addEventListener('pointerleave', startSlider);
            startSlider();
        }
    })();
</script>
