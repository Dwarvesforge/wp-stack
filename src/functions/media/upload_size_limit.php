<?php

namespace WPS;

/**
 * Set the upload limit size for this wordpress installation.
 * This value has to be passed in mb.
 *
 * @param    {Integer}    $size    The upload size limit in mb
 *
 * @example    php
 * WPS::upload_size_limit(32); // set to 32mb
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function upload_size_limit($size) {
	add_filter('upload_size_limit', function($s) use($size) {
		return $size * 1024 * 1024;
	}, 20);
}
