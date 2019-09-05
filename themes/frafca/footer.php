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
					<div class="footer-menu-header" aria-controls="footer-menu" aria-expanded="false"><?php echo esc_html( 'Connect' ); ?></div>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_connect', 'menu_id' => 'footer-connect' ) ); ?>
			</nav><!--site-navigation -->

			<nav id="footer-site-navigation" class="footer-navigation" role="navigation">
					<div class="footer-menu-header" aria-controls="footer-menu" aria-expanded="false"><?php echo esc_html( 'Get Invloved' ); ?></div>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_get_involved', 'menu_id' => 'footer-get-involved' ) ); ?>
			</nav><!--site-navigation -->

			<nav id="footer-site-navigation" class="footer-navigation" role="navigation">
					<div class="footer-menu-header" aria-controls="footer-menu" aria-expanded="false"><?php echo esc_html( 'What We Do' ); ?></div>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_what_we_do', 'menu_id' => 'footer-what-we-do' ) ); ?>
			</nav><!--site-navigation -->

				<div class="copyright">
					<p> © 2019 FRAFCA copyright - All rights reserved </p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>