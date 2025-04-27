<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bytes_canada_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'bytes-canada' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'bytes-canada' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    // Guide detail page sidebar
    register_sidebar(
        array(
            'name'          => esc_html__( 'Guide Sidebar', 'bytes-canada' ),
            'id'            => 'guide-sidebar',
            'description'   => esc_html__( 'Add widgets here.', 'bytes-canada' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'bytes_canada_widgets_init' );
