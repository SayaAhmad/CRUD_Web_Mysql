<?php
$kode = $_GET['id'];
$sql = $koneksi->query("SELECT * FROM tb_user_130 WHERE kode_user='$kode'");
$data = $sql->fetch_assoc();
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-">
          <div class="col-sm-6">
            <h1>Edit User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit User</li>
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
                <h3 class="card-title">Edit User</h3>
              </div>
              <!-- /.card-header -->


              <!-- form start -->
              <form method="POST" action="edit_user_act.php?kode_user=<?= $data['kode_user'];?>" 
              enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username"class="form-control" id="exampleInputUsername" 
                    placeholder="Masukkan Username" value="<?php echo $data['username']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="password" 
                    placeholder="Masukkan Password" value="<?php echo $data['password'];?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail" 
                    placeholder="Masukkan Email" value="<?php echo $data['email'];?>" required>
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
                        <label>Level</label>
                        <select class="form-control" name="level">
                          <option value="<?php echo $data['level'];?>">-<?php echo $data ['level'];?>-</option>
                          <option value="admin">Admin</option>
                          <option value="user">Pengguna</option>
                        </select>
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