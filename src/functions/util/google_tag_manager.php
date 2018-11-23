<?php

namespace WPS;

$WPS_google_tag_manager_id;
/**
 * Add google tag manager
 *
 * @param    {String}    $id    The google tag manager id
 * @param    {String}    [$position='head']    The position where to put the tag manager code. Can be `head` or `footer`
 *
 * @example    php
 * WPS::google_tag_manager('xxxxxx');
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function google_tag_manager($id, $position = 'head') {
	global $WPS_google_tag_manager_id;
	$WPS_google_tag_manager_id = $id;

	if ($position === 'head') {
		\add_action('wp_head', 'WPS\_google_tag_manager');
	} else {
		\add_action('wp_footer', 'WPS\_google_tag_manager');
	}
}
function _google_tag_manager() {
	global $WPS_google_tag_manager_id;
	print "
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','".$WPS_google_tag_manager_id."');</script>
		<!-- End Google Tag Manager -->
	";
}
