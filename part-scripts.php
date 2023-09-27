    <!-- End Document ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <?php if ($_SERVER['HTTP_HOST'] == "www.bloomconsultinggroup.com" || $_SERVER['HTTP_HOST'] == "bloomconsultinggroup.com") { ?>
    <!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-8TNLHF0HHQ"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-8TNLHF0HHQ');
	</script>
	<?php } else {
    echo "<!-- tracking disabled for " . $_SERVER['HTTP_HOST'] . "-->";
  }; ?>