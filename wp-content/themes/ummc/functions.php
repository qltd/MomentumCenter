<?php
/**
 * Functions.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package generic
 */

//Gallery Thumbs
add_image_size( 'gallery-thumb', 240, 160, true );
add_image_size( 'gallery-thumb-sm', 150, 100, true );
add_image_size( 'featured-thumb', 260, 0, true);

/*
* Remove Admin Bar on Front End
*/
add_filter('show_admin_bar', '__return_false');


/*
* Remove Featured Image
*/
function remove_post_thumb_meta_box(){
  global $pagenow, $_wp_theme_features;
  if ( in_array( $pagenow,array('post.php','post-new.php')) && !current_user_can('publish_posts')) {
    unset( $_wp_theme_features['post-thumbnails']);
  }
}
add_action( 'admin_menu' , 'remove_post_thumb_meta_box' );

/* 
* Remove Custom Fields Meta
*/
function remove_post_custom_fields() {
  remove_meta_box( 'postimagediv' , 'post' , 'normal' );
}
add_action( 'admin_menu' , 'remove_post_custom_fields' );

/*
* Setup Sidebar Widget Areas (For Blog Use Only)
*/
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Blog',
		'id' => 'blog',
		'description' => 'Widget sidebar for the blog/news section',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>'
	));
}

/*
* Add Menus to Theme
*/
function template_setup() {
	register_nav_menus( array(
		'main' => 'Main Menu',
		'top' => 'Top Menu',
    'footer' => 'Footer Menu',
	) );
}
add_action( 'after_setup_theme', 'template_setup' );

/*
* Add stylesheet to the Visual Editor
*/
add_editor_style();

//Making jQuery Google API
function modify_jquery() {
  if (!is_admin()) {
    // comment out the next two lines to load the local copy of jQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', false, '1.9.1');
    wp_enqueue_script('jquery');
  }
}
add_action('init', 'modify_jquery');

/*
* If search is submitted with no terms
*/
add_filter( 'request', 'my_request_filter' );
function my_request_filter( $query_vars ) {
    if( isset( $_GET['s'] ) && empty( $_GET['s'] ) ) {
        $query_vars['s'] = " ";
    }
    return $query_vars;
}

//Relevanssi Re-index shortcode content
if (!wp_next_scheduled('relevanssi_build_index')) {
    wp_schedule_event( time(), 'daily', 'relevanssi_build_index' );
}

/* Clean up the title of private links */
function the_title_trim($title)
{
  $pattern[0] = '/Protected:/';
  $pattern[1] = '/Private:/';
  $replacement[0] = ''; // Enter some text to put in place of Protected:
  $replacement[1] = ''; // Enter some text to put in place of Private:

  return preg_replace($pattern, $replacement, $title);
}
add_filter('the_title', 'the_title_trim');


// Filter The Content to change LI's to have the caret font awesome icon
function content_caret($content){
  $new_content = str_replace('<li>', '<li><i class="icon-disc">&bull;</i>', $content);
  return $new_content;
}
//add_filter('the_content', 'content_caret');

// Changing excerpt more
function new_excerpt_more($more) {
   global $post;
   return '…<br /><br /><a href="'. get_permalink($post->ID) . '">' . 'Read More >' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');