<?php
/**
 * The template for displaying the footer.
 *
 * @package FRAFCA_Theme
 */

?>

	</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-container">
			<nav id="footer-site-navigation" class="footer-navigation" role="navigation">
					<div class="footer-menu-header" aria-controls="footer-menu" aria-expanded="false"><?php echo esc_html( 'Connect' ); ?></div>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_connect', 'menu_id' => 'footer-connect' ) ); ?>
					<i class="fas fa-angle-down"></i>
			</nav><!--site-navigation -->

			<nav id="footer-site-navigation" class="footer-navigation" role="navigation">
					<div class="footer-menu-header" aria-controls="footer-menu" aria-expanded="false"><?php echo esc_html( 'Get Invloved' ); ?></div>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_get_involved', 'menu_id' => 'footer-get-involved' ) ); ?>
					<i class="fas fa-angle-down"></i>
			</nav><!--site-navigation -->

			<nav id="footer-site-navigation" class="footer-navigation" role="navigation">
					<div class="footer-menu-header" aria-controls="footer-menu" aria-expanded="false"><?php echo esc_html( 'What We Do' ); ?></div>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_what_we_do', 'menu_id' => 'footer-what-we-do' ) ); ?>
					<i class="fas fa-angle-down"></i>
			</nav><!--site-navigation -->

			<div class="logo-social-container">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri() . '/images/logos/2018_frafca_logo_final.png'; ?>" class="footer-logo-img" alt="FRAFCA logo " />
					</a>
					<div class="social-media">  <i class="fab fa-facebook"></i> </div>
			</div>

			<div class="copyright">
				<p> © 2019 FRAFCA copyright - All rights reserved </p>
			</div><!-- .site-footer -->
		</div>
		</footer><!-- #colophon -->

	</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>