# count_post_views

Count the number of views on each posts (pages, etc...) only for real visitors and not for connected administrators, authors, etc...
This function will add and maintain a post meta value called `post_viewed` that you can use later for to make queries.


### Example
```php
	WPS::count_post_views();
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)