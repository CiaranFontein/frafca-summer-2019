<?php
/**
 * The template for displaying all single posts.
 *
 * @package FRAFCA_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <!-- Hero Image : type 1  -->
        <header id="prgrm_svc_single-banner"  class="frafca-hero-image">
            <?php get_template_part( 'template-parts/hero_banner' ); ?>
        </header><!-- #single_prgrm_svc-banner -->

        <section id="prgrm_svc-single">
            <div class="flex-container">
                
            </div>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
