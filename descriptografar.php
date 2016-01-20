<?php

	class Criptografia {

		private static $chave = 11;

		public static function decriptar($str) {
			$v = str_split($str);
			foreach ($v as $k => $c) {
				if (preg_match("/[a-z]/", $c))
					$v[$k] = chr(((ord($c)-96+self::$chave)%26)+96);
			}
			return implode($v);
		}
	}

	echo "String de entrada -> b3rdcigpi4pv0gp@htmadv.rdb<br>";
	$email = Criptografia::decriptar("b3rdcigpi4pv0gp@htmadv.rdb");
	echo "String de saída -> <a href=\"mailto:$email\">$email</a><br>";

?>
