<?php
class Pegawai{
//Member1 variabel
    public $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;

//Variabel konstanta & static di dlm class
    static $total=0;
    const PEGAWAI =" DATA PEGAWAI NF COMPUTER";

//Member2 konstruktor
public function __construct($nip, $nama, $jabatan, $agama, $status){
    $this->nip = $nip;
    $this->nama = $nama;
    $this->jabatan = $jabatan;
    $this->agama = $agama;
    $this->status = $status;
    self::$total++;
}

// Fungsi

//Gaji pokok
public function gajipokok(){
switch ($this->jabatan) {
    case 'Manager':
        $gaji_pokok = 15000000;
        break;
        case 'Asisten':
            $gaji_pokok = 10000000;
            break;
        case 'Kabag':
            $gaji_pokok = 7000000;
            break;
        case 'Staff':
            $gaji_pokok = 4000000;
            break;
        default:
        $gaji_pokok = 0;
        break;
    }
        return $gaji_pokok;
}
//Tunjangan Jabatan
public function tunjab(){
    return $tunjangan_jabatan = $this->gajipokok()*0.2;
}

//Tunjangan Keluarga
public function tunjkel(){
   return $tunjangan_keluarga = $this-> status == 'Menikah' ?
   $this->gajipokok()*0.1 : 0;
}

//Gaji Kotor
public function gajikotor(){
    return $this->gajikotor = $this->gajipokok() + 
    $this->tunjab() + $this->tunjkel();
}

//Zakat Profesi
public function zakatprof(){
    $zakat = 0;
    if ($this->agama == 'Islam' && $this->gajikotor()>=6000000) {
        $zakat =$this->gajipokok() *0.025;
    } else {
        $zakat = 0;
    }
    return $zakat;
}
//Take Home Pay
public function thmpay(){
    return $take_home_pay = $this-> gajikotor() - $this->zakatprof();
}

public function mencetak(){
    echo '<b><u>'.self::PEGAWAI.'</u></b>'; 
    echo '<br/>Nip: '.$this->nip;
    echo '<br/>Nama Pegawai: '.$this->nama;
    echo '<br/>Jabatan: '.$this->jabatan;
    echo '<br/>Agama: '.$this->agama;
    echo '<br/>Status: '.$this->status;
    echo '<br/>Gaji Pokok: '.$this->gajipokok();
    echo '<br/>Tunjangan Jabatan: '.$this->tunjab();
    echo '<br/>Tunjangan Keluarga: '.$this->tunjkel();
    echo '<br/>Zakat Profesi: '.$this->zakatprof();
    echo '<br/>Gaji Kotor: '.$this->gajikotor();
    echo '<br/>Gaji Bersih: '.$this->thmpay();
    echo '<hr/>';
    }
}
?>