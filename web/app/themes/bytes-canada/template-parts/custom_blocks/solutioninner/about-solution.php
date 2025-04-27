<?php
$about_solution_blocks = get_fields(); // get all fields in array
// left group
$title = $about_solution_blocks['about_solution']['left_group']['left_title'];
$content = $about_solution_blocks['about_solution']['left_group']['left_content'];
// right group
$description = $about_solution_blocks['about_solution']['right_group']['right_description']; ?>
<!-- Solution-inner Title Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="solution-inner-title">
            <div class="solution-inner-title-left">
                <?php if(!empty($title)): ?>
                    <h2 class="h3"><?php echo $title; ?></h2>
                <?php endif;
                if(!empty($content)): ?>
                    <p><?php echo $content; ?></p>
                <?php endif; ?>
            </div>
            <?php if(!empty($description)): ?>
            <div class="solution-inner-title-right">
                <?php echo $description; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Solution-inner Title Section End -->
