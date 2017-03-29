<?php 
class avtomobil {
	//properties
	public $marka;
	public $kilometri;
	public $godina;
	//method

	public function __construct($m, $k, $g){
		$this->marka = $m ;
		$this->kilometri = $k;
		$this->godina = $g;
	}

	public function pecati_podatoci(){
		echo $this->marka. ' - ' .$this->kilometri. ' - ' .$this->godina;
	}
	public function pecati_dolzina_podatok($parametar){
		echo strlen($this->$parametar. ',' .$this->$parametar1);
	}
}


$kola1 = new avtomobil('audi', 55.112, 2015);

$kola1->pecati_podatoci();


?>