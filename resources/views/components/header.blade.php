<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
html, body, body * { font-family: 'Inter', Arial, sans-serif !important; }
/* Global Typography Rules */
h1 {
    font-size: 36px !important;
}
h2 {
    font-size: 28px !important;
}
h3 {
    font-size: 22px !important;
}
p {
    font-size: 15px !important;
}

@media (max-width: 768px) {
    h1 {
        font-size: 28px !important;
    }
    h2 {
        font-size: 24px !important;
    }
    h3 {
        font-size: 20px !important;
    }
    p {
        font-size: 14px !important;
    }
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
    flex-shrink: 1;
    min-width: 120px;
    max-width: 280px;
    margin-left: -8px; /* Pulled left slightly less to perfectly align */
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
    font-size: clamp(12px, 1.1vw, 15px);
    transition: color 0.2s;
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
        position: relative;
    }
    
    .nav-links li {
        height: 100%;
        display: flex;
        align-items: center;
    }

    .megamenu {
        position: absolute;
        top: calc(50% + 20px);
        left: 50%;
        transform: translateX(-50%);
        width: 200px;
        background-color: #ffffff; /* White background */
        color: #111827;
        padding: 15px 20px;
        box-sizing: border-box;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
        display: flex;
        flex-direction: column;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        border-top: 2px solid #eaedf2;
        border-radius: 0 0 8px 8px;
    }

    .has-megamenu:hover .megamenu {
        opacity: 1;
        visibility: visible;
    }

    .megamenu-column h4 {
        font-size: 16px !important;
        font-weight: 600;
        margin-bottom: 20px;
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .megamenu-column ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .megamenu-column ul li a {
        color: #4b5563;
        text-decoration: none;
        font-size: 14px;
        transition: color 0.2s, transform 0.2s;
        font-weight: 500;
        display: inline-block;
    }

    .megamenu-column ul li a:hover {
        color: #214f9d;
        transform: translateX(5px);
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
            <img src="{{ asset('images/header-logo.svg') }}" alt="Sterling Logo" style="height: auto; max-height: 85px; width: 100%; object-fit: contain; object-position: left;">
        </a>

    @php($headerServices = \Illuminate\Support\Facades\DB::table('services')->where('is_active', true)->orderBy('name')->get())
    <ul class="nav-links">
        <li class="has-megamenu">
            <a href="/services">Services</a>
            <div class="megamenu">
                <div class="megamenu-column">
                    <ul>
                        @forelse($headerServices as $headerService)
                            <li><a href="{{ url('/service/'.$headerService->slug) }}">{{ $headerService->name }}</a></li>
                        @empty
                            <li><a href="/services">View Services</a></li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </li>
        <li><a href="/patient">Patients</a></li>
        <li><a href="/provider-page">Providers</a></li>
        <li><a href="#">Resources</a></li>
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
<script>
    (function () {
        var input = document.getElementById('headerSearchInput');
        var suggestions = document.getElementById('headerSearchSuggestions');
        var timer;
        input.addEventListener('input', function () {
            var query = input.value.trim();
            clearTimeout(timer);
            if (query.length < 2) { suggestions.innerHTML = ''; suggestions.classList.remove('is-open'); return; }
            timer = setTimeout(function () {
                fetch('{{ route('search.suggestions') }}?q=' + encodeURIComponent(query))
                    .then(function (response) { return response.json(); })
                    .then(function (items) {
                        if (!items.length) { suggestions.innerHTML = '<div class="header-search-empty">No matching tests or services found.</div>'; }
                        else { suggestions.innerHTML = items.map(function (item) { return '<a class="header-search-suggestion" href="' + item.url + '"><strong>' + item.title + '</strong><small>' + item.type + '</small></a>'; }).join(''); }
                        suggestions.classList.add('is-open');
                    });
            }, 220);
        });
        document.addEventListener('click', function (event) { if (!event.target.closest('.header-search')) suggestions.classList.remove('is-open'); });
    }());
</script>
