<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content">
			<?php esc_html_e('Skip to content', 'twentytwentyone'); ?>
		</a>
		<?php get_template_part('template-parts/header/site-header');
		// Виведення меню на головній сторінці.
		if (is_front_page()) {
			if (has_nav_menu('header-menu')): ?>
				<nav class="header-navigation" aria-label="<?php esc_attr_e('Header Menu', 'twentytwentyone'); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'header-menu',
							'menu_class' => 'header-menu',
							'depth' => 1,
							'fallback_cb' => '__return_empty_string',
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif;
		}
		?>
		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">