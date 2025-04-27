<?php
$tech_stack_block = get_fields(); // get all fields in array
$tech_stack_title = $tech_stack_block['tech_stack_title'];
$tech_stack_content = $tech_stack_block['tech_stack_content'];
$tech_stack_details = $tech_stack_block['tech_stack_details'];
if(!empty($tech_stack_details)): ?>
<!-- Solution-inner Tech Stack Section Start -->
<section class="section-spacing solution-inner-tech-stack-bg">
    <div class="container">
        <div class="solution-inner-tech-stack">
            <div class="solution-inner-tech-stack-top">
                <?php if(!empty($tech_stack_title)): ?>
                    <h2 class="h3"><?php echo $tech_stack_title; ?></h2>
                <?php endif;
                if(!empty($tech_stack_content)): ?>
                <p><?php echo $tech_stack_content; ?></p>
                <?php endif; ?>
            </div>
            <div class="solution-inner-tech-stack-bottom">
                <div class="solution-inner-tech-stack-bottom-parts">
                    <?php
                    $i = 1;
                    $total_tech_stack = count($tech_stack_details);
                    foreach($tech_stack_details as $tech_stack):
                        $technology_title = $tech_stack['technology_title'];
                        $technology_details = $tech_stack['technology_details'];
                        if($i % 5 !== 0): ?>
                        <div class="solution-inner-tech-stack-list">
                            <?php if(!empty($technology_title)): ?>
                                <h3 class="h5"><?php echo $technology_title; ?></h3>
                            <?php endif;
                            if(!empty($technology_details)): ?>
                            <div class="solution-inner-tech-stack-list-boxes">
                                <?php 
                                foreach($technology_details as $technology):
                                    $logo = $technology['logo'];
                                    $title = $technology['title'];
                                    if(!empty($logo) && !empty($title)): ?>
                                        <div class="solution-inner-tech-stack-list-box">
                                            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" height="64" width="64" />
                                            <h4 class="h7"><?php echo $title; ?></h4>
                                        </div>
                                <?php
                                    endif;
                                endforeach; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    <?php
                        endif;
                    if($i % 5 == 0): ?>
                        </div>
                        <div class="solution-inner-tech-stack-bottom-full">
                            <div class="solution-inner-tech-stack-list">
                                <?php if(!empty($technology_title)): ?>
                                   <h3 class="h5"><?php echo $technology_title; ?></h3>
                                <?php endif;
                                if(!empty($technology_details)): ?>
                                <div class="solution-inner-tech-stack-list-boxes">
                                    <?php
                                    foreach($technology_details as $technology):
                                        $logo = $technology['logo'];
                                        $title = $technology['title'];
                                        if(!empty($logo) && !empty($title)): ?>
                                            <div class="solution-inner-tech-stack-list-box">
                                                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" height="64" width="64" />
                                                <h4 class="h7"><?php echo $title; ?></h4>
                                            </div>
                                    <?php
                                        endif;
                                    endforeach; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php
                    if($total_tech_stack > $i){
                        echo '<div class="solution-inner-tech-stack-bottom-parts">';
                    }
                    endif;
                    if(($i == $total_tech_stack) && ($i % 5 !== 0)){
                        echo "</div>";
                    }
                    $i++;
                    endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- Solution-inner Tech Stack Section End -->
<?php endif; ?>
