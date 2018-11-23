<?php

namespace WPS;

/**
 * Unenqueue all styles at once
 *
 * @example    php
 * WPS::dequeue_all_styles();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function dequeue_all_styles() {
	global $wp_styles;
	$wp_styles->queue = array();
}
