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
        <main id="content" class="center">
            <!-- Hero -->
			<?php perch_content('hero'); ?>

            <!-- How we help section -->
			<?php perch_content('how we help'); ?>

            <!-- How blocks -->
			<?php perch_content('how blocks'); ?>

            <!-- Partnering section -->
            <div class="section spaced">
            	
			<?php perch_content('partners'); ?>
			
			<?php perch_content('quotes'); ?>
			
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