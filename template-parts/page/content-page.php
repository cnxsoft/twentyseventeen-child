<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
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

</article><!-- #post-## -->
