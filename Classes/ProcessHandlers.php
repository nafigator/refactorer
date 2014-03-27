<?php
/**
 * Class ProcessHandlers
 * @file    ProcessHandlers.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Tue Mar 4 17:56:19 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

/**
 * Class ProcessHandlers
 *
 * @author  Yancharuk Alexander <alex@itvault.info>
 */
class ProcessHandlers extends AbstractProcessHandlers
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
				var_dump($context); exit;
//				$expression = $handler->interpret($context);
//
//				$code->saveContext($handler->evaluate($expression));
			}
		}

		file_put_contents($path, $code->getString());
	}
}
