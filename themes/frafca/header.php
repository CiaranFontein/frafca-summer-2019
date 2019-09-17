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
    <meta name="theme-color" content="#4D4E60" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
        <a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

        <header id="masthead" class="site-header" role="banner">
            <div class="header-container">
                <div class="mobile-header-menu">
                    <div class="mobile-header-menu-container">
                        <?php wp_nav_menu( array( 'theme_location' => 'Mobile-Header-Menu', 'Mobile-Header-Menu' => 'Mobile-Header-Menu' ) ); ?>
                    </div>
                </div>
                <div class=" hamburger-icon">
                    <i class="fas fa-bars"></i>
                </div>
                <a class='logo-link' href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <div class="site-branding header-logo">
                        <h1 class="site-title screen-reader-text">
                            <?php bloginfo( 'name' ); ?>
                        </h1>
                    </div><!-- .site-branding -->
                </a>
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <div class="header-menu">
                        <?php wp_nav_menu( array( 'theme_location' => 'Header-Menu', 'Header-Menu' => 'Header-Menu' ) ); ?>
                    </div>
                    <a class="search-icon" href="#">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="side-header-menu">
                        <?php wp_nav_menu( array( 'theme_location' => 'Side-Header-Menu', 'Side-Header-Menu' => 'Side-Header-Menu' ) ); ?>
                    </div>
                    <div class="search-field-container">
                        <?php get_search_form(); ?>
                    </div>
                </nav><!-- #site-navigation -->
            </div>
        </header><!-- #masthead -->

        <div id="content" class="site-content">