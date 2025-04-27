<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bytes_canada
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> dir="ltr">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description"
		content="A top software development company in USA, Canada & India delivering web and mobile app solutions to global startups, businesses & enterprises.">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="msapplication-config" content="browserconfig.xml">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php
	$options = get_fields('options');
	$header_logo = $options['site_logo']; // get header logo 
	$talk_button = $options['lets_talk_button']; // let's talk button
	$talk_button_label = $talk_button['button_label'];
	$talk_button_link = button_group($talk_button);
	$lets_talk_icon = $options['lets_talk_icon']; // get let's talk icon ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e('Skip to content', 'bytes-canada'); ?>
		</a>
		<header id="masthead" class="site-header">
			<div class="site-header-outbox">


				<div class="site-branding">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<?php if (!empty($header_logo)): ?>
							<img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['alt']; ?>"
								width="167" height="48">
						<?php else:
							bloginfo('name'); ?>
						<?php endif; ?>
					</a>
					<?php
					if (is_front_page() && is_home()):
						?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php
					else:
						?>
						<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
						<?php
					endif;
					$bytes_canada_description = get_bloginfo('description', 'display');
					if ($bytes_canada_description || is_customize_preview()):
						?>
						<p class="site-description">
							<?php echo $bytes_canada_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</p>
					<?php endif; ?>
				</div><!-- .site-branding -->
				<div class="custom-navstyle">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"
							aria-label="menu"><span></span></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id' => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
					<?php if (!empty($talk_button_label) && !empty($talk_button_link)): ?>
						<button class="letstalk">
							<a <?php echo $talk_button_link; ?>><?php echo $talk_button_label;
							   if (!empty($lets_talk_icon)): ?>
									<img height="48" width="48" src="<?php echo $lets_talk_icon['url']; ?>"
										alt="<?php echo $lets_talk_icon['alt']; ?>">
								<?php endif; ?>
							</a>
						</button>
					<?php endif; ?>
				</div>
			</div>
		</header>