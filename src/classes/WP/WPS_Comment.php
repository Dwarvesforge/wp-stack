<?php

/**
 * Class that represent a wordpress comment
 *
 * @example    php
 * $comment = new WPS_Comment($wp_comment);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
class WPS_Comment {

    /**
     * The comment id
     * @type    {Integer}
     */
    public $id = null;

    /**
     * The comment post id
     * @type    {Integer}
     */
    public $post_id = null;

    /**
     * The comment author ip address
     * @type    {String}
     */
    public $ip = null;

    /**
     * The comment datetime
     * @type    {String}
     */
    public $date = null;

    /**
     * The comment date GMT
     * @type    {String}
     */
    public $date_gmt = null;

    /**
     * The comment content
     * @type    {String}
     */
    public $content = null;

    /**
     * The comment karma
     * @type    {Integer}
     */
    public $karma = null;

    /**
     * The comment approved status
     * @type    {Integer}
     */
    public $approved = null;

    /**
     * The comment author user agent
     * @type    {String}
     */
    public $agent = null;

    /**
     * The comment type
     * @type    {String}
     */
    public $type = null;

    /**
     * The comment parent id
     * @type    {Integer}
     */
    public $parent = null;

    /**
     * Construct the object using the passed wp_comment
     * @param    {WP_Comment}    $wp_comment    The wordpress comment object to encapsulate
     */
    public function __construct($wp_comment) {
        $this->wp_comment = (object) $wp_comment;
        $this->id = $wp_comment->comment_ID;
        $this->post_id = $wp_comment->comment_post_ID;
        $this->ip = $wp_comment->comment_author_IP;
        $this->date = $wp_comment->comment_date;
        $this->date_gmt = $wp_comment->comment_date_gmt;
        $this->content = $wp_comment->comment_content;
        $this->karma = $wp_comment->comment_karma;
        $this->approved = $wp_comment->comment_approved;
        $this->agent = $wp_comment->comment_agent;
        $this->type = $wp_comment->comment_type;
        $this->parent = $wp_comment->comment_parent;
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
     * Get the post on which this comment has been published
     * @return    {WPS_Post}    A WPS_Post object representing the post on which the comment has been published
	 *
	 * @example    php
	 * $post = $comment->post;
     */
    public function get_post() {
        $post = get_post($this->wp_comment->comment_post_ID);
        return new WPS_Post($post);
    }

    /**
     * Get the user who post the comment
     * @return    {WPS_User}    A WPS_User object representing the user who post the comment
	 *
	 * @example    php
	 * $author = $comment->author;
     */
    public function get_author() {
        $user = get_userdata($this->wp_comment->user_id);
        return new WPS_User($user);
    }

    /**
     * Check if the comment is approved or not
     * @return    {Boolean}    true if approved, false if not
     */
    public function is_approved() {
        return $this->approved === '1';
    }
}
