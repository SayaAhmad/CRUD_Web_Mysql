<?php
include '../koneksi/koneksi.php';

header("Content-type: application/vnd-ms-ecxel");
header("Content-Disposition: attachment; filename=Laporan User.xls");
?>

<h2> Laporan Data User </h2>

<table border="1">

    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Email</th>
        <th>Level</th>
    </tr>

    <tr>
        <?php
        $no = 1;
        $sql = $koneksi->query("SELECT * FROM tb_user_130");
        while ($data = $sql->fetch_assoc()){
        ?>

        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $data['username'];?></td>
            <td><?php echo $data['email'];?></td>
            <td><?php echo $data['level'];?></td>
        </tr>

            <?php
            }
            ?>

</table>