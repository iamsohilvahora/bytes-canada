<?php
// Case Study Content section
$casestudy_id = get_the_id();
$description = get_sub_field('description'); 
$top_casestudy_image = get_sub_field('top_casestudy_image'); 
if(!empty($top_casestudy_image)){
    $post_featured_image = $top_casestudy_image['url'];
}
else{
    $post_featured_image = get_field('select_image', 'options')['url']; 
} ?>
<!-- Case Study Lists Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="case-study-lists">
            <?php if(!empty($description)): ?>
                <div class="case-study-lists-left">
                    <h2 class="case-study-lists-left-title"><?php echo $description; ?></h2>
                </div>
            <?php endif;
            if(!empty($args)): ?>
                <div class="case-study-lists-right">
                    <h3 class="case-study-lists-right-title">CASE STUDY CONTAINS</h3>
                    <ul>
                        <?php foreach($args as $casestudy_contain): ?>
                            <li class="case-study-lists-right-list"><?php echo $casestudy_contain; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Case Study Lists Section End -->
<!-- Case Study Banner Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="case-study-banner">
            <img src="<?php echo $post_featured_image; ?>" alt="<?php echo get_the_title($casestudy_id); ?>" class="case-study-banner-img" height="672" width="1603" />
        </div>
    </div>
</section>
<!-- Case Study Banner Section End -->
