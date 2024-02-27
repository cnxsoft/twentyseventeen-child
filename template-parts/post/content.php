<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
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
		if ( 'post' === get_post_type() && ! wp_is_mobile() ) {
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
			echo '</div>';
		}; 

		if ( 'post' === get_post_type() && wp_is_mobile() ) {
			if ( is_single() ) {
				echo '<div class="entry-meta">';
				twentyseventeen_posted_on();
				echo " - ";
				comments_popup_link();
				echo '</div>';
			}
		}
		?>

	<?php 
		if ( is_single() ) {
			echo '<div class="post-title">';
			the_title( '<h1 class="entry-title">', '</h1>' );
			echo '</div>';

		} elseif ( is_front_page() && is_home() ) {
			if (!wp_is_mobile()) {
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			} else {
				if (! has_post_thumbnail()) {
					echo '<div class="post-thumbnail one-third-m"><a href="' . esc_url( get_permalink() ) . '">', '<img alt="" align="left" width=500 height=250 margin=10px src="' . catch_that_image() . '"></a></div>';
				} else {
					echo '<div class="post-thumbnail one-third-m"><a href="' . esc_url( get_permalink() ) . '">', the_post_thumbnail( 'post-thumbnail' ), '</a></div>';
				}

				echo '<div class="two-third-m">';
					if ( 'post' === get_post_type() ) {
						echo '<div class="entry-meta">';
						echo twentyseventeen_time_link();
						twentyseventeen_edit_link();
						echo '</div>';
					}
					echo '<div class="post-title">', 
					the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
					echo '</div>';
					echo '<div class="entry-meta">';
					comments_popup_link();
					echo '</div>';
				echo '</div>';
			}
		} else {
			if (!wp_is_mobile()) {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); 
			} else {
				if (! has_post_thumbnail()) {
					echo '<div class="post-thumbnail one-third-m"><a href="' . esc_url( get_permalink() ) . '">', '<img alt="" align="left" width=300 height=250 margin=10px src="' . catch_that_image() . '"></a></div>';
				} else {
					echo '<div class="post-thumbnail one-third-m"><a href="' . esc_url( get_permalink() ) . '">', the_post_thumbnail( 'post-thumbnail' ), '</a></div>';
				}

				echo '<div class="two-third-m">';
					if ( 'post' === get_post_type() ) {
						echo '<div class="entry-meta">';
						echo twentyseventeen_time_link();
						twentyseventeen_edit_link();
						echo '</div>';
					}
					echo '<div class="post-title">';
					the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
					echo '</div>';
					echo '<div class="entry-meta">';
					comments_popup_link();
					echo '</div>';
				echo '</div>';
			}
		}
		?>
	</header><!-- .entry-header -->

	
			<?php if ( '' !== get_the_post_thumbnail() && ! is_single() && ! wp_is_mobile() ) : ?>
				<div class="post-thumbnail">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( 'post-thumbnail' ); ?>
					</a>
				</div><!-- .post-thumbnail -->
			<?php else :
				 if (! is_single() && ! wp_is_mobile() ) { ?>
				 		<div class="post-thumbnail">
				 		<a href="<?php the_permalink(); ?>">
				 			<img alt="" align="left" width=300 height=250 margin=10px src="<?php echo catch_that_image(); ?>">
				 		</a>
					</div><!-- .post-thumbnail -->
			<?php } endif; ?>


	<div class="entry-content">
		<?php

		if ( is_single() ) {

			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
				get_the_title()
			) );
		
		} else {

			if (!wp_is_mobile()) {
				the_excerpt( sprintf(
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
					get_the_title()
				) );
			}
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
		<!-- JLA - Donations -->
		<p><strong>Support CNX Software! Donate via <a href="https://www.cnx-software.com/donate-cryptocurrencies/" rel="nofollow noopener">cryptocurrencies</a>, <a href="https://www.patreon.com/cnxsoft" target="_blank" rel="nofollow noopener">become a Patron</a> on Patreon, or purchase goods on <a href="https://amzn.to/3SXubZ0" rel="nofollow">Amazon</a> or <a href="https://s.click.aliexpress.com/e/_DmGIIRT" rel="nofollow">Aliexpress</a></strong></p>

		<?php if (!wp_is_mobile()) {
           		/* JLA - PubGalaxy Multiplex */
			echo adrotate_group(26);
		}
		twentyseventeen_entry_footer();
	} ?>

</article><!-- #post-## -->
