<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php');?>
<?php include($base . "/part-doctype.php");?>
    <title>Bloom - Innovators</title>
    <?php perch_content('meta tags');?>

<?php include($base . "/part-styles.php");?>

<body class="activate-appear-animation header-6 pre-header-on-sm">
    <!-- global-wrapper -->
    <div id="global-wrapper">
        
<?php include($base . "/part-navigation.php");?>
        <!-- content-->

        <main id="content">
            <header class="page-header center xlarge image-background no-padding rel" style="background-image: url('/images/background-innovators.jpg');">
            </header>
            <!-- page content -->
            
            <section class="pt-medium light-color" data-nekoanim="fadeInUp">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12"><a name="experts" class="anchor"></a>
                            <p class="text0000 light">Meet some experts</p>
                            <div class="text-center">
                                <div class="owl-carousel neko-data-owl" data-neko_items="4" data-neko_pagination="true" data-neko_navigation="false" data-neko_autoPlay="5000" data-neko_transitionstyle="backSlide" >

                                <?php perch_content('experts');?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </section>
            
            <section class="pt-medium light-color" data-nekoanim="fadeInUp">
                <div class="container">
                    <div class="row">
                        <?php perch_content('articles');?>
                    </div> <!-- / row -->
                </div><!-- / container -->
            </section>

            
            <section class="pt-medium pb-medium light-color" data-nekoanim="fadeInUp">
                <div class="container">
                    <div class="row"><a name="awards" class="anchor"></a>
                        <div class="col-md-12 text0000 light"><p>Awards</p></div>
                    </div>
                    <div class="row">
                        <?php perch_content('awards');?>
                    </div>
                </div>
            </section>
            
        </main>
        <!-- / content -->

        <?php include($base . "/part-footer.php");?>
    </div>
    <!-- global wrapper -->

<?php include($base . "/part-scripts.php");?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#page-innovators').addClass('active');
        });
    </script>
</body>

</html>
