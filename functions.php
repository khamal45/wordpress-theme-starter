<?php 
function load_css(){
    wp_register_style('pico','https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css',
    array(), false, 'all');
    wp_enqueue_style('pico');

    wp_register_style('main',get_template_directory_uri() . '/css/main.css',
    array(), false, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

add_theme_support( 'menus' );

add_theme_support( 'post-thumbnails' );

add_theme_support('widgets');

register_nav_menus( 

    array(
        'main-menu' => 'Main Menu Location',
        
    )

    );

register_sidebar( 

   array(
    'name' => 'Main Sidebar',
    'id' => 'main-sidebar',
    'before_title' => '<h2 class="main-sidebar">',
    'after_title' => '</h2>'

   )

   );

   register_sidebar( 

    array(
     'name' => 'Secondary Sidebar',
     'id' => 'secondary-sidebar',
     'before_title' => '<h2 class="secondary-sidebar">',
     'after_title' => '</h2>'
 
    )
 
    );

add_image_size('blog-large',800,400, true );    
?>


