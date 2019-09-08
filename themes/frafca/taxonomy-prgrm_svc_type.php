<?php

/**
 * The main template file.
 * 
 * @package FRAFCA_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Hero Image : type 1  -->
        <header id="prgrm_svc-banner"  class="frafca-hero-image">
            <!-- hero contents -->
                <div class="hero-image-page" style="
                    background : 
                    linear-gradient( to bottom, rgba(47,43,92,0.3) 0%, rgba(47,43,92,0.3) 100% ), 
                        url(<?php echo get_template_directory_uri() . '/images/hero-images/hero_image-default.png' ;?>);
                    background-size: cover;
                    background-position: center; 
                    background-attachment: fixed;
                    background-repeat: no-repeat;                   
                ">
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
        </header><!-- #front-page-banner -->

        <section id="prgrm_svc-categories">
            <div class="grid-cards">
                <?php  
                    // $prgrm_svc_categories = frafca_cfs('categories');
                    // foreach( $prgrm_svc_categories as $category ):
                    //     $cat = get_term($category);
                    //         $name = $cat->name;
                    //         $description = $cat->description;
                ?>
                    <!-- <div class="rect-card purple">
                        <h3><?php // echo $name ?></h3>
                        <p><?php // echo $description ?></p>
                        <a href="<?php // echo get_term_link($cat) ?>" target="_self">
                            <input class='default-btn yellow' type="button" value="View Category">
                        </a>
                    </div> -->
                <?php // endforeach ?>
            </div>
        </section><!-- #prgrm_svc-categories -->

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>