<?php
/**
 * Accelerate Marketing Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * 
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Child Theme
 *
 */
function create_custom_post_types() {
  register_post_type( 'case_studies', 
    array (
      'labels' => array(
        'name' => __( 'Case Studies' ),
        'singluar_name' => __( 'Case Study' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'case_studies'),
      )
    );
}
add_action( 'init', 'create_custom_post_types' );
register_sidebar( array(
    'name' =>__( 'Homepage sidebar', 'homepage-sidebar'),
    'id' => 'sidebar-2',
    'description' => __( 'Appears on the static front page template', 'homepage-sidebar' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );
register_nav_menu('category-menu', 'Category Menu');
/**
 * Remove the text - 'You may use these <abbr title="HyperText Markup
 * Language">HTML</abbr> tags ...'
 * from below the comment entry box.
 */
add_filter( 'comment_form_defaults', 'afn_custom_comment_form' );
function afn_custom_comment_form($fields) {
  $fields['comment_notes_before'] = ''; // Removes comment before notes
  $fields['comment_notes_after'] = ''; // Removes comment after notes
    return $fields;
}
//changes to blog excerpt
function custom_excerpt_more($more) {
  return'...';
}
add_filter('excerpt_more', 'custom_excerpt_more');
// defines custom markup for post comments
function accelerate_comments($comment, $args, $depth) {
  $comment  = '<li class="comment">';
  $comment .= '<header class="comment-head">';
  $comment .= '<span class="comment-author">' . get_comment_author() . '</span>';
  $comment .= '<span class="comment-meta">' . get_comment_date('m/d/Y') . '&emsp;|&emsp;' . get_comment_reply_link(array('depth' => $depth, 'max_depth' => 5)) . '</span>';
  $comment .= '</header>';
  $comment .= '<div class="comment-body">';
  $comment .= '<p>' . get_comment_text() . '</p>';
  $comment .= '</div>';
  $comment .= '</li>';
 
  echo $comment;
}
function remove_comment_fields($fields) {
    unset($fields['email']);
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields', 'remove_comment_fields');
function accelerate_theme_child_widget_init() {
	
	register_sidebar( array(
	    'name' =>__( 'Homepage sidebar', 'accelerate-theme-child'),
	    'id' => 'sidebar-2',
	    'description' => __( 'Appears on the static front page template', 'accelerate-theme-child' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );
	
}
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' => 'Social Media Profiles',
		'menu_title' => 'Social Media',
		'menu_slug' => 'social-media-profiles',
		'capability' => 'edit_posts',
		'redirect' => false
	));
}


add_action( 'widgets_init', 'accelerate_theme_child_widget_init' );