<?php
/**
 * Class RegexRule
 * @file    RegexRule.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Thu Apr 10 12:22:25 MSK 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;


class RegexRule extends RuleAbstract
{
	private $delimiter = '/';
	private $modifiers = 'm';

	/**
	 * Sets pattern
	 *
	 * @param string $pattern Pattern must be without delimiters
	 */
	public function setPattern($pattern)
	{
		if ($this->delimiter !== $pattern[strlen($pattern) - 1]) {
			$pattern = $pattern . $this->delimiter . $this->modifiers;
		}

		if ($this->delimiter !== $pattern[0]) {
			$pattern = $this->delimiter . $pattern;
		}

		$this->pattern = $pattern;
	}

	/**
	 * @param Code $code
	 *
	 * @throws \Exception
	 * @return mixed
	 */
	public function process(Code $code)
	{
		$new_code = preg_replace(
			$this->getPattern(), $this->getReplacement(), $code->getString()
		);
		if (null === $new_code) {
			throw new \Exception('Function preg_replace returned error!');
		}

		$code->setString($new_code);
	}
}
