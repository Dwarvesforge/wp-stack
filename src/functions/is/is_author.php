<?php

namespace WPS;

/**
 * Detect if the user is an author
 *
 * @return    {Boolean}    `true` if is an author, `false` if not
 *
 * @example    php
 * WPS::is_author();
 * // true
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function is_author() {
	// is the user is not logged at all
	if (!is_user_logged_in()) return false;
	// if he's logged, check if he can publish posts but not edit pages
	if (current_user_can('publish_posts') && !current_user_can('edit_pages')) return true;
	// otherwise, it's something else
	return false;
}
