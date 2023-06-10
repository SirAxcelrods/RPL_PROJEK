<?php 

    include '../koneksi.php';
    include '../session.php';

    $id_rute    = $_POST['id_rute']; 
    $asal       = $_POST['asal'];
    $tujuan	    = $_POST['tujuan'];
    $jarak		= $_POST['jarak'];
    $waktu		= $_POST['waktu'];
    $keterangan	= $_POST['keterangan'];
    $gambar		= $_POST['gambar'];

    $sql		= "UPDATE `rute` SET `jarak` = '$jarak', `tujuan` = '$tujuan', `asal` = '$asal', 
                    `waktu` = '$waktu', `keterangan` = '$keterangan', `gambar` = '$gambar' WHERE id_rute = $id_rute";

    $query		= mysqli_query($connect, $sql);

    if($query) {
        header("location: ../rute.php");
    } else {
        echo "Input Data Gagal.";
    }

?>