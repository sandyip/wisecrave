<?php 
function tekgro_styles(){
  wp_register_style('custom_style' , get_template_directory_uri() .'/style.css');
  wp_enqueue_style('custom_style');

  wp_register_style('googleapis' , 'https://fonts.googleapis.com/css?family=Roboto:300,400,700');
  wp_enqueue_style('googleapis');

  wp_register_style('fonts' , 'https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&amp;display=swap');
  wp_enqueue_style('fonts');

  wp_register_style('bootstrap' , get_template_directory_uri() .'/css/bootstrap.min.css');
  wp_enqueue_style('bootstrap');

  wp_register_style('all' , get_template_directory_uri() .'/css/all.css');
  wp_enqueue_style('all');

  wp_register_style('flaticon' , get_template_directory_uri() .'/css/flaticon.css');
  wp_enqueue_style('flaticon');

  wp_register_style('menu' , get_template_directory_uri() .'/css/menu.css');
  wp_enqueue_style('menu');

  wp_register_style('effect' , get_template_directory_uri() .'/css/dropdown-effects/fade-down.css');
  wp_enqueue_style('effect');

  wp_register_style('tweenmax' , get_template_directory_uri() .'/css/tweenmax.css');
  wp_enqueue_style('tweenmax');

  wp_register_style('magnific' , get_template_directory_uri() .'/css/magnific-popup.css');
  wp_enqueue_style('magnific');

  wp_register_style('carousel' , get_template_directory_uri() .'/css/owl.carousel.min.css');
  wp_enqueue_style('carousel');

  wp_register_style('theme' , get_template_directory_uri() .'/css/owl.theme.default.min.css');
  wp_enqueue_style('theme');

  wp_register_style('style' , get_template_directory_uri() .'/css/style.css');
  wp_enqueue_style('style');

  wp_register_style('responsive' , get_template_directory_uri() .'/css/responsive.css');
  wp_enqueue_style('responsive');

  wp_register_style('settings' , get_template_directory_uri() .'/revolution/css/settings.css');
  wp_enqueue_style('settings');

  wp_register_style('layers' , get_template_directory_uri() .'/revolution/css/layers.css');
  wp_enqueue_style('layers');

  wp_register_style('navigation' , get_template_directory_uri() .'/revolution/css/navigation.css');
  wp_enqueue_style('navigation');
}
add_action("wp_enqueue_scripts","tekgro_styles");


