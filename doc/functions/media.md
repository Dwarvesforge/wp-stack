# media

- [WPS::add_mime_types](#WPS_add_mime_types)
- [WPS::remove_mime_types](#WPS_remove_mime_types)
- [WPS::upload_size_limit](#WPS_upload_size_limit)
<a name="WPS_add_mime_types"></a>
## WPS::add_mime_types
Add mime types to the authorized upload ones

```php
WPS::add_mime_types([
	'ai' => 'application/postscript',
 'pdf' => 'application/pdf'
]);
```

[Full documentation](/doc/src/functions/media/add_mime_types.md)

<a name="WPS_remove_mime_types"></a>
## WPS::remove_mime_types
Remove some mime types supported for upload

```php
WPS::remove_mime_types([
	'xls', 'jpg'
]);
```

[Full documentation](/doc/src/functions/media/remove_mime_types.md)

<a name="WPS_upload_size_limit"></a>
## WPS::upload_size_limit
Set the upload limit size for this wordpress installation.
This value has to be passed in mb.

```php
WPS::upload_size_limit(32); // set to 32mb
```

[Full documentation](/doc/src/functions/media/upload_size_limit.md)
