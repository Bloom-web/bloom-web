 
    <!-- social sharing metas ================================================== -->
    <?php $currentServer = $_SERVER['HTTP_HOST'];?>

    <meta property="og:title" content="Bloom" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="<?php perch_content('meta social');?>" />
    <meta property="og:url" content="http://<?php echo $currentServer; ?>/" />
    <meta property="og:image" content="http://<?php echo $currentServer; ?>/images/Bloom-basic-logo-300.png" />
    
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="http://<?php echo $currentServer; ?>/">
    <meta name="twitter:site" content="@Bloom_CG">
    <meta name="twitter:title" content="Bloom">
    <meta name="twitter:description" content="<?php perch_content('meta social');?>">
    <meta name="twitter:image" content="http://<?php echo $currentServer; ?>/images/Bloom-basic-logo-300.png" />
  
    
    <!-- Mobile Specific Metas ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS ================================================== -->

    <!-- web font  -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">
    <!-- Neko framework  -->
    <link type="text/css" rel="stylesheet" href="/custom-icons/css/custom-icons.css">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link type="text/css" rel="stylesheet" href="/neko-framework/external-plugins/external-plugins.css">
    <link type="text/css" rel="stylesheet" href="/neko-framework/css/layout/neko-framework-layout.css">
    <link type="text/css" rel="stylesheet" id="color" href="/neko-framework/css/color/neko-framework-orange.css">
    <link type="text/css" rel="stylesheet" id="bloom" href="/css/bloom.css">

    <!-- enhanced favicons ================================================== -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <script src="/neko-framework/external-plugins/modernizr/modernizr.custom.js"></script>

    <!-- RSS ================================================== -->
    <link rel="alternate" type="application/rss+xml" title="Bloom RSS" href="/bloom.rss" />
    
</head>