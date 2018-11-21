# post

- [WPS::next_post](#WPS_next_post)
- [WPS::next_posts_link](#WPS_next_posts_link)
- [WPS::next_posts_url](#WPS_next_posts_url)
- [WPS::popular_posts](#WPS_popular_posts)
- [WPS::post](#WPS_post)
- [WPS::posts](#WPS_posts)
- [WPS::previous_post](#WPS_previous_post)
- [WPS::previous_posts_link](#WPS_previous_posts_link)
- [WPS::previous_posts_url](#WPS_previous_posts_url)
- [WPS::recent_posts](#WPS_recent_posts)
<a name="WPS_next_post"></a>
## WPS::next_post
Get the next posts in WPS_Post format
```php
$post = WPS::next_post();
```

[Full documentation](/doc/src/functions/post/next_post.md)

<a name="WPS_next_posts_link"></a>
## WPS::next_posts_link
Get the next posts link in object format containing the url and the label property.
```php
$nextPosts = WPS::next_posts('Next posts');
```

[Full documentation](/doc/src/functions/post/next_posts_link.md)

<a name="WPS_next_posts_url"></a>
## WPS::next_posts_url
Get back the next posts url

```php
$url = WPS::next_posts_url();
```

[Full documentation](/doc/src/functions/post/next_posts_url.md)

<a name="WPS_popular_posts"></a>
## WPS::popular_posts
Retrieve some popular posts depending on the args passed.
The args are the same as the one passed to the `get_posts` wordpress function.

This function need the use of the `WPS::count_post_visits` one to count the times a post is viewed.
Simply call the `WPS:count_post_visits()` inside your `functions.php`.

```php
$posts = WPS::posts();
```

[Full documentation](/doc/src/functions/post/popular_posts.md)

[See more](https://codex.wordpress.org/Template_Tags/get_posts)

<a name="WPS_post"></a>
## WPS::post
Retrieve a specific post in \WPS\Post format
```php
$post = WPS::post(10);
```

[Full documentation](/doc/src/functions/post/post.md)

[See more](https://developer.wordpress.org/reference/functions/get_post/)

<a name="WPS_posts"></a>
## WPS::posts
Retrieve some posts depending on the args passed.
The args are the same as the one passed to the `get_posts` wordpress function.
```php
$posts = WPS::posts();
```

[Full documentation](/doc/src/functions/post/posts.md)

[See more](https://codex.wordpress.org/Template_Tags/get_posts)

<a name="WPS_previous_post"></a>
## WPS::previous_post
Get the previous posts in WPS_Post format
```php
$post = WPS::previous_post();
```

[Full documentation](/doc/src/functions/post/previous_post.md)

<a name="WPS_previous_posts_link"></a>
## WPS::previous_posts_link
Get the previous posts link in object format containing the url and the label property.
```php
$previousPosts = WPS::previous_posts('Previous posts');
```

[Full documentation](/doc/src/functions/post/previous_posts_link.md)

<a name="WPS_previous_posts_url"></a>
## WPS::previous_posts_url
Get back the previous posts url

```php
$url = WPS::previous_posts_url();
```

[Full documentation](/doc/src/functions/post/previous_posts_url.md)

<a name="WPS_recent_posts"></a>
## WPS::recent_posts
Get some recent posts depending on the arguments you've passed.
The arguments are the same as the one of `wp_get_recent_posts` wordpress function.
This function return an array of WPS_Post objects.
```php
$posts = WPS::recent_posts([
  'numberposts' => 3
]);
```

[Full documentation](/doc/src/functions/post/recent_posts.md)

[See more](https://codex.wordpress.org/Function_Reference/wp_get_recent_posts)