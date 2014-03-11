<?php
/**
 * Interface iInterpreter
 * @file    iInterpreter.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Tue Mar 11 16:04:54 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

/**
 * Interface iInterpreter
 *
 * @author  Yancharuk Alexander <alex@itvault.info>
 */
interface iInterpreter
{
	/**
	 * Interprets code
	 *
	 * @param array $code
	 * @return array
	 */
	public function interpret(array $code);
}
