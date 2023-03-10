<?php


function rfinance_child_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), rand() );
}
add_action( 'wp_enqueue_scripts', 'rfinance_child_style', 100 );



function create_blog() {

    register_post_type( 'blogs',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Blogs' ),
                'singular_name' => __( 'Blog' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'blogs'),
            'show_in_rest' => true,
			'menu_icon' => 'dashicons-edit-page',
            'supports' => array('page-attributes', 'title', 'editor','thumbnail', 'excerpt' )

        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_blog' );




add_action( 'init', 'cp_change_post_object' );
// Change dashboard Posts to News
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'News';
        $labels->singular_name = 'News';
        $labels->add_new = 'Add New';
        $labels->add_new_item = 'Add New';
        $labels->edit_item = 'Edit News';
        $labels->new_item = 'News';
        $labels->view_item = 'View News';
        $labels->search_items = 'Search News';
        $labels->not_found = 'No News found';
        $labels->not_found_in_trash = 'No News found in Trash';
        $labels->all_items = 'All News';
        $labels->menu_name = 'News';
        $labels->name_admin_bar = 'News';
}


function arphabet_widgets_init() {
    register_sidebar( array(
        'name' => 'Dropdown widget',
        'id' => 'dropdown_widget',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );





 