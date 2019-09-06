<?php
/**
 * The main template file.
 *
 * @package FRAFCA_Theme
 * Template Name: page-front
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Hero Image : type 1  -->
        <header id="front-page-banner"  class="frafca-hero-image">
            <!-- hero contents -->
            <?php 
                $heros = CFS() -> get('banner');
                foreach( $heros as $hero ) :        
                    $hero_img = $hero['banner_image'];
                    $hero_title = $hero['banner_title'];
                    $hero_description = $hero['banner_description'];
            ?>
                <div class="hero-image-front-page" style="
                    background : 
                        url(<?php echo $hero_img; ?>);
                    background-size: cover;
                    background-position: center; 
                    background-attachment: fixed;
                    background-repeat: no-repeat;                   
                ">
                    <h1 class="page-title screen-reader-text">
                        <?php single_post_title(); ?>
                    </h1>     
                    
                    <div class="header-title">
                        <h2>
                            <?php echo $hero_title ;?>
                        </h2>
                        <p>
                            <?php echo $hero_description; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach ?>

            <!-- scroll down with the arrow -->
            <div class="scroll-down">
                <p>Scroll Down</p>
                <i class="fas fa-chevron-down"></i>
            </div>

        </header><!-- #front-page-banner -->

        <section id="front-page-about-us">
            <h2>About Us</h2>
            <div class="flex-cards">
                <div class="round-rect-card pink">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/ic_support.svg'; ?>" alt="Providing Support">
                    </div>
                    <h3>Providing Support</h3>
                    <p>
                        We are working to build a continuum of care for people through feedback and guidance to our members.
                    </p>
                </div>

                <div class="round-rect-card pink">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/ic_community.svg'; ?>" alt="Building Community">
                    </div>
                    <h3>Building Community</h3>
                    <p>
                        We provide a place of support, healing, and advocacy for members and support them through their journey.
                    </p>
                </div>

                <div class="round-rect-card pink">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/ic_connection.svg'; ?>" alt="Creating Connections">
                    </div>
                    <h3>Creating Connections</h3>
                    <p>
                        FRAFCA’s environment supports community and cultural, and spiritual connections.
                    </p>
                </div>
            </div>
            <input class='default-btn yellow' type="button" value="Learn More">
        </section><!-- #front-page-about-us -->

        <section id="front-page-what-we-offer">
            <div class="containter col-2" style="
                background :
                    linear-gradient( to bottom, rgba(47,43,92,0.3) 0%, rgba(47,43,92,0.3) 100%), 
                    url(<?php echo get_template_directory_uri() . '/images/img_culture_night.png';?>);
                background-size: cover;
                background-position: center; 
                background-attachment: fixed;
                background-repeat: no-repeat;
            ">
            </div>
            <div class="containter col-2">
                <h3>What We Offer</h3>
                <p>
                    We offer a variety of programs and services to suit the various needs of our members including Early Childhood Development, Youth & Young Adult, Extra Support Needs, Health and Wellness Promotion, Housing and Homelessness prevention, and Indigenous Domestic Violence Prevention (IDVP).
                </p>
                <input class='default-btn yellow' type="button" value="Programs & Services">
            </div>
        </section><!-- #front-page-what-we-offer -->

        <section id="front-page-get-involved">
            <h2>Get Involved</h2>
            <div class="flex-cards">
                <div class="round-rect-card purple">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/ic_vonlunteer.svg'; ?>" alt="Volunteer">
                    </div>
                    <h3>Volunteer</h3>
                    <p>
                        Learn how you can make a difference in the Indigenous community through volunteering
                    </p>
                    <input class='default-btn yellow' type="button" value="Learn More">
                </div>

                <div class="round-rect-card purple">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/ic_donate.svg'; ?>" alt="Donate">
                    </div>
                    <h3>Donate</h3>
                    <p>
                    Learn how your donation to our organization helps to support the indigenous community
                    </p>
                    <input class='default-btn yellow' type="button" value="Learn More">
                </div>

                <div class="round-rect-card purple">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/ic_job_postings.svg'; ?>" alt="Job Postings">
                    </div>
                    <h3>Job Postings</h3>
                    <p>
                        Join our team and support the community through meaningful, life-changing work.
                    </p>
                    <input class='default-btn yellow' type="button" value="Learn More">
                </div>
        </section><!-- #front-page-get-involved -->

        <section id="front-page-partners">
            <h2>Partners</h2>
            <?php 
                $partners = CFS()->get( 'partners' );                
                foreach( $partners as $partner ) :
                    $partner_name = $partner['partner_name'];
                    $img_partner = $partner['logo'];
            ?>
                <div class="partner-content">
                    <div class="partner-logo">
                        <img src="<?php echo $img_partner;?>" alt="<?php echo $partner_name; ?>">
                    </div>
                    <p>
                        <?php echo $partner_name; ?>
                    </p>
                </div>

            <?php endforeach; ?>
        </section><!-- #front-page-partners -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>