
<?php 
 
include 'koneksi.php';

$nama		= $_POST['nama'];	
$jk		= $_POST['jk'];	
$alamat		= $_POST['alamat'];	
$tanggal	= $_POST['tanggal'];
 
mysql_query("INSERT INTO jemaah VALUES(NULL, '$nama', '$jk', '$alamat', '$tanggal')");
 
header("location:index.php?pesan=input");
?>