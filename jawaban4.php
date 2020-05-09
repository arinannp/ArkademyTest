<?php

function searchword($string1 = 0, $kata = 0) {
	$jumlahkarakter1 = strlen($string1);
	$jumlahkarakter2 = strlen($kata);
	$output1 = 0;
	$output2 = 0;

	$posisi1 = strpos($string1, $kata);
	$potong1 = substr($string1, $posisi1);
	$array1 = explode($kata, $potong1);

	$string2 = strrev($string1);
	$posisi2 = strpos($string2, $kata);
	$potong2 = substr($string2, $posisi2);
	$array2 = explode($kata, $potong2);

	if ($jumlahkarakter1 > $jumlahkarakter2) {
		echo "Cek banyak frasa dari string...<br><br>";
		foreach ($array1 as $key1 => $value1) {
			if ($value1 == 0) {
				$output1++;
			}
		}
		foreach ($array2 as $key2 => $value2) {
			if ($value2 == 0) {
				$output2++;
			}
		}
		$output = $output1 + $output2;
		echo "Output : ditemukan $output kali";
	}
	
	else {
		echo "Input data salah!";
	}
}

searchword('banananana','nana');

?>