<?php
	function eh_primo($num) {
		if ($num < 2) return false;
		if ($num == 2) return true;
		if ($num % 2 == 0) return false;
		for ($i=3; $i<=sqrt($num); $i+=2) {
			if ($num % $i == 0) return false;
		}
		return true;
	}

	$num = 0;
	$i = 0;
	while ($i < 10001) {
		$num++;
		if (eh_primo($num)) $i++;
	}
	echo "10001<sup>o</sup> número primo -> <a href=\"http://sexlog.com/prova_$num\">$num</a>";

?>
