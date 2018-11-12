# WPS_Comment

Class that represent a wordpress comment


### Example
```php
	$comment = new WPS_Comment($wp_comment);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)


## Constructor

Construct the object using the passed wp_comment


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$wp_comment  |  **{ WP_Comment }**  |  The wordpress comment object to encapsulate  |  required  |

**Public**


## Public properties


### $id

The comment id

Type : **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**

**Public**

Default : **null**


### $post_id

The comment post id

Type : **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**

**Public**

Default : **null**


### $ip

The comment author ip address

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $date

The comment datetime

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $date_gmt

The comment date GMT

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $content

The comment content

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $karma

The comment karma

Type : **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**

**Public**

Default : **null**


### $approved

The comment approved status

Type : **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**

**Public**

Default : **null**


### $agent

The comment author user agent

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $type

The comment type

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $parent

The comment parent id

Type : **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**

**Public**

Default : **null**



## Public methods


### __get

Properties accessor

**Public**


### get_post

Get the post on which this comment has been published

Return **{ WPS_Post }** A WPS_Post object representing the post on which the comment has been published

#### Example
```php
	$post = $comment->post;
```
**Public**


### get_author

Get the user who post the comment

Return **{ WPS_User }** A WPS_User object representing the user who post the comment

#### Example
```php
	$author = $comment->author;
```
**Public**


### is_approved

Check if the comment is approved or not

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true if approved, false if not

**Public**