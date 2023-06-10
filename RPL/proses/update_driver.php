<?php 

    include '../koneksi.php';
    include '../session.php';

    $nik        = $_POST['nik'];    
	$nama       = $_POST['nama'];
    $nik	    = $_POST['nik'];
    $telpon		= $_POST['telpon'];
    $no_polisi	= $_POST['no_polisi'];
    $alamat		= $_POST['alamat'];
    $gambar		= $_POST['gambar'];
    $id_kendaraan  = $_POST['id_kendaraan'];
    $id_rute    = $_POST['id_rute'];
	// $keterangan 		= "Melakukan investasi $jenis_investasi senilai Rp. $jumlah_uang dalam jangka $jangka_waktu ($keterangan)";
    // $jenis              = "K";

	$sql		= "UPDATE `driver` SET `no_telepon` = '$telpon', `nik` = '$nik', `id_kendaraan` = $id_kendaraan,
                    `nama` = '$nama', `alamat` = '$alamat', `id_rute` = $id_rute, `gambar` = '$gambar', 
                    `nomor_polisi` = '$no_polisi' WHERE nik = $nik";

	$query		= mysqli_query($connect, $sql);

    if($query) {
        header("location: ../driver.php");
    } else {
        echo "Input Data Gagal.";
    }

?>