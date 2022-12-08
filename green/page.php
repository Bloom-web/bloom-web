<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php'); ?>
<?php include($base . "/part-doctype.php"); ?>
<title>Bloom - Sustainable</title>
<?php perch_content('meta tags'); ?>

<?php include($base . "/part-styles.php"); ?>

<body>
    <!-- global-wrapper -->
    <?php include($base . "/part-navigation.php"); ?>

    <div id="app" class="center theme-light">

        <!-- content-->

        <!-- page content -->
        <main id="content" class="text-start">
            <div class="section nogap">
                <img src="/images/photo-tohoe-national-fallback.jpg" srcset="/images/photo-tohoe-national.webp 1x, /images/photo-tohoe-national@2x.webp 2x">
            </div>
            <!-- Section -->
            <div class="section">
                <x-grid columns="6" columns-m="1" columns-s="1" class="contents text-start">
                    <x-col span="2" order-m="last" order-s="last" class="center">
                        <img src="/images/badge-ecovadis-silver-2022-fallback.png" srcset="/images/badge-ecovadis-silver-2022@1x.webp 1x, /images/badge-ecovadis-silver-2022@2x.webp 2x" class="inline">
                    </x-col>
                    <x-col span="4" class="box-padded" span-s="1">
                        <p class="text0 bold pad-bottom-16">
                            Since our founding, Bloom has believed from little ideas, big things grow.
                        </p>
                        <p class="text0 pad-bottom-16">
                            We help this concept become a reality by making regular donations to the non-profit Trees for a Change. Through this partnership, seedlings are planted to create valuable oxygen, remove harmful gases from the atmosphere, and provide shade and habitats.
                        </p>
                        <p class="text0 pad-bottom-32">
                            Further, we help by maintaining our commitment to remain a 100% remote business, reducing emissions and energy consumption.
                        </p>
                        <p class="text pad-bottom-32">
                            Learn more about Trees for a Change at:
                            <br>
                            <a href="https://www.treesforachange.com/" class="underline" target="_blank">Treesforachange.com</a>
                        </p>
                        <p class="text0 pad-bottom-16">
                            We celebrate our Silver EcoVadis Sustainability Rating. EcoVadis provides the leading solution for monitoring sustainability in global supply chains.
                        </p>
                        <p class="text0 pad-bottom-16">
                            The EcoVadis methodology is based on international sustainability standards (Global Reporting Initiative, United Nations Global Compact, ISO 26000), and supervised by a scientific committee of sustainability and supply chain experts, to ensure reliable third-party sustainability assessments. Currently, EcoVadis has 50,000 subscribers, spread across 150 countries and 190 industries.
                        </p>
                    </x-col>
                </x-grid>
            </div>
            <div class="section">
                <div class="contents">
                    <p class="text0000 bold color-orange text-center">Collectively, We Conquer.</p>
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