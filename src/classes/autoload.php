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
require_once 'WP/Post.php';
require_once 'WP/User.php';
require_once 'WP/Category.php';
require_once 'WP/Comment.php';
require_once 'WP/Menu_Item.php';
require_once 'WP/ACF_Post.php';
require_once 'WP/Query.php';
