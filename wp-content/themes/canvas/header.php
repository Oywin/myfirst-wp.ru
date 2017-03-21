<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" type='text/css' media='all' />
	<link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/css/skins/core.css" type='text/css' media='all' />
	<script type='text/javascript' src='https://code.jquery.com/jquery-1.9.1.min.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/common.js'></script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>"> -->
