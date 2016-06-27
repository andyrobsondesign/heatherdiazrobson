<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


	<div class = "error-page">
	<h2> Whoops, Took a Wrong Turn </h2>
			<div class="page-content">
<a href="http://localhost:8888/accelerate/">
							<img src=http://localhost:8888/accelerate/wp-content/uploads/2016/06/404image.jpg />
</a>
<p> Sorry, this page no longer exist, never existed or has been moved.  We feel like complete jerks for totally misleading you. </p>

				
			</div><!-- .page-content -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_sidebar("content");
get_sidebar();
get_footer();
