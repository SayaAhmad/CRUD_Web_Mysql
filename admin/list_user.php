<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data User Perpustakaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List User</li>
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
                <h4>List User</h4>
                <a href="?page=tambah_user" class="btn btn-outline-primary">
                  <i class="ion ion-person-add"></i> Tambah User</a>
                <a href="../laporan/laporan_user_excel.php" target="blank" class="btn btn-outline-success">
                  <i class="fas fa-print"></i> Export to Excel</a>

              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                    include "../koneksi/koneksi.php" ;
                    $no = 1;
                    $sql = $koneksi->query("SELECT * FROM tb_user_130");
                    while ($data = $sql->fetch_assoc()){
                    ?>

                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $data['username'];?></td>
                      <td><?php echo $data['email'];?></td>
                      <td><?php echo $data['level'];?></td>
                      <td><?php echo $data['foto'];?></td>
                      <td>
                        <a href="?page=edit_user&aksi=edit&id=<?php echo $data ['kode_user'];?>" 
                        class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                        <a href="?page=hapus_user&aksi=hapus&id=<?php echo $data ['kode_user'];?>" 
                        class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                      </td>
                    </tr>

                    <?php
                    }
                    ?>

                  </tfoot>
                </table>
              </div>

              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>