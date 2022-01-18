<?php

include "koneksi.php";
$id = $_GET['id'];
$query = "DELETE FROM tb_abdul WHERE id='$id'";
$sql = mysqli_query($koneksi, $query);
if ($sql) {
    header("location: index.php");
}
