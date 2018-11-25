<?php

// quick function to require all files inside a specific folder
function wps_require_folder($folder) {
    foreach (scandir(dirname(__FILE__) . '/' . $folder) as $filename) {
        $path = dirname(__FILE__) . '/' . $folder . '/' . $filename;
        if (is_file($path) && $filename !== '.DS_Store') {
            require $path;
        }
    }
}

// acf
wps_require_folder('acf');

// admin
wps_require_folder('admin');

// archive
wps_require_folder('archive');

// categorie
wps_require_folder('categorie');

// comment
wps_require_folder('comment');

// image
wps_require_folder('image');

// media
wps_require_folder('media');

// menu
wps_require_folder('menu');

// metabox
wps_require_folder('metabox');

// pagination
wps_require_folder('pagination');

// post
wps_require_folder('post');

// search
wps_require_folder('search');

// user
wps_require_folder('user');

// util
wps_require_folder('util');

// widget
wps_require_folder('widget');
