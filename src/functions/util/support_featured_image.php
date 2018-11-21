<?php

namespace WPS;

/**
 * Add features image support for your theme
 *
 * @example    php
 * WPS::support_featured_image();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com>
 */
function support_featured_image() {
	add_theme_support('post-thumbnails');
}
