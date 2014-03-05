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

use Classes\Analyzer;
use Classes\Parser;
use Veles\Application\Application;

/**
 * Class RefApplication
 *
 * @author  Yancharuk Alexander <alex@itvault.info>
 */
class RefApplication extends Application
{
	private static $parser;
	private static $analyzer;

	public static function run()
	{
		foreach (self::$parser as $tokens) {

		}
	}

	/**
	 * @return mixed
	 */
	public static function getAnalyzer()
	{
		return self::$analyzer;
	}

	/**
	 * @param mixed $analyzer
	 */
	public static function setAnalyzer($analyzer)
	{
		self::$analyzer = $analyzer;
	}

	/**
	 * @return mixed
	 */
	public static function getParser()
	{
		return self::$parser;
	}

	/**
	 * @param mixed $parser
	 */
	public static function setParser($parser)
	{
		self::$parser = $parser;
	}
}
