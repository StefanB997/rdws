<?php 
$br1 = 400;
$br2 = 600;
$br3 = 300;

if($br1 > $br2 && $br1 > $br3){
	echo "najgolemiot broj e $br1";
}else if($br2 > $br1 && $br2 > $br3){
	echo "najgolemiot broj e $br2";
}else{
	echo "najgolemiot broj e $br3";
}

?>