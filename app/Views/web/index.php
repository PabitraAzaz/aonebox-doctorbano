<?= $this->extend('web/components/assemble') ?>

<?= $this->section('content') ?>

<!-- Banner Section Start -->
<div class="container mb-12 mt-0 sm:my-20 relative scroll-smooth z-40">
    <div class="z-20 absolute left-0 right-0 top-0 bottom-0 m-auto flex items-center justify-center w-full sm:w-fit">
        <div class="mr-16 relative">
            <img alt="globe" fetchPriority="high" width="540" height="479" decoding="async"
                class="animate-slowspin" style="color:transparent"
                src="<?= base_url('public/') ?>assets/images/banner/globe.png"/>
            <a class="cursor-pointer m-auto h-fit p-4 rounded-xl flex items-center justify-center min-w-[85%] w-[100%] sm:min-w-fit sm:w-1/2 absolute right-0 left-0 top-[85%] sm:top-0 bottom-0 gap-1 bg-white border-primary data-[hover=true]:shadow-[0px_0px_13.11px_0px_#066AC9]"
                href="https://www.doctorbano.com/">
                <div class="flex items-center gap-2">
                    <span class="text-primary text-base font-bold">Plan Your Journey Now</span>
                    <span class="inline-block">
                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.33645 13.0228C8.07294 13.2858 7.64603 13.2853 7.38305 13.0218C7.1199 12.7582 7.12044 12.3312 7.38413 12.0682L10.0334 9.42581L7.38422 6.78432C7.12044 6.52131 7.11999 6.09425 7.38314 5.83062C7.64612 5.56712 8.07285 5.56666 8.33645 5.82958L11.8138 9.29855C11.8843 9.36883 11.8843 9.48279 11.8139 9.55307L8.33645 13.0228ZM9.15351 0.662964C4.32177 0.662964 0.390625 4.59411 0.390625 9.42581C0.390625 14.2575 4.32177 18.1887 9.15351 18.1887C13.9852 18.1887 17.9164 14.2575 17.9164 9.42581C17.9164 4.59411 13.9852 0.662964 9.15351 0.662964Z"
                                fill="#066AC9"></path>
                        </svg>
                    </span>
                </div>
            </a>
        </div>
    </div>

    <div class="min-h-[280px] sm:min-h-[480px] flex items-center justify-center ">
        <div class="h-full flex flex-col items-start gap-2 w-full justify-between sm:justify-normal">
            <div class="sm:m-0 -mt-32 w-fit py-1 px-3.5 rounded-2xl bg-[linear-gradient(92.91deg,_rgba(27,169,188,0.15)_-0.48%,_rgba(41,102,193,0.15)_98.9%)]">
                <p class="text-base font-semibold capitalize bg-clip-text text-transparent bg-[linear-gradient(92.91deg,_#1BA9BC_-0.48%,_#2966C1_98.9%)]">
                    100% Guaranteed Scholarship
                </p>
            </div>
            <div class="flex flex-col items-end w-full">
                <h1 class="w-full sm:text-[125px] 2xl:text-[150px] tracking-tighter capitalize font-semibold pb-2 relative flex items-center justify-between gap-4 sm:gap-0 bg-clip-text text-transparent bg-[linear-gradient(107.12deg,_#055AAB_4.81%,_#BFE0FF_96.97%)]">
                    <span class="inline-block">Study</span><br>
                    <span class="inline-block opacity-0 line-clamp-1 h-2">Study....</span>
                    <span class="inline-block">Abroad</span>
                </h1>
                <h1 class="w-full sm:text-[125px] 2xl:text-[150px] tracking-tighter capitalize font-semibold pb-2 relative flex items-center justify-between gap-4 sm:gap-0 bg-clip-text text-transparent bg-[linear-gradient(107.12deg,_#055AAB_4.81%,_#BFE0FF_96.97%)]">
                    <span class="inline-block">MBBS</span><br>
                    <p class="text-[#a0bee5] text-[70px] font-medium mb-5">made easy</p>
                </h1>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- Counter Section Start -->
<section class="container my-12 sm:my-24">
    <!-- Flex container for all counter cards -->
    <div class="flex gap-3 sm:gap-8 justify-center flex-wrap sm:flex-nowrap">

        <!-- Counter Card 1: Years of Expertise -->
        <div class="flex flex-col w-[45%] sm:w-1/4 sm:gap-12 items-start border-1 border-[#B3B3B3] rounded-xl sm:rounded-3xl p-3 sm:p-4 2xl:p-6 pt-2.5">
            <div class="text-[51px] sm:text-[70px] text-[#1F2022] font-semibold">12+</div>
            <p class="text-sm sm:text-[15px] 2xl:text-base text-[#1F2022] font-light capitalize">
                Years of Expertise
            </p>
        </div>

        <!-- Counter Card 2: Countries Served -->
        <div class="flex flex-col w-[45%] sm:w-1/4 sm:gap-12 items-start border-1 border-[#B3B3B3] rounded-xl sm:rounded-3xl p-3 sm:p-4 2xl:p-6 pt-2.5">
            <div class="text-[51px] sm:text-[70px] text-[#1F2022] font-semibold">25+</div>
            <p class="text-sm sm:text-[15px] 2xl:text-base text-[#1F2022] font-light capitalize">
                Countries Served
            </p>
        </div>

        <!-- Counter Card 3: Qualified Professionalss -->
        <div class="flex flex-col w-[45%] sm:w-1/4 sm:gap-12 items-start border-1 border-[#B3B3B3] rounded-xl sm:rounded-3xl p-3 sm:p-4 2xl:p-6 pt-2.5">
            <div class="text-[51px] sm:text-[70px] text-[#1F2022] font-semibold">50+</div>
            <p class="text-sm sm:text-[15px] 2xl:text-base text-[#1F2022] font-light capitalize">
                Qualified Professionals
            </p>
        </div>

        <!-- Counter Card 4: Successful Graduates -->
        <div class="flex flex-col w-[45%] sm:w-1/4 sm:gap-12 items-start border-1 border-[#B3B3B3] rounded-xl sm:rounded-3xl p-3 sm:p-4 2xl:p-6 pt-2.5 overflow-hidden">
            <div class="text-[51px] sm:text-[70px] text-[#1F2022] font-semibold">10k+</div>
            <p class="text-sm sm:text-[15px] 2xl:text-base text-[#1F2022] font-light capitalize">
                Successful Graduates
            </p>
        </div>

    </div>
</section>
<!-- Counter Section End -->

