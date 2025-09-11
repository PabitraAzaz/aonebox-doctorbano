<?= $this->extend('web/components/assemble') ?>

<?= $this->section('content') ?>

<main>
  <!-- Banner Section: Swiper (Top) + Info Grid (Bottom) -->
  <div class="bg-[#4E4949] overflow-auto py-7 sm:py-14 relative">
    <div class="container">

      <!-- Load Swiper Web Component -->
      <script type="module">
        import 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js';
      </script>

      <!-- Blog Slider -->
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
            <!-- Slide 1 -->
            <swiper-slide>
              <a href="https://www.gradding.com/blog/english/adverbs-of-frequency" class="flex sm:flex-row flex-col gap-8 h-full">
                <div class="w-full sm:w-2/5 rounded-[15px] border-4 border-white overflow-hidden">
                  <img src="https://gradding.s3.ap-south-1.amazonaws.com/website-images/uploads/pages/adverb-of-frequency-6895.png" alt="Adverb of Frequency" class="w-full" />
                </div>
                <div class="w-full sm:w-3/5 flex flex-col justify-between items-start">
                  <h1 class="text-[23px] sm:text-[40px] font-medium text-white leading-[130%]">Adverb of Frequency: Definition, Examples, Rules, Worksheet</h1>
                  <p class="text-white text-base mt-2 mb-4">Words like "always," "often," and "sometimes" help describe how frequently an action takes place. Explore rules, placement, examples, and more in this blog.</p>
                  <div class="bg-white text-[#4E4949] font-medium rounded-[10px] px-5 py-2.5 inline-flex items-center gap-2">Visit Blog</div>
                </div>
              </a>
            </swiper-slide>

            <!-- Slide 2 -->
            <swiper-slide>
              <a href="https://www.gradding.com/blog/english/adverbs-of-time" class="flex sm:flex-row flex-col gap-8 h-full">
                <div class="w-full sm:w-2/5 rounded-[15px] border-4 border-white overflow-hidden">
                  <img src="https://gradding.s3.ap-south-1.amazonaws.com/website-images/uploads/pages/adverbs-of-time-6894.png" alt="Adverbs of Time" class="w-full" />
                </div>
                <div class="w-full sm:w-3/5 flex flex-col justify-between items-start">
                  <h1 class="text-[23px] sm:text-[40px] font-medium text-white leading-[130%]">Adverb of Time: Definition, Rules, Examples & Worksheet</h1>
                  <p class="text-white text-base mt-2 mb-4">Adverbs of time tell us when an action happens. This blog covers definitions, lists, examples, and a worksheet to help reinforce the concept.</p>
                  <div class="bg-white text-[#4E4949] font-medium rounded-[10px] px-5 py-2.5 inline-flex items-center gap-2">Visit Blog</div>
                </div>
              </a>
            </swiper-slide>

            <!-- Slide 3 -->
            <swiper-slide>
              <a href="https://www.gradding.com/blog/english/adverbs-of-degree" class="flex sm:flex-row flex-col gap-8 h-full">
                <div class="w-full sm:w-2/5 rounded-[15px] border-4 border-white overflow-hidden">
                  <img src="https://gradding.s3.ap-south-1.amazonaws.com/website-images/uploads/pages/adverbs-of-degree-6894.png" alt="Adverbs of Degree" class="w-full" />
                </div>
                <div class="w-full sm:w-3/5 flex flex-col justify-between items-start">
                  <h1 class="text-[23px] sm:text-[40px] font-medium text-white leading-[130%]">Adverbs of Degree: Definition, Rules, and Examples</h1>
                  <p class="text-white text-base mt-2 mb-4">Learn how adverbs like "very," "quite," and "almost" express intensity. Dive into definitions, rules, and practice worksheets.</p>
                  <div class="bg-white text-[#4E4949] font-medium rounded-[10px] px-5 py-2.5 inline-flex items-center gap-2">Visit Blog</div>
                </div>
              </a>
            </swiper-slide>

            <!-- Slide 4 -->
            <swiper-slide>
              <a href="https://www.gradding.com/blog/english/prepositions-of-place" class="flex sm:flex-row flex-col gap-8 h-full">
                <div class="w-full sm:w-2/5 rounded-[15px] border-4 border-white overflow-hidden">
                  <img src="https://gradding.s3.ap-south-1.amazonaws.com/website-images/uploads/pages/prepositions-of-place-6892.png" alt="Prepositions of Place" class="w-full" />
                </div>
                <div class="w-full sm:w-3/5 flex flex-col justify-between items-start">
                  <h1 class="text-[23px] sm:text-[40px] font-medium text-white leading-[130%]">Prepositions of Place: Explanation, Examples, & Exercise</h1>
                  <p class="text-white text-base mt-2 mb-4">Understand how prepositions of place like "on," "under," and "beside" describe the spatial relationship of things. This blog includes exercises too.</p>
                  <div class="bg-white text-[#4E4949] font-medium rounded-[10px] px-5 py-2.5 inline-flex items-center gap-2">Visit Blog</div>
                </div>
              </a>
            </swiper-slide>

            <!-- Slide 5 -->
            <swiper-slide>
              <a href="https://www.gradding.com/blog/english/adverbs-of-manner" class="flex sm:flex-row flex-col gap-8 h-full">
                <div class="w-full sm:w-2/5 rounded-[15px] border-4 border-white overflow-hidden">
                  <img src="https://gradding.s3.ap-south-1.amazonaws.com/website-images/uploads/pages/prepositions-of-place-1-6892.png" alt="Adverbs of Manner" class="w-full" />
                </div>
                <div class="w-full sm:w-3/5 flex flex-col justify-between items-start">
                  <h1 class="text-[23px] sm:text-[40px] font-medium text-white leading-[130%]">Adverbs of Manner: Rules to Form, Examples & Practice</h1>
                  <p class="text-white text-base mt-2 mb-4">Adverbs of manner describe how an action is done. This article gives examples and practice exercises for mastery.</p>
                  <div class="bg-white text-[#4E4949] font-medium rounded-[10px] px-5 py-2.5 inline-flex items-center gap-2">Visit Blog</div>
                </div>
              </a>
            </swiper-slide>
          </swiper-container>
        </div>
      </div>

      <div class="hidden w-full flex-wrap xl:flex-nowrap sm:flex gap-3 sm:gap-5 xl:gap-3 2xl:gap-8 items-stretch relative">
        <div class="w-full xl:w-1/2 bg-white rounded-[15px] shadow-custom px-5 py-3 relative z-30">
          <p class="text-[15px] font-semibold mb-3">What Doctor Bano Offers for you!!</p>
          <div class="w-full justify-between flex flex-wrap gap-x-2 gap-y-1 ">
            <div class="group w-full md:w-[45%] rounded-[7px] transition-all cursor-pointer flex items-start gap-2 py-2">
              <div class="bg-[#FFF0E5] rounded-full p-3 w-fit">
                <img alt="Customized study plans" fetchpriority="high" width="18" height="18" decoding="async" data-nimg="1" class="w-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/icons/studyplan.webp">
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
            <div class="group w-full md:w-[45%] rounded-[7px] transition-all cursor-pointer flex items-start gap-2 py-2">
              <div class="bg-[#FFF0E5] rounded-full p-3 w-fit">
                <img alt="University Admission" fetchpriority="high" width="18" height="18" decoding="async" data-nimg="1" class="w-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/icons/university.webp">
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
            <div class="group w-full md:w-[45%] rounded-[7px] transition-all cursor-pointer flex items-start gap-2 py-2">
              <div class="bg-[#FFF0E5] rounded-full p-3 w-fit">
                <img alt="Test Preparation" fetchpriority="high" width="18" height="18" decoding="async" data-nimg="1" class="w-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/icons/testprep.webp">
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
            <div class="group w-full md:w-[45%] rounded-[7px] transition-all cursor-pointer flex items-start gap-2 py-2">
              <div class="bg-[#FFF0E5] rounded-full p-3 w-fit">
                <img alt="Smooth Visa process" fetchpriority="high" width="18" height="18" decoding="async" data-nimg="1" class="w-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/icons/visaprocess.webp">
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
            <img alt="country icnon" fetchpriority="high" width="39" height="38" decoding="async" data-nimg="1" class="hover:shadow-[0_0_12px_0_rgba(29,58,83,.25)] transition-all  rounded-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/country/usa.webp">
            <h2 class="text-xs text-black font-semibold uppercase">usa</h2>
          </a>
          <a class=" w-full md:w-[26%] rounded-[7px] transition-all p-1 2xl:p-2 cursor-pointer flex flex-col items-center gap-1" href="https://www.gradding.com/study-in-uk">
            <img alt="country icnon" fetchpriority="high" width="39" height="38" decoding="async" data-nimg="1" class="hover:shadow-[0_0_12px_0_rgba(29,58,83,.25)] transition-all  rounded-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/country/uk.webp">
            <h2 class="text-xs text-black font-semibold uppercase">uk</h2>
          </a>
          <a class=" w-full md:w-[26%] rounded-[7px] transition-all p-1 2xl:p-2 cursor-pointer flex flex-col items-center gap-1" href="https://www.gradding.com/study-in-australia">
            <img alt="country icnon" fetchpriority="high" width="39" height="38" decoding="async" data-nimg="1" class="hover:shadow-[0_0_12px_0_rgba(29,58,83,.25)] transition-all  rounded-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/country/au.webp">
            <h2 class="text-xs text-black font-semibold uppercase">Australia</h2>
          </a>
          <a class=" w-full md:w-[26%] rounded-[7px] transition-all p-1 2xl:p-2 cursor-pointer flex flex-col items-center gap-1" href="https://www.gradding.com/study-in-hungary">
            <img alt="country icnon" fetchpriority="high" width="39" height="38" decoding="async" data-nimg="1" class="hover:shadow-[0_0_12px_0_rgba(29,58,83,.25)] transition-all  rounded-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/country/hungary.webp">
            <h2 class="text-xs text-black font-semibold uppercase">hungary</h2>
          </a>
          <a class=" w-full md:w-[26%] rounded-[7px] transition-all p-1 2xl:p-2 cursor-pointer flex flex-col items-center gap-1" href="https://www.gradding.com/study-in-malta">
            <img alt="country icnon" fetchpriority="high" width="39" height="38" decoding="async" data-nimg="1" class="hover:shadow-[0_0_12px_0_rgba(29,58,83,.25)] transition-all  rounded-full" style="color:transparent" src="<?= base_url('public/') ?>assets/images/country/malta.webp">
            <h2 class="text-xs text-black font-semibold uppercase">malta</h2>
          </a>
          <a class=" w-full md:w-[26%] rounded-[7px] transition-all p-1 2xl:p-2 cursor-pointer flex flex-col items-center gap-1" href="https://www.gradding.com/college-predictor">
            <img alt="country icnon" fetchpriority="high" width="39" height="38" decoding="async" data-nimg="1" class="hover:shadow-[0_0_12px_0_rgba(29,58,83,.25)] transition-all  rounded-[10px]" style="color:transparent" src="<?= base_url('public/') ?>assets/images/icons/viewall.webp">
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

  <div class="my-8 sm:my-16">
    <div class="container">
      <h2 class="text-[32px] sm:text-[54px] text-center capitalize font-semibold mb-5 sm:mb-10">News <span class="text-primary">&amp;</span> Blogs</h2>
      <div class="w-full sm:w-2/5 m-auto flex items-center gap-1 border-1.5 border-primary rounded-[12px] px-3 py-2">
        <div class="flex gap-1 w-3/5 sm:w-3/4"><span class="inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9649 14.255H15.7549L20.7449 19.255L19.2549 20.745L14.2549 15.755V14.965L13.9849 14.685C12.8449 15.665 11.3649 16.255 9.75488 16.255C6.16488 16.255 3.25488 13.345 3.25488 9.755C3.25488 6.165 6.16488 3.255 9.75488 3.255C13.3449 3.255 16.2549 6.165 16.2549 9.755C16.2549 11.365 15.6649 12.845 14.6849 13.985L14.9649 14.255ZM5.25488 9.755C5.25488 12.245 7.26488 14.255 9.75488 14.255C12.2449 14.255 14.2549 12.245 14.2549 9.755C14.2549 7.26501 12.2449 5.255 9.75488 5.255C7.26488 5.255 5.25488 7.26501 5.25488 9.755Z" fill="#AFB0B8"></path>
            </svg></span><input type="text" placeholder="Search Blog" class="text-sm sm:text-base text-[#242529] placeholder:text-[#AFB0B8] font-medium bg-transparent outline-none w-full"></div>
        <div class="flex gap-1 w-2/5 sm:w-1/4"><span class=" border-1 border-[#AFB0B8] rounded-[9px] "></span>
          <div data-slot="base" data-filled="true" data-has-value="true" class="group flex flex-col w-full transition-background motion-reduce:transition-none !duration-150 group relative justify-end data-[has-label=true]:mt-[calc(theme(fontSize.small)_+_10px)] font-medium text-[16px] bg-transparent border-none">
            <div style="border:0;clip:rect(0 0 0 0);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="true" data-a11y-ignore="aria-hidden-focus" data-testid="hidden-select-container"><input type="text" tabindex="0" style="font-size:16px" value="select"><label><select tabindex="-1" size="15" title="">
                  <option></option>
                  <option value="select" selected="">Select Country</option>
                  <option value="3">Angola</option>
                  <option value="15">Australia</option>
                  <option value="16">Austria</option>
                  <option value="39">Canada</option>
                  <option value="59">Germany</option>
                  <option value="79">United Kingdom</option>
                  <option value="100">Hungary</option>
                  <option value="103">India</option>
                  <option value="104">British Indian Ocean Territory</option>
                  <option value="105">Ireland</option>
                  <option value="110">Italy</option>
                  <option value="146">Malta</option>
                  <option value="170">New Zealand</option>
                  <option value="233">United States</option>
                </select></label></div>
            <div data-slot="mainWrapper" class="w-full flex flex-col"><button data-slot="trigger" class="relative px-3 gap-3 w-full inline-flex flex-row items-center tap-highlight-transparent data-[hover=true]:bg-default-200 group-data-[focus=true]:bg-default-100 min-h-10 rounded-small outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 h-5 shadow-none capitalize bg-transparent" type="button" aria-label="Select Country" id="react-aria-:Rl6bq9taH2:" aria-labelledby="react-aria-:Rl6bq9taH7: react-aria-:Rl6bq9taH2:" aria-haspopup="listbox" aria-expanded="false">
                <div data-slot="innerWrapper" class="inline-flex h-full w-[calc(100%_-_theme(spacing.6))] min-h-4 items-center gap-1.5 box-border">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-5 h-5 text-[#AFB0B8]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z"></path>
                  </svg><span data-slot="value" class="text-foreground-500 font-normal w-full text-left rtl:text-right text-small truncate group-data-[has-value=true]:text-default-foreground" id="react-aria-:Rl6bq9taH7:">Select Country</span>
                </div>
                <svg aria-hidden="true" fill="none" focusable="false" height="1em" role="presentation" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="1em" data-slot="selectorIcon" class="absolute right-3 rtl:left-3 rtl:right-[unset] w-4 h-4 transition-transform duration-150 ease motion-reduce:transition-none data-[open=true]:rotate-180">
                  <path d="m6 9 6 6 6-6"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="flex items-center gap-4 flex-wrap justify-center my-10"><button class="bg-black text-white w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">All</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">News</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">Courses</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">Exams</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">Finance</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">Jobs</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">Scholarships</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">Visa</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">Universities</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">Travel</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">IELTS</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">PTE</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">Language</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">TOEFL</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">DUOLINGO</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">Study Abroad</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">Life At Abroad</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">Education</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">English</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">German</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">french</button><button class="bg-transparent text-black w-fit px-4 py-2.5 rounded-[30px] border-2 border-[#1D1D1F]  text-[15px] text-center font-semibold hover:bg-black hover:text-white transition-all">OET</button></div>
    </div>
    <div class="container my-10 pb-10 box-border">
      <p class="pb-5 sm:pb-10 pt-2 sm:pt-20 text-3xl font-bold ">Trending Blogs</p>
      <div class="flex flex-wrap gap-8 lg:justify-between lg:gap-0 "><a class="w-full sm:w-[45%] lg:w-[48%] bg-white shadow-sm rounded-xl flex flex-col lg:flex-row hover:shadow-[0px_0px_40px_0px_#00000026] duration-250" href="https://www.gradding.com/blog/english/adverbs-of-frequency">
          <div class="rounded-t-xl bg-gray-500 lg:rounded-none lg:rounded-l-xl w-full lg:w-[60%] h-auto">
            <img loading="lazy" width="378" height="213" decoding="async" data-nimg="1" class="rounded-t-xl h-full lg:rounded-none lg:rounded-l-xl w-full" style="color:transparent" src="<?=base_url('public/')?>assets/images/blogs/adverb-of-frequency-6895.webp"></div>
          <div class="p-6 overflow-hidden w-full lg:w-[40%]">
            <p class="text-xs uppercase text-[#6e6e73] font-bold">English</p>
            <h2 class="text-lg mt-4 mb-5 text-[#1d1d1f] font-bold line-clamp-2 ">Adverb of Frequency: Definition, Examples, Rules, Worksheet</h2>
            <p class="text-xs uppercase text-[#6e6e73] font-bold">8 Aug, 2025</p>
          </div>
        </a><a class="w-full sm:w-[45%] lg:w-[48%] bg-white shadow-sm rounded-xl flex flex-col lg:flex-row hover:shadow-[0px_0px_40px_0px_#00000026] duration-250" href="https://www.gradding.com/blog/english/adverbs-of-time">
          <div class="rounded-t-xl bg-gray-500 lg:rounded-none lg:rounded-l-xl w-full lg:w-[60%] h-auto">
            <img loading="lazy" width="378" height="213" decoding="async" data-nimg="1" class="rounded-t-xl h-full lg:rounded-none lg:rounded-l-xl w-full" style="color:transparent" src="<?=base_url('public/')?>assets/images/blogs/adverbs-of-time-6894.webp"></div>
          <div class="p-6 overflow-hidden w-full lg:w-[40%]">
            <p class="text-xs uppercase text-[#6e6e73] font-bold">English</p>
            <h2 class="text-lg mt-4 mb-5 text-[#1d1d1f] font-bold line-clamp-2 ">Adverb of Time: Definition, Rules, Examples &amp; Worksheet</h2>
            <p class="text-xs uppercase text-[#6e6e73] font-bold">7 Aug, 2025</p>
          </div>
        </a></div>
      <p id="recentBlogScroll" class="pb-10 pt-20 text-3xl font-bold">Recent Blogs</p>
      <div class="flex flex-wrap lg:justify-between gap-10 relative"><a class="w-full sm:w-[45%] lg:w-[30%] bg-white shadow-sm rounded-xl hover:shadow-[0px_0px_40px_0px_#00000026] duration-250" href="https://www.gradding.com/blog/english/adverbs-of-frequency">
          <div class="rounded-t-xl w-full h-auto">
            <img loading="lazy" width="403" height="227" decoding="async" data-nimg="1" class="rounded-t-xl" src="<?=base_url('public/')?>assets/images/blogs/adverb-of-frequency-6895.webp" style="color: transparent;"></div>
          <div class="p-6">
            <p class="text-xs uppercase text-[#6e6e73] font-bold">English</p>
            <h2 class="text-lg my-1.5 text-[#1d1d1f] font-bold line-clamp-2 ">Adverb of Frequency: Definition, Examples, Rules, Worksheet</h2>
            <p class="text-xs uppercase text-[#6e6e73] font-bold">8 Aug, 2025</p>
          </div>
        </a><a class="w-full sm:w-[45%] lg:w-[30%] bg-white shadow-sm rounded-xl hover:shadow-[0px_0px_40px_0px_#00000026] duration-250" href="https://www.gradding.com/blog/english/adverbs-of-degree">
          <div class="rounded-t-xl w-full h-auto">
            <img loading="lazy" width="403" height="227" decoding="async" data-nimg="1" class="rounded-t-xl" src="<?=base_url('public/')?>assets/images/blogs/adverbs-of-degree-6894.webp" style="color: transparent;"></div>
          <div class="p-6">
            <p class="text-xs uppercase text-[#6e6e73] font-bold">English</p>
            <h2 class="text-lg my-1.5 text-[#1d1d1f] font-bold line-clamp-2 ">Adverbs of Degree: Definition, Rules, and Examples</h2>
            <p class="text-xs uppercase text-[#6e6e73] font-bold">7 Aug, 2025</p>
          </div>
        </a><a class="w-full sm:w-[45%] lg:w-[30%] bg-white shadow-sm rounded-xl hover:shadow-[0px_0px_40px_0px_#00000026] duration-250" href="https://www.gradding.com/blog/english/adverbs-of-time">
          <div class="rounded-t-xl w-full h-auto">
            <img loading="lazy" width="403" height="227" decoding="async" data-nimg="1" class="rounded-t-xl" src="<?=base_url('public/')?>assets/images/blogs/adverbs-of-time-6894.webp" style="color: transparent;"></div>
          <div class="p-6">
            <p class="text-xs uppercase text-[#6e6e73] font-bold">English</p>
            <h2 class="text-lg my-1.5 text-[#1d1d1f] font-bold line-clamp-2 ">Adverb of Time: Definition, Rules, Examples &amp; Worksheet</h2>
            <p class="text-xs uppercase text-[#6e6e73] font-bold">7 Aug, 2025</p>
          </div>
        </a><a class="w-full sm:w-[45%] lg:w-[30%] bg-white shadow-sm rounded-xl hover:shadow-[0px_0px_40px_0px_#00000026] duration-250" href="https://www.gradding.com/blog/english/adverbs-of-manner">
          <div class="rounded-t-xl w-full h-auto">
            <img loading="lazy" width="403" height="227" decoding="async" data-nimg="1" class="rounded-t-xl" src="<?=base_url('public/')?>assets/images/blogs/prepositions-of-place-1-6892.webp" style="color: transparent;"></div>
          <div class="p-6">
            <p class="text-xs uppercase text-[#6e6e73] font-bold">English</p>
            <h2 class="text-lg my-1.5 text-[#1d1d1f] font-bold line-clamp-2 ">Adverbs of Manner: Rules to Form, Examples &amp; Practice Exercise</h2>
            <p class="text-xs uppercase text-[#6e6e73] font-bold">6 Aug, 2025</p>
          </div>
        </a>
        <div class="relative flex flex-col pt-5 px-7 pb-12 gap-5 hover:shadow-[0px_0px_40px_0px_#00000026] duration-250 bg-[#dbeeea] rounded-2xl lg:w-[30%] sm:w-[45%] w-full">
          <h2 class="text-[#00817e] font-bold text-xl sm:text-3xl ">Grab FREE IELTS Mock Test</h2>
          <p class="text-base text-[#1d1d1f] w-[75%] lg:w-full ">Claim this exclusive limited time offer!</p><a url="https://dashboard.gradding.com/dashboard/mock-test" class="cursor-pointer rounded-[10px] bg-[#066ac9] w-fit text-white text-base sm:text-lg py-2 sm:py-3 px-5 sm:px-7 font-medium" href="https://dashboard.gradding.com/dashboard/mock-test">Start Now</a>
          <div class=" right-0 bottom-0 w-1/2 sm:w-[55%] lg:w-[60%] h-auto absolute">
            <img alt="advertisement picture" loading="lazy" width="275" height="280" decoding="async" data-nimg="1" src="<?=base_url('public/')?>assets/images/blogs/adverImg.webp" style="color: transparent;"></div>
        </div><a class="w-full sm:w-[45%] lg:w-[30%] bg-white shadow-sm rounded-xl hover:shadow-[0px_0px_40px_0px_#00000026] duration-250" href="https://www.gradding.com/blog/english/prepositions-of-place">
          <div class="rounded-t-xl w-full h-auto">
            <img loading="lazy" width="403" height="227" decoding="async" data-nimg="1" class="rounded-t-xl" src="<?=base_url('public/')?>assets/images/blogs/prepositions-of-place-6892.webp" style="color: transparent;"></div>
          <div class="p-6">
            <p class="text-xs uppercase text-[#6e6e73] font-bold">English</p>
            <h2 class="text-lg my-1.5 text-[#1d1d1f] font-bold line-clamp-2 ">Prepositions of Place: Explanation, Examples, &amp; Exercise</h2>
            <p class="text-xs uppercase text-[#6e6e73] font-bold">6 Aug, 2025</p>
          </div>
        </a>
      </div>
      <div class="w-full flex justify-center pt-10 lg:pt-14">
        <nav role="navigation" aria-label="pagination navigation" data-slot="base" data-controls="true" data-loop="true" data-dots-jump="5" data-total="219" data-active-page="1" class="p-2.5 -m-2.5 overflow-x-scroll scrollbar-hide">
          <ul data-slot="wrapper" class="flex flex-nowrap h-fit max-w-fit relative gap-1 items-center overflow-visible rounded-medium"><span aria-hidden="true" data-slot="cursor" class="absolute flex overflow-visible items-center justify-center origin-center left-0 select-none touch-none pointer-events-none z-20 bg-primary data-[moving=true]:transition-transform !data-[moving=true]:duration-300 opacity-0 data-[moving]:opacity-100 min-w-9 w-9 h-9 text-base rounded-lg text-white font-medium !size-10" data-moving="false" style="transform: translateX(44px) scale(1);">1</span>
            <li role="button" tabindex="0" aria-label="previous page button" data-slot="prev" class="flex flex-wrap truncate box-border items-center justify-center outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 data-[disabled=true]:text-default-300 data-[disabled=true]:pointer-events-none shadow-sm [&amp;[data-hover=true]:not([data-active=true])]:bg-default-200 active:bg-default-300 min-w-9 w-9 h-9 bg-[#066ac41a] text-[#066AC9] font-medium text-sm sm:text-base rounded-lg !size-10 hover:!bg-[#066ac94d]"><svg aria-hidden="true" fill="none" focusable="false" height="1em" role="presentation" viewBox="0 0 24 24" width="1em">
                <path d="M15.5 19l-7-7 7-7" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
              </svg></li>
            <li role="button" tabindex="0" aria-label="pagination item 1 active" aria-current="true" data-active="true" data-slot="item" class="tap-highlight-transparent select-none touch-none data-[pressed=true]:scale-[0.97] transition-transform-background flex flex-wrap truncate box-border items-center justify-center outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 data-[disabled=true]:text-default-300 data-[disabled=true]:pointer-events-none shadow-sm [&amp;[data-hover=true]:not([data-active=true])]:bg-default-200 active:bg-default-300 min-w-9 w-9 h-9 text-sm sm:text-base rounded-lg bg-[#066ac41a] text-[#066AC9] font-medium !size-10 hover:!bg-[#066ac94d]">1</li>
            <li role="button" tabindex="0" aria-label="pagination item 2" data-slot="item" class="tap-highlight-transparent select-none touch-none data-[pressed=true]:scale-[0.97] transition-transform-background flex flex-wrap truncate box-border items-center justify-center outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 data-[disabled=true]:text-default-300 data-[disabled=true]:pointer-events-none shadow-sm [&amp;[data-hover=true]:not([data-active=true])]:bg-default-200 active:bg-default-300 min-w-9 w-9 h-9 text-sm sm:text-base rounded-lg bg-[#066ac41a] text-[#066AC9] font-medium !size-10 hover:!bg-[#066ac94d]">2</li>
            <li role="button" tabindex="0" aria-label="pagination item 3" data-slot="item" class="tap-highlight-transparent select-none touch-none data-[pressed=true]:scale-[0.97] transition-transform-background flex flex-wrap truncate box-border items-center justify-center outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 data-[disabled=true]:text-default-300 data-[disabled=true]:pointer-events-none shadow-sm [&amp;[data-hover=true]:not([data-active=true])]:bg-default-200 active:bg-default-300 min-w-9 w-9 h-9 text-sm sm:text-base rounded-lg bg-[#066ac41a] text-[#066AC9] font-medium !size-10 hover:!bg-[#066ac94d]">3</li>
            <li role="button" tabindex="0" aria-label="pagination item 4" data-slot="item" class="tap-highlight-transparent select-none touch-none data-[pressed=true]:scale-[0.97] transition-transform-background flex flex-wrap truncate box-border items-center justify-center outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 data-[disabled=true]:text-default-300 data-[disabled=true]:pointer-events-none shadow-sm [&amp;[data-hover=true]:not([data-active=true])]:bg-default-200 active:bg-default-300 min-w-9 w-9 h-9 text-sm sm:text-base rounded-lg bg-[#066ac41a] text-[#066AC9] font-medium !size-10 hover:!bg-[#066ac94d]">4</li>
            <li role="button" tabindex="0" aria-label="pagination item 5" data-slot="item" class="tap-highlight-transparent select-none touch-none data-[pressed=true]:scale-[0.97] transition-transform-background flex flex-wrap truncate box-border items-center justify-center outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 data-[disabled=true]:text-default-300 data-[disabled=true]:pointer-events-none shadow-sm [&amp;[data-hover=true]:not([data-active=true])]:bg-default-200 active:bg-default-300 min-w-9 w-9 h-9 text-sm sm:text-base rounded-lg bg-[#066ac41a] text-[#066AC9] font-medium !size-10 hover:!bg-[#066ac94d]">5</li>
            <li role="button" tabindex="0" aria-label="dots element" data-slot="item" class="tap-highlight-transparent select-none touch-none data-[pressed=true]:scale-[0.97] transition-transform-background flex flex-wrap truncate box-border items-center justify-center outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 data-[disabled=true]:text-default-300 data-[disabled=true]:pointer-events-none shadow-sm [&amp;[data-hover=true]:not([data-active=true])]:bg-default-200 active:bg-default-300 min-w-9 w-9 h-9 text-sm sm:text-base rounded-lg bg-[#066ac41a] text-[#066AC9] font-medium !size-10 hover:!bg-[#066ac94d] group"><svg aria-hidden="true" fill="none" height="1em" shape-rendering="geometricPrecision" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="1em" class="group-hover:hidden group-data-[focus-visible=true]:hidden">
                <circle cx="12" cy="12" fill="currentColor" r="1"></circle>
                <circle cx="19" cy="12" fill="currentColor" r="1"></circle>
                <circle cx="5" cy="12" fill="currentColor" r="1"></circle>
              </svg><svg aria-hidden="true" fill="none" focusable="false" height="1em" role="presentation" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="1em" class="hidden group-hover:block group-data-[focus-visible=true]:block data-[before=true]:rotate-180">
                <path d="M13 17l5-5-5-5"></path>
                <path d="M6 17l5-5-5-5"></path>
              </svg></li>
            <li role="button" tabindex="0" aria-label="pagination item 219" data-slot="item" class="tap-highlight-transparent select-none touch-none data-[pressed=true]:scale-[0.97] transition-transform-background flex flex-wrap truncate box-border items-center justify-center outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 data-[disabled=true]:text-default-300 data-[disabled=true]:pointer-events-none shadow-sm [&amp;[data-hover=true]:not([data-active=true])]:bg-default-200 active:bg-default-300 min-w-9 w-9 h-9 text-sm sm:text-base rounded-lg bg-[#066ac41a] text-[#066AC9] font-medium !size-10 hover:!bg-[#066ac94d]">219</li>
            <li role="button" tabindex="0" aria-label="next page button" data-slot="next" class="flex flex-wrap truncate box-border items-center justify-center outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 data-[disabled=true]:text-default-300 data-[disabled=true]:pointer-events-none shadow-sm [&amp;[data-hover=true]:not([data-active=true])]:bg-default-200 active:bg-default-300 min-w-9 w-9 h-9 bg-[#066ac41a] text-[#066AC9] font-medium text-sm sm:text-base rounded-lg !size-10 hover:!bg-[#066ac94d]"><svg aria-hidden="true" fill="none" focusable="false" height="1em" role="presentation" viewBox="0 0 24 24" width="1em" class="rotate-180">
                <path d="M15.5 19l-7-7 7-7" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
              </svg></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>

  <div class="container  my-8 sm:my-16 ">
    <div class="px-2  py-14 bg-[#F7C32E]  rounded-[8px] m-auto relative overflow-hidden">
      <div class="flex flex-col items-center justify-center w-full sm:w-1/2 m-auto">
        <p class="text-2xl sm:text-[38px] font-semibold text-center leading-[130%]">Subscribe to our Newsletter for Newest Course Updates</p>
        <form class="w-full my-4 relative">
          <div class="flex items-center justify-between bg-white p-1 rounded-full w-full sm:w-2/3 m-auto">
            <div class="w-3/4 pl-3 pr-1">
              <input class="w-full outline-none text-[15px] text-[#9A9EA4]" placeholder="Enter your email" type="email" name="email">
          </div>
            <button class="z-0 group relative inline-flex items-center justify-center box-border appearance-none select-none whitespace-nowrap subpixel-antialiased overflow-hidden tap-highlight-transparent data-[pressed=true]:scale-[0.97] outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 min-w-20 h-10 gap-2 [&amp;>svg]:max-w-[theme(spacing.8)] transition-transform-colors-opacity motion-reduce:transition-none data-[hover=true]:opacity-hover py-2 px-4 text-white text-sm sm:text-[15px] font-medium rounded-full bg-[#1D3B53] w-1/4 border-white" type="submit">Subscribe!</button>
          </div>
        </form>
      </div>
      <img alt="bg-image" loading="lazy" width="173" height="141" decoding="async" data-nimg="1" class="absolute -left-10 sm:left-0 -bottom-10 sm:bottom-0" src="<?= base_url('public/')?>assets/images/extra/newsletter1.webp" style="color: transparent;">
      <img alt="bg-image" loading="lazy" width="258" height="210" decoding="async" data-nimg="1" class="hidden sm:block absolute right-0 bottom-0" src="<?= base_url('public/')?>assets/images/extra/newsletter2.webp" style="color: transparent;">
      <img alt="bg-image" loading="lazy" width="54" height="39" decoding="async" data-nimg="1" class="absolute top-[8%] right-5 sm:right-unset sm:left-1/3" src="<?= base_url('public/')?>assets/images/extra/newsletter3.webp" style="color: transparent;">
    </div>
  </div>
</main>

<?= $this->endSection() ?>