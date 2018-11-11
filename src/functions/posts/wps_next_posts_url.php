<?php

/**
 * Get back the next posts url
 * 
 * @example    php
 * $url = WPS::next_posts_url();
 * 
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function wps_next_posts_url() {
    // grab next posts object
    $next = WPS::next_posts('');
    if ( ! $next) return false;
    return $next->url;
}