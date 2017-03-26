<?php
/*Domashno 2/1*/

$godini = [19, 12, 45, 44];
echo "<br/>";
$zbir = 19 + 12 + 45 + 44;
echo $zbir / 4;
echo "<br/>";

/*Domashno 2/2*/

$iminja = [
	'ime1' => 'Martin',
	'ime2' => 'Stefan',
	'ime3' => 'Martin',
	'ime4' => 'Stefan',
	'ime5' => 'Dada Irina' 
];


$maximus = 0;
$pecati = '';

foreach ($iminja as $student => $ime) {
	if(strlen($student.$ime) > $maximus){
		$maximus = strlen($student.$ime);
		$pecati = $ime;
	}
}

echo '<br/>';

echo "Najdolgo ime e ".$pecati;


echo '<br/>';

$maximus = 100;
$pecati = '';

foreach ($iminja as $student => $ime) {
	if(strlen($student.$ime) < $maximus){
		$maximus = strlen($student.$ime);
		$pecati = $ime;
	}
}



echo "Ime so najmal broj na bukvi e ".$pecati;








?>

