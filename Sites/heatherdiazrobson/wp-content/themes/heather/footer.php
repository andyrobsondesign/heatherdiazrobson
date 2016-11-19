<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Heather
 * @since Heather Starter 1.0
 */
?>


<footer class="footer" id="footer" itemscope itemtype="http://schema.org/WPFooter">

  <p class="footer-copy" role="contentinfo">
 <?php bloginfo( 'name' ); ?>
  </p>

</footer><!-- .footer -->

</section><!-- .container -->

<?php if( is_active_sidebar( 'footer-widget-instagram' ) ) : ?>
<footer class="footer-instagram" role="complementary">
  <?php dynamic_sidebar( 'footer-widget-instagram' ); ?>
</footer><!-- .footer-instagram -->
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>