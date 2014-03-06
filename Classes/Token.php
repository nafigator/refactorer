<?php
/**
 * Class Token
 * @file    Token.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Tue Mar 4 17:07:51 MSK 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

/**
 * Class Token
 *
 * @author  Yancharuk Alexander <alex@itvault.info>
 */
class Token implements iToken
{
	/**
	 * @var int
	 */
	private $index;
	/**
	 * @var string
	 */
	private $content;
	/**
	 * @var int
	 */
	private $line_num;
	/**
	 * @var string
	 */
	private $name;

	/**
	 * Get token index
	 *
	 * @return int
	 */
	public function getIndex()
	{
		return $this->index;
	}

	/**
	 * Set token index
	 *
	 * @param int $index
	 */
	public function setIndex($index)
	{
		$this->index = $index;
	}

	/**
	 * Get token name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Resolve token name
	 *
	 * @param int $index
	 * @return string
	 */
	public function resolveName($index)
	{
		$this->name = token_name($index);
	}

	/**
	 * Get token line number
	 *
	 * @return int
	 */
	public function getLineNum()
	{
		return $this->line_num;
	}

	/**
	 * @param int $line_num
	 */
	public function setLineNum($line_num)
	{
		$this->line_num = $line_num;
	}

	/**
	 * Get token content
	 *
	 * @return string
	 */
	public function getContent()
	{
		return $this->content;
	}

	/**
	 * Set token content
	 *
	 * @param string $content
	 */
	public function setContent($content)
	{
		$this->content = $content;
	}

	/**
	 * Return token name when Token cast as string
	 *
	 * @return string
	 */
	public function __toString()
	{
		return $this->getName();
	}
}
