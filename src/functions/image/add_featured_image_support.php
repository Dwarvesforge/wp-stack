<?php

namespace WPS;

/**
 * Add features image support for your theme
 *
 * @example    php
 * WPS::add_features_image_support();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com>
 */
function add_featured_image_support() {
	add_theme_support('post-thumbnails');
}
