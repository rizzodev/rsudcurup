<?php

require "connect.php";

	//Ambil inputan id buku
$id = $_GET["id"];

	//Input Query
$q2 = "DELETE FROM `berobat` WHERE id=".$id;
$q = "DELETE FROM `pasien` WHERE id=".$id;

mysqli_query($link,$q2);
mysqli_query($link,$q);

mysqli_close($link);
echo '<script language="javascript">';
echo 'alert("Berhasil Menghapus Pasien !"); location.href="index.php"';
echo '</script>';
// 	echo "Berhasil di simpan ! <a href='tambahbuku.php'> ok </a>";
?>



