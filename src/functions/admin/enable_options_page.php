<?php

namespace WPS;

/**
 * Enable the "WPS Options" page which allow to set some options for your wordpress like disabling some dashboard widgets, etc...
 *
 * @example    php
 * WPS::enable_options_page();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbosel.com)
 */
function enable_options_page() {

	if (!function_exists('acf_add_options_page')) {
		throw new \Exception('To use the function "WPS::enable_options_page()", you must have the plugin ACF Pro installed');
	}

	// add the options page in the menu
	// as well as for the ACF plugin
	if (function_exists('acf_add_options_page') && current_user_can('administrator')) {
		acf_add_options_page([
			'page_title' 	=> 'WPS Options',
			'menu_title'	=> 'WPS Options',
			'menu_slug' 	=> 'wps-options',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		]);
	}

	if (function_exists('acf_add_options_page')) {
		// load the options handlers
		require_once __DIR__ . '/../../options/autoload.php';
	}
}
