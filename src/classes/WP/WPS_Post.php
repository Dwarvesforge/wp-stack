<?php

/**
 * WP_Post wrapper class.
 * This class wrap a WP_Post object and give them some helpers and some features like `featured_image_url($size)`, accessor like `featured_image_url`, `categories`, `authors`, etc...
 * 
 * @example    php
 * $post = new WPS_Post($wp_post);
 * $post_id = $post->id;
 * $authors = $post->authors;
 * $featured_image_url = $post->featured_image_url('large');
 * $date = $post->date();
 * 
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
class WPS_Post {

	/**
     * Construct the object using the passed wp_post
     * @param    {WP_Post}    $wp_post    The wordpress post object to encapsulate
     */
	public function __construct($wp_post) {
		$this->wp_post = $wp_post;
	}

	/**
     * Properties accessor
     */
	public function __get($property) {
		if (method_exists($this, "get_$property")) {
			return call_user_func_array([$this, "get_$property"], []);
		}
	}

	/**
	 * Get the post id
	 * @return    {Integer}    The post id
	 */
	public function get_id() {
		return $this->wp_post->ID;
	}

	/**
	 * Get the post name
	 * @return    {Integer}    The post name
	 */
	public function get_name() {
		return $this->wp_post->post_name;
	}

	/**
	 * Get the post type
	 * @return    {Integer}    The post type
	 */
	public function get_type() {
		return $this->wp_post->post_type;
	}

	/**
	 * Get the post date
	 * @return    {Integer}    The post date
	 */
	public function get_date() {
		return $this->wp_post->post_date;
	}

	/**
	 * Get the post data_gmt
	 * @return    {Integer}    The post data_gmt
	 */
	public function get_date_gmt() {
		return $this->wp_post->post_date_gmt;
	}

	/**
	 * Get the post status
	 * @return    {Integer}    The post status
	 */
	public function get_status() {
		return $this->wp_post->post_status;
	}

	/**
	 * Get the post comment_status
	 * @return    {Integer}    The post comment_status
	 */
	public function get_comment_status() {
		return $this->wp_post->comment_status;
	}

	/**
	 * Get the post ping_status
	 * @return    {Integer}    The post ping_status
	 */
	public function get_ping_status() {
		return $this->wp_post->ping_status;
	}

	/**
	 * Get the post password
	 * @return    {Integer}    The post password
	 */
	public function get_password() {
		return $this->wp_post->post_password;
	}

	/**
	 * Get the post parent
	 * @return    {Integer}    The post parent
	 */
	public function get_parent() {
		return $this->wp_post->post_parent;
	}

	/**
	 * Get the post modified
	 * @return    {Integer}    The post modified
	 */
	public function get_modified() {
		return $this->wp_post->post_modified;
	}

	/**
	 * Get the post modified_gmt
	 * @return    {Integer}    The post modified_gmt
	 */
	public function get_modified_gmt() {
		return $this->wp_post->post_modified_gmt;
	}

	/**
	 * Get the post comment_count
	 * @return    {Integer}    The post comment_count
	 */
	public function get_comment_count() {
		return $this->wp_post->comment_count;
	}

	/**
	 * Get the post menu_order
	 * @return    {Integer}    The post menu_order
	 */
	public function get_menu_order() {
		return $this->wp_post->menu_order;
	}

	/**
	 * Get the post permalink
	 * @return    {String}    The post permalink
	 */
	public function get_permalink() {
		return get_post_permalink($this->wp_post->ID);
	}

	/**
	 * Get the post title with the filters applied
	 * @return    {String}    The post title
	 */
	public function get_title() {
		return apply_filters('the_title', $this->wp_post->post_title);
	}

	/**
	 * Get the post raw title
	 * @return    {String}    The post raw title
	 */
	public function get_raw_title() {
		return $this->wp_post->post_title;
	}

	/**
	 * Get the post excerpt with the filters applied
	 * @return    {String}    The post excerpt
	 */
	public function get_excerpt() {
		return apply_filters('the_excerpt', $this->wp_post->post_excerpt);
	}

	/**
	 * Get the post raw excerpt
	 * @return    {String}    The post raw excerpt
	 */
	public function get_raw_excerpt() {
		return $this->wp_post->post_excerpt;
	}

	/**
	 * Get the post content with the filters applied
	 * @return    {String}    The post content
	 */
	public function get_content() {
		return apply_filters('the_content', $this->wp_post->post_content);
	}

	/**
	 * Get the post raw content
	 * @return    {String}    The post raw content
	 */
	public function get_raw_content() {
		return $this->wp_post->post_content;
	}

	/**
	 * Get the post format
	 * @return    {String,Boolean}    The post format or false if not specified
	 */
	public function get_format() {
		return get_post_format($this->id);
	}

	/**
	 * Get the post featured image url
	 * @return    {String}    The post featured image url
	 */
	public function get_featured_image_url() {
		return wp_get_attachment_image_src( get_post_thumbnail_id( $this->wp_post->ID ), 'thumbnail' )[0];
	}

	/**
	 * Get the post featured image url
	 * @param    {String}    [$size="full"]    The size wanted
	 * @return    {String}    The post featured image url
	 */
	public function featured_image_url($size = 'full') {
		return wp_get_attachment_image_src( get_post_thumbnail_id( $this->wp_post->ID ), $size )[0];
	}

	/**
	 * Get the post categories
	 * @return    {Array}    The post categories
	 */
	public function get_categories() {
		$ar = [];
		foreach(get_the_category($this->wp_post->ID) as $categorie) {
			array_push($ar, (object) [
				'name' => $categorie->name,
				'url' => get_category_link($categorie->cat_ID)
			]);
		}
		return $ar;
	}

	/**
	 * Get the post categories formated
	 * @param    {String}    [$glue=", "]    The character used to glue together the categories
	 * @param    {Boolean}    [$link=true]    If want a link around each categories or not
	 * @return    {String}    The post categories formated
	 */
	public function categories($glue = ', ', $link = true) {
		$ar = [];
		foreach(get_the_category($this->wp_post->ID) as $categorie) {
			if ($link) {
				array_push($ar, '<a href="'.get_category_link($categorie->cat_ID).'" title="' . Thorin::esc_attr($this->title) . '">'.$categorie->name.'</a>');
			} else {
				array_push($ar, $categorie->name);
			}
		}
		return implode($glue, $ar);
	}

	/**
	 * Get the post authors
	 * @return    {Array<WPS_User>}    The post authors
	 */
	public function get_authors() {
		if (function_exists('get_coauthors')) {
			$authors = array_map(function($author) {
				return new WPS_User($author);
			}, get_coauthors($this->wp_post->ID));
			return $authors;
		} else {
			return [new WPS_User(get_userdata($this->wp_post->post_author))];
		}	
	}

	/**
	 * Get the post authors formated
	 * @param    {String}    [$glue=", "]    The character used to glue together the authors
	 * @param    {Boolean}    [$link=true]    If want a link around each authors or not
	 * @return    {String}    The post authors
	 */
	public function authors($glue = ', ', $link = true) {
		// get authors
		$authors = $this->authors;
		$ar = [];
		foreach($authors as $author) {
			if ($link) {
				array_push($ar, '<a href="'.get_author_posts_url($author->ID).'" title="' . Thorin::esc_attr($author->data->display_name) . '">'.$author->data->display_name.'</a>');
			} else {
				array_push($ar, $author->data->display_name);
			}
		}
		return implode($glue, $ar);
	}

	/**
	 * Get the post tags
	 * @return    {Array}    The post tags
	 */
	public function get_tags() {
		$ar = [];
		$tags = get_the_tags($this->id);
		if (!$tags) return $ar;
		foreach($tags as $tag) {
			array_push($ar, (object) [
				'name' => $tag->name,
				'url' => get_tag_link($tag->term_id)
			]);
		}
		return $ar;
	}

	/**
	 * Get the post tags formated
	 * @param    {String}    [$glue=", "]    The character used to glue together the tags
	 * @param    {Boolean}    [$link=true]    If want a link around each tags or not
	 * @return    {String}    The post tags formated
	 */
	public function tags($glue = ', ', $link = true) {
		$ar = [];
		$tags = get_the_tags($this->id);
		if (!$tags) return $ar;
		foreach($tags as $tag) {
			if ($link) {
				array_push($ar, '<a href="'.get_tag_link($tag->term_id).'" title="' . Thorin::esc_attr($tag->name) . '">'.$tag->name.'</a>');
			} else {
				array_push($ar, $tag->name);
			}
		}
		return implode($glue, $ar);
	}

	/**
	 * Get the post date formated
	 * @param    {String}    [$format=null]    The format wanted for the date
	 * @return    {String}    The post data formated
	 */
	public function date($format = null) {
		if ( ! $format) {
			$format = get_option('date_format');
		}
		return get_the_time($format, $this->wp_post->ID);
	}

	/**
	 * Check if the post is published or not
	 * @return    {Boolean}    true if published, false if not
	 */
	public function is_published() {
		return $this->status === 'publish';
	}

	/**
	 * Check if the post is pending or not
	 * @return    {Boolean}    true if pending, false if not
	 */
	public function is_pending() {
		return $this->status === 'pending';
	}

	/**
	 * Check if the post is in draft or not
	 * @return    {Boolean}    true if draft, false if not
	 */
	public function is_draft() {
		return $this->status === 'draft';
	}

	/**
	 * Check if the post is private or not
	 * @return    {Boolean}    true if private, false if not
	 */
	public function is_private() {
		return $this->status === 'private';
	}

	/**
	 * Check if the post is sticky or not
	 * @return    {Boolean}    true if sticky, false if not
	 */
	public function is_sticky() {
		return is_sticky($this->id);
	}

	/**
	 * Check if the post is password protected or not
	 * @return    {Boolean}    true if password protected, false if not
	 */
	public function is_password_protected() {
		return $this->password !== '';
	}
}
