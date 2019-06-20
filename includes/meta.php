<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo $settings['site_name']; ?> | <?php echo $page_name ?></title>
	<meta title="description" content="<?php echo $page_description; ?>" />
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,maximum-scale=1,user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="mobile-web-app-capable" content="yes" />

	<link rel="apple-touch-icon" href="<?php echo site_url($settings, "apple-touch-icon.png"); ?>">

	<link rel="stylesheet" href="<?php echo site_url($settings, "assets/bootstrap/css/bootstrap.min.css"); ?>" />
	<link rel="stylesheet" href="<?php echo site_url($settings, "assets/fontawesome/css/all.min.css"); ?>" />
	<link rel="stylesheet" href="<?php echo site_url($settings, "assets/css/site.css?v=1"); ?>" />

	<meta property="og:locale" content="en_GB" />
	<meta property="og:title" content="<?php echo $settings['site_name'] . " - " . $page_name; ?>" />
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="<?php echo current_page_url(); ?>/" />
	<meta property="article:publisher" content="<?php echo $settings['facebook_url']; ?>" />
	<meta property="fb:app_id" content="" />
	<meta property="article:author" content="<?php echo $settings['facebook_url']; ?>" />
	<meta property="og:image" content="<?php echo site_url($settings, "assets/imgs/og_img.png"); ?>"/>
	<meta property="og:site_name" content="<?php echo $settings['site_name']; ?>"/>
	<meta property="og:description" content="<?php echo $settings['site_description']; ?>"/>

	<meta name="twitter:card" content="summary" />
	<meta name="twitter:image" content="<?php echo site_url($settings, "assets/imgs/twitter_img.jpg"); ?>" />
	<meta name="twitter:site" content="<?php echo $settings['twitter_account']; ?>" />
	<meta name="twitter:title" content="<?php echo $settings['site_name']; ?>" />
	<meta name="twitter:description" content="<?php echo $settings['site_description']; ?>" />
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
