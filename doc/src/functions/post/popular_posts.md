# popular_posts

Retrieve some popular posts depending on the args passed.
The args are the same as the one passed to the `get_posts` wordpress function.

This function need the use of the `WPS::count_post_visits` one to count the times a post is viewed.
Simply call the `WPS:count_post_visits()` inside your `functions.php`.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$args  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The arguments used to query the posts  |  optional  |  []

Return **{ Array<WPS_Post> }** An array of WPS_Post objects

### Example
```php
	$posts = WPS::posts();
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://codex.wordpress.org/Template_Tags/get_posts](https://codex.wordpress.org/Template_Tags/get_posts)