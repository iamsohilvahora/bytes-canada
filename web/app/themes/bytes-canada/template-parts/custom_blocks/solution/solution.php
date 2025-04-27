<?php
$solution_blocks = get_fields(); // get all fields in array
// Solution information
$solution_title = $solution_blocks['solution_title'];
$solution_desc = $solution_blocks['solution_description'];
$solution_posts = $solution_blocks['choose_solution_post'];
$default_image = get_field('select_image', 'options');
if(!empty($solution_posts)): ?>
<!-- Bespoke Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="Bespoke-top">
        	<?php if(!empty($solution_title)): ?>
            	<h2 class="h3"><?php echo $solution_title; ?></h2>
            <?php endif;
            if(!empty($solution_desc)): ?>
            	<p class="h6"><?php echo $solution_desc; ?></p>
            <?php endif; ?>
        </div>
        <div class="Bespoke-bottom">
        	<?php
        		$i = 1;
        		$total_solution_post = count($solution_posts);
        		foreach($solution_posts as $sol_post):
        			$title = $sol_post['solution_page']['title'] ? $sol_post['solution_page']['title'] : "";
        			$url = $sol_post['solution_page']['url'] ? $sol_post['solution_page']['url'] : "";
        			$target = $sol_post['solution_page']['target'] ? $sol_post['solution_page']['target'] : "";
        			$solution_image = $sol_post['solution_image'];
        			$excerpt = $sol_post['solution_content'];
					if(!empty($solution_image)){
                    	$post_featured_image = $solution_image['url'];
                	}
                	else{
                    	$post_featured_image = $default_image['url'];
                	}
        			if($i == 1) { $class = "Bespoke-small"; }
        			elseif($i == 2) { $class = "Bespoke-large"; }
        			else{
				        if($i % 2 == 0){
				        	if($class == "Bespoke-large"){
								$class = "Bespoke-small";
							}
							elseif($class == "Bespoke-small"){
								$class = "Bespoke-large";
							}
							else{}
						}
						else{
							if($class == "Bespoke-large"){
								$class = "Bespoke-large";
							}
							if($class == "Bespoke-small"){
								$class = "Bespoke-small";
							}
						}
        			}
        			if(!empty($post_featured_image) && !empty($title) && !empty($url) && !empty($excerpt)): ?>
		            <div class="<?php echo $class; ?>">
		                <a href="<?php echo $url; ?>" target="<?php echo $target; ?>">
		                    <div class="connect-bg">
                            	<img src="<?php echo $post_featured_image; ?>" alt="<?php echo $title; ?>" width="100%" />
                        	</div>
		                    <?php if(!empty($title)): ?>
		                    	<h3 class="h5"><?php echo $title; ?><i></i></h3>
		                	<?php endif;
		                	if(!empty($excerpt)): ?>
		                    	<p class="p"><?php echo $excerpt; ?></p>
		                	<?php endif; ?>
		                    <span></span>
		                </a>
		            </div>
		        	<?php endif; ?>
        <?php if(($i % 2 == 0) && ($i !== $total_solution_post)): ?>
        	</div>
        	<div class="Bespoke-bottom-overbgshape1">
        	    <span></span>
        	</div>
        	<div class="Bespoke-bottom">
        <?php endif; ?>
        <?php
        $i++;
    endforeach; ?>
    </div>
</section>
<!-- Bespoke Section End -->
<?php endif; ?>
