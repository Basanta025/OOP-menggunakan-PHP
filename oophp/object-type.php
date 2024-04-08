<?php 


class Produk{
    public $judul = "Judul", 
           $penulis = "penulis",
           $penerbit = "penerbit", 
           $harga = 0;

public function __construct($judul, $penulis, $penerbit, $harga){
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
}

public function getLabel(){
    return "$this->penulis, $this->penerbit";
}
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Lishimoto", "shonen jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmen", "sony Computer", 250000);



echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
