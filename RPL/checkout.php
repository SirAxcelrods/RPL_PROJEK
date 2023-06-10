<?php include "session.php";
if ($_GET) $id_driver = $_GET['driver'];
else $rute = '1';

if ($id_driver == 1) {
    $biaya = "20.000";
} else if ($id_driver == 2) {
    $biaya = "11.000";
} else {
    $biaya = "18.000";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/checkout_style.css">
    <title>Document</title>
</head>

<body>
    <form id="hasil" method="POST" action="proses/checkout_proses.php">
        <div class="container">
            <div class="title">
                <h2>PEMESANAN</h2>
            </div>
            <div class="d-flex">
                <div class="form">
                    <label>
                        <span>Layanan <span class="required">*</span></span>
                        <select name="layanan" required>
                            <option value="" hidden selected>Pilih Jenis Layanan...</option>
                            <option value="Antar Jemput">Antar Jemput</option>
                            <option value="Kirim Barang">Kirim Barang</option>
                            <option value="Pesan Makanan">Pesan Makanan</option>
                        </select>
                    </label>
                    <hr>
                    <label>
                        <span class="name">Nama<span class="required" required> *</span></span>
                        <input type="text" name="nama" required>
                    </label>
                    <label>
                        <span>Nomor Telepon<span class="required"> *</span></span>
                        <input type="tel" name="no_telepon" required>
                    </label>
                    <label>
                        <span>Alamat lengkap<span class="required"> *</span></span>
                        <input class="area" type="text" name="alamat" required>
                    </label>
                    <label>
                        <span>Catatan<span></span></span>
                        <input class="area" type="tel" name="catatan">
                    </label>
                    <input type="hidden" name="id_driver" value="<?= $id_driver  ?>">
                    <input type="hidden" name="biaya" value="<?= $biaya  ?>">

                </div>

                <div class="Yorder">
                    <table>
                        <tr>
                            <th colspan="2">BIAYA</th>
                        </tr>
                        <tr>
                            <td>Biaya Jasa</td>
                            <td>Rp. <?= $biaya; ?></td>
                        </tr>
                    </table><br>
                    <div>
                        <input type="radio" name="metode_pembayaran" value="debit" id="debit" checked>
                        <label for="debit">Direct Bank Transfer</label>
                    </div>
                    <p>
                        Lakukan pembayaran langsung ke rekening bank kami.
                        Pesanan Anda tidak akan dikirim sampai dana telah dicairkan di rekening kami.
                    </p>
                    <div>
                        <input type="radio" name="metode_pembayaran" value="cod" id="cod">
                        <label for="cod">Cash on Delivery</label>
                    </div>
                    <button id="btn-submit">Place Order</button>
                </div><!-- Yorder -->
            </div>
        </div>
    </form>

    <script src="js/sweetalert2.all.min.js"></script>
    <script>
        $(document).on('click', '#btn-submit', function(e) {
            e.preventDefault();
            // swal({
            //     title: 'Confirm',
            //     input: 'checkbox',
            //     inputValue: 0,
            //     inputPlaceholder: ' I agree with the Terms',
            //     confirmButtonText: 'Continue',
            //     inputValidator: function(result) {
            //         return new Promise(function(resolve, reject) {
            //             if (result) {
            //                 resolve();
            //             } else {
            //                 reject('You need to agree with the Terms');
            //             }
            //         })
            //     }
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href="">Why do I have this issue?</a>'
                // })
            }).then(function(result) {
                $('#hasil').submit();
            });
        });
    </script>
</body>

</html>