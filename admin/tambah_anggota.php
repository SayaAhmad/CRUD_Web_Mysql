<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-">
          <div class="col-sm-6">
            <h1>Tambah Anggota</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Anggota</li>
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
                <h3 class="card-title">Tambah Anggota</h3>
              </div>
              <!-- /.card-header -->


              <!-- form start -->
              <form method="POST" action="tambah_anggota_act.php?kode_anggota=<?= $data['kode_anggota'];?>" 
              enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama"class="form-control" id="exampleInputUsername" 
                    placeholder="Masukkan Nama" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" name="alamat"class="form-control" id="exampleInputUsername" 
                    placeholder="Masukkan Alamat" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No HP</label>
                    <input type="text" name="hp"class="form-control" id="exampleInputUsername" 
                    placeholder="Masukkan No HP" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="foto" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kelas</label>
                    <input type="text" name="kelas"class="form-control" id="exampleInputUsername" 
                    placeholder="Masukkan Kelas" required>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="batal" class="btn btn-danger">Batal</button>
                  <button type="submit" name="simpan" class="btn btn-primary float-right">Simpan</button>
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