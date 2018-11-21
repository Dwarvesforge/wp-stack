<?php

namespace WPS;

/**
 * Get back the next posts url
 *
 * @example    php
 * $url = WPS::next_posts_url();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function next_posts_url() {
    // grab next posts object
    $next = \WPS::next_posts_link('');
    if ( ! $next) return false;
    return $next->url;
}
