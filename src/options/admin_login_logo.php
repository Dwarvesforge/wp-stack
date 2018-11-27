<?php

namespace WPS;

if (in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'))) {
	$logo = get_field('wps_options_login_logo', 'option');
	if (@$logo && is_array($logo)) {
		\WPS::set_login_logo($logo['sizes']['large'], $logo['sizes']['large-width'], $logo['sizes']['large-height']);
	}
}
