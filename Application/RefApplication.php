<?php
/**
 * Class RefApplication
 * @file    RefApplication.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Tue Mar 4 15:11:58 2014
 * @copyright The BSD 3-Clause License
 */

namespace Application;

/**
 * Class RefApplication
 *
 * @author  Yancharuk Alexander <alex@itvault.info>
 */
class RefApplication extends BaseApplication
{
	public static function run()
	{
		var_dump(count(self::$parser));
		foreach (self::$parser as $path => $tokens) {
			var_dump($path);
		}
	}
}
