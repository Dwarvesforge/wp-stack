# wps_archives

Get an array of archives links depending on the passed arguments.
The arguments are the same as the one of the `wp_get_archives` wordpress function.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$args  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The arguments to pass to the `wp_get_archives` wordpress function  |  optional  |  []

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** An array of simple object containing a url and label properties

### Example
```php
	$links = WPS::archives([
  'limit' => 5
]);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://developer.wordpress.org/reference/functions/wp_get_archives/](https://developer.wordpress.org/reference/functions/wp_get_archives/)