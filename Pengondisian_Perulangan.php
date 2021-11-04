<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>


<body>
    <div class="container">


        <div class="row">
            <div class="col">
                <!-- Operator Pengondisian -->
                <h1>Pengondisian</h1>
                <h3>If Else</h3>
                <?php

                $nilai = 60;

                echo 'Memeriksa variable $nilai <br>';
                echo "Nilai:" . $nilai . "<br>";
                echo '  if ($nilai >= 70) {
                    echo "Selamat, siswa Lulus!";
                } else {
                    echo "Mohon maaf, siswa tidak lulus";
                } <br>';

                if ($nilai >= 70) {
                    echo "Selamat, siswa Lulus!";
                } else {
                    echo "Mohon maaf, siswa tidak lulus";
                }

                echo "<br>"; ?>


                <h3>Switch Case</h3>
                <p>
                    $url = '/about';
                </p>
                <p>
                    switch ($url) { <br>
                    case '/':<br>
                    echo 'Selamat datang di dashboard.';<br>
                    break;<br>
                    case '/about':<br>
                    echo 'Selamat datang di halaman about.';<br>
                    break;<br>
                    case '/contact':<br>
                    echo 'Selamat datang di halaman kontak.';
                    break;<br>
                    default:<br>
                    echo 'Maaf halaman yang anda cari tidak ditemukan.';<br>
                    }

                    echo '<br>';
                </p>
                <?php


                $url = '/about';

                switch ($url) {
                    case '/':
                        echo 'Selamat datang di dashboard.';
                        break;
                    case '/about':
                        echo 'Selamat datang di halaman about.';
                        break;
                    case '/contact':
                        echo 'Selamat datang di halaman kontak.';
                        break;
                    default:
                        echo 'Maaf halaman yang anda cari tidak ditemukan.';
                }

                echo '<br>';
                ?>
                <h3>Ternary Operator</h3>
                <p>
                    $nilai = 50;
                    <br>
                    echo $nilai > 70 ? "Selamat, anda lulus!" : "Mohon maaf, anda harus mengulang";
                </p>
                <?php
                $nilai = 50;

                echo $nilai > 70 ? "Selamat, anda lulus!" : "Mohon maaf, anda harus mengulang";
                ?>
            </div>
            <div class="col">
                <!-- Operator Perulangan -->
                <h1>Perulangan</h1>
                <h3>For</h3>
                <p> for ($i = 0; $i < 100; $i++)<br> { echo "Saya berjanji tidak akan mengulangi" ; };</p>


                <?php

                for ($i = 0; $i < 3; $i++) {
                    echo "Saya berjanji tidak akan mengulangi <br>";
                };
                ?>
                <h3>Do-While vs While</h3>
                <p> while (false) { <br>
                    echo "Perulangan ke-1 dengan while! <br>";
                    }
                    <br>
                    <br>
                    do { <br>
                    echo "Perulangan ke-1 dengan do while! <br>";
                    } <br>while (false);
                </p>

                <?php

                while (false) {
                    echo "Perulangan ke-1 dengan while! <br>";
                }

                do {
                    echo "Perulangan ke-1 dengan do-while! <br>";
                } while (false);
                ?>
                <h3>Foreach</h3>
                <p> $listMahasiswa = ['Kevin', 'Dimas', 'Bayu'];
                    <br>
                    <br>
                    foreach ($listMahasiswa as $mahasiswa) {<br>
                    echo "Nama : {$mahasiswa} <br>";
                    }
                </p>


                <?php

                $listMahasiswa = ['Kevin', 'Dimas', 'Bayu'];

                foreach ($listMahasiswa as $mahasiswa) {
                    echo "Nama : {$mahasiswa} <br>";
                }
                ?>

            </div>




        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>