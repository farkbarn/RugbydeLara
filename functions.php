<?php 
//add imagen destacada
add_theme_support('post-thumbnails');
// size para preestablecidos
set_post_thumbnail_size( 'thumbnail', 175,135, array('center','top') );
set_post_thumbnail_size( 'medium', 375,270, array('center','top') );
set_post_thumbnail_size( 'large', 780,535, array('center','top') );



function raiz() {echo get_template_directory_uri().'/';}




?>