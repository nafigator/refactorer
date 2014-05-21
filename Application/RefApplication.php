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
	 * Creates progress bar and run replacers on each file in path
	 */
	public function run()
	{
		$files = $this->getReader();
		$rules = $this->getRulesHandler();

		$bar = new CliProgressBar(count($rules) * count($files));
		$i   = 0;

		foreach ($files as $content) {
			// по каждому из файлов проходимся реплейсером
			$rules->process($content);
			$bar->update(++$i);
		}
	}
}
