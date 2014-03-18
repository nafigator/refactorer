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

use Classes\Analyzer;
use Classes\FileReader;

class BaseApplication
{
	/* @var FileReader */
	protected $reader;
	/* @var Analyzer */
	protected $analyzer;

	/**
	 * Get analyzer object
	 *
	 * @return mixed
	 */
	public function getAnalyzer()
	{
		return $this->analyzer;
	}

	/**
	 * Set analyzer object
	 *
	 * @param mixed $analyzer
	 */
	public function setAnalyzer(Analyzer $analyzer)
	{
		$this->analyzer = $analyzer;
	}

	/**
	 * Get parser object
	 *
	 * @return mixed
	 */
	public function getReader()
	{
		return $this->reader;
	}

	/**
	 * Set parser object
	 *
	 * @param FileReader $reader
	 */
	public function setReader(FileReader $reader)
	{
		$this->reader = $reader;
	}
}
