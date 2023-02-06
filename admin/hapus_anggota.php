<?php
include '../koneksi/koneksi.php';
$kode = $_GET['id'];
$sql = $koneksi->query("DELETE FROM tb_anggota_130 WHERE kode_anggota='$kode'");
if($sql){
?>
<script type='text/javascript'>
    alert ('Data Berhasil Dihapus');
    window.location.href='home.php?page=list_anggota';
</script>

<?php
}
?>