<style>
    .admin-side-nav{position:fixed;inset:0 auto 0 0;width:250px;z-index:20;background:linear-gradient(180deg,#0d466a,#06263e);color:#fff;padding:28px 18px;box-sizing:border-box;box-shadow:8px 0 28px rgba(4,32,52,.12)}
    .admin-side-nav__brand{display:flex;align-items:center;gap:11px;padding:0 10px 28px;border-bottom:1px solid rgba(255,255,255,.14);margin-bottom:22px;font-size:21px;font-weight:800}
    .admin-side-nav__mark{display:grid;place-items:center;width:38px;height:38px;border-radius:11px;background:#14b8a6;font-size:19px}
    .admin-side-nav__label{margin:20px 10px 8px;color:#91bbd0;font-size:11px;font-weight:800;letter-spacing:.12em;text-transform:uppercase}
    .admin-side-nav a{display:flex;align-items:center;gap:11px;margin:4px 0;padding:11px 12px;border-radius:9px;color:#d8e9f2;text-decoration:none;font-size:14px;font-weight:700}
    .admin-side-nav a:hover,.admin-side-nav a.active{background:#13709a;color:#fff}
    .admin-side-nav__icon{width:18px;text-align:center;color:#50ded0}
    body.admin-inner-page{padding-left:250px!important;box-sizing:border-box}
    body.admin-inner-page .back{display:inline-flex;align-items:center;gap:8px;padding:10px 15px;border:1px solid #bdd7e7;border-radius:9px;background:#fff;color:#1269ad;box-shadow:0 4px 12px rgba(24,86,120,.08);transition:.18s ease}
    body.admin-inner-page .back:hover{background:#1269ad;color:#fff;transform:translateX(-2px)}
    @media(max-width:820px){.admin-side-nav{position:static;width:100%;height:auto;padding:14px;display:flex;align-items:center;gap:4px;overflow-x:auto}.admin-side-nav__brand{padding:0 15px 0 0;border:0;margin:0;white-space:nowrap}.admin-side-nav__label{display:none}.admin-side-nav a{white-space:nowrap;margin:0;padding:9px}.admin-side-nav__icon{display:none}body.admin-inner-page{padding-left:0!important}.admin-side-nav__mark{width:30px;height:30px}}
</style>
<aside class="admin-side-nav">
    <div class="admin-side-nav__brand"><span class="admin-side-nav__mark">⚗</span>Lab Admin</div>
    <div class="admin-side-nav__label">Main menu</div>
    <a href="{{ route('admin.dashboard') }}"><span class="admin-side-nav__icon">⌂</span>Dashboard</a>
    <a href="{{ route('admin.services.index') }}"><span class="admin-side-nav__icon">▤</span>Services</a>
    <a href="{{ route('admin.tests.index') }}"><span class="admin-side-nav__icon">◫</span>Tests</a>
    <a href="{{ route('admin.appointments.index') }}"><span class="admin-side-nav__icon">▣</span>Appointments</a>
    <div class="admin-side-nav__label">Website</div>
    <a href="{{ route('admin.faqs.index') }}"><span class="admin-side-nav__icon">?</span>FAQs</a>
    <a href="{{ route('admin.contact-settings.edit') }}"><span class="admin-side-nav__icon">✉</span>Contact settings</a>
</aside>
