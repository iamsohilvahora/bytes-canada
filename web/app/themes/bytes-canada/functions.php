<?php
/**
 * bytes canada functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bytes_canada
 */
if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bytes_canada_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on bytes canada, use a find and replace
	 * to change 'bytes-canada' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('bytes-canada', get_template_directory() . '/languages');
	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'bytes-canada'),
		)
	);
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'bytes_canada_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');
	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'bytes_canada_setup');
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bytes_canada_content_width()
{
	$GLOBALS['content_width'] = apply_filters('bytes_canada_content_width', 640);
}
add_action('after_setup_theme', 'bytes_canada_content_width', 0);
/**
 * Enqueue scripts and styles.
 */
function bytes_canada_scripts()
{
	wp_enqueue_style('bytes-canada-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('bytes-canada-style', 'rtl', 'replace');
	wp_enqueue_script('bytes-canada-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true);
	// ajax js
	wp_enqueue_script('ajax-js', trailingslashit(get_stylesheet_directory_uri()) . '/assets/js/ajax.js', array(), _S_VERSION, false);
	wp_enqueue_style('bytes-canada-swiper-style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_script('bytes-canada-swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), _S_VERSION, false);
	wp_enqueue_script(
		'ajax-js',
		'post_list',
		array(
			'ajaxurl' => admin_url('admin-ajax.php')
		)
	);
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
	if (is_singular('casestudy')) {
		wp_enqueue_style('casestudy-banner', get_template_directory_uri() . '/assets/css/custom-blocks-css/service-banner.css', array(), _S_VERSION, 'all');
		wp_enqueue_style('casestudy-content', get_template_directory_uri() . '/assets/css/case-study-content.css', array(), _S_VERSION, 'all');
		wp_enqueue_style('casestudy-project_summary', get_template_directory_uri() . '/assets/css/project-summary.css', array(), _S_VERSION, 'all');
		wp_enqueue_style('inner-casestudy-images', get_template_directory_uri() . '/assets/css/inner-casestudy-images.css', array(), _S_VERSION, 'all');
		wp_enqueue_style('casestudy-important-features', get_template_directory_uri() . '/assets/css/important-features.css', array(), _S_VERSION, 'all');
		wp_enqueue_style('casestudy-bottom-banner-image', get_template_directory_uri() . '/assets/css/bottom-banner-image.css', array(), _S_VERSION, 'all');
		wp_enqueue_style('casestudies', get_template_directory_uri() . '/assets/css/select-casestudies.css', array(), _S_VERSION, 'all');
		wp_enqueue_style('case-study-style', get_template_directory_uri() . '/assets/css/custom-blocks-css/case-study.css', array(), _S_VERSION, 'all');
		wp_enqueue_script('case-study-script', get_template_directory_uri() . '/assets/js/custom-blocks-js/case-study.js', array(), _S_VERSION, false);
		wp_enqueue_script('case-study-video', get_template_directory_uri() . '/assets/js/custom-blocks-js/case-study-video.js', array(), _S_VERSION, false);
	}
	if (is_singular('guides') || is_singular('post')) {
		wp_enqueue_style('guide-style', get_template_directory_uri() . '/assets/css/guide.css', array(), _S_VERSION, 'all');
		wp_enqueue_script('guid-inner', get_template_directory_uri() . '/assets/js/guid-inner.js', array(), _S_VERSION, false);
	}
	if (is_singular('guides') || is_singular('casestudy') || is_singular('post')) {
		wp_enqueue_style('casestudies-animate-text', get_template_directory_uri() . '/assets/css/custom-blocks-css/animate-text.css', array(), _S_VERSION, 'all');
		wp_enqueue_style('casestudies-cup-of-coffee', get_template_directory_uri() . '/assets/css/custom-blocks-css/cup-of-coffee.css', array(), _S_VERSION, 'all');
		wp_enqueue_script('casestudies-animate-text-js', get_template_directory_uri() . '/assets/js/custom-blocks-js/animate-text.js', array(), _S_VERSION, false);
		wp_enqueue_script('casestudies-cup-of-coffee-js', get_template_directory_uri() . '/assets/js/custom-blocks-js/cup-of-coffee.js', array(), _S_VERSION, false);
	}
	if (is_page('privacy-policy')) {
		wp_enqueue_style('privacy-policy-style', get_template_directory_uri() . '/assets/css/privacy-policy.css', array(), _S_VERSION, 'all');
	}
}
add_action('wp_enqueue_scripts', 'bytes_canada_scripts');
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Load all widgets
 */
require get_template_directory() . '/inc/widgets.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
/**
 * Include ACF Custom Block
 */
require get_stylesheet_directory() . '/inc/custom-blocks-registration.php';
/**
 * Load Custom Post Type
 */
require get_template_directory() . '/inc/custom-post-types.php';
