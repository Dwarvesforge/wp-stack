<?php

namespace WPS;

/**
 * Add a custom local json path for ACF to look in
 *
 * @param    {String}    $path    The folder path for ACF to look in
 *
 * @example    php
 * WPS::acf_add_load_local_json_path(get_stylesheet_directory() . '/my-custom-folder');
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function acf_add_load_local_json_path($path) {
	add_filter('acf/settings/load_json', function($paths) use($path) {
		$paths[] = $path;
		return $paths;
	});
}
