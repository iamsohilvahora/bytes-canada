<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bytes_canada
 */
get_header();
$options = get_fields('options'); // get all fields of options
$title = $options['404_title'];
$sub_title = $options['404_sub_title'];
$content = $options['404_content'];
$home_button_title = $options['home_button_title'];
$homepage_link = $options['homepage_link'];
$contact_button_title = $options['contact_button_title'];
$contact_link = $options['contact_link']; ?>
<!-- 404 Section Start -->
<div class="errorpage-outer">
	<div class="notfound">
		<div class="innerpage-title-bg">
			<span class="shade1"></span>
			<span class="shade2"></span>
			<span class="shade3"></span>
		</div>
		<?php if(!empty($title)): ?>
			<div class="notfound-title">
				<h1 class="h1"><?php echo $title; ?></h1>
			</div>
		<?php endif;
		if(!empty($sub_title)): ?>
			<h2 class="h3"><?php echo $sub_title; ?></h2>
		<?php endif;
		if(!empty($content)): ?>
			<p><?php echo $content; ?></p>
		<?php endif; ?>
		<div class="notfound-links">
			<?php if(!empty($home_button_title) && !empty($homepage_link)): ?>
				<a href="<?php echo $homepage_link; ?>" class="btn magnet-button"><?php echo $home_button_title; ?></a>
			<?php endif;
			if(!empty($contact_button_title) && !empty($contact_link)): ?>
				<a href="<?php echo $contact_link; ?>" class="btn magnet-button"><?php echo $contact_button_title; ?></a>
			<?php endif; ?>
		</div>
	</div>
</div>
<style>
	.innerpage-title-bg {
		width: 100%;
		height: 100%;
		position: absolute;
		z-index: -1;
	}
	.innerpage-title-bg span {
		filter: blur(13.125vw);
		position: absolute;
		width: 30.156vw;
		height: 30.156vw;
	}
	.innerpage-title-bg .shade1 {
		background: #3c88f4;
		opacity: 0.4;
		left: -1.875vw;
		top: 9.219vw;
	}
	.innerpage-title-bg .shade2 {
		background: #50295e;
		opacity: 0.7;
		left: 42.292vw;
		top: 7.865vw;
	}
	.innerpage-title-bg .shade3 {
		background: #da3333;
		opacity: 0.3;
		left: auto;
		right: 0px;
		top: 23.333vw;
	}
	.errorpage-outer {
		width: 100%;
	}
	.notfound {
		width: 100%;
		display: flex;
		flex-flow: column;
		height: 100vh;
		text-align: center;
		color: #fff;
		justify-content: center;
	}
	.notfound p {
		max-width: 668px;
		margin: 40px auto;
		width: 90%;
	}
	.notfound-title {
		color: #da3333;
		margin-bottom: 40px;
	}
	.notfound-links {
		gap: 32px;
		display: flex;
		justify-content: center;
	}
	@media screen and (min-width: 1921px) {}

	@media screen and (max-width: 767px) {
		.notfound-links {
			gap: 20px;
		}
	}
</style>
<!-- 404 Section Start -->
<?php
get_footer();