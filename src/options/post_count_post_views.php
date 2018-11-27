<?php

namespace WPS;

// check if the acf plugin if loaded
$count = get_field('wps_options_post_count_post_views', 'option');
if (@$count) {
	\WPS::count_post_views();
}
