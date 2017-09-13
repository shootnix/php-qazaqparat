<?php

class Qaz {

	// VERSION 0.02

	private static $TLESHOV = array(

		'А' => 'A',  'а' => 'a',
		'Ә' => 'Ae',  'ә' => 'ae',
		'Б' => 'B',  'б' => 'b',
		'В' => 'V',  'в' => 'v',
		'Г' => 'G',  'г' => 'g',
		'Ғ' => 'Gh',  'ғ' => 'gh',
		'Д' => 'D',  'д' => 'd',
		'Е' => 'E',  'е' => 'e',
		'Ё' => 'Yo', 'ё' => 'yo',
		'Ж' => 'Zh',  'ж' => 'zh',
		'З' => 'Z',  'з' => 'z',
		'И' => 'I ', 'и' => 'i',
		'Й' => 'J',  'й' => 'j',
		'К' => 'K',  'к' => 'k',
		'Қ' => 'Q',  'қ' => 'q',
		'Л' => 'L',  'л' => 'l',
		'М' => 'M',  'м' => 'm',
		'Н' => 'N',  'н' => 'n',
		'Ң' => 'Ng',  'ң' => 'ng',
		'О' => 'O',  'о' => 'o',
		'Ө' => 'Oe',  'ө' => 'oe',
		'П' => 'P',  'п' => 'p',
		'Р' => 'R',  'р' => 'r',
		'С' => 'S',  'с' => 's',
		'Т' => 'T',  'т' => 't',
		'У' => 'W',  'у' => 'w',
		'Ұ' => 'U',  'ұ' => 'u',
		'Ү' => 'Ue',  'ү' => 'ue',
		'Ф' => 'F',  'ф' => 'f',
		'Х' => 'H',  'х' => 'h',
		'Һ' => 'H',  'һ' => 'h',
		'Ц' => 'C',  'ц' => 'c',
		'Ч' => 'Ch',  'ч' => 'ch',
		'Ш' => 'Sh',  'ш' => 'sh',
		'Щ' => 'Sh', 'щ' => 'sh',
		'Ъ' => '',  'ъ' => '',
		'Ы' => 'Y',  'ы' => 'y',
		'І' => 'I',  'і' => 'i',
		'Ь' => '',  'ь' => '',
		'Э' => 'E',  'э' => 'e',
		'Ю' => 'Yu', 'ю' => 'yu',
		'Я' => 'Ya', 'я' => 'ya',

	);

	private static $QAZAQPARAT = array(

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
		'Х' => 'X',  'x' => 'h',
		'Һ' => 'H',  'һ' => 'h',
		'Ц' => 'C',  'ц' => 'c',
		'Ч' => 'Ç',  'ч' => 'ç',
		'Ш' => 'Ş',  'ш' => 'ş',
		'Щ' => 'Şş', 'щ' => 'şş',
		'Ъ' => 'ʺ',  'ъ' => 'ʺ',
		'Ы' => 'I',  'ы' => 'ı',
		'І' => 'İ',  'і' => 'i',
		'Ь' => 'ʹ',  'ь' => 'ʹ',
		'Э' => 'É',  'э' => 'é',
		'Ю' => 'Yw', 'ю' => 'yw',
		'Я' => 'Ya', 'я' => 'ya',

	);

	private static function transliterate($str, $KEY_MAP) {

		if (!isset($str)) {
			return Null;
		}

		$resultString = '';
		$chrArray = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
		foreach ($chrArray as $char) {
			$resultString .= array_key_exists($char, $KEY_MAP) ? $KEY_MAP[$char] : $char;
		}

		return $resultString;
	}

	public static function in($method, $str)  {

		$resultString = '';
		switch ($method) {
			case 'qazaqparat':
				$resultString = self::transliterate($str, self::$QAZAQPARAT);
				break;

			case 'tleshov':
				$resultString = self::transliterate($str, self::$TLESHOV);
				break;

			default:
				$resultString = Null;
				break;
		}

		return $resultString;
	}
}

?>