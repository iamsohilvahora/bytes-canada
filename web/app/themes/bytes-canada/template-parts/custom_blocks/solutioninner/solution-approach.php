<?php
$solution_approach_blocks = get_fields(); // get all fields in array
$solution_approach_title = $solution_approach_blocks['solution_approach_title'];
$solution_approach_content = $solution_approach_blocks['solution_approach_content'];
$approach_details = $solution_approach_blocks['approach_details'];
if(!empty($approach_details)): ?>
<!-- Solution-inner On-demand Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="solution-inner-on-demand">
            <div class="solution-inner-on-demand-top">
                <?php if(!empty($solution_approach_title)): ?>
                    <h2 class="h3"><?php echo $solution_approach_title; ?></h2>
                <?php endif;
                if(!empty($solution_approach_content)): ?>
                    <p><?php echo $solution_approach_content; ?></p>
                <?php endif; ?>
            </div>
            <div class="solution-inner-on-demand-bottom">
                <div class="solution-inner-on-demand-boxes">
                    <?php
                    foreach($approach_details as $detail): 
                        $approach_logo = $detail['approach_logo'];
                        $approach_title = $detail['approach_title'];
                        $approach_content = $detail['approach_content'];
                        if(!empty($approach_logo) && !empty($approach_title) && !empty($approach_content)): ?>
                            <div class="solution-inner-on-demand-box">
                                <div class="solution-inner-on-demand-imgbox">
                                    <img src="<?php echo $approach_logo['url']; ?>" alt="<?php echo $approach_logo['alt']; ?>" height="506" width="478" />
                                </div>
                                <h3 class="h5"><?php echo $approach_title; ?></h3>
                                <p><?php echo $approach_content; ?></p>
                            </div>
                    <?php
                        endif;
                    endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Solution-inner On-demand Section End -->
<?php endif; ?>
