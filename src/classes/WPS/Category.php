<?php

namespace WPS;

/**
 * Class that represent a category
 *
 * @example    php
 * $category = new \WPS\Category($wp_term);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com>
 */
class Category {

    /**
     * The category id
     * @type    {Integer}
     */
    public $id = null;

    /**
     * The category name
     * @type    {String}
     */
    public $name = null;

    /**
     * The category description
     * @type    {String}
     */
    public $description = null;

    /**
     * The category slug
     * @type    {String}
     */
    public $slug = null;

    /**
     * The category taxonomy
     * @type    {String}
     */
    public $taxonomy = null;

    /**
     * The category url
     * @type    {String}
     */
    public $url = null;

    /**
     * The number of posts in the category
     * @type    {Integer}
     */
    public $count = 0;

    /**
     * The parent category id
     * @type    {Integer}
     */
    public $parent = null;

    /**
     * Construct the object using the passed wp_term
     * @param    {WP_Term}    $wp_term    The wordpress term object to encapsulate
	 *
	 * @example    php
	 * $wpsCategory = new \WPS\Category($wp_term);
	 *
	 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
     */
    public function __construct($wp_term) {
        $this->wp_term = (object) $wp_term;
        $this->id = $wp_term->cat_ID;
        $this->name = $wp_term->name;
        $this->description = $wp_term->description;
        $this->slug = $wp_term->slug;
        $this->taxonomy = $wp_term->taxonomy;
        $this->url = get_category_link($this->id);
        $this->count = $wp_term->count;
        $this->parent = $wp_term->category_parent;
    }
}
