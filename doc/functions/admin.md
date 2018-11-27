# admin

- [WPS::add_wysiwyg_class](#WPS_add_wysiwyg_class)
- [WPS::add_wysiwyg_stylesheet](#WPS_add_wysiwyg_stylesheet)
- [WPS::disable_admin_bar](#WPS_disable_admin_bar)
- [WPS::enable_options_page](#WPS_enable_options_page)
- [WPS::remove_try_guttenberg_panel](#WPS_remove_try_guttenberg_panel)
- [WPS::remove_welcome_panel](#WPS_remove_welcome_panel)
- [WPS::reset_dashboard](#WPS_reset_dashboard)
- [WPS::set_login_logo_url](#WPS_set_login_logo_url)
- [WPS::set_login_logo](#WPS_set_login_logo)
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

<a name="WPS_disable_admin_bar"></a>
## WPS::disable_admin_bar
Disable the admin bar in the frontend

```php
WPS::disable_admin_bar();
```

[Full documentation](/doc/src/functions/admin/disable_admin_bar.md)

<a name="WPS_enable_options_page"></a>
## WPS::enable_options_page
Enable the "WPS Options" page which allow to set some options for your wordpress like disabling some dashboard widgets, etc...

```php
WPS::enable_options_page();
```

[Full documentation](/doc/src/functions/admin/enable_options_page.md)

<a name="WPS_remove_try_guttenberg_panel"></a>
## WPS::remove_try_guttenberg_panel
Remove the try guttenberg panel in the admin

```php
WPS::remove_try_guttenberg_panel();
```

[Full documentation](/doc/src/functions/admin/remove_try_guttenberg_panel.md)

<a name="WPS_remove_welcome_panel"></a>
## WPS::remove_welcome_panel
Remove welcome panel in admin

```php
WPS::remove_welcome_panel();
```

[Full documentation](/doc/src/functions/admin/remove_welcome_panel.md)

<a name="WPS_reset_dashboard"></a>
## WPS::reset_dashboard
Reset the dashboard by removing all the meta boxes

```php
WPS::reset_dashboard();
```

[Full documentation](/doc/src/functions/admin/reset_dashboard.md)

<a name="WPS_set_login_logo_url"></a>
## WPS::set_login_logo_url
Set the login form logo url

```php
WPS::set_login_logo_url('https://my-cool-website.com');
```

[Full documentation](/doc/src/functions/admin/set_login_logo_url.md)

<a name="WPS_set_login_logo"></a>
## WPS::set_login_logo
Set the login form logo to display

```php
WPS::set_login_logo('https://mycoolwebsite.com/dist/my-logo.png');
```

[Full documentation](/doc/src/functions/admin/set_login_logo.md)
