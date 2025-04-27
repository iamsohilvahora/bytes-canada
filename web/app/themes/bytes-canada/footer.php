<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bytes_canada
 */
$options = get_fields('options');
// clutch review information
$clutch_review_title = $options['clutch_review_title'];
$clutch_review_image = $options['clutch_review_image'];
$clutch_review_link = $options['clutch_review_link'];
// navigation menus
$navigation_menus = $options['navigation_menus'];
// social media
$social_link_title = $options['social_link_title'];
$social_links = $options['social_links'];
// company address
$company_address = $options['company_address']; ?>
<footer id="colophon" class="site-footer">
	<div class="custom-footer">
		<div class="custom-footer-top">
			<div class="custom-footer-top-title">
				<?php if (!empty($clutch_review_title)): ?>
					<div class="custom-footer-top-title-top">
						<h3 class="h2">
							<?php echo $clutch_review_title; ?><span></span>
						</h3>
					</div>
				<?php endif;
				if (!empty($clutch_review_image) && !empty($clutch_review_link)): ?>
					<div class="custom-footer-top-title-bottom">
						<a href="<?php echo $clutch_review_link; ?>" target="_blank" aria-label="clutch review">
							<img src="<?php echo $clutch_review_image['url']; ?>"
								alt="<?php echo $clutch_review_image['alt']; ?>" height="47" width="197">
						</a>
					</div>
				<?php endif; ?>
			</div>
			<div class="custom-footer-top-links">
				<?php
				if (!empty($navigation_menus)):
					foreach ($navigation_menus as $menu):
						$menu_title = $menu['menu_title'];
						$select_menu = $menu['select_menu']; ?>
						<?php if (!empty($menu_title) && !empty($select_menu)): ?>
							<div class="custom-footer-top-links-box">
								<div class="custom-footer-top-links-top">
									<h4><span>
											<?php echo $menu_title; ?>
										</span><i></i></h4>
								</div>
								<div class="custom-footer-top-links-bottom">
									<?php echo $select_menu; ?>
								</div>
							</div>
						<?php endif; ?>
						<?php
					endforeach;
				endif;
				if (!empty($social_links)): ?>
					<div class="custom-footer-top-links-box">
						<?php if (!empty($social_link_title)): ?>
							<div class="custom-footer-top-links-top">
								<h4><span>
										<?php echo $social_link_title; ?>
									</span><i></i></h4>
							</div>
						<?php endif; ?>
						<div class="custom-footer-top-links-bottom">
							<ul>
								<?php foreach ($social_links as $social):
									$title = $social['title'];
									$link = $social['link'];
									if (!empty($title) && !empty($link)): ?>
										<li><a href="<?php echo $link; ?>" target="_blank"><?php echo $title; ?></a></li>
									<?php endif;
								endforeach; ?>
							</ul>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<?php if (!empty($company_address)): ?>
			<div class="custom-footer-bottom swiper Footer-Swiper">
				<div class="custom-footer-bottom-boxes swiper-wrapper">
					<?php foreach ($company_address as $company):
						$image = $company['image'];
						$country_name = $company['country_name'];
						$address = $company['company_address'];
						$phone_number = $company['phone_number'];
						$email_address = $company['email_address']; ?>
						<div class="custom-footer-bottom-box swiper-slide">
							<?php if (!empty($image)): ?>
								<div class="custom-footer-bottom-box-image">
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" height="115"
										width="114">
								</div>
							<?php endif; ?>
							<div class="custom-footer-bottom-box-data">
								<?php if (!empty($country_name)): ?>
									<h4>
										<?php echo $country_name; ?>
									</h4>
								<?php endif;
								if (!empty($address)): ?>
									<p>
										<?php echo $address; ?>
									</p>
									<div class="cus-email-footer">
										<?php if (!empty($phone_number)): ?>
											<a href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a>
										<?php endif;
										if (!empty($email_address)): ?>
											<a href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a>
										<?php endif; ?>
									</div>
								<?php endif; ?>

							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
	<script>
		jQuery(function () {
			// Quick Links Script
			jQuery('.custom-footer-top-links-box').click(function () {
				jQuery(this).toggleClass('active').siblings().removeClass('active');
			});

			// Footer Address Slider Script
			var FooterSwiper = new Swiper(".Footer-Swiper", {
				slidesPerView: 1,
				spaceBetween: 0,
				loop: true,
				speed: 4000,
				simulateTouch: true,
				breakpoints: {
					768: {
						slidesPerView: 2,
					},
					992: {
						slidesPerView: 3,
					},
				},
				autoplay:
				{
					delay: 500,
					disableOnInteraction: false,
				},
				
			});
		});
	</script>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>

</html>