<style>
/* Header Styles */
.site-header {
    background-color: #ffffff;
    width: 100%;
    height: 80px;
    max-width: 1440px;
    box-sizing: border-box;
    margin: 0 auto;
    position: relative;
    /* Use overflow hidden or keep it normal, but elements are absolute so it's fine */
}
.logo-container {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    pointer-events: none; /* Let clicks pass through empty areas */
}
.logo-icon, .logo-text {
    pointer-events: auto; /* Make them clickable */
}
.logo-icon {
    position: absolute;
    left: 99px;
    top: 16px; /* Centered in 80px: (80-44)/2 = 18px. Or maybe the same as text. Let's make it align vertically. */
    /* Icon is usually ~44px. Let's just vertically center it if not specified */
    top: 50%;
    transform: translateY(-50%);
    background-color: #0d233a;
    color: #ffffff;
    width: 44px; /* 2.75rem = 44px */
    height: 44px;
    border-radius: 9.6px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.logo-icon svg {
    width: 24px;
    height: 24px;
}
.logo-text {
    position: absolute;
    left: 157.28px;
    top: 16px;
    width: 85px;
    height: 48px;
    color: #0d233a;
    font-size: 34px;
    font-weight: 800;
    font-family: 'Plus Jakarta Sans', sans-serif;
    line-height: 47.22px;
    margin: 0;
    text-decoration: none;
    display: flex;
    align-items: center;
}
.nav-links {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 762px;
    height: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    list-style: none;
    margin: 0;
    padding: 0;
}
.nav-links a {
    text-decoration: none;
    color: #111827;
    font-weight: 500;
    font-size: 15px; /* ~0.95rem */
    transition: color 0.2s;
    white-space: nowrap;
    line-height: 20px;
}
.nav-links a:hover {
    color: #0d233a;
}
.login-btn {
    position: absolute;
    right: 99px;
    top: 28px;
    width: 79px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 6px;
    text-decoration: none;
    color: #0d233a;
    font-weight: 700;
    font-size: 16px;
    line-height: 24px;
}
.login-btn svg {
    width: 20px;
    height: 20px;
    stroke-width: 2.5;
    flex-shrink: 0;
}
.mobile-menu-btn {
    display: none;
    background: none;
    border: none;
    cursor: pointer;
    color: #0d233a;
    position: absolute;
    right: 20px;
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

@media (max-width: 1024px) {
    .nav-links, .login-btn {
        display: none;
    }
    .mobile-menu-btn {
        display: block;
    }
}
</style>

<header class="site-header">
    <!-- Logo -->
    <a href="#" class="logo-container">
        <div class="logo-icon">
            <!-- Figma-style Hexagon Icon -->
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="12 2 22 8 22 16 12 22 2 16 2 8 12 2"></polygon>
                <circle cx="12" cy="12" r="2.5" fill="currentColor" stroke="none"></circle>
            </svg>
        </div>
        <span class="logo-text">Logo</span>
    </a>

    <!-- Navigation Links -->
    <ul class="nav-links">
        <li><a href="#">Services</a></li>
        <li><a href="#">Patients</a></li>
        <li><a href="#">Providers</a></li>
        <li><a href="#">Health Systems & Organizations</a></li>
        <li><a href="#">Resources</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <!-- Login Button -->
    <a href="#" class="login-btn">
        <svg viewBox="0 0 24 24" fill="currentColor" stroke="none">
            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
        </svg>
        <span>Login</span>
    </a>

    <!-- Mobile Menu Button -->
    <button class="mobile-menu-btn" aria-label="Open menu">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
    </button>
</header>
