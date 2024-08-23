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
              Data Alternatif baru berhasil disimpan.
            </div>";
}
// jika alert = 2
// tampilkan pesan Sukses "Data user berhasil diubah"
elseif ($_GET['alert'] == 2) {
    echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data Alternatif berhasil diubah.
            </div>";
}
elseif ($_GET['alert'] == 3) {
  echo "<div class='alert alert-success alert-dismissable'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
          Data Alternatif berhasil dihapus.
        </div>";
}
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Alternatif</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
          <li class="breadcrumb-item active">Input</li>
          <li class="breadcrumb-item active">Alternatif</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Alternatif</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
              Tambah Data
            </button>
            <br></br>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Semester</th>
                  <th class="text-center">Program Studi</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM tb_mhs");
                while ($mhs = mysqli_fetch_array($query)) {
                  $no++;
                ?>
                  <tr>
                    <td width="5%" class="text-center"><?php echo $no; ?></td>
                    <td><?php echo $mhs['nama']; ?></td>
                    <td width="15%" class="text-center"><?php echo $mhs['semester']; ?></td>
                    <td class="text-center"><?php echo $mhs['prodi']; ?></td>
                    <td class="text-center">
                      <a href="index.php?page=edit_alt&& id=<?php echo $mhs['id']; ?>" class="btn btn-sm btn-success text-white">Edit</a>
                      <a onclick="hapus_alt(<?php echo $mhs['id']; ?>)" class="btn btn-sm btn-danger text-white">Hapus</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Semester</th>
                  <th class="text-center">Program Studi</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </tfoot>
            </table>
            </br>
            <!-- /.card-body -->
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

<!-- TAMBAH ALTERNATIF -->
<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Alternatif</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="get" action="form/tambah_alt.php">
        <div class="modal-body">
          <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama" required>
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Semester</label>
            <select id="inputState" class="form-control" placeholder="Semester" name="semester">
              <option selected></option>
              <option>3</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputState">Program Studi</label>
            <select id="inputState" class="form-control" name="prodi">
              <option selected></option>
              <option>Akuntansi</option>
              <option>Bimbingan Konseling</option>
              <option>Farmasi</option>
              <option>Hukum</option>
              <option>Ilmu Keolahragaan</option>
              <option>Manajemen</option>
              <option>Pendidikan Akuntansi</option>
              <option>Pendidikan Bahasa dan Sastra Indonesia</option>
              <option>Pendidikan Bahasa Inggris</option>
              <option>Pendidikan Biologi</option>
              <option>Pendidikan Ekonomi</option>
              <option>Pendidikan Fisika</option>
              <option>PG PAUD</option>
              <option>PGSD</option>
              <option>Pendidikan IPA</option>
              <option>Pendidikan Matematika</option>
              <option>Pendidikan Pancasila dan Kewarganegaraan</option>
              <option>Pendidikan Sejarah</option>
              <option>Pendidikan Teknik Elektro</option>
              <option>Sistem Informasi</option>
              <option>Teknik Elektro</option>
              <option>Teknik Industri</option>
              <option>Teknik Informatika</option>
              <option>Teknik Kimia</option>
            </select>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary swalDefaultSuccess">Simpan Data</button>
        </div>
    </div>
    </form>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<script>
  function hapus_alt(data_alt) {
    //alert('ok');
    //window.location=("form/hapus_alt.php?id="+data_id);
    Swal.fire({
      title: "Apakah yakin ingin menghapus data alternatif?",
      //text: "Data Alternatif akan dihapus!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Ya, Hapus!"
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: "Data alternatif sudah terhapus",
          //text: "Your file has been deleted.",
          icon: "success"
        });
        window.location=("form/hapus_alt.php?id="+data_alt);
      }
    });
  }
</script>