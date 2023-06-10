<?php
include '../koneksi.php';
include '../session.php';

$id_user 		 = $_SESSION['id_user']; 

$no_telepon = $_POST['no_telepon'];
$alamat     = $_POST['alamat'];
$nama       = $_POST['nama'];

$biaya     = $_POST['biaya'];
$catatan     = $_POST['catatan'];
$layanan     = $_POST['layanan'];
$metode_pembayaran  = $_POST['metode_pembayaran'];
$id_driver   = $_POST['id_driver'];
$tanggal     = date('Y-m-d H:i:s', $phptime);

// if ($id_driver == 1){
//     $biaya = "20.000";
// }
// else if ($id_driver == 2){
//     $biaya = "11.000";
// }
// else{
//     $biaya = "18.000";
// }

$sql1 = "INSERT INTO `customer`(`no_telepon`, `alamat`, `nama`, `id_user`) 
        VALUES ('$no_telepon','$alamat','$nama',$id_user)";

$query      = mysqli_query($connect, $sql1);

$sql2       = "SELECT id_customer FROM customer ORDER BY id_customer DESC LIMIT 1";
$query2	    = mysqli_query($connect, $sql2);

while($data = mysqli_fetch_array($query2)){
    $id_customer     = $data['id_customer'];
}

$sql3        = "INSERT INTO `orderan`(`biaya`, `tanggal`, `id_customer`, `id_driver`, `metode_pembayaran`, `layanan`, `catatan`)
    VALUES('$biaya', '$tanggal', $id_customer, $id_driver, '$metode_pembayaran', '$layanan', '$catatan')";

// $sql3	    = "INSERT INTO mutasi VALUES('', $id)";
$query3	    = mysqli_query($connect, $sql3);

if($query && $query2) {
    header("location: ../index.php?alert=success");
} else {
    echo "Input Data Gagal.";
}
