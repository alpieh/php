<?php
require_once 'BangunDatar.php';
class Segitiga extends BangunDatar{
//member variabel
    public $alas = 4;
    public $tinggi = 3;
//function
    public function ketAlas($alas){
        $this->alas = $alas;
    }

    public function ketTinggi($tinggi){
        $this->tinggi = $tinggi;
    }
    public function namaBidang(){
        echo 'Segitiga';
    }
    public function luasBidang(){
      return (0.5 * $this->alas * $this->tinggi);
    }

    public function kelilingBidang(){
        $sisi = sqrt(pow($this->alas, 2) + pow($this->tinggi, 2));
          return $this->alas + $this->tinggi+ $sisi;
    }
}
?>