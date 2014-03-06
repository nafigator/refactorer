<?php
/**
 * Class RefApplication
 * @file    RefApplication.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Wed Mar 5 17:54:57 2014
 * @copyright The BSD 3-Clause License
 */

namespace Application;

use Veles\Application\Application;
use Classes\Analyzer;
use Classes\Parser;

class BaseApplication extends Application
{
	/* @var Parser */
	protected static $parser;
	/* @var Analyzer */
	protected static $analyzer;

	/**
	 * Get analyzer object
	 *
	 * @return mixed
	 */
	public static function getAnalyzer()
	{
		return self::$analyzer;
	}

	/**
	 * Set analyzer object
	 *
	 * @param mixed $analyzer
	 */
	public static function setAnalyzer(Analyzer $analyzer)
	{
		self::$analyzer = $analyzer;
	}

	/**
	 * Get parser object
	 *
	 * @return mixed
	 */
	public static function getParser()
	{
		return self::$parser;
	}

	/**
	 * Set parser object
	 *
	 * @param mixed $parser
	 */
	public static function setParser(Parser $parser)
	{
		self::$parser = $parser;
	}
}
