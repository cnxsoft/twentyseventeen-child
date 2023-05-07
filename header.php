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
<link rel='preconnect' href='//cmp.uniconsent.com' />
<link rel='preconnect' href='//static.addtoany.com' />

<?php if ( function_exists( 'amp_is_request' ) && !amp_is_request() ) : ?>
<!-- PubGalaxy IAB TCF 2.0 script Top -->
<script src="https://cmp.uniconsent.com/v2/stub.min.js"></script>
<script async src='https://cmp.uniconsent.com/v2/de538b0a3a/cmp.js'></script>
<script>
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

/* Disable... using amz.to links instead 
            var script = document.createElement('script');
            script.async = true;
            script.src = '//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US&adInstanceId=593731f3-2419-45b0-9d08-5e745f36e047';
            document.head.appendChild(script); */
	    
	    /* Disable Adsense for now to fix CLS issue    
	    var script = document.createElement('script');
            script.async = true;
	    script.setAttribute('data-ad-client','ca-pub-3693704647095934');
            script.src = '//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js';
            document.head.appendChild(script); */

	    var script = document.createElement('script');
            script.async = true;
            script.src = '//btloader.com/tag?h=pubgalaxy-com&upapi=true';
            document.head.appendChild(script);

/* Disable use fave.co links instead 
            var script = document.createElement('script');
            script.async = true;
            script.src = 'https://s.skimresources.com/js/38249X983277.skimlinks.js';
            document.head.appendChild(script); */
        }
    }
});
</script>
<!-- PubGalaxy IAB TCF 2.0 script top end -->
<?php endif; ?> 
<?php wp_head(); ?>
<?php if ( function_exists( 'amp_is_request' ) && !amp_is_request() ) { ?>
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
<?php } else { ?>
         <!-- amp-ad & CMP -->
         <script async nomodule crossorigin="anonymous" custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
	<script async type="module" crossorigin="anonymous"  custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.mjs"></script>
	<script async nomodule crossorigin="anonymous" custom-element="amp-sticky-ad" src="https://cdn.ampproject.org/v0/amp-sticky-ad-1.0.js"></script>
	<script async type="module" crossorigin="anonymous"  custom-element="amp-sticky-ad" src="https://cdn.ampproject.org/v0/amp-sticky-ad-1.0.mjs"></script>
	<script async nomodule crossorigin="anonymous" custom-element="amp-consent" src="https://cdn.ampproject.org/v0/amp-consent-0.1.js"></script>
	<script async type="module" crossorigin="anonymous" custom-element="amp-consent" src="https://cdn.ampproject.org/v0/amp-consent-0.1.mjs"></script>
	<meta name="amp-consent-blocking" content="amp-ad,amp-analytics">

	<amp-consent id="uniconsent" layout="nodisplay" type="UniConsent">
		<script type="application/json">
			{
				"postPromptUI": "post-consent-ui",
				"clientConfig": {
					"id": "de538b0a3a"
				},
				"uiConfig": {
					"overlay": true
				}
			}
		</script>

		<div id="post-consent-ui" tabindex="0" role="button" on="tap:uniconsent.prompt(consent=UniConsent)" style="position: fixed; bottom: 65px; display: flex; width: 40px; height: 40px; justify-content: center; align-items: center; cursor: pointer; margin: 0 0 10px 10px;float: left; border-radius: 25px; background-image: linear-gradient(37deg,#c7c7c7,#e0e0e0);">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 80 80"><g xmlns="http://www.w3.org/2000/svg"><path d="M34,0 C34,0 23.6964545,11.1724138 0,11.1724138 L0,37.8256034 C0,51.7436379 6.68872727,65.1658966 18.7989091,73.7658621 C23.0844545,76.8103448 28.1396364,79.4288793 34,81 C39.8603636,79.4288793 44.914,76.8103448 49.2010909,73.7658621 C61.3112727,65.1658966 68,51.7436379 68,37.8256034 L68,11.1724138 C44.3035455,11.1724138 34,0 34,0 Z" id="Shape" fill="#556080" fill-rule="nonzero"></path> <path d="M33.5,72 C30.2491562,70.8407063 27.1024375,69.1817891 24.1165,67.0482991 C14.6503125,60.2873765 9,49.3527184 9,37.797358 L9,19.0691292 C20.3174687,17.7567475 28.3534687,14.1786635 33.5,11 C38.6465312,14.1786635 46.6825312,17.7567475 58,19.0691292 L58,37.797358 C58,49.3527184 52.3496875,60.2873765 42.8850312,67.0482991 C39.8975625,69.1817891 36.7508438,70.8407063 33.5,72 Z" id="Shape" fill="#4FBA6F" fill-rule="nonzero"></path> <path d="M52.4745773,28.3573401 C51.8332457,27.8315443 50.8604567,27.8936575 50.2992916,28.4931226 L29.799806,50.4422109 L18.6320032,39.9782954 C18.0292132,39.4134982 17.0548825,39.4134982 16.4520925,39.9782954 C15.8493025,40.5430927 15.8493025,41.4560129 16.4520925,42.0208102 L28.7853921,53.5767632 C29.0752247,53.8483281 29.4668069,54 29.8753475,54 C29.8923058,54 29.909264,54 29.9262223,54 C30.3532628,53.9869996 30.7540951,53.8078823 31.0346776,53.5074275 L52.6179519,30.3955214 C53.1791171,29.7946118 53.1143672,28.8816915 52.4745773,28.3573401 Z" id="Shape" fill="#FFFFFF" fill-rule="nonzero"></path></g></svg>
		</div>
	</amp-consent>

	<amp-iframe
			width="1"
			height="1"
			sandbox="allow-scripts allow-same-origin"
			frameborder="0" src="https://dsh7ky7308k4b.cloudfront.net/load-cookie-with-consent.html?endpoint=pubgalaxy&max_sync_count=5"
>
		<amp-img layout="fill" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" placeholder></amp-img>
	</amp-iframe>
<?php } ?> 
<?php if ( function_exists( 'amp_is_request' ) && !amp_is_request() ) { ?>
<!-- Preload wpdiscuz font for Lighthouse performance improvements -->
<link id='wpdiscuz-preload-0' rel='preload' href='https://www.cnx-software.com/wp-content/plugins/wpdiscuz/assets/third-party/font-awesome-5.13.0/webfonts/fa-brands-400.woff2' as='font' type='font/woff2' crossorigin />
<link id='wpdiscuz-preload-1' rel='preload' href='https://www.cnx-software.com/wp-content/plugins/wpdiscuz/assets/third-party/font-awesome-5.13.0/webfonts/fa-solid-900.woff2' as='font' type='font/woff2' crossorigin />
<link id='wpdiscuz-preload-2' rel='preload' href='https://www.cnx-software.com/wp-content/plugins/wpdiscuz/assets/third-party/font-awesome-5.13.0/webfonts/fa-regular-400.woff2' as='font' type='font/woff2' crossorigin />
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

