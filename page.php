<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php'); ?>
<?php include($base . "/part-doctype.php"); ?>
<title>Bloom</title>
<?php perch_content('meta tags'); ?>

<?php include($base . "/part-styles.php"); ?>

<body>
    <!-- global-wrapper -->
    <?php include($base . "/part-navigation.php"); ?>

    <div id="app" class="theme-light">

        <!-- content-->

        <!-- page content -->
        <main id="content" class="center">
            <!-- Hero -->
            <x-grid columns="1" class="section tall" ji=center ai=center>
                <x-flex direction="row" wrap jc=center ai=center class="box-well-padded">
                    <img src="/images/logo-bloom-icon-theme-light.svg" class="inline" style="height: 300px;">
                    <x-col span="4" class="" style="max-width: 500px; text-align:center;" ai=center>
                        <div class="text00000 light pad-bottom-16" style="line-height: 1.1;">
                            We <span class="color-orange-dark">exist</span> to <span class="color-orange-dark">help</span>
                        </div>
                        <div class="text0000 medium pad-bottom-32" style="line-height: 1.1;">
                            cloud innovators conquer ambitious ideas.
                        </div>
                        <div class="text000 bold quote-font" style="color:var(--colorTealAccessible);">
                            Putting our experience and tenacity to work.
                        </div>
                    </x-col>
                </x-flex>
            </x-grid>

            <!-- How we help section -->
            <div class="section theme-gray">
                <div class="contents text-start">
                    <div>
                        <p class="text0000 medium">How We Help</p>
                        <p class="text0 pad-bottom-32">
                            We are a woman-owned management consulting firm. We specialize in catapulting cloud & channel growth, while doing our part to be <a href="/green/" class="underline">kind to our planet</a>.
                        </p>
                    </div>
                    <x-grid columns="4" columns-m="2" columns-s="2">
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
            </div>

            <!-- Business Strategy -->
            <div class="section">
                <div class="contents text-start">
                    <p class="text0000 medium">Business Strategy</p>
                    <p class="text0 regular pad-bottom-16">
                        Our experts partner with you to cover every aspect of your Cloud and Channel strategy&mdash;from research and analysis to planning, segmentation, and target setting; and from launching new programs or offerings to invigorating stale perceptions; or even moving a current product into a new market. From Go-to-Market to Get-to-Market, we're your partner for the journey.
                    </p>
                    <x-grid columns-s="1" class="icon-info-item">
                        <x-col as=center>
                            <div class="icon-box theme-teal">
                                <img src="/images/icon-chart-bar.png">
                            </div>
                        </x-col>
                        <x-col as=center>
                            <p class="text bold">Planning</p>
                            <p class="text-0 regular">
                                We perform vital analysis plus expert planning rhythms and target setting worldwide to fortify informed business decisions.
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
                                Let our creative minds and decades of experience complement your vision to drive incremental revenue through your programs by sharing something special.
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
                            <p class="text bold">Landing & Execution</p>
                            <p class="text-0 regular">
                                We chart a clear path for success and can manage every aspect of the implementation.
                            </p>
                        </x-col>
                    </x-grid>
                </div>
            </div>

            <!-- Revenue Operations -->
            <div class="section theme-gray">
                <div class="contents text-start">
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
                                We evaluate ways to drive predictable revenue and close gaps. We look across roles and routes to market to see how to improve and evolve your infrastructure.
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
                            <p class="text bold">Process Design & Change Management</p>
                            <p class="text-0 regular">
                                We evolve role clarity & productivity for marketing, sales, and customer success staff, while establishing a measured and nurturing approach to support the culture shift.
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
                            <p class="text bold">Partner Ecosystem Development</p>
                            <p class="text-0 regular">
                                We can help analyze partner maturity and how to drive more of your offerings via traditional partners + born in the cloud ISVs, CSPs, Hyperscalers, MSPs, and MSSPs.
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
                            <p class="text bold">Marketing & Sales Operations</p>
                            <p class="text-0 regular">
                                Maintain a clear link between GTM strategy and Sales execution. We create the structure, enablement, and analytics needed to support and empower front-line internal and partner sellers.
                            </p>
                        </x-col>
                    </x-grid>
                </div>
            </div>

            <!-- Experiences -->
            <div class="section">
                <div class="contents text-start">
                    <p class="text0000 medium">Experiences: Customer & Partner</p>
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
                                We objectively listen to capture critical intelligence and insights to shape action plans for your engineering, marketing, and sales teams.
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
                                Let us help you align customer, seller, and partner journeys with specific R&Rs and outcomes for each motion. Our personas & processes help your teams better engage customers and partners, including during account transitions.
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
                            <p class="text bold">Improvement Churn | Retention</p>
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
                                Let us manage your events to mine ideas, best practices, and competitive insights. We begin with your desired outcomes, complimented by our PM and communications disciplines, to seamlessly plan and execute your event(s).
                            </p>
                        </x-col>
                    </x-grid>
                </div>
            </div>

            <!-- Transformation -->
            <div class="section theme-gray">
                <div class="contents text-start">
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
                </div>
            </div>

            <!-- Partnering section -->
            <div class="section spaced">
                <x-grid columns="1" class="contents text-start" ji=center>
                    <x-col as=center>
                        <p class="text0000 bold color-orange text-center">Collectively, We Conquer.</p>
                        <p class="text0 text-center pad-bottom-64">Partnering with visionary executives is the heartbeat of our business.</p>
                        <x-grid columns="3" columns-s="1" as=center ji=center>
                            <x-col class="pad-bottom-16" as=center>
                                <img src="/images/logo-microsoft.png" class="inline-block logo-partner">
                            </x-col>
                            <x-col class="pad-bottom-16" as=center>
                                <img src="/images/logo-redhat.png" class="inline-block logo-partner">
                            </x-col>
                            <x-col class="pad-bottom-16" as=center>
                                <img src="/images/logo-vmware.png" class="inline-block logo-partner">
                            </x-col>
                        </x-grid>
                        <x-grid columns="3" columns-s="1" as=center ji=center>
                            <x-col class="pad-bottom-16" as=center>
                                <img src="/images/logo-facebook.svg" class="inline-block logo-partner">
                            </x-col>
                            <x-col class="pad-bottom-16" as=center>
                                <img src="/images/logo-polycom.svg" class="inline-block logo-partner">
                            </x-col>
                            <x-col class="pad-bottom-16" as=center>
                                <img src="/images/logo-vulcan.svg" class="inline-block logo-partner">
                            </x-col>
                        </x-grid>
                        <p class="text00 text-center pad-bottom-32">
                            We work with <span class="color-orange-dark">amazing</span> companies.
                        </p>
                    </x-col>
                </x-grid>
                <div class="contents">
                    <?php include($base . "/part-quotes.php"); ?>
                </div>
            </div>
            <hr>
            <?php include($base . "/part-contact.php"); ?>
        </main>
        <!-- / content -->
    </div>
    <!-- / global wrapper -->
    <?php include($base . "/part-footer.php"); ?>

    <?php include($base . "/part-scripts.php"); ?>
</body>

</html>