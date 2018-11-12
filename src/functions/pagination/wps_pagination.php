<?php
use PHPHtmlParser\Dom;

/**
 * Get back an array of pagination items. A pagination item is made of:
 * - `is_prev` : true/false if the item is the "previous" link
 * - `is_next` : true/false if the item is the "next" link
 * - `is_current` : true/false if the item it the current one
 * - `url` : the url of the page
 * - `label` : the label of the link
 * 
 * @param    {Array}   [$args=[]]    The arguments to pass to the `get_the_posts_pagination` wordpress function used to build the pagination
 * 
 * @example    php
 * $pagination = WPS::pagination([
 *   'mid_size' => 2
 * ]);
 * 
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://codex.wordpress.org/Function_Reference/get_the_posts_pagination
 */
function wps_pagination($args = []) {
    $args = Thorin::extend([
        'mid_size' => 1,
        'prev_text' => __('Previous'),
        'next_text' => __('Next'),
        'screen_reader_text' => __('Posts navigation') 
    ], $args);
    // get the pagination
    $pagination = get_the_posts_pagination($args);
    // init a new dom instance
    $dom = new Dom;
    // load the links html in the dom parser
    $dom->load($pagination);
    // prepare the result stack
    $res = [];
    // find all the items that compose the pagination
    $items = $dom->find('.nav-links > *');
    foreach($items as $item) {
        $url = trim($item->getAttribute('href'));
        $label = trim($item->innerHtml);
        if ($url === '' && $label === '') continue;
        array_push($res, (object) [
            'is_next' => strpos($item->getAttribute('class'), 'next') !== false,
            'is_prev' => strpos($item->getAttribute('class'), 'prev') !== false,
            'is_current' => strpos($item->getAttribute('class'), 'current') !== false,
            'url' => $url,
            'label' => $label
        ]);
    }
    return $res;
}