<?php

namespace WPS;

$timeout = get_field('wps_options_auth_cookie_expiration', 'option');
if (@$timeout) {
	\WPS::auth_cookie_expiration($timeout);
}
