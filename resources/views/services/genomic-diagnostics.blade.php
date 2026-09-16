<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chemistry Testing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>html, body { max-width: 100%; overflow-x: hidden; } body { margin: 0; font-family: 'Manrope', sans-serif; }</style>
</head>
<body>
    @include('components.header')
    @include('components.services-hero', ['title' => nl2br(e($service->hero_heading ?? 'Chemistry Testing')), 'description' => $service->hero_description ?? 'Accurate chemistry testing that supports diagnosis, monitoring, and informed clinical decisions.', 'buttonText' => $service->button_text ?? 'Book an Appointment', 'buttonLink' => $service->button_link ?? '/appointment', 'bgImage' => !empty($service->hero_image) ? asset('storage/'.$service->hero_image) : asset('images/clinical-test.png')])
    
    <section class="understanding-genomic" aria-labelledby="understanding-genomic-title">
        <div class="understanding-genomic__container">
            <div class="understanding-genomic__content">
                <h2 id="understanding-genomic-title">Understanding Chemistry Testing</h2>
                <p>Chemistry testing provides important laboratory information used to assess metabolic health, organ function, and other key clinical indicators. At Sterling, routine chemistry testing is performed using established laboratory methods and appropriate analyzers to support consistent and reliable results. Our chemistry testing menu is determined by clinical demand, laboratory capabilities, and the selected analyzer, allowing testing services to remain focused on practical clinical needs.</p>
                <ul class="chemistry-points">
                    <li>Supports metabolic and organ health assessment.</li>
                    <li>Uses reliable laboratory testing methods.</li>
                    <li>Based on clinical needs and analyser capabilities.</li>
                </ul>
            </div>
    
            <img class="understanding-genomic__image" src="{{ asset('images/understanding-genomic.jpg') }}" alt="Child receiving care in a hospital room">
        </div>
    </section>

    @if($tests->isNotEmpty())
    <section class="assigned-tests"><h2>Available Tests</h2><div class="assigned-tests__grid">@foreach($tests as $test)<article class="assigned-test">@if($test->image_path)<img src="{{ asset('storage/'.$test->image_path) }}" alt="{{ $test->name }}">@endif<div><h3>{{ $test->heading ?: $test->name }}</h3><p>{{ $test->description }}</p></div></article>@endforeach</div></section>
    <style>.assigned-tests{max-width:1240px;margin:20px auto 60px;padding:0 99px}.assigned-tests h2{color:#102d55}.assigned-tests__grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px}.assigned-test{overflow:hidden;border-radius:18px;background:#09243f;color:#fff}.assigned-test img{width:100%;height:190px;object-fit:cover;display:block}.assigned-test div{padding:18px}.assigned-test h3{margin:0 0 8px}.assigned-test p{margin:0;color:#d8e6ee;line-height:1.6}@media(max-width:700px){.assigned-tests{padding:0 28px}.assigned-tests__grid{grid-template-columns:1fr}}</style>
    @endif

    @if($testPages->isNotEmpty())
    <section class="test-pages-section"><h2>Detailed Test Guides</h2><div class="test-pages__grid">@foreach($testPages as $tp)<a href="{{ route('test-pages.show', $tp->slug) }}" class="test-page-card">@if($tp->bg_image)<img src="{{ asset('storage/'.$tp->bg_image) }}" alt="{{ $tp->title }}">@endif<div><h3>{{ $tp->title }}</h3><p>{{ Str::limit($tp->description, 100) }}</p><span>View Details →</span></div></a>@endforeach</div></section>
    <style>.test-pages-section{max-width:1240px;margin:20px auto 60px;padding:0 99px}.test-pages-section h2{color:#102d55; margin-bottom: 20px; font-size: 28px;}.test-pages__grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px}.test-page-card{text-decoration:none; display:flex; flex-direction:column; overflow:hidden;border-radius:18px;background:#fff;border:1px solid #e1ebf2;color:#12304c;transition:transform 0.2s, box-shadow 0.2s}.test-page-card:hover{transform:translateY(-5px);box-shadow:0 10px 25px rgba(0,0,0,0.05)}.test-page-card img{width:100%;height:180px;object-fit:cover;display:block}.test-page-card div{padding:20px; flex-grow:1; display:flex; flex-direction:column;}.test-page-card h3{margin:0 0 10px; font-size:20px; color:#0f2b4c}.test-page-card p{margin:0 0 15px; color:#5c748c; line-height:1.6; font-size:14px; flex-grow:1}.test-page-card span{color:#16b9a7; font-weight:700; font-size:14px;}@media(max-width:700px){.test-pages-section{padding:0 28px}.test-pages__grid{grid-template-columns:1fr}}</style>
    @endif
    
    <style>
        .understanding-genomic, .understanding-genomic * { box-sizing: border-box; }
        .understanding-genomic { background: #fff; padding: 25px 0; }
        .understanding-genomic__container { align-items: stretch; display: grid; gap: clamp(36px, 7vw, 110px); grid-template-columns: minmax(0, 1.05fr) minmax(320px, .85fr); margin: 0 auto; max-width: 1440px; padding: 0 99px; }
        .understanding-genomic__content { max-width: 650px; }
        .understanding-genomic h2 { color: #000; font-size: clamp(24px, 2vw, 34px); letter-spacing: -.03em; line-height: 1.2; margin: 0 0 22px; text-align: justify; }
        .understanding-genomic p { color: #000; font-size: clamp(14px, 1vw, 16px); line-height: 1.75; margin: 0 0 20px; text-align: justify; }
        .understanding-genomic p:last-child { margin-bottom: 0; }
        .chemistry-points { color: #000; font-size: clamp(14px, 1vw, 16px); line-height: 1.75; margin: 0; padding-left: 22px; }
        .understanding-genomic__image { align-self: stretch; border-radius: 18px; display: block; height: 100%; min-height: 100%; object-fit: cover; overflow: hidden; width: 100%; }
        @media (max-width: 700px) { .understanding-genomic { padding: 52px 0; } .understanding-genomic__container { padding: 0 28px; gap: 30px; grid-template-columns: 1fr; } .understanding-genomic h2 { text-align: left; } .understanding-genomic__image { order: -1; height: auto; min-height: 0; } }
    </style>
    
    @include('components.chemistry-testing-services')
    
    @php
        $genomicServices = [
            [
                'title' => 'Hereditary Cancer Genetics',
                'image' => 'images/genomic-services/hereditary-cancer.png',
                'description' => 'Evaluate inherited genetic changes that may increase the risk of developing certain cancers. These tests help identify hereditary cancer syndromes and support personalized screening plans or risk-reduction decisions.',
                'items' => ['BRCA1 & BRCA2 Testing', 'Breast & Ovarian Cancer Panel', 'Lynch Syndrome Panel Testing', 'Hereditary Cancer Gene Panels', 'Familial Cancer Genetic Testing'],
            ],
            [
                'title' => 'Cardiovascular Genetics',
                'image' => 'images/genomic-services/cardiovascular-genetics.png',
                'description' => 'Detect inherited genetic variants associated with cardiovascular conditions, arrhythmias, cardiomyopathies, and more. Early genetic insights help guide preventive care and personalized treatment.',
                'items' => ['Cardiomyopathy Gene Panel', 'Arrhythmia & Long QT Panel', 'Aortopathy Gene Panel Testing', 'Familial Hypercholesterolemia Testing', 'Sudden Cardiac Death Panel', 'Hereditary Arrhythmia Panel'],
            ],
            [
                'title' => 'Neurogenetics',
                'image' => 'images/genomic-services/neurogenetics.png',
                'description' => 'Explore genetic causes of inherited neurological and neuromuscular disorders. Neurogenetic testing can provide valuable information for diagnosis, disease classification, and family risk assessment.',
                'items' => ['Epilepsy Gene Panel', 'Neuromuscular Disorders Panel', 'Hereditary Neuropathy Panel', 'Ataxia & Movement Disorder Panel', 'Neurodegenerative Disease Testing', 'Mitochondrial Disorders Testing'],
            ],
            [
                'title' => 'Pharmacogenomics',
                'image' => 'images/genomic-services/pharmacogenomics.png',
                'description' => 'Analyze genetic variations that may influence how an individual responds to certain medications. Pharmacogenomic testing can help healthcare providers make more informed medication and dosing decisions.',
                'items' => ['Comprehensive Pharmacogenomic Panel', 'CYP450 Gene Testing', 'Psychiatric Drug Testing', 'Cardiovascular Drug Testing', 'Oncology Pharmacogenetics', 'Targeted Medication Testing'],
            ],
            [
                'title' => 'Reproductive & Prenatal Genetics',
                'image' => 'images/genomic-services/reproductive-prenatal.png',
                'description' => 'Provide genetic insights before and during pregnancy to help assess inherited risks, reproductive options, and family planning support. These tests help prospective parents understand potential genetic concerns and make informed decisions.',
                'items' => ['Expanded Carrier Screening', 'Cystic Fibrosis Carrier Screening', 'Spinal Muscular Atrophy (SMA) Carrier Screening', 'Fragile X Carrier Screening', 'Prenatal Chromosomal Screening', 'Preconception & Pregnancy Testing'],
            ],
        ];
    @endphp
    
    {{-- Temporarily hidden at the client's request; content is preserved for later use. --}}
    {{-- <section class="genomic-testing-services" aria-labelledby="genomic-testing-services-title">
        <div class="genomic-testing-services__container">
            <header class="genomic-testing-services__header">
                <h2 id="genomic-testing-services-title">Genomic Testing Services</h2>
                <p>Explore genomic testing categories designed to support different diagnostic and clinical needs.</p>
            </header>
    
            <div class="genomic-testing-services__list">
                @foreach ($genomicServices as $index => $service)
                    <article class="genomic-service-detail {{ $index % 2 ? 'genomic-service-detail--reversed' : '' }}">
                        <div class="genomic-service-detail__content">
                            <h3>{{ $service['title'] }}</h3>
                            <p>{{ $service['description'] }}</p>
                            <ul>
                                @foreach ($service['items'] as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
    
                        <img class="genomic-service-detail__image" src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}">
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    
    <style>
        .genomic-testing-services, .genomic-testing-services * { box-sizing: border-box; }
        .genomic-testing-services { background: #fff; padding: 12px 0 40px; }
        .genomic-testing-services__container { margin: 0 auto; max-width: 1440px; padding: 0 99px; }
        .genomic-testing-services__header { margin: 0 auto 54px; max-width: 720px; text-align: center; }
        .genomic-testing-services h2 { color: #101827; font-size: clamp(24px, 2vw, 34px); letter-spacing: -.03em; line-height: 1.2; margin: 0 0 12px; }
        .genomic-testing-services__header p { color: #3e4855; font-size: clamp(13px, .95vw, 15px); line-height: 1.6; margin: 0; }
        .genomic-testing-services__list { display: grid; gap: 10px }
        .genomic-service-detail { align-items: center; display: grid; gap: clamp(40px, 8vw, 140px); grid-template-columns: minmax(0, 1fr) minmax(330px, .9fr); }
        .genomic-service-detail--reversed .genomic-service-detail__content { grid-column: 2; grid-row: 1; }
        .genomic-service-detail--reversed .genomic-service-detail__image { grid-column: 1; grid-row: 1; }
        .genomic-service-detail__content { max-width: 640px; padding-top: 28px; }
        .genomic-service-detail h3 { color: #121820; font-size: clamp(22px, 1.7vw, 29px); letter-spacing: -.025em; line-height: 1.25; margin: 0 0 18px; }
        .genomic-service-detail__content > p { color: #242c37; font-size: clamp(13px, .95vw, 15px); line-height: 1.7; margin: 0 0 22px; text-align: justify; }
        .genomic-service-detail ul { color: #151b24; font-size: clamp(13px, .95vw, 15px); line-height: 1.65; margin: 0; padding-left: 19px; }
        .genomic-service-detail__image { aspect-ratio: 1.38 / 1; border-radius: 18px; display: block; object-fit: cover; overflow: hidden; width: 100%; }
        @media (max-width: 700px) {
            .genomic-testing-services { padding: 22px 0 56px; }
            .genomic-testing-services__container { padding: 0 28px; }
            .genomic-testing-services__header { margin-bottom: 38px; }
            .genomic-testing-services__list { gap: 56px; }
            .genomic-service-detail, .genomic-service-detail--reversed { gap: 30px; grid-template-columns: 1fr; }
            .genomic-service-detail__content, .genomic-service-detail--reversed .genomic-service-detail__content { grid-column: 1; grid-row: 2; padding-top: 0; }
            .genomic-service-detail__image, .genomic-service-detail--reversed .genomic-service-detail__image { grid-column: 1; grid-row: 1; }
        }
    </style> --}}
    
    {{-- Managed from Admin > Services > Molecular Cards. --}}
    @include('components.specimens-molecular')

    @include('components.process-explained')
    @include('components.faq')
    @include('components.diagnostics-cta.cta')
    @include('components.footer')
</body>
</html>
