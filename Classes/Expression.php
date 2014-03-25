<?php
/**
 * Class iCodeHandler
 * @file    iCodeHandler.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Fri Mar 21 12:39:37 MSK 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

/**
 * Class Expression
 *
 * @package Classes
 */
abstract class Expression
{
	abstract public function __construct(Expression $expression);
}
