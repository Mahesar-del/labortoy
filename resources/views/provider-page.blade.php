<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Provider Page</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/favicon.jpg') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body { margin: 0; font-family: 'Manrope', sans-serif; }</style>
</head>
<body>
    @include('components.header')
    @include('components.provider-hero', [
        'title' => 'Laboratory Support for<br>Better Clinical Decisions',
        'description' => 'Access laboratory testing information, specimen requirements, clinical resources, and provider support to help you navigate the testing process with Sterling.',
        'bgImage' => asset('images/patient_hero_image.jpg'),
        'showButton' => false
    ])
    @include('components.clinical-workflow')
    @include('components.what-you-need')
    @include('components.find-right-test')
    @include('components.three-cards-overlap', [
        'title' => 'Specimen Requirements',
        'description' => 'Proper specimen collection and handling are important parts of the laboratory testing process. Requirements vary by test and should always be confirmed using the applicable test instructions.',
        'backgroundImage' => asset('images/simplement-molecular-testing.jpg'),
        'cardGradient' => 'linear-gradient(180deg, #BBCEE6 0.41%, #1B5CAB 100%)',
        'iconBackground' => asset('images/rectangle.svg'),
        'cards' => [
            ['icon' => asset('images/specimen-type.svg'), 'title' => 'Specimen Type', 'text' => 'The required specimen depends on the laboratory test. Available specimen types may vary across Sterling services.'],
            ['icon' => asset('images/collection.svg'), 'title' => 'Collection', 'text' => 'Follow the specific collection instructions associated with the test being ordered.'],
            ['icon' => asset('images/handling-transport.svg'), 'title' => 'Handling & Transport', 'text' => 'Specimens should be identified, handled, stored, and transported according to applicable requirements.']
        ]
    ])
    @include('components.provider-clinical-decisions')
    @include('components.faq')
    @include('components.diagnostics-cta.cta')
    @include('components.footer')
</body>
</html>
