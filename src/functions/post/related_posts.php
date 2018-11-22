<?php

namespace WPS;

/**
 * Retrieve some related posts depending on the args passed.
 * The args are the same as the one passed to the `get_posts` wordpress function.
 * By default, the posts order is set to random but you can erase that by passing the corresponding args properties.
 * This function works with the tags similarities between the reequested related post.
 *
 * @param    {Integer}    $post_id     The post to grab the related ones from
 * @param    {Integer}    [$count=3]    The number of posts to get
 * @param    {Array}    [$args=[]]    The arguments used to query the posts
 * @return    {Array<WPS\Post>}    An array of WPS\Post objects
 *
 * @example    php
 * $posts = WPS::related_posts(3, 5);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://codex.wordpress.org/Template_Tags/get_posts
 */
function related_posts($post_id, $count = 3, $args = []) {
	// grab the post tags :
	$tags = wp_get_post_tags($post_id);
	$tag_ids = [];
	if ($tags) {
		foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
	}
	// build args
    $args = \Thorin::extend([
		'posts_per_page'   => $count,
		'order'            => '',
		'orderby'          => 'rand',
		'tag__in'          => $tag_ids,
  		'post__not_in'     => [$post_id]
    ], $args);
	// query the posts
	return \WPS::posts($args);
}
