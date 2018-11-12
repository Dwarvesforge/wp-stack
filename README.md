![WP-Stack](.resources/doc-header.jpg)

# WP-Stack

<p>
	<!-- <a href="https://travis-ci.org/Dwarvesforge/wp-stack">
		<img src="https://img.shields.io/travis/Dwarvesforge/thorin.svg?style=flat-square" />
	</a> -->
	<!-- <a href="https://www.npmjs.com/package/coffeekraken-sugar">
		<img src="https://img.shields.io/npm/v/coffeekraken-sugar.svg?style=flat-square" />
	</a>
	<a href="https://github.com/Coffeekraken/sugar/blob/master/LICENSE.txt">
		<img src="https://img.shields.io/npm/l/coffeekraken-sugar.svg?style=flat-square" />
	</a> -->
	<!-- <a href="https://github.com/coffeekraken/sugar">
		<img src="https://img.shields.io/npm/dt/coffeekraken-sugar.svg?style=flat-square" />
	</a>
	<a href="https://github.com/coffeekraken/sugar">
		<img src="https://img.shields.io/github/forks/coffeekraken/sugar.svg?style=social&label=Fork&style=flat-square" />
	</a>
	<a href="https://github.com/coffeekraken/sugar">
		<img src="https://img.shields.io/github/stars/coffeekraken/sugar.svg?style=social&label=Star&style=flat-square" />
	</a>-->
	<!-- <a href="https://twitter.com/coffeekrakenio">
		<img src="https://img.shields.io/twitter/url/http/coffeekrakenio.svg?style=social&style=flat-square" />
	</a>
	<a href="http://coffeekraken.io">
		<img src="https://img.shields.io/twitter/url/http/shields.io.svg?style=flat-square&label=coffeekraken.io&colorB=f2bc2b&style=flat-square" />
	</a> -->
</p>

Wordpress stack that gives you nice classes as wrapper of the wordpress ones as well as some nice helper functions.

- Archives
	- [`WPS::archives`](doc/src/functions/archives/wps_archives.md) : get back some archives links in object format depending on arguments you've passed
- Categories
	- [`WPS::categories`](doc/src/functions/categories/wps_categories.md) : get back some categories in [`WPS_Category`](doc/src/classes/WP/WPS_Category.md) object format depending on arguments you've passed
- Comments
	- [`WPS::recent_comments`](doc/src/functions/comments/wps_recent_comments.md) : get back some comments in [`WPS_Comment`](doc/src/classes/WP/WPS_Comment.md) object format depending on arguments you've passed
- Menus
	- [`WPS::menu`](doc/src/functions/menus/wps_menu.md) : get back a menu in [`WPS_Menu_Item`](doc/src/classes/WP/WPS_Menu_Item.md) object format
- Pagination
	- [`WPS::pagination`](doc/src/functions/pagination/wps_pagination.md) : get back a pagination in an array of objects format depending on the arguments you've passed
- Posts
	- [`WPS::next_post`](doc/src/functions/posts/wps_next_post.md) : get back the next post in [`WPS_Post`](doc/src/classes/WP/WPS_Post.md) object format
	- [`WPS::next_posts_link`](doc/src/functions/posts/wps_next_posts_link.md) : get back an object of the next posts link. Useful to create paginations
	- [`WPS::next_posts_url`](doc/src/functions/posts/wps_next_posts_url.md) : get back the url of the next posts. Useful to create paginations
	- [`WPS::post`](doc/src/functions/posts/wps_post.md) : get back a post in [`WPS_Post`](doc/src/classes/WP/WPS_Post.md) object format depending on post id passed
	- [`WPS::posts`](doc/src/functions/posts/wps_posts.md) : get back some posts in [`WPS_Post`](doc/src/classes/WP/WPS_Post.md) object format depending on arguments you've passed
	- [`WPS::previous_post`](doc/src/functions/posts/wps_previous_post.md) : get back the previous post in [`WPS_Post`](doc/src/classes/WP/WPS_Post.md) object format
	- [`WPS::previous_posts_link`](doc/src/functions/posts/wps_previous_posts_link.md) : get back an object of the previous posts link. Useful to create paginations
	- [`WPS::previous_posts_url`](doc/src/functions/posts/wps_previous_posts_url.md) : get back the url of the previous posts. Useful to create paginations
	- [`WPS::recent_posts`](doc/src/functions/posts/wps_recent_posts.md) : get back some recent posts in [`WPS_Post`](doc/src/classes/WP/WPS_Post.md) object format depending on arguments you've passed
- Descriptive classes
	- [`WPS_ACF_Post`](doc/src/classes/WP/WPS_ACF_Post.md) : class that represent an ACF drived post
	- [`WPS_Category`](doc/src/classes/WP/WPS_Category.md) : class that represent a category object
	- [`WPS_Comment`](doc/src/classes/WP/WPS_Comment.md) : class that represent a comment object
	- [`WPS_Menu_Item`](doc/src/classes/WP/WPS_Menu_Item.md) : class that represent a menu item returned by function like [`WPS::menu`](doc/src/functions/menus/wps_menu.md).
	- [`WPS_Post`](doc/src/classes/WP/WPS_Post.md) : class that represent a post object
	- [`WPS_User`](doc/src/classes/WP/WPS_User.md) : class that represent a user object
- Usable classes
	- [`WPS_Query`](doc/src/classes/WP/WPS_Query.md) : same as [`WP_Query`](https://codex.wordpress.org/Class_Reference/WP_Query) but return posts in [`WPS_Post`](doc/src/classes/WP/WPS_Post.md) object format

## Table of content

1. [Goals](#readme-goals)
2. [Install](#readme-install)
3. [Documentation](doc)
4. [Contribute](#readme-contribute)
5. [License](#readme-license)
6. [Who are Dwarvesforge](#readme-who-are-dwarvesforge)

<a id="readme-goals"></a>
## Goals

The main goal is to give you access to some nice features like some cool wrapper classes and some helper functions to help you develop your wordpress more like a developer than a designer trying to code something.
We will make this package grow every time we encounter and implement some nice functions/classes/helpers.

<a id="readme-install"></a>
## Install

```
composer require dwarvesforge/wp-stack
```

<a id="readme-contribute"></a>
## Contribute

Dwarvesforge is an open source project and will ever be! You are more that welcomed to contribute to his development and make it more awesome every day.
To do so, you have several possibilities:

1. [Share the love ❤️](https://github.com/Dwarvesforge/dwarvesforge/blob/master/contribute.md#contribute-share-the-love)
2. [Declare issues](https://github.com/Dwarvesforge/dwarvesforge/blob/master/contribute.md#contribute-declare-issues)
3. [Fix issues](https://github.com/Dwarvesforge/dwarvesforge/blob/master/contribute.md#contribute-fix-issues)
4. [Add features](https://github.com/Dwarvesforge/dwarvesforge/blob/master/contribute.md#contribute-add-features)

<a id="readme-license"></a>
## License

The code is available under the [MIT license](LICENSE.txt). This mean that you can use, modify, or do whatever you want with it. This mean also that it is shipped to you for free, so don't be a hater and if you find some issues, etc... feel free to [contribute](https://github.com/Dwarvesforge/dwarvesforge/blob/master/contribute.md) instead of sharing your frustrations on social networks like an asshole...

<a id="readme-who-are-dwarvesforge"></a>
## Who are Dwarvesforge

We try to be **some cool guys** that build **some cool tools** to make our (and yours hopefully) **every day life better**.  

#### [More on who we are](https://github.com/Dwarvesforge/dwarvesforge/blob/master/who-are-we.md)
