<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php
                    error_reporting(0);
                    include "koneksi.php";
                    $ag = mysqli_query($koneksi, "SELECT * FROM tb_user_130");
                    $d = mysqli_num_rows($ag);
                    echo $d;
                  ?>
                </h3>
                <p>User</p>
              </div>
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
              <a href="?page=list_user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                  <?php
                    error_reporting(0);
                    include "koneksi.php";
                    $ag = mysqli_query($koneksi, "SELECT * FROM tb_anggota_130");
                    $d = mysqli_num_rows($ag);
                    echo $d;
                  ?>
                </h3>
                <p>Anggota</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="?page=list_anggota" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                  <?php
                    error_reporting(0);
                    include "koneksi.php";
                    $ag = mysqli_query($koneksi, "SELECT * FROM tb_buku_130");
                    $d = mysqli_num_rows($ag);
                    echo $d;
                  ?>
                </h3>
                <p>Buku</p>
              </div>
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
              <a href="?page=list_buku" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>1</h3>
                <p>Pengunjung</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>