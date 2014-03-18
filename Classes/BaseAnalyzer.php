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
	 * @var FileReader
	 */
	protected $reader;
	/**
	 * @var array
	 */
	protected $interpreter;

	/**
	 * @param iInterpreter $interpreter
	 */
	public function __construct(iInterpreter $interpreter)
	{
		$this->setInterpreter($interpreter);
	}

	/**
	 * Get reader
	 *
	 * @return FileReader
	 */
	public function getReader()
	{
		return $this->reader;
	}

	/**
	 * Set file reader
	 *
	 * @param FileReader $reader
	 */
	public function setReader(FileReader $reader)
	{
		$this->reader = $reader;
	}

	/**
	 * Get rules array
	 *
	 * @return iInterpreter
	 */
	public function getInterpreter()
	{
		return $this->interpreter;
	}

	/**
	 * Set rules array
	 *
	 * @param iInterpreter $interpreter
	 */
	public function setInterpreter(iInterpreter $interpreter)
	{
		$this->interpreter = $interpreter;
	}
}