function tekgro_scripts(){
  wp_register_script('jsjquery',get_template_directory_uri(). '/js/jquery-3.3.1.min.js',array(),1,1,1);
  wp_enqueue_script('jsjquery');

  wp_register_script('cloudflare', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',array(),1,1,1);
  wp_enqueue_script('cloudflare');

  wp_register_script('jsbootstrap',get_template_directory_uri(). '/js/bootstrap.min.js',array(),1,1,1);
  wp_enqueue_script('jsbootstrap');

  wp_register_script('modernizr',get_template_directory_uri(). '/js/modernizr.custom.js',array(),1,1,1);
  wp_enqueue_script('modernizr');

  wp_register_script('easing',get_template_directory_uri(). '/js/jquery.easing.js',array(),1,1,1);
  wp_enqueue_script('easing');
  wp_register_script('appear',get_template_directory_uri(). '/js/jquery.appear.js',array(),1,1,1);
  wp_enqueue_script('appear');

  wp_register_script('stellar',get_template_directory_uri(). '/js/jquery.stellar.min.js',array(),1,1,1);
  wp_enqueue_script('stellar');

  wp_register_script('jsmenu',get_template_directory_uri(). '/js/menu.js',array(),1,1,1);
  wp_enqueue_script('jsmenu');

  wp_register_script('materialize',get_template_directory_uri(). '/js/materialize.js',array(),1,1,1);
  wp_enqueue_script('materialize');

   wp_register_script('scrollto',get_template_directory_uri(). '/js/jquery.scrollto.js',array(),1,1,1);
  wp_enqueue_script('scrollto');

   wp_register_script('jscarousel',get_template_directory_uri(). '/js/owl.carousel.min.js',array(),1,1,1);
  wp_enqueue_script('jscarousel');

   wp_register_script('imagesloaded',get_template_directory_uri(). '/js/imagesloaded.pkgd.min.js',array(),1,1,1);
  wp_enqueue_script('imagesloaded');

   wp_register_script('isotope',get_template_directory_uri(). '/js/isotope.pkgd.min.js',array(),1,1,1);
  wp_enqueue_script('isotope');

   wp_register_script('jsmagnific',get_template_directory_uri(). '/js/jquery.magnific-popup.min.js',array(),1,1,1);
  wp_enqueue_script('jsmagnific');

   wp_register_script('request',get_template_directory_uri(). '/js/hero-request-form.js',array(),1,1,1);
  wp_enqueue_script('request');

   wp_register_script('register',get_template_directory_uri(). '/js/hero-register-form.js',array(),1,1,1);
  wp_enqueue_script('register');

   wp_register_script('form',get_template_directory_uri(). '/js/request-form.js',array(),1,1,1);
  wp_enqueue_script('form');

   wp_register_script('contact',get_template_directory_uri(). '/js/contact-form.js',array(),1,1,1);
  wp_enqueue_script('contact');

   wp_register_script('comment',get_template_directory_uri(). '/js/comment-form.js',array(),1,1,1);
  wp_enqueue_script('comment');


  wp_register_script('ajaxchimp',get_template_directory_uri(). '/js/jquery.ajaxchimp.min.js',array(),1,1,1);
  wp_enqueue_script('ajaxchimp');

  wp_register_script('validate',get_template_directory_uri(). '/js/jquery.validate.min.js',array(),1,1,1);
  wp_enqueue_script('validate');

  wp_register_script('themepunch',get_template_directory_uri(). '/revolution/js/jquery.themepunch.tools.min.js',array(),1,1,1);
  wp_enqueue_script('themepunch');

  wp_register_script('revolution',get_template_directory_uri(). '/revolution/js/jquery.themepunch.revolution.min.js',array(),1,1,1);
  wp_enqueue_script('revolution');

  wp_register_script('actions',get_template_directory_uri(). '/revolution/js/extensions/revolution.extension.actions.min.js',array(),1,1,1);
  wp_enqueue_script('actions');

  wp_register_script('carouseljs',get_template_directory_uri(). '/revolution/js/extensions/revolution.extension.carousel.min.js',array(),1,1,1);
  wp_enqueue_script('carouseljs');

  wp_register_script('kenburn',get_template_directory_uri(). '/revolution/js/extensions/revolution.extension.kenburn.min.js',array(),1,1,1);
  wp_enqueue_script('kenburn');

  wp_register_script('layeranimation',get_template_directory_uri(). '/revolution/js/extensions/revolution.extension.layeranimation.min.js',array(),1,1,1);
  wp_enqueue_script('layeranimation');

  wp_register_script('migration',get_template_directory_uri(). '/revolution/js/extensions/revolution.extension.migration.min.js',array(),1,1,1);
  wp_enqueue_script('migration');

  wp_register_script('navigation',get_template_directory_uri(). '/revolution/js/extensions/revolution.extension.navigation.min.js',array(),1,1,1);
  wp_enqueue_script('navigation');

  wp_register_script('parallax',get_template_directory_uri(). '/revolution/js/extensions/revolution.extension.parallax.min.js',array(),1,1,1);
  wp_enqueue_script('parallax');

  wp_register_script('slideanims',get_template_directory_uri(). '/revolution/js/extensions/revolution.extension.slideanims.min.js',array(),1,1,1);
  wp_enqueue_script('slideanims');

  wp_register_script('video',get_template_directory_uri(). '/revolution/js/extensions/revolution.extension.video.min.js',array(),1,1,1);
  wp_enqueue_script('video');

  wp_register_script('slider',get_template_directory_uri(). '/js/rev-slider-custom.js',array(),1,1,1);
  wp_enqueue_script('slider');

  wp_register_script('custom',get_template_directory_uri(). '/js/custom.js',array(),1,1,1);
  wp_enqueue_script('custom');

}
add_action("wp_enqueue_scripts","tekgro_scripts");
 
 



add_theme_support( 'post-thumbnails' );
the_post_thumbnail( 'full' );


 

  add_filter('use_block_editor_for_post', '__return_false');
  ?>
  <?php

function register_menu(){
	register_nav_menus(
		array(
			'primary-menu' => 'Primary Main Menu',
			'footer-menu'  => 'Footer Menu',
		)
	);

}
add_action("init", "register_menu");

//clients
/*
* Creating a function to create our CPT
*/
 
function client_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Clients', 'Post Type General Name', 'royal' ),
        'singular_name'       => _x( 'Client', 'Post Type Singular Name', 'royal' ),
        'menu_name'           => __( 'Clients', 'royal' ),
        'parent_item_colon'   => __( 'Parent Client', 'royal' ),
        'all_items'           => __( 'All Clients', 'royal' ),
        'view_item'           => __( 'View Client', 'royal' ),
        'add_new_item'        => __( 'Add New Client', 'royal' ),
        'add_new'             => __( 'Add New', 'royal' ),
        'edit_item'           => __( 'Edit Client', 'royal' ),
        'update_item'         => __( 'Update Client', 'royal' ),
        'search_items'        => __( 'Search Client', 'royal' ),
        'not_found'           => __( 'Not Found', 'royal' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'royal' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'clients', 'royal' ),
        'description'         => __( 'Client news and reviews', 'royal' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor','thumbnail', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 7,
        'menu_icon'           => 'dashicons-admin-users',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'clients', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'client_post_type', 0 );

//Courses
/*
* Creating a function to create our CPT
*/
 
function course_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Courses', 'Post Type General Name', 'royal' ),
        'singular_name'       => _x( 'Course', 'Post Type Singular Name', 'royal' ),
        'menu_name'           => __( 'Courses', 'royal' ),
        'parent_item_colon'   => __( 'Parent Course', 'royal' ),
        'all_items'           => __( 'All Courses', 'royal' ),
        'view_item'           => __( 'View Course', 'royal' ),
        'add_new_item'        => __( 'Add New Course', 'royal' ),
        'add_new'             => __( 'Add New', 'royal' ),
        'edit_item'           => __( 'Edit Course', 'royal' ),
        'update_item'         => __( 'Update Course', 'royal' ),
        'search_items'        => __( 'Search Course', 'royal' ),
        'not_found'           => __( 'Not Found', 'royal' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'royal' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'courses', 'royal' ),
        'description'         => __( 'Course news and reviews', 'royal' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor','thumbnail', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 7,
        'menu_icon'           => 'dashicons-open-folder',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'courses', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'course_post_type', 0 );

//Countries
/*
* Creating a function to create our CPT
*/
 
function abroad_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Abroads', 'Post Type General Name', 'royal' ),
        'singular_name'       => _x( 'Abroad', 'Post Type Singular Name', 'royal' ),
        'menu_name'           => __( 'Abroads', 'royal' ),
        'parent_item_colon'   => __( 'Parent Abroad', 'royal' ),
        'all_items'           => __( 'All Abroads', 'royal' ),
        'view_item'           => __( 'View Abroad', 'royal' ),
        'add_new_item'        => __( 'Add New Abroad', 'royal' ),
        'add_new'             => __( 'Add New', 'royal' ),
        'edit_item'           => __( 'Edit Abroad', 'royal' ),
        'update_item'         => __( 'Update Abroad', 'royal' ),
        'search_items'        => __( 'Search Abroad', 'royal' ),
        'not_found'           => __( 'Not Found', 'royal' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'royal' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'abroads', 'royal' ),
        'description'         => __( 'Abroad news and reviews', 'royal' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor',  'thumbnail' ),
        // You can associate this CPT with a taxonomy or abroad taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 8,
        'menu_icon'           =>'dashicons-airplane',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'abroads', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'abroad_post_type', 0 );

//sliders
/*
* Creating a function to create our CPT
*/
 
function slider_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Sliders', 'Post Type General Name', 'royal' ),
        'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'royal' ),
        'menu_name'           => __( 'Sliders', 'royal' ),
        'parent_item_colon'   => __( 'Parent Slider', 'royal' ),
        'all_items'           => __( 'All Sliders', 'royal' ),
        'view_item'           => __( 'View Slider', 'royal' ),
        'add_new_item'        => __( 'Add New Slider', 'royal' ),
        'add_new'             => __( 'Add New', 'royal' ),
        'edit_item'           => __( 'Edit Slider', 'royal' ),
        'update_item'         => __( 'Update Slider', 'royal' ),
        'search_items'        => __( 'Search Slider', 'royal' ),
        'not_found'           => __( 'Not Found', 'royal' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'royal' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'sliders', 'royal' ),
        'description'         => __( 'Slider news and reviews', 'royal' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 7,
        'menu_icon'           =>'dashicons-images-alt',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'sliders', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'slider_post_type', 0 );

//Widgets
 add_theme_support('widgets');

 //Register Sidebars

function wisecrave_sidebars(){
    register_sidebar(array(
        'name' => 'Course Sidebar',
        'id' => 'course-sidebar',
        'before-title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
        
    ));

     register_sidebar(array(
        'name' => 'Service Sidebar',
        'id' => 'service-sidebar',
        'before-title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
        
    ));

    register_sidebar(array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'before-title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
        
    ));
}
add_action('widgets_init','wisecrave_sidebars');

