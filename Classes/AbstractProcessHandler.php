<?php
/**
 * Class AbstractProcessHandler
 * @file AbstractProcessHandler.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Tue Mar 4 17:56:19 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

/**
 * Class AbstractProcessHandler
 *
 * @author  Yancharuk Alexander <alex@itvault.info>
 */
class AbstractProcessHandler
{
	/**
	 * @var FileReader
	 */
	protected $reader;
	/**
	 * @var iInterpreter[]
	 */
	protected $interpreters;

	/**
	 * @param array $interpreters
	 */
	public function __construct(array $interpreters)
	{
		$this->setInterpreters($interpreters);
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
	 * @return iInterpreter[]
	 */
	public function getInterpreters()
	{
		return $this->interpreters;
	}

	/**
	 * Set rules array
	 *
	 * @param array $interpreter
	 */
	public function setInterpreters(array $interpreter)
	{
		$this->interpreters = $interpreter;
	}
}
