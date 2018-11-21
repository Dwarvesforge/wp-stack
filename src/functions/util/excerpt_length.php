<?php

namespace WPS;

/**
 * Change the excerpt length
 *
 * @param    {Integer}    [$length=100]    The new excerpt length
 *
 * @example    php
 * WPS::excerpt_length(200);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
$wps_excerpt_length = null;
function excerpt_length($length = 100) {
	global $wps_excerpt_length;
	$wps_excerpt_length = $length;
	add_filter('excerpt_length', 'WPS\_wps_new_excerpt_length');
}
function _wps_new_excerpt_length($length) {
	global $wps_excerpt_length;
	return $wps_excerpt_length;
}
