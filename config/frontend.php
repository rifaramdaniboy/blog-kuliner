<?php
class Frontend extends Database
{
    public function index()
    {
        $blog = mysqli_query(
            $this->koneksi,
            "SELECT berita.id, berita.judul, berita.konten, berita.gambar, 
            berita.tgl_berita, kategori.nama_kategori 
            FROM (berita JOIN kategori ON kategori.id = 
            berita.id_kategori)ORDER BY berita.id DESC LIMIT 4"
        );
        return $blog;
    }

    public function blog()
    {
        $blog = mysqli_query(
            $this->koneksi,
            "SELECT berita.id, berita.judul, berita.konten, berita.gambar, 
            berita.tgl_berita, kategori.nama_kategori 
            FROM (berita JOIN kategori ON kategori.id = 
            berita.id_kategori) ORDER BY berita.id DESC"
        );
        return $blog;
    }

    public function single_blog($id)
    {
        $data_berita = mysqli_query(
            $this->koneksi,
            "SELECT berita.id, berita.judul, berita.konten, berita.gambar, berita.tgl_berita, 
            kategori.nama_kategori FROM (berita JOIN kategori ON kategori.id = berita.id_kategori) 
            where berita.id='$id'"
        );
        return $data_berita;
    }

}