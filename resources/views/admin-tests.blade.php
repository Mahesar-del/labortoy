<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Admin Dashboard - Tests</title>
    <style>
        :root{--navy:#06233d;--deep:#03172b;--teal:#16c7b1;--ink:#12304c;--muted:#7890a8;--line:#dbe8f1}*{box-sizing:border-box}body{margin:0;min-width:320px;font-family:Inter,ui-sans-serif,system-ui,-apple-system,"Segoe UI",Arial,sans-serif;color:var(--ink);background:#f1f7fb}.admin{min-height:100vh;display:grid;grid-template-columns:205px minmax(0,1fr)}.sidebar{min-height:100vh;padding:15px;color:#d6e3ec;background:radial-gradient(circle at 24% 0,#12647b 0,transparent 31%),linear-gradient(170deg,#093a61,#03192e 76%);display:flex;flex-direction:column}.brand{display:flex;gap:10px;align-items:center;padding:2px 2px 23px;color:#fff}.brand-mark{width:37px;height:37px;display:grid;place-items:center;border-radius:10px;background:linear-gradient(145deg,#1fd7c1,#057d96);box-shadow:0 8px 18px rgba(0,0,0,.15)}.brand-mark:before{content:"⚗";font-size:19px}.brand b{display:block;font-size:15px}.brand small{display:block;margin-top:2px;color:#9db5c8;font-size:8px}.section-label{margin:0 7px 8px;color:#87a5bb;font-size:8px;font-weight:800;letter-spacing:.11em;text-transform:uppercase}.nav{margin-bottom:20px}.nav a{display:flex;align-items:center;gap:11px;min-height:33px;margin:2px 0;padding:8px 10px;color:#bfd0dd;text-decoration:none;border-radius:8px;font-size:10px;font-weight:650;transition:.18s}.nav a:hover,.nav a.active{color:#fff;background:linear-gradient(90deg,#0aa990,#165986);box-shadow:0 7px 16px rgba(0,0,0,.13)}.nav svg{width:16px;height:16px;flex:none;fill:none;stroke:currentColor;stroke-width:1.8}.sidebar-rule{height:1px;margin:0 7px 15px;background:rgba(203,228,242,.12)}.upgrade{margin-top:auto;padding:11px;display:flex;align-items:center;gap:9px;border-radius:9px;color:#d4f7f2;background:linear-gradient(110deg,#087c81,#13536d);font-size:8px}.upgrade-icon{width:27px;height:27px;display:grid;place-items:center;flex:none;border-radius:7px;color:#087e7e;background:#bff7ea;font-size:14px}.upgrade b{display:block;color:#fff;font-size:10px;margin-bottom:2px}.main{min-width:0;padding:0 18px 28px;background:linear-gradient(115deg,#edf7fc 0,#f8fbfd 48%,#edf6fb 100%)}.utility{height:48px;display:flex;align-items:center;justify-content:space-between;gap:16px;margin:0 -18px 10px;padding:0 22px;background:#fff;border-bottom:1px solid #e0eaf1;box-shadow:0 2px 8px rgba(16,48,76,.04)}.utility-left,.utility-right{display:flex;align-items:center;gap:13px}.menu-icon{color:#4d6c86;font-size:17px}.search{width:min(280px,32vw);height:29px;display:flex;align-items:center;gap:7px;padding:0 10px;border-radius:7px;color:#88a1b5;background:#f2f7fb;font-size:9px}.search b{font-size:14px;font-weight:400}.notification{position:relative;color:#4c6d89;font-size:16px}.notification:after{content:"3";position:absolute;top:-5px;right:-7px;width:11px;height:11px;display:grid;place-items:center;color:#fff;background:#ff4c53;border-radius:50%;font-size:7px;font-weight:800}.admin-avatar{width:27px;height:27px;display:grid;place-items:center;border-radius:50%;color:#fff;background:var(--navy);font-size:10px;font-weight:800}.account b,.account small{display:block}.account b{font-size:10px}.account small{color:var(--muted);font-size:8px}
        .success-msg { padding: 12px; margin: 15px 20px; border-radius: 8px; background: #e8f5e9; color: #2e7d32; border: 1px solid #c8e6c9; }
        .panel { background: #fff; border: 1px solid #e1ebf2; border-radius: 10px; box-shadow: 0 7px 18px rgba(20, 65, 94, 0.05); }
    </style>
</head>
<body class="admin-inner-page">
@include('components.admin-sidebar')
<main class="main" id="overview">
<div style="padding: 10px 20px 20px;">
    <h1 style="margin: 0; font-size: 28px; color: #12304c; letter-spacing: -0.02em;">Tests</h1>
    <p style="margin-top: 8px; color: #4b6a84; font-size: 14px;">Create, edit, or remove tests assigned to services.</p>
</div>

@if(session('success'))
<div class="success-msg">{{ session('success') }}</div>
@endif

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; padding: 0 20px;">
    <!-- Add Test Form -->
    <section class="panel" style="padding: 24px;">
        <h2 style="margin-top:0; font-size:18px; color: #12304c;">Add Test</h2>
        <form method="post" action="{{route('admin.tests.store')}}" enctype="multipart/form-data">
            @csrf
            <div style="margin: 15px 0;">
                <label style="display:block; font-size:13px; font-weight:bold; margin-bottom:6px; color:#12304c;">Assign to service</label>
                <select name="service_id" required style="width:100%; padding:11px; border:1px solid #cbdce7; border-radius:8px; font-family: inherit;">
                    <option value="">Select service</option>
                    @foreach($services as $service)
                    <option value="{{$service->id}}">{{$service->name}}</option>
                    @endforeach
                </select>
            </div>
            <div style="margin: 15px 0;">
                <label style="display:block; font-size:13px; font-weight:bold; margin-bottom:6px; color:#12304c;">Test name</label>
                <input name="name" required style="width:100%; padding:11px; border:1px solid #cbdce7; border-radius:8px; font-family: inherit;">
            </div>
            <div style="margin: 15px 0;">
                <label style="display:block; font-size:13px; font-weight:bold; margin-bottom:6px; color:#12304c;">Card heading</label>
                <input name="heading" style="width:100%; padding:11px; border:1px solid #cbdce7; border-radius:8px; font-family: inherit;">
            </div>
            <div style="margin: 15px 0;">
                <label style="display:block; font-size:13px; font-weight:bold; margin-bottom:6px; color:#12304c;">Description</label>
                <textarea name="description" style="width:100%; padding:11px; border:1px solid #cbdce7; border-radius:8px; min-height:100px; font-family: inherit; resize: vertical;"></textarea>
            </div>
            <div style="margin: 15px 0;">
                <label style="display:block; font-size:13px; font-weight:bold; margin-bottom:6px; color:#12304c;">Test photo</label>
                <input type="file" name="image" accept="image/png,image/jpeg,image/webp" style="width:100%; padding:11px; border:1px solid #cbdce7; border-radius:8px; font-family: inherit; background: #fff;">
            </div>
            <h3 style="margin-top:25px; margin-bottom:15px; font-size:15px; color:#12304c; border-bottom:1px solid #e1ecf2; padding-bottom:10px;">FAQ Section</h3>
            <div style="margin: 15px 0;">
                <label style="display:block; font-size:13px; font-weight:bold; margin-bottom:6px; color:#12304c;">FAQ heading</label>
                <input name="faq_heading" style="width:100%; padding:11px; border:1px solid #cbdce7; border-radius:8px; font-family: inherit;">
            </div>
            <div style="margin: 15px 0;">
                <label style="display:block; font-size:13px; font-weight:bold; margin-bottom:6px; color:#12304c;">FAQ description</label>
                <textarea name="faq_description" style="width:100%; padding:11px; border:1px solid #cbdce7; border-radius:8px; min-height:80px; font-family: inherit; resize: vertical;"></textarea>
            </div>
            <button style="border:0; border-radius:8px; padding:12px 18px; background:#16b9a7; color:#fff; font-weight:bold; cursor:pointer; margin-top: 10px;">Add test</button>
        </form>
    </section>

    <!-- Assigned Tests List -->
    <section>
        <h2 style="margin-top:0; font-size:18px; color: #12304c; margin-bottom: 20px;">Assigned Tests</h2>
        <div style="display:flex; flex-direction: column; gap: 20px;">
            @forelse($tests as $test)
            <article style="padding: 0 0 20px 0; border-bottom: 1px solid #e1ecf2;">
                <h3 style="margin:0 0 6px; color:#12304c; font-size: 16px;">{{ $test->heading ?: $test->name }}</h3>
                <p style="margin:0; color:#668099; font-size: 13px; line-height:1.5;">{{ $test->description ?: 'No description added.' }}</p>
                <div style="margin-top: 8px; margin-bottom: 12px;">
                    <span style="display:inline-block; padding:4px 10px; border-radius:12px; background:#e5f8f3; color:#068b78; font-size:10px; font-weight:bold;">{{ $test->service_name }}</span>
                </div>
                <div style="display: flex; gap: 12px; align-items: center;">
                    <a href="{{ route('admin.tests.edit', $test->id) }}" style="color:#2476c7; text-decoration:none; font-weight:bold; font-size:13px;">Edit</a>
                    <form method="post" action="{{ route('admin.tests.delete', $test->id) }}" style="display:inline;" onsubmit="return confirm('Delete this test?')">
                        @csrf
                        <button style="background:#dc4b52; color:#fff; border:none; padding:6px 14px; border-radius:6px; font-weight:bold; cursor:pointer; font-size:12px;">Delete</button>
                    </form>
                </div>
            </article>
            @empty
            <p style="color: #668099; font-size: 14px;">No tests added yet.</p>
            @endforelse
        </div>
    </section>
</div>

</main>
</body></html>
