<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php');?>
<?php include($base . "/part-doctype.php");?>
    <title>Bloom - Careers</title>
    <?php perch_content('meta tags');?>

<?php include($base . "/part-styles.php");?>

<body class="activate-appear-animation header-6 pre-header-on-sm">
    <!-- global-wrapper -->
    <div id="global-wrapper">
        
<?php include($base . "/part-navigation.php");?>
        <!-- content-->

        <main id="content">
            <header class="page-header x-large stay image-background no-padding rel" style="background-image: url('/images/background-careers.jpg');">

                <div class="row">
                    <div class="header-blurb blurb-services text00 light col-md-4">
                        <div class="text0 pad-bottom-20">Employee Testimonials</div>
                        <div class="owl-carousel neko-data-owl" data-neko_items="1" data-neko_singleitem="true" data-neko_pagination="false" data-neko_navigation="false" data-neko_autoPlay="10000" data-neko_transitionstyle="backSlide">
                        <?php perch_content('quotes');?>
                    </div>
                </div>
            </header>
            <!-- page content -->
            <section class="pt-medium light-color">
                <div class="container">
                    <div class="row text0"><a name="positions" class="anchor"></a>
						<p class="text0000 light">Open positions</p>
                    </div>
                </div>
            </section>

            <?php perch_content('open positions');?>

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
            $('#page-careers').addClass('active');
        });
    </script>
</body>

</html>
