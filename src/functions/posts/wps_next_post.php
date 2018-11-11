<?php

/**
 * Get the next posts in WPS_Post format
 * @return    {WPS_Post,Boolean}    A WPS_Post instance or false
 * 
 * @example    php
 * $post = WPS::next_post();
 * 
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function wps_next_post() {
    $post = get_next_post();
    if ( ! empty($post)) {
        return new WPS_Post($post);
    }
    return false;
}