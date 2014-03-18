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
	/**
	 * Creates progress bar and run analyzer on each file in path
	 */
	public function run()
	{
		$interpreters_count	= count($this->getAnalyzer()->getInterpreters());
		$files_count		= count($this->getReader());
		$bar = new CliProgressBar($interpreters_count * $files_count);
		$i   = 0;

		foreach ($this->getReader() as $path => $code_array) {
			$this->getAnalyzer()->process($path, $code_array);
			$bar->update(++$i);
		}
	}
}
