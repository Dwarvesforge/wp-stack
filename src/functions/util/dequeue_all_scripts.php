<?php

namespace WPS;

/**
 * Unenqueue all scripts at once
 *
 * @example    php
 * WPS::dequeue_all_scripts();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function dequeue_all_scripts() {
	global $wp_scripts;
	$wp_scripts->queue = array();
}
