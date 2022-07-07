<?php

$jenis = $_POST['pasien'];
$q="";
if ($jenis == "lama"){
	$nomormr = $_POST['nomormr'];
	echo $nomormr;
}

$poli = $_POST['poli'];

$namapasien = $_POST['namapasien'];
$tempatlahir = $_POST['tempatlahir'];
$tgllahir = $_POST['tgllahir'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];

$tglberobat = $_POST['tglberobat'];
$hp = $_POST['hp'];
$pembayaran = $_POST['pembayaran'];


echo "<br>";
echo $poli;
echo "<br>";
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

echo $tglberobat;
echo "<br>";
echo $hp;
echo "<br>";
echo $pembayaran;

//database in
require "connect.php";
if (empty($namapasien) || 
	empty($tempatlahir) || 
	empty($tgllahir) || 
	empty($umur) || 
	empty($alamat) || 
	empty($jeniskelamin) ||
	empty($tglberobat) ||
	empty($hp) ||
	empty($pembayaran)){
	
	echo '<script language="javascript">';
echo 'alert("Data Tidak Lengkap, Mohon Isi Data Secara Lengkap dan Benar !"); location.href=history.go(-1)';
echo '</script>';

} else{




	if ($jenis == "lama"){
	//READ DATA PASIEN

	//ADD NEW BEROBAT
		$q2 = "INSERT INTO `berobat`(
		`id`, 
		`poli`, 
		`tanggal_berobat`, 
		`metode_pembayaran`) 
		VALUES (
		$nomormr,
		'$poli',
		'$tglberobat',
		'$pembayaran'

	)";

	mysqli_query($link,$q2);
}else{

	//ADD NEW PASIEN
	$q = "INSERT INTO `pasien`
	( 	
	`nama_pasien`, 
	`tempat_lahir`, 
	`tanggal_lahir`, 
	`umur`, 
	`alamat`, 
	`jenis_kelamin`, 
	`telepon`)
	VALUES 
	(
	'$namapasien',
	'$tempatlahir',
	'$tgllahir',
	$umur,
	'$alamat',
	'$jeniskelamin',
	'$hp'
)";
mysqli_query($link,$q);

$lastid = mysqli_insert_id($link);
echo "lastid".$lastid;
	//ADD NEW BEROBAT
$q2 = "INSERT INTO `berobat`(
`id`, 
`poli`, 
`tanggal_berobat`, 
`metode_pembayaran`) 
VALUES (
$lastid,
'$poli',
'$tglberobat',
'$pembayaran'

)";

mysqli_query($link,$q2);
};


mysqli_close($link);

echo '<script language="javascript">';
echo 'alert("Berhasil Mendaftar Sebagai Pasien !"); location.href="contact.html"';
echo '</script>';
//header("location:contact.html");
}
?>
