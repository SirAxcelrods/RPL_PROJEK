<?php include "session.php";
include "header.php";
$id_user   = $_SESSION['id_user'];

$merek = "";
$tipe = "";
$tahun = "";

if ($_GET) {
    $id_kendaraan = $_GET['id'];

    include('koneksi.php');
    $sqla    = "SELECT * FROM kendaraan WHERE id_kendaraan = $id_kendaraan";
    $querya    = mysqli_query($connect, $sqla);
    while ($data = mysqli_fetch_array($querya)) {
        $merek = $data['merek'];
        $tipe = $data['tipe'];
        $tahun = $data['tahun'];
    }
}
?>
<title>Kendaraan</title>

<body>
    <?php $kendaraan = "active bg-info fw-bold bg-opacity-50";
    include "navbar.php"; ?>
    <main id="main" class="mt-4 mb-5">
        <section class="container">
            <div class="row">
                <div class="col-md-8 pe-4">
                    <div id="read" class="container">
                        <div class="table-wrapper">
                            <div class="table-title rounded-3 me-1">
                                <h2>Daftar Kendaraan</h2>
                            </div>
                            <table class="table table-striped table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Merk</th>
                                        <th>Tipe</th>
                                        <th>Tahun</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include('koneksi.php');
                                    $sql    = "SELECT * FROM kendaraan";
                                    $query    = mysqli_query($connect, $sql);
                                    $i = 1;
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $data['merek']; ?></td>
                                            <td><?= $data['tipe']; ?></td>
                                            <td><?= $data['tahun']; ?></td>
                                            <!-- <td><?= $data['asal'] . " - " . $data['tujuan']; ?></td> -->
                                            <td>
                                                <a href="kendaraan.php?id=<?= $data['id_kendaraan']; ?>">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="proses/hapus_data.php?id=<?= $data['id_kendaraan']; ?>&data=kendaraan">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="form-dream" class="col-md-4 p-3 bg-info bg-opacity-50 rounded-3">
                    <div class="container">
                        <div id="form-head" class="text-center mb-4">
                            <h1 class="h3 fw-bolder">Tambah Kendaraan Baru</h1>
                            <p class="">Isi data untuk menambahkan kendaraan baru</p>
                            <hr>
                        </div>
                        <div class="form">
                            <form method="POST" action="proses/<?php 
                                            if ($_GET) {
                                                echo "update";
                                            } else echo "tambah";
                                        ?>_kendaraan.php">
                                <input name="id_kendaraan" type="hidden" value="<?= $id_kendaraan; ?>">
                                <input name="merek" type="text" class="input form-control my-3" placeholder="Merek *" value="<?= $merek; ?>" required>
                                <input name="tipe" type="text" value="<?= $tipe; ?>" class="input form-control my-3" placeholder="Tipe *" required>
                                <input name="tahun" type="text" value="<?= $tahun; ?>" class="input form-control my-3" placeholder="Tahun *" required>
                                <div class="p-1 mt-2">
                                    <button id="input" class="btn btn-info fw-bold py-1 px-3" type="submit">
                                        <?php 
                                            if ($_GET) {
                                                echo "Update";
                                            } else echo "Tambah";
                                        ?> 
                                        <!-- Tambah -->
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include "footer.php"; ?>

</body>

</html>