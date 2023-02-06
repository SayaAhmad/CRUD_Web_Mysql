<?php
include '../koneksi/koneksi.php';

header("Content-type: application/vnd-ms-ecxel");
header("Content-Disposition: attachment; filename=Laporan Anggota.xls");
?>

<h2> Laporan Data Anggota </h2>

<table border="1">

    <tr>
    <th>No.</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>No HP</th>
    <th>Kelas</th>
    </tr>

    <tr>
    <?php
                    $no = 1;
                    $sql = $koneksi->query("SELECT * FROM tb_anggota_130");
                    while ($data = $sql->fetch_assoc()){
                    ?>

                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $data['nama'];?></td>
                      <td><?php echo $data['alamat'];?></td>
                      <td><?php echo $data['hp'];?></td>
                      <td><?php echo $data['kelas'];?></td>

                    </tr>

                    <?php
                    }
                    ?>
</table>