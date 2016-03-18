<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . "/part-doctype.php");?>
    <title>Bloom - Careers</title>
    <meta name="description" content="">
    <meta name="author" content="Bloom">

<?php include($base . "/part-styles.php");?>

<body class="activate-appear-animation header-6 pre-header-on-sm">
    <!-- global-wrapper -->
    <div id="global-wrapper">
        
<?php include($base . "/part-navigation.php");?>
        <!-- content-->

        <main id="content">
            <header class="page-header x-large stay image-background no-padding rel" style="background-image: url('/images/background-careers.jpg');">

                <div class="row">
                    <div class="header-blurb blurb-services text00 light col-md-4">
                        <div class="text0 pad-bottom-20">Employee Testimonials</div>
                        <div class="owl-carousel neko-data-owl" data-neko_items="1" data-neko_singleitem="true" data-neko_pagination="false" data-neko_navigation="false" data-neko_autoPlay="10000" data-neko_transitionstyle="backSlide">
                            <div class="item">
                            "One of the best things about working for Bloom is that they encourage creativity and innovation, so you can put your own spin on things while constantly being challenged to do better"
    						<span class="text-00 medium"><br><br>
    						- Cassie Fischer, Project Manager</span>
                            </div>
                            <div class="item">
                            "Bloom is a highly collaborative work environment. Each deliverable has the input of multiple team members, working together to create our signature gold standard products"
                            <span class="text-00 medium"><br><br>
                            - Sukhie Patel, Project Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- page content -->
            <section class="pt-medium light-color">
                <div class="container">
                    <div class="row text0"><a name="positions" class="anchor"></a>
						<p class="text0000 light">Open positions</p>
                    </div>
                </div>
            </section>

            <section class="pt-small pb-medium light-color" data-nekoanim="fadeInUp">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text000 light">Windows Developer</p>
                            <p class="text0 regular">
                                Skilled software developer passionate about highly interactive multi-tiered mobile applications. Windows store and windows phone experience a plus. Thrives in a fast-paced environment and able to manage ambiguity. Motivated self-starter who brings solutions to the table. Comfortable in a collaborative team environment.
                            </p>
                        </div>
                        <div class="col-md-4 pad-top-75 text-center">
                            <a href="mailto:recruiting@bloomconsultinggroup.com?subject=Windows Developer" class="btn default large block text0000">apply now</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pb-medium light-color" data-nekoanim="fadeInUp">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text000 light">Cloud/Enterprise Solution Architect</p>
                            <p class="text0 regular">
                                The Solution Architect is a key member of the company’s custom solution implementation project team and is responsible for the overall design of the application and mapping client business requirements to systems/technical requirements. The Solution Architect works as a team member along with the Customer Representative, Product Owner and supporting team members to deliver the complete solution for the customer. This is a hands-on position.
                            </p>
                        </div>
                        <div class="col-md-4 pad-top-75 text-center">
                            <a href="mailto:recruiting@bloomconsultinggroup.com?subject=Cloud/Enterprise Solution Architect" class="btn default large block text0000">apply now</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pb-medium light-color" data-nekoanim="fadeInUp">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text000 light">Database Admin/Business Analyst</p>
                            <p class="text0 regular">
                                The Database Admin/BusinessAnalyst will be responsible for the maintenance of existing databases, the design, and implementation of new databases. This person will also be responsible for analyzing our current systems, resolving data reporting issues and making necessary improvements. We are looking for someone that can work with our existing developers and key team members to understand needs and expectations and offer solutions.
                            </p>
                        </div>
                        <div class="col-md-4 pad-top-75 text-center">
                            <a href="mailto:recruiting@bloomconsultinggroup.com?subject=Database Admin/Business Analyst" class="btn default large block text0000">apply now</a>
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
            $('#page-careers').addClass('active');
        });
    </script>
</body>

</html>
