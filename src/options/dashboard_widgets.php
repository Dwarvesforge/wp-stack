<?php

namespace WPS;

// check if the acf plugin if loaded
if (is_admin()) {
	$widgets = get_field('wps_options_remove_dashboard_widgets', 'option');
	if (@$widgets && is_array($widgets)) {
		$widgetIds = [];
		foreach($widgets as $widget) {
			$widgetIds[] = $widget['wps_options_dashboard_widget'];
		}
		\WPS::remove_dashboard_meta_boxes($widgetIds);
	}
}
