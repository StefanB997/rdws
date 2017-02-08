<?php 
	$a = 1130;
	$b = 420;
	$c = 111330;


	if($a > $b && $a > $c){
		echo "Najgolemiot broj e '$a'";
	} else if ($b > $c && $b > $a){
		echo "Najgolemiot broj e '$b'";
	} else {
		echo "Najgolem broj e '$c'";
	}


?>