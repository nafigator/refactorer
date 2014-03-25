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
		$count = count($this->getProcessHandler()->getHandlers())
			   * count($this->getReader());
		$bar = new CliProgressBar($count);
		$i   = 0;

		foreach ($this->getReader() as $path => $code) {
			$this->getProcessHandler()->process($path, $code);
			$bar->update(++$i);
		}
	}
}
