<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>{{ $service->name }}</title></head><body>
@include('components.header')
@include('components.services-hero',['title'=>nl2br(e($service->hero_heading ?: $service->name)),'description'=>$service->hero_description ?: $service->summary,'buttonText'=>$service->button_text ?: 'Book an Appointment','buttonLink'=>$service->button_link ?: '/appointment','bgImage'=>!empty($service->hero_image) ? asset('storage/'.$service->hero_image) : asset('images/clinical-test.png')])
@include('components.service-intro')
@if($tests->isNotEmpty())<section class="tests"><h2>Available Tests</h2><div>@foreach($tests as $test)<article><img src="{{ $test->image_path ? asset('storage/'.$test->image_path) : asset('images/laboratory-test.png') }}" alt="{{ $test->name }}"><h3>{{ $test->heading ?: $test->name }}</h3><p>{{ $test->description }}</p></article>@endforeach</div></section>@endif
@include('components.specimens-molecular')
@include('components.faq')
@include('components.footer')
<style>.tests{max-width:1240px;margin:0 auto 60px;padding:0 7%}.tests h2{font:700 34px Arial;color:#0b2545}.tests>div{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}.tests article{background:#09243f;border-radius:16px;color:#fff;overflow:hidden;padding-bottom:17px}.tests img{display:block;height:180px;object-fit:cover;width:100%}.tests h3,.tests p{margin:14px 18px 0}.tests p{color:#dce8ee;font:14px/1.5 Arial}@media(max-width:700px){.tests>div{grid-template-columns:1fr}}</style></body></html>
