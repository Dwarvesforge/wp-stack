<?php

namespace WPS;

$WPS_search_results_per_page = null;
/**
 * Set the number of results to display on the search results page
 *
 * @param    {Integer}    $count    The count of search results to display per page
 *
 * @example    php
 * WPS::search_results_per_page(10);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function search_results_per_page($count) {
	global $WPS_search_results_per_page;
	$WPS_search_results_per_page = $count;
	\add_filter('pre_get_posts', 'WPS\_limit_posts_per_search_page');
}
function _limit_posts_per_search_page() {
	global $WPS_search_results_per_page;
	if (\is_search())
		\set_query_var('posts_per_archive_page', $WPS_search_results_per_page);
}
