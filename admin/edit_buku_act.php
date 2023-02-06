<?php
include '../koneksi/koneksi.php';

if (isset($_POST ['edit'])){

    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $nama_file = $_FILES['foto']['name'];
    $source = $_FILES['foto']['tmp_name'];
    $folder = '../uploads/';
    $jmlh_buku = $_POST['jmlh_buku'];
    $kode_buku = $_GET['kode_buku'];
    
    $query= mysqli_query($koneksi, "SELECT * FROM tb_buku_130 WHERE kode_buku='$kode_buku'");
    $data = mysqli_fetch_array($query);
    $cek = mysqli_num_rows($query);

    if ($cek > 0){
        $hapus_file_lama = unlink('../uploads/'.$data['foto']);
        if($hapus_file_lama){
            move_uploaded_file($source, $folder.$nama_file);
            $sql = $koneksi->query("UPDATE tb_buku_130 SET judul='$judul', pengarang='$pengarang', 
            penerbit='$penerbit',tahun_terbit='$tahun_terbit', foto='$nama_file', jmlh_buku='$jmlh_buku' 
            WHERE kode_buku='$kode_buku'");
            echo "<script type='text/javascript'>
            alert ('Data Berhasil di Edit');
            window.location.href='home.php?page=list_buku';
            </script>";
        }else{
            echo "<script type='text/javascript'>
            alert ('Data Gagal di Edit');
            window.location.href='home.php?page=list_buku';
            </script>";
        }
    }else{
        echo "<script type='text/javascript'>
        alert ('Data Gagal di Edit');
        window.location.href='home.php?page=list_buku';
        </script>";
    }
}

?>