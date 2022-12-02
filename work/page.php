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
                        <img src="/images/profile-nicole-watson-transparent.webp" class="inline" style="border-radius: 400px; background-color:var(--colorWhite); border: 2px solid var(--colorTealDark); width: 10rem;">
                        <p class="text0000 medium quote-font pad-bottom-32">
                            Nicole Watson<br>
                            CEO
                        </p>
                        <p class="text000 quote-font color-orange-dark pad-bottom-16">
                            My Superpowers
                        </p>
                        <p class="text narrowed pad-bottom-16">
                            Building global businesses & brands
                            <br>
                            <br>
                            Crafting go-to-market strategies & programs
                            <br>
                            <br>
                            Re-engineering business processes
                            <br>
                            <br>
                            Developing profitable revenue streams via direct & indirect sales channels
                        </p>
                        <a href="https://www.linkedin.com/in/nicoleawatson/" target="_blank">
                            <img src="/images/icon-linkedin.svg" class="inline" style="width: 5rem;">
                        </a>
                    </x-col>
                    <x-col span="1" span-s="1" class="box-padded" ji=center>
                        <p class="text0000 center">
                            Our Team of Experts
                        </p>
                        <p class="text000 bold quote-font color-orange-dark pad-bottom-32 center">
                            The right talent at the right time
                        </p>
                        <x-grid columns="2" columns-s="2">
                            <x-col class="theme-teal-dark">
                                <div class="icon-box xlarge center-axyz text0 center">
                                    Sr. Consultants
                                </div>
                            </x-col>
                            <x-col class="theme-teal-dark" ji=center>
                                <div class="icon-box xlarge center-axyz text0 center">
                                    Project Managers
                                </div>
                            </x-col>
                            <x-col class="theme-teal-dark" ji=center>
                                <div class="icon-box xlarge center-axyz text0 center">
                                    Consultants
                                </div>
                            </x-col>
                            <x-col class="theme-teal-dark" ji=center>
                                <div class="icon-box xlarge center-axyz text0 center">
                                    Business Analysts
                                </div>
                            </x-col>
                        </x-grid>
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

    <?php include($base . "/part-scripts.php"); ?>
</body>

</html>