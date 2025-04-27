<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package bytes_canada
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function bytes_canada_body_classes($classes)
{
    // Adds a class of hfeed to non-singular pages.
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if (!is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
}
add_filter('body_class', 'bytes_canada_body_classes');
/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function bytes_canada_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('wp_head', 'bytes_canada_pingback_header');
/**
 * Button Group For Clone
 */
function button_group($field_name)
{
    if (!empty($field_name) && is_array($field_name)) {
        $button_link = '';
        $button_link_type = $field_name['button_link'];
        $internal_link = $field_name['button_internal_link'];
        $external_link = $field_name['button_external_link'];
        if (($button_link_type == 'button_internal_link') && !empty($internal_link)) {
            $button_link = bytes_canada_external_link($internal_link, false);
        } elseif (($button_link_type == 'button_external_link') && !empty($external_link)) {
            $button_link = bytes_canada_external_link($external_link, true);
        }
        if (!empty($button_link)) {
            return $button_link;
        } else {
            return '';
        }
    } else {
        return;
    }
}
function bytes_canada_external_link($link = null, $target = null)
{
    if (empty($link)) {
        return;
    }
    $href_link = null;
    if (!empty($link) && $link != null) {
        if ($link == '#') {
            $href_link = $link;
            $target = '';
        } else {
            $url = trim($link);
            if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
                $href_link = "http://" . $url;
            } else {
                $href_link = trim($link);
            }
        }
    }
    if ($target == true) {
        return 'href="' . $href_link . '" target="_blank"';
    } else {
        return 'href="' . $href_link . '"';
    }
}
/**
 * Set acf option page
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
        array(
            'page_title' => 'Theme General Settings',
            'menu_title' => 'Theme Settings',
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false
        )
    );
}
/**
 * Allowed mime types
 */
function bytes_canada_custom_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    $mimes['webp'] = 'image/webp';
    return $mimes;
}
add_filter('upload_mimes', 'bytes_canada_custom_mime_types');
/**
 * Custom name validation in cf7
 */
function bytes_canada_custom_name_validation_filter($result, $tag)
{
    if ("your_name" == $tag->name) {
        $name = isset($_POST[$tag->name]) ? $_POST[$tag->name] : '';
        if ($name != "" && !preg_match("/^[a-zA-Z ]*$/", $name)) {
            $result->invalidate($tag, "Please Enter Your valid name.");
        }
    }
    return $result;
}
add_filter('wpcf7_validate_text', 'bytes_canada_custom_name_validation_filter', 20, 2);
add_filter('wpcf7_validate_text*', 'bytes_canada_custom_name_validation_filter', 20, 2);
/**
 * Custom phone number validation in cf7
 */
function bytes_canada_filter_wpcf7_is_tel($result, $tel)
{
    $result = preg_match('/^\(?\+?([0-9]{1,5})?\)?[-\. ]?(\d{10})$/', $tel);
    return $result;
}
add_filter('wpcf7_is_tel', 'bytes_canada_filter_wpcf7_is_tel', 10, 2);
add_filter('wpcf7_is_tel*', 'bytes_canada_filter_wpcf7_is_tel', 10, 2);
/**
 * Fire AJAX action for both logged in and non-logged in users (Load more button)
 */
