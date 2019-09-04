<?php
/**
 * The main template file.
 *
 * @package FRAFCA_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <header>
            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header>

        <?php // Front page content goes here ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>