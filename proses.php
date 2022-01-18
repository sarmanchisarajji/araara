<?php
include "koneksi.php";
if (isset($_POST['btn'])) {
    $nama = $_POST['nama'];
    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $query = "INSERT INTO tb_abdul VALUES('','$nama','$judul','$penerbit')";
    $sql = mysqli_query($koneksi, $query);
    if ($sql) {
        header("location: index.php");
    }
}
