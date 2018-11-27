<?php

namespace WPS;

/**
 * Change the excerpt length
 *
 * @param    {Integer}    [$length=20]    The new excerpt length
 *
 * @example    php
 * WPS::excerpt_length(200);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function excerpt_length($length = 20) {
	\add_filter('excerpt_length', function() use($length) {
		return $length;
	});
}
