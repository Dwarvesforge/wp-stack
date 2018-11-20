<?php

namespace WPS;

use PHPHtmlParser\Dom;

/**
 * Get an array of archives links depending on the passed arguments.
 * The arguments are the same as the one of the `wp_get_archives` wordpress function.
 * @param    {Array}    [$args=[]]    The arguments to pass to the `wp_get_archives` wordpress function
 * @return    {Array}    An array of simple object containing a url and label properties
 *
 * @example    php
 * $links = WPS::archives([
 *   'limit' => 5
 * ]);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://developer.wordpress.org/reference/functions/wp_get_archives/
 */
function archives($args = []) {
    $args = \Thorin::col_extend([
        'type' => 'monthly',
        'limit' => '',
        'format' => 'html',
        'before' => '',
        'after' => '',
        'show_post_count' => false,
        'echo' => false,
        'order' => 'DESC',
        'post_type' => 'post'
    ], $args);
    // get the links from wordpress
    $links = \wp_get_archives($args);
    // init the res stack
    $res = [];
    // init a new dom instance
    $dom = new Dom;
    // load the links html in the dom parser
    $dom->load($links);
    // find all the links to loop on them
    // and get the url and label from them
    $as = $dom->find('a');
    foreach($as as $a) {
        // add new link in array
        \array_push($res, (object) [
            'url' => $a->getAttribute('href'),
            'label' => $a->innerHtml
        ]);
    }
    // return the links
    return $res;
}
