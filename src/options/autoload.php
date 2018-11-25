<?php

// quick function to require all files inside a specific folder
function wps_require_options_folder() {
    foreach (scandir(dirname(__FILE__)) as $filename) {
        $path = dirname(__FILE__) . '/' . $filename;
        if (is_file($path) && $filename !== '.DS_Store' && $filename !== 'autoload.php') {
            require $path;
        }
    }
}
wps_require_options_folder();
