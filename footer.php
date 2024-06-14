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
 * @since Twenty Seventeen 1.0
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
<!-- Sticker banner -->
<?php if (function_exists('adrotate_group')) {
                if (!wp_is_mobile()) {
                        echo adrotate_group(22);
                } else {
                        if ( function_exists( 'amp_is_request' ) &&  amp_is_request() ) {
                            echo adrotate_group(24);
                        } else {
                            echo adrotate_group(23);
                        }
                }
        }
?>
<amp-iframe data-block-on-consent="_till_responded" width="1" height="1" sandbox="allow-scripts allow-same-origin" frameborder="0" src="https://dsh7ky7308k4b.cloudfront.net/load-cookie-with-consent.html?endpoint=pubgalaxy&amp;max_sync_count=5" class="i-amphtml-layout-fixed i-amphtml-layout-size-defined" style="width:1px;height:1px" i-amphtml-layout="fixed">
<amp-img layout="fill" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" placeholder class="i-amphtml-layout-fill i-amphtml-layout-size-defined" i-amphtml-layout="fill"></amp-img>
</amp-iframe>
</body>
</html>
