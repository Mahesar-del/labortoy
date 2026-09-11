<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clinical Diagnostics</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body { margin: 0; font-family: 'Manrope', sans-serif; }</style>
</head>
<body>
    @include('components.header')

    @include('components.services-hero', [
        'title' => 'Clinical<br>Diagnostics',
        'description' => 'Clinical laboratory testing that helps evaluate health, detect conditions, and provide healthcare professionals with reliable information to support diagnosis and patient care.',
        'bgImage' => asset('images/molecular-diagonostics-hero-img.jpg') 
    ])

    <section class="understanding-genomic" aria-labelledby="understanding-genomic-title">
        <div class="understanding-genomic__container">
            <div class="understanding-genomic__content">
                <h2 id="understanding-genomic-title">What Is Clinical Diagnostics?</h2>
                <p>Clinical diagnostics refers to laboratory testing used to evaluate a person's health, investigate symptoms, detect disease, and monitor health-related conditions.</p>
                <p>Clinical laboratory tests can measure a wide range of indicators in biological specimens, including blood cells, chemicals, proteins, hormones, antibodies, microorganisms, and other measurable substances.</p>
                <p>These results provide healthcare professionals with objective laboratory information that can support diagnosis, treatment decisions, and ongoing patient care.</p>
            </div>
    
            <img class="understanding-genomic__image" src="{{ asset('images/clinical-test.png') }}" alt="Clinical Diagnostics">
        </div>
    </section>
    
    <style>
        .understanding-genomic, .understanding-genomic * { box-sizing: border-box; }
        .understanding-genomic { background: #fff; padding: 25px 7%; }
        .understanding-genomic__container { align-items: start; display: grid; gap: clamp(36px, 7vw, 110px); grid-template-columns: minmax(0, 1.05fr) minmax(320px, .85fr); margin: 0 auto; max-width: 1320px; }
        .understanding-genomic__content { max-width: 650px; }
        .understanding-genomic h2 { color: #000; font-size: clamp(24px, 2vw, 34px); letter-spacing: -.03em; line-height: 1.2; margin: 0 0 22px; text-align: justify; }
        .understanding-genomic p { color: #000; font-size: clamp(14px, 1vw, 16px); line-height: 1.75; margin: 0 0 20px; text-align: justify; }
        .understanding-genomic p:last-child { margin-bottom: 0; }
        .understanding-genomic__image { aspect-ratio: auto; border-radius: 18px; display: block; object-fit: contain; overflow: hidden; width: 100%; max-height: 400px; }
        @media (max-width: 700px) { .understanding-genomic { padding: 52px 28px; } .understanding-genomic__container { gap: 30px; grid-template-columns: 1fr; } .understanding-genomic h2 { text-align: left; } .understanding-genomic__image { order: -1; } }
    </style>

    @php
        $clinicalServices = [
            [
                'title' => 'Hematology Testing',
                'image' => 'images/first-img.jpg',
                'description' => 'Evaluate blood cells and related abnormalities to support the diagnosis and monitoring of anemia, infections, blood disorders, and other clinical conditions.',
                'items' => ['Complete Blood Count (CBC)', 'CBC with Differential', 'Hemoglobin & Hematocrit', 'Reticulocyte Count', 'Peripheral Blood Smear', 'Erythrocyte Sedimentation Rate (ESR)'],
            ],
            [
                'title' => 'Clinical Chemistry & Metabolic Testing',
                'image' => 'images/second-img.jpg',
                'description' => 'Measure important chemicals, enzymes, proteins, and metabolites in blood to assess overall health and the function of major organs.',
                'items' => ['Comprehensive Metabolic Panel (CMP)', 'Basic Metabolic Panel (BMP)', 'Liver Function Tests (LFT)', 'Kidney/Renal Function Tests', 'Lipid Profile', 'Hemoglobin A1c (HbA1c)'],
            ],
            [
                'title' => 'Endocrinology & Hormone Testing',
                'image' => 'images/third-img.jpg',
                'description' => 'Assess hormone levels to support the evaluation of thyroid, adrenal, reproductive, metabolic, and other endocrine conditions.',
                'items' => ['Thyroid-Stimulating Hormone (TSH)', 'Free T4 & Free T3', 'Cortisol', 'Testosterone', 'Estradiol', 'Follicle-Stimulating Hormone (FSH) & Luteinizing Hormone (LH)'],
            ],
            [
                'title' => 'Coagulation Testing',
                'image' => 'images/first-img.jpg',
                'description' => 'Evaluate the body\'s blood-clotting process to help identify bleeding or clotting abnormalities and support anticoagulant therapy monitoring.',
                'items' => ['Prothrombin Time (PT)', 'International Normalized Ratio (INR)', 'Activated Partial Thromboplastin Time (aPTT)', 'Fibrinogen', 'D-Dimer', 'Thrombin Time (TT)'],
            ],
            [
                'title' => 'Immunology & Serology Testing',
                'image' => 'images/second-img.jpg',
                'description' => 'Detect antibodies, antigens, and immune-system markers to support the evaluation of autoimmune disorders, immune responses, and selected infections.',
                'items' => ['Antinuclear Antibody (ANA)', 'Rheumatoid Factor (RF)', 'C-Reactive Protein (CRP)', 'Immunoglobulin Testing (IgG, IgA & IgM)', 'Anti-CCP Antibody', 'Complement C3 & C4'],
            ],
            [
                'title' => 'Clinical Microbiology',
                'image' => 'images/third-img.jpg',
                'description' => 'Identify microorganisms responsible for infections using conventional laboratory methods to support diagnosis and appropriate antimicrobial treatment.',
                'items' => ['Blood Culture', 'Urine Culture', 'Stool Culture', 'Throat Culture', 'Wound Culture', 'Antimicrobial Susceptibility Testing'],
            ],
        ];
    @endphp

    <section class="genomic-testing-services" aria-labelledby="genomic-testing-services-title">
        <div class="genomic-testing-services__container">
            <header class="genomic-testing-services__header">
                <h2 id="genomic-testing-services-title">Clinical Testing Services</h2>
                <p>Explore clinical laboratory testing categories offered through Sterling. The final categories and tests should reflect the laboratory's current testing menu.</p>
            </header>
    
            <div class="genomic-testing-services__list">
                @foreach ($clinicalServices as $index => $service)
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
        .genomic-testing-services { background: #fff; padding: 12px 7% 40px; }
        .genomic-testing-services__container { margin: 0 auto; max-width: 1320px; }
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
        .genomic-service-detail__image { aspect-ratio: 1.38 / 1; border-radius: 18px; display: block; object-fit: cover; overflow: hidden; width: 100%; background: #f3f4f6; }
        @media (max-width: 700px) {
            .genomic-testing-services { padding: 22px 28px 56px; }
            .genomic-testing-services__header { margin-bottom: 38px; }
            .genomic-testing-services__list { gap: 56px; }
            .genomic-service-detail, .genomic-service-detail--reversed { gap: 30px; grid-template-columns: 1fr; }
            .genomic-service-detail__content, .genomic-service-detail--reversed .genomic-service-detail__content { grid-column: 1; grid-row: 2; padding-top: 0; }
            .genomic-service-detail__image, .genomic-service-detail--reversed .genomic-service-detail__image { grid-column: 1; grid-row: 1; }
        }
    </style>

    @include('components.clinical-test.clinical-test')
    @include('components.process-explained')
    @include('components.faq')
    @include('components.diagnostics-cta.cta')

    @include('components.footer')
</body>
</html>
