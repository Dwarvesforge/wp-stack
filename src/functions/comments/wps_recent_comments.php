<?php

/**
 * Get some recent comments depending on the arguments you've passed.
 * The arguments are the same as the one of `get_comments` wordpress function.
 * This function return an array of WPS_Comment objects.
 * @param    {Array}    [$args=[]]   The arguments to pass to the `get_comments` wordpress function
 * @return    {Array<WPS_Comment>}    Array of WPS_Comment objects
 * 
 * @example    php
 * $comments = WPS::recent_comments([
 *   'number' => 3
 * ]);
 * 
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://codex.wordpress.org/Function_Reference/get_comments
 */
function wps_recent_comments($args = []) {
    $args = array(
        'author_email' => '',
        'author__in' => '',
        'author__not_in' => '',
        'include_unapproved' => '',
        'fields' => '',
        'ID' => '',
        'comment__in' => '',
        'comment__not_in' => '',
        'karma' => '',
        'number' => 3,
        'offset' => '',
        'orderby' => 'comment_date',
        'order' => 'DESC',
        'parent' => '',
        'post_author__in' => '',
        'post_author__not_in' => '',
        'post_id' => '',
        'post__in' => '',
        'post__not_in' => '',
        'post_author' => '',
        'post_name' => '',
        'post_parent' => '',
        'post_status' => '',
        'post_type' => '',
        'status' => 'approve',
        'type' => '',
        'type__in' => '',
        'type__not_in' => '',
        'user_id' => '',
        'search' => '',
        'count' => false,
        'meta_key' => '',
        'meta_value' => '',
        'meta_query' => '',
        'date_query' => null, // See WP_Date_Query
    );
    $comments = get_comments( $args );
    $comments = array_map(function($comment) {
        return new WPS_Comment($comment);
    }, $comments);
    return $comments;
}