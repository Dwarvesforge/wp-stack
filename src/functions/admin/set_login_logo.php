<?php

namespace WPS;

/**
 * Set the login form logo to display
 *
 * @param    {String}    $url    The url of the logo to display
 * @param    {Integer}    [$width=null]    The width of the logo
 * @param    {Integer}    [$height=null]    The height of the logo
 *
 * @example    php
 * WPS::set_login_logo('https://mycoolwebsite.com/dist/my-logo.png');
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function set_login_logo($url, $width=null, $height=null) {

	// if no size is passed, try to get
	// with getimagesize
	if (!$width && !$height) {
		list($width, $height) = @getimagesize($url);
	}

	// prepare the width and height string
	$widthString = '';
	if ($width) {
		$widthString = 'width:' . $width . 'px;';
	}
	$heightString = '';
	if ($height) {
		$heightString = 'height:' . $height . 'px;';
	}
	$backgroundSizeString = '';
	if ($width && $height) {
		$backgroundSizeString = 'background-size:'.$width.'px '.$height.'px;';
	}

	// hook the login_enqueue_scripts to add some custom css
	add_action( 'login_enqueue_scripts', function() use($url, $widthString, $heightString, $backgroundSizeString) {
		print '
			<style>
				#login h1 a, .login h1 a {
					background-image: url("'.$url.'");
					'.$widthString.'
					'.$heightString.'
					'.$backgroundSizeString.'
					background-repeat: no-repeat;
				}
			</style>
		';
	});
}