add_theme_support('custom-logo');

//post time function

function my_post_time_ago_function() {
return sprintf( esc_html__( '%s ago', 'textdomain' ), human_time_diff(get_the_time ( 'U' ), current_time( 'timestamp' ) ) );
}
add_filter( 'the_time', 'my_post_time_ago_function' );

//post reading time function
/**
 * Function calculate the estimates reading time of the post content.
 * @param string $content Post content.
 * @return string estimated reading time.
 */
function get_estimated_reading_time( $content = '') {
    $wpm = 265;
    $text_content = strip_shortcodes( $content );   // Remove shortcodes
    $str_content = strip_tags( $text_content );     // remove tags
    $word_count = str_word_count( $str_content );
    $readtime = ceil( $word_count / $wpm );

    if ($readtime == 1) {
        $postfix = " Minute";
    } else {
        $postfix = " Minutes";
    }
    $readingtime = $readtime . $postfix;
    return $readingtime;
}
include (get_template_directory() .'/customizer/theme-customizer.php');


//Gallery cpt
/*
* Creating a function to create our CPT
*/
 
function gallery_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Gallerys', 'Post Type General Name', 'royal' ),
        'singular_name'       => _x( 'Gallery', 'Post Type Singular Name', 'royal' ),
        'menu_name'           => __( 'Gallery', 'royal' ),
        'parent_item_colon'   => __( 'Parent Gallery', 'royal' ),
        'all_items'           => __( 'All Gallerys', 'royal' ),
        'view_item'           => __( 'View Gallery', 'royal' ),
        'add_new_item'        => __( 'Add New Gallery', 'royal' ),
        'add_new'             => __( 'Add New', 'royal' ),
        'edit_item'           => __( 'Edit Gallery', 'royal' ),
        'update_item'         => __( 'Update Gallery', 'royal' ),
        'search_items'        => __( 'Search Gallery', 'royal' ),
        'not_found'           => __( 'Not Found', 'royal' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'royal' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'gallerys', 'royal' ),
        'description'         => __( 'Gallery news and reviews', 'royal' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title','thumbnail' ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-image',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'gallerys', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'gallery_post_type', 0 );