function bytes_canada_loadmore_casestudy_ajax_handler()
{
    $posts_per_page = (isset($_POST['post_per_page'])) ? $_POST['post_per_page'] : 4;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 1;
    $offset = (isset($_POST['offset'])) ? $_POST['offset'] : 4;
    // $pagedata = $posts_per_page * $page - $posts_per_page;
    $pagedata = $offset * $page;
    $default_image = get_field('select_image', 'options');
    // get total case-study post  
    $total_post_args = array(
        'post_type' => 'casestudy',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    );
    $the_query = new WP_Query($total_post_args);
    $totalpost = $the_query->found_posts; // total casestudy post
    ob_start();
    if ($_POST['load_more_post'] == "load_more_post"):
        $post_args = array(
            'post_type' => 'casestudy',
            'post_status' => 'publish',
            'posts_per_page' => $posts_per_page,
            'offset' => $pagedata,
        );
        $arr_posts = new WP_Query($post_args);
        if ($arr_posts->have_posts()):
            while ($arr_posts->have_posts()):
                $arr_posts->the_post();
                $casestudy_id = get_the_id();
                $post_categories = get_the_terms($casestudy_id, 'casestudy-category'); // get categories
                $cat_name = "";
                if (!empty($post_categories)):
                    foreach ($post_categories as $post_category):
                        $cat_name .= $post_category->name . ", ";
                    endforeach;
                endif;
                $case_studies = get_field('case_studies', $casestudy_id);
                if ($case_studies) {
                    // Get the "casestudy_video" section.
                    $casestudy_video_section = false;
                    foreach ($case_studies as $case_study) {
                        if ($case_study['acf_fc_layout'] === 'casestudy_video') {
                            $casestudy_video_section = $case_study;
                            break; // Stop the loop once we find the "casestudy_video" section.
                        }
                    }
                    // Check if "casestudy_video" section exists and access its fields.
                    if ($casestudy_video_section) {
                        $casestudy_video = $casestudy_video_section['select_video'];
                        $video_image = $casestudy_video['video_image'];
                        if (!empty($video_image)) {
                            $video_image = $video_image['url'];
                        } else {
                            $video_image = $default_image['url'];
                        }
                        $video_type = $casestudy_video['video_type'];
                        if ($video_type == "internal_link") {
                            $video_url = $casestudy_video['internal_video']['url'];
                        } else {
                            $video_url = $casestudy_video['external_video'];
                        }
                    }
                } ?>
                <div class="case-videos-box">
                    <a href="<?php echo get_the_permalink(); ?>" class="case-videos-box-link">
                        <?php if (!empty($video_url) && ($video_type == "internal_link")): ?>
                                <video width="100%" autoplay muted loop playsinline class="connect-bg case-videos-box-video"
                                    poster="<?php echo $video_image; ?>">
                                    <source src="<?php echo $video_url; ?>" type="video/mp4">
                                    <source src="<?php echo $video_url; ?>" type="video/ogg">
                                </video>
                        <?php endif; ?>
                        <?php if (!empty($video_url) && ($video_type == "external_link")): ?>
                            <iframe width="560"  class="connect-bg case-videos-box-video" height="424" src="<?php echo $video_url; ?>?autoplay=1&controls=0&mute=1&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; autostop; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <?php endif; ?>
                        <h3 class="h6 case-videos-box-title">
                            <?php echo get_the_title(); ?><i class="case-videos-box-arrow"></i>
                        </h3>
                        <p class="case-videos-box-data">
                            <?php echo rtrim($cat_name, ', '); ?>
                        </p>
                    </a>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        endif;
    endif;
    $post_html = ob_get_contents();
    ob_end_clean();
    echo json_encode(
        array(
            'max_pages' => ceil($totalpost / $posts_per_page),
            'page' => $page + 1,
            'total_post' => $totalpost,
            'posts_per_page' => $posts_per_page,
            'content' => $post_html,
        )
    );
    exit;
}
add_action('wp_ajax_get_more_posts', 'bytes_canada_loadmore_casestudy_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_get_more_posts', 'bytes_canada_loadmore_casestudy_ajax_handler'); // wp_ajax_nopriv_{action}

/**
 * Load Resources post on click of page number button or category
 */
