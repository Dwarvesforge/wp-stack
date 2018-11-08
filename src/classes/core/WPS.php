<?php
/**
 * @class
 * @name 	WPS
 * Facade class that provide all the utilities function through the WPS static methods
 *
 * @author 	Olivier Bossel <olivier.bossel@gmail.com>
 */
class WPS {

	/**
	 * Catch static calls to redirect it to the corresponding wps_... function if it exist
	 * @name __callStatic
	 * @param 	{String} 		$name 		The function name to call
	 * @param 	{Array} 		$arguments 	The arguments passed to the static call
	 * @author 	Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
	 */
	public static function __callStatic($name, $arguments)
	{
		// check if function is available in the stack
		if (function_exists('wps_'.$name)) {
			return call_user_func_array('wps_'.$name, $arguments);
		} else {
			throw new Exception('Try to call a function "'.$name.'" that does not exist on "WPS"');
		}
	}
}
