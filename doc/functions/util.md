# util

- [WPS::count_post_visits](#WPS_count_post_visits)
- [WPS::disable_admin_bar](#WPS_disable_admin_bar)
- [WPS::excerpt_length](#WPS_excerpt_length)
- [WPS::remove_version](#WPS_remove_version)
- [WPS::remove_welcome_panel](#WPS_remove_welcome_panel)
- [WPS::session_start](#WPS_session_start)
<a name="WPS_count_post_visits"></a>
## WPS::count_post_visits
Count the number of visits on each posts (pages, etc...).
This function will add and maintain a post meta value called `post_visits` that you can use later for to make queries.

```php
WPS::count_post_visits();
```

[Full documentation](/doc/src/functions/util/count_post_visits.md)

<a name="WPS_disable_admin_bar"></a>
## WPS::disable_admin_bar
Disable the admin bar in the frontend

```php
WPS::disable_admin_bar();
```

[Full documentation](/doc/src/functions/util/disable_admin_bar.md)

<a name="WPS_excerpt_length"></a>
## WPS::excerpt_length
Change the excerpt length

```php
WPS::excerpt_length(200);
```

[Full documentation](/doc/src/functions/util/excerpt_length.md)

<a name="WPS_remove_version"></a>
## WPS::remove_version
Remove the wordpress version in the metas tags

```php
WPS::remove_version();
```

[Full documentation](/doc/src/functions/util/remove_version.md)

<a name="WPS_remove_welcome_panel"></a>
## WPS::remove_welcome_panel
Remove welcome panel in admin

```php
WPS::remove_welcome_panel();
```

[Full documentation](/doc/src/functions/util/remove_welcome_panel.md)

<a name="WPS_session_start"></a>
## WPS::session_start
Start a session if not already done

```php
WPS::session_start();
```

[Full documentation](/doc/src/functions/util/session_start.md)
