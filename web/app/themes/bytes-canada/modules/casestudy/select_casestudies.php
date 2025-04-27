<?php
// Casestudies section
$casestudy_heading = get_sub_field('casestudy_heading'); // get project details
$casestudies = get_sub_field('select_case_study'); // get project details
$default_image = get_field('select_image', 'options'); // get default image
if(!empty($casestudies)): ?>
<!-- Case Study you can check Section Start -->
<section class="section-spacing case-videos">
    <div class="container">
        <div class="case-study-youcan-check">
            <?php if(!empty($casestudy_heading)): ?>
                <h2 class="case-study-youcan-check-title"><?php echo $casestudy_heading; ?></h2>
            <?php endif; ?>
            <div class="case-videos-outbox">
            <?php
            foreach($casestudies as $casestudy):
                $casestudy_id = $casestudy->ID;
                $post_title = $casestudy->post_title;
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
                    <a href="<?php echo get_the_permalink($casestudy_id); ?>" class="case-videos-box-link">
                        <?php if (!empty($video_url) && ($video_type == "internal_link")): ?>
                            <video width="100%" autoplay muted loop playsinline class="connect-bg case-videos-box-video"
                                poster="<?php echo $video_image; ?>">
                                <source src="<?php echo $video_url; ?>" type="video/mp4">
                                <source src="<?php echo $video_url; ?>" type="video/ogg">
                            </video>
                        <?php endif; ?>
                        <?php if (!empty($video_url) && ($video_type == "external_link")): ?>
                            <iframe width="560"  class="connect-bg case-videos-box-video" height="424" src="<?php echo $video_url; ?>?autoplay=1&controls=0&mute=1&loop=1&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; autostop; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <?php endif; ?> 
                        <h3 class="h6 case-videos-box-title">
                            <?php echo $post_title; ?><i class="case-videos-box-arrow"></i>
                        </h3>
                        <p class="case-videos-box-data">
                            <?php echo rtrim($cat_name, ', '); ?>
                        </p>
                    </a>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- Case Study you can check Section End -->
<?php endif; ?>
