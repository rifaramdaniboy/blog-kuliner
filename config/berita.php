<?php
class Berita extends Database
{
    // Menampilkan Semua Data
    public function index()
    {
        $data_berita = mysqli_query(
            $this->koneksi,
            "SELECT berita.id, berita.judul, berita.konten, berita.gambar, 
            berita.tgl_berita, kategori.nama_kategori 
            FROM (berita JOIN kategori ON kategori.id = 
            berita.id_kategori)"
        );
        // var_dump($data_berita);
        return $data_berita;
    }
    public function get_kategori()
    {
        $data_kategori = mysqli_query($this->koneksi, "SELECT * FROM kategori");
        // var_dump($kategori);
        return $data_kategori;
    }
    // Menambah Data
    public function create($judul, $konten, $gambar, $tgl_berita, $id_kategori) 
    {
        mysqli_query(
            $this->koneksi,
            "INSERT INTO berita values(null,'$judul', '$konten', 
            '$gambar', '$tgl_berita','$id_kategori')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $data_berita = mysqli_query(
            $this->koneksi,
            "SELECT berita.id, berita.judul, berita.konten, berita.gambar, berita.tgl_berita, 
            kategori.nama_kategori FROM (berita JOIN kategori ON kategori.id = berita.id_kategori)
            where berita.id = '$id'"
        );
        return $data_berita;
    }
    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $data_berita = mysqli_query(
            $this->koneksi,
            "SELECT * FROM berita WHERE id='$id'"
        );
        return $data_berita;
    }
    // mengupdate data berdasarkan id
    public function update($id, $judul, $konten, $gambar, $tgl_berita, $id_kategori)
    {
        mysqli_query(
            $this->koneksi,
            "UPDATE berita SET judul='$judul', konten='$konten', gambar='$gambar', tgl_berita='$tgl_berita',
            id_kategori='$id_kategori' where id='$id'"
        );
    }
    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "DELETE FROM berita WHERE id='$id'");
    }
}