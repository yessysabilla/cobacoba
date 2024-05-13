<?php
include("config.php");
if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $sekolah = $_POST['asal_sekolah'];

    $sql = "INSERT INTO anggota_perpus (nama, alamat, jenis_kelamin, agama, asal_sekolah)
    VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    if($query) {
        header('location: index.php?status=sukses');
    } else {
        header('location: index.php?status=gagal');
    }


} else {
    die("akses dilarang ...");
}
?>