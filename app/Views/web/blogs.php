<?= $this->extend('web/components/assemble') ?>

<?= $this->section('content') ?>

<?php
// --- Helpers to render blog content from DB ---
$imgSrc = static function (array $b): string {
  return !empty($b['blog_image'])
    ? base_url('uploads/blog/' . $b['blog_image'])
    : base_url('public/assets/images/placeholder.webp');
};

$blogUrl = static function (array $b): string {
  return site_url('blog/' . (int)$b['blog_id']);
};

$blogDate = static function (array $b): string {
  return !empty($b['created_at']) ? date('j M, Y', strtotime($b['created_at'])) : '';
};

// $trend and $recent already come from controller
$trend  = $trend ?? [];
$recent = $recent ?? [];
?>

<main>
  <!-- Banner Section: Swiper (Top) + Info Grid (Bottom) -->
  <div class="bg-[#4E4949] overflow-auto py-7 sm:py-14 relative">
    <div class="container">

      <!-- Load Swiper Web Component -->
      <script type="module">
        import 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js';
      </script>

      <!-- Blog Slider (from DB) -->
      <div class="bg-[#4E4949] py-10 sm:py-16 relative">
        <div class="container mx-auto px-4">
          <swiper-container
            class="mySwiper"
            navigation="true"
            pagination="true"
            keyboard="true"
            mousewheel="true"
            css-mode="true"
            loop="true"
            space-between="30"
            slides-per-view="1"
            autoplay-delay="5000"
            style="--swiper-navigation-size: 28px; --swiper-pagination-bullet-size: 12px;">

            <?php if (!empty($trend) && is_array($trend)): ?>
              <?php foreach ($trend as $b): ?>
                <swiper-slide>
                  <a href="<?= site_url('blog/' . (int)$b['blog_id']) ?>" class="flex sm:flex-row flex-col gap-8 h-full">
                    <div class="w-full sm:w-2/5 rounded-[15px] border-4 border-white overflow-hidden">
                      <img src="<?= !empty($b['blog_image']) ? base_url('uploads/blog/' . $b['blog_image']) : base_url('public/assets/images/placeholder.webp') ?>"
                        alt="<?= esc($b['blog_name']) ?>" class="w-full h-full object-cover" loading="lazy" />
                    </div>
                    <div class="w-full sm:w-3/5 flex flex-col justify-between items-start">
                      <h1 class="text-[23px] sm:text-[40px] font-medium text-white leading-[130%]">
                        <?= esc($b['blog_name']) ?>
                      </h1>
                      <p class="text-white text-base mt-2 mb-4">
                        <?= !empty($b['created_at']) ? date('j M, Y', strtotime($b['created_at'])) : '' ?>
                      </p>
                      <div class="bg-white text-[#4E4949] font-medium rounded-[10px] px-5 py-2.5 inline-flex items-center gap-2">
                        Visit Blog
                      </div>
                    </div>
                  </a>
                </swiper-slide>
              <?php endforeach; ?>
            <?php else: ?>
              <swiper-slide>
                <div class="p-6 text-white">No blogs found.</div>
              </swiper-slide>
            <?php endif; ?>

          </swiper-container>
        </div>
      </div>

      <div class="hidden w-full flex-wrap xl:flex-nowrap sm:flex gap-3 sm:gap-5 xl:gap-3 2xl:gap-8 items-stretch relative">
        <div class="w-full xl:w-1/2 bg-white rounded-[15px] shadow-custom px-5 py-3 relative z-30">
          <p class="text-[15px] font-semibold mb-3">What DoctorBano Offers for you!!</p>
          <div class="w-full justify-between flex flex-wrap gap-x-2 gap-y-1 ">
            <div class="group w/full md:w-[45%] rounded-[7px] transition-all cursor-pointer flex items-start gap-2 py-2">
              <div class="bg-[#FFF0E5] rounded-full p-3 w-fit">
                <img alt="Customized study plans" fetchpriority="high" width="18" height="18" decoding="async" class="w-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/icons/studyplan.webp">
              </div>
              <div class="w-auto">
                <h2 class="text-sm text-black font-semibold">Customized study plans</h2>
                <p class="text-xs text-[#646464] my-1">Customize Your Study Plan under Expert Guidance</p>
                <a class="text-[14px] 2xl:text-[15px] text-[#ff8401] inline-flex items-center font-medium uppercase" href="https://www.DoctorBano.com/">Apply Now
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                  </svg></a>
              </div>
            </div>
            <div class="group w/full md:w-[45%] rounded-[7px] transition-all cursor-pointer flex items-start gap-2 py-2">
              <div class="bg-[#FFF0E5] rounded-full p-3 w-fit">
                <img alt="University Admission" fetchpriority="high" width="18" height="18" decoding="async" class="w-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/icons/university.webp">
              </div>
              <div class="w-auto">
                <h2 class="text-sm text-black font-semibold">University Admission</h2>
                <p class="text-xs text-[#646464] my-1">Simplify the Time-Consuming Admission Process with Experts</p>
                <a class="text-[14px] 2xl:text-[15px] text-[#ff8401] inline-flex items-center font-medium uppercase" href="#">Apply Now
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                  </svg>
                </a>
              </div>
            </div>
            <div class="group w/full md:w-[45%] rounded-[7px] transition-all cursor-pointer flex items-start gap-2 py-2">
              <div class="bg-[#FFF0E5] rounded-full p-3 w-fit">
                <img alt="Test Preparation" fetchpriority="high" width="18" height="18" decoding="async" class="w-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/icons/testprep.webp">
              </div>
              <div class="w-auto">
                <h2 class="text-sm text-black font-semibold">Test Preparation</h2>
                <p class="text-xs text-[#646464] my-1">Ace Standardized Entrance Tests with Decent Scores</p>
                <a class="text-[14px] 2xl:text-[15px] text-[#ff8401] inline-flex items-center font-medium uppercase" href="#">Apply Now
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                  </svg>
                </a>
              </div>
            </div>
            <div class="group w/full md:w-[45%] rounded-[7px] transition-all cursor-pointer flex items-start gap-2 py-2">
              <div class="bg-[#FFF0E5] rounded-full p-3 w-fit">
                <img alt="Smooth Visa process" fetchpriority="high" width="18" height="18" decoding="async" class="w-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/icons/visaprocess.webp">
              </div>
              <div class="w-auto">
                <h2 class="text-sm text-black font-semibold">Smooth Visa process</h2>
                <p class="text-xs text-[#646464] my-1">Raise the Odds of Fast Visa Approval in One Go</p>
                <a class="text-[14px] 2xl:text-[15px] text-[#ff8401] inline-flex items-center font-medium uppercase" href="#">Apply Now<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full md:w-[50%] xl:w-[24%] justify-between bg-white rounded-[15px] shadow-custom flex flex-wrap gap-3 p-4 relative z-30">
          <p class="text-[15px] font-semibold">Choose Country to Study Abroad</p>
          <a class=" w-full md:w-[26%] rounded-[7px] transition-all p-1 2xl:p-2 cursor-pointer flex flex-col items-center gap-1" href="<?= base_url('universities') ?>">
            <img alt="country icnon" fetchpriority="high" width="39" height="38" decoding="async" class="hover:shadow-[0_0_12px_0_rgba(29,58,83,.25)] transition-all  rounded-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/country/RussiaFlag.png">
            <h2 class="text-xs text-black font-semibold uppercase">Russia</h2>
          </a>
          <a class=" w-full md:w-[26%] rounded-[7px] transition-all p-1 2xl:p-2 cursor-pointer flex flex-col items-center gap-1" href="<?= base_url('universities') ?>">
            <img alt="country icnon" fetchpriority="high" width="39" height="38" decoding="async" class="hover:shadow-[0_0_12px_0_rgba(29,58,83,.25)] transition-all  rounded-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/country/KazakhastanFlag.png">
            <h2 class="text-xs text-black font-semibold uppercase">Kazakhastan</h2>
          </a>
          <a class=" w-full md:w-[26%] rounded-[7px] transition-all p-1 2xl:p-2 cursor-pointer flex flex-col items-center gap-1" href="<?= base_url('universities') ?>">
            <img alt="country icnon" fetchpriority="high" width="39" height="38" decoding="async" class="hover:shadow-[0_0_12px_0_rgba(29,58,83,.25)] transition-all  rounded-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/country/GeorgiaFlag.png">
            <h2 class="text-xs text-black font-semibold uppercase">Georgia</h2>
          </a>
          <a class=" w-full md:w-[26%] rounded-[7px] transition-all p-1 2xl:p-2 cursor-pointer flex flex-col items-center gap-1" href="<?= base_url('universities') ?>">
            <img alt="country icnon" fetchpriority="high" width="39" height="38" decoding="async" class="hover:shadow-[0_0_12px_0_rgba(29,58,83,.25)] transition-all  rounded-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/country/ChinaFlag.png">
            <h2 class="text-xs text-black font-semibold uppercase">China</h2>
          </a>
          <a class=" w-full md:w-[26%] rounded-[7px] transition-all p-1 2xl:p-2 cursor-pointer flex flex-col items-center gap-1" href="<?= base_url('universities') ?>">
            <img alt="country icnon" fetchpriority="high" width="39" height="38" decoding="async" class="hover:shadow-[0_0_12px_0_rgba(29,58,83,.25)] transition-all  rounded-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/country/UkraineFlag.png">
            <h2 class="text-xs text-black font-semibold uppercase">Ukraine</h2>
          </a>
          <a class=" w-full md:w-[26%] rounded-[7px] transition-all p-1 2xl:p-2 cursor-pointer flex flex-col items-center gap-1" href="<?= base_url('universities') ?>">
            <img alt="country icnon" fetchpriority="high" width="39" height="38" decoding="async" class="hover:shadow-[0_0_12px_0_rgba(29,58,83,.25)] transition-all  rounded-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/country/PhilippinesFlag.png">
            <h2 class="text-xs text-black font-semibold uppercase">Philippines</h2>
          </a>
        </div>
        <div class="w-full md:w-[45%] xl:w-1/4 bg-[#FFF0E5] rounded-[15px] shadow-custom hidden sm:flex flex-wrap gap-2 p-3 relative z-30">
          <div class="h-full w-full text-center flex flex-col justify-between items-center">
            <h2 class="text-lg lg:text-[18px] font-semibold ">Have a dream to Study Abroad?<br>Call us Now</h2>
            <p class="font-semibold text-lg xl:text-[26px] flex items-center text-[#ff8401]">
              <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-[#ff8401] mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
              </svg>+91 8447630303
            </p>
            <a class="group mt-5 sm:mt-0 w-[90%] rounded-[10px] font-semibold text-sm uppercase p-3 transition-all group bg-[#ff8401] text-white hover:shadow-[0px_0px_12px_0px_#ff8401]" href="tel:+91 8447730303">
              <span class="group:hover-drop-shadow-[0px_0px_10px_0px_#ffffff]">call us now</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- News & Blogs -->
  <div class="my-8 sm:my-16">
    <div class="container">
      <h2 class="text-[32px] sm:text-[54px] text-center capitalize font-semibold mb-5 sm:mb-10">News <span class="text-primary">&amp;</span> Blogs</h2>

      <!-- search + country filter -->
      <div>

        <!-- Search -->
        <form method="get" action="<?= site_url('blogs') ?>"
          class="w-full sm:w-2/3 lg:w-1/2 m-auto">
          <div class="flex w-full relative">
            <!-- Input -->
            <input id="searchInput" type="text" name="search"
              placeholder="Search Blog"
              class="flex-grow pl-4 pr-8 py-2 rounded-l-[12px] border border-primary text-sm sm:text-base text-[#242529] placeholder:text-[#AFB0B8] outline-none" />

            <!-- Clear (×) inside input -->
            <button type="button" id="clearBtn"
              class="absolute right-[80px] top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 hidden">
              ✕
            </button>

            <!-- Search button -->
            <button type="submit"
              class="bg-primary text-white px-6 py-2 rounded-r-[12px] flex items-center justify-center hover:bg-primary/90 transition-all">
              <!-- Search Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
              </svg>
            </button>
          </div>
        </form>

        <script>
          const searchInput = document.getElementById('searchInput');
          const clearBtn = document.getElementById('clearBtn');

          // Show or hide cross button
          searchInput.addEventListener('input', () => {
            clearBtn.classList.toggle('hidden', searchInput.value === '');
          });

          // Clear input when cross clicked
          clearBtn.addEventListener('click', () => {
            searchInput.value = '';
            clearBtn.classList.add('hidden');
            searchInput.focus();
          });
        </script>
      </div>
    </div>

    <!-- Trending Blogs (first 2 from DB) -->
    <div class="container my-10 pb-10 box-border">

      <!-- Trending Blogs -->
      <p class="pb-5 sm:pb-10 pt-2 sm:pt-20 text-3xl font-bold">Trending Blogs</p>
      <div class="flex flex-wrap gap-8 lg:justify-between lg:gap-0">
        <?php if (!empty($trend) && is_array($trend)): ?>
          <?php foreach ($trend as $b): ?>
            <a class="group w-full sm:w-[45%] lg:w-[48%] bg-white shadow-sm rounded-xl flex flex-col lg:flex-row 
                 hover:shadow-lg hover:-translate-y-1 transform transition-all duration-300 fade-in-up"
              href="<?= site_url('blog/' . (int)$b['blog_id']) ?>">

              <!-- Blog Image -->
              <div class="rounded-t-xl bg-gray-200 lg:rounded-none lg:rounded-l-xl w-full lg:w-[60%] h-auto overflow-hidden">
                <img class="rounded-t-xl lg:rounded-none lg:rounded-l-xl w-full h-full object-cover 
                     transform group-hover:scale-105 transition-transform duration-500 ease-in-out"
                  src="<?= !empty($b['blog_image']) ? base_url('uploads/blog/' . $b['blog_image']) : base_url('public/assets/images/placeholder.webp') ?>"
                  alt="<?= esc($b['blog_name']) ?>" loading="lazy">
              </div>

              <!-- Blog Content -->
              <div class="p-6 overflow-hidden w-full lg:w-[40%] flex flex-col justify-between">
                <p class="text-xs uppercase text-[#6e6e73] font-semibold tracking-wide">Blog</p>
                <h2 class="text-lg mt-4 mb-5 text-[#1d1d1f] font-bold line-clamp-2 
                     group-hover:text-[#0091ec] transition-colors duration-300">
                  <?= esc($b['blog_name']) ?>
                </h2>
                <p class="text-xs uppercase text-[#6e6e73] font-medium">
                  <?= !empty($b['created_at']) ? date('d M, Y', strtotime($b['created_at'])) : '' ?>
                </p>
              </div>
            </a>
          <?php endforeach; ?>
        <?php else: ?>
          <div class="text-[#6e6e73]">No trending blogs found.</div>
        <?php endif; ?>
      </div>

      <!-- Recent Blogs -->
      <p id="recentBlogScroll" class="pb-10 pt-20 text-3xl font-bold">Recent Blogs</p>
      <div class="flex flex-wrap lg:justify-between gap-10 relative">
        <?php if (!empty($recent) && is_array($recent)): ?>
          <?php foreach ($recent as $i => $b): ?>
            <a class="group w-full sm:w-[45%] lg:w-[30%] bg-white shadow-sm rounded-xl border border-transparent 
                flex flex-col hover:-translate-y-1 hover:border-[#0091ec] hover:shadow-lg 
                transform transition-all duration-300 fade-in-up"
              href="<?= site_url('blog/' . (int)$b['blog_id']) ?>">

              <!-- Blog Image -->
              <div class="rounded-t-xl w-full h-auto overflow-hidden">
                <img class="rounded-t-xl w-full h-full object-cover 
                     transition-transform duration-500 ease-in-out group-hover:scale-102"
                  src="<?= !empty($b['blog_image']) ? base_url('uploads/blog/' . $b['blog_image']) : base_url('public/assets/images/placeholder.webp') ?>"
                  alt="<?= esc($b['blog_name']) ?>" loading="lazy">
              </div>

              <!-- Blog Content -->
              <div class="p-6 flex flex-col justify-between">
                <p class="text-xs uppercase text-[#6e6e73] font-semibold tracking-wide">Blog</p>
                <h2 class="text-lg my-1.5 text-[#1d1d1f] font-bold line-clamp-2 
                     group-hover:text-[#0091ec] transition-colors duration-300">
                  <?= esc($b['blog_name']) ?>
                </h2>
                <p class="text-xs uppercase text-[#6e6e73] font-medium">
                  <?= !empty($b['created_at']) ? date('d M, Y', strtotime($b['created_at'])) : '' ?>
                </p>
              </div>
            </a>

            <?php if ($i === 3): ?>
              <!-- Promo card after 4th blog -->
              <div class="relative flex flex-col pt-5 px-7 pb-12 gap-5 bg-[#dbeeea] rounded-2xl lg:w-[30%] sm:w-[45%] w-full 
                    hover:-translate-y-1 hover:shadow-lg hover:border-[#00817e] border border-transparent 
                    transition-all duration-300 fade-in-up">
                <h2 class="text-[#00817e] font-bold text-xl sm:text-3xl">Grab FREE IELTS Mock Test</h2>
                <p class="text-base text-[#1d1d1f] w-[75%] lg:w-full">Claim this exclusive limited time offer!</p>
                <a href="#"
                  class="cursor-pointer rounded-[10px] bg-[#0091ec] w-fit text-white text-base sm:text-lg py-2 sm:py-3 px-5 sm:px-7 font-medium">Start Now</a>
                <div class="right-0 bottom-0 w-1/2 sm:w-[55%] lg:w-[60%] h-auto absolute">
                  <img alt="advertisement picture" src="<?= base_url('public/assets/images/blogs/adverImg.webp') ?>" loading="lazy">
                </div>
              </div>
            <?php endif; ?>

          <?php endforeach; ?>
        <?php else: ?>
          <div class="text-[#6e6e73]">No recent blogs found.</div>
        <?php endif; ?>
      </div>

    </div>

    <div id="blogListWrapper">
      <!-- Pagination -->
      <div class="mt-6 flex justify-center">
        <?= $pager->links('blogs', 'custom_pagination') ?>
      </div>
    </div>


  </div>

  </div>

  <!-- Newsletter -->
  <div class="container my-8 sm:my-16 ">
    <div class="px-2 py-14 bg-[#F7C32E] rounded-[8px] m-auto relative overflow-hidden">
      <div class="flex flex-col items-center justify-center w-full sm:w-1/2 m-auto">
        <p class="text-2xl sm:text-[38px] font-semibold text-center leading-[130%]">Subscribe to our Newsletter for Newest Course Updates</p>
        <form class="w-full my-4 relative">
          <div class="flex items-center justify-between bg-white p-1 rounded-full w-full sm:w-2/3 m-auto">
            <div class="w-3/4 pl-3 pr-1">
              <input class="w-full outline-none text-[15px] text-[#9A9EA4]" placeholder="Enter your email" type="email" name="email">
            </div>
            <button class="min-w-20 h-10 px-4 text-white text-sm sm:text-[15px] font-medium rounded-full bg-[#1D3B53] w-1/4 border-white" type="submit">Subscribe!</button>
          </div>
        </form>
      </div>
      <img alt="bg-image" loading="lazy" width="173" height="141" class="absolute -left-10 sm:left-0 -bottom-10 sm:bottom-0" src="<?= base_url('public/') ?>assets/images/extra/newsletter1.webp" style="color: transparent;">
      <img alt="bg-image" loading="lazy" width="258" height="210" class="hidden sm:block absolute right-0 bottom-0" src="<?= base_url('public/') ?>assets/images/extra/newsletter2.webp" style="color: transparent;">
      <img alt="bg-image" loading="lazy" width="54" height="39" class="absolute top-[8%] right-5 sm:right-unset sm:left-1/3" src="<?= base_url('public/') ?>assets/images/extra/newsletter3.webp" style="color: transparent;">
    </div>
  </div>
</main>

<?= $this->endSection() ?>