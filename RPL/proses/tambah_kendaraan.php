<?php
	include '../koneksi.php';
	include '../session.php';

	$merek       = $_POST['merek'];
    $tipe	    = $_POST['tipe'];
    $tahun		= $_POST['tahun'];

	$sql		= "INSERT INTO `kendaraan`(`merek`, `tahun`, `tipe`) 
        VALUES('$merek', '$tahun', '$tipe')";

	$query		= mysqli_query($connect, $sql);

	if($query) {
        header("location: ../kendaraan.php");
	} else {
		echo "Input Data Gagal.";
	}
?>