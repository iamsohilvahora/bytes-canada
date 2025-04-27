<?php
$build_brand_blocks = get_fields(); // get all fields in array
$brand_description = $build_brand_blocks['brand_description'];
if(!empty($brand_description)): ?>
<!-- Build-your-brand Section Start -->
<section class="section-spacing-bg Build-your-brand-bg">
    <div class="container">
        <div class="Build-your-brand">
            <?php echo $brand_description; ?>
        </div>
    </div>
</section>
<!-- Build-your-brand Section End -->
<?php endif; ?>
