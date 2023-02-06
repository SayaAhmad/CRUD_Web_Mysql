<?php
include '../koneksi/koneksi.php';

if (isset($_POST ['edit'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $nama_file = $_FILES['foto']['name'];
    $source = $_FILES['foto']['tmp_name'];
    $folder = '../uploads/';
    $kelas = $_POST['kelas'];
    $kode_anggota = $_GET['kode_anggota'];
    
    $query= mysqli_query($koneksi, "SELECT * FROM tb_anggota_130 WHERE kode_anggota='$kode_anggota'");
    $data = mysqli_fetch_array($query);
    $cek = mysqli_num_rows($query);

    if ($cek > 0){
        $hapus_file_lama = unlink('../uploads/'.$data['foto']);
        if($hapus_file_lama){
            move_uploaded_file($source, $folder.$nama_file);
            $sql = $koneksi->query("UPDATE tb_anggota_130 SET nama='$nama', alamat='$alamat', 
            hp='$hp', foto='$nama_file', kelas='$kelas' WHERE kode_anggota='$kode_anggota'");
            echo "<script type='text/javascript'>
            alert ('Data Berhasil di Edit');
            window.location.href='home.php?page=list_anggota';
            </script>";
        }else{
            echo "<script type='text/javascript'>
            alert ('Data Gagal di Edit');
            window.location.href='home.php?page=list_anggota';
            </script>";
        }
    }else{
        echo "<script type='text/javascript'>
        alert ('Data Gagal di Edit');
        window.location.href='home.php?page=list_anggota';
        </script>";
    }
}

?>