<?php
/**
 * Class RulesHandler
 * @file RulesHandler.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Thu Apr 10 11:13:08 MSK 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;


class RulesHandler
{
	/** @var RuleAbstract[] */
	public $rules = [];

	/**
	 *	Add rule for further processing
	 */
	public function addRule(RuleAbstract $rule)
	{
		$this->rules[] = $rule;
	}

	/**
	 * Process code by each rule
	 *
	 * @param Content $content
	 */
	public function process(Content $content)
	{
		foreach ($this->rules as $rule) {
			$rule->process($content);
		}

		$content->save();
	}
}
