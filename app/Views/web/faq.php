<?= $this->extend('web/components/assemble') ?>

<?= $this->section('content') ?>

<main>
    <div class="container xl:my-10 md:my-8 mb-8">
        <div class="relative flex flex-col lg:gap-10 md:gap-8 gap-4">
            <h1 class="text-heading xl:text-5xl lg:text-4xl text-3xl text-center font-black">Hello, how can we help?</h1>
            <figure class="absolute left-10 md:block hidden"><svg width="22px" height="22px" viewBox="0 0 22 22">
                    <polygon points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 " fill="#6f42c1"></polygon>
                </svg></figure>
            <figure class="absolute right-44 top-24 md:block hidden"><svg width="27px" height="27px">
                    <path d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z" fill="#fd7e14"></path>
                </svg></figure>
            <div class="flex gap-2 justify-between p-2 bg-white rounded xl:w-1/2 md:w-3/4 w-full shadow-xl mx-auto">
                <div class="group flex flex-col data-[hidden=true]:hidden w-full relative justify-end data-[has-label=true]:mt-[calc(theme(fontSize.small)_+_10px)] bg-white" data-slot="base" data-filled="true" data-filled-within="true">
                    <div data-slot="main-wrapper" class="h-full flex flex-col">
                        <div data-slot="input-wrapper" class="relative w-full inline-flex tap-highlight-transparent flex-row items-center px-3 gap-3 data-[hover=true]:bg-default-200 group-data-[focus=true]:bg-default-100 h-10 min-h-10 rounded-medium transition-background motion-reduce:transition-none !duration-150 outline-none group-data-[focus-visible=true]:z-10 group-data-[focus-visible=true]:ring-2 group-data-[focus-visible=true]:ring-focus group-data-[focus-visible=true]:ring-offset-2 group-data-[focus-visible=true]:ring-offset-background inputWrapper bg-white shadow-none" style="cursor: text;">
                            <div data-slot="inner-wrapper" class="inline-flex w-full items-center h-full box-border"><input data-slot="input" class="w-full font-normal bg-transparent !outline-none placeholder:text-foreground-500 focus-visible:outline-none data-[has-start-content=true]:ps-1.5 data-[has-end-content=true]:pe-1.5 file:cursor-pointer file:bg-transparent file:border-0 autofill:bg-transparent bg-clip-text group-data-[has-value=true]:text-default-foreground text-base" aria-label="Ask a question..." placeholder="Ask a question..." id="react-aria8712592775-:r4q:" type="text" value="" title=""></div>
                        </div>
                    </div>
                </div><button class="z-0 group relative inline-flex items-center justify-center box-border appearance-none select-none whitespace-nowrap font-normal subpixel-antialiased overflow-hidden tap-highlight-transparent data-[pressed=true]:scale-[0.97] outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 min-w-20 h-10 gap-2 [&amp;>svg]:max-w-[theme(spacing.8)] transition-transform-colors-opacity motion-reduce:transition-none data-[hover=true]:opacity-hover rounded-md text-white bg-[#1d3b53] text-base py-2 px-4" type="button">Search</button>
            </div>
        </div>
    </div>

    

    <div class="xl:py-10 md:py-8 py-4 md:bg-white">
        <div class="container">
            <div class="flex md:flex-nowrap flex-wrap justify-between items-start">
                <div class="md:w-3/5 w-full md:order-1 order-2">
                    <h1 class="text-heading xl:text-3xl text-2xl font-black mb-6 ">Frequently Asked Questions</h1>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">How do I use DoctorBano.com to find study-abroad programs?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">To find study abroad programs on DoctorBano.com, go to the study abroad section of the website and use the search filters to narrow down your options based on location, academic focus, and program length. You can also browse the programs listed on the site and click on individual program pages to learn more.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Does DoctorBano.com offer scholarships or financial aid for studying abroad?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">DoctorBano.com offer scholarships or financial aid for studying abroad, and we also provide resources and information on funding options that may be available to you. You can also search for scholarships and grants on our website and use our database to find external funding sources.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">How can I get counselling after choosing this platform?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">At DoctorBano.com, we only list study abroad programs that are affiliated with reputable universities or organizations. We also encourage students to read program reviews and conduct additional research before making a decision.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Can DoctorBano.com assist with visa applications or other paperwork for studying abroad?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">DoctorBano.com provides guidance and resources on visa applications and other paperwork required for studying abroad, and along with that we do directly assist with the application process also. However, our team is available to answer any questions you may have and provide additional support.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">How did DoctorBano.com help me in making the right decision?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">We recommend starting your search for study abroad programs on DoctorBano.com at least six months before you plan to study abroad. This will give you enough time to research programs, apply for funding, and prepare for the application process.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Can I apply for study abroad programs through DoctorBano.com if I am not currently enrolled in a university or college?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Yes, DoctorBano.com offers study abroad programs for non-traditional students, including those who are not currently enrolled in a university or college. You can search for programs open to non-traditional students and read the eligibility requirements for each program.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">How am I eligible to study abroad through a program listed on DoctorBano.com?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Each study abroad program listed on DoctorBano.com has its eligibility requirements, so it is essential to read the program and its details carefully before applying. You can also contact the program provider or our team for additional guidance.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">How can I contact DoctorBano.com if I have questions or need support during the study abroad application process?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">You can contact DoctorBano.com's support team through the website's contact form or by emailing us directly. Our team is available 24x7 to answer your questions and doubts or provide support throughout the study abroad application process.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">What Is the Right Time to Apply for Courses at Abroad Universities?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Universities abroad invite applications from students at various times. Generally, universities accept applications in two intakes, i.e. January and September. Students can apply for their chosen course by going through the university website and keeping in mind the deadlines.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">What Should I Do If My Application Is Rejected?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">There are diverse reasons for the rejection of a university application. Some of the reasons are out of control. But you can still get some help through Doctor Bano in upgrading your profile and making the application more enticing. Even after modifications, if your application is denied, the best solution to adapt is to look for other competitive options.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">What Is Required to Apply at the Universities Abroad?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">The foremost step is choosing a university you wish to pursue. The next is your visa, as every university abroad requires a student visa. Each country has its own admission and visa requirements, but having a valid student visa is essential. Furthermore, you can get counselling and proper training with our Doctor Bano professionals.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">What Are the Application Deadlines, and Will Applying Early Benefit Me?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">The deadlines for applications are the closing dates, after which the universities do not accept any further applications. Applying early will always benefit you as it increases the chances of your admission against thousand of students applying at the last moment. You can take note of the deadlines from the university pages and be the first to apply.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">How Should I Prepare My Application to Be Selected?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Every university has different criterion which selects the students. For example, some consider the academic scores, and some want to assess based on a multi-dimensional aspect. Therefore, students must first analyze what the university expects from its new students and prepare the application accordingly.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">What Documents Are Necessary to Complete My Application?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Multiple documents are required to complete your application for any university abroad. Some include a passport, SOP, LOR, language and exam certificate, updated CV, education degrees and proof of funds. In addition, our experts at Doctor Bano can help you draft an impressive SOP (Statement of Purpose) which can create a positive impression. Additionally, keeping documents handy is on the student's part.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Which Colleges Can I Apply through the Counsellor?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">There are thousands of institutes providing the best academic courses and experience. However, the course selection and the university depend on what you seek and whether that university fulfills your condition. Doctor Bano can help you with brochures and provide better training sessions to help you decide better the country, course and the university.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">What All Challenges Should I Be Ready For?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Going to study outside your home country and leaving your family behind takes work. In addition, there can be several challenges like homesickness, loneliness, cultural differences, language difficulty, expenses etc. Therefore, we offer you the best post-admission counselling sessions to ensure you feel supported in an unknown country abroad.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">How Safe Are Countries Abroad for Students?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Parents are primarily concerned about their child's safety, who will be thousands of kilometres far. One must address all the factors amongst which a country's tolerance for international students is essential. Some countries do not entertain and support students from abroad, which can be a massive problem as they will not have family or friends there.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">How Much Should I Save to Survive at My Favorite University?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Most students refrain from pursuing their study abroad dream due to the costs. But you can save a massive amount if your plan your stay effectively. Our specialists at Doctor Bano can help you with the courses, tuition fees, accommodation, visa and other costs so that you are aware and can plan accordingly. In addition, various scholarships and bursaries are available, which can provide you with several discounts at the time of admission.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Can Language Become a Barrier While Studying Abroad?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Language is not a constraint anymore. If you know English, it is easy for you to manage abroad. Some colleges have language-specific courses, but you can always opt for courses available in the English language. If you are tensed that you will find no English courses at your favoured university, you can go to alternative universities offering courses in English.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Will I Graduate on Time If I Study Abroad?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Courses are offered semester and academic year-wise. You can quickly graduate on time if you plan your courses according to the duration. If you take up some extra online or professional course at the university, remember that it ends as per its duration.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">How Do I Start with the Visa Process?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">To request a student visa, you must first have accepted a course at a university abroad. So first, apply for a course and ensure it meets the country's requirements. For example, if you have selected a course in one of the UK universities but it does not complement the requirements set by the country, you might land into a problem.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">From Where Can I Apply for My Student Visa?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Students can apply for visas from various visa application centers available. These centers include UK visa application centers, Foreigners Registration Office (FRRO), embassies, etc. You are required to submit all your documentation and provide biometric information to get your visa application request accepted.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">How Good Must My English Be to Qualify for the Visa Process?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">The primary barrier in foreign countries and visa application is the English and language skills requirement. You are required to show the English test and language certificate. At the interview, you might have to face questions regarding exams, confirming that you have passed one. Additionally, per the new rules, if you cannot talk without the translator's help, your application will be denied.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">How Long Can I Stay On My Student Visa?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">The student visa lets you stay in countries abroad for the timeline specified at the initial stages of visa application. Furthermore, staying for a short term after your study completion is allowed. This can range from 60 days to four months. However, this depends on the area of your stay, i.e. the country.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">How Much Money Will I Need in Order to Provide Proof of Funds?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Funds and costs are essential factors when it comes to the visa. The costs entirely depend on the course and the country you have chosen. You must prove that you have funds for course fees (first year) and living expenses. For this, you have to show them the bank statements and scholarships. They can ensure your credibility from these proofs.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">What Parameters Do Visa Officers Check to Approve Your Visa Application?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">The visa officers check a list of things, as granting visas for abroad countries is a hefty and responsible task. First, they ensure your courses, universities, and financial plans are valid. They then check whether or not you are qualified to enrol in a particular university. For this, they check your academic qualifications and other certifications. Lastly, they check your identity proofs, mainly your passport. You are granted the visa once they are satisfied with the documentation, background verification and interview.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">What Course Should I Choose If I Want to Study Abroad?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">There are multiple courses that you can select after completing your higher school. First, you must decide which subject you are interested in because every course has a specific field. No hard and fast rule states you should pursue this course, particularly if you wish to study abroad. It does not matter what course you find. If that specific stream is available at your dream university, you can easily apply for that course at foreign universities.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">I am a Management Student. Which University Offers the Best MBA Programme?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">If you are a management scholar, we like that you are eager about the top business management schools of the world. On DoctorBano.com, you can find many business management schools and universities in one place. If you wish to find the best college for pursuing MBA, then the answer is Stanford Graduate School of Business is the best MBA college in the world. According to the QS rankings 2023, this institution got first place in the list of business management colleges.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Will I Get the Guidance on Your Platform for Choosing the Best Course for Me?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">When you visit DoctorBano.com, you must not worry about anything because we know about your dream to study abroad and believe in serving you the most affordable and reliable service. Of course, it is okay to have confusion between multiple courses in your student life, but if you take the help of our professionals, they will guide you in step of your study abroad journey.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">I Want to Become an Actor. Is There Any Course Available in Study Abroad Programme?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">It is the best thing that you desire to become an actor. In this world where everyone is sprinting for academic progress, you should polish your skills if you have acting talent. Yes, there are multiple courses in which you can take the study abroad programme, like Drama Degree, Stage Management, Film Making Degree, Theatre Production, Diploma in Acting or Bachelor of Arts (BA) in the Acting field, etc.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Is Any Entrance Test Required If I Want to Pursue My Career in MSc Digital Marketing?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">If you plan to do MSc in digital marketing, no big entrance exams are required like GMAT or GRE. It entirely depends on your interest. If you are passionate about the sector of digital marketing, you can quickly join the study abroad journey on DoctorBano.com. However, if you have a dream university, you must give some aptitude tests depending on the university you choose for your digital marketing career.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Can I Enroll in Short-Term Courses at Foreign Universities?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">The biggest myth among scholars is that study abroad programs are only available for a long time, but it needs to be validated. If you desire to study abroad, you can fulfill your wishes by joining some diploma or short courses at your dream university. You can apply for the short courses by taking the help of DoctorBano.com.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Is the UK a Good Country to Study Abroad?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">If you wish to pursue your graduation and masters from the United Kingdom, you made a great decision because it is worth saying that the UK is one of the finest places in the world to find a higher education. Many reputed universities worldwide, like Oxford University, Cambridge University, King's College London, and many other top academic institutions, provide excellent learning experiences.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">I Did My Graduation from India. Can I Pursue My Masters from the USA?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">It is not inappropriate if you did your graduation from India. Still, it is also true that the level of knowledge you get in the UK and the US universities could be more attractive. If you want to pursue your master's from the universities of the USA, you can easily apply to those universities with the help of our platform. If you got stuck anywhere, you can take a free counselling session from our experts. Then, you can be admitted to Harvard and other top universities in the USA.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">What Are Top 10 Universities in Canada?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">It is not inappropriate to say that Canada is one of the places where you can elevate your career and turn your dreams into reality. There are many universities in Canada to which you can apply easily. The top 10 list of universities in Canada includes McGill University, University of Toronto, and University of British Columbia, among others.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Is It Necessary to Apply for a Student Visa If I Want to Study in Australia?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">As a scholar, when you wish to set your bag for a study abroad journey, you must apply for a student visa if you want to go to international universities for your further studies. You can only visit foreign or Australian universities if your student visa is ready.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">What Country Has the Best Higher Education Rate in the World?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">By taking help from the data, Canada is the most educated country, with a rate of 56.27%. This fact was based on the OECD list, meaning Canada is the highest educated country worldwide. Japan has the second highest, and Israel ranked third in that data.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Is Germany a Good Country to Study Abroad?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">If you are considering going to Germany to study your higher courses, you made the right decision because this country undoubtedly provides the best education to its scholars. Furthermore, the placement opportunities in German universities are also good as many tech giants and automobile companies are based in this country, providing students with better placement opportunities.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">What Are Top 10 Universities in the World?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">DoctorBano.com is the platform to turn your study abroad dream into reality. Many universities in this world indeed provide top-notch excellence and knowledge, but these top universities always remain in demand. Top 10 universities in the world are as follows:
                                1. Massachusetts Institute of Technology (MIT)
                                2. University of Cambridge
                                3. Stanford University
                                4. University of Oxford
                                5. Harvard University
                                6. California Institute of Technology (Caltech)
                                7. Imperial College London
                                8. UCL
                                9. ETH Zurich
                                10. University of Chicago</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">What Documents Do I Need to Take Admission to the Oxford University?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">If you get into the world's most reputed university, Oxford University, there are several documents that you need to take with you, which are as follows:
                                1. Requirements
                                2. Official Transcript
                                3. Statement of Purpose
                                4. Written Work
                                5. Other Documents</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">How Can Doctor Bano Help Me to Get Admission into the Foreign Universities?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">If you are a scholar and desire to get admission to a foreign university, our vision is to send you abroad for your higher education. Where other platforms charge a considerable amount of money, we provide the best study abroad services at an affordable rate because we know your concern. We do not want to sacrifice your dreams. It is why we provide free counselling sessions, support you in the visa application process, choose the best universities for you, and fill the application forms timely on your behalf.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Is Distance Learning Possible in the UK Universities?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Nowadays, we live in the digital era. Especially after the pandemic, everything goes online, and it is why many top UK universities also offer distance learning for international scholars. You may indeed do your graduation from a distance, but you must fill out the application form for that purpose. If you wish to get all the updates about distance learning courses in the universities of the UK, you must check our platform to get the results.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">What Other Benefits Will I Get By Admission to Abroad Universities?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Apart from getting excellent knowledge, there are some other perks that you can get by studying abroad like:
                                1. Reputation in society
                                2. Better placement opportunities
                                3. Chance to earn a good source of money
                                4. Better Living Standard
                                5. Opportunity to make international friends</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">What Skills Do I Require to Get Admission to My Dream University?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">If you also want to join the study abroad journey and be admitted to your dream university, there are some skills which are required for this process, which are listed as follows:
                                1. Better communication skills
                                2. Proficiency in the English language
                                3. Great working personality
                                4. Friendly Nature
                                5. Learning skills
                                6. Good Listener</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">What Entrance Exams Are Commonly Required for Studying Abroad?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Entrance exam requirements depend on the country and the university you wish to apply for. Most of the institutes across the world have entrance exams for international students. Standard exams include the SAT, ACT, TOEFL, IELTS, GRE, and GMAT. However, these may vary based on your course and eligibility.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">How Can You Help Me with My Entrance Exam Preparation?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Doctor Bano is always here to assist with any entrance exam you must take. We have professionals to guide you through the entire preparation process and also help you choose the proper exam for yourself. Our team will boost your confidence and improve your performance.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Are there Scholarships Available Based on Entrance Exam Scores?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Yes, several universities provide scholarships based on entrance exam performance. We can help you pick the best option and get a good scholarship for your exam scores. This is to help you secure financial aid with the help of the exam.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Can You Assist Me with Exam Registration and Scheduling?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Registration and scheduling are two significant parts of entrance exams in which Doctor Bano assists you throughout. We can help you with the information on the registration deadlines, exam centers, and necessary steps for the registration process. This is how we will help you secure a perfect exam score without hassle.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">How Can You Help Me Choose the Right Entrance Exam for My Study Abroad Goals?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">We at Doctor Bano know the importance of choosing the proper entrance exam along with your study abroad program. Our team of experts can understand your aspirations, skills, background, university wish list, courses, and subject choices and then help you choose the most suitable exam.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Can You Provide Me with Practice Materials and Resources for Entrance Exam Preparation?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Doctor Bano is committed to providing you with the necessary tools to perform well in the entrance exam. We can also guide you through other mediums to prepare for the entrance exam, even if the deadline is near.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">What Types of Scholarships Are Available for International Students?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">We understand that every student has different skills and achievements, which means the scholarships they apply for will also differ. Doctor Bano can help students find the most suitable scholarship programme so that their skills match the requirements.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">How Can You Assist in Finding Scholarships for Studying Abroad?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Our dedicated team of experts and counsellors will help you make the most suitable scholarship pick. They can provide personalized guidance based on your skills, university, and educational background. In addition, Doctor Bano has a database with intel on the scholarship programs of universities worldwide.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">What Are the Eligibility Criteria for Scholarships in the UK?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">In the UK, the scholarship programme varies depending on the eligibility and university you have picked. However, we at Doctor Bano are prepared to help you through all this decision-making by giving you the best scholarship recommendations. This is done based on your skill set, academic achievements, financial needs, etc.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">How Can I Increase My Chances of Receiving a Scholarship?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">You can increase your chances by choosing Doctor Bano for your study abroad dream. We guide your scholarship application and help you showcase your strengths. Tips and insights shared by our experts can help you ace any scholarship test and pass in one go.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Are there Scholarships Specifically for Certain Fields of Study or Countries?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Every university has scholarships designed for different fields, subjects, and countries. Doctor Bano and our professionals can help you find the most suitable scholarship program tailored to your needs. These will be shortlisted for you based on your academic and career goals.</div>
                        </div>
                    </div>
                    <div class="border-b-1 border-[#DCDCDC]">
                        <div class="flex gap-3 py-2 md:py-4 items-center"><span class="flex-1 text-foreground font-normal text-sm lg:text-base xl:text-lg">Do You Provide Guidance on Scholarship Application Processes and Requirements?</span>
                            <div class="relative size-3 flex items-center justify-center"><span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.72858" y="0.0999985" width="1.54286" height="10.8" fill="#6E6E73"></rect>
                                        <rect x="10.9" y="4.72857" width="1.54286" height="10.8" transform="rotate(90 10.9 4.72857)" fill="#6E6E73"></rect>
                                    </svg></span></div>
                        </div>
                        <div class="grid transition-all overflow-hidden grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden text-sm xl:text-base [&amp;>ul]:list-disc [&amp;>ul]:list-inside">Yes, we do. Doctor Bano offers guidance for students applying for scholarship programs at international universities. We help you with the application process and provide intel on the requirements. This is all to prepare you for the best result and to get through in one go.</div>
                        </div>
                    </div>
                </div>
                <div class="md:w-2/6 w-full md:p-6 md:bg-white rounded-xl md:shadow-2xl md:order-2 order-1">
                    <h2 class="text-heading text-2xl font-black mb-4 md:block hidden">Related Topic</h2>
                    <div data-slot="base" class="inline-flex md:w-auto w-full mb-4 md:mb-0" aria-label="Different location tabs">
                        <div data-slot="tabList" class="flex h-fit items-center flex-nowrap overflow-x-scroll scrollbar-hide md:bg-white bg-transparent md:flex-col gap-3 p-0 rounded-none" id="react-aria8712592775-:r4v:" aria-label="Different location tabs" role="tablist" aria-orientation="horizontal"><button data-slot="tab" tabindex="0" data-key="0" id="react-aria8712592775-:r4v:-tab-0" aria-selected="true" role="tab" class="z-0 w-full group relative justify-center items-center cursor-pointer tap-highlight-transparent data-[disabled=true]:cursor-not-allowed data-[disabled=true]:opacity-30 data-[hover-unselected=true]:opacity-disabled outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-small h-auto md:p-0 py-1 px-3 block md:border-0 border md:bg-transparent bg-white border-primary md:rounded-none rounded transition-all" type="button" data-selected="true"><span class="absolute z-0 inset-0 dark:bg-default md:bg-transparent bg-primary rounded-none shadow-none text-white" data-slot="cursor" style="opacity: 1;"></span>
                                <div class="relative z-10 whitespace-nowrap md:group-data-[selected=true]:text-heading group-data-[selected=true]:text-white text-heading transition-all" data-slot="tabContent">
                                    <div class="flex items-center gap-2"><span class="md:block hidden"><svg width="8" height="15" viewBox="0 0 8 15" fill="none">
                                                <g clip-path="url(#clip0_106_570)">
                                                    <path d="M7.60953 8.6086C8.13016 8.08797 8.13016 7.24247 7.60953 6.72184L2.27828 1.39059C1.89509 1.0074 1.32448 0.894948 0.824678 1.1032C0.324873 1.31145 0 1.7946 0 2.33605V12.9986C0 13.5358 0.324873 14.0232 0.824678 14.2314C1.32448 14.4397 1.89509 14.323 2.27828 13.944L7.60953 8.61277V8.6086Z" fill="#FD7E14"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_106_570">
                                                        <rect width="8" height="15" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></span><span class=" font-medium text-base">All</span></div>
                                </div>
                            </button><button data-slot="tab" tabindex="-1" data-key="1" id="react-aria8712592775-:r4v:-tab-1" aria-selected="false" role="tab" class="z-0 w-full group relative justify-center items-center cursor-pointer tap-highlight-transparent data-[disabled=true]:cursor-not-allowed data-[disabled=true]:opacity-30 data-[hover-unselected=true]:opacity-disabled outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-small h-auto md:p-0 py-1 px-3 block md:border-0 border md:bg-transparent bg-white border-primary md:rounded-none rounded transition-all" type="button">
                                <div class="relative z-10 whitespace-nowrap md:group-data-[selected=true]:text-heading group-data-[selected=true]:text-white text-heading transition-all" data-slot="tabContent">
                                    <div class="flex items-center gap-2"><span class="md:block hidden"><svg width="8" height="15" viewBox="0 0 8 15" fill="none">
                                                <g clip-path="url(#clip0_106_570)">
                                                    <path d="M7.60953 8.6086C8.13016 8.08797 8.13016 7.24247 7.60953 6.72184L2.27828 1.39059C1.89509 1.0074 1.32448 0.894948 0.824678 1.1032C0.324873 1.31145 0 1.7946 0 2.33605V12.9986C0 13.5358 0.324873 14.0232 0.824678 14.2314C1.32448 14.4397 1.89509 14.323 2.27828 13.944L7.60953 8.61277V8.6086Z" fill="#FD7E14"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_106_570">
                                                        <rect width="8" height="15" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></span><span class=" font-medium text-base">General</span></div>
                                </div>
                            </button><button data-slot="tab" tabindex="-1" data-key="2" id="react-aria8712592775-:r4v:-tab-2" aria-selected="false" role="tab" class="z-0 w-full group relative justify-center items-center cursor-pointer tap-highlight-transparent data-[disabled=true]:cursor-not-allowed data-[disabled=true]:opacity-30 data-[hover-unselected=true]:opacity-disabled outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-small h-auto md:p-0 py-1 px-3 block md:border-0 border md:bg-transparent bg-white border-primary md:rounded-none rounded transition-all" type="button">
                                <div class="relative z-10 whitespace-nowrap md:group-data-[selected=true]:text-heading group-data-[selected=true]:text-white text-heading transition-all" data-slot="tabContent">
                                    <div class="flex items-center gap-2"><span class="md:block hidden"><svg width="8" height="15" viewBox="0 0 8 15" fill="none">
                                                <g clip-path="url(#clip0_106_570)">
                                                    <path d="M7.60953 8.6086C8.13016 8.08797 8.13016 7.24247 7.60953 6.72184L2.27828 1.39059C1.89509 1.0074 1.32448 0.894948 0.824678 1.1032C0.324873 1.31145 0 1.7946 0 2.33605V12.9986C0 13.5358 0.324873 14.0232 0.824678 14.2314C1.32448 14.4397 1.89509 14.323 2.27828 13.944L7.60953 8.61277V8.6086Z" fill="#FD7E14"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_106_570">
                                                        <rect width="8" height="15" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></span><span class=" font-medium text-base">Application Process</span></div>
                                </div>
                            </button><button data-slot="tab" tabindex="-1" data-key="3" id="react-aria8712592775-:r4v:-tab-3" aria-selected="false" role="tab" class="z-0 w-full group relative justify-center items-center cursor-pointer tap-highlight-transparent data-[disabled=true]:cursor-not-allowed data-[disabled=true]:opacity-30 data-[hover-unselected=true]:opacity-disabled outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-small h-auto md:p-0 py-1 px-3 block md:border-0 border md:bg-transparent bg-white border-primary md:rounded-none rounded transition-all" type="button">
                                <div class="relative z-10 whitespace-nowrap md:group-data-[selected=true]:text-heading group-data-[selected=true]:text-white text-heading transition-all" data-slot="tabContent">
                                    <div class="flex items-center gap-2"><span class="md:block hidden"><svg width="8" height="15" viewBox="0 0 8 15" fill="none">
                                                <g clip-path="url(#clip0_106_570)">
                                                    <path d="M7.60953 8.6086C8.13016 8.08797 8.13016 7.24247 7.60953 6.72184L2.27828 1.39059C1.89509 1.0074 1.32448 0.894948 0.824678 1.1032C0.324873 1.31145 0 1.7946 0 2.33605V12.9986C0 13.5358 0.324873 14.0232 0.824678 14.2314C1.32448 14.4397 1.89509 14.323 2.27828 13.944L7.60953 8.61277V8.6086Z" fill="#FD7E14"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_106_570">
                                                        <rect width="8" height="15" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></span><span class=" font-medium text-base">Counselling</span></div>
                                </div>
                            </button><button data-slot="tab" tabindex="-1" data-key="4" id="react-aria8712592775-:r4v:-tab-4" aria-selected="false" role="tab" class="z-0 w-full group relative justify-center items-center cursor-pointer tap-highlight-transparent data-[disabled=true]:cursor-not-allowed data-[disabled=true]:opacity-30 data-[hover-unselected=true]:opacity-disabled outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-small h-auto md:p-0 py-1 px-3 block md:border-0 border md:bg-transparent bg-white border-primary md:rounded-none rounded transition-all" type="button">
                                <div class="relative z-10 whitespace-nowrap md:group-data-[selected=true]:text-heading group-data-[selected=true]:text-white text-heading transition-all" data-slot="tabContent">
                                    <div class="flex items-center gap-2"><span class="md:block hidden"><svg width="8" height="15" viewBox="0 0 8 15" fill="none">
                                                <g clip-path="url(#clip0_106_570)">
                                                    <path d="M7.60953 8.6086C8.13016 8.08797 8.13016 7.24247 7.60953 6.72184L2.27828 1.39059C1.89509 1.0074 1.32448 0.894948 0.824678 1.1032C0.324873 1.31145 0 1.7946 0 2.33605V12.9986C0 13.5358 0.324873 14.0232 0.824678 14.2314C1.32448 14.4397 1.89509 14.323 2.27828 13.944L7.60953 8.61277V8.6086Z" fill="#FD7E14"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_106_570">
                                                        <rect width="8" height="15" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></span><span class=" font-medium text-base">VISA Process</span></div>
                                </div>
                            </button><button data-slot="tab" tabindex="-1" data-key="5" id="react-aria8712592775-:r4v:-tab-5" aria-selected="false" role="tab" class="z-0 w-full group relative justify-center items-center cursor-pointer tap-highlight-transparent data-[disabled=true]:cursor-not-allowed data-[disabled=true]:opacity-30 data-[hover-unselected=true]:opacity-disabled outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-small h-auto md:p-0 py-1 px-3 block md:border-0 border md:bg-transparent bg-white border-primary md:rounded-none rounded transition-all" type="button">
                                <div class="relative z-10 whitespace-nowrap md:group-data-[selected=true]:text-heading group-data-[selected=true]:text-white text-heading transition-all" data-slot="tabContent">
                                    <div class="flex items-center gap-2"><span class="md:block hidden"><svg width="8" height="15" viewBox="0 0 8 15" fill="none">
                                                <g clip-path="url(#clip0_106_570)">
                                                    <path d="M7.60953 8.6086C8.13016 8.08797 8.13016 7.24247 7.60953 6.72184L2.27828 1.39059C1.89509 1.0074 1.32448 0.894948 0.824678 1.1032C0.324873 1.31145 0 1.7946 0 2.33605V12.9986C0 13.5358 0.324873 14.0232 0.824678 14.2314C1.32448 14.4397 1.89509 14.323 2.27828 13.944L7.60953 8.61277V8.6086Z" fill="#FD7E14"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_106_570">
                                                        <rect width="8" height="15" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></span><span class=" font-medium text-base">Courses</span></div>
                                </div>
                            </button><button data-slot="tab" tabindex="-1" data-key="6" id="react-aria8712592775-:r4v:-tab-6" aria-selected="false" role="tab" class="z-0 w-full group relative justify-center items-center cursor-pointer tap-highlight-transparent data-[disabled=true]:cursor-not-allowed data-[disabled=true]:opacity-30 data-[hover-unselected=true]:opacity-disabled outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-small h-auto md:p-0 py-1 px-3 block md:border-0 border md:bg-transparent bg-white border-primary md:rounded-none rounded transition-all" type="button">
                                <div class="relative z-10 whitespace-nowrap md:group-data-[selected=true]:text-heading group-data-[selected=true]:text-white text-heading transition-all" data-slot="tabContent">
                                    <div class="flex items-center gap-2"><span class="md:block hidden"><svg width="8" height="15" viewBox="0 0 8 15" fill="none">
                                                <g clip-path="url(#clip0_106_570)">
                                                    <path d="M7.60953 8.6086C8.13016 8.08797 8.13016 7.24247 7.60953 6.72184L2.27828 1.39059C1.89509 1.0074 1.32448 0.894948 0.824678 1.1032C0.324873 1.31145 0 1.7946 0 2.33605V12.9986C0 13.5358 0.324873 14.0232 0.824678 14.2314C1.32448 14.4397 1.89509 14.323 2.27828 13.944L7.60953 8.61277V8.6086Z" fill="#FD7E14"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_106_570">
                                                        <rect width="8" height="15" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></span><span class=" font-medium text-base">Countries</span></div>
                                </div>
                            </button><button data-slot="tab" tabindex="-1" data-key="7" id="react-aria8712592775-:r4v:-tab-7" aria-selected="false" role="tab" class="z-0 w-full group relative justify-center items-center cursor-pointer tap-highlight-transparent data-[disabled=true]:cursor-not-allowed data-[disabled=true]:opacity-30 data-[hover-unselected=true]:opacity-disabled outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-small h-auto md:p-0 py-1 px-3 block md:border-0 border md:bg-transparent bg-white border-primary md:rounded-none rounded transition-all" type="button">
                                <div class="relative z-10 whitespace-nowrap md:group-data-[selected=true]:text-heading group-data-[selected=true]:text-white text-heading transition-all" data-slot="tabContent">
                                    <div class="flex items-center gap-2"><span class="md:block hidden"><svg width="8" height="15" viewBox="0 0 8 15" fill="none">
                                                <g clip-path="url(#clip0_106_570)">
                                                    <path d="M7.60953 8.6086C8.13016 8.08797 8.13016 7.24247 7.60953 6.72184L2.27828 1.39059C1.89509 1.0074 1.32448 0.894948 0.824678 1.1032C0.324873 1.31145 0 1.7946 0 2.33605V12.9986C0 13.5358 0.324873 14.0232 0.824678 14.2314C1.32448 14.4397 1.89509 14.323 2.27828 13.944L7.60953 8.61277V8.6086Z" fill="#FD7E14"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_106_570">
                                                        <rect width="8" height="15" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></span><span class=" font-medium text-base">Universities</span></div>
                                </div>
                            </button><button data-slot="tab" tabindex="-1" data-key="8" id="react-aria8712592775-:r4v:-tab-8" aria-selected="false" role="tab" class="z-0 w-full group relative justify-center items-center cursor-pointer tap-highlight-transparent data-[disabled=true]:cursor-not-allowed data-[disabled=true]:opacity-30 data-[hover-unselected=true]:opacity-disabled outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-small h-auto md:p-0 py-1 px-3 block md:border-0 border md:bg-transparent bg-white border-primary md:rounded-none rounded transition-all" type="button">
                                <div class="relative z-10 whitespace-nowrap md:group-data-[selected=true]:text-heading group-data-[selected=true]:text-white text-heading transition-all" data-slot="tabContent">
                                    <div class="flex items-center gap-2"><span class="md:block hidden"><svg width="8" height="15" viewBox="0 0 8 15" fill="none">
                                                <g clip-path="url(#clip0_106_570)">
                                                    <path d="M7.60953 8.6086C8.13016 8.08797 8.13016 7.24247 7.60953 6.72184L2.27828 1.39059C1.89509 1.0074 1.32448 0.894948 0.824678 1.1032C0.324873 1.31145 0 1.7946 0 2.33605V12.9986C0 13.5358 0.324873 14.0232 0.824678 14.2314C1.32448 14.4397 1.89509 14.323 2.27828 13.944L7.60953 8.61277V8.6086Z" fill="#FD7E14"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_106_570">
                                                        <rect width="8" height="15" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></span><span class=" font-medium text-base">Entrance Exams</span></div>
                                </div>
                            </button><button data-slot="tab" tabindex="-1" data-key="9" id="react-aria8712592775-:r4v:-tab-9" aria-selected="false" role="tab" class="z-0 w-full group relative justify-center items-center cursor-pointer tap-highlight-transparent data-[disabled=true]:cursor-not-allowed data-[disabled=true]:opacity-30 data-[hover-unselected=true]:opacity-disabled outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-small h-auto md:p-0 py-1 px-3 block md:border-0 border md:bg-transparent bg-white border-primary md:rounded-none rounded transition-all" type="button">
                                <div class="relative z-10 whitespace-nowrap md:group-data-[selected=true]:text-heading group-data-[selected=true]:text-white text-heading transition-all" data-slot="tabContent">
                                    <div class="flex items-center gap-2"><span class="md:block hidden"><svg width="8" height="15" viewBox="0 0 8 15" fill="none">
                                                <g clip-path="url(#clip0_106_570)">
                                                    <path d="M7.60953 8.6086C8.13016 8.08797 8.13016 7.24247 7.60953 6.72184L2.27828 1.39059C1.89509 1.0074 1.32448 0.894948 0.824678 1.1032C0.324873 1.31145 0 1.7946 0 2.33605V12.9986C0 13.5358 0.324873 14.0232 0.824678 14.2314C1.32448 14.4397 1.89509 14.323 2.27828 13.944L7.60953 8.61277V8.6086Z" fill="#FD7E14"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_106_570">
                                                        <rect width="8" height="15" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></span><span class=" font-medium text-base">Scholarships</span></div>
                                </div>
                            </button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- FAQ Section End -->

</main>
<?= $this->endSection() ?>