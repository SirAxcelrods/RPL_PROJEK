<?php
	include '../koneksi.php';
	include '../session.php';
    $id_data = $_GET['id'];
    $jenis_data = $_GET['data'];
    $id_jenis = "id_" . $jenis_data;
    if($jenis_data == "driver") $id_jenis = "nik";

	
    $sql	= "DELETE FROM $jenis_data WHERE $id_jenis = '$id_data'";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));
    // echo $id_data . $jenis_data;
	if($query) {
		header("location: ../$jenis_data.php");
	} else {
		echo "Hapus Data Gagal.";
	}
?>