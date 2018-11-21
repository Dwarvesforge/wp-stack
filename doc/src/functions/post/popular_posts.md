# popular_posts

Retrieve some popular posts depending on the args passed.
The args are the same as the one passed to the `get_posts` wordpress function.

This function need the use of the `WPS::count_post_views` one to count the times a post is viewed.
Simply call the `WPS:count_post_views()` inside your `functions.php`.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$count  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The number of posts to get  |  optional  |  3
$args  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The arguments used to query the posts  |  optional  |  []

Return **{ Array<WPS\Post> }** An array of WPS\Post objects

### Example
```php
	$posts = WPS::popular_posts(3);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://codex.wordpress.org/Template_Tags/get_posts](https://codex.wordpress.org/Template_Tags/get_posts)