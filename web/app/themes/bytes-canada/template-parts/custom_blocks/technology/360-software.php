<?php 
$software_blocks = get_fields(); // get all fields in array
// left group
$software_title = $software_blocks['360_software']['left_group']['360_software_title'];
// right group
$software_content = $software_blocks['360_software']['right_group']['360_software_content'];
if(!empty($software_title) && !empty($software_content)): ?>
<!-- 360 Software Development Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="software-development">
            <div class="software-development-left">
                <h2 class="h3 software-development-left-title"><?php echo $software_title; ?></h2>
            </div>
            <div class="software-development-right software-development-right-data">
                <?php echo $software_content; ?>
            </div>
        </div>
    </div>
</section>
<!-- Software Development Section End -->
<?php endif; ?>
