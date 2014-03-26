<?php
/**
 * Class Code
 * @file    Code.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Thu Mar 20 18:35:21 MSK 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

class Code
{
	private $lines = [];
	private $tokens = [];
	private $position = 0;
	private $context_line_num = [];

	public function buildTokens()
	{
		if (!empty($this->tokens)) {
			return $this->tokens;
		}

		$this->tokens = Tokenizer::buildTokens($this->lines);
	}

	public function __construct(array $lines)
	{
		$this->lines = $lines;
	}

	/**
	 * @param AbstractCodeHandler $handler
	 * @return array
	 */
	public function buildContext(AbstractCodeHandler $handler)
	{
		// получаем массив токенов
		// массив токенов сохраняем в классе Code
		$this->buildTokens();
		// далее циклично проверяем токены на соответствие паттерну  - название токена и значение
		foreach ($this->tokens as $token) {
			// как только получили совпадение, все последующие токены добавляем в результат
			// пока не встретится завершающий токен из паттерна
			if (true === $handler->checkRules($token)) break;
		}

		return $handler->getContext();
	}

	public function saveContext($context)
	{
		// TODO: Implement saveContext() method
	}

	public function getString()
	{
		return implode('', $this->lines);
	}
}
