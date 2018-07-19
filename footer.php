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
<!-- Viglink code !-->
<script type="text/javascript">
    var vglnk = { key: '6fb3a5065613e981f56f6ca8abc2f761' };

    (function(d, t) {
        var s = d.createElement(t);
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//cdn.viglink.com/api/vglnk.js';
        var r = d.getElementsByTagName(t)[0];
            r.parentNode.insertBefore(s, r);
    }(document, 'script'));
</script>
<!-- end of Viglink code -->
</body>
</html>
~         




