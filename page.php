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
                <span class="text-display hairline quote-font" style="color:var(--colorTealLight);">
                   We're celebrating<br>
               </span>
               <img src="/images/logo-bloom-wide-theme-dark.svg" class="inline" style="width:300px;">
            </x-grid>

			<div class="section center theme-orange-light">
				<div class="contents">
					<div class="text00000 bold">
						Microsoft
					</div>
					<div class="text-display bold" style="max-width:60rem;">
						Top 5 Supplier of the Year
					</div>
					<div class="text000 thin">
						2024 Diverse-owned Category
					</div>
				</div>
			</div>
			
			<div class="section theme-gray">
				<div class="contents">
					<div class="text0">
						<span class="bold">
						Bloom Consulting Group & Project Management is one of five Finalists for Microsoft Diverse-Owned Supplier of the Year at the Microsoft Supplier Prestige Awards 2024.
						</span>
						<br><br>
						We are honored to be selected has been selected as one of five finalists for Diverse-Owned Supplier of the Year at the Microsoft Supplier Prestige Awards 2024.
						<br><br>
						The Diverse-Owned Supplier of the Year category recognizes suppliers that are third party certified diverse-owned suppliers who strengthen Microsoft portfolio, amplify Microsoft’s values and commitments, and exemplify the MSP Pillars of Strategy, Priority, Agility, and Modernization. 
						 <br><br>
						For the last 15 years, we have been privileged to work with great leaders across tech industry and this remarkable achievement wouldn't have been possible without their continued support and trust in our services. 
						 <br><br>
						Thank you to all our former and current clients for your trust in our ability to deliver business results while honoring our values of Diversity, Drive and top-notch Delivery! 
						 <br><br>
						The Microsoft Supplier Prestige Awards ceremony will be broadcast on February 29th, 2024. 
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
			<?php perch_content('how we help'); ?>

			
            <div class="section theme-gray" id="who-we-are">
            	<div class="contents">
            		<div class="text0 text-start spaced-items">
						<?php perch_content('who intro'); ?>
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