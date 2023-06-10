<?php
include "session.php";
include 'koneksi.php';

$user = $_SESSION['user'];

if ($_GET) $rute = $_GET['rute'];
else $rute = '1';

$wew = "active";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles/new_styles.css" />
    <style>

    </style>
</head>

<body>
    <div class="back">
        <a href="index.php">
            Kembali
        </a>
    </div>
    <div class="navbar">
        <?php $sqlr = "SELECT * FROM rute";
        $queryr = mysqli_query($connect, $sqlr);
        $i = 1;
        while ($data = mysqli_fetch_array($queryr)) { ?>
            <a href="produk.php?rute=<?= $data['id_rute']; ?>" class="fw-bolder <?php if (intval($rute) == $data['id_rute']) echo "active"; ?>">Rute <?= $i; ?></a>
        <?php $i += 1;
        } ?>
    </div>

    <main>
        <header class="ps-5 pt-3">
            <img class="logo" src="assets/gercep.png" alt="Logo" height="75">
            <div class="header-box"></div>
        </header>

        <section class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="container mx-5 px-5 pt-3">
                        <!-- <p class="about">Tentang Kami</p> -->

                        <?php $sql = "SELECT * FROM rute WHERE id_rute = $rute";
                        $query = mysqli_query($connect, $sql);
                        $i = 1;

                        while ($data = mysqli_fetch_array($query)) : ?>

                            <h1 class="fw-bolder fst-italic route-title"><?= $data['asal']; ?> - <?= $data['tujuan']; ?></h1>
                            <p class="pt-3 fw-bolder fs-5">Detail :</p>
                            <div class="container detail ms-5 pt-1 pe-5">
                                <ul>
                                    <li>
                                        <p class="py-1 detail-item fw-bolder fs-5" style="top: 295px;"><?= $data['jarak']; ?></p>
                                    </li>
                                    <li>
                                        <p class="py-1 detail-item fw-bolder fs-5" style="top: 375px;"><?= $data['waktu']; ?></p>
                                    </li>
                                    <li>
                                        <p class="py-1 detail-item fw-bolder fs-5" style="top: 475px;"><?= $data['keterangan']; ?></p>
                                    </li>
                                </ul>
                            </div>
                        <?php endwhile; ?>
                        <hr>
                        <div class="container driver">
                            <?php $sql2 = "SELECT * FROM driver JOIN kendaraan ON driver.id_kendaraan = kendaraan.id_kendaraan WHERE driver.id_rute = $rute";
                            $query2 = mysqli_query($connect, $sql2);

                            while ($data = mysqli_fetch_array($query2)) :
                            ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="avatar" src="assets/driver/<?= $data['gambar']; ?>" alt="Avatar" width="150" height="150">
                                    </div>
                                    <div class="col-md-6 ps-5 pt-4">
                                        <p class="driver-name fw-bold fs-5"><?= $data['nama']; ?></p>
                                        <p class="driver-info fs-5"><?= $data['merek'] . " " . $data['tipe'] . " | " . $data['nomor_polisi']; ?> </p>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="checkout.php?driver=<?= $data['nik']; ?>" class="pilih">Pilih</a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>

                    </div>

                </div>
                <div class="col-md-4">
                    <img class="map" src="assets/rute/rute<?= $rute ?>.png" alt="Map" height="500">
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
</body>

</html>