<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php'); ?>
<?php include($base . "/part-doctype.php"); ?>
<title>Bloom</title>
<?php perch_content('meta tags'); ?>

<style>
    /* OpenThinking Slider */
    .otSlider {
        position: relative;
        --ots-bpos: 10px;
        /* position */
        --ots-bsize: 1.5rem;
        /* box size */
        --ots-bbgc: white;
        /* bg color */
    }

    .scroll-snap {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .otSlider:hover .scroll-snap {
        -ms-overflow-style: initial;
        scrollbar-width: initial;
    }

    .scroll-snap::-webkit-scrollbar {
        visibility: hidden;
    }

    .otSlider:hover .scroll-snap::-webkit-scrollbar {
        visibility: visible;
    }


    .otSlider :is(.ot-prev, .ot-next) {
        position: absolute;
        top: 50%;
        transform: translateY(-100%);
        width: var(--ots-bsize);
        height: var(--ots-bsize);

        box-shadow: 0 0 6px 0px rgba(0, 0, 0, .1);
        background: var(--ots-bbgc) url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='black' viewBox='0 0 16 16'%3E%3Cpath d='M6.22 3.22a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06L9.94 8 6.22 4.28a.75.75 0 010-1.06z'/%3E%3C/svg%3E") center center no-repeat;
    }

    .otSlider .ot-prev {
        visibility: hidden;
        left: var(--ots-bpos);
        transform: translateY(-100%) rotate(-180deg);
    }

    .otSlider:hover .ot-prev {
        visibility: visible;
    }

    .otSlider .ot-next {
        visibility: hidden;
        right: var(--ots-bpos);
    }

    .otSlider:hover .ot-next {
        visibility: visible;
    }
</style>

<?php include($base . "/part-styles.php"); ?>

<body>
    <!-- global-wrapper -->
    <?php include($base . "/part-navigation.php"); ?>

    <div id="app" class="center theme-light">

        <!-- content-->

        <!-- page content -->
        <main id="content" class="text-start">
            <!-- Hero -->
            <x-grid columns="1" class="section tall" ji=center ai=center>

                <div class="otSlider">
                    <ul class="scroll-snap no-style">
                        <li class="slide"><img src="/images/test-hero-01.svg" alt="Img"></li>
                        <li class="slide"><img src="/images/test-hero-02.svg" alt="Img"></li>
                        <li class="slide"><img src="/images/test-hero-03.svg" alt="Img"></li>
                        <li class="slide"><img src="/images/test-hero-04.svg" alt="Img"></li>
                        <li class="slide"><img src="/images/test-hero-05.svg" alt="Img"></li>
                        <li class="slide"><img src="/images/test-hero-06.svg" alt="Img"></li>
                        <li class="slide"><img src="/images/test-hero-07.svg" alt="Img"></li>
                        <li class="slide"><img src="/images/test-hero-08.svg" alt="Img"></li>
                        <li class="slide"><img src="/images/test-hero-09.svg" alt="Img"></li>
                        <li class="slide"><img src="/images/test-hero-10.svg" alt="Img"></li>
                        <li class="slide"><img src="/images/test-hero-11.svg" alt="Img"></li>
                        <li class="slide"><img src="/images/test-hero-12.svg" alt="Img"></li>
                        <li class="slide"><img src="/images/test-hero-13.svg" alt="Img"></li>
                        <li class="slide"><img src="/images/test-hero-14.svg" alt="Img"></li>
                    </ul>
                    <button class="is-custom is-circle ot-prev" aria-label="previous">&nbsp;</button>
                    <button class="is-custom is-circle ot-next" aria-label="next">&nbsp;</button>
                </div>

            </x-grid>

            <!-- Conquer section -->
            <x-grid columns="6" columns-m="1" columns-s="1" class="section no-colgap" ji=center jc=center ac=center ai=center>
                <x-col span="2" class="theme-teal-dark box-padded" ji=center jc=center ac=center ai=center>
                    <div class="text0000 light" style="line-height: 1.8;">
                        We believe futures should be shaped, great ideas and people are the advantage in work and life.
                    </div>
                </x-col>
                <x-col span="4" span-s="1" class="box-padded">
                    <div class="grid-two-rows">
                        <div class="text000">
                            We are a woman-owned management consulting firm. We specialize in catapulting cloud & channel growth, while doing our part to be kind to our planet.
                        </div>
                        <x-grid columns="4" columns-s="2">
                            <x-col class="text-center">
                                <div class="icon-box large theme-teal inline-block">
                                    <img src="/images/icon-tictactoe.png" class="inline-block">
                                </div>
                                <div class="text0">Business Strategy</div>
                            </x-col>
                            <x-col class="text-center">
                                <div class="icon-box large theme-blue inline-block">
                                    <img src="/images/icon-cycle-dots.png" class="inline-block">
                                </div>
                                <div class="text0">Revenue Operations</div>
                            </x-col>
                            <x-col class="text-center">
                                <div class="icon-box large theme-yellow inline-block">
                                    <img src="/images/icon-cheering.png" class="inline-block">
                                </div>
                                <div class="text0">Experiences:<br>CX & PX</div>
                            </x-col>
                            <x-col class="text-center">
                                <div class="icon-box large theme-orange inline-block">
                                    <img src="/images/icon-waterdrop.png" class="inline-block">
                                </div>
                                <div class="text0">Transformation Management</div>
                            </x-col>
                        </x-grid>
                    </div>
                </x-col>
            </x-grid>

            <!-- Quote and points - Business Strategy -->
            <x-grid columns="6" columns-s="1" class="section">
                <x-col span="2" class="theme-teal-light box-padded">
                    <x-grid class="quote">
                        <x-col>
                            <img src="/images/icon-quote-dark.png">
                        </x-col>
                        <x-col>
                            <p class="text regular pad-bottom-16">
                                <br>
                                "We found [Bloom] really <b>diligent and strategic</b> in driving the best business strategies needed for our group.
                                <br><br>
                                The variety of depth [Bloom] had across <b>Strategy, Analytics, Planning and Domain Business</b> was hard to find. I found [Bloom] to be really wonderful in <b>shaping the direction</b> that we are headed today."
                            </p>
                            <p class="text-00 text-end">
                                Industry Solutions & ISV Data Strategy and Analytics Leader<br>
                                Fortune 500 Company
                            </p>

                        </x-col>
                    </x-grid>
                </x-col>
                <x-col span="4" span-s="1" class="box-padded">
                    <p class="text0000 medium">Business Strategy</p>
                    <p class="text0 regular pad-bottom-16">
                        Our experts can partner with you to cover every aspect of your strategy, from strategic analysis and research, to launching new products and services, re-launching your company or brand, or even moving a current product into a new market. From Go-to-Market to Get-to-Market, we're your partner for the journey.
                    </p>
                    <x-grid columns-s="1" class="icon-info-item">
                        <x-col as=center>
                            <div class="icon-box theme-teal">
                                <img src="/images/icon-chart-bar.png">
                            </div>
                        </x-col>
                        <x-col as=center>
                            <p class="text bold">Market Analysis</p>
                            <p class="text-0 regular">
                                We perform vital analysis to encourage informed business decisions.
                            </p>
                        </x-col>
                    </x-grid>
                    <x-grid columns-s="1" class="icon-info-item">
                        <x-col as=center>
                            <div class="icon-box theme-yellow">
                                <img src="/images/icon-pen.png">
                            </div>
                        </x-col>
                        <x-col as=center>
                            <p class="text bold">Creation and Design</p>
                            <p class="text-0 regular">
                                Let our creative minds and decades of experience complement your vision to create something special.
                            </p>
                        </x-col>
                    </x-grid>
                    <x-grid columns-s="1" class="icon-info-item">
                        <x-col as=center>
                            <div class="icon-box theme-blue">
                                <img src="/images/icon-idea-people.png">
                            </div>
                        </x-col>
                        <x-col as=center>
                            <p class="text bold">Opportunity Analysis</p>
                            <p class="text-0 regular">
                                Our experts assess the potential for change to propel revenue.
                            </p>
                        </x-col>
                    </x-grid>
                    <x-grid columns-s="1" class="icon-info-item">
                        <x-col as=center>
                            <div class="icon-box theme-orange">
                                <img src="/images/icon-checklist.png">
                            </div>
                        </x-col>
                        <x-col as=center>
                            <p class="text bold">Tactical Action Plan & Management</p>
                            <p class="text-0 regular">
                                We chart a clear path for success and can manage every aspect of the implementation.
                            </p>
                        </x-col>
                    </x-grid>
                </x-col>
            </x-grid>

            <!-- Quote and points - Revenue Operations -->
            <x-grid columns="6" columns-s="1" class="section">
                <x-col span="2" class="theme-blue box-padded">
                    <x-grid class="quote">
                        <x-col>
                            <img src="/images/icon-quote-dark.png">
                        </x-col>
                        <x-col>
                            <p class="text regular pad-bottom-16">
                                <br>
                                …nothing short of OUTSTANDING… Bloom <b>stands above many of their competitors</b> due to their creative thinking, industry relevant insights, careful attention to detail and on the outputs. It would be an <b>ADVANTAGE</b> to organizations like ours to have Bloom working across the business <b>executing at a deeper level</b> with our strategies.”
                            </p>
                            <p class="text-00 text-end">
                                Director Partner Innovation, Ecosystem Solutions, WW Partner and Commercial<br>
                                Fortune 500 Company
                            </p>

                        </x-col>
                    </x-grid>
                </x-col>
                <x-col span="4" span-s="1" class="box-padded">
                    <p class="text0000 medium">Revenue Operations</p>
                    <p class="text0 regular pad-bottom-16">
                        For every business, Revenue is a top priority. Creating a cohesive approach to generating revenue is a win-win. Ensure your business is adapting to propel your growth. From Strategy to Operations, we're your partner for the journey.
                    </p>
                    <x-grid columns-s="1" class="icon-info-item">
                        <x-col as=center>
                            <div class="icon-box theme-teal">
                                <img src="/images/icon-idea-head.png">
                            </div>
                        </x-col>
                        <x-col as=center>
                            <p class="text bold">Strategy</p>
                            <p class="text-0 regular">
                                We evaluate and document what it will take to evolve your infrastructure to implement a Revenue Operations model.
                            </p>
                        </x-col>
                    </x-grid>
                    <x-grid columns-s="1" class="icon-info-item">
                        <x-col as=center>
                            <div class="icon-box theme-yellow">
                                <img src="/images/icon-pen.png">
                            </div>
                        </x-col>
                        <x-col as=center>
                            <p class="text bold">Creation and Design</p>
                            <p class="text-0 regular">
                                Let our creative minds and decades of experience complement your vision to create something special.
                            </p>
                        </x-col>
                    </x-grid>
                    <x-grid columns-s="1" class="icon-info-item">
                        <x-col as=center>
                            <div class="icon-box theme-blue">
                                <img src="/images/icon-idea-people.png">
                            </div>
                        </x-col>
                        <x-col as=center>
                            <p class="text bold">Opportunity Analysis</p>
                            <p class="text-0 regular">
                                Our experts assess the potential for change to propel revenue.
                            </p>
                        </x-col>
                    </x-grid>
                    <x-grid columns-s="1" class="icon-info-item">
                        <x-col as=center>
                            <div class="icon-box theme-orange">
                                <img src="/images/icon-checklist.png">
                            </div>
                        </x-col>
                        <x-col as=center>
                            <p class="text bold">Tactical Action Plan & Management</p>
                            <p class="text-0 regular">
                                We chart a clear path for success and can manage every aspect of the implementation.
                            </p>
                        </x-col>
                    </x-grid>
                </x-col>
            </x-grid>

            <!-- Quote and points - Experiences -->
            <x-grid columns="6" columns-s="1" class="section">
                <x-col span="2" class="theme-yellow-light box-padded">
                    <x-grid class="quote">
                        <x-col>
                            <img src="/images/icon-quote-dark.png">
                        </x-col>
                        <x-col>
                            <p class="text regular pad-bottom-16">
                                <br>
                                Since inception to current, you all have done fantastic work…from chasing down fragmented data…to keeping us together…to rich advice… it's <b>fantastic work</b>.
                                <br><br>
                                The partner ecosystem is fragmented here… we have a blind spot on it… you have <b>experience-backed tactical recommendations tied to strategy</b>. That's exactly why we engaged you all. We will keep working with you guys, we'll extend your PO.”
                            </p>
                            <p class="text-00 text-end">
                                Chief of Staff, Global Industries Group<br>
                                Fortune 500 Company
                            </p>

                        </x-col>
                    </x-grid>
                </x-col>
                <x-col span="4" span-s="1" class="box-padded">
                    <p class="text0000 medium">Experiences: CX & PX</p>
                    <p class="text0 regular pad-bottom-16">
                        We partner with you to amplify the voices of customers and partners to manifest value-add relationships, resulting in positive financial outcomes and loyalty.
                    </p>
                    <x-grid columns-s="1" class="icon-info-item">
                        <x-col as=center>
                            <div class="icon-box theme-teal">
                                <img src="/images/icon-conversation-bubble.png">
                            </div>
                        </x-col>
                        <x-col as=center>
                            <p class="text bold">Listening Devices</p>
                            <p class="text-0 regular">
                                We objectively listen to capture critical intelligence and insights to shape action plans. Pre-Session, per-session, post-session engagements to document shared best practices and competitive insights.
                            </p>
                        </x-col>
                    </x-grid>
                    <x-grid columns-s="1" class="icon-info-item">
                        <x-col as=center>
                            <div class="icon-box theme-yellow">
                                <img src="/images/icon-chart-scatter.png">
                            </div>
                        </x-col>
                        <x-col as=center>
                            <p class="text bold">Prioritized Data & Themes</p>
                            <p class="text-0 regular">
                                Let us help you with the customer, seller, and partner journeys. We will develop a baseline assessment plus steps for incremental improvements, and then measure the impact.
                            </p>
                        </x-col>
                    </x-grid>
                    <x-grid columns-s="1" class="icon-info-item">
                        <x-col as=center>
                            <div class="icon-box theme-blue">
                                <img src="/images/icon-person-actions.png">
                            </div>
                        </x-col>
                        <x-col as=center>
                            <p class="text bold">Churn | Retention</p>
                            <p class="text-0 regular">
                                Identification and root cause analysis for customer defection - plus, proactive intelligence to retain customer relationships.
                            </p>
                        </x-col>
                    </x-grid>
                    <x-grid columns-s="1" class="icon-info-item">
                        <x-col as=center>
                            <div class="icon-box theme-orange">
                                <img src="/images/icon-directions.png">
                            </div>
                        </x-col>
                        <x-col as=center>
                            <p class="text bold">Event Planning & Management</p>
                            <p class="text-0 regular">
                                We begin with your desired outcomes, complimented by our project management and communications discipline, to seamlessly plan and execute your event(s).
                            </p>
                        </x-col>
                    </x-grid>
                </x-col>
            </x-grid>

            <!-- Quote and points - Transformation -->
            <x-grid columns="6" columns-s="1" class="section">
                <x-col span="2" class="theme-orange-light box-padded">
                    <x-grid class="quote">
                        <x-col>
                            <img src="/images/icon-quote-dark.png">
                        </x-col>
                        <x-col>
                            <p class="text regular pad-bottom-16">
                                <br>
                                The Bloom team not only met expectations but far exceeded them.
                                <br><br>
                                What was accomplished with the work and the documentation, even when I was out on leave, has set the foundation that I can take forward for our transformation journey.​”
                            </p>
                            <p class="text-00 text-end">
                                Value Stream Project Manager<br>
                                Fortune 250 Company
                            </p>

                        </x-col>
                    </x-grid>
                </x-col>
                <x-col span="4" span-s="1" class="box-padded">
                    <p class="text0000 medium">Transformation Management</p>
                    <p class="text0 regular pad-bottom-16">
                        We understand transformation takes more than just best practices. Let us plan and execute every touchpoint. We're your partner for the journey, from ideation to realization.
                    </p>
                    <x-grid columns-s="1" class="icon-info-item">
                        <x-col as=center>
                            <div class="icon-box theme-teal">
                                <img src="/images/icon-chat-bubbles.png">
                            </div>
                        </x-col>
                        <x-col as=center>
                            <p class="text bold">Communications</p>
                            <p class="text-0 regular">
                                Drive buy in and adoption with carefully curated communication plans and implementation of best practices.
                            </p>
                        </x-col>
                    </x-grid>
                    <x-grid columns-s="1" class="icon-info-item">
                        <x-col as=center>
                            <div class="icon-box theme-yellow">
                                <img src="/images/icon-chart-gant.png">
                            </div>
                        </x-col>
                        <x-col as=center>
                            <p class="text bold">Project Management</p>
                            <p class="text-0 regular">
                                We bring PM best practices to life, by integrating relationships, acumen, ingenuity, and foresight, to conquer complex problems with impeccable execution.
                            </p>
                        </x-col>
                    </x-grid>
                    <x-grid columns-s="1" class="icon-info-item">
                        <x-col as=center>
                            <div class="icon-box theme-blue">
                                <img src="/images/icon-chart-people.png">
                            </div>
                        </x-col>
                        <x-col as=center>
                            <p class="text bold">Change Management</p>
                            <p class="text-0 regular">
                                Establish a controlled yet nurturing approach for organizational alignment to support an intentional shift.
                            </p>
                        </x-col>
                    </x-grid>
                    <x-grid columns-s="1" class="icon-info-item">
                        <x-col as=center>
                            <div class="icon-box theme-orange">
                                <img src="/images/icon-blueprint.png">
                            </div>
                        </x-col>
                        <x-col as=center>
                            <p class="text bold">Training, Tools, and Templates</p>
                            <p class="text-0 regular">
                                We give you a jump start in efficiency. Let us train your teams in best practices. We can leverage and optimize your new or existing tools and incorporate proven templates for immediate use.
                            </p>
                        </x-col>
                    </x-grid>
                </x-col>
            </x-grid>
            <!-- Working with a Bloomie -->
            <x-grid columns="6" columns-s="1" class="section">
                <x-col span="2" class="text-center">
                    <img src="/images/bloomie-01.jpg" class="inline-block">
                    <img src="/images/bloomie-02.jpg" class="inline-block">
                    <img src="/images/bloomie-03.jpg" class="inline-block">
                    <img src="/images/bloomie-04.jpg" class="inline-block">
                </x-col>
                <x-col span="4" class="box-padded text-cetner" as=center>
                    <p class="text0000 medium pad-bottom-32">What it's like to work with a Bloomie</p>
                    <img src="/images/illustration-aperture-theme-light.png" class="inline-block">
                </x-col>
            </x-grid>

            <!-- Partnering section -->
            <x-grid columns="1" class="section spaced box-padded" ji=center>
                <x-col as=center>
                    <p class="text0000 bold color-orange text-center">Collectively, We Conquer.</p>
                    <p class="text0 text-center pad-bottom-64">Partnering with visionary executives is the heartbeat of our business.</p>
                    <x-grid columns="3" columns-s="1" class="pad-bottom-16" as=center ji=center>
                        <x-col as=center>
                            <img src="/images/logo-microsoft.png" class="inline-block logo-partner">
                        </x-col>
                        <x-col as=center>
                            <img src="/images/logo-redhat.png" class="inline-block logo-partner">
                        </x-col>
                        <x-col as=center>
                            <img src="/images/logo-vmware.png" class="inline-block logo-partner">
                        </x-col>
                    </x-grid>
                    <p class="text00 text-center">
                        We work with <span class="color-orange-dark">amazing</span> companies.
                    </p>
                </x-col>
            </x-grid>
            <hr>
            <!-- Contact section -->
            <x-grid columns="1" class="section spaced box-padded" ji=center>
                <x-col as=center>
                    <p class="text0000 medium pad-bottom-16">Let's Connect <img src="/images/logo-bloom-icon-theme-light.svg" class="inline" style="height: 60px; vertical-align: -15%;"></p>
                    <p class="text0 pad-bottom-8">Start the conversation by emailing us at:</p>
                    <p class="text000 pad-bottom-32">
                        <a href="mailto:info@bloomconsultinggroup.com?subject=Contact" class="underline">info@bloomconsultinggroup.com</a>
                    </p>
                    <p class="text">
                        Mailing Address:<br>
                        Bloom Consulting & Project Management Group Inc.<br>
                        6411 REBECCA COURT SE, AUBURN, WA 98092
                    </p>
                </x-col>
            </x-grid>

        </main>
        <!-- / content -->
    </div>
    <!-- / global wrapper -->
    <?php include($base . "/part-footer.php"); ?>

    <script type="text/javascript">
        function otSlider() {
            const slider = '.otSlider';

            document.querySelectorAll(slider).forEach(el => {
                const scroller = el.querySelector('.scroll-snap');
                const nextBtn = el.querySelector('.ot-next');
                const prevBtn = el.querySelector('.ot-prev');
                const itemWidth = el.querySelector('.slide').clientWidth;

                nextBtn.addEventListener('click', scrollToNextItem);
                prevBtn.addEventListener('click', scrollToPrevItem);

                function scrollToNextItem() {
                    if (scroller.scrollLeft < (scroller.scrollWidth - itemWidth))
                        // The scroll position is not at the beginning of last item
                        scroller.scrollBy({
                            left: itemWidth,
                            top: 0,
                            behavior: 'smooth'
                        });
                    else
                        // Last item reached. Go back to first item by setting scroll position to 0
                        scroller.scrollTo({
                            left: 0,
                            top: 0,
                            behavior: 'smooth'
                        });
                }

                function scrollToPrevItem() {
                    if (scroller.scrollLeft != 0)
                        // The scroll position is not at the beginning of first item
                        scroller.scrollBy({
                            left: -itemWidth,
                            top: 0,
                            behavior: 'smooth'
                        });
                    else
                        // This is the first item. Go to last item by setting scroll position to scroller width
                        scroller.scrollTo({
                            left: scroller.scrollWidth,
                            top: 0,
                            behavior: 'smooth'
                        });
                }
            });
        }

        /*** on DOM ready **/
        document.addEventListener("DOMContentLoaded", () => {
            otSlider();
        });
    </script>

    <?php include($base . "/part-scripts.php"); ?>
</body>

</html>