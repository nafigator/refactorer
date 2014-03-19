<?php
/**
 * Class FileReader
 * @file    FileReader.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Tue Mar 4 17:07:51 MSK 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;
use Iterator;
use Countable;

/**
 * Class FileReader
 *
 * @author  Yancharuk Alexander <alex@itvault.info>
 */
class FileReader implements Iterator, Countable
{
	/**
	 * @var array
	 */
	private $path = [];
	private $origin_path;
	private $position;

	/**
	 * Creates paths array from given path
	 *
	 * @param string $path
	 * @param array $extensions
	 */
	public function __construct($path, array $extensions)
	{
		$this->origin_path = $path;

		if (is_file($path) && is_readable($path)) {
			$this->path[] = $path;
		} elseif (is_dir($path) && is_readable($path) && is_executable($path)) {
			$iterator = new \RecursiveIteratorIterator(
				new \RecursiveDirectoryIterator($path)
			);

			foreach($iterator as $value) {
				/* @var \SplFileInfo $value */
				if (in_array($value->getExtension(), $extensions)) {
					$this->path[] = $value->getRealPath();
				}
			}
		}
	}

	/**
	 * Return the array with content from current path
	 *
	 * @return array
	 */
	public function current()
	{
		return file($this->path[$this->position]);
	}

	/**
	 * Get origin path
	 *
	 * @return string
	 */
	public function getOriginPath()
	{
		return $this->origin_path;
	}

	/**
	 * Move forward to next element
	 *
	 * @return void Any returned value is ignored.
	 */
	public function next()
	{
		++$this->position;
	}

	/**
	 * Return the key of the current element
	 *
	 * @return string
	 */
	public function key()
	{
		return $this->path[$this->position];
	}

	/**
	 * Checks if current position is valid
	 *
	 * @return boolean The return value will be casted to boolean and then evaluated.
	 *       Returns true on success or false on failure.
	 */
	public function valid()
	{
		return isset($this->path[$this->position]);
	}

	/**
	 * Rewind the Iterator to the first element
	 *
	 * @return void Any returned value is ignored.
	 */
	public function rewind()
	{
		$this->position = 0;
	}

	/**
	 * Count elements of an object
	 *
	 * @return int The custom count as an integer.
	 */
	public function count()
	{
		return empty($this->path) ? 0 : count($this->path);
	}
}
