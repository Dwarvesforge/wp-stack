# ACF_Post

ACF (advanced custom fields) post wrapper class.
This class wrap a WP_Post object and give them some of the ACF capabilities like `get_field`, `get_field_object`, `have_rows`, etc...


### Example
```php
	$acfPost = new \WPS\ACF_Post($wp_post);
while($acfPost->have_rows('parent_field')) {
   $acfPost->the_row();
   $field = $acfPost->get_sub_field('sub_field');
}
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://www.advancedcustomfields.com/resources/#functions](https://www.advancedcustomfields.com/resources/#functions)

Extends **\WPS\Post**


## Constructor

Class constructor


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$wp_post  |  **{ WP_Post }**  |  The wordpress post to encapsulate  |  required  |

**Public**




## Public methods


### get_field

Returns the value of a specific field.
Intuitive and powerful (much like ACF itself ?), this function can be used to load the value of any field from any location. Please note that each field type returns different forms of data (string, int, array, etc).


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$key  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The field key to get  |  required  |
$format_value  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  Whether to apply formatting logic  |  optional  |  true

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The field value

Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### get_field_object

Returns the settings of a specific field.
Each field contains many settings such as a label, name and type. This function can be used to load these settings as an array along with the field’s value.


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$key  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The field key to get  |  required  |
$format_value  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  Whether to apply formatting logic  |  optional  |  true
$load_value  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  Whether to load the field’s value  |  optional  |  true

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** An array with the field settings

Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### get_fields

Returns an array of values (name => value) for a the post.


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$format_value  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  Whether to apply formatting to the value  |  optional  |  true

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** An array of values (name => value) for a the post

Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### get_field_objects

Returns an array of custom field objects for a specific page / post.
This is a very simple function which finds ALL custom field values (that don’t start with an “_”) in the wp_postmeta table and returns them in an associated array where the $field_name => field object
You should only use this function when you do not know the fields which which will be appearing on a template or if you have a large amount of fields which you would prefer not to code independently.


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$format_value  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  Whether to apply formatting logic  |  optional  |  true
$load_value  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  Whether to load the field’s value  |  optional  |  true

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** An array of fields object in key=>value pairs format

Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### have_rows

This function checks to see if a field (such as a Repeater or Flexible Content field) has any rows of data to loop over. This is a boolean function, meaning it returns either true or false.
This function is intended to be used in conjunction with the_row() to step through available values.
Using `have_rows()` together with `the_row()` is intended to feel native much like the `have_posts()` and `the_post()` WordPress functions.


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$key  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The field key to get  |  required  |

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true if has rows, false if not

Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### the_row

Set the current row to work with. This has to be used in conjunction with the have_rows method like the `have_posts` is used with the `the_post` function.


Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### get_sub_field

Returns the value of a specific sub field.


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$sub_field_name  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  the name of the field to be retrieved. eg “page_content”  |  required  |
$format_value  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  whether or not to format the value loaded from the db  |  optional  |  true

Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### get_sub_field_object

Returns the settings (array) of a specific sub field within a have_rows() loop.
The field’s value will also be loaded unless otherwise specified.


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$selector  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The field name or field key  |  required  |
$format_value  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  Whether to apply formatting logic  |  optional  |  true
$load_value  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  Whether to load the field’s value  |  optional  |  true

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** An array of the field properties

Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### get_row

Return an array containing all sub field values for the current row.
This function will return an array containing all sub field values for the current row within a have_rows() loop.


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$format_value  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  whether or not to format the value loaded from the db  |  optional  |  true

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** Return an array containing all sub field values for the current row

Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### get_row_index

This function will return the current loop count within a have_rows() loop.


Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### get_row_layout

This function returns the current layout (string) within a the_flexible_field() loop. A flexible content field may hold many different layout options which can be placed on a page in any order.
It is necessary to use this function in your template to decide what code to write and which sub fields to call.


Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**


### get_rows

Return an array with the row fields in case the field requested if a repeatable or a flexible one.


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$selector  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The field name or field key  |  required  |

Return **{ [Array](http://php.net/manual/en/language.types.array.php) }** An array with the row fields objects

Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**