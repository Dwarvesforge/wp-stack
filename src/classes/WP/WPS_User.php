<?php

/**
 * WP_User wrapper class.
 * This class wrap a WP_User object and give them some helpers and some features like `get_avatar_url`, accessor like `get_login`, `get_page_url`, etc...
 * 
 * @example    php
 * $user = new WPS_User($wp_user);
 * $avatarUrl = $user->avatar_url;
 * 
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
class WPS_User {

    /**
     * Construct the object using the passed wp_user
     * @param    {WP_User}    $wp_user    The wordpress user object to encapsulate
     */
    public function __construct($wp_user) {
        $this->wp_user = $wp_user;
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
     * Get the user id
     * @return    {Integer}    The user id
     */
    public function get_id() {
        return $this->wp_user->data->ID;
    }

    /**
     * Get the user login
     * @return    {String}    The user login
     */
    public function get_login() {
        return $this->wp_user->data->user_login;
    }

    /**
     * Get the user password
     * @return    {String}    The user password
     */
    public function get_password() {
        return $this->wp_user->data->user_pass;
    }

    /**
     * Get the user nicename
     * @return    {String}    The user nicename
     */
    public function get_nicename() {
        return $this->wp_user->data->user_nicename;
    }

    /**
     * Get the user email
     * @return    {String}    The user email
     */
    public function get_email() {
        return $this->wp_user->data->user_email;
    }

    /**
     * Get the user firstname
     * @return    {String}    The user firstname
     */
    public function get_firstname() {
        return $this->wp_user->first_name;
    }

    /**
     * Get the user lastname
     * @return    {String}    The user lastname
     */
    public function get_lastname() {
        return $this->wp_user->last_name;
    }

    /**
     * Get the user url
     * @return    {String}    The user url. This is the user website url, not the user page url.
     */
    public function get_url() {
        return $this->wp_user->data->user_url;
    }

    /**
     * Get the page url of the author
     * @return    {String}    The page url of the author
     */
    public function get_page_url() {
        return get_author_posts_url($this->id);
    }

    /**
     * Get the user registered
     * @return    {String}    The user registered
     */
    public function get_registered() {
        return $this->wp_user->data->user_registered;
    }

    /**
     * Get the user activation key
     * @return    {String}    The user activation_key
     */
    public function get_activation_key() {
        return $this->wp_user->data->user_activation_key;
    }

    /**
     * Get the user status
     * @return    {String}    The user status
     */
    public function get_status() {
        return $this->wp_user->data->user_status;
    }

    /**
     * Get the user display name
     * @return    {String}    The user display_name
     */
    public function get_display_name() {
        return $this->wp_user->data->display_name;
    }

    /**
     * Return all the capabilities the user has
     * @return    [Array]    The user capabilities
     */
    public function get_capabilities() {
        return $this->wp_user->caps;
    }

    /**
     * Return all the capabilities the user has
     * @return    [Array]    The user capabilities
     */
    public function get_all_capabilities() {
        return $this->wp_user->allcaps;
    }

    /**
     * Return all the roles the user has
     * @return    [Array]    The user roles
     */
    public function get_roles() {
        return $this->wp_user->roles;
    }

    /**
     * Get the avatar url for this user
     * @return    {String}    The avatar url
     */
    public function get_avatar_url() {
        return get_avatar_url($this->id);
    }

    /**
     * Get the avatar url for this user using some arguments like size
     * @return    {String}    The avatar url
     */
    public function avatar_url($size = 96, $default = 'gravatar_default') {
        return get_avatar_url($this->id, [
            'default' => $default,
            'size' => $size
        ]);
    }

    /**
     * Determine whether the user exists in the database.
     * It actually tests !empty(ID), which will normally indicate that the user record was in the database at some stage. It does not access the database.
     * @return    {Boolean}    true if user exists, false otherwise.
     */
    public function exists() {
        return $this->wp_user->exists();
    }

    /**
     * Retrieve the value of a property or meta key from the users and usermeta tables.
     * @param    {String}    $key    property
     * @return   {Mixed}    String of the property filtered if single value, or array if value is stored as a serialized array
     */
    public function get($key) {
        return $this->wp_user->get($key);
    }

    /**
     * Determine whether a property or meta key is set from the users and usermeta tables.
     * @param    {String}    $key    property
     * @return    {Boolean}    true if user has property, false otherwise
     */
    public function has_prop($key) {
        return $this->wp_user->has_prop($key);
    }

    /**
     * Add role to user.
     * Updates the user's meta data option with capabilities and roles.
     * @param    {String}    $role    Role name
     */
    public function add_role($role) {
        return $this->wp_user->add_role($role);
    }

    /**
     * Remove role from user.
     * @param    {String}    $role    Role name
     */
    public function remove_role($role) {
        return $this->wp_user->remove_role($role);
    }

    /**
     * Set the role of the user.
     * This will remove the previous roles of the user and assign the user the new one. You can set the role to an empty string and it will remove all of the roles from the user.
     * @param    {String}    $role    Role name
     */
    public function set_role($role) {
        return $this->wp_user->set_role($role);
    }

    /**
     * Add capability and grant or deny access to capability.
     * @param    {String}    $cap    Capability name
     * @param    {Boolean}    $grant    whether to grant capability to user. Default to true.
     */
    public function add_cap($cap, $grant = true) {
        return $this->wp_user->add_cap($cap, $grant);
    }

    /**
     * Remove capability from user
     * @param    {String}    $cap    Capability name
     */
    public function remove_cap($cap) {
        return $this->wp_user->remove_cap($cap);
    }

    /**
     * Remove all of the capabilities of the user.
     */
    public function remove_all_caps() {
        return $this->wp_user->remove_all_caps();
    }

    /**
     * Whether user has capability or role name.
     * @param    {String}    $cap    capability or role name to search
     * @return    {Boolean}    true if user has capability, false if they do not have the capability
     */
    public function has_cap($cap) {
        return $this->wp_user->has_cap($cap);
    }
}