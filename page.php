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
                        <header class="page-header xlarge stay image-background no-padding rel" style="background-image: url('/images/background-home.jpg');">
                            <div class="row">
                                <div class="header-blurb blurb-home text0 regular col-md-7">
                                    <?php perch_content('blurb'); ?>
                                </div>
                            </div>
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
