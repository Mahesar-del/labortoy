<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;700&display=block');

html {
    overflow-y: scroll;
}

.site-header, .site-header *, .mobile-menu-drawer, .mobile-menu-drawer * { 
    font-family: 'Inter', Arial, sans-serif !important; 
}

/* Prevent links from blinking on click globally */
a, button {
    -webkit-tap-highlight-color: transparent;
}
a:focus, a:active, button:focus, button:active {
    outline: none !important;
}

/* Header Typography Rules */
.site-header h1, .mobile-menu-drawer h1 { font-size: 36px !important; }
.site-header h2, .mobile-menu-drawer h2 { font-size: 28px !important; }
.site-header h3, .mobile-menu-drawer h3 { font-size: 22px !important; }
.site-header p, .mobile-menu-drawer p { font-size: 15px !important; }

@media (max-width: 768px) {
    .site-header h1, .mobile-menu-drawer h1 { font-size: 28px !important; }
    .site-header h2, .mobile-menu-drawer h2 { font-size: 24px !important; }
    .site-header h3, .mobile-menu-drawer h3 { font-size: 20px !important; }
    .site-header p, .mobile-menu-drawer p { font-size: 14px !important; }
}

/* Header Styles */
.site-header {
    background-color: #ffffff;
    width: 100%;
    height: 100px; /* Increased from 80px to fit larger logo */
    max-width: none;
    box-sizing: border-box;
    margin: 0 auto;
    padding: 0 99px;
    position: sticky;
    top: 0;
    z-index: 999;
}
.header-container {
    position: relative;
    max-width: 1320px;
    height: 100%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.logo-container {
    display: flex;
    align-items: center;
    height: 100%;
    pointer-events: auto;
    flex-shrink: 0;
    width: 220px;
    margin-left: -8px;
    outline: none;
    border: none;
}
.logo-container img {
    height: 75px;
    width: 220px;
    max-height: 85px;
    object-fit: contain;
    object-position: left;
    display: block;
}
.nav-links {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: clamp(8px, 1.5vw, 32px);
    list-style: none;
    margin: 0;
    padding: 0 10px;
}
.nav-links a {
    text-decoration: none;
    color: #111827;
    font-weight: 500;
    font-size: 16px;
    transition: none;
    white-space: nowrap;
    line-height: 20px;
}
.nav-links a:hover {
    color: #0d233a;
}
.appointment-btn {
    width: clamp(150px, 12vw, 180px);
    height: 48px;
    flex-shrink: 0;
    background-color: #22B6AF;
    border-radius: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    color: #ffffff;
    font-weight: 600;
    font-size: 13px; /* Reduced from 14px */
    transition: background-color 0.2s;
}
.appointment-btn:hover {
    background-color: #1c9b95;
}
.mobile-menu-btn {
    display: none;
    background: none;
    border: none;
    cursor: pointer;
    color: #0d233a;
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
}
.mobile-menu-btn svg {
    width: 28px;
    height: 28px;
}

    .header-actions {
        display: flex;
        align-items: center;
        gap: 20px;
        flex-shrink: 0;
    }

    .header-search {
        position: relative;
        display: flex;
        align-items: center;
        background-color: #ffffff;
        border: 1px solid #9ca3af; /* Darker gray border */
        border-radius: 24px;
        padding: 5px 15px;
        width: clamp(150px, 15vw, 220px);
        height: 48px;
        box-sizing: border-box;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05); /* Subtle shadow for depth */
        transition: background-color 0.2s, box-shadow 0.2s, border-color 0.2s;
    }

    .header-search:focus-within {
        background-color: #ffffff;
        border-color: #22B6AF;
        box-shadow: 0 0 0 2px rgba(34, 182, 175, 0.2);
    }

    .header-search input {
        border: none;
        background: transparent;
        outline: none;
        width: 100%;
        padding: 5px 10px;
        font-size: 14px;
        color: #1f2937;
    }
    
    .header-search input::placeholder {
        color: #64748b;
    }

    .header-search .search-icon {
        width: 18px;
        height: 18px;
        color: #475569;
        flex-shrink: 0;
    }

    .header-search .clear-btn {
        background: none;
        border: none;
        padding: 0;
        cursor: pointer;
        color: #94a3b8;
        display: none;
        flex-shrink: 0;
        margin-left: 5px;
        display: none;
        align-items: center;
        justify-content: center;
    }

    .header-search .clear-btn:hover {
        color: #ef4444; /* Red color on hover for delete/clear action */
    }

    .header-search-suggestions { display:none; position:absolute; top:calc(100% + 10px); left:0; width:330px; max-height:360px; overflow-y:auto; padding:8px; border:1px solid #d8e5ec; border-radius:13px; background:#fff; box-shadow:0 16px 35px rgba(9,46,82,.18); z-index:1000; }
    .header-search-suggestions.is-open { display:block; }
    .header-search-suggestion { display:block; padding:11px 12px; border-radius:9px; color:#12304c; text-decoration:none; font-size:13px; line-height:1.35; }
    .header-search-suggestion:hover { background:#eaf8f6; }
    .header-search-suggestion small { display:block; color:#638097; margin-top:3px; }
    .header-search-empty { padding:13px; color:#638097; font-size:13px; }

    /* Megamenu Styles */
    .has-megamenu {
        position: static;
    }
    
    .nav-links li {
        height: 100%;
        display: flex;
        align-items: center;
    }

    .megamenu {
        position: absolute;
        top: 100%;
        left: 152px;
        width: 53rem; /* 880px = 55rem */
        max-width: calc(100% - 240px);
        min-height: 251px;
        background-color: #ffffff;
        padding: 0;
        box-sizing: border-box;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
        display: flex;
        flex-direction: row;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        border-radius: 0 0 6px 6px;
        overflow: hidden;
    }

    /* Invisible bridge to keep hover active */
    .megamenu::before {
        content: '';
        position: absolute;
        top: -20px;
        left: 0;
        right: 0;
        height: 20px;
        background: transparent;
    }

    .has-megamenu:hover .megamenu {
        opacity: 1;
        visibility: visible;
    }

    .megamenu-sidebar {
        width: 215px;
        background-color: #0b2545;
        padding: 24px 0;
        display: flex;
        flex-direction: column;
        flex-shrink: 0;
    }

    .megamenu-tab {
        font-family: 'Plus Jakarta Sans', sans-serif !important;
        font-weight: 700 !important;
        font-size: 18px !important;
        line-height: 40px !important;
        color: #ffffff !important;
        text-decoration: none;
        padding: 4px 30px;
        cursor: pointer;
        display: block;
        transition: background-color 0.2s;
        text-align: left;
        background: none;
        border: none;
        width: 100%;
        box-sizing: border-box;
    }

    .megamenu-tab:hover, .megamenu-tab.active {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .megamenu-content {
        flex: 1;
        padding: 30px 45px;
        background-color: #ffffff;
        position: relative;
    }

    .megamenu-pane {
        display: none;
        animation: fadeInMega 0.3s ease-in-out;
    }

    .megamenu-pane.active {
        display: block;
    }

    @keyframes fadeInMega {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    .megamenu-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0px 40px;
    }

    .megamenu-grid a {
        font-family: 'Plus Jakarta Sans', sans-serif !important;
        font-weight: 400 !important;
        font-size: 15px !important;
        line-height: 34px !important;
        color: #111827 !important;
        text-decoration: none;
        transition: color 0.2s;
        display: block;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .megamenu-grid a:hover {
        color: #22B6AF !important;
    }

    /* Resources Megamenu Styles */
    .has-resources-menu {
        position: relative;
        height: 100%;
        display: flex;
        align-items: center;
    }

    .resources-megamenu {
        position: absolute;
        top: 297%;
        left: -22px;
        width: 150px;
        background-color: #ffffff;
        padding: 6px;
        box-sizing: border-box;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.12);
        z-index: 1000;
        border-radius: 8px;
        border: 1px solid #e5e7eb;
    }

    .resources-megamenu::before {
        content: '';
        position: absolute;
        top: -15px;
        left: 0;
        right: 0;
        height: 15px;
        background: transparent;
    }

    .has-resources-menu:hover .resources-megamenu {
        opacity: 1;
        visibility: visible;
    }

    .resources-megamenu-grid {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .resources-megamenu-item {
        display: block;
        padding: 8px 12px;
        border-radius: 6px;
        font-family: 'Plus Jakarta Sans', sans-serif !important;
        font-weight: 500 !important;
        font-size: 14px !important;
        color: #111827 !important;
        text-decoration: none !important;
        transition: background-color 0.2s ease, color 0.2s ease;
    }

    .resources-megamenu-item:hover {
        background-color: #f0fdfa;
        color: #22B6AF !important;
    }

    .resources-item-desc {
        font-size: 12px !important;
        color: #6b7280 !important;
        margin-top: 2px;
        line-height: 16px;
    }

/* Mobile Drawer Styles */
.mobile-menu-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(2px);
    z-index: 9998;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
}

.mobile-menu-overlay.is-active {
    opacity: 1;
    visibility: visible;
}

.mobile-menu-drawer {
    position: fixed;
    top: 0;
    right: -100%;
    width: 320px;
    max-width: 85vw;
    height: 100vh;
    background-color: #ffffff;
    z-index: 9999;
    box-shadow: -5px 0 25px rgba(0, 0, 0, 0.15);
    display: flex;
    flex-direction: column;
    transition: right 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    overflow-y: auto;
    padding: 20px;
    box-sizing: border-box;
}

.mobile-menu-drawer.is-active {
    right: 0;
}

.mobile-drawer-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-bottom: 16px;
    border-bottom: 1px solid #e5e7eb;
    margin-bottom: 20px;
}

.mobile-drawer-close {
    background: none;
    border: none;
    cursor: pointer;
    color: #111827;
    padding: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.mobile-search-form {
    position: relative;
    display: flex;
    align-items: center;
    background: #f3f4f6;
    border-radius: 20px;
    padding: 8px 16px;
    margin-bottom: 20px;
}

.mobile-search-form .search-icon {
    width: 18px;
    height: 18px;
    color: #6b7280;
    margin-right: 8px;
}

.mobile-search-form input {
    border: none;
    background: transparent;
    outline: none;
    width: 100%;
    font-size: 14px;
    color: #111827;
}

.mobile-nav-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 4px;
    flex-grow: 1;
}

.mobile-nav-item > a, .mobile-dropdown-header > a {
    text-decoration: none;
    color: #111827;
    font-size: 16px;
    font-weight: 600;
    display: block;
    padding: 12px 8px;
    border-radius: 8px;
    transition: background 0.2s, color 0.2s;
}

.mobile-nav-item > a:hover, .mobile-dropdown-header > a:hover {
    background-color: #f3f4f6;
    color: #22B6AF;
}

.mobile-dropdown-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.mobile-arrow-btn {
    background: none;
    border: none;
    cursor: pointer;
    padding: 8px 12px;
    color: #4b5563;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease;
}

.mobile-arrow-btn.is-open {
    transform: rotate(180deg);
    color: #22B6AF;
}

.mobile-arrow-icon {
    width: 20px;
    height: 20px;
}

.mobile-submenu {
    list-style: none;
    padding: 0 0 0 16px;
    margin: 0;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-out, padding 0.3s ease-out;
    border-left: 2px solid #e5e7eb;
}

.mobile-submenu.is-open {
    max-height: 400px;
    padding: 4px 0 8px 16px;
}

.mobile-submenu li a {
    text-decoration: none;
    color: #4b5563;
    font-size: 14px;
    font-weight: 500;
    display: block;
    padding: 8px 12px;
    border-radius: 6px;
    transition: color 0.2s, background 0.2s;
}

.mobile-submenu li a:hover {
    color: #22B6AF;
    background-color: #f9fafb;
}

.mobile-drawer-footer {
    padding-top: 20px;
    border-top: 1px solid #e5e7eb;
    margin-top: 20px;
}

.mobile-appointment-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 48px;
    background-color: #22B6AF;
    color: #ffffff;
    border-radius: 24px;
    text-decoration: none;
    font-weight: 600;
    font-size: 15px;
    transition: background-color 0.2s;
}

.mobile-appointment-btn:hover {
    background-color: #1c9b95;
}

@media (max-width: 1150px) {
    .site-header {
        padding: 0 20px;
    }
    .nav-links, .header-actions {
        display: none;
    }
    .mobile-menu-btn {
        display: block;
    }
}
</style>

<header class="site-header">
    <div class="header-container">
        <!-- Logo -->
        <a href="/" class="logo-container">
            <img src="{{ asset('images/header_logo_new.svg') }}" alt="Sterling Logo" width="220" height="75" style="height: auto; max-height: 85px; width: 100%; object-fit: contain; object-position: left;">
        </a>

    @php($headerServices = \Illuminate\Support\Facades\DB::table('services')->where('is_active', true)->orderBy('name')->get())
    <ul class="nav-links">
        <li class="has-megamenu">
            <a style="cursor: default;">Services</a>
            <div class="megamenu">
                <div class="megamenu-sidebar">
                    <button class="megamenu-tab active" data-target="mega-chem">Chemistry</button>
                    <button class="megamenu-tab" data-target="mega-immuno">Immunoassay</button>
                    <button class="megamenu-tab" data-target="mega-hema">Hematology</button>
                </div>
                <div class="megamenu-content">
                    <div class="megamenu-pane active" id="mega-chem">
                        <div class="megamenu-grid">
                            <a href="#">Comprehensive Metabolic Panel (CMP)</a>
                            <a href="#">Basic Metabolic Panel (BMP)</a>
                            <a href="#">Lipid Panel</a>
                            <a href="#">Blood Glucose</a>
                            <a href="#">Liver Function Tests (LFT)</a>
                            <a href="#">Kidney Function Tests</a>
                        </div>
                    </div>
                    <div class="megamenu-pane" id="mega-immuno">
                        <div class="megamenu-grid">
                            <a href="#">Thyroid Stimulating Hormone (TSH)</a>
                            <a href="#">Free T4</a>
                            <a href="#">Vitamin D</a>
                            <a href="#">Prostate Specific Antigen (PSA)</a>
                        </div>
                    </div>
                    <div class="megamenu-pane" id="mega-hema">
                        <div class="megamenu-grid">
                            <a href="#">Complete Blood Count (CBC)</a>
                            <a href="#">Hemoglobin A1C</a>
                            <a href="#">Prothrombin Time (PT/INR)</a>
                            <a href="#">Sedimentation Rate (ESR)</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li><a href="/patient">Patients</a></li>
        <li><a href="/provider-page">Providers</a></li>
        <li class="has-resources-menu">
            <a href="/resources">Resources</a>
            <div class="resources-megamenu">
                <div class="resources-megamenu-grid">
                    <a href="/faq" class="resources-megamenu-item">FAQ</a>
                    <a href="/blog" class="resources-megamenu-item">Blogs</a>
                    <a href="/about-us" class="resources-megamenu-item">About Us</a>
                </div>
            </div>
        </li>
        <li><a href="/contact-us">Contact</a></li>
    </ul>

    <div class="header-actions">
        <!-- Search Bar -->
        <form class="header-search" action="{{ route('search') }}" method="get">
            <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
            <input type="search" id="headerSearchInput" name="q" value="{{ request('q') }}" placeholder="Search..." aria-label="Search" oninput="document.getElementById('clearSearchBtn').style.display = this.value ? 'flex' : 'none'">
            <button type="button" id="clearSearchBtn" class="clear-btn" aria-label="Clear search" onclick="document.getElementById('headerSearchInput').value = ''; this.style.display = 'none'; document.getElementById('headerSearchInput').focus();">
                <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
            <div id="headerSearchSuggestions" class="header-search-suggestions" role="listbox"></div>
        </form>

        <!-- Appointment Button -->
        <a href="{{ route('appointment.index') }}" class="appointment-btn">
            Book an Appointment
        </a>
    </div>

    <!-- Mobile Menu Button -->
    <button class="mobile-menu-btn" aria-label="Open menu">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
    </button>
    </div>
</header>

<!-- Mobile Navigation Drawer Overlay & Drawer -->
<div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>
<div class="mobile-menu-drawer" id="mobileMenuDrawer">
    <div class="mobile-drawer-header">
        <a href="/" class="mobile-logo">
            <img src="{{ asset('images/header_logo_new.svg') }}" alt="Sterling Logo" style="height: 40px; width: auto;">
        </a>
        <button class="mobile-drawer-close" id="mobileDrawerClose" aria-label="Close menu">
            <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
    </div>

    <!-- Mobile Search Bar -->
    <form class="mobile-search-form" action="{{ route('search') }}" method="get">
        <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
        <input type="search" name="q" value="{{ request('q') }}" placeholder="Search..." aria-label="Search">
    </form>

    <ul class="mobile-nav-list">
        <!-- Services with Accordion Arrow -->
        <li class="mobile-nav-item mobile-has-dropdown">
            <div class="mobile-dropdown-header" id="mobileServicesToggle">
                <a style="cursor: default;">Services</a>
                <button type="button" class="mobile-arrow-btn" id="mobileServicesArrowBtn" aria-label="Toggle Services dropdown">
                    <svg class="mobile-arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
            </div>
            <ul class="mobile-submenu" id="mobileServicesSubmenu">
                @forelse($headerServices as $headerService)
                    <li><a href="{{ url('/service/'.$headerService->slug) }}">{{ $headerService->name }}</a></li>
                @empty
                    <li><a href="/services">All Services</a></li>
                @endforelse
            </ul>
        </li>

        <li class="mobile-nav-item"><a href="/patient">Patients</a></li>
        <li class="mobile-nav-item"><a href="/provider-page">Providers</a></li>
        <li class="mobile-nav-item mobile-has-dropdown">
            <div class="mobile-dropdown-header" id="mobileResourcesToggle">
                <a href="/resources">Resources</a>
                <button type="button" class="mobile-arrow-btn" id="mobileResourcesArrowBtn" aria-label="Toggle Resources dropdown">
                    <svg class="mobile-arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
            </div>
            <ul class="mobile-submenu" id="mobileResourcesSubmenu">
                <li><a href="/faq">FAQ</a></li>
                <li><a href="/blog">Blogs</a></li>
                <li><a href="/about-us">About Us</a></li>
            </ul>
        </li>
        <li class="mobile-nav-item"><a href="/contact-us">Contact</a></li>
    </ul>

    <div class="mobile-drawer-footer">
        <a href="{{ route('appointment.index') }}" class="mobile-appointment-btn">
            Book an Appointment
        </a>
    </div>
</div>

<script>
    (function () {
        // Desktop Search Suggestions
        var input = document.getElementById('headerSearchInput');
        var suggestions = document.getElementById('headerSearchSuggestions');
        var timer;
        if (input && suggestions) {
            input.addEventListener('input', function () {
                var query = input.value.trim();
                clearTimeout(timer);
                if (query.length < 2) { suggestions.innerHTML = ''; suggestions.classList.remove('is-open'); return; }
                timer = setTimeout(function () {
                    fetch('{{ route('search.suggestions') }}?q=' + encodeURIComponent(query))
                        .then(function (response) { return response.json(); })
                        .then(function (items) {
                            suggestions.replaceChildren();
                            if (!items.length) {
                                var empty = document.createElement('div');
                                empty.className = 'header-search-empty';
                                empty.textContent = 'No matching content found.';
                                suggestions.appendChild(empty);
                            } else {
                                items.forEach(function (item) {
                                    var link = document.createElement('a');
                                    link.className = 'header-search-suggestion';
                                    link.href = item.url;
                                    var title = document.createElement('strong');
                                    title.textContent = item.title;
                                    var type = document.createElement('small');
                                    type.textContent = item.type;
                                    link.appendChild(title);
                                    link.appendChild(type);
                                    suggestions.appendChild(link);
                                });
                            }
                            suggestions.classList.add('is-open');
                        }).catch(function () { suggestions.classList.remove('is-open'); });
                }, 220);
            });
            document.addEventListener('click', function (event) { if (!event.target.closest('.header-search')) suggestions.classList.remove('is-open'); });
        }

        // Mobile Drawer Interaction
        var mobileBtn = document.querySelector('.mobile-menu-btn');
        var mobileDrawer = document.getElementById('mobileMenuDrawer');
        var mobileOverlay = document.getElementById('mobileMenuOverlay');
        var mobileClose = document.getElementById('mobileDrawerClose');
        var arrowBtn = document.getElementById('mobileServicesArrowBtn');
        var submenu = document.getElementById('mobileServicesSubmenu');
        var resArrowBtn = document.getElementById('mobileResourcesArrowBtn');
        var resSubmenu = document.getElementById('mobileResourcesSubmenu');

        function openMenu() {
            if (mobileDrawer) mobileDrawer.classList.add('is-active');
            if (mobileOverlay) mobileOverlay.classList.add('is-active');
            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            if (mobileDrawer) mobileDrawer.classList.remove('is-active');
            if (mobileOverlay) mobileOverlay.classList.remove('is-active');
            document.body.style.overflow = '';
        }

        if (mobileBtn) mobileBtn.addEventListener('click', openMenu);
        if (mobileClose) mobileClose.addEventListener('click', closeMenu);
        if (mobileOverlay) mobileOverlay.addEventListener('click', closeMenu);

        if (arrowBtn && submenu) {
            arrowBtn.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                arrowBtn.classList.toggle('is-open');
                submenu.classList.toggle('is-open');
            });
        }

        if (resArrowBtn && resSubmenu) {
            resArrowBtn.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                resArrowBtn.classList.toggle('is-open');
                resSubmenu.classList.toggle('is-open');
            });
        }

        // Megamenu Tab Interaction
        var megaTabs = document.querySelectorAll('.megamenu-tab');
        var megaPanes = document.querySelectorAll('.megamenu-pane');
        
        megaTabs.forEach(function(tab) {
            tab.addEventListener('mouseenter', function() {
                var targetId = this.getAttribute('data-target');
                
                megaTabs.forEach(function(t) { t.classList.remove('active'); });
                megaPanes.forEach(function(p) { p.classList.remove('active'); });
                
                this.classList.add('active');
                var targetPane = document.getElementById(targetId);
                if (targetPane) {
                    targetPane.classList.add('active');
                }
            });
        });
    }());
</script>
