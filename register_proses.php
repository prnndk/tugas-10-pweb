<?php

include 'config.php';

if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    if ($nama != null && $alamat != null && $jenis_kelamin != null && $agama != null && $sekolah_asal != null) {
        $sql_script = "INSERT INTO PENDAFTAR (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama','$alamat','$jenis_kelamin','$agama','$sekolah_asal')";
        $sql_query = mysqli_query($db_connection, $sql_script);
    } else {
        header('Location: registrasi.php?status=gagal');
    }

    if ($sql_query) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    exit('Prohibited Access');
}
