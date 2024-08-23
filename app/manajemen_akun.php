<?php
// fungsi untuk menampilkan pesan
// jika alert = "" (kosong)
// tampilkan pesan "" (kosong)
if (empty($_GET['alert'])) {
    echo "";
}
// jika alert = 1
// tampilkan pesan Sukses "Data user baru berhasil disimpan"
elseif ($_GET['alert'] == 1) {
    echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data user baru berhasil disimpan.
            </div>";
}
// jika alert = 2
// tampilkan pesan Sukses "Data user berhasil diubah"
elseif ($_GET['alert'] == 2) {
    echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data user berhasil diubah.
            </div>";
}
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Manajemen Akun</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Manajemen Akun</li>
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
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                            Tambah Akun
                        </button>
                        <br></br>
                        <table id="dataTables1" class="table table-bordered table-striped table-hover">
                            <!-- tampilan tabel header -->
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Hak Akses</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <!-- tampilan tabel body -->
                            <tbody>
                                <?php
                                $no = 0;
                                /// fungsi query untuk menampilkan data dari tabel user
                                $query = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id DESC")
                                    or die('Ada kesalahan pada query tampil data user: ' . mysqli_error($koneksi));

                                // tampilkan data
                                while ($data = mysqli_fetch_assoc($query)) {
                                    $no++;
                                ?>
                                    <!-- menampilkan isi tabel dari database ke tabel di aplikasi -->

                                    <tr>
                                        <td width="5%" class="text-center"><?php echo $no; ?></td>
                                        <td class="center"><?php echo $data['nama']; ?></td>
                                        <td class="center"><?php echo $data['username']; ?></td>
                                        <td class="center"><?php echo $data['level']; ?></td>
                                        <td class="text-center" width="150px">
                                            <div>
                                                <a href="index.php?page=edit_akun&& id=<?php echo $data['id']; ?>" class="btn btn-sm btn-success text-white">Edit</a>
                                                <a onclick="hapus_akun(<?php echo $data['id']; ?>)" class="btn btn-sm btn-danger text-white"><i class="fa fa-trash"></i></a>



                                                <!-- echo "      <a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-primary btn-sm' href='?module=form_user&form=edit&id=$data[id_user]'>
                                        <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                                        </a>";
                                    ?>
                                    <a data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm" href="modules/user/proses.php?act=delete&id=<?php echo $data['id_user']; ?>" onclick="return confirm('Anda yakin ingin menghapus user <?php echo $data['nama_user']; ?> ?');">
                                        <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
                                    </a> -->


                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                }
                                ?>
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
<!-- TAMBAH ALTERNATIF -->
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Akun</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="get" action="form/tambah_akun.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nama</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Username</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Password</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password" name="password" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Hak Akses</label>
                        <select id="inputState" class="form-control" placeholder="Hak Akses" name="level">
                            <option selected></option>
                            <option>Admin</option>
                            <option>Staff</option>
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
    function hapus_akun(data_akun) {
        //alert('ok');
        //window.location=("form/hapus_alt.php?id="+data_id);
        Swal.fire({
            title: "Apakah yakin ingin menghapus data akun?",
            //text: "Data Alternatif akan dihapus!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Hapus!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Akun sudah terhapus",
                    //text: "Your file has been deleted.",
                    icon: "success"
                });
                window.location = ("form/hapus_akun.php?id=" + data_akun);
            }
        });
    }
</script>