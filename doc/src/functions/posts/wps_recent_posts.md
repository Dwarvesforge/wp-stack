# wps_recent_posts

Get some recent posts depending on the arguments you've passed.
The arguments are the same as the one of `wp_get_recent_posts` wordpress function.
This function return an array of WPS_Post objects.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$args  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The arguments to pass to the `wp_get_recent_posts` wordpress function  |  optional  |  []

Return **{ Array<WPS_Post> }** Array of WPS_Post objects

### Example
```php
	$posts = WPS::recent_posts([
  'numberposts' => 3
]);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://codex.wordpress.org/Function_Reference/wp_get_recent_posts](https://codex.wordpress.org/Function_Reference/wp_get_recent_posts)