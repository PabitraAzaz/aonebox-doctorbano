<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DoctorBano</title>
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/header-footer.css" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    
    <!-- PNG fallback -->
    <link rel="icon" type="image/png" href="<?= base_url('public/assets/images/fav.png') ?>" sizes="32x32">
    
    
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/main.css" />

</head>

<div id="loader"
    class="flex justify-center items-center min-h-screen" style="background-color: #fff;">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTwLw-KydojnBg_uahhm9brBEPsahUSQvhDKfQ6DflQ0SwiQfWwiJbgLFXDqDsroqNSLI&usqp=CAU"
        alt="" style="width:100px;height:auto">
</div>

<main id="main-content" style="display: none;">
    <div class="relative bg-[#ededed]">
        <!-- <img src="<?= base_url('public/') ?>assets/images/bg/doctorbano-blue.webp" alt="doctorbano" width="1530"
            height="106" class="header-bg-img" loading="lazy" /> -->

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
                                    <!-- <li class="relative" data-menu="study">
                                            <a href="<?= base_url('') ?>" class="nav-btn" aria-haspopup="true"
                                                aria-expanded="false">
                                                Study Abroad
                                                <svg class="ml-1 inline h-4 w-4 transition-transform"
                                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z" />
                                                </svg>
                                            </a>

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
                                        </li> -->

                                    <!-- Top Countries (smaller panel demo) -->
                                    <!-- <li class="relative" data-menu="countries">
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
                                        </li> -->

                                    <!-- Blogs -->
                                    <li><a class="nav-link" href="<?= base_url('blogs') ?>">Blogs</a></li>


                                    <!-- University (simple link — now styled) -->
                                    <li class="relative" data-menu="universities">
                                        <a href="<?= base_url('universities') ?>" class="nav-btn" aria-haspopup="true"
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
                                                        <li><a href="<?= base_url('universities') ?>" class="menu-link">Universities in Russia</a></li>
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
                                    <li><a class="nav-link" href="#">Offers</a></li>
                                    <li><a class="nav-link" href="#">Events</a></li>
                                </ul>
                            </nav>
                        </div>


                    </div>

                    <!-- Right Side Buttons -->
                    <div class="header-right-box">

                        <!-- Search -->
                        <button class="search-btn">
                            <img src="<?= base_url('public/') ?>assets/images/icons/search.webp" width="20"
                                height="20" alt="search" />
                        </button>

                        <!-- Connect With Expert -->
                        <a href="tel:+91 8447730303" class="expert-connect">
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
    </div>