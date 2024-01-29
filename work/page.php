<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php'); ?>
<?php include($base . "/part-doctype.php"); ?>
<title>Bloom - Work with us</title>
<?php perch_content('meta tags'); ?>

<?php include($base . "/part-styles.php"); ?>

<body>
    <!-- global-wrapper -->
    <?php include($base . "/part-navigation.php"); ?>

    <div id="app" class="center theme-light">

        <!-- content-->

        <!-- page content -->
        <main id="content" class="">

            <!-- Team section -->
            <div class="section">
                <x-grid columns="2" columns-m="1" columns-s="1" class="contents text-start">
                    <x-col span="1" class="box-padded center">
						<?php perch_content('work nicole'); ?>
                    </x-col>
                    <x-col span="1" span-s="1" class="box-padded" ji=center>
                    	<?php perch_content('work team'); ?>
                    </x-col>
                </x-grid>
            </div>
            <hr>
            	<!-- Benefits section -->
              <div class="section center">
            	<div class="contents">
            		<div class="text-0 text-start spaced-items">
						<?php perch_content('careers intro'); ?>
            		</div>
            		<script id="gnewtonjs" type="text/javascript" src="//recruitingbypaycor.com/career/iframe.action?clientId=8a7883c688bf93b80188c050bd5800ac"></script>
        	  </div>
            </div>
			<?php include($base . "/part-contact.php"); ?>
        </main>
        <!-- / content -->
    </div>
    <!-- / global wrapper -->
    <?php include($base . "/part-footer.php"); ?>

    <?php include($base . "/part-scripts.php"); ?>
</body>

</html>