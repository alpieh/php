<?php
require_once 'BangunDatar.php';
class Lingkaran extends BangunDatar{
//Member Variabel
public $jari2 = 7;

//function
  public function ketJari($jari2){
    $this->jari2 = $jari2;
  }
  public function namaBidang(){
    echo 'Lingkaran';
  }
    public function luasBidang(){
      return (3.14 * pow($this->jari2,2));
  }
    public function kelilingBidang(){
        return (3.14 * ($this->jari2 * $this->jari2 ));
  }
}
?>