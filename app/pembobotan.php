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
            Bobot baru berhasil disimpan.
          </div>";
}
// jika alert = 2
// tampilkan pesan Sukses "Data user berhasil diubah"
elseif ($_GET['alert'] == 2) {
  echo "<div class='alert alert-success alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
            Bobot telah dihapus.
          </div>";
}
elseif ($_GET['alert'] == 3) {
  echo "<div class='alert alert-danger alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4>  <i class='icon fa fa-times-circle'></i> Gagal!</h4>
            Pastikan semua nilai bobot terisi.
          </div>";
}
elseif ($_GET['alert'] == 4) {
  echo "<div class='alert alert-danger alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4>  <i class='icon fa fa-times-circle'></i> Gagal!</h4>
            Pastikan bobot lama sudah terhapus.
          </div>";
}
?>

<!--START SCRIPT HITUNG-->
<script>
  function fungsiku() {
    var a = (document.getElementById("ipk_param").value).substring(0, 1);
    var b = (document.getElementById("pengalaman_param").value).substring(0, 1);
    var c = (document.getElementById("pengetahuan_param").value).substring(0, 1);
    var d = (document.getElementById("motivasi_param").value).substring(0, 1);
    var e = (document.getElementById("kerjasama_param").value).substring(0, 1);
    var f = (document.getElementById("etika_param").value).substring(0, 1);
    var g = (document.getElementById("komunikasi_param").value).substring(0, 1);
    var h = (document.getElementById("testulis_param").value).substring(0, 1);
    var total = Number(a) + Number(b) + Number(c) + Number(d) + Number(e) + Number(f) + Number(g) + Number(h);
    document.getElementById("ipk").value = (Number(a) / total).toFixed(5);
    document.getElementById("pengalaman").value = (Number(b) / total).toFixed(5);
    document.getElementById("pengetahuan").value = (Number(c) / total).toFixed(5);
    document.getElementById("motivasi").value = (Number(d) / total).toFixed(5);
    document.getElementById("kerjasama").value = (Number(e) / total).toFixed(5);
    document.getElementById("etika").value = (Number(f) / total).toFixed(5);
    document.getElementById("komunikasi").value = (Number(g) / total).toFixed(5);
    document.getElementById("testulis").value = (Number(h) / total).toFixed(5);
  }
</script>
<!--END SCRIPT HITUNG-->

<!--START SCRIPT INSERT-->
<?php

include '../config/koneksi.php';

