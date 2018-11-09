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
	 * The post id
	 * @type    {Integer}
	 */
	public $id = null;

	/**
	 * The post name
	 * @type    {String}
	 */
	public $name = null;

	/**
	 * The post type
	 * @type    {String}
	 */
	public $type = null;

	/**
	 * The post date
	 * @type    {String}
	 */
	public $date = null;

	/**
	 * The post GMT date
	 * @type    {String}
	 */
	public $date_gmt = null;

	/**
	 * The post status
	 * @type    {String}
	 */
	public $status = null;

	/**
	 * The post comment status
	 * @type    {String}
	 */
	public $comment_status = null;

	/**
	 * The post ping status
	 * @type    {String}
	 */
	public $ping_status = null;

	/**
	 * The post password
	 * @type    {String}
	 */
	public $password = null;

	/**
	 * The post parent id
	 * @type    {Integer}
	 */
	public $parent = null;

	/**
	 * The post modified datetime
	 * @type    {String}
	 */
	public $modified = null;

	/**
	 * The post modified datetime GMT
	 * @type    {String}
	 */
	public $modified_gmt = null;

	/**
	 * The post comment count
	 * @type    {Integer}
	 */
	public $comment_count = 0;

	/**
	 * The post menu order
	 * @type    {Integer}
	 */
	public $menu_order = null;

	/**
	 * The post permalink
	 * @type    {String}
	 */
	public $permalink = null;

	/**
	 * The post title with the filters applied
	 * @type    {String}
	 */
	public $title = null;

	/**
	 * The post raw title
	 * @type    {String}
	 */
	public $raw_title = null;

	/**
	 * The post excerpt with the filters applied
	 * @type    {String}
	 */
	public $excerpt = null;

	/**
	 * The post raw excerpt
	 * @type    {String}
	 */
	public $raw_excerpt = null;

	/**
	 * The post content with the filters applied
	 * @type    {String}
	 */
	public $content = null;

	/**
	 * The post raw content
	 * @type    {String}
	 */
	public $raw_content = null;

	/**
     * Construct the object using the passed wp_post
     * @param    {WP_Post}    $wp_post    The wordpress post object to encapsulate
     */
	public function __construct($wp_post) {
		$wp_post = (object) $wp_post;
		$this->id = $wp_post->ID;
		$this->name = $wp_post->post_name;
		$this->type = $wp_post->post_type;
		$this->date = $wp_post->post_date;
		$this->date_gmt = $wp_post->post_date_gmt;
		$this->status = $wp_post->post_status;
		$this->comment_status = $wp_post->comment_status;
		$this->ping_status = $wp_post->ping_status;
		$this->password = $wp_post->post_password;
		$this->parent = $wp_post->post_parent;
		$this->modified = $wp_post->post_modified;
		$this->modified_gmt = $wp_post->post_modified_gmt;
		$this->comment_count = $wp_post->comment_count;
		$this->menu_order = $wp_post->menu_order;
		$this->permalink = get_post_permalink($this->id);
		$this->title = apply_filters('the_title', $wp_post->post_title);
		$this->raw_title = $wp_post->post_title;
		$this->excerpt = apply_filters('the_excerpt', $wp_post->post_excerpt);
		$this->raw_excerpt = $wp_post->post_excerpt;
		$this->content = apply_filters('the_content', $wp_post->post_content);
		$this->raw_content = $wp_post->post_content;
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
