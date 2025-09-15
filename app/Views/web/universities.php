<?= $this->extend('web/components/assemble') ?>

<?= $this->section('content') ?>

<main>
    <div>
        <!-- Main container -->
        <div class="container">

            <!-- Gradient background section with rounded corners -->
            <div class="relative bg-[linear-gradient(122.4deg,_#6BADCE_-1.37%,_#2F71B3_39.58%,_#252C79_82%)] 
                rounded-2xl sm:rounded-[38px] 
                flex flex-col sm:flex-row justify-between">

                <!-- Left content section -->
                <div class="w-full sm:w-[50%] pt-6 sm:pt-20 pb-3 sm:pb-32 px-8 sm:px-20">

                    <!-- Heading with decorative arrow -->
                    <h1 class="text-[#F8F7FC] text-[28px] lg:text-[32px] 2xl:text-[38px] font-semibold mb-2 sm:mb-4 relative">
                        Study in Russia for World Class Education
                        <img alt="threeArrow" loading="lazy" width="59" height="69" decoding="async"
                            class="absolute -top-2 sm:-top-8 -left-4 sm:-left-10"
                            src="<?= base_url('public/') ?>assets/images/icons/threeArrow.webp"
                            style="color: transparent;">
                    </h1>

                    <!-- Read more content section -->
                    <div class="readmore-content flex">

                        <!-- Long content container -->
                        <div class="readmore-long-content">
                            <div class="readmore-content-both-device flex flex-col items-start justify-start">

                                <!-- Short text -->
                                <p class="text-sm md:text-base text-[#F8F7FC]">
                                    A student’s plan to study in Russia ensures their overall growth with a stock of opportunities to learn and
                                </p>

                                <!-- Expanded long text -->
                                <div class="readmore-long-content w-full">
                                    <p class="text-sm md:text-base text-[#F8F7FC]">
                                        earn. Moreover, their dream to study abroad offers them with multicultural environment and a well built infrastructure.
                                        These are reasons why people go to study in Russia from India.
                                        It is because study in Russia for Indian students looks like an entire package of high quality education and accomplished career goals.
                                    </p>
                                </div>

                                <!-- Read More button -->
                                <button class="readmore-btn mb-3 transition-all ease-in-out text-test-prep text-sm sm:text-base !text-white">
                                    Read More
                                </button>
                            </div>
                        </div>

                        <!-- Collapse button (mobile view) -->
                        <button class="sm:hidden Hidereadmore-btn absolute top-[14px] right-[8px] z-40">
                            <img alt="Collapse Icon" loading="lazy" width="22" height="22" decoding="async"
                                class="transition-all ease-in-out"
                                src="/icons/CollapseIconWhiteBlue.svg"
                                style="color: transparent;">
                        </button>
                    </div>

                    <!-- Call-to-action buttons -->
                    <div class="flex items-center gap-10">
                        <!-- Book Session Button -->
                        <button class="flex text-nowrap items-center justify-center text-primary rounded-xl gap-2 text-sm font-semibold px-6 py-3 bg-white border-2 border-[#066AC91A] hover:scale-[1.05] transition-all ease-in-out duration-300">
                            Book FREE Session
                            <img alt="rightArrowBlue" fetchpriority="high" width="24" height="24" decoding="async"
                                src="<?= base_url('public/') ?>assets/images/icons/rightArrowBlue.svg"
                                style="color: transparent;">
                        </button>

                        <!-- Partner logo -->
                        <img alt="icefBritishCouselLogo" fetchpriority="high" width="212" height="31" decoding="async"
                            src="<?= base_url('public/') ?>assets/images/logo/icefBritishCouselLogo.webp"
                            style="color: transparent;">
                    </div>
                </div>

                <!-- Right image section -->
                <div class="w-full sm:w-[45%] md:flex items-end">
                    <img alt="candaBannerImage" fetchpriority="high" width="574" height="498" decoding="async"
                        src="<?= base_url('public/') ?>assets/images/country/RussiaBanner.png"
                        style="color: transparent;">
                </div>
            </div>
        </div>
        <!-- end of main container -->

        <div class="top-16 z-40 -mt-16">

            <!-- Container -->
            <div class="container">

                <!-- Main box with glass effect -->
                <div class="w-[85%] px-8 py-5 pt-4 m-auto text-center rounded-[15px] 
                    backdrop-blur-[14px] 
                    shadow-[-16.38px_33.89px_50.83px_0px_#17122B3D] 
                    border border-primary bg-[#FFFFFF99]">

                    <!-- Title text -->
                    <p class="text-[#1D1D1F] text-sm sm:text-lg font-medium mb-3">
                        Let's Calculate Your Chances of Getting into your dream University!
                    </p>

                    <!-- Main input row -->
                    <div class="flex items-center justify-between gap-6">

                        <!-- Left section: Inputs -->
                        <div class="w-[70%] flex items-center gap-6">

                            <!-- Input 1: Search University -->
                            <div class="relative w-1/3" data-combo>
                                <label for="university" class="block mb-1 text-sm font-medium text-[#655F5F]">Search University</label>
                                <div class="relative">
                                    <input
                                        id="university"
                                        type="text"
                                        placeholder="Type university"
                                        autocomplete="off"
                                        aria-autocomplete="list"
                                        aria-expanded="false"
                                        aria-controls="university-list"
                                        class="w-full h-[53px] rounded-xl px-5 py-2 bg-white border border-[#E5E1F4] text-[#655F5F] text-base font-semibold outline-none focus:border-primary transition" />
                                    <button type="button" class="combo-caret absolute right-2 top-1/2 -translate-y-1/2 p-2 rounded-full" aria-label="Toggle options">
                                        <svg width="20" height="20" viewBox="0 0 24 24">
                                            <path d="m6 9 6 6 6-6" fill="none" stroke="currentColor" stroke-width="1.5" />
                                        </svg>
                                    </button>
                                    <ul id="university-list"
                                        class="combo-menu hidden absolute z-20 mt-1 w-full bg-white border border-[#E5E1F4] rounded-xl shadow-lg max-h-56 overflow-auto">
                                        <li class="combo-option px-4 py-2 hover:bg-gray-100 cursor-pointer">University of Toronto</li>
                                        <li class="combo-option px-4 py-2 hover:bg-gray-100 cursor-pointer">McGill University</li>
                                        <li class="combo-option px-4 py-2 hover:bg-gray-100 cursor-pointer">University of British Columbia</li>
                                        <li class="combo-option px-4 py-2 hover:bg-gray-100 cursor-pointer">University of Waterloo</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Input 2: Search Course -->
                            <div class="relative w-1/3" data-combo>
                                <label for="course" class="block mb-1 text-sm font-medium text-[#655F5F]">Search Course</label>
                                <div class="relative">
                                    <input
                                        id="course"
                                        type="text"
                                        placeholder="Type course"
                                        autocomplete="off"
                                        aria-autocomplete="list"
                                        aria-expanded="false"
                                        aria-controls="course-list"
                                        class="w-full h-[53px] rounded-xl px-5 py-2 bg-white border border-[#E5E1F4] text-[#655F5F] text-base font-semibold outline-none focus:border-primary transition" />
                                    <button type="button" class="combo-caret absolute right-2 top-1/2 -translate-y-1/2 p-2 rounded-full" aria-label="Toggle options">
                                        <svg width="20" height="20" viewBox="0 0 24 24">
                                            <path d="m6 9 6 6 6-6" fill="none" stroke="currentColor" stroke-width="1.5" />
                                        </svg>
                                    </button>
                                    <ul id="course-list"
                                        class="combo-menu hidden absolute z-20 mt-1 w-full bg-white border border-[#E5E1F4] rounded-xl shadow-lg max-h-56 overflow-auto">
                                        <li class="combo-option px-4 py-2 hover:bg-gray-100 cursor-pointer">Computer Science</li>
                                        <li class="combo-option px-4 py-2 hover:bg-gray-100 cursor-pointer">Data Science</li>
                                        <li class="combo-option px-4 py-2 hover:bg-gray-100 cursor-pointer">Mechanical Engineering</li>
                                        <li class="combo-option px-4 py-2 hover:bg-gray-100 cursor-pointer">Business Analytics</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Input 3: Highest Qualification -->
                            <div class="relative w-1/3" data-combo>
                                <label for="qualification" class="block mb-1 text-sm font-medium text-[#655F5F]">Highest Qualification</label>
                                <div class="relative">
                                    <input
                                        id="qualification"
                                        type="text"
                                        placeholder="Select qualification"
                                        autocomplete="off"
                                        aria-autocomplete="list"
                                        aria-expanded="false"
                                        aria-controls="qualification-list"
                                        class="w-full h-[53px] rounded-xl px-5 py-2 bg-white border border-[#E5E1F4] text-[#655F5F] text-base font-semibold outline-none focus:border-primary transition" />
                                    <button type="button" class="combo-caret absolute right-2 top-1/2 -translate-y-1/2 p-2 rounded-full" aria-label="Toggle options">
                                        <svg width="20" height="20" viewBox="0 0 24 24">
                                            <path d="m6 9 6 6 6-6" fill="none" stroke="currentColor" stroke-width="1.5" />
                                        </svg>
                                    </button>
                                    <ul id="qualification-list"
                                        class="combo-menu hidden absolute z-20 mt-1 w-full bg-white border border-[#E5E1F4] rounded-xl shadow-lg max-h-56 overflow-auto">
                                        <li class="combo-option px-4 py-2 hover:bg-gray-100 cursor-pointer">12th Grade</li>
                                        <li class="combo-option px-4 py-2 hover:bg-gray-100 cursor-pointer">Diploma</li>
                                        <li class="combo-option px-4 py-2 hover:bg-gray-100 cursor-pointer">Bachelor’s</li>
                                        <li class="combo-option px-4 py-2 hover:bg-gray-100 cursor-pointer">Master’s</li>
                                    </ul>
                                </div>
                            </div>



                        </div>

                        <!-- Right section: Button -->
                        <div class="w-[28%]">
                            <button class="w-full shadow-md relative px-8 py-3 text-base font-bold text-white overflow-hidden group hover:scale-105 transition-transform duration-300 ease-in-out rounded-xl bg-gradient-to-r from-[#0091e4] to-[#0072ce]">
                                <span class="relative z-10">Check Eligibility</span>
                                <div class="absolute inset-0 bg-gradient-to-r from-blue-200 via-blue-400 to-blue-600 animate-gradient-x opacity-80"
                                    style="background-size: 200% 100%;">
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- Section end -->

        <!-- Popular Universities Section -->
        <div class="my-12 sm:my-20">
            <div class="container text-left flex items-center justify-between">
                <h2 class="px-3.5 sm:px-0 text-2xl lg:text-[28px] xl:text-3xl 2xl:text-[34px] font-normal leading-[130%]"><span class="font-medium text-test-prep sm:mx-1 block sm:inline-block">Popular Universities</span> to study in Russia</h2>
                <!-- <a class="bg-white text-[#1F2022] border border-[#E8E8E8] text-[15px] font-semibold flex items-center gap-2 py-2.5 px-5 rounded-[14px] hover:shadow-lg transition-all ease-in-out duration-300" href="https://www.gradding.com/course-finder?countryId=39">View All
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="w-5 h-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.25 15.5a.75.75 0 0 1-.75-.75V7.56L7.28 17.78a.749.749 0 0 1-1.275-.326.749.749 0 0 1 .215-.734L16.44 6.5H9.25a.75.75 0 0 1 0-1.5h9a.75.75 0 0 1 .75.75v9a.75.75 0 0 1-.75.75Z"></path>
                    </svg>
                </a> -->
            </div>
            <div class="flex w-full flex-col mt-5">
                <!-- <div data-slot="base" class="inline-flex base container sm:inline-flex -webkit-box w-full" aria-label="Options">
                    <div data-slot="tabList" class="flex h-fit items-center flex-nowrap overflow-x-scroll scrollbar-hide tablist gap-2 sm:gap-6 w-full relative rounded-[14px] p-1.5 sm:p-2.5 px-[12.8px] bg-transparent" id="react-aria3673307509-:r19q:" aria-label="Options" role="tablist" aria-orientation="horizontal"><button data-slot="tab" tabindex="0" data-key="Health" id="react-aria3673307509-:r19q:-tab-Health" aria-selected="true" role="tab" class="z-0 w-full py-1 flex group relative justify-center items-center cursor-pointer tap-highlight-transparent data-[disabled=true]:cursor-not-allowed data-[disabled=true]:opacity-30 data-[hover-unselected=true]:opacity-disabled outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-small rounded-full tab group active-shadow-lg transition-all max-w-fit px-2 h-8 sm:h-10 group-data-[selected=true]:bg-primary group-hover:text-white data-[hover=true]:opacity-100 group-data-[selected=true]:text-white" type="button" data-selected="true" aria-controls="react-aria3673307509-:r19q:-tabpanel-Health"><span class="absolute z-0 inset-0 rounded-full text-primary-foreground w-full bg-primary" data-slot="cursor" style="opacity: 1;"></span>
                            <div class="relative z-10 whitespace-nowrap text-sm sm:text-base font-medium group-data-[selected=true]:text-white text-primary border-1 border-primary px-4 sm:px-6 h-8 sm:h-10 flex items-center rounded-full transition-all" data-slot="tabContent"><span>Health</span></div>
                        </button><button data-slot="tab" tabindex="-1" data-key="Engineering" id="react-aria3673307509-:r19q:-tab-Engineering" aria-selected="false" role="tab" class="z-0 w-full py-1 flex group relative justify-center items-center cursor-pointer tap-highlight-transparent data-[disabled=true]:cursor-not-allowed data-[disabled=true]:opacity-30 data-[hover-unselected=true]:opacity-disabled outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-small rounded-full tab group active-shadow-lg transition-all max-w-fit px-2 h-8 sm:h-10 group-data-[selected=true]:bg-primary group-hover:text-white data-[hover=true]:opacity-100 group-data-[selected=true]:text-white" type="button">
                            <div class="relative z-10 whitespace-nowrap text-sm sm:text-base font-medium group-data-[selected=true]:text-white text-primary border-1 border-primary px-4 sm:px-6 h-8 sm:h-10 flex items-center rounded-full transition-all" data-slot="tabContent"><span>Engineering</span></div>
                        </button><button data-slot="tab" tabindex="-1" data-key="mba" id="react-aria3673307509-:r19q:-tab-mba" aria-selected="false" role="tab" class="z-0 w-full py-1 flex group relative justify-center items-center cursor-pointer tap-highlight-transparent data-[disabled=true]:cursor-not-allowed data-[disabled=true]:opacity-30 data-[hover-unselected=true]:opacity-disabled outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-small rounded-full tab group active-shadow-lg transition-all max-w-fit px-2 h-8 sm:h-10 group-data-[selected=true]:bg-primary group-hover:text-white data-[hover=true]:opacity-100 group-data-[selected=true]:text-white" type="button">
                            <div class="relative z-10 whitespace-nowrap text-sm sm:text-base font-medium group-data-[selected=true]:text-white text-primary border-1 border-primary px-4 sm:px-6 h-8 sm:h-10 flex items-center rounded-full transition-all" data-slot="tabContent"><span>MBA</span></div>
                        </button><button data-slot="tab" tabindex="-1" data-key="Other" id="react-aria3673307509-:r19q:-tab-Other" aria-selected="false" role="tab" class="z-0 w-full py-1 flex group relative justify-center items-center cursor-pointer tap-highlight-transparent data-[disabled=true]:cursor-not-allowed data-[disabled=true]:opacity-30 data-[hover-unselected=true]:opacity-disabled outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-small rounded-full tab group active-shadow-lg transition-all max-w-fit px-2 h-8 sm:h-10 group-data-[selected=true]:bg-primary group-hover:text-white data-[hover=true]:opacity-100 group-data-[selected=true]:text-white" type="button">
                            <div class="relative z-10 whitespace-nowrap text-sm sm:text-base font-medium group-data-[selected=true]:text-white text-primary border-1 border-primary px-4 sm:px-6 h-8 sm:h-10 flex items-center rounded-full transition-all" data-slot="tabContent"><span>Other</span></div>
                        </button></div>
                </div> -->
                <div data-focus="false" data-focus-visible="false" id="react-aria3673307509-:r19q:-tabpanel-Health" aria-labelledby="react-aria3673307509-:r19q:-tab-Health" role="tabpanel" class="py-3 px-1 data-[inert=true]:hidden outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2" data-slot="panel">
                    <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden" lazy="true">
                        <div class="swiper-wrapper">




                            <?php foreach ($uniData as $uiversityData): ?>

                                <div class="swiper-slide swiper-slide-active py-6 first:ml-[1.6rem] first:sm:ml-[3rem] first:lg:ml-[4rem] first:xl:ml-[6rem] first:2xl:ml-[18rem] !z-[9999]" data-swiper-slide-index="2" style="width: 289.818px; margin-right: 40px;">
                                    <div data-loaded="true" class="group relative overflow-hidden bg-content3 dark:bg-content2 pointer-events-none before:opacity-100 before:absolute before:inset-0 before:-translate-x-full before:animate-[shimmer_2s_infinite] before:border-t before:border-content4/30 before:bg-gradient-to-r before:from-transparent before:via-content4 dark:before:via-default-700/10 before:to-transparent after:opacity-100 after:absolute after:inset-0 after:-z-10 after:bg-content3 dark:after:bg-content2 data-[loaded=true]:pointer-events-auto data-[loaded=true]:overflow-visible data-[loaded=true]:!bg-transparent data-[loaded=true]:before:opacity-0 data-[loaded=true]:before:-z-10 data-[loaded=true]:before:animate-none data-[loaded=true]:after:opacity-0 transition-background !duration-300 rounded-lg data-[loaded=true]:after:w-0 data-[loaded=true]:before:w-0">
                                        <div class="opacity-0 group-data-[loaded=true]:opacity-100 transition-opacity motion-reduce:transition-none !duration-300">
                                            <div class="bg-white rounded-2xl ease-in-out transition-all overflow-hidden relative hover:shadow-[0px_0px_20px_0px_#1D3A5333] p-3 flex flex-col gap-[10px]">
                                                <div class="flex items-center justify-center relative max-w-7 max-h-9 min-w-7 min-h-9">
                                                    <img alt="University Logo" loading="lazy" width="28" height="32" decoding="async" data-nimg="1" src="<?= base_url('public/') ?>assets/images/university/Mount-Saint-Vincet-University.webp" style="color: transparent;">
                                                </div>
                                                <a class="line-clamp-1 text-[#171923] text-base sm:text-lg font-semibold after:absolute after:top-0 after:bottom-0 after:right-0 after:left-0 after:z-10 after:content[''] after:h-3/5 after:m-auto" href="<?=base_url('university/').$uiversityData['uni_id']?>"><?= $uiversityData['uni_name'] ?></a>
                                                <div class="flex flex-col gap-2 items-start min-h-[84px]">
                                                    <div class="flex items-center gap-[10px] w-full justify-start">
                                                        <div class="border border-[#655F5F] rounded-full p-[10px] w-fit flex items-center gap-1"><img alt="Currency Logo" loading="lazy" width="15" height="15" decoding="async" data-nimg="1" src="<?= base_url('public/') ?>assets/images/icons/coin.webp" style="color: transparent;"><span class="text-[#171923] text-xs font-medium text-nowrap">INR 10.85L/Y</span></div>
                                                    </div>
                                                    <div class="flex items-center gap-2.5 w-full justify-start z-10">
                                                        <div class="border border-[#655F5F] rounded-full p-2 sm:p-[10px] w-fit  text-xs font-medium flex items-center gap-1"><span class="text-xs font-medium text-[#171923] uppercase">IELTS</span></div>
                                                        <div class="border border-[#655F5F] rounded-full p-2 sm:p-[10px] w-fit  text-xs font-medium flex items-center gap-1"><span class="text-xs font-medium text-[#171923]">May Intake</span><span class="z-10 aria-expanded:scale-[0.97] aria-expanded:opacity-70 subpixel-antialiased text-xs font-semibold text-primary underline cursor-pointer" data-slot="trigger" aria-haspopup="dialog" aria-expanded="false" type="button">+3 more</span></div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap-3 mt-1"><a class="text-white text-[15px] font-medium py-2 px-3.5 bg-primary border border-primary rounded-[10px] grow text-nowrap text-center transition-all ease-in-out duration-300 hover:bg-primary-600" href="#">Check Eligibility</a><a class="text-primary border border-primary text-[15px] font-medium py-2 px-3.5 rounded-[10px] grow text-nowrap text-center transition-all ease-in-out duration-300 hover:text-white hover:bg-primary" href="https://api.whatsapp.com/send?phone=+918447730303&text=My%20Name%20is__%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20My%20Query%20is__">Apply Now</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>




                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of Popular Universities Section  -->

        <!-- Toast Notification Container -->
        <div class="Toastify"></div>

        <div class="container">

            <!-- Outer Gradient Border -->
            <div class="bg-gradient-to-r from-[rgba(7,111,210,0.5)] to-[rgba(187,218,248,0.5)]
                rounded-xl sm:rounded-[20px] p-[6px] sm:p-[10px]">

                <!-- Inner Blue Gradient Card -->
                <div class="bg-gradient-to-r from-[#055AAB] to-[#699FD2]
                    rounded-[10px] sm:rounded-xl
                    shadow-[0px_0px_11.34px_0px_#00000059]
                    relative overflow-hidden">

                    <!-- Left Content -->
                    <div class="w-full sm:w-3/5 px-4 sm:px-10 py-4 sm:py-8">

                        <!-- Title -->
                        <h3 class="text-sm sm:text-3xl font-medium text-white">
                            Get Admission into top Russia universities with the help of expert counsellors
                        </h3>

                        <!-- Divider Line -->
                        <hr class="shrink-0 border-none w-full my-3 sm:my-6 opacity-20 bg-white h-[1.47px]" role="separator">

                        <!-- Offer & CTA -->
                        <div class="w-fit sm:w-3/4 md:flex flex-col">
                            <p class="text-white text-sm sm:text-xl font-normal mb-2 md:mb-4">
                                Save up-to ₹3 Lakhs with us!*
                            </p>
                            <a href="#"
                                class="relative z-10 md:w-fit rounded-[11px]
                              hover:scale-[1.05] transition-all ease-in-out duration-300
                              block text-white text-sm sm:text-xl font-semibold
                              px-4 sm:px-6 py-3 border border-[#FFFFFF8F]
                              bg-gradient-to-r from-[rgba(255,255,255,0.16)] to-[rgba(255,255,255,0.13)]
                              backdrop-blur-md">
                                Discuss with Expert for FREE
                            </a>
                        </div>
                    </div>

                    <!-- Decorative Gold Circle SVG -->
                    <figure class="absolute top-0 right-0">
                        <svg width="173" height="154" viewBox="0 0 173 154" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="110.187" cy="43.6803" r="109.587" fill="url(#paint0_linear_2070_4238)"></circle>
                            <defs>
                                <linearGradient id="paint0_linear_2070_4238"
                                    x1="0.599609" y1="43.6803" x2="219.774" y2="43.6803"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FFDF00"></stop>
                                    <stop offset="1" stop-color="#CC9900"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </figure>

                    <!-- Right-Side Info Box -->
                    <div class="absolute top-0 right-0 p-4 pt-2">
                        <p class="text-[#1D2636] text-2xl font-semibold text-center">
                            <span class="block uppercase">Jan 2026</span> Intake
                        </p>
                        <a href="/"
                            class="relative z-10 mt-3 block bg-[#23BD33] text-white
                          shadow-[0px_0px_14.71px_0px_#23BD33]
                          px-3 py-2 text-[15px] font-bold rounded-lg
                          hover:scale-[1.05] transition-all ease-in-out duration-300">
                            OPEN NOW
                        </a>
                    </div>

                    <!-- Background Image -->
                    <img src="<?= base_url('public/') ?>assets/images/bg/schoarImage.webp"
                        alt="Scholar Image" loading="lazy" width="530" height="310"
                        decoding="async" class="absolute right-0 top-0" style="color: transparent;">

                </div>
            </div>
        </div>
        <!-- end of Offer Section  -->

        <!-- University Video Section -->
        <div class="container my-12 sm:my-24">
            <div class="bg-white rounded-[21px] shadow-[inset_0_0_31.6px_0px_rgba(0,0,0,0.2)] sm:pr-16 flex flex-col-reverse sm:flex-row items-center gap-5 sm:gap-14 justify-center overflow-hidden relative">

                <!-- Video Section with Border (Top, Left, Right) -->
                <div class="w-[90%] sm:w-3/5 relative sm:rounded-t-3xl sm:px-16 sm:pt-16 overflow-hidden sm:[overflow:unset]">

                    <!-- Border wrapper -->
                    <div class="relative bg-black pt-[15px] px-[15px] rounded-t-[30px]">

                        <!-- Video inside black border -->
                        <video autoplay="" loop="" playsinline="" muted="" class="w-full rounded-t-[15px] relative z-10">
                            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <!-- ▶️ Play Icon Overlay -->
                        <div class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center pointer-events-none z-20">
                            <div class="w-14 h-14 rounded-full backdrop-blur-[7px] bg-white/50 flex items-center justify-center">
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="56" height="56" rx="28" fill="white" fill-opacity="0.5"></rect>
                                    <g clip-path="url(#clip0)">
                                        <g filter="url(#filter0_d)">
                                            <path d="M21 22.3076V34.6941C21 37.231 23.8601 38.8229 26.1428 37.5545L31.7154 34.4611L37.288 31.3548C39.5707 30.0864 39.5707 26.9153 37.288 25.6469L31.7154 22.5406L26.1428 19.4472C23.8601 18.1788 21 19.7578 21 22.3076Z" fill="white"></path>
                                        </g>
                                    </g>
                                    <defs>
                                        <filter id="filter0_d" x="12" y="10" width="36" height="37" filterUnits="userSpaceOnUse">
                                            <feGaussianBlur stdDeviation="4.5"></feGaussianBlur>
                                        </filter>
                                        <clipPath id="clip0">
                                            <rect width="56" height="56" rx="15" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 📝 Text Content -->
                <div class="sm:w-2/5 flex flex-col gap-4 sm:gap-8 items-start p-4 sm:p-0">
                    <h2 class="text-left sm:text-center text-[24px] lg:text-[28px] xl:text-[30px] 2xl:text-[34px] font-medium text-heading">
                        <span class="text-primary">Study Abroad</span> Made Simple
                    </h2>

                    <!-- 📈 Highlight Box -->
                    <div class="bg-[#538B191A] rounded-[11px] py-4 px-7">
                        <p class="text-[#1F2022] text-sm mb-1">
                            Increase your chances of admission up to <span class="font-semibold text-[#538B19]">98%</span>
                        </p>
                        <img src="<?= base_url('public/') ?>assets/images/logo/universityLogoGroup.webp" width="319" height="43" alt="University Logos" class="mt-2" loading="lazy">
                    </div>

                    <!-- 📞 CTA Button -->
                    <div booksession="true" class="w-full max-w-[85%] cursor-pointer bg-primary text-white text-sm border-2 border-primary px-2 py-2.5 hidden sm:flex items-center justify-center rounded-[14px] gap-1 transition-all ease-in-out duration-300 hover:scale-105 font-semibold" title="Request a Callback">
                        Request a Callback
                        <img src="<?= base_url('public/') ?>assets/images/icons/rightArrowBlue.svg" width="25" height="25" alt="Right Arrow" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
        <!-- end of University Video Section  -->

        <!-- Russia Study Section -->
        <div class="my-12 sm:my-20 container m-auto">

            <!-- Section Heading -->
            <h2 class="px-3.5 sm:px-0 text-2xl lg:text-[28px] xl:text-3xl 2xl:text-[34px] font-normal leading-[130%] sm:text-center">
                Study in Russia to Transform Your Student Life!
            </h2>

            <!-- Grid Container for Cards -->
            <div class="sm:px-6 grid sm:grid-cols-2 sm:grid-rows-2 gap-6 py-10 relative">

                <!-- Card 1: Global Standing Universities -->
                <div class="w-full bg-white rounded-[13px] sm:rounded-[32px] text-right relative overflow-hidden h-28 md:h-52">
                    <div class="w-[60%] sm:w-[55%] p-4 px-5 sm:p-9 sm:px-9 float-right max-md:flex items-center h-full">
                        <h3 class="text-[#3B075F] text-lg sm:text-[22px] font-semibold sm:mb-4">
                            Global Standing Universities
                        </h3>
                        <p class="text-[#627693] text-sm font-medium hidden sm:block">
                            Canadian universities are frequently ranked among top-ranked institutes for premier faculty and career opportunities.
                        </p>
                        <img
                            alt="Person Image"
                            loading="lazy"
                            width="264"
                            height="140"
                            decoding="async"
                            data-nimg="1"
                            class="absolute left-0 bottom-0"
                            src="<?= base_url('public/') ?>assets/images/bg/personImage.webp"
                            style="color: transparent;">
                    </div>
                </div>

                <!-- Card 2: Premier Education Quality -->
                <div class="w-full bg-white rounded-[13px] sm:rounded-[32px] text-right relative overflow-hidden h-28 md:h-52">
                    <div class="w-[60%] sm:w-[55%] p-4 px-5 sm:p-9 sm:px-9 float-right max-md:flex items-center h-full">
                        <h3 class="text-[#3B075F] text-lg sm:text-[22px] font-semibold sm:mb-4">
                            Premier Education Quality
                        </h3>
                        <p class="text-[#627693] text-sm font-medium hidden sm:block">
                            Russia encourages development of multi-disciplinary skills in every field to enhance learning in scholars.
                        </p>
                        <img
                            alt="Person Image"
                            loading="lazy"
                            width="272"
                            height="197"
                            decoding="async"
                            data-nimg="1"
                            class="absolute left-0 bottom-0"
                            src="<?= base_url('public/') ?>assets/images/bg/collegeFriends.webp"
                            style="color: transparent;">
                    </div>
                </div>

                <!-- Card 3: Post-Graduation Work Permit -->
                <div class="w-full bg-white rounded-[13px] sm:rounded-[32px] text-right relative overflow-hidden h-28 md:h-52">
                    <div class="w-[60%] sm:w-[55%] p-4 px-5 sm:p-9 sm:px-9 float-right max-md:flex items-center h-full">
                        <h3 class="text-[#3B075F] text-lg sm:text-[22px] font-semibold sm:mb-4">
                            Post-Graduation Work Permit
                        </h3>
                        <p class="text-[#627693] text-sm font-medium hidden sm:block">
                            Russia offers post-graduation work permit to its international students. This opens doors for great job options.
                        </p>
                        <img
                            alt="Person Image"
                            loading="lazy"
                            width="269"
                            height="203"
                            decoding="async"
                            data-nimg="1"
                            class="absolute left-0 bottom-0"
                            src="<?= base_url('public/') ?>assets/images/bg/peoplewithGlobe.webp"
                            style="color: transparent;">
                    </div>
                </div>

                <!-- Card 4: Scholarship Opportunities -->
                <div class="w-full bg-white rounded-[13px] sm:rounded-[32px] text-right relative overflow-hidden h-28 md:h-52">
                    <div class="w-[60%] sm:w-[55%] p-4 px-5 sm:p-9 sm:px-9 float-right max-md:flex items-center h-full">
                        <h3 class="text-[#3B075F] text-lg sm:text-[22px] font-semibold sm:mb-4">
                            Scholarships Opportunities
                        </h3>
                        <p class="text-[#627693] text-sm font-medium hidden sm:block">
                            Canadian universities has several scholarships to help student reduce their finances and cover fees and other expenses
                        </p>
                        <img
                            alt="Person Image"
                            loading="lazy"
                            width="202"
                            height="180"
                            decoding="async"
                            data-nimg="1"
                            class="absolute left-0 bottom-0"
                            src="<?= base_url('public/') ?>assets/images/bg/girlwithBook.webp"
                            style="color: transparent;">
                    </div>
                </div>

                <!-- Center Russia Flag Icon -->
                <div class="w-[59px] h-[59px] sm:w-[119px] sm:h-[119px] p-[3px] sm:p-[6px] rounded-full bg-white absolute top-[45%] sm:top-[39%] left-[44%] sm:left-[46%] shadow-[0px_11px_24px_0px_#00000033] overflow-hidden">
                    <img
                        alt="Flag Image"
                        loading="lazy"
                        width="107"
                        height="107"
                        decoding="async"
                        data-nimg="1"
                        class="rounded-full"
                        src="<?= base_url('public/') ?>assets/images/country/RussiaFlag.png"
                        style="color: transparent;">
                </div>
            </div>

            <!-- Request Callback Button -->
            <button class="w-full sm:w-fit flex items-center justify-center m-auto text-primary rounded-[14px] gap-2 text-sm font-semibold px-5 py-4 bg-white border-2 border-[#066AC91A] hover:scale-[1.05] transition-all ease-in-out duration-300">
                Request a Callback
                <img
                    alt="rightArrowBlue"
                    loading="lazy"
                    width="24"
                    height="24"
                    decoding="async"
                    data-nimg="1"
                    src="<?= base_url('public/') ?>assets/images/icons/rightArrowBlue.svg"
                    style="color: transparent;">
            </button>
        </div>


        <div class="container my-10 sm:my-24">
            <div id="stepsModule" class="m-auto flex justify-between box-border items-baseline">
                <!-- LEFT PANEL (dynamic) -->
                <div class="hidden sm:block w-[40%] pt-12 pr-24 xl:pr-28">
                    <h2 class="text-[28px] font-medium text-[#001713]">
                        <span id="leftLead" class="text-primary block text-nowrap">Loan &amp; Visa Assistance</span>
                        <span id="leftSub">A complete guide to study loan and visa</span>
                    </h2>
                    <ul id="leftBullets" class="text-lg font-normal text-[#001713] mt-7 mb-3">
                        <li class="flex items-center">
                            <img alt="list check" width="20" height="20" class="inline mr-2" src="<?= base_url('public/') ?>assets/images/icons/listCheck.webp">
                            Get funds to study abroad
                        </li>
                        <li class="flex items-center">
                            <img alt="list check" width="20" height="20" class="inline mr-2" src="<?= base_url('public/') ?>assets/images/icons/listCheck.webp">
                            Study visa application
                        </li>
                        <li class="flex items-center">
                            <img alt="list check" width="20" height="20" class="inline mr-2" src="<?= base_url('public/') ?>assets/images/icons/listCheck.webp">
                            Get help for visa interview
                        </li>
                    </ul>
                    <div>
                        <img id="leftImage" alt="helpLeftGroup" width="453" height="454"
                            src="<?= base_url('public/') ?>assets/images/collage/helpLeftGroup.webp">
                    </div>
                </div>

                <!-- RIGHT: CARDS -->
                <div id="stepsWrap" class="flex flex-wrap w-full sm:w-[55%] gap-2 sm:gap-x-2.5 sm:gap-y-10 justify-between">

                    <!-- Step 1 (Default) -->
                    <div class="steps group w-[48%] sm:w-[45%] rounded-[14px] p-2 pb-12 sm:p-6 sm:pb-12 relative flex flex-col gap-2 sm:gap-y-3.5 !bg-opacity-40 !bg-[#066bc9] border-white shadow-[13px_6px_18px_0px_rgba(0,0,0,0.1)] border-3 duration-200 bg-white"
                        tabindex="0"

                        data-lead="Expert Counselling"
                        data-sub="Talk to doctors &amp; senior mentors"
                        data-bullets="Profile evaluation|Country &amp; university shortlist|Scholarship pointers"
                        data-image="<?= base_url('public/') ?>assets/images/collage/helpLeftGroup.webp">
                        <div booksession="true" class="cursor-pointer z-10 text-xs sm:text-sm font-semibold text-left text-white underline">
                            <p class="white text-xs sm:text-sm font-bold text-left text-white">Step 1</p>
                            <p class="white text-[13px] sm:text-2xl font-bold text-left text-white sm:w-[150px]">Expert Counselling</p>
                            <span class="white underline">Discuss with Expert</span>
                            <img alt="Expert CounsellingImg" width="118" height="115" class="absolute z-0 right-0 bottom-0" src="<?= base_url('public/') ?>assets/images/avatar/help1.webp">
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="steps group w-[48%] sm:w-[45%] rounded-[14px] p-2 pb-12 sm:p-6 sm:pb-12 relative flex flex-col gap-2 sm:gap-y-3.5 border-transparent border-3 duration-200 bg-white"
                        tabindex="0"
                        data-lead="Document Preparation"
                        data-sub="Build a strong application file"
                        data-bullets="SOP/LOR guidance|Document checklist|Timeline planning"
                        data-image="<?= base_url('public/') ?>assets/images/collage/helpLeftGroup2.webp">
                        <div booksession="true" class="cursor-pointer no-underline z-10 text-xs sm:text-sm font-semibold text-left text-primary underline">
                            <p class="white text-xs sm:text-sm font-bold text-left text-cutmGrey">Step 2</p>
                            <p class="white text-[13px] sm:text-2xl font-bold text-left text-[#1D1D1F] sm:w-[150px]">Document Preparation</p>
                            <span class="white underline">Discuss with Expert</span>
                            <img alt="Document PreparationImg" width="135" height="113" class="absolute z-0 right-0 bottom-0" src="<?= base_url('public/') ?>assets/images/avatar/help2.webp">
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="steps group w-[48%] sm:w-[45%] rounded-[14px] p-2 pb-12 sm:p-6 sm:pb-12 relative flex flex-col gap-2 sm:gap-y-3.5 border-transparent border-3 duration-200 bg-white"
                        tabindex="0"
                        data-lead="University Application"
                        data-sub="Submit, track, and manage offers"
                        data-bullets="Application forms|Fee payment guidance|Offer tracking"
                        data-image="<?= base_url('public/') ?>assets/images/collage/helpLeftGroup3.webp">
                        <div booksession="true" class="cursor-pointer no-underline z-10 text-xs sm:text-sm font-semibold text-left text-primary underline">
                            <p class="white text-xs sm:text-sm font-bold text-left text-cutmGrey">Step 3</p>
                            <p class="white text-[13px] sm:text-2xl font-bold text-left text-[#1D1D1F] sm:w-[150px]">University Application</p>
                            <span class="white underline">Discuss with Expert</span>
                            <img alt="University ApplicationImg" width="125" height="132" class="absolute z-0 right-0 bottom-0" src="<?= base_url('public/') ?>assets/images/avatar/help3.webp">
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="steps group w-[48%] sm:w-[45%] rounded-[14px] p-2 pb-12 sm:p-6 sm:pb-12 relative flex flex-col gap-2 sm:gap-y-3.5 border-transparent border-3 duration-200 bg-white"
                        tabindex="0"
                        data-lead="Test Preparation"
                        data-sub="Boost scores with guided practice"
                        data-bullets="IELTS/TOEFL tips|Mock tests|Personalised study plan"
                        data-image="<?= base_url('public/') ?>assets/images/collage/helpLeftGroup4.webp">
                        <div booksession="true" class="cursor-pointer no-underline z-10 text-xs sm:text-sm font-semibold text-left text-primary underline">
                            <p class="white text-xs sm:text-sm font-bold text-left text-cutmGrey">Step 4</p>
                            <p class="white text-[13px] sm:text-2xl font-bold text-left text-[#1D1D1F] sm:w-[150px]">Test Preparation</p>
                            <span class="white underline">Discuss with Expert</span>
                            <img alt="Test PreparationImg" width="186" height="109" class="absolute z-0 right-0 bottom-0" src="<?= base_url('public/') ?>assets/images/avatar/help4.webp">
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="steps group w-[48%] sm:w-[45%] rounded-[14px] p-2 pb-12 sm:p-6 sm:pb-12 relative flex flex-col gap-2 sm:gap-y-3.5 border-transparent border-3 duration-200 bg-white"
                        tabindex="0"
                        data-lead="Loan &amp; Visa Assistance"
                        data-sub="A complete guide to study loan and visa"
                        data-bullets="Get funds to study abroad|Study visa application|Get help for visa interview"
                        data-image="<?= base_url('public/') ?>assets/images/collage/helpLeftGroup5.webp">
                        <div booksession="true" class="cursor-pointer no-underline z-10 text-xs sm:text-sm font-semibold text-left text-primary underline">
                            <p class="white text-xs sm:text-sm font-bold text-left text-cutmGrey">Step 5</p>
                            <p class="white text-[13px] sm:text-2xl font-bold text-left text-[#1D1D1F] sm:w-[150px]">Loan &amp; Visa Assistance</p>
                            <span class="white underline">Discuss with Expert</span>
                            <img alt="Loan &amp; Visa AssistanceImg" width="146" height="92" class="absolute z-0 right-0 bottom-0" src="<?= base_url('public/') ?>assets/images/avatar/help5.webp">
                        </div>
                    </div>

                    <!-- Step 6 -->
                    <div class="steps group w-[48%] sm:w-[45%] rounded-[14px] p-2 pb-12 sm:p-6 sm:pb-12 relative flex flex-col gap-2 sm:gap-y-3.5 border-transparent border-3 duration-200 bg-white"
                        tabindex="0"
                        data-lead="Accommodation Assistance"
                        data-sub="Find safe, budget-friendly stays"
                        data-bullets="On/near-campus options|Budget planning|Booking support"
                        data-image="<?= base_url('public/') ?>assets/images/collage/helpLeftGroup6.webp">
                        <div booksession="true" class="cursor-pointer no-underline z-10 text-xs sm:text-sm font-semibold text-left text-primary underline">
                            <p class="white text-xs sm:text-sm font-bold text-left text-cutmGrey">Step 6</p>
                            <p class="white text-[13px] sm:text-2xl font-bold text-left text-[#1D1D1F] sm:w-[150px]">Accommodation Assistance</p>
                            <span class="white underline">Discuss with Expert</span>
                            <img alt="Accommodation AssistanceImg" width="105" height="107" class="absolute z-0 right-0 bottom-0" src="<?= base_url('public/') ?>assets/images/avatar/help6.webp">
                        </div>
                    </div>

                </div>
            </div>
        </div>




        <!-- End of Loan & Visa Assistance Section -->

        <!-- Calculate Your Chances Start -->
        <div class="container my-12 sm:my-20">
            <h2 class="px-3.5 sm:px-0 text-2xl lg:text-[28px] xl:text-3xl 2xl:text-[34px] font-normal leading-[130%] sm:text-center mb-8 sm:mb-16">Let's Calculate Your Chances of Getting into your dream University!</h2>
            <div class=" overflow-hidden relative w-full lead-form-div border-1.5 border-primary p-[14px] xl:p-[35px] rounded-[25px] bg-white h-fit shadow-[0px_0px_35.6px_0px_#066AC966]">
                <form>
                    <div class="shadow-[0px_0px_24px_0px_#0000001A_inset] bg-[#F3F6F9] rounded-[20px] p-2.5 xl:p-10 flex items-center">
                        <div class="w-full sm:w-2/3">
                            <div class="flex flex-col gap-3 lg:gap-10 justify-even ">
                                <p class="text-lg sm:text-[22px] capitalize text-center sm:text-left">What Is Your Desired Academic Course?</p>
                                <div class="flex sm:flex-nowrap flex-wrap items-center justify-center w-full gap-5 md:grid-cols-2">
                                    <div class="w-[35%] sm:w-1/4 relative"><input id="UG" class="absolute left-[10px] top-[10px] accent-[#F3601E] peer" type="radio" value="UG" checked="" name="course"><label for="UG" class="inline-flex items-center justify-center shadow-[0px_0px_40px_0px_#1D3A531A] w-full p-2 sm:p-[15px] text-heading bg-white border-2 border-transparent rounded-[11px] cursor-pointer peer-checked:border-[#F3601E] peer-checked:bg-[#F3601E]/30 peer-checked:text-[#F3601E] lg:hover:text-[#F3601E] lg:hover:bg-[#F3601E]/30 lg:hover:border-[#F3601E] peer-checked:shadow-[0px_0px_24px_0px_#F3601E4D] lg:hover:shadow-[0px_0px_24px_0px_#F3601E4D] peer-checked:font-medium select-none transition-all ease-in-out duration-300">
                                            <div class="flex flex-col items-center justify-center gap-1"><span class="w-fit text-lg font-semibold"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path class="peer-checked:stroke-[#F3601E]" d="M10.0495 2.53028L4.02953 6.46028C2.09953 7.72028 2.09953 10.5403 4.02953 11.8003L10.0495 15.7303C11.1295 16.4403 12.9095 16.4403 13.9895 15.7303L19.9795 11.8003C21.8995 10.5403 21.8995 7.73028 19.9795 6.47028L13.9895 2.54028C12.9095 1.82028 11.1295 1.82028 10.0495 2.53028Z" stroke="#24292D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path class="peer-checked:stroke-[#F3601E]" opacity="0.4" d="M5.63109 13.0801L5.62109 17.7701C5.62109 19.0401 6.60109 20.4001 7.80109 20.8001L10.9911 21.8601C11.5411 22.0401 12.4511 22.0401 13.0111 21.8601L16.2011 20.8001C17.4011 20.4001 18.3811 19.0401 18.3811 17.7701V13.1301" stroke="#24292D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path class="peer-checked:stroke-[#F3601E]" opacity="0.4" d="M21.3984 15V9" stroke="#24292D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg></span>
                                                <p class="w-full text-sm sm:text-base peer-checked:text-[#F3601E] uppercase">UG</p>
                                            </div>
                                        </label></div>
                                    <div class="w-[35%] sm:w-1/4 relative"><input id="PG" class="absolute left-[10px] top-[10px] accent-[#F3601E] peer" type="radio" value="PG" name="course"><label for="PG" class="inline-flex items-center justify-center shadow-[0px_0px_40px_0px_#1D3A531A] w-full p-2 sm:p-[15px] text-heading bg-white border-2 border-transparent rounded-[11px] cursor-pointer peer-checked:border-[#F3601E] peer-checked:bg-[#F3601E]/30 peer-checked:text-[#F3601E] lg:hover:text-[#F3601E] lg:hover:bg-[#F3601E]/30 lg:hover:border-[#F3601E] peer-checked:shadow-[0px_0px_24px_0px_#F3601E4D] lg:hover:shadow-[0px_0px_24px_0px_#F3601E4D] peer-checked:font-medium select-none transition-all ease-in-out duration-300">
                                            <div class="flex flex-col items-center justify-center gap-1"><span class="w-fit text-lg font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.4" d="M10.4399 14.2999L11.0899 14.9499C11.2799 15.1399 11.5899 15.1399 11.7799 14.9599L13.5599 13.3199" stroke="#24292D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.99995 22H15.9999C20.0199 22 20.7399 20.39 20.9499 18.43L21.6999 10.43C21.9699 7.99 21.2699 6 16.9999 6H6.99995C2.72995 6 2.02995 7.99 2.29995 10.43L3.04995 18.43C3.25995 20.39 3.97995 22 7.99995 22Z" stroke="#24292D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path opacity="0.4" d="M8 6V5.2C8 3.43 8 2 11.2 2H12.8C16 2 16 3.43 16 5.2V6" stroke="#24292D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <g opacity="0.4">
                                                            <path d="M12 18.2002C14.2091 18.2002 16 16.4093 16 14.2002C16 11.9911 14.2091 10.2002 12 10.2002C9.79086 10.2002 8 11.9911 8 14.2002C8 16.4093 9.79086 18.2002 12 18.2002Z" stroke="#24292D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M21.6498 11C19.9198 12.26 17.9998 13.14 16.0098 13.64" stroke="#24292D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M2.61914 11.2695C4.28914 12.4095 6.10914 13.2195 7.99914 13.6795" stroke="#24292D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg></span>
                                                <p class="w-full text-sm sm:text-base peer-checked:text-[#F3601E] uppercase">PG</p>
                                            </div>
                                        </label></div>
                                    <div class="w-[35%] sm:w-1/4 relative"><input id="PHD" class="absolute left-[10px] top-[10px] accent-[#F3601E] peer" type="radio" value="PHD" name="course"><label for="PHD" class="inline-flex items-center justify-center shadow-[0px_0px_40px_0px_#1D3A531A] w-full p-2 sm:p-[15px] text-heading bg-white border-2 border-transparent rounded-[11px] cursor-pointer peer-checked:border-[#F3601E] peer-checked:bg-[#F3601E]/30 peer-checked:text-[#F3601E] lg:hover:text-[#F3601E] lg:hover:bg-[#F3601E]/30 lg:hover:border-[#F3601E] peer-checked:shadow-[0px_0px_24px_0px_#F3601E4D] lg:hover:shadow-[0px_0px_24px_0px_#F3601E4D] peer-checked:font-medium select-none transition-all ease-in-out duration-300">
                                            <div class="flex flex-col items-center justify-center gap-1"><span class="w-fit text-lg font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.4" d="M3.5 18V7C3.5 3 4.5 2 8.5 2H15.5C19.5 2 20.5 3 20.5 7V17C20.5 17.14 20.5 17.28 20.49 17.42" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M6.35 15H20.5V18.5C20.5 20.43 18.93 22 17 22H7C5.07 22 3.5 20.43 3.5 18.5V17.85C3.5 16.28 4.78 15 6.35 15Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path opacity="0.4" d="M8 7H16" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path opacity="0.4" d="M8 10.5H13" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg></span>
                                                <p class="w-full text-sm sm:text-base peer-checked:text-[#F3601E] uppercase">PHD</p>
                                            </div>
                                        </label></div>
                                    <div class="w-[35%] sm:w-1/4 relative"><input id="MBBS" class="absolute left-[10px] top-[10px] accent-[#F3601E] peer" type="radio" value="MBBS" name="course"><label for="MBBS" class="inline-flex items-center justify-center shadow-[0px_0px_40px_0px_#1D3A531A] w-full p-2 sm:p-[15px] text-heading bg-white border-2 border-transparent rounded-[11px] cursor-pointer peer-checked:border-[#F3601E] peer-checked:bg-[#F3601E]/30 peer-checked:text-[#F3601E] lg:hover:text-[#F3601E] lg:hover:bg-[#F3601E]/30 lg:hover:border-[#F3601E] peer-checked:shadow-[0px_0px_24px_0px_#F3601E4D] lg:hover:shadow-[0px_0px_24px_0px_#F3601E4D] peer-checked:font-medium select-none transition-all ease-in-out duration-300">
                                            <div class="flex flex-col items-center justify-center gap-1"><span class="w-fit text-lg font-semibold"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path class="peer-checked:stroke-[#F3601E]" d="M10.0495 2.53028L4.02953 6.46028C2.09953 7.72028 2.09953 10.5403 4.02953 11.8003L10.0495 15.7303C11.1295 16.4403 12.9095 16.4403 13.9895 15.7303L19.9795 11.8003C21.8995 10.5403 21.8995 7.73028 19.9795 6.47028L13.9895 2.54028C12.9095 1.82028 11.1295 1.82028 10.0495 2.53028Z" stroke="#24292D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path class="peer-checked:stroke-[#F3601E]" opacity="0.4" d="M5.63109 13.0801L5.62109 17.7701C5.62109 19.0401 6.60109 20.4001 7.80109 20.8001L10.9911 21.8601C11.5411 22.0401 12.4511 22.0401 13.0111 21.8601L16.2011 20.8001C17.4011 20.4001 18.3811 19.0401 18.3811 17.7701V13.1301" stroke="#24292D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path class="peer-checked:stroke-[#F3601E]" opacity="0.4" d="M21.3984 15V9" stroke="#24292D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg></span>
                                                <p class="w-full text-sm sm:text-base peer-checked:text-[#F3601E] uppercase">MBBS</p>
                                            </div>
                                        </label></div>
                                </div>
                                <div class=" flex justify-center sm:justify-start  gap-2 sm:gap-5"><button type="button" class="py-2.5 px-2.5 sm:px-5 rounded-[10px] text-sm sm:text-base font-medium capitalize text-white bg-primary flex items-center gap-2 hover:bg-[#1a5cb0]">Save &amp; Go Next<span class="inline-block"><svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.8125 1.3125L14.5625 6M14.5625 6L10.8125 10.6875M14.5625 6H1.4375" stroke="white" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg></span></button></div>
                            </div>
                        </div>
                        <div class="w-1/3"><img alt="leadFormImage" loading="lazy" width="498" height="394" decoding="async" data-nimg="1" class=" -mb-[75px] ml-[75px]" src="<?= base_url('public/') ?>assets/images/bg/leadFormImage.webp" style="color: transparent;"></div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Calculate Your Chances End -->

        <!-- start your journey section  -->
        <div class="sm:container my-12 sm:my-20">

            <!-- Flex container for content and slider -->
            <div class="flex items-center flex-col gap-6 md:gap-0 md:flex-row justify-center p-0">

                <!-- Left column: Text content -->
                <div class="w-full md:w-1/2">

                    <!-- Section heading -->
                    <h2 class="sm:mb-2 pl-[14px] sm:pl-0 text-2xl lg:text-[28px] xl:text-3xl 2xl:text-[34px] leading-[130%] font-normal">
                        Know Real Stories of Real People,
                        <span class="font-medium sm:block text-primary">
                            How They Went from India to Abroad!
                        </span>
                    </h2>

                    <!-- Sub-text (hidden on mobile) -->
                    <p class="text-sm lg:text-base hidden sm:block">
                        Get ready to be inspired by the incredible story of students who turned their dreams into reality.
                    </p>

                    <!-- Bullet points list -->
                    <div class="hidden sm:flex flex-col gap-2 my-5 lg:my-8">
                        <p class="flex items-center gap-2 text-sm lg:text-base">
                            <span>
                                <img
                                    alt="checkmark"
                                    loading="lazy"
                                    width="21"
                                    height="21"
                                    decoding="async"
                                    data-nimg="1"
                                    src="<?= base_url('public/') ?>assets/images/icons/checkmarkGreen.webp"
                                    style="color: transparent;">
                            </span>
                            Free counselling sessions by an educational consultant
                        </p>

                        <p class="flex items-center gap-2 text-sm lg:text-base">
                            <span>
                                <img
                                    alt="checkmark"
                                    loading="lazy"
                                    width="21"
                                    height="21"
                                    decoding="async"
                                    data-nimg="1"
                                    src="<?= base_url('public/') ?>assets/images/icons/checkmarkGreen.webp"
                                    style="color: transparent;">
                            </span>
                            Database of multiple reputed universities under one roof
                        </p>

                        <p class="flex items-center gap-2 text-sm lg:text-base">
                            <span>
                                <img
                                    alt="checkmark"
                                    loading="lazy"
                                    width="21"
                                    height="21"
                                    decoding="async"
                                    data-nimg="1"
                                    src="<?= base_url('public/') ?>assets/images/icons/checkmarkGreen.webp"
                                    style="color: transparent;">
                            </span>
                            Trustworthy and affordable overseas study plans
                        </p>
                    </div>

                    <!-- Desktop CTA button -->
                    <a
                        class="hidden sm:flex border-[1.5px] border-primary rounded-lg p-2.5 xl:py-3 xl:px-5 items-center justify-center md:w-fit text-base xl:text-lg font-medium text-primary hover:bg-primary hover:text-white"
                        href="#">
                        Start Your Journey
                        <svg
                            stroke="currentColor"
                            fill="currentColor"
                            stroke-width="0"
                            viewBox="0 0 448 512"
                            class="text-sm inline-block ml-1 font-medium"
                            height="1em"
                            width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
                        </svg>
                    </a>
                </div>

                <!-- Right column: Swiper slider -->
                <div class="pl-[14px] sm:pl-0 w-full md:w-1/2 py-1">
                    <div id="storiesSwiper" class="swiper">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="rounded-2xl relative overflow-hidden shadow-md">
                                    <div class="thumbnail-div w-auto h-[406px] 2xl:h-[458px] transition-all rounded-2xl">
                                        <img
                                            alt="video thumbnail"
                                            loading="lazy"
                                            width="296"
                                            height="433"
                                            decoding="async"
                                            class="rounded-2xl w-full h-full object-cover"
                                            src="<?= base_url('public/') ?>assets/images/yt_thumbnail/arush.webp">
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <div class="rounded-2xl relative overflow-hidden shadow-md">
                                    <div class="thumbnail-div w-auto h-[406px] 2xl:h-[458px] transition-all rounded-2xl">
                                        <img
                                            alt="video thumbnail"
                                            loading="lazy"
                                            width="296"
                                            height="433"
                                            decoding="async"
                                            class="rounded-2xl w-full h-full object-cover"
                                            src="<?= base_url('public/') ?>assets/images/yt_thumbnail/deepika.webp">
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="swiper-slide">
                                <div class="rounded-2xl relative overflow-hidden shadow-md">
                                    <div class="thumbnail-div w-auto h-[406px] 2xl:h-[458px] transition-all rounded-2xl">
                                        <img
                                            alt="video thumbnail"
                                            loading="lazy"
                                            width="296"
                                            height="433"
                                            decoding="async"
                                            class="rounded-2xl w-full h-full object-cover"
                                            src="<?= base_url('public/') ?>assets/images/yt_thumbnail/manan.webp">
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 4 -->
                            <div class="swiper-slide">
                                <div class="rounded-2xl relative overflow-hidden shadow-md">
                                    <div class="thumbnail-div w-auto h-[406px] 2xl:h-[458px] transition-all rounded-2xl">
                                        <img
                                            alt="video thumbnail"
                                            loading="lazy"
                                            width="296"
                                            height="433"
                                            decoding="async"
                                            class="rounded-2xl w-full h-full object-cover"
                                            src="<?= base_url('public/') ?>assets/images/yt_thumbnail/zeeshan.webp">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination & Nav (optional) -->
                        <!-- <div class="stories-pagination mt-3"></div>
                        <div class="flex gap-2 justify-end mt-2">
                            <button class="stories-prev border rounded-md p-2" aria-label="Previous">‹</button>
                            <button class="stories-next border rounded-md p-2" aria-label="Next">›</button>
                        </div> -->
                    </div>
                </div>



                <!-- Mobile CTA button -->
                <a
                    class="mx-3.5 sm:mx-0 flex w-[85%] sm:hidden border-[1.5px] border-primary rounded-xl p-2.5 xl:py-3 xl:px-5 items-center justify-center text-base xl:text-lg font-medium text-primary hover:bg-primary hover:text-white"
                    href="#">
                    Start Your Journey
                    <svg
                        stroke="currentColor"
                        fill="currentColor"
                        stroke-width="0"
                        viewBox="0 0 448 512"
                        class="text-sm inline-block ml-1 font-medium"
                        height="1em"
                        width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
                    </svg>
                </a>
            </div>
        </div>
        <!-- end of start your journey section  -->

        <!-- Blog Slider Section Start -->
        <?= $this->include('web/components/blogs_slider.php') ?>
        <!-- Blog Slider Section End -->



        <!-- FAQ Section Start -->
        <?= $this->include('web/components/faq.php') ?>
        <!-- FAQ Section End -->

        <!-- Quick Links Section Start -->
        <div class="container my-8 xl:py-14">
            <h2 class="text-2xl lg:text-[28px] xl:text-3xl 2xl:text-[34px] font-medium text-center sm:text-left">Quick <span class="inline-block text-test-prep font-medium">Links</span></h2>
            <div class="flex flex-wrap gap-2 mt-4 mb-1 sm:my-4">
                <a class="rounded-full px-3 sm:px-5 py-1 sm:p-2 text-xs lg:text-sm inline-block font-medium sm:font-semibold bg-[#E8E8ED] hover:bg-[#ccc]" href="#">Get consultancy</a>
                <a class="rounded-full px-3 sm:px-5 py-1 sm:p-2 text-xs lg:text-sm inline-block font-medium sm:font-semibold bg-[#E8E8ED] hover:bg-[#ccc]" href="#">Study in UK</a>
                <a class="rounded-full px-3 sm:px-5 py-1 sm:p-2 text-xs lg:text-sm inline-block font-medium sm:font-semibold bg-[#E8E8ED] hover:bg-[#ccc]" href="#">Study in USA</a>
                <a class="rounded-full px-3 sm:px-5 py-1 sm:p-2 text-xs lg:text-sm inline-block font-medium sm:font-semibold bg-[#E8E8ED] hover:bg-[#ccc]" href="#">Study in Hungary</a>
                <a class="rounded-full px-3 sm:px-5 py-1 sm:p-2 text-xs lg:text-sm inline-block font-medium sm:font-semibold bg-[#E8E8ED] hover:bg-[#ccc]" href="#">Study in Malta</a>
                <a class="rounded-full px-3 sm:px-5 py-1 sm:p-2 text-xs lg:text-sm inline-block font-medium sm:font-semibold bg-[#E8E8ED] hover:bg-[#ccc]" href="#">Study in Australia</a>
            </div>
            <div class="quick-link">
                <div class="readmore-content-both-device flex flex-col items-start justify-start">
                    <div class="readmore-long-content w-full ">
                        <div>
                            <p>Russia is known globally for its high-quality education and affordable living. It ranks 3rd for the best quality of life. Thus, making it one of the preferred countries to study for international students.</p>
                            <h2>Cost of&nbsp;Study in Russia</h2>
                            <p>To&nbsp;study in Russia&nbsp;a student will need approximately CAD 13,000 - CAD 35,000 a year. Although, the tuition fees will depend on the course and the university that you select&nbsp;but here are the basic costs of all the courses.</p>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p><strong><strong>Degree </strong></strong></p>
                                        </td>
                                        <td>
                                            <p><strong><strong>Russia </strong></strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong><strong>UG Course </strong></strong></p>
                                        </td>
                                        <td>
                                            <p>INR 8,03,944 to 12,36,838</p>
                                            <p>(CAD 13,000 to 20,000)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong><strong>PG Course</strong></strong></p>
                                        </td>
                                        <td>
                                            <p>INR 10,51,312 to 15,46,047</p>
                                            <p>(CAD17,000 to 25,000)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong><strong>Doctoral Programs </strong></strong></p>
                                        </td>
                                        <td>
                                            <p>INR 4,32,893 to 9,27,628</p>
                                            <p>(CAD 7,000 to 15,000)</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2>Student Visa in Russia</h2>
                            <p>Once you receive your acceptance letter from the university, the next step would be to apply for a student visa. Besides, for Russia&nbsp;study abroad, students are required to get a study permit along with a student visa. A study permit validates your stay in the country while a student visa authorizes the entry. It is issued by the Citizen and Immigration Russia (CIC) authorities.</p>
                            <p><strong>Also read about</strong><a href="#"><u>how banks help in visa process</u></a>.</p>
                            <p>Now that you know about Canadian study visas, let us look at the scholarships to study in Russia for international students. Some of the scholarships are listed below.</p>
                            <h2>Scholarships to Study in Russia</h2>
                            <p>Universities in Russia provide various scholarships for students both government-funded and non-government-funded. Listed below are a few with the amount that each of these covers.</p>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p><strong><strong>Scholarship </strong></strong></p>
                                        </td>
                                        <td>
                                            <p><strong><strong>Amount </strong></strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Vanier Russia Graduate Scholarships funded by the Government of Russia</p>
                                        </td>
                                        <td>
                                            <p>INR 41,83,826 (CAD 67,322) per year is offered for three years.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Banting Postdoctoral Fellowship</p>
                                        </td>
                                        <td>
                                            <p>Provides INR 58,57,520 (CAD 94,251) per year for three years.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Lester B. Pearson International Scholarship Program at the University of Toronto</p>
                                        </td>
                                        <td>
                                            <p>Offers INR 51,20,506 (<strong><strong>CAD</strong></strong>&nbsp;<strong><strong>82,392) per year. </strong></strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Karen McKellin International Leader of Tomorrow Award at the University of British Columbia</p>
                                        </td>
                                        <td>
                                            <p>Covers INR 11,71,182 - 28,44,327 (CAD 18,850 - 45,779) per year</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>York University International Student Scholarship</p>
                                        </td>
                                        <td>
                                            <p>Offers INR 4,18,329 - 29,28,616 (CAD 6,733 - 47,136)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Ontario Graduate Scholarship</p>
                                        </td>
                                        <td>
                                            <p>Covers INR 4,18,370 (CAD 6,734)</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>If you are someone who is planning to study abroad in Russia, then you must apply for the above-mentioned scholarships. These would help you maintain your budget without straining your pocket.</p>
                            <p><strong>Also Read:<a href="#"><u>&nbsp;scholarships in Russia</u></a>.</strong></p>
                            <p>Further, let us read more about the intakes in Russia.</p>
                            <h2>Intakes in Russia</h2>
                            <p>Most colleges in Russia offer three intakes. However, some universities may also refer to it as semesters.</p>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p><strong><strong>Intakes </strong></strong></p>
                                        </td>
                                        <td>
                                            <p><strong><strong>Duration </strong></strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Fall intake</p>
                                        </td>
                                        <td>
                                            <p>September to December</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Spring intake</p>
                                        </td>
                                        <td>
                                            <p>January to April</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Summer intake</p>
                                        </td>
                                        <td>
                                            <p>April to June</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>However, the availability of courses varies as per the intake. Thus, you must check that on the official university website before enrolling for the program.</p>
                            <p>Getting admission to a foreign university isn’t an easy task! Thus, it is better to get assistance from experts. There are various&nbsp;study abroad consultants&nbsp;who guide you through the entire admission process and suggest which intake to apply to, as per your preferences.</p>
                            <p><strong>Also Read:</strong>&nbsp;<strong><a href="#"><u>intakes in Russia</u></a></strong></p>
                            <h2>Top Courses to Study in Russia</h2>
                            <p>There are various courses to&nbsp;study in Russia&nbsp;for Indian&nbsp;students. Some of them are listed below.</p>
                            <ul>
                                <li>Business Management</li>
                                <li>MBBS</li>
                                <li>IT &amp; Computer Science</li>
                                <li>Engineering</li>
                                <li>Health, Bio-sciences &amp; Pharmacy</li>
                                <li>Media &amp; Journalism</li>
                                <li>Agriculture Science</li>
                                <li>Architecture</li>
                                <li>Culinary Management</li>
                                <li>Hospitality Management</li>
                            </ul>
                            <p>These are some of the popular courses&nbsp;for masters in Russia&nbsp;for Indian&nbsp;students. If you are still unsure about which course to opt for then you can use our&nbsp;AI-powered course finder&nbsp;tool. It is uniquely designed for students to ease out the process of filtration of programs. Moreover, the tool offers&nbsp;75,000+ course&nbsp;options along with various filters as per your preferences. These include the level, duration and country.</p>
                            <p><strong>Also Read:</strong><a href="#"><u>&nbsp;<strong>top courses in Russia</strong></u></a></p>
                            <p>Now, let us move on to the next section&nbsp;which talks about top universities in Russia.</p>
                            <h2>Top Universities to Study in&nbsp;Russia</h2>
                            <p>This section covers&nbsp;top universities in Russia&nbsp;for masters&nbsp;along with the Russia ranks. Let us look at the table below.</p>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p><strong><strong>Universities </strong></strong></p>
                                        </td>
                                        <td>
                                            <p><strong><strong>Russia Ranks</strong></strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>University of Toronto</p>
                                        </td>
                                        <td>
                                            <p>1<sup>st</sup>&nbsp;in Russia</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>University of British Columbia</p>
                                        </td>
                                        <td>
                                            <p>2<sup>nd</sup>&nbsp;in Russia</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>McGill University</p>
                                        </td>
                                        <td>
                                            <p>3<sup>rd</sup>&nbsp;in Russia</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>McMaster University</p>
                                        </td>
                                        <td>
                                            <p>4<sup>th</sup>&nbsp;in Russia</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>University of Alberta</p>
                                        </td>
                                        <td>
                                            <p>5<sup>th</sup>&nbsp;in Russia</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>University of Montreal</p>
                                        </td>
                                        <td>
                                            <p>6<sup>th</sup>&nbsp;in Russia</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>University of Waterloo</p>
                                        </td>
                                        <td>
                                            <p>7<sup>th</sup>&nbsp;in Russia</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>University of Calgary</p>
                                        </td>
                                        <td>
                                            <p>8<sup>th</sup>&nbsp;in Russia</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>University of Ottawa</p>
                                        </td>
                                        <td>
                                            <p>9<sup>th</sup>&nbsp;in Russia</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Western University</p>
                                        </td>
                                        <td>
                                            <p>10<sup>th</sup>&nbsp;in Russia</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>These are some of the top colleges to study in Russia. Besides, with our <strong><strong>college predictor</strong></strong>&nbsp;tool, you can get an overview of all the universities in the nation. The tool’s user-friendly interface makes it easy for students to filter out colleges. With this, you can find a suitable university as per your needs. It provides results based on various filters such as stream, ranking, fees, location and more.</p>
                            <p><strong>Also Read:</strong>&nbsp;<strong><a href="#"><u>cheapest colleges in Russia</u></a></strong></p>
                            <p>Now, let us look at the job opportunities in Russia after students complete their studies.</p>
                            <h2>Job Opportunity After Study</h2>
                            <p>Russia ranks as one of the best countries among G20. It is known for its business operations in the nation. Besides, the post-graduation work permit (PGWP) makes students eligible to live and work in Russia after graduation. However, the condition is that you&nbsp;must complete the degree from a Designated Learning Institution (DLI) in Russia. Here are some top job profiles in Russia:</p>
                            <ol>
                                <li>Project Managers</li>
                            </ol>
                            <ol start="2">
                                <li>HR Manager</li>
                            </ol>
                            <ol start="3">
                                <li>Physician and Dentist</li>
                            </ol>
                            <ol start="4">
                                <li>Nurses&nbsp;</li>
                            </ol>
                            <ol start="5">
                                <li>IT Manager&nbsp;</li>
                            </ol>
                            <ol start="6">
                                <li>Financial Analysts</li>
                            </ol>
                            <ol start="7">
                                <li>Engineers</li>
                            </ol>
                            <ol start="8">
                                <li>Educationalists</li>
                            </ol>
                            <ol start="9">
                                <li>Tourism and Hospitality&nbsp;</li>
                            </ol>
                            <ol start="10">
                                <li>Office Managers and Administrative Assistants</li>
                            </ol>
                            <p><strong>Also Read:</strong>&nbsp;<strong><a href="#"><u>Job opportunities after study in Russia </u></a></strong></p>
                            <p>Thus, there are ample of job opportunities in Russia for&nbsp;study abroad&nbsp;aspirants after studies. Next, let us have a glance at the living cost in Russia.</p>
                            <h2>Cost of Living in Russia&nbsp;</h2>
                            <p>There are various expenses included in the living expenses such as food, electricity, transportation and more.Here is a list of basic expenses along with the amount per month:</p>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p><strong><strong>Living Expenses </strong></strong></p>
                                        </td>
                                        <td>
                                            <p><strong><strong>Russia (per month)</strong></strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong><strong>Accommodation </strong></strong></p>
                                        </td>
                                        <td>
                                            <p>INR 24,742 to 92,786</p>
                                            <p>(CAD 400 to 1500)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong><strong>Food </strong></strong></p>
                                        </td>
                                        <td>
                                            <p>INR 74,228 to 92,786</p>
                                            <p>(CAD 1200 to 1500)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong><strong>Electricity </strong></strong></p>
                                        </td>
                                        <td>
                                            <p>INR 12,371</p>
                                            <p>(CAD $200)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong><strong>Transport </strong></strong></p>
                                        </td>
                                        <td>
                                            <p>INR 6,182 to 9,273</p>
                                            <p>(CAD 100 to 150)</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p><strong>Also Read:</strong>&nbsp;<a href="#"><u>cost of living in Russia</u></a>&nbsp;</p>
                            <p>Now you know all about the cost of studying and living in Russia. So, let us move on to&nbsp;the next section&nbsp;which&nbsp;mentions the reasons to study&nbsp;in Russia.</p>
                            <h2>Reasons to Study in&nbsp;Russia</h2>
                            <p>Are you wondering why study in Russia? This section will give you an answer to this question. There are various reasons for studying in Russia, listed below are some of these:</p>
                            <ol>
                                <li><strong>Affordable Tuition:</strong> The tuition fee in Russia is fairly cheaper than in other nations. Further, there are various scholarships for students as well.</li>
                                <li><strong>Top-notch Education:</strong> Russia is home to some of the world’s best universities and colleges.</li>
                                <li><strong>Cultural Diversity:</strong> Russia has a multicultural environment. Moreover, there are very welcoming and warm people from varied ethnic groups.</li>
                                <li><strong>Campus Lifestyle:</strong> The country is famous for its lively and vibrant lifestyle. Students can be a part of a variety of fests and activities.</li>
                                <li><strong>Studying &amp; Working:</strong> Students may work part-time while studying in Russia for up to 20 hours per week.</li>
                            </ol>
                            <p><strong><strong>Conclusion </strong></strong></p>
                            <p>To wrap up, Russia&nbsp;is the perfect study destination for students. The country is known for its affordable living and quality of life.&nbsp;Further, the write-up covers the reasons to study in the nation and the various costs that students incur in Russia. Besides, if you are facing any doubts, then you must seek assistance from experts such as DoctorBano.com. They will assist and guide you throughout the process.</p>
                            <p><strong><strong>Some useful links:</strong></strong></p>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p><a href="#">Fully Funded Scholarships</a></p>
                                        </td>
                                        <td>
                                            <p><a href="#">Scholarships for international students in Russia</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><a href="#">Study Loans in Russia</a>&nbsp;</p>
                                        </td>
                                        <td>
                                            <p><a href="#">Part Time Jobs in Russia</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><a href="#">Salary in Russia </a></p>
                                        </td>
                                        <td>
                                            <p><a href="#">Education system in Russia</a></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><button class="readmore-btn mb-3 transition-all ease-in-out text-test-prep text-sm sm:text-base !undefined">Read More</button>
                </div>
            </div>
        </div>



        <!-- Quick Links Section End  -->
    </div>
</main>

<?= $this->endSection() ?>