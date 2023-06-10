<?php
    session_start();

    include '../koneksi.php';
    // include '../session.php';
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    // $sql    = "SELECT * FROM `admin` WHERE `email` = '$email'";

    // else{
    //     header("location: ../login.php?message=username_salah");
    // }
    // echo "ASU";

    $sql2    = "SELECT * FROM `admin` WHERE `email` = '$email'";
    $query2  = mysqli_query($connect, $sql2);
    $cek2    = mysqli_num_rows($query2);

    if (!$query2) {
        die('Error: ' . mysqli_error($connect));
    }

    if($cek2 > 0){
        while($data2 = mysqli_fetch_array($query2)){
            if($data2['password'] == $password){
                $_SESSION['id_user'] = $data2['id_admin'];
                $_SESSION['status'] = "login";
                
                $user = strstr($email, '@', true);
                $_SESSION['user'] = $user;
                // header("location: ../index.php?user=$user");
                header("location: ../driver.php");
            }
            else{
                header("location: ../login.php?message=password_salah");
            }
        }
    }

    $sql    = "SELECT * FROM user WHERE email = '$email'";
    $query  = mysqli_query($connect, $sql);
    $cek    = mysqli_num_rows($query);
    
    if (!$query) {
        die('Error: ' . mysqli_error($connect));
    }

    if($cek > 0){
        while($data = mysqli_fetch_array($query)){
            if($data['password'] == $password){
                $_SESSION['id_user'] = $data['id_user'];
                $_SESSION['status'] = "login";
                
                $user = strstr($email, '@', true);
                $_SESSION['user'] = $user;
                // header("location: ../index.php?user=$user");
                header("location: ../index.php");
            }
            else{
                header("location: ../login.php?message=password_salah");
            }
        }
    } 
    else{
        header("location: ../login.php?message=username_salah");
    }
?>