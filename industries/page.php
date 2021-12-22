<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php');?>
<?php include($base . "/part-doctype.php");?>
    <title>Bloom - Industries</title>
    <?php perch_content('meta tags');?>

<?php include($base . "/part-styles.php");?>

<body class="activate-appear-animation header-7">
    <!-- global-wrapper -->
    <div id="global-wrapper">
        
<?php include($base . "/part-navigation.php");?>
        <!-- content-->

        <main id="content">
        	<img class="header-arrows arrows-low" src="/images/header-arrows-clear.svg">
            <header class="page-header xsmall image-background no-padding rel" style="background-image: url('/images/background-industries.jpg');">
            </header>

            <!-- page content -->
            <section class="pt-medium light-color">
            	<?php perch_content('industrys');?>
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
