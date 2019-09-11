<?php
/**
 * The template for displaying all single posts.
 *
 * @package FRAFCA_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <!-- Hero Image : type 3 (title from the post)  -->
        <header id="prgrm_svc_single-banner"  class="frafca-hero-image">
            <!-- hero contents -->
                <?php 
                    $heros = last_frafca_cfs('banner');
                    $hero_img = $heros['banner_image'];
                    $hero_description = $heros['banner_description'];
                ?>
                
                <?php if (  !empty($hero_img) ): ?>
                    <div class="hero-image-page" style="
                        background : 
                        linear-gradient( to bottom, rgba(47,43,92,0.3) 0%, rgba(47,43,92,0.3) 100% ), 
                            url(<?php echo $hero_img; ?>);
                        background-size: cover;
                        background-position: center; 
                        background-attachment: fixed;
                        background-repeat: no-repeat;                   
                    ">
                <?php else: ?>
                    <div class="hero-image-page" style="
                        background: rgba(47,43,92,1);
                    ">
                <?php endif; ?>
                        <h1 class="page-title screen-reader-text">
                            <?php single_post_title(); ?>
                        </h1>     
                        
                        <div class="header-meta">
                            <h2>
                                <?php the_title();?>
                            </h2>
                            <p>
                                <?php echo $hero_description; ?>
                            </p>
                        </div>
                    </div><!-- .hero-image-page -->

        </header><!-- #single_prgrm_svc-banner -->

        <section id="prgrm_svc-single">
            <div class="flex-container white">

                <div class="flex-wrap single-description">
                    <?php if ( !empty( frafca_cfs('program_services_description') ) ): ?>

                        <?php 
                            $descriptions = last_frafca_cfs('program_services_description');
                        ?>
                            <div class="content-type-text">
                                <h3>About</h3>
                                <?php if ( !empty($descriptions['about']) ):
                                    $about = $descriptions['about'];
                                ?>
                                    <p><?php echo esc_html($about); ?></p>
                                <?php else: ?>
                                    <p class="error-no-data">No information yet</p>
                                <?php endif; ?>
                            </div>
                            
                            <div class="content-type-list">
                                <h3>Objectives</h3>
                                <?php if ( !empty( $descriptions['obejective'] )): 
                                    $obejectives = $descriptions['obejective'];
                                ?>
                                    <ul>
                                        <?php foreach($obejectives as $obejective): ?>
                                            <li><?php echo esc_html($obejective['list']); ?></li>
                                        <?php endforeach; ?><!-- end foreach $obejectives -->
                                    </ul>
                                <?php else: ?>
                                    <p class="error-no-data">No information yet</p>
                                <?php endif; ?>
                            </div>

                            <div class="content-type-list">
                                <h3>Program Services</h3>

                                <?php if ( !empty( $descriptions['program'] )): 
                                    $programs = $descriptions['program'];
                                ?>
                                    <ul>
                                        <?php foreach($programs as $program): ?>
                                            <li><?php echo esc_html($program['list']); ?></li>
                                        <?php endforeach; ?><!-- end foreach $programs -->
                                    </ul>
                                <?php else: ?>
                                    <p class="error-no-data">No information yet</p>
                                <?php endif; ?>
                            </div>

                    <?php else: ?>
                        <div class="content-type-text">
                            <p class="error-no-data">No information yet</p>
                        </div>
                    <?php endif; ?>
                    <!-- endif empty(program_services_description) -->
                </div>

                <div class="flex-wrap single-details">
                    <?php 
                    if ( !empty(frafca_cfs('program_services_details')) ):
                    ?>
                        <?php 
                            $details = last_frafca_cfs('program_services_details');
                        ?>
                            <?php
                                if ( !empty($details['program']) ) :
                                    $last_key = array_key_last($details['program']);
                                    $de_programs = $details['program'][$last_key];
                            ?>
                                <div class="content-type-widgets">
                                    <?php 
                                            $keys = array_keys($de_programs);
                                            $count_arr = count($de_programs);
                                            $i = 0;
                                    ?>
                                        <h3 class="purple">Program Information</h3>
                                        <?php 
                                            while( $i < $count_arr ):
                                                $key_info = $keys[$i];
                                                $val_info = $de_programs[$key_info];
                                            ?>
                                                <p><strong><?php echo ucfirst($key_info); ?></strong> : <?php echo $val_info ;?></p>
                                            <?php $i++; 
                                            endwhile;?>
                                </div>
                            <?php else: ?>
                                <div class="content-type-widgets">
                                    <h3 class="purple">Program Information</h3>
                                    <p class="error-no-data">No information yet</p>
                                </div>
                            <?php endif; ?>

                            <?php 
                                if ( !empty( $details['contact_information'] ) ) :
                                    $last_key = array_key_last($details['contact_information']);
                                    $de_contacts = $details['contact_information'][$last_key];
                            ?>
                                <div class="content-type-widgets">
                                    <?php 
                                        
                                            $keys = array_keys($de_contacts);
                                            $count_arr = count($de_contacts);
                                            $i = 0;
                                    ?>
                                        <h3 class="purple">Contact Information</h3>
                                            <?php 
                                            while( $i < $count_arr ):
                                                $key_info = $keys[$i];
                                                $val_info = $de_contacts[$key_info];
                                            ?>
                                                <p><strong><?php echo ucfirst($key_info); ?></strong> : <?php echo $val_info ;?></p>
                                            <?php $i++; 
                                            endwhile;?>
                                </div>
                            <?php else: ?>
                                <div class="content-type-widgets">
                                    <h3 class="purple">Contact Information</h3>
                                    <p class="error-no-data">No information yet</p>
                                </div>
                            <?php endif; ?>

                        <?php else: ?>
                        <div class="content-type-widgets">
                            <h3 class="purple">Program Information</h3>
                            <p class="error-no-data">No information yet</p>
                        </div>
                        <div class="content-type-widgets">
                            <h3 class="purple">Contact Information</h3>
                            <p class="error-no-data">No information yet</p>
                        </div>

                    <?php endif; ?>
                </div>

                
            </div>
        </section>

        <section class="get-in-touch">
            <div class="form-container purple">
                <?php  
                    $forms = frafca_cfs('get_in_touch');
                    echo $forms;
                ?>
            </div>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>