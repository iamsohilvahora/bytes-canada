<?php
$slider_blocks = get_fields(); // get all fields in array
$sliders = $slider_blocks['service_list'];
$services = "";
foreach ($sliders as $slider):
	$service_name = $slider['service_name'];
	$service_image_url = !empty($slider['service_image']) ? $slider['service_image']['url'] : "";
	$service_image_alt = !empty($slider['service_image']) ? $slider['service_image']['alt'] : "";
	if(!empty($service_name) && !empty($service_image_url)):
		$services .= "<span><img src='$service_image_url' alt='$service_image_alt' height='90' width='91' />
				$service_name</span>";
	endif;
endforeach;
if(!empty($sliders)): ?>
<!-- Service Slider Section Start -->
<section class="We-build-text section-spacing">
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
<!-- Service Slider Section End -->
<?php endif; ?>
