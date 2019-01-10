<?php 

Class Orang {
	public $nama = 'Melani' ;
	public $jenisKelamin;

	public function makan()
	{
		return $this->nama.' sedang makan <br>';

	}
}

$Saya = new Orang;
$Saya->nama = 'Melia';
echo $Saya->makan();

$Saya->nama = 'Wirda';
echo $Saya->makan();

 ?>