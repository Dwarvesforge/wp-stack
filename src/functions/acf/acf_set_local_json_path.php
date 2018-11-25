<?php

namespace WPS;

/**
 * Set a custom local json path for ACF to look and save in
 *
 * @param    {String}    $path    The folder path for ACF to look and save in
 *
 * @example    php
 * WPS::acf_set_local_json_path(get_stylesheet_directory() . '/my-custom-folder');
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function acf_set_local_json_path($path) {
	add_filter('acf/settings/save_json', function($p) use($path) {
		return $path;
	});
	add_filter('acf/settings/load_json', function($paths) use($path) {
		$paths[] = $path;
		return $paths;
	});
}
