<?php 


class Produk{
    public $judul , 
           $penulis ,
           $penerbit , 
           $harga,
           $jmlHalaman,
           $waktuMain;
        

public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0 ){
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    
}

public function getLabel(){
    return "$this->penulis, $this->penerbit";
}
public function getInfoProduk(){
    $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
   
    return $str;
}
}



class Komik extends Produk{
    public function getInfoKomik(){
        $str = "Komik : {$this->getInfoProduk()} - {$this->jmlHalaman} Halaman. ";
        return $str;
    }
}


class Game extends Produk{
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam. ";
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Lishimoto", "shonen jump", 30000, 100, );
$produk2 = new Game("Uncharted", "Neil Druckmen", "sony Computer", 250000, 0,);

echo $produk1->getInfoKomik();
echo "<br>";
echo $produk2->getInfoProduk();
