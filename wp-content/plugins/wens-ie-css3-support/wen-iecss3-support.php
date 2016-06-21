<?php 
/*
Plugin Name: WEN's IE CSS3 support
Plugin URI: http://wordpress.org/plugins/wens-ie-css3-support/
Description: Automatically adds CSS3 support for border-radius, box-shadow, linear-gradient and transitions effects to your website/blog in IE old versions (IE7 + higher) 
Version: 1.2
Author: Web Experts Nepal, Bhuwan Roka
Author URI: http://webexpertsnepal.com
License: GPL2
Copyright (C) 2013 Bhuwan Roka
*/
//CSS3 support for IE browsers coded by Web Experts Nepal Team 
//Bhuwan Roka
function wen_ie_8_hack() { ?>
<!-- for IE7+ border-radius -->
<style type="text/css" media="screen">
body, body div, #header div, #footer div, #main div, img, a img, input[type="text"], input[type="submit"], input[type="textarea"], span, h1, h2, h3, ul, li, li a, header, article, footer, section, aside{
	behavior:url(<?php echo plugins_url(); ?>/wens-ie-css3-support/pie/PIE.htc);
	position:relative;
	zoom:1;
}
</style>
<!-- [endif] -->
<?php }
add_filter( 'wp_head' , 'wen_ie_8_hack' );

//CSS3 Transitions support code
function wen_css3_transitions(){ ?>
	<style type="text/css">
	/* From CSS3 Transitions Plugin.
		target several selectors which are most likely to have 
		hover states defined in the theme
	*/
		a, li{
			/* Unfortunately, it doesn't seem posible to do exclude background-position from all, so just don't use any sprites */
			transition: all 0.9s ease-in-out;
			-webkit-transition: all 0.9s ease-in-out;
		}
		img {
			transition: all .4s cubic-bezier(0.64,0.20,0.02,0.35);
			-webkit-transition: all .4s cubic-bezier(0.64,0.20,0.02,0.35);
		}
		input, textarea, button, label, option, select, .button, .hndle {
			transition: all 0.9s ease-in-out);
			-webkit-transition: all 0.9s ease-in-out);
		}
		/* transitions mess all of these up in the WordPress Core */
		#wpwrap #nav-menus-frame #menu-management-liquid li, 
		.wp-picker-holder a {
			transition: none;
			-webkit-transition: none;
		}
	</style>
<?php }
add_action('admin_head', 'wen_css3_transitions');
add_action('wp_head' , 'wen_css3_transitions');
?>