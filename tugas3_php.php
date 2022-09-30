<?php
//array scalar (1 dimensi)
$m1 = ['nim'=>2013020040,'nama'=>'Ferdian Prayoga','nilai'=>40];
$m2 = ['nim'=>2013020041,'nama'=>'Nurul Hikma','nilai'=>70];
$m3 = ['nim'=>2013020042,'nama'=>'Pradika Alman','nilai'=>60];
$m4 = ['nim'=>2013020043,'nama'=>'Tam Tut Tian','nilai'=>90];
$m5 = ['nim'=>2013020044,'nama'=>'Mohamamed','nilai'=>60];
$m6 = ['nim'=>2013020045,'nama'=>'Fikri Nur Toa','nilai'=>70];
$m7 = ['nim'=>2013020046,'nama'=>'Jaelani Pradiba','nilai'=>90];
$m8 = ['nim'=>2013020047,'nama'=>'Fita Nurkhaini','nilai'=>75];
$m9 = ['nim'=>2013020048,'nama'=>'Ayu Ning Budi','nilai'=>84];
$m10 = ['nim'=>2013020049,'nama'=>'Bela Anastasya','nilai'=>50];

$ar_judul = ['No','Nim','Nama','Nilai','Keterangan',
'Grade','Predikat'];


//array assosiative (> 1 dimensi)
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

//aggregate function in array
$jumlah_siswa = count($mahasiswa);
$jml_nilai = array_column($mahasiswa,'nilai');
$total_nilai = array_sum($jml_nilai);
$max_nilai = max( $jml_nilai );
$min_nilai = min( $jml_nilai);
$nilai_rata=$total_nilai / $jumlah_siswa;

//keterangan
$keterangan = [
    'Jumlah Siswa'=>$jumlah_siswa,
    'Nilai Tertinggi'=>$max_nilai,
    'Nilai Terendah'=>$min_nilai,
    'Nilai Rata-Rata'=>$nilai_rata,
];   
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas 3 PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <h3 class="text-center">Daftar Nilai Mahasiswa</h3>
        <table align=text-center class="table table-success table-striped">
            <thead>
                <tr>
                    <?php
                    foreach($ar_judul as $jdul){
                    ?>
                    <th><?= $jdul ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
<?php
    //Grade If multi kondisi 
    $no = 1;
    foreach ($mahasiswa as $mhs) {
        $ket = ($mhs['nilai'] >=60)?"Lulus" : "Gagal";
        $grade = 0;
        if ($mhs['nilai'] >=85 && $mhs['nilai'] <= 100){
            $grade = "A";
        }elseif ($mhs['nilai'] >=75 && $mhs['nilai'] < 85){
            $grade = "B";
        }
        elseif ($mhs['nilai'] >=60 && $mhs['nilai'] < 75){
            $grade = "C";
        }elseif ($mhs['nilai'] >=50 && $mhs['nilai'] < 60){
            $grade = "D";
        }else{
            $grade ="E";
        }
    
    //Predikat Switch Case
        $predikat="";
        switch ($grade) {
            case 'A':
                $predikat = "Memuaskan";
                break;
            case 'B':
                $predikat = "Bagus";
                break;
            case 'C':
                $predikat = "Cukup";
                break;
            case 'D':
                $predikat = "Kurang";
                break;
            case 'E':
                $predikat = "Buruk";
                break;
            default:
                break;
        }
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $mhs['nim'] ?></td>
            <td><?= $mhs['nama'] ?></td>
            <td><?= $mhs['nilai'] ?></td>
            <td><?= $ket ?></td>
            <td><?= $grade ?></td>
            <td><?= $predikat ?></td>
        </tr>
        <?php $no++; } ?>
   </tbody>
<tfoot>
            
<?php
    foreach ($keterangan as $ktrg => $hasil) {
?>
            <tr>
                <th colspan="6"><?= $ktrg ?></th>
                <th><?= $hasil ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>
</html>

