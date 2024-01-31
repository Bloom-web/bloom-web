<?php $base = $_SERVER["DOCUMENT_ROOT"]; ?>
<?php include($base . '/perch/runtime.php'); ?>
<?php include($base . "/part-doctype.php"); ?>
<title>Bloom - How we help</title>
<?php perch_content('meta tags'); ?>

<?php include($base . "/part-styles.php"); ?>

<body>
    <!-- global-wrapper -->
    <?php include($base . "/part-navigation.php"); ?>

    <div id="app" class="theme-light">

        <!-- content-->

        <!-- page content -->
        <main id="content" class="center">
        	
            <!-- How we help section -->
			<?php perch_content('how we help'); ?>

            <!-- How blocks -->
			<?php perch_content('how blocks'); ?>

            <!-- Partnering section -->
            <div class="section spaced">
            	
			<?php perch_content('quotes'); ?>
			
			<?php perch_content('partners'); ?>
			
            </div>
            <hr>
            <?php include($base . "/part-contact.php"); ?>
        </main>
        <!-- / content -->
    </div>
    <!-- / global wrapper -->
    <?php include($base . "/part-footer.php"); ?>

    <?php include($base . "/part-scripts.php"); ?>

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
    <script>
    /**
	* Created by edesimone on 04/06/16.
	*/
	window.onload=function() {

    // get tab container
    var container = document.getElementById("tabContainer");
    var tabcon = document.getElementById("tabscontent");
    // set current tab
    var navitem = document.getElementById("tabHeader_1");

    //store which tab we are on
    var ident = navitem.id.split("_")[1];
    //alert(ident);
    navitem.parentNode.setAttribute("data-current",ident);
    //set current tab with class of activetabheader
    navitem.setAttribute("class","tabActiveHeader");

    //hide two tab contents we don't need

    var pages = tabcon.getElementsByClassName("tabpage");
    for (var i = 0; i < pages.length; i++) {
        var comp=i+1;
        if(ident!=comp) {
            pages.item(i).style.display = "none";
        }
    };

    //this adds click event to tabs
    var tabs = container.getElementsByTagName("x-col");
    for (var i = 0; i < tabs.length; i++) {
        tabs[i].onclick=displayPage;
    	}
	}

	// on click of one of tabs
	function displayPage() {
	    var current = this.parentNode.getAttribute("data-current");
	    //remove class of activetabheader and hide old contents
	    document.getElementById("tabHeader_" + current).removeAttribute("class");
	    document.getElementById("tabpage_" + current).style.display="none";
	
	    var ident = this.id.split("_")[1];
	
	    //add class of activetabheader to new active tab and show contents
	    this.setAttribute("class","tabActiveHeader");
	    document.getElementById("tabpage_" + ident).style.display="block";
	    this.parentNode.setAttribute("data-current",ident);
	}
    </script>
</body>

</html>