@php
    $testCards = $tests->map(function ($test) {
        return ['title' => $test->heading ?: $test->name, 'description' => $test->description, 'image' => $test->image_path ? asset('storage/'.$test->image_path) : asset('images/chemistry-card-bg.jpg')];
    })->all();
@endphp
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $service->name }}</title>
    <style>
        html, body { margin: 0; min-width: 0; overflow-x: hidden; padding: 0; width: 100%; }

        .service-page-shell {
            --service-content-width: 1320px;
            width: 100%;
            overflow: hidden;
        }

        .service-page-shell .services-hero { margin: 0; max-width: none; width: 100%; }

        /* These are the page's main content rails.  They use the same width as the header. */
        .service-page-shell .services-hero__container,
        .service-page-shell .dynamic-intro__inner,
        .service-page-shell .chemistry-services-container,
        .service-page-shell .specimens-container,
        .service-page-shell .process-container,
        .service-page-shell .diagnostics-cta__container {
            box-sizing: border-box;
            margin-left: auto;
            margin-right: auto;
            max-width: var(--service-content-width);
            padding-left: 0 !important;
            padding-right: 0 !important;
            width: 100%;
        }

        .service-page-shell .specimens-section,
        .service-page-shell .diagnostics-cta {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .service-page-shell .faq-container {
            box-sizing: border-box;
            margin-left: auto;
            margin-right: auto;
            max-width: 1050px;
            padding-left: 0 !important;
            padding-right: 0 !important;
            width: 100%;
        }

        /* Header has a 99px gutter until its 1320px content area fits in full. */
        @media (max-width: 1517px) and (min-width: 1151px) {
            .service-page-shell .services-hero__container,
            .service-page-shell .dynamic-intro__inner,
            .service-page-shell .chemistry-services-container,
            .service-page-shell .specimens-container,
            .service-page-shell .process-container,
            .service-page-shell .diagnostics-cta__container,
            .service-page-shell .faq-container {
                padding-left: 99px !important;
                padding-right: 99px !important;
            }
        }

        @media (max-width: 1150px) {
            .service-page-shell .services-hero__container,
            .service-page-shell .dynamic-intro__inner,
            .service-page-shell .chemistry-services-container,
            .service-page-shell .specimens-container,
            .service-page-shell .process-container,
            .service-page-shell .diagnostics-cta__container,
            .service-page-shell .faq-container {
                padding-left: 20px !important;
                padding-right: 20px !important;
            }
        }

        @media (max-width: 900px) {
            .service-page-shell .dynamic-intro__inner {
                gap: 32px;
                grid-template-columns: 1fr;
            }

            .service-page-shell .dynamic-intro img {
                height: auto;
                min-height: 280px;
            }
        }
    </style>
</head>
<body>
@include('components.header')
<main class="service-page-shell">
@include('components.services-hero',['title'=>nl2br(e($service->hero_heading ?: $service->name)),'description'=>$service->hero_description ?: $service->summary,'buttonText'=>$service->button_text ?: 'Book an Appointment','buttonLink'=>$service->button_link ?: '/appointment','bgImage'=>!empty($service->hero_image) ? asset('storage/'.$service->hero_image) : asset('images/clinical-test.png')])
@include('components.service-intro')
@if($tests->isNotEmpty())
@include('components.chemistry-testing-services',['cards'=>$testCards,'sectionTitle'=>$service->name.' Services','sectionDescription'=>'Explore '.$service->name.' testing categories designed to support different diagnostic and clinical needs.'])
@endif
@include('components.specimens-molecular')
@include('components.process-explained')
@include('components.faq')
@include('components.diagnostics-cta.cta')
</main>
@include('components.footer')
</body>
</html>
