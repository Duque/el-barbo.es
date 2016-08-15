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
	//  Main Sidebar
	if(function_exists('register_sidebar'))
	    register_sidebar(array(
		    'name' => 'Main Sidebar',
		    'before_widget' => '<hr>',
		    'after_widget' => '',
		    'before_title' => '<h3>',
		    'after_title' => '</h3>',
	));

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



