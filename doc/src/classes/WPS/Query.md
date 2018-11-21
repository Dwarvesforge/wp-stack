# Query

Make a query in the database to get some posts back. The posts are in WPS_Post format.
This class does not allow to use the traditional `the_title()`, `the_content`, etc...
In order to get the post you have to do it like in the sample bellow.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$args  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The arguments to pass to the WP_Query constructor  |  required  |

### Example
```php
	$query = new \WPS\Query($myArgs);
while($query->have_posts()) {
    $query->the_post();
    $post = $query->post;
    // do something with your WPS_Post $post
}
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://codex.wordpress.org/Class_Reference/WP_Query](https://codex.wordpress.org/Class_Reference/WP_Query)

Extends **\WP_Query**


## Constructor

Construct the WPS_Query with some arguments.
The arguments are the same as the `WP_Query` ones


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$args  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The arguments to pass to the WP_Query class  |  required  |

#### Example
```php
	$query = new \WPS\Query($myArgs);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**