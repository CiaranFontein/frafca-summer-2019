<?php
/**
 * The main template file.
 * 
 * @package FRAFCA_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <!-- Hero Image : type 2 (CMB2 hero-image)  -->
        <header id="taxonomy_prgrm_svc-banner"  class="frafca-hero-image">
            <!-- hero contents -->
                <?php 
                    $term_banner = get_term_meta( get_queried_object_id(), '_frafca_term_banner', true);
                ?>
                <?php if ( !empty($term_banner)): ?>
                    <div class="hero-image-page" style="
                        background : 
                        linear-gradient( to bottom, rgba(47,43,92,0.3) 0%, rgba(47,43,92,0.3) 100% ), 
                            url(<?php echo $term_banner ;?>);
                        background-size: cover;
                        background-position: center; 
                        background-repeat: no-repeat;                   
                    ">
                <?php else: ?>
                    <div class="hero-image-page" style="
                        background: rgba(47,43,92,1);
                    ">
                <?php endif;?>
                        <h1 class="page-title screen-reader-text">
                            <?php single_post_title(); ?>
                        </h1>     
                        
                        <div class="header-meta">
                            <h2>
                                <?php single_term_title(); ?>
                            </h2>
                            <p>
                                <?php echo term_description();?>
                            </p>
                        </div>
                    </div>
            <!-- end hero contents -->
        </header><!-- #taxonomy_prgrm_svc-banner -->

        <section id="prgrm_svc-taxonomies">
            <div class="grid-cards">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="rect-card pink">
                        <h3><?php the_title();?></h3>
                        <p>
                            <?php
                            $limit_heros = count(frafca_cfs('banner'))-1;
                            echo frafca_cfs('banner')[$limit_heros]['banner_description'];
                            ?>
                        </p>
                        <a href="<?php echo esc_url( get_permalink() ) ;?>" target="_self" class="default-btn yellow">
                            Learn More
                        </a>
                    </div>
                <?php // endforeach ?>
                <?php endwhile; ?>
                <?php else : ?>
                <div class="rect-card no-content">
                    <h2>Nothing found!</h2>
                </div>
                <?php endif; ?>
            </div>
        </section><!-- #prgrm_svc-categories -->

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>