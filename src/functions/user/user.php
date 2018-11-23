<?php

namespace WPS;

/**
 * Get a user by id/email and return it in WPS\User format
 *
 * @param    {Integer|String}    $id    The id or email of the user to get
 * @return    {WPS\User}    The user object
 *
 * @example    php
 * $user = Thorin::user(10);
 * $user = Thorin::user('olivier.bossel@gmail.com');
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function user($id) {
	$by = (\is_integer($id)) ? 'id' : 'email';
	$user = \get_user_by($by, $id);
	return new \WPS\User($user);
}
