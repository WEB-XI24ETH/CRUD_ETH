<?php
class listmenumakanan {
    public $menu_makanan ,
           $bahan_makanan,
           $menu_minuman,
           $jenis_makanan,
           $chef,
           $harga,
           $rate;

    public function __construct($menu_makanan = "menu makanan", $bahan_makanan = "bahan makanan", $menu_minuman = "menu minuman", $jenis_makanan = "jenis makanan", $chef = "chef", $harga = "harga", $rate = "rate") {
        $this->menu_makanan  = $menu_makanan;
        $this->bahan_makanan = $bahan_makanan;
        $this->menu_minuman  = $menu_minuman;
        $this->jenis_makanan = $jenis_makanan;
        $this->chef          = $chef;
        $this->harga         = $harga;
        $this->rate          = $rate;
    }     
    
    // public function getlabel() {
    //     return "$this->nama_makanan, $this->jenis";
    // }

}

$listmenumakanan1 = new listmenumakanan("ayam", "ayam, bawang, kecap", "es jeruk", "goreng","Ali Abdurrazaq", 15000,"9/10");


echo var_dump ($listmenumakanan1);
