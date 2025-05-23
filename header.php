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
<?php if ( function_exists( 'amp_is_request' ) &&  amp_is_request() ) { ?>
<script>
(function() {
    if(!window['gtag']) {
        window['dataLayer'] = window['dataLayer'] || [];
        window['gtag'] = function(){window['dataLayer'].push(arguments);}
    }
    window['gtag']('consent', 'default', {
        ad_storage: 'denied',
        functionality_storage: 'granted',
        personalization_storage: 'denied',
        analytics_storage: 'denied',
        ad_user_data: 'denied',
        ad_personalization: 'denied',
        security_storage: 'granted',
        wait_for_update: 1000
    });
    window['gtag']("set", "ads_data_redaction", true);
    window['gtag']("set", "url_passthrough", false);
})();
</script>
<?php } else { ?>
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
  }
    ;
  const initiatePgAds = () => {
    !!window.__tcfapi && window.__tcfapi("addEventListener", 2, (tcData, success) => {
      if (success && (tcData.eventStatus === "useractioncomplete" || tcData.eventStatus === "tcloaded" || tcData.gdprApplies === false)) {
        if (!window._initAds) {
          window._initAds = true;
          injectPgScript("//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", true);
          injectPgScript("https://fms.360yield.com/ow/bundles/live/pubgalaxy/publishers/cnx-softwarecom_new.min.js", true); 
          injectPgScript("//btloader.com/tag?o=5184339635601408&upapi=true", true);
        }
      }
    }
    );
  } 
    ;
  injectPgScript("https://securepubads.g.doubleclick.net/tag/js/gpt.js?network-code=8095840", true, () => { 
    window.googlefc = window.googlefc || {
      callbackQueue: []
    };
    window.googlefc.callbackQueue.push({
      "CONSENT_API_READY": () => initiatePgAds()
    });
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
<!-- Change the ad setting link. We usually recomend putting them in the footer of your website -->
<!-- Change Consent Option FundingChoices -->
<div id="fluid-privacy-opt-out-link" onmouseover="this.style.color='rgb(25, 103, 210)'; this.style.cursor='pointer'"
  onmouseout="this.style.color='#CCCCCC'; this.style.cursor='auto'"></div>
<script>
   const privacyOptOutLink = document.getElementById("fluid-privacy-opt-out-link");
window.googlefc = window.googlefc || { callbackQueue: [] };
window.googlefc.ccpa = window.googlefc.ccpa || {};
window.googlefc.ccpa.overrideDnsLink = true;
window.googlefc.callbackQueue.push(
  {
    "CONSENT_API_READY": () => {
      if (!privacyOptOutLink) {
        return;
      }
      !!window.__tcfapi && window.__tcfapi("addEventListener", 2, (tcData, success) => {
        if (success && tcData.gdprApplies) {
          privacyOptOutLink.innerText = "Change GDPR Consent";
          privacyOptOutLink.addEventListener("click", () => googlefc.showRevocationMessage());
          return;
        }
      });
    }
  });
window.googlefc.callbackQueue.push(
  {
    "INITIAL_CCPA_DATA_READY": () => {
      if (!privacyOptOutLink) {
        return;
      }

      if (googlefc.ccpa.getInitialCcpaStatus() && googlefc.ccpa.getInitialCcpaStatus() === googlefc.ccpa.InitialCcpaStatusEnum.NOT_OPTED_OUT) {
        privacyOptOutLink.innerText = "Don't sell or share my personal info";
        privacyOptOutLink.addEventListener("click", () => googlefc.ccpa.openConfirmationDialog((optedOut) => {
          if (optedOut) {
            privacyOptOutLink.style.display = "none";
          }
        }));
        return
      }
    }
  });
</script>
<?php } ?>
<!-- PubGalaxy IAB TCF 2.0 script top end -->

<?php wp_head(); ?>
<!-- Preload wpdiscuz font for Lighthouse performance improvements -->
<link id='wpdiscuz-preload-0' rel='preload' href='https://www.cnx-software.com/wp-content/plugins/wpdiscuz/assets/third-party/font-awesome-5.13.0/webfonts/fa-brands-400.woff2' as='font' type='font/woff2' crossorigin />
<link id='wpdiscuz-preload-1' rel='preload' href='https://www.cnx-software.com/wp-content/plugins/wpdiscuz/assets/third-party/font-awesome-5.13.0/webfonts/fa-solid-900.woff2' as='font' type='font/woff2' crossorigin />
<link id='wpdiscuz-preload-2' rel='preload' href='https://www.cnx-software.com/wp-content/plugins/wpdiscuz/assets/third-party/font-awesome-5.13.0/webfonts/fa-regular-400.woff2' as='font' type='font/woff2' crossorigin />

<?php if ( function_exists( 'amp_is_request' ) &&  amp_is_request() ) { ?>
	<meta name="amp-consent-blocking" content="amp-ad"><script async custom-element="amp-consent" src="https://cdn.ampproject.org/v0/amp-consent-0.1.js"></script><script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script><script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
    <?php } ?>

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

