# add_mime_types

Add mime types to the authorized upload ones



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$mimes  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  A extension->mime array of newly mimes to support  |  required  |

### Example
```php
	WPS::add_mime_types([
	'ai' => 'application/postscript',
 'pdf' => 'application/pdf'
]);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)