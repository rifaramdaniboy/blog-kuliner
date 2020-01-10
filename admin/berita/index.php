<?php
session_start();
if (!$_SESSION['login']) {
    echo "<script type='text/javascript'>
        alert('Maaf anda harus login terlebih dahulu!');
            window.location = '../../login.php'
        </script>";
} else {
    include('../../config/koneksi.php');
    $user = new Database();
    $user = mysqli_query(
        $user->koneksi,
        "select * from user where password='$_SESSION[login]'"
    );
    // var_dump($_SESSION['login']);
    $user = mysqli_fetch_array($user); ?>

    <!-- Header -->
    <?php include('../../layouts/includes/head.php') ?>
    <!-- End Header -->

    <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
        <!-- Navbar -->
        <?php include('../../layouts/includes/navbar.php') ?>
        <!-- End Navbar -->
        <div class="app-body">
            <!-- Sidebar -->
            <?php include('../../layouts/includes/sidebar.php') ?>
            <!-- End Sidebar -->
            <!-- Main Content -->
            <main class="main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">
                        <a href="#">Admin</a>
                    </li>
                    <li class="breadcrumb-item active">Berita</li>
                    <!-- Breadcrumb Menu-->
                </ol>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">Daftar Kategori
                                  <a href="create.php" class="btn btn-sm btn-info float-md-right">Tambah</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="data-table">
                                            <thead>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Kategori</th>
                                                <th>Foto Berita</th>
                                                <th>Tanggal Berita</th>
                                                <th colspan="3">Aksi</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                 $no = 1;
                                                 $berita = new Berita(); 
                                                 foreach ($berita->index() as $data) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?php echo $data['judul']; ?></td>
                                                        <td><?php echo $data['nama_kategori'];?></td>
                                                        <td> <img src="/blog-kuliner/admin/berita/img/<?php echo $data['gambar']; ?>" alt="" style="width:75px; height:50px;"></td>
                                                        <td><?php echo $data['tgl_berita']; ?></td>
                                                        <td>
                                                            <a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Delete</a> |
                                                            <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-warning">Edit</a> |
                                                            <a href="show.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-success">Show</a>

                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- End Main Conten -->

        </div>
        <!-- Footer -->
        <?php include('../../layouts/includes/footer.php') ?>
        <!-- End Footer -->
        <!-- CoreUI and necessary plugins-->
        <!-- Scripts -->
        <?php include('../../layouts/includes/scripts.php') ?>
        <!-- End Scripts -->
    </body>

    </html>

<?php
} ?>