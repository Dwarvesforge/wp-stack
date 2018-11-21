<?php

namespace WPS;

/**
 * Disable the admin bar in the frontend
 *
 * @example    php
 * WPS::disable_admin_bar();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function disable_admin_bar() {
	add_filter('show_admin_bar', '__return_false');
}
