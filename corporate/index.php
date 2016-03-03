<?php include($_SERVER["DOCUMENT_ROOT"] . "/doctype.php");?>
    <title>Bloom - Corporate</title>
    <meta name="description" content="">
    <meta name="author" content="Bloom">

<?php include($_SERVER["DOCUMENT_ROOT"] . "/styles.php");?>

<body class="activate-appear-animation header-6">
    <!-- global-wrapper -->
    <div id="global-wrapper">
        
<?php include($_SERVER["DOCUMENT_ROOT"] . "/navigation.php");?>
        <!-- content-->

        <main id="content">
            <header class="page-header center x-large image-background no-padding rel" style="background-image: url('/images/background-corporate.jpg');">
                <div class="row">
                    <div class="header-blurb blurb-corp xl regular col-md-6 caps">
                        innovative solutions and strategic consulting for executives driving transformation across the fabric of the modern enterprise
                    </div>
                </div>
            </header>
            <!-- page content -->
            <section class="pt-medium pb-medium light-color grayback firstblock">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text000 light">About Bloom</p>
                            <p class="text regular lumps">
                                Bloom Consulting Group, Inc. is a growth-oriented business management consulting firm that delivers innovative solutions and strategic services to security, marketing and sales executives to support enterprise modernization and transformation. 
                                <br><br>
                                The Bloom Modern Solution SuiteTM aggregate data from IP-enabled security objects (IoT), social apps, web apps, modern apps, and disparate databases into an Azure cloud hub that can display executive-level business insight seamlessly across Windows and cross-platform devices. Bloom’s innovative solutions for follow-you-anywhere computing experiences across phones, tablets, PCs, XBox, wearables and the HoloLens are rapidly changing the way enterprises do business in a modern, mobile workplace.
                                <br><br>
                                Bloom’s complimentary strategic services span strategic business management consulting, enterprise risk digital transformation, performance improvement, Big Data analytics, and change management. 
                                <br><br>
                                In 2015, Bloom won a Security Innovation Award from Security Technology Executive Magazine alongside partner Microsoft for its Azure-driven, enterprise Windows application. The App was awarded the Gold Medal by judges for best Collaborative Security Project for the Microsoft Advanced Patrol Platform.
                            </p>
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </section>
            <!-- / page content -->
            <!-- page content -->
            <section class="pt-small pb-small light-color">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text000 light">Global Management</p>
                            <div class="text-center">
                                <div class="col-md-3 col-sm-6">
                                    <img src="/images/headshot-nicole.jpg" class="responsive">
                                    <p class="text regular">
                                        Nicole Watson<br>
                                        <span class="text-00">
                                            VP of Client Services, Senior Consultant
                                        </span>
                                    </p>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <img src="/images/headshot-mitch2.jpg" class="responsive">
                                    <p class="text regular">
                                        Mitch Cappelmann<br>
                                        <span class="text-00">
                                            GM of Software Engineering
                                        </span>
                                    </p>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <img src="/images/headshot-andrew3.jpg" class="responsive">
                                    <p class="text regular">
                                        Andrew Herb<br>
                                        <span class="text-00">
                                            VP of Customer Engagement
                                        </span>
                                    </p>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <img src="/images/headshot-caleb2.jpg" class="responsive">
                                    <p class="text regular">
                                        Caleb Van Dyken<br>
                                        <span class="text-00">
                                            General Manager
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </section>
            <!-- / page content -->
            
            <section class="pt-medium pb-medium light-color">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="text000 light">Culture</p>
                            <p class="text regular">
                                Culture reflects the essence of Bloom because it directly affects the success of our strategy and hiring practices. 
                                <br><br>
                                Bloom's culture is grounded in a relentless desire to delight our customers through excellence, thought leadership, and innovation. It is grounded in our mission to increase value.
                                <br><br>
                                We value high accountability to leave the company and our clients better than the day before. We value high performance partners (employees) that are self-motivated and empowered to transform, mentor, and collaborate with integrity. We value honest, positive, and supportive communication. And, we also value fun and community.
                            </p>
                        </div>
                        <div class="col-md-6 pad-top-50">
            				<video poster="/images/dog.jpg" autoplay loop>
            					<!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
            					<source type="video/mp4" src="/images/dog-loop.mp4">
            					<source type="video/ogg" src="/images/dog-loop.ogg">
            					<source type="video/webm" src="/images/dog-loop.webm">
            					<!-- Flash fallback for non-HTML5 browsers without JavaScript -->
            					<object class="video-flash" type="application/x-shockwave-flash" data="neko-framework/external-plugins/mediaelement/flashmediaelement.swf">
            						<param name="movie" value="neko-framework/external-plugins/mediaelement/flashmediaelement.swf">
            						<param name="flashvars" value="controls=true&amp;file=/images/dog-loop.mp4">
            						<!-- Image as a last resort -->
            						<img src="/images/dog.jpg" title="No video playback capabilities" class="no-video-playback-capabilitites" alt="edena-video">
            					</object>
            				</video>
                        </div>

                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </section>
            <!-- / page content -->
			<section>

			</section>

        </main>
        <!-- / content -->

        <?php include($_SERVER["DOCUMENT_ROOT"] . "/footer.php");?>
    </div>
    <!-- global wrapper -->

<?php include($_SERVER["DOCUMENT_ROOT"] . "/scripts.php");?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#page-corporate').addClass('active');
        });
    </script>
</body>

</html>
