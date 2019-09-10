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
                $limit_heros = count(frafca_cfs('banner'))-1;
                $heros = array( 0 => frafca_cfs('banner')[$limit_heros]);
                foreach( $heros as $hero ) :        
                    $hero_img = $hero['banner_image'];
                    $hero_description = $hero['banner_description'];
            ?>
                <div class="hero-image-page" style="
                    background : 
                    linear-gradient( to bottom, rgba(47,43,92,0.3) 0%, rgba(47,43,92,0.3) 100% ), 
                        url(<?php echo $hero_img; ?>);
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
                            <?php the_title();?>
                        </h2>
                        <p>
                            <?php echo $hero_description; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach ?><!-- end hero contents -->
        </header><!-- #single_prgrm_svc-banner -->

        <section id="prgrm_svc-single">
            <div class="flex-container white">

                <div class="flex-wrap single-description">
                    <?php 
                        $limit_descriptions = count(frafca_cfs('program_services_description'))-1;
                        $descriptions = array( 0 => frafca_cfs('program_services_description')[$limit_descriptions] );    
                        foreach( $descriptions as $description):
                            $about = $description['about'];
                            $obejectives = $description['obejective'];
                            $programs = $description['program'];
                    ?>
                        <div class="content-type-text">
                            <h3>About</h3>
                            <p><?php echo esc_html($about); ?></p>
                        </div>
                        
                        <div class="content-type-list">
                            <h3>Objectives</h3>
                            <ul>
                                <?php foreach($obejectives as $obejective): ?>
                                    <li><?php echo $obejective['list']; ?></li>
                                <?php endforeach; ?><!-- end foreach $obejectives -->
                            </ul>
                        </div>

                        <div class="content-type-list">
                            <h3>Program Services</h3>
                            <ul>
                                <?php foreach($programs as $program): ?>
                                    <li><?php echo $program['list']; ?></li>
                                <?php endforeach; ?><!-- end foreach $programs -->
                            </ul>
                        </div>
                    <?php endforeach; ?><!-- end foreach $descriptions -->
                </div>

                <div class="flex-wrap single-details">
                    <?php 
                        $limit_details = count(frafca_cfs('program_services_details')) -1;
                        $details = array ( 0 => frafca_cfs('program_services_details')[$limit_details] );
                        foreach( $details as $detail ):
                            $limit_de_programs = count($detail['program']) -1;
                            $de_programs = array( 0 => $detail['program'][$limit_de_programs]);

                            $limit_de_contacts = count($detail['contact_information']) -1;
                            $de_contacts = array( 0 => $detail['contact_information'][$limit_de_contacts]);
                    ?>
                        <div class="content-type-widgets">
                            <?php 
                                foreach($de_programs as $de_program):
                                    $dates = $de_program['dates'];
                                    $time = $de_program['time'];
                                    $location = $de_program['location'];
                            ?>
                                <h3 class="purple">Program Information</h3>
                                <p>Dates: <?php echo $dates; ?></p>
                                <p>Time: <?php echo $time; ?></p>
                                <p>Location: <?php echo $location; ?></p>
                            <?php endforeach; ?><!-- end foreach $programs -->
                        </div>

                        <div class="content-type-widgets">
                            <?php 
                                foreach($de_contacts as $de_contact):
                                    $director = $de_contact['director'];
                                    $email = $de_contact['email'];
                                    $phone = $de_contact['phone'];
                                    $fax = $de_contact['fax'];
                            ?>
                                <h3 class="purple">Contact Information</h3>
                                    
                                <p>Director: <?php echo $director; ?></p>
                                <p>Email: <?php echo $email; ?></p>
                                <p>P: <?php echo $phone; ?></p>
                                <p>F: <?php echo $fax; ?></p>
                            <?php endforeach; ?><!-- end foreach $programs -->
                        </div>
                    <?php endforeach; ?><!-- end foreach $details -->
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