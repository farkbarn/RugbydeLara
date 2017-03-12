<?php 
//add imagen destacada
add_theme_support('post-thumbnails');
// size para preestablecidos
/*set_post_thumbnail_size( 'thumbnail', 175,135, array('center','top') );
set_post_thumbnail_size( 'medium', 375,270, array('center','top') );
set_post_thumbnail_size( 'large', 780,535, array('center','top') );
*/
add_image_size( 'thumbnail', 175,135, array('center','top') );
add_image_size( 'medium', 375,270, array('center','top') );
add_image_size( 'large', 780,535, array('center','top') );
add_image_size('destaque', 1180, 450, array('center','top'));
// return full directory uri
function raiz() {echo get_template_directory_uri().'/';}
function caturl($id){echo esc_url(get_category_link($id));}
function pagurl($id){echo esc_url(get_page_link($id->ID));}


function the_excerpt_max($charlength) {
    $excerpt=get_the_excerpt();
    $charlength++;
    if ( mb_strlen( $excerpt ) > $charlength ) {
	$subex = mb_substr( $excerpt, 0, $charlength - 5 );
	$exwords = explode( ' ', $subex );
	$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
	if ( $excut < 0 ) {
	    echo mb_substr( $subex, 0, $excut );
	} else {
	    echo $subex;
	}
	echo "<a class='lnkexcerpt' href='".get_permalink()."'>. . .</a>";
    } else {
	echo $excerpt;
    }
}

?>