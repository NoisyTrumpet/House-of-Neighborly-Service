<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller {
	public function siteName() {
		return get_bloginfo('name');
	}

	public static function title() {
		if (is_home()) {
			if ($home = get_option('page_for_posts', true)) {
				return get_the_title($home);
			}
			return __('Latest Posts', 'sage');
		}
		if (is_archive()) {
			return get_the_archive_title();
		}
		if (is_search()) {
			return sprintf(__('Search Results for %s', 'sage'), get_search_query());
		}
		if (is_404()) {
			return __('Not Found', 'sage');
		}
		return get_the_title();
	}

	/**
	 * Primary Nav Menu arguments
	 * @return array
	 */
	public function primarymenu() {
		$args = array(
			'theme_location'  => 'primary_navigation',
			'depth'           => 2,
			'container'       => 'false',
			'container_class' => 'collapse navbar-collapse',
			'container_id'    => 'bootstrap-navbar-collapse-1',
			'menu_class'      => 'nav navbar-nav',
			'walker'          => new \App\wp_bootstrap4_navwalker(),
		);
		return $args;
	}
}
