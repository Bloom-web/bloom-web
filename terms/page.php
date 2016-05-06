<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php');?>
<?php include($base . "/part-doctype.php");?>
<title>Bloom - Privacy and Terms</title>
<meta name="description" content="">
<meta name="author" content="Bloom">

<?php include($base . "/part-styles.php");?>

<body class="activate-appear-animation header-6 pre-header-on-sm">
<!-- global-wrapper -->
        <div id="global-wrapper">
        
        <?php include($base . "/part-navigation.php");?>
        <!-- content-->
        
        <main id="content">
            <header class="page-header xlarge image-background no-padding rel" style="background-image: url('/images/background-news.jpg');">
            </header>
        
            <!-- page content -->
        
            <section class="pt-medium pb-medium light-color">
                <div class="container">
        
                    <div class="text0000 light">Terms</div>
                    <div class="text-0 lumps">
                    <?php perch_content('terms');?>        
                    </div>
                    <div class="pt-medium text0000 light">Privacy Statement</div>
                    <div class="text-0 lumps">
                    <?php perch_content('privacy');?>
                    </div>
                    <!-- / row -->
                </div>
                <!-- / container -->
            </section>
        
        </main>
        <!-- / content -->
        
        <?php include($base . "/part-footer.php");?>
        </div>
        <!-- global wrapper -->

<?php include($base . "/part-scripts.php");?>

</body>

</html>
