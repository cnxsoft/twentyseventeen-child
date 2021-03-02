<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
				if ( is_single() ) {
					twentyseventeen_posted_on();
					echo " - ";
                                        comments_popup_link();
				} else {
					twentyseventeen_posted_on();
					echo " - ";
                                        comments_popup_link();
					twentyseventeen_edit_link();
				};
			echo '</div><!-- .entry-meta -->';
		};

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); 
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); 
		}
		?>
	</header><!-- .entry-header -->

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php else :
		 if (! is_single() ) { ?>
		<div class="post-thumbnail">	
                        <a href="<?php the_permalink(); ?>">
                       <img alt="" align="left" width=300 height=250 margin=10px src="<?php echo catch_that_image(); ?>"></a>
		</div><!-- .post-thumbnail -->
                <?php
                }
	endif; ?>

	<div class="entry-content">
		<?php

		if ( is_single() ) {

		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );
		} else {

		the_excerpt( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );
		}
        

		wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php
	if ( is_single() ) { ?>
		<!-- JLA - Ad related content -->
                <table>
                <tr>
                        <td width=338>
		        <?php echo adrotate_group(4); ?>
                        </td>
                        <td valign="top">
                        <?php
                                if(function_exists('yarpp_related')) {
                                       yarpp_related(array('post_type' => 'post'));
                                }
                        ?>
                        </td>
                </tr>
                </table>
		<!-- JLA - PubGalaxy Multiplex -->
		<?php echo adrotate_ad(103); ?>

		<?php twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-## -->
