<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php');?>
<?php include($base . "/part-doctype.php");?>
    <title>Bloom - Services</title>
<?php perch_content('meta tags'); ?>

<?php include($base . "/part-styles.php");?>

<body class="activate-appear-animation header-6 pre-header-on-sm">
    <!-- global-wrapper -->
    <div id="global-wrapper">
        
<?php include($base . "/part-navigation.php");?>
        <!-- content-->

        <main id="content">
            <header class="page-header no-padding rel">
                <div class="row">
                    <div class="header-blurb blurb-services text00 regular col-md-5">
                        <?php perch_content('blurb'); ?>
                    </div>
                </div>
            </header>
            <!-- video -->
			<section class="video-header x-large stay">
				<video class="html5-fullscreen video-medp" poster="/images/services-loop.jpg" autoplay loop>
					<!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
					<source type="video/mp4" src="/images/services-loop.mp4" />
					<source type="video/ogg" src="/images/services-loop.ogv" />
					<source type="video/webm" src="/images/services-loop.webm" />
					<!-- Flash fallback for non-HTML5 browsers without JavaScript -->
					<object  class="video-flash" type="application/x-shockwave-flash" data="neko-framework/external-plugins/mediaelement/flashmediaelement.swf">
						<param name="movie" value="neko-framework/external-plugins/mediaelement/flashmediaelement.swf" />
						<param name="flashvars" value="controls=true&amp;file=/images/services-loop.mp4" />
						<!-- Image as a last resort -->
						<img src="/images/services-loop.jpg" title="No video playback capabilities" class="no-video-playback-capabilitites" alt="edena-video" />
					</object>
				</video>
			</section>
			<!-- / video -->

            <!-- page content -->
            <section class="pt-medium light-color">
            </section>
            
            <?php perch_content('services'); ?>

            <section class="pt-medium light-color">
            </section>
            
        </main>
        <!-- / content -->

        <?php include($base . "/part-footer.php");?>
    </div>
    <!-- global wrapper -->

<?php include($base . "/part-scripts.php");?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#page-services').addClass('active');
        });
    </script>
</body>

</html>
