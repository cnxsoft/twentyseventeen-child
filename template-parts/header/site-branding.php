<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-branding">
        <div class="wrap">

                <div class="cnx-logo one-third-m">
                        <?php the_custom_logo(); ?>
                </div>

                <div class="site-branding-text two-third-m">
                        <?php if ( is_front_page() ) : ?>
                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php else : ?>
                                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                        <?php endif; ?>

                        <?php
                        $description = get_bloginfo( 'description', 'display' );

                        if ( $description && !wp_is_mobile() || is_customize_preview() && !wp_is_mobile() ) :
                                ?>
                                <p class="site-description"><?php echo $description; ?></p>
                        <?php endif; ?>
                </div><!-- .site-branding-text -->
                <!-- JLA - PubGalaxy Top Banner -->
                <?php 
                if(function_exists('adrotate_group')) {
                        echo '<div class="header-toop">';
                        if (!wp_is_mobile()) {
               	            echo adrotate_group(1);
                        } else {
		            if ( function_exists( 'amp_is_request' ) &&  amp_is_request() ) {
               	                echo adrotate_group(13);
		            } else {
                                echo adrotate_group(11);
			    }
                        }
                        echo '</div>';
                }
                ?>
                <?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
                <a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
        <?php endif; ?>

        </div><!-- .wrap -->
</div><!-- .site-branding -->
