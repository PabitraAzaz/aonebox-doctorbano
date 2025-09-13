<?= $this->extend('web/components/assemble') ?>

<?= $this->section('content') ?>

<main>
    <div class="container md:my-8 relative ">
        <div class=" flex flex-col gap-[18px] w-fit 2/5 sticky -mt-[18rem] top-[5rem] -ml-14 z-10">
            <a href="#">
                <img alt="googleNewIcon" fetchpriority="high" width="34" height="34" decoding="async" data-nimg="1"
                    class="w-full" src="<?= base_url('public/') ?>assets/images/icons/googleNewIcon.webp"
                    style="color: transparent;">
            </a>
            <a href="#">
                <img alt="whatsapp icon" fetchpriority="high" width="34" height="34" decoding="async" data-nimg="1"
                    class="w-full" src="<?= base_url('public/') ?>assets/images/icons/whatsappIcon.webp"
                    style="color: transparent;">
            </a>
            <a href="https://x.com/essqube">
                <img alt="TwitterIcon" fetchpriority="high" width="30" height="30" decoding="async" data-nimg="1"
                    class="" src="<?= base_url('public/') ?>assets/images/icons/twitter.webp"
                    style="color: transparent;">
            </a>
            <a href="https://www.instagram.com/essqube/#">
                <img alt="instagramIcon" fetchpriority="high" width="34" height="34" decoding="async" data-nimg="1"
                    class="w-full" src="<?= base_url('public/') ?>assets/images/icons/instagramIcon.webp"
                    style="color: transparent;">
            </a>
            <div
                class="inline-flex items-center justify-between gap-2 text-small rounded-medium shadow-lg shadow-secondary/40 bg-secondary text-secondary-foreground p-0 w-[34px] h-[34px]">
                <pre
                    class="bg-transparent text-inherit font-mono font-normal whitespace-nowrap hidden">https://www.DoctorBano.com/blog/english/adverbs-of-time</pre>
                <button
                    class="group inline-flex items-center justify-center box-border appearance-none select-none whitespace-nowrap font-normal subpixel-antialiased overflow-hidden tap-highlight-transparent data-[pressed=true]:scale-[0.97] outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 gap-2 rounded-small px-0 !gap-0 transition-transform-colors-opacity motion-reduce:transition-none bg-transparent min-w-8 w-8 h-8 group relative z-10 text-large text-inherit data-[hover=true]:bg-transparent data-[focus-visible]:outline-secondary-foreground"
                    type="button" aria-label="Copy to clipboard">
                    <svg aria-hidden="true" fill="none" focusable="false" height="1em" role="presentation"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        viewBox="0 0 24 24" width="1em"
                        class="absolute text-inherit opacity-0 scale-50 group-data-[copied=true]:opacity-100 group-data-[copied=true]:scale-100 transition-transform-opacity">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                    <img alt="instagramIcon" fetchpriority="high" width="34" height="34" decoding="async" data-nimg="1"
                        class="absolute text-inherit opacity-100 scale-100 group-data-[copied=true]:opacity-0 group-data-[copied=true]:scale-50 transition-transform-opacity"
                        src="<?= base_url('public/') ?>assets/images/icons/copyLink.webp"
                        style="color: transparent;"></button>
            </div>
        </div>
        <div class="flex flex-col gap-4 sm:mt-10">
            <ol class="flex items-center whitespace-nowrap overflow-x-scroll" style="scrollbar-width: none;">
                <li class="inline-flex items-center"><a
                        class="flex items-center text-sm text-gray-500 hover:text-[#066AC9] focus:outline-none focus:text-[#066AC9]"
                        href="#">Home</a><svg
                        class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg></li>
                <li class="inline-flex items-center"><a
                        class="flex items-center text-sm text-gray-500 hover:text-[#066AC9] focus:outline-none focus:text-[#066AC9]"
                        href="#">Blogs<svg
                            class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg></a></li>
                <li class="inline-flex items-center"><a
                        class="flex items-center text-sm text-gray-500 hover:text-[#066AC9] focus:outline-none focus:text-[#066AC9]"
                        href="#">ENGLISH<svg
                            class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg></a></li>
                <li class="inline-flex items-center text-sm font-semibold text-gray-800" aria-current="page">Adverbs Of
                    Time</li>
            </ol><a class="block text-sm font-medium text-white bg-[#4B6BFB] py-[6px] px-3 rounded-[6px] w-fit"
                href="#">ENGLISH</a>
            <h1 class="text-[22px] lg:text-[30px] xl:text-[36px] font-medium text-[#181A2A] leading-[130%]">
                <?= esc($singleBlog['blog_name']) ?>
            </h1>
            <div class=" text-[#4A4A4A] text-base [&amp;_a]:text-[#066ac9] [&amp;_a]:font-bold [&amp;_a]:underline">
                <p>An adverb of time is a word used to express the action taking place in any time past, present, or
                    future by answering the questions “how long it lasts” or how often it happens. They provide a
                    crucial context to verbs, elevating the sentences by adding details about the temporal event.
                    &nbsp;The adverb of time is meant to denote when something is happening, has happened, or will
                    happen. If you want to know what the adverb of time list of words used to express them, this guide
                    is for you. In this blog, you will explore adverb of time definition, rules, word list, examples,
                    and worksheet. So, let’s dig into this. &nbsp;</p>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row gap-5 xl:gap-8 my-5">
            <div class="w-full lg:w-[60%] xl:w-[70%] flex flex-col gap-4 md:gap-7">
                <div class=" rounded-[22px] p-[6px] bg-white overflow-hidden shadow-[0px_0px_40px_0px_#1D3A5326]">
                    <img alt="Navigate what is adverb of time along with its rules, examples, and more | DoctorBano.com"
                        title="Adverb of time: Definition, Examples, Rules and Exercise" fetchpriority="high"
                        loading="eager" width="906" height="491" decoding="async" data-nimg="1"
                        class="w-full h-full rounded-[18px]"
                        src="<?= base_url('public/') ?>assets/images/blogs/adverbs-of-time-6894.webp"
                        style="color: transparent;">
                </div>
                <p class="text-2xl mb-4 font-semibold inline-block capitalize">Table of Contents</p>
                <div class="bg-white py-3 px-5 rounded-xl flex flex-col gap-2">
                    <div>
                        <div class="flex items-start justify-between w-fit gap-3"><a
                                class="text-black text-sm font-bold" href="#what-is-adverb-of-time">
                                <p>What is Adverb of Time?</p>
                            </a></div>
                    </div>
                    <div>
                        <div class="flex items-start justify-between w-fit gap-3"><a
                                class="text-black text-sm font-bold" href="#rules-and-usage-of-adverb-of-time">
                                <p>Rules and Usage of Adverb of Time</p>
                            </a></div>
                    </div>
                    <div>
                        <div class="flex items-start justify-between w-fit gap-3"><a
                                class="text-black text-sm font-bold"
                                href="#common-adverbs-of-time-with-sentences-and-examples">
                                <p>Common Adverbs of Time with Sentences and Examples</p>
                            </a></div>
                    </div>
                    <div>
                        <div class="flex items-start justify-between w-fit gap-3"><a
                                class="text-black text-sm font-bold" href="#list-of-adverbs-of-time">
                                <p>List of Adverbs of Time</p>
                            </a><span class="w-fit cursor-pointer transition-all "><img alt="toggle icon" loading="lazy"
                                    width="20" height="20" decoding="async" data-nimg="1" class="max-w-none"
                                    src="#"
                                    style="color: transparent;"></span></div>
                        <div class="ml-2.5 overflow-hidden transition-all duration-300 ease-in-out"
                            style="max-height: 0px;">
                            <ul class="list-disc pl-5 text-sm text-primary">
                                <li class="font-medium"><a href="#adverb-of-time-past">
                                        <p>Adverb of Time – Past</p>
                                    </a></li>
                                <li class="font-medium"><a href="#adverb-of-time-present">
                                        <p>Adverb of Time – Present</p>
                                    </a></li>
                                <li class="font-medium"><a href="#adverb-of-time-future">
                                        <p>Adverb of Time – Future</p>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-start justify-between w-fit gap-3"><a
                                class="text-black text-sm font-bold" href="#worksheet">
                                <p>Worksheet</p>
                            </a></div>
                    </div>
                    <div>
                        <div class="flex items-start justify-between w-fit gap-3"><a
                                class="text-black text-sm font-bold" href="#conclusion">
                                <p>Conclusion</p>
                            </a></div>
                    </div>
                    <div>
                        <div class="flex items-start justify-between w-fit gap-3"><a
                                class="text-black text-sm font-bold" href="#faqs">
                                <p>FAQs</p>
                            </a></div>
                    </div>
                </div>



                <style>
                    .blog-details ol {
                        list-style-type: decimal;
                        padding-left: 25px;
                    }

                    .blog-details ul {
                        list-style-type: disc;
                        padding-left: 25px;
                    }

                    .blog-details h2 {
                        font-size: 30px;
                        color: rgb(33, 159, 249);
                        ;
                    }

                    .blog-details h3 {
                        font-size: 26px;
                        color: rgb(227, 149, 3);
                        ;
                    }

                    .blog-details h4 {
                        font-size:
                            22px;
                        color: rgb(227, 149, 3);
                        ;
                    }

                    .blog-details h5 {
                        font-size: 22px;
                    }

                    .blog-details h6 {
                        font-size: 20px;
                    }

                    .blog-details table,
                    tr,
                    td {
                        border: 1px solid black;
                        height: 60px;
                        width: 800px;
                    }

                    .blog-details th {
                        background-color: rgb(33, 159, 249);
                    }
                </style>

                <div class="blog-details"><?= (($singleBlog['description'])) ?></div>

                <section class="bg-white p-5 antialiased rounded-[15px] shadow-[0px_0px_40px_0px_#1D3A531A]">
                    <div class="">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">0 comments</h2>
                        </div>
                        <form class="mb-6">
                            <div class="flex items-center justify-between gap-2">
                                <div class="py-2 px-4 bg-[#F3F3F3] rounded-[28px] border border-[#B4B7C9] w-[85%]">
                                    <label for="comment" class="sr-only">Your comment</label><textarea id="comment"
                                        rows="1" name="comment"
                                        class="resize-none px-0 w-full text-[15px] text-[#565973] border-0 focus:ring-0 focus:outline-none bg-[#F3F3F3]"
                                        placeholder="Write a comment..."></textarea><input type="hidden" value="2517"
                                        name="page_id">
                                </div><button type="button"
                                    class="inline-flex w-[12%] items-center justify-center py-2.5 px-10 bg-[#066AC9] rounded-[28px] text-[15px] font-medium text-center text-white focus:ring-4 focus:ring-primary-200 hover:bg-[#4e95db]">Post</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
            <div class=" w-full lg:w-[40%] xl:w-[30%] flex flex-col gap-5 xl:gap-8"><a class="cursor-pointer"
                    href="#">
                    <img alt="english-offer" fetchpriority="high" width="392" height="220" decoding="async"
                        data-nimg="1"
                        class=" border-[0.94px] border-[#066AC9] rounded-[15px] hover:shadow-[0px_3.76px_22.56px_0px_#00000040] transition-all ease-in-out"
                        src="<?= base_url('public/') ?>assets/images/blogs/studyAbroadCashbackOffer.webp"
                        style="color: transparent;"></a>
                <div class="bg-white p-[14px] rounded-[18px]">
                    <div class="mb-[14px]">
                        <img alt="mostTrusted" loading="lazy" width="734" height="256" decoding="async" data-nimg="1"
                            src="<?= base_url('public/') ?>assets/images/blogs/mostTrusted.webp"
                            style="color: transparent;">
                    </div>
                    <div class="flex flex-wrap justify-between gap-[14px]">
                        <div class="rounded-[14px] bg-[#F3F6F9] px-4 py-3 w-[47%]"><svg width="29" height="28"
                                viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.83301 11.6667H26.1663" stroke="#F3601E" stroke-width="1.5"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M13.9746 23.9167H8.01297C3.8713 23.9167 2.82129 22.89 2.82129 18.795V9.20501C2.82129 5.49501 3.68466 4.30501 6.93966 4.11834C7.26632 4.10667 7.62797 4.095 8.01297 4.095H20.9746C25.1163 4.095 26.1663 5.12167 26.1663 9.21667V14.3617"
                                    stroke="#F3601E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path opacity="0.4" d="M7.5 18.6667H12.1667" stroke="#F3601E" stroke-width="1.5"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path opacity="0.4"
                                    d="M26.1663 21C26.1663 21.875 25.9213 22.7033 25.4897 23.4033C24.6847 24.7567 23.203 25.6667 21.4997 25.6667C19.7963 25.6667 18.3147 24.7567 17.5097 23.4033C17.078 22.7033 16.833 21.875 16.833 21C16.833 18.4217 18.9213 16.3333 21.4997 16.3333C24.078 16.3333 26.1663 18.4217 26.1663 21Z"
                                    stroke="#F3601E" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path opacity="0.4" d="M19.6797 21L20.8347 22.155L23.3197 19.8567" stroke="#F3601E"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <h5 class="text-[#1D1D1F] text-sm sm:text-base font-medium leading-[130%] mt-[6px]"><span
                                    class="text-[#F3601E]">Hand Picked</span> Courses</h5>
                        </div>
                        <div class="rounded-[14px] bg-[#F3F6F9] px-4 py-3 w-[47%]"><svg width="29" height="28"
                                viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.4">
                                    <path
                                        d="M10.6172 16.7181C10.6172 18.2231 11.7722 19.4365 13.2072 19.4365H16.1355C17.3839 19.4365 18.3989 18.3748 18.3989 17.0681C18.3989 15.6448 17.7805 15.1431 16.8589 14.8165L12.1572 13.1831C11.2355 12.8565 10.6172 12.3548 10.6172 10.9315C10.6172 9.62481 11.6322 8.56314 12.8805 8.56314H15.8089C17.2439 8.56314 18.3989 9.77647 18.3989 11.2815"
                                        stroke="#1BA79E" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M14.5 7V21" stroke="#1BA79E" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                                <path
                                    d="M17.9997 25.6667H10.9997C5.16634 25.6667 2.83301 23.3333 2.83301 17.5V10.5C2.83301 4.66668 5.16634 2.33334 10.9997 2.33334H17.9997C23.833 2.33334 26.1663 4.66668 26.1663 10.5V17.5C26.1663 23.3333 23.833 25.6667 17.9997 25.6667Z"
                                    stroke="#1BA79E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                            <h5 class="text-[#1D1D1F] text-sm sm:text-base font-medium leading-[130%] mt-[6px]">Get
                                <span class="text-[#1BA79E]">Scholarship</span> Assistance
                            </h5>
                        </div>
                        <div class="rounded-[14px] bg-[#F3F6F9] px-4 py-3 w-[47%]"><svg width="29" height="28"
                                viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.15469 17.1034L3.38137 15.33C2.65803 14.6067 2.65803 13.4167 3.38137 12.6934L5.15469 10.92C5.45802 10.6167 5.70302 10.0217 5.70302 9.60167V7.09331C5.70302 6.06665 6.54303 5.22667 7.5697 5.22667H10.078C10.498 5.22667 11.093 4.98171 11.3964 4.67837L13.1697 2.90502C13.893 2.18168 15.083 2.18168 15.8064 2.90502L17.5797 4.67837C17.8831 4.98171 18.478 5.22667 18.898 5.22667H21.4064C22.4331 5.22667 23.273 6.06665 23.273 7.09331V9.60167C23.273 10.0217 23.518 10.6167 23.8214 10.92L25.5947 12.6934C26.318 13.4167 26.318 14.6067 25.5947 15.33L23.8214 17.1034C23.518 17.4067 23.273 18.0017 23.273 18.4217V20.93C23.273 21.9566 22.4331 22.7967 21.4064 22.7967H18.898C18.478 22.7967 17.8831 23.0417 17.5797 23.345L15.8064 25.1184C15.083 25.8417 13.893 25.8417 13.1697 25.1184L11.3964 23.345C11.093 23.0417 10.498 22.7967 10.078 22.7967H7.5697C6.54303 22.7967 5.70302 21.9566 5.70302 20.93V18.4217C5.70302 17.9901 5.45802 17.3951 5.15469 17.1034Z"
                                    stroke="#AB45FB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path opacity="0.4" d="M11 17.5L18 10.5" stroke="#AB45FB" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path opacity="0.4" d="M17.4099 16.9167H17.4204" stroke="#AB45FB" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path opacity="0.4" d="M11.5769 11.0833H11.5874" stroke="#AB45FB" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <h5 class="text-[#1D1D1F] text-sm sm:text-base font-medium leading-[130%] mt-[6px]">Get
                                <span class="text-[#AB45FB]">Offer</span> in 15 Days*
                            </h5>
                        </div>
                        <div class="rounded-[14px] bg-[#F3F6F9] px-4 py-3 w-[47%]"><svg width="29" height="28"
                                viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4"
                                    d="M22.0837 14.7583V19.075C22.0837 22.715 18.6887 25.6667 14.5003 25.6667C10.312 25.6667 6.91699 22.715 6.91699 19.075V14.7583C6.91699 18.3983 10.312 21 14.5003 21C18.6887 21 22.0837 18.3983 22.0837 14.7583Z"
                                    stroke="#FC1E60" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M22.0837 8.92501C22.0837 9.98668 21.792 10.9667 21.2787 11.8067C20.0303 13.86 17.4637 15.1667 14.5003 15.1667C11.537 15.1667 8.97033 13.86 7.722 11.8067C7.20866 10.9667 6.91699 9.98668 6.91699 8.92501C6.91699 7.10501 7.76865 5.46001 9.13365 4.27001C10.5103 3.06834 12.4003 2.33334 14.5003 2.33334C16.6003 2.33334 18.4903 3.06835 19.867 4.25835C21.232 5.46001 22.0837 7.10501 22.0837 8.92501Z"
                                    stroke="#FC1E60" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M22.0837 8.92501V14.7583C22.0837 18.3983 18.6887 21 14.5003 21C10.312 21 6.91699 18.3983 6.91699 14.7583V8.92501C6.91699 5.28501 10.312 2.33334 14.5003 2.33334C16.6003 2.33334 18.4903 3.06835 19.867 4.25835C21.232 5.46001 22.0837 7.10501 22.0837 8.92501Z"
                                    stroke="#FC1E60" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                            <h5 class="text-[#1D1D1F] text-sm sm:text-base font-medium leading-[130%] mt-[6px]"><span
                                    class="text-[#FC1E60]">Finance/Loan </span> Assistance</h5>
                        </div>
                    </div>
                </div><button
                    class="rounded-[16px] animate-pulse duration-750 bg-gradient-to-r from-[rgba(0,106,201,1)] to-[rgba(98,170,238,1)] text-center text-xl text-white font-medium p-4 hover:shadow-lg">Contact
                    University Expert</button>
                <div
                    class="rounded-[10px] shadow-[-16.38px_33.89px_50.83px_0px_#17122B8C] p-3 xl:py-4 xl:px-5 sticky top-[85px] backdrop-blur bg-gradient-to-r from-[#066bc9CC] via-[#066bc9B3] to-[#066bc999]">
                    <p
                        class="text-[14px] xl:text-xl 2xl:text-[25px] font-normal text-white inline-block leading-[130%]">
                        I want FREE assistance with</p>
                    <div class="flex flex-col gap-2 xl:gap-4 mt-2 xl:mt-5"><a
                            class="cursor-pointer xl:py-3 p-2 xl:px-5 rounded-[6px] bg-[#42A3FF] text-[#EDF5FF] text-[12px] xl:text-[15px] 2xl:text-base font-semibold flex items-center justify-between transition-all transform-gpu "
                            href="/college-predictor">Finding University<span class="inline-block">
                                <img alt="arrow" loading="lazy" width="12" height="12" decoding="async" data-nimg="1"
                                    src="<?= base_url('public/') ?>assets/images/icons/whiteArrow.webp"
                                    style="color: transparent;"></span></a><a
                            class="cursor-pointer xl:py-3 p-2 xl:px-5 rounded-[6px] bg-[#42A3FF] text-[#EDF5FF] text-[12px] xl:text-[15px] 2xl:text-base font-semibold flex items-center justify-between transition-all transform-gpu scale-105"
                            href="/college-predictor">Finding Country<span class="inline-block"><img alt="arrow"
                                    loading="lazy" width="12" height="12" decoding="async" data-nimg="1"
                                    src="<?= base_url('public/') ?>assets/images/icons/whiteArrow.webp"
                                    style="color: transparent;"></span></a>
                        <div class="xl:py-3 p-2 xl:px-5 rounded-[6px] bg-[#42A3FF] text-[#EDF5FF] text-[12px] xl:text-[15px] 2xl:text-base font-semibold flex items-center justify-between transition-all transform-gpu "
                            booksession="true" title="">Loans<span class="inline-block"><img alt="arrow" loading="lazy"
                                    width="12" height="12" decoding="async" data-nimg="1"
                                    src="<?= base_url('public/') ?>assets/images/icons/whiteArrow.webp"
                                    style="color: transparent;"></span></div><a
                            class="cursor-pointer xl:py-3 p-2 xl:px-5 rounded-[6px] bg-[#42A3FF] text-[#EDF5FF] text-[12px] xl:text-[15px] 2xl:text-base font-semibold flex items-center justify-between transition-all transform-gpu "
                            href="/test-preparation">Test Prep (IELTS, PTE, etc.)<span class="inline-block">
                                <img alt="arrow" loading="lazy" width="12" height="12" decoding="async" data-nimg="1"
                                    src="<?= base_url('public/') ?>assets/images/icons/whiteArrow.webp"
                                    style="color: transparent;"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->include('web/components/blogs_slider.php') ?>

</main>

<?= $this->endSection() ?>