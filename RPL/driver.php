<?php include "session.php";
include "header.php";
$id_user   = $_SESSION['id_user'];

$nama = "";
$nik = "";
$telpon = "";
$no_polisi = "";
$alamat = "";
$kendaraan = "";
$id_kendaraan = "";
$rute = "";
$id_rute = "";

if ($_GET) {
    $nik = $_GET['id'];

    include('koneksi.php');
    $sqla    = "SELECT * FROM driver JOIN kendaraan ON driver.id_kendaraan = kendaraan.id_kendaraan JOIN rute ON driver.id_rute = rute.id_rute WHERE nik = $nik";
    $querya    = mysqli_query($connect, $sqla);
    while ($data = mysqli_fetch_array($querya)) {
        $nama = $data['nama'];
        $nik = $data['nik'];
        $telpon = $data['no_telepon'];
        $no_polisi =  $data['nomor_polisi'];
        $alamat = $data['alamat'];
        $kendaraan = $data['merek'] . " " . $data['tipe'] . " (" . $data['tahun'] . ")";
        $id_kendaraan = $data['id_kendaraan'];
        $rute = $data['asal'] . " - " . $data['tujuan'];
        $id_rute = $data['id_rute'];
    }
}
?>
<title>Driver</title>

<body>
    <?php $driver = "active bg-info fw-bold bg-opacity-50";
    include "navbar.php"; ?>
    <main id="main" class="mt-4 mb-5">
        <section class="container">
            <div class="row">
                <div class="col-md-8 pe-4">
                    <div id="read" class="container">
                        <div class="table-wrapper">
                            <div class="table-title rounded-3 me-1">
                                <h2>Daftar Driver</h2>
                            </div>
                            <table class="table table-striped table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>No Telepon</th>
                                        <th class="w-25">Alamat</th>
                                        <th>Kendaran</th>
                                        <th>Rute</th>
                                        <th>Aksi</th>
                                        <!-- <th class="w-25">Keterangan</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include('koneksi.php');
                                    $sql    = "SELECT * FROM driver JOIN kendaraan ON driver.id_kendaraan = kendaraan.id_kendaraan JOIN rute ON driver.id_rute = rute.id_rute";
                                    $query    = mysqli_query($connect, $sql);
                                    $i = 1;
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $data['nama']; ?></td>
                                            <td><?= $data['nik']; ?></td>
                                            <td><?= $data['no_telepon']; ?></td>
                                            <td><?= $data['alamat']; ?></td>
                                            <td><?= $data['merek'] . " " . $data['tipe']; ?><br>
                                                (<?= $data['nomor_polisi']; ?>)
                                            </td>
                                            <td><?= $data['asal'] . " - " . $data['tujuan']; ?></td>
                                            <td>
                                                <a href="driver.php?id=<?= $data['nik']; ?>">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="proses/hapus_data.php?id=<?= $data['nik']; ?>&data=driver">
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
                            <h1 class="h3 fw-bolder">Tambah Driver Baru</h1>
                            <p class="">Isi data untuk menambahkan driver baru</p>
                            <hr>
                        </div>
                        <div class="form">
                            <form method="POST" action="proses/<?php
                                                                if ($_GET) {
                                                                    echo "update";
                                                                } else echo "tambah";
                                                                ?>_driver.php">
                                <input type="hidden" name="nik" value="<?= $nik; ?>">
                                <input name="nama" type="text" class="input form-control my-3" placeholder="Nama *" value="<?= $nama; ?>" required>
                                <?php if ($nik != "") {
                                ?>
                                    <input name="nik" type="text" value="<?= $nik; ?>" class="input form-control my-3" placeholder="NIK *" required>
                                <?php } else {
                                ?>
                                    <input name="nik" type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" class="input form-control my-3" placeholder="NIK *" required>
                                <?php }
                                ?>
                                <!-- <input name="nik" type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" <?= $nik; ?> class="input form-control my-3" placeholder="NIK *" required> -->
                                <?php if ($telpon != "") {
                                ?>
                                    <!-- <input name="nik" type="text" <?= $nik; ?> class="input form-control my-3" placeholder="NIK *" required> -->
                                    <input name="telpon" type="text" value="<?= $telpon; ?>" class="input form-control my-3" placeholder="No. Telpon *" required>
                                <?php } else {
                                ?>
                                    <!-- <input name="nik" type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" <?= $nik; ?> class="input form-control my-3" placeholder="NIK *" required> -->
                                    <input name="telpon" type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" class="input form-control my-3" placeholder="No. Telpon *" required>
                                <?php }
                                ?>
                                <!-- <input name="telpon" type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" <?= $telpon; ?> class="input form-control my-3" placeholder="No. Telpon *" required> -->
                                <input name="no_polisi" type="text" value="<?= $no_polisi; ?>" class="input form-control my-3" placeholder="No. Polisi *" required>
                                <textarea name="alamat" cols="30" rows="2" value="<?= $alamat; ?>" class="input form-control my-1" placeholder="Alamat"><?= $alamat; ?></textarea>
                                <!-- <label>Input Foto</label> <input type="file" id="myFile" name="filename"> -->
                                <input name="gambar" type="file" value="<?= $gambar; ?>" class="input form-control my-3" accept="image/*" title="" />
                                <div id="kendaraan" class="input form-control my-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <select name="id_kendaraan" class="input form-control bg-light" id="rekening" required>
                                                <?php if ($id_kendaraan != "") {
                                                ?>
                                                    <option value="<?= $id_kendaraan; ?>" hidden selected><?= $kendaraan; ?></option>
                                                <?php } else {
                                                ?>
                                                    <option value="" hidden selected>Pilih Kendaraan</option>
                                                <?php }
                                                ?>
                                                <?php
                                                include('koneksi.php');
                                                $sql2    = "SELECT * FROM kendaraan";
                                                $query2    = mysqli_query($connect, $sql2);
                                                while ($data = mysqli_fetch_array($query2)) : ?>
                                                    <option value="<?= $data['id_kendaraan']; ?>">
                                                        <!-- <?= $data['merek']; ?> - <?= $data['tipe']; ?> -->
                                                        <?= $data['merek'] . " " . $data['tipe'] . " (" . $data['tahun'] . ")"; ?>
                                                    </option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4 d-grid">
                                            <a href="kendaraan.php" class="btn btn-info text-secondary fw-bolder text-white">
                                                <i class="material-icons">&#xE147;</i><span>Tambah</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div id="rute" class="input form-control my-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <select name="id_rute" class="input form-control bg-light" id="rekening" required>
                                                <?php if ($id_rute != "") {
                                                ?>
                                                    <option value="<?= $id_rute; ?>" hidden selected><?= $rute; ?></option>
                                                <?php } else {
                                                ?>
                                                    <option value="" hidden selected>Pilih Rute</option>
                                                <?php }
                                                ?>
                                                <?php
                                                include('koneksi.php');
                                                $sql2    = "SELECT * FROM rute";
                                                $query2    = mysqli_query($connect, $sql2);
                                                while ($data = mysqli_fetch_array($query2)) : ?>
                                                    <option value="<?= $data['id_rute']; ?>">
                                                        <?= $data['asal']; ?> - <?= $data['tujuan']; ?>
                                                    </option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4 d-grid">
                                            <a href="rute.php" class="btn btn-info text-secondary fw-bolder text-white">
                                                <i class="material-icons">&#xE147;</i><span>Tambah</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
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