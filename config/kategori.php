<?php
class Kategori extends Database
{
    // Menampilkan Semua Data
    public function index()
    {
        $datakategori = mysqli_query(
            $this->koneksi,
            "select * from kategori"
        );
        // var_dump($datakategori);
        return $datakategori;
    }
    // Menambah Data
    public function create($nama_kategori)
    {
        mysqli_query(
            $this->koneksi,
            "insert into kategori values(null,'$nama_kategori')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datakategori = mysqli_query(
            $this->koneksi,
            "select * from kategori where id='$id'"
        );
        return $datakategori;
    }
    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datakategori = mysqli_query(
            $this->koneksi,
            "select * from kategori where id='$id'"
        );
        return $datakategori;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama_kategori)
    {
        mysqli_query(
            $this->koneksi,
            "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id='$id'"
        );
    }
    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, 
            "DELETE from kategori WHERE id='$id'");
    }
}