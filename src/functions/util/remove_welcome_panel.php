<?php

namespace WPS;

/**
 * Remove welcome panel in admin
 *
 * @example    php
 * WPS::remove_welcome_panel();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function remove_welcome_panel() {
	remove_action('welcome_panel', 'wp_welcome_panel');
}
