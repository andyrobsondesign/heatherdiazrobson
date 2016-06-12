<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<aside class="sidebar">
	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
		<position:right>
		<div id="secondary" class="widget-area" role="link">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>	
		</div>
	<?php endif; ?>

</aside>