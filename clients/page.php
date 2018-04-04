<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php');?>
<?php include($base . "/part-doctype.php");?>
    <title>Bloom - Clients</title>
    <?php perch_content('meta tags');?>

<?php include($base . "/part-styles.php");?>

<body class="activate-appear-animation header-6 pre-header-on-sm">
    <!-- global-wrapper -->
    <div id="global-wrapper">
        
<?php include($base . "/part-navigation.php");?>
        <!-- content-->

        <main id="content">
            <header class="page-header x-large stay image-background no-padding rel" style="background-image: url('/images/background-clients.jpg');">
                <div class="header-shade2"></div>
            </header>
            <div class="row">
                <a name="saying" class="anchor"></a>
                <div class="header-blurb blurb-clients text0 regular col-sm-6">
                    <div class="owl-carousel neko-data-owl" data-neko_items="1" data-neko_singleitem="true" data-neko_pagination="true" data-neko_navigation="false" data-neko_autoPlay="10000" data-neko_transitionstyle="backSlide">
                        <?php perch_content('client quotes');?>
                    </div>
                </div>
            </div>
            <!-- page content -->
            <?php perch_content('client stories');?>
            
            <section class="pt-small pb-medium light-color">
                <div class="container">
                    <div class="row">
                    <?php perch_content('client logos');?>
                    </div> <!-- / row -->
                </div><!-- / container -->
            </section>
            
        </main>
        <!-- / content -->

        <?php include($base . "/part-footer.php");?>
    </div>
    <!-- global wrapper -->

<?php include($base . "/part-scripts.php");?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#page-clients').addClass('active');
        });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $(".showhide").on("click", function() {
          $(this).next(".hid").fadeToggle();
        });
    });
    </script>
    
</body>

</html>
