# menu

- [WPS::menu](#WPS_menu)
<a name="WPS_menu"></a>
## WPS::menu
Get back the requested menu in object format. Each item is a WPS_Menu_Item object
that can contains the sub-item depending on the menu structure.
This function is very usefull to create simple as well as complexe menu without the
weird wordpress menu functions. Here you have the raw menu structured
in an array of objects that you can use to generate your menu easily.
```php
$menu = WPS::menu('primary');
```

[Full documentation](/doc/src/functions/menu/menu.md)

[See more](https://developer.wordpress.org/reference/functions/wp_get_nav_menu_items/)
