<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php');?>
<?php include($base . "/part-doctype.php");?>
    <title>Bloom - Solutions</title>
    <meta name="description" content="">
    <meta name="author" content="Bloom">

<?php include($base . "/part-styles.php");?>

<body class="activate-appear-animation header-6 pre-header-on-sm">
    <!-- global-wrapper -->
    <div id="global-wrapper">
        
<?php include($base . "/part-navigation.php");?>
        <!-- content-->

        <main id="content">
            <header class="page-header no-padding rel">
                <div class="header-shade"></div>
                <div class="row">
                    <div class="header-blurb blurb-solutions text000 regular col-md-7">
                        "Experience is everything. What we deliver doesn't matter if the customer experience is less than flawless."<br>
                        <span class="text-00 medium">Andrew Herb, GM of Client Experience</span>
                    </div>
                </div>
            </header>
            <!-- video -->
			<section class="video-header x-large stay">
				<video class="html5-fullscreen video-medp" poster="/images/solutions-loop.jpg" autoplay loop>

					<!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
					<source type="video/mp4" src="/images/solutions-loop.mp4" />
					<source type="video/ogg" src="/images/solutions-loop.ogv" />
					<source type="video/webm" src="/images/solutions-loop.webm" />
					<!-- Flash fallback for non-HTML5 browsers without JavaScript -->
					<object  class="video-flash" type="application/x-shockwave-flash" data="neko-framework/external-plugins/mediaelement/flashmediaelement.swf">
						<param name="movie" value="neko-framework/external-plugins/mediaelement/flashmediaelement.swf" />
						<param name="flashvars" value="controls=true&amp;file=/images/solutions-loop.mp4" />
						<!-- Image as a last resort -->
						<img src="/images/solutions-loop.jpg" title="No video playback capabilities" class="no-video-playback-capabilitites" alt="edena-video" />
					</object>
				</video>
			</section>
			<!-- / video -->

            <!-- page content -->
            
            <section class="pt-medium light-color">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7" data-nekoanim="fadeInLeft" data-nekodelay="10"><a name="security" class="anchor"></a>
                            <p class="text0000 light">Modern Enterprise Security Solutions</p>
                            <p class="text0 regular">
                                Chief Security Officers and their directs suffer from App and information overload possibly more than any other group in the enterprise. The enterprise security executive is responsible for risk, physical security, and people safety, relying on a myriad of point solutions and data points to manage their business. Bloom helps the modern CSO and Security Executive transform their security operations to achieve much better line of sight across the organization. 
                                <br><br>
                                Bloom Modern CSO Dashboard&trade;<br>
                                Bloom Modern Incident Management Virtual Team Fusion Experience&trade;<br>
                                Bloom Modern Security Operations Apportal&trade;<br>
                                Bloom Modern Physical Security IoT Dashboard&trade;<br>
                                Bloom Modern PSIM App&trade;<br>
                                Bloom Modern Holographic Virtual Collaboration&trade;<br>
                                Bloom Modern Big Data Security Analytics&trade;<br>
                            </p>
                        </div>
                        <div class="col-md-5 pad-top-75 text-center" data-nekoanim="fadeInRight" data-nekodelay="10">
                            <img src="/images/modern-security.jpg" class="responsive">
                        </div>
                    </div>
                </div>
            </section>
            <!-- / page content -->
            
            <section class="pt-medium light-color">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-md-push-5" data-nekoanim="fadeInRight" data-nekodelay="10"><a name="sales" class="anchor"></a>
                            <p class="text0000 light">Modern Enterprise Sales Solutions</p>
                            <p class="text0 regular">
                                Sales people are highly mobile and require modern, mobile experience that deliver information to them seamlessly across their many devices. Bloom's modern sales solutions integrate sales apps into a single pane of glass view for continuous workflow and mobility of experience. Imagine having your CRM pipeline and sales data, sales collateral, training books, and customer presentations at your fingertips. Imagine everything you need in a single application that can be shared with customers through customer-centric views. Bloom can help sales professionals transform their sales organizations by increasing productivity to achieve much better ROI and differentiate competitively with customers.
                                <br><br>
                                Bloom Modern Interactive Sales Customer Demo&trade;<br>
                                Bloom Modern Sales Apportal&trade;<br>
                                Bloom Modern Sales BI Dashboard&trade;<br>
                                Bloom Modern Field Training App&trade;<br>
                                Bloom Modern Holographic Virtual Collaboration&trade;<br>
                                Bloom Modern Big Data Marketing Analytics&trade;<br>
                            </p>
                        </div>
                        <div class="col-md-5 col-md-pull-7 pad-top-75 text-center" data-nekoanim="fadeInLeft" data-nekodelay="10">
                            <img src="/images/modern-sales.jpg" class="responsive">
                        </div>
                    </div>
                </div>
            </section>
            <!-- / page content -->
            
            <section class="pt-medium pb-medium light-color">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7" data-nekoanim="fadeInLeft" data-nekodelay="10"><a name="marketing" class="anchor"></a>
                            <p class="text0000 light">Modern Enterprise Marketing Solutions</p>
                            <p class="text0 regular">
                                A few of the mega trends impacting marketers today are at the center of the Bloom solution suite. Mobile is going to continue to be the center of marketing. From cell phones to smartphones, tablets to wearable gadgets, the evolution of mobile devices is one of the prime factors influencing marketing executives messaging to their customer audience. Information overload will continue. Social will evolve to be the channel for marketers. Personalized, data-driven marketing will continue to dominate big data and BI investments and more accurate telemetry to measure engagement will surface. 
                                <br><br>
                                Bloom Modern Mobile Maturity (M3) Assessment&trade;<br>
                                Bloom Interactive Tradeshow App&trade;<br>
                                Bloom Marketing Apportal&trade;<br>
                                Bloom Newsletter App&trade;<br>
                                Bloom Marketing Brochure App&trade;<br>
                                Bloom Field Training App&trade;<br>
                                Bloom Holographic Virtual Collaboration&trade;<br>
                                Bloom Big Data Marketing Analytics&trade;<br>
                            </p>
                        </div>
                        <div class="col-md-5 pad-top-75 text-center" data-nekoanim="fadeInRight" data-nekodelay="10">
                            <img src="/images/modern-marketing.jpg" class="responsive">
                        </div>
                    </div>
                </div>
            </section>
            <!-- / page content -->

        </main>
        <!-- / content -->

        <?php include($base . "/part-footer.php");?>
    </div>
    <!-- global wrapper -->

<?php include($base . "/part-scripts.php");?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#page-solutions').addClass('active');
        });
    </script>
</body>

</html>
