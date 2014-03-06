<?php
/**
 * Class RefApplication
 * @file    RefApplication.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Tue Mar 4 15:11:58 2014
 * @copyright The BSD 3-Clause License
 */

namespace Application;
use Veles\Tools\CliProgressBar;

/**
 * Class RefApplication
 *
 * @author  Yancharuk Alexander <alex@itvault.info>
 */
class RefApplication extends BaseApplication
{
	public function run()
	{
		$bar = new CliProgressBar(count($this->getParser()));
		$i   = 0;

		foreach ($this->getParser() as $path => $tokens) {
			$this->getAnalyzer()->process($path, $tokens);
			$bar->update(++$i);
		}
	}
}
