<?php

namespace WPS;

/**
 * Detect if the user is a visitor and not a logged in administrator or content editor
 *
 * @return    {Boolean}    `true` if is a visitor, `false` if not
 *
 * @example    php
 * WPS::is_visitor();
 * // true
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function is_visitor() {
	// is the user is not logged at all
	if (!is_user_logged_in()) return true;
	// if he's logged, check if is an administrator / editor / author / contributor
	if (current_user_can('edit_posts')) return false;
	// otherwise, it's a visitor
	return true;
}
