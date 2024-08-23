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

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Ranking Tiap Metode</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table id="example1" class="table">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Nilai SAW</th>
                  
                  <th class="text-center">Nama</th>
                  <th class="text-center">Nilai WP</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include '../config/koneksi.php';

                $r1 = #DFFF00;
                $r2 = #FFBF00;

                $no = 0;
                $query = "SELECT s.nama, s.nilai_akhir, w.vnama, w.nilai_vektorv
                 FROM saw_ranking AS s
                 INNER JOIN wp_vektorv AS w ON w.id = s.id ORDER BY s.nilai_akhir DESC, w.nilai_vektorv DESC";
                $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
                //$rows = $query->num_rows;
                //if ($rows > 0){
                //   while
                //}
                while ($data = mysqli_fetch_array($result)) {
                    //for ($i=1; $i<=50; $i++){
                    //    if($i=3){
                    //        $r1;
                    //    } else if($i=6){
                    //        $r2;
                    //    }
                    //}
                  $no++;
                ?>
                  <tr>
                    <td width="5%" class="text-center"><?php echo $no; ?></td>
                    <td width="20%"><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['nilai_akhir']; ?></td>
                    
                    <td width="20%"><?php echo $data['vnama']; ?></td>
                    <td><?php echo $data['nilai_vektorv']; ?></td>
                  </tr>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Metode SAW</th>
                  
                  <th class="text-center">Nama</th>
                  <th class="text-center">Metode WP</th>
                </tr>
              </tfoot>
            </table>
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
 <!-- Main content -->
 <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's
                                content. AAA
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">Featured CCC</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Special title treatment</h6>

                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->