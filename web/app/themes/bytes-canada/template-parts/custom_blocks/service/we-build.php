<?php
$we_build_blocks = get_fields(); // get all fields in array
$we_build_title = $we_build_blocks['we_build_title'];
$we_build_sub_title = $we_build_blocks['we_build_sub_title'];
$we_build_content = $we_build_blocks['we_build_content'];
if(!empty($we_build_title) && !empty($we_build_content)): ?>
<!-- We-build Section Start -->
<section class="We-build section-spacing">
    <div class="container">
        <?php if(!empty($we_build_sub_title)): ?>
        <span><?php echo $we_build_sub_title; ?></span>
        <?php endif; ?>
        <h2 class="h3"><?php echo $we_build_title; ?></h2>
        <p class="h6"><?php echo $we_build_content; ?></p>
    </div>
</section>
<!-- We-build Section End -->
<?php endif; ?>
