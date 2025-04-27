<?php
$business_solution_blocks = get_fields(); // get all fields in array
// business solution information
$business_solution_title = $business_solution_blocks['business_solution_title'];
$business_solution_steps = $business_solution_blocks['business_solution_steps'];
if (!empty($business_solution_steps)): ?>
	<!-- Simplified Business Section Start -->
	<section class="section-spacing-bg simplified-bg">
		<div class="container">
			<?php if (!empty($business_solution_title)): ?>
				<h2 class="h3">
					<?php echo $business_solution_title; ?>
				</h2>
			<?php endif; ?>
			<div class="swiper steps-boxes-Swiper">
				<div class="swiper-wrapper">
					<?php
					$i = 1;
					foreach ($business_solution_steps as $steps):
						$solution_title = $steps['solution_title'];
						$solution_image = $steps['solution_image'];
						if (!empty($solution_title) && !empty($solution_image)): ?>

							<div class="simplified-steps-box swiper-slide">
								<h3 class="h6">
									<?php echo sprintf('%02d', $i++); ?>.
									<?php echo $solution_title; ?>
								</h3>
								<img src="<?php echo $solution_image['url']; ?>" alt="<?php echo $solution_image['alt']; ?>"
									height="115" width="123" />
							</div>

							<?php
						endif;
					endforeach; ?>
				</div>
			</div>
		</div>
		</div>
		</div>
	</section>
	<script>
		jQuery(function () {
			var FooterSwiper = new Swiper(".steps-boxes-Swiper", {
				slidesPerView: 1,
				spaceBetween: 0,
				loop: true,
				speed: 4000,
				simulateTouch: true,
				autoplay:
				{
					delay: 500,
					disableOnInteraction: false,
				},
				breakpoints: {
					768: {
						slidesPerView: 4,
					},
				},
			});
		});
	</script>
	<!-- Simplified Business Section End -->
<?php endif; ?>