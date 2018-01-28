<?php add_theme_support( 'custom-header' ); ?>
<?php add_theme_support( 'menus' ); ?>
<?php add_action( 'init', 'register_my_menus' );
function register_my_menus() {
register_nav_menus(
array(
'primary' => __( 'primary' ),
'prenav' => __( 'prenav' ),
'footernav' => __( 'footernav' )
)
);
}
?>
<?php
add_theme_support( 'post-thumbnails' );
add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
add_image_size( 'blog-roll-post-thumbnail', 360, 9999 );
if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'page-sidebar',
        'before_widget' => '<div class="page-widget">',
        'after_widget' => '</div><div style="clear:both"></div>',
        'before_title' => '<h3 class="page-widget-name">',
        'after_title' => '</h3>',
));
}
if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'blog-sidebar',
        'before_widget' => '<div class="page-widget">',
        'after_widget' => '</div><div style="clear:both"></div>',
        'before_title' => '<h3 class="page-widget-name">',
        'after_title' => '</h3>',
));
}
if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'classes-sidebar',
        'before_widget' => '<div class="page-widget">',
        'after_widget' => '</div><div style="clear:both"></div>',
        'before_title' => '<h3 class="classes-widget-name">',
        'after_title' => '</h3>',
));
}
function rudr_custom_html_template($html, $id, $caption, $title, $align, $url, $size, $alt) {
	/*
	$html - default HTML, you can use regular expressions to operate with it
	$id - attachment ID
	$caption - image Caption
	$title - image Title
	$align - image Alignment
	$url - link to media file or to the attachment page (depends on what you selected in media uploader)
	$size - image size (Thumbnail, Medium, Large etc)
	$alt - image Alt Text
	*/
 
	/*
	 * First of all lets operate with image sizes
	 */
	list( $img_src, $width, $height ) = image_downsize($id, $size);
	$hwstring = image_hwstring($width, $height);
 
	/*
 	 * Second thing - get the image URL $image_thumb[0]
	 */
	$image_thumb = wp_get_attachment_image_src( $id, $size );
 
	if($url){ // if user wants to print the link with image
		$out .= '<a href="' . $url . '" data-lightbox="frontpage-image-gallery">';
	}
	$out .= '<img src="'. $image_thumb[0] .'" alt="'.$alt.'" '.$hwstring.'/>';
	if($url){
		$out .= '</a>';
	}
	return $out; // the result HTML
}
 
add_filter('image_send_to_editor', 'rudr_custom_html_template', 1, 8);

function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
//function new_excerpt_more( $more ) {
//	return '...<div style="clear:both;"></div><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More &raquo;</a>';
//}
add_filter( 'excerpt_more', 'new_excerpt_more' );
function myplugin_settings() {  
// Add tag metabox to page
register_taxonomy_for_object_type('post_tag', 'page'); 
// Add category metabox to page
register_taxonomy_for_object_type('category', 'page');  
}
?>