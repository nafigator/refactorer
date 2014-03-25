<?php
/**
 * Class Tokenizer
 * @file    Tokenizer.php
 *
 * PHP version 5.4+
 *
 * @author  Alexander Yancharuk <alex@itvault.info>
 * @date    Fri Mar 21 12:50:45 MSK 2014
 * @copyright The BSD 3-Clause License
 */

namespace Classes;

class Tokenizer
{
	public static function buildTokens(array $strings)
	{
		$result = [];
		$tokens = token_get_all(implode('', $strings));

		foreach ($tokens as $token) {
			$obj = new Token;

			$obj->setIndex(is_int($token[0]) ? $token[0] : null);
			$obj->setContent(is_string($token[1]) ? $token[1] : null);
			$obj->setLineNum(is_int($token[2]) ? $token[2] : null);

			$result[] = $obj;
		}

		return $result;
	}
}
