<?= $this->extend('web/components/assemble') ?>

<?= $this->section('content') ?>

<div>
    <div class="jsx-43c44c6b135d4931 container">
        <div class="jsx-43c44c6b135d4931 bg-white rounded-[13px] sm:rounded-[30px] shadow-[0px_0px_24px_0px_#00000026_inset] p-5 sm:p-9 flex flex-col sm:flex-row justify-between">
            <div class="jsx-43c44c6b135d4931 w-full sm:w-[45%]">
                <h1 class="jsx-43c44c6b135d4931 text-[#1F2022] text-2xl lg:text-[32px] 2xl:text-[38px] font-semibold leading-[130%]">University of Dundee<br class="jsx-43c44c6b135d4931"><span class="jsx-43c44c6b135d4931 block text-primary">Study Faster &amp; Better</span></h1>
                <div class="readmore-content-both-device flex flex-col items-start justify-start">
                    <p class="jsx-43c44c6b135d4931 text-sm md:text-base text-[#1F2022]"> Established in 1881 against the stunning backdrop of</p>
                    <div class="readmore-long-content w-full ">
                        <div class="jsx-43c44c6b135d4931">
                            <p class="jsx-43c44c6b135d4931 text-sm md:text-base text-[#1F2022]">Scotland's iconic terrain, the University of Dundee is amongst the leading universities in the UK. This iconic educational hub in Scotland aims to transform lives with its unique teaching method and plenty of academic facilities. The University of Dundee has earned an unbeatable reputation by pushing the boundaries with its highly dedicated students and staff.</p>
                        </div>
                    </div><button class="readmore-btn mb-3 transition-all ease-in-out text-test-prep text-sm sm:text-base !undefined">Read More</button>
                </div>
                <div class="jsx-43c44c6b135d4931 bg-[#538B191A] rounded-[11px] py-4 px-7 w-[75%] my-6">
                    <p class="jsx-43c44c6b135d4931 text-[#1F2022] text-sm mb-1">Increase your chances of admission upto <span class="jsx-43c44c6b135d4931  font-semibold text-[#538B19]">98%</span></p>
                    <img alt="universityLogoGroup" fetchpriority="high" width="360" height="58" decoding="async" data-nimg="1" class="" src="public/assets/images/single_uni/dundee/universityLogoGroup.webp" style="color: transparent;">
                </div><a class="w-[75%] bg-[linear-gradient(251.53deg,_#066AC94D_0%,_#066AC900_25%),linear-gradient(75.84deg,_#066AC966_0%,_#066AC966_2.32%,_#DEEAF500_20%)] border-2 border-primary flex items-center text-[#1D1D1F] text-[15px] font-semibold justify-center rounded-[17px] p-4 gap-4 mt-8 hover:scale-105 transition-all ease-in-out duration-300" href="tel:+91 9773388670">
                    <img alt="star Svg" loading="lazy" width="19" height="19" decoding="async" data-nimg="1" class="mb-[7px]" src="public/assets/images/single_uni/dundee/star.webp" style="color: transparent;">Talk To University Expert</a>
            </div>

            <style>
                #uniGallery .swiper {
                    width: 100%;
                }

                #uniGallery .universityImageSwiper {
                    height: 195px;
                }

                @media (min-width:640px) {
                    #uniGallery .universityImageSwiper {
                        height: 420px;
                    }
                }

                #uniGallery .swiper-slide img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    display: block;
                }

                /* move the small thumbnail strip DOWN (closer to bottom) */
                #uniGallery .universityImageNavigationSwiper {
                    bottom: 20px;
                }

                /* was 50px */
                @media (min-width:640px) {
                    #uniGallery .universityImageNavigationSwiper {
                        bottom: 32px;
                    }
                }
            </style>

            <div id="uniGallery" class="w-full sm:w-[53%] my-2 sm:my-0 relative">
                <div class="max-h-[195px] sm:max-h-[420px] h-full rounded-[9px] sm:rounded-[22px] border-2 sm:border-5 border-white overflow-hidden relative shadow-[0px_0px_29.85px_0px_#1D3A5326]">

                    <!-- MAIN -->
                    <div class="swiper universityImageSwiper h-full relative" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img alt="University of Dundee (1) - Main Building"
                                    class="h-full w-full object-cover"
                                    src="public/assets/images/single_uni/dundee/UniversityDundeeOthers(1).webp">
                            </div>
                            <div class="swiper-slide">
                                <img alt="University of Dundee (2) - Campus"
                                    class="h-full w-full object-cover"
                                    src="public/assets/images/single_uni/dundee/UniversityDundeeOthers(2).webp">
                            </div>
                            <div class="swiper-slide">
                                <img alt="University of Dundee (3) - Building"
                                    class="h-full w-full object-cover"
                                    src="public/assets/images/single_uni/dundee/University20Dundee(3).webp">
                            </div>
                            <div class="swiper-slide">
                                <img alt="University of Dundee (4) - Aerial View"
                                    class="h-full w-full object-cover"
                                    src="public/assets/images/single_uni/dundee/University20Dundee(4).webp">
                            </div>
                        </div>

                        <!-- NAV BUTTONS -->
                        <div class="swiper-nav-btns absolute bottom-5 sm:bottom-8 right-3 sm:right-5 z-20 flex items-center gap-2">
                            <button class="uni-prev block" aria-label="Previous">
                                <svg width="40" height="34" viewBox="0 0 40 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.3275 28.1566C26.4472 28.1566 31.5222 23.0817 31.5222 16.962C31.5222 10.8422 26.4472 5.7673 20.3275 5.7673C14.2077 5.7673 9.13281 10.8422 9.13281 16.962C9.13281 23.0817 14.2077 28.1566 20.3275 28.1566ZM20.3275 26.664C14.8794 26.664 10.5508 22.3354 10.5508 16.962C10.5508 11.5885 14.8794 7.18529 20.2529 7.18529C25.6263 7.18529 30.0295 11.5139 30.0295 16.962C30.0295 22.3354 25.7009 26.664 20.3275 26.664ZM22.4172 22.41C22.6411 22.1861 22.6411 21.7384 22.4172 21.5145L17.6408 16.962L22.4172 12.4095C22.7157 12.1856 22.6411 11.7378 22.4172 11.5139C22.1933 11.29 21.7455 11.29 21.5216 11.5139L16.6706 16.141C16.1481 16.5888 16.1481 17.3351 16.6706 17.7829L21.5216 22.41C21.7455 22.6339 22.1933 22.7086 22.4172 22.41Z" fill="white" />
                                </svg>
                            </button>
                            <button class="uni-next block" aria-label="Next">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.7923 28.1566C22.9121 28.1566 27.987 23.0817 27.987 16.962C27.987 10.8422 22.9121 5.7673 16.7923 5.7673C10.6726 5.7673 5.59766 10.8422 5.59766 16.962C5.59766 23.0817 10.6726 28.1566 16.7923 28.1566ZM16.7923 26.664C11.3443 26.664 7.01565 22.3354 7.01565 16.962C7.01565 11.5885 11.3443 7.18529 16.7177 7.18529C22.0911 7.18529 26.4944 11.5139 26.4944 16.962C26.4944 22.3354 22.1658 26.664 16.7923 26.664ZM14.3295 22.41C14.5534 22.6339 15.0012 22.6339 15.2997 22.41L20.1507 17.7829C20.6731 17.3351 20.6731 16.5888 20.1507 16.141L15.2997 11.5139C15.0012 11.2154 14.628 11.2154 14.4041 11.5139C14.1056 11.7378 14.1056 12.1856 14.4041 12.4095L19.1805 16.962L14.4041 21.5145C14.031 21.7384 14.031 22.1861 14.3295 22.41Z" fill="white" />
                                </svg>
                            </button>
                        </div>

                        <!-- BADGES (optional overlay) -->
                        <div class="absolute top-2 sm:top-4 left-2 sm:left-4 right-2 sm:right-4 z-10 flex items-start justify-between">
                            <div class="rounded-md sm:rounded-lg py-[6px] px-2 sm:px-3 bg-[#FFFFFFB2] flex items-start gap-1 w-fit backdrop-blur-[30px]">
                                <img alt="locationPin" width="14" height="14"
                                    src="public/assets/images/single_uni/dundee/locationPin.webp">
                                <span class="text-[#353535] text-[10px] sm:text-xs font-medium max-w-40">Dundee, United Kingdom</span>
                            </div>
                            <div class="relative py-[7px] sm:py-2 px-5 sm:px-6 pr-2 bg-white shadow-[0px_0px_29.85px_0px_#1D3A5326] rounded-md sm:rounded-lg">
                                <img alt="badge" width="53" height="57"
                                    class="-left-7 absolute -top-1"
                                    src="public/assets/images/single_uni/dundee/bedge.webp">
                                <span class="text-heading text-[8px] sm:text-xs font-bold block">#441 RANKED</span>
                            </div>
                        </div>
                    </div>

                    <!-- THUMBS -->
                    <div class="swiper universityImageNavigationSwiper absolute bottom-[50px] sm:bottom-[70px] left-2 sm:left-5 w-1/2 !mx-0">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide border sm:border-2 border-white rounded-md sm:rounded-lg overflow-hidden">
                                <img alt="thumb 1" class="h-7 md:h-[50px] w-full object-cover"
                                    src="public/assets/images/single_uni/dundee/UniversityDundeeOthers(1).webp">
                            </div>
                            <div class="swiper-slide border sm:border-2 border-white rounded-md sm:rounded-lg overflow-hidden">
                                <img alt="thumb 2" class="h-7 md:h-[50px] w-full object-cover"
                                    src="public/assets/images/single_uni/dundee/UniversityDundeeOthers(2).webp">
                            </div>
                            <div class="swiper-slide border sm:border-2 border-white rounded-md sm:rounded-lg overflow-hidden">
                                <img alt="thumb 3" class="h-7 md:h-[50px] w-full object-cover"
                                    src="public/assets/images/single_uni/dundee/University20Dundee(3).webp">
                            </div>
                            <div class="swiper-slide border sm:border-2 border-white rounded-md sm:rounded-lg overflow-hidden">
                                <img alt="thumb 4" class="h-7 md:h-[50px] w-full object-cover"
                                    src="public/assets/images/single_uni/dundee/University20Dundee(4).webp">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <script>
                (function initUniGallery() {
                    function init() {
                        try {
                            if (typeof Swiper === 'undefined') {
                                console.error('Swiper not loaded — check the CDN <script>.');
                                return;
                            }
                            const root = document.getElementById('uniGallery');
                            if (!root) return;

                            // Clean any pre-initialized remnants
                            root.querySelectorAll('.swiper-initialized').forEach(el => el.classList.remove('swiper-initialized'));
                            root.querySelectorAll('[style*="transform: translate3d"]').forEach(el => el.style.transform = '');

                            // Remove slides with empty images (just in case)
                            [...root.querySelectorAll('.swiper-slide img')].forEach(img => {
                                if (!img.getAttribute('src')) img.closest('.swiper-slide')?.remove();
                            });

                            const mainEl = root.querySelector('.universityImageSwiper');
                            const thumbsEl = root.querySelector('.universityImageNavigationSwiper');
                            const prevEl = root.querySelector('.uni-prev');
                            const nextEl = root.querySelector('.uni-next');

                            if (!mainEl || !thumbsEl) return;

                            const slideCount = mainEl.querySelectorAll('.swiper-slide').length;
                            const loopable = slideCount > 1;

                            const thumbs = new Swiper(thumbsEl, {
                                slidesPerView: 4,
                                spaceBetween: 12,
                                freeMode: true,
                                watchSlidesProgress: true,
                                slideToClickedSlide: true,
                                breakpoints: {
                                    640: {
                                        slidesPerView: 5,
                                        spaceBetween: 12
                                    },
                                    1024: {
                                        slidesPerView: 6,
                                        spaceBetween: 14
                                    }
                                }
                            });

                            const main = new Swiper(mainEl, {
                                loop: loopable,
                                speed: 500,
                                spaceBetween: 0,
                                navigation: {
                                    nextEl,
                                    prevEl
                                },
                                thumbs: {
                                    swiper: thumbs
                                },
                                observer: true,
                                observeParents: true
                            });

                            // Ensure thumb click always works (loop/no loop)
                            function goTo(i) {
                                if (Number.isInteger(i))(main.params.loop ? main.slideToLoop(i) : main.slideTo(i));
                            }
                            thumbs.on('click', () => goTo(thumbs.clickedIndex));

                            // If the gallery starts hidden (tabs/modals), update when visible:
                            // new IntersectionObserver(([e],obs)=>{ if(e.isIntersecting){ main.update(); thumbs.update(); obs.disconnect(); } }).observe(mainEl);

                        } catch (e) {
                            console.error('Init error:', e);
                        }
                    }

                    if (document.readyState === 'loading') {
                        document.addEventListener('DOMContentLoaded', init);
                    } else {
                        init(); // DOM already ready
                    }
                })();
            </script>


        </div>
    </div>
    <div class="container top-14 z-20">
        <div class="bg-[#FFFFFFB2] shadow-[-16.38px_33.89px_50.83px_0px_#17122B3D] backdrop-blur-[14px] rounded-b-[15px] w-[90%] m-auto p-[14px] flex items-center justify-center gap-5"><span class=" text-lg font-semibold bg-[linear-gradient(92.91deg,_#1BA9BC_-0.48%,_#2966C1_98.9%)] text-transparent bg-clip-text">Lets Start Your Admission Journey</span><a class="bg-[linear-gradient(92.91deg,_#1BA9BC_-0.48%,_#2966C1_98.9%)] flex items-center gap-2 text-white py-3 px-9 rounded-[10px] text-base font-medium hover:scale-105 transition-all ease-in-out duration-300" href="https://www.gradding.com/course-finder?universityId=2">
                <img alt="penIcon" loading="lazy" width="18" height="18" decoding="async" data-nimg="1" src="public/assets/images/single_uni/dundee/penIcon.webp" style="color: transparent;">Apply Now</a><a class="text-[#2685B9] text-base font-medium border-2 border-[#1BA9BCB2] py-3 px-9 rounded-[10px] bg-[#F0FDFF1A] hover:scale-105 transition-all ease-in-out duration-300" href="https://www.gradding.com/start-journey">Check Eligibility</a></div>
    </div>
    <div class="my-4"></div>
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
                    <div class="w-1/3">
                        <img alt="leadFormImage" loading="lazy" width="498" height="394" decoding="async" data-nimg="1" class=" -mb-[75px] ml-[75px]" src="<?= base_url('public/') ?>assets/images/single_uni/dundee/leadFormImage.webp" style="color: transparent;">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container my-8 sm:my-20">
        <h2 class="px-3.5 sm:px-0 text-2xl lg:text-[28px] xl:text-3xl 2xl:text-[34px] font-normal leading-[130%] mb-4 sm:mb-9"><span class="font-medium text-test-prep sm:mx-1 block sm:inline-block">Skills, Research and Higher Education:</span> University of Dundee</h2>
        <div class="grid grid-cols-1 grid-rows-[4fr_1fr] sm:grid-rows-1 sm:grid-cols-[2fr_0.45fr] gap-4 sm:gap-12 w-full">
            <div class="grid grid-cols-2 gap-4 sm:gap-12">
                <div class=" order-2 sm:order-1 h-full relative rounded-[10px] sm:rounded-[22px] overflow-hidden">
                    <img alt="University image" loading="lazy" decoding="async" data-nimg="fill" class=" object-cover" sizes="100vw" src="public/assets/images/single_uni/dundee/UniversityDundeeOthers(1).webp" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                </div>
                <div class="order-1 sm:order-2 grid grid-rows-1 sm:grid-rows-[2fr_0.50fr] sm:gap-7">
                    <div class="grid grid-rows-[0.45fr_2fr] sm:grid-rows-1 gap-3 h-full relative">
                        <div class=" relative sm:absolute bg-white rounded-lg sm:rounded-[23px] w-full sm:w-[166px] sm:h-[158px] z-10 sm:-left-28 sm:top-32 p-4 sm:p-5 flex flex-row-reverse sm:flex-col justify-between sm:justify-center items-center">
                            <div class="flex flex-col"><span class="text-[13px] sm:text-[28px] font-semibold text-primary">16K+</span><span class=" text-[13px] sm:text-lg text-[#222222] sm:mb-3">Students</span></div>
                            <img alt="avatarImage" loading="lazy" width="76" height="36" decoding="async" data-nimg="1" src="public/assets/images/single_uni/dundee/avatarImage.webp" style="color: transparent;">
                        </div>
                        <div>
                            <img alt="University image" loading="lazy" decoding="async" data-nimg="fill" class=" object-cover rounded-[7px] sm:rounded-[22px] !relative sm:absolute" sizes="100vw" src="public/assets/images/single_uni/dundee/UniversityDundeeOthers(2).webp" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                        </div>
                    </div>
                    <div class="flex flex-col justify-around">
                        <p class="text-[#1F2022] text-base mb-6">When you are ambitious about joining the University of Dundee from the next academic session, you must check the admission requirements and process details to get prepared with a well-planned application format.</p>
                        <div class="flex items-center justify-between gap-6"><a class="bg-primary text-white text-[15px] border-2 border-primary px-3 sm:px-5 py-3 flex items-center justify-center w-[60%] rounded-[14px] gap-2 transition-all ease-in-out duration-300 hover:scale-[1.05] font-semibold" href="/">Book a Free Session
                                <img alt="Right arrow" loading="lazy" width="25" height="25" decoding="async" data-nimg="1" src="public/assets/images/single_uni/dundee/rightArrow.webp" style="color: transparent;"></a><button class="z-0 group relative box-border appearance-none select-none whitespace-nowrap subpixel-antialiased overflow-hidden tap-highlight-transparent data-[pressed=true]:scale-[0.97] outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 min-w-20 [&amp;&gt;svg]:max-w-[theme(spacing.8)] transition-transform-colors-opacity motion-reduce:transition-none data-[hover=true]:opacity-hover bg-white text-primary text-[15px] border-2 border-[#066AC91A] px-5 py-3 flex items-center justify-center w-1/2 rounded-[14px] gap-2 transition-all ease-in-out duration-300 hover:scale-[1.05] font-semibold h-auto" type="button">Explore Gallery</button></div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-4 sm:grid-cols-1 sm:grid-rows-4 gap-3 sm:gap-9">
                <div class=" bg-white rounded-lg sm:rounded-3xl w-full h-full flex flex-col justify-center sm:items-center gap-[5px] sm:gap-2 px-2 py-2.5 sm:p-7"><span class="text-[#0540F2] text-base text-left sm:text-center sm:text-3xl font-semibold">1881</span><span class="text-[#222222] text-xs sm:text-lg">Established</span></div>
                <div class=" bg-white rounded-lg sm:rounded-3xl w-full h-full flex flex-col justify-center sm:items-center gap-[5px] sm:gap-2 px-2 py-2.5 sm:p-7"><span class="text-[#0540F2] text-base text-left sm:text-center sm:text-3xl font-semibold">2K+</span><span class="text-[#222222] text-xs sm:text-lg">International students</span></div>
                <div class=" bg-white rounded-lg sm:rounded-3xl w-full h-full flex flex-col justify-center sm:items-center gap-[5px] sm:gap-2 px-2 py-2.5 sm:p-7"><span class="text-[#0540F2] text-base text-left sm:text-center sm:text-3xl font-semibold">441</span><span class="text-[#222222] text-xs sm:text-lg">QS Rankings</span></div>
                <div class=" bg-white rounded-lg sm:rounded-3xl w-full h-full flex flex-col justify-center sm:items-center gap-[5px] sm:gap-2 px-2 py-2.5 sm:p-7"><span class="text-[#0540F2] text-base text-left sm:text-center sm:text-3xl font-semibold">1</span><span class="text-[#222222] text-xs sm:text-lg">Total Campuses</span></div>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="bg-gradient-to-r from-[rgba(7,111,210,0.5)] to-[rgba(187,218,248,0.5)] rounded-xl sm:rounded-[20px] p-[6px] sm:p-[10px]">
            <div class="bg-gradient-to-r from-[#055AAB] to-[#699FD2] rounded-[10px] sm:rounded-xl shadow-[0px_0px_11.34px_0px_#00000059] relative overflow-hidden">
                <div class="w-full sm:w-3/5 px-4 sm:px-10 py-4 sm:py-8">
                    <h3 class=" text-sm sm:text-3xl font-medium text-white">Get Admission into top UK universities with the help of expert counsellors</h3>
                    <hr class="shrink-0 border-none w-full my-3 sm:my-6 opacity-20 bg-white h-[1.47px]" role="separator">
                    <div class=" w-fit sm:w-3/4 md:flex flex-col">
                        <p class="text-white text-sm sm:text-xl font-normal mb-2 md:mb-4">Save up-to ₹3 Lakhs with us!*</p><a class="relative z-10 md:w-fit rounded-[11px] hover:scale-[1.05] transition-all ease-in-out duration-300 block text-white text-sm sm:text-xl font-semibold px-4 sm:px-6 py-3 border border-[#FFFFFF8F] bg-gradient-to-r from-[rgba(255,255,255,0.16)] to-[rgba(255,255,255,0.13)] backdrop-blur-md" href="#">Discuss with Expert for FREE</a>
                    </div>
                </div>
                <figure class=" absolute top-0 right-0"><svg width="173" height="154" viewBox="0 0 173 154" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="110.187" cy="43.6803" r="109.587" fill="url(#paint0_linear_2070_4238)"></circle>
                        <defs>
                            <linearGradient id="paint0_linear_2070_4238" x1="0.599609" y1="43.6803" x2="219.774" y2="43.6803" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFDF00"></stop>
                                <stop offset="1" stop-color="#CC9900"></stop>
                            </linearGradient>
                        </defs>
                    </svg></figure>
                <div class="absolute top-0 right-0 p-4 pt-2">
                    <p class="text-[#1D2636] text-2xl font-semibold text-center"><span class="block uppercase">Feb 2026 </span> Intake</p><a class="relative z-10 mt-3 block bg-[#23BD33] text-white shadow-[0px_0px_14.71px_0px_#23BD33] px-3 py-2 text-[15px] font-bold rounded-lg hover:scale-[1.05] transition-all ease-in-out duration-300" href="/">OPEN NOW</a>
                </div>
                <img alt="Scholar Image" loading="lazy" width="530" height="310" decoding="async" data-nimg="1" class="absolute right-0 top-0 " src="public/assets/images/single_uni/dundee/schoarImage.webp" style="color: transparent;">
            </div>
        </div>
    </div>
    <div class="container my-10 sm:my-16">
        <div>
            <div class="rounded-2xl border border-[#C1C1C2] px-10 py-8 my-10">
                <table class="w-full">
                    <thead>
                        <tr>
                            <td class=" first:text-xl first:font-bold first:text-[#2B2B34]  capitalize text-[#8E8E93] text-sm font-medium py-2 pb-4 px-6">ELIGIBILITY</td>
                            <td class="capitalize text-[#8E8E93] text-sm font-medium py-2 pb-4 px-6">IFP</td>
                            <td class="capitalize text-[#8E8E93] text-sm font-medium py-2 pb-4 px-6">UNDERGRADUATE</td>
                            <td class="capitalize text-[#8E8E93] text-sm font-medium py-2 pb-4 px-6"> POSTGRADUATE</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class=" odd:bg-white">
                            <td class="first:text-[#8E8E93] first:text-[15px] first:font-bold py-2 px-6 text-[#2B2B34] text-base font-semibold first:rounded-l-[12px] last:rounded-r-[12px]">STANDARD</td>
                            <td class="first:text-[#8E8E93] first:text-[15px] first:font-bold py-2 px-6 text-[#2B2B34] text-base font-semibold first:rounded-l-[12px] last:rounded-r-[12px]">Grade 11 Standard (10+1)</td>
                            <td class="first:text-[#8E8E93] first:text-[15px] first:font-bold py-2 px-6 text-[#2B2B34] text-base font-semibold first:rounded-l-[12px] last:rounded-r-[12px]">Grade 12 Standard (10+2)</td>
                            <td class="first:text-[#8E8E93] first:text-[15px] first:font-bold py-2 px-6 text-[#2B2B34] text-base font-semibold first:rounded-l-[12px] last:rounded-r-[12px]">First class or upper second class</td>
                        </tr>
                        <tr class=" odd:bg-white">
                            <td class="first:text-[#8E8E93] first:text-[15px] first:font-bold py-2 px-6 text-[#2B2B34] text-base font-semibold first:rounded-l-[12px] last:rounded-r-[12px]">PERCENTAGE ACCEPTED </td>
                            <td class="first:text-[#8E8E93] first:text-[15px] first:font-bold py-2 px-6 text-[#2B2B34] text-base font-semibold first:rounded-l-[12px] last:rounded-r-[12px]">80 %</td>
                            <td class="first:text-[#8E8E93] first:text-[15px] first:font-bold py-2 px-6 text-[#2B2B34] text-base font-semibold first:rounded-l-[12px] last:rounded-r-[12px]">85 %</td>
                            <td class="first:text-[#8E8E93] first:text-[15px] first:font-bold py-2 px-6 text-[#2B2B34] text-base font-semibold first:rounded-l-[12px] last:rounded-r-[12px]">60-80 %</td>
                        </tr>
                        <tr class=" odd:bg-white">
                            <td class="first:text-[#8E8E93] first:text-[15px] first:font-bold py-2 px-6 text-[#2B2B34] text-base font-semibold first:rounded-l-[12px] last:rounded-r-[12px]">BOARDS ACCEPTED</td>
                            <td class="first:text-[#8E8E93] first:text-[15px] first:font-bold py-2 px-6 text-[#2B2B34] text-base font-semibold first:rounded-l-[12px] last:rounded-r-[12px]">All state boards</td>
                            <td class="first:text-[#8E8E93] first:text-[15px] first:font-bold py-2 px-6 text-[#2B2B34] text-base font-semibold first:rounded-l-[12px] last:rounded-r-[12px]">All state boards </td>
                            <td class="first:text-[#8E8E93] first:text-[15px] first:font-bold py-2 px-6 text-[#2B2B34] text-base font-semibold first:rounded-l-[12px] last:rounded-r-[12px]"> All state boards</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="rounded-2xl border border-[#C1C1C2] px-10 py-8 my-10">
                <table class="w-full">
                    <thead>
                        <tr>
                            <td class=" first:text-xl first:font-bold first:text-[#2B2B34]  capitalize text-[#8E8E93] text-sm font-medium py-2 pb-4 px-6">tests</td>
                            <td class="capitalize text-[#8E8E93] text-sm font-medium py-2 pb-4 px-6">undergraduate</td>
                            <td class="capitalize text-[#8E8E93] text-sm font-medium py-2 pb-4 px-6">Postgraduate</td>
                            <td class="capitalize text-[#8E8E93] text-sm font-medium py-2 pb-4 px-6"> PHD</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-white">
                            <td class="first:text-[#8E8E93] first:text-[15px] first:font-bold py-2 px-6 text-[#2B2B34] text-base font-semibold first:rounded-l-[12px] last:rounded-r-[12px]">IELTS</td>
                            <td class="first:text-[#8E8E93] first:text-[15px] first:font-bold py-2 px-6 text-[#2B2B34] text-base font-semibold first:rounded-l-[12px] last:rounded-r-[12px]">5.5</td>
                            <td class="first:text-[#8E8E93] first:text-[15px] first:font-bold py-2 px-6 text-[#2B2B34] text-base font-semibold first:rounded-l-[12px] last:rounded-r-[12px]">6.0</td>
                            <td class="first:text-[#8E8E93] first:text-[15px] first:font-bold py-2 px-6 text-[#2B2B34] text-base font-semibold first:rounded-l-[12px] last:rounded-r-[12px]">6.0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="my-5 sm:my-8  container">
        <style>
            .pulse-animation {
                animation: pulse-shadow 2s infinite
            }

            @keyframes pulse-shadow {
                0% {
                    -moz-box-shadow: 0 0 0 0 rgb(0, 106, 201, 0.4);
                    box-shadow: 0 0 0 0 rgb(0, 106, 201, 0.4);
                }

                70% {
                    -moz-box-shadow: 0 0 0 10px rgb(0, 106, 201, 0);
                    box-shadow: 0 0 0 10px rgb(0, 106, 201, 0);
                }

                100% {
                    -moz-box-shadow: 0 0 0 0 rgb(0, 106, 201, 0);
                    box-shadow: 0 0 0 0 rgb(0, 106, 201, 0);
                }
            }
        </style>
        <div class=" flex flex-wrap justify-start overflow-scroll gap-10 scrollbar-hide pb-10">
            <div class="w-72 p-3 md:p-6 shrink-0 grid bg-white rounded-xl hover:shadow-[0px_0px_30px_0px_#5E5E5E21] relative">
                <p class="text-xl font-semibold text-[#444446]">Scholarships</p>
                <p class="text-base font-medium text-[#87898C] mb-2">University Scholarship</p><a class="flex items-center gap-1.5 text-sm font-semibold mb-1.5 after:absolute after:top-0 after:bottom-0 after:right-0 after:left-0 after:z-20 after:content[''] after:h-3/5 " href="#">
                    <p class="text-[#F2AE29] ">From 50% to 100%</p>
                </a>
                <div class="bg-gradient-to-r from-[#00559C] to-[#3CA5D8] py-2.5 px-2 md:px-3.5 rounded-lg -mx-3 -mb-2">
                    <p class="text-white text-sm font-medium mb-2">Get Gradding’s Scholarship Worth</p>
                    <div class="flex items-center justify-between">
                        <p class="text-white text-lg font-bold drop-shadow-[0px_0px_4px_0px_#FFFFFF99]">₹25,000</p>
                        <div booksession="true" href="/study-in-uk/universities/university-of-dundee/#" class="bg-white rounded-md text-primary px-6 py-1.5 h-auto cursor-pointer" title="">Claim Now</div>
                    </div>
                </div>
                <img alt="Scholarships Image" loading="lazy" width="74" height="19" decoding="async" data-nimg="1" class="absolute top-2.5 right-2.5 z-10 rounded-br-xl" src="public/assets/images/single_uni/dundee/scholarshipBatch.webp" style="color: transparent;">
            </div>
            <div class="w-72 p-3 md:p-6 shrink-0 grid bg-white rounded-xl hover:shadow-[0px_0px_30px_0px_#5E5E5E21] relative">
                <p class="text-xl font-semibold text-[#444446]">Admissions</p>
                <p class="text-base font-medium text-[#87898C] mb-2">Minimum Requirements</p>
                <div class="flex items-center gap-1.5 text-sm font-semibold mb-1.5 flex-wrap sm:w-3/4">
                    <p class="text-[#B2B2BC]">Exams</p>
                    <p class="text-[#D09635]">IELTS, TOEFL, PTE</p>
                </div>
                <img alt="Admissions Image" loading="lazy" width="91" height="121" decoding="async" data-nimg="1" class="absolute bottom-0 right-0 z-10 rounded-br-xl" src="public/assets/images/single_uni/dundee/admission.webp" style="color: transparent;">
            </div>
            <div class="w-72 p-3 md:p-6 shrink-0 grid bg-white rounded-xl hover:shadow-[0px_0px_30px_0px_#5E5E5E21] relative">
                <p class="text-xl font-semibold text-[#444446]">Acceptance Rate</p>
                <p class="text-base font-medium text-[#87898C] mb-2">Student Acceptance Rate</p>
                <div class="flex items-center gap-1.5 text-sm font-semibold mb-1.5 flex-wrap sm:w-3/4">
                    <p class="text-[#B2B2BC]">Total Students</p>
                    <p class="text-[#5679E3]">15915</p>
                </div>
                <div class="flex items-center gap-1.5 text-sm font-semibold mb-1.5 flex-wrap sm:w-3/4">
                    <p class="text-[#B2B2BC]">International Student</p>
                    <p class="text-[#5679E3]">13%</p>
                </div>
                <img alt="Acceptance Rate Image" loading="lazy" width="93" height="86" decoding="async" data-nimg="1" class="absolute bottom-0 right-0 z-10 rounded-br-xl" src="public/assets/images/single_uni/dundee/acceptance.webp" style="color: transparent;">
            </div>
            <div class="w-72 p-3 md:p-6 shrink-0 grid bg-white rounded-xl hover:shadow-[0px_0px_30px_0px_#5E5E5E21] relative">
                <p class="text-xl font-semibold text-[#444446]">Ranking</p>
                <p class="text-base font-medium text-[#87898C] mb-2">Rankings by various bodies</p>
                <div class="flex items-center gap-1.5 text-sm font-semibold mb-1.5 flex-wrap sm:w-3/4">
                    <p class="text-[#B2B2BC]">Qs Ranking</p>
                    <p class="text-[#5679E3]">441</p>
                </div>
                <div class="flex items-center gap-1.5 text-sm font-semibold mb-1.5 flex-wrap sm:w-3/4">
                    <p class="text-[#B2B2BC]">ARWU</p>
                    <p class="text-[#5679E3]">301-400</p>
                </div>
                <img alt="Ranking Image" loading="lazy" width="93" height="86" decoding="async" data-nimg="1" class="absolute bottom-0 right-0 z-10 rounded-br-xl" src="public/assets/images/single_uni/dundee/ranking.webp" style="color: transparent;">
            </div>
            <div class="w-72 p-3 md:p-6 shrink-0 grid bg-white rounded-xl hover:shadow-[0px_0px_30px_0px_#5E5E5E21] relative">
                <p class="text-xl font-semibold text-[#444446]">Courses</p>
                <p class="text-base font-medium text-[#87898C] mb-2">Various courses offered</p>
                <div class="flex items-center gap-1.5 text-sm font-semibold mb-1.5 flex-wrap sm:w-3/4">
                    <p class="text-[#B2B2BC]">Bachelors</p>
                    <p class="text-[#5679E3]">194</p>
                </div>
                <div class="flex items-center gap-1.5 text-sm font-semibold mb-1.5 flex-wrap sm:w-3/4">
                    <p class="text-[#B2B2BC]">Masters</p>
                    <p class="text-[#5679E3]">60</p>
                </div>
                <img alt="Courses Image" loading="lazy" width="93" height="86" decoding="async" data-nimg="1" class="absolute bottom-0 right-0 z-10 rounded-br-xl" src="public/assets/images/single_uni/dundee/coursesTab.webp" style="color: transparent;">
            </div>
            <div class="pulse-animation w-full sm:w-72 bg-[linear-gradient(134.39deg,_#2A5887_31.16%,_#060F23_90.13%)] rounded-2xl border-[1.32px] border-[#0096D8] p-5 h-auto shadow-[0px_9.66px_54.42px_0px_#15A9EA33,-10.53px_10.53px_23.52px_0px_#00000021_inset] backdrop-blur-[22px]">
                <div class="flex flex-col gap-3">
                    <div class="flex items-center justify-between"><span class="text-[15px] text-white font-bold capitalize">intake</span>
                        <span class="text-[15px] text-white font-bold capitalize">status</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class=" text-base text-white font-medium capitalize">JUN 2025</span>
                        <span class="text-center w-16 px-2 py-[6px] rounded-md text-xs text-white bg-[#E31837] shadow-[0px_0px_11.48px_0px_#E31837] drop-shadow-[0px_0px_11.48px_0px_#FFFFFF] font-bold capitalize">CLOSED</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class=" text-base text-white font-medium capitalize">SEP 2025</span>
                        <span class=" text-center w-16 px-2 py-[6px] rounded-md text-xs text-white bg-[#23BD33] shadow-[0px_0px_11.48px_0px_#23BD33] drop-shadow-[0px_0px_11.48px_0px_#FFFFFF] font-bold capitalize">OPEN</span>
                    </div>
                    <a class="mt-2 w-full bg-[#15A9EA] text-white p-[10px] rounded-[9px] flex justify-center items-center border-[0.88px] border-[#FFFFFF33] shadow-[0px_3.51px_21.94px_0px_#0096D873,0px_3.51px_3.51px_0px_#FFFFFF40_inset] text-base font-bold" href="https://www.gradding.com/course-finder?universityId=2">Apply Now</a>
                </div>
            </div>
        </div>
    </div>

    <?= $this->include('web/components/blogs_slider.php') ?>

    <style>
        table {
            margin-bottom: 10px;
            border-radius: 8px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            background: #ffffff;

            ul {
                text-align-last: left;

                li {
                    text-align: left;
                }
            }

            border-collapse: collapse;
            width: 100%;
            text-align: center;

            thead {
                background: #f5f7f9;
                border-radius: 8px 8px 8px 0px;

                th {
                    padding: 25px;
                    color: #24292d;
                    font-size: 15px;
                    line-height: 22px;
                    text-transform: uppercase;
                    font-weight: normal;

                    &:first-child {
                        border-radius: 8px 0 0 8px;
                        text-align: left;
                    }

                    &:last-child {
                        border-radius: 0 8px 8px 0;
                    }
                }
            }

            tbody {
                tr {
                    border-radius: 8px 8px 8px 0px;
                    border-bottom: 1px solid rgba(0, 0, 0, 0.1);

                    td {
                        padding: 25px;
                        color: #24292d;
                        font-size: 15px;
                        line-height: 18px;
                        text-align: center;
                        vertical-align: top;

                        &:first-child {
                            background: #f5f7f9;
                            text-transform: uppercase;

                            text-align: left;
                        }
                    }

                    &.t-left {
                        td {
                            text-align: left;
                        }
                    }
                }

                tr {
                    &:nth-last-of-type(1) {
                        border-bottom: none;
                        border-radius: 0 0 8px 0;

                        td {
                            &:first-child {
                                border-radius: 0 0 8px 8px;
                            }
                        }
                    }
                }
            }
        }
    </style>
    <div class="container my-12 lg:my-24 lg:w-2/3">
        <h2 class=" text-2xl lg:text-[28px] xl:text-3xl 2xl:text-[34px] font-normal text-center mb-5">Frequently Asked <span class="text-test-prep font-medium block sm:inline-block"> Questions</span></h2>
        <div class="px-2">
            <div class="border-b-1 border-[#DCDCDC]">
                <div class="flex gap-3 py-2 md:py-4 items-center cursor-pointer"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Is There Any Application Fee for the University of Dundee?</span>
                    <div class="relative size-3 flex items-center justify-center"><span class="rotate-0 opacity-100 duration-400 absolute"><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                            </svg></span><span class="rotate-90 opacity-0 duration-400 absolute"><svg width="11" height="3" viewBox="0 0 11 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10.9" y="0.728577" width="1.54286" height="10.8" transform="rotate(90 10.9 0.728577)" fill="#6E6E73"></rect>
                            </svg></span></div>
                </div>
                <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                    <div class="overflow-hidden text-sm xl:text-base [&amp;&gt;ul]:list-disc [&amp;&gt;ul]:pl-8 [&amp;&gt;ul]:list-insidep">
                        <p>Applicants must pay the UCAS Application Fee of GBP 22 for a single course and GBP 26.50 for more than one course.</p>
                    </div>
                </div>
            </div>
            <div class="border-b-1 border-[#DCDCDC]">
                <div class="flex gap-3 py-2 md:py-4 items-center cursor-pointer"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">What Is the Acceptance Rate at the University of Dundee?</span>
                    <div class="relative size-3 flex items-center justify-center"><span class="rotate-0 opacity-100 duration-400 absolute"><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                            </svg></span><span class="rotate-90 opacity-0 duration-400 absolute"><svg width="11" height="3" viewBox="0 0 11 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10.9" y="0.728577" width="1.54286" height="10.8" transform="rotate(90 10.9 0.728577)" fill="#6E6E73"></rect>
                            </svg></span></div>
                </div>
                <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                    <div class="overflow-hidden text-sm xl:text-base [&amp;&gt;ul]:list-disc [&amp;&gt;ul]:pl-8 [&amp;&gt;ul]:list-insidep">
                        <p>The acceptance rate at the University of Dundee is nearly 36% which is quite promising to international applicants.</p>
                    </div>
                </div>
            </div>
            <div class="border-b-1 border-[#DCDCDC]">
                <div class="flex gap-3 py-2 md:py-4 items-center cursor-pointer"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">What Is the Minimum IELTS Score Requirement for Dundee University?</span>
                    <div class="relative size-3 flex items-center justify-center"><span class="rotate-0 opacity-100 duration-400 absolute"><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                            </svg></span><span class="rotate-90 opacity-0 duration-400 absolute"><svg width="11" height="3" viewBox="0 0 11 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10.9" y="0.728577" width="1.54286" height="10.8" transform="rotate(90 10.9 0.728577)" fill="#6E6E73"></rect>
                            </svg></span></div>
                </div>
                <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                    <div class="overflow-hidden text-sm xl:text-base [&amp;&gt;ul]:list-disc [&amp;&gt;ul]:pl-8 [&amp;&gt;ul]:list-insidep">
                        <p>For undergraduate courses, it is a minimum of 6.0 and a minimum of 6.5 for postgraduate courses.&nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="border-b-1 border-[#DCDCDC]">
                <div class="flex gap-3 py-2 md:py-4 items-center cursor-pointer"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">How is Dundee University's employment record?</span>
                    <div class="relative size-3 flex items-center justify-center"><span class="rotate-0 opacity-100 duration-400 absolute"><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                            </svg></span><span class="rotate-90 opacity-0 duration-400 absolute"><svg width="11" height="3" viewBox="0 0 11 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10.9" y="0.728577" width="1.54286" height="10.8" transform="rotate(90 10.9 0.728577)" fill="#6E6E73"></rect>
                            </svg></span></div>
                </div>
                <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                    <div class="overflow-hidden text-sm xl:text-base [&amp;&gt;ul]:list-disc [&amp;&gt;ul]:pl-8 [&amp;&gt;ul]:list-insidep">
                        <p>The University of Dundee showcases a massive employment record for the past several years, which is always very high. As a result, the university topped Scotland for graduate prospects per Complete University Guide 2022. &nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="border-b-1 border-[#DCDCDC]">
                <div class="flex gap-3 py-2 md:py-4 items-center cursor-pointer"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Is It Expensive to Study at the University of Dundee?</span>
                    <div class="relative size-3 flex items-center justify-center"><span class="rotate-0 opacity-100 duration-400 absolute"><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                            </svg></span><span class="rotate-90 opacity-0 duration-400 absolute"><svg width="11" height="3" viewBox="0 0 11 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10.9" y="0.728577" width="1.54286" height="10.8" transform="rotate(90 10.9 0.728577)" fill="#6E6E73"></rect>
                            </svg></span></div>
                </div>
                <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                    <div class="overflow-hidden text-sm xl:text-base [&amp;&gt;ul]:list-disc [&amp;&gt;ul]:pl-8 [&amp;&gt;ul]:list-insidep">
                        <p>That depends on the course and area of living you are choosing. For example, the City of Dundee is known for its affordable living cost compared to other parts of the UK.&nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="border-b-1 border-[#DCDCDC]">
                <div class="flex gap-3 py-2 md:py-4 items-center cursor-pointer"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Is There Any Student Help Group to Assist International Students at Dundee University?</span>
                    <div class="relative size-3 flex items-center justify-center"><span class="rotate-0 opacity-100 duration-400 absolute"><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                            </svg></span><span class="rotate-90 opacity-0 duration-400 absolute"><svg width="11" height="3" viewBox="0 0 11 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10.9" y="0.728577" width="1.54286" height="10.8" transform="rotate(90 10.9 0.728577)" fill="#6E6E73"></rect>
                            </svg></span></div>
                </div>
                <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                    <div class="overflow-hidden text-sm xl:text-base [&amp;&gt;ul]:list-disc [&amp;&gt;ul]:pl-8 [&amp;&gt;ul]:list-insidep">
                        <p>Many student support groups extend helping hands to international students studying at the university or willing to be admitted. Just visit the university's official site.&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "FAQPage",
                "mainEntity": [{
                    "@type": "Question",
                    "name": "Is There Any Application Fee for the University of Dundee?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<p>Applicants must pay the UCAS Application Fee of GBP 22 for a single course and GBP 26.50 for more than one course.</p>"
                    }
                }, {
                    "@type": "Question",
                    "name": "What Is the Acceptance Rate at the University of Dundee?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<p>The acceptance rate at the University of Dundee is nearly 36% which is quite promising to international applicants.</p>"
                    }
                }, {
                    "@type": "Question",
                    "name": "What Is the Minimum IELTS Score Requirement for Dundee University?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<p>For undergraduate courses, it is a minimum of 6.0 and a minimum of 6.5 for postgraduate courses.&nbsp;</p>"
                    }
                }, {
                    "@type": "Question",
                    "name": "How is Dundee University's employment record?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<p>The University of Dundee showcases a massive employment record for the past several years, which is always very high. As a result, the university topped Scotland for graduate prospects per Complete University Guide 2022. &nbsp;</p>"
                    }
                }, {
                    "@type": "Question",
                    "name": "Is It Expensive to Study at the University of Dundee?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<p>That depends on the course and area of living you are choosing. For example, the City of Dundee is known for its affordable living cost compared to other parts of the UK.&nbsp;</p>"
                    }
                }, {
                    "@type": "Question",
                    "name": "Is There Any Student Help Group to Assist International Students at Dundee University?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<p>Many student support groups extend helping hands to international students studying at the university or willing to be admitted. Just visit the university's official site.&nbsp;</p>"
                    }
                }]
            }
        </script>
    </div>
</div>

<?= $this->endSection() ?>