<!-- Empower & Trust Section with W3 Animation -->
<section class="container my-20">
    <!-- Top Card -->
    <div class="flex justify-center pr-20">
        <div class="observer-target relative w-[450px] h-[300px] rounded-2xl overflow-hidden" data-animate="slideInBottom">
            <!-- Background Image -->
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?= base_url('public/') ?>assets/images/university/Kazan-Federal-Medical-University.png');"></div>

            <!-- Text Overlay Box -->
            <div class="absolute bottom-4 left-0 right-0 mx-4 bg-white/40 backdrop-blur-sm rounded-md px-4 py-3 text-center">
                <p class="text-sm font-medium text-[#1F2022]">Student Counseling at Head Office</p>
            </div>
        </div>
    </div>


    <!-- Middle Cards Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 items-center"> <!-- gap removed -->
        <!-- Left Card -->
        <div class="observer-target relative w-[320px] h-[400px] rounded-2xl overflow-hidden shadow-md mx-auto pb-20" data-animate="slideInRight">
            <!-- Background Image -->
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?= base_url('public/') ?>assets/images/university/Kazan-State-Medical-Academy.png');"></div>

            <!-- Optional: Soft overlay for readability -->
            <div class="absolute inset-0 bg-gradient-to-t from-white/80 via-white/60 to-transparent"></div>

            <!-- Content Block -->
            <div class="absolute bottom-4 left-4 right-4 bg-white rounded-xl p-4 shadow-lg">
                <p class="text-xs text-gray-500 mb-1">📍 ICEF Certification • Germany</p>
                <p class="text-sm font-medium text-[#1F2022] mb-3">Certified by ICEF as official trained Counsellors Globally</p>
                <a href="#"
                    class="bg-gray-100 hover:bg-primary hover:text-white transition-all duration-200 text-sm text-primary font-semibold px-4 py-2 rounded-md inline-flex items-center justify-between w-full">
                    Book FREE Consultation
                    <span class="ml-auto pl-2">→</span>
                </a>
            </div>
        </div>

        <!-- Center CTA Block (no border or shadow) -->
        <div class="backdrop-blur-md text-center rounded-2xl p-6 lg:p-10">
            <h3 class="text-2xl font-semibold text-[#1F2022] mb-4 leading-snug">
                Empower your <span class="text-[#066AC9]">dream of studying abroad</span> with Doctor Bano!
            </h3>
            <p class="text-sm text-[#6E6E73] mb-6">
                With over 20K students served, Doctor Bano provides the expertise and services to make your study abroad experience hassle-free.
            </p>
            <a href="https://web.gradding.com/start-journey"
                class="bg-[#E3EEFE] hover:bg-[#066AC9] hover:text-white text-[#066AC9] font-semibold text-sm px-6 py-2 rounded-full transition-all inline-flex items-center justify-center gap-2">
                FREE Call with Expert
                <svg width="16" height="16" fill="currentColor" class="inline-block">
                    <path d="M5 3l5 5-5 5" />
                </svg>
            </a>
        </div>

        <!-- Right Card -->
        <div class="observer-target relative w-[320px] h-[400px] rounded-2xl overflow-hidden shadow-md mx-auto pt-20" data-animate="slideInLeft">
            <!-- Background Image -->
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?= base_url('public/') ?>assets/images/university/Tver-State-Medical-University.png');"></div>

            <!-- Gradient overlay (optional for readability) -->
            <div class="absolute inset-0 bg-gradient-to-t from-white/80 via-white/60 to-transparent"></div>

            <!-- Content Card -->
            <div class="absolute bottom-4 left-4 right-4 bg-white rounded-xl p-4 shadow-lg">
                <p class="text-xs text-gray-500 mb-1">🏆 Student Awards • UK</p>
                <p class="text-sm font-medium text-[#1F2022] mb-3">Awarded as Best Study Abroad Consultants for 2024</p>
                <a href="#"
                    class="bg-gray-100 hover:bg-primary hover:text-white transition-all duration-200 text-sm text-primary font-semibold px-4 py-2 rounded-md inline-flex items-center justify-between w-full">
                    Book FREE Consultation
                    <span class="ml-auto pl-2">→</span>
                </a>
            </div>
        </div>

    </div>

    <!-- Bottom Card -->
    <div class="flex justify-center pl-20"> <!-- bottom-right padding -->
        <div class="observer-target relative w-[450px] h-[300px] rounded-2xl overflow-hidden" data-animate="slideInTop">
            <!-- Background Image -->
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?= base_url('public/') ?>assets/images/university/Bashkir-State-University.png');"></div>

            <!-- Transparent Text Overlay -->
            <div class="absolute bottom-4 left-0 right-0 mx-4 bg-white/40 backdrop-blur-sm rounded-md px-4 py-3 text-center">
                <p class="text-sm font-medium text-[#1F2022]">Student Counseling at Head Office</p>
            </div>
        </div>
    </div>

</section>

<script>
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const animationClass = 'animate-' + entry.target.dataset.animate;
                entry.target.classList.add(animationClass);
                entry.target.classList.remove('opacity-0');
                observer.unobserve(entry.target); // animate only once
            }
        });
    }, observerOptions);

    document.querySelectorAll('.observer-target').forEach(el => {
        observer.observe(el);
    });
</script>

<!-- Study Abroad Video Section | Video Left + CTA -->
<div class="container my-12 sm:my-24">
    <div class="bg-white rounded-[21px] shadow-[inset_0_0_31.6px_0px_rgba(0,0,0,0.2)] sm:pr-16 flex flex-col-reverse sm:flex-row items-center gap-5 sm:gap-14 justify-center overflow-hidden relative">

        <!-- Video Section with Border (Top, Left, Right) -->
        <div class="w-[90%] sm:w-3/5 relative sm:rounded-t-3xl sm:px-16 sm:pt-16 overflow-hidden sm:[overflow:unset]">

            <!-- Border wrapper -->
            <div class="relative bg-black pt-[15px] px-[15px] rounded-t-[30px]">

                <!-- Video inside black border -->
                <video autoplay loop playsinline muted class="w-full rounded-t-[15px] relative z-10">
                    <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>

                <!-- ▶️ Play Icon Overlay -->
                <div class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center pointer-events-none z-20">
                    <div class="w-14 h-14 rounded-full backdrop-blur-[7px] bg-white/50 flex items-center justify-center">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="56" height="56" rx="28" fill="white" fill-opacity="0.5" />
                            <g clip-path="url(#clip0)">
                                <g filter="url(#filter0_d)">
                                    <path d="M21 22.3076V34.6941C21 37.231 23.8601 38.8229 26.1428 37.5545L31.7154 34.4611L37.288 31.3548C39.5707 30.0864 39.5707 26.9153 37.288 25.6469L31.7154 22.5406L26.1428 19.4472C23.8601 18.1788 21 19.7578 21 22.3076Z" fill="white" />
                                </g>
                            </g>
                            <defs>
                                <filter id="filter0_d" x="12" y="10" width="36" height="37" filterUnits="userSpaceOnUse">
                                    <feGaussianBlur stdDeviation="4.5" />
                                </filter>
                                <clipPath id="clip0">
                                    <rect width="56" height="56" rx="15" fill="white" />
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
                <img src="<?=base_url('public/')?>assets/images/logo/university/universityLogoGroup.webp"
                    width="319" height="43" alt="University Logos" class="mt-2" loading="lazy" />
            </div>

            <!-- 📞 CTA Button -->
            <div booksession="true"
                class="w-full max-w-[85%] cursor-pointer bg-primary text-white text-sm border-2 border-primary px-2 py-2.5 hidden sm:flex items-center justify-center rounded-[14px] gap-1 transition-all ease-in-out duration-300 hover:scale-105 font-semibold"
                title="Request a Callback">
                Request a Callback
                <img src="<?= base_url('public/') ?>assets/images/icons/rightArrow.webp" width="25" height="25" alt="Right Arrow" loading="lazy" />
            </div>
        </div>
    </div>
