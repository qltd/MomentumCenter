<!doctype html>
<head>

	<title><?php
		global $page, $paged;
		wp_title( '|', true, 'right' );
		// Add the blog name.
		bloginfo( 'name' );
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) { echo " | $site_description"; }
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 ) { echo ' | Page '.max( $paged, $page ); }
		?>
	</title>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="<?php echo $site_description; ?>">

	<link rel="shortcut icon" href="<?php bloginfo( 'url' ); ?>/favicon.ico">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.min.css?v=1.0" media="all">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Karla:300,400,700" media="all">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css?v=1.2" media="all">


	<script src="<?php bloginfo('template_directory'); ?>/js/libs/modernizr-2.6.2.min.js"></script>

	<?php if (is_singular() && get_option( 'thread_comments')) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

</head>
<?php $GLOBALS['animate'] = (isset($_SERVER['HTTP_REFERER']) && stripos($_SERVER['HTTP_REFERER'], $_SERVER['HTTP_HOST']) >= 1 || !is_front_page() || wpmd_is_device()) ? 'no-animate' : 'animate'; ?>
<?php //$GLOBALS['animate'] = (!is_front_page()) ? 'no-animate' : 'animate'; //remove when live ?>

<?php //$GLOBALS['animate'] = 'no-animate'; //dev mode ?>
<body <?php body_class($GLOBALS['animate']); ?>>
	<img src="<?php bloginfo('template_directory'); ?>/img/bg.jpg" id="full_bg" />
	<div id="header-bg"><div id="header-bg-inner"></div></div>
	<div id="header-wrap" class="cf">
		<header>

			<?php if (is_front_page() && $GLOBALS['animate'] == 'animate'): ?>
				<a id="logo" class="left" href="<?php bloginfo('url'); ?>"><?php include( $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/ummc/img/logo.svg'); ?><img class="text" src="<?php bloginfo('template_directory'); ?>/img/logo.png" /></a>
			<?php else: ?>
				<a href="<?php bloginfo('url'); ?>" class="logo-img"><img src="<?php bloginfo('template_directory'); ?>/img/mobile-logo.png" alt="<?php bloginfo('title'); ?>" width="296" /></a>
			<?php endif; ?>


				<div id="top-bar">
					<nav id="top-nav" class="cf">
						<ul>
							<?php wp_nav_menu( array('theme_location' => 'top', 'container' => '', 'items_wrap' => '%3$s' )); ?>
						</ul>
					</nav>

					<a href="#" id="menu"><i class="icon-menu"></i> MENU</a>

					<nav id="main-nav" class="cf">
					<a href="#" id="close"><i class="icon-cancel"></i></a>
						<ul>
							<li id="menu-home"><a href="<?php bloginfo('url'); ?>">Home</a></li>
							<?php wp_nav_menu( array('theme_location' => 'main', 'container' => '', 'items_wrap' => '%3$s' )); ?>
						</ul>
					</nav>
				</div>

		</header>

	</div> <!-- #header-wrap -->

	<div id="container" class="cf">

