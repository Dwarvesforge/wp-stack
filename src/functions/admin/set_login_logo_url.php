<?php

namespace WPS;

/**
 * Set the login form logo url
 *
 * @param    {String}    $url    The url to set
 *
 * @example    php
 * WPS::set_login_logo_url('https://my-cool-website.com');
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function set_login_logo_url($url) {
	add_filter('login_headerurl', function() use($url) {
		return $url;
	});
}
