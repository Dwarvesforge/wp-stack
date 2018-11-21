<?php

namespace WPS;

/**
 * Start a session if not already done
 *
 * @return    {String}    The session id
 *
 * @example    php
 * WPS::session_start();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function session_start() {
	add_action('init', 'WPS\_wps_session_start');
}
function _wps_session_start() {
	if(!\session_id() ) {
		\session_start();
	}
	return \session_id();
}
