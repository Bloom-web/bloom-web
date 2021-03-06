<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php');?>
<?php include($base . "/part-doctype.php");?>
    <title>Bloom - Contact</title>
    <?php perch_content('meta tags');?>

<?php include($base . "/part-styles.php");?>

<body class="activate-appear-animation header-6 pre-header-on-sm">
    <!-- global-wrapper -->
    <div id="global-wrapper">
        
<?php include($base . "/part-navigation.php");?>
        <!-- content-->

        <main id="content">
            <header class="page-header xmedium image-background no-padding rel" style="background-image: url('/images/background-contact.jpg'); background-position: top center;">
            </header>
            <!-- page content -->
            <section class="">
                <div class="">
                    <div class="row">
                        <div class="col-sm-6 col-sm-push-6 pt-medium pb-medium text" data-nekoanim="fadeInRight">
                            <?php perch_content('contact items'); ?>
                        </div>
                        <div class="col-sm-6 col-sm-pull-6" data-nekoanim="fadeInLeft">
                            <iframe width="100%" height="500" frameborder="0" scrolling="no" seamless="seamless" src="https://www.bing.com/maps/embed?h=500&w=600&cp=47.67431~-122.11784000000002&lvl=16&typ=d&sty=h&src=SHELL&FORM=MBEDV8&pp=47.67431,-122.11784000000002;88" style="vertical-align:bottom"></iframe>
                        </div>
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
            $('#page-contact').addClass('active');
        });
    </script>
</body>

</html>
