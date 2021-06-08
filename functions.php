<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/* JLA - Set excerpts length to 160 words */
function custom_excerpt_length( $length ) {
	return 160;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];
 
  if(empty($first_img)){ //Defines a default image
    $first_img = "/images/default.jpg";
  }
  return $first_img;
}

add_filter('document_title_parts', 'dq_override_post_title', 10);
function dq_override_post_title($title){
   // change title for singular blog post
    if( is_singular( 'post' ) ){
        $title['site'] = ''; //optional
    } else {
        $title['tagline'] = '';
    }
    return $title;
}
/* Remove Continue reading link */
function twentyseventeen_excerpt_more_child( $link ) {
        return ' [...]';
}
add_filter( 'excerpt_more', 'twentyseventeen_excerpt_more_child', 999);

/* Add nofollow to link to comments */
function add_nofollow_to_comments_popup_link () {
	return ' rel="nofollow"';
}
add_filter ( 'comments_popup_link_attributes', 'add_nofollow_to_comments_popup_link' ); 

/* Disable BIG image scaling introduced in WP 5.3 */
add_filter( 'big_image_size_threshold', '__return_false' );


/* Enable shortcodes in widgets */
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode', 11);

/* Trim description for OG plugin */
add_filter( 'og_og_description_value', function( $value ) {
    return wp_trim_words( $value );
});

/* Let Contributor Role to Upload Media */
if ( current_user_can('contributor') && !current_user_can('upload_files') )
    add_action('admin_init', 'allow_contributor_uploads');
function allow_contributor_uploads() {
    $contributor = get_role('contributor');
    $contributor->add_cap('upload_files');
}

/* Hide reCaptcha logo unless Contact Form 7 is activated */
function contactform_dequeue_scripts() {

    $load_scripts = false;

    if( is_page() ) {
    	$post = get_post();

    	if( has_shortcode($post->post_content, 'contact-form-7') ) {
        	$load_scripts = true;
			
		}

    }

    if( ! $load_scripts ) {
        wp_dequeue_script( 'contact-form-7' );
	wp_dequeue_script('google-recaptcha');
        wp_dequeue_style( 'contact-form-7' );
		
    }

}
add_action( 'wp_enqueue_scripts', 'contactform_dequeue_scripts', 99 );

/* Move pagination before author box, related content... */
add_filter( 'the_content', function( $content ) {
    return $content . wp_link_pages( array( 'echo' => FALSE ) );
}, -1 ); // Lower number = higher priority.


/* Do not display categories in footer, only tags */
/**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function twentyseventeen_entry_footer() {

        /* translators: used between list items, there is a space after the comma */
        $separate_meta = __( ', ', 'twentyseventeen' );

        // Get Tags for posts.
        $tags_list = get_the_tag_list( '', $separate_meta );

        // We don't want to output .entry-footer if it will be empty, so make sure its not.
        if ( ( $tags_list ) || get_edit_post_link() ) {

            echo '<footer class="entry-footer">';

            if ( 'post' === get_post_type() ) {
               if ( $tags_list ) {
                    echo '<span class="cat-tags-links">';

                    if ( $tags_list && ! is_wp_error( $tags_list ) ) {
                        echo '<span class="tags-links">' . twentyseventeen_get_svg( array( 'icon' => 'hashtag' ) ) . '<span class="screen-reader-text">' . __( 'Tags', 'twentyseventeen' ) . '</span>' . $tags_list . '</span>';
                    }

                    echo '</span>';
                }
            }

            twentyseventeen_edit_link();

            echo '</footer> <!-- .entry-footer -->';
        }
    }

/**
 * Remove dashicons CSS from the page, only load if user is logged in
 */
function dashicons_admin_only() {
    if(!is_user_logged_in()) {
        global $wp_styles;
        wp_dequeue_style('dashicons');
        $wp_styles->registered['dashicons']->src = '';
    }
}
add_action( 'wp_print_styles', 'dashicons_admin_only' );

/* Delay cookie banner - To do */


/* Allow modern image formats */
function allow_modern_images( $mime_types ) {
  $mime_types['webp'] = 'image/webp';
  $mime_types['heic'] = 'image/heic';
  $mime_types['heif'] = 'image/heif';
  $mime_types['heics'] = 'image/heic-sequence';
  $mime_types['heifs'] = 'image/heif-sequence';
  $mime_types['avif'] = 'image/avif';
  $mime_types['avis'] = 'image/avif-sequence';
  return $mime_types
}
add_filter( 'upload_mimes', 'allow_modern_images', 1, 1 );
?>
