<?php 
class CariBilangan{
	public function cekAngka($no)
		if($no%2==0) $bil = "Genap";
			else $bil = "Ganjil";
		echo "Angka ".$no." Termasuk Bilangan".$bil;
}
public function cariSegitiga($alas,$tinggi){
	$luas = 0.5 * $alas * $tinggi;
	return $luas;
}
public function cariDiskon(){
	
}
	



 ?>