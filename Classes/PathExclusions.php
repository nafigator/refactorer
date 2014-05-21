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
	/**
	 * @var array Excluded names
	 */
	private $paths = [];
	/**
	 * @var array Excluded absolute paths
	 */
	private $absolute_paths = [];

	/**
	 * Set excluded file names
	 *
	 * @param array $paths
	 */
	public function setPaths(array $paths)
	{
		$this->paths = $paths;
	}

	/**
	 * Set excluded absolute paths
	 *
	 * @param array $paths
	 */
	public function setAbsolutePaths(array $paths)
	{
		$this->absolute_paths = $paths;
	}

	/**
	 * Check
	 *
	 * @param $path
	 * @param $absolute_path
	 *
	 * @return bool
	 */
	public function check($path, $absolute_path)
	{
		return in_array($path, $this->paths)
			|| in_array($absolute_path, $this->absolute_paths);
	}
}
