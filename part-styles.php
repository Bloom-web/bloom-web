 <!-- social sharing metas ================================================== -->
 <?php $currentServer = $_SERVER['HTTP_HOST']; ?>

 <meta property="og:title" content="Bloom" />
 <meta property="og:type" content="website" />
 <meta property="og:description" content="<?php perch_content('meta social'); ?>" />
 <meta property="og:url" content="http://<?php echo $currentServer; ?>/" />
 <meta property="og:image" content="http://<?php echo $currentServer; ?>/images/logo-bloom-opengraph.png" />

 <meta name="twitter:card" content="summary">
 <meta name="twitter:url" content="http://<?php echo $currentServer; ?>/">
 <meta name="twitter:site" content="@Bloom_CG">
 <meta name="twitter:title" content="Bloom">
 <meta name="twitter:description" content="<?php perch_content('meta social'); ?>">
 <meta name="twitter:image" content="http://<?php echo $currentServer; ?>/images/logo-bloom-opengraph.png" />


 <!-- Mobile Specific Metas ================================================== -->
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 <!-- CSS ================================================== -->

 <!-- web fonts and icons  -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&Roboto+Flex:opsz,wght@8..144,100;8..144,200;8..144,300;8..144,400;8..144,500;8..144,700;8..144,900&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Open Sans:100,200,300,400,500,700,900" rel="stylesheet" type="text/css">

 <!-- Skelet framework  -->
 <link type="text/css" rel="stylesheet" href="/skelet-framework/css/skelet.min.css">
 <link type="text/css" rel="stylesheet" href="/skelet-framework/css/app.css?v=20030725">

 <link type="text/css" rel="stylesheet" href="/splide/splide.min.css">

 <!-- enhanced favicons ================================================== -->
 <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-touch-icon-57x57.png">
 <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-touch-icon-60x60.png">
 <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-touch-icon-72x72.png">
 <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-touch-icon-76x76.png">
 <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-touch-icon-114x114.png">
 <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-touch-icon-120x120.png">
 <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-touch-icon-144x144.png">
 <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-touch-icon-152x152.png">
 <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon-180x180.png">
 <link rel="icon" type="image/png" href="/favicon/favicon-32x32.png" sizes="32x32">
 <link rel="icon" type="image/png" href="/favicon/android-chrome-192x192.png" sizes="192x192">
 <link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96">
 <link rel="icon" type="image/png" href="/favicon/favicon-16x16.png" sizes="16x16">
 <link rel="manifest" href="/favicon/manifest.json">
 <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
 <meta name="msapplication-TileColor" content="#da532c">
 <meta name="msapplication-TileImage" content="/favicon/mstile-144x144.png">
 <meta name="theme-color" content="#ffffff">

 <?php if ($_SERVER['HTTP_HOST'] == "www.bloomconsultinggroup.com" || $_SERVER['HTTP_HOST'] == "bloomconsultinggroup.com") { ?>
   <script type="text/javascript">
     var _mfq = _mfq || [];
     (function() {
       var mf = document.createElement("script");
       mf.type = "text/javascript";
       mf.async = true;
       mf.src = "//cdn.mouseflow.com/projects/91bfa345-769f-4990-8fd5-ee6390f74d71.js";
       document.getElementsByTagName("head")[0].appendChild(mf);
     })();
   </script>
 <?php } else {
    echo "<!-- tracking disabled for " . $_SERVER['HTTP_HOST'] . "-->";
  }; ?>

 </head>