<?php

namespace WPS;

$WPS_remove_mime_types = [];
/**
 * Remove some mime types supported for upload
 *
 * @param    {Array}    $mimes    An array of extension to remove upload support for
 *
 * @example    php
 * WPS::remove_mime_types([
 * 	'xls', 'jpg'
 * ]);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function remove_mime_types($mimes) {
	global $WPS_remove_mime_types;
	$WPS_remove_mime_types = $mimes;
	\add_filter('upload_mimes', 'WPS\_remove_mime_types', 1, 1);
}
function _remove_mime_types($mime_types) {
	global $WPS_remove_mime_types;
	foreach($WPS_remove_mime_types as $mime) {
		unset($mime_types[$mime]);
	}
	return $mime_types;
}
