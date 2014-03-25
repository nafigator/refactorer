<?php
/**
 * Class Context
 * @file    Context.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Fri Mar 21 12:24:58 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

class Context
{
	private $context;
	private $prefix;
	private $postfix;
	private $logger;

	public function getContext()
	{
		return $this->context;
	}

	public function setContext($context)
	{
		$this->context = $context;
	}

	public function setPrefix($prefix)
	{
		$this->prefix = $prefix;
	}

	public function setPostfix($postfix)
	{
		$this->postfix = $postfix;
	}

	public function setLogger(Logger $logger)
	{
		$this->logger = $logger;
	}

	public function finalize()
	{
		return $this->prefix . $this->context . $this->postfix;
	}
}
