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
  return site_url('single_blog/' . (int)$b['blog_id']);
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
                  <a href="<?= site_url('single_blog/' . (int)$b['blog_id']) ?>" class="flex sm:flex-row flex-col gap-8 h-full">
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
          <p class="text-[15px] font-semibold mb-3">What Doctor Bano Offers for you!!</p>
          <div class="w-full justify-between flex flex-wrap gap-x-2 gap-y-1 ">
            <div class="group w/full md:w-[45%] rounded-[7px] transition-all cursor-pointer flex items-start gap-2 py-2">
              <div class="bg-[#FFF0E5] rounded-full p-3 w-fit">
                <img alt="Customized study plans" fetchpriority="high" width="18" height="18" decoding="async" class="w-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/icons/studyplan.webp">
              </div>
              <div class="w-auto">
                <h2 class="text-sm text-black font-semibold">Customized study plans</h2>
                <p class="text-xs text-[#646464] my-1">Customize Your Study Plan under Expert Guidance</p>
                <a class="text-[14px] 2xl:text-[15px] text-[#F37E20] inline-flex items-center font-medium uppercase" href="https://www.Doctor Bano.com/start-journey">Apply Now
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
                <a class="text-[14px] 2xl:text-[15px] text-[#F37E20] inline-flex items-center font-medium uppercase" href="https://www.gradding.com/college-predictor">Apply Now
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
                <a class="text-[14px] 2xl:text-[15px] text-[#F37E20] inline-flex items-center font-medium uppercase" href="https://www.gradding.com/test-preparation">Apply Now
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
                <a class="text-[14px] 2xl:text-[15px] text-[#F37E20] inline-flex items-center font-medium uppercase" href="https://www.gradding.com/services/visa-consultancy">Apply Now<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full md:w-[50%] xl:w-[24%] justify-between bg-white rounded-[15px] shadow-custom flex flex-wrap gap-3 p-4 relative z-30">
          <p class="text-[15px] font-semibold">Choose Country to Study Abroad</p>
          <a class=" w-full md:w-[26%] rounded-[7px] transition-all p-1 2xl:p-2 cursor-pointer flex flex-col items-center gap-1" href="https://www.gradding.com/study-in-usa">
            <img alt="country icnon" fetchpriority="high" width="39" height="38" decoding="async" class="hover:shadow-[0_0_12px_0_rgba(29,58,83,.25)] transition-all  rounded-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/country/usa.webp">
            <h2 class="text-xs text-black font-semibold uppercase">usa</h2>
          </a>
          <a class=" w-full md:w-[26%] rounded-[7px] transition-all p-1 2xl:p-2 cursor-pointer flex flex-col items-center gap-1" href="https://www.gradding.com/study-in-uk">
            <img alt="country icnon" fetchpriority="high" width="39" height="38" decoding="async" class="hover:shadow-[0_0_12px_0_rgba(29,58,83,.25)] transition-all  rounded-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/country/uk.webp">
            <h2 class="text-xs text-black font-semibold uppercase">uk</h2>
          </a>
          <a class=" w-full md:w-[26%] rounded-[7px] transition-all p-1 2xl:p-2 cursor-pointer flex flex-col items-center gap-1" href="https://www.gradding.com/study-in-australia">
            <img alt="country icnon" fetchpriority="high" width="39" height="38" decoding="async" class="hover:shadow-[0_0_12px_0_rgba(29,58,83,.25)] transition-all  rounded-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/country/au.webp">
            <h2 class="text-xs text-black font-semibold uppercase">Australia</h2>
          </a>
          <a class=" w-full md:w-[26%] rounded-[7px] transition-all p-1 2xl:p-2 cursor-pointer flex flex-col items-center gap-1" href="https://www.gradding.com/study-in-hungary">
            <img alt="country icnon" fetchpriority="high" width="39" height="38" decoding="async" class="hover:shadow-[0_0_12px_0_rgba(29,58,83,.25)] transition-all  rounded-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/country/hungary.webp">
            <h2 class="text-xs text-black font-semibold uppercase">hungary</h2>
          </a>
          <a class=" w-full md:w-[26%] rounded-[7px] transition-all p-1 2xl:p-2 cursor-pointer flex flex-col items-center gap-1" href="https://www.gradding.com/study-in-malta">
            <img alt="country icnon" fetchpriority="high" width="39" height="38" decoding="async" class="hover:shadow-[0_0_12px_0_rgba(29,58,83,.25)] transition-all  rounded-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/country/malta.webp">
            <h2 class="text-xs text-black font-semibold uppercase">malta</h2>
          </a>
          <a class=" w-full md:w-[26%] rounded-[7px] transition-all p-1 2xl:p-2 cursor-pointer flex flex-col items-center gap-1" href="https://www.gradding.com/college-predictor">
            <img alt="country icnon" fetchpriority="high" width="39" height="38" decoding="async" class="hover:shadow-[0_0_12px_0_rgba(29,58,83,.25)] transition-all  rounded-[10px]" style="color:transparent" src="<?= base_url('public/') ?>assets/images/icons/viewall.webp">
            <h2 class="text-xs text-black font-semibold uppercase">View All</h2>
          </a>
        </div>
        <div class="w-full md:w-[45%] xl:w-1/4 bg-[#FFF0E5] rounded-[15px] shadow-custom hidden sm:flex flex-wrap gap-2 p-3 relative z-30">
          <div class="h-full w-full text-center flex flex-col justify-between items-center">
            <h2 class="text-lg lg:text-[18px] font-semibold ">Have a dream to Study Abroad?<br>Call us Now</h2>
            <p class="font-semibold text-lg xl:text-[26px] flex items-center text-[#006ac9]">
              <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-[#F3601E] mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
              </svg>+91-9773388670
            </p>
            <a class="group mt-5 sm:mt-0 w-[90%] rounded-[10px] font-semibold text-sm uppercase p-3 transition-all group bg-[#F3601E] text-white hover:shadow-[0px_0px_12px_0px_#F3601E]" href="tel:+91-9773388670">
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
      <div class="w-full sm:w-2/5 m-auto flex items-center gap-2 border border-primary rounded-[12px] px-3 py-2 bg-white">

        <!-- Search -->
        <div class="flex gap-2 w-3/5 sm:w-3/4 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" class="text-[#AFB0B8]">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M14.96 14.26h.79l4.99 5-1.49 1.49-5-4.99v-.79l-.27-.28a6.5 6.5 0 1 1 .53-.53l.28.27ZM5.25 9.76a4.5 4.5 0 1 0 9 0a4.5 4.5 0 0 0-9 0Z"
              fill="currentColor" />
          </svg>
          <input type="text"
            placeholder="Search Blog"
            class="text-sm sm:text-base text-[#242529] placeholder:text-[#AFB0B8] font-medium bg-transparent outline-none w-full">
        </div>

        <!-- Country filter -->
        <div class="flex w-2/5 sm:w-1/4">
          <select class="w-full text-sm sm:text-base text-[#242529] font-medium bg-transparent outline-none border border-[#AFB0B8] rounded-[9px] px-2 py-1">
            <option value="">Select Country</option>
            <option value="39">Canada</option>
            <option value="79">United Kingdom</option>
            <option value="233">United States</option>
          </select>
        </div>
      </div>

      <!-- Category Pills (unchanged) -->
      <div class="flex items-center gap-4 flex-wrap justify-center my-10">
        <button class="bg-black text-white w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F] text-[15px] font-semibold">All</button>
        <button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F] text-[15px] font-semibold">News</button>
        <button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F] text-[15px] font-semibold">Courses</button>
        <button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F] text-[15px] font-semibold">Exams</button>
        <button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F] text-[15px] font-semibold">Finance</button>
        <button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F] text-[15px] font-semibold">Jobs</button>
        <button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F] text-[15px] font-semibold">Scholarships</button>
        <button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F] text-[15px] font-semibold">Visa</button>
        <button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F] text-[15px] font-semibold">Universities</button>
        <!-- ... keep the rest as-is ... -->
      </div>
    </div>

    <!-- Trending Blogs (first 2 from DB) -->
    <div class="container my-10 pb-10 box-border">

      <!-- Trending Blogs -->
      <p class="pb-5 sm:pb-10 pt-2 sm:pt-20 text-3xl font-bold">Trending Blogs</p>
      <div class="flex flex-wrap gap-8 lg:justify-between lg:gap-0">
        <?php if (!empty($trend) && is_array($trend)): ?>
          <?php foreach ($trend as $b): ?>
            <a class="w-full sm:w-[45%] lg:w-[48%] bg-white shadow-sm rounded-xl flex flex-col lg:flex-row hover:shadow-[0px_0px_40px_0px_#00000026] duration-250"
              href="<?= site_url('single_blog/' . (int)$b['blog_id']) ?>">
              <div class="rounded-t-xl bg-gray-500 lg:rounded-none lg:rounded-l-xl w-full lg:w-[60%] h-auto">
                <img class="rounded-t-xl h-full lg:rounded-none lg:rounded-l-xl w-full"
                  src="<?= !empty($b['blog_image']) ? base_url('uploads/blog/' . $b['blog_image']) : base_url('public/assets/images/placeholder.webp') ?>"
                  alt="<?= esc($b['blog_name']) ?>" loading="lazy">
              </div>
              <div class="p-6 overflow-hidden w-full lg:w-[40%]">
                <p class="text-xs uppercase text-[#6e6e73] font-bold">Blog</p>
                <h2 class="text-lg mt-4 mb-5 text-[#1d1d1f] font-bold line-clamp-2"><?= esc($b['blog_name']) ?></h2>
                <p class="text-xs uppercase text-[#6e6e73] font-bold">
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
            <a class="w-full sm:w-[45%] lg:w-[30%] bg-white shadow-sm rounded-xl hover:shadow-[0px_0px_40px_0px_#00000026] duration-250"
              href="<?= site_url('single_blog/' . (int)$b['blog_id']) ?>">
              <div class="rounded-t-xl w-full h-auto">
                <img class="rounded-t-xl"
                  src="<?= !empty($b['blog_image']) ? base_url('uploads/blog/' . $b['blog_image']) : base_url('public/assets/images/placeholder.webp') ?>"
                  alt="<?= esc($b['blog_name']) ?>" loading="lazy">
              </div>
              <div class="p-6">
                <p class="text-xs uppercase text-[#6e6e73] font-bold">Blog</p>
                <h2 class="text-lg my-1.5 text-[#1d1d1f] font-bold line-clamp-2"><?= esc($b['blog_name']) ?></h2>
                <p class="text-xs uppercase text-[#6e6e73] font-bold">
                  <?= !empty($b['created_at']) ? date('d M, Y', strtotime($b['created_at'])) : '' ?>
                </p>
              </div>
            </a>

            <?php if ($i === 3): ?>
              <!-- Promo card after 4th blog -->
              <div class="relative flex flex-col pt-5 px-7 pb-12 gap-5 hover:shadow-[0px_0px_40px_0px_#00000026] duration-250 bg-[#dbeeea] rounded-2xl lg:w-[30%] sm:w-[45%] w-full">
                <h2 class="text-[#00817e] font-bold text-xl sm:text-3xl">Grab FREE IELTS Mock Test</h2>
                <p class="text-base text-[#1d1d1f] w-[75%] lg:w-full">Claim this exclusive limited time offer!</p>
                <a href="https://dashboard.gradding.com/dashboard/mock-test"
                  class="cursor-pointer rounded-[10px] bg-[#066ac9] w-fit text-white text-base sm:text-lg py-2 sm:py-3 px-5 sm:px-7 font-medium">Start Now</a>
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

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const wrapper = document.getElementById("blogListWrapper");

        wrapper.addEventListener("click", function(e) {
          const target = e.target.closest("a"); // find <a> inside pagination
          if (target && target.closest(".pagination")) {
            e.preventDefault();
            const url = target.getAttribute("href");

            fetch(url, {
                headers: {
                  "X-Requested-With": "XMLHttpRequest"
                }
              })
              .then(res => res.text())
              .then(html => {
                wrapper.innerHTML = html;
                // smooth scroll to top of blogs
                window.scrollTo({
                  top: wrapper.offsetTop - 80,
                  behavior: "smooth"
                });
              })
              .catch(err => console.error("Pagination error:", err));
          }
        });
      });
    </script>

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