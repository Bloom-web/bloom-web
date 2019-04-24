<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php');?>
<?php include($base . "/part-doctype.php");?>
    <title>Bloom - Corporate</title>
    <?php perch_content('meta tags');?>

<?php include($base . "/part-styles.php");?>

<body class="activate-appear-animation header-6 pre-header-on-sm">
    <!-- global-wrapper -->
    <div id="global-wrapper">
        
<?php include($base . "/part-navigation.php");?>
        <!-- content-->

        <main id="content">
            <header class="page-header xlarge image-background no-padding rel" style="background-image: url('/images/background-corporate.jpg');">
                <div class="row">
                    <div class="header-blurb blurb-corp xl regular col-md-6 caps">
                        <?php perch_content('blurb'); ?>
                    </div>
                </div>
            </header>
            <!-- page content -->
            
            <section class="pt-medium pb-medium light-color" data-nekoanim="fadeInUp" data-nekodelay="50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12"><a name="about" class="anchor"></a>
                            <p class="text000 light">About Bloom</p>
                            <div class="text regular lumps">
                                <?php perch_content('about'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </section>
            <!-- / page content -->
            <!-- page content -->
            
            <section class="pt-small pb-small light-color" data-nekoanim="fadeInUp" data-nekodelay="50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12"><a name="global" class="anchor"></a>
                            <p class="text000 light">Our team</p>
                            <div class="text-center">
                                <?php perch_content('managers'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </section>
            <!-- / page content -->
            
            <section class="pt-medium pb-small light-color" data-nekoanim="fadeInUp" data-nekodelay="50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 iblock-multi"><a name="culture" class="anchor"></a>
                            <p class="text000 light">Culture</p>
                            <p class="text regular">
                                <?php perch_content('culture'); ?>
                            </p>
                        </div>
                        <div class="col-md-6 pad-top-50">
            				<video poster="/images/dog.jpg" autoplay loop>
            					<!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
            					<source type="video/mp4" src="/images/dog-loop.mp4">
            					<source type="video/ogg" src="/images/dog-loop.ogv">
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

            <section class="pt-small pb-medium light-color">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 iblock-multi"><a name="news" class="anchor"></a>
                            <p class="text000 light">Latest news <a href="/bloom-rss.php" target="_blank"><i class="material-icons icon">rss_feed</i></a></p>
                            <?php
                                perch_content_custom('news', array(
                                'template'   => 'news-list.html',
                                'page'  =>  '/news/page.php',
                                ));
                            ?>
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
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
        $(".showhide").on("click", function() {
          $(this).next(".hid").fadeToggle();
        });
    });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#page-corporate').addClass('active');
        });
    </script>
</body>

</html>
