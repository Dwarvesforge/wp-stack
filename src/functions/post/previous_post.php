<?php

namespace WPS;

/**
 * Get the previous posts in WPS_Post format
 * @return    {WPS_Post,Boolean}    A WPS_Post instance or false
 *
 * @example    php
 * $post = WPS::previous_post();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function previous_post() {
    $post = \get_previous_post();
    if ( ! empty($post)) {
        return new \WPS\Post($post);
    }
    return false;
}
