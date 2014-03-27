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

		$expression = new Expression;
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
		if ($this->rules->isEmpty()) {
			return true;
		}

		$check = (null === $this->next)
			? $this->rules->current()
			: $this->next;

		if ('*' === $check->getContent()) {
			$this->next = $this->rules->current();
			$this->context[] = $token;
			return false;
		}

		// Финальные токены не определены
		if (null === $this->next) {
			// Если токен не соответствует токену из очереди делаем ресет
			if ($token->getIndex() !== $check->getIndex()) {
				$this->context = [];
				$this->rules->reset();
				return false;
			}
		} else {
			// Финальные токены определены, но не соответствуют - доабвляем в контекст
			if ($token->getIndex() !== $check->getIndex()) {
				$this->context[] = $token;
				return false;
			// Добрались до финальных токенов
			} else {
				$this->context[] = $token;
				$this->next = null;
				return false;
			}
		}

		// Если токен без контента, то сразу добавляем в контекст
		if (null === $check->getContent()) {
			$this->context[] = $token;
			return false;
		}

		// Если у токена есть контент и он соответствует правилу, добавляем в контекст
		if ($token->getContent() === $check->getContent()) {
			$this->context[] = $token;
			return false;
		}

		return false;
	}
}
