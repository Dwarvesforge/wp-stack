<?php

namespace WPS;

/**
 * Detect if the user is an editor
 *
 * @return    {Boolean}    `true` if is an editor, `false` if not
 *
 * @example    php
 * WPS::is_editor();
 * // true
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function is_editor() {
	// is the user is not logged at all
	if (!is_user_logged_in()) return false;
	// if he's logged, check if he can publish posts but not edit pages
	if (current_user_can('edit_pages') && !current_user_can('list_users')) return true;
	// otherwise, it's something else
	return false;
}
