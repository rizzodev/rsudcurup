<?php

require "connect.php";

$id = $_GET['id'];
$namapasien = $_POST['namapasien'];
$tempatlahir = $_POST['tempatlahir'];
$tgllahir2 = $_POST['tgllahir'];
$tgllahir = date_format(new DateTime($tgllahir2),'Y-m-d'); 
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];
$hp = $_POST['hp'];


echo $namapasien;
echo "<br>";
echo $tempatlahir;
echo "<br>";
echo $tgllahir;
echo "<br>";
echo $umur;
echo "<br>";
echo $alamat;
echo "<br>";
echo $jeniskelamin;
echo "<br>";
echo $hp;
echo "<br>";

if (empty($namapasien) || 
	empty($tempatlahir) || 
	empty($tgllahir) || 
	empty($umur) || 
	empty($alamat) || 
	empty($jeniskelamin) ||
	empty($hp)){
	
	echo '<script language="javascript">';
echo 'alert("Data Tidak Lengkap, Mohon Isi Data Secara Lengkap dan Benar !"); location.href=history.go(-1)';
echo '</script>';

} else{

	$q= "UPDATE `pasien` 
	SET 
	`nama_pasien`= '$namapasien',
	`tempat_lahir`= '$tempatlahir',
	`tanggal_lahir`= '$tgllahir',
	`umur`=$umur,
	`alamat`='$alamat',
	`jenis_kelamin`='$jeniskelamin',
	`telepon`= '$hp'
	WHERE id=".$id;


	mysqli_query($link,$q);
	mysqli_close($link);

	echo '<script language="javascript">';
	echo 'alert("Berhasil Mengedit Data Pasien !"); location.href="index.php"';
	echo '</script>';
}

?>
?>
<!-- <meta http-equiv="refresh" content="0; url=buku.php" />

 -->