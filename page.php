<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php'); ?>
<?php include($base . "/part-doctype.php"); ?>
<title>Bloom</title>
<?php perch_content('meta tags'); ?>

<?php include($base . "/part-styles.php"); ?>

<body>
    <!-- global-wrapper -->
    <?php include($base . "/part-navigation.php"); ?>

    <div id="app" class="theme-light">

        <!-- content-->

        <!-- page content -->
        <main id="content">
            <!-- Hero -->
            <x-grid columns="1" class="section theme-teal-dark" ji=center ai=center>
                <span class="text00000 hairline quote-font" style="color:var(--colorTealLight);">
                   We're celebrating<br>
               </span>
               <img src="/images/logo-bloom-wide-theme-dark.svg" class="inline" style="width:200px;">
            </x-grid>

			<div class="section center theme-orange-light">
				<div class="contents">
					<div class="text000 bold">
						Microsoft
					</div>
					<div class="text00000 bold" style="max-width:60rem;">
						Top 5 Supplier of the Year
					</div>
					<div class="text0 thin">
						2024 Diverse-owned Category
					</div>
				</div>
			</div>
			
			<div class="section theme-gray">
				<div class="contents">
					<div class="text0 spaced-items">
						<?php perch_content('Top 5 winner'); ?>
					</div>
				</div>
			</div>
			
            <!-- Partnering section -->
            <div class="section spaced">
                <div class="contents">
                    <x-grid columns="1" ji=center>
                        <x-col>
							<?php perch_content('work companies'); ?>
                        </x-col>
                    </x-grid>
                </div>
            </div>
            
			<!-- How we help section -->
			<div class="section theme-gray" id="who-we-are">
                <div class="contents text-start">
                    <h2 class="nostyle">
                    	<span class="text0000 medium">
                    		<?php perch_content('Who title'); ?>
                    	</span>
                    </h2>
					<?php perch_content('how we help'); ?>
				</div>
			</div>

			
            <div class="section theme-gray">
            	<div class="contents">
            		<div class="text0 text-start spaced-items">
						<?php perch_content('Who intro'); ?>
            		</div>
            		<h2 class="nostyle">
            			<span class="text0000 medium">
            			<?php perch_content('Values title'); ?>
            			</span>
            		</h2>
             		<div class="text0 text-start spaced-items">
						<?php perch_content('Values intro'); ?>
            		</div>
           		<details>
	            		<summary class="text000 medium color-orange-dark inline-markdown link">
								<?php perch_content('Who diversity title'); ?>
		            	</summary>
		            		<div class="text0 text-start spaced-items">
								<?php perch_content('Who diversity body'); ?>
		            		</div>
		            </details>
            		<details>
	            		<summary class="text000 medium color-orange-dark inline-markdown link">
								<?php perch_content('Who drive title'); ?>
		            	</summary>
		            		<div class="text0 text-start spaced-items">
								<?php perch_content('Who drive body'); ?>
		            		</div>
		            </details>
            		<details>
	            		<summary class="text000 medium color-orange-dark inline-markdown link">
								<?php perch_content('Who delivery title'); ?>
		            	</summary>
		            		<div class="text0 text-start spaced-items">
								<?php perch_content('Who delivery body'); ?>
		            		</div>
		            </details>
        	  </div>
            </div>
            <!-- Commitment section -->
            <div class="section">
            	<p class="text0000 medium text-center">
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

            <hr>
            <?php include($base . "/part-contact.php"); ?>
        </main>
        <!-- / content -->
    </div>
    <!-- / global wrapper -->
    <?php include($base . "/part-footer.php"); ?>

    <?php include($base . "/part-loader-screen.php"); ?>

    <?php include($base . "/part-scripts.php"); ?>

    <!-- Loading animation with DOM reflow so it can restart -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var specialLoader = document.getElementById("specialLoader");
            if (specialLoader) {
                specialLoader.classList.remove("fadeout");
                void specialLoader.offsetWidth;
                specialLoader.classList.add("fadeout");
            }
        });
    </script>

    <!-- Splide slider carousel -->
    <script src="/splide/splide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var splideThere = document.getElementsByClassName("splide");
            if (splideThere) {
                var splide = new Splide('.splide');
                splide.mount();
            }
        });
    </script>
</body>

</html>