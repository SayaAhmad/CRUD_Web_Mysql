<?php

include '../koneksi/koneksi.php';

if (isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $nama_file =  $_FILES['foto']['name'];
    $source = $_FILES['foto']['tmp_name'];
    $folder = '../uploads/';
    $kelas = $_POST['kelas'];

    move_uploaded_file($source, $folder.$nama_file);
    
    $sql = $koneksi->query("INSERT INTO tb_anggota_130 (nama, alamat, hp, foto, kelas) VALUES ('$nama',
    '$alamat','$hp','$nama_file','$kelas')");

?>

<script type="text/javascript">
    alert ("Data Berhasil Disimpan");
    window.location.href="home.php?page=list_anggota";
</script>

<?php

}

?>