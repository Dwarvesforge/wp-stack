<?php

class WPS_Comment {

    /**
     * Construct the object using the passed wp_comment
     * @param    {WP_Comment}    $wp_comment    The wordpress comment object to encapsulate
     */
    public function __construct($wp_comment) {
        $this->wp_comment = $wp_comment;
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
     * Get the comment id
     * @return    {Integer}    The comment id
     */
    public function get_id() {
        return $this->wp_comment->comment_ID;
    }

    /**
     * Get the post id
     * @return    {Integer}    The post id
     */
    public function get_post_id() {
        return $this->wp_comment->comment_post_ID;
    }

    /**
     * Get the comment ip address
     * @return    {String}    The comment ip address
     */
    public function get_ip() {
        return $this->wp_comment->comment_author_IP;
    }

    /**
     * Get the comment data
     * @return    {String}    The comment data
     */
    public function get_date() {
        return $this->wp_comment->comment_date;
    }

    /**
     * Get the comment data_gmt
     * @return    {String}    The comment data_gmt
     */
    public function get_data_gmt() {
        return $this->wp_comment->comment_data_gmt;
    }

    /**
     * Get the comment content
     * @return    {String}    The comment content
     */
    public function get_content() {
        return $this->wp_comment->comment_content;
    }

    /**
     * Get the comment karma
     * @return    {String}    The comment karma
     */
    public function get_karma() {
        return $this->wp_comment->comment_karma;
    }

    /**
     * Get the comment approved
     * @return    {String}    The comment approved
     */
    public function get_approved() {
        return $this->wp_comment->comment_approved;
    }

    /**
     * Get the comment agent
     * @return    {String}    The comment agent
     */
    public function get_agent() {
        return $this->wp_comment->comment_agent;
    }

    /**
     * Get the comment type
     * @return    {String}    The comment type
     */
    public function get_type() {
        return $this->wp_comment->comment_type;
    }

    /**
     * Get the comment parent
     * @return    {String}    The comment parent
     */
    public function get_parent() {
        return $this->wp_comment->comment_parent;
    }

    /**
     * Get the post on which this comment has been published
     * @return    {WPS_Post}    A WPS_Post object representing the post on which the comment has been published
     */
    public function get_post() {
        $post = get_post($this->wp_comment->comment_post_ID);
        return new WPS_Post($post);
    }

    /**
     * Get the user who post the comment
     * @return    {WPS_User}    A WPS_User object representing the user who post the comment
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