<?php
/**
 * Class AbstractProcessHandlers
 * @file AbstractProcessHandlers.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Tue Mar 4 17:56:19 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

/**
 * Class AbstractProcessHandlers
 *
 * @author  Yancharuk Alexander <alex@itvault.info>
 */
abstract class AbstractProcessHandlers
{
	/**
	 * @var AbstractCodeHandler[]
	 */
	protected $handlers;

	/**
	 * Method where code is sequentially processed by all interpreters
	 *
	 * @param string $path
	 * @param Code   $code
	 */
	abstract public function process($path, Code $code);



	/**
	 * @param array $handlers
	 */
	public function __construct(array $handlers)
	{
		$this->setHandlers($handlers);
	}

	/**
	 * Get rules array
	 *
	 * @return AbstractCodeHandler[]
	 */
	public function getHandlers()
	{
		return $this->handlers;
	}

	/**
	 * Set rules array
	 *
	 * @param array $handlers
	 */
	public function setHandlers(array $handlers)
	{
		$this->handlers = $handlers;
	}
}
