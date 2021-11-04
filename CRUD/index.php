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
                        <a class="nav-link active"
                            aria-current="page"
                            href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="daftar_asisten.php">Daftar Asisten</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card">
            <form action="daftar_asisten_proses.php"
                method="POST">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nama"
                            class="form-label">Nama Lengkap</label>
                        <input type="text"
                            class="form-control"
                            name="nama"
                            id="nama"
                            placeholder="Nama Lengkap"
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
                                            checked>
                                        <label class="form-check-label"
                                            for="laki-laki">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input"
                                            type="radio"
                                            name="jenis_kelamin"
                                            id="Perempuan"
                                            value="Perempuan">
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
                            <option selected
                                hidden>Pilih Praktikum...</option>
                            <option value="Pemrograman Berorientasi Objek">Pemrograman Berorientasi Objek</option>
                            <option value="Analisis Perancangan Sistem Informasi">Analisis Perancangan Sistem Informasi
                            </option>
                            <option value="Pengembangan Aplikasi Web">Pengembangan Aplikasi Web</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit"
                        name="submit"
                        class="btn btn-primary">Submit</button>
                    <button type="reset"
                        class="btn btn-warning">Reset</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>