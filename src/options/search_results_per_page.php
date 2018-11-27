<?php

namespace WPS;

$count = get_field('wps_options_search_results_per_page', 'option');
if (@$count) {
	\WPS::search_results_per_page(intval($count));
}
