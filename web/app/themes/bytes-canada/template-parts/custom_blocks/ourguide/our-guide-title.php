<?php
$guide_title_blocks = get_fields(); // get all fields in array
// banner information
$page_title = $guide_title_blocks['page_title'];
if(empty($page_title)){
    $page_title = get_the_title(get_the_id());
}
$banner_tag = $guide_title_blocks['banner_tag'];
if(!empty($page_title)): ?>
<!-- Our Guide Title Section Start -->
<section class="section-spacing our-guide-top-bg-pad">
    <div class="container">
        <div class="our-guide-top-bg-shape">
            <span class="our-guide-top-bg-shape-shade1"></span>
            <span class="our-guide-top-bg-shape-shade2"></span>
            <span class="our-guide-top-bg-shape-shade3"></span>
        </div>
        <div class="our-guide-title">
            <p><?php echo $banner_tag; ?></p>
            <h1 class="h1"><?php echo $page_title; ?></h1>
        </div>
    </div>
</section>
<!-- Our Guide Title Section End -->
<?php endif; ?>
