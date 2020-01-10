<?php
session_start();
include '../../config/koneksi.php';
$berita = new Berita();
$aksi = $_GET['aksi'];
// Memanggil user login yang akan dijadikan penulis
$user = new Database();
$user = mysqli_query(
  $user->koneksi,
  "select * from user where password = '$_SESSION[login]'"
  );
  $user = mysqli_fetch_array($user);
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];
    $tgl_berita = date('Y-m-d');
    $id_kategori = $_POST['id_kategori'];
    $gambarLama = $_POST['gambarLama'];
    // upload image
    function upload()
    {
        // Upload Foto
        $gambar = $_FILES['gambar']['name'];
        $sizeFoto = $_FILES['gambar']['size'];
        $gambarError = $_FILES['gambar']['error'];
        $tmpFoto = $_FILES['gambar']['tmp_name'];
        // ekstensi
        $ekstensi = ["jpg", "jpeg", "png"];
        $ekstensiFoto = explode('.', $gambar);
        $ekstensiFoto = strtolower(end($ekstensiFoto));
        // if ($gambarError === 4) {
        //     echo "<script>
        // alert('Maaf file yang anda masukan tidak ada!');
        // </script>";
        //     return false;
        // }
        if ($sizeFoto > 2400000) {
            echo "<script>
        alert('Maaf file yang anda masukan terlalu besar!');
        </script>";
            return false;
        }
        if (!in_array($ekstensiFoto, $ekstensi)) {
            echo "<script>
        alert('Maaf file yang masukan bukan sebuah foto!');
        </script>";
            return false;
        }
        // mengubah nama foto
        $namaFoto = uniqid();
        $namaFoto .= ".";
        $namaFoto .= $ekstensiFoto;
        move_uploaded_file($tmpFoto, 'img/' . $namaFoto);
        return $namaFoto;
    }
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
}
// var_dump($_POST);
// var_dump($_FILES);
// var_dump(upload());
if ($aksi == "create") {
    $berita->create($judul, $konten, $gambar, $tgl_berita, $id_kategori);
    header("location:index.php");
} elseif ($aksi == "update") {
    $berita->update($id, $judul, $konten, $gambar, $tgl_berita, $id_kategori);
    header("location:index.php");
} elseif ($aksi == "delete") {
    $berita->delete($_GET['id']);
    header("location:index.php");
}


