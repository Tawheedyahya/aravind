<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap');

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Inter', sans-serif;
    }

    /* HEADER */
    .site-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 14px 60px;
        background: #fff;
        position: sticky;
        top: 0;
        z-index: 1000;
        transition: box-shadow 0.3s ease;
    }

    .site-header.scrolled {
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
    }

    /* BRAND */
    .brand {
        display: flex;
        align-items: center;
        gap: 12px;
        text-decoration: none;
        z-index: 1001;
        position: relative;
    }

    .brand img {
        width: 46px;
        height: 46px;
        object-fit: contain;
    }

    .brand-text strong {
        display: block;
        font-size: 20px;
        font-weight: 900;
        color: #13583F;
        letter-spacing: 1px;
    }

    .brand-text small {
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 3px;
        color: #2BB673;
        text-transform: uppercase;
    }

    /* HAMBURGER */
    .menu-toggle {
        display: none;
        flex-direction: column;
        justify-content: center;
        gap: 5px;
        background: none;
        border: none;
        cursor: pointer;
        padding: 6px;
        z-index: 1001;
        position: relative;
    }

    .menu-toggle span {
        display: block;
        width: 26px;
        height: 3px;
        background: #13583F;
        border-radius: 3px;
        transition: transform 0.3s ease, opacity 0.2s ease, width 0.3s ease;
        transform-origin: center;
    }

    .menu-toggle.open span:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
    }

    .menu-toggle.open span:nth-child(2) {
        opacity: 0;
        width: 0;
    }

    .menu-toggle.open span:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
    }

    /* NAV DESKTOP */
    nav ul {
        display: flex;
        align-items: center;
        gap: 36px;
        list-style: none;
    }

    nav a {
        text-decoration: none;
        font-weight: 700;
        font-size: 13px;
        letter-spacing: 1.5px;
        color: #374151;
        text-transform: uppercase;
        transition: color 0.25s ease;
        position: relative;
    }

    nav a::after {
        content: '';
        position: absolute;
        bottom: -4px;
        left: 0;
        width: 0;
        height: 2px;
        background: #13583F;
        transition: width 0.3s ease;
        border-radius: 2px;
    }

    nav a:hover::after,
    nav a[aria-current="page"]::after {
        width: 100%;
    }

    nav a:hover,
    nav a[aria-current="page"] {
        color: #13583F;
    }

    /* CTA */
    .btn-primary {
        background: #22C55E !important;
        color: #fff !important;
        padding: 11px 24px;
        border-radius: 30px;
        font-weight: 700 !important;
        letter-spacing: 1px;
        white-space: nowrap;
    }

    .btn-primary::after {
        display: none !important;
    }

    .btn-primary:hover {
        background: #16A34A !important;
    }

    /* ── MOBILE ─────────────────────────────────────────────────── */
    @media(max-width:992px) {

        .site-header {
            padding: 12px 20px;
        }

        .menu-toggle {
            display: flex;
        }

        /* Fullscreen overlay */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: #fff;
            display: flex;
            flex-direction: column;
            /* Start just below the header — no big gap */
            padding-top: 72px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-8px);
            transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s;
            z-index: 999;
            overflow-y: auto;
        }

        nav.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        nav ul {
            flex-direction: column;
            gap: 0;
            width: 100%;
            padding: 0 28px;
            list-style: none;
            align-items: flex-start;
        }

        nav ul li {
            width: 100%;
            border-bottom: 1px solid #f0f0f0;
        }

        nav ul li:last-child {
            border-bottom: none;
            padding-top: 24px;
        }

        nav a {
            display: block;
            padding: 20px 0;
            font-size: 22px;
            /* BIG & bold */
            font-weight: 400;
            letter-spacing: 0.5px;
            color: #1a1a1a;
            text-transform: uppercase;
            transition: color 0.2s ease;
        }

        nav a:hover,
        nav a[aria-current="page"] {
            color: #13583F;
        }

        nav a::after {
            display: none;
        }

        .btn-primary {
            display: block;
            text-align: center;
            padding: 17px 24px;
            font-size: 16px;
            font-weight: 800 !important;
            border-radius: 30px;
            width: 100%;
        }

    }

    .dropdown {
        position: relative;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        background: white;
        list-style: none;
        padding: 10px 0;
        margin: 0;
        min-width: 180px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .dropdown-menu li a {
        display: block;
        padding: 10px 15px;
        text-decoration: none;
        color: #333;
    }

    .dropdown-menu li a:hover {
        background: #f5f5f5;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-toggle {
        background: none;
        border: none;

        letter-spacing: 1.5px;
        color: #374151;
        text-transform: uppercase;
        cursor: pointer;
        font-family: 'Inter', sans-serif;
        padding: 0;
        position: relative;
    }

    @media(max-width:992px) {

        .dropdown-menu {
            display: none;
            position: static;
            box-shadow: none;
            background: transparent;
            padding-left: 15px;
        }

        .dropdown.open .dropdown-menu {
            display: block;
        }

    }
</style>

<?php
$http = isset($_SERVER['HTTPS']) ? 'https' : 'http';
$baseUrl = $http . "://" . $_SERVER['HTTP_HOST'];
$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (!function_exists('active')) {
    function active($path, $currentPath)
    {
        if (is_array($path)) {
            return in_array($currentPath, $path) ? 'aria-current="page"' : '';
        }
        return $path === $currentPath ? 'aria-current="page"' : '';
    }
}
?>

<header class="site-header" id="siteHeader">
    <a href="/" class="brand" title="SLS Group Home">
        <img src="../assets/images/header_logo.webp" alt="SLS Group Logo">
        <span class="brand-text">
            <strong>SLS GROUP</strong>
            <small>Engineering Excellence</small>
        </span>
    </a>

    <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <nav id="mainNav" aria-label="Primary Navigation">
        <ul>
            <li><a href="/about" <?= active('/about',      $currentPath) ?>>About</a></li>
            <li><a href="/businesses" <?= active('/businesses', $currentPath) ?>>Businesses</a></li>
            <li><a href="/projects" <?= active('/projects',   $currentPath) ?>>Projects</a></li>
            <li><a href="/gallery" <?= active('/gallery',    $currentPath) ?>>Gallery</a></li>
            <li><a href="/contact" <?= active('/contact',    $currentPath) ?>>Contact</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle <?= in_array($currentPath, ['/slsbim', '/alshams']) ? 'active' : '' ?>" type="button" href="#">
                    Special Divisions
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <a href="/slsbim" <?= active('/slsbim', $currentPath) ?>>SLS BIM</a>
                    </li>
                    <li>
                        <a href="/alshams" <?= active('/alshams', $currentPath) ?>>Al Shams</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>

<script>
    const toggle = document.getElementById('menuToggle');
    const nav = document.getElementById('mainNav');
    const header = document.getElementById('siteHeader');

    // Sync nav top to actual header height so no gap ever
    function syncNavTop() {
        nav.style.paddingTop = header.offsetHeight + 'px';
    }

    toggle.addEventListener('click', () => {
        syncNavTop();
        const isOpen = nav.classList.toggle('show');
        toggle.classList.toggle('open', isOpen);
        toggle.setAttribute('aria-expanded', isOpen);
        document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    nav.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', function(e) {

        // Prevent closing when clicking dropdown toggle
        if (this.classList.contains('dropdown-toggle')) return;

        nav.classList.remove('show');
        toggle.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';

    });
});

    window.addEventListener('scroll', () => {
        header.classList.toggle('scrolled', window.scrollY > 10);
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth > 992) {
            nav.classList.remove('show');
            toggle.classList.remove('open');
            document.body.style.overflow = '';
        }
    });
    document.querySelectorAll('.dropdown-toggle').forEach(function(toggle) {

        toggle.addEventListener('click', function(e) {

            if (window.innerWidth <= 992) {

                e.preventDefault();

                this.parentElement.classList.toggle('open');

            }

        });

    });
</script>