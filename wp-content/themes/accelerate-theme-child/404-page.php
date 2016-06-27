<?php
/**
 * The template is for 404
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>

<div id="primary" class="site-content">
  <div id="content" role="main">
    <div class="text-404">
      <h2>So sorry! This page doesn't exist.  We feel like a real jerk for misleading you</h2>
      <p class="get-back"><a href="<?php echo home_url(); ?>/blog">Get back to where you once belonged.</p>
    </div>
  <figure id="lost">
  </figure>




</div>
</div>

<?php get_footer(); ?>