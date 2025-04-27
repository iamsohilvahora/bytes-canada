<?php
// Project summary section
$projects = get_sub_field('about_project'); // get project details
$about_client = get_sub_field('about_client'); // get client info ?>
<!-- Case Study Data Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="case-study-data">
            <?php if(!empty($projects)): ?>
            <div class="case-study-data-left">
                <?php  
                foreach($projects as $project): 
                    $title = $project['title'];
                    $sub_title = $project['sub_title'];
                    if(!empty($title) && !empty($sub_title)): ?>
                        <h2 class="case-study-data-left-title"><?php echo $title; ?></h2>
                        <p class="case-study-data-left-data"><?php echo $sub_title; ?></p>
                <?php 
                    endif;
                endforeach; ?>
            </div>
            <?php endif;
            if(!empty($about_client)): ?>
            <div class="case-study-data-right">
                <?php
                foreach($about_client as $about): 
                    $title = $about['title'];
                    $content = $about['content'];
                    if(!empty($title) && !empty($content)): ?>
                        <h3 class="case-study-data-right-title"><?php echo $title; ?></h3>
                        <div class="case-study-data-right-data">
                            <?php echo $content; ?>
                        </div>
                <?php 
                    endif;
                endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Case Study Data Section End -->
