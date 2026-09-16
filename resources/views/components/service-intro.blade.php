@php
    $introBullets = !empty($service->intro_bullets)
        ? preg_split('/\r\n|\r|\n/', $service->intro_bullets)
        : ['Supports accurate clinical assessment.', 'Uses reliable laboratory testing methods.', 'Designed around practical clinical needs.'];
    $introImagePath = ltrim((string) ($service->intro_image ?? ''), '/');
    $introImageExists = $introImagePath !== ''
        && \Illuminate\Support\Facades\Storage::disk('public')->exists($introImagePath);
    $introFallbackImage = ($service->slug ?? '') === 'chemistry-testing'
        ? asset('images/chemistry-card-bg.jpg')
        : asset('images/understanding-genomic.jpg');
    $introImageUrl = $introImageExists
        ? asset('storage/'.$introImagePath)
        : $introFallbackImage;
@endphp

<section class="dynamic-intro">
    <div class="dynamic-intro__inner">
        <div>
            <h2>{{ $service->intro_heading ?: 'Understanding '.$service->name }}</h2>
            <p>{{ $service->intro_description ?: $service->summary }}</p>
            <ul>
                @foreach($introBullets as $bullet)
                    @if(trim($bullet))
                        <li>{{ $bullet }}</li>
                    @endif
                @endforeach
            </ul>
        </div>
        <img src="{{ $introImageUrl }}" alt="{{ $service->name }}">
    </div>
</section>

<style>
.dynamic-intro{background:#fff;padding:45px 0}.dynamic-intro__inner{align-items:stretch;display:grid;gap:70px;grid-template-columns:1.1fr .8fr;margin:auto;max-width:1440px;padding:0 7%}.dynamic-intro h2{color:#071e38;font:700 clamp(28px,3vw,40px) Arial;margin:0 0 20px}.dynamic-intro p,.dynamic-intro li{color:#182c3e;font:17px/1.7 Arial}.dynamic-intro p{margin:0 0 22px}.dynamic-intro ul{margin:0;padding-left:22px}.dynamic-intro img{border-radius:18px;height:100%;min-height:360px;object-fit:cover;width:100%}@media(max-width:700px){.dynamic-intro__inner{gap:30px;grid-template-columns:1fr;padding:0 28px}.dynamic-intro img{min-height:250px;order:-1}}
</style>
<style>.dynamic-intro p{white-space:pre-line}</style>
