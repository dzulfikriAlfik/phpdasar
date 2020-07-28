<?php

for ($angka = 1; $angka <= 100; $angka++) {
	$char = '';
	if ($angka % 3 == 0) {
		$char = '*';
	}
	if ($angka % 7 == 0) {
		$char = '$';
	}
	if ($angka % 3 == 0 && $angka % 7 == 0) {
		$char = '&';
	}
	echo '<br>';
	echo $angka . $char;
}

// foreach (range(1, 100) as $number) {
// 	if ($number % 3 != 0 && $number % 7 != 0) {
// 		echo $number . '<br>';
// 		continue;
// 	}
// 	if ($number % 3 == 0) {
// 		echo $number . '*<br>';
// 		continue;
// 	}
// 	if ($number % 7 == 0) {
// 		echo $number . '$<br>';
// 		continue;
// 	} 
// 	echo '<br>';
// }
