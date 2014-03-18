<?php
/**
 * Class Analyzer
 * @file    Analyzer.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Tue Mar 4 17:56:19 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

/**
 * Class Analyzer
 *
 * @author  Yancharuk Alexander <alex@itvault.info>
 */
class Analyzer extends BaseAnalyzer
{
	public function process($path, array $code_array)
	{
		foreach ($this->getInterpreters() as $interpreter) {
			$code_array = $interpreter->interpret($code_array);
		}

		$content = implode('', $code_array);
		file_put_contents($path, $content);
	}
}
