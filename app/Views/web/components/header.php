<!-- header.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/header-footer.css" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>

<body>

    <div id="loader"
        class="flex justify-center items-center min-h-screen" style="background-color: #fff;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTwLw-KydojnBg_uahhm9brBEPsahUSQvhDKfQ6DflQ0SwiQfWwiJbgLFXDqDsroqNSLI&usqp=CAU"
            alt="" style="width:100px;height:auto">
    </div>

    <main id="main-content" style="display: none;">
        <div class="relative bg-[#ededed]">
            <img src="<?= base_url('public/') ?>assets/images/bg/doctorbano-blue.webp" alt="doctorbano" width="1530"
                height="106" class="header-bg-img" loading="lazy" />

            <!-- Navigation Start -->
            <div class="hidden md:flex sticky z-50 top-2 mb-2">
                <div class="nav-wrapper">
                    <div class="nav-inner">

                        <!-- Logo and Navigation -->
                        <div class="flex items-end justify-between gap-2 xl:gap-5 2xl:gap-8">
                            <a class="relative block" href="<?= base_url() ?>">
                                <img alt="doctorbano logo" width="131" height="41"
                                    src="<?= base_url('public/') ?>assets/images/logo/mbbs-abroad-consultants.png" />
                            </a>

                            <!-- NAV WRAPPER -->
                            <div class="hidden lg:block">
                                <nav aria-label="Main" class="relative z-10 flex justify-center">
                                    <ul class="group flex space-x-1 items-baseline">

                                        <!-- Simple links — now styled -->
                                        <li><a class="nav-link" href="<?= base_url('about') ?>">About</a></li>
                                        <li><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>

                                        <!-- Study Abroad (dropdown) -->
                                        <li class="relative" data-menu="study">
                                            <a href="<?= base_url('') ?>" class="nav-btn" aria-haspopup="true"
                                                aria-expanded="false">
                                                Study Abroad
                                                <svg class="ml-1 inline h-4 w-4 transition-transform"
                                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z" />
                                                </svg>
                                            </a>

                                            <!-- Dropdown Panel -->
                                            <div class="menu-panel" role="menu" aria-label="Study Abroad">
                                                <div class="grid grid-cols-4 gap-6">
                                                    <div>
                                                        <p class="menu-h"><b>Programs</b></p>
                                                        <ul class="menu-list">
                                                            <li><a href="#" class="menu-link">Undergraduate</a></li>
                                                            <li><a href="#" class="menu-link">Postgraduate</a></li>
                                                            <li><a href="#" class="menu-link">Diploma</a></li>
                                                            <li><a href="#" class="menu-link">MBA</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="menu-card">
                                                        <p class="menu-card-title">Free Counselling</p>
                                                        <p class="menu-card-copy">Get matched with programs &
                                                            scholarships.</p>
                                                        <a href="#" class="menu-cta">Book a Call</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- Top Countries (smaller panel demo) -->
                                        <li class="relative" data-menu="countries">
                                            <a href="<?= base_url('') ?>" class="nav-btn" aria-haspopup="true"
                                                aria-expanded="false">
                                                Top Countries
                                                <svg class="ml-1 inline h-4 w-4 transition-transform"
                                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z" />
                                                </svg>
                                            </a>

                                            <div class="menu-panel menu-panel--sm" role="menu"
                                                aria-label="Top Countries">
                                                <div class="grid grid-cols-4 gap-6">
                                                    <div>
                                                        <ul class="menu-list">
                                                            <li><a href="#" class="menu-link">Canada</a></li>
                                                            <li><a href="#" class="menu-link">UK</a></li>
                                                            <li><a href="#" class="menu-link">USA</a></li>
                                                            <li><a href="#" class="menu-link">Australia</a></li>
                                                            <li><a href="#" class="menu-link">Ireland</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- Blogs -->
                                        <li><a class="nav-link" href="<?= base_url('blogs') ?>">Blogs</a></li>


                                        <!-- University (simple link — now styled) -->
                                        <li class="relative" data-menu="university">
                                            <a href="<?= base_url('university') ?>" class="nav-btn" aria-haspopup="true"
                                                aria-expanded="false">
                                                Universities
                                                <svg class="ml-1 inline h-4 w-4 transition-transform"
                                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z" />
                                                </svg>
                                            </a>

                                            <div class="menu-panel" role="menu" aria-label="University">
                                                <div class="grid grid-cols-4 gap-6">
                                                    <div>
                                                        <ul class="menu-list">
                                                            <li><a href="<?= base_url('university') ?>" class="menu-link">Universities in Canada</a></li>
                                                            <li><a href="#" class="menu-link">University 2</a></li>
                                                            <li><a href="#" class="menu-link">University 3</a></li>
                                                            <li><a href="#" class="menu-link">University 4</a></li>
                                                            <li><a href="#" class="menu-link">University 5</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- Other links already styled -->
                                        <li><a class="nav-link" href="offers.html">Offers</a></li>
                                        <li><a class="nav-link" href="event.html">Events</a></li>
                                    </ul>
                                </nav>
                            </div>

                            <style>
                                /* ------------------------------------NAV ITEM (links + buttons)------------------------------------- */
                                .nav-link,
                                .nav-btn {
                                    --link-pad-x: 14px;
                                    --link-pad-y: 10px;

                                    display: inline-flex;
                                    align-items: center;
                                    gap: .35rem;
                                    padding: var(--link-pad-y) var(--link-pad-x);
                                    border-radius: 12px;

                                    font-weight: 500;
                                    line-height: 1;
                                    color: inherit;
                                    /* use whatever your header color is */
                                    text-decoration: none;
                                    position: relative;
                                    transition: background .2s ease, box-shadow .2s ease, color .2s ease, transform .2s ease;
                                }

                                .nav-btn {
                                    background: transparent;
                                    border: 0;
                                    cursor: pointer;
                                }

                                /* Hover/active glass pill */
                                .nav-link:hover,
                                .nav-btn:hover,
                                .nav-link:focus-visible,
                                .nav-btn:focus-visible {
                                    background: rgba(255, 255, 255, 0.12);
                                    -webkit-backdrop-filter: blur(8px) saturate(140%);
                                    backdrop-filter: blur(8px) saturate(140%);
                                    box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.22);
                                    outline: none;
                                }

                                /* Active/current page states (set aria-current="page" or .is-active) */
                                .nav-link[aria-current="page"],
                                .nav-link.is-active {
                                    background: rgba(255, 255, 255, 0.18);
                                    box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.28);
                                }

                                /* Small underline accent on hover (nice on both light/dark headers) */
                                .nav-link::after,
                                .nav-btn::after {
                                    content: "";
                                    position: absolute;
                                    left: 10px;
                                    right: 10px;
                                    bottom: 6px;
                                    height: 2px;
                                    background: currentColor;
                                    opacity: .18;
                                    transform: scaleX(0);
                                    transform-origin: left;
                                    transition: transform .25s ease;
                                }

                                .nav-link:hover::after,
                                .nav-btn:hover::after {
                                    transform: scaleX(1);
                                }

                                /* Rotate chevron when open */
                                [data-menu].open .nav-btn svg,
                                .nav-btn[aria-expanded="true"] svg {
                                    transform: rotate(180deg);
                                }

                                /* ------------------------------------DROPDOWN PANEL (glassy & narrower)------------------------------------- */
                                nav [data-menu] {
                                    position: relative;
                                }

                                .menu-panel {
                                    position: absolute;
                                    left: 50%;
                                    top: 100%;
                                    transform: translateX(-50%) translateY(10px);
                                    margin-top: 14px;

                                    /* Width: keep it narrower and responsive */
                                    width: auto;
                                    max-width: clamp(320px, 46vw, 680px);
                                    /* default cap ≈ 680px */
                                    overflow: hidden;
                                    overflow-wrap: anywhere;

                                    /* Glassmorphism */
                                    background: rgba(255, 255, 255, 0.28);
                                    backdrop-filter: blur(18px) saturate(160%);
                                    -webkit-backdrop-filter: blur(18px) saturate(160%);

                                    padding: 18px 22px;
                                    border-radius: 16px;

                                    /* Shadow & border */
                                    box-shadow:
                                        0 6px 18px rgba(0, 0, 0, 0.08),
                                        0 12px 32px rgba(0, 0, 0, 0.12);
                                    border: 1px solid rgba(255, 255, 255, 0.22);

                                    z-index: 1000;

                                    /* Hidden by default (animatable) */
                                    opacity: 0;
                                    visibility: hidden;
                                    pointer-events: none;

                                    transition:
                                        opacity .22s ease,
                                        transform .22s ease,
                                        visibility 0s linear .22s;
                                    /* delay visibility until fade-out ends */
                                    will-change: transform, opacity;
                                }

                                /* Even smaller variant for compact menus */
                                .menu-panel.menu-panel--sm {
                                    max-width: clamp(300px, 36vw, 520px);
                                }

                                /* Show the panel when open */
                                [data-menu].open>.nav-btn+.menu-panel,
                                [data-menu] .nav-btn[aria-expanded="true"]+.menu-panel {
                                    opacity: 1;
                                    visibility: visible;
                                    pointer-events: auto;
                                    transform: translateX(-50%) translateY(0);
                                    transition:
                                        opacity .22s ease,
                                        transform .22s ease,
                                        visibility 0s;
                                }

                                /* Override Tailwind's fixed 4-cols to auto-fit nicely */
                                .menu-panel>.grid {
                                    display: grid;
                                    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
                                    gap: 18px;
                                }

                                /* ------------------------------------MENU CONTENT STYLES------------------------------------- */
                                .menu-h {
                                    font-size: .9rem;
                                    line-height: 1.1;
                                    color: #0f172a;
                                    /* slate-900 */
                                    margin-bottom: .35rem;
                                }

                                .menu-list {
                                    list-style: none;
                                    margin: 0;
                                    padding: 0;
                                }

                                .menu-link {
                                    display: block;
                                    padding: 8px 10px;
                                    border-radius: 10px;
                                    text-decoration: none;
                                    color: #0f172a;
                                    transition: background .2s ease, box-shadow .2s ease, transform .15s ease;
                                }

                                .menu-link:hover {
                                    background: rgba(255, 255, 255, 0.65);
                                    box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.55);
                                    -webkit-backdrop-filter: blur(6px) saturate(140%);
                                    backdrop-filter: blur(6px) saturate(140%);
                                }

                                .menu-card {
                                    border-radius: 14px;
                                    padding: 14px;
                                    background: rgba(255, 255, 255, 0.6);
                                    -webkit-backdrop-filter: blur(10px);
                                    backdrop-filter: blur(10px);
                                    border: 1px solid rgba(255, 255, 255, 0.4);
                                    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
                                }

                                .menu-card-title {
                                    font-weight: 600;
                                    color: #0f172a;
                                }

                                .menu-card-copy {
                                    margin-top: 6px;
                                    font-size: .9rem;
                                    color: #334155;
                                }

                                .menu-cta {
                                    display: inline-flex;
                                    align-items: center;
                                    justify-content: center;
                                    margin-top: 10px;
                                    padding: 8px 12px;
                                    border-radius: 10px;
                                    background: #2563eb;
                                    color: #fff;
                                    text-decoration: none;
                                    transition: transform .15s ease, box-shadow .2s ease, background .2s ease;
                                }

                                .menu-cta:hover {
                                    background: #1d4ed8;
                                    transform: translateY(-1px);
                                }

                                /* ----- RESPONSIVE TWEAKS ----- */
                                @media (max-width: 1280px) {
                                    .menu-panel {
                                        max-width: min(92vw, 620px);
                                    }

                                    .menu-panel.menu-panel--sm {
                                        max-width: min(92vw, 500px);
                                    }
                                }
                            </style>

                            <!-- SCRIPT -->
                            <script>
                                (function() {
                                    const items = document.querySelectorAll('li[data-menu]');
                                    items.forEach((li) => {
                                        const btn = li.querySelector('.nav-btn');
                                        const panel = li.querySelector('.menu-panel');
                                        if (!btn || !panel) return;

                                        // Hover open (desktop)
                                        li.addEventListener('mouseenter', () => {
                                            closeAllExcept(li);
                                            btn.setAttribute('aria-expanded', 'true');
                                            li.classList.add('open');
                                        });
                                        li.addEventListener('mouseleave', () => {
                                            btn.setAttribute('aria-expanded', 'false');
                                            li.classList.remove('open');
                                        });

                                        // Close on Escape
                                        li.addEventListener('keydown', (e) => {
                                            if (e.key === 'Escape') {
                                                btn.setAttribute('aria-expanded', 'false');
                                                li.classList.remove('open');
                                                btn.focus();
                                            }
                                        });
                                    });

                                    function closeAllExcept(current) {
                                        document.querySelectorAll('li[data-menu].open').forEach((li) => {
                                            if (li !== current) {
                                                li.classList.remove('open');
                                                const b = li.querySelector('.nav-btn');
                                                if (b) b.setAttribute('aria-expanded', 'false');
                                            }
                                        });
                                    }
                                })();
                            </script>
                        </div>

                        <!-- Right Side Buttons -->
                        <div class="header-right-box">

                            <!-- Search -->
                            <button class="search-btn">
                                <img src="<?= base_url('public/') ?>assets/images/icons/search.webp" width="20"
                                    height="20" alt="search" />
                            </button>

                            <!-- Connect With Expert -->
                            <a href="tel:+919773388670" class="expert-connect">
                                <span class="pulse-label">Connect With Expert</span>
                                <span class="connect-number">+91 8447730303</span>
                            </a>

                            <!-- Shop + Login Group -->
                            <!-- <div class="header-right-buttons">
                            <a href="store.html" class="shop-button">
                                🛍️ <span>Shop</span>
                            </a>
                            <a href="login.html" class="login-button">Login</a>
                        </div> -->


                        </div>
                    </div>
                </div>
            </div>
            <!-- Navigation End -->