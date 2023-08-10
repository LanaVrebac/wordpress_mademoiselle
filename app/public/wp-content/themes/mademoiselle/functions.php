<?php

//include css files

function mademoiselle_style(){
 wp_enqueue_style('Owl Carousel', get_template_directory_uri(). '/frontend/css/owl.carousel.css', array(), '2.3.4' );  
 wp_enqueue_style('Owl Carousel Theme', get_template_directory_uri(). '/frontend/css/owl.theme.default.css', array('Owl Carousel'), '2.3.4' ); 
 wp_enqueue_style('Theme', get_template_directory_uri(). '/frontend/css/theme.css', array(), '1.0' );  
 wp_enqueue_style('Style', get_template_directory_uri(). '/style.css', array(), '1.0' );  
 
}
add_action('wp_enqueue_scripts', 'mademoiselle_style');


//include JavaScript

function mademoiselle_scripts()
{
    wp_enqueue_script('jQuery', get_template_directory_uri() . '/frontend/js/jquery.min.js', array(), '3.4.1', true);    
    wp_enqueue_script('Bootstrap Bundle', get_template_directory_uri() . '/frontend/js/bootstrap.bundle.min.js', array('jQuery'), '4.3.1', true);   
    wp_enqueue_script('Font Awesome',  'https://kit.fontawesome.com/0b07ba6601.js' , array(), '6', true);
    wp_enqueue_script('Owl Carousel Js', get_template_directory_uri() . '/frontend/js/owl.carousel.min.js', array('jQuery'), '2.3.4', true);   
    wp_enqueue_script('main js', get_template_directory_uri() . '/frontend/js/main.js', array('jQuery'), '1.0', true);   
   
}

add_action('wp_enqueue_scripts', 'mademoiselle_scripts');

function mademoiselle_support(){
    //title tag support
    add_theme_support('title-tag');
    //custom logo support
    add_theme_support('custom-logo', array(
        'height'=> 33,
        'width'=>265,
        'flex-width'=> false,
        'flex-height'=> false
    ));
    //featured image support
    add_theme_support('post-thumbnails');
    
    //add image size
    add_image_size('blog-list', 367, 244, true);
    add_image_size('services-list', 564, 456, true);
    add_image_size('lead_carousel_image', 537, 500, true);
}
add_action('after_setup_theme', 'mademoiselle_support');

function mademoiselle_menus(){
    
register_nav_menus(array(
    'main-menu'=>'Main Menu',
    'social'=> 'Social'
));    
}

add_action('init', 'mademoiselle_menus');

function mademoiselle_create_post_type(){
    
    register_post_type('our_services', array(
      'labels'=>array(
          'name'=>'Services',
          'singular_name'=>'Service',
          'plural_name'=>'Services',
          'all_items'=>'All Services',
          'add_new'=>'Add New Service',
          'add_new_item'=>'Add New Service Item',
          'new_item'=>'New Service',
          'edit'=> 'Edit',
          'edit_item'=> 'Edit Service Item',
          'view'=>'View Service',
          'view_item'=>'view Service Item',
          'featured_image'=>'Featured Image for this Service'
      ) ,
        'public'=>true,
        'hierarhical'=>false,
        'show_in_menu'=>true,
        'menu_icon'=>'dashicons-admin-generic',
        'menu_position'=>16,
        'supports'=>array(
            'title',
            'thumbnail',
            'editor'
        )
    ));
}

add_action('init', 'mademoiselle_create_post_type' );

function mademoiselle_init_sidebar(){
    register_sidebar(array(
                'name'  =>  __('Primary Sidebar') ,
		'id'             => "sidebar",
		'description'    => 'about_sidebar',
		'class'          => '',
		'before_widget'  => '<li id="%1$s" class="widget %2$s">',
		'after_widget'   => "</li>\n",
		'before_title'   => '<h3 class="widgettitle mb-4 p-4">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false
    ));   
}

add_action('widgets_init', 'mademoiselle_init_sidebar');

require get_template_directory() . '/inc/widgets.php';
require get_template_directory() .'/inc/options.php';