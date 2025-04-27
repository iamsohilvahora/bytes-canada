<?php
// Cup of coffee section
$title = get_sub_field('main_title'); // get main title
$description = get_sub_field('content'); // get content
$image = get_sub_field('select_image'); // get image
$contact_form = get_sub_field('select_contact_form'); // get contact form shortcode ?>
<!-- Contact-form Section Start -->
<section class="Contact-form section-spacing">
    <div class="container">
        <div class="Contact-form-box">
            <div class="Contact-form-title">
                <?php if(!empty($title)): ?>
                    <h2 class="h3"><?php echo $title; ?></h2>
                <?php endif;
                if(!empty($description)): ?>
                    <p><?php echo $description; ?></p>
                <?php endif;
                if(!empty($image)): ?>
                    <div class="contact-coffee">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="contact-coffee-wave" height="166" width="166" />
                    </div>
                <?php endif; ?>
            </div>
            <?php if (!empty($contact_form)): ?>
                <div class="Contact-form-data">
                    <?php echo $contact_form; ?>
                    <div id="Contact-form-data-tick-box">
                        <div class="Contact-form-data-tick">
                            <div class="Contact-form-data-tick-top">
                                <svg viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">
                                    <g stroke="currentColor" stroke-width="2" fill="none" fill-rule="evenodd"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path class="circle"
                                            d="M13 1C6.372583 1 1 6.372583 1 13s5.372583 12 12 12 12-5.372583 12-12S19.627417 1 13 1z" />
                                        <path class="tick" d="M6.5 13.5L10 17 l8.808621-8.308621" />
                                    </g>
                                </svg>
                            </div>
                            <div class="Contact-form-data-tick-bottom anfade-in">
                                <p class="h2 thankemogy">Thank You <img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/happy.svg"
                                        alt="smile" class="contact-coffee-wave" height="64" width="64" /></p>
                                <p class="h4 thanktext">We have received your message and would like to thank you for writing to us.
                                    One of our experts will reach out to you soon.</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Contact-form Section End -->
