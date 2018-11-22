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

Wordpress stack that gives you nice classes as wrapper of the wordpress ones as well as some nice helper functions in these areas:

- [Admin](doc/functions/admin.md)
- [Archive](doc/functions/archive.md)
- [Categorie](doc/functions/categorie.md)
- [Comment](doc/functions/comment.md)
- [Image](doc/functions/image.md)
- [Media](doc/functions/media.md)
- [Menu](doc/functions/menu.md)
- [Pagination](doc/functions/pagination.md)
- [Post](doc/functions/post.md)
- [Search](doc/functions/search.md)
- [User](doc/functions/user.md)
- [Util](doc/functions/util.md)
- [Widget](doc/functions/widget.md)
- Descriptive classes
	- [`WPS\ACF_Post`](doc/src/classes/WPS/ACF_Post.md) : class that represent an ACF drived post
	- [`WPS\Category`](doc/src/classes/WPS/Category.md) : class that represent a category object
	- [`WPS\Comment`](doc/src/classes/WPS/Comment.md) : class that represent a comment object
	- [`WPS\Menu_Item`](doc/src/classes/WPS/Menu_Item.md) : class that represent a menu item returned by function like [`WPS::menu`](doc/src/functions/menu/menu.md).
	- [`WPS\Post`](doc/src/classes/WPS/Post.md) : class that represent a post object
	- [`WPS\User`](doc/src/classes/WPS/User.md) : class that represent a user object
- Usable classes
	- [`WPS\Query`](doc/src/classes/WPS/Query.md) : same as [`WP_Query`](https://codex.wordpress.org/Class_Reference/WP_Query) but return posts in [`WPS\Post`](doc/src/classes/WPS/Post.md) object format

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
