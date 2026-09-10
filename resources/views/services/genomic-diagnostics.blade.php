<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Genomic Diagnostics</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body { margin: 0; font-family: 'Manrope', sans-serif; }</style>
</head>
<body>
    <section class="services-hero" aria-labelledby="services-hero-title">
        <div class="services-hero__background" style="background-image: url('{{ asset('img/genomic-diagnostics-hero.png') }}');"></div>
        <div class="services-hero__overlay"></div>
    
        <div class="services-hero__container">
            <div class="services-hero__content">
                <h1 id="services-hero-title">Genomic<br>Diagnostics</h1>
                <p>Advanced genomic testing that helps identify genetic variation, understand disease risk, and support more informed clinical decisions.</p>
                <a class="services-hero__button" href="#appointment">Book an Appointment</a>
            </div>
        </div>
    </section>
    
    <style>
        .services-hero, .services-hero * { box-sizing: border-box; }
        .services-hero { background: #020b1c; color: #fff; isolation: isolate; min-height: 460px; overflow: hidden; position: relative; }
        .services-hero__background, .services-hero__overlay { height: 100%; inset: 0; position: absolute; width: 100%; }
        .services-hero__background { background-position: center; background-repeat: no-repeat; background-size: 100% 100%; z-index: -2; }
        .services-hero__overlay { background: linear-gradient(90deg, rgba(7,26,49,.96) 0%, rgba(7,26,49,.86) 48%, rgba(7,26,49,.25) 100%); z-index: -1; }
        .services-hero__container { align-items: center; display: flex; margin: 0 auto; max-width: 1320px; min-height: 460px; padding: 56px 76px; }
        .services-hero__content { max-width: 530px; }
        .services-hero h1 { font-size: clamp(34px, 3.1vw, 56px); letter-spacing: -.04em; line-height: 1.1; margin: 0; }
        .services-hero p { color: rgba(255,255,255,.84); font-size: clamp(14px, 1vw, 17px); line-height: 1.7; margin: 25px 0 30px; }
        .services-hero__button { background: #20b3b5; border-radius: 999px; color: #fff; display: inline-block; font-size: 14px; font-weight: 700; padding: 15px 25px; text-decoration: none; }
        .services-hero__button:hover { filter: brightness(.94); }
        .services-hero__button:focus-visible { outline: 3px solid #fff; outline-offset: 4px; }
        @media (max-width: 700px) {
            .services-hero, .services-hero__container { min-height: 430px; }
            .services-hero__container { align-items: flex-end; padding: 48px 28px; }
            .services-hero__overlay { background: linear-gradient(90deg, rgba(7,26,49,.96), rgba(7,26,49,.25)); }
            .services-hero__content { max-width: 350px; }
        }
    </style>
    
    <section class="understanding-genomic" aria-labelledby="understanding-genomic-title">
        <div class="understanding-genomic__container">
            <div class="understanding-genomic__content">
                <h2 id="understanding-genomic-title">Understanding Genomic Diagnostics</h2>
                <p>Genomic diagnostics uses advanced laboratory testing to examine a person's genetic information and identify changes within DNA that may be associated with inherited conditions, disease risk, or other clinically relevant findings. By looking beyond traditional diagnostic approaches, genomic testing can provide healthcare providers with deeper insight into the biological factors that may contribute to a patient's condition.</p>
                <p>Sterling combines laboratory expertise with advanced genomic technologies to generate reliable diagnostic information for healthcare providers and their patients.</p>
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
    
    <section class="genomic-testing-services" aria-labelledby="genomic-testing-services-title">
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
        .genomic-service-detail__image { aspect-ratio: 1.38 / 1; border-radius: 18px; display: block; object-fit: cover; overflow: hidden; width: 100%; }
        @media (max-width: 700px) {
            .genomic-testing-services { padding: 22px 28px 56px; }
            .genomic-testing-services__header { margin-bottom: 38px; }
            .genomic-testing-services__list { gap: 56px; }
            .genomic-service-detail, .genomic-service-detail--reversed { gap: 30px; grid-template-columns: 1fr; }
            .genomic-service-detail__content, .genomic-service-detail--reversed .genomic-service-detail__content { grid-column: 1; grid-row: 2; padding-top: 0; }
            .genomic-service-detail__image, .genomic-service-detail--reversed .genomic-service-detail__image { grid-column: 1; grid-row: 1; }
        }
    </style>
    
    <section class="genomic-help" aria-labelledby="genomic-help-title">
        <div class="genomic-help__backdrop" aria-hidden="true"></div>
    
        <div class="genomic-help__container">
            <header class="genomic-help__header">
                <h2 id="genomic-help-title">Where Genomic Diagnostics Can Help</h2>
                <p>Genomic information can provide valuable insights across multiple areas of patient care<br class="genomic-help__desktop-break"> and clinical investigation.</p>
            </header>
    
            <div class="genomic-help__cards">
                <article class="genomic-help-card">
                    <span class="genomic-help-card__icon" aria-hidden="true">
                        <img src="{{ asset('images/dna.svg') }}" alt="">
                    </span>
                    <h3>Inherited Conditions</h3>
                    <p>Support investigation of genetic conditions that may run within families.</p>
                </article>
    
                <article class="genomic-help-card">
                    <span class="genomic-help-card__icon" aria-hidden="true">
                        <img src="{{ asset('images/Cancer.svg') }}" alt="">
                    </span>
                    <h3>Cancer Genetics</h3>
                    <p>Help evaluate genetic variants associated with hereditary cancer risk.</p>
                </article>
    
                <article class="genomic-help-card">
                    <span class="genomic-help-card__icon" aria-hidden="true">
                        <img src="{{ asset('images/target.svg') }}" alt="">
                    </span>
                    <h3>Precision Medicine</h3>
                    <p>Provide genomic insights that may support individualized approaches to treatment.</p>
                </article>
            </div>
        </div>
    </section>
    
    <style>
        .genomic-help, .genomic-help * { box-sizing: border-box; }
        .genomic-help { background: #fff; isolation: isolate; overflow: hidden; padding: 48px 7% 64px; position: relative; }
        .genomic-help__backdrop { background-image: linear-gradient(90deg, rgba(7, 26, 49, .58), rgba(7, 26, 49, .48)), url('{{ asset('images/why-genomic.jpg') }}'); background-position: center 43%; background-repeat: no-repeat; background-size: cover; height: clamp(250px, 21vw, 290px); inset: 0 0 auto; position: absolute; z-index: 0; }
        .genomic-help__container { margin: 0 auto; max-width: 1320px; position: relative; z-index: 1; }
        .genomic-help__header { color: #fff; margin: 0 auto 34px; max-width: 760px; text-align: center; }
        .genomic-help__header h2 { font-size: clamp(26px, 2.05vw, 35px); letter-spacing: -.03em; line-height: 1.2; margin: 0 0 10px; }
        .genomic-help__header p { font-size: clamp(13px, .95vw, 15px); line-height: 1.5; margin: 0; opacity: .96; }
        .genomic-help__cards { display: grid; gap: 22px; grid-template-columns: repeat(3, minmax(0, 1fr)); }
        .genomic-help-card { background: linear-gradient(180deg, rgba(207, 225, 248, .98) 0%, rgba(135, 177, 224, .98) 42%, rgba(28, 104, 190, .98) 100%); border: 1px solid rgba(255, 255, 255, .3); border-radius: 16px; color: #fff; min-height: 236px; padding: 24px; box-shadow: 0 14px 28px rgba(0, 18, 44, .18); }
        .genomic-help-card__icon { align-items: center; background: #0a2b55; border-radius: 9px; color: #fff; display: inline-flex; height: 54px; justify-content: center; margin-bottom: 23px; width: 54px; }
        .genomic-help-card__icon img { height: 38px; object-fit: contain; width: 38px; }
        .genomic-help-card h3 { font-size: clamp(17px, 1.25vw, 21px); letter-spacing: -.02em; line-height: 1.28; margin: 0 0 12px; }
        .genomic-help-card p { font-size: clamp(13px, .94vw, 15px); line-height: 1.52; margin: 0; }
        @media (max-width: 760px) {
            .genomic-help { padding: 5px 28px 48px; }
            .genomic-help__backdrop { display: none; }
            .genomic-help__header { color: #111820; margin-bottom: 28px; }
            .genomic-help__desktop-break { display: none; }
            .genomic-help__cards { grid-template-columns: 1fr; }
            .genomic-help-card { min-height: 0; }
        }
    </style>
    
    @include('components.specimens-molecular')
    @include('components.clinical-test.clinical-test')
    
    <section class="genomic-process" aria-labelledby="genomic-process-title">
        <div class="genomic-process__container">
            <header class="genomic-process__header">
                <h2 id="genomic-process-title">From Sample to Results Our<br>Process Explained</h2>
            </header>
    
            <div class="genomic-process__steps">
                <article class="genomic-process-step">
                    <img class="genomic-process-step__image" src="{{ asset('images/req-sample-kid.svg') }}" alt="" aria-hidden="true">
                    <h3><span>01.</span> Request your test kit</h3>
                    <p>Easily place orders through our secure Physician Portal, with options for custom panels and test combinations.</p>
                </article>
    
                <article class="genomic-process-step">
                    <img class="genomic-process-step__image" src="{{ asset('images/sample.svg') }}" alt="" aria-hidden="true">
                    <h3><span>02.</span> Sample Collection</h3>
                    <p>For added convenience, choose our home collection option or schedule a qualified visit to collect samples safely.</p>
                </article>
    
                <article class="genomic-process-step">
                    <img class="genomic-process-step__image" src="{{ asset('images/analysis-and-review.svg') }}" alt="" aria-hidden="true">
                    <h3><span>03.</span> Analysis and Review</h3>
                    <p>Our skilled pathologists and laboratory scientists analyze the test data using the latest technology.</p>
                </article>
    
                <article class="genomic-process-step">
                    <img class="genomic-process-step__image" src="{{ asset('images/follow-up and support.svg') }}" alt="" aria-hidden="true">
                    <h3><span>04.</span> Follow-Up and Support</h3>
                    <p>Our customer support team is here to answer questions about results, next steps, or any additional testing.</p>
                </article>
            </div>
        </div>
    </section>
    
    <style>
        .genomic-process, .genomic-process * { box-sizing: border-box; }
        .genomic-process { background: #f3f8fb; padding: 22px 7% 78px; }
        .genomic-process__container { margin: 0 auto; max-width: 1320px; }
        .genomic-process__header { margin: 0 auto 46px; text-align: center; }
        .genomic-process__header h2 { color: #111820; font-size: clamp(26px, 2.15vw, 36px); letter-spacing: -.035em; line-height: 1.2; margin: 0; }
        .genomic-process__steps { display: grid; gap: clamp(30px, 4vw, 64px); grid-template-columns: repeat(4, minmax(0, 1fr)); }
        .genomic-process-step { text-align: center; }
        .genomic-process-step__image { display: block; height: 89px; margin: 0 auto 24px; object-fit: contain; width: 82px; }
        .genomic-process-step h3 { color: #173a60; font-size: clamp(15px, 1.1vw, 18px); font-weight: 800; line-height: 1.35; margin: 0 0 15px; }
        .genomic-process-step h3 span { color: #79a0c8; }
        .genomic-process-step p { color: #222b34; font-size: clamp(13px, .92vw, 15px); line-height: 1.65; margin: 0 auto; max-width: 265px; }
        @media (max-width: 950px) {
            .genomic-process__steps { grid-template-columns: repeat(2, minmax(0, 1fr)); row-gap: 52px; }
        }
        @media (max-width: 560px) {
            .genomic-process { padding: 48px 28px 58px; }
            .genomic-process__header { margin-bottom: 40px; }
            .genomic-process__steps { grid-template-columns: 1fr; }
        }
    </style>
    
    <section class="preparing-test" aria-labelledby="preparing-test-title">
        <div class="preparing-test__container">
            <div class="preparing-test__media">
                <img src="{{ asset('images/prepare-for-the-test.jpg') }}" alt="Preparing for a diagnostic test">
            </div>

            <div class="preparing-test__content">
                <h2 id="preparing-test-title">Preparing for a Test</h2>
                <p class="preparing-test__intro">Preparation depends on the laboratory test your healthcare provider has ordered. Make sure you understand any test-specific instructions before your appointment.</p>

                <ol class="preparing-test__timeline">
                    <li>
                        <span class="preparing-test__step">STEP 01</span>
                        <h3>Review Your Instructions</h3>
                        <p>Check whether your test requires fasting, specific timing, or any other preparation.</p>
                    </li>
                    <li>
                        <span class="preparing-test__step">STEP 02</span>
                        <h3>Follow Test-Specific Requirements</h3>
                        <p>Follow the instructions given by your healthcare provider or laboratory.</p>
                    </li>
                    <li>
                        <span class="preparing-test__step">STEP 03</span>
                        <h3>Bring Required Information</h3>
                        <p>Have any requested identification, test order, or relevant information available.</p>
                    </li>
                    <li>
                        <span class="preparing-test__step">STEP 04</span>
                        <h3>Ask Questions</h3>
                        <p>If you are unsure about preparation, ask your healthcare provider before testing.</p>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <style>
        .preparing-test, .preparing-test * { box-sizing: border-box; }
        .preparing-test { background: #fff; padding: 76px 7% 96px; }
        .preparing-test__container { align-items: stretch; display: grid; gap: clamp(60px, 7vw, 110px); grid-template-columns: minmax(360px, .92fr) minmax(0, 1.08fr); margin: 0 auto; max-width: 1500px; }
        .preparing-test__media { align-self: stretch; }
        .preparing-test__media img { border-radius: 8px; display: block; height: 100%; max-height: 560px; object-fit: cover; width: 100%; }
        .preparing-test__content { max-width: 700px; }
        .preparing-test h2 { color: #101820; font-size: clamp(30px, 2.35vw, 42px); letter-spacing: -.035em; line-height: 1.2; margin: 0 0 13px; }
        .preparing-test__intro { color: #2a333e; font-size: clamp(15px, 1.05vw, 18px); line-height: 1.55; margin: 0 0 30px; }
        .preparing-test__timeline { border-left: 2px solid #9fb3c7; list-style: none; margin: 0; padding: 0 0 0 28px; }
        .preparing-test__timeline li { margin: 0 0 27px; position: relative; }
        .preparing-test__timeline li:last-child { margin-bottom: 0; }
        .preparing-test__timeline li::before { background: #20b0b5; border: 3px solid #d8f1f3; border-radius: 50%; content: ''; height: 16px; left: -37px; position: absolute; top: 0; width: 16px; }
        .preparing-test__step { color: #159da6; display: block; font-size: 11px; font-weight: 800; letter-spacing: .04em; margin-bottom: 3px; }
        .preparing-test h3 { color: #000; font-size: clamp(18px, 1.25vw, 22px); line-height: 1.25; margin: 0 0 5px; }
        .preparing-test__timeline p { color: #000; font-size: clamp(14px, .95vw, 17px); line-height: 1.45; margin: 0; }
        @media (max-width: 700px) {
            .preparing-test { padding: 54px 28px 64px; }
            .preparing-test__container { gap: 34px; grid-template-columns: 1fr; }
            .preparing-test__media { order: -1; }
            .preparing-test__media img { height: auto; max-height: none; min-height: 0; }
            .preparing-test h2 { font-size: 28px; }
            .preparing-test__intro { font-size: 14px; margin-bottom: 22px; }
            .preparing-test__timeline { padding-left: 22px; }
            .preparing-test__timeline li::before { left: -31px; }
            .preparing-test h3 { font-size: 17px; }
            .preparing-test__timeline p { font-size: 13px; }
        }
    </style>
</body>
</html>
