<?php
/**
 * Class FileContentReader
 * @file    FileContentReader.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Tue Mar 4 17:07:51 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

/**
 * Class FileContentReader
 *
 * @author  Yancharuk Alexander <alex@itvault.info>
 */
class FileContentReader extends PathReaderIterator
{
	/**
	 * Return the array with content from current path
	 *
	 * @return array
	 */
	public function current()
	{
		return new Code($this->path[$this->position]);
	}

	/**
	 * Return the path of the current element
	 *
	 * @return string
	 */
	public function key()
	{
		return $this->path[$this->position];
	}
}
