<?php 
 
include 'koneksi.php';
$id			= $_POST['id'];	
$nama		= $_POST['nama'];	
$jk		= $_POST['jk'];	
$alamat		= $_POST['alamat'];	
$tanggal	= $_POST['tanggal'];
 
mysql_query("UPDATE jemaah SET id='$id', nama='$nama', jenis_kelamin='$jk', alamat='$alamat', tanggal='$tanggal' WHERE id='$id'");
 
header("location:index.php?pesan=update");
 
?>