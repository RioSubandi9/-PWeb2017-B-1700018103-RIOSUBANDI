<?php 
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
$buka = $fopen("Nota.txt", "w");
fwrite($buka, "Nama Pembeli    : $nama".PHP_EOL);
fwrite($buka, "nomer handphone : $hp".PHP_EOL);
fwrite($buka, "Alamat          : $alamat".PHP_EOL);
fclose($buka);
header('Location: index.html');
 ?>