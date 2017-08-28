<?php

class Qazaqparat {


	private static $ENCODE_MAP = array(

		'А' => 'A',  'а' => 'a',
		'Ә' => 'Ä',  'ә' => 'ä',
		'Б' => 'B',  'б' => 'b',
		'В' => 'V',  'в' => 'v',
		'Г' => 'G',  'г' => 'g',
		'Ғ' => 'Ğ',  'ғ' => 'ğ',
		'Д' => 'D',  'д' => 'd',
		'Е' => 'E',  'е' => 'e',
		'Ё' => 'Yo', 'ё' => 'yo',
		'Ж' => 'J',  'ж' => 'j',
		'З' => 'Z',  'з' => 'z',
		'И' => 'Ï ', 'и' => 'ï',
		'Й' => 'Y',  'й' => 'y',
		'К' => 'K',  'к' => 'k',
		'Қ' => 'Q',  'қ' => 'q',
		'Л' => 'L',  'л' => 'l',
		'М' => 'M',  'м' => 'm',
		'Н' => 'N',  'н' => 'n',
		'Ң' => 'Ñ',  'ң' => 'ñ',
		'О' => 'O',  'о' => 'o',
		'Ө' => 'Ö',  'ө' => 'ö',
		'П' => 'P',  'п' => 'p',
		'Р' => 'R',  'р' => 'r',
		'С' => 'S',  'с' => 's',
		'Т' => 'T',  'т' => 't',
		'У' => 'W',  'у' => 'w',
		'Ұ' => 'U',  'ұ' => 'u',
		'Ү' => 'Ü',  'ү' => 'ü',
		'Ф' => 'F',  'ф' => 'f',
		'Х' => 'X',  'х' => 'x',
		'Һ' => 'H',  'һ' => 'h',
		'Ц' => 'C',  'ц' => 'c',
		'Ч' => 'Ç',  'ч' => 'ç',
		'Ш' => 'Ş',  'ш' => 'ş',
		'Щ' => 'Şş', 'щ' => 'şş',
		'Ъ' => 'ʺ',  'ъ' => 'ʺ',
		'Ы' => 'I',  'ы' => 'ı',
		'І' => 'İ',  'і' => 'i',
		'Ь' => 'ʹ',  'ь' => 'ʹ',
		'Э' => 'E',  'э' => 'e',
		'Ю' => 'Yu', 'ю' => 'yu',
		'Я' => 'Ya', 'я' => 'ya',

	);

	public static function in($str) {
		$resultString = '';
		$chrArray = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
		foreach ($chrArray as $char) {
			$resultString .= array_key_exists($char, self::$ENCODE_MAP) ? self::$ENCODE_MAP[$char] : $char;
		}

		return $resultString;
	}

	public static function out($str) {
		$resultString = '';
		$chrArray = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
		$DECODE_MAP = array_flip(self::$ENCODE_MAP);

		var_dump($DECODE_MAP);

		foreach ($chrArray as $char) {
			$resultString .= array_key_exists($char, $DECODE_MAP) ? $DECODE_MAP[$char] : $char;
		}

		return $resultString;
	}
}

?>