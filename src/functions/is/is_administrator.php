<?php

namespace WPS;

/**
 * Detect if the user is an administrator
 *
 * @return    {Boolean}    `true` if is an administrator, `false` if not
 *
 * @example    php
 * WPS::is_administrator();
 * // true
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function is_administrator() {
	// is the user is not logged at all
	if (!is_user_logged_in()) return false;
	// if he's logged, check if he can publish posts but not edit pages
	if (current_user_can('list_users') && !current_user_can('create_sites')) return true;
	// otherwise, it's something else
	return false;
}
