<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Molecular Diagnostics</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body { margin: 0; font-family: 'Manrope', sans-serif; }</style>
</head>
<body>
    @include('components.header')

    @include('components.services-hero', [
        'title' => 'Molecular<br>Diagnostics',
        'description' => 'Advanced molecular testing that examines biological markers at the molecular level to support disease detection, diagnosis, monitoring, and informed clinical decision-making.',
        'bgImage' => asset('images/molecular-diagonostics-hero-img.jpg')
    ])

    <section class="understanding-genomic" aria-labelledby="understanding-genomic-title">
        <div class="understanding-genomic__container">
            <div class="understanding-genomic__content">
                <h2 id="understanding-genomic-title">What Is Molecular Diagnostics?</h2>
                <p>Molecular diagnostics is a type of laboratory testing that examines genetic material, proteins, or other molecular markers to identify biological changes associated with disease. Unlike many traditional diagnostic approaches that rely on visible characteristics or broader biological measurements, molecular testing can examine specific molecular signals within a sample.</p>
                <p>This can provide healthcare providers with more targeted information to support diagnosis, disease detection, monitoring, and clinical decision-making.</p>
            </div>
    
            <img class="understanding-genomic__image" src="{{ asset('images/understanding-genomic.jpg') }}" alt="Child receiving care in a hospital room">
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
        .understanding-genomic__image { aspect-ratio: 1.5 / 1; border-radius: 18px; display: block; object-fit: cover; overflow: hidden; width: 100%; }
        @media (max-width: 700px) { .understanding-genomic { padding: 52px 28px; } .understanding-genomic__container { gap: 30px; grid-template-columns: 1fr; } .understanding-genomic h2 { text-align: left; } .understanding-genomic__image { order: -1; } }
    </style>

    @php
        $molecularServices = [
            [
                'title' => 'Respiratory Pathogen Molecular Testing',
                'image' => 'images/first-img.jpg',
                'description' => 'Respiratory Pathogen Molecular Testing uses sensitive molecular methods such as PCR and nucleic acid amplification testing (NAAT), supporting timely diagnosis and clinical management.',
                'items' => ['SARS-CoV-2 RT-PCR', 'Influenza A & B PCR', 'Respiratory Syncytial Virus (RSV) PCR', 'COVID-19, Flu & RSV Multiplex PCR', 'Respiratory Pathogen Panel', 'Bordetella pertussis/parapertussis PCR'],
            ],
            [
                'title' => 'Sexually Transmitted & Genitourinary Infections',
                'image' => 'images/second-img.jpg',
                'description' => 'Molecular testing provides sensitive detection of common sexually transmitted and genitourinary pathogens to support accurate diagnosis and appropriate treatment decisions.',
                'items' => ['Chlamydia trachomatis NAAT', 'Neisseria gonorrhoeae NAAT', 'Trichomonas vaginalis NAAT', 'Mycoplasma genitalium NAAT', 'Herpes Simplex Virus (HSV-1/HSV-2) PCR', 'High-Risk HPV DNA Testing'],
            ],
            [
                'title' => 'Gastrointestinal Pathogen Molecular Testing',
                'image' => 'images/third-img.jpg',
                'description' => 'Rapid molecular assays help identify bacterial, viral, and parasitic pathogens associated with gastrointestinal infections and diarrheal illness.',
                'items' => ['Gastrointestinal Pathogen Multiplex PCR Panel', 'Clostridioides difficile (C. difficile) NAAT', 'Salmonella Molecular Detection', 'Shigella Molecular Detection', 'Campylobacter Molecular Detection', 'Norovirus PCR'],
            ],
            [
                'title' => 'Blood-Borne & Systemic Viral Testing',
                'image' => 'images/first-img.jpg',
                'description' => 'Quantitative and qualitative molecular assays detect and monitor clinically significant viral infections, supporting diagnosis, disease monitoring, and treatment management.',
                'items' => ['HIV-1 RNA Quantitative PCR', 'Hepatitis B Virus (HBV) DNA Quantitative PCR', 'Hepatitis C Virus (HCV) RNA Quantitative PCR', 'Cytomegalovirus (CMV) Quantitative PCR', 'Epstein-Barr Virus (EBV) Quantitative PCR', 'BK Virus Quantitative PCR'],
            ],
            [
                'title' => 'Molecular Oncology',
                'image' => 'images/second-img.jpg',
                'description' => 'Detect acquired molecular alterations associated with cancer to support tumor characterization, prognosis, therapy selection, and precision oncology when clinically appropriate.',
                'items' => ['EGFR Mutation Analysis', 'KRAS & NRAS Mutation Analysis', 'BRAF Mutation Analysis', 'Solid Tumor Molecular Panel', 'Gene Fusion Analysis', 'Microsatellite Instability (MSI) Testing'],
            ],
            [
                'title' => 'Hematologic Molecular Diagnostics',
                'image' => 'images/third-img.jpg',
                'description' => 'Identify clinically relevant molecular abnormalities associated with leukemia, lymphoma, and myeloproliferative disorders to support diagnosis, classification, prognosis, and disease monitoring.',
                'items' => ['BCR-ABL1 Quantitative PCR', 'JAK2 V617F Mutation Analysis', 'CALR Mutation Analysis', 'MPL Mutation Analysis', 'PML-RARA Molecular Testing', 'FLT3 Mutation Analysis'],
            ],
        ];
    @endphp

    <section class="genomic-testing-services" aria-labelledby="genomic-testing-services-title">
        <div class="genomic-testing-services__container">
            <header class="genomic-testing-services__header">
                <h2 id="genomic-testing-services-title">Molecular Testing Services</h2>
                <p>Explore molecular testing categories offered through Sterling. The final test menu can be organized according to the laboratory's available testing services.</p>
            </header>
    
            <div class="genomic-testing-services__list">
                @foreach ($molecularServices as $index => $service)
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

    @include('components.specimens-molecular')

    @include('components.process-explained')

    @include('components.faq')
    @include('components.diagnostics-cta.cta')

    @include('components.footer')
</body>
</html>
