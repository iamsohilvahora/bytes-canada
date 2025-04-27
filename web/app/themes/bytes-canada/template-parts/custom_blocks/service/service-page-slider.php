<?php
$service_slider_block = get_fields(); // get all fields in array
$service_pages = $service_slider_block['select_service_pages'];
if(!empty($service_pages)): ?>
<!-- Development Slider Section Start -->
<section class="Development-Slider section-spacing">
    <div class="horizontal-scroll-section">
        <div class="scene">
            <div class="webdev-scrolls-secs">
                <div class="container">
                    <div class="webdev-scrolls-secs-line"></div>
                    <div class="webdev-scrolls-secs-data">
                    <div class="bar"></div>
                        <?php
                        $cat_index = 1;
                        foreach($service_pages as $service_page):
                            $class = ($cat_index == 1) ? "active" : "";
                            $page_title = $service_page['page_title']; ?>
                            <a href="#<?php echo "main-".$cat_index; ?>" class="<?php echo $class; ?>"><?php echo $page_title; ?></a>
                        <?php
                        $cat_index++;
                        endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="horizontal-scroll-section__content-wrapper wrapper">
                <?php
                    $main_id = 1;
                    foreach($service_pages as $service_page):
                        $page_title = $service_page['page_title'];
                        $page_content = $service_page['page_content'];
                        $service_image = $service_page['select_image'];
                        $page_link = $service_page['page_link'];
                        $selected_service_pages = $service_page['service_pages']; ?>
                        <div class="horizontal-scroll-section__content-section" id="main-<?php echo $main_id++; ?>">
                            <div class="webdev-scrolls">
                                <div class="container">
                                    <div class="webdev-scrolls-p1">
                                        <?php if(!empty($page_title)): ?>
                                            <h2 class="h5"><?php echo $page_title; ?></h2>
                                        <?php endif;
                                        if(!empty($page_content)):
                                            echo $page_content;
                                        endif;
                                        if(!empty($page_link)): 
                                            $title = $page_link['title'] ? $page_link['title'] : "";
                                            $url = $page_link['url'] ? $page_link['url'] : "";
                                            $target = $page_link['target'] ? $page_link['target'] : "";
                                            if(!empty($title) && !empty($url) && $url !== "#"): ?>
                                                <a href="<?php echo $url; ?>" target="<?php echo $target; ?>" aria-label="<?php echo $title; ?>" class="btn dark transparent"><?php echo $title; ?></a>
                                        <?php
                                            endif;
                                        endif; ?>
                                    </div>
                                    <div class="webdev-scrolls-p2-box">
                                        <?php if(!empty($service_image)): ?>
                                            <div class="webdev-scrolls-p2">
                                                <img src="<?php echo $service_image['url']; ?>" alt="<?php echo $service_image['alt']; ?>" height="612" width="514" />
                                            </div>
                                        <?php endif;
                                        if(!empty($selected_service_pages)): ?>
                                            <div class="webdev-scrolls-p3">
                                                <ul>
                                                <?php
                                                $i = 1;
                                                foreach($selected_service_pages as $service_page):
                                                    if(!empty($service_page['select_page'])){
                                                        $title = $service_page['select_page']['title'] ? $service_page['select_page']['title'] : "";
                                                        $url = $service_page['select_page']['url'] ? $service_page['select_page']['url'] : "";
                                                        $target = $service_page['select_page']['target'] ? $service_page['select_page']['target'] : "";
                                                    }
                                                    else{
                                                        continue;
                                                    }
                                                    if(!empty($title) && !empty($url)): ?>
                                                        <li><span><?php echo sprintf('%02d', $i++); ?></span><a href="<?php echo $url; ?>" aria-label="<?php echo $title; ?>" class="h6"><?php echo $title; ?></a></li>
                                                <?php
                                                    endif;
                                                endforeach; ?>
                                                </ul>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- Development Slider Section End -->
<?php endif; ?>
<?php
if(!empty($service_pages)): ?>
<!-- Development Mobile Section Start -->
<section class="section-spacing Development-Mobile">
    <div class="webdev-scrolls">
        <div class="container">
            <div class="webdev-scrolls-boxes">
                <?php
                foreach($service_pages as $service_page):
                    $page_title = $service_page['page_title'];
                    $page_content = $service_page['page_content'];
                    $service_image = $service_page['select_image'];
                    $page_link = $service_page['page_link'];
                    $selected_service_pages = $service_page['service_pages']; ?>
                    <div class="webdev-scrolls-box">
                        <div class="webdev-scrolls-p1">
                            <?php if(!empty($page_title)): ?>
                                <h2 class="h5"><?php echo $page_title; ?></h2>
                            <?php endif;
                            if(!empty($page_content)):
                                echo $page_content;
                            endif;
                            if(!empty($page_link)): 
                                $title = $page_link['title'] ? $page_link['title'] : "";
                                $url = $page_link['url'] ? $page_link['url'] : "";
                                $target = $page_link['target'] ? $page_link['target'] : "";
                                if(!empty($title) && !empty($url) && $url !== "#"): ?>
                                    <a href="<?php echo $url; ?>" target="<?php echo $target; ?>" aria-label="<?php echo $title; ?>" class="btn dark transparent"><?php echo $title; ?></a>
                            <?php
                                endif;
                            endif; ?>
                        </div>
                        <?php
                        if(!empty($selected_service_pages)): ?>
                        <div class="webdev-scrolls-p2-box">
                            <div class="webdev-scrolls-p3">
                                <ul>
                                    <?php
                                    $j = 1;
                                    foreach($selected_service_pages as $service_page):
                                        if(!empty($service_page['select_page'])){
                                            $title = $service_page['select_page']['title'] ? $service_page['select_page']['title'] : "";
                                            $url = $service_page['select_page']['url'] ? $service_page['select_page']['url'] : "";
                                            $target = $service_page['select_page']['target'] ? $service_page['select_page']['target'] : "";
                                        }
                                        else{
                                            continue;
                                        }
                                        if(!empty($title) && !empty($url)): ?>
                                            <li><span><?php echo sprintf('%02d', $j++); ?></span><a href="<?php echo $url; ?>" aria-label="<?php echo $title; ?>" class="h6"><?php echo $title; ?></a></li>
                                    <?php
                                        endif;
                                    endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- Development Mobile Section End -->
<?php endif; ?>
