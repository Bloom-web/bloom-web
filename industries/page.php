<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php');?>
<?php include($base . "/part-doctype.php");?>
    <title>Bloom - Industries</title>
    <?php perch_content('meta tags');?>

<?php include($base . "/part-styles.php");?>

<body class="activate-appear-animation header-6 pre-header-on-sm">
    <!-- global-wrapper -->
    <div id="global-wrapper">
        
<?php include($base . "/part-navigation.php");?>
        <!-- content-->

        <main id="content">
            <header class="page-header xlarge image-background no-padding rel" style="background-image: url('/images/background-industries.jpg');">
            </header>

            <!-- page content -->
            <?php perch_content('industry-featured');?>

            <section class="pt-medium light-color">
            </section>
            
            <?php perch_content('industrys');?>
            
            <section class="pt-medium" data-nekoanim="fadeInUp">
                    <div class="row">
                    <?php perch_content('industry images');?>
                    </div> <!-- / row -->
            </section>
            
        </main>
        <!-- / content -->

        <?php include($base . "/part-footer.php");?>
    </div>
    <!-- global wrapper -->

<?php include($base . "/part-scripts.php");?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#page-industries').addClass('active');
        });
    </script>
</body>

</html>
