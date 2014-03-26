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

use Classes\ProcessHandlers;
use Classes\FileContentReader;

class BaseApplication
{
	/* @var FileContentReader */
	protected $reader;
	/* @var ProcessHandlers */
	protected $process;

	/**
	 * Get analyzer object
	 *
	 * @return ProcessHandlers
	 */
	public function getProcessHandlers()
	{
		return $this->process;
	}

	/**
	 * Set analyzer object
	 *
	 * @param mixed $process
	 */
	public function setProcessHandlers(ProcessHandlers $process)
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
	 * @param FileContentReader $reader
	 */
	public function setReader(FileContentReader $reader)
	{
		$this->reader = $reader;
	}
}
