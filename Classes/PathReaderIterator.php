<?php
/**
 * Class PathReader
 * @file    PathReader.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Срд Мар 19 12:33:42 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

use Iterator;
use Countable;

class PathReaderIterator implements Iterator, Countable
{
	/**
	 * @var array
	 */
	protected $path = [];
	protected $origin_path;
	protected $position = 0;

	/**
	 * Creates paths array from given path
	 *
	 * @param string         $path Dir path
	 * @param array          $ext
	 * @param PathExclusions $exc  Exclusions
	 */
	public function __construct($path, array $ext, PathExclusions $exc = null)
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
				if (!in_array($value->getExtension(), $ext)) {
					continue;
				}

				if (null !== $exc && $exc->check($path)) {
					continue;
				}

				$this->path[] = $value->getRealPath();
			}
		}
	}

	/**
	 * Return the current path
	 *
	 * @return array
	 */
	public function current()
	{
		return $this->path[$this->position];
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
		return $this->position;
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
