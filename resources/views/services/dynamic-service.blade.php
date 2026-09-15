@php
    $testCards = $tests->map(function ($test) {
        return ['title' => $test->heading ?: $test->name, 'description' => $test->description, 'image' => $test->image_path ? asset('storage/'.$test->image_path) : asset('images/chemistry-card-bg.jpg')];
    })->all();
@endphp
<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>{{ $service->name }}</title><style>html,body{margin:0;padding:0;width:100%;overflow-x:hidden}.service-page-shell{width:100%;overflow:hidden}.service-page-shell .services-hero{width:100%;max-width:none}.service-page-shell .services-hero__container,.service-page-shell .dynamic-intro__inner,.service-page-shell .chemistry-services-container{max-width:1320px;margin-left:auto;margin-right:auto;padding-left:0;padding-right:0}.service-page-shell .specimens-container,.service-page-shell .process-container,.service-page-shell .faq-container{max-width:1320px;margin-left:auto;margin-right:auto}@media(max-width:1360px){.service-page-shell .services-hero__container,.service-page-shell .dynamic-intro__inner,.service-page-shell .chemistry-services-container{padding-left:40px;padding-right:40px}}@media(max-width:700px){.service-page-shell .services-hero__container,.service-page-shell .dynamic-intro__inner,.service-page-shell .chemistry-services-container{padding-left:24px;padding-right:24px}}</style></head><body>
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
<style>
@media (max-width:1360px) and (min-width:1151px) {
  .service-page-shell .services-hero__container,.service-page-shell .dynamic-intro__inner,.service-page-shell .chemistry-services-container { padding-left:99px!important; padding-right:99px!important; }
}
@media (max-width:1150px) and (min-width:701px) {
  .service-page-shell .services-hero__container,.service-page-shell .dynamic-intro__inner,.service-page-shell .chemistry-services-container { padding-left:20px!important; padding-right:20px!important; }
}
</style>
@include('components.footer')
</body>
</html>
