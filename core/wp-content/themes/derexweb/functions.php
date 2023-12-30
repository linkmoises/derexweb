<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die('Por favor no cargue esta p&aacute;gina directamente. &iexcl;Gracias!'); }

if ( function_exists( 'add_theme_support' ) ) {

  add_theme_support( 'post-thumbnails' );
  add_image_size( 'blog-thumb', 800, 9999 );
  add_image_size( 'home-thumb', 640, 480, true );

}

//
// Recorta el extracto a n palabras
//
function gallo_excerpt( $length ) {
	return 10;
}
add_filter( 'excerpt_length', 'gallo_excerpt', 999 );

//
// Remueve el tag <p> en el extracto
//
remove_filter ('the_excerpt', 'wpautop');

//
// Añade formato scratch
//
function my_myme_types($mime_types) {
  $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
  $mime_types['sb3'] = 'application/zip'; //Adding photoshop files
  return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

//
// Añade la etiqueta de dificultad
//
add_action( 'init', 'dificultad_taxonomy', 0 );

function dificultad_taxonomy() {
// Etiquetas GUI
  $labels = array(
    'name' => _x( 'Dificultad', 'taxonomy general name' ),
    'singular_name' => _x( 'Dificultad', 'taxonomy singular name' ),
    'search_items' =>  __( 'Buscar Dificultad' ),
    'popular_items' => __( 'Popular' ),
    'all_items' => __( 'Todas las dificultades' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Editar Dificultad' ),
    'update_item' => __( 'Actualizar Dificultad' ),
    'add_new_item' => __( 'Añadir nueva dificultad' ),
    'new_item_name' => __( 'Nombre de nueva dificultad' ),
    'separate_items_with_commas' => __( 'Separar grados de dificultad con coma' ),
    'add_or_remove_items' => __( 'Añadir o eliminar dificultades' ),
    'choose_from_most_used' => __( 'Escoger de los más usados' ),
    'menu_name' => __( 'Dificultad' ),
  );

  register_taxonomy( 'dificultad', 'post' ,array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'dificultad' ),
  ));
}
