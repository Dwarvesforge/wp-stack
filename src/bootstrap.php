<?php

if (function_exists('acf_add_options_page')) {
	// set the acf-json path as a load local path
	WPS::acf_add_load_local_json_path(__DIR__ . '/acf-json');
}
