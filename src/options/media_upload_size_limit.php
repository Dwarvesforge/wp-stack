<?php

namespace WPS;

$limit = get_field('wps_options_upload_size_limit', 'option');
if (@$limit) {
	\WPS::upload_size_limit($limit);
}
