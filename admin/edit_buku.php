<?php
$kode = $_GET['id'];
$sql = $koneksi->query("SELECT * FROM tb_buku_130 WHERE kode_buku='$kode'");
$data = $sql->fetch_assoc();
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-">
          <div class="col-sm-6">
            <h1>Edit Buku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Buku</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Anggota</h3>
              </div>
              <!-- /.card-header -->


              <!-- form start -->
              <form method="POST" action="edit_buku_act.php?kode_buku=<?= $data['kode_buku'];?>" 
              enctype="multipart/form-data">
                <div class="card-body">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="judul" 
                    placeholder="Masukkan Judul" value="<?php echo $data['judul'];?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pengarang</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="pengarang" 
                    placeholder="Masukkan Pengarang" value="<?php echo $data['pengarang'];?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Penerbit</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="penerbit" 
                    placeholder="Masukkan Penerbit" value="<?php echo $data['penerbit'];?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Terbit</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="tahun_terbit" 
                    placeholder="Masukkan Tahun Terbit" value="<?php echo $data['tahun_terbit'];?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="foto" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                      </div>
                    </div>
                    <img src="../uploads/<?php echo $data['foto']; ?>" width="170" height="170"><br>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Buku</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="jmlh_buku" 
                    placeholder="Masukkan Jumlah Buku" value="<?php echo $data['jmlh_buku'];?>" required>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="batal" class="btn btn-danger">Batal</button>
                  <button type="submit" name="edit" class="btn btn-primary float-right">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>