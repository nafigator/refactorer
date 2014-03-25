<?php
/**
 * Interface iCodeHandler
 * @file    iCodeHandler.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Thu Mar 20 18:35:21 MSK 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

/**
 * Interface iCodeHandler
 *
 * @package Classes
 */
interface iCodeHandler
{
	/**
	 * Checking token for compliance with the rules
	 *
	 * @param iToken $token
	 * @return bool
	 */
	public function checkRules(iToken $token);

	/**
	 * Convert tokens into Expression
	 *
	 * @param array $tokens
	 * @return Expression
	 */
	public function interpret(array $tokens);

	/**
	 * Calculate expression
	 *
	 * @param Expression $expression
	 * @return string
	 */
	public function evaluate(Expression $expression);
}
