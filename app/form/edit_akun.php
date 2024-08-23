<?php
if (isset($_GET['id'])) {
    // fungsi query untuk menampilkan data dari tabel user
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$_GET[id]'")
        or die('Ada kesalahan pada query tampil data user : ' . mysqli_error($koneksi));
    $view  = mysqli_fetch_assoc($query);
}
//$id    = $_GET['id'];
//$query = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
//$view  = mysqli_fetch_array($query);
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Manajemen Akun</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                    <li class="breadcrumb-item active">Manajemen Akun</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Akun</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="form/update_akun.php">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" autocomplete="off" placeholder="Nama" name="nama" value="<?php echo $view['nama']; ?>">
                            <input type="text" class="form-control" placeholder="Nama" name="id" value="<?php echo $view['id']; ?>" hidden>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" autocomplete="off" placeholder="Username" name="username" value="<?php echo $view['username']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" autocomplete="off" name="password" value="<?php echo $view['password']; ?>" placeholder="Kosongkan password jika tidak diubah">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label>Hak Akses</label>
                            <select class="form-control" name="level">
                                <option value="<?php echo $view['level']; ?>" selected><?php echo $view['level']; ?></option>
                                <option>Admin</option>
                                <option>Staff</option>
                            </select>
                        </div>
                    </div>
                    
                    <br>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan Data</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>