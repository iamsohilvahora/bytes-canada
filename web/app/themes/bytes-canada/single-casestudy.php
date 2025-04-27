<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bytes_canada
 */
get_header();
$casestudy_contains_arr = array();
if(have_rows('case_studies')):
	while(have_rows('case_studies')) : the_row();
		$casestudy_contains_title = get_sub_field('casestudy_contains_title');
		if(!empty($casestudy_contains_title)):
			$casestudy_contains_arr[] = $casestudy_contains_title;
		endif;
	endwhile;
endif; ?>
	<main id="primary" class="site-main">
		<?php
		/* *** check flexible content field exists or not *** */
		if(have_rows('case_studies')):
		    /* *** Loop through rows *** */
		    while(have_rows('case_studies')) : the_row();
		        /* *** layout *** */
		        $args = (get_row_layout() == "case_study_content") ? $casestudy_contains_arr : "";
		        get_template_part('modules/casestudy/'. get_row_layout(), null ,$args);
		    /* *** End loop *** */
		    endwhile;
		/* *** No value *** */
		else:
		    echo "Layout Not Found";
		endif;
		?>
	</main><!-- #main -->
<?php
get_footer();
