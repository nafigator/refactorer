<?php
/**
 * Interface iToken
 *
 * @file      iToken.php
 *
 * PHP version 5.4+
 *
 * @author    Alexander Yancharuk <alex@itvault.info>
 * @date      Tue Mar 4 17:0:29 MSK 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

/**
 * Interface iToken
 *
 * @author  Yancharuk Alexander <alex@itvault.info>
 */
interface iToken
{
	/**
	 * Get token index
	 *
	 * @return int
	 */
	public function getIndex();

	/**
	 * Set token index
	 *
	 * @param int $index
	 */
	public function setIndex($index);

	/**
	 * Get token name
	 *
	 * @return string
	 */
	public function getName();

	/**
	 * Resolve token name
	 *
	 * @param string $name
	 */
	public function resolveName($name);

	/**
	 * Get token line number
	 *
	 * @return int
	 */
	public function getLineNum();

	/**
	 * @param int $line_num
	 */
	public function setLineNum($line_num);

	/**
	 * Get token content
	 *
	 * @return string
	 */
	public function getContent();

	/**
	 * Set token content
	 *
	 * @param string $content
	 */
	public function setContent($content);
}
