<?php
/**
 * Class Parser
 * @file    Parser.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Tue Mar 4 17:07:51 MSK 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;
use Iterator;

/**
 * Class Parser
 *
 * @author  Yancharuk Alexander <alex@itvault.info>
 */
class Parser implements Iterator
{
	/**
	 * @var array
	 */
	private $path;
	private $origin_path;
	private $position;

	/**
	 * @param $path
	 */
	public function __construct($path)
	{
		$this->origin_path = $path;

		if (is_file($path) && is_readable($path)) {
			$this->path = [$path];
		} elseif (is_dir($path) && is_readable($path)) {
			$iterator = new \RecursiveIteratorIterator(
				new \RecursiveDirectoryIterator($path)
			);

			foreach($iterator as $value) {
				/* @var \SplFileInfo $value */
				if ('php' === $value->getExtension()) {
					$this->path[] = $value->getRealPath();
				}
			}
		}
	}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Return the php-tokens from current path
	 *
	 * @link http://php.net/manual/en/iterator.current.php
	 * @return Token[]
	 */
	public function current()
	{
		$code = file_get_contents($this->path[$this->position]);

		$tokens = token_get_all($code);

		$result = [];

		foreach ($tokens as $token) {
			$obj = new Token();
			switch (true) {
				case is_array($token):
					$obj->setIndex((int) $token[0]);
					$obj->setContent($token[1]);
					$obj->setLineNum($token[2]);
					$obj->resolveName($obj->getIndex());
					break;
				case is_string($token):
					$obj->setContent($token);
					break;
			}
			$result[] = $obj;
		}
		return $result;
	}

	/**
	 * @return string
	 */
	public function getOriginPath()
	{
		return $this->origin_path;
	}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Move forward to next element
	 *
	 * @link http://php.net/manual/en/iterator.next.php
	 * @return void Any returned value is ignored.
	 */
	public function next()
	{
		++$this->position;
	}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Return the key of the current element
	 *
	 * @link http://php.net/manual/en/iterator.key.php
	 * @return mixed scalar on success, or null on failure.
	 */
	public function key()
	{
		return $this->position;
	}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Checks if current position is valid
	 *
	 * @link http://php.net/manual/en/iterator.valid.php
	 * @return boolean The return value will be casted to boolean and then evaluated.
	 *       Returns true on success or false on failure.
	 */
	public function valid()
	{
		return isset($this->path[$this->position]);
	}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Rewind the Iterator to the first element
	 *
	 * @link http://php.net/manual/en/iterator.rewind.php
	 * @return void Any returned value is ignored.
	 */
	public function rewind()
	{
		$this->position = 0;
	}
}