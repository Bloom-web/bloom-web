<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php'); ?>
<?php include($base . "/part-doctype.php"); ?>
<title>Bloom - Who we are</title>
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
            			<?php perch_content('who title'); ?>
            		</span></h1>
            		<div class="text-0 text-start spaced-items">
						<?php perch_content('who intro'); ?>
            		</div>
        	  </div>
            </div>
                        <!-- Commitment section -->
            <div class="section">
            	<p class="text0000 bold text-center">
            		<?php perch_content('green title'); ?>
            	</p>
                <x-grid columns="12" columns-m="1" columns-s="1" class="contents text-start">
                    <x-col span="3" order-m="last" order-s="last" class="box-padded center">
                        <img src="/images/badge-ecovadis-silver-2022-fallback.png" srcset="/images/badge-ecovadis-silver-2022@1x.webp 1x, /images/badge-ecovadis-silver-2022@2x.webp 2x" class="inline">
                    </x-col>
                    <x-col span="9" span-s="1" class="box-padded go-green-text">
                    	<?php perch_content('green text'); ?>
                    </x-col>
                </x-grid>
            </div>
            <!-- Partnering section -->
            <div class="section spaced">
                <div class="contents text-start">
                    <x-grid columns="1" ji=center>
                        <x-col as=center>
							<?php perch_content('work companies'); ?>
                        </x-col>
                    </x-grid>
                </div>
            </div>

            <hr>
            <?php include($base . "/part-contact.php"); ?>

        </main>
        <!-- / content -->
    </div>
    <!-- / global wrapper -->
    <?php include($base . "/part-footer.php"); ?>

    <?php include($base . "/part-scripts.php"); ?>
</body>

</html>