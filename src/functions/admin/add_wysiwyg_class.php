<?php

namespace WPS;

$WPS_add_wysiwyg_class = [];
/**
 * Add one or more classes to the eysiwyg editor.
 *
 * @param    {String|Array<String>}    $classes    The classes to add
 *
 * @example    php
 * WPS::add_wysiwyg_class(['tf,'vr']);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function add_wysiwyg_class($classes) {
	global $WPS_add_wysiwyg_class;
	if (!is_array($classes)) {
		$classes = [$classes];
	}
	$WPS_add_wysiwyg_class = \Thorin::array_concat($WPS_add_wysiwyg_class, $classes);
	// hook the tinymce initialisation
	\add_filter( 'tiny_mce_before_init', 'WPS\_add_wysiwyg_class' );
}
function _add_wysiwyg_class($in) {
	global $WPS_add_wysiwyg_class;
	$in['body_class'] .= implode(' ', $WPS_add_wysiwyg_class);
	return $in;
}
