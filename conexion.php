<?php
$servername = "aws.connect.psdb.cloud";
$username = "lcry2avnbkc3qbr4qlux";
$password = "pscale_pw_1UzcNtcXUjikr4Ta0sFWB13klnUrTbcrKWLJ6ubn2qo";
$dbname = "sitio-web";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("La conexión ha fallado: " . mysqli_connect_error());
}
?>