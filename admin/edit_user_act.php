<?php
include '../koneksi/koneksi.php';

if (isset($_POST ['edit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $nama_file = $_FILES['foto']['name'];
    $source = $_FILES['foto']['tmp_name'];
    $folder = '../uploads/';
    $level = $_POST['level'];
    $kode_user = $_GET['kode_user'];
    
    $query= mysqli_query($koneksi, "SELECT * FROM tb_user_130 WHERE kode_user='$kode_user'");
    $data = mysqli_fetch_array($query);
    $cek = mysqli_num_rows($query);

    if ($cek > 0){
        $hapus_file_lama = unlink('../uploads/'.$data['foto']);
        if($hapus_file_lama){
            move_uploaded_file($source, $folder.$nama_file);
            $sql = $koneksi->query("UPDATE tb_user_130 SET username='$username', password='$password', 
            email='$email', foto='$nama_file', level='$level' WHERE kode_user='$kode_user'");
            echo "<script type='text/javascript'>
            alert ('Data Berhasil di Edit');
            window.location.href='home.php?page=list_user';
            </script>";
        }else{
            echo "<script type='text/javascript'>
            alert ('Data Gagal di Edit');
            window.location.href='home.php?page=list_user';
            </script>";
        }
    }else{
        echo "<script type='text/javascript'>
        alert ('Data Gagal di Edit');
        window.location.href='home.php?page=list_user';
        </script>";
    }
}

?>