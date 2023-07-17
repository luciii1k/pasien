<!DOCTYPE html>
<html>

<head>
    <title>MyApp | Halaman Utama</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Aplikasi Pasien</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="colapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Pasien</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row mt-3">
            <div class="col-sm">
                <h3>Tabel Pasien</h3>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <table class="table table-striped table-hover table-">
                    <tr>
                        <th>No</th>
                        <th>ID Pasien</th>
                        <th>Nama Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>


                    </tr>



                    <br>

                    <div class="col">
                        <a href="logout.php" class="btn btn-danger d-flex justify-content-center">Keluar</a>
                    </div>



                    <br />

                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $hasil = $koneksi->query("SELECT * FROM pasien");
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['idPasien']; ?></td>
                            <td><?= $row['nmPasien']; ?></td>
                            <td><?= $row['jk']; ?></td>
                            <td><?= $row['alamat']; ?></td>
                            < </tr>
                            <?php
                        }
                            ?>
                </table>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.js"></script>
</body>

</html>