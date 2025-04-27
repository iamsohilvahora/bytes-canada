<?php
$hire_block = get_fields(); // get all fields in array
$hire_title = $hire_block['hire_title'];
$hire_button = $hire_block['hire_button'];
$hire_button_label = $hire_button['button_label'];
$hire_button_link = button_group($hire_button);
if(!empty($hire_title) && !empty($hire_button_label) && !empty($hire_button_link)): ?>
<!-- Solution-inner CTA Section Start -->
<section class="section-spacing Solution-inner-CTA-bg">
    <div class="container">
        <div class="Solution-inner-CTA">
            <div class="Solution-inner-CTA-left">
                <h2 class="h3"><?php echo $hire_title; ?></h2>
            </div>
            <div class="Solution-inner-CTA-right">
                <a <?php echo $hire_button_link; ?> class="btn dark"><?php echo $hire_button_label; ?></a>
            </div>
        </div>
    </div>
</section>
<!-- Solution-inner CTA Section End -->
<?php endif; ?>
