# wps_menu

Get back the requested menu in object format. Each item is a WPS_Menu_Item object
that can contains the sub-item depending on the menu structure.
This function is very usefull to create simple as well as complexe menu without the
weird wordpress menu functions. Here you have the raw menu structured
in an array of objects that you can use to generate your menu easily.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$name  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The menu name to retrieve  |  required  |

### Example
```php
	$menu = WPS::menu('primary');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://developer.wordpress.org/reference/functions/wp_get_nav_menu_items/](https://developer.wordpress.org/reference/functions/wp_get_nav_menu_items/)