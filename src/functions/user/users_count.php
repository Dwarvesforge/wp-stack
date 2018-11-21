<?php

namespace WPS;

/**
 * Get the number of registered users in the DB
 *
 * @return     {Integer}    The number of users registered
 *
 * @example    php
 * WPS:users_count();
 * // 10
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function users_count() {
	$usercount = count_users();
	$result = $usercount['total_users'];
	return $result;
}
