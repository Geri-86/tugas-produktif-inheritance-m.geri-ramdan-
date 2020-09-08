<?php
class produk{
	public $namabarang,
		   $merk,
		   $harga,
		   $ukuranlayar,
		   $kapasitas;
	public function getCetak(){
		return "$this->merk, (Rp $this->harga)";
	}
	public function __construct($namabarang="nama barang",$merk="merk",$harga=0,$ukuranlayar="ukuranlayar", $kapasitas="kapasitas"){
		$this->namabarang = $namabarang;
		$this->merk = $merk;
		$this->harga = $harga;
		$this->ukuranlayar = $ukuranlayar;
		$this->kapasitas = $kapasitas;
	}
	public function cetakinfo(){
			$str="{$this->namabarang}, {$this->getCetak()}";
			return $str;
		}

}
	
	class laptop extends produk{
		public function cetakinfo(){
			$str="alat elektronik: {$this->namabarang}, {$this->getCetak()} | ukuranlayar: {$this->ukuranlayar}";
			return $str;
		}
	}
	class flasdisk extends produk{
		public function cetakinfo(){
			$str="alat elektronik: {$this->namabarang}, {$this->getCetak()} | kapasitas: {$this->kapasitas}";
			return $str;
		}
	}
	
	$produk1= new laptop("TV","sharp",1700000,"21 inci","-");
	$produk2= new flasdisk("mesin cuci","polytron",1800000,"-","9 kg");


	echo $produk1->cetakinfo();
	echo "<br>";
	echo $produk2->cetakinfo();
	echo "<br>";
