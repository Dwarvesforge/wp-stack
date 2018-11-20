<?php

namespace WPS;

/**
 * Make a query in the database to get some posts back. The posts are in WPS_Post format.
 * This class does not allow to use the traditional `the_title()`, `the_content`, etc...
 * In order to get the post you have to do it like in the sample bellow.
 *
 * @param    {Array}    $args    The arguments to pass to the WP_Query constructor
 *
 * @example    php
 * $query = new WPS_Query($myArgs);
 * while($query->have_posts()) {
 *     $query->the_post();
 *     $post = $query->post;
 *     // do something with your WPS_Post $post
 * }
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://codex.wordpress.org/Class_Reference/WP_Query
 */
class Query extends \WP_Query {

    /**
     * Construct the WPS_Query with some arguments.
     * The arguments are the same as the `WP_Query` ones
     * @param    {Array}    $args    The arguments to pass to the WP_Query class
     */
    public function __construct($args) {
        parent::__construct($args);
        // cast the post and posts in WPS_Post format
        $this->post = new \WPS\Post($this->post);
        $this->posts = array_map(function($post) {
            return new \WPS\Post($post);
        }, $this->posts);
    }
}
