<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Admin Dashboard - Test Pages</title>
    <style>
        :root{--navy:#06233d;--deep:#03172b;--teal:#16c7b1;--ink:#12304c;--muted:#7890a8;--line:#dbe8f1}*{box-sizing:border-box}body{margin:0;min-width:320px;font-family:Inter,ui-sans-serif,system-ui,-apple-system,"Segoe UI",Arial,sans-serif;color:var(--ink);background:#f1f7fb}.admin{min-height:100vh;display:grid;grid-template-columns:205px minmax(0,1fr)}.sidebar{min-height:100vh;padding:15px;color:#d6e3ec;background:radial-gradient(circle at 24% 0,#12647b 0,transparent 31%),linear-gradient(170deg,#093a61,#03192e 76%);display:flex;flex-direction:column}.brand{display:flex;gap:10px;align-items:center;padding:2px 2px 23px;color:#fff}.brand-mark{width:37px;height:37px;display:grid;place-items:center;border-radius:10px;background:linear-gradient(145deg,#1fd7c1,#057d96);box-shadow:0 8px 18px rgba(0,0,0,.15)}.brand-mark:before{content:"⚗";font-size:19px}.brand b{display:block;font-size:15px}.brand small{display:block;margin-top:2px;color:#9db5c8;font-size:8px}.section-label{margin:0 7px 8px;color:#87a5bb;font-size:8px;font-weight:800;letter-spacing:.11em;text-transform:uppercase}.nav{margin-bottom:20px}.nav a{display:flex;align-items:center;gap:11px;min-height:33px;margin:2px 0;padding:8px 10px;color:#bfd0dd;text-decoration:none;border-radius:8px;font-size:10px;font-weight:650;transition:.18s}.nav a:hover,.nav a.active{color:#fff;background:linear-gradient(90deg,#0aa990,#165986);box-shadow:0 7px 16px rgba(0,0,0,.13)}.nav svg{width:16px;height:16px;flex:none;fill:none;stroke:currentColor;stroke-width:1.8}.sidebar-rule{height:1px;margin:0 7px 15px;background:rgba(203,228,242,.12)}.upgrade{margin-top:auto;padding:11px;display:flex;align-items:center;gap:9px;border-radius:9px;color:#d4f7f2;background:linear-gradient(110deg,#087c81,#13536d);font-size:8px}.upgrade-icon{width:27px;height:27px;display:grid;place-items:center;flex:none;border-radius:7px;color:#087e7e;background:#bff7ea;font-size:14px}.upgrade b{display:block;color:#fff;font-size:10px;margin-bottom:2px}.main{min-width:0;padding:0 18px 28px;background:linear-gradient(115deg,#edf7fc 0,#f8fbfd 48%,#edf6fb 100%)}.utility{height:48px;display:flex;align-items:center;justify-content:space-between;gap:16px;margin:0 -18px 10px;padding:0 22px;background:#fff;border-bottom:1px solid #e0eaf1;box-shadow:0 2px 8px rgba(16,48,76,.04)}.utility-left,.utility-right{display:flex;align-items:center;gap:13px}.menu-icon{color:#4d6c86;font-size:17px}.search{width:min(280px,32vw);height:29px;display:flex;align-items:center;gap:7px;padding:0 10px;border-radius:7px;color:#88a1b5;background:#f2f7fb;font-size:9px}.search b{font-size:14px;font-weight:400}.notification{position:relative;color:#4c6d89;font-size:16px}.notification:after{content:"3";position:absolute;top:-5px;right:-7px;width:11px;height:11px;display:grid;place-items:center;color:#fff;background:#ff4c53;border-radius:50%;font-size:7px;font-weight:800}.admin-avatar{width:27px;height:27px;display:grid;place-items:center;border-radius:50%;color:#fff;background:var(--navy);font-size:10px;font-weight:800}.account b,.account small{display:block}.account b{font-size:10px}.account small{color:var(--muted);font-size:8px}
        .success-msg { padding: 12px; margin: 15px 0; border-radius: 8px; background: #e8f5e9; color: #2e7d32; border: 1px solid #c8e6c9; }
        .panel { background: #fff; border: 1px solid #e1ebf2; border-radius: 10px; box-shadow: 0 7px 18px rgba(20, 65, 94, 0.05); }
        table { width: 100%; border-collapse: collapse; text-align: left; }
        th { padding: 7px 9px; color: #7e96ad; background: #f4f8fb; font-size: 7px; letter-spacing: .05em; text-transform: uppercase; }
        td { padding: 10px 9px; border-bottom: 1px solid var(--line); font-size: 9px; }
        .badge { display: inline-block; padding: 4px 7px; border-radius: 99px; font-size: 7px; font-weight: 800; }
        .confirmed { color: #078b78; background: #e4faf5; }
        .pending { color: #c16d13; background: #fff3e2; }
        .empty-state { height: 135px; color: #7891a6; text-align: center; font-size: 10px; }
        .empty-state:before { content: "▦"; display: block; margin: 24px auto 8px; color: #c5d9e6; font-size: 34px; }
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
            <a href="{{ route('admin.faqs.index') }}"><svg viewBox="0 0 24 24"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" fill="none" stroke="currentColor" stroke-width="1.8"/></svg><span>Service FAQs</span></a>
            <a href="{{ route('admin.main-faqs.index') }}"><svg viewBox="0 0 24 24"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" fill="none" stroke="currentColor" stroke-width="1.8"/></svg><span>Main FAQs</span></a>
            <a href="{{ route('admin.authors.index') }}"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg><span>Authors</span></a>
        </nav>
    </aside>
    <main class="main" id="overview">
        <header class="utility">
            <div class="utility-left">
                <form class="search" action="{{ route('admin.test-pages.index') }}">
                    <button type="submit" style="background:none;border:none;padding:0;cursor:pointer;color:inherit;"><b>⌕</b></button>
                    <input type="text" name="search" placeholder="Search test pages..." value="{{ request('search') }}" style="border:none;background:transparent;outline:none;font-size:inherit;color:inherit;width:100%;">
                </form>
            </div>
            <div class="utility-right">
                <span class="admin-avatar">{{ strtoupper(substr($user->name ?? 'A',0,1)) }}</span>
                <span class="account"><b>{{ $user->name ?? 'Admin' }}</b><small>Lab Administrator</small></span>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" style="border:0;background:none;color:#58748c;font-size:9px;cursor:pointer">Sign out</button>
                </form>
            </div>
        </header>

        @if(session('success'))
        <div class="success-msg">{{ session('success') }}</div>
        @endif

        <div style="display:flex; justify-content:space-between; align-items:center; margin-top: 20px; margin-bottom: 20px;">
            <h1 style="margin:0; font-size: 22px;">Test Pages</h1>
            <a href="{{ route('admin.services.index') }}" style="background:#065f46; color:#fff; text-decoration:none; padding:10px 16px; border-radius:6px; font-weight:bold; font-size:12px;">+ Add New Category (Service)</a>
        </div>

        @foreach($services as $service)
        <section class="panel" style="margin-top: 15px; margin-bottom: 25px;">
            <div style="display:flex; justify-content:space-between; align-items:center; padding:20px; border-bottom:1px solid var(--line); background:#f9fbfc; border-radius: 10px 10px 0 0;">
                <div style="display:flex; align-items:center; gap:10px;">
                    <h2 style="margin:0; font-size:16px; color:#06233d;">{{ $service->name }}</h2>
                    <a href="{{ route('admin.services.edit', $service->id) }}" style="color:#58748c; text-decoration:none; font-size:11px; background:#e1ebf2; padding:4px 8px; border-radius:4px;">Edit Category</a>
                    <form action="{{ route('admin.services.delete', $service->id) }}" method="POST" style="margin:0;" onsubmit="return confirm('Delete this entire Category?');">
                        @csrf
                        <button type="submit" style="color:#8e2b2b; text-decoration:none; font-size:11px; background:#fbeceb; border:none; padding:4px 8px; border-radius:4px; cursor:pointer;">Delete</button>
                    </form>
                </div>
                <a href="{{ route('admin.test-pages.create', ['service_id' => $service->id]) }}" style="background:#f5a623; color:#fff; text-decoration:none; padding:8px 14px; border-radius:6px; font-weight:bold; font-size:11px;">+ Add Test Page</a>
            </div>
            <div style="overflow-x:auto;">
                @if($service->testPages->count() > 0 || $service->basicTests->count() > 0)
                <table>
                    <thead>
                        <tr>
                            <th style="padding:15px 20px;">TITLE</th>
                            <th style="padding:15px 20px;">STATUS</th>
                            <th style="padding:15px 20px;">UPDATED</th>
                            <th style="padding:15px 20px; text-align:right;">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($service->testPages as $page)
                        <tr>
                            <td style="padding:15px 20px; font-weight:bold;"><a href="{{ route('admin.test-pages.edit', $page->id) }}" style="color:var(--ink); text-decoration:none;">{{ $page->title }}</a></td>
                            <td style="padding:15px 20px;">
                                <span class="badge {{ in_array(strtolower($page->status), ['published','active']) ? 'confirmed' : 'pending' }} " style="padding: 6px 10px; font-size: 9px;">• {{ strtolower($page->status) === 'published' ? 'Active' : ucfirst($page->status) }}</span>
                            </td>
                            <td style="padding:15px 20px; color:var(--ink); font-size: 11px;">{{ $page->updated_at->format('Y-m-d H:i:s') }}</td>
                            <td style="padding:15px 20px; text-align:right;">
                                <a href="{{ route('admin.test-pages.edit', $page->id) }}" style="background-color: #fcf1d5; color: #f8b417; text-decoration: none; padding: 8px 18px; border-radius: 6px; font-weight: bold; font-size: 11px; display: inline-block;">Edit</a>
                                <form action="{{ route('admin.test-pages.destroy', $page->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete this test page?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background-color: #fbeceb; color: #8e2b2b; border: none; padding: 8px 18px; border-radius: 6px; font-weight: bold; font-size: 11px; cursor: pointer; margin-left: 8px;">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        
                        @foreach($service->basicTests as $basic)
                        <tr>
                            <td style="padding:15px 20px; font-weight:bold;"><a href="{{ route('admin.test-pages.convert', $basic->id) }}" style="color:var(--ink); text-decoration:none;">{{ $basic->name }}</a></td>
                            <td style="padding:15px 20px;">
                                <span class="badge {{ $basic->is_active ? 'confirmed' : 'pending' }} " style="padding: 6px 10px; font-size: 9px;">• {{ $basic->is_active ? 'Active' : 'Inactive' }}</span>
                            </td>
                            <td style="padding:15px 20px; color:var(--ink); font-size: 11px;">{{ \Carbon\Carbon::parse($basic->updated_at)->format('Y-m-d H:i:s') }}</td>
                            <td style="padding:15px 20px; text-align:right;">
                                <a href="{{ route('admin.test-pages.convert', $basic->id) }}" style="background-color: #fcf1d5; color: #f8b417; text-decoration: none; padding: 8px 18px; border-radius: 6px; font-weight: bold; font-size: 11px; display: inline-block;">Edit</a>
                                <form action="{{ route('admin.tests.delete', $basic->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete this test?');">
                                    @csrf
                                    <button type="submit" style="background-color: #fbeceb; color: #8e2b2b; border: none; padding: 8px 18px; border-radius: 6px; font-weight: bold; font-size: 11px; cursor: pointer; margin-left: 8px;">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="empty-state">
                    <b>No tests or pages found in {{ $service->name }}.</b><br>Click "+ Add Test Page" to create one.
                </div>
                @endif
            </div>
        </section>
        @endforeach
    </main>
</div>
<script>
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
