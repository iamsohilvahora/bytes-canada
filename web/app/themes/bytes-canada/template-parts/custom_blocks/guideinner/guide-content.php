<?php
get_header(); ?>
<section class="section-banner about-us-banner section-breadcrumbs section-spacer">
   <div class="container">
      <div class="breadcrumbs-top-heading animated animatedFadeInUp fadeInUp bt-parent">
	  	<p><a href="" aria-label="Guides"><?php echo "Guides" ; ?></a></p>
      </div>
      <h1 class="m-0 animated animatedFadeInUp fadeInUp bt-black"><?php the_title(); ?></h1>
      <p><?php the_excerpt(); ?></p>
    </div>
</section>

<section class="bt-author-post section-spacer pt-0">
	<div class="container">
		<div class="bt-post-wrapper">
			<?php
				$id = get_the_id();
				$author_id = get_post_field( 'post_author', $id );
				$author_name = get_the_author_meta( 'display_name', $author_id );
				$image = get_field('profile_picture', 'user_'.$author_id);
				$img = get_avatar_url($author_id);
			?>
			<div class="bt-author-details">
				<p class="mb-0"><?php the_time('M j, Y'); ?></p>
				<img src="<?php if($image == NULL || $image == '') { echo $img; } else { echo $image; }; ?>" alt="<?php echo $author_name; ?>" width="40" height="40">
				<p class="mb-0">By <?php echo $author_name;?></p>
			</div>
			<div>
				<?php 
					$resource_tags = get_terms(
						array('taxonomy' => 'resources-tag', 'hide_empty' => false
					));
					if($resource_tags):
						foreach($resource_tags as $resource_tag):
							$term_id = $resource_tag->term_id;
							$term_name = $resource_tag->name;
						endforeach;
					endif;	
				?>
			</div>
		</div>
	</div>
</section>
<section class="section-single-pr-img about-pg" data-scroll data-persistent data-scroll-section-inview <?php if ( wp_is_mobile() ) { echo 'data-scroll-speed="1"'; }else{ echo 'data-scroll-speed="3"'; } ?> data-scroll-call="dynamicBackground" data-scroll-repeat>
   <div class="container">
      <div class="c-fixed_wrapper" data-scroll data-scroll-call="dynamicBackground" data-scroll-repeat>
               <div class="c-fixed_target" id="fixed-target"></div>
               <div class="c-fixed" data-scroll data-scroll-sticky data-scroll-target="#fixed-target" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)">
            </div>
      </div>
   </div>
</section>

<main id="primary" class="site-main">
	<?php $i= 1; ?>
		<section class="bt-blog-main" id="bytestableCon">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 bt-blog-main-content">
						<article>
							<?php
								// Check rows exists.
								if( have_rows('content_repeater') ){
									$i= 1;
									// Loop through rows.
									while( have_rows('content_repeater') ) : the_row();
										$title = get_sub_field('title'); // main title ?>
											<div class="bt-blog-content-wrapper byt-listing active" id="main-<?php echo $i; ?>" data-scroll>
												<h3 class="mb-0"><?php echo $title; ?></h3>	
												<?php	  
												// Check rows exists.
												if( have_rows('description') ){						 
													$j = 1;
													// Loop through rows.
													while( have_rows('description') ) : the_row();
														$sub_title = get_sub_field('sub_title'); // sub title
														$content = get_sub_field('content'); // description
														if(($sub_title != '' || $sub_title != NULL) && ($content != '' || $content != NULL)){ ?>
														<div class="bt-blog-sub-wrapper">
																<p class="mb-0 blog-sub-title" id="sub-<?php echo $i.'-'.$j ?>" data-scroll><strong><?php echo $sub_title; ?> </strong></p> <?php
														echo $content;
														echo '</div>'; 
													}else{
														echo $content; 
														}
													$j++;
													endwhile;
												}
												?>	
											</div>	
											<?php
										$i++;
									endwhile;
								}
							?>
						</article> 
					</div>
					<div class="col-lg-4 bt-blog-sidebar">
						<aside data-scroll data-scroll-sticky data-scroll-target="#bytestableCon">
							<div class="bt-table-contents">
								<div class="">
									<h4 class="mb-0">Table of Contents</h4>
									<ul class="bt-table-contents-list pt-40 pb-40">
										<?php if( have_rows('content_repeater') ){ $i= 1;											
											while( have_rows('content_repeater') ) : the_row(); ?>  
										<li data-scroll>
											<a href="#main-<?php echo $i; ?>" data-id="main-<?php echo $i; ?>" data-scroll-to><?php echo get_sub_field('title'); ?></a>
											<?php	  
												if( have_rows('description') ){	 $j = 1;
															?>
														<?php while( have_rows('description') ) : the_row();
															$sub_title = get_sub_field('sub_title'); // sub title                                             
															if($sub_title != '' || $sub_title != NULL ) : ?>
															<?php endif; $j++; endwhile;?>
											<?php } ?>                                                                                           
										</li>														
										<?php $i++; endwhile; } ?>                                               
									</ul>
								</div>
							</div>
							<div>
								<?php get_sidebar(); ?>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</section>
</main>
<!-- #main -->
<?php
get_footer();