<?php

namespace WPS;

/**
 * Get back the previous posts url
 *
 * @example    php
 * $url = WPS::previous_posts_url();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function previous_posts_url() {
    // grab previous posts object
    $previous = \WPS::previous_posts_link('');
    if ( ! $previous) return false;
    return $previous->url;
}
