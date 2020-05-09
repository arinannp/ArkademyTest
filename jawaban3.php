<?php

function countvocal($string = 0) {
	$jumlahkarakter = strlen($string);
	$ubaharrayasci = count_chars($string, 1);
	$jumlahvokal = 0;

	if (is_string($string) & ($jumlahkarakter > 0)) {
		
		echo "Cek parameter huruf kecil yang vokal...<br>";
		
		foreach (($ubaharrayasci) as $j => $value) {
			
			if (($j == 97) || ($j == 101) || ($j == 105) || ($j == 111) || ($j == 117)) {
				
				echo "\"",chr($j),"\" : $value.<br>";
				$jumlahvokal += $value;
			}
		}

		if (preg_match("/[aiueo]/", $string)) {
			echo "Output = $jumlahvokal";
		}			
		else {
			echo "Output = 0";
		}
	} 

	else {
		echo "Harus memasukan parameter dan harus string!";
	}
	
	echo "<br>"; echo "<pre>";
	print_r($ubaharrayasci);
	echo "<br>";
}

countvocal('programmer');
countvocal('hmm...');

?>