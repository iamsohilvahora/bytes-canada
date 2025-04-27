<?php
$casestudy_blocks = get_fields(); // get all fields in array
$default_image = get_field('select_image', 'options'); // get default image
$add_load_more = $casestudy_blocks['add_load_more'];
$posts_per_page = $casestudy_blocks['posts_per_page'];
if (empty($posts_per_page)) {
	$posts_per_page = 4;
}
if (!empty($add_load_more)) {
	$offset = $posts_per_page;
	$class = "main";
} else {
	$offset = 0;
	$class = "";
}
// get total case-study post
$total_post_args = array(
	'post_type' => 'casestudy',
	'post_status' => 'publish',
	'posts_per_page' => -1,
);
$the_query = new WP_Query($total_post_args);
$totalpost = $the_query->found_posts; // total casestudy post
// case-study args
$post_args = array(
	'post_type' => 'casestudy',
	'post_status' => 'publish',
	'posts_per_page' => $posts_per_page,
	'offset' => $offset
);
$arr_posts = new WP_Query($post_args);
$total_arr_posts = $arr_posts->post_count; // get next post
if ($arr_posts->have_posts()): ?>
	<!-- Case Videos Section Start -->
	<section class="section-spacing case-videos">
		<div class="container">
			<div class="case-videos-outbox <?php echo $class; ?>">
				<?php
				while ($arr_posts->have_posts()):
					$arr_posts->the_post();
					$casestudy_id = get_the_id();
					$post_categories = get_the_terms($casestudy_id, 'casestudy-category'); // get categories
					$cat_name = "";
					if (!empty($post_categories)):
						foreach ($post_categories as $post_category):
							$cat_name .= $post_category->name . ", ";
						endforeach;
					endif;
					$case_studies = get_field('case_studies', $casestudy_id);
					if ($case_studies) {
					    // Get the "casestudy_video" section.
					    $casestudy_video_section = false;
					    foreach ($case_studies as $case_study) {
					        if ($case_study['acf_fc_layout'] === 'casestudy_video') {
					            $casestudy_video_section = $case_study;
					            break; // Stop the loop once we find the "casestudy_video" section.
					        }
					    }
					    // Check if "casestudy_video" section exists and access its fields.
					    if ($casestudy_video_section) {
					        $casestudy_video = $casestudy_video_section['select_video'];
					        $video_image = $casestudy_video['video_image'];
							if (!empty($video_image)) {
								$video_image = $video_image['url'];
							} else {
								$video_image = $default_image['url'];
							}
							$video_type = $casestudy_video['video_type'];
							if ($video_type == "internal_link") {
							    $video_url = $casestudy_video['internal_video']['url'];
							} else {
							    $video_url = $casestudy_video['external_video'];
							}
						}
					} ?>
					<div class="case-videos-box">
						<a href="<?php echo get_the_permalink(); ?>" class="case-videos-box-link">
							<?php if (!empty($video_url) && ($video_type == "internal_link")): ?>
								<video width="100%" autoplay muted loop playsinline class="connect-bg case-videos-box-video"
									poster="<?php echo $video_image; ?>">
									<source src="<?php echo $video_url; ?>" type="video/mp4">
									<source src="<?php echo $video_url; ?>" type="video/ogg">
								</video>
							<?php endif; ?>
							<?php if (!empty($video_url) && ($video_type == "external_link")): ?>
								<iframe width="560" class="connect-bg case-videos-box-video" height="424" src="<?php echo $video_url; ?>?autoplay=1&controls=0&mute=1&loop=1&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; autostop; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<?php endif; ?>
							<h2 class="h6 case-videos-box-title">
								<?php echo get_the_title(); ?><i class="case-videos-box-arrow"></i>
							</h2>
							<p class="case-videos-box-data">
								<?php echo rtrim($cat_name, ', '); ?>
							</p>
						</a>
					</div>
				<?php endwhile;
				wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
	<?php if ($totalpost != "" && $totalpost > $posts_per_page && $posts_per_page > 0 && (!empty($add_load_more)) && ($totalpost > ($offset + $total_arr_posts))): ?>
		<div class="case-videos-loadmore-box"><button type="button" class="btn case-videos-loadmore pagination load-more-btn"
				data-ppp-post="<?php echo $posts_per_page; ?>" data-offset-post="<?php echo $offset; ?>" aria-label="Load More">Load More</button></div>
	<?php endif; ?>
	<!-- Case Videos Section End -->
<?php endif; ?>
