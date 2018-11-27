<?php

namespace WPS;

/**
 * Add google tag manager only for real visitors and not for connected administrators, authors, etc...
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
	// stop here if the user is not a visitor
	// cause we don't want to track connected "admins"
	if (!\WPS::is_visitor()) return;

	$action = ($position === 'head') ? 'wp_head' : 'wp_footer';
	\add_action($action, function() use($id) {
		print "
			<!-- Google Tag Manager -->
			<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','".$id."');</script>
			<!-- End Google Tag Manager -->
		";
	});
}
