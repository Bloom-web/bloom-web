<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php');?>
<?php include($base . "/part-doctype.php");?>
    <title>Bloom - Contact</title>
    <?php perch_content('meta tags');?>

<?php include($base . "/part-styles.php");?>

<body class="activate-appear-animation header-7">
    <!-- global-wrapper -->
    <div id="global-wrapper">
        
<?php include($base . "/part-navigation.php");?>
        <!-- content-->

        <main id="content">
        	<img class="header-arrows arrows-low" src="/images/header-arrows-clear.svg">
            <header class="page-header xsmall image-background no-padding rel" style="background-image: url('/images/background-contact.jpg');">
            </header>
            <!-- page content -->
            <section class="pt-medium pb-medium light-color" data-nekoanim="fadeInUp" data-nekodelay="50">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 text" data-nekoanim="fadeInLeft">
                    		<p class="text0000 light">Contact Us</p>
                    		<div class="text regular pb-small">
                    			Bloom is a woman-owned management consulting firm helping Cloud giants in their pursuit of GTM strategies and sales excellence. Our clients include Microsoft, Facebook, VMware, Poly, and Red Hat.
                    			<br><br>We believe that big things can grow from little ideas. So, our mission is to bring executives’ ideas to life with quality and integrity.
                    			<br><br>Ask us how we can help tackle your ambitious idea.
                    		</div>
                            <?php perch_content('contact items'); ?>
                        </div>
                        <div class="col-sm-6" data-nekoanim="fadeInRight">
                            <img src="/images/contact-team.jpg" width="100%">
                        </div>
                    </div>
                    <div class="row pt-medium">
                        <div class="col-md-3 text" data-nekoanim="fadeInLeft">
                    		<img src="/images/logo-wbenc.png" width="200px">
                        </div>
                        <div class="col-md-9 text" data-nekoanim="fadeInRight">
                            Bloom Consulting Group is certified as a Women’s Business Enterprise (WBE) through the Women’s Business Enterprise National Council (WBENC), the nation’s largest third-party certifier of businesses owned and operated by women in the US. We recognize the commitment to supplier diversity that is embraced by corporations and government agencies today, and we can add diversity to your supplier portfolio.
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
            $('#page-contact').addClass('active');
        });
    </script>
</body>

</html>
