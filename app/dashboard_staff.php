<?php
include '../config/koneksi.php';

$query = mysqli_query($koneksi, "SELECT count(id) AS jmlalt FROM tb_mhs");
$view  = mysqli_fetch_array($query);

$query2 = mysqli_query($koneksi, "SELECT count(id) AS jmlakun FROM user");
$view2  = mysqli_fetch_array($query2);
?>

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <h5 class="text-center">Hi <b><?php echo $_SESSION['nama']; ?></b>, Selamat Datang di Sistem Pendukung Keputusan Perekrutan Anggota BEM Universitas PGRI Madiun </h5>
    <br>
    <h5 class="text-justify">Sistem Pendukung Keputusan (SPK) untuk perekrutan anggota Badan Eksekutif Mahasiswa (BEM) di Universitas PGRI Madiun merupakan
       alat yang digunakan untuk membantu proses seleksi dan pemilihan calon anggota BEM. Sistem ini dirancang untuk memberikan rekomendasi
        yang objektif berdasarkan kriteria-kriteria tertentu yang telah ditentukan oleh panitia seleksi.</h5>
    <h5 class="text-justify"> Metode yang digunakan dalam SPK ini adalah metode Simple Additive Weighting (SAW) dan Weighted Product (WP)</h5>
    <br>

    <!-- asdasdasdad -->
    <!-- <div class="row">
      <div class="col-lg-3 col-6">
        
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?php //echo $view['jmlalt']; 
                ?></h3>

            <p>Jumlah Alternatif</p>
          </div>
          <div class="icon">
            <i class="ion ion-person"></i>
          </div>
          <a href="index.php?page=alternatif" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      
    </div> -->
    <!-- /.row -->
    
  </div><!-- /.container-fluid -->
</section>