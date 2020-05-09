<?php

function createtriangel($a=0, $b=0) {

	$kaki = $b / $a;
	for ($i=1; $i <= $kaki; $i++) {
		
		for ($j=$kaki; $j >= $i; $j--) { 
			print('&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp');
		}
		for ($k=1; $k <= $i; $k++) { 
			$f = $k*2;
			if ($f > $b) {
				$f = "";
			}
			echo "&nbsp&nbsp$f&nbsp&nbsp";
		}
		echo "<br><br>";
	}
}

createtriangel(2,10);

?>