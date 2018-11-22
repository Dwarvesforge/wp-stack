# comment

- [WPS::comment_remove_url_field](#WPS_comment_remove_url_field)
- [WPS::comments](#WPS_comments)
- [WPS::recent_comments](#WPS_recent_comments)
<a name="WPS_comment_remove_url_field"></a>
## WPS::comment_remove_url_field
Remove the url field from the comment form

```php
WPS::comment_remove_url_field();
```

[Full documentation](/doc/src/functions/comment/comment_remove_url_field.md)

<a name="WPS_comments"></a>
## WPS::comments
Get the post comments depending on the arguments you've passed.
The arguments are the same as the one of `get_comments` wordpress function.
This function return an array of \WPS\Comment objects.

```php
$comments = WPS::comments();
```

[Full documentation](/doc/src/functions/comment/comments.md)

[See more](https://codex.wordpress.org/Function_Reference/get_comments)

<a name="WPS_recent_comments"></a>
## WPS::recent_comments
Get some recent comments depending on the arguments you've passed.
The arguments are the same as the one of `get_comments` wordpress function.
This function return an array of WPS_Comment objects.
```php
$comments = WPS::recent_comments([
  'number' => 3
]);
```

[Full documentation](/doc/src/functions/comment/recent_comments.md)

[See more](https://codex.wordpress.org/Function_Reference/get_comments)
