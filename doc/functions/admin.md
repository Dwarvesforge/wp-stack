# admin

- [WPS::add_wysiwyg_class](#WPS_add_wysiwyg_class)
- [WPS::add_wysiwyg_stylesheet](#WPS_add_wysiwyg_stylesheet)
- [WPS::remove_dashboard_meta_boxes](#WPS_remove_dashboard_meta_boxes)
- [WPS::remove_guttenberg_panel](#WPS_remove_guttenberg_panel)
- [WPS::reset_dashboard](#WPS_reset_dashboard)
<a name="WPS_add_wysiwyg_class"></a>
## WPS::add_wysiwyg_class
Add one or more classes to the eysiwyg editor.

```php
WPS::add_wysiwyg_class(['tf,'vr']);
```

[Full documentation](/doc/src/functions/admin/add_wysiwyg_class.md)

<a name="WPS_add_wysiwyg_stylesheet"></a>
## WPS::add_wysiwyg_stylesheet
Add one or more stylesheet files to the eysiwyg editor.

```php
WPS::add_wysiwyg_stylesheet('dist/css/style.css');
```

[Full documentation](/doc/src/functions/admin/add_wysiwyg_stylesheet.md)

<a name="WPS_remove_dashboard_meta_boxes"></a>
## WPS::remove_dashboard_meta_boxes
Remove some dashboard meta boxes by passing ther ids

```php
WPS::remove_dashboard_meta_boxes([
	'dashboard_right_now', 'dashboard_activity'
]);
```

[Full documentation](/doc/src/functions/admin/remove_dashboard_meta_boxes.md)

<a name="WPS_remove_try_guttenberg_panel"></a>
## WPS::remove_try_guttenberg_panel
Remove the try guttenberg panel in the admin

```php
WPS::remove_try_guttenberg_panel();
```

[Full documentation](/doc/src/functions/admin/remove_guttenberg_panel.md)

<a name="WPS_reset_dashboard"></a>
## WPS::reset_dashboard
Reset the dashboard by removing all the meta boxes

```php
WPS::reset_dashboard();
```

[Full documentation](/doc/src/functions/admin/reset_dashboard.md)
