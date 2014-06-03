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
	/** @var string */
	private $path;

	/**
	 * Read and save content and path into private variables
	 *
	 * @param string|null $path
	 */
	public function __construct($path = null)
	{
		if (null !== $path) {
			$this->code = file_get_contents($path);
			$this->path = $path;
		}
	}

	/**
	 * Set content from string
	 *
	 * @param $string
	 */
	public function setString($string)
	{
		$this->code = $string;
	}

	/**
	 * Get content as string
	 *
	 * @return string
	 */
	public function getString()
	{
		return $this->code ?: '';
	}

	/**
	 * Save modified content into file
	 *
	 * @return int|false
	 */
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
