<?php
/**
 * The header for our theme.
 *
 * @package FRAFCA_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
        <a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

        <header id="masthead" class="site-header" role="banner">
            <div class="hamburger-icon">
                <i class="fas fa-bars"></i>
            </div>
            <div class="site-branding header-logo">
                <h1 class=" site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                        rel="home"><?php bloginfo( 'name' ); ?></a>
                </h1>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <div class="header-menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'Header-Menu', 'Header-Menu' => 'Header-Menu' ) ); ?>
                </div>
                <a href="#">
                    <i class="fas fa-search"></i>
                </a>
                <div class="side-header-menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'Side-Header-Menu', 'Side-Header-Menu' => 'Side-Header-Menu' ) ); ?>
                </div>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->

        <div id="content" class="site-content">