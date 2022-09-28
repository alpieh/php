<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 2 PHP </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  <div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST">
    <h1 align="center">FORM INPUT DATA PEGAWAI</h1>
        <div class="form-floating mb-3">
            <input class="form-control" id="namaPegawai" type="text" name="nama" placeholder="Nama Pegawai" data-sb-validations="" />
            <label for="namaPegawai">Nama Pegawai</label>
            <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">nama</div>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" id="agama" name="agama" aria-label="Agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Katolik">Katolik</option>
            </select>
            <label for="agama">Agama</label>
        </div>
       <div class="mb-3">
            <label class="form-label d-block">Jabatan</label>
            <div class="form-check form-check-inline">
                <input value="Manager" class="form-check-input" id="manager" type="radio" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="manager">Manager</label>
            </div>
            <div class="form-check form-check-inline">
                <input value="Asisten" class="form-check-input" id="asisten" type="radio" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="asisten">Asisten</label>
            </div>
            <div class="form-check form-check-inline">
                <input value="Kabag" class="form-check-input" id="kabag" type="radio" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="kabag">Kabag</label>
            </div>
            <div class="form-check form-check-inline">
                <input value="Staff" class="form-check-input" id="staff" type="radio" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="staff">Staff</label>
            </div>
         </div>
        <div class="mb-3">
            <label class="form-label d-block">Status</label>
            <div class="form-check form-check-inline">
                <input value="Menikah" class="form-check-input" id="menikah" type="radio" name="status" data-sb-validations="" />
                <label class="form-check-label" for="menikah">Menikah</label>
            </div>
            <div class="form-check form-check-inline">
                <input value="Belum" class="form-check-input" id="belumMenikah" type="radio" name="status" data-sb-validations="" />
                <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
            </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="jumlahanak" type="text" placeholder="Jumlah Anak" name="jumlahanak" data-sb-validations="required" />
            <label for="jumlahanak">Jumlah Anak</label>
            <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah Anak is required.</div>
        </div>

        <div class="d-grid">
            <button class="btn btn-dark" id="submitButton" type="submit">Simpan Data</button>
        </div>
    </form>
</div>

<?php
    $nama = $_POST['nama'];
    $agama = $_POST['agama'];
    $jabatan_diri = $_POST['jabatan'];
    $status_asmara = $_POST['status'];
    $jumlah_anak =$_POST['jumlahanak'];
?>

<h2 class="text-center py-3">DATA PEGAWAI</h2>
<div class="table-responsive">
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Pegawai</th>
        <th scope="col">Agama</th>
        <th scope="col">Jabatan</th>
        <th scope="col">Status</th>
        <th scope="col">Jumlah Anak</th>
        <th scope="col">Gaji Pokok</th>
        <th scope="col">Tunjangan Jabatan</th>
        <th scope="col">Tunjangan Keluarga</th>
        <th scope="col">Gaji Kotor</th>
        <th scope="col">Zakat</th>
        <th scope="col">Take Home Pay</th>
      </tr>
    </thead>
<?php

switch ($jabatan_diri) {
    case 'Manager':
        $gaji_pokok = 20000000;
        break;
        case 'Asisten':
            $gaji_pokok = 15000000;
            break;
        case 'Kabag':
            $gaji_pokok = 10000000;
            break;
        case 'Staff':
            $gaji_pokok = 4000000;
            break;
        default:
        $gaji_pokok = 0;
        break;
}
    //Tunjangan Jabatan
    $tunjangan_jabatan =$gaji_pokok *0.2;

    //Tunjangan Keluarga
        $tunjangan_keluarga = 0;
        if ($status_asmara == 'Menikah' && $jumlah_anak <= 2 ) {
            $tunjangan_keluarga = $gaji_pokok * 0.05;
        } elseif ($status_asmara== 'Menikah' && $jumlah_anak <= 5) {
            $tunjangan_keluarga = $gaji_pokok * 0.1;
        }elseif ($status_asmara == 'Menikah' && $jumlah_anak >  5) {
            $tunjangan_keluarga = $gaji_pokok * 0.15;
        }else {
            $tunjangan_keluarga = 0;
        }
        

   //Gaji kotor
    $gaji_kotor = $gaji_pokok + $tunjangan_jabatan + $tunjangan_keluarga;

    //Zakat
    $agama == 'Islam' && $gaji_kotor >= 6000000 ? $zakat = $gaji_kotor * 0.025 : $zakat = 0;

    //Take home pay
    $take_home_pay = $gaji_kotor - $zakat;

?>

<tbody>
      <tr>
        <th scope="row">1</th>
        <td><?php echo $nama; ?></td>
        <td><?php echo $agama; ?></td>
        <td><?php echo $jabatan_diri; ?></td>
        <td><?php echo $status_asmara; ?></td>
        <td><?php echo $jumlah_anak; ?></td>
        <td><?php echo 'Rp. ', number_format($gaji_pokok, 2, ',', '. ');  ?></td>
        <td><?php echo 'Rp. ', number_format($tunjangan_jabatan, 2, ',', '. '); ?></td>
        <td><?php echo 'Rp. ', number_format($tunjangan_keluarga, 2, ',', '. '); ?></td>
        <td><?php echo 'Rp. ', number_format($gaji_pokok, 2, ',', '. '); ?></td>
        <td><?php echo 'Rp. ', number_format($zakat, 2, ',', '. '); ?></td>
        <td><?php echo 'Rp. ', number_format($take_home_pay, 2, ',', '. '); ?></td>
      </tr>
    </tbody>
   </table>
  </body>
</html>