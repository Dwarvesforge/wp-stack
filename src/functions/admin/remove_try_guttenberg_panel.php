<?php

namespace WPS;

/**
 * Remove the try guttenberg panel in the admin
 *
 * @example    php
 * WPS::remove_try_guttenberg_panel();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function remove_try_guttenberg_panel() {
	if (\is_admin()) {
		\remove_filter( 'try_gutenberg_panel', 'wp_try_gutenberg_panel' );
	}
}
