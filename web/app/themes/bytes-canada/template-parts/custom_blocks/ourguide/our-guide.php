<?php
$our_guide_blocks = get_fields(); // get all fields in array
$guide_posts_per_page = $our_guide_blocks['guide_posts_per_page']; // get post per page
$per_page = $guide_posts_per_page;
$taxonomy = "guide-category";
$sizes = get_categories(
    array(
        'hide_empty' => true
    )
);
// get default post
$all_blog_posts = new WP_Query(
    array(
        'post_type' => 'post',
        'post_status ' => 'publish',
        'orderby' => 'post_date',
        'order' => 'DESC',
        'posts_per_page' => $guide_posts_per_page,
    )
);
$count = new WP_Query(
    array(
        'post_type' => 'post',
        'post_status ' => 'publish',
        'posts_per_page' => -1
    )
);
$count = $count->post_count;
$taxonomy = "category";
$cur_page = 1;
$previous_btn = true;
$next_btn = true;
$first_btn = true;
$last_btn = true; ?>
<!-- Our Guide Blocks Section Start -->
<section class="section-spacing our-guide-blocks-outer">
    <div class="container">
        <div class="image_grid_tab">
            <div class="nav-prev arrow" style="display:none;"></div>
            <div class="cata-sub-nav">
                <?php
                if ($sizes && !empty($sizes)): ?>
                    <ul>
                        <li class="item_all active" id="resetCat" ><a href="javascript:void(0)" aria-label="All">All</a></li>
                        <?php foreach ($sizes as $size):
                            if ($size->term_id == 1):
                                continue;
                            endif; ?>
                            <li><a href="javascript:void(0);" class="filter-size" data-id="<?php echo $size->term_id; ?>"><?php echo $size->name; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="nav-next arrow"></div>
        </div>
        <div class="ourarticles-blogs">
            <div class="ourarticles-blogs-boxes resources_universal_container" data-per_page="<?php echo $guide_posts_per_page; ?>">
                <?php 
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
                endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- Our Guide Blocks Section End -->
