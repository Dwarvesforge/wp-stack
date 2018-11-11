# wps_post

Retrieve a specific post in WPS_Post format


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$id  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The post id to retrieve  |  required  |

Return **{ WPS_Post }** The post in WPS_Post format

### Example
```php
	$post = WPS::post(10);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://developer.wordpress.org/reference/functions/get_post/](https://developer.wordpress.org/reference/functions/get_post/)