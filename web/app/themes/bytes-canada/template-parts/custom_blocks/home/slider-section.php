<?php 
$slider_blocks = get_fields(); // get all fields in array
$sliders = $slider_blocks['service_list'];
if(!empty($sliders)):
    $services = "";
    foreach ($sliders as $slider):
        $service = $slider['add_service'];
        $service_page = !empty($slider['select_service_page']) ? $slider['select_service_page'] : "";
        if(!empty($service) && !empty($service_page)):
           $services .= "<a href='".$service_page."'>$service</a>";
        endif;
    endforeach;
endif;
if(!empty($sliders)): ?>
<!-- Services Section Start -->
<section class="home-services section-spacing">
    <div class="swiper-container swiper--top">
        <div class="swiper-wrapper">
            <div class="swiper-slide h3">
                <?php echo $services; ?>
            </div>
            <div class="swiper-slide h3">
                <?php echo $services; ?>
            </div>
            <div class="swiper-slide h3">
                <?php echo $services; ?>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->
<?php endif; ?>
