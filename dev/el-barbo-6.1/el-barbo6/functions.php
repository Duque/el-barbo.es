<?php
// Registro del menú de WordPress

add_theme_support( 'nav-menus' );
add_theme_support( 'post-thumbnails' ); 

if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
          'inferior' => 'Menú inferior',
          'principal'   => 'Menú principal',
          'aside' => 'Menú aside'
        )
    );
}
?>



<?php
// Permitir comentarios encadenados
function enable_threaded_comments(){
    if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
       wp_enqueue_script('comment-reply');
    }
}
add_action('get_header', 'enable_threaded_comments');
?>



<?php
//Zona de widgets
//Ojo todos tienen clase widget, quitar o cambiar si es necesario
function mis_widgets(){
 register_sidebar(
   array(
       'name'          => __( 'Sidebar' ),
       'id'            => 'sidebar',
       'before_widget' => '<div class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3>',
       'after_title'   => '</h3>',
   )
 );

 register_sidebar(
   array(
       'name'          => __( 'Header' ),
       'id'            => 'header',
       'before_widget' => '<div class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '',
       'after_title'   => '',
   )
 );

 register_sidebar(
   array(
       'name'          => __( 'Post Title' ),
       'id'            => 'post-title',
       'before_widget' => '<div class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '',
       'after_title'   => '',
   )
 );

 register_sidebar(
   array(
       'name'          => __( 'Post footer' ),
       'id'            => 'post-footer',
       'before_widget' => '<div class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '',
       'after_title'   => '',
   )
 );
}
add_action('init','mis_widgets');
?>