function bytes_canada_loadmore_resources_ajax_handler()
{
    // Set default variables
    if (isset($_POST['page'])) {
        // Sanitize the received page   
        $page = sanitize_text_field($_POST['page']);
        $cur_page = $page;
        $page -= 1;
        $per_page = (isset($_POST['per_page']) && $_POST['per_page'] != "") ? $_POST['per_page'] : 6; //set the per page limit
        $previous_btn = true;
        $next_btn = true;
        $first_btn = true;
        $last_btn = true;
        $start = $page * $per_page;
        $size = (isset($_POST['size']) && $_POST['size'] != "") ? $_POST['size'] : 0;
        $taxonomy = "category";
        if (isset($_POST['category_post']) && $_POST['category_post'] == "category_post" && $size != 0) {
            $query = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'orderby' => 'post_date',
                'order' => 'DESC',
                'posts_per_page' => $per_page,
                'offset' => $start
            );
            $size = explode(',', $size);
            $term_size = array(
                array(
                    'taxonomy' => $taxonomy,
                    'field' => 'term_id',
                    'terms' => $size,
                ),
            );
            $query['tax_query'] = $term_size;
            $all_blog_posts = new WP_Query($query); // run wp query
            $count = new WP_Query(
                array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => $taxonomy,
                            'field' => 'term_id',
                            'terms' => $size,
                        ),
                    ),
                )
            );
        } else {
            $all_blog_posts = new WP_Query(
                array(
                    'post_type' => 'post',
                    'post_status ' => 'publish',
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'posts_per_page' => $per_page,
                    'offset' => $start
                )
            );
            $count = new WP_Query(
                array(
                    'post_type' => 'post',
                    'post_status ' => 'publish',
                    'posts_per_page' => -1
                )
            );
        }
        $count = $count->post_count;
        if ($all_blog_posts->have_posts()):
            while ($all_blog_posts->have_posts()):
                $all_blog_posts->the_post();
                $guide_id = get_the_id();
                $guide_title = get_the_title();
                if (has_post_thumbnail($guide_id)) {
                    $post_featured_image = wp_get_attachment_url(get_post_thumbnail_id($guide_id), 'full');
                } else {
                    $post_featured_image = get_field('select_image', 'options')['url'];
                }
                $excerpt = get_the_excerpt();
                $post_categories = get_the_terms($guide_id, $taxonomy); // get categories 
                $cat_name = "";
                if (!empty($post_categories)):
                    foreach ($post_categories as $post_category):
                        $cat_name .= $post_category->name . ", ";
                    endforeach;
                endif; ?>
                <div class="ourarticles-blogs-box">
                    <a href="<?php echo get_the_permalink($guide_id); ?>">
                        <div class="ourarticles-blog-img">
                            <img src="<?php echo $post_featured_image; ?>" alt="<?php echo $guide_title; ?>" height="403" width="517" />
                        </div>
                        <div class="ourarticles-blog-data">
                            <span>
                                <?php echo get_the_date('m.d.Y'); ?>
                            </span>
                            <i>
                                <?php echo rtrim($cat_name, ", "); ?>
                            </i>
                            <h3>
                                <?php echo get_the_title(); ?>
                            </h3>
                            <p>
                                <?php echo $excerpt; ?>
                            </p>
                        </div>
                    </a>
                </div>
                <?php
            endwhile;
        else:
            echo "<p class='no_grid_mag'>Post Not Found</p>";
        endif;
        // This is where the magic happens
        if ($all_blog_posts->have_posts()):
            $no_of_paginations = ceil($count / $per_page);
            if ($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            // Pagination Buttons logic     
            if($count > $per_page): ?>
            <div class="ourarticles-blogs-pagination">
                <div class='resources-universal-pagination'>
                    <ul>
                        <?php
                        if ($first_btn && $cur_page > 1) { ?>
                            <li p='1' class='active'>
                                <<</li>
                                    <?php
                        } else if ($first_btn) { ?>
                                <li p='1' class='inactive'>
                                    <<</li>
                                    <?php
                        }
                        if ($previous_btn && $cur_page > 1) {
                            $pre = $cur_page - 1; ?>
                            <li p='<?php echo $pre; ?>' class='active'>
                                <</li>
                                    <?php
                        } else if ($previous_btn) { ?>
                                <li class='inactive'>
                                    <</li>
                                    <?php
                        }
                        for ($i = $start_loop; $i <= $end_loop; $i++) {
                            if ($cur_page == $i) { ?>
                                <li p='<?php echo $i; ?>' class='selected'><?php echo $i; ?></li>
                                <?php
                            } else { ?>
                                <li p='<?php echo $i; ?>' class='active'><?php echo $i; ?></li>
                                <?php
                            }
                        }
                        if ($next_btn && $cur_page < $no_of_paginations) {
                            $nex = $cur_page + 1; ?>
                            <li p='<?php echo $nex; ?>' class='active'>></li>
                            <?php
                        } else if ($next_btn) { ?>
                                <li class='inactive'>></li>
                            <?php
                        }
                        if ($last_btn && $cur_page < $no_of_paginations) { ?>
                            <li p='<?php echo $no_of_paginations; ?>' class='active'>>></li>
                            <?php
                        } else if ($last_btn) { ?>
                                <li p='<?php echo $no_of_paginations; ?>' class='inactive'>>></li>
                            <?php
                        } ?>
                    </ul>
                </div>
            </div>
            <?php
            endif;
        endif;
    }
    exit();
}
add_action('wp_ajax_resources-pagination-load-posts', 'bytes_canada_loadmore_resources_ajax_handler');
add_action('wp_ajax_nopriv_resources-pagination-load-posts', 'bytes_canada_loadmore_resources_ajax_handler');
/**
 * Code for speed optimization
 */
/**
 * Remove the WordPress version
 */
add_filter('the_generator', '__return_false');
/**
 * Disable HTML in WordPress comments
 */
add_filter('pre_comment_content', 'esc_html');
/**
 * Disable WordPress Login Hints
 */
function bytes_canada_no_wordpress_errors()
{
    return 'Please try the right user/pass combination';
}
add_filter('login_errors', 'bytes_canada_no_wordpress_errors');
/**
 * Disable WordPress Login Hints
 */
