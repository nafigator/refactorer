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
abstract class AbstractProcessHandler
{
	/**
	 * @var iInterpreter[]
	 */
	protected $interpreters;

	/**
	 * Method where code is sequentially processed by all interpreters
	 *
	 * @param string $path
	 * @param array  $code_array
	 * @return null
	 */
	abstract public function process($path, array $code_array);

	/**
	 * @param array $interpreters
	 */
	public function __construct(array $interpreters)
	{
		$this->setInterpreters($interpreters);
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
