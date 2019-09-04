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
<<<<<<< HEAD
					<button class="menu-toggle" aria-controls="footer-menu" aria-expanded="false"><?php echo esc_html( 'Footer Menu - Connect' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_connect', 'menu_id' => 'footer-connect' ) ); ?>
			</nav><!--site-navigation -->

			<nav id="footer-site-navigation" class="footer-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="footer-menu" aria-expanded="false"><?php echo esc_html( 'Footer Menu - Get Invloved' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_get_involved', 'menu_id' => 'footer-get-involved' ) ); ?>
			</nav><!--site-navigation -->

			<nav id="footer-site-navigation" class="footer-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="footer-menu" aria-expanded="false"><?php echo esc_html( 'Footer Menu - What We Do' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_what_we_do', 'menu_id' => 'footer-what-we-do' ) ); ?>
			</nav><!--site-navigation -->
=======
					<button class="menu-toggle" aria-controls="footer-menu" aria-expanded="false"><?php echo esc_html( 'Footer Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
			</nav>#site-navigation
>>>>>>> 5db6f3250cce16fae484eaad9ff55d7fdff3aa9c




				<div class="site-info">
					<p> © 2019 FRAFCA copyright - All rights reserved </p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php get_footer(); ?>

	</body>
</html>
