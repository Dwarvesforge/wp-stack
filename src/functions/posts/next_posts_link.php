<?php

namespace WPS;

use PHPHtmlParser\Dom;

/**
 * Get the next posts link in object format containing the url and the label property.
 * @param    {String}    $label    The label wanted for the link
 *
 * @example    php
 * $nextPosts = WPS::next_posts('Next posts');
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function next_posts_link($label) {
    // generate the next link
    ob_start();
    \next_posts_link($label);
    $link = ob_get_clean();
    if (empty($link)) return false;
    // init a new dom instance
    $dom = new Dom;
    // load the links html in the dom parser
    $dom->load($link);
    // find the link and grab his attributes
    $a = $dom->find('a')[0];
    return (object) [
        'url' => $a->getAttribute('href'),
        'label' => $a->innerHtml
    ];
}
