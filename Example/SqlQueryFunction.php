<?php
/**
 * Class SqlQueryFunction
 * @file    SqlQueryFunction.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Tue Mar 4 15:34:05 2014
 * @copyright The BSD 3-Clause License
 */

namespace Example;

use Classes\AbstractCodeHandler;
use Classes\Expression;
use Classes\iToken;

class SqlQueryFunction extends AbstractCodeHandler
{
	/**
	 * Interprets code
	 *
	 * @param array $code
	 * @return array
	 */
	public function interpret(array $code)
	{
//		var_dump($code);

//		$expression = new Expression;
		return $code;
	}

	/**
	 * Calculate expression
	 *
	 * @param Expression $expression
	 * @return string
	 */
	public function evaluate(Expression $expression)
	{
		// TODO: Implement evaluate() method.
	}


}
