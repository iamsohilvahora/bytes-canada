<?php
$leadership_blocks = get_fields(); // get all fields in array
$leadership_title = $leadership_blocks['leadership_title'];
$leaders_details = $leadership_blocks['leaders_detail'];
if(!empty($leaders_details)): ?>
<!-- About Company Leaders Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="about-company-leaders">
            <?php if(!empty($leadership_title)): ?>
                <h2 class="h4"><?php echo $leadership_title; ?></h2>
            <?php endif; ?>
            <div class="about-company-leaders-boxes">
                <?php
                foreach($leaders_details as $leader):
                    $leader_image = $leader['leader_image'];
                    $leader_name = $leader['leader_name'];
                    $leader_designation = $leader['leader_designation']; 
                    if(!empty($leader_image) && !empty($leader_name) && !empty($leader_designation)): ?>
                    <div class="about-company-leaders-box">
                        <img src="<?php echo $leader_image['url']; ?>" alt="<?php echo $leader_image['alt']; ?>" height="328" width="337" />
                        <h3><?php echo $leader_name; ?></h3>
                        <h4><?php echo $leader_designation; ?></h4>
                    </div>
                <?php
                    endif;
                endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- About Company Leaders Section End -->
<?php endif; ?>
