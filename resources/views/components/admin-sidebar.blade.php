<style>
    .admin-side-nav{position:fixed;inset:0 auto 0 0;width:250px;z-index:20;background:linear-gradient(180deg,#0d466a,#06263e);color:#fff;padding:28px 18px;box-sizing:border-box;box-shadow:8px 0 28px rgba(4,32,52,.12);overflow-y:auto;overscroll-behavior:contain;scrollbar-width:thin;scrollbar-color:rgba(80,222,208,.75) rgba(255,255,255,.08)}
    .admin-side-nav::-webkit-scrollbar{width:7px}
    .admin-side-nav::-webkit-scrollbar-track{background:rgba(255,255,255,.08)}
    .admin-side-nav::-webkit-scrollbar-thumb{background:rgba(80,222,208,.75);border-radius:10px}
    .admin-side-nav__brand{display:flex;align-items:center;padding:0 4px 24px;border-bottom:1px solid rgba(255,255,255,.14);margin-bottom:22px}
    .admin-side-nav__logo{display:block;width:100%;max-width:200px;height:86px;object-fit:contain;object-position:left center}
    .admin-side-nav__mark{display:grid;place-items:center;width:38px;height:38px;border-radius:11px;background:#14b8a6;font-size:19px}
    .admin-side-nav__label{margin:20px 10px 8px;color:#91bbd0;font-size:11px;font-weight:800;letter-spacing:.12em;text-transform:uppercase}
    .admin-side-nav a{display:flex;align-items:center;gap:11px;margin:4px 0;padding:11px 12px;border-radius:9px;color:#d8e9f2;text-decoration:none;font-size:14px;font-weight:700}
    .admin-side-nav a:hover,.admin-side-nav a.active{background:#13709a;color:#fff}
    .admin-side-nav__icon{width:18px;text-align:center;color:#50ded0}
    body.admin-inner-page{padding-left:250px!important;box-sizing:border-box}
    body.admin-inner-page .admin{display:block!important;grid-template-columns:none!important;min-height:100vh}
    body.admin-inner-page .admin>.sidebar{display:none!important}
    body.admin-inner-page .back{display:inline-flex;align-items:center;gap:8px;padding:10px 15px;border:1px solid #bdd7e7;border-radius:9px;background:#fff;color:#1269ad;box-shadow:0 4px 12px rgba(24,86,120,.08);transition:.18s ease}
    body.admin-inner-page .back:hover{background:#1269ad;color:#fff;transform:translateX(-2px)}
    @media(max-width:820px){.admin-side-nav{position:static;width:100%;height:auto;padding:14px;display:flex;align-items:center;gap:4px;overflow-x:auto;overflow-y:hidden}.admin-side-nav__brand{width:145px;padding:0 15px 0 0;border:0;margin:0;white-space:nowrap;flex:none}.admin-side-nav__logo{height:42px}.admin-side-nav__label{display:none}.admin-side-nav a{white-space:nowrap;margin:0;padding:9px}.admin-side-nav__icon{display:none}body.admin-inner-page{padding-left:0!important}.admin-side-nav__mark{width:30px;height:30px}}
</style>
<aside class="admin-side-nav">
    <div class="admin-side-nav__brand"><img class="admin-side-nav__logo" src="{{ asset('images/footer-logo.png') }}" alt="Sterling Genomic, Molecular & Clinical Diagnostics"></div>
    <div class="admin-side-nav__label">Main menu</div>
    <a href="{{ route('admin.dashboard') }}"><span class="admin-side-nav__icon">⌂</span>Dashboard</a>
    <a href="{{ route('admin.home-hero.edit') }}"><span class="admin-side-nav__icon">◆</span>Home Page</a>
    <a href="{{ route('admin.services.index') }}"><span class="admin-side-nav__icon">▤</span>Services</a>
    <a href="{{ route('admin.tests.index') }}"><span class="admin-side-nav__icon">◫</span>Tests</a>
    <a href="{{ route('admin.test-pages.index') }}"><span class="admin-side-nav__icon">▧</span>Test Pages</a>
    <a href="{{ route('admin.appointments.index') }}"><span class="admin-side-nav__icon">▣</span>Appointments</a>
    <a href="{{ route('admin.contact-messages.index') }}"><span class="admin-side-nav__icon">✉</span>Contact Messages</a>
    <div class="admin-side-nav__label">Website</div>
    <a href="{{ route('admin.blog-posts.index') }}"><span class="admin-side-nav__icon">▧</span>Blog Posts</a>
    <a href="{{ route('admin.blog-categories.index') }}"><span class="admin-side-nav__icon">▦</span>Blog Categories</a>
    <a href="{{ route('admin.faqs.index') }}"><span class="admin-side-nav__icon">?</span>Service FAQs</a>
    <a href="{{ route('admin.main-faqs.index') }}"><span class="admin-side-nav__icon">?</span>Main FAQs</a>
    <a href="{{ route('admin.authors.index') }}"><span class="admin-side-nav__icon">♙</span>Authors</a>
    <a href="{{ route('admin.contact-settings.edit') }}"><span class="admin-side-nav__icon">✉</span>Contact settings</a>
</aside>
