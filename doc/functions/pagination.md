# pagination

- [WPS::pagination](#WPS_pagination)
<a name="WPS_pagination"></a>
## WPS::pagination
Get back an array of pagination items. A pagination item is made of:
- `is_prev` : true/false if the item is the "previous" link
- `is_next` : true/false if the item is the "next" link
- `is_current` : true/false if the item it the current one
- `url` : the url of the page
- `label` : the label of the link

```php
$pagination = WPS::pagination([
  'mid_size' => 2
]);
```

[Full documentation](/doc/src/functions/pagination/pagination.md)

[See more](https://codex.wordpress.org/Function_Reference/get_the_posts_pagination)
