<?php

namespace WPS;

/**
 * Detect if the user is a super_admin
 *
 * @return    {Boolean}    `true` if is a super_admin, `false` if not
 *
 * @example    php
 * WPS::is_super_admin();
 * // true
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function is_super_admin() {
	// is the user is not logged at all
	if (!is_user_logged_in()) return false;
	// if he's logged, check if he can publish posts but not edit pages
	if (current_user_can('create_sites')) return true;
	// otherwise, it's something else
	return false;
}
