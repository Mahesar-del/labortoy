<style>
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
    font-size: 16px !important;
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
        font-size: 16px !important;
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

/* Maintain layout across views up to 1440px. Below a certain point, stack or hide */
@media (max-width: 1400px) {
    /* If they want it fixed har view par, maybe we add a wrapper to allow horizontal scrolling or scaling */
    .site-header {
        overflow-x: auto;
    }
}

@media (max-width: 1150px) {
    .site-header {
        padding: 0 20px;
    }
    .nav-links, .appointment-btn {
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

    <ul class="nav-links">
        <li><a href="/services">Services</a></li>
        <li><a href="/patient">Patients</a></li>
        <li><a href="/provider-page">Providers</a></li>
        <li><a href="#">Resources</a></li>
        <li><a href="/contact-us">Contact</a></li>
    </ul>

    <!-- Appointment Button -->
    <a href="#" class="appointment-btn">
        Book an Appointment
    </a>

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
