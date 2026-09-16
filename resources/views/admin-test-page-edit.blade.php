<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Admin Dashboard - Edit Test Page</title>
    <style>
        :root{--navy:#06233d;--deep:#03172b;--teal:#16c7b1;--ink:#12304c;--muted:#7890a8;--line:#dbe8f1}*{box-sizing:border-box}body{margin:0;min-width:320px;font-family:Inter,ui-sans-serif,system-ui,-apple-system,"Segoe UI",Arial,sans-serif;color:var(--ink);background:#f1f7fb}.admin{min-height:100vh;display:grid;grid-template-columns:205px minmax(0,1fr)}.sidebar{min-height:100vh;padding:15px;color:#d6e3ec;background:radial-gradient(circle at 24% 0,#12647b 0,transparent 31%),linear-gradient(170deg,#093a61,#03192e 76%);display:flex;flex-direction:column}.brand{display:flex;gap:10px;align-items:center;padding:2px 2px 23px;color:#fff}.brand-mark{width:37px;height:37px;display:grid;place-items:center;border-radius:10px;background:linear-gradient(145deg,#1fd7c1,#057d96);box-shadow:0 8px 18px rgba(0,0,0,.15)}.brand-mark:before{content:"⚗";font-size:19px}.brand b{display:block;font-size:15px}.brand small{display:block;margin-top:2px;color:#9db5c8;font-size:8px}.section-label{margin:0 7px 8px;color:#87a5bb;font-size:8px;font-weight:800;letter-spacing:.11em;text-transform:uppercase}.nav{margin-bottom:20px}.nav a{display:flex;align-items:center;gap:11px;min-height:33px;margin:2px 0;padding:8px 10px;color:#bfd0dd;text-decoration:none;border-radius:8px;font-size:10px;font-weight:650;transition:.18s}.nav a:hover,.nav a.active{color:#fff;background:linear-gradient(90deg,#0aa990,#165986);box-shadow:0 7px 16px rgba(0,0,0,.13)}.nav svg{width:16px;height:16px;flex:none;fill:none;stroke:currentColor;stroke-width:1.8}.sidebar-rule{height:1px;margin:0 7px 15px;background:rgba(203,228,242,.12)}.upgrade{margin-top:auto;padding:11px;display:flex;align-items:center;gap:9px;border-radius:9px;color:#d4f7f2;background:linear-gradient(110deg,#087c81,#13536d);font-size:8px}.upgrade-icon{width:27px;height:27px;display:grid;place-items:center;flex:none;border-radius:7px;color:#087e7e;background:#bff7ea;font-size:14px}.upgrade b{display:block;color:#fff;font-size:10px;margin-bottom:2px}.main{min-width:0;padding:0 18px 28px;background:linear-gradient(115deg,#edf7fc 0,#f8fbfd 48%,#edf6fb 100%)}.utility{height:48px;display:flex;align-items:center;justify-content:space-between;gap:16px;margin:0 -18px 10px;padding:0 22px;background:#fff;border-bottom:1px solid #e0eaf1;box-shadow:0 2px 8px rgba(16,48,76,.04)}.utility-left,.utility-right{display:flex;align-items:center;gap:13px}.menu-icon{color:#4d6c86;font-size:17px}.search{width:min(280px,32vw);height:29px;display:flex;align-items:center;gap:7px;padding:0 10px;border-radius:7px;color:#88a1b5;background:#f2f7fb;font-size:9px}.search b{font-size:14px;font-weight:400}.notification{position:relative;color:#4c6d89;font-size:16px}.notification:after{content:"3";position:absolute;top:-5px;right:-7px;width:11px;height:11px;display:grid;place-items:center;color:#fff;background:#ff4c53;border-radius:50%;font-size:7px;font-weight:800}.admin-avatar{width:27px;height:27px;display:grid;place-items:center;border-radius:50%;color:#fff;background:var(--navy);font-size:10px;font-weight:800}.account b,.account small{display:block}.account b{font-size:10px}.account small{color:var(--muted);font-size:8px}
        .panel { background: #fff; border: 1px solid #e1ebf2; border-radius: 10px; box-shadow: 0 7px 18px rgba(20, 65, 94, 0.05); }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; font-size: 13px; font-weight: bold; margin-bottom: 8px; color: #12304c; }
        .form-control { width: 100%; padding: 12px; border: 1px solid #cbdce7; border-radius: 8px; font-family: inherit; font-size: 14px; }
        .form-control:focus { outline: none; border-color: #16b9a7; }
        textarea.form-control { min-height: 120px; resize: vertical; }
        .btn-primary { background: #16b9a7; color: #fff; border: 0; padding: 12px 24px; border-radius: 8px; font-weight: bold; cursor: pointer; font-size: 14px; }
        .btn-primary:hover { background: #139f8f; }
        .is-invalid { border-color: #dc3545; }
        .invalid-feedback { color: #dc3545; font-size: 12px; margin-top: 5px; display: block; }
        .img-preview { width: 120px; height: 80px; object-fit: cover; border-radius: 8px; margin-top: 10px; }
        .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    </style>
</head>
<body>
<div class="admin">
    <aside class="sidebar">
        <div class="brand"><span class="brand-mark"></span><span class="brand-copy"><b>Lab Admin</b><small>Laboratory Management</small></span></div>
        <div class="section-label">Main menu</div>
        <nav class="nav">
            <a href="{{ route('admin.dashboard') }}"><svg viewBox="0 0 24 24"><path d="M3 11 12 3l9 8v10H3z"/><path d="M9 21v-6h6v6"/></svg><span>Dashboard</span></a>
            <a href="{{ route('admin.home-hero.edit') }}"><svg viewBox="0 0 24 24"><path d="M3 11 12 3l9 8v10H3z"/><path d="M9 21v-6h6v6"/></svg><span>Home Page</span></a>
            <a href="/admin/services"><svg viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M8 8h8M8 12h8M8 16h5"/></svg><span>Services</span></a>
            <a href="#"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg><span>Pages</span></a>
            <a href="#"><svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 10h18"/></svg><span>Appointment Page</span></a>
            <a href="#"><svg viewBox="0 0 24 24"><path d="M21 15a4 4 0 0 1-4 4H7l-4 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/></svg><span>Contact Us</span></a>
            <a href="{{ route('admin.blog-posts.index') }}"><svg viewBox="0 0 24 24"><path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zM9 17H7v-2h2v2zm0-4H7v-2h2v2zm0-4H7V7h2v2zm8 8h-6v-2h6v2zm0-4h-6v-2h6v2zm0-4h-6V7h6v2z"/></svg><span>Blog Posts</span></a>
            <a href="{{ route('admin.tests.index') }}"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg><span>Tests</span></a>
            <a class="active" href="{{ route('admin.test-pages.index') }}"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg><span>Test Pages</span></a>
            <a href="{{ route('admin.faqs.index') }}"><svg viewBox="0 0 24 24"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" fill="none" stroke="currentColor" stroke-width="1.8"/></svg><span>FAQs</span></a>
            <a href="{{ route('admin.authors.index') }}"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg><span>Authors</span></a>
        </nav>
    </aside>
    <main class="main" id="overview">
        <header class="utility">
            <div class="utility-left"></div>
            <div class="utility-right">
                <span class="admin-avatar">{{ strtoupper(substr($user->name ?? 'A',0,1)) }}</span>
                <span class="account"><b>{{ $user->name ?? 'Admin' }}</b><small>Lab Administrator</small></span>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" style="border:0;background:none;color:#58748c;font-size:9px;cursor:pointer">Sign out</button>
                </form>
            </div>
        </header>

        <div style="padding: 10px 20px 20px;">
            <a href="{{ route('admin.test-pages.index') }}" style="color:#2476c7; text-decoration:none; font-weight:bold; font-size: 13px;">← Test Pages</a>
        </div>

        <div style="padding: 0 20px; max-width: 900px;">
            <section class="panel" style="padding: 30px;">
                <h1 style="margin-top:0; font-size:24px; color: #12304c;">{{ $testPage->exists ? 'Edit Test Page' : 'Add Test Page' }}</h1>
                
                <form action="{{ $testPage->exists ? route('admin.test-pages.update', $testPage->id) : route('admin.test-pages.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if($testPage->exists) @method('PUT') @endif
                    
                    <div class="grid-2">
                        <div class="form-group">
                            <label>Service Category</label>
                            <input type="hidden" name="service_id" value="{{ old('service_id', $testPage->service_id ?? request('service_id')) }}">
                            @php
                                $currentServiceId = old('service_id', $testPage->service_id ?? request('service_id'));
                                $currentService = $services->firstWhere('id', $currentServiceId);
                            @endphp
                            <div style="background:#f4f8fb; border:1px solid #e1ebf2; border-radius:8px; padding:11px; font-weight:bold; color:#58748c;">
                                {{ $currentService ? $currentService->name : 'None Selected' }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Test Page Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $testPage->title) }}" required>
                            @error('title') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="draft" {{ old('status', $testPage->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                                <option value="active" {{ old('status', $testPage->status) == 'active' || old('status', $testPage->status) == 'published' ? 'selected' : '' }}>Active</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Hero Description</label>
                        <textarea name="description" class="form-control">{{ old('description', $testPage->description) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Hero Background Image</label>
                        <input type="file" name="bg_image" class="form-control">
                        @if($testPage->bg_image)
                            <img src="{{ asset('storage/' . $testPage->bg_image) }}" class="img-preview">
                        @endif
                    </div>

                    <h3 style="margin-top: 30px; margin-bottom: 15px; border-bottom: 1px solid #e1ebf2; padding-bottom: 10px;">Quick Info Section</h3>
                    <div class="grid-2">
                        <div class="form-group">
                            <label>Test Type (e.g. Blood Test)</label>
                            <input type="text" name="quick_info_type" class="form-control" value="{{ old('quick_info_type', $testPage->quick_info_type) }}">
                        </div>
                        <div class="form-group">
                            <label>Specimen (e.g. Whole Blood)</label>
                            <input type="text" name="quick_info_specimen" class="form-control" value="{{ old('quick_info_specimen', $testPage->quick_info_specimen) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Preparation (e.g. No Special Preparation)</label>
                        <input type="text" name="quick_info_prep" class="form-control" value="{{ old('quick_info_prep', $testPage->quick_info_prep) }}">
                    </div>

                    <h3 style="margin-top: 30px; margin-bottom: 15px; border-bottom: 1px solid #e1ebf2; padding-bottom: 10px;">About Section</h3>
                    <div class="form-group">
                        <label>About Heading (e.g. What Is a CBC Test?)</label>
                        <input type="text" name="about_heading" class="form-control" value="{{ old('about_heading', $testPage->about_heading) }}">
                    </div>
                    <div class="form-group">
                        <label>About Text</label>
                        <textarea name="about_text" class="form-control">{{ old('about_text', $testPage->about_text) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>About Image</label>
                        <input type="file" name="about_image" class="form-control">
                        @if($testPage->about_image)
                            <img src="{{ asset('storage/' . $testPage->about_image) }}" class="img-preview">
                        @endif
                    </div>

                    <h3 style="margin-top: 30px; margin-bottom: 15px; border-bottom: 1px solid #e1ebf2; padding-bottom: 10px;">Key Components Section</h3>
                    <div class="form-group">
                        <label>Components Heading (e.g. Key Components of a CBC)</label>
                        <input type="text" name="components_heading" class="form-control" value="{{ old('components_heading', $testPage->components_heading) }}">
                    </div>
                    <div class="form-group">
                        <label>Components Description Text</label>
                        <textarea name="components_text" class="form-control" style="min-height:70px;">{{ old('components_text', $testPage->components_text) }}</textarea>
                    </div>

                    <div id="components-container">
                        @if($testPage->exists && $testPage->components->count())
                            @foreach($testPage->components as $index => $component)
                                <div class="component-card" style="background:#f9fbfc; border:1px solid #e1ebf2; padding:15px; margin-bottom:15px; border-radius:8px; position:relative;">
                                    <button type="button" onclick="this.parentElement.remove()" style="position:absolute; top:10px; right:10px; background:#dc3545; color:white; border:none; border-radius:4px; padding:5px 10px; cursor:pointer; font-size:11px;">Remove</button>
                                    <input type="hidden" name="components[{{ $index }}][id]" value="{{ $component->id }}">
                                    <div class="grid-2">
                                        <div class="form-group">
                                            <label>Component Title</label>
                                            <input type="text" name="components[{{ $index }}][title]" class="form-control" value="{{ $component->title }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Icon Image</label>
                                            <input type="file" name="components[{{ $index }}][icon]" class="form-control">
                                            @if($component->icon)
                                                <img src="{{ asset('storage/' . $component->icon) }}" style="height:40px; margin-top:5px; border-radius:4px;">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom:0;">
                                        <label>Component Description</label>
                                        <textarea name="components[{{ $index }}][description]" class="form-control" style="min-height:70px;">{{ $component->description }}</textarea>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <button type="button" id="add-component-btn" style="background:#f2f7fb; color:#12304c; border:1px dashed #cbdce7; border-radius:8px; padding:12px; width:100%; font-weight:bold; cursor:pointer; text-align:center; margin-bottom: 30px;">+ Add Key Component</button>

                    <h3 style="margin-top: 30px; margin-bottom: 15px; border-bottom: 1px solid #e1ebf2; padding-bottom: 10px;">Specimen & Preparation Details</h3>
                    <div class="grid-2">
                        <!-- Specimen Box -->
                        <div style="background: #f8fafc; padding: 20px; border-radius: 8px; border: 1px solid #e2e8f0;">
                            <h4 style="margin: 0 0 15px 0; color: #0f172a;">Specimen Details</h4>
                            <div class="form-group">
                                <label>Title (e.g. What Sample Is Needed?)</label>
                                <input type="text" name="specimen_title" class="form-control" value="{{ old('specimen_title', $testPage->specimen_title) }}">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="specimen_description" class="form-control" rows="3">{{ old('specimen_description', $testPage->specimen_description) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Bullet Points</label>
                                <div id="specimen-items-container">
                                    @php
                                        $specimenItems = $testPage->specimen_items ? explode("\n", $testPage->specimen_items) : [''];
                                    @endphp
                                    @foreach($specimenItems as $item)
                                    <div class="dynamic-field" style="display: flex; gap: 10px; margin-bottom: 10px;">
                                        <input type="text" name="specimen_items[]" class="form-control" value="{{ old('specimen_items.'.$loop->index, $item) }}" placeholder="e.g. Whole blood specimen">
                                        <button type="button" onclick="this.parentElement.remove()" style="background:#fbeceb; color:#8e2b2b; border:none; border-radius:4px; padding:0 12px; cursor:pointer; font-weight:bold;">&times;</button>
                                    </div>
                                    @endforeach
                                </div>
                                <button type="button" onclick="addSpecimenItem()" style="background:#f2f7fb; color:#12304c; border:1px dashed #cbdce7; border-radius:6px; padding:8px; width:100%; font-size: 12px; font-weight:bold; cursor:pointer; text-align:center;">+ Add Point</button>
                            </div>
                        </div>

                        <!-- Preparation Box -->
                        <div style="background: #f8fafc; padding: 20px; border-radius: 8px; border: 1px solid #e2e8f0;">
                            <h4 style="margin: 0 0 15px 0; color: #0f172a;">Preparation Details</h4>
                            <div class="form-group">
                                <label>Title (e.g. Preparing for Your Test)</label>
                                <input type="text" name="preparation_title" class="form-control" value="{{ old('preparation_title', $testPage->preparation_title) }}">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="preparation_description" class="form-control" rows="3">{{ old('preparation_description', $testPage->preparation_description) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Bullet Points</label>
                                <div id="preparation-items-container">
                                    @php
                                        $prepItems = $testPage->preparation_items ? explode("\n", $testPage->preparation_items) : [''];
                                    @endphp
                                    @foreach($prepItems as $item)
                                    <div class="dynamic-field" style="display: flex; gap: 10px; margin-bottom: 10px;">
                                        <input type="text" name="preparation_items[]" class="form-control" value="{{ old('preparation_items.'.$loop->index, $item) }}" placeholder="e.g. Follow instructions">
                                        <button type="button" onclick="this.parentElement.remove()" style="background:#fbeceb; color:#8e2b2b; border:none; border-radius:4px; padding:0 12px; cursor:pointer; font-weight:bold;">&times;</button>
                                    </div>
                                    @endforeach
                                </div>
                                <button type="button" onclick="addPreparationItem()" style="background:#f2f7fb; color:#12304c; border:1px dashed #cbdce7; border-radius:6px; padding:8px; width:100%; font-size: 12px; font-weight:bold; cursor:pointer; text-align:center;">+ Add Point</button>
                            </div>
                        </div>
                    </div>

                    <h3 style="margin-top: 30px; margin-bottom: 15px; border-bottom: 1px solid #e1ebf2; padding-bottom: 10px;">Results Section</h3>
                    <div class="form-group">
                        <label>Results Heading (e.g. What Do CBC Results Tell You?)</label>
                        <input type="text" name="results_heading" class="form-control" value="{{ old('results_heading', $testPage->results_heading) }}">
                    </div>
                    <div class="form-group">
                        <label>Results Description Text</label>
                        <textarea name="results_text" class="form-control" style="min-height:70px;">{{ old('results_text', $testPage->results_text) }}</textarea>
                    </div>

                    <div id="results-container">
                        @if($testPage->exists && $testPage->results && $testPage->results->count())
                            @foreach($testPage->results as $index => $result)
                                <div class="result-card" style="background:#f9fbfc; border:1px solid #e1ebf2; padding:15px; margin-bottom:15px; border-radius:8px; position:relative;">
                                    <button type="button" onclick="this.parentElement.remove()" style="position:absolute; top:10px; right:10px; background:#dc3545; color:white; border:none; border-radius:4px; padding:5px 10px; cursor:pointer; font-size:11px;">Remove</button>
                                    <input type="hidden" name="results[{{ $index }}][id]" value="{{ $result->id }}">
                                    <div class="form-group">
                                        <label>Result Title</label>
                                        <input type="text" name="results[{{ $index }}][title]" class="form-control" value="{{ $result->title }}" required>
                                    </div>
                                    <div class="form-group" style="margin-bottom:0;">
                                        <label>Result Description</label>
                                        <textarea name="results[{{ $index }}][description]" class="form-control" style="min-height:70px;">{{ $result->description }}</textarea>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <button type="button" id="add-result-btn" style="background:#f2f7fb; color:#12304c; border:1px dashed #cbdce7; border-radius:8px; padding:12px; width:100%; font-weight:bold; cursor:pointer; text-align:center;">+ Add Result</button>

                    <div style="margin-top: 30px;">
                        <button type="submit" class="btn-primary">Save Test Page</button>
                    </div>
                </form>
            </section>
        </div>
    </main>
</div>
<script>
    let componentIndex = {{ $testPage->exists ? $testPage->components->count() : 0 }};
    document.getElementById('add-component-btn').addEventListener('click', function() {
        const container = document.getElementById('components-container');
        const html = `
            <div class="component-card" style="background:#f9fbfc; border:1px solid #e1ebf2; padding:15px; margin-bottom:15px; border-radius:8px; position:relative;">
                <button type="button" onclick="this.parentElement.remove()" style="position:absolute; top:10px; right:10px; background:#dc3545; color:white; border:none; border-radius:4px; padding:5px 10px; cursor:pointer; font-size:11px;">Remove</button>
                <div class="grid-2">
                    <div class="form-group">
                        <label>Component Title</label>
                        <input type="text" name="components[${componentIndex}][title]" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Icon Image</label>
                        <input type="file" name="components[${componentIndex}][icon]" class="form-control">
                    </div>
                </div>
                <div class="form-group" style="margin-bottom:0;">
                    <label>Component Description</label>
                    <textarea name="components[${componentIndex}][description]" class="form-control" style="min-height:70px;"></textarea>
                </div>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', html);
        componentIndex++;
    });

    let resultIndex = {{ $testPage->exists && $testPage->results ? $testPage->results->count() : 0 }};
    document.getElementById('add-result-btn').addEventListener('click', function() {
        const container = document.getElementById('results-container');
        const html = `
            <div class="result-card" style="background:#f9fbfc; border:1px solid #e1ebf2; padding:15px; margin-bottom:15px; border-radius:8px; position:relative;">
                <button type="button" onclick="this.parentElement.remove()" style="position:absolute; top:10px; right:10px; background:#dc3545; color:white; border:none; border-radius:4px; padding:5px 10px; cursor:pointer; font-size:11px;">Remove</button>
                <div class="form-group">
                    <label>Result Title</label>
                    <input type="text" name="results[${resultIndex}][title]" class="form-control" required>
                </div>
                <div class="form-group" style="margin-bottom:0;">
                    <label>Result Description</label>
                    <textarea name="results[${resultIndex}][description]" class="form-control" style="min-height:70px;"></textarea>
                </div>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', html);
        resultIndex++;
    });

    function addSpecimenItem() {
        const container = document.getElementById('specimen-items-container');
        const html = `
        <div class="dynamic-field" style="display: flex; gap: 10px; margin-bottom: 10px;">
            <input type="text" name="specimen_items[]" class="form-control" placeholder="e.g. Whole blood specimen">
            <button type="button" onclick="this.parentElement.remove()" style="background:#fbeceb; color:#8e2b2b; border:none; border-radius:4px; padding:0 12px; cursor:pointer; font-weight:bold;">&times;</button>
        </div>`;
        container.insertAdjacentHTML('beforeend', html);
    }

    function addPreparationItem() {
        const container = document.getElementById('preparation-items-container');
        const html = `
        <div class="dynamic-field" style="display: flex; gap: 10px; margin-bottom: 10px;">
            <input type="text" name="preparation_items[]" class="form-control" placeholder="e.g. Follow instructions">
            <button type="button" onclick="this.parentElement.remove()" style="background:#fbeceb; color:#8e2b2b; border:none; border-radius:4px; padding:0 12px; cursor:pointer; font-weight:bold;">&times;</button>
        </div>`;
        container.insertAdjacentHTML('beforeend', html);
    }

    document.querySelectorAll('.nav a[href="/"]').forEach(function (link) { link.href = '{{ route('admin.home-hero.edit') }}'; });
    document.querySelectorAll('.nav a[href="#contacts"]').forEach(function (link) { link.href = '{{ route('admin.contact-settings.edit') }}'; });
    document.querySelectorAll('.nav a[href="/services"]').forEach(function (link) { link.href = '{{ route('admin.services.index') }}'; });
    const servicesLink = document.querySelector('.nav a[href="{{ route('admin.services.index') }}"]');
    if (servicesLink && !document.querySelector('.nav a[href="{{ route('admin.tests.index') }}"]')) {
        const testLink = servicesLink.cloneNode(true);
        testLink.href = '{{ route('admin.tests.index') }}';
        testLink.querySelector('span').textContent = 'Tests';
        servicesLink.parentNode.insertBefore(testLink, servicesLink.nextSibling);

        const testPagesLink = servicesLink.cloneNode(true);
        testPagesLink.href = '{{ route('admin.test-pages.index') }}';
        testPagesLink.querySelector('span').textContent = 'Test Pages';
        servicesLink.parentNode.insertBefore(testPagesLink, testLink.nextSibling);

        
    }
</script>
</body>
</html>
