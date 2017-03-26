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

register_sidebar( array(
	'name'=>'Principal',
	'id'=>'widhome',
	'description'=>'widget para home',
	'class'=>'widgethome',
	'before_widget'=>'',
	'after_widget'=>'',
	'before_title'=>'',
	'after_title'=>''
	) );

register_sidebar( array(
	'name'=>'Principal Videos',
	'id'=>'widhomevid',
	'description'=>'widget para videos de home',
	'class'=>'widgethomevid',
	'before_widget'=>'',
	'after_widget'=>'',
	'before_title'=>'',
	'after_title'=>''
	) );

register_sidebar( array(
	'name'=>'Widget Categoria',
	'id'=>'widcatvid',
	'description'=>'widget para videos de categoria',
	'class'=>'widgetcatvid',
	'before_widget'=>'',
	'after_widget'=>'',
	'before_title'=>'',
	'after_title'=>''
	) );

// UPDATE TEMA DESDE WP
function github_check_update( $transient ) {
$usergithub=farkbarn;
$ramastable=master;
    if ( empty( $transient->checked ) ) {
        return $transient;
    }
    $theme_data = wp_get_theme(wp_get_theme()->template);
    $theme_slug = $theme_data->get_template();
    $theme_uri_slug = preg_replace('/-'.$ramastable.'$/', '', $theme_slug);
   $remote_version = '0.0.0';
   $style_css = wp_remote_get("https://raw.githubusercontent.com/".$usergithub."/".$theme_uri_slug."/".$ramastable."/style.css")['body'];
   if ( preg_match( '/^[ \t\/*#@]*' . preg_quote( 'Version', '/' ) . ':(.*)$/mi', $style_css, $match ) && $match[1] )
       $remote_version = _cleanup_header_comment( $match[1] );
   if (version_compare($theme_data->version, $remote_version, '<')) {
       $transient->response[$theme_slug] = array(
           'theme'       => $theme_slug,
           'new_version' => $remote_version,
           'url'         => 'https://github.com/'.$usergithub.'/'.$theme_uri_slug,
           'package'     => 'https://github.com/'.$usergithub.'/'.$theme_uri_slug.'/archive/'.$ramastable.'.zip',
       );
   }
   return $transient;
}
add_filter( 'pre_set_site_transient_update_themes', 'github_check_update' );

?>