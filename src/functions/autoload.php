<?php

// quick function to require all files inside a specific folder
function wps_require_folder($folder) {
    foreach (scandir(dirname(__FILE__) . '/' . $folder) as $filename) {
        $path = dirname(__FILE__) . '/' . $folder . '/' . $filename;
        if (is_file($path)) {
            require $path;
        }
    }
}

// archives
wps_require_folder('archives');

// categories
wps_require_folder('categories');

// comments
wps_require_folder('comments');

// menus
wps_require_folder('menus');

// pagination
wps_require_folder('pagination');

// posts
wps_require_folder('posts');