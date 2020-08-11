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

/* Add nofollow to Continue reading link */
function twentyseventeen_excerpt_more_child( $link ) {
        if ( is_admin() ) {
                return $link;
        }

        $link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link" rel="nofollow">%2$s</a></p>',
                esc_url( get_permalink( get_the_ID() ) ),
                /* translators: %s: Name of current post */
                sprintf( __( 'Continue reading...<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ), get_the_title( get_the_ID() ) )
        );
        return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'twentyseventeen_excerpt_more_child', 999);

/* Add nofollow to tag cloud */
add_filter( 'wp_tag_cloud', 'no_follow_tag_cloud_links' );
function no_follow_tag_cloud_links( $return ) {
	$return = str_replace('<a', '<a rel="nofollow" ', $return );
	return $return;
}

/* Add nofollow to link to comments */
function add_nofollow_to_comments_popup_link () {
	return 'rel="nofollow"';
}
add_filter ( 'comments_popup_link_attributes', 'add_nofollow_to_comments_popup_link' ); 

/* Nofollow for all tags */
add_filter('the_tags', 'wp32234_add_span_get_the_tag_list');

function wp32234_add_span_get_the_tag_list($list) {
    $list = str_replace('rel="tag">', 'rel="tag nofollow">', $list);
    return $list;
}

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

/* Add Meta Referrer Tag in Header without Plugin
function add_meta_tags() {
?>
    <meta name="referrer" content="always"/>
<?php }
add_action('wp_head', 'add_meta_tags'); */


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
?>
