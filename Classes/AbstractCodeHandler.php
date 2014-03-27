<?php
/**
 * Class AbstractCodeHandler
 * @file    AbstractCodeHandler.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Thu Mar 20 18:35:21 MSK 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

/**
 * Class AbstractCodeHandler
 *
 * @package Classes
 */
abstract class AbstractCodeHandler
{
	protected $context = [];

	// Токен, до совпадения с которым все токены добавляются в контекст
	protected $final;

	/** @var  ContextRules */
	protected $rules;

	/**
	 * Checking token for compliance with the rules
	 *
	 * @param iToken $token
	 * @return bool
	 */
	abstract public function checkRules(iToken $token);

	/**
	 * Convert tokens into Expression
	 *
	 * @param array $tokens
	 * @return Expression
	 */
	abstract public function interpret(array $tokens);

	/**
	 * Calculate expression
	 *
	 * @param Expression $expression
	 * @return string
	 */
	abstract public function evaluate(Expression $expression);

	/**
	 * Get context for further processing
	 */
	public function getContext()
	{
		return $this->context;
	}

	/**
	 * Sets context rules
	 *
	 * @param ContextRules $rules
	 */
	public function setRules(ContextRules $rules)
	{
		$this->rules = $rules;
	}
}
