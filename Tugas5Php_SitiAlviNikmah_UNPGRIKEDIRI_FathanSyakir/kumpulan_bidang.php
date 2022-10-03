<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 5 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  	<br>
    <h3 align="center"> Data Table Bangun Datar</h3><br>
    <table align="center" class="table-bordered" bgcolor="Gainsboro" style="text-align: center" cellpadding="60">
  <thead >
    <tr>
      <th scope="col">No.</th>
      <th scope="col">NAMA BIDANG</th>
      <th scope="col">KETERANGAN</th>
      <th scope="col">LUAS BIDANG</th>
      <th scope="col">KELILING BIDANG</th>
    </tr>
  </thead>
<?php 
  require_once 'Lingkaran.php';
  require_once 'PersegiPanjang.php';
  require_once 'Segitiga.php';

  $lingkaran = new Lingkaran();
  $persegipanjang = new PersegiPanjang();
  $segitiga = new Segitiga();
?>
  <tbody>
     <tr>
      <th scope="row">1</th>
      <td><?php echo $lingkaran->namaBidang() ?></td>
      <td> Jari-Jari Lingkaran = <?php echo $lingkaran->jari2 ?></td>
      <td><?php echo $lingkaran->luasBidang() ?></td>
      <td><?php echo $lingkaran->kelilingBidang() ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><?php echo $persegipanjang->namaBidang() ?></td>
      <td>Panjang Persegi Panjang= <?php echo $persegipanjang->panjang ?> 
      <br/> Lebar Persegi Panjang = <?php echo $persegipanjang->lebar?></td>
      <td><?php echo $persegipanjang->luasBidang() ?></td>
      <td><?php echo $persegipanjang->kelilingBidang() ?></td>
    </tr>
     <tr>
      <th scope="row">3</th>
      <td><?php echo $segitiga->namaBidang() ?></td>
      <td>Alas Segitiga= <?php echo $segitiga->alas ?> 
      <br/> Lebar Segitiga = <?php echo $segitiga->tinggi?></td>
      <td><?php echo $segitiga->luasBidang() ?></td>
      <td><?php echo $segitiga->kelilingBidang() ?></td>
    </tr>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>