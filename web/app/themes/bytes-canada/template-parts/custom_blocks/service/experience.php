<?php
$experience_blocks = get_fields(); // get all fields in array
$experience_content = $experience_blocks['experience_content'];
if(!empty($experience_content)): ?>
<!-- Experience Section Start -->
<section class="section-spacing">
    <div class="Experience-Section-text container">
        <?php echo $experience_content; ?>
    </div>
</section>
<!-- Experience Section End -->
<?php endif; ?>
