<?php 

include "koneksi.php";
if (isset($_POST['btn'])) {
    $id = $_POST ['id'];
    $nama = $_POST['nama'];
    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $query = "UPDATE tb_abdul SET nama='$nama',judul='$judul',penerbit='$penerbit' WHERE id='$id'"; 
    $sql = mysqli_query($koneksi, $query);
    if ($sql) {
        header("location: index.php");
    }
}
