<?php
$posts_blocks = get_fields(); // get all fields in array
// featured post information
$featured_posts = $posts_blocks['choose_featured_post'];
$featured_post_link_title = $posts_blocks['featured_post_link_title'];
if(empty($featured_post_link_title)){
    $featured_post_link_title = "View Post";
}
$right_box_image = $posts_blocks['select_right_box_image'];
$default_image = get_field('select_image', 'options');
if(!empty($featured_posts)): ?>
<!-- Case-Study Section Start -->
<section class="home-case-study mt-80 mb-80">
    <!-- Swiper -->
    <div class="swiper case-studySwiper">
        <div class="swiper-wrapper">
            <?php
            $i = 1;
            foreach($featured_posts as $featured_post):
                $featured_post_id = $featured_post->ID; 
                $post_type = get_post_type($featured_post_id);
                $title = get_the_title($featured_post_id);
                $excerpt = get_the_excerpt($featured_post_id);
                if($post_type == 'casestudy'):
                    $taxonomy = "casestudy-category";
                elseif($post_type == 'resources'):
                    $taxonomy = "resources-category";
                elseif($post_type == 'services'):
                    $taxonomy = "services-category";
                elseif($post_type == 'solutions'):
                    $taxonomy = "solution-category";
                endif;    
                $permalink = get_permalink( $featured_post_id );
                if(has_post_thumbnail($featured_post_id)):
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($featured_post_id), 'full');
                    $image = $image[0];
                else:
                    $image = $default_image['url'];
                endif; 
                $terms = get_the_terms($featured_post_id, $taxonomy); // get the terms
                $term_list = "";
                if(!empty($terms)):
                    foreach($terms as $term):
                        $term_list .= $term->name . ", ";
                    endforeach;
                endif; 
                if($i % 2 == 0):
                    $class = "case-design2";
                else:
                    $class = "case-design1";
                endif; ?>
                    <div class="swiper-slide">
                        <div class="home-case-study-outbox <?php echo $class; ?>">
                            <div class="home-case-study-box">
                                <div class="home-case-study-box-left">
                                    <?php if(!empty($term_list)): ?>
                                        <span><?php echo rtrim($term_list, ', '); ?></span>
                                    <?php endif;
                                    if(!empty($title)): ?>
                                        <h2 class="h2"><?php echo $title; ?></h2>
                                    <?php endif;
                                    if(!empty($excerpt)): ?>
                                        <p><?php echo $excerpt; ?></p>
                                    <?php endif; ?>
                                        <a href="<?php echo $permalink; ?>" class="btn dark"><?php echo $featured_post_link_title; ?></a>
                                </div>
                                <?php if(!empty($image)): ?>
                                    <div class="home-case-study-box-right">
                                        <div class="home-case-study-box-right-banner">
                                            <img height="721" width="605" src="<?php echo $image; ?>" alt="<?php echo $title; ?>" />
                                        </div>
                                        <?php if(!empty($right_box_image['url'])): ?>
                                            <div class="home-case-study-box-right-shape">
                                                <span>
                                                    <img height="101" width="101" src="<?php echo $right_box_image['url']; ?>" alt="<?php echo $right_box_image['alt']; ?>">
                                                </span>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
            <?php
                $i++; 
                endforeach; ?>
        </div>
    </div>
</section>
<!-- Case-Study Section End -->
<?php endif; ?>
