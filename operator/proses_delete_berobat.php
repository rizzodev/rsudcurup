<?php

require "connect.php";

	//Ambil inputan id buku
$id = $_GET["id"];

	//Input Query
$q2 = "DELETE FROM `berobat` WHERE no=".$id;

mysqli_query($link,$q2);

mysqli_close($link);
echo '<script language="javascript">';
echo 'alert("Berhasil Menghapus Pasien !"); location.href="data_pasien_berobat.php"';
echo '</script>';
// 	echo "Berhasil di simpan ! <a href='tambahbuku.php'> ok </a>";
?>



