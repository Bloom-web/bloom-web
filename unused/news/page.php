<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php');?>
<?php include($base . "/part-doctype.php");?>
<?php 
	$story = perch_get('s');
	$storyWithSpaces = str_replace("-", " ", $story);
?>
    <title>Bloom - News - <?php echo $storyWithSpaces; ?></title>
    <?php perch_content('meta tags');?>

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
                    <div class="row">
                    <?php
                        perch_content_create('news', array(
                        'template'   => 'news-item.html',
                        'multiple'    => true,
                        'edit-mode' => 'listdetail',
                        ));
                    ?>
                    <?php
                        perch_content_custom('news', array(
                        'template'   => 'news-item.html',
                        'filter' => 'link',
                        'match' => 'eq',
                        'value' => $story,
                        'count' => 1,
                        ));
                    ?>

                    </div> <!-- / row -->
                </div><!-- / container -->
            </section>
            
        </main>
        <!-- / content -->

        <?php include($base . "/part-footer.php");?>
    </div>
    <!-- global wrapper -->

<?php include($base . "/part-scripts.php");?>

</body>

</html>
