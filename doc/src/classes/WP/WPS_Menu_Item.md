# WPS_Menu_Item

Class that represent a menu item. You usually don't have to create this by yourself, but
by calling functions like `WPS::menu('primary')`.


### Example
```php
	$menuItem = new WPS_Menu_Item($wp_post);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)


## Constructor

Construct the object using the wp_post passed menu item


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$wp_post  |  **{ WP_Post }**  |  The wp_post menu item  |  required  |

**Public**


## Public properties


### $id

The menu item id

Type : **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**

**Public**

Default : **null**


### $url

THe menu item url

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $title

The menu item title

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $attr_title

The menu item title attribute

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $target

The menu item target

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $description

The menu item description

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $classes

The meni item classes

Type : **{ [Array](http://php.net/manual/en/language.types.array.php) }**

**Public**

Default : **[]**


### $items

The menu item sub items

Type : **{ [Array](http://php.net/manual/en/language.types.array.php) }**

**Public**

Default : **[]**