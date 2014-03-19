<?php
/**
 * Class RefApplication
 * @file    RefApplication.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Wed Mar 5 17:54:57 2014
 * @copyright The BSD 3-Clause License
 */

namespace Application;

use Classes\ProcessHandler;
use Classes\FileReader;

class BaseApplication
{
	/* @var FileReader */
	protected $reader;
	/* @var ProcessHandler */
	protected $process;

	/**
	 * Get analyzer object
	 *
	 * @return ProcessHandler
	 */
	public function getProcessHandler()
	{
		return $this->process;
	}

	/**
	 * Set analyzer object
	 *
	 * @param mixed $process
	 */
	public function setProcessHandler(ProcessHandler $process)
	{
		$this->process = $process;
	}

	/**
	 * Get parser object
	 *
	 * @return mixed
	 */
	public function getReader()
	{
		return $this->reader;
	}

	/**
	 * Set parser object
	 *
	 * @param FileReader $reader
	 */
	public function setReader(FileReader $reader)
	{
		$this->reader = $reader;
	}
}
