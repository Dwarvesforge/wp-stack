<?php

namespace WPS;

/**
 * Add google analytics only for real visitors and not for connected administrators, authors, etc...
 *
 * @param    {String}    $id    The google analytics id
 * @param    {String}    [$position='head']    The position where to put the analytics code. Can be `head` or `footer`
 *
 * @example    php
 * WPS::google_analytics('xxxxxx');
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function google_analytics($id, $position = 'head') {

	// stop here if the user is not a visitor
	// cause we don't want to track connected "admins"
	if (!\WPS::is_visitor()) return;

	$action = ($position === 'head') ? 'wp_head' : 'wp_footer';
	\add_action($action, function() use($id) {
		print '
			<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id='.$id.'"></script>
			<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag("js", new Date());

			gtag("config", "'.$id.'");
			</script>
		';
	});
}
