<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Metode Weighted Product</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?page=wp">Home</a></li>
          <li class="breadcrumb-item active">Metode WP</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div>
              <b>
                <h6><b>MATRIX X</b></h6>
              </b>
              <table class="table">
                <thead>
                  <tr>
                    <th class="text-center"><i class="fa fa-arrow-down"></i> No</th>
                    <th class="text-center"><i class="fa fa-arrow-down"></i> Alternatif</th>
                    <th class="text-center"><i class="fa fa-arrow-down"></i> IPK</th>
                    <th class="text-center"><i class="fa fa-arrow-down"></i> Pengalaman Org</th>
                    <th class="text-center"><i class="fa fa-arrow-down"></i> Pengetahuan Org</th>
                    <th class="text-center"><i class="fa fa-arrow-down"></i> Motivasi Diri</th>
                    <th class="text-center"><i class="fa fa-arrow-down"></i> Kerja Sama</th>
                    <th class="text-center"><i class="fa fa-arrow-down"></i> Etika</th>
                    <th class="text-center"><i class="fa fa-arrow-down"></i> Komunikasi</th>
                    <th class="text-center"><i class="fa fa-arrow-down"></i> Tes Tulis</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  include '../config/koneksi.php';

                  $b = 0;
                  $sql = "SELECT*FROM penilaian ORDER BY nama ASC";
                  $hasil = $koneksi->query($sql);
                  $rows = $hasil->num_rows;
                  if ($rows > 0) {
                    while ($row = $hasil->fetch_row()) {
                  ?>
                      <tr>
                        <td align="center"><?php echo $b = $b + 1; ?></td>

                        <td align="center"><?= $row[1] ?></td>
                        <td align="center"><?= $row[2] ?></td>
                        <td align="center"><?= $row[3] ?></td>
                        <td align="center"><?= $row[4] ?></td>
                        <td align="center"><?= $row[5] ?></td>
                        <td align="center"><?= $row[6] ?></td>
                        <td align="center"><?= $row[7] ?></td>
                        <td align="center"><?= $row[8] ?></td>
                        <td align="center"><?= $row[9] ?></td>
                      </tr>
                  <?php }
                  } else {
                    echo "<tr>
                                        <td>Data Tidak Ada</td>
                                    <tr>";
                  } ?>
                </tbody>
              </table>
            </div>

            <!-- PERHITUNGAN VEKTOR S -->
            <div>
              <b>
                <h6><b>VEKTOR S</b></h6>
              </b>
              <table class="table">
                <thead>
                  <tr>
                    <th><i class="fa fa-arrow-down"></i> No</th>
                    <th><i class="fa fa-arrow-down"></i> Nama</th>
                    <th><i class="fa fa-arrow-down"></i> Nilai Vektor S</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $b = 0;
                  $B1 = '';
                  $B2 = '';
                  $B3 = '';
                  $B4 = '';
                  $B5 = '';
                  $B6 = '';
                  $B7 = '';
                  $B8 = '';
                  $B9 = '';
                  $nilai = '';
                  $nama = '';
                  $x = 0;
                  $sql = "SELECT * FROM pembobotan";
                  $hasil = $koneksi->query($sql);
                  $rows = $hasil->num_rows;
                  if ($rows > 0) {
                    $row = $hasil->fetch_row();
                    $B1 = $row[1];
                    $B2 = $row[2];
                    $B3 = $row[3];
                    $B4 = $row[4];
                    $B5 = $row[5];
                    $B6 = $row[6];
                    $B7 = $row[7];
                    $B8 = $row[8];
                  }
                  $sql = "TRUNCATE TABLE wp_vektors";
                  $hasil = $koneksi->query($sql);

                  $sql = "SELECT * FROM penilaian";
                  $hasil = $koneksi->query($sql);
                  $rows = $hasil->num_rows;
                  if ($rows > 0) {
                    while ($row = $hasil->fetch_row()) {
                      $nilai = 
                        pow($row[2], $B1) *
                        pow($row[3], $B2) *
                        pow($row[4], $B3) *
                        pow($row[5], $B4) *
                        pow($row[6], $B5) *
                        pow($row[7], $B6) *
                        pow($row[8], $B7) *
                        pow($row[9], $B8);

                      $nama = $row[1];

                      $sql1 = "INSERT INTO wp_vektors(nama,nilai_vektors) VALUES ('" . $nama . "','" . $nilai . "')";
                      $hasil1 = $koneksi->query($sql1);
                    }
                  }

                  $sql = "SELECT * FROM wp_vektors";
                  $hasil = $koneksi->query($sql);
                  $rows = $hasil->num_rows;
                  if ($rows > 0) {
                    while ($row = $hasil->fetch_row()) {
                  ?>

                      <!-- OUTPUT VEKTOR S -->
                      <tr>
                        <td>&nbsp&nbsp <?php echo $b = $b + 1; ?></td>
                        <td><?= $row[1] ?></td>
                        <td><?= $row[2] ?></td>

                      </tr>
                  <?php }
                  } else {
                    echo "<tr>
                                        <td>Data Tidak Ada</td>
                                    <tr>";
                  } ?>
                </tbody>
              </table>
            </div>

            <!-- PERHITUNGAN VEKTOR V -->
            <div>
              <b>
                <h6><b>VEKTOR V</b></h6>
              </b>
              <table class="table">
                <thead>
                  <tr>
                    <th><i class="fa fa-arrow-down"></i> No</th>
                    <th><i class="fa fa-arrow-down"></i> Nama</th>
                    <th><i class="fa fa-arrow-down"></i> Nilai Vektor V</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $b = 0;
                  $sql = "TRUNCATE TABLE wp_vektorv";
                  $hasil = $koneksi->query($sql);

                  $sql = "SELECT * FROM wp_vektors";
                  $hasil = $koneksi->query($sql);
                  $rows = $hasil->num_rows;

                  $qry = mysqli_query($koneksi, "SELECT SUM(nilai_vektors) as totalS from wp_vektors");
                  $data = mysqli_fetch_array($qry);

                  if ($rows > 0) {
                    while ($row = $hasil->fetch_row()) {

                      $nilaiv = round($row[2] / $data['totalS'], 5);

                      $nama = $row[1];
                      $sql1 = "INSERT INTO wp_vektorv(nama,nilai_vektorv) VALUES ('" . $nama . "','" . $nilaiv . "')";
                      $hasil1 = $koneksi->query($sql1);
                    }
                  }

                  $sql = "SELECT * FROM wp_vektorv";
                  $hasil = $koneksi->query($sql);
                  $rows = $hasil->num_rows;

                  $qry = mysqli_query($koneksi, "SELECT SUM(nilai_vektorv) as totalV from wp_vektorv");
                  $data = mysqli_fetch_array($qry);

                  if ($rows > 0) {
                    while ($row = $hasil->fetch_row()) {
                  ?>

                      <!-- OUTPUT VEKTOR V -->
                      <tr>
                        <td>&nbsp&nbsp <?php echo $b = $b + 1; ?></td>
                        <td><?= $row[1] ?></td>
                        <td><?= $row[2] ?></td>
                      </tr>
                  <?php }
                  } else {
                    echo "<tr>
                    <td>Data Tidak Ada</td>
                <tr>";
                  } ?>
                </tbody>
              </table>
            </div>

            <div>
              <b>
                <h6><b>PERANKINGAN</b></h6>
              </b>
              <table class="table">
                <thead>
                  <tr>
                    <th><i class="fa fa-arrow-down"></i> No</th>
                    <th><i class="fa fa-arrow-down"></i> Nama</th>
                    <th><i class="fa fa-arrow-down"></i> Nilai Vektor V</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $b = 0;
                  $sql = "SELECT*FROM wp_vektorv ORDER BY nilai_vektorv DESC";
                  $hasil = $koneksi->query($sql);
                  if ($hasil->num_rows > 0) {
                    while ($row = $hasil->fetch_row()) {
                  ?>
                      <tr>
                        <td>&nbsp&nbsp <?php echo $b = $b + 1; ?></td>
                        <td><?= $row[1] ?></td>
                        <td><?= $row[2] ?></td>
                      </tr>
                  <?php }
                  } else {
                    echo "<tr>
                                        <td>Data Tidak Ada</td>
                                    <tr>";
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->