<?php

$no1 = 3;
$no2 = 8;
$no3 = 5;

if($no1 > $no2){
	if($no1 > $no3) {
		echo $no1;
	} else {
		echo $no3;
	}
} else {
	if($no2 > $no3) {
		echo $no2;
	} else {
		echo $no3;
	}
}
echo "<br/>";

$broevi = [$no1, $no2, $no3];

for ($i = 0; $i <count($broevi); $i++) { 
	if (is_numeric($broevi)) {
		echo $broevi[$i];
	} else {
		echo "pishi eden broj";
	}
}
?>