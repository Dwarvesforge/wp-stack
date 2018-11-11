# wps_categories

Retrieve back the categories of your wordpress installation.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$args  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The argument that will be passed to the `get_categories` wordpress function.  |  optional  |  []

Return **{ Array<WPS_Category> }** An array of WPS_Category objects

### Example
```php
	$categories = WPS::categories();
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://developer.wordpress.org/reference/functions/get_categories/](https://developer.wordpress.org/reference/functions/get_categories/)