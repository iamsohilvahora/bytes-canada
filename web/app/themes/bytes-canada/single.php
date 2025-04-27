<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bytes_canada
 */
get_header();
$guide_id = get_the_ID(); // get post id
$author_role = get_field('author_role', $guide_id);
$post_reading_time = get_field('post_reading_time', $guide_id);
$post_title = get_the_title();
$post_content = get_the_content();
$post_excerpt = get_the_excerpt();
$descText = substr($post_excerpt, 0, 144);
$post_date = get_the_date('M d, Y');
$post_tags = get_the_tags($guide_id);
$tag_list = "";
if ($post_tags) {
    foreach ($post_tags as $tag) {
        $tag_list .= '<a href="' . get_term_link($tag->term_id) . '">' . $tag->name . ' ' . '</a>';
    }
}
$author_id = get_post_field('post_author', $guide_id);
$author_name = get_the_author_meta('display_name', $author_id);
$image = get_field('profile_picture', 'user_' . $author_id);
$img = get_avatar_url($author_id);
if (has_post_thumbnail($guide_id)) {
    $post_featured_image = wp_get_attachment_url(get_post_thumbnail_id($guide_id), 'full');
} else {
    $post_featured_image = get_field('select_image', 'options')['url'];
} 
$guide_page_title = get_field('guide_page_title', 'options'); // Guides page title
$guide_page_link = get_field('guide_page_link', 'options'); // Guides page link ?>
<!-- Our Guide Inner Title Section Start -->
<section class="section-spacing">
    <div class="our-guide-inner-top-bg-shape">
        <span class="our-guide-inner-top-bg-shape-shade1"></span>
        <span class="our-guide-inner-top-bg-shape-shade2"></span>
        <span class="our-guide-inner-top-bg-shape-shade3"></span>
    </div>
    <div class="our-guide-inner-title">
        <?php if (!empty($guide_page_title) && !empty($guide_page_link)): ?>
            <a href="<?php echo $guide_page_link; ?>" class="our-guide-inner-path" aria-label="<?php echo $guide_page_title; ?>">
                <?php echo $guide_page_title; ?>
            </a>
        <?php endif;
        if (!empty($post_title)): ?>
            <h1 class="h2">
                <?php echo $post_title; ?>
            </h1>
        <?php endif;
        if (!empty($post_excerpt)): ?>
            <p>
                <?php echo $post_excerpt; ?>
            </p>
        <?php endif; ?>
    </div>
    <div class="our-guide-inner-title-author">
        <div class="our-guide-inner-title-author-p1">
            <div class="our-guide-inner-title-author-p1-s1">
                <img src="<?php if ($image == NULL || $image == '') {
                    echo $img;
                } else {
                    echo $image;
                }
                ; ?>"
                    alt="<?php echo $author_name; ?>" class="guide-author" width="40" height="40">
            </div>
            <div class="our-guide-inner-title-author-p1-s2">
                <?php if (!empty($author_name)): ?>
                    <h2 class="guide-inner-title-author-name">
                        <?php echo $author_name; ?>
                    </h2>
                <?php endif;
                if (!empty($author_role)): ?>
                    <h3 class="guide-inner-title-author-desg">
                        <?php echo $author_role; ?>
                    </h3>
                <?php endif; ?>
            </div>
        </div>
        <div class="our-guide-inner-title-author-p2">
            <p>Posted
                <?php echo $post_date; ?> ·
                <?php echo $post_reading_time; ?> read
            </p>
        </div>
        <?php if (!empty($tag_list)): ?>
            <div class="our-guide-inner-title-author-p3">
                <p>
                    <?php echo $tag_list; ?>
                </p>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- Our Guide Inner Title Section End -->
<!-- Our Guide Content Blocks Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="our-guide-content-blocks">
            <div class="our-guide-content-blocks-left">
                <?php if (!empty($post_featured_image)): ?>
                    <img src="<?php echo $post_featured_image; ?>" alt="<?php echo $post_title; ?>" height="615"
                        width="1036" class="guide-top-banner" />
                <?php endif;
                // Check rows exists or not
                if (have_rows('content_repeater')):
                    $i = 1;
                    // Loop through rows
                    while (have_rows('content_repeater')):
                        the_row();
                        $title = get_sub_field('title'); // main title ?>
                        <h2 class="h4" id="main-<?php echo $i; ?>"><?php echo $title; ?></h2>
                        <?php
                        // Check rows exists or not
                        if (have_rows('description')) {
                            // Loop through rows.
                            while (have_rows('description')):
                                the_row();
                                $sub_title = get_sub_field('sub_title'); // sub title
                                $content = get_sub_field('content'); // description
                                if (($sub_title != '' || $sub_title != NULL) && ($content != '' || $content != NULL)): ?>
                                    <h3 class="h6">
                                        <?php echo $sub_title; ?>
                                    </h3>
                                        <?php echo $content; ?>
                                <?php else: ?>
                                        <?php echo $content; ?>
                                    <?php
                                endif;
                            endwhile;
                        }
                        ?>
                        <?php
                        $i++;
                    endwhile;
                endif; ?>
            </div>
            <div class="our-guide-content-blocks-right">
                <div class="our-guide-content-blocks-right-topsticky">
                    <?php if (have_rows('content_repeater')):
                        $i = 1; ?>
                        <div class="our-guide-content-blocks-right-contents">
                            <h3>Table of Contents</h3>
                            <?php while (have_rows('content_repeater')):
                                the_row(); ?>
                                <a href="#main-<?php echo $i; ?>"><?php echo get_sub_field('title'); ?></a>
                                <?php $i++; endwhile; ?>
                        </div>
                    <?php endif;
                    if (is_active_sidebar('guide-sidebar')): ?>
                        <div class="our-guide-content-blocks-right-subscribe">
                            <?php get_sidebar('guide'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
/* *** Check flexible content field exists or not *** */
if (have_rows('guides')):
    while (have_rows('guides')):
        the_row();
        get_template_part('modules/guide/' . get_row_layout());
    endwhile;
endif;
?>
<!-- Our Guide Content Blocks Section End -->
<?php
get_footer();
