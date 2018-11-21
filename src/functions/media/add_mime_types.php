<?php

namespace WPS;

$WPS_add_mime_types = [];
/**
 * Add mime types to the authorized upload ones
 *
 * @param    {Array}    $mimes    A extension->mime array of newly mimes to support
 *
 * @example    php
 * WPS::add_mime_types([
 * 	'ai' => 'application/postscript',
 *  'pdf' => 'application/pdf'
 * ]);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function add_mime_types($mimes) {
	global $WPS_add_mime_types;
	$WPS_add_mime_types = $mimes;
	add_filter('upload_mimes', 'WPS\_add_mime_types', 1, 1);
}
function _add_mime_types($mime_types) {
	global $WPS_add_mime_types;
	$mime_types = \Thorin::extend($mime_types, $WPS_add_mime_types);
	return $mime_types;
}
