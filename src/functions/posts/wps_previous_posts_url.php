<?php

/**
 * Get back the previous posts url
 * 
 * @example    php
 * $url = WPS::previous_posts_url();
 * 
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function wps_previous_posts_url() {
    // grab previous posts object
    $previous = WPS::previous_posts('');
    if ( ! $previous) return false;
    return $previous->url;
}