<section class="services-hero" aria-labelledby="services-hero-title">
    <div class="services-hero__background" style="background-image: url('{!! $bgImage ?? asset('img/genomic-diagnostics-hero.png') !!}');"></div>
    <div class="services-hero__overlay"></div>

    <div class="services-hero__container">
        <div class="services-hero__content">
            <h1 id="services-hero-title">{!! $title ?? 'Genomic<br>Diagnostics' !!}</h1>
            <p>{{ $description ?? 'Advanced genomic testing that helps identify genetic variation, understand disease risk, and support more informed clinical decisions.' }}</p>
            @if(($showButton ?? true) !== false)
                <a class="services-hero__button" href="{{ $buttonLink ?? route('appointment.index') }}">{{ $buttonText ?? 'Book an Appointment' }}</a>
            @endif
        </div>
    </div>
</section>

<style>
    .services-hero, .services-hero * { box-sizing: border-box; }
    .services-hero { background: #020b1c; color: #fff; isolation: isolate; min-height: 360px; overflow: hidden; position: relative; width:100%; max-width:none; margin:0; }
    .services-hero__background, .services-hero__overlay { height: 100%; inset: 0; position: absolute; width: 100%; }
    .services-hero__background { background-position: center 15%; background-repeat: no-repeat; background-size: cover; z-index: -2; }
    .services-hero__overlay { background: linear-gradient(90deg, rgba(7,26,49,.96) 0%, rgba(7,26,49,.86) 48%, rgba(7,26,49,.25) 100%); z-index: -1; }
    .services-hero__container { align-items: center; display: flex; margin: 0 auto; max-width: 1518px; min-height: 420px; padding: 40px 99px 60px 99px; box-sizing: border-box; width: 100%; }
    .services-hero__content { max-width: 700px; }
    .services-hero h1 { font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 800; font-size: 46px; line-height: 58px; letter-spacing: 0px; color: #FFFFFF; margin: 0; }
    .services-hero p { font-family: 'Inter', sans-serif; font-weight: 400; font-size: 18px; line-height: 30px; letter-spacing: 0px; color: #D9E5EE; margin: 25px 0 30px; }
    /* Keep the appointment CTA styled even when a browser has a visited-link style cached. */
    .services-hero a.services-hero__button,
    .services-hero a.services-hero__button:visited {
        align-items: center;
        background: #20b3b5 !important;
        border: 0;
        border-radius: 999px;
        color: #fff !important;
        display: inline-flex;
        font-size: 14px;
        font-weight: 700;
        justify-content: center;
        min-height: 54px;
        padding: 0 26px;
        text-decoration: none !important;
    }
    .services-hero__button:hover { filter: brightness(.94); }
    .services-hero__button:focus-visible { outline: 3px solid #fff; outline-offset: 4px; }
    @media (max-width: 1050px) {
        .services-hero { width:100%; }
    }
    @media (max-width: 700px) {
        .services-hero { padding: 0; min-height: 400px; }
        .services-hero__container { min-height: 400px; align-items: flex-end; justify-content: flex-start; padding: 10vw 5vw 10vw 5vw; }
        .services-hero__overlay { background: rgba(7, 26, 49, 0.75); }
        .services-hero__content { max-width: 100%; display: block; }
        .services-hero h1 { font-size: 28px; line-height: 38px; text-align: left; color: #FFFFFF; font-weight: 800; }
        .services-hero p { font-size: 16px; line-height: 24px; text-align: justify; color: #D9E5EE; margin: 6vw 0 6vw; font-weight: 400; }
        .services-hero__button { display: inline-flex; }
    }
</style>
