<?php

include '../koneksi/koneksi.php';

if (isset($_POST['simpan'])){

    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $nama_file =  $_FILES['foto']['name'];
    $source = $_FILES['foto']['tmp_name'];
    $folder = '../uploads/';
    $jmlh_buku = $_POST['jmlh_buku'];

    move_uploaded_file($source, $folder.$nama_file);
    
    $sql = $koneksi->query("INSERT INTO tb_buku_130 (judul, pengarang, penerbit, tahun_terbit, foto, jmlh_buku) 
    VALUES ('$judul','$pengarang','$penerbit','$tahun_terbit','$nama_file','$jmlh_buku')");

?>

<script type="text/javascript">
    alert ("Data Berhasil Disimpan");
    window.location.href="home.php?page=list_buku";
</script>

<?php

}

?>