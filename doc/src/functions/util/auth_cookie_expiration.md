# auth_cookie_expiration

Set the authentication cookie expiration in seconds



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$timeout  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The expiration timeout in seconds  |  required  |

### Example
```php
	WPS::auth_cookie_expiration(60 * 60 * 24 * 30); // 1 month
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)