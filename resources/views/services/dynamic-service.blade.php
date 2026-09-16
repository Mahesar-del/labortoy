@php
    $testCards = $tests->map(function ($test) {
        return ['title' => $test->heading ?: $test->name, 'description' => $test->description, 'image' => $test->image_path ? asset('storage/'.$test->image_path) : asset('images/chemistry-card-bg.jpg')];
    })->all();
@endphp
<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>{{ $service->name }}</title></head><body>
@include('components.header')
@include('components.services-hero',['title'=>nl2br(e($service->hero_heading ?: $service->name)),'description'=>$service->hero_description ?: $service->summary,'buttonText'=>$service->button_text ?: 'Book an Appointment','buttonLink'=>$service->button_link ?: '/appointment','bgImage'=>!empty($service->hero_image) ? asset('storage/'.$service->hero_image) : asset('images/clinical-test.png')])
@include('components.service-intro')
@if($tests->isNotEmpty())
@include('components.chemistry-testing-services',['cards'=>$testCards,'sectionTitle'=>$service->name.' Services','sectionDescription'=>'Explore '.$service->name.' testing categories designed to support different diagnostic and clinical needs.'])
@endif
@include('components.specimens-molecular')
@include('components.process-explained')
@include('components.faq')
@include('components.diagnostics-cta.cta')
@include('components.footer')
</body></html>
