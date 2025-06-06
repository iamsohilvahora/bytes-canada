<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bytes_canada
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php bytes_canada_post_thumbnail(); ?>
	<?php if (is_page('privacy-policy')): ?>
	  	<div class="our-guide-inner-top-bg-shape">
	    	<span class="our-guide-inner-top-bg-shape-shade1"></span>
	    	<span class="our-guide-inner-top-bg-shape-shade2"></span>
	    	<span class="our-guide-inner-top-bg-shape-shade3"></span>
	  	</div>
  	<?php endif; ?>
	<div class="entry-content our-guide-content-blocks-left">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bytes-canada' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'bytes-canada' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