if (isset($_POST['submit'])) {
  $ipk = $_POST['ipk'];
  $pengalaman = $_POST['pengalaman'];
  $pengetahuan = $_POST['pengetahuan'];
  $motivasi = $_POST['motivasi'];
  $kerjasama = $_POST['kerjasama'];
  $etika = $_POST['etika'];
  $komunikasi = $_POST['komunikasi'];
  $testulis = $_POST['testulis'];
  if (($ipk == "") or
    ($pengalaman == "") or
    ($pengetahuan == "") or
    ($motivasi == "") or
    ($kerjasama == "") or
    ($etika == "") or
    ($komunikasi == "") or
    ($testulis == "")
  ) {
    echo "<script>
              alert('Tolong Lengkapi Data yang Ada!');
              </script>";
  } else {
    $sql = "SELECT * FROM pembobotan";
    $hasil = $koneksi->query($sql);
    $rows = $hasil->num_rows;
    if ($rows > 0) {
      echo "<script>
                alert('Hapus Bobot Lama untuk Membuat Bobot Baru');
                </script>";
    } else {
      $sql = "INSERT INTO pembobotan(
                  ipk,pengalaman,pengetahuan,motivasi,kerjasama,etika,komunikasi,testulis)
                  values ('" . $ipk . "',
                  '" . $pengalaman . "',
                  '" . $pengetahuan . "',
                  '" . $motivasi . "',
                  '" . $kerjasama . "',
                  '" . $etika . "',
                  '" . $komunikasi . "',
                  '" . $testulis . "')";
      $hasil = $koneksi->query($sql);
      echo "<script>
                alert('Bobot Berhasil di Inputkan!');
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
        <h1>Pembobotan</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
          <li class="breadcrumb-item active">Input</li>
          <li class="breadcrumb-item active">Pembobotan</li>
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
            <h3 class="card-title">Menentukan Bobot Kriteria</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form class="form-validate form-horizontal" id="register_form" method="post" action="index.php?page=pembobotan&alert=1">
              <div class="form-group row">
                <label class="col-sm-2"><b>Kriteria</b></label> <!-- col-form-label -->
                <div class="col-sm-3">
                  <label><b>Bobot</b></label>
                </div>
                <div class="col-sm-2">
                  <label><b>Perbaikan Bobot</b></label>
                </div>
              </div>
              <div class="form-group row">
                <p class="col-sm-2 col-form-label">IPK</p>
                <div class="col-sm-3">
                  <select class="form-control" name="ipk_param" id="ipk_param">
                    <option>1. Sangat Rendah</option>
                    <option>2. Rendah</option>
                    <option>3. Cukup</option>
                    <option>4. Tinggi</option>
                    <option>5. Sangat Tinggi</option>
                  </select>
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" name="ipk" id="ipk">
                </div>
              </div>
              <div class="form-group row">
                <p class="col-sm-2 col-form-label">Pengalaman Organisasi</p>
                <div class="col-sm-3">
                  <select class="form-control" name="pengalaman_param" id="pengalaman_param">
                    <option>1. Sangat Rendah</option>
                    <option>2. Rendah</option>
                    <option>3. Cukup</option>
                    <option>4. Tinggi</option>
                    <option>5. Sangat Tinggi</option>
                  </select>
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" name="pengalaman" id="pengalaman">
                </div>
              </div>
              <div class="form-group row">
                <p class="col-sm-2 col-form-label">Pengetahuan Organisasi</p>
                <div class="col-sm-3">
                  <select class="form-control" name="pengetahuan_param" id="pengetahuan_param">
                    <option>1. Sangat Rendah</option>
                    <option>2. Rendah</option>
                    <option>3. Cukup</option>
                    <option>4. Tinggi</option>
                    <option>5. Sangat Tinggi</option>
                  </select>
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" name="pengetahuan" id="pengetahuan">
                </div>
              </div>
              <div class="form-group row">
                <p class="col-sm-2 col-form-label">Motivasi Diri</p>
                <div class="col-sm-3">
                  <select class="form-control" name="motivasi_param" id="motivasi_param">
                    <option>1. Sangat Rendah</option>
                    <option>2. Rendah</option>
                    <option>3. Cukup</option>
                    <option>4. Tinggi</option>
                    <option>5. Sangat Tinggi</option>
                  </select>
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" name="motivasi" id="motivasi">
                </div>
              </div>
              <div class="form-group row">
                <p class="col-sm-2 col-form-label">Kerja Sama</p>
                <div class="col-sm-3">
                  <select class="form-control" name="kerjasama_param" id="kerjasama_param">
                    <option>1. Sangat Rendah</option>
                    <option>2. Rendah</option>
                    <option>3. Cukup</option>
                    <option>4. Tinggi</option>
                    <option>5. Sangat Tinggi</option>
                  </select>
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" name="kerjasama" id="kerjasama">
                </div>
              </div>
              <div class="form-group row">
                <p class="col-sm-2 col-form-label">Etika</p>
                <div class="col-sm-3">
                  <select class="form-control" name="etika_param" id="etika_param">
                    <option>1. Sangat Rendah</option>
                    <option>2. Rendah</option>
                    <option>3. Cukup</option>
                    <option>4. Tinggi</option>
                    <option>5. Sangat Tinggi</option>
                  </select>
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" name="etika" id="etika">
                </div>
              </div>
              <div class="form-group row">
                <p class="col-sm-2 col-form-label">Komunikasi</p>
                <div class="col-sm-3">
                  <select class="form-control" name="komunikasi_param" id="komunikasi_param">
                    <option>1. Sangat Rendah</option>
                    <option>2. Rendah</option>
                    <option>3. Cukup</option>
                    <option>4. Tinggi</option>
                    <option>5. Sangat Tinggi</option>
                  </select>
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" name="komunikasi" id="komunikasi">
                </div>
              </div>
              <div class="form-group row">
                <p class="col-sm-2 col-form-label">Tes Tulis</p>
                <div class="col-sm-3">
                  <select class="form-control" name="testulis_param" id="testulis_param">
                    <option>1. Sangat Rendah</option>
                    <option>2. Rendah</option>
                    <option>3. Cukup</option>
                    <option>4. Tinggi</option>
                    <option>5. Sangat Tinggi</option>
                  </select>
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" name="testulis" id="testulis">
                </div>
                <div class="col-sm-2">
                  <button class="btn btn-outline-success" type="button" id="hitung" onclick="fungsiku()" name="hitung"><i class="fa fa-calculator"></i> Hitung</button>
                </div>
              </div>
              <div class="mb-4">
                <button class="btn btn-outline-primary" type="submit" name="submit"><i class="fa fa-save"></i> Submit</button>
              </div>
            </form>
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center"><i class="fa fa-arrow-down"></i> IPK</th>
                  <th class="text-center"><i class="fa fa-arrow-down"></i> Pengalaman Org</th>
                  <th class="text-center"><i class="fa fa-arrow-down"></i> Pengetahuan Org</th>
                  <th class="text-center"><i class="fa fa-arrow-down"></i> Motivasi Diri</th>
                  <th class="text-center"><i class="fa fa-arrow-down"></i> Kerja Sama</th>
                  <th class="text-center"><i class="fa fa-arrow-down"></i> Etika</th>
                  <th class="text-center"><i class="fa fa-arrow-down"></i> Komunikasi</th>
                  <th class="text-center"><i class="fa fa-arrow-down"></i> Tes Tulis</th>
                  <th class="text-center"><i class="fa fa-cogs"></i> Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                $query = "SELECT * FROM pembobotan";
                $result = $koneksi->query($query);
                $rows = $result->num_rows;
                if ($rows > 0) {
                  while ($row = $result->fetch_row()) {
                ?>
                    <tr>
                      <td Align="center"><?= $row[1] ?></td>
                      <td Align="center"><?= $row[2] ?></td>
                      <td Align="center"><?= $row[3] ?></td>
                      <td Align="center"><?= $row[4] ?></td>
                      <td Align="center"><?= $row[5] ?></td>
                      <td Align="center"><?= $row[6] ?></td>
                      <td Align="center"><?= $row[7] ?></td>
                      <td Align="center"><?= $row[8] ?></td>
                      <td Align="center">
                        <div class="btn-group">
                          <a class="btn btn-danger text-white" onclick="hapus_bobot(<?php echo $row[0]; ?>)">
                            <i class="fa fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                <?php }
                } else {
                  echo "<tr>
                  <td>Data Tidak Ada</td>
                  </tr>";
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
  function hapus_bobot(data_bobot) {
    //alert('ok');
    //window.location=("form/hapus_alt.php?id="+data_id);
    Swal.fire({
      title: "Apakah yakin ingin menghapus data bobot?",
      //text: "Data Alternatif akan dihapus!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Ya, Hapus!"
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: "Data bobot sudah terhapus",
          //text: "Your file has been deleted.",
          icon: "success"
        });
        window.location=("form/hapus_bobot.php?id="+data_bobot);
      }
    });
  }
</script>