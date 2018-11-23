<?php

namespace WPS;

$WPS_google_analytics_id;
/**
 * Add google analytics
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
	global $WPS_google_analytics_id;
	$WPS_google_analytics_id = $id;

	if ($position === 'head') {
		\add_action('wp_head', 'WPS\_google_analytics');
	} else {
		\add_action('wp_footer', 'WPS\_google_analytics');
	}
}
function _google_analytics() {
	global $WPS_google_analytics_id;
	print '
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id='.$WPS_google_analytics_id.'"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag("js", new Date());

		gtag("config", "'.$WPS_google_analytics_id.'");
		</script>
	';
}
