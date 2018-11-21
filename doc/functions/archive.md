# archive

- [WPS::archives](#WPS_archives)
<a name="WPS_archives"></a>
## WPS::archives
Get an array of archives links depending on the passed arguments.
The arguments are the same as the one of the `wp_get_archives` wordpress function.
```php
$links = WPS::archives([
  'limit' => 5
]);
```

[Full documentation](/doc/src/functions/archive/archives.md)

[See more](https://developer.wordpress.org/reference/functions/wp_get_archives/)
