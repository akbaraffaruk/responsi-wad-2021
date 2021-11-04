<?php
include('koneksi.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">

    <title>ESD Laboratorium</title>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand"
                href="index.php">ESD Laboratory</a>
            <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse"
                id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link"
                            href=" index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active"
                            aria-current="page href="
                            daftar_asisten.php">Daftar Asisten</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card p-3">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Kode Asisten</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Praktikum</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM asisten_praktikum";
                        $query_result = mysqli_query($db, $sql);
                        $nomor = 1;
                        while ($result = mysqli_fetch_assoc($query_result)) :
                        ?>
                        <tr>
                            <td><?= $nomor++; ?></td>
                            <td><?= $result['nama'] ?></td>
                            <td><?= $result['nim'] ?></td>
                            <td class="text-center"><?= $result['kode_asisten'] ?></td>
                            <td><?= $result['jenis_kelamin'] ?></td>
                            <td><?= $result['praktikum'] ?></td>
                            <td>
                                <button type="button"
                                    class="btn btn-primary"
                                    data-bs-toggle="modal"
                                    data-bs-target="#update<?= $result['id'] ?>">
                                    Update
                                </button>
                                <a href="daftar_asisten_proses.php?id=<?= $result['id'] ?>"
                                    class="btn btn-danger"
                                    role="button">Hapus</a>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade"
                            id="update<?= $result['id'] ?>"
                            tabindex="-1"
                            aria-labelledby="update<?= $result['id'] ?>Label"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="daftar_asisten_proses.php"
                                        method="POST">
                                        <input type="hidden" name="id" value="<?= $result['id'] ?>">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="nama"
                                                    class="form-label">Nama Lengkap</label>
                                                <input type="text"
                                                    class="form-control"
                                                    name="nama"
                                                    id="nama"
                                                    placeholder="Nama Lengkap"
                                                    value="<?= $result['nama'] ?>"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nim"
                                                    class="form-label">NIM</label>
                                                <input type="number"
                                                    class="form-control"
                                                    name="nim"
                                                    id="nim"
                                                    placeholder="NIM"
                                                    value="<?= $result['nim'] ?>"
                                                    required>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="kode_asisten"
                                                            class="form-label">Kode Asisten</label>
                                                        <input type="text"
                                                            class="form-control"
                                                            name="kode_asisten"
                                                            id="kode_asisten"
                                                            placeholder="Kode Asisten"
                                                            maxlength="3"
                                                            value="<?= $result['kode_asisten'] ?>"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="jenis_kelamin"
                                                            class="form-label">Jenis Kelamin</label>
                                                        <div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input"
                                                                    type="radio"
                                                                    name="jenis_kelamin"
                                                                    id="laki-laki"
                                                                    value="Laki-Laki"
                                                                    <?php 
                                                                            if($result['jenis_kelamin'] === 'Laki-Laki') {
                                                                                echo 'checked';
                                                                            }
                                                                        ?>>
                                                                <label class="form-check-label"
                                                                    for="laki-laki">Laki-Laki</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input"
                                                                    type="radio"
                                                                    name="jenis_kelamin"
                                                                    id="Perempuan"
                                                                    value="Perempuan"
                                                                    <?php 
                                                                            if($result['jenis_kelamin'] === 'Perempuan') {
                                                                                echo 'checked';
                                                                            }
                                                                        ?>>
                                                                <label class="form-check-label"
                                                                    for="Perempuan">Perempuan</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="praktikum"
                                                    class="form-label">Praktikum</label>
                                                <select class="form-select"
                                                    id="praktikum"
                                                    name="praktikum"
                                                    required>
                                                    <option value="Pemrograman Berorientasi Objek"
                                                        <?php 
                                                                            if($result['praktikum'] === 'Pemrograman Berorientasi Objek') {
                                                                                echo 'selected';
                                                                            }
                                                                        ?>>
                                                        Pemrograman Berorientasi Objek
                                                    </option>
                                                    <option value="Analisis Perancangan Sistem Informasi"
                                                        <?php 
                                                                            if($result['praktikum'] === 'Analisis Perancangan Sistem Informasi') {
                                                                                echo 'selected';
                                                                            }
                                                                        ?>>
                                                        Analisis Perancangan Sistem Informasi
                                                    </option>
                                                    <option value="Pengembangan Aplikasi Web"
                                                        <?php 
                                                                            if($result['praktikum'] === 'Pengembangan Aplikasi Web') {
                                                                                echo 'selected';
                                                                            }
                                                                        ?>>
                                                        Pengembangan Aplikasi Web
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit"
                                                name="update"
                                                class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>