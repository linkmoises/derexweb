<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die('Por favor no cargue esta p&aacute;gina directamente. &iexcl;Gracias!'); }

if ( function_exists( 'add_theme_support' ) ) {

  add_theme_support( 'post-thumbnails' );
  add_image_size( 'blog-thumb', 800, 9999 );
  add_image_size( 'home-thumb', 640, 480, true );

}
