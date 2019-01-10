<?php 
Class OrangTua {
	protected $nama = 'Melia Wagestu';
	protected $jenisKelamin = "Perempuan";

	public function setData ($nm = 'Anandito dwis', $jK = 'Laki-laki'){
		$this->nama = $nm;
		$this->jenisKelamin = $jK;
	}

	public function makan() {
		return "{$this->nama} sedang makan <br>";

	}
}
Class AnakOrang extends OrangTua {
	public function biodata() {
		return "Nama : {$this->nama} <br>".
		"Jenis Kelamin : {$this->jenisKelamin} <br>".
		"============================================<p>";
	}
}

$anak = new AnakOrang;
$anak->setData('Muhammad Alif','Laki-laki');
echo $anak->biodata();
echo $anak->makan();