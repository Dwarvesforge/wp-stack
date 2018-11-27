<?php

namespace WPS;

if (in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'))) {
	$url = get_field('wps_options_login_logo_url', 'option');
	if (@$url) {
		\WPS::set_login_logo_url($url);
	}
}
