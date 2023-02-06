<?php
include '../koneksi/koneksi.php';
$kode = $_GET['id'];
$sql = $koneksi->query("DELETE FROM tb_user_130 WHERE kode_user='$kode'");
if($sql){
?>
<script type='text/javascript'>
    alert ('Data Berhasil Dihapus');
    window.location.href='home.php?page=list_user';
</script>

<?php
}
?>