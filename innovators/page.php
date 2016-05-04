<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php');?>
<?php include($base . "/part-doctype.php");?>
    <title>Bloom - Innovators</title>
    <meta name="description" content="">
    <meta name="author" content="Bloom">

<?php include($base . "/part-styles.php");?>

<body class="activate-appear-animation header-6 pre-header-on-sm">
    <!-- global-wrapper -->
    <div id="global-wrapper">
        
<?php include($base . "/part-navigation.php");?>
        <!-- content-->

        <main id="content">
            <header class="page-header center xlarge image-background no-padding rel" style="background-image: url('/images/background-innovators.jpg');">
            </header>
            <!-- page content -->
            
            <section class="pt-medium pb-small light-color" data-nekoanim="fadeInUp">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12"><a name="experts" class="anchor"></a>
                            <p class="text0000 light">Meet some experts</p>
                            <div class="text-center">
                            
                            <div class="owl-carousel neko-data-owl" data-neko_items="4" data-neko_pagination="true" data-neko_navigation="false" data-neko_autoPlay="5000" data-neko_transitionstyle="backSlide" >

                                <div class="item">
                                    <img src="/images/headshot-bryan.jpg" class="responsive">
                                    <p class="text0 regular">
                                        Bryan Zembruski<br>
                                        <span class="text-00">
                                            Consultant
                                        </span>
                                    </p>
                                </div>
                                <div class="item">
                                    <img src="/images/headshot-cassie.jpg" class="responsive">
                                    <p class="text0 regular">
                                        Cassie Fischer<br>
                                        <span class="text-00">
                                            Project Manager
                                        </span>
                                    </p>
                                </div>
                               <div class="item">
                                    <img src="/images/headshot-hoby.jpg" class="responsive">
                                    <p class="text0 regular">
                                        Hoby Van Hoose<br>
                                        <span class="text-00">
                                            Experience Architect, Product Owner
                                        </span>
                                    </p>
                                </div>
                                <div class="item">
                                    <img src="/images/headshot-john.jpg" class="responsive">
                                    <p class="text0 regular">
                                        John Brooks<br>
                                        <span class="text-00">
                                            Consultant
                                        </span>
                                    </p>
                                </div>
                                <div class="item">
                                    <img src="/images/headshot-tj.jpg" class="responsive">
                                    <p class="text0 regular">
                                        TJ Filley<br>
                                        <span class="text-00">
                                            Consultant
                                        </span>
                                    </p>
                                </div>
                                <div class="item">
                                    <img src="/images/headshot-tracey.jpg" class="responsive">
                                    <p class="text0 regular">
                                        Tracey Cummings<br>
                                        <span class="text-00">
                                            Consultant
                                        </span>
                                    </p>
                                </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </section>
            
            <section class="pt-medium light-color" data-nekoanim="fadeInUp">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12"><a name="articles" class="anchor"></a>
						  <p class="text0000 light">Featured articles</p>
                        </div>
                        <div class="col-xs-4 col-xxs-12 text-center">
                            <a href="http://www.v3.co.uk/v3-uk/analysis/2419255/poor-smartwatch-security-poses-business-risks-as-apple-watch-stimulates-wearables-use" target="_blank">
                                <img src="/images/article-smartwatch.jpg" class="img-responsive" style="border:solid 1px black;">
                            </a>
                        </div>
                        <div class="col-xs-4 col-xxs-12 text-center">
                            <a href="http://zeendo.com/info/future-trends-of-mobile-technology/" target="_blank">
                                <img src="/images/article-trends.jpg" class="img-responsive" style="border:solid 1px black;">
                            </a>
                        </div>
                        <div class="col-xs-4 col-xxs-12 text-center">
                            <a href="https://www.microsoft.com/enterprise/it-trends/mobility/articles/our-vision-for-mobility-devices.aspx" target="_blank">
                                <img src="/images/article-mobility.jpg" class="img-responsive" style="border:solid 1px black;">
                            </a>
                        </div>
                    </div> <!-- / row -->
                </div><!-- / container -->
            </section>

            
            <section class="pt-medium pb-medium light-color" data-nekoanim="fadeInUp">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 iblock-mono tcell text-left"><a name="awards" class="anchor"></a>
                            <p class="text0000 light">Awards</p>
                            <p class="text0 regular">
                                Bloom is the proud co-winner with Microsoft of the Security Technology Executive Magazine’s Security Innovation Award for best collaborative effort for 2015. Bloom developed an innovative, new Azure-driven Windows Application for the Microsoft Advanced Patrol Platform (MAPP), a joint effort between Microsoft Global Security, Worldwide Solutions, OEM, Worldwide Public Safety and Justice as well as a consortium of leading technology and service partners. 
                                <br><br>
                                MAPP is designed to demonstrate the future of mobile law enforcement by streamlining the roles of law enforcement and security professionals through interaction with technology. It is currently demonstrated on a Ford Police Interceptor SUV branded to represent Microsoft technologies and partners, with the goal of providing patrol teams with a mobile command center that delivers critical information and intelligence once only accessible at a physical command center.
                            </p>
                        </div>
                        <div class="col-md-5 iblock-mono tcell stretchy">
                        <div class="">
                            <img src="/images/award-security-exec.jpg" class="stretchx">
                        </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </main>
        <!-- / content -->

        <?php include($base . "/part-footer.php");?>
    </div>
    <!-- global wrapper -->

<?php include($base . "/part-scripts.php");?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#page-innovators').addClass('active');
        });
    </script>
</body>

</html>
