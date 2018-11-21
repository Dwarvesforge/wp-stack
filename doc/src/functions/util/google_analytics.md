# google_analytics

Add google analytics



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$id  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The google analytics id  |  required  |
$position  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The position where to put the analytics code. Can be `head` or `footer`  |  optional  |  'head'

### Example
```php
	WPS::google_analytics('xxxxxx');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)