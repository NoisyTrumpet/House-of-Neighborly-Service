<?php

namespace App;

/**
 * Add <body> classes
 */
add_filter('body_class', function (array $classes) {
		/** Add page slug if it doesn't exist */
		if (is_single() || is_page() && !is_front_page()) {
			if (!in_array(basename(get_permalink()), $classes)) {
				$classes[] = basename(get_permalink());
			}
		}

		/** Add class if sidebar is active */
		if (display_sidebar()) {
			$classes[] = 'sidebar-primary';
		}

		/** Clean up class names for custom templates */
		$classes = array_map(function ($class) {
				return preg_replace(['/-blade(-php)?$/', '/^page-template-views/'], '', $class);
			}, $classes);

		return array_filter($classes);
	});

/**
 * Add "… Continued" to the excerpt
 */
add_filter('excerpt_more', function () {
		return ' &hellip; <a href="'.get_permalink().'">'.__('Continued', 'sage').'</a>';
	});

/**
 * Template Hierarchy should search for .blade.php files
 */
collect([
		'index', '404', 'archive', 'author', 'category', 'tag', 'taxonomy', 'date', 'home',
		'frontpage', 'page', 'paged', 'search', 'single', 'singular', 'attachment', 'embed',
	])->map(function ($type) {
		add_filter("{$type}_template_hierarchy", __NAMESPACE__ .'\\filter_templates');
	});

/**
 * Render page using Blade
 */
add_filter('template_include', function ($template) {
		collect(['get_header', 'wp_head'])->each(function ($tag) {
				ob_start();
				do_action($tag);
				$output = ob_get_clean();
				remove_all_actions($tag);
				add_action($tag, function () use ($output) {
						echo $output;
					});
			});
		$data = collect(get_body_class())->reduce(function ($data, $class) use ($template) {
				return apply_filters("sage/template/{$class}/data", $data, $template);
			}, []);
		if ($template) {
			echo template($template, $data);
			return get_stylesheet_directory().'/index.php';
		}
		return $template;
	}, PHP_INT_MAX);

/**
 * Render comments.blade.php
 */
add_filter('comments_template', function ($comments_template) {
		$comments_template = str_replace(
			[get_stylesheet_directory(), get_template_directory()],
			'',
			$comments_template
		);

		$data = collect(get_body_class())->reduce(function ($data, $class) use ($comments_template) {
				return apply_filters("sage/template/{$class}/data", $data, $comments_template);
			}, []);

		$theme_template = locate_template(["views/{$comments_template}", $comments_template]);

		if ($theme_template) {
			echo template($theme_template, $data);
			return get_stylesheet_directory().'/index.php';
		}

		return $comments_template;
	}, 100);

// Add support for post thumbnails
add_theme_support('post-thumbnails');

/**
 * Advanced Custom Fields
 */
// add_filter('pre_option_rg_gforms_disable_css', '__return_true');
add_filter('gform_disable_print_form_scripts', '__return_true');
// add_filter('gform_init_scripts_footer', '__return_true');

// Passing values to all pages

add_filter('sage/tempaltes/page/data', function (array $data) {
		$data['hero_subtitle'] = get_field('hero_subtitle');
		$data['mission_statement'] = get_field('mission_statement');
		$data['cc_cta_title'] = get_field('cc_cta_title');
		$data['cc_cta_subtitle'] = get_field('cc_cta_subtitle');
		$data['position'] = get_field('position');
		$data['email'] = get_field('email');
		$data['family_support_text'] = get_field('family_support_text');
		$data['child_development_text'] = get_field('child_development_text');
		$data['senior_health_text'] = get_field('senior_health_text');
		$data['food_security_text'] = get_field('food_security_text');
		$data['don_header'] = get_field('don_header');
		$data['don_subtitle'] = get_field('don_subtitle');
		$data['numbers_interventions'] = get_field('numbers_interventions');
		$data['numbers_meals'] = get_field('numbers_meals');
		$data['numbers_fitness'] = get_field('numbers_fitness');
		$data['numbers_diapers'] = get_field('numbers_diapers');
		$data['newsletter_subtitle'] = get_field('newsletter_subtitle');
		$data['hero_image'] = get_field('hero_image');
		$data['about_subtitle'] = get_field('about_subtitle');
		$data['about_block_1'] = get_field('about_block_1');
		$data['about1_header'] = get_sub_field('about1_header');
		$data['about1_subtitle'] = get_sub_field('about1_subtitle');
		$data['about_block_2'] = get_field('about_block_2');
		$data['about2_subtitle'] = get_sub_field('about2_subtitle');
		$data['about_block_3'] = get_field('about_block_3');
		$data['about3_subtitle'] = get_sub_field('about3_subtitle');

	});

/**
 * Global Data
 */

add_action('the_post', function () {
		sage('blade')->share('links', [
				'facebook' => 'https://www.facebook.com/HNSToday/',
			]);
	});