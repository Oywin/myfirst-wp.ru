<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	<link media="all" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
	<link media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" rel="stylesheet">

	</head>
	<body <?php body_class(); ?> id="<?php the_field('body_color', $page->ID); ?>">

	<div id="masthead">

		<div id="site-header" role="banner">
			<div class="container">
				<div class="row">

					<div id="branding">
						<a class="logo" href="/"><?php bloginfo('name'); ?></a>
					</div> <!-- #branding -->

					<nav id="main-menu" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php html5blank_nav(); ?>
					</nav> <!-- #main-menu -->

				</div> <!-- .row -->
			</div> <!-- .container -->
		</div> <!-- #site-header -->

		<div id="page-title">
			<div class="container">
				<div class="row">

					<h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
					<p class="description" itemprop="description"><?php the_field('sub_title', $page->ID); ?></p>

				</div> <!-- .row -->
			</div> <!-- .container -->
		</div> <!-- #page-title -->

	</div> <!-- #masthead -->

