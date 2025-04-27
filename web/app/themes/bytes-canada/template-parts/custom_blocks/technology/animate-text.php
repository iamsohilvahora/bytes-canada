<?php 
$animate_text_blocks = get_fields(); // get all fields in array
$animate_text = $animate_text_blocks['animate_text'];
if(!empty($animate_text)): ?>
<!-- Excellence Section Start -->
<section class="excellence section-spacing">
    <div class="swiper-container swiper--bottom">
        <div class="swiper-wrapper">
            <div class="swiper-slide h3"><?php echo $animate_text; ?></div>
            <div class="swiper-slide h3"><?php echo $animate_text; ?></div>
            <div class="swiper-slide h3"><?php echo $animate_text; ?></div>
        </div>
    </div>
</section>
<!-- Excellence Section End -->
<?php endif; ?>
