@php($helpCards = json_decode($service->help_cards ?: '[]', true) ?: array_fill(0, 4, ['heading' => '', 'description' => '']))
@php($introImageExists = !empty($service->intro_image) && \Illuminate\Support\Facades\Storage::disk('public')->exists($service->intro_image))
<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Edit {{ $service->name }}</title><style>body{margin:0;background:#f1f7fb;color:#12304c;font-family:Arial}.wrap{max-width:900px;margin:42px auto;padding:0 20px}.top{display:flex;justify-content:space-between;align-items:center;margin-bottom:22px}.back{color:#2476c7;text-decoration:none;font-weight:bold}.card{background:#fff;border:1px solid #dce9f0;border-radius:14px;padding:28px;box-shadow:0 8px 22px #dce8ef}.field{margin:17px 0}.field label{display:block;font-size:13px;font-weight:bold;margin-bottom:6px}.hint{color:#71869a;display:block;font-size:11px;margin-top:5px}input,textarea{background:#fff;border:1px solid #cbdce7;border-radius:8px;box-sizing:border-box;font:inherit;padding:11px;width:100%}textarea{min-height:100px;resize:vertical}button{background:#16b9a7;border:0;border-radius:8px;color:#fff;font-weight:bold;padding:13px 20px}.preview{border-radius:10px;display:block;height:180px;margin-top:9px;object-fit:cover;width:100%}.card-grid{display:grid;grid-template-columns:1fr 1fr;gap:14px}.card-item{border:1px solid #dce9f0;border-radius:10px;padding:14px}.card-item .field{margin:0 0 12px}.card-item .field:last-child{margin:0}.card-item textarea{min-height:76px}@media(max-width:650px){.card-grid{grid-template-columns:1fr}.top{align-items:flex-start;flex-direction:column;gap:10px}}</style></head><body><main class="wrap"><header class="top"><div><h1>Edit Service</h1><p>Update the content and banner for {{ $service->name }}.</p></div><a class="back" href="{{ route('admin.services.index') }}">← Services</a></header><form class="card" method="post" action="{{ route('admin.services.update',$service->id) }}" enctype="multipart/form-data">@csrf<div class="field"><label>Service name</label><input name="name" value="{{ old('name',$service->name) }}" required></div><div class="field"><label>Service URL</label><input name="slug" value="{{ old('slug',$service->slug) }}" required><span class="hint">The page URL will be /service/your-service-url</span></div><div class="field"><label>Short description</label><textarea name="summary">{{ old('summary',$service->summary) }}</textarea></div><hr style="border:0;border-top:1px solid #e1ecf2;margin:24px 0"><h2>Hero section</h2><div class="field"><label>Hero heading</label><input name="hero_heading" value="{{ old('hero_heading',$service->hero_heading) }}"></div><div class="field"><label>Hero description</label><textarea name="hero_description">{{ old('hero_description',$service->hero_description) }}</textarea></div><div class="field"><label>Hero image</label><input type="file" name="hero_image" accept="image/png,image/jpeg,image/webp">@if($service->hero_image)<img class="preview" src="{{ asset('storage/'.$service->hero_image) }}" alt="Current hero">@endif<span class="hint">Leave blank to keep the current image. JPG, PNG or WebP, maximum 5 MB.</span></div><div class="field"><label>Button text</label><input name="button_text" value="{{ old('button_text',$service->button_text) }}"></div><div class="field"><label>Button link</label><input name="button_link" value="{{ old('button_link',$service->button_link) }}"></div><hr style="border:0;border-top:1px solid #e1ecf2;margin:28px 0"><h2>Service highlight cards</h2><p class="hint">This is the “Where [Service] Can Help” section shown only on this service page.</p><div class="field"><label>Section heading</label><input name="help_heading" value="{{ old('help_heading',$service->help_heading) }}"></div><div class="field"><label>Section description</label><textarea name="help_description">{{ old('help_description',$service->help_description) }}</textarea></div><div class="card-grid">@for($i=0;$i<4;$i++)<div class="card-item"><div class="field"><label>Card {{ $i+1 }} heading</label><input name="help_card_heading[]" value="{{ old('help_card_heading.'.$i,$helpCards[$i]['heading'] ?? '') }}"></div><div class="field"><label>Card {{ $i+1 }} description</label><textarea name="help_card_description[]">{{ old('help_card_description.'.$i,$helpCards[$i]['description'] ?? '') }}</textarea></div></div>@endfor</div><hr style="border:0;border-top:1px solid #e1ecf2;margin:28px 0"><h2>FAQ section</h2><div class="field"><label>FAQ heading</label><input name="faq_heading" value="{{ old('faq_heading',$service->faq_heading) }}"></div><div class="field"><label>FAQ description</label><textarea name="faq_description">{{ old('faq_description',$service->faq_description) }}</textarea></div><br><button>Save changes</button></form>

<template id="service-seo-fields">
    <h2>Search Engine Optimization</h2>
    <div class="field"><label>Meta title</label><input name="meta_title" maxlength="255" value="{{ old('meta_title',$service->meta_title ?? '') }}"><span class="hint">Recommended length: 50–60 characters.</span></div>
    <div class="field"><label>Meta description</label><textarea name="meta_description" maxlength="500">{{ old('meta_description',$service->meta_description ?? '') }}</textarea><span class="hint">Recommended length: 150–160 characters.</span></div>
    <div class="field"><label>Meta keywords</label><input name="meta_keywords" maxlength="500" value="{{ old('meta_keywords',$service->meta_keywords ?? '') }}"><span class="hint">Separate keywords with commas.</span></div>
    <hr style="border:0;border-top:1px solid #e1ecf2;margin:24px 0">
</template>
<script>
    (function () {
        const form = document.querySelector('form.card');
        const firstDivider = form ? form.querySelector('hr') : null;
        const seoFields = document.querySelector('#service-seo-fields');
        if (firstDivider && seoFields) firstDivider.before(seoFields.content.cloneNode(true));
    })();
</script>

<hr style="border:0;border-top:1px solid #e1ecf2;margin:28px 0">
<div class="top" style="margin-bottom:15px;">
    <div>
        <h2>Test Pages in this Service</h2>
        <p class="hint">These test pages will appear when users visit this service page.</p>
    </div>
    <a href="{{ route('admin.test-pages.create', ['service_id' => $service->id]) }}" style="background:#f59e0b; color:white; padding:10px 15px; border-radius:8px; text-decoration:none; font-weight:bold; font-size:13px;">+ Add Test Page</a>
</div>

@if($testPages->count() > 0)
<div class="card" style="padding:0; overflow:hidden;">
    <table style="width:100%; border-collapse:collapse; text-align:left;">
        <thead>
            <tr style="background:#f9fbfc; border-bottom:1px solid #e1ebf2; font-size:11px; color:#71869a; text-transform:uppercase;">
                <th style="padding:15px 20px;">Title</th>
                <th style="padding:15px 20px;">Status</th>
                <th style="padding:15px 20px; text-align:right;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($testPages as $tp)
            <tr style="border-bottom:1px solid #e1ebf2;">
                <td style="padding:15px 20px; font-weight:bold;">{{ $tp->title }}</td>
                <td style="padding:15px 20px;">
                    <span style="background:#d1fae5; color:#065f46; padding:4px 10px; border-radius:20px; font-size:12px; font-weight:bold;">&bull; {{ ucfirst($tp->status) }}</span>
                </td>
                <td style="padding:15px 20px; text-align:right;">
                    <a href="{{ route('admin.test-pages.edit', $tp->id) }}" style="background:#fef3c7; color:#b45309; padding:6px 12px; border-radius:6px; text-decoration:none; font-size:13px; font-weight:bold; margin-right:5px;">Edit</a>
                    <form action="{{ route('admin.test-pages.destroy', $tp->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background:#fee2e2; color:#991b1b; padding:6px 12px; border-radius:6px; font-size:13px; font-weight:bold;">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
<div class="card" style="text-align:center; padding:40px; background:#f9fbfc; color:#71869a;">
    <p>No test pages assigned to this service yet.</p>
</div>
@endif

<template id="service-intro-fields">
    <section class="service-intro-admin-fields">
        <h2>Service introduction section</h2>
        <p class="hint">Manage the “What Is {{ $service->name }}?” section displayed below the hero.</p>
        <div class="field"><label>Introduction heading</label><input name="intro_heading" value="{{ old('intro_heading', $service->intro_heading) }}" placeholder="What Is {{ $service->name }}?"></div>
        <div class="field"><label>Introduction description</label><textarea name="intro_description" style="min-height:150px">{{ old('intro_description', $service->intro_description) }}</textarea><span class="hint">Use a blank line to separate paragraphs.</span></div>
        <div class="field"><label>Bullet points</label><textarea name="intro_bullets">{{ old('intro_bullets', $service->intro_bullets) }}</textarea><span class="hint">Enter one bullet point per line.</span></div>
        <div class="field"><label>Introduction image</label><input type="file" name="intro_image" accept="image/png,image/jpeg,image/webp">@if($introImageExists)<img class="preview" src="{{ route('media.public', ['path' => $service->intro_image]) }}" alt="Current introduction image">@endif<span class="hint">Leave blank to keep the current image. JPG, PNG or WebP, maximum 5 MB.</span></div>
        <hr style="border:0;border-top:1px solid #e1ecf2;margin:28px 0">
    </section>
</template>
<script>
    (() => {
        const form = document.querySelector('form.card');
        const target = [...form.querySelectorAll('h2')].find(heading => heading.textContent.trim() === 'Service highlight cards');
        const template = document.querySelector('#service-intro-fields');
        if (target && template) target.before(template.content);
    })();
</script>
</main></body></html>
