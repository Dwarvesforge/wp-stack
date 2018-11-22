# comments

Get the post comments depending on the arguments you've passed.
The arguments are the same as the one of `get_comments` wordpress function.
This function return an array of \WPS\Comment objects.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$args  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The arguments to pass to the `get_comments` wordpress function  |  optional  |  []

Return **{ Array<WPS\Comment> }** Array of WPS\Comment objects

### Example
```php
	$comments = WPS::comments();
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://codex.wordpress.org/Function_Reference/get_comments](https://codex.wordpress.org/Function_Reference/get_comments)