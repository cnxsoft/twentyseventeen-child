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

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- PubGalaxy Code -->
<script type="text/javascript" src="//dsh7ky7308k4b.cloudfront.net/publishers/cnx-softwarecom.min.js"></script>
<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
</script>
<script>
googletag.cmd.push(function() {
var slot35146 = googletag.defineSlot('/8095840/.2_A.35146.3_cnx-software.com_tier1', [728, 90], 'div-gpt-ad-cnx-softwarecom35146').addService(googletag.pubads());
googletag.defineSlot('/8095840/.2_A.35145.7_cnx-software.com_tier1', [300, 600], 'div-gpt-ad-cnx-softwarecom35145').addService(googletag.pubads());
var slot34144 = googletag.defineSlot('/8095840/.2_A.35144.4_cnx-software.com_tier1', [300, 250], 'div-gpt-ad-cnx-softwarecom35144').addService(googletag.pubads());
var slot35143 = googletag.defineSlot('/8095840/.2_A.35143.4_cnx-software.com_tier1', [300, 250], 'div-gpt-ad-cnx-softwarecom35143').addService(googletag.pubads());
googletag.defineSlot('/8095840/.2_A.35142.3_cnx-software.com_tier1', [728, 90], 'div-gpt-ad-cnx-softwarecom35142').addService(googletag.pubads());
googletag.defineSlot('/8095840/.2_A.35141.7_cnx-software.com_tier1', [300, 600], 'div-gpt-ad-cnx-softwarecom35141').addService(googletag.pubads());
googletag.defineSlot('/8095840/.2_A.35140.4_cnx-software.com_tier1', [300, 250], 'div-gpt-ad-cnx-softwarecom35140').addService(googletag.pubads());
var slot35139 = googletag.defineSlot('/8095840/.2_A.35139.4_cnx-software.com_tier1', [300, 250], 'div-gpt-ad-cnx-softwarecom35139').addService(googletag.pubads());
googletag.defineSlot('/8095840/.2_A.35138.4_cnx-software.com_tier1', [300, 250], 'div-gpt-ad-cnx-softwarecom35138').addService(googletag.pubads());
googletag.defineSlot('/8095840/.2_A.35196.4_cnx-software.com_tier1', [300, 250], 'div-gpt-ad-cnx-softwarecom35196').addService(googletag.pubads());

var refreshSlots = [slot35139, slot34144, slot35143, slot35146];
    setInterval(function RefreshBids() {
        console.log('Refresh Bids Initialized');
        pbjs.que.push(function() {
        pbjs.requestBids({ 
            timeout: PREBID_TIMEOUT,
            adUnitCodes: ['div-gpt-ad-cnx-softwarecom35146','div-gpt-ad-cnx-softwarecom35144','div-gpt-ad-cnx-softwarecom35143', 'div-gpt-ad-cnx-softwarecom35139'],
            bidsBackHandler: function() {
                console.log('RefreshBids.bidsBackHandler',refreshSlots);
                pbjs.setTargetingForGPTAsync(['div-gpt-ad-cnx-softwarecom35146','div-gpt-ad-cnx-softwarecom35144','div-gpt-ad-cnx-softwarecom35143', 'div-gpt-ad-cnx-softwarecom35139']);
                console.log('Refresh Ads');
                googletag.pubads().refresh(refreshSlots);
            }
        });
    });
    }, 90000);
 
    googletag.enableServices();
  });
</script>
<!-- End PubGalaxy Code -->

<!-- Adsense including Auto Ads -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3693704647095934",
    enable_page_level_ads: true
  });
</script>

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

