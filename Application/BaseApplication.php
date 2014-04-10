<?php
/**
 * Class RefApplication
 * @file    RefApplication.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Wed Mar 5 17:54:57 2014
 * @copyright The BSD 3-Clause License
 */

namespace Application;

use Classes\FileContentReader;
use Classes\RulesHandler;

class BaseApplication
{
	/* @var FileContentReader */
	protected $reader;

	/** @var  RulesHandler */
	protected $rules;

	/**
	 * Get rules
	 *
	 * @throws \Exception
	 * @return RulesHandler
	 */
	public function getRulesHandler()
	{
		if (null === $this->rules) {
			throw new \Exception('RulesHandler not set!');
		}
		return $this->rules;
	}

	/**
	 * Set regex rules for processing
	 *
	 * @param RulesHandler $rules
	 */
	public function setRulesHandler(RulesHandler $rules)
	{
		$this->rules = $rules;
	}

	/**
	 * Get parser object
	 *
	 * @throws \Exception
	 * @return mixed
	 */
	public function getReader()
	{
		if (null === $this->reader) {
			throw new \Exception('FileReader not set!');
		}
		return $this->reader;
	}

	/**
	 * Set parser object
	 *
	 * @param FileContentReader $reader
	 */
	public function setReader(FileContentReader $reader)
	{
		$this->reader = $reader;
	}
}
