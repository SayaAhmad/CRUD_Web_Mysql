<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-">
          <div class="col-sm-6">
            <h1>Tambah Buku Baru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Buku</li>
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
                <h3 class="card-title">Tambah Buku</h3>
              </div>
              <!-- /.card-header -->


              <!-- form start -->
              <form method="POST" action="tambah_buku_act.php?kode_buku=<?= $data['kode_buku'];?>" 
              enctype="multipart\form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" name="judul"class="form-control" id="exampleInputUsername" 
                    placeholder="Masukkan Judul" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pengarang</label>
                    <input type="text" name="pengarang"class="form-control" id="exampleInputUsername" 
                    placeholder="Masukkan Pengarang" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Penerbit</label>
                    <input type="text" name="penerbit"class="form-control" id="exampleInputUsername" 
                    placeholder="Masukkan Penerbit" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Terbit</label>
                    <input type="text" name="tahun_terbit"class="form-control" id="exampleInputUsername" 
                    placeholder="Masukkan Tahun Terbit" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="foto" class="custom-file-input" id="exampleInputFile" required>
                        <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Buku</label>
                    <input type="text" name="jmlh_buku" class="form-control" id="exampleInputUsername" 
                    placeholder="Masukkan Jumlah Buku" required>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="cancel" name="batal" class="btn btn-danger ">Cancel</button>
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