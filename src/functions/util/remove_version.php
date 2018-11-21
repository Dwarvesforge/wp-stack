<?php

namespace WPS;

/**
 * Remove the wordpress version in the metas tags
 *
 * @example    php
 * WPS::remove_version();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function remove_version() {
    add_filter('the_generator', 'WPS\_wps_remove_version');
}
function _wps_remove_version() {
    return '';
}
