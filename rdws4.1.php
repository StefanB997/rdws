<?php 
function parnost($broj){
	return ($broj % 2);
}	

function dolzina(){
	$dolzina = strlen($string);
	if($dolzina > 5){
		return true;
	}else{
		return parnost($dolzina);
	}
}
?>