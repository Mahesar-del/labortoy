@php
    $testPages = $testPages ?? collect();
    $testCards = $tests->map(function ($test) use ($testPages) {
        $tp = $testPages->where('title', $test->name)->first();
        $testImage = $test->image_path && \Illuminate\Support\Facades\Storage::disk('public')->exists($test->image_path)
            ? asset('storage/'.$test->image_path)
            : null;
        $pageImage = $tp && $tp->bg_image && \Illuminate\Support\Facades\Storage::disk('public')->exists($tp->bg_image)
            ? asset('storage/'.$tp->bg_image)
            : null;

        return [
            'title' => $test->heading ?: $test->name, 
            'description' => $test->description, 
            'image' => $testImage ?: $pageImage ?: asset('images/chemistry-card-bg.jpg'),
            'link' => $tp ? route('test-pages.show', $tp->slug) : '#'
        ];
    })->all();
@endphp
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $service->name }}</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/favicon.jpg') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}">
    <style>
        html, body { margin: 0; min-width: 0; overflow-x: hidden; padding: 0; width: 100%; }

        .service-page-shell {
            --service-content-width: 1320px;
            width: 100%;
            overflow: hidden;
        }

        .service-page-shell .services-hero { margin: 0; max-width: none; width: 100%; }

        /* 1. Force all containers to behave exactly like header-container */
        .service-page-shell .services-hero__container,
        .service-page-shell .dynamic-intro__inner,
        .service-page-shell .chemistry-services-container,
        .service-page-shell .specimens-container,
        .service-page-shell .process-container,
        .service-page-shell .diagnostics-cta__container {
            box-sizing: border-box;
            margin-left: auto !important;
            margin-right: auto !important;
            max-width: var(--service-content-width) !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            width: 100%;
        }

        .service-page-shell .faq-container {
            box-sizing: border-box;
            margin-left: auto !important;
            margin-right: auto !important;
            max-width: 1050px !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            width: 100%;
        }

        /* 2. Force all wrappers to behave exactly like site-header */
        .service-page-shell .services-hero,
        .service-page-shell .dynamic-intro,
        .service-page-shell .chemistry-services-section,
        .service-page-shell .specimens-section,
        .service-page-shell .process-section,
        .service-page-shell .faq-section,
        .service-page-shell .diagnostics-cta {
            padding-left: 99px !important;
            padding-right: 99px !important;
            box-sizing: border-box;
        }

        /* 3. Mobile responsiveness for wrappers (just like site-header) */
        @media (max-width: 1150px) {
            .service-page-shell .services-hero,
            .service-page-shell .dynamic-intro,
            .service-page-shell .chemistry-services-section,
            .service-page-shell .specimens-section,
            .service-page-shell .process-section,
            .service-page-shell .faq-section,
            .service-page-shell .diagnostics-cta {
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
