<?php

// quick function to require all files inside a specific folder
function wps_require_classes_folder($folder) {
    foreach (scandir(dirname(__FILE__) . '/' . $folder) as $filename) {
        $path = dirname(__FILE__) . '/' . $folder . '/' . $filename;
        if (is_file($path)) {
			// require the file
			require $path;
        }
    }
}

// core
wps_require_classes_folder('core');

// WP
require_once 'WP/WPS_Post.php';
require_once 'WP/WPS_User.php';
require_once 'WP/WPS_Category.php';
require_once 'WP/WPS_Comment.php';
require_once 'WP/WPS_Menu_Item.php';
require_once 'WP/WPS_ACF_Post.php';
require_once 'WP/WPS_Query.php';
