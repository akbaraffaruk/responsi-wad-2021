<?php
include('koneksi.php');

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kode_asisten = $_POST['kode_asisten'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $praktikum = $_POST['praktikum'];

    $sql =
        "INSERT INTO asisten_praktikum (nama, nim, kode_asisten, jenis_kelamin, praktikum)
		VALUES('$nama','$nim','$kode_asisten','$jenis_kelamin','$praktikum')";
    $query = mysqli_query($db, $sql);

    header("location:daftar_asisten.php");
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM asisten_praktikum WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    header("location:daftar_asisten.php");
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kode_asisten = $_POST['kode_asisten'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $praktikum = $_POST['praktikum'];

    $sql =
        "UPDATE asisten_praktikum SET nama='$nama', 
            nim='$nim', 
            kode_asisten='$kode_asisten', 
            jenis_kelamin='$jenis_kelamin', 
            praktikum='$praktikum'
        WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    header("location:daftar_asisten.php");
}
