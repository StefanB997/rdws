<?php
// $ocenki = array(8, 9, 10, 8, 9);
// $broj_elemnti = count($ocenki);

// for($suma = 0, $indeks = 0; $indeks < $broj_elemnti ; $indeks++){
// 	$suma = $suma + $ocenki[$indeks];
// }
// echo $suma/5;


$ucenici = array(

// 'kluch'(mora unikat) => 'vrednost (mozhe ista)'
'Stefan' => 'Blazevski',
'stefan' => 'Stojkovski',
'Martin' => 'Danev',
'martin' => 'Postolovski',
'Irina' => 'Dobrohotova',
);

$brojac = 1;
foreach($ucenici as $value){
	echo $brojac++.'. '.$value."<br/>";
}
print_r($ucenici);
?>