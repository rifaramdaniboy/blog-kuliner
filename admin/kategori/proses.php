<?php
include('../../config/koneksi.php');
$kategori = new Kategori();
$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nama_kategori = $_POST['nama_kategori'];   
}
if ($aksi == "create") {
    $kategori->create($nama_kategori);
    header("location:index.php");
} elseif ($aksi == "update") {
    $kategori->update($id, $nama_kategori);
    header("location:index.php");
} elseif ($aksi == "delete") {
    $kategori->delete($_GET['id']);
    header("location:index.php");
}
?>
