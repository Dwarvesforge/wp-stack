<?php

namespace WPS;

/**
 * Detect if the user is a contributor
 *
 * @return    {Boolean}    `true` if is a contributor, `false` if not
 *
 * @example    php
 * WPS::is_contributor();
 * // true
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function is_contributor() {
	// is the user is not logged at all
	if (!is_user_logged_in()) return false;
	// if he's logged, check if he can edit posts but not publish them
	if (current_user_can('edit_posts') && !current_user_can('publish_posts')) return true;
	// otherwise, it's something else
	return false;
}
