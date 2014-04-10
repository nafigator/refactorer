<?php
/**
 * Class RuleAbstract
 * @file RuleAbstract.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Thu Apr 10 11:21:56 MSK 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

abstract class RuleAbstract
{
	/** @var  string */
	public $pattern;
	/** @var  string */
	public $replacement;

	/**
	 * Sets pattern
	 *
	 * @param string $pattern Pattern must be without delimiters
	 */
	public function setPattern($pattern)
	{
		$this->pattern = $pattern;
	}

	/**
	 * @return string
	 */
	public function getPattern()
	{
		return $this->pattern;
	}

	/**
	 * @param string $replacement
	 */
	public function setReplacement($replacement)
	{
		$this->replacement = $replacement;
	}

	/**
	 * @return string
	 */
	public function getReplacement()
	{
		return $this->replacement;
	}

	/**
	 * @param Code $code
	 *
	 * @return mixed
	 */
	abstract public function process(Code $code);
}
