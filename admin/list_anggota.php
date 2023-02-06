<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Anggota Perpustakaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List Anggota</li>
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
                <h4>List Anggota</h4>
                <a href="?page=tambah_anggota" class="btn btn-outline-primary">
                  <i class="ion ion-person-add"></i> Tambah Anggota</a>
                <a href="../laporan/laporan_anggota_excel.php" target="blank" class="btn btn-outline-success">
                  <i class="fas fa-print"></i> Export to Excel</a>

              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Foto</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                    include "../koneksi/koneksi.php" ;
                    $no = 1;
                    $sql = $koneksi->query("SELECT * FROM tb_anggota_130");
                    while ($data = $sql->fetch_assoc()){
                    ?>

                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $data['nama'];?></td>
                      <td><?php echo $data['alamat'];?></td>
                      <td><?php echo $data['hp'];?></td>
                      <td><?php echo $data['foto'];?></td>
                      <td><?php echo $data['kelas'];?></td>
                      <td>
                        <a href="?page=edit_anggota&aksi=edit&id=<?php echo $data ['kode_anggota'];?>" 
                        class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                        <a href="?page=hapus_anggota&aksi=hapus&id=<?php echo $data ['kode_anggota'];?>" 
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