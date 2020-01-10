<?php
session_start();
if(!$_SESSION['login']){
  echo "<script type='text/javascript'>
  alert('Maaf Anda Harus Login Terlebih Dahulu!');
  window.location = '../login.php' </script>";
}else{
  include('../config/koneksi.php');
  $user = new Database();
  $user = mysqli_query ($user->koneksi, 
    "select * from user where password='$_SESSION[login]'"

    );
  // var_dump($_SESSION['login']);
    $user = mysqli_fetch_array($user);

?>

<!-- Header -->
<?php include('../layouts/includes/head.php') ?>
<!-- End Header -->
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  <!-- Navbar -->
  <?php include('../layouts/includes/navbar.php') ?>
  <!-- End Navbar -->
  <!-- Sidebar -->
  <?php include('../layouts/includes/sidebar.php') ?>
  <!-- End Sidebar -->
  <div class="app-body">
    
      <!-- Main Content -->
    
            <main class="main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">
                        <a href="#">Admin</a>
                    </li>
                    <li class="breadcrumb-item active">Kategori</li>
  
            </main>
      <!-- End Main Content -->
  </div>

  <!-- CoreUI and necessary plugines -->
<!-- Script -->
<?php include('../layouts/includes/scripts.php') ?>
<!-- End Script -->
</body>
</html>

<?php 
} 
?>