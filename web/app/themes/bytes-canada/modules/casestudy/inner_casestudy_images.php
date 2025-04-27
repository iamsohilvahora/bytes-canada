<?php
// inner casestudy images
$images = get_sub_field('images');
if(!empty($images)): ?>
<!-- Case Study Portfolio Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="case-study-portfolio">
            <?php
            foreach($images as $casestudy):
                $casestudy_image = $casestudy['select_image'];
                if(!empty($casestudy_image)): ?>
                    <img src="<?php echo $casestudy_image['url']; ?>" alt="<?php echo $casestudy_image['alt']; ?>" width="<?php echo $casestudy_image['width']; ?>" height="<?php echo $casestudy_image['height']; ?>" />
            <?php
                endif;
            endforeach; ?>
        </div>
    </div>
</section>
<!-- Case Study Portfolio Section End -->
<?php endif; ?>
