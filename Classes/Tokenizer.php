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

			if (is_array($token)) {
				$index = isset($token[0]) && is_int($token[0])
					? $token[0]
					: null;
				$content = isset($token[1]) && is_string($token[1])
					? $token[1]
					: null;
				$line_num = isset($token[2]) && is_int($token[2])
					? $token[2]
					: null;
			} else {
				$index = null;
				$content = is_string($token)
					? $token
					: null;
				$line_num = null;
			}

			$obj->setIndex($index);
			$obj->setContent($content);
			$obj->setLineNum($line_num);

			$result[] = $obj;
		}

		return $result;
	}
}
