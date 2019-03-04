<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="distribution" content="global">
	<meta name="robots" content="follow, all">
	<meta name="language" content="en">

	<?php include 'partials/head_seo.php'; ?>

<!-- Favicons -->
	<link href="images/logos/favicons/apple-touch-icon.png" rel="apple-touch-icon" />
	<link href="images/logos/favicons/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
	<link href="images/logos/favicons/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
	<link href="images/logos/favicons/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />
	<link href="images/logos/favicons/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180" />
	<link href="images/logos/favicons/icon-hires.png" rel="icon" sizes="192x192" />
	<link href="images/logos/favicons/icon-normal.png" rel="icon" sizes="128x128" />
	<link href="images/logos/favicons/favicon-32.png" rel="shortcut icon" type="image/x-icon" sizes="32x32" />
	<link href="images/logos/favicons/favicon-16.png" rel="shortcut icon" type="image/x-icon" sizes="16x16" />
	<!--[if IE]>
	<link rel="shortcut icon" type="image/x-icon" href="images/logos/favicon.ico" />
	<![endif]-->

<!-- Mobile Theme -->
	<meta name="theme-color" content="#c0392b" />
	<meta name="msapplication-navbutton-color" content="#c0392b" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#c0392b" />

<!-- CSS -->
	<!--<link rel="stylesheet" href="theme/css/bootstrap.min.css" />-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="theme/assets/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="theme/assets/ionicons/css/ionicons.min.css" />
    <link rel="stylesheet" href="theme/assets/elegant-icons/css/elegant-icons.min.css" />
    <!--[if lte IE 7]>
    	<script src="theme/assets/elegant-icons/js/elegant-icons-lte-ie7.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="theme/css/vendor/slick.min.css" />
	<link rel="stylesheet" href="theme/css/vendor/slick-theme.min.css" />
	<link rel="stylesheet" href="theme/css/vendor/blueimp-gallery.min.css" />
	<!-- Theme CSS -->
	<link rel="stylesheet" href="theme/css/main.min.css" />
	<link rel="stylesheet" href="theme/css/style.min.css" />
	<link rel="stylesheet" href="theme/css/animation.min.css" />
	<link rel="stylesheet" href="theme/css/responsive.min.css" />
	<link rel="stylesheet" href="theme/css/typography.min.css" />
	<!-- Theme Color -->
	<link rel="stylesheet" href="theme/css/colors/light.min.css" />
	<!--<link rel="stylesheet" href="theme/css/colors/pomegranate.min.css" />-->
	<!-- Custom CSS -->
	<link rel="dns-prefetch" href="//fonts.googleapis.com" />
	<link rel="dns-prefetch" href="//ssl.google-analytics.com" />
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Cinzel+Decorative|Cabin:400,400i,600" />
<?php if (isset($bodyClass) && ($bodyClass == "body-blog blog-category")): ?>
	<link rel="stylesheet" src="theme/css/blog.min.css" />
<?php else: ?>
	<!-- nothing -->
<?php endif ?>
	<!--<link rel="stylesheet" type="text/css" href="css/master.css" />-->
	<link rel="stylesheet" type="text/css" href="css/fa17.css" />

<!-- JavaScript -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!--[if gt IE 8]>
		<link rel="stylesheet" href="theme/css/ie9.min.css" />
	<![endif]-->
<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body class="btn-circle sld-transition-2 <?php echo(isset($bodyClass)? $bodyClass :''); ?>" id="top" data-spy="scroll" data-target=".navbar">

	<!-- Preloader -->
	<div class="preloader">
		<div class="status"></div>
	</div>
	<!-- End Preloader -->

	<!-- Modal -->
	<div class="modal fade modal-full" id="modal" tabindex="-1" role="dialog" aria-labelledby="title-modal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content"></div>
		</div>
	</div>
	<!-- End Modal -->

	<!-- LAYOUT -->
	<div class="layout">
