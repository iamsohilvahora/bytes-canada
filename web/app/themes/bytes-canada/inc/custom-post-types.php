<?php
/**
* This File Contains Custom Post Types 
*/
// Case Study CPT
function bytes_canada_custom_casestudy_post_type(){
	$labels = array(
		'name'               => _x( 'Case Study', 'post type general name' ),
		'singular_name'      => _x( 'Case Study', 'post type singular name' ),
		'menu_name'          => _x( 'Case Study', 'admin menu'),
		'name_admin_bar'     => _x( 'Case Study', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New Case Study', 'case study' ),
		'add_new_item'       => __( 'Add New Case Study'),
		'new_item'           => __( 'New Case Study'),
		'edit_item'          => __( 'Edit Case Study'),
		'view_item'          => __( 'View Case Study'),
		'all_items'          => __( 'All Case Study'),
		'search_items'       => __( 'Search Case Study'),
		'parent_item_colon'  => __( 'Parent Case Study:'),
		'not_found'          => __( 'No Case Study found.'),
		'not_found_in_trash' => __( 'No Case Study found in Trash.' )
	);
	$args = array(
		'labels'             => $labels,
	 	'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'author', 'page-attributes'),
        'show_admin_column' => true,
        'exclude_from_search' => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'show_in_menu'          => true,
        'can_export' => true,
        'publicly_queryable'    => true,
        'hierarchical' => true,
        'capability_type' => 'post',
        'menu_position' => 6,
		'menu_icon'			 => 'dashicons-portfolio',
		'rewrite'            => array( 'slug' => 'case-study', 'with_front' => true, 'pages' => true, 'feeds' => false ),
	);
	register_post_type('casestudy', $args);

 	// Case Study taxonomy
	$labels = array(
		'name'              => _x( 'Case Study Type', 'taxonomy general name' ),
		'singular_name'     => _x( 'Case Study Type', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Case Study Types' ),
		'all_items'         => __( 'All Casestudies' ),
		'parent_item'       => __( 'Parent Case Study Type' ),
		'parent_item_colon' => __( 'Parent Case Study Type:' ),
		'edit_item'         => __( 'Edit Case Study Type' ),
		'update_item'       => __( 'Update Case Study Type' ),
		'add_new_item'      => __( 'Add New Case Study Type' ),
		'new_item_name'     => __( 'New Case Study Type' ),
		'menu_name'         => __( 'Case Study Type' ),
    );
    $args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'public' => false, // Set it to false, which will remove View link from backend and redirect user to homepage on clicking taxonomy link.
		'show_ui' => true, 
		'show_admin_column' => true, 
		'show_in_nav_menus' => true, 
		'show_tagcloud' => true,
		'query_var'         => true,
		'show_in_rest'      => true,
    );
    register_taxonomy('casestudy-category', 'casestudy', $args);
}
add_action('init', 'bytes_canada_custom_casestudy_post_type');
// Client Testimonial CPT
function bytes_canada_custom_client_testimonial_post_type(){
	$labels = array(
		'name'               => _x( 'Client Testimonials', 'post type general name' ),
		'singular_name'      => _x( 'Client Testimonial', 'post type singular name' ),
		'menu_name'          => _x( 'Client Testimonials', 'admin menu'),
		'name_admin_bar'     => _x( 'Client Testimonials', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New Client Testimonial', 'client testimonials' ),
		'add_new_item'       => __( 'Add New Client Testimonial'),
		'new_item'           => __( 'New Client Testimonial'),
		'edit_item'          => __( 'Edit Client Testimonial'),
		'view_item'          => __( 'View Client Testimonial'),
		'all_items'          => __( 'All Client Testimonial'),
		'search_items'       => __( 'Search Client Testimonial'),
		'parent_item_colon'  => __( 'Parent Client Testimonial:'),
		'not_found'          => __( 'No Client Testimonial found.'),
		'not_found_in_trash' => __( 'No Client Testimonial found in Trash.' )
	);
	$args = array(
		'labels'             => $labels,
	 	'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_in_rest' => false,
        'supports' => array('title', 'excerpt', 'author', 'page-attributes'),
        'show_admin_column' => true,
        'exclude_from_search' => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'show_in_menu'          => true,
        'can_export' => true,
        'publicly_queryable'    => true,
        'hierarchical' => true,
        'capability_type' => 'post',
        'menu_position' => 10,
        'menu_icon' => 'dashicons-testimonial',
        'rewrite' => array( 'slug' => 'testimonial', 'with_front' => true, 'pages' => true, 'feeds' => false ),
	);
	register_post_type('client_testimonials', $args);

	// Client Testimonials taxonomy
	$labels = array(
		'name'              => _x( 'Client Testimonial Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Client Testimonial Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Categories' ),
		'all_items'         => __( 'All Category' ),
		'parent_item'       => __( 'Parent Category' ),
		'parent_item_colon' => __( 'Parent Category:' ),
		'edit_item'         => __( 'Edit Category' ),
		'update_item'       => __( 'Update Category' ),
		'add_new_item'      => __( 'Add New Category' ),
		'new_item_name'     => __( 'New Client Testimonial Category' ),
		'menu_name'         => __( 'Client Testimonial Categories' ),
    );
    $args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'public'                     => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'query_var'         => true,
		'show_in_rest'      => false,
		'rewrite' => array('slug' => 'testimonial_cat'),
    );
    register_taxonomy('client-testimonial-category', 'client_testimonials', $args);
}
add_action('init', 'bytes_canada_custom_client_testimonial_post_type');
// Client Logo CPT
function bytes_canada_custom_client_logo_post_type(){
	$labels = array(
		'name'               => _x( 'Client Logo', 'post type general name' ),
		'singular_name'      => _x( 'Client Logo', 'post type singular name' ),
		'menu_name'          => _x( 'Client Logo', 'admin menu'),
		'name_admin_bar'     => _x( 'Client Logo', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New Client Logo', 'Client Logo' ),
		'add_new_item'       => __( 'Add New Client Logo'),
		'new_item'           => __( 'New Client Logo'),
		'edit_item'          => __( 'Edit Client Logo'),
		'view_item'          => __( 'View Client Logo'),
		'all_items'          => __( 'All Client Logo'),
		'search_items'       => __( 'Search Client Logo'),
		'parent_item_colon'  => __( 'Parent Client Logo:'),
		'not_found'          => __( 'No Client Logo found.'),
		'not_found_in_trash' => __( 'No Client Logo found in Trash.' )
	);
	$args = array(
		'labels'             => $labels,
	 	'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'show_in_rest' => false,
        'supports' => array('title', 'thumbnail'),
        'show_admin_column' => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'show_in_menu'          => true,
        'can_export' => true,
        'publicly_queryable'    => true,
        'exclude_from_search' => false,
        'query_var' => false,
        'hierarchical' => true,
        'capability_type' => 'post',
        'menu_position' => 12,
        'menu_icon' => 'dashicons-images-alt',
        'rewrite' => array( 'slug' => 'client_logo', 'with_front' => true, 'pages' => true, 'feeds' => false ),
	);
	register_post_type('client_logo', $args);
}
add_action('init', 'bytes_canada_custom_client_logo_post_type');
// Awards Logo CPT
function bytes_canada_custom_awards_logo_post_type(){
	$labels = array(
		'name'               => _x( 'Awards Logo', 'post type general name' ),
		'singular_name'      => _x( 'Awards Logo', 'post type singular name' ),
		'menu_name'          => _x( 'Awards Logo', 'admin menu'),
		'name_admin_bar'     => _x( 'Awards Logo', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New Awards Logo', 'Awards Logo' ),
		'add_new_item'       => __( 'Add New Awards Logo'),
		'new_item'           => __( 'New Awards Logo'),
		'edit_item'          => __( 'Edit Awards Logo'),
		'view_item'          => __( 'View Awards Logo'),
		'all_items'          => __( 'All Awards Logo'),
		'search_items'       => __( 'Search Awards Logo'),
		'parent_item_colon'  => __( 'Parent Awards Logo:'),
		'not_found'          => __( 'No Awards Logo found.'),
		'not_found_in_trash' => __( 'No Awards Logo found in Trash.' )
	);
	$args = array(
		'labels'             => $labels,
	 	'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'show_in_rest' => false,
        'supports' => array('title', 'thumbnail'),
        'show_admin_column' => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'show_in_menu'          => true,
        'can_export' => true,
        'publicly_queryable'    => true,
        'exclude_from_search' => false,
        'query_var' => false,
        'hierarchical' => true,
        'capability_type' => 'post',
        'menu_position' => 13,
        'menu_icon' => 'dashicons-awards',
        'rewrite' => array( 'slug' => 'awards', 'with_front' => true, 'pages' => true, 'feeds' => false ),
	);
	register_post_type('awards_logo', $args);
}
add_action('init', 'bytes_canada_custom_awards_logo_post_type');
/**
 * Add category taxonomy for page type
 */
function bytes_canada_pages_taxonomy(){
    register_taxonomy(
        'page-category',
        'page',
        array(
            'label' => __( 'Categories' ),
            'rewrite' => array( 'slug' => 'page-category' ),
            'hierarchical' => true,
            'public' => false,
    		'rewrite' => false,
    		'show_ui' => true,
    		'show_in_rest' => true,
        )
    );
}
add_action('init', 'bytes_canada_pages_taxonomy');
/**
 * Add category taxonomy for post type
 */
function bytes_canada_post_taxonomy(){
    register_taxonomy(
        'category',
        'post',
        array(
            'label' => __( 'Categories' ),
            'rewrite' => array( 'slug' => 'category' ),
            'hierarchical' => true,
            'public' => false,
    		'rewrite' => false,
    		'show_ui' => true,
    		'show_in_rest' => true,
            )
        );
}
add_action('init', 'bytes_canada_post_taxonomy');
