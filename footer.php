<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

                </div><!-- #content -->

                <footer id="colophon" class="site-footer" role="contentinfo">
                        <div class="wrap">
                                <?php
                                get_template_part( 'template-parts/footer/footer', 'widgets' );

                                if ( has_nav_menu( 'social' ) ) : ?>
                                        <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
                                                <?php
                                                        wp_nav_menu( array(
                                                                'theme_location' => 'social',
                                                                'menu_class'     => 'social-links-menu',
                                                                'depth'          => 1,
                                                                'link_before'    => '<span class="screen-reader-text">',
                                                                'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
                                                        ) );
                                                ?>
                                        </nav><!-- .social-navigation -->
                                <?php endif;

                                get_template_part( 'template-parts/footer/site', 'info' );
                                ?>
                        </div><!-- .wrap -->
                </footer><!-- #colophon -->
        </div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
<div id="amzn-assoc-ad-593731f3-2419-45b0-9d08-5e745f36e047"></div><script async src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US&adInstanceId=593731f3-2419-45b0-9d08-5e745f36e047"></script>

/* GDPR compliance - Quantcast Choice */
<!-- Quantcast Choice. Consent Manager Tag -->
  <script type="text/javascript" async=true>
    var __cmp = (function () {
      return typeof (__cmp) == "function" ? __cmp : function (c) {
        var b = arguments;
        if (!b.length) {
          return __cmp.a;
        }
        else if (c == '__cmp')
          return false;
        else {
          if (typeof __cmp.a === 'undefined') {
            __cmp.a = [];
          }
          __cmp.a.push([].slice.apply(b));
        }
      }
    })();
    var elem = document.createElement('script');
    elem.src = "https://quantcast.mgr.consensu.org/cmp.js";
    elem.async = true;
    elem.type = "text/javascript";
    var scpt = document.getElementsByTagName('script')[0];
    scpt.parentNode.insertBefore(elem, scpt);

    window.__cmp('init', {
  		'Language': 'en',
		'Initial Screen Reject Button Text': 'I do not accept',
		'Initial Screen Accept Button Text': 'I accept',
		'Purpose Screen Header Title Text': 'Privacy settings',
		'Purpose Screen Body Text': 'You can set your consent preferences and determine how you want your data to be used based on the purposes below. You may set your preferences for us independently from those of third-party partners. Each purpose has a description so that you know how we and partners use your data.',
		'Vendor Screen Body Text': 'You can set consent preferences for each individual third-party company below. Expand each company list item to see what purposes they use data for to help make your choices. In some cases, companies may disclose that they use your data without asking for your consent, based on their legitimate interests. You can click on their privacy policies for more information and to opt out.',
		'Vendor Screen Accept All Button Text': 'Accept all',
		'Vendor Screen Reject All Button Text': 'Reject all',
		'Initial Screen Body Text': 'We and our partners use technology such as cookies on our site to personalise content and ads, provide social media features, and analyse our traffic. Click below to consent to the use of this technology across the web. You can change your mind and change your consent choices at anytime by returning to this site.',
		'Initial Screen Body Text Option': 1,
		'Publisher Name': 'CNX Software',
		'Publisher Logo': 'https://www.cnx-software.com/wp-content/uploads/2018/03/cropped-cnxsoft-logo-square-1.jpg',
		'Min Days Between UI Displays': 60,
		'Publisher Purpose IDs': [1,5,2,3,4],
		'Post Consent Page': 'https://www.cnx-software.com',
    });
  </script>
  <!-- End Quantcast Choice. Consent Manager Tag -->
<style>
</style>

</body>
</html>
~         




