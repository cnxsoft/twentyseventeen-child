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
<link rel='preconnect' href='//static.addtoany.com' />

<!-- PubGalaxy IAB TCF 2.0 script Top -->
<script>
  window.googletag = window.googletag || {};
  window.googletag.cmd = window.googletag.cmd || [];
  window.googletag.cmd.push(() => {
    window.googletag.pubads().enableAsyncRendering();
    window.googletag.pubads().disableInitialLoad();
  }
  );
  const injectPgScript = (src, isAsync, onLoadCallback) => {
    if (!src)
      return;
    const script = document.createElement("script");
    script.src = src;
    if (isAsync)
      script.async = isAsync;
    if (onLoadCallback)
      script.onload = onLoadCallback;
    document.head.appendChild(script);
  };
  
  const initiatePgAds = () => {
    !!window.__tcfapi && window.__tcfapi("addEventListener", 2, (tcData, success) => {
      if (success && (tcData.eventStatus === "useractioncomplete" || tcData.eventStatus === "tcloaded" || tcData.gdprApplies === false)) {
        if (!window._initAds) {
          window._initAds = true;

    <!-- Disable ads on mobile since we do not run any and as an experiment -->
    <?php if (!wp_is_mobile()) { ?>
          injectPgScript("//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", true);
          injectPgScript("///fms.360yield.com/ow/bundles/live/pubgalaxy/publishers/cnx-softwarecom_new.min.js", true);
          injectPgScript("//btloader.com/tag?o=5184339635601408&upapi=true", true);
    <?php } ?>
        }
      }
    }
    );
  };
  
    <!-- Disable ads on mobile since we do not run any and as an experiment -->
    <?php if (!wp_is_mobile()) { ?>
  injectPgScript("https://securepubads.g.doubleclick.net/tag/js/gpt.js?network-code=8095840", true, () => {
    window.googlefc = window.googlefc || {
      callbackQueue: []
    };
    <?php else {
    window.googlefc = window.googlefc || {
      callbackQueue: []
    };

    } ?>

    window.googlefc.callbackQueue.push({
      "CONSENT_API_READY": () => initiatePgAds()
    });
    /* Disable... using amz.to links instead 
    var script = document.createElement('script');
    script.async = true;
    script.src = '//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US&adInstanceId=593731f3-2419-45b0-9d08-5e745f36e047';
    document.head.appendChild(script); */
	    
    <?php if (wp_is_mobile()) { ?>
           var script = document.createElement('script');
            script.async = true;
            script.setAttribute('data-ad-client','ca-pub-3693704647095934');
            script.src = '//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js';
            document.head.appendChild(script);
    <?php } ?>
  }
  );
</script>
<!-- PubGalaxy IAB TCF 2.0 script top end -->

<?php wp_head(); ?>
<!-- Preload wpdiscuz font for Lighthouse performance improvements -->
<link id='wpdiscuz-preload-0' rel='preload' href='https://www.cnx-software.com/wp-content/plugins/wpdiscuz/assets/third-party/font-awesome-5.13.0/webfonts/fa-brands-400.woff2' as='font' type='font/woff2' crossorigin />
<link id='wpdiscuz-preload-1' rel='preload' href='https://www.cnx-software.com/wp-content/plugins/wpdiscuz/assets/third-party/font-awesome-5.13.0/webfonts/fa-solid-900.woff2' as='font' type='font/woff2' crossorigin />
<link id='wpdiscuz-preload-2' rel='preload' href='https://www.cnx-software.com/wp-content/plugins/wpdiscuz/assets/third-party/font-awesome-5.13.0/webfonts/fa-regular-400.woff2' as='font' type='font/woff2' crossorigin />
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

        <header id="masthead" class="site-header">

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

