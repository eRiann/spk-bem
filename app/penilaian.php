<?php

if (empty($_GET['alert'])) {
    echo "";
}
// jika alert = 1
// tampilkan pesan Sukses "Data user baru berhasil disimpan"
elseif ($_GET['alert'] == 1) {
    echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data Penilaian berhasil dihapus.
            </div>";
}
?>

<!--START SCRIPT INSERT-->
<?php

include '../config/koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    // $peringkat = $_POST['peringkat'];
    $ipk = substr($_POST['ipk'], 1, 1);
    $pengalaman = substr($_POST['pengalaman'], 1, 1);
    $pengetahuan = substr($_POST['pengetahuan'], 1, 1);
    $motivasi = substr($_POST['motivasi'], 1, 1);
    $kerjasama = substr($_POST['kerjasama'], 1, 1);
    $etika = substr($_POST['etika'], 1, 1);
    $komunikasi = substr($_POST['komunikasi'], 1, 1);
    $testulis = substr($_POST['testulis'], 1, 1);
    if ($ipk == "" || $pengalaman == "" || $pengetahuan == "" || $motivasi == "" || $kerjasama == "" || $etika == "" || $komunikasi == "" || $testulis == "") {
        echo "<script>
    alert('Tolong Lengkapi Data yang Ada!');
    </script>";
    } else {
        $sql = "SELECT*FROM penilaian WHERE nama='$nama'";
        $hasil = $koneksi->query($sql);
        $rows = $hasil->num_rows;
        if ($rows > 0) {
            $row = $hasil->fetch_row();
            echo "<script>
      alert('Nilai dari $nama sudah ada!');
      </script>";
        } else {
            //insert name
            $sql = "INSERT INTO penilaian(
      nama,ipk,pengalaman,pengetahuan,motivasi,kerjasama,etika,komunikasi,testulis)
      values ('" . $nama . "',
      '" . $ipk . "',
      '" . $pengalaman . "',
      '" . $pengetahuan . "',
      '" . $motivasi . "',
      '" . $kerjasama . "',
      '" . $etika . "',
      '" . $komunikasi . "',
      '" . $testulis . "')";
            $hasil = $koneksi->query($sql);
            echo "<script>
      alert('Nilai Berhasil di Tambahkan!');
      </script>";
        }
    }
}
?>
<!-- END SCRIPT INSERT-->

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Penilaian</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Input</li>
                    <li class="breadcrumb-item active">Penilaian</li>
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
                        <h3 class="card-title">Menentukan Nilai dari Alternatif</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="nama">
                                        <?php
                                        //load nama
                                        $sql = "SELECT * FROM tb_mhs";
                                        $hasil = $koneksi->query($sql);
                                        $rows = $hasil->num_rows;
                                        if ($rows > 0) {
                                            while ($row = mysqli_fetch_array($hasil)) :; {
                                                } ?> <option><?php echo $row[1]; ?></option>
                                        <?php endwhile;
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">IPK</label>
                                <div class="col-sm-4">
                                    <select class=" form-control" name="ipk">
                                        <option>(1) 2.45 - 3.00</option>
                                        <option>(2) 3.01 - 3.15</option>
                                        <option>(3) 3.16 - 3.45</option>
                                        <option>(4) 3.46 - 3.75</option>
                                        <option>(5) 3.76 - 4.00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pengalaman Organisasi</label>
                                <div class="col-sm-4">
                                    <select class=" form-control" name="pengalaman">
                                        <option>(1) Sangat Sedikit</option>
                                        <option>(2) Sedikit</option>
                                        <option>(3) Sedang</option>
                                        <option>(4) Banyak</option>
                                        <option>(5) Sangat Banyak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pengetahuan Organisasi</label>
                                <div class="col-sm-4">
                                    <select class=" form-control" name="pengetahuan">
                                        <option>(1) Sangat Sedikit</option>
                                        <option>(2) Sedikit</option>
                                        <option>(3) Sedang</option>
                                        <option>(4) Banyak</option>
                                        <option>(5) Sangat Banyak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Motivasi Diri</label>
                                <div class="col-sm-4">
                                    <select class=" form-control" name="motivasi">
                                        <option>(1) Sangat Buruk</option>
                                        <option>(2) Buruk</option>
                                        <option>(3) Cukup</option>
                                        <option>(4) Baik</option>
                                        <option>(5) Sangat Baik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kerja Sama</label>
                                <div class="col-sm-4">
                                    <select class=" form-control" name="kerjasama">
                                        <option>(1) Sangat Buruk</option>
                                        <option>(2) Buruk</option>
                                        <option>(3) Cukup</option>
                                        <option>(4) Baik</option>
                                        <option>(5) Sangat Baik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Etika</label>
                                <div class="col-sm-4">
                                    <select class=" form-control" name="etika">
                                        <option>(1) Sangat Buruk</option>
                                        <option>(2) Buruk</option>
                                        <option>(3) Cukup</option>
                                        <option>(4) Baik</option>
                                        <option>(5) Sangat Baik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Komunikasi</label>
                                <div class="col-sm-4">
                                    <select class=" form-control" name="komunikasi">
                                        <option>(1) Sangat Buruk</option>
                                        <option>(2) Buruk</option>
                                        <option>(3) Cukup</option>
                                        <option>(4) Baik</option>
                                        <option>(5) Sangat Baik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tes Tulis</label>
                                <div class="col-sm-4">
                                    <select class=" form-control" name="testulis">
                                        <option>(1) Sangat Buruk</option>
                                        <option>(2) Buruk</option>
                                        <option>(3) Cukup</option>
                                        <option>(4) Baik</option>
                                        <option>(5) Sangat Baik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4">
                                <button type="submit" name="submit" class="btn btn-outline-primary"><i class="fa fa-save"></i> Submit</button>
                            </div>
                        </form>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><i class="fa fa-arrow-down"></i> No</th>
                                    <th><i class="fa fa-arrow-down"></i> Alternatif</th>
                                    <th><i class="fa fa-arrow-down"></i> IPK</th>
                                    <th><i class="fa fa-arrow-down"></i> Pengalaman Org</th>
                                    <th><i class="fa fa-arrow-down"></i> Pengetahuan Org</th>
                                    <th><i class="fa fa-arrow-down"></i> Motivasi Diri</th>
                                    <th><i class="fa fa-arrow-down"></i> Kerja Sama</th>
                                    <th><i class="fa fa-arrow-down"></i> Etika</th>
                                    <th><i class="fa fa-arrow-down"></i> Komunikasi</th>
                                    <th><i class="fa fa-arrow-down"></i> Tes Tulis</th>
                                    <th><i class="fa fa-cogs"></i> Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
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
                                            <td align="center">
                                                <div class="btn-group">
                                                    <a onclick="hapus_nilai(<?php echo $row[0]; ?>)" class="btn btn-danger text-white">
                                                    <!-- <a class="btn btn-danger" href="form/hapus_penilaian.php?id= $row[0] "> -->
                                                        <i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
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
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
</section>
<!-- /.content -->

<script>
  function hapus_nilai(data_nilai) {
    Swal.fire({
      title: "Apakah yakin ingin menghapus nilai?",
      //text: "Data Alternatif akan dihapus!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Ya, Hapus!"
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: "Nilai sudah terhapus",
          //text: "Your file has been deleted.",
          icon: "success"
        });
        window.location=("form/hapus_nilai.php?id="+data_nilai);
      }
    });
  }
</script>