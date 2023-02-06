<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Buku Perpustakaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List Buku</li>
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
                <h4>List Buku</h4>
                <a href="?page=tambah_buku" class="btn btn-outline-primary">
                  <i class="fas fa-book"></i> Tambah Buku</a>
                <a href="../laporan/laporan_buku_excel.php" target="blank" class="btn btn-outline-success">
                  <i class="fas fa-print"></i> Export to Excel</a>

              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th>Foto</th>
                    <th>Jumlah Buku</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                    include "../koneksi/koneksi.php" ;
                    $no = 1;
                    $sql = $koneksi->query("SELECT * FROM tb_buku_130");
                    while ($data = $sql->fetch_assoc()){
                    ?>

                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $data['judul'];?></td>
                      <td><?php echo $data['pengarang'];?></td>
                      <td><?php echo $data['penerbit'];?></td>
                      <td><?php echo $data['tahun_terbit'];?></td>
                      <td><?php echo $data['foto'];?></td>
                      <td><?php echo $data['jmlh_buku'];?></td>
                      <td>
                        <a href="?page=edit_buku&aksi=edit&id=<?php echo $data ['kode_buku'];?>" 
                        class="btn btn-success"><i class="fas fa-edit"> Edit</i></a>
                        <a href="?page=hapus_buku&aksi=hapus&id=<?php echo $data ['kode_buku'];?>" 
                        class="btn btn-danger"><i class="fas fa-trash"> Hapus</i></a>
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