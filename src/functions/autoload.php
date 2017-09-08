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