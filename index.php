<?php include '/doctype.php';?>
    <title>Bloom</title>
    <meta name="description" content="">
    <meta name="author" content="Bloom">

<?php include 'styles.php';?>

<body class="activate-appear-animation header-6">
    <!-- global-wrapper -->
    <div id="global-wrapper">
        
<?php include 'navigation.php';?>
        <!-- content-->

        <main id="content">
            <header class="page-header center x-large image-background no-padding rel" style="background-image: url('images/background-home.jpg');">
                <div class="row">
                    <div class="header-blurb blurb-home text0 regular col-md-7">
                        "Bloom Innovation begins with a single, customer problem that causes pain, followed by a desire to change that outcome."
                        <br>Heather Zindel, C.E.O.
                    </div>
                </div>
                <div class="slider-home bottom left right">
                    <div class="mask opacity-5">
                        <div class="flush">
                            <div class="row">
                                <div class="col-md-5 iblock-mono">
                                    <img src="images/ydraw-example.jpg" class="slider-video">
                                </div>
                                <div class="col-md-5 iblock-mono padding-small">
                                    <div class="center">
                                        <div class="centered">
                                            <div class="header-text tleft text00 white">
                                                <p class="">
                                                    We are all about better experiences. Watch how in our custom, animated video.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- page content -->
            <section class="pt-medium pb-medium light-color grayback firstblock">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="text0000 light">Aggregating data and apps</p>
                            <p class="text0 regular">
                                Are employees suffering from information and app overload? Bloom aggregates enterprise web apps, LOB apps, social apps, and business intelligence into a single pane of glass.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img src="images/app-overload.png" class="responsive">
                        </div>

                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </section>
            <!-- / page content -->
            <section class="pt-medium pb-medium light-color">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="text0000 light">Holographic computing</p>
                            <p class="text0 regular">
                                Bloom is a top Microsoft Windows Universal App development partner. With the release of the Hololens development kit, Bloom will be innovating once again to reimagine how security professionals collaborate and communicate in a mobile world.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img src="images/hololens.jpg" class="responsive">
                        </div>

                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </section>
            <!-- / page content -->
            <section class="pt-medium pb-medium light-color grayback">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="text0000 light">IoT big data is here</p>
                            <p class="text0 regular">
                                The Internet of Things will grow to 26 billion units in 2020 according to Gartner, Inc. Due to decreasing costs, connectivity will become a standard feature of just about everything—leading to the need for big data cloud storage and data analytics. Ask sales executives about Bloom's current IoT project to analyze data from over 25 thousand physical security devices worldwide and surface it in it's award winning Windows 10 Azure-driven app.
                            </p>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="images/internetofthings.png" class="responsive">
                        </div>

                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </section>
            <!-- / page content -->

        </main>
        <!-- / content -->

        <?php include 'footer.php';?>
    </div>
    <!-- global wrapper -->

<?php include 'scripts.php';?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#page-home').addClass('active');
        });
    </script>
</body>

</html>
