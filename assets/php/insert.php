<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "absenharlah";

$nama = $_POST['Nama'];
$nohp = $_POST['NoHP'];
$angkatan = $_POST['Angkatan'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO absensi (Nama, NoHP, Angkatan)
VALUES ('$nama', '$nohp', '$angkatan')";

$hasil=mysqli_query($conn,$sql);
$conn->close();
?>
