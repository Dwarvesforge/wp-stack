# Post

Post wrapper class.
This class wrap a WP_Post object and give them some helpers and some features like `featured_image_url($size)`, accessor like `featured_image_url`, `categories`, `authors`, etc...


### Example
```php
	$post = new \WPS\Post($wp_post);
$post_id = $post->id;
$authors = $post->authors;
$featured_image_url = $post->featured_image_url('large');
$date = $post->date();
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)


## Constructor

Construct the object using the passed wp_post


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$wp_post  |  **{ WP_Post }**  |  The wordpress post object to encapsulate  |  required  |

#### Example
```php
	$wpsPost = new \WPS\Post($wp_post);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


## Public properties


### $id

The post id

Type : **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**

**Public**

Default : **null**


### $name

The post name

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $type

The post type

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $date

The post date

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $date_gmt

The post GMT date

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $status

The post status

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $comment_status

The post comment status

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $ping_status

The post ping status

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $password

The post password

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $parent

The post parent id

Type : **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**

**Public**

Default : **null**


### $modified

The post modified datetime

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $modified_gmt

The post modified datetime GMT

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $comment_count

The post comment count

Type : **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**

**Public**

Default : **0**


### $menu_order

The post menu order

Type : **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**

**Public**

Default : **null**


### $permalink

The post permalink

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $title

The post title with the filters applied

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $raw_title

The post raw title

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $excerpt

The post excerpt with the filters applied

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $raw_excerpt

The post raw excerpt

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $content

The post content with the filters applied

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $raw_content

The post raw content

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### get_comments

Get the post comments

Type : **{ Array<WP_Comment> }**

#### Example
```php
	$comments = $post->comments;
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**



## Public methods


### __get

Properties accessor


Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### get_format

Get the post format

Return **{ [String](http://php.net/manual/en/language.types.string.php) , [Boolean](http://php.net/manual/en/language.types.boolean.php) }** The post format or false if not specified

#### Example
```php
	$format = $post->format;
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### get_featured_image_url

Get the post featured image url

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The post featured image url

#### Example
```php
	$url = $post->featured_image_url;
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### featured_image_url

Get the post featured image url


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$size  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The size wanted  |  optional  |  "full"

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The post featured image url

#### Example
```php
	$url = $post->featured_image_url('full');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### get_categories

Get the post categories

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The post categories

#### Example
```php
	$categories = $post->categories;
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### categories

Get the post categories formated


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$glue  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The character used to glue together the categories  |  optional  |  ", "
$link  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  If want a link around each categories or not  |  optional  |  true

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The post categories formated

#### Example
```php
	$categories = $post->categories(', ', true);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### get_authors

Get the post authors

Return **{ Array<WPS_User> }** The post authors

#### Example
```php
	$authors = $post->authors;
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### authors

Get the post authors formated


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$glue  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The character used to glue together the authors  |  optional  |  ", "
$link  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  If want a link around each authors or not  |  optional  |  true

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The post authors

#### Example
```php
	$authors = $post->authors(', ', true);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### get_tags

Get the post tags

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** The post tags

#### Example
```php
	$tags = $post->tags;
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### tags

Get the post tags formated


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$glue  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The character used to glue together the tags  |  optional  |  ", "
$link  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  If want a link around each tags or not  |  optional  |  true

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The post tags formated

#### Example
```php
	$tags = $post->tags(', ', true);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### comments

Get the post comments


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$args  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The argument to pass to the `get_comments` wordpress function  |  optional  |  []

Return **{ Array<WPS_Comment> }** An array of WPS_Comment object

#### Example
```php
	$comments = $posts->comments();
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### date

Get the post date formated


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$format  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The format wanted for the date  |  optional  |  null

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The post data formated

#### Example
```php
	$date = $post->date();
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### meta

Get a meta for this post

Return **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }** The meta value

#### Example
```php
	$viewed_count = $post->meta('post_viewed');
// 10
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### get_viewed_count

Get the post viewed count
This need that the `WPS::count_post_views()` to be called inside your `functions.php` file

Return **{ [Integer](http://php.net/manual/en/language.types.integer.php) }** The number of views for this post

#### Example
```php
	$post->viewed_count;
// 10
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### is_published

Check if the post is published or not

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true if published, false if not

#### Example
```php
	$post->is_published();
// true
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### is_pending

Check if the post is pending or not

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true if pending, false if not

#### Example
```php
	$post->is_pending();
// false
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### is_draft

Check if the post is in draft or not

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true if draft, false if not

#### Example
```php
	$post->is_draft();
// false
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### is_private

Check if the post is private or not

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true if private, false if not

#### Example
```php
	$post->is_private()
// false
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### is_sticky

Check if the post is sticky or not

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true if sticky, false if not

#### Example
```php
	$post->is_sticky();
// true
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### is_password_protected

Check if the post is password protected or not

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true if password protected, false if not

#### Example
```php
	$post->is_password_protected();
// false
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**