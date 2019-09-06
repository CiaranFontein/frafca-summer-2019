<?php
/**
 * The template for displaying all pages.
 *
 * @package FRAFCA_Theme
 */

get_header(); ?>

	<div id="page-contact-id" class="page-contact-container">
		<main id="page-contact-main" class="page-contact-site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				


				<div class="page-contact-entry-content">
					<header class="page-contact-entry-header">
						<?php the_title( '<h1 class="page-contact-entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<?php the_content(); ?>
					<?php
					wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
					) );
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
