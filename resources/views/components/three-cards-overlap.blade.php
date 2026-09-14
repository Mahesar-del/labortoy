<section class="three-cards-overlap" aria-labelledby="tco-title">
    <div class="tco-backdrop" aria-hidden="true" style="background-image: linear-gradient(90deg, rgba(7, 26, 49, .58), rgba(7, 26, 49, .48)), url('{{ $backgroundImage ?? asset('images/why-genomic.jpg') }}');"></div>

    <div class="tco-container">
        <header class="tco-header">
            <h2 id="tco-title">{{ $title }}</h2>
            <p>{!! $description !!}</p>
        </header>

        <div class="tco-cards">
            @foreach($cards as $card)
            <article class="tco-card" style="{{ isset($cardGradient) ? 'background: ' . $cardGradient . ';' : '' }}">
                <span class="tco-icon" aria-hidden="true" style="{{ isset($iconBackground) ? 'background-image: url(' . $iconBackground . '); background-size: cover; background-color: transparent;' : '' }}">
                    <img src="{{ $card['icon'] }}" alt="">
                </span>
                <h3>{{ $card['title'] }}</h3>
                <p>{{ $card['text'] }}</p>
            </article>
            @endforeach
        </div>
    </div>
</section>

<style>
    .three-cards-overlap, .three-cards-overlap * { box-sizing: border-box; }
    .three-cards-overlap { background: #fff; isolation: isolate; overflow: hidden; padding: 48px 7% 64px; position: relative; }
    .tco-backdrop { background-position: center 43%; background-repeat: no-repeat; background-size: cover; height: clamp(250px, 21vw, 290px); inset: 0 0 auto; position: absolute; z-index: 0; width: 100%; }
    .tco-container { margin: 0 auto; max-width: 1239px; position: relative; z-index: 1; }
    .tco-header { color: #fff; margin: 0 auto 34px; max-width: 760px; text-align: center; }
    .tco-header h2 { font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(26px, 2.05vw, 35px); font-weight: 700; letter-spacing: -.03em; line-height: 1.2; margin: 0 0 10px; }
    .tco-header p { font-family: 'Inter', sans-serif; font-size: clamp(13px, .95vw, 15px); line-height: 1.5; margin: 0; opacity: .96; }
    .tco-cards { display: grid; gap: 24px; grid-template-columns: repeat(3, minmax(0, 1fr)); }
    .tco-card { background: linear-gradient(180deg, rgba(207, 225, 248, .98) 0%, rgba(135, 177, 224, .98) 42%, rgba(28, 104, 190, .98) 100%); border: 1px solid rgba(255, 255, 255, .3); border-radius: 20px; color: #fff; min-height: 254px; padding: 32px 24px; box-shadow: 0 14px 28px rgba(0, 18, 44, .18); display: flex; flex-direction: column; }
    .tco-icon { align-items: center; background: #0a2b55; border-radius: 9px; color: #fff; display: inline-flex; height: 48px; justify-content: center; margin-bottom: 23px; width: 48px; border: 1px solid rgba(255,255,255,0.4); }
    .tco-icon img { height: 24px; object-fit: contain; width: 24px; }
    .tco-card h3 { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 18px; font-weight: 700; letter-spacing: -.02em; line-height: 1.28; margin: 0 0 12px; }
    .tco-card p { font-family: 'Inter', sans-serif; font-size: 14px; line-height: 1.6; margin: 0; }
    @media (max-width: 760px) {
        .three-cards-overlap { padding: 5px 28px 48px; }
        .tco-backdrop { display: none; }
        .tco-header { color: #111820; margin-bottom: 28px; max-width:258px; }
        .tco-cards { grid-template-columns: 1fr; }
        .tco-card { min-height: 0; align-items: center; text-align: center; }
        .tco-icon { margin-left: auto; margin-right: auto; }
    }
</style>