//events
/*
* Creating a function to create our CPT
*/
 
function event_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Events', 'Post Type General Name', 'royal' ),
        'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'royal' ),
        'menu_name'           => __( 'Events', 'royal' ),
        'parent_item_colon'   => __( 'Parent Event', 'royal' ),
        'all_items'           => __( 'All Events', 'royal' ),
        'view_item'           => __( 'View Event', 'royal' ),
        'add_new_item'        => __( 'Add New Event', 'royal' ),
        'add_new'             => __( 'Add New', 'royal' ),
        'edit_item'           => __( 'Edit Event', 'royal' ),
        'update_item'         => __( 'Update Event', 'royal' ),
        'search_items'        => __( 'Search Event', 'royal' ),
        'not_found'           => __( 'Not Found', 'royal' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'royal' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'events', 'royal' ),
        'description'         => __( 'Event news and reviews', 'royal' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-calendar',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'events', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'event_post_type', 0 );


//Brands

/*
* Creating a function to create our CPT
*/
 
function brand_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Brands', 'Post Type General Name', 'royal' ),
        'singular_name'       => _x( 'Brand', 'Post Type Singular Name', 'royal' ),
        'menu_name'           => __( 'Brands', 'royal' ),
        'parent_item_colon'   => __( 'Parent Brand', 'royal' ),
        'all_items'           => __( 'All Brands', 'royal' ),
        'view_item'           => __( 'View Brand', 'royal' ),
        'add_new_item'        => __( 'Add New Brand', 'royal' ),
        'add_new'             => __( 'Add New', 'royal' ),
        'edit_item'           => __( 'Edit Brand', 'royal' ),
        'update_item'         => __( 'Update Brand', 'royal' ),
        'search_items'        => __( 'Search Brand', 'royal' ),
        'not_found'           => __( 'Not Found', 'royal' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'royal' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'brands', 'royal' ),
        'description'         => __( 'Brand news and reviews', 'royal' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title',  'thumbnail',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-editor-bold',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'brands', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'brand_post_type', 0 );


//pagination

?>
 
 

 