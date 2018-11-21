# user

- [WPS::user](#WPS_user)
- [WPS::users_count](#WPS_users_count)
<a name="WPS_user"></a>
## WPS::user
Get a user by id/email and return it in WPS\User format

```php
$user = Thorin::user(10);
$user = Thorin::user('olivier.bossel@gmail.com');
```

[Full documentation](/doc/src/functions/user/user.md)

<a name="WPS_users_count"></a>
## WPS::users_count
Get the number of registered users in the DB

```php
WPS:users_count();
// 10
```

[Full documentation](/doc/src/functions/user/users_count.md)
