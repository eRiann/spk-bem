<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Metode Simple Additive Weighting</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
          <li class="breadcrumb-item active">Input</li>
          <li class="breadcrumb-item active">Metode SAW</li>
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
            <div>
              <b>
                <h6><b>NORMALISASI</b></h6>
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
                  $sql = "SELECT*FROM penilaian";
                  $hasil = $koneksi->query($sql);
                  $rows = $hasil->num_rows;
                  if ($rows > 0) {
                    $b = 0;
                    $C1 = '';
                    $C2 = '';
                    $C3 = '';
                    $C4 = '';
                    $C5 = '';
                    $C6 = '';
                    $C7 = '';
                    $C8 = '';

                    $sql = "SELECT*FROM penilaian ORDER BY ipk DESC";
                    $hasil = $koneksi->query($sql);
                    $row = $hasil->fetch_row();
                    $C1 = $row[2];
                    // $sql = "SELECT*FROM penilaian ORDER BY ukuran ASC";
                    // $hasil = $koneksi->query($sql);
                    // $row = $hasil->fetch_row();
                    $sql = "SELECT*FROM penilaian ORDER BY pengalaman DESC";
                    $hasil = $koneksi->query($sql);
                    $row = $hasil->fetch_row();
                    $C2 = $row[3];
                    $sql = "SELECT*FROM penilaian ORDER BY pengetahuan DESC";
                    $hasil = $koneksi->query($sql);
                    $row = $hasil->fetch_row();
                    $C3 = $row[4];
                    $sql = "SELECT*FROM penilaian ORDER BY motivasi DESC";
                    $hasil = $koneksi->query($sql);
                    $row = $hasil->fetch_row();
                    $C4 = $row[5];
                    $sql = "SELECT*FROM penilaian ORDER BY kerjasama DESC";
                    $hasil = $koneksi->query($sql);
                    $row = $hasil->fetch_row();
                    $C5 = $row[6];
                    $sql = "SELECT*FROM penilaian ORDER BY etika DESC";
                    $hasil = $koneksi->query($sql);
                    $row = $hasil->fetch_row();
                    $C6 = $row[7];
                    $sql = "SELECT*FROM penilaian ORDER BY komunikasi DESC";
                    $hasil = $koneksi->query($sql);
                    $row = $hasil->fetch_row();
                    $C7 = $row[8];
                    $sql = "SELECT*FROM penilaian ORDER BY testulis DESC";
                    $hasil = $koneksi->query($sql);
                    $row = $hasil->fetch_row();
                    $C8 = $row[9];
                  } else {
                    echo "<tr>
                                        <td>Data Tidak Ada</td>
                                    <tr>";
                  }

                  $sql = "SELECT*FROM penilaian";
                  $hasil = $koneksi->query($sql);
                  $rows = $hasil->num_rows;
                  if ($rows > 0) {
                    while ($row = $hasil->fetch_row()) {
                  ?>
                      <tr>
                        <td align="center"><?php echo $b = $b + 1; ?></td>
                        <td align="center"><?= $row[1] ?></td>
                        <td align="center"><?= round($row[2] / $C1, 5) ?></td>
                        <!-- COST <td align="center"> round($C2 / $row[2], 2) </td> -->
                        <td align="center"><?= round($row[3] / $C2, 5) ?></td>
                        <td align="center"><?= round($row[4] / $C3, 5) ?></td>
                        <td align="center"><?= round($row[5] / $C4, 5) ?></td>
                        <td align="center"><?= round($row[6] / $C5, 5) ?></td>
                        <td align="center"><?= round($row[7] / $C6, 5) ?></td>
                        <td align="center"><?= round($row[8] / $C7, 5) ?></td>
                        <td align="center"><?= round($row[9] / $C8, 5) ?></td>
                      </tr>
                  <?php }
                  }  ?>
                </tbody>
              </table>
            </div>
            <div>
              <b>
                <h6><b>NILAI PREFERENSI</b></h6>
              </b>
              <table class="table">
                <thead>
                  <tr>
                    <th><i class="fa fa-arrow-down"></i> No</th>
                    <th><i class="fa fa-arrow-down"></i> Nama</th>
                    <th><i class="fa fa-arrow-down"></i> Nilai Preferensi (Vi)</th>
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
                  $sql = "TRUNCATE TABLE saw_ranking";
                  $hasil = $koneksi->query($sql);

                  $sql = "SELECT * FROM penilaian";
                  $hasil = $koneksi->query($sql);
                  $rows = $hasil->num_rows;
                  if ($rows > 0) {
                    while ($row = $hasil->fetch_row()) {
                      $nilai = round((($row[2] / $C1) * $B1) +
                        // (($C2 / $row[2]) * $B2) +
                        (($row[3] / $C2) * $B2) +
                        (($row[4] / $C3) * $B3) +
                        (($row[5] / $C4) * $B4) +
                        (($row[6] / $C5) * $B5) +
                        (($row[7] / $C6) * $B6) +
                        (($row[8] / $C7) * $B7) +
                        (($row[9] / $C8) * $B8), 5);
                      $nama = $row[1];
                      $sql1 = "INSERT INTO saw_ranking(nama,nilai_akhir) VALUES ('" . $nama . "','" . $nilai . "')";
                      $hasil1 = $koneksi->query($sql1);
                    }
                  }
                  $sql = "SELECT * FROM saw_ranking";
                  $hasil = $koneksi->query($sql);
                  $rows = $hasil->num_rows;
                  if ($rows > 0) {
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
            <div>
              <b>
                <h6><b>PERANKINGAN</b></h6>
              </b>
              <table class="table">
                <thead>
                  <tr>
                    <th><i class="fa fa-arrow-down"></i> No</th>
                    <th><i class="fa fa-arrow-down"></i> Nama</th>
                    <th><i class="fa fa-arrow-down"></i> Nilai Preferensi (Vi)</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $b = 0;
                  $sql = "SELECT*FROM saw_ranking ORDER BY nilai_akhir DESC";
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