<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php'); ?>
<?php include($base . "/part-doctype.php"); ?>
<title>Bloom - Privacy and Terms</title>
<?php perch_content('meta tags'); ?>

<?php include($base . "/part-styles.php"); ?>

<body>
    <!-- global-wrapper -->
    <?php include($base . "/part-navigation.php"); ?>

    <div id="app" class="center theme-light">

        <!-- content-->
        <main id="content" class="">

            <section class="section">
                <div class="contents text-start">

                    <div class="text0000 light">Terms</div>
                    <div class="text-0 lumps">
                        <?php perch_content('terms'); ?>
                    </div>
                    <div class="pt-medium text0000 light">Privacy Statement</div>
                    <div class="text-0 lumps">
                        <?php perch_content('privacy'); ?>
                    </div>
                    <!-- / row -->
                </div>
                <!-- / container -->
            </section>

        </main>
        <!-- / content -->

        <?php include($base . "/part-footer.php"); ?>
    </div>
    <!-- global wrapper -->

    <?php include($base . "/part-scripts.php"); ?>

</body>

</html>