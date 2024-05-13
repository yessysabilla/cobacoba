<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpus";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Cek koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "UPDATE anggota_perpus SET nama='Charly Marley' WHERE id_anggota=3";

if (mysqli_query($conn, $sql)) {
  echo "Rekord berhasil diupdate";
} else {
  echo "Ada kesalahan update rekord: " . mysqli_error($conn);
}

mysqli_close($conn);
?>