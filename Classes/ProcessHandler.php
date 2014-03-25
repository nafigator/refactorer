<?php
/**
 * Class ProcessHandler
 * @file    ProcessHandler.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Tue Mar 4 17:56:19 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

/**
 * Class ProcessHandler
 *
 * @author  Yancharuk Alexander <alex@itvault.info>
 */
class ProcessHandler extends AbstractProcessHandler
{
	/**
	 * Method where code is sequentially processed by all interpreters
	 *
	 * @param string $path
	 * @param Code  $code
	 */
	public function process($path, Code $code)
	{
		foreach ($this->getHandlers() as $handler) {
			while ($context = $code->buildContext($handler)) {
				$expression = $handler->interpret($context);

				$code->saveContext($handler->evaluate($expression));
			}
		}

		file_put_contents($path, $code);
	}
}
