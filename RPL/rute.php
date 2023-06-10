<?php include "session.php";
include "header.php";
$id_user   = $_SESSION['id_user'];

$jarak = "";
$tujuan = "";
$asal = "";
$waktu = "";
$keterangan = "";
$gambar = "";

if ($_GET) {
    $id_rute = $_GET['id'];

    include('koneksi.php');
    $sqla    = "SELECT * FROM rute WHERE id_rute = $id_rute";
    $querya    = mysqli_query($connect, $sqla);
    while ($data = mysqli_fetch_array($querya)) {
        $jarak = $data['jarak'];
        $tujuan = $data['tujuan'];
        $asal = $data['asal'];
        $waktu =  $data['waktu'];
        $keterangan = $data['keterangan'];
        $gambar = $data['gambar'];
    }
}
?>
<title>Rute</title>

<body>
    <?php $rute = "active bg-info fw-bold bg-opacity-50";
    include "navbar.php"; ?>
    <main id="main" class="mt-4 mb-5">
        <section class="container">
            <div class="row">
                <div class="col-md-8 pe-4">
                    <div id="read" class="container">
                        <div class="table-wrapper">
                            <div class="table-title rounded-3 me-1">
                                <h2>Daftar Rute</h2>
                            </div>
                            <table class="table table-striped table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Asal</th>
                                        <th>Tujuan</th>
                                        <th>Jarak</th>
                                        <th>Waktu Tempuh</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include('koneksi.php');
                                    $sql    = "SELECT * FROM rute";
                                    $query    = mysqli_query($connect, $sql);
                                    $i = 1;
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $data['asal']; ?></td>
                                            <td><?= $data['tujuan']; ?></td>
                                            <td><?= $data['jarak']; ?></td>
                                            <td><?= $data['waktu']; ?></td>
                                            <td><?= $data['keterangan']; ?></td>
                                            <!-- <td><?= $data['asal'] . " - " . $data['tujuan']; ?></td> -->
                                            <td>
                                                <a href="rute.php?id=<?= $data['id_rute']; ?>">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="proses/hapus_data.php?id=<?= $data['id_rute']; ?>&data=rute">
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
                            <h1 class="h3 fw-bolder">Tambah Rute Baru</h1>
                            <p class="">Isi data untuk menambahkan rute baru</p>
                            <hr>
                        </div>
                        <div class="form">
                            <form method="POST" action="proses/<?php 
                                            if ($_GET) {
                                                echo "update";
                                            } else echo "tambah";
                                        ?>_rute.php">
                                <input name="id_rute" type="hidden" value="<?= $id_rute; ?>">
                                <input name="asal" type="text" class="input form-control my-3" placeholder="Asal *" value="<?= $jarak; ?>" required>
                                <input name="tujuan" type="text" value="<?= $tujuan; ?>" class="input form-control my-3" placeholder="Tujuan *" required>
                                <input name="jarak" type="text" value="<?= $asal; ?>" class="input form-control my-3" placeholder="Jarak *" required>
                                <input name="waktu" type="text" value="<?= $waktu; ?>" class="input form-control my-3" placeholder="Waktu Tempuh *" required>
                                <!-- <input name="keterangan" type="file" value="<?= $gambar; ?>" class="input form-control my-3" accept="image/*" title="FOTO COK" /> -->
                                <textarea name="keterangan" cols="30" rows="2" value="<?= $keterangan; ?>" class="input form-control my-1" placeholder="Keterangan"><?= $keterangan; ?></textarea>
                                <input name="gambar" type="file" value="<?= $gambar; ?>" class="input form-control my-3" accept="image/*" title="" />
                                
                                <!-- <label class="" for="">Keterangan</label> -->
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