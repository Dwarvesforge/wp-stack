# WPS_User

WP_User wrapper class.
This class wrap a WP_User object and give them some helpers and some features like `get_avatar_url`, accessor like `get_login`, `get_page_url`, etc...


### Example
```php
	$user = new WPS_User($wp_user);
$avatarUrl = $user->avatar_url;
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)


## Constructor

Construct the object using the passed wp_user


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$wp_user  |  **{ WP_User }**  |  The wordpress user object to encapsulate  |  required  |

**Public**


## Public properties


### $id

The user id

Type : **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**

**Public**

Default : **null**


### $login

The user login

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $password

The user password

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $nicename

The user nicename

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $email

The user email

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $firstname

The user firstname

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $lastname

The user lastname

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $url

The user website url

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $registered

The user registration datetime

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $activation_key

The user activation key

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $status

The user status

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $display_name

The user display name

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

**Public**

Default : **null**


### $capabilities

The user capabilities

Type : **{ [Array](http://php.net/manual/en/language.types.array.php) }**

**Public**

Default : **[]**


### $all_capabilities

All the user capabilities

Type : **{ [Array](http://php.net/manual/en/language.types.array.php) }**

**Public**

Default : **[]**


### $roles

The user roles

Type : **{ [Array](http://php.net/manual/en/language.types.array.php) }**

**Public**

Default : **[]**



## Public methods


### __get

Properties accessor

**Public**


### get_page_url

Get the page url of the author

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The page url of the author

#### Example
```php
	$pageUrl = $user->page_url;
```
**Public**


### get_avatar_url

Get the avatar url for this user

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The avatar url

#### Example
```php
	$avatarUrl = $user->avatar_url;
```
**Public**


### avatar_url

Get the avatar url for this user using some arguments like size


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$size  |  **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**  |  The size wanted for the avatar  |  optional  |  96
$default  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The default avatar to return if none exists  |  optional  |  "gravatar_default"

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The avatar url

#### Example
```php
	undefined
```
**Public**


### exists

Determine whether the user exists in the database.
It actually tests !empty(ID), which will normally indicate that the user record was in the database at some stage. It does not access the database.

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true if user exists, false otherwise.

**Public**


### get

Retrieve the value of a property or meta key from the users and usermeta tables.


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$key  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  property  |  required  |

Return **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }** String of the property filtered if single value, or array if value is stored as a serialized array

**Public**


### has_prop

Determine whether a property or meta key is set from the users and usermeta tables.


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$key  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  property  |  required  |

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true if user has property, false otherwise

**Public**


### add_role

Add role to user.
Updates the user's meta data option with capabilities and roles.


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$role  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  Role name  |  required  |

**Public**


### remove_role

Remove role from user.


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$role  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  Role name  |  required  |

**Public**


### set_role

Set the role of the user.
This will remove the previous roles of the user and assign the user the new one. You can set the role to an empty string and it will remove all of the roles from the user.


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$role  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  Role name  |  required  |

**Public**


### add_cap

Add capability and grant or deny access to capability.


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$cap  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  Capability name  |  required  |
$grant  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  whether to grant capability to user. Default to true.  |  required  |

**Public**


### remove_cap

Remove capability from user


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$cap  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  Capability name  |  required  |

**Public**


### remove_all_caps

Remove all of the capabilities of the user.

**Public**


### has_cap

Whether user has capability or role name.


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$cap  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  capability or role name to search  |  required  |

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true if user has capability, false if they do not have the capability

**Public**