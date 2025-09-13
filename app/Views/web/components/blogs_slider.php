    <!-- Blogs Section Start -->
    <style>
        .blog-slider .swiper {
            overflow: visible;
        }

        .blog-slider .swiper-slide {
            width: 386.857px;
            margin-right: 40px;
        }

        @media (min-width:1024px) {
            .blog-slider .swiper-slide {
                width: 408px;
            }
        }

        /* Fixed image height */
        .blog-slider .card-img {
            width: 100%;
            height: 230px;
            object-fit: cover;
            display: block;
        }

        /* Edge gutters: only first and last slide */
        .blog-slider .swiper-wrapper>.swiper-slide:first-child {
            margin-left: 100px;
        }

        .blog-slider .swiper-wrapper>.swiper-slide:last-child {
            margin-right: 100px;
        }

        /* Smaller gutters on mobile (optional) */
        @media (max-width: 639px) {
            .blog-slider .swiper-wrapper>.swiper-slide:first-child {
                margin-left: 16px;
            }

            .blog-slider .swiper-wrapper>.swiper-slide:last-child {
                margin-right: 16px;
            }
        }
    </style>

    <section id="blogsWidget" class="m-auto my-12 sm:my-14 xl:px-0 md:-pl-10 blog-slider" style="overflow: hidden;">
        <h2 class="text-2xl lg:text-[28px] xl:text-3xl 2xl:text-[34px] font-normal text-center">
            DoctorBano <span class="font-medium inline-block text-primary">Blogs</span>
        </h2>

        <div class="flex gap-3 items-center justify-center mt-4 mb-7">
            <p class="text-sm text-[#6E6E73] font-medium">Want to read more?</p>
            <a class="p-2 font-medium rounded-md text-sm inline-block bg-[#006ac91a] text-primary hover:bg-primary hover:text-white capitalize"
                href="<?= base_url('blogs') ?>">
                explore blogs
                <svg width="14" height="14" viewBox="0 0 320 512" class="inline-block font-normal">
                    <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                </svg>
            </a>
        </div>

        <div class="swiper blog-swiper">
            <div class="swiper-wrapper">
                <?php if (!empty($blogs)): ?>
                    <?php foreach ($blogs as $b): ?>
                        <div class="swiper-slide sm:mt-3 sm:mb-16">
                            <a class="card block rounded-2xl overflow-hidden hover:shadow-[0px_4px_14px_0px_#00000040]"
                                href="<?= site_url('blog/' . $b['blog_id']) ?>">
                                <img class="card-img" width="408" height="230" loading="lazy"
                                    alt="<?= esc($b['blog_name']) ?>" title="<?= esc($b['blog_name']) ?>"
                                    src="<?= !empty($b['blog_image'])
                                                ? base_url('uploads/blog/' . $b['blog_image'])
                                                : base_url('public/assets/images/placeholder.webp') ?>">
                                <div class="bg-white p-3 lg:p-4 w-full">
                                    <span class="font-semibold text-[10px] lg:text-xs xl:text-sm text-[#6E6E73]">Universities</span>
                                    <h3 class="font-semibold text-sm lg:text-base xl:text-lg text-[#1D1D1F] overflow-hidden text-ellipsis line-clamp-2 md:min-h-14 min-h-10">
                                        <?= esc($b['blog_name']) ?>
                                    </h3>
                                    <span class="font-semibold text-[10px] lg:text-xs xl:text-sm text-[#6E6E73]">
                                        <?= !empty($b['created_at']) ? date('M d, Y', strtotime($b['created_at'])) : '' ?>
                                    </span>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="swiper-slide">
                        <div class="p-6 bg-white rounded-2xl shadow text-center">No blogs found.</div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="flex justify-center gap-28">
            <button class="swiper-button-prev-custom flex items-center gap-1 text-base" type="button" aria-label="Previous">
                <span>
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path d="M3.414 8.343 7.364 12.293c.178.19.275.441.271.7-.004.26-.109.507-.293.691a.98.98 0 0 1-.691.293.98.98 0 0 1-.7-.27L.293 8.05A1.34 1.34 0 0 1 0 7.343c0-.133.026-.263.076-.384.05-.121.125-.231.218-.324L5.95.979A1 1 0 0 1 7.624 1.696c-.001.133-.028.264-.08.386a.88.88 0 0 1-.223.324L3.414 6.343H13a1 1 0 1 1 0 2H3.414Z" fill="#0F172A" />
                    </svg>
                </span>
                <span>Prev</span>
            </button>
            <button class="swiper-button-next-custom flex items-center gap-1 text-base" type="button" aria-label="Next">
                <span>Next</span>
                <span>
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path d="M10.586 5.657 6.636 1.707A1 1 0 0 1 7.35.023c.26-.004.508.1.692.283l5.657 5.657c.093.093.167.203.218.324.05.121.076.251.076.383 0 .131-.026.262-.076.383a1.02 1.02 0 0 1-.218.324L8.05 13.022a1 1 0 0 1-1.4-.007 1.03 1.03 0 0 1-.282-.716c.002-.257.109-.508.294-.686l3.95-3.95H1a1 1 0 1 1 0-2h9.586Z" fill="#0F172A" />
                    </svg>
                </span>
            </button>
        </div>
    </section>

    <script>
        (function() {
            function initBlogSwiper(root) {
                const swiperEl = root.querySelector('.blog-swiper');
                const nextBtn = root.querySelector('.swiper-button-next-custom');
                const prevBtn = root.querySelector('.swiper-button-prev-custom');
                if (!swiperEl) return;

                // If something pre-initialized it, nuke it first
                if (swiperEl.swiper) {
                    try {
                        swiperEl.swiper.destroy(true, true);
                    } catch (e) {}
                }
                swiperEl.classList.remove('swiper-initialized', 'swiper-horizontal');

                // Create fresh instance
                new Swiper(swiperEl, {
                    slidesPerView: 'auto',
                    spaceBetween: 40,
                    speed: 500,
                    grabCursor: true,
                    watchOverflow: true,
                    observer: true,
                    observeParents: true,
                    navigation: {
                        nextEl: nextBtn,
                        prevEl: prevBtn
                    },
                    breakpoints: {
                        0: {
                            spaceBetween: 16
                        },
                        640: {
                            spaceBetween: 24
                        },
                        1024: {
                            spaceBetween: 40
                        }
                    }
                });
            }

            function start() {
                if (!window.Swiper) {
                    console.error('Swiper not loaded. Check the CDN <script>.');
                    return;
                }
                document.querySelectorAll('#blogsWidget').forEach(initBlogSwiper);
            }

            (document.readyState === 'loading') ?
            document.addEventListener('DOMContentLoaded', start): start();
        })();
    </script>
    <!-- Blogs Section End -->