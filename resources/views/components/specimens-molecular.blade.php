<section class="specimens-section" aria-labelledby="specimens-title">
    <div class="specimens-backdrop"></div>
    <div class="specimens-container">
        <div class="specimens-content">
            <h2 id="specimens-title">{{ $service->help_heading ?? ($specimens['heading'] ?? 'Service Highlights') }}</h2>
            <p>{{ $service->help_description ?? ($specimens['description'] ?? 'Explore key areas where this laboratory service can support clinical decision-making.') }}</p>
        </div>
        <div class="specimens-grid">
            @php($serviceCards = !empty($service->help_cards) ? json_decode($service->help_cards, true) : null)
            @foreach($serviceCards ?: collect($specimens['card_heading'] ?? ['Blood','Swab','Tissue','Other Specimens'])->map(function($heading, $index) use ($specimens) { return ['heading' => $heading, 'description' => $specimens['card_description'][$index] ?? '']; })->all() as $card)
            <article class="specimen-card"><h3>{{ $card['heading'] }}</h3><p>{{ $card['description'] }}</p></article>
            @endforeach
        </div>
    </div>
</section>

<style>
    .specimens-section, .specimens-section * { box-sizing: border-box; }
    .specimens-section {
        position: relative;
        padding: clamp(56px, 6vw, 88px) 7%;
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
        grid-template-columns: minmax(0, .92fr) minmax(520px, 1.08fr);
        gap: clamp(42px, 6vw, 88px);
        max-width: 1440px;
        margin: 0 auto;
        align-items: center;
    }

    .specimens-content h2 {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: clamp(28px, 2.4vw, 40px);
        font-weight: 700;
        line-height: 1.15;
        margin-top: 0;
        margin-bottom: 18px;
        letter-spacing: 0px;
        color: #ffffff;
    }

    .specimens-content p {
        font-family: 'Inter', sans-serif;
        font-size: 15px;
        font-weight: 400;
        line-height: 1.7;
        text-align: left;
        margin: 0;
        color: #ffffff;
    }

    .specimens-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
    }

    .specimen-card {
        background: #ffffff;
        border: 1px solid rgba(255,255,255,.75);
        border-radius: 14px;
        min-height: 156px;
        padding: 25px 24px;
        color: #000000;
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }

    .specimen-card h3 {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 19px;
        font-weight: 700;
        line-height: 1.25;
        margin: 0 0 10px;
        color: #000000;
        letter-spacing: 0px;
    }

    .specimen-card p {
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.5;
        margin: 0;
        color: #000000;
        letter-spacing: 0px;
    }

    @media (max-width: 1050px) {
        .specimens-container {
            grid-template-columns: 1fr;
            gap: 32px;
        }
    }

    @media (max-width: 600px) {
        .specimens-section {
            padding: 52px 24px;
        }
        .specimens-grid {
            grid-template-columns: 1fr;
        }
        .specimen-card { min-height: 0; }
    }
</style>
