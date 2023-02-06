<?php

include '../koneksi/koneksi.php';

if (isset($_POST['simpan'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $nama_file =  $_FILES['foto']['name'];
    $source = $_FILES['foto']['tmp_name'];
    $folder = '../uploads/';
    $level = $_POST['level'];

    move_uploaded_file($source, $folder.$nama_file);
    
    $sql = $koneksi->query("INSERT INTO tb_user_130 (username, password, email, foto, level) VALUES ('$username',
    '$password','$email','$nama_file','$level')");

?>

<script type="text/javascript">
    alert ("Data Berhasil Disimpan");
    window.location.href="home.php?page=list_user";
</script>

<?php

}

?>