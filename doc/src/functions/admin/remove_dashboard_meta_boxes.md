# remove_dashboard_meta_boxes

Remove some dashboard meta boxes by passing ther ids



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$ids  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The metas boxes ids to remove  |  required  |

### Example
```php
	WPS::remove_dashboard_meta_boxes([
	'dashboard_right_now', 'dashboard_activity'
]);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)