# util

- [WPS::auth_cookie_expiration](#WPS_auth_cookie_expiration)
- [WPS::count_post_views](#WPS_count_post_views)
- [WPS::dequeue_all_scripts](#WPS_dequeue_all_scripts)
- [WPS::dequeue_all_styles](#WPS_dequeue_all_styles)
- [WPS::excerpt_length](#WPS_excerpt_length)
- [WPS::google_analytics](#WPS_google_analytics)
- [WPS::google_tag_manager](#WPS_google_tag_manager)
- [WPS::remove_version](#WPS_remove_version)
- [WPS::session_start](#WPS_session_start)
<a name="WPS_auth_cookie_expiration"></a>
## WPS::auth_cookie_expiration
Set the authentication cookie expiration in seconds

```php
WPS::auth_cookie_expiration(60 * 60 * 24 * 30); // 1 month
```

[Full documentation](/doc/src/functions/util/auth_cookie_expiration.md)

<a name="WPS_count_post_views"></a>
## WPS::count_post_views
Count the number of views on each posts (pages, etc...) only for real visitors and not for connected administrators, authors, etc...
This function will add and maintain a post meta value called `post_viewed` that you can use later for to make queries.

```php
WPS::count_post_views();
```

[Full documentation](/doc/src/functions/util/count_post_views.md)

<a name="WPS_dequeue_all_scripts"></a>
## WPS::dequeue_all_scripts
Unenqueue all scripts at once

```php
WPS::dequeue_all_scripts();
```

[Full documentation](/doc/src/functions/util/dequeue_all_scripts.md)

<a name="WPS_dequeue_all_styles"></a>
## WPS::dequeue_all_styles
Unenqueue all styles at once

```php
WPS::dequeue_all_styles();
```

[Full documentation](/doc/src/functions/util/dequeue_all_styles.md)

<a name="WPS_excerpt_length"></a>
## WPS::excerpt_length
Change the excerpt length

```php
WPS::excerpt_length(200);
```

[Full documentation](/doc/src/functions/util/excerpt_length.md)

<a name="WPS_google_analytics"></a>
## WPS::google_analytics
Add google analytics only for real visitors and not for connected administrators, authors, etc...

```php
WPS::google_analytics('xxxxxx');
```

[Full documentation](/doc/src/functions/util/google_analytics.md)

<a name="WPS_google_tag_manager"></a>
## WPS::google_tag_manager
Add google tag manager only for real visitors and not for connected administrators, authors, etc...

```php
WPS::google_tag_manager('xxxxxx');
```

[Full documentation](/doc/src/functions/util/google_tag_manager.md)

<a name="WPS_remove_version"></a>
## WPS::remove_version
Remove the wordpress version in the metas tags

```php
WPS::remove_version();
```

[Full documentation](/doc/src/functions/util/remove_version.md)

<a name="WPS_session_start"></a>
## WPS::session_start
Start a session if not already done

```php
WPS::session_start();
```

[Full documentation](/doc/src/functions/util/session_start.md)
