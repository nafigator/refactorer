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
use Classes\ContextRules;

class SqlQueryFunction extends AbstractCodeHandler
{
	/** @var  ContextRules */
	protected $rules;

	/**
	 * Interprets code
	 *
	 * @param array $code
	 * @return array
	 */
	public function interpret(array $code)
	{
//		var_dump($code);

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

	/**
	 * Checking token for compliance with the rules
	 *
	 * @param iToken $token
	 * @return bool
	 */
	public function checkRules(iToken $token)
	{
		// проверяем токен на соответствие начальному токену стека
		// если токен соответствует первому токену стека, добавляем в контекст, удаляем из стека, ставим флаг, что найдено соответствие в начальном стеке
		// если след. токен не совпал, обновляем начальный стек
		// если начальный стек токенов пуст, и нет соответствия первому токену завершающего стека - токен добавляется в контекст.

		return false;
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
