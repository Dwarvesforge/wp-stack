# random_posts

Retrieve some random posts depending on the args passed.
The args are the same as the one passed to the `get_posts` wordpress function.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$args  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The arguments to query the posts  |  optional  |  []

Return **{ Array<WPS\Post> }** An array of WPS\Post objects

### Example
```php
	$posts = WPS::random_posts();
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://codex.wordpress.org/Template_Tags/get_posts](https://codex.wordpress.org/Template_Tags/get_posts)