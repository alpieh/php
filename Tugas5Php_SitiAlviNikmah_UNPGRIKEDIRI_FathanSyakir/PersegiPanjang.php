<?php
require_once 'BangunDatar.php';
class PersegiPanjang extends BangunDatar {
//member variabel
    public $panjang =14;
    public $lebar =8;

//function
    public function ketPanjang($panjang){
        $this->panjang = $panjang;
    }

    public function ketLebar($lebar){
        $this->lebar = $lebar;
    }

    public function namaBidang(){
        echo 'Persegi Panjang';
    }
    public function luasBidang(){
        return ($this->panjang * $this->lebar);
    }
    public function kelilingBidang(){
        return (2* ($this->panjang + $this->lebar));
    }
}
?>