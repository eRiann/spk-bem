<?php
include '../config/koneksi.php';

$id    = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_mhs WHERE id='$id'");
$view  = mysqli_fetch_array($query);
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Alternatif</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                    <li class="breadcrumb-item active">Input</li>
                    <li class="breadcrumb-item active">Alternatif</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Alternatif</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="get" action="form/update_alt.php">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $view['nama']; ?>" required>
                            <input type="text" class="form-control" placeholder="Nama" name="id" value="<?php echo $view['id']; ?>" hidden>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label>Semester</label>
                            <select class="form-control" name="semester">
                                <option value="<?php echo $view['semester']; ?>" selected><?php echo $view['semester']; ?></option>
                                <option>3</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label>Program Studi</label>
                            <select class="form-control" name="prodi">
                            <option value="<?php echo $view['prodi']; ?>" selected><?php echo $view['prodi']; ?></option>
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
                    <br>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>