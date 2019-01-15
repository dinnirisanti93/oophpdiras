<?php
	 class Produk {
 		public $judul,
 		       $penulis,
 		       $penerbit, 
 		       $harga;
 		       
 		public function __construct ($judul = "judul", 
 			$penulis = "penulis", $penerbit = "penerbit",
 			$harga = 0) {
 				$this->judul = $judul;
 				$this->penulis = $penulis;
 				$this->penerbit = $penerbit;
 				$this->harga = $harga;
 			}
 			
 			
 	    public function getLabel() {
     		return "$this->penulis, $this->penerbit" ; 	
     		}
 	} 
 	
 	class CetakInfoProduk {
 		public function cetak (Produk $Produk) {
 			$str = "{$Produk->judul} | {$Produk->getLabel()} (Rp. {$Produk->harga})";
 			
 			
 			return $str;
 		}
 	}
 	
 	$produk1 = new Produk ("Naruto","Masashi Kimoto", 
 		"Shonen Jump","25000");
 	$produk2 = new Produk ("Uncharted","Neil Bruckman",
 		"Sony Computer","30000");
 	
 	echo "Komik : " . $produk1->getLabel();
 	echo "<br>";
 	echo "Game : " . $produk2->getLabel();
 	
 	$infoproduk1 = new CetakInfoProduk();
 	echo $infoproduk1->cetak ($produk1);
 	

 ?>
