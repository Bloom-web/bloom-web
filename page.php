<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php');?>
<?php include($base . "/part-doctype.php");?>
    <title>Bloom</title>
<?php perch_content('meta tags'); ?>

    <?php include($base . "/part-styles.php");?>

        <body class="activate-appear-animation header-6 pre-header-on-sm">
            <!-- global-wrapper -->
            <div id="global-wrapper">

                <?php include($base . "/part-navigation.php");?>
                    <!-- content-->

                    <main id="content">
                        <header class="page-header x-large stay image-background no-padding rel" style="background-image: url('/images/background-home.jpg');">
                            <div class="row">
                                <div class="header-blurb blurb-home text0 regular col-md-7">
                                    <?php perch_content('blurb'); ?>
                                </div>
                            </div>
                            <div class="slider-home bottom left right">
                                <div class="owl-carousel neko-data-owl" data-neko_items="1" data-neko_singleitem="true" data-neko_pagination="true" data-neko_navigation="false" data-neko_transitionstyle="backSlide">
                                    <div class="item">
                                        <div class="mask opacity-7">
                                            <div class="flush">
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-5 text-center">
                                                        <div class="embed-responsive-16by9">
                                                            <iframe class="embed-responsive-item slider-video" src="https://player.vimeo.com/video/157542772?title=0&badge=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="tcell slider-banner text0000 white">
                                                                Bloom in 100 seconds
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- corousel -->
                            </div>
                            <!-- slider home -->
                        </header>
                        <!-- page content -->
                        <?php perch_content('home topic'); ?>

                    </main>
                    <!-- / content -->

                    <?php include($base . "/part-footer.php");?>
            </div>
            <!-- global wrapper -->

            <?php include($base . "/part-scripts.php");?>

                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#page-home').addClass('active');
                    });

                </script>
