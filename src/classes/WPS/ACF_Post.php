<?php

namespace WPS;

/**
 * ACF (advanced custom fields) post wrapper class.
 * This class wrap a WP_Post object and give them some of the ACF capabilities like `get_field`, `get_field_object`, `have_rows`, etc...
 *
 * @example    php
 * $acfPost = new \WPS\ACF_Post($wp_post);
 * while($acfPost->have_rows('parent_field')) {
 *    $acfPost->the_row();
 *    $field = $acfPost->get_sub_field('sub_field');
 * }
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://www.advancedcustomfields.com/resources/#functions
 */
class ACF_Post extends \WPS\Post {

    /**
     * Class constructor
     * @param    {WP_Post}    $wp_post    The wordpress post to encapsulate
     */
    public function __construct($wp_post) {
        parent::__construct($wp_post);
        $this->check_acf_installation();
    }

    /**
     * Returns the value of a specific field.
     * Intuitive and powerful (much like ACF itself ?), this function can be used to load the value of any field from any location. Please note that each field type returns different forms of data (string, int, array, etc).
     * @param    {String}    $key    The field key to get
     * @param    {Boolean}    [$format_value=true]    Whether to apply formatting logic
     * @return    {String}    The field value
	 *
	 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
     */
    public function get_field($key, $format_value = true) {
        return get_field($key, $this->id, $format_value);
    }

    /**
     * Returns the settings of a specific field.
     * Each field contains many settings such as a label, name and type. This function can be used to load these settings as an array along with the field’s value.
     * @param    {String}    $key    The field key to get
     * @param    {Boolean}    [$format_value=true]    Whether to apply formatting logic
     * @param    {Boolean}    [$load_value=true]    Whether to load the field’s value
     * @return    {Array}    An array with the field settings
	 *
	 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
     */
    public function get_field_object($key, $format_value = true, $load_value = true) {
        return get_field_object($key, $this->id, $format_value, $load_value);
    }

    /**
     * Returns an array of values (name => value) for a the post.
     * @param    {Boolean}    [$format_value=true]    Whether to apply formatting to the value
     * @return    {Array}    An array of values (name => value) for a the post
	 *
	 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
     */
    public function get_fields($format_value = true) {
        return get_fields($this->id, $format_value);
    }

    /**
     * Returns an array of custom field objects for a specific page / post.
     * This is a very simple function which finds ALL custom field values (that don’t start with an “_”) in the wp_postmeta table and returns them in an associated array where the $field_name => field object
     * You should only use this function when you do not know the fields which which will be appearing on a template or if you have a large amount of fields which you would prefer not to code independently.
     * @param    {Boolean}    [$format_value=true]    Whether to apply formatting logic
     * @param    {Boolean}    [$load_value=true]    Whether to load the field’s value
     * @return    {Array}    An array of fields object in key=>value pairs format
	 *
	 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
     */
    public function get_field_objects($format_value = true, $load_value = true) {
        return get_field_objects($this->id, $format_value, $load_value);
    }

    /**
     * This function checks to see if a field (such as a Repeater or Flexible Content field) has any rows of data to loop over. This is a boolean function, meaning it returns either true or false.
     * This function is intended to be used in conjunction with the_row() to step through available values.
     * Using `have_rows()` together with `the_row()` is intended to feel native much like the `have_posts()` and `the_post()` WordPress functions.
     * @param    {String}    $key    The field key to get
     * @return    {Boolean}    true if has rows, false if not
	 *
	 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
     */
    public function have_rows($key) {
        return have_rows($key, $this->id);
    }

    /**
     * Set the current row to work with. This has to be used in conjunction with the have_rows method like the `have_posts` is used with the `the_post` function.
	 *
	 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
     */
    public function the_row() {
        the_row();
    }

    /**
     * Returns the value of a specific sub field.
     * @param    {String}    $sub_field_name    the name of the field to be retrieved. eg “page_content”
     * @param    {Boolean}    [$format_value=true]    whether or not to format the value loaded from the db
	 *
	 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
     */
    public function get_sub_field($sub_field_name, $format_value = true) {
        return get_sub_field($sub_field_name, $format_value);
    }

    /**
     * Returns the settings (array) of a specific sub field within a have_rows() loop.
     * The field’s value will also be loaded unless otherwise specified.
     * @param    {String}   $selector    The field name or field key
     * @param    {Boolean}    [$format_value=true]    Whether to apply formatting logic
     * @param    {Boolean}    [$load_value=true]    Whether to load the field’s value
     * @return    {Array}    An array of the field properties
	 *
	 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
     */
    public function get_sub_field_object($selector, $format_value = true, $load_value = true) {
        return get_sub_field_object($selector, $format_value, $load_value);
    }

    /**
     * Return an array containing all sub field values for the current row.
     * This function will return an array containing all sub field values for the current row within a have_rows() loop.
     * @param    {Boolean}    [$format_value=true]     whether or not to format the value loaded from the db
     * @return    {Array}    Return an array containing all sub field values for the current row
	 *
	 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
     */
    public function get_row($format_value = true) {
        return get_row($format_value);
    }

    /**
     * This function will return the current loop count within a have_rows() loop.
	 *
	 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
     */
    public function get_row_index() {
        return get_row_index();
    }

    /**
     * This function returns the current layout (string) within a the_flexible_field() loop. A flexible content field may hold many different layout options which can be placed on a page in any order.
     * It is necessary to use this function in your template to decide what code to write and which sub fields to call.
	 *
	 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
     */
    public function get_row_layout() {
        return get_row_layout();
    }

    /**
     * Return an array with the row fields in case the field requested if a repeatable or a flexible one.
     * @param    {String}    $selector    The field name or field key
     * @return    {Array}    An array with the row fields objects
	 *
	 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
     */
    public function get_rows($key) {
        $field_object = $this->get_field_object($key);
        if (is_array($field_object['value'])) {
            return $field_object['value'];
        } else {
            return false;
        }
    }

    /**
     * Make sure that ACF is installed. Otherwise, throw an error.
	 *
	 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
     */
    private function check_acf_installation() {
        if ( ! function_exists('get_field_object')) {
            throw new Exception('Make sure to install the ACF plugin!');
        }
    }
}
