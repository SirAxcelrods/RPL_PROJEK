<?php 

    include '../koneksi.php';
    include '../session.php';

    $id_kendaraan = $_POST['id_kendaraan'];
	$merek       = $_POST['merek'];
    $tipe	    = $_POST['tipe'];
    $tahun		= $_POST['tahun'];

	$sql		= "UPDATE `kendaraan` SET `merek` = '$merek', `tahun` = '$tahun', `tipe` = '$tipe'
                    WHERE id_kendaraan = $id_kendaraan";

    $query		= mysqli_query($connect, $sql);

    if($query) {
        header("location: ../kendaraan.php");
    } else {
        echo "Input Data Gagal.";
    }

?>