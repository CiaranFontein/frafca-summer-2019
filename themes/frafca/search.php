<?php

/**
 * The template for displaying search results pages.
 *
 * @package FRAFCA_Theme
 */

get_header(); ?>

<section id="primary" class="content-area search-results-content">
	<main id="main" class="site-main" role="main">

		<!-- <?php get_search_form(); ?> -->
		<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>

		<?php if (have_posts()) : ?>

			<header class="page-header search-page-header">
				<h1 class="page-title"><?php printf(esc_html('Search Results for: %s'), '<span>' . get_search_query() . '</span>'); ?></h1>
				<div class="search-count">
					<?php $allsearch = new WP_Query("s=$s&showposts=0");
						echo $allsearch->found_posts . ' results found.'; ?>
				</div>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while (have_posts()) : the_post(); ?>


				<?php get_template_part('template-parts/content', 'search'); ?>

			<?php endwhile; ?>

			<?php frafca_theme_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

	</main><!-- #main -->
</section><!-- #primary -->


<?php get_footer(); ?>