</div>

<!-- Request a Callback -->
<div class="container my-12 sm:my-24">
    <div class="p-5 sm:p-14 rounded-xl sm:rounded-[34px] border border-[#B3B3B3]">
        <div class="grid grid-cols-5 gap-4 sm:gap-8">

            <!-- Left Text Column -->
            <div class="col-span-5 sm:col-span-2 flex flex-col justify-between gap-4">
                <h2 class="text-[22px] lg:text-3xl 2xl:text-[34px] font-normal leading-[130%]">
                    Doctorbano – Your
                    <span class="text-primary"> Gateway to Global Medical Education!</span>
                </h2>
                <div class="col-span-5 order-2 sm:order-3 sm:col-span-2 flex items-end">
                    <p class="text-[#1F2022] text-sm sm:text-base font-light">
                        Embark on a transformative journey towards a distinguished medical career with Doctorbano! We specialize in guiding aspiring medical professionals to study MBBS abroad, offering comprehensive resources and personalized support to navigate the high-competition landscape of global medical education.
                    </p>
                </div>
            </div>

            <!-- Info Cards -->
            <div class="order-3 sm:order-2 col-span-5 sm:col-span-3 grid grid-cols-4 gap-4">

                <!-- Card 1 -->
                <div class="service-card col-span-4 sm:col-span-2 bg-white rounded-2xl p-6 flex flex-col gap-4 transition-all duration-300 hover:shadow-lg hover:-translate-y-1 border border-transparent hover:border-primary">
                    <!-- Icon + Title -->
                    <div class="flex items-center gap-3">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-[#FFF4E6] text-[#FF8401] shrink-0 icon-animate">
                            <!-- Inline SVG globe (crisp & centered) -->
                            <svg viewBox="0 0 24 24" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="12" r="9"></circle>
                                <path d="M3 12h18"></path>
                                <path d="M12 3a15 15 0 0 1 0 18"></path>
                                <path d="M12 3a15 15 0 0 0 0 18"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-[#1F2022] leading-snug">
                            Study MBBS Abroad: Unlocking Opportunities Worldwide
                        </h3>
                    </div>
                    <!-- Paragraph -->
                    <p class="text-sm text-[#1F2022] font-light leading-relaxed">
                        Are you dreaming of pursuing MBBS in a renowned international university? Doctorbano is your trusted partner in making that dream a reality. Our platform is dedicated to providing you with up-to-date information, expert guidance, and a plethora of resources to facilitate your journey towards a world-class medical education.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="service-card col-span-4 sm:col-span-2 bg-white rounded-2xl p-6 flex flex-col gap-4 transition-all duration-300 hover:shadow-lg hover:-translate-y-1 border border-transparent hover:border-primary">
                    <!-- Icon + Title -->
                    <div class="flex items-center gap-3">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-[#FFF4E6] text-[#FF8401] text-2xl shrink-0 icon-animate">
                            <i class="bi bi-mortarboard-fill"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-[#1F2022] leading-snug">
                            Why Study MBBS Abroad?
                        </h3>
                    </div>
                    <!-- Paragraph -->
                    <p class="text-sm text-[#1F2022] font-light leading-relaxed">
                        The global landscape of medical education is evolving, and studying MBBS abroad presents a myriad of advantages. From exposure to diverse clinical practices to gaining a global perspective on healthcare, international medical programs open doors to unparalleled opportunities. Doctorbano empowers you with the knowledge and insights needed to make informed decisions about your academic future.
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Hover & Icon Animation -->
<style>
    .icon-animate {
        transition: transform 0.3s ease;
    }

    .service-card:hover .icon-animate {
        transform: scale(1.12) rotate(4deg);
    }
</style>


<!-- Who We Ares -->
<div class="container my-12 sm:my-24">
    <h2 class="px-3.5 sm:px-0 text-2xl lg:text-[28px] xl:text-3xl 2xl:text-[34px] font-normal leading-[130%] sm:text-center mb-8 sm:mb-12">
        <span class="font-medium text-primary">Who We</span> Are?
    </h2>
    <div class="overflow-hidden relative w-full home-lead-form-div border-1.5 border-[#B3B3B3] p-[14px] xl:p-[35px] rounded-[25px] h-fit">
        <form>
            <!-- ===== Who We Are Section ===== -->
            <div class="flex flex-col sm:flex-row items-center">
                <div class="w-full sm:w-2/3">
                    <div class="flex flex-col gap-3 lg:gap-10">

                        <!-- Title + Intro -->
                        <h4></h4>
                        <p class="text-lg sm:text-[15px]text-center sm:text-left">
                            At Doctorbano, we don’t just help you get into a university—we're right there with you on your path to becoming a doctor.
                            Established by Essqube Enterprises LLP on March 9, 2017, our goal is straightforward: guide you through every single step.
                        </p>

                        <!-- ===== Select Highlights ===== -->
                        <div class="flex flex-wrap justify-center gap-5">

                            <!-- Beyond Selection -->
                            <div class="w-[200px]">
                                <input id="UG" class="sr-only peer" type="radio" value="UG" checked name="course" onclick="showDescription('descUG')">
                                <label for="UG"
                                    class="group option-card inline-flex items-center justify-center w-full min-h-[104px] p-2 sm:p-[15px] text-heading bg-white border-2 border-transparent rounded-[11px] cursor-pointer
                        peer-checked:border-primary peer-checked:bg-primary/30 peer-checked:text-primary
                        lg:hover:text-primary lg:hover:bg-primary/30 lg:hover:border-primary
                        peer-checked:shadow-[0px_0px_24px_0px_#006ac94D] lg:hover:shadow-[0px_0px_24px_0px_#006ac94D]
                        peer-checked:font-medium select-none transition-all ease-in-out duration-300 text-center">
                                    <div class="flex flex-col items-center justify-center gap-1">
                                        <span class="icon text-[26px] sm:text-[30px] text-[#FF8401] leading-none">
                                            <i class="bi bi-airplane"></i>
                                        </span>
                                        <p class="w-full text-sm sm:text-base uppercase">Beyond Selection</p>
                                    </div>
                                </label>
                            </div>

                            <!-- Beyond Admission -->
                            <div class="w-[200px]">
                                <input id="PG" class="sr-only peer" type="radio" value="PG" name="course" onclick="showDescription('descPG')">
                                <label for="PG"
                                    class="group option-card inline-flex items-center justify-center w-full min-h-[104px] p-2 sm:p-[15px] text-heading bg-white border-2 border-transparent rounded-[11px] cursor-pointer
                        peer-checked:border-primary peer-checked:bg-primary/30 peer-checked:text-primary
                        lg:hover:text-primary lg:hover:bg-primary/30 lg:hover:border-primary
                        peer-checked:shadow-[0px_0px_24px_0px_#006ac94D] lg:hover:shadow-[0px_0px_24px_0px_#006ac94D]
                        peer-checked:font-medium select-none transition-all ease-in-out duration-300 text-center">
                                    <div class="flex flex-col items-center justify-center gap-1">
                                        <span class="icon text-[26px] sm:text-[30px] text-[#FF8401] leading-none">
                                            <i class="bi bi-mortarboard"></i>
                                        </span>
                                        <p class="w-full text-sm sm:text-base uppercase">Beyond Admission</p>
                                    </div>
                                </label>
                            </div>

                            <!-- Beyond Placement -->
                            <div class="w-[200px]">
                                <input id="PHD" class="sr-only peer" type="radio" value="PHD" name="course" onclick="showDescription('descPHD')">
                                <label for="PHD"
                                    class="group option-card inline-flex items-center justify-center w-full min-h-[104px] p-2 sm:p-[15px] text-heading bg-white border-2 border-transparent rounded-[11px] cursor-pointer
                        peer-checked:border-primary peer-checked:bg-primary/30 peer-checked:text-primary
                        lg:hover:text-primary lg:hover:bg-primary/30 lg:hover:border-primary
                        peer-checked:shadow-[0px_0px_24px_0px_#006ac94D] lg:hover:shadow-[0px_0px_24px_0px_#006ac94D]
                        peer-checked:font-medium select-none transition-all ease-in-out duration-300 text-center">
                                    <div class="flex flex-col items-center justify-center gap-1">
                                        <span class="icon text-[26px] sm:text-[30px] text-[#FF8401] leading-none">
                                            <i class="bi bi-hospital"></i>
                                        </span>
                                        <p class="w-full text-sm sm:text-base uppercase">Beyond Placement</p>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- ===== Dynamic Descriptions ===== -->
                        <div class="mt-4 text-sm text-gray-700 leading-relaxed">
                            <p id="descUG" class="hidden">
                                We totally get how daunting it can be to pick the right country, the right university, and the right program. That’s exactly why we’re here—to guide you through every step. Whether it’s MBBS in Russia, Kazakhstan, Bangladesh, Armenia, Georgia, Kyrgyzstan, China, the Philippines, Ukraine, or beyond—we’ll help you find the perfect fit.
                            </p>
                            <p id="descPG" class="hidden">
                                We’re not just about admissions—we build connections. Our relationships with top global medical universities open doors to opportunities, real-world exposure, and a strong foundation for your future.
                            </p>
                            <p id="descPHD" class="hidden">
                                We’ve built strong partnerships with leading medical institutions. These ties power reliable guidance and ensure students can tap the finest opportunities throughout their medical education journey.
                            </p>
                        </div>

                        <!-- CTA -->
                        <!-- <div class="flex justify-center sm:justify-start gap-2 sm:gap-5">
                            <button type="button"
                                class="py-2.5 px-2.5 sm:px-5 rounded-[10px] text-sm sm:text-base font-medium capitalize text-white bg-primary flex items-center gap-2 hover:bg-[#1a5cb0]">
                                Save &amp; Go Next
                                <span class="inline-block">
                                    <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.8125 1.3125L14.5625 6M14.5625 6L10.8125 10.6875M14.5625 6H1.4375"
                                            stroke="white" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </button>
                        </div> -->
                    </div>
                </div>

                <!-- Side Illustration -->
                <div class="hidden sm:flex sm:w-1/3 items-end justify-end">
                    <img alt="leadFormImage" loading="lazy" width="300" height="326" decoding="async"
                        class="-mb-[35px]" src="<?= base_url('public/') ?>assets/images/avatar/Home-Lead-Form.png" />
                </div>
            </div>

            <!-- Icon Animation -->
            <style>
                .option-card .icon {
                    transition: transform .25s ease, filter .25s ease;
                }

                .option-card:hover .icon {
                    animation: floatIcon 1.2s ease-in-out infinite;
                }

                @keyframes floatIcon {
                    0% {
                        transform: translateY(0);
                    }

                    50% {
                        transform: translateY(-3px);
                    }

                    100% {
                        transform: translateY(0);
                    }
                }

                input.peer:checked+label .icon {
                    animation: popIcon .35s ease;
                    filter: saturate(1.2);
                }

                @keyframes popIcon {
                    0% {
                        transform: scale(1) rotate(0);
                    }

                    50% {
                        transform: scale(1.15) rotate(-6deg);
                    }

                    100% {
                        transform: scale(1) rotate(0);
                    }
                }
            </style>

            <script>
                function showDescription(id) {
                    document.querySelectorAll('[id^="desc"]').forEach(el => el.classList.add('hidden'));
                    document.getElementById(id)?.classList.remove('hidden');
                }
                document.addEventListener("DOMContentLoaded", function() {
                    showDescription('descUG');
                });
            </script>

        </form>
    </div>
</div>

<!-- University Logos Carousel Section -->
<div class=" my-12 lg:my-24 flex flex-col gap-0 sm:gap-6 mask-blur-left-right">
    <h2 class="px-3.5 sm:px-0 text-2xl lg:text-[28px] xl:text-3xl 2xl:text-[34px] font-normal leading-[130%] sm:text-center mb-8 sm:mb-12">
        <span class="font-medium text-primary"></span> Partner Universities to live your dream life abroad
    </h2>
    <div class=" flex overflow-hidden">
        <div class="animate-scroll gap-6 flex items-center justify-around px-2 min-w-full flex-shrink-0">
            <img alt="Abertay-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/Altai-State.png" style="color: transparent;">
            <img alt="Auburn-univ.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/Bashkir-State.png" style="color: transparent;">
            <img alt="Bisshops-University.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/Crimea-Federal.png" style="color: transparent;">
            <img alt="Brunel-University.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/Kabardino-Balkarian.png" style="color: transparent;">
            <img alt="Caltech-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/Kazan-Federal.png" style="color: transparent;">
            <img alt="chester-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/Kuban_State.png" style="color: transparent;">
        </div>
        <div class="animate-scroll gap-6 flex items-center justify-around px-2 min-w-full flex-shrink-0 ">
            <img alt="Abertay-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/Altai-State.png" style="color: transparent;">
            <img alt="Auburn-univ.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/Bashkir-State.png" style="color: transparent;">
            <img alt="Bisshops-University.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/Crimea-Federal.png" style="color: transparent;">
            <img alt="Brunel-University.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/Kabardino-Balkarian.png" style="color: transparent;">
            <img alt="Caltech-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/Kazan-Federal.png" style="color: transparent;">
            <img alt="chester-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/Kuban_State.png" style="color: transparent;">
        </div>
    </div>
    <div class=" flex overflow-hidden">
        <div class="animate-reversescroll gap-6 flex items-center justify-around px-2 min-w-full flex-shrink-0">
            <img alt="Greenwich-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Kazakhstan/Kazakh-Russian.png" style="color: transparent;">
            <img alt="Imperial-College-London.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Kazakhstan/Semey-State.png" style="color: transparent;">
            <img alt="Incarnate-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Kazakhstan/Shymkent-State.png" style="color: transparent;">
            <img alt="La-Trobe-University.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Kazakhstan/South-Kazakhstan.png" style="color: transparent;">
            <img alt="Leicester-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Kazakhstan/West-Kazakhstan.png" style="color: transparent;">
        </div>
        <div class="animate-reversescroll gap-6 flex items-center justify-around px-2 min-w-full flex-shrink-0 ">
            <img alt="Greenwich-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Kazakhstan/Kazakh-Russian.png" style="color: transparent;">
            <img alt="Imperial-College-London.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Kazakhstan/Semey-State.png" style="color: transparent;">
            <img alt="Incarnate-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Kazakhstan/Shymkent-State.png" style="color: transparent;">
            <img alt="La-Trobe-University.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Kazakhstan/South-Kazakhstan.png" style="color: transparent;">
            <img alt="Leicester-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Kazakhstan/West-Kazakhstan.png" style="color: transparent;">
        </div>
    </div>
    <div class=" flex overflow-hidden">
        <div class="animate-scroll gap-6 flex items-center justify-around px-2 min-w-full flex-shrink-0">
            <img alt="Abertay-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Kazakhstan/Al-farabi-Kazakh.png" style="color: transparent;">
            <img alt="Auburn-univ.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Kazakhstan/Astana-Medical.png" style="color: transparent;">
            <img alt="Bisshops-University.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Kazakhstan/International-Medical.png" style="color: transparent;">
            <img alt="Brunel-University.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Kazakhstan/Karaganda-State.png" style="color: transparent;">
            <img alt="Caltech-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Kazakhstan/Kazakh-National.png" style="color: transparent;">
        </div>
        <div class="animate-scroll gap-6 flex items-center justify-around px-2 min-w-full flex-shrink-0 ">
            <img alt="Abertay-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Kazakhstan/Al-farabi-Kazakh.png" style="color: transparent;">
            <img alt="Auburn-univ.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Kazakhstan/Astana-Medical.png" style="color: transparent;">
            <img alt="Bisshops-University.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Kazakhstan/International-Medical.png" style="color: transparent;">
            <img alt="Brunel-University.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Kazakhstan/Karaganda-State.png" style="color: transparent;">
            <img alt="Caltech-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Kazakhstan/Kazakh-National.png" style="color: transparent;">
        </div>
    </div>
    <div class=" flex overflow-hidden">
        <div class="animate-reversescroll gap-6 flex items-center justify-around px-2 min-w-full flex-shrink-0">
            <img alt="Greenwich-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/Mari-State.png" style="color: transparent;">
            <img alt="Imperial-College-London.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/North-Caucasian.png" style="color: transparent;">
            <img alt="Incarnate-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/North-Ossetian.png" style="color: transparent;">
            <img alt="La-Trobe-University.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/Rostov-State.png" style="color: transparent;">
            <img alt="Leicester-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/Sevastopol-State.png" style="color: transparent;">
            <img alt="Liverpool-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/Ulyanovsk-State.png" style="color: transparent;">
        </div>
        <div class="animate-reversescroll gap-6 flex items-center justify-around px-2 min-w-full flex-shrink-0 ">
            <img alt="Greenwich-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/Mari-State.png" style="color: transparent;">
            <img alt="Imperial-College-London.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/North-Caucasian.png" style="color: transparent;">
            <img alt="Incarnate-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/North-Ossetian.png" style="color: transparent;">
            <img alt="La-Trobe-University.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/Rostov-State.png" style="color: transparent;">
            <img alt="Leicester-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/Sevastopol-State.png" style="color: transparent;">
            <img alt="Liverpool-university.png" loading="lazy" width="163" height="90" decoding="async" data-nimg="1" class="mx-4" src="<?= base_url('public/') ?>assets/images/slider/Russia/Ulyanovsk-State.png" style="color: transparent;">
        </div>
    </div>
</div>

<!-- Select the Service -->
<?= $this->include('web/components/university_section.php') ?>

<!-- Spotlight on Doctor Bano: Latest News and Updates -->
<div class="my-12 sm:my-24 overflow-hidden">
    <h2 class="container text-left sm:text-center text-[24px] lg:text-[28px] xl:text-[30px] 2xl:text-[34px] font-medium text-heading mb-6 sm:mb-12">
        Spotlight on Doctor Bano: <span class="text-primary"> Latest News and Updates</span>
    </h2>

    <!-- Swiper -->
    <div class="swiper !pb-[80px] swiper-backface-hidden">
        <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide !w-3/4 sm:!w-3/5 lg:!w-1/3 2xl:!w-1/4 first:ml-[2rem] lg:first:ml-[6rem] 2xl:first:ml-[17rem] mr-6 relative overflow-hidden cursor-pointer border border-[#B3B3B3] rounded-xl hover:border-transparent transition-all duration-700 hover:shadow-[0_20px_76px_0_#1D1D271A] group">
                <a href="https://www.ahmedabadmirror.com/taking-education-worldwide-gradding-revolutionizes-study-abroad-experiences/81864751.html" class="w-full">
                    <div class="relative z-10 p-4 flex items-center flex-col sm:flex-row gap-3 group-hover:bg-white group-hover:shadow-lg transition-all">
                        <div class="rounded-[18px] overflow-hidden flex items-center bg-white min-h-[132px] min-w-full sm:min-w-[132px]">
                            <img src="https://www.gradding.com/_next/image?url=https%3A%2F%2Fweb.gradding.com%2Fuploads%2Fimages%2Fmedia%2Fahmedabad_mirror.png&amp;w=384&amp;q=75" alt="Ahmedabad Mirror" width="132" height="132" />
                        </div>
                        <div class="w-full sm:w-3/4 flex flex-col justify-between gap-3">
                            <h3 class="text-xs sm:text-sm text-heading uppercase">Ahmedabad Mirror</h3>
                            <p class="text-lg font-semibold line-clamp-2">Taking Education Worldwide: Doctor Bano Revolutionizes Study Abroad Experiences</p>
                            <span class="text-xs sm:text-sm text-[#6B6B6B] uppercase">18 Oct, 2023</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide !w-3/4 sm:!w-3/5 lg:!w-1/3 2xl:!w-1/4 mr-6 relative overflow-hidden cursor-pointer border border-[#B3B3B3] rounded-xl hover:border-transparent transition-all duration-700 hover:shadow-[0_20px_76px_0_#1D1D271A] group">
                <a href="https://www.deccanherald.com/amp/story/brandspot/featured/8-visionary-entrepreneurs-to-look-at-in-2024-3035237" class="w-full">
                    <div class="relative z-10 p-4 flex items-center flex-col sm:flex-row gap-3 group-hover:bg-white group-hover:shadow-lg transition-all">
                        <div class="rounded-[18px] overflow-hidden flex items-center bg-white min-h-[132px] min-w-full sm:min-w-[132px]">
                            <img src="https://www.gradding.com/_next/image?url=https%3A%2F%2Fweb.gradding.com%2Fuploads%2Fimages%2Fmedia%2F20240802174504_1200x600wa.png&amp;w=384&amp;q=75" alt="Deccan Herald" width="132" height="132" />
                        </div>
                        <div class="w-full sm:w-3/4 flex flex-col justify-between gap-3">
                            <h3 class="text-xs sm:text-sm text-heading uppercase">Deccan Herald</h3>
                            <p class="text-lg font-semibold line-clamp-2">8 Visionary Entrepreneurs to look at in 2024</p>
                            <span class="text-xs sm:text-sm text-[#6B6B6B] uppercase">24 May, 2024</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide !w-3/4 sm:!w-3/5 lg:!w-1/3 2xl:!w-1/4 first:ml-[2rem] lg:first:ml-[6rem] 2xl:first:ml-[17rem] mr-6 relative overflow-hidden cursor-pointer border border-[#B3B3B3] rounded-xl hover:border-transparent transition-all duration-700 hover:shadow-[0_20px_76px_0_#1D1D271A] group">
                <a href="https://www.ahmedabadmirror.com/taking-education-worldwide-gradding-revolutionizes-study-abroad-experiences/81864751.html" class="w-full">
                    <div class="relative z-10 p-4 flex items-center flex-col sm:flex-row gap-3 group-hover:bg-white group-hover:shadow-lg transition-all">
                        <div class="rounded-[18px] overflow-hidden flex items-center bg-white min-h-[132px] min-w-full sm:min-w-[132px]">
                            <img src="https://www.gradding.com/_next/image?url=https%3A%2F%2Fweb.gradding.com%2Fuploads%2Fimages%2Fmedia%2Fahmedabad_mirror.png&amp;w=384&amp;q=75" alt="Ahmedabad Mirror" width="132" height="132" />
                        </div>
                        <div class="w-full sm:w-3/4 flex flex-col justify-between gap-3">
                            <h3 class="text-xs sm:text-sm text-heading uppercase">Ahmedabad Mirror</h3>
                            <p class="text-lg font-semibold line-clamp-2">Taking Education Worldwide: Doctor Bano Revolutionizes Study Abroad Experiences</p>
                            <span class="text-xs sm:text-sm text-[#6B6B6B] uppercase">18 Oct, 2023</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Slide 4 -->
            <div class="swiper-slide !w-3/4 sm:!w-3/5 lg:!w-1/3 2xl:!w-1/4 mr-6 relative overflow-hidden cursor-pointer border border-[#B3B3B3] rounded-xl hover:border-transparent transition-all duration-700 hover:shadow-[0_20px_76px_0_#1D1D271A] group">
                <a href="https://www.deccanherald.com/amp/story/brandspot/featured/8-visionary-entrepreneurs-to-look-at-in-2024-3035237" class="w-full">
                    <div class="relative z-10 p-4 flex items-center flex-col sm:flex-row gap-3 group-hover:bg-white group-hover:shadow-lg transition-all">
                        <div class="rounded-[18px] overflow-hidden flex items-center bg-white min-h-[132px] min-w-full sm:min-w-[132px]">
                            <img src="https://www.gradding.com/_next/image?url=https%3A%2F%2Fweb.gradding.com%2Fuploads%2Fimages%2Fmedia%2F20240802174504_1200x600wa.png&amp;w=384&amp;q=75" alt="Deccan Herald" width="132" height="132" />
                        </div>
                        <div class="w-full sm:w-3/4 flex flex-col justify-between gap-3">
                            <h3 class="text-xs sm:text-sm text-heading uppercase">Deccan Herald</h3>
                            <p class="text-lg font-semibold line-clamp-2">8 Visionary Entrepreneurs to look at in 2024</p>
                            <span class="text-xs sm:text-sm text-[#6B6B6B] uppercase">24 May, 2024</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>

<script>
    const swiper = new Swiper('.swiper', {
        slidesPerView: 'auto',
        spaceBetween: 24,
        grabCursor: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            640: {
                spaceBetween: 24
            },
            1024: {
                spaceBetween: 30
            },
        }
    });
</script>

<!-- Best Consultant Section -->
<section class="container my-20">
    <div class="text-center mb-12">
        <h2 class="text-3xl sm:text-4xl font-semibold text-[#1F2022] mb-3">Best MBBS Abroad Consultant in Delhi<span style="color: #0091E3;"> 2025-2026</span></h2>
    </div>

    <!-- Flip Cards Section -->
    <style>
        .flip-card {
            perspective: 1000px;
        }

        .flip-inner {
            transition: transform 0.6s;
            transform-style: preserve-3d;
            position: relative;
            width: 100%;
            height: 100%;
        }

        .flip-card:hover .flip-inner {
            transform: rotateY(180deg);
        }

        .flip-front,
        .flip-back {
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            border-radius: 1rem;
            /* matches Tailwind rounded-2xl */
        }

        .flip-back {
            transform: rotateY(180deg);
        }

        /* Accessibility: respect reduced motion */
        @media (prefers-reduced-motion: reduce) {
            .flip-inner {
                transition: none;
            }

            .flip-card:hover .flip-inner {
                transform: none;
            }
        }
    </style>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="flip-card relative rounded-2xl overflow-hidden h-full min-h-[220px]">
            <div class="flip-inner">
                <!-- Front -->
                <div class="flip-front p-6 border border-[#B3B3B3] text-center bg-white flex flex-col items-center justify-center">
                    <i class="bi bi-map-fill" style="color:#FF8401; font-size:48px;"></i>
                    <h3 class="text-xl font-semibold text-[#1F2022] mt-3 mb-2">Study MBBS in Abroad</h3>
                    <p class="text-[#6E6E73] text-sm">Your chance to be a trending expert in Medical and make a successful career after completion of our courses.</p>
                </div>
                <!-- Back -->
                <div class="flip-back p-6 text-center bg-[#FF8401] text-white flex flex-col items-center justify-center">
                    <i class="bi bi-map-fill" style="font-size:48px;"></i>
                    <h3 class="text-xl font-semibold mt-3 mb-2">Study MBBS in Abroad</h3>
                    <p class="text-sm">Your chance to be a trending expert in Medical and make a successful career after completion of our courses.</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="flip-card relative rounded-2xl overflow-hidden h-full min-h-[220px]">
            <div class="flip-inner">
                <!-- Front -->
                <div class="flip-front p-6 border border-[#B3B3B3] text-center bg-white flex flex-col items-center justify-center">
                    <i class="bi bi-eye-fill" style="color:#FF8401; font-size:48px;"></i>
                    <h3 class="text-xl font-semibold text-[#1F2022] mt-3 mb-2">Cheapest MBBS Abroad</h3>
                    <p class="text-[#6E6E73] text-sm">Doctorbano.com is one of the upcoming consultancy, with a vision of providing excellent support.</p>
                </div>
                <!-- Back -->
                <div class="flip-back p-6 text-center bg-[#FF8401] text-white flex flex-col items-center justify-center">
                    <i class="bi bi-eye-fill" style="font-size:48px;"></i>
                    <h3 class="text-xl font-semibold mt-3 mb-2">Cheapest MBBS Abroad</h3>
                    <p class="text-sm">Doctorbano.com is one of the upcoming consultancy, with a vision of providing excellent support.</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="flip-card relative rounded-2xl overflow-hidden h-full min-h-[220px]">
            <div class="flip-inner">
                <!-- Front -->
                <div class="flip-front p-6 border border-[#B3B3B3] text-center bg-white flex flex-col items-center justify-center">
                    <i class="bi bi-trophy-fill" style="color:#FF8401; font-size:48px;"></i>
                    <h3 class="text-xl font-semibold text-[#1F2022] mt-3 mb-2">MBBS Consultants 2025</h3>
                    <p class="text-[#6E6E73] text-sm">Get reliable consultation for professional education by our team of certified professionals.</p>
                </div>
                <!-- Back -->
                <div class="flip-back p-6 text-center bg-[#FF8401] text-white flex flex-col items-center justify-center">
                    <i class="bi bi-trophy-fill" style="font-size:48px;"></i>
                    <h3 class="text-xl font-semibold mt-3 mb-2">MBBS Consultants 2025</h3>
                    <p class="text-sm">Get reliable consultation for professional education by our team of certified professionals.</p>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- FAQ Section -->
<div class="container my-12 lg:my-24 lg:w-2/3">
    <h2 class="text-2xl lg:text-[28px] xl:text-3xl 2xl:text-[34px] font-normal text-center mb-5">
        Frequently Asked <span class="text-test-prep font-medium block sm:inline-block">Questions</span>
    </h2>

    <div class="px-2 space-y-3">

        <!-- START: FAQ Item -->
        <div class="border-b border-[#DCDCDC]">
            <div class="faq-toggle flex gap-3 py-2 md:py-4 items-center cursor-pointer">
                <span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">
                    How Doctor Bano helps students to prepare for English language proficiency test?
                </span>
                <div class="relative size-3 flex items-center justify-center">
                    <span class="plus rotate-0 opacity-100 duration-300 absolute">
                        <svg width="11" height="11">
                            <rect x="4.7" y="0.1" width="1.5" height="10.8" fill="#6E6E73" />
                            <rect x="10.9" y="4.7" width="1.5" height="10.8" transform="rotate(90 10.9 4.7)" fill="#6E6E73" />
                        </svg>
                    </span>
                    <span class="minus rotate-90 opacity-0 duration-300 absolute">
                        <svg width="11" height="3">
                            <rect x="10.9" y="0.7" width="1.5" height="10.8" transform="rotate(90 10.9 0.7)" fill="#6E6E73" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="faq-content grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                <div class="overflow-hidden text-sm xl:text-base space-y-2">
                    <p>We have a professional team that provides tailored guidance, study plans, linguistic resources, and attention to students. We help students to prepare for IELTS, PTE, TOEFL, and Duolingo.</p>
                    <ul class="list-disc pl-6">
                        <li>A self-help kit.</li>
                        <li>Pre-practice test.</li>
                        <li>Full and section-wise mock test and band predictor tool.</li>
                    </ul>
                    <p>Students can also enroll in coaching or one-on-one sessions to clarify doubts. Contact us for more info.</p>
                </div>
            </div>
        </div>
        <!-- END -->

        <!-- FAQ 2 -->
        <div class="border-b border-[#DCDCDC]">
            <div class="faq-toggle flex gap-3 py-2 md:py-4 items-center cursor-pointer">
                <span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">
                    What are the benefits of studying abroad?
                </span>
                <div class="relative size-3 flex items-center justify-center">
                    <span class="plus rotate-0 opacity-100 duration-300 absolute">
                        <svg width="11" height="11">
                            <rect x="4.7" y="0.1" width="1.5" height="10.8" fill="#6E6E73" />
                            <rect x="10.9" y="4.7" width="1.5" height="10.8" transform="rotate(90 10.9 4.7)" fill="#6E6E73" />
                        </svg>
                    </span>
                    <span class="minus rotate-90 opacity-0 duration-300 absolute">
                        <svg width="11" height="3">
                            <rect x="10.9" y="0.7" width="1.5" height="10.8" transform="rotate(90 10.9 0.7)" fill="#6E6E73" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="faq-content grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                <div class="overflow-hidden text-sm xl:text-base">
                    <p>Benefits include:</p>
                    <ul class="list-disc pl-6 space-y-1">
                        <li>High-quality education system</li>
                        <li>QS-ranked universities & globally recognized degrees</li>
                        <li>Diverse career & global job market exposure</li>
                        <li>Cultural experience & personal growth</li>
                        <li>Cutting-edge research & networking</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- FAQ 3 -->
        <div class="border-b border-[#DCDCDC]">
            <div class="faq-toggle flex gap-3 py-2 md:py-4 items-center cursor-pointer">
                <span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">
                    What type of services does Doctor Bano provide?
                </span>
                <div class="relative size-3 flex items-center justify-center">
                    <span class="plus rotate-0 opacity-100 duration-300 absolute"><svg width="11" height="11">
                            <rect x="4.7" y="0.1" width="1.5" height="10.8" fill="#6E6E73" />
                            <rect x="10.9" y="4.7" width="1.5" height="10.8" transform="rotate(90 10.9 4.7)" fill="#6E6E73" />
                        </svg></span>
                    <span class="minus rotate-90 opacity-0 duration-300 absolute"><svg width="11" height="3">
                            <rect x="10.9" y="0.7" width="1.5" height="10.8" transform="rotate(90 10.9 0.7)" fill="#6E6E73" />
                        </svg></span>
                </div>
            </div>
            <div class="faq-content grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                <div class="overflow-hidden text-sm xl:text-base">
                    <ul class="list-disc pl-6 space-y-1">
                        <li>Test prep (IELTS, TOEFL, Duolingo)</li>
                        <li>University/course selection</li>
                        <li>Visa assistance & SOP/LOR writing</li>
                        <li>Loans, forex, insurance, SIM, GIC, travel</li>
                        <li>Accommodation & airport pickup</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- FAQ 4 -->
        <div class="border-b border-[#DCDCDC]">
            <div class="faq-toggle flex gap-3 py-2 md:py-4 items-center cursor-pointer">
                <span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">
                    How does Doctor Bano help in visa assistance?
                </span>
                <div class="relative size-3 flex items-center justify-center">
                    <span class="plus rotate-0 opacity-100 duration-300 absolute"><svg width="11" height="11">
                            <rect x="4.7" y="0.1" width="1.5" height="10.8" fill="#6E6E73" />
                            <rect x="10.9" y="4.7" width="1.5" height="10.8" transform="rotate(90 10.9 4.7)" fill="#6E6E73" />
                        </svg></span>
                    <span class="minus rotate-90 opacity-0 duration-300 absolute"><svg width="11" height="3">
                            <rect x="10.9" y="0.7" width="1.5" height="10.8" transform="rotate(90 10.9 0.7)" fill="#6E6E73" />
                        </svg></span>
                </div>
            </div>
            <div class="faq-content grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                <div class="overflow-hidden text-sm xl:text-base">
                    <p>Doctor Bano has a 98% visa success rate. We help students compile all documents—SOP, transcripts, LORs—and keep them updated throughout the visa approval process.</p>
                </div>
            </div>
        </div>

        <!-- FAQ 5 -->
        <div class="border-b border-[#DCDCDC]">
            <div class="faq-toggle flex gap-3 py-2 md:py-4 items-center cursor-pointer">
                <span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">
                    What are the key documents required in the study abroad journey?
                </span>
                <div class="relative size-3 flex items-center justify-center">
                    <span class="plus rotate-0 opacity-100 duration-300 absolute"><svg width="11" height="11">
                            <rect x="4.7" y="0.1" width="1.5" height="10.8" fill="#6E6E73" />
                            <rect x="10.9" y="4.7" width="1.5" height="10.8" transform="rotate(90 10.9 4.7)" fill="#6E6E73" />
                        </svg></span>
                    <span class="minus rotate-90 opacity-0 duration-300 absolute"><svg width="11" height="3">
                            <rect x="10.9" y="0.7" width="1.5" height="10.8" transform="rotate(90 10.9 0.7)" fill="#6E6E73" />
                        </svg></span>
                </div>
            </div>
            <div class="faq-content grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                <div class="overflow-hidden text-sm xl:text-base">
                    <ul class="list-disc pl-6 space-y-1">
                        <li>Passport & photos</li>
                        <li>SOP, LORs, resume</li>
                        <li>Test scores (IELTS, SAT, GRE etc.)</li>
                        <li>Financial proofs, visa docs</li>
                        <li>Admission/acceptance letters</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- FAQ 6 -->
        <div class="border-b border-[#DCDCDC]">
            <div class="faq-toggle flex gap-3 py-2 md:py-4 items-center cursor-pointer">
                <span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">
                    Does Doctor Bano provide students with accommodation assistance?
                </span>
                <div class="relative size-3 flex items-center justify-center">
                    <span class="plus rotate-0 opacity-100 duration-300 absolute"><svg width="11" height="11">
                            <rect x="4.7" y="0.1" width="1.5" height="10.8" fill="#6E6E73" />
                            <rect x="10.9" y="4.7" width="1.5" height="10.8" transform="rotate(90 10.9 4.7)" fill="#6E6E73" />
                        </svg></span>
                    <span class="minus rotate-90 opacity-0 duration-300 absolute"><svg width="11" height="3">
                            <rect x="10.9" y="0.7" width="1.5" height="10.8" transform="rotate(90 10.9 0.7)" fill="#6E6E73" />
                        </svg></span>
                </div>
            </div>
            <div class="faq-content grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                <div class="overflow-hidden text-sm xl:text-base">
                    <p>Yes! We assist students in finding safe, affordable, and campus-nearby accommodation options in countries like the USA, Canada, UK, Australia, and more.</p>
                </div>
            </div>
        </div>

    </div>
</div>
<!--  Accordion JavaScript -->
<script>
    document.querySelectorAll('.faq-toggle').forEach(toggle => {
        toggle.addEventListener('click', () => {
            const content = toggle.nextElementSibling;
            const plus = toggle.querySelector('.plus');
            const minus = toggle.querySelector('.minus');

            const isOpen = content.classList.contains('grid-rows-[1fr]');

            // Close all open
            document.querySelectorAll('.faq-content').forEach(el => {
                el.classList.remove('grid-rows-[1fr]', 'opacity-100');
                el.classList.add('grid-rows-[0fr]', 'opacity-0');
            });
            document.querySelectorAll('.faq-toggle .plus').forEach(p => p.classList.replace('opacity-0', 'opacity-100'));
            document.querySelectorAll('.faq-toggle .plus').forEach(p => p.classList.replace('rotate-90', 'rotate-0'));
            document.querySelectorAll('.faq-toggle .minus').forEach(m => m.classList.replace('opacity-100', 'opacity-0'));
            document.querySelectorAll('.faq-toggle .minus').forEach(m => m.classList.replace('rotate-0', 'rotate-90'));

            if (!isOpen) {
                content.classList.add('grid-rows-[1fr]', 'opacity-100');
                content.classList.remove('grid-rows-[0fr]', 'opacity-0');
                plus.classList.replace('opacity-100', 'opacity-0');
                plus.classList.replace('rotate-0', 'rotate-90');
                minus.classList.replace('opacity-0', 'opacity-100');
                minus.classList.replace('rotate-90', 'rotate-0');
            }
        });
    });
</script>

<?= $this->endSection() ?>