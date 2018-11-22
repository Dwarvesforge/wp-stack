<?php

namespace WPS;

/**
 * Add one or more stylesheet files to the eysiwyg editor.
 *
 * @param    {String|Array<String>}    $stylesheets    The stylesheets to add
 *
 * @example    php
 * WPS::add_wysiwyg_stylesheet('dist/css/style.css');
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function add_wysiwyg_stylesheet($stylesheets) {
	add_editor_style($stylesheets);
}
