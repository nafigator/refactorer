<?php
/**
 * @file    PathExclusions.php
 *
 * PHP version 5.3.9+
 *
 * @author  Yancharuk Alexander <alex@itvault.info>
 * @date    2014-05-21 05:03
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

/**
 * Class PathReaderExclusions
 * @author  Yancharuk Alexander <alex@itvault.info>
 */
class PathExclusions
{
	private $paths = [];
	private $absolute_paths = [];

	public function setPaths(array $paths)
	{
		$this->paths = $paths;
	}

	public function setAbsolutePaths(array $paths)
	{
		$this->absolute_paths = $paths;
	}

	public function check($path)
	{
		return in_array($path, $this->paths)
			|| in_array($path, $this->absolute_paths);
	}
}
