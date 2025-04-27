<?php
$post_blocks = get_fields(); // get all fields in array
$post_heading = $post_blocks['post_heading'];
$show_all_post_title = $post_blocks['view_all_post_title'];
$post_page_link = $post_blocks['post_page_link'];
$default_image = get_field('select_image', 'options');
$post_args = array(
           'post_type' => 'post',
           'post_status' => 'publish',
           'posts_per_page' => 3,
           'orderby'   => 'post_date',
           'order'     => 'DESC'
        );
$post_query = new WP_Query($post_args); // execute wp query ?>
<!-- Our-Articles Section Start -->
<section class="ourarticles section-spacing">
    <div class="container">
        <div class="ourarticles-box">
            <div class="ourarticles-title">
                <?php if(!empty($post_heading)): ?>
                <div class="ourarticles-title-left">
                    <h2 class="h3"><?php echo $post_heading; ?></h2>
                </div>
                <?php endif;
                if(!empty($post_page_link) && !empty($show_all_post_title)): ?>
                <div class="ourarticles-title-right">
                    <a href="<?php echo $post_page_link; ?>" class="btn"><?php echo $show_all_post_title; ?></a>
                </div>
                <?php endif; ?>
            </div>
            <?php if(!empty($post_query->have_posts())): ?>
            <div class="ourarticles-blogs">
                <div class="ourarticles-blogs-boxes">
                    <?php
                        while ($post_query->have_posts()):
                            $post_query->the_post();
                            $post_id = get_the_id();
                            $title = get_the_title( $post_id );
                            $excerpt = get_the_excerpt( $post_id );
                            $permalink = get_permalink( $post_id );
                            if(has_post_thumbnail($post_id)):
                                $image = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'full');
                                $image = $image[0];
                            else:
                                $image = $default_image['url'];
                            endif; 
                            $categories = get_the_category($post_id); // get the category of post
                            $cat_list = "";
                            if(!empty($categories)):
                                foreach($categories as $cat):
                                    $cat_list .= $cat->name . ", ";
                                endforeach;
                            endif;
                            $date = get_the_date('m.d.Y'); ?>
                            <div class="ourarticles-blogs-box">
                                <a href="<?php echo $permalink; ?>">
                                    <?php if(!empty($image)): ?>
                                        <div class="ourarticles-blog-img">
                                            <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" height="403" width="517" />
                                        </div>
                                    <?php endif; ?>
                                    <div class="ourarticles-blog-data">
                                        <?php if(!empty($date)): ?>
                                            <span><?php echo $date; ?></span>
                                        <?php endif;
                                        if(!empty($cat_list)): ?>
                                            <i><?php echo rtrim($cat_list, ', '); ?></i>
                                        <?php endif;
                                        if(!empty($title)): ?>
                                            <h3><?php echo $title; ?></h3>
                                        <?php endif;
                                        if(!empty($excerpt)): ?>
                                            <p><?php echo $excerpt; ?></p>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Our-Articles Section End -->