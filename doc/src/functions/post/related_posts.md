# related_posts

Retrieve some related posts depending on the args passed.
The args are the same as the one passed to the `get_posts` wordpress function.
By default, the posts order is set to random but you can erase that by passing the corresponding args properties.
This function works with the tags similarities between the reequested related post.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$post_id  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The post to grab the related ones from  |  required  |
$count  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The number of posts to get  |  optional  |  3
$args  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The arguments used to query the posts  |  optional  |  []

Return **{ Array<WPS\Post> }** An array of WPS\Post objects

### Example
```php
	$posts = WPS::related_posts(3, 5);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://codex.wordpress.org/Template_Tags/get_posts](https://codex.wordpress.org/Template_Tags/get_posts)