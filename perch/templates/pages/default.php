<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<title><?php perch_pages_title(); ?></title>
	<?php perch_page_attributes(); ?>
	<?php perch_get_css(); ?>
</head>
<body>
    <h1><?php perch_content('Main heading'); ?></h1>

    <?php perch_pages_navigation(array('levels'=>1)); ?>

    <?php perch_content('Intro'); ?>

    <?php perch_get_javascript(); ?>
</body>
</html>