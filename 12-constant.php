<?php 

// define('NAMA', 'Melia Wagestu');
// echo NAMA;

// echo "<br>";

// const UMUR = 16;
// echo UMUR;

// class Coba {
// 	const NAMA = 'Melia Wagestu';
// }

// echo Coba::NAMA;



// echo __FILE__;



// function coba() {
// 	return __FUNCTION__;
// }
// echo coba();

class Coba {
	public $Kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->Kelas;









 ?>