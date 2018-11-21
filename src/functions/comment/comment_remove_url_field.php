<?php

namespace WPS;

/**
 * Remove the url field from the comment form
 *
 * @example    php
 * WPS::comment_remove_url_field();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function comment_remove_url_field() {
	add_filter('comment_form_default_fields','WPS\_comment_remove_url_field');
}
function _comment_remove_url_field($fields) {
	unset($fields['url']);
	return $fields;
}
