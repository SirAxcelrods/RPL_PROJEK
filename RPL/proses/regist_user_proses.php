<?php
session_start();

        include '../koneksi.php';

        $email          = $_POST['email'];
        $password       = $_POST['password'];

        $sql_cek = "SELECT * FROM user WHERE email = '$email'";
        $querry_cek = $connect->query($sql_cek);

        $cek = mysqli_num_rows($querry_cek);

        if ($cek > 0){
                header("Location: ../registrasi.php?message=terdaftar");
        }

        $sql = "INSERT INTO customer (id_customer, email, password) VALUES('', '$email', '$password')";
	$query	        = mysqli_query($connect, $sql) or die(mysqli_error($connect));

        $sql2 	        = "SELECT id_customer FROM customer ORDER BY id_customer DESC LIMIT 1";
	$query2	        = mysqli_query($connect, $sql2);
	
	while($data = mysqli_fetch_array($query2)){
		$id 	= $data['id_customer'];
	}

	if($query) {
        // $_SESSION['rekening'] = $rekening;
        // $_SESSION['status'] = "login";
        header("location: ../index.php?id_customer=$id");
	} else {
        header("location: ../registrasi.php?message=failed");
	}
?>