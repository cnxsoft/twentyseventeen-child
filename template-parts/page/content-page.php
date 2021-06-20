<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
    <!-- JLA - Ad related content -->
	<section class="ad ad-page">
		<?php
		if (function_exists('adrotate_group')) {
			if (!wp_is_mobile()) {
				echo adrotate_group(4); 
			} else {
   			    if ( function_exists( 'amp_is_request' ) &&  amp_is_request() ) {
                                echo adrotate_group(14);
                            } else {
				echo adrotate_group(12);
			    }
			}
		}
		?>
	</section>

</article><!-- #post-## -->
