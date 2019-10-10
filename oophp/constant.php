<?php 

// define('NAMA', 'EGY IMALDI SULISTYO');

// echo NAMA;

// echo "<br>";
// const UMUR = 19;
// echo UMUR;


//konstanta dalam kelas
// class Coba {
// 	const NAMA = 'WARKAD ENGENERIC';
// }

// echo Coba::NAMA;

// function coba() {
// 	return __FUNCTION__;
// }

// echo coba();


class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

 ?>