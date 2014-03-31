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

class SqlQueryFunction extends AbstractCodeHandler
{
	/**
	 * Interprets code
	 *
	 * @param array $context
	 * @return array
	 */
	public function interpret(array $context)
	{
		var_dump($context); exit;

//		$expression = new Expression;
		return $context;
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
