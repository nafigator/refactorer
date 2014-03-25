<?php
/**
 * Class ContextRules
 * @file    ContextRules.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Tue Mar 25 16:17:37 MSK 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

class ContextRules
{
	/** @var  QueueHelper */
	private $queue;

	/** @var  QueueHelper */
	private $backup;

	/**
	 * Set rules queue
	 *
	 * @param QueueHelper $queue
	 */
	public function setQueue(QueueHelper $queue)
	{
		$this->queue = $queue;
		$this->backup = clone $queue;
	}

	/**
	 * Get current rules element
	 */
	public function current()
	{
		$this->queue->dequeue();
	}

	/**
	 * Restore rules from backup
	 */
	public function reset()
	{
		$this->queue = clone $this->backup;
	}
}
