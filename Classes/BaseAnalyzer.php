<?php
/**
 * Class BaseAnalyzer
 * @file    BaseAnalyzer.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Tue Mar 4 17:56:19 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

/**
 * Class BaseAnalyzer
 *
 * @author  Yancharuk Alexander <alex@itvault.info>
 */
class BaseAnalyzer
{
	/**
	 * @var Parser
	 */
	protected $parser;
	/**
	 * @var array
	 */
	protected $rules;

	/**
	 * @param array $rules
	 */
	public function __construct(array $rules)
	{
		$this->setRules($rules);
	}

	/**
	 * Get parser
	 *
	 * @return Parser
	 */
	public function getParser()
	{
		return $this->parser;
	}

	/**
	 * Set parser
	 *
	 * @param Parser $parser
	 */
	public function setParser(Parser $parser)
	{
		$this->parser = $parser;
	}

	/**
	 * Get rules array
	 *
	 * @return array
	 */
	public function getRules()
	{
		return $this->rules;
	}

	/**
	 * Set rules array
	 *
	 * @param mixed $rules
	 */
	public function setRules(array $rules)
	{
		$this->rules = $rules;
	}
}
