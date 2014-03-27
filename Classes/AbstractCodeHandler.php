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

	/**
	 * Checking token for compliance with the rules
	 *
	 * @param iToken $token
	 * @return bool
	 */
	public function checkRules(iToken $token)
	{
		if ($this->rules->isEmpty()) {
			$this->rules->reset();
			return true;
		}

		$check = (null === $this->final)
			? $this->rules->current()
			: $this->final;

		if ('*' === $check->getContent()) {
			$this->final = $this->rules->current();
			$this->context[] = $token;
			return false;
		}

		// Финальные токены не определены
		if (null !== $this->final) {
			// Финальные токены определены - добавляем токен в контекс
			$this->context[] = $token;
			// если ещё и совпадает контент - обнуляем финальный токен
			if ($token->getContent() === $check->getContent()) {
				$this->final = null;
			}

			return false;
		}

		// Если токен не соответствует токену из очереди делаем ресет
		if ($token->getIndex() !== $check->getIndex()) {
			$this->context = [];
			$this->rules->reset();
			return false;
		}

		// Если у токена есть контент и он соответствует правилу или токен без контента, то сразу добавляем в контекст
		if ($token->getContent() === $check->getContent()
			|| null === $check->getContent()
		) {
			$this->context[] = $token;
		}

		return false;
	}
}
