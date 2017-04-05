<?php 
class klasa{
	protected $broj1;
	public $broj2;

	public function zdravo_zemoz(){
		echo 'Zdravo zemoz';
	}

	protected function setBroj1(){
		$this->$broj1 = $e;
	}

	protected function getBroj1(){
		return $this->broj1;
	}	

	public function setBroj2(){
		$this->$broj2 = $d;
	}

	public function getBroj2(){
		return $this->broj2;
	}

	public function povik(){
		print_r($this->broj1.$this->broj2 .'<br/>'); 
	}
}
	class naslednik extends klasa{
		public $broj3;
		public $broj4;

		public function zdravo_zemoz(){
			echo 'Zdravo zemoz';
		}
	}

	$object = new klasa;
	$object->setBroj1 = "eden";
	$object->broj2 = "dva";
	$object->povik();

	$object2 = new naslednik;
	$object2->setBroj1 = "eden";
	$object2->broj2 = "dva";
	$object2->broj3 = "tri";
	$object2->broj4 = "cetiri";
	$object2->povik();
	$object2->zdravo_zemoz();



?>