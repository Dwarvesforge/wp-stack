# user

Get a user by id/email and return it in \WPS\User format



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$id  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) , [String](http://php.net/manual/en/language.types.string.php) }**  |  The id or email of the user to get  |  required  |

Return **{ \WPS\User }** The user object

### Example
```php
	$user = Thorin::user(10);
$user = Thorin::user('olivier.bossel@gmail.com');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)