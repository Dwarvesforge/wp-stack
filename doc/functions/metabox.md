# metabox

- [WPS::get_meta_boxes](#WPS_get_meta_boxes)
- [WPS::remove_dashboard_meta_boxes](#WPS_remove_dashboard_meta_boxes)
<a name="WPS_get_meta_boxes"></a>
## WPS::get_meta_boxes
Get meta boxes

```php
$boxes = \WPS\internal\get_meta_boxes('dashboard', 'normal');
```

[Full documentation](/doc/src/functions/metabox/get_meta_boxes.md)

[See more](https://wordpress.stackexchange.com/questions/56104/get-list-of-registered-meta-boxes-and-removing-them)

<a name="WPS_remove_dashboard_meta_boxes"></a>
## WPS::remove_dashboard_meta_boxes
Remove some dashboard meta boxes by passing ther ids

```php
WPS::remove_dashboard_meta_boxes([
	'dashboard_right_now', 'dashboard_activity'
]);
```

[Full documentation](/doc/src/functions/metabox/remove_dashboard_meta_boxes.md)
