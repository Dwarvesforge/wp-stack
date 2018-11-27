<?php

namespace WPS;

// check if the acf plugin if loaded
$types = get_field('wps_options_media_add_mime_types', 'option');
if (@$types && is_array($types)) {
	$mimeTypes = [];
	foreach($types as $type) {
		$mimeTypes[$type['wps_options_medias_add_mime_types_extension']] = $type['wps_options_medias_add_mime_types_mime_type'];
	}
	\WPS::add_mime_types($mimeTypes);
}
