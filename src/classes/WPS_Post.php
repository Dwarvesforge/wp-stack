<?php

class WPS_Post {

	public function __construct($wp_post) {
		$this->wp_post = $wp_post;
	}

	public function __get($property) {
		if (method_exists($this, "get_$property")) {
			return call_user_func_array([$this, "get_$property"], []);
		}
	}

	public function get_id() {
		return $this->wp_post->ID;
	}
	public function get_permalink() {
		return get_post_permalink($this->wp_post->ID);
	}

	public function get_title() {
		return apply_filters('the_title', $this->wp_post->post_title);
	}
	public function get_raw_title() {
		return $this->wp_post->post_title;
	}
	public function get_content() {
		return apply_filters('the_content', $this->wp_post->post_content);
	}
	public function get_raw_content() {
		return $this->wp_post->post_content;
	}


	public function get_featured_image_url() {
		return wp_get_attachment_image_src( get_post_thumbnail_id( $this->wp_post->ID ), 'thumbnail' )[0];
	}
	public function featured_image_url($size = 'full') {
		return wp_get_attachment_image_src( get_post_thumbnail_id( $this->wp_post->ID ), $size )[0];
	}

	public function get_categories() {
		$ar = [];
		foreach(get_the_category($this->wp_post->ID) as $categorie) {
			array_push($ar, $categorie->name);
		}
		return implode(', ', $ar);
	}

	public function categories($glue = ', ', $link = false) {
		$ar = [];
		foreach(get_the_category($this->wp_post->ID) as $categorie) {
			if ($link) {
				array_push($ar, '<a href="'.get_category_link($categorie->cat_ID).'">'.$categorie->name.'</a>');
			} else {
				array_push($ar, $categorie->name);
			}
		}
		return implode($glue, $ar);
	}

	public function get_authors() {
		if (false && function_exists('get_coauthors')) {
			return get_coauthors($this->wp_post->ID);
		} else {
			return [get_userdata($this->wp_post->post_author)];
		}
	}

	public function authors($glue = ', ', $link = false) {
		// get authors
		$authors = $this->authors;
		$ar = [];
		foreach($authors as $author) {
			if ($link) {
				array_push($ar, '<a href="'.get_author_posts_url($author->ID).'">'.$author->data->display_name.'</a>');
			} else {
				array_push($ar, $author->data->display_name);
			}
		}
		return implode($glue, $ar);
	}

	public function date($format = null) {
		if ( ! $format) {
			$format = get_option('date_format');
		}
		return get_the_time($format, $this->wp_post->ID);
	}

}
