<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if (!$_SESSION['nama']) {
  header('Location: ../index.php?session=expired');
}
include 'header.php'; ?>
<?php include '../config/koneksi.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="dist/img/logo.png" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SPK BEM</span>
      </a>

      <!-- Sidebar -->
      <?php include 'sidebar.php'; ?>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!-- Main content -->
      <?php
      if (isset($_GET['page'])) {
        if ($_GET['page'] == 'dashboard_admin') {
          include 'dashboard_admin.php';
        } else if ($_GET['page'] == 'dashboard_staff') {
          include 'dashboard_staff.php';
        } else if ($_GET['page'] == 'alternatif') {
          include 'alternatif.php';
        } else if ($_GET['page'] == 'edit_alt') {
          include 'form/edit_alt.php';
        } else if ($_GET['page'] == 'pembobotan') {
          include 'pembobotan.php';
        } else if ($_GET['page'] == 'penilaian') {
          include 'penilaian.php';
        } else if ($_GET['page'] == 'saw') {
          include 'saw.php';
        } else if ($_GET['page'] == 'wp') {
          include 'wp.php';
        } else if ($_GET['page'] == 'hasil_akhir') {
          include 'hasil_akhir.php';
        } else if ($_GET['page'] == 'manajemen_akun') {
          include 'manajemen_akun.php';
        } else if ($_GET['page'] == 'edit_akun') {
          include 'form/edit_akun.php';


        } else {
          include 'dashboard_admin.php';
        }
      }
      ?>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include 'footer.php'; ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->


</body>

</html>