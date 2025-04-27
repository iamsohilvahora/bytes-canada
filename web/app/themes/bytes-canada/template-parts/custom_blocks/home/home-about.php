<?php 
$about_blocks = get_fields(); // get all fields in array
// left group
$left_title = $about_blocks['home_about_content']['left_group']['left_title'];
// right group
$right_content = $about_blocks['home_about_content']['right_group']['right_content']; ?>
<?php if(!empty($left_title) && !empty($right_content)): ?>
<!-- About Section Start -->
<section class="home-about section-spacing">
    <div class="container">
        <div class="home-about-left">
            <h2 class="h3"><?php echo $left_title; ?></h2>
        </div>
        <div class="home-about-right">
            <?php echo $right_content; ?>
        </div>
    </div>
</section>
<!-- About Section End -->
<?php endif; ?>
