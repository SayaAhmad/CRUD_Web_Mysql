<?php
include '../koneksi/koneksi.php';

header("Content-type: application/vnd-ms-ecxel");
header("Content-Disposition: attachment; filename=Laporan Buku.xls");
?>

<h2> Laporan Data Buku </h2>

<table border="1">

<tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th>Foto</th>
                    <th>Jumlah Buku</th>
                  </tr>

    <tr>
    <?php
                    $no = 1;
                    $sql = $koneksi->query("SELECT * FROM tb_buku_130");
                    while ($data = $sql->fetch_assoc()){
                    ?>

                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $data['judul'];?></td>
                      <td><?php echo $data['pengarang'];?></td>
                      <td><?php echo $data['penerbit'];?></td>
                      <td><?php echo $data['tahun_terbit'];?></td>
                      <td><?php echo $data['foto'];?></td>
                      <td><?php echo $data['jmlh_buku'];?></td>
                    
                    </tr>

                    <?php
                    }
                    ?>
</table>