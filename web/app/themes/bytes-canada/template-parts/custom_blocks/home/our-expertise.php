<?php
$expertise_blocks = get_fields(); // get all fields in array
$expertise_title = $expertise_blocks['expertise_title']; // get expertise title
$expertise_services = $expertise_blocks['services']; // get expertise services ?>
<!-- Expertise Section Start -->
<section class="home-expertise section-spacing">
    <div class="container">
        <?php if(!empty($expertise_title)): ?>
        <h2 class="h3"><?php echo $expertise_title; ?></h2>
        <?php endif;
        if(!empty($expertise_services)): ?>
        <div class="home-expertise-boxes">
            <?php
                $i = 1;
                foreach ($expertise_services as $service):
                    $service_title = $service['service_title'];
                    $service_description = $service['service_description'];
                    $service_tag = $service['service_tag'];
                    $service_image = $service['service_image'];
                    $service_button = $service['service_button'];
                    $service_button_label = $service_button['button_label'];
                    $service_button_link = button_group($service_button); ?>
                    <div class="home-expertise-box">
                        <div class="home-expertise-box-list">
                            <div class="home-expertise-box-list-number">
                                <?php if(!empty($service_tag)): ?>
                                    <p><?php echo $service_tag; ?></p>
                                <?php endif; ?>
                                <h3 class="h6"><?php echo sprintf('%02d', $i++); ?></h3>
                            </div>
                            <?php if(!empty($service_image)): ?>
                                <div class="home-expertise-box-list-img">
                                    <img height="151" width="164"
                                        src="<?php echo $service_image['url']; ?>" alt="<?php echo $service_image['alt']; ?>" />
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="home-expertise-box-data">
                            <?php if(!empty($service_title)): ?>   
                                <h3 class="h5"><?php echo $service_title; ?></h3>
                            <?php endif;
                            if(!empty($service_description)): ?>   
                                <p><?php echo $service_description; ?></p>
                            <?php endif; ?>
                        </div>
                        <?php if(!empty($service_button_label) && !empty($service_button_link)): ?>
                            <div class="home-expertise-box-link">
                                <a <?php echo $service_button_link; ?>><span><?php echo $service_button_label; ?></span></a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>             
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- Expertise Section End -->
