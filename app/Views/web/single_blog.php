<?= $this->extend('web/components/assemble') ?>

<?= $this->section('content') ?>











<main>
    <div class="container md:my-8 relative ">
        <div class=" flex flex-col gap-[18px] w-fit 2/5 sticky -mt-[18rem] top-[5rem] -ml-14 z-10">
            <a href="https://news.google.com/publications/CAAqBwgKMOqd0gswqbnpAw?ceid=IN:en&amp;oc=3">
                <img alt="googleNewIcon" fetchpriority="high" width="34" height="34" decoding="async" data-nimg="1"
                    class="w-full" src="<?= base_url('public/') ?>assets/images/icons/googleNewIcon.webp"
                    style="color: transparent;">
            </a>
            <a href="https://api.whatsapp.com/send?text=https://www.gradding.com/blog/english/adverbs-of-time">
                <img alt="whatsapp icon" fetchpriority="high" width="34" height="34" decoding="async" data-nimg="1"
                    class="w-full" src="<?= base_url('public/') ?>assets/images/icons/whatsappIcon.webp"
                    style="color: transparent;">
            </a>
            <a href="https://twitter.com/Gradding_">
                <img alt="TwitterIcon" fetchpriority="high" width="30" height="30" decoding="async" data-nimg="1"
                    class="" src="<?= base_url('public/') ?>assets/images/icons/twitter.webp"
                    style="color: transparent;">
            </a>
            <a href="https://www.instagram.com/gradding_official/">
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
                        href="https://www.gradding.com">Home</a><svg
                        class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg></li>
                <li class="inline-flex items-center"><a
                        class="flex items-center text-sm text-gray-500 hover:text-[#066AC9] focus:outline-none focus:text-[#066AC9]"
                        href="https://www.gradding.com/blog/">Blogs<svg
                            class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg></a></li>
                <li class="inline-flex items-center"><a
                        class="flex items-center text-sm text-gray-500 hover:text-[#066AC9] focus:outline-none focus:text-[#066AC9]"
                        href="https://www.gradding.com/blog/english">ENGLISH<svg
                            class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg></a></li>
                <li class="inline-flex items-center text-sm font-semibold text-gray-800" aria-current="page">Adverbs Of
                    Time</li>
            </ol><a class="block text-sm font-medium text-white bg-[#4B6BFB] py-[6px] px-3 rounded-[6px] w-fit"
                href="https://www.gradding.com/blog/english">ENGLISH</a>
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
                                    src="https://www.gradding.com/blog/icons/CollapseIconGrey.svg"
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




                <!-- <div class="blog-details">
                    <h2 id="what-is-adverb-of-time" class="text-xl md:text-2xl font-semibold text-[#242331] scroll-mt-24">What is Adverb of Time?</h2>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]">An&nbsp;adverb of time&nbsp;or a temporal adverb is a verb used to modify an adjective or other&nbsp;<a href="https://www.gradding.com/blog/english/what-is-adverb">adverb</a>&nbsp;by indicating when the action takes place. It answers the questions “when?”, “How often?”, and “For how long?”. Also, describe duration (for hours, since 2002) and frequency (always, rarely, and sometimes).</p>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]">This adverb type is very invariable and extremely common and standard position in English that is used daily to depict time. In addition, it signifies&nbsp;<a href="https://www.gradding.com/blog/english/tenses-in-english">tenses</a>&nbsp;such as&nbsp;<a href="https://www.gradding.com/blog/english/past-tense">past</a>,&nbsp;<a href="https://www.gradding.com/blog/english/present-tense">present</a>, and&nbsp;<a href="https://www.gradding.com/blog/english/future-tense">future</a>&nbsp;and can be used in the beginning, middle, or ending, best referred to as use in the end. Moreover, to emphasise the adverb of time, it can be used at the beginning of the sentence. Below are some of the&nbsp;adverb of time examples.</p>
                    <ol class="list-decimal pl-7 py-1">
                        <li><b>Today</b>:&nbsp;All the assignments need to be submitted today.</li>
                        <li><b>Yesterday</b>:&nbsp;I was absent yesterday&nbsp;</li>
                        <li><b>Soon</b>:&nbsp;The bus will arrive soon</li>
                        <li><b>Later</b>:&nbsp;let’s go for a walk later</li>
                        <li><b>Often</b>:&nbsp;I often go to the temple</li>
                    </ol>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]">This is the detailed&nbsp;adverb of time definition&nbsp;that clearly articulates A to Z about this adverb type. Now, do you know that it has some rules that can help you to use adverbs of time properly in sentences? Explore them in the next section.</p>
                    <h2 id="rules-and-usage-of-adverb-of-time" class="text-xl md:text-2xl font-semibold text-[#242331] scroll-mt-24">Rules and Usage of Adverb of Time</h2>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]">Using&nbsp;adverb of time&nbsp;might seem easy, just like ABC, but many individuals face problems such as misplacement&nbsp;adverbs of time sentences.&nbsp;But if they focus and understand the concept of this, then they can easily use them. Below is the breakdown of the rules of the adverb of time.</p>
                    <ol class="list-decimal pl-7 py-1">
                        <li><b>Placement</b>– Adverb of time can be used in the beginning, middle and end of the sentences. However, ideally used in the end.</li>
                        <li><b>Emphasize</b>– Adverbs of time can be used in the beginning to emphasise the element in the sentences.</li>
                        <li><b>Fronting</b>– It can be used before the main verb in formal writing; however, this is less common and is used less in sentences.</li>
                        <li><b>Multiple Adverbs</b>– when more than one adverb of time is used in sentences, use them in proper order: “(1) how long”, “(2) how often”, “(3) when”. For example, she worked at the Vancouver Hotel for (1) five days (2) every month (3) last year.</li>
                        <li><b>Frequency and Duration</b>–an adverb of time that indicates frequency (always, never, often, sometimes, rarely, etc.), usually used before the main verb, and duration (for how long) is used.</li>
                    </ol>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]">These rules of adverbs of time can help you to use them accordingly in the right situation. Now let’s move to the next section to explore the common adverbs of time with their examples.</p>
                    <h2 id="common-adverbs-of-time-with-sentences-and-examples" class="text-xl md:text-2xl font-semibold text-[#242331] scroll-mt-24">Common Adverbs of Time with Sentences and Examples</h2>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]">We all express the&nbsp;adverb of time&nbsp;by using common words that are encompassed under this.&nbsp;Adverb of time sentences&nbsp;are easily created if you use the right words. Thus, below we have shared&nbsp;adverb of time examples sentences.&nbsp;So let’s explore the common words along with their example.&nbsp;</p>
                    <ol class="list-decimal pl-7 py-1">
                        <li><b>Yesterday</b>:&nbsp;"I went to school with my mother yesterday."</li>
                        <li><b>Today</b>:" Is everyone ready for the event today."</li>
                        <li><b>Tomorrow</b>:&nbsp;"They will work tomorrow."</li>
                        <li><b>Tonight</b>:&nbsp;"I'm going to the party tonight."</li>
                        <li><b>Last week</b>:&nbsp;"Rohan visited her grandma last week."</li>
                        <li><b>Next month</b>:&nbsp;"They are shifting next month."</li>
                        <li><b>Now</b>:&nbsp;"I am super tired and going to sleep now."</li>
                        <li><b>Then</b>:&nbsp;"We discussed and finished the project then."&nbsp;</li>
                        <li><b>For a year</b>:&nbsp;"She lived in Switzerland for a year."</li>
                        <li><b>Since childhood</b>:&nbsp;"I have lived with my grandparents since childhood."</li>
                        <li><b>Temporarily</b>:&nbsp;"She made a tattoo temporarily."&nbsp;</li>
                        <li><b>Always</b>:&nbsp;"She always arrives late to school and gets punished."</li>
                        <li><b>Never</b>:&nbsp;"She never eats vegetables, but likes broccoli."</li>
                        <li><b>Often</b>:&nbsp;"I often go to my friend’s house to play."</li>
                        <li><b>Sometimes</b>:&nbsp;"Sometimes, in the office, I feel lonely and think of resigning."</li>
                        <li><b>Rarely</b>:&nbsp;"She rarely misses a chance to not win a game."</li>
                        <li><b>Hourly</b>:&nbsp;"The Mumbai train runs hourly, and this is the peak time."</li>
                        <li><b>Weekly</b>:&nbsp;"In our office, we have a team meeting weekly”.</li>
                    </ol>
                    <h2 id="list-of-adverbs-of-time" class="text-xl md:text-2xl font-semibold text-[#242331] scroll-mt-24">List of Adverbs of Time</h2>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]">An Adverb of time indicate when an action occurs and can be used in various positions within a sentence, often at the end, beginning or before the main verb to emphasise. Many think that there is a limited number of words in this, but it’s not true, as there is a long&nbsp;adverb of time list&nbsp;of words. Numerous words under this can be used according to the situation to express your thoughts or any action. Here is the table of them, and also shared more than&nbsp;10 example of adverb of time&nbsp;through sentences.</p>
                    <div style="background: rgb(232, 232, 232); padding: 5px; border-style: solid; border-width: 3px;">
                        <table style="width: 334px;">
                            <tbody>
                                <tr>
                                    <td colspan="3" style="width: 312px;">
                                        <p style="text-align: center;"><strong>Examples of Adverbs of Time</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 102px;">
                                        <p>Soon</p>
                                    </td>
                                    <td style="width: 110px;">
                                        <p>Daily</p>
                                    </td>
                                    <td style="width: 100px;">
                                        <p>Weekly</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 102px;">
                                        <p>Monthly</p>
                                    </td>
                                    <td style="width: 110px;">
                                        <p>Yearly</p>
                                    </td>
                                    <td style="width: 100px;">
                                        <p>Annually</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 102px;">
                                        <p>Quarterly</p>
                                    </td>
                                    <td style="width: 110px;">
                                        <p>Tomorrow</p>
                                    </td>
                                    <td style="width: 100px;">
                                        <p>Yesterday</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 102px;">
                                        <p>Today</p>
                                    </td>
                                    <td style="width: 110px;">
                                        <p>Day before yesterday</p>
                                    </td>
                                    <td style="width: 100px;">
                                        <p>Day after tomorrow</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 102px;">
                                        <p>Recently</p>
                                    </td>
                                    <td style="width: 110px;">
                                        <p>Now</p>
                                    </td>
                                    <td style="width: 100px;">
                                        <p>Often</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 102px;">
                                        <p>Then</p>
                                    </td>
                                    <td style="width: 110px;">
                                        <p>Always</p>
                                    </td>
                                    <td style="width: 100px;">
                                        <p>Currently</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 102px;">
                                        <p>Momentarily</p>
                                    </td>
                                    <td style="width: 110px;">
                                        <p>Rarely</p>
                                    </td>
                                    <td style="width: 100px;">
                                        <p>Everyday</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 102px;">
                                        <p>Immediately</p>
                                    </td>
                                    <td style="width: 110px;">
                                        <p>Later</p>
                                    </td>
                                    <td style="width: 100px;">
                                        <p>Last year</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 102px;">
                                        <p>Last month</p>
                                    </td>
                                    <td style="width: 110px;">
                                        <p>Last week</p>
                                    </td>
                                    <td style="width: 100px;">
                                        <p>Earlier</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 102px;">
                                        <p>Yesterday</p>
                                    </td>
                                    <td style="width: 110px;">
                                        <p>Tomorrow</p>
                                    </td>
                                    <td style="width: 100px;">
                                        <p>Always</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 102px;">
                                        <p>Never</p>
                                    </td>
                                    <td style="width: 110px;">
                                        <p>Frequently</p>
                                    </td>
                                    <td style="width: 100px;">
                                        <p>Annually</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 102px;">
                                        <p>Hourly</p>
                                    </td>
                                    <td style="width: 110px;">
                                        <p>yet</p>
                                    </td>
                                    <td style="width: 100px;">
                                        <p>tonight</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 102px;">
                                        <p>afterwards</p>
                                    </td>
                                    <td style="width: 110px;">
                                        <p>Before</p>
                                    </td>
                                    <td style="width: 100px;">
                                        <p>By the time</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 102px;">
                                        <p>Long ago</p>
                                    </td>
                                    <td style="width: 110px;">
                                        <p>At last</p>
                                    </td>
                                    <td style="width: 100px;">
                                        <p>still</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]">These are the&nbsp;adverb of time list,&nbsp;they are common and used in everyday life. However, their placement must be in the right place, as many get confused with them. Therefore, to make you understand, we have shared&nbsp;adverb of time examples sentences&nbsp;along with the words. In addition, you need to know in which tenses it can be used. Thus, in the next sections, we will distinguish them according to past, present, and future.&nbsp;</p>
                    <h3 id="adverb-of-time-past" class=" text-lg md:text-xl font-semibold text-[#242331] scroll-mt-24">Adverb of Time – Past</h3>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]">The adverb of time is used to describe the action taking place, and if it is taken in past tenses, you can use words of&nbsp;Adverb of time&nbsp;that express the past. Here is the&nbsp;adverb of time examples, along with the meaning of the words.</p>
                    <div class="table-custom">
                        <table class="`text-left`">
                            <tbody>
                                <tr>
                                    <th>Adverb</th>
                                    <th>Category</th>
                                    <th>Meaning</th>
                                    <th>Example</th>
                                </tr>
                                <tr>
                                    <td>Yesterday</td>
                                    <td>Past</td>
                                    <td>Day before today</td>
                                    <td>I have joined classes from&nbsp;yesterday.</td>
                                </tr>
                                <tr>
                                    <td>Ago</td>
                                    <td>Past</td>
                                    <td>A particular time before now (e.g., 3 days ago)</td>
                                    <td>She graduated from the University of Oxford five years&nbsp;ago.</td>
                                </tr>
                                <tr>
                                    <td>Last night</td>
                                    <td>Past</td>
                                    <td>The previous night before today</td>
                                    <td>I watched a heart-touching movie&nbsp;last night.</td>
                                </tr>
                                <tr>
                                    <td>Previously</td>
                                    <td>Past</td>
                                    <td>At an previous time</td>
                                    <td>Currently, I am living in Paris,&nbsp;previously, I was living in Germany.</td>
                                </tr>
                                <tr>
                                    <td>Once</td>
                                    <td>Past</td>
                                    <td>At a time that is not specified which happened in past</td>
                                    <td>He&nbsp;once&nbsp;said he would resign and it’s been three years since he has been working here.</td>
                                </tr>
                                <tr>
                                    <td>Recently</td>
                                    <td>Past</td>
                                    <td>A short time ago</td>
                                    <td>Recently, I shifted to a new area, famous for its peaceful nature.</td>
                                </tr>
                                <tr>
                                    <td>Last week/month/year</td>
                                    <td>Past</td>
                                    <td>Denoting to the week, month, or year immediately preceding the current one</td>
                                    <td>1.&nbsp;I was in Mumbailast week.2.&nbsp;The culprit stayed in this hostellast month.3.&nbsp;He has been working here for the&nbsp;last 2 years.</td>
                                </tr>
                                <tr>
                                    <td>The day before</td>
                                    <td>Past</td>
                                    <td>the day immediately before yesterday</td>
                                    <td>The day before&nbsp;the birthday part, we finalised the lunch menu.</td>
                                </tr>
                                <tr>
                                    <td>Formerly</td>
                                    <td>Past</td>
                                    <td>In the past, specially long ago</td>
                                    <td>Bhamini was&nbsp;formerly&nbsp;a teacher before becoming a content writer.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 id="adverb-of-time-present" class=" text-lg md:text-xl font-semibold text-[#242331] scroll-mt-24">Adverb of Time – Present</h3>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]">Want to talk about today, but don’t know which&nbsp;adverb of time in present simple tense&nbsp;is right to express the action. Here are some words that can help you to express your happenings in the present tense.</p>
                    <div class="table-custom">
                        <table class="`text-left`">
                            <tbody>
                                <tr>
                                    <th>Adverb</th>
                                    <th>Category</th>
                                    <th>Meaning</th>
                                    <th>Example</th>
                                </tr>
                                <tr>
                                    <td>Already</td>
                                    <td>Past/Present</td>
                                    <td>Earlier than expected or before now</td>
                                    <td>I have&nbsp;already&nbsp;finished my task, now it’s time to go home.</td>
                                </tr>
                                <tr>
                                    <td>Just</td>
                                    <td>Present</td>
                                    <td>A very short time ago (recently)</td>
                                    <td>The train has&nbsp;just&nbsp;arrived and we thought we were going to miss.</td>
                                </tr>
                                <tr>
                                    <td>Now</td>
                                    <td>Present</td>
                                    <td>At this moment</td>
                                    <td>The party is over&nbsp;now.</td>
                                </tr>
                                <tr>
                                    <td>Nowadays</td>
                                    <td>Present</td>
                                    <td>In the present time period</td>
                                    <td>Nowadays, it has become common to use smartphones.</td>
                                </tr>
                                <tr>
                                    <td>Currently</td>
                                    <td>Present</td>
                                    <td>At the current time</td>
                                    <td>Currently, the company is experiencing rapid growth.</td>
                                </tr>
                                <tr>
                                    <td>Today</td>
                                    <td>Present</td>
                                    <td>On this day</td>
                                    <td>I have to go early, as there is a parents’ meetingtoday.OrToday&nbsp;is Mother’s Day and coincidentally my mother’s birthday as well.</td>
                                </tr>
                                <tr>
                                    <td>Still</td>
                                    <td>Present</td>
                                    <td>Ongoing up to now</td>
                                    <td>I am&nbsp;still&nbsp;waiting for your reply; will you please check my email?</td>
                                </tr>
                                <tr>
                                    <td>Yet</td>
                                    <td>Present</td>
                                    <td>up to the present time</td>
                                    <td>We don’t want more staff members&nbsp;yet, but may be in future.</td>
                                </tr>
                                <tr>
                                    <td>while</td>
                                    <td>Present</td>
                                    <td>throughout the time that</td>
                                    <td>I enjoy listening to music&nbsp;while&nbsp;working in the office.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 id="adverb-of-time-future" class=" text-lg md:text-xl font-semibold text-[#242331] scroll-mt-24">Adverb of Time – Future</h3>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]">In future, something is going to take place and you want to share that with your beloved one, but don’t know how. Use these future adverb of time. Here is the table of future&nbsp;adverb of time examples&nbsp;belowalong with word’s meaning.</p>
                    <div class="table-custom">
                        <table class="`text-left`">
                            <tbody>
                                <tr>
                                    <th>Adverb</th>
                                    <th>Category</th>
                                    <th>Meaning</th>
                                    <th>Example</th>
                                </tr>
                                <tr>
                                    <td>Soon</td>
                                    <td>Future</td>
                                    <td>In a short or specific time from now</td>
                                    <td>She is going to open her own shopsoonOr&nbsp;I will be there&nbsp;soon&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Later</td>
                                    <td>Future</td>
                                    <td>A specific time in the future</td>
                                    <td>I will call you&nbsp;later.</td>
                                </tr>
                                <tr>
                                    <td>Tomorrow</td>
                                    <td>Future</td>
                                    <td>The day after today</td>
                                    <td>A meeting is organised in the office&nbsp;tomorrow.</td>
                                </tr>
                                <tr>
                                    <td>In the future</td>
                                    <td>Future</td>
                                    <td>At any time after now</td>
                                    <td>I want to become an entrepreneur&nbsp;in the future.</td>
                                </tr>
                                <tr>
                                    <td>Eventually</td>
                                    <td>Future</td>
                                    <td>At some point in the future</td>
                                    <td>"After searching for three days, Rohan&nbsp;eventually&nbsp;found his lost dog"</td>
                                </tr>
                                <tr>
                                    <td>Next week/month/years</td>
                                    <td>Future</td>
                                    <td>The week, month, year following the current week, month, year.</td>
                                    <td>We will be going on vacationnext week.Next month, I will go to my home.She will be going to come India&nbsp;next year.</td>
                                </tr>
                                <tr>
                                    <td>Then</td>
                                    <td>Future</td>
                                    <td>that specific time in the future</td>
                                    <td>If you finish your work,&nbsp;then&nbsp;only you can play.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]">These are the adverb of time in past, present and future form, along with words, meaning and examples. This will help you to use the words according to the action taking place at a specific time. Now, let’s test your knowledge by solving the&nbsp;adverbs of time worksheet&nbsp;in the next section.</p>
                    <h2 id="worksheet" class="text-xl md:text-2xl font-semibold text-[#242331] scroll-mt-24">Worksheet</h2>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]">After exploring everything about the adverb of time, it's vital to check your learning. For that, we have shared an&nbsp;adverbs of time worksheet. In this, you will get fill in the blanks in which you have to use the right adverb to make it a complete sentence. To ease your pathway, we have shared an&nbsp;adverb of time list&nbsp;or key box below the questions to use the right one. After solving them, cross-check your answer through the answer key. So let’s start solving them.</p>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]"><b>Exercise -&nbsp;Fill&nbsp;in the blanks in which you have to use the right adverb to make it a complete sentence</b></p>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]">(always, monthly, immediately, earlier, tomorrow, last week, today, next week, tonight, yesterday)</p>
                    <ol class="list-decimal pl-7 py-1">
                        <li>Will you be able to finalize the venue for the event by _______?</li>
                        <li>__________, we are going for a dinner in a well-known Indo-Chinese restaurant.</li>
                        <li>__________, we notified the authorities that the light was not working in our area.</li>
                        <li>Did you go to college _________?</li>
                        <li>I will be visiting my grandfather ___________.</li>
                        <li>The coach asked the students to fill in the agreement forms ___________.</li>
                        <li>My mother’s friends make sure to meet up ________.</li>
                        <li>Ishan stayed at home __________.</li>
                        <li>Ashish _______ has Biscoff cheesecake from Glen’s Bake house.</li>
                        <li>__________, the nurses were found rushing to the ICU room.</li>
                    </ol>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]"><b>Answer key</b></p>
                    <ol class="list-decimal pl-7 py-1">
                        <li>Tomorrow</li>
                        <li>Tonight</li>
                        <li>Last week</li>
                        <li>Yesterday</li>
                        <li>Next week</li>
                        <li>Immediately</li>
                        <li>Monthly</li>
                        <li>Today</li>
                        <li>Always</li>
                        <li>Earlier</li>
                    </ol>
                    <h2 id="conclusion" class="text-xl md:text-2xl font-semibold text-[#242331] scroll-mt-24">Conclusion</h2>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]">Here we have come to the end of this blog, the adverb of time plays an important role not only in grammar but in everyday life to express the action taking place. It is vital to understand the rules and their usage for&nbsp;adverbs of time sentences, and for that, an example would be a helping hand. Also, solving as many worksheets as possible can help you master. If you need exercise on this or any other grammar form, such as&nbsp;<a href="https://www.gradding.com/blog/english/nouns">noun</a>,&nbsp;<a href="https://www.gradding.com/blog/english/subject-in-grammar">subject</a>,&nbsp;<a href="https://www.gradding.com/blog/english/verbs">verb</a>,&nbsp;<a href="https://www.gradding.com/blog/english/adjectives">adjective</a>,&nbsp;<a href="https://www.gradding.com/blog/english/object-in-grammar">object</a>&nbsp;and more, without wavering, reach out to our experts at Gradding.com. Thus, learn the adverb of time with them to become proficient. Happy learning!</p>
                    <h2 id="faqs" class="text-xl md:text-2xl font-semibold text-[#242331] scroll-mt-24">FAQs</h2>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]"><b>1. What is an adverb of time with examples?</b></p>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]"><b>Answer</b>: The adverb of time is used to describe action taking place, how many times it happens and how long it lasts. Here are some of the examples</p>
                    <ol class="list-decimal pl-7 py-1">
                        <li>My parcel arrived yesterday, but it was damaged</li>
                        <li>The train was 1 hour late</li>
                        <li>I haven’t met her since last week</li>
                        <li>He often goes to his grandmother's house</li>
                        <li>Ishan never drinks alcohol.</li>
                    </ol>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]"><b>2. What are the 15 words of the adverb of time?</b></p>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]"><b>Answer</b>: Adverb of time also known as temporal adverb is used to signify a verb to specify when an action has or will take place. It answers questions like “when”, “how often ?”, and “for how long ”. Here are 15 words of the adverb of time.</p>
                    <ul class="list-disc pl-7 py-1">
                        <li>Now</li>
                        <li>Later</li>
                        <li>Soon</li>
                        <li>Then</li>
                        <li>Today</li>
                        <li>Tomorrow</li>
                        <li>yesterday</li>
                        <li>Never</li>
                        <li>always</li>
                        <li>Rarely</li>
                        <li>Often</li>
                        <li>Sometimes</li>
                        <li>Recently</li>
                        <li>Already</li>
                        <li>Finally</li>
                    </ul>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]"><b>3. What are the rules for adverb of time?</b></p>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]"><b>Answer</b>: The Rules of adverb of time can help you to understand the approach for using them correctly. Firstly, their placement should be accurate either at the end or the beginning of the sentence, and before the main verb. Secondly, when using adverbs of time more than one in a sentence, answer this question: “how long”, how often”, and “when”. Thirdly, using the adverb of time before the verb to emphasise a specific aspect of the sentence.</p>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]"><b>4. How to use the adverb of time?</b></p>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]"><b>Answer</b>:&nbsp;Adverb of time is used to describe “when”, “for how long”, and “how often something takes place”. It can be used at the beginning, middle or end of the sentences. In addition, when you are using an adverb of time with adverbs like place or manner in a singular clause, it should be aligned in a specific order, like manner, place and time.&nbsp;</p>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]"><b>5. What are the 10 examples of the adverb of time?</b></p>
                    <p class="text-[15px] md:text-base font-normal py-1 text-[#3f3d3d]"><b>Answer</b>: Here are 10 examples of the adverb of time</p>
                    <ol class="list-decimal pl-7 py-1">
                        <li>Today– I have an important meeting today&nbsp;</li>
                        <li>Tomorrow– We are going on a picnic tomorrow</li>
                        <li>Later– I will call you later.</li>
                        <li>Often– Andrew often go the library to read books&nbsp;</li>
                        <li>Never- I have never experienced this type of trekking</li>
                        <li>Always– She always reaches the office on time.</li>
                        <li>Soon– She is going to marry soon</li>
                        <li>Still– There is still some time in Christmas.&nbsp;</li>
                        <li>Yet– They haven’t met Sofia’s baby yet.</li>
                        <li>By the time– by the time we arrived, the function was already started</li>
                    </ol>
                </div> -->
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
                    href="https://www.gradding.com/offers">
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

    <style>
        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
    </style>
    <div class=" m-auto my-12 sm:my-14 xl:px-0 md:-pl-10 blog-slider">
        <h2 class=" text-2xl lg:text-[28px] xl:text-[30px] 2xl:text-[34px] font-normal text-center">Doctor Bano<!-- -->
            <span class="font-medium inline-block text-primary">Blogs</span>
        </h2>
        <div class="flex gap-3 items-center justify-center mt-4 mb-2">
            <p class="text-[14px] text-[#6E6E73] font-medium">Want to read more?</p><a
                class="p-2 font-medium rounded-md text-[14px] inline-block bg-[#006ac91a] text-primary hover:bg-[#006ac9] hover:text-white capitalize"
                href="https://www.gradding.com/blog">explore blogs<svg stroke="currentColor" fill="currentColor"
                    stroke-width="0" viewBox="0 0 320 512" class="inline-block font-normal" height="1em" width="1em"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                    </path>
                </svg></a>
        </div>
        <div class="slider-container swiper swiper-initialized swiper-horizontal swiper-backface-hidden" lazy="true">
            <div class="slider swiper-wrapper">
                <div class="slide swiper-slide swiper-slide-active first:ml-[1.6rem] first:sm:ml-[3rem] first:lg:ml-[4rem] first:xl:ml-[6rem] first:2xl:ml-[18rem] sm:mt-3 sm:mb-16"
                    data-swiper-slide-index="0" style="width: 497.333px; margin-right: 40px;"><a
                        class="overflow-hidden hover:shadow-[0px_4px_14px_0px_#00000040] rounded-[16px] block transition-all ease-in-out"
                        href="https://www.gradding.com/blog/english/adverbs-of-frequency"><img
                            title="Adverb of Frequency" loading="lazy" width="408" height="230" decoding="async"
                            data-nimg="1" class="h-full w-full" style="color:transparent"
                            src="<?= base_url('public/') ?>assets/images/blogs/adverb-of-frequency-6895.webp">
                        <div class="bg-white p-3 lg:p-4 w-full"><span
                                class="font-semibold text-[10px] lg:text-xs xl:text-sm text-[#6E6E73]">
                                <!-- -->English<!-- --> </span>
                            <h3
                                class="text-limit text-ellipsis font-semibold text-sm lg:text-base xl:text-lg text-[#1D1D1F] md:min-h-14 min-h-10">
                                <!-- -->Adverb of Frequency: Definition, Examples, Rules, Worksheet<!-- -->
                            </h3><span class="font-semibold text-[10px] lg:text-xs xl:text-sm text-[#6E6E73]">
                                <!-- -->Aug 08,
                                2025<!-- --> </span>
                        </div>
                    </a></div>
                <div class="slide swiper-slide swiper-slide-next first:ml-[1.6rem] first:sm:ml-[3rem] first:lg:ml-[4rem] first:xl:ml-[6rem] first:2xl:ml-[18rem] sm:mt-3 sm:mb-16"
                    data-swiper-slide-index="1" style="width: 497.333px; margin-right: 40px;"><a
                        class="overflow-hidden hover:shadow-[0px_4px_14px_0px_#00000040] rounded-[16px] block transition-all ease-in-out"
                        href="https://www.gradding.com/blog/english/adverbs-of-degree"><img
                            title="What Is Adverbs of Degree?" loading="lazy" width="408" height="230" decoding="async"
                            data-nimg="1" class="h-full w-full" style="color:transparent"
                            src="<?= base_url('public/') ?>assets/images/blogs/adverbs-of-degree-6894.webp">
                        <div class="bg-white p-3 lg:p-4 w-full"><span
                                class="font-semibold text-[10px] lg:text-xs xl:text-sm text-[#6E6E73]">
                                <!-- -->English<!-- --> </span>
                            <h3
                                class="text-limit text-ellipsis font-semibold text-sm lg:text-base xl:text-lg text-[#1D1D1F] md:min-h-14 min-h-10">
                                <!-- -->Adverbs of Degree: Definition, Rules, and Examples<!-- -->
                            </h3><span class="font-semibold text-[10px] lg:text-xs xl:text-sm text-[#6E6E73]">
                                <!-- -->Aug 07,
                                2025<!-- --> </span>
                        </div>
                    </a></div>
                <div class="slide swiper-slide first:ml-[1.6rem] first:sm:ml-[3rem] first:lg:ml-[4rem] first:xl:ml-[6rem] first:2xl:ml-[18rem] sm:mt-3 sm:mb-16"
                    data-swiper-slide-index="2" style="width: 497.333px; margin-right: 40px;"><a
                        class="overflow-hidden hover:shadow-[0px_4px_14px_0px_#00000040] rounded-[16px] block transition-all ease-in-out"
                        href="https://www.gradding.com/blog/english/prepositions-of-place"><img
                            title="Prepositions of Place" loading="lazy" width="408" height="230" decoding="async"
                            data-nimg="1" class="h-full w-full" style="color:transparent"
                            src="<?= base_url('public/') ?>assets/images/blogs/prepositions-of-place-6892.webp">
                        <div class="bg-white p-3 lg:p-4 w-full">
                            <span class="font-semibold text-[10px] lg:text-xs xl:text-sm text-[#6E6E73]">
                                <!-- -->English<!-- --> </span>
                            <h3
                                class="text-limit text-ellipsis font-semibold text-sm lg:text-base xl:text-lg text-[#1D1D1F] md:min-h-14 min-h-10">
                                <!-- -->Prepositions of Place: Explanation, Examples, &amp; Exercise<!-- -->
                            </h3><span class="font-semibold text-[10px] lg:text-xs xl:text-sm text-[#6E6E73]">
                                <!-- -->Aug 06,
                                2025<!-- --> </span>
                        </div>
                    </a></div>
                <div class="slide swiper-slide first:ml-[1.6rem] first:sm:ml-[3rem] first:lg:ml-[4rem] first:xl:ml-[6rem] first:2xl:ml-[18rem] sm:mt-3 sm:mb-16"
                    data-swiper-slide-index="3" style="width: 497.333px; margin-right: 40px;"><a
                        class="overflow-hidden hover:shadow-[0px_4px_14px_0px_#00000040] rounded-[16px] block transition-all ease-in-out"
                        href="https://www.gradding.com/blog/english/adverbs-of-manner"><img title="Adverbs of Manner"
                            loading="lazy" width="408" height="230" decoding="async" data-nimg="1" class="h-full w-full"
                            style="color:transparent"
                            src="<?= base_url('public/') ?>assets/images/blogs/prepositions-of-place-1-6892.webp">
                        <div class="bg-white p-3 lg:p-4 w-full">
                            <span class="font-semibold text-[10px] lg:text-xs xl:text-sm text-[#6E6E73]">
                                <!-- -->English<!-- --> </span>
                            <h3
                                class="text-limit text-ellipsis font-semibold text-sm lg:text-base xl:text-lg text-[#1D1D1F] md:min-h-14 min-h-10">
                                <!-- -->Adverbs of Manner: Rules to Form, Examples &amp; Practice Exercise<!-- -->
                            </h3>
                            <span class="font-semibold text-[10px] lg:text-xs xl:text-sm text-[#6E6E73]"> <!-- -->Aug
                                06, 2025<!-- --> </span>
                        </div>
                    </a></div>
                <div class="slide swiper-slide first:ml-[1.6rem] first:sm:ml-[3rem] first:lg:ml-[4rem] first:xl:ml-[6rem] first:2xl:ml-[18rem] sm:mt-3 sm:mb-16"
                    data-swiper-slide-index="4" style="width: 497.333px; margin-right: 40px;"><a
                        class="overflow-hidden hover:shadow-[0px_4px_14px_0px_#00000040] rounded-[16px] block transition-all ease-in-out"
                        href="https://www.gradding.com/blog/english/adverbs-of-place"><img title="Adverbs of Place"
                            loading="lazy" width="408" height="230" decoding="async" data-nimg="1" class="h-full w-full"
                            style="color:transparent"
                            src="<?= base_url('public/') ?>assets/images/blogs/adverbs-of-place-6891.webp">
                        <div class="bg-white p-3 lg:p-4 w-full"><span
                                class="font-semibold text-[10px] lg:text-xs xl:text-sm text-[#6E6E73]">
                                <!-- -->English<!-- --> </span>
                            <h3
                                class="text-limit text-ellipsis font-semibold text-sm lg:text-base xl:text-lg text-[#1D1D1F] md:min-h-14 min-h-10">
                                <!-- -->Adverbs of Place: Definition, Types, Examples, and Worksheet<!-- -->
                            </h3><span class="font-semibold text-[10px] lg:text-xs xl:text-sm text-[#6E6E73]">
                                <!-- -->Aug 05,
                                2025<!-- --> </span>
                        </div>
                    </a></div>
                <div class="slide swiper-slide first:ml-[1.6rem] first:sm:ml-[3rem] first:lg:ml-[4rem] first:xl:ml-[6rem] first:2xl:ml-[18rem] sm:mt-3 sm:mb-16"
                    data-swiper-slide-index="5" style="width: 497.333px; margin-right: 40px;"><a
                        class="overflow-hidden hover:shadow-[0px_4px_14px_0px_#00000040] rounded-[16px] block transition-all ease-in-out"
                        href="https://www.gradding.com/blog/english/subordinating-conjunctions"><img
                            title="Subordinating Conjunction" loading="lazy" width="408" height="230" decoding="async"
                            data-nimg="1" class="h-full w-full" style="color:transparent"
                            src="<?= base_url('public/') ?>assets/images/blogs/subordinating-conjunction-6891.webp">
                        <div class="bg-white p-3 lg:p-4 w-full"><span
                                class="font-semibold text-[10px] lg:text-xs xl:text-sm text-[#6E6E73]">
                                <!-- -->English<!-- --> </span>
                            <h3
                                class="text-limit text-ellipsis font-semibold text-sm lg:text-base xl:text-lg text-[#1D1D1F] md:min-h-14 min-h-10">
                                <!-- -->Subordinating Conjunctions: Common Uses, Examples &amp; Worksheets<!-- -->
                            </h3>
                            <span class="font-semibold text-[10px] lg:text-xs xl:text-sm text-[#6E6E73]"> <!-- -->Aug
                                05, 2025<!-- --> </span>
                        </div>
                    </a></div>
                <div class="slide swiper-slide first:ml-[1.6rem] first:sm:ml-[3rem] first:lg:ml-[4rem] first:xl:ml-[6rem] first:2xl:ml-[18rem] sm:mt-3 sm:mb-16"
                    data-swiper-slide-index="6" style="width: 497.333px; margin-right: 40px;"><a
                        class="overflow-hidden hover:shadow-[0px_4px_14px_0px_#00000040] rounded-[16px] block transition-all ease-in-out"
                        href="https://www.gradding.com/blog/english/uncountable-nouns"><img title="Uncountable Nouns"
                            loading="lazy" width="408" height="230" decoding="async" data-nimg="1" class="h-full w-full"
                            style="color:transparent"
                            src="<?= base_url('public/') ?>assets/images/blogs/uncountable-nouns-6891.webp">
                        <div class="bg-white p-3 lg:p-4 w-full"><span
                                class="font-semibold text-[10px] lg:text-xs xl:text-sm text-[#6E6E73]">
                                <!-- -->English<!-- --> </span>
                            <h3
                                class="text-limit text-ellipsis font-semibold text-sm lg:text-base xl:text-lg text-[#1D1D1F] md:min-h-14 min-h-10">
                                <!-- -->Uncountable Nouns: Meaning, Definition, Examples, Worksheet<!-- -->
                            </h3><span class="font-semibold text-[10px] lg:text-xs xl:text-sm text-[#6E6E73]">
                                <!-- -->Aug 05,
                                2025<!-- --> </span>
                        </div>
                    </a></div>
            </div>
        </div>
        <div class="flex justify-center gap-28">
            <button class="prev swiper-button-prev-custom flex items-center gap-1 text-base">
                <span>
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.41406 8.34263L7.36406 12.2926C7.54171 12.4821 7.63869 12.7332 7.63448 12.9929C7.63026 13.2526 7.52518 13.5004 7.34146 13.684C7.15775 13.8676 6.90982 13.9725 6.65014 13.9765C6.39045 13.9806 6.13938 13.8834 5.95006 13.7056L0.293058 8.04963C0.199873 7.95697 0.125924 7.84681 0.0754624 7.72548C0.0250011 7.60415 -0.000976563 7.47404 -0.000976562 7.34263C-0.000976562 7.21122 0.0250011 7.08111 0.0754624 6.95977C0.125924 6.83844 0.199873 6.72828 0.293058 6.63563L5.95006 0.978628C6.0423 0.883118 6.15265 0.806936 6.27465 0.754527C6.39666 0.702118 6.52788 0.674531 6.66066 0.673378C6.79344 0.672224 6.92512 0.697525 7.04801 0.747806C7.17091 0.798087 7.28256 0.87234 7.37645 0.966233C7.47035 1.06013 7.5446 1.17178 7.59488 1.29467C7.64516 1.41757 7.67046 1.54925 7.66931 1.68203C7.66815 1.81481 7.64057 1.94603 7.58816 2.06803C7.53575 2.19004 7.45957 2.30038 7.36406 2.39263L3.41406 6.34263H13.0001C13.2653 6.34263 13.5196 6.44798 13.7072 6.63552C13.8947 6.82306 14.0001 7.07741 14.0001 7.34263C14.0001 7.60784 13.8947 7.8622 13.7072 8.04973C13.5196 8.23727 13.2653 8.34263 13.0001 8.34263H3.41406Z"
                            fill="#0F172A"></path>
                    </svg>
                </span>
                <span>Prev</span>
            </button>
            <button class="next swiper-button-next-custom flex items-center gap-1 text-base">
                <span>Next</span>
                <span>
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_5_2)">
                            <path
                                d="M10.5859 5.65746L6.63591 1.70749C6.45826 1.51799 6.36128 1.26689 6.36549 1.00719C6.36971 0.747492 6.47479 0.499692 6.65851 0.316092C6.84222 0.132492 7.09015 0.0275928 7.34983 0.0235928C7.60952 0.0194928 7.86059 0.116693 8.04991 0.294493L13.7069 5.95046C13.8001 6.04312 13.874 6.15328 13.9245 6.27461C13.975 6.39594 14.0009 6.52605 14.0009 6.65746C14.0009 6.78887 13.975 6.91898 13.9245 7.04032C13.874 7.16165 13.8001 7.27181 13.7069 7.36446L8.04991 13.0215C7.95767 13.117 7.84732 13.1932 7.72532 13.2456C7.60331 13.298 7.47209 13.3256 7.33931 13.3267C7.20653 13.3279 7.07485 13.3026 6.95196 13.2523C6.82906 13.202 6.71741 13.1278 6.62352 13.0339C6.52962 12.94 6.45537 12.8283 6.40509 12.7054C6.35481 12.5825 6.32951 12.4508 6.33066 12.3181C6.33182 12.1853 6.3594 12.0541 6.41181 11.9321C6.46422 11.8101 6.5404 11.6997 6.63591 11.6075L10.5859 7.65746L0.99987 7.65746C0.73467 7.65746 0.48037 7.55211 0.29277 7.36457C0.10527 7.17703 -0.000129819 6.92268 -0.000129819 6.65746C-0.000129819 6.39225 0.10527 6.13789 0.29277 5.95036C0.48037 5.76282 0.73467 5.65746 0.99987 5.65746L10.5859 5.65746Z"
                                fill="#0F172A"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_5_2">
                                <rect width="14" height="14" fill="white" transform="matrix(-1 0 0 -1 14 14.0001)">
                                </rect>
                            </clipPath>
                        </defs>
                    </svg>
                </span>
            </button>
        </div>
    </div>

    <script>
        const slider = document.querySelector('.slider');
        const slides = document.querySelectorAll('.slide');
        const prevButton = document.querySelector('.prev');
        const nextButton = document.querySelector('.next');

        let currentIndex = 0;
        const totalSlides = slides.length - 4;


        function updateSlider() {
            slider.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % (totalSlides);

            updateSlider();
        });

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;

            updateSlider();
        });
    </script>

</main>

<?= $this->endSection() ?>