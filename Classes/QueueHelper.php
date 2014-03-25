<?php
/**
 * Class QueueHelper
 * @file    QueueHelper.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Tue Mar 25 16:05:14 MSK 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

class QueueHelper
{
	protected $queue = [];

	/**
	 * Adds element to queue
	 *
	 * @param mixed $element
	 */
	public function enqueue($element)
	{
		$this->queue[] = $element;
	}

	/**
	 * Returns first element from queue
	 *
	 * @return mixed
	 */
	public function dequeue()
	{
		$result = array_shift($this->queue);

		return $result;
	}

	/**
	 * Count elements of queue
	 *
	 * @return int
	 */
	public function count()
	{
		return count($this->queue);
	}

	/**
	 * Checks if queue is empty
	 *
	 * @return bool
	 */
	public function isEmpty()
	{
		return empty($this->queue) ? true : false;
	}
}
