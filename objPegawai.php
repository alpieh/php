<?php
require 'Pegawai.php';
//ciptakan object
$rafi = new Pegawai('001','Rafian Tama','Asisten','Islam','Lajang');
$rido = new Pegawai('007','Rido Adan','Kabag','Islam','Menikah');
$reno = new Pegawai('011','Reno Alma','Manager','Islam','Menikah');
$lena= new Pegawai('030','Lenaya Putri','Kabag','Islam','Menikah');
$mutia = new Pegawai('030','Mutia Farah','Staff','Katolik','Menikah');

//Cetak Data
echo '<h3 align="center">'.Pegawai::PEGAWAI.'</h3>';
$rafi-> mencetak();
$rido-> mencetak();
$reno-> mencetak();
$lena-> mencetak();
$mutia-> mencetak();
echo  'Jumlah Pegawai: '.Pegawai::$total;
?>