function bytes_canada_remove_cssjs_ver($src)
{
    if (strpos($src, '?ver='))
        $src = remove_query_arg('ver', $src);
    return $src;
}
add_filter('style_loader_src', 'bytes_canada_remove_cssjs_ver', 10, 2);
add_filter('script_loader_src', 'bytes_canada_remove_cssjs_ver', 10, 2);
/**
 * Remove RSD Links
 */
remove_action('wp_head', 'rsd_link');
/**
 * Disable Emoticons
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
/**
 * Remove Shortlink
 */
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
/**
 * Disable Embeds
 */
function bytes_canada_disable_embed()
{
    wp_dequeue_script('wp-embed');
}
add_action('wp_footer', 'bytes_canada_disable_embed');
/**
 * Disable XML-RPC
 */
add_filter('xmlrpc_enabled', '__return_false');
/**
 * Hide WordPress Version
 */
remove_action('wp_head', 'wp_generator');
/**
 * Remove WLManifest Link
 */
remove_action('wp_head', 'wlwmanifest_link');
/**
 * Disable Self Pingback
 */
function bytes_canada_disable_pingback(&$links)
{
    foreach ($links as $l => $link)
        if (0 === strpos($link, get_option('home')))
            unset($links[$l]);
}
add_action('pre_ping', 'bytes_canada_disable_pingback');
/**
 * Disable Heartbeat
 */
function bytes_canada_stop_heartbeat()
{
    wp_deregister_script('heartbeat');
}
add_action('init', 'bytes_canada_stop_heartbeat', 1);
/**
 * Disable Dashicons and unredundant block style on Front-end
 */
function bytes_canada_wpdocs_dequeue_dashicon()
{
    if (current_user_can('update_core')) {
        return;
    }
    wp_deregister_style('dashicons');
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('noptin_front');
    wp_dequeue_style('wc-blocks-vendors-style');
    wp_dequeue_style('wc-blocks-style');
    wp_dequeue_style('wfp-styles');
    wp_dequeue_style('mediaelement');
    wp_dequeue_style('wp-mediaelement');
    wp_dequeue_script('js-cookie');
    wp_dequeue_script('jquery-blockui');
}
add_action('wp_enqueue_scripts', 'bytes_canada_wpdocs_dequeue_dashicon');
/**
 * Allow span tag in wordpress editor
 */
function bytes_canada_override_mce_options($initArray)
{
    $opts = '*[*]';
    $initArray['valid_elements'] = $opts;
    $initArray['extended_valid_elements'] = $opts;
    return $initArray;
}
add_filter('tiny_mce_before_init', 'bytes_canada_override_mce_options');
/**
 * Define global variable for JS
 */
function bytes_canada_global_js_variables()
{ ?>
    <script type="text/javascript">
        var ajaxurl = '<?php echo admin_url("admin-ajax.php"); ?>';
        var ajaxnonce = '<?php echo wp_create_nonce("bytes_ajax_nonce"); ?>';
    </script>
    <?php
}
add_action('wp_head', 'bytes_canada_global_js_variables');
/**
 * Add class for contact-us page
 */
function bytes_canada_custom_class($classes)
{
    if (is_page('contact-us')) {
        $classes[] = 'contact-us-page';
    }
    return $classes;
}
add_filter('body_class', 'bytes_canada_custom_class');
/**
 * image size instruction for default post
 */
function bytes_canada_add_post_image_labels()
{
    $post_object = get_post_type_object('post');
    if(!$post_object){
        return false;
    }
    $post_object->labels->set_featured_image = 'Set featured image (517px x 403px)';
    return true;
}
add_action('wp_loaded', 'bytes_canada_add_post_image_labels', 20);
/**
 * Disable search functionality
 */
function bytes_canada_disable_search($query, $error = true){
    if(is_search() && !is_admin()){
        $query->is_search = false;
        $query->query_vars['s'] = false;
        $query->query['s'] = false;
        if($error == true){
            $query->is_404 = true;
        }
    }
}
add_action('parse_query', 'bytes_canada_disable_search');
add_filter('get_search_form', '__return_empty_string');
/**
 * Add class on CF7 form submission
 */
function bytes_canada_add_class_on_form_submission(){ ?>
    <script type="text/javascript">
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        if ( '320' == event.detail.contactFormId ) {
            let element = document.getElementById("Contact-form-data-tick-box");
            element.classList.add("thanks");
        }
    }, false );
</script>
<?php }
add_action( 'wp_footer', 'bytes_canada_add_class_on_form_submission' );
