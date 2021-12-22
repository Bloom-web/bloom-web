<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php');?>
<?php include($base . "/part-doctype.php");?>
    <title>Bloom</title>
<?php perch_content('meta tags'); ?>

    <?php include($base . "/part-styles.php");?>

        <body class="activate-appear-animation header-7">
            <!-- global-wrapper -->
            <div id="global-wrapper">

                <?php include($base . "/part-navigation.php");?>
                    <!-- content-->

                    <main id="content">
                    	<img class="header-arrows" src="/images/header-arrows-clear.svg">
                        <header class="page-header xsmall stay image-background no-padding rel ycentered-flex" style="background-image: url('/images/background-home.jpg');">
                                <div class="container">
                                <div class="blurb-home white text0000 bold col-md-7">
                                    <?php perch_content('blurb'); ?>
                                </div>
								<div class="col-md-5">
									
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
