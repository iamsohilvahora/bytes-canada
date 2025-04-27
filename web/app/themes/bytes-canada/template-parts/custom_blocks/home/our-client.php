<!-- our client section start -->
<?php
$our_client_blocks = get_fields(); // get all fields in array
$title = $our_client_blocks['client_title'];
$description = $our_client_blocks['client_description'];
$total_brand = $our_client_blocks['total_client_brand']; // get total client brand
$button = $our_client_blocks['client_button'];
$button_label = $button['button_label'];
$button_link = button_group($button);
$args = array(
    'post_type' => 'client_logo',
    'post_status' => 'publish',
    'posts_per_page' => $total_brand,
    'orderby' => 'menu_order',
    'order' => 'ASC'
);
$posts = get_posts($args); // get client logos ?>
<!-- Our-Client Section Start -->
<section class="ourclient section-spacing-bg">
    <div class="container">
        <div class="ourclient-box">
            <div class="ourclient-title">
                <?php if (!empty($title)): ?>
                    <h2 class="h3">
                        <?php echo $title; ?>
                    </h2>
                <?php endif;
                if (!empty($description)): ?>
                    <p>
                        <?php echo $description; ?>
                    </p>
                <?php endif;
                if (!empty($button_label) && !empty($button_link)): ?>
                    <a <?php echo $button_link; ?> class="btn"><?php echo $button_label; ?></a>
                <?php endif; ?>
            </div>
            <?php if (!empty($posts)): ?>
                <div class="ourclient-logos-box swiper clientlogo-Swiper">
                    <div class="ourclient-logos swiper-wrapper">
                        <?php
                        foreach ($posts as $client):
                            $logo_id = $client->ID;
                            $logo_title = $client->post_title;
                            $logo_url = get_the_post_thumbnail_url($logo_id, 'full');
                            if (!empty($logo_url)): ?>
                                <span class="swiper-slide">
                                    <img src="<?php echo $logo_url; ?>" alt="<?php echo $logo_title; ?>" height="70" width="100" />
                                </span>
                                <?php
                            endif;
                        endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Our-Client Section End -->