<?php
/**
 *  This file contains registration of blocks and it's category
 */
function bytes_canada_custom_category_blocks($categories){
    $custom_category = array(
        'slug'  => 'bytes-canada-blocks',
        'title' => __('Bytes Canada Custom Blocks', 'bytes-canada'),
    );
    array_unshift($categories, $custom_category);
    return $categories;
}
add_action('block_categories_all', 'bytes_canada_custom_category_blocks', 10, 100);
function bytes_canada_register_blocks(){
    // Banner block
    acf_register_block([
        'name'            => 'banner_block',
        'title'           => __('Home Banner', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/home/banner-section.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/banner-section.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/banner-section.js'
    ]);

    // Home About block
    acf_register_block([
        'name'            => 'home_about_block',
        'title'           => __('Home About', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/home/home-about.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/home-about.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/home-about.js'
    ]);

    // Slider block
    acf_register_block([
        'name'            => 'slider_block',
        'title'           => __('Home Slider', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/home/slider-section.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/slider-section.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/slider-section.js'
    ]);

    // Our expertise block
    acf_register_block([
        'name'            => 'our_expertise_block',
        'title'           => __('Our Expertise Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/home/our-expertise.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/our-expertise.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/our-expertise.js'
    ]);

    // Featured post block
    acf_register_block([
        'name'            => 'featured_post_block',
        'title'           => __('Featured Post Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/home/featured-post.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/featured-post.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/featured-post.js'
    ]);

    // Our client block
    acf_register_block([
        'name'            => 'our_client_block',
        'title'           => __('Our Client Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/home/our-client.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/our-client.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/our-client.js'
    ]);

    // Default Post block
    acf_register_block([
        'name'            => 'default_post_block',
        'title'           => __('Default Post Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/home/default_post.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/default_post.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/default_post.js'
    ]);

    // Cup of coffee block
    acf_register_block([
        'name'            => 'cup_of_coffee_block',
        'title'           => __('Cup of coffee Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/home/cup-of-coffee.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/cup-of-coffee.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/cup-of-coffee.js'
    ]);

    // Service banner block
    acf_register_block([
        'name'            => 'service_banner_block',
        'title'           => __('Service Banner', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/service/service-banner.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/service-banner.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/service-banner.js'
    ]);

    // We Build block
    acf_register_block([
        'name'            => 'we_build_block',
        'title'           => __('We Build Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/service/we-build.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/we-build.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/we-build.js'
    ]);

    // Service slider block
    acf_register_block([
        'name'            => 'service_slider_block',
        'title'           => __('Service Slider', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/service/service-slider.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/service-slider.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/service-slider.js'
    ]);

    // Service Page Slider block
    acf_register_block([
        'name'            => 'service_block',
        'title'           => __('Service Page Slider Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/service/service-page-slider.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/service-page-slider.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/service-page-slider.js'
    ]);
    
    // Experience block
    acf_register_block([
        'name'            => 'experience_block',
        'title'           => __('Experience Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/service/experience.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/experience.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/experience.js'
    ]);


    // We are rated block
    acf_register_block([
        'name'            => 'we_are_rated_block',
        'title'           => __('We Are Rated Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/solution/we-are-rated.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/we-are-rated.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/we-are-rated.js'
    ]);

    // Solution block
    acf_register_block([
        'name'            => 'solution_block',
        'title'           => __('Solution Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/solution/solution.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/solution.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/solution.js'
    ]);

    // Why Choose Us block
    acf_register_block([
        'name'            => 'why_choose_us_block',
        'title'           => __('Why Choose Us Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/solution/why-choose-us.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/why-choose-us.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/why-choose-us.js'
    ]);

    // Business Solution block
    acf_register_block([
        'name'            => 'business_solution_block',
        'title'           => __('Business Solution Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/solution/business-solution.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/business-solution.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/business-solution.js'
    ]);

    // Client Testimonial block
    acf_register_block([
        'name'            => 'client_testimonial_block',
        'title'           => __('Client Testimonial Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/solution/client-testimonial.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/client-testimonial.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/client-testimonial.js'
    ]);

    // Build Brand block
    acf_register_block([
        'name'            => 'build_brand_block',
        'title'           => __('Build Brand Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/solution/build-brand.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/build-brand.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/build-brand.js'
    ]);

    // FAQ block
    acf_register_block([
        'name'            => 'faq_block',
        'title'           => __('FAQ Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/solution/faq.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/faq.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/faq.js'
    ]);

    // Animate Text Block
    acf_register_block([
        'name'            => 'animate_text_block',
        'title'           => __('Animate Text Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/technology/animate-text.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/animate-text.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/animate-text.js'
    ]);

    // 360 Software block
    acf_register_block([
        'name'            => 'software_block',
        'title'           => __('360 Software Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/technology/360-software.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/360-software.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/360-software.js'
    ]);

    // Development Service block
    acf_register_block([
        'name'            => 'web3_development_block',
        'title'           => __('Development Service Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/technology/development-service.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/development-service.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/development-service.js'
    ]);

    // App Development block
    acf_register_block([
        'name'            => 'development_block',
        'title'           => __('App Development Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/technology/app-development.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/app-development.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/app-development.js'
    ]);

    // Magento Development block
    acf_register_block([
        'name'            => 'magento_development_block',
        'title'           => __('Magento Development Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/technology/magento-development.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/magento-development.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/magento-development.js'
    ]);

    // DevOps Service block
    acf_register_block([
        'name'            => 'devops_service_block',
        'title'           => __('DevOps Service Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/technology/devops-service.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/devops-service.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/devops-service.js'
    ]);

    // Odoo Development block
    acf_register_block([
        'name'            => 'odoo_development_block',
        'title'           => __('Odoo Development Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/technology/odoo-development.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/odoo-development.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/odoo-development.js'
    ]);

    // Case study block
    acf_register_block([
        'name'            => 'case_study_block',
        'title'           => __('Case Study Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/casestudies/case-study.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/case-study.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/case-study.js'
    ]);

    // Our Guide Title block
    acf_register_block([
        'name'            => 'our_guide_title_block',
        'title'           => __('Our Guide Title Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/ourguide/our-guide-title.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/our-guide-title.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/our-guide-title.js'
    ]);

    // Our Guide block
    acf_register_block([
        'name'            => 'our_guide_block',
        'title'           => __('Our Guide Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/ourguide/our-guide.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/our-guide.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/our-guide.js'
    ]);

    // Better Connected block
    acf_register_block([
        'name'            => 'better_connected_block',
        'title'           => __('Better Connected Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/ourguide/better-connected.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/better-connected.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/better-connected.js'
    ]);

    // About Company block
    acf_register_block([
        'name'            => 'about_company_block',
        'title'           => __('About Company Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/aboutus/about-company.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/about-company.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/about-company.js'
    ]);

    // Video block
    acf_register_block([
        'name'            => 'video_block',
        'title'           => __('Video Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/aboutus/video.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/video.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/video.js'
    ]);

    // Counter block
    acf_register_block([
        'name'            => 'counter_block',
        'title'           => __('Counter Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/aboutus/counter.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/counter.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/counter.js'
    ]);

    // Values block
    acf_register_block([
        'name'            => 'values_block',
        'title'           => __('Values Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/aboutus/values.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/values.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/values.js'
    ]);

    // Awards & Recognition block
    acf_register_block([
        'name'            => 'awards_recognition_block',
        'title'           => __('Awards & Recognition Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/aboutus/awards-recognition.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/awards-recognition.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/awards-recognition.js'
    ]);

    // Leadership block
    acf_register_block([
        'name'            => 'leadership_block',
        'title'           => __('Leadership Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/aboutus/leadership.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/leadership.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/leadership.js'
    ]);

    // Guide content block
    acf_register_block([
        'name'            => 'guide_content_block',
        'title'           => __('Guide Content Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/guideinner/guide-content.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/guide-content.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/guide-content.js'
    ]);

    // Subscribe block
    acf_register_block([
        'name'            => 'subscribe_block',
        'title'           => __('Subscribe Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/guideinner/subscribe.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/subscribe.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/subscribe.js'
    ]);

    // Solution inner page
    // About Solution Block
    acf_register_block([
        'name'            => 'about_solution_block',
        'title'           => __('About Solution Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/solutioninner/about-solution.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/about-solution.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/about-solution.js'
    ]);


    // Solution Approach Block
    acf_register_block([
        'name'            => 'solution_approach_block',
        'title'           => __('Solution Approach Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/solutioninner/solution-approach.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/solution-approach.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/solution-approach.js'
    ]);

    // App Features Block
    acf_register_block([
        'name'            => 'app_features_block',
        'title'           => __('App Features Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/solutioninner/app-features.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/app-features.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/app-features.js'
    ]);

    // Hire Block
    acf_register_block([
        'name'            => 'hire_block',
        'title'           => __('Hire Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/solutioninner/hire.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/hire.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/hire.js'
    ]);

    // Architecture Block
    acf_register_block([
        'name'            => 'architecture_block',
        'title'           => __('Architecture Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/solutioninner/architecture-block.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/architecture-block.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/architecture-block.js'
    ]);

    // Tech Stack Block
    acf_register_block([
        'name'            => 'tech_stack_block',
        'title'           => __('Tech Stack Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/solutioninner/tech-stack.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/tech-stack.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/tech-stack.js'
    ]);

    // Application Detail Block
    acf_register_block([
        'name'            => 'application_detail_block',
        'title'           => __('Application Detail Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/solutioninner/application-detail.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/application-detail.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/application-detail.js'
    ]);

    // Services inner page
    // About Service Block
    acf_register_block([
        'name'            => 'about_service_block',
        'title'           => __('About Service Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/serviceinner/about-service.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/about-service.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/about-service.js'
    ]);

    // Service Development 1 Block
    acf_register_block([
        'name'            => 'service_development_1_block',
        'title'           => __('Service Development 1 Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/serviceinner/service-development-1.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/service-development-1.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/service-development-1.js'
    ]);

    // Service Framework Block
    acf_register_block([
        'name'            => 'service_framework_block',
        'title'           => __('Service Framework Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/serviceinner/service-framework.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/service-framework.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/service-framework.js'
    ]);

    // Service Development 2 Block
    acf_register_block([
        'name'            => 'service_development_2_block',
        'title'           => __('Service Development 2 Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/serviceinner/service-development-2.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/service-development-2.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/service-development-2.js'
    ]);

    // Fullstack Development Block
    acf_register_block([
        'name'            => 'fullstack_development_block',
        'title'           => __('Fullstack Development Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/serviceinner/fullstack-development.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/fullstack-development.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/fullstack-development.js'
    ]);

    // Technology inner page
    // About Technology Block
    acf_register_block([
        'name'            => 'about_technology_block',
        'title'           => __('About Technology Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/technologyinner/about-technology.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/about-technology.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/about-technology.js'
    ]);

    // Technology Services Block
    acf_register_block([
        'name'            => 'technology_services_block',
        'title'           => __('Technology Services Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/technologyinner/technology-services.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/technology-services.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/technology-services.js'
    ]);

    // Technology Approach Block
    acf_register_block([
        'name'            => 'technology_approach_block',
        'title'           => __('Technology Approach Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/technologyinner/technology-approach.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/technology-approach.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/technology-approach.js'
    ]);

    // Technology Offer Block
    acf_register_block([
        'name'            => 'technology_offer_block',
        'title'           => __('Technology Offer Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/technologyinner/technology-offer.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/technology-offer.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/technology-offer.js'
    ]);

    // Technology Why Choose Block
    acf_register_block([
        'name'            => 'technology_why_choose_block',
        'title'           => __('Technology Why Choose Block', 'bytes-canada'),
        'category' => 'bytes-canada-blocks',
        'render_template' => 'template-parts/custom_blocks/technologyinner/why-choose-tech.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/custom-blocks-css/why-choose-tech.css',
        'enqueue_script' => get_stylesheet_directory_uri() . '/assets/js/custom-blocks-js/why-choose-tech.js'
    ]);
}
add_action('init', 'bytes_canada_register_blocks');
