<?php
	include '../koneksi.php';
	include '../session.php';

	$asal       = $_POST['asal'];
    $tujuan	    = $_POST['tujuan'];
    $jarak		= $_POST['jarak'];
    $waktu		= $_POST['waktu'];
    $keterangan	= $_POST['keterangan'];
    $gambar		= $_POST['gambar'];

	$sql		= "INSERT INTO `rute`(`jarak`, `tujuan`, `asal`, `waktu`, `keterangan`, `gambar`) 
        VALUES('$jarak', '$tujuan', '$asal', '$waktu', '$keterangan', '$gambar')";

	$query		= mysqli_query($connect, $sql);

	if($query) {
        header("location: ../rute.php");
	} else {
		echo "Input Data Gagal.";
	}
?>