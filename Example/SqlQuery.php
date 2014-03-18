<?php
/**
 * Refactoring rules
 * @file    rules.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Tue Mar 4 15:34:05 2014
 * @copyright The BSD 3-Clause License
 */

namespace Example;

use Classes\iInterpreter;

class SqlQuery implements iInterpreter
{

	/**
	 * Interprets code
	 *
	 * @param array $code
	 * @return array
	 */
	public function interpret(array $code)
	{
		var_dump($code);

		return $code;
	}
}

return new SqlQuery;
