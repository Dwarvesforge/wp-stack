# recent_comments

Get some recent comments depending on the arguments you've passed.
The arguments are the same as the one of `get_comments` wordpress function.
This function return an array of WPS_Comment objects.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$args  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The arguments to pass to the `get_comments` wordpress function  |  optional  |  []

Return **{ Array<WPS_Comment> }** Array of WPS_Comment objects

### Example
```php
	$comments = WPS::recent_comments([
  'number' => 3
]);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://codex.wordpress.org/Function_Reference/get_comments](https://codex.wordpress.org/Function_Reference/get_comments)