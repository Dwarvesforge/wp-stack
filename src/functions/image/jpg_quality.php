<?php

namespace WPS;

/**
 * Change the default JPG quality compression setting
 *
 * @param    {Integer}    $quality    The new JPG quality setting between 0-100
 *
 * @example    php
 * WPS::jpg_quality(100);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
$wps_jpg_quality = 100;
function jpg_quality($quality) {
	global $wps_jpg_quality;
	$wps_jpg_quality = $quality;
	add_filter('jpeg_quality', 'WPS\_wps_smashing_jpeg_quality');
}
function _wps_smashing_jpeg_quality() {
	global $wps_jpg_quality;
	return $wps_jpg_quality;
}
