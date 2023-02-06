<?php
session_start();
if(!isset($_SESSION['nama']))
{
  header('location:../index.php');
}
if(isset($_GET['keluar'])){
  session_destroy();
  header('location:../index.php');
}
?>


<?php
include '../template/topmenu.php';
include '../template/sidemenu.php';
include '../koneksi/koneksi.php';
?>


<?php
error_reporting(0);
switch ($_GET['page']) {
  default:
    include 'dashboard.php';
    break;

  case 'list_user';
    include 'list_user.php';
    break;
  break;

  case 'list_anggota';
    include 'list_anggota.php';
    break;
  break;

  case 'list_buku';
    include 'list_buku.php';
    break;
  break;

  case 'tambah_user';
    include 'tambah_user.php';
    break;
  break;

  case 'tambah_anggota';
    include 'tambah_anggota.php';
    break;
  break;

  case 'tambah_buku';
    include 'tambah_buku.php';
    break;
  break;

  case 'edit_user';
    include 'edit_user.php';
    break;
  break;

  case 'edit_anggota';
    include 'edit_anggota.php';
    break;
  break;

  case 'edit_buku';
    include 'edit_buku.php';
    break;
  break;

  case 'hapus_user';
    include 'hapus_user.php';
    break;
  break;

  case 'hapus_anggota';
    include 'hapus_anggota.php';
    break;
  break;

  case 'hapus_buku';
  include 'hapus_buku.php';
  break;

break;


}
?>


<?php
include '../template/footer.php'
?>