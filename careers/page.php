<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php'); ?>
<?php include($base . "/part-doctype.php"); ?>
<title>Bloom - Careers</title>
<?php perch_content('meta tags'); ?>

<?php include($base . "/part-styles.php"); ?>

<body>
    <!-- global-wrapper -->
    <?php include($base . "/part-navigation.php"); ?>

    <div id="app" class="center theme-light">

        <!-- content-->

        <!-- page content -->
        <main id="content" class="text-start">
            <div class="section center">
            	<div class="contents">
            		<h1 class="nostyle pad-bottom-32"><span class="text0000 bold color-orange">
            			<?php perch_content('careers title'); ?>
            		</span></h1>
            		<div class="text-0 text-start">
						<?php perch_content('careers intro'); ?>
            		</div>
            		<script id="gnewtonjs" type="text/javascript" src="//recruitingbypaycor.com/career/iframe.action?clientId=8a7883c688bf93b80188c050bd5800ac"></script>
        	  </div>
            </div>
        </main>
        <!-- / content -->
    </div>
    <!-- / global wrapper -->
    <?php include($base . "/part-footer.php"); ?>

    <?php include($base . "/part-scripts.php"); ?>
</body>

</html>