<?php

/**
 * The template for displaying the footer.
 *
 * @package FRAFCA_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

	<nav id="footer-site-navigation" class="footer-navigation" role="navigation">
		<button class="menu-toggle" aria-controls="footer-menu" aria-expanded="false"><?php echo esc_html('Footer Menu'); ?></button>
		<?php wp_nav_menu(array('theme_location' => 'footer', 'menu_id' => 'footer-menu')); ?>
	</nav>#site-navigation




	<div class="site-info">
		<p> © 2019 FRAFCA copyright - All rights reserved </p>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php get_footer(); ?>

</body>

</html>