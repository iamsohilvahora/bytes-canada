<?php
$app_detail_block = get_fields(); // get all fields in array
$title = $app_detail_block['title'];
$content = $app_detail_block['content'];
$application_details = $app_detail_block['application_details'];
if(!empty($application_details)): ?>
<!-- Solution-inner Popular we build Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="solution-inner-popular-webuild">
            <?php if(!empty($title)): ?>
                <h2 class="h3"><?php echo $title; ?></h2>
            <?php endif;
            if(!empty($content)): ?>
                <p><?php echo $content; ?></p>
            <?php endif; ?>
            <div class="solution-inner-popular-webuild-boxes">
                <?php
                $i = 1;
                foreach($application_details as $app_detail):
                    if($i == 1) { $class = "webuild-shade1"; }
                    elseif($i == 2) { $class = "webuild-shade2"; }
                    else{
                        if($i % 2 == 0){
                            if($class == "webuild-shade2"){
                                $class = "webuild-shade1";
                            }
                            elseif($class == "webuild-shade1"){
                                $class = "webuild-shade2";
                            }
                            else{}
                        }
                        else{
                            if($class == "webuild-shade2"){
                                $class = "webuild-shade2";
                            }
                            if($class == "webuild-shade1"){
                                $class = "webuild-shade1";
                            }
                        }
                    }
                    $application_name = $app_detail['application_name']; 
                    $application_content = $app_detail['application_content']; 
                    $application_features = $app_detail['application_features']; 
                    if(!empty($application_name) && !empty($application_content) && !empty($application_features)): ?>
                    <div class="solution-inner-popular-webuild-box">
                        <h3 class="h5 <?php echo $class; ?>"><?php echo $application_name; ?></h3>
                        <p><?php echo $application_content; ?></p>
                        <ul class="solution-inner-popular-webuild-ul">
                            <?php
                            foreach($application_features as $feature_list):
                                $feature = $feature_list['add_features'];
                                if(!empty($feature)): ?>
                                    <li class="solution-inner-popular-webuild-list h7"><?php echo $feature; ?></li>
                            <?php
                                endif;
                            endforeach; ?>
                        </ul>
                    </div>
                <?php
                    endif;
                    $i++;
                endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- Solution-inner Popular we build Section End -->
<?php endif; ?>
