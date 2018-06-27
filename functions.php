<?php

// STYLES
function zines_theme_styles() {

    wp_enqueue_style( 'skeleton_css', get_template_directory_uri() . '/css/skeleton.css' );

    wp_enqueue_style( 'slicknav_css', get_template_directory_uri() . '/css/slicknav.css' );

    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'layout_css', get_template_directory_uri() . '/css/layout2.css' );

    wp_enqueue_style( 'Abel_font', 'https://fonts.googleapis.com/css?family=Abel' );
    wp_enqueue_style( 'Lekton_font', 'https://fonts.googleapis.com/css?family=Lekton' );
}
add_action( 'wp_enqueue_scripts', 'zines_theme_styles' );


// SCRIPTS
function zines_theme_js() {

    wp_enqueue_script( 'slicknav-jQ_js', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '', true );

    wp_enqueue_script( 'slicknav_js', get_template_directory_uri() . '/js/slicknav.js', array('jquery', 'slicknav-jQ_js'), '', true );

        wp_enqueue_script( 'apps_js', get_template_directory_uri() . '/js/apps.js', array('jquery'), '', true );

}
add_action( 'wp_enqueue_scripts', 'zines_theme_js' );


// NAVIGATION
register_nav_menus( array( 'primary' => 'Primary Navigation' ) );


// PLUG-IN UPDATES
add_filter( 'auto_update_plugin', '__return_true' );


// TRANSLATION UPDATES
add_filter( 'auto_update_translation', '__return_true' );


// FEATURED IMAGES
add_theme_support( 'post-thumbnails' );

// SIDEBAR
function zines_widgets_init() {
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
}
add_action( 'widgets_init', 'zines_widgets_init' );


// CUSTOM POSTS
// events
function my_custom_posttypes() {

    $labels = array(
        'name'               => 'Events',
        'singular_name'      => 'Event',
        'menu_name'          => 'Events',
        'name_admin_bar'     => 'Events',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Event',
        'new_item'           => 'New Event',
        'edit_item'          => 'Edit Event',
        'view_item'          => 'View Event',
        'all_items'          => 'All Events',
        'search_items'       => 'Search Events',
        'parent_item_colon'  => 'Parent Events:',
        'not_found'          => 'No Events found.',
        'not_found_in_trash' => 'No Events found in Trash.',
    );
    // END LABELS ARRAY
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-id-alt',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'events' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
        'show_in_rest'       => true
    );
    // END ARGS ARRAY
    register_post_type( 'events', $args );

// RESOURCES
    $labels = array(
        'name'               => 'Resources',
        'singular_name'      => 'Resource',
        'menu_name'          => 'Resources',
        'name_admin_bar'     => 'Resources',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Resources',
        'new_item'           => 'New Resources',
        'edit_item'          => 'Edit Resources',
        'view_item'          => 'View Resources',
        'all_items'          => 'All Resources',
        'search_items'       => 'Search Resources',
        'parent_item_colon'  => 'Parent Resources:',
        'not_found'          => 'No Resources found.',
        'not_found_in_trash' => 'No Resources found in Trash.',
    );
    // END LABELS ARRAY
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-location-alt',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'resources' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
        'show_in_rest'       => true
    );
    // END ARGS ARRAY
    register_post_type( 'resources', $args );

}
// END FUNCTION MY_CUSTOM_POSTTYPES
add_action( 'init', 'my_custom_posttypes' );

// Flush rewrite rules to add "events" as a permalink slug
function my_rewrite_flush() {
    my_custom_posttypes();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );


// ATTACHMENT RE-DIRECT
function myprefix_redirect_attachment_page() {
    if ( is_attachment() ) {
        global $post;
        if ( $post && $post->post_parent ) {
            wp_redirect( esc_url( get_permalink( $post->post_parent ) ), 301 );
            exit;
        } else {
            wp_redirect( esc_url( home_url( '/' ) ), 301 );
            exit;
        }
    }
}
add_action( 'template_redirect', 'myprefix_redirect_attachment_page' );


// VISUAL EDITOR CUSTOMIZATION - TINY MCE

// REMOVE TEXT COLOR BUTTON
function zines_tinymce_buttons_2( $buttons ) {

    $remove = array( 'forecolor' );

    return array_diff( $buttons, $remove );
}
add_filter( 'mce_buttons_2', 'zines_tinymce_buttons_2' );

// FORMATSELECT DROPDOWN
function tiny_mce_remove_unused_formats($init) {

    $init['block_formats'] = 'Paragraph';
    return $init;
}

add_filter('tiny_mce_before_init', 'tiny_mce_remove_unused_formats' );


// EXCLUDE BROWSE-PAGE SLIDER FROM LAZY LOAD
function deactivate_on_front_page() {
    if ( is_front_page() ) {
        add_filter( 'do_rocket_lazyload', '__return_false' );
    }
}
add_filter( 'wp', __NAMESPACE__ . '\deactivate_on_front_page' );

?>

