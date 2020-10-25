<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="referrer" content="always"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- PubGalaxy Adblock script -->
<script src="//pubgalaxy-com.videoplayerhub.com/gallery.js" async></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- JLA - PubGalaxy Code -->
<?php echo adrotate_ad(104); ?>
<!-- End PubGalaxy Code -->

<div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

        <header id="masthead" class="site-header" role="banner">

                <?php get_template_part( 'template-parts/header/header', 'image' ); ?>

                <?php if ( has_nav_menu( 'top' ) ) : ?>
                        <div class="navigation-top">
                                <div class="wrap">
                                        <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
                                </div><!-- .wrap -->
                        </div><!-- .navigation-top -->
                <?php endif; ?>

        </header><!-- #masthead -->

        <?php

        /*
         * Do not show the featured image for a regular post or page.
         * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
         */
/*
        if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
                echo '<div class="single-featured-image-header">';
                echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
                echo '</div><!-- .single-featured-image-header -->';
        endif;*/
        ?>

        <div class="site-content-contain">
                <div id="content" class="site-content">

