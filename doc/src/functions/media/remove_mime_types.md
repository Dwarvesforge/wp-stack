# remove_mime_types

Remove some mime types supported for upload



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$mimes  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  An array of extension to remove upload support for  |  required  |

### Example
```php
	WPS::remove_mime_types([
	'xls', 'jpg'
]);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)