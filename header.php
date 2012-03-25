<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
		<link href="menuh.css" rel="stylesheet" type="text/css" />
		<!--[if lt IE 7]>
			<style type="text/css" media="screen">
				#menuh{float:none;}
				body{behavior:url(csshover.htc); font-size:100%;}
				#menuh ul li{float:left; width: 100%;}
				#menuh a{height:1%;font:bold 0.7em/1.4em arial, sans-serif;}
			</style>
		<![endif]-->
		<style type="text/css">
		img, div, a, input, li, ul { behavior: url(iepngfix.htc) }
		</style> 
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss_url'); ?>" title="RoboJackets RSS Feed">
	<?php wp_head(); ?>
	</head>
	<body>

				<a href="."><div id="banner"><h1>ROBOJACKETS</h1></div></a>