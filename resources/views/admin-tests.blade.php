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
<body>
<div class="admin"><aside class="sidebar"><div class="brand"><span class="brand-mark"></span><span class="brand-copy"><b>Lab Admin</b><small>Laboratory Management</small></span></div><div class="section-label">Main menu</div><nav class="nav"><a href="{{ route('admin.dashboard') }}"><svg viewBox="0 0 24 24"><path d="M3 11 12 3l9 8v10H3z"/><path d="M9 21v-6h6v6"/></svg><span>Dashboard</span></a><a href="{{ route('admin.home-hero.edit') }}"><svg viewBox="0 0 24 24"><path d="M3 11 12 3l9 8v10H3z"/><path d="M9 21v-6h6v6"/></svg><span>Home Page</span></a><a href="/admin/services"><svg viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M8 8h8M8 12h8M8 16h5"/></svg><span>Services</span></a><a href="#"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg><span>Pages</span></a><a href="#"><svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 10h18"/></svg><span>Appointment Page</span></a><a href="#"><svg viewBox="0 0 24 24"><path d="M21 15a4 4 0 0 1-4 4H7l-4 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/></svg><span>Contact Us</span></a><a href="{{ route('admin.blog-posts.index') }}"><svg viewBox="0 0 24 24"><path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zM9 17H7v-2h2v2zm0-4H7v-2h2v2zm0-4H7V7h2v2zm8 8h-6v-2h6v2zm0-4h-6v-2h6v2zm0-4h-6V7h6v2z"/></svg><span>Blog Posts</span></a><a class="active" href="{{ route('admin.tests.index') }}"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg><span>Tests</span></a><a href="{{ route('admin.faqs.index') }}"><svg viewBox="0 0 24 24"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" fill="none" stroke="currentColor" stroke-width="1.8"/></svg><span>FAQs</span></a>
            <a href="{{ route('admin.authors.index') }}"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg><span>Authors</span></a></nav><div class="sidebar-rule"></div><div class="section-label">System</div><nav class="nav"><a href="#"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.7 1.7 0 0 0 .34 1.88l.06.06-2.1 2.1-.06-.06a1.7 1.7 0 0 0-1.88-.34 1.7 1.7 0 0 0-1.03 1.56v.1h-3v-.1A1.7 1.7 0 0 0 10.7 18.6a1.7 1.7 0 0 0-1.88.34l-.06.06-2.1-2.1.06-.06A1.7 1.7 0 0 0 7.06 15a1.7 1.7 0 0 0-1.56-1.03h-.1v-3h.1A1.7 1.7 0 0 0 7.06 9a1.7 1.7 0 0 0-.34-1.88l-.06-.06 2.1-2.1.06.06A1.7 1.7 0 0 0 10.7 5.36a1.7 1.7 0 0 0 1.03-1.56v-.1h3v.1a1.7 1.7 0 0 0 1.03 1.56 1.7 1.7 0 0 0 1.88-.34l.06-.06 2.1 2.1-.06.06A1.7 1.7 0 0 0 19.4 9a1.7 1.7 0 0 0 1.56 1.03h.1v3h-.1A1.7 1.7 0 0 0 19.4 15Z"/></svg><span>Settings</span></a></nav><div class="upgrade"><span class="upgrade-icon">▥</span><div><b>Lab Admin Pro</b>Manage your lab efficiently</div></div></aside><main class="main" id="overview"><header class="utility"><div class="utility-left"><span class="menu-icon">☰</span><form class="search" action="{{ route('admin.tests.index') }}"><button type="submit" style="background:none;border:none;padding:0;cursor:pointer;color:inherit;"><b>⌕</b></button> <input type="text" name="search" placeholder="Search tests..." value="{{ request('search') }}" style="border:none;background:transparent;outline:none;font-size:inherit;color:inherit;width:100%;"></form></div><div class="utility-right"><span class="notification">♧</span><span class="admin-avatar">{{ strtoupper(substr($user->name ?? 'A',0,1)) }}</span><span class="account"><b>{{ $user->name ?? 'Admin' }}</b><small>Lab Administrator</small></span><form method="POST" action="{{ route('admin.logout') }}">@csrf<button type="submit" style="border:0;background:none;color:#58748c;font-size:9px;cursor:pointer">Sign out</button></form></div></header>

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

</main></div>
</body></html>
