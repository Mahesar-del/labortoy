<section class="services-hero" aria-labelledby="services-hero-title">
    <div class="services-hero__background" style="background-image: url('{!! $bgImage ?? asset('img/genomic-diagnostics-hero.png') !!}');"></div>
    <div class="services-hero__overlay"></div>

    <div class="services-hero__container">
        <div class="services-hero__content">
            <h1 id="services-hero-title">{!! $title ?? 'Genomic<br>Diagnostics' !!}</h1>
            <p>{{ $description ?? 'Advanced genomic testing that helps identify genetic variation, understand disease risk, and support more informed clinical decisions.' }}</p>
            <a class="services-hero__button" href="{{ route('appointment.index') }}">Book an Appointment</a>
        </div>
    </div>
</section>

<style>
    .services-hero, .services-hero * { box-sizing: border-box; }
    .services-hero { background: #020b1c; color: #fff; isolation: isolate; min-height: 360px; overflow: hidden; position: relative; padding: 0 99px; width: 100%; box-sizing: border-box; }
    .services-hero__background, .services-hero__overlay { height: 100%; inset: 0; position: absolute; width: 100%; }
    .services-hero__background { background-position: center; background-repeat: no-repeat; background-size: 100% 100%; z-index: -2; }
    .services-hero__overlay { background: linear-gradient(90deg, rgba(7,26,49,.96) 0%, rgba(7,26,49,.86) 48%, rgba(7,26,49,.25) 100%); z-index: -1; }
    .services-hero__container { align-items: center; display: flex; margin: 0 auto; max-width: 1320px; min-height: 360px; padding: 40px 0; box-sizing: border-box; width: 100%; }
    .services-hero__content { max-width: 700px; }
    .services-hero h1 { font-size: clamp(34px, 3.1vw, 56px); letter-spacing: -.04em; line-height: 1.1; margin: 0; }
    .services-hero p { color: rgba(255,255,255,.84); font-size: clamp(14px, 1vw, 17px); line-height: 1.7; margin: 25px 0 30px; }
    .services-hero__button { background: #20b3b5; border-radius: 999px; color: #fff; display: inline-block; font-size: 14px; font-weight: 700; padding: 15px 25px; text-decoration: none; }
    .services-hero__button:hover { filter: brightness(.94); }
    .services-hero__button:focus-visible { outline: 3px solid #fff; outline-offset: 4px; }
    @media (max-width: 700px) {
        .services-hero { padding: 0; min-height: 400px; }
        .services-hero__container { min-height: 400px; align-items: flex-end; justify-content: flex-start; padding: 40px 20px; }
        .services-hero__overlay { background: rgba(7, 26, 49, 0.75); }
        .services-hero__content { max-width: 100%; display: block; }
        .services-hero h1 { font-size: 28px; line-height: 38px; text-align: left; color: #FFFFFF; font-weight: 700; }
        .services-hero p { font-size: 16px; line-height: 30px; text-align: justify; color: #D9E5EE; margin: 16px 0 0; font-weight: 400; }
        .services-hero__button { display: none; }
    }
</style>
