# get_meta_boxes

Get meta boxes



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$screen  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The screen on which to get the metas boxes. Usualy "dashboard", "post", "page", "link", "attachment" or "custom_post_type" id  |  required  |
$context  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  Used to provide the position of the custom meta on the display screen. Possible values are "normal", "advanced" and "side"  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** An array of meta boxes

### Example
```php
	$boxes = \WPS\internal\get_meta_boxes('dashboard', 'normal');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://wordpress.stackexchange.com/questions/56104/get-list-of-registered-meta-boxes-and-removing-them](https://wordpress.stackexchange.com/questions/56104/get-list-of-registered-meta-boxes-and-removing-them)