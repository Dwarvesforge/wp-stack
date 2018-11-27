<?php

namespace WPS;

/**
 * Set the authentication cookie expiration in seconds
 *
 * @param    {Integer}    $timeout    The expiration timeout in seconds
 *
 * @example    php
 * WPS::auth_cookie_expiration(60 * 60 * 24 * 30); // 1 month
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function auth_cookie_expiration($timeout) {
	add_filter('auth_cookie_expiration', function($t) use($timeout) {
		return $timeout;
	});
}
