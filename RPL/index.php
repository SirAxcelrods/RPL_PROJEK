<?php 
include "session.php";
include "header.php";

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GERCEP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div style="width: 100%; height: 4160px; position: absolute; background: #B0E9FF;">
        <!-- nav -->
        <div style="width: 100%; height: 90px;">
            <div style="width: 100%; height: 90px; position: absolute; background: linear-gradient(to left, #11a0c8 -5%, #009dae 111%);"></div>
            <div style="width: 1020px; height: 25px; position: absolute;">
                <a href="index.php"><img src="assets/gercep.png" style="width: auto; height: 70px; position: absolute; left: 20px; top: 10px;" /></a>
                <a href="#satu" style="text-decoration: none; width: 145px; position: absolute; left: 300px; top: 30px; font-size: 20px; font-weight: 700; text-align: left; color: white;">Antar Jemput</a>
                <a href="#dua" style="text-decoration: none; width: 140px; position: absolute; left: 500px; top: 30px; font-size: 20px; font-weight: 700; text-align: left; color: white;">Kirim Barang</a>
                <a href="#tiga" style="text-decoration: none; width: 170px; position: absolute; left: 700px; top: 30px; font-size: 20px; font-weight: 700; text-align: left; color: white;">Pesan Makanan</a>
                <a href="logout.php" style="text-decoration: none; width: 65px; position: absolute; right: -200px; top: 30px; font-size: 20px; font-weight: 700; text-align: left; color: white;"> Logout</a>
            </div>
        </div>


        <!-- home -->
        <p style="position: absolute; left: 45px; top: 100px; font-size: 75px; font-weight: 700; text-align: left; color: #121212;"><?= $user ?> Gercepin Aja!</p>
        <svg width="570" height="530" xmlns="http://www.w3.org/2000/svg" style="position: absolute; left: 860px; top: 135px;" preserveAspectRatio="none">
            <path d="M571 265C571 411 443 530 285 530C127.823 530 0 411.355 0 265C0 118.645 127.823 0 285 0C443.177 0 571 118.645 571 265Z" fill="#11A0C8"></path>
        </svg>
        <img src="assets/grcy.png" style="width: 745px; height: 575px; position: absolute; left: 44px; top: 400px; object-fit: cover;" />
        <p style="position: absolute; left: 50px; top: 265px; font-size: 25px; text-align: left; color: #000;">
            <span style="font-size: 25px; text-align: left; color: #000;">Mau kirim apa? Mau diantar kemana?</span><br /><span style="font-size: 25px; text-align: left; color: #000;">Lagi pengen makan apa?</span>
        </p>
        <img src="assets/qr.png" style="width: 85px; height: 115px; position: absolute; left: 1120px; top: 815px; border-radius: 10px; object-fit: cover;" />
        <img src="assets/mabur.png" style="width: 345px; height: 320px; position: absolute; left: 960px; top: 245px; object-fit: cover;" />


        <!-- priority -->
        <div style="width: 100%; height: 535px; position: absolute; left: 0px; top: 990px; overflow: hidden; border-radius: 50px; background: #005b9a;">
            <p style="position: absolute; left: 590px; top: 135px; font-size: 50px; font-weight: 700; text-align: left; color: #fff;">
                <span style="font-size: 50px; font-weight: 700; text-align: left; color: #fff;">Program Priority Customer </span><br />
                <span style="font-size: 50px; font-weight: 700; text-align: left; color: #fff;">Gercep</span>
            </p>
            <div style="width: 255px; height: 55px;">
                <button style="width: 255px; height: 55px; position: absolute; left: 600px; top: 300px; border-radius: 25px; background: #f8f8f8; font-weight: 700;">Gabung Sekarang</button>
            </div>
            <img src="assets/priority.png" style="width: 755px; height: 615px; position: absolute; left: -60px; top: -90px; object-fit: contain;" />
        </div>

        <!-- antar jmpt -->
        <div id="satu" style="width: 100%; height: 830px; position: absolute; left: 0px; top: 1425px; overflow: hidden; border-radius: 50px; background: #0191c8;">
            <p style="width: 675px; position: absolute; left: 70px; top: 137px; font-size: 20px; text-align: left; color: white;">
                Mitra driver kami siap mengantar anda kemanapun dan kapanpun
            </p>
            <div style="width: 194px; height: 58px;">
                <form action="produk.php">
                    <button style="width: 194px; height: 58px; position: absolute; left: 176px; top: 616px; border-radius: 30px; font-weight: 700; background: #3C3CB4; color: white">Order Now</button>
                </form>
            </div>
            <p style="position: absolute; left: 69px; top: 67px; font-size: 50px; font-weight: 700; text-align: left; color: #121212;">
                Antar Jemput
            </p>
            <img src="assets/sepeda.png" style="width: 527px; height: 349px; position: absolute; left: 10px; top: 196px; object-fit: contain;" />
            <img src="assets/mbl.png" style="width: 250px; height: 253px; position: absolute; left: 639px; top: 306px; border-radius: 399px; object-fit: cover;" />
            <img src="assets/bln.png" style="width: 250px; height: 250px; position: absolute; left: 942px; top: 306px; border-radius: 365px; object-fit: cover;" />
        </div>

        <!-- kirim brg -->
        <div id="dua" style="width: 100%; height: 832px; position: absolute; left: 0px; top: 2170px; overflow: hidden; border-radius: 50px; background: #74c2e1;">
            <div style="width: 194px; height: 58px;">
                <form action="produk.php">
                    <button style="width: 194px; height: 58px; position: absolute; left: 176px; top: 616px; border-radius: 30px; background: #008db5; font-weight: 500; color: white">Order Now</button>
                </form>
            </div>
            <p style="position: absolute; left: 69px; top: 67px; font-size: 50px; font-weight: 700; text-align: left; color: #121212;">
                Kirim Barang
            </p>
            <p style="width: 675px; position: absolute; left: 69px; top: 137px; font-size: 20px; text-align: left; color: white;">
                Mau nganterin barang tapi males ribet? Gercep solusinya!
            </p>
            <img src="assets/antar.png" style="width: 438px; height: 455px; position: absolute; left: 68px; top: 148px; object-fit: none;" />
            <img src="assets/sklh.png" style="width: 250px; height: 238px; position: absolute; left: 643px; top: 289px; border-radius: 346px; object-fit: cover;" />
            <img src="assets/laundri.png" style="width: 250px; height: 250px; position: absolute; left: 947px; top: 289px; border-radius: 401px; object-fit: cover;" />
        </div>


        <!-- makanan -->
        <div id="tiga" style="width: 100%; height: 832px; position: absolute; left: 0px; top: 2917px; overflow: hidden; border-radius: 50px; background: #8c8984;">
            <div style="width: 194px; height: 58px;">
                <form action="produk.php">
                    <button style="width: 194px; height: 58px; position: absolute; left: 176px; top: 666px; border-radius: 30px; font-weight: 700; background: #565656; color: white">Order Now</button>
                </form>
            </div>
            <p style="position: absolute; left: 51px; top: 55px; font-size: 50px; font-weight: 700; text-align: left; color: #121212;">
                Pesan makanan
            </p>
            <p style="width: 675px; position: absolute; left: 51px; top: 125px; font-size: 20px; text-align: left; color: white;">
                Mau nganterin barang tapi males ribet? Gercep solusinya!
            </p>
            <img src="assets/makanan.png" style="width: 395px; height: 412px; position: absolute; left: 0px; top: 209px; object-fit: cover;" />
            <img src="assets/lemon.png" style="width: 250px; height: 254px; position: absolute; left: 639px; top: 175px; border-radius: 300px; object-fit: cover;" />
            <img src="assets/ronde.png" style="width: 250px; height: 249px; position: absolute; left: 942px; top: 177px; border-radius: 402px; object-fit: cover;" />
            <img src="assets/cuanki.png" style="width: 250px; height: 248px; position: absolute; left: 639px; top: 487px; border-radius: 399px; object-fit: cover;" />
            <img src="assets/cklt.png" style="width: 250px; height: 250px; position: absolute; left: 942px; top: 486px; border-radius: 402px; object-fit: cover;" />
        </div>





        <!-- footer -->
        <div style="width: 100%; height: 454px; position: absolute; left: 0px; top: 3706px; overflow: hidden; background: #005863;">
            <p style="position: absolute; left: 42px; top: 167px; font-size: 36px; font-weight: 700; text-align: center; color: #fff;">
                Perusahaan
            </p>
            <p style="position: absolute; left: 414px; top: 166px; font-size: 36px; font-weight: 700; text-align: center; color: #fff;">
                Gabung
            </p>
            <p style="position: absolute; left: 755px; top: 166px; font-size: 36px; font-weight: 700; text-align: center; color: #fff;">
                Info
            </p>
            <p style="position: absolute; left: 76px; top: 236px; font-size: 24px; text-align: left; color: #fff;">
                Tentang
            </p>
            <p style="position: absolute; left: 73px; top: 294px; font-size: 24px; text-align: center; color: #fff;">
                Layanan
            </p>
            <p style="position: absolute; left: 413px; top: 236px; font-size: 24px; text-align: left; color: #fff;">
                Mitra Driver
            </p>
            <p style="position: absolute; left: 755px; top: 236px; font-size: 24px; text-align: center; color: #fff;">
                Bantuan
            </p>
            <p style="position: absolute; left: 751px; top: 299px; font-size: 24px; text-align: center; color: #fff;">
                Contact us
            </p>
            <p style="position: absolute; left: 410px; top: 302px; font-size: 24px; text-align: left; color: #fff;">
                Mitra Usaha
            </p>
            <p style="position: absolute; left: 1056px; top: 166px; font-size: 36px; font-weight: 700; text-align: center; color: #fff;">
                Follow us
            </p>
            <a href="https://www.instagram.com/gercep.wsb/" title="Menuju halaman instagram">
                <img src="assets/ig.png" style="width: auto; height: 50px; position: absolute; left: 1100px; top: 250px;" />
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script>
        function handleSweetAlert() {
            // Check if the 'alert' parameter is present in the URL
            const urlParams = new URLSearchParams(window.location.search);
            const alertParam = urlParams.get('alert');
            
            if (alertParam === 'success') {
                Swal.fire({
                    title: 'Berhasil!',
                    text: 'Orderan anda sedang diproses',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            }
        }

        // Call the handleSweetAlert function after the page finishes loading
        window.addEventListener('load', handleSweetAlert);
    </script>
</body>

</html>