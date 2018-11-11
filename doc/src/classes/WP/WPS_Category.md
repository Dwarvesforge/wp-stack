# WPS_Category

Class that represent a category


### Example
```php
	$category = new WPS_Category($wp_term);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com)


## Constructor

Construct the object using the passed wp_term


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$wp_term  |  **{ WP_Term }**  |  The wordpress term object to encapsulate  |  required  |

**Public**


## Public properties


### $id

The category id

Type : **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**

**Public**

Default : **null**


### $name

The category name

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $description

The category description

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $slug

The category slug

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $taxonomy

The category taxonomy

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $url

The category url

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $count

The number of posts in the category

Type : **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**

**Public**

Default : **0**


### $parent

The parent category id

Type : **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**

**Public**

Default : **null**