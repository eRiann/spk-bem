<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Hasil Akhir Perhitungan</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
          <li class="breadcrumb-item active">Hasil Akhir</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <table id="example2" class="table">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Nilai SAW</th>
                  <th class="text-center">Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include '../config/koneksi.php';

                $r1 = #DFFF00;
                  $r2 = #FFBF00;

                  $no = 0;
                $query = "SELECT * FROM saw_ranking ORDER BY nilai_akhir DESC";
                $result = mysqli_query($koneksi, $query)
                  or die(mysqli_error($koneksi));

                while ($data = mysqli_fetch_array($result)) {
                  $no++;
                  if ($no <= 10){
                    $tdstyle = '#ABEBC6';
                    $status = 'DITERIMA';
                  } elseif ($no > 10 && $no <= 20) {
                    $tdstyle = '#AED6F1';
                    $status = 'DITERIMA';
                  } elseif ($no > 20 && $no <= 30) {
                    $tdstyle = '#F9E79F';
                    $status = 'DITERIMA';
                  } else {
                    $tdstyle = '#F5B7B1';
                    $status = 'TIDAK DITERIMA';
                  }
                  
                ?>
                
                  <tr>
                    <?php echo "<td style='background-color:{$tdstyle};' width='5%' class='text-center'> $no </td>"; ?>
                    <?php echo "<td style='background-color:{$tdstyle};' width='30%'> {$data['nama']} </td>"; ?>
                    <?php echo "<td style='background-color:{$tdstyle};' class='text-center'> {$data['nilai_akhir']} </td>"; ?>
                    <?php echo "<td style='background-color:{$tdstyle};' class='text-center' ><b> $status </b></td>"; ?>
                    
                  </tr>
                  
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Metode SAW</th>
                  <th class="text-center">Status</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      <!-- /.col-md-6 -->
      <div class="col-lg-6">
        <div class="card">
          <!-- <div class="card-header">
            <h5 class="m-0"></h5>
          </div> -->
          <div class="card-body">
            <table id="example3" class="table">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Nilai WP</th>
                  <th class="text-center">Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include '../config/koneksi.php';

                $no = 0;
                $query = "SELECT * FROM wp_vektorv ORDER BY nilai_vektorv DESC";
                $result = mysqli_query($koneksi, $query)
                  or die(mysqli_error($koneksi));

                while ($data = mysqli_fetch_array($result)) {
                  $no++;
                  if ($no <= 10){
                    $tdstyle = '#ABEBC6';
                    $status = 'DITERIMA';
                  } elseif ($no > 10 && $no <= 20) {
                    $tdstyle = '#AED6F1';
                    $status = 'DITERIMA';
                  } elseif ($no > 20 && $no <= 30) {
                    $tdstyle = '#F9E79F';
                    $status = 'DITERIMA';
                  } else {
                    $tdstyle = '#F5B7B1';
                    $status = 'TIDAK DITERIMA';
                  }
                  
                ?>
                  <tr>
                  <?php echo "<td style='background-color:{$tdstyle};' width='5%' class='text-center'> $no </td>"; ?>
                    <?php echo "<td style='background-color:{$tdstyle};' width='30%'> {$data['nama']} </td>"; ?>
                    <?php echo "<td style='background-color:{$tdstyle};' class='text-center'> {$data['nilai_vektorv']} </td>"; ?>
                    <?php echo "<td style='background-color:{$tdstyle};' class='text-center' ><b> $status </b></td>"; ?>
                    
                  </tr>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Metode WP</th>
                  <th class="text-center">Status</th>
                </tr>
              </tfoot>
            </table>
          </div>
          
        </div>
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->