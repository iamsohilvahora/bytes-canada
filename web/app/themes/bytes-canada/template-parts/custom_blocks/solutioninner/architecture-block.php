<?php
$architecture_block = get_fields(); // get all fields in array
$architecture_title = $architecture_block['architecture_title'];
$architecture_content = $architecture_block['architecture_content'];
$architecture_image = $architecture_block['architecture_image']; 
if(!empty($architecture_title) && !empty($architecture_content) && !empty($architecture_image)): ?>
<!-- Solution-inner Architecture Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="solution-inner-architecture">
            <h2 class="h3"><?php echo $architecture_title; ?></h2>
            <p><?php echo $architecture_content; ?></p>
            <img src="<?php echo $architecture_image['url']; ?>" alt="<?php echo $architecture_image['alt']; ?>" height="800" width="1440" />
        </div>
    </div>
</section>
<!-- Solution-inner Architecture Section End -->
<?php endif; ?>
