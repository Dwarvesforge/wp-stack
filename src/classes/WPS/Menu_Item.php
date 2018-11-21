<?php

namespace WPS;

/**
 * Class that represent a menu item. You usually don't have to create this by yourself, but
 * by calling functions like `WPS::menu('primary')`.
 *
 * @example    php
 * $menuItem = new \WPS\Menu_Item($wp_post);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
class Menu_Item {

    /**
     * The menu item id
     * @type    {Integer}
     */
    public $id = null;

    /**
     * THe menu item url
     * @type    {String}
     */
    public $url = null;

    /**
     * The menu item title
     * @type    {String}
     */
    public $title = null;

    /**
     * The menu item title attribute
     * @type    {String}
     */
    public $attr_title = null;

    /**
     * The menu item target
     * @type    {String}
     */
    public $target = null;

    /**
     * The menu item description
     * @type    {String}
     */
    public $description = null;

    /**
     * The meni item classes
     * @type    {Array}
     */
    public $classes = [];

    /**
     * The menu item sub items
     * @type    {Array}
     */
    public $items = [];

    /**
     * Construct the object using the wp_post passed menu item
     * @param    {WP_Post}    $wp_post    The wp_post menu item
	 *
	 * @example    php
	 * $wpsMenuItem = new \WPS\Menu_Item($wp_post);
	 *
	 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
     */
    public function __construct($wp_post) {
        $this->wp_post = $wp_post;
        $this->id = $wp_post->ID;
        $this->url = $wp_post->url;
        $this->title = $wp_post->title;
        $this->attr_title = $wp_post->attr_title;
        $this->target = $wp_post->target;
        $this->description = $wp_post->description;
        $this->classes = array_filter($wp_post->classes);
        $this->items = [];
    }
}
