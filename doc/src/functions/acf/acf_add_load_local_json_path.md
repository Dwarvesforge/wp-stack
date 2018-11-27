# acf_add_load_local_json_path

Add a custom local json path for ACF to look in



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$path  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The folder path for ACF to look in  |  required  |

### Example
```php
	WPS::acf_add_load_local_json_path(get_stylesheet_directory() . '/my-custom-folder');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)