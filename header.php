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
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<meta name="referrer" content="always"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- PubGalaxy IAB TCF 2.0 script Top -->
<script src="https://cmp.uniconsent.com/v2/stub.min.js"></script>
<script async src='https://cmp.uniconsent.com/v2/de538b0a3a/cmp.js'></script>
<script type="text/javascript">
window.googletag = window.googletag || {};
window.googletag.cmd = window.googletag.cmd || [];
window.googletag.cmd.push(function () {
    window.googletag.pubads().enableAsyncRendering();
    window.googletag.pubads().disableInitialLoad();
});
(adsbygoogle = window.adsbygoogle || []).pauseAdRequests = 1;
</script>
<script>
__tcfapi("addEventListener", 2, function(tcData, success) {
    if (success && tcData.unicLoad  === true) {
        if(!window._initAds) {
            window._initAds = true;
            var script = document.createElement('script');
            script.async = true;
            script.src = 'https://dsh7ky7308k4b.cloudfront.net/publishers/cnx-softwarecom_new.min.js';
            document.head.appendChild(script);

            var script = document.createElement('script');
            script.async = true;
            script.src = '//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US&adInstanceId=593731f3-2419-45b0-9d08-5e745f36e047';
            document.head.appendChild(script);
	    
	    /* Disable Adsense for now to fix CLS issue    
	    var script = document.createElement('script');
            script.async = true;
	    script.setAttribute('data-ad-client','ca-pub-3693704647095934');
            script.src = '//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js';
            document.head.appendChild(script); */

	    var script = document.createElement('script');
            script.async = true;
            script.src = '//pubgalaxy-com.videoplayerhub.com/gallery.js';
            document.head.appendChild(script);

            var script = document.createElement('script');
            script.async = true;
            script.src = 'https://s.skimresources.com/js/38249X983277.skimlinks.js';
            document.head.appendChild(script);
        }
    }
});
</script>
<!-- PubGalaxy IAB TCF 2.0 script top end -->
<?php wp_head(); ?>
<!-- PubGalaxy IAB TCF 2.0 script bottom -->
<script>
(function waitGEO() {
    var readyGEO;
    if (window['UnicI'] && window['UnicI'].geo && window['UnicI'].geo !== '-' ) {
        readyGEO = true;
        console.log(window['UnicI'].geo);
        if (window['UnicI'].geo === 'EU') {
            if(document.getElementById("unic-gdpr")) {
              document.getElementById("unic-gdpr").style.display = 'block';
            }
        }
        if (window['UnicI'].geo === 'CA') {
            if(document.getElementById("unic-ccpa")) {
              document.getElementById("unic-ccpa").style.display = 'block';
            }
        }
    }
    if (!readyGEO) {
        setTimeout(waitGEO, 200);
    }
})();
</script>
<!-- PubGalaxy IAB TCF 2.0 script bottom End -->

<!-- Preload wpdiscuz font for Lighthouse performance improvements -->
<link id='wpdiscuz-preload-0' rel='preload' href='https://www.cnx-software.com/wp-content/plugins/wpdiscuz/assets/third-party/font-awesome-5.13.0/webfonts/fa-brands-400.woff2' as='font' type='font/woff2' crossorigin />
<link id='wpdiscuz-preload-1' rel='preload' href='https://www.cnx-software.com/wp-content/plugins/wpdiscuz/assets/third-party/font-awesome-5.13.0/webfonts/fa-solid-900.woff2' as='font' type='font/woff2' crossorigin />
<link id='wpdiscuz-preload-2' rel='preload' href='https://www.cnx-software.com/wp-content/plugins/wpdiscuz/assets/third-party/font-awesome-5.13.0/webfonts/fa-regular-400.woff2' as='font' type='font/woff2' crossorigin />
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
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

