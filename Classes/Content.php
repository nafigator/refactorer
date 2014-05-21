<?php
/**
 * Class Content
 * @file    Content.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Thu Mar 20 18:35:21 MSK 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

class Content
{
	/** @var string */
	private $code;
	/** @var  string */
	private $path;

	public function __construct($path = null)
	{
		if (null !== $path) {
			$this->code = file_get_contents($path);
			$this->path = $path;
		}
	}

	public function setString($string)
	{
		$this->code = $string;
	}

	public function getString()
	{
		return $this->code ?: '';
	}

	public function save()
	{
		return file_put_contents($this->getPath(), $this->getString());
	}

	/**
	 * Get path to file
	 *
	 * @return string
	 */
	public function getPath()
	{
		return $this->path;
	}

	/**
	 * Set path to code file
	 *
	 * @param string $path
	 */
	public function setPath($path)
	{
		$this->path = $path;
	}
}
