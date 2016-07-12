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
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" media="all" />
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
                                                                            <li class="twitter-icon"><a href="https://twitter.com/um_momentum" target="_blank">
<svg id="svg2" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" height="148.12" width="182.26" version="1.1" xmlns:cc="http://creativecommons.org/ns#" viewBox="0 0 182.66667 150.66667" xmlns:dc="http://purl.org/dc/elements/1.1/"><metadata id="metadata8"><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/></cc:Work></rdf:RDF></metadata><defs id="defs6"><clipPath id="clipPath20" clipPathUnits="userSpaceOnUse"><path id="path18" d="m0 10.012h1366.9v1110.9h-1366.9z"/></clipPath></defs><g id="g10" transform="matrix(1.3333 0 0 -1.3333 0 150.67)"><g id="g12" transform="scale(.1)"><g id="g14"><g id="g16" clip-path="url(#clipPath20)"><path id="path22" d="m1366.9 989.39c-50.27-22.309-104.33-37.387-161.05-44.18 57.89 34.723 102.34 89.679 123.28 155.15-54.18-32.15-114.18-55.47-178.09-68.04-51.13 54.49-124.02 88.55-204.68 88.55-154.89 0-280.43-125.55-280.43-280.43 0-21.988 2.457-43.398 7.258-63.91-233.08 11.68-439.72 123.36-578.04 293.01-24.141-41.4-37.969-89.567-37.969-140.97 0-97.308 49.489-183.13 124.76-233.44-45.969 1.437-89.218 14.058-127.03 35.078-0.043-1.18-0.043-2.348-0.043-3.52 0-135.9 96.68-249.22 224.96-275-23.512-6.41-48.281-9.8-73.86-9.8-18.089 0-35.628 1.711-52.781 5 35.711-111.41 139.26-192.5 262-194.77-96.058-75.23-216.96-120.04-348.36-120.04-22.621 0-44.961 1.332-66.918 3.91 124.16-79.568 271.55-125.98 429.94-125.98 515.82 0 797.86 427.31 797.86 797.93 0 12.153-0.28 24.223-0.79 36.25 54.77 39.571 102.31 88.95 139.93 145.2" fill="#55ACEE"/></g></g></g></g></svg>
</a></li>
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

