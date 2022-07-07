<?php

require "connect.php";

$id = $_GET['id'];
// $namapasien = $_POST['namapasien'];
// $tempatlahir = $_POST['tempatlahir'];
// $tgllahir2 = $_POST['tgllahir'];
// $tgllahir = date_format(new DateTime($tgllahir2),'Y-m-d'); 
// $umur = $_POST['umur'];
// $alamat = $_POST['alamat'];
// $jeniskelamin = $_POST['jeniskelamin'];
// $hp = $_POST['hp'];

$tglberobat2 = $_POST['tglberobat'];
$tglberobat = date_format(new DateTime($tglberobat2),'Y-m-d'); 
$poli = $_POST['poli'];
$pembayaran = $_POST['metode_pembayaran'];



// echo $namapasien;
// echo "<br>";
// echo $tempatlahir;
// echo "<br>";
// echo $tgllahir;
// echo "<br>";
// echo $umur;
// echo "<br>";
// echo $alamat;
// echo "<br>";
// echo $jeniskelamin;
// echo "<br>";
// echo $hp;
// echo "<br>";



if (empty($tglberobat2) || 
	empty($poli) || 
	empty($pembayaran)){
	
	echo '<script language="javascript">';
echo 'alert("Data Tidak Lengkap, Mohon Isi Data Secara Lengkap dan Benar !"); location.href=history.go(-1)';
echo '</script>';

} else{

	echo "<br>";

	echo $poli;
	echo $tglberobat;
	echo $pembayaran;

	$q = "UPDATE `berobat` 
	SET 
	`poli`='$poli',
	`tanggal_berobat`='$tglberobat',
	`metode_pembayaran`='$pembayaran' 
	WHERE no=".$id;

	mysqli_query($link,$q);
	mysqli_close($link);

	echo '<script language="javascript">';
	echo 'alert("Berhasil Mengedit Data Pasien !"); location.href="data_pasien_berobat.php"';
	echo '</script>';
}
?>
?>
<!-- <meta http-equiv="refresh" content="0; url=buku.php" />

 -->