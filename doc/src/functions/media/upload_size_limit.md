# upload_size_limit

Set the upload limit size for this wordpress installation.
This value has to be passed in mb.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$size  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The upload size limit in mb  |  required  |

### Example
```php
	WPS::upload_size_limit(32); // set to 32mb
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)