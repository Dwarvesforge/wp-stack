# pagination

Get back an array of pagination items. A pagination item is made of:
- `is_prev` : true/false if the item is the "previous" link
- `is_next` : true/false if the item is the "next" link
- `is_current` : true/false if the item it the current one
- `url` : the url of the page
- `label` : the label of the link



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$args  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The arguments to pass to the `get_the_posts_pagination` wordpress function used to build the pagination  |  optional  |  []

### Example
```php
	$pagination = WPS::pagination([
  'mid_size' => 2
]);
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://codex.wordpress.org/Function_Reference/get_the_posts_pagination](https://codex.wordpress.org/Function_Reference/get_the_posts_pagination)