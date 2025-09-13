<!-- footer.php -->
<style>
    @keyframes slideInLeft {
        0% {
            transform: translateX(-300px);
            opacity: 0;
        }

        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slideInRight {
        0% {
            transform: translateX(300px);
            opacity: 0;
        }

        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slideInTop {
        0% {
            transform: translateY(-300px);
            opacity: 0;
        }

        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes slideInBottom {
        0% {
            transform: translateY(300px);
            opacity: 0;
        }

        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .animate-slideInLeft {
        animation: slideInLeft 0.8s ease-out forwards;
    }

    .animate-slideInRight {
        animation: slideInRight 0.8s ease-out forwards;
    }

    .animate-slideInTop {
        animation: slideInTop 0.8s ease-out forwards;
    }

    .animate-slideInBottom {
        animation: slideInBottom 0.8s ease-out forwards;
    }
</style>

<!-- Footer Start -->
<div class="footer-wrapper">
    <div class="relative sm:mx-10 sm:rounded-t-[65px] sm:py-10 lg:pt-16 lg:pb-28 2xl:py-16 border border-[#006ac94a]">
        <div class="container bg-no-repeat bg-contain bg-[url('/common/WorldMap.png')] bg-top sm:bg-center">

            <!-- Top Footer -->
            <div class="flex flex-col lg:flex-row justify-between pb-8">

                <!-- Contact Info -->
                <div class="w-full lg:w-1/3">
                    <a href="<?= base_url() ?>">
                        <img alt="logo" src="<?= base_url('public/') ?>assets/images/logo/mbbs-abroad-consultants.png" width="131" height="41">
                    </a>
                    <p class="text-[15px] mt-4 text-[#6E6E73]">Toll Free: <a href="tel:+918447730303" class="text-black">+91 8447730303</a></p>
                    <p class="text-[15px] mt-1 text-[#6E6E73]">Toll Free: <a href="tel:+918447630303" class="text-black">+91 8447630303</a></p>
                    <p class="text-[15px] mt-1 text-[#6E6E73]">Email: <a href="mailto:essqubellp@gmail.com" class="text-black">essqubellp@gmail.com</a></p>
                    <p class="text-[15px] mt-1 text-[#6E6E73]">Email: <a href="mailto:info@doctorbano.com" class="text-black">info@doctorbano.com</a></p>

                    <!-- Social Media -->
                    <div class="flex gap-2 mt-3 footer-social-icons">
                        <a href="https://www.facebook.com/gradding" target="_blank"><img src="<?= base_url('public/') ?>assets/images/icons/facebook.webp" alt="facebook"></a>
                        <a href="https://www.instagram.com/gradding_official/" target="_blank"><img src="<?= base_url('public/') ?>assets/images/icons/instagram.webp" alt="instagram"></a>
                        <a href="https://twitter.com/Gradding_" target="_blank"><img src="<?= base_url('public/') ?>assets/images/icons/twitter.webp" alt="twitter"></a>
                        <a href="https://www.linkedin.com/company/gradding/" target="_blank"><img src="<?= base_url('public/') ?>assets/images/icons/linkedin.webp" alt="linkedin"></a>
                        <a href="https://www.youtube.com/channel/UCpNSX_Z1NMCjrmbzy-mPd_g" target="_blank"><img src="<?= base_url('public/') ?>assets/images/icons/youtube.webp" alt="youtube"></a>
                    </div>
                </div>

                <!-- Footer Menus -->
                <div class="hidden mt-4 lg:mt-0 w-full lg:w-2/3 lg:flex justify-between">
                    <div class="w-1/4">
                        <p class="footer-menu-title font-medium text-[#74579]">Quick Links</p>
                        <ul class="footer-link-list">
                            <li><a href="<?= base_url('about') ?>">About Us</a></li>
                            <li><a href="<?= base_url('contact') ?>">Contact Us</a></li>
                            <li><a href="<?= base_url('blogs') ?>">Blogs</a></li>
                            <li><a href="<?= base_url('faq') ?>">FAQs</a></li>
                            <li><a href="">Events</a></li>
                        </ul>
                    </div>
                    <div class="w-1/4">
                        <p class="footer-menu-title font-medium text-[#74579]">Study Abroad</p>
                        <ul class="footer-link-list">
                            <li><a href="<?=base_url('universities')?>">Study in Russia</a></li>
                            <li><a href="<?=base_url('universities')?>">Study in Kazakhstan</a></li>
                            <li><a href="<?=base_url('universities')?>">Study in Georgia</a></li>
                            <li><a href="<?=base_url('universities')?>">Study in Uzbekistan</a></li>
                            <li><a href="<?=base_url('universities')?>">Study in Armenia</a></li>
                            <li><a href="<?=base_url('universities')?>">Study in Kyrygsthan</a></li>
                        </ul>
                    </div>
                    <div class="w-1/4">
                        <p class="footer-menu-title font-medium text-[#74579]">Test Prep</p>
                        <ul class="footer-link-list">
                            <li><a href="#">IELTS</a></li>
                            <li><a href="#">PTE</a></li>
                            <li><a href="#">TOEFL</a></li>
                            <li><a href="#">DET</a></li>
                            <li><a href="#">GMAT</a></li>
                            <li><a href="#">SAT</a></li>
                        </ul>
                    </div>
                    <div class="w-1/4">
                        <p class="footer-menu-title font-medium text-[#74579]">Top Universities</p>
                        <ul class="footer-link-list">
                            <li><a href="<?=base_url('universities')?>">China</a></li>
                            <li><a href="<?=base_url('universities')?>">Philippines</a></li>
                            <li><a href="<?=base_url('universities')?>">Ukraine</a></li>
                            <li><a href="<?=base_url('universities')?>">Bangladesh</a></li>
                            <li><a href="<?=base_url('universities')?>">Nepal</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Cities -->
            <!-- <div class="flex flex-wrap gap-2 py-5 border-b border-[#9A9EA44D]">
                <p class="text-[#74579] font-medium text-[15px] capitalize mr-2">We are available in:</p>
                <?php
                $cities = ['Bangalore', 'Ahmedabad', 'Jaipur', 'Hyderabad', 'Kerala', 'Pune', 'Chandigarh', 'Mumbai', 'Gurgaon', 'Chennai', 'Kolkata', 'Trivandrum', 'Noida', 'Kochi', 'Calicut', 'Kottayam', 'Kollam', 'Thrissur', 'Indore', 'Udaipur', 'Delhi'];
                foreach ($cities as $city): ?>
                    <a href="<?= base_url("study-abroad-consultants/in/" . strtolower($city)) ?>.html"
                        class="capitalize py-1 px-2 text-primary bg-[#066AC91A] hover:bg-primary hover:text-white font-medium text-sm rounded-sm">
                        <?= $city ?>
                    </a>
                <?php endforeach; ?>
            </div> -->

            <!-- Disclaimer -->
            <p class="text-xs text-[#6E6E73] font-normal border-b py-3">
                <span class="font-medium text-[#74579] text-[13px]">Disclaimer:</span>
                Logos and other registered trademarks of universities used on this platform are held by their respective owners.
                Doctor Bano does not claim ownership or association and uses them only for informational purposes.
            </p>

            <!-- Legal -->
            <div class="flex flex-wrap items-center justify-between py-3 text-sm text-[#6E6E73] font-medium">
                <p>© <?= date("Y") ?><a href="#"><u> Doctor Bano</u></a>. All rights reserved.</p>
                <div class="flex gap-2">
                    <a href="<?=base_url('privacy-policy')?>">Privacy Policy</a> |
                    <a href="<?=base_url('terms-conditions')?>">Terms & Conditions</a> |
                    <a href="<?=base_url('payment-refund')?>">Payment & Refund Policy</a>
                </div>
                <p>Managed by <a href="https://www.aonebox.com/"><u>a-one box</u></a>.</p>
            </div>
        </div>

        <!-- Inside .relative footer container -->
        <img alt="globe" class="footer-decor-right"
            src="<?= base_url('public/') ?>assets/images/bg/FooterGlobe.webp"
            width="100" height="110" />

        <img alt="country" class="footer-decor-left"
            src="<?= base_url('public/') ?>assets/images/bg/Footer-Country.webp"
            width="162" height="256" />

    </div>
</div>


</main>


<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>






<script>
    var preloader = document.getElementById('loader');
    var mainContent = document.getElementById('main-content');



    if (preloader) {
        preloader.style.opacity = '0';
        setTimeout(() => {
            preloader.style.display = 'none';
            if (mainContent) {
                mainContent.style.display = 'block';
            }
        }, 500); // Matches the CSS transition duration
    }


    // Automatically hide the preloader when the entire page is loaded
    window.addEventListener('load', () => {
        closePreloader();
    });

</script>

</body>

</html>