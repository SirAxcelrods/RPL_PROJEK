<?php
	include '../koneksi.php';
	include '../session.php';

	// $id_user 			= $_SESSION['id_user']; 
	$nama       = $_POST['nama'];
    $nik	    = $_POST['nik'];
    $telpon		= $_POST['telpon'];
    $no_polisi		= $_POST['no_polisi'];
    $alamat		= $_POST['alamat'];
    $gambar		= $_POST['gambar'];
    $id_kendaraan  = $_POST['id_kendaraan'];
    $id_rute    = $_POST['id_rute'];
	// $keterangan 		= "Melakukan investasi $jenis_investasi senilai Rp. $jumlah_uang dalam jangka $jangka_waktu ($keterangan)";
    // $jenis              = "K";

	$sql		= "INSERT INTO `driver`(`no_telepon`, `nik`, `id_kendaraan`, `nama`, `alamat`, `id_rute`, `gambar`, `nomor_polisi`) 
        VALUES('$telpon', '$nik', $id_kendaraan, '$nama', '$alamat', $id_rute, '$gambar', '$no_polisi')";

	$query		= mysqli_query($connect, $sql);

    // $sql2 	= "SELECT id_investasi FROM investasi ORDER BY id_investasi DESC LIMIT 1";
	// $query2		= mysqli_query($connect, $sql2);
	
	// while($data = mysqli_fetch_array($query2)){
	// 	$id 	= $data['id_investasi'];
	// }

	// if($query && $query2) {
	if($query) {
        header("location: ../driver.php");
	} else {
		echo "Input Data Gagal.";
	}
?>