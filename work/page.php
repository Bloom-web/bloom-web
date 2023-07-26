<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php'); ?>
<?php include($base . "/part-doctype.php"); ?>
<title>Bloom - Our team</title>
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
            <!-- Section -->
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