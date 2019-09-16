<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package FRAFCA_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title">Oops!</h1>
					<h2>The page you’re looking for cannot be found.</h2>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>You can either return to the previous page or visit our homepage.</p>
					<a class="default-btn yellow" href="<?php echo get_site_url() ;?>">Go to homepage</